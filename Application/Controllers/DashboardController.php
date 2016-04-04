<?php
/**
 * Project:  VFP Business Series
 * Copyright: 2014. VFP Business Solutions, LLC
 */

namespace Dandelion\MVC\Application\Controllers;

use Dandelion\MVC\Application\Tools\Session;
use Dandelion\MVC\Core\Request;
use Dandelion\Tools\Filter\IFilterNode;
use Dandelion\TreeCreator;
use Dandelion\Tools\Filter\BlockExpressionNode;
use Dandelion\MVC\Application\Tools;
use Dandelion\Tools\CodeGenerator\SqlPredicateGenerator;
use Dandelion\Diana\BootstrapPager;

define('FILTER_TREE_SUFFIX', '_filterTree');
define('ITEM_PER_PAGE_SUFFIX', '_itemperpages');
define('PAGE_SUFFIX', '_page');
define('ORDERBY_SUFFIX', '_orderby');
define('ORDER_SUFFIX', '_order');

define('DEFAULT_SESSION_FILTER_ID', 'SESSION_FILTER');

/**
 * Class DashboardController
 * @package Dandelion\MVC\Application\Controllers
 */
abstract class DashboardController extends DatActionsController
{
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

    protected function PreController(Request $request)
    {
        parent::PreController($request);
        TreeCreator::Init();
    }

    /**
     * @param string $companySuffix
     * @return array
     */
    public abstract function GetFieldsDefinition($companySuffix);

    /**
     * @param string $companySuffix
     * @return string
     */
    public abstract function getDashboardTable($companySuffix);

    /**
     * @param string $predicate
     * @return string
     */
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

    /**
     * @return IFilterNode BlockExpressionNode
     */
    public function getDefaultFilterTree(){
        return new BlockExpressionNode();
    }

    /**
     * @return string
     */
    public function getDefaultOrderByField(){
        $companysuffix = $this->DatUnitOfWork->CompanySuffix;
        $fieldsDefinition = $this->GetFieldsDefinition($companysuffix);
        $arrayField = array_keys($fieldsDefinition);
        return $arrayField[0];
    }

    /**
     * @return string
     */
    public function getDefaultOrder(){
        return "ASC";
    }

    /**
     * @return int
     */
    public function getDefaultPage(){
        return 1;
    }

    /**
     * @param Request $request
     * @return string identify the number of item on one page
     */
    public function getDefaultItemPerPage($request=null){
        if (is_null($request)){
            return "50";
        }
        return (string) $request->Application->getDefaultPagerItermsPerPage();
    }

    /**
     * @return IFilterNode
     */
    public function getSessionFilterTree(){
        $defaultJsonTree = json_encode(TreeCreator::treeToArray($this->getDefaultFilterTree()));
        $josnFiletrTree = Session::getSessionValue($this->getSessionId(FILTER_TREE_SUFFIX), $defaultJsonTree);
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
        $_SESSION[$this->getSessionId(FILTER_TREE_SUFFIX)] = $filterTree;
        return $this->getSessionFilterTree();
    }

    /**
     * @return string
     */
    public function getDefaultFilterId(){
        return DEFAULT_SESSION_FILTER_ID;
    }

    public function getSessionId($suffixId){
        return \Dandelion\MVC\Application\Tools\getClassName(get_class($this)) . $suffixId;
    }
}