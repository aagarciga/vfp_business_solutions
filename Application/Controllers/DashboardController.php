<?php
/**
 * User: Victor
 * Date: 24/03/2016
 * Time: 18:06
 */

namespace Dandelion\MVC\Application\Controllers;

use Dandelion\MVC\Application\Tools\Session;
use Dandelion\MVC\Core\Request;
use Dandelion\Tools\Filter\IFilterNode;

/**
 * Class DashboardController
 * @package Dandelion\MVC\Application\Controllers
 */
abstract class DashboardController extends DatActionsController
{
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
        $josnFiletrTree = Session::getSessionValue(HISTORY_FILTER_TREE, $defaultJsonTree);
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

    /**
     * @return string
     */
    public function getDefaultFilterId(){
        return DEFAULT_SESSION_FILTER_ID;
    }
}