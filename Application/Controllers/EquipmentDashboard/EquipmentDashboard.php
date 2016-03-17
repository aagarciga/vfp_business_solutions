<?php
/**
 * User: Victor
 * Date: 12/01/2016
 * Time: 14:26
 * Project:  VFP Business Series
 * Copyright: 2014. VFP Business Solutions, LLC
 */

namespace Dandelion\MVC\Application\Controllers;

define('EQUIPMENT_FILTER_TREE', 'EquipmentDashboard_filterTree');
define('EQUIPMENT_ITEM_PER_PAGE', 'EquipmentDashboard_itemperpages');
define('EQUIPMENT_PAGE', 'EquipmentDashboard_page');
define('EQUIPMENT_ORDERBY', 'EquipmentDashboard_orderby');
define('EQUIPMENT_ORDER', 'EquipmentDashboard_order');

define('DEFAULT_SESSION_FILTER_ID', 'SESSION_FILTER');

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
 * Class EquipmentDashboard
 * @package Dandelion\MVC\Application\Controllers
 */
class EquipmentDashboard extends DatActionsController
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
        $swequipTable = "SWEQUIP$companySuffix";
        $icparmTable = "ICPARM$companySuffix";
        return array(
            'ordnum' => array('type' => TYPE_CHAR, 'displayName' => 'Work Order', 'table' => $swequipTable),
            'equipid' => array('type' => TYPE_CHAR, 'displayName' => 'Equipment Id', 'table' => $swequipTable),
            'itemno' => array('type' => TYPE_CHAR, 'displayName' => 'Part No', 'table' => $swequipTable),
            'descrip' => array('type' => TYPE_CHAR, 'displayName' => 'Item Description', 'table' => $swequipTable),
            'make' => array('type' => TYPE_CHAR, 'displayName' => 'Brand', 'table' => $swequipTable),
            'model' => array('type' => TYPE_CHAR, 'displayName' => 'Model', 'table' => $swequipTable),
            'serialno' => array('type' => TYPE_CHAR, 'displayName' => 'Serial No', 'table' => $swequipTable),
            'Voltage' => array('type' => TYPE_CHAR, 'displayName' => 'Voltage', 'table' => $swequipTable),
            'EquipType' => array('type' => TYPE_CHAR, 'displayName' => 'Type', 'table' => $swequipTable),
            'installdte' => array('type' => TYPE_DATE, 'displayName' => 'Date Out', 'table' => $swequipTable),
            'expdtein' => array('type' => TYPE_DATE, 'displayName' => 'Expected date In', 'table' => $swequipTable),
            'daterec' => array('type' => TYPE_DATE, 'displayName' => 'Date Actually Received', 'table' => $swequipTable),
            'status' => array('type' => TYPE_DICTIONARY, 'displayName' => 'Status', 'values' => array(
                'Available' => 'Available',
                'Assigned' => 'Assigned',
                'Broken' => 'Broken',
                'Lost' => 'Lost',
                'Received' => 'Received'
            ), 'table' => $swequipTable),
            'notes' => array('type' => TYPE_MEMO, 'displayName' => 'Notes', 'table' => $swequipTable),
            'picture_fi' => array('type' => TYPE_HREF, 'displayName' => 'Image', 'table' => $icparmTable),
            'assettag' => array('type' => TYPE_CHAR, 'displayName' => 'Asset Tag', 'table' => $swequipTable),
            'Locno' => array('type' => TYPE_CHAR, 'displayName' => 'Locno', 'table' => $swequipTable)
        );
    }

    public function getDashboardTable($companySuffix)
    {
        $swequipTable = "SWEQUIP$companySuffix";
        $icparmTable = "ICPARM$companySuffix";
        return "($swequipTable INNER JOIN $icparmTable ON $swequipTable.itemno = $icparmTable.itemno)";
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
        return 0;
    }

    public function getDefaultItemPerPage($request=null){
        if (is_null($request)){
            return 50;
        }
        return (string) $request->Application->getDefaultPagerItermsPerPage();
    }

    public function getSessionFilterTree(){
        $defaultJsonTree = json_encode(TreeCreator::treeToArray($this->getDefaultFilterTree()));
        $josnFiletrTree = self::getSessionValue(EQUIPMENT_FILTER_TREE, $defaultJsonTree);
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
        $_SESSION[EQUIPMENT_FILTER_TREE] = $filterTree;
        return $this->getSessionFilterTree();
    }

    private static function getSessionValue($key, $defaultValue){
        return isset($_SESSION[$key]) ? $_SESSION[$key] : $defaultValue;
    }

    public function getDefaultFilterId(){
        return DEFAULT_SESSION_FILTER_ID;
    }
}