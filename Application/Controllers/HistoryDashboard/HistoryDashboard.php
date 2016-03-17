<?php
/**
 * User: Victor
 * Date: 12/01/2016
 * Time: 14:26
 * Project:  VFP Business Series
 * Copyright: 2014. VFP Business Solutions, LLC
 */

namespace Dandelion\MVC\Application\Controllers;

define('HISTORY_FILTER_TREE', 'HistoryDashboard_filterTree');
define('HISTORY_ITEM_PER_PAGE', 'HistoryDashboard_itemperpages');
define('HISTORY_PAGE', 'HistoryDashboard_page');
define('HISTORY_ORDERBY', 'HistoryDashboard_orderby');
define('HISTORY_ORDER', 'HistoryDashboard_order');

define('DEFAULT_SESSION_FILTER_ID', 'SESSION_FILTER');

define('EQUIP_ID', 'equipid');

use Dandelion\MVC\Application\Controllers\DatActionsController;
use Dandelion\Diana\BootstrapPager;
use Dandelion\MVC\Core\Request;
use Dandelion\MVC\Application\Tools;
use Dandelion\MVC\Application\Tools\BootstrapPagerTest;
use Dandelion\Tools\CodeGenerator\SqlPredicateGenerator;
use Dandelion\Tools\Filter\BlockExpressionNode;
use Dandelion\Tools\Filter\IFilterNode;
use Dandelion\TreeCreator;

/**
 * Created by: Victor
 * Class HistoryDashboard
 * @package Dandelion\MVC\Application\Controllers
 */
class HistoryDashboard extends DatActionsController
{
    protected function PreController(Request $request)
    {
        parent::PreController($request);
        TreeCreator::Init();
    }


    /**
     *
     * @param IFilterNode $filterTree
     * @param int $itemsPerpage
     * @param int $middleRange
     * @param int $showPagerControlsIfMoreThan
     * @param string $orderby
     * @param string $order (ASC | DESC)
     * @return \Dandelion\Diana\BootstrapPager
     *
     * @internal Because in the feature this will be an INNER JOIN
     */
    public function GetPager($filterTree, $itemsPerpage = 50, $middleRange = 5,
                             $showPagerControlsIfMoreThan = 10, $orderby = "ordnum", $order = "ASC")
    {
        $sqlCodeGenerator = new SqlPredicateGenerator();
        $filterTree->generateSqlCode($sqlCodeGenerator);

        //TODO: Me quede aqui
        $predicate = $this->getComposedFilter($sqlCodeGenerator->getCode());

        $companysuffix = $this->DatUnitOfWork->CompanySuffix;
        $table = $this->getDashboardTable($companysuffix);
        $selectField = Tools\fetchSelectSQLFields($this->GetFieldsDefinition($companysuffix));

        $sqlString = "SELECT "
            . $selectField
            . " FROM $table "
            . "$predicate"
            . " ORDER BY $orderby $order";

        return new BootstrapPager($this->DatUnitOfWork->DBDriver,
            $sqlString, $itemsPerpage, $middleRange, $showPagerControlsIfMoreThan);
    }

    public function GetFieldsDefinition($companySuffix)
    {
        $swequipdTable = "SWEQUIPD" . $companySuffix;
        return array(
            'equipid' => array('type' => TYPE_CHAR, 'displayName' => 'Equipment Id', 'table' => $swequipdTable),
            'ordnum' => array('type' => TYPE_CHAR, 'displayName' => 'Order No.', 'table' => $swequipdTable),
            'inspectno' => array('type' => TYPE_CHAR, 'displayName' => 'Inpection No.', 'table' => $swequipdTable),
            'installdte' => array('type' => TYPE_DATE, 'displayName' => 'Date Out', 'table' => $swequipdTable),
            'expdtein' => array('type' => TYPE_DATE, 'displayName' => 'Expected date In', 'table' => $swequipdTable),
            'daterec' => array('type' => TYPE_DATE, 'displayName' => 'Date Actually Received', 'table' => $swequipdTable),
        );
    }

    public function getDashboardTable($companySuffix)
    {
        return "SWEQUIPD" . $companySuffix;
    }

    protected function getComposedFilter($predicate){
        if ($predicate !== "") {
            $predicate = "WHERE " . $predicate;
        }

        if ($this->includeFilter !== ""){
            if ($predicate !== ""){
                $predicate .= "AND (" . $this->includeFilter . ")";
            }
            else{
                $predicate = "WHERE " . $this->includeFilter;
            }
        }
        return $predicate;
    }

    public function getDefaultFilterTree(){
        return new BlockExpressionNode();
    }

    public function getDefaultOrderByField(){
        $companysuffix = $this->DatUnitOfWork->CompanySuffix;
        $fieldsDefinition = $this->GetFieldsDefinition($companysuffix);
        $arrayField = array_keys($fieldsDefinition);
        return $arrayField[0];
    }

    public function getDefaultOrder(){
        return "ASC";
    }

    public function getDefaultPage(){
        return 1;
    }

    public function getDefaultItemPerPage($request=null){
        if (is_null($request)){
            return 50;
        }
        return (string) $request->Application->getDefaultPagerItermsPerPage();
    }

    public function getSessionFilterTree(){
        $defaultJsonTree = json_encode(TreeCreator::treeToArray($this->getDefaultFilterTree()));
        $josnFiletrTree = self::getSessionValue(HISTORY_FILTER_TREE, $defaultJsonTree);
        return TreeCreator::createTree(json_decode($josnFiletrTree));
    }

    /**
     * @param string | IFilterNode $filterTree
     * @return IFilterNode
     */
    public function setSessionFilterTree($filterTree){
        if (!is_string($filterTree)){
            $arrayFilterTree = TreeCreator::treeToArray($filterTree);
            $filterTree = json_encode($arrayFilterTree);
        }
        $_SESSION[HISTORY_FILTER_TREE] = $filterTree;
        return $this->getSessionFilterTree();
    }

    private static function getSessionValue($key, $defaultValue){
        return isset($_SESSION[$key]) ? $_SESSION[$key] : $defaultValue;
    }

    public function getDefaultFilterId(){
        return DEFAULT_SESSION_FILTER_ID;
    }

    public function getFilterIncludeEquipId($equipid, $equipidValue, $filterTree, $fieldsDefinition){
        $tableFromEquipId = $fieldsDefinition[$equipid][TABLE_KEY];
        $diplayNameEquipId = $fieldsDefinition[$equipid][DISPLAY_NAME_KEY];
        if ($equipidValue !== '')
        {
            $fieldNode = new FieldNode();
            $fieldNode->setValue([$equipid,$tableFromEquipId, $diplayNameEquipId]);

            $valueNode = new StringNode();
            $valueNode->setValue($equipidValue);

            $andFieldValue = new AndNode();
            $andFieldValue->addChild($fieldNode);
            $andFieldValue->addChild($valueNode);

            $andNode = new AndNode();
            $andNode->addChild($filterTree);
            $andNode->addChild($andFieldValue);

            return $andNode;
        }
        return $filterTree;
    }
}