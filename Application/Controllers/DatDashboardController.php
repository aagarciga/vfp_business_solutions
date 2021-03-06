<?php
/**
 * Project:  VFP Business Series
 * Copyright: 2014. VFP Business Solutions, LLC
 */

namespace Dandelion\MVC\Application\Controllers;

use Dandelion\MVC\Core\Nomenclatures\ApplicationState;
use Dandelion\MVC\Core\Exceptions;
use Dandelion\MVC\Core\Request;
use Dandelion\Diana\BootstrapPager;

use Dandelion\Tools\CodeGenerator\SqlPredicateGenerator;
use Dandelion\TreeCreator;
use Dandelion\Tools\Filter\IFilterNode;

class DatDashboardController extends DatActionsController
{
    /**
     * @param $viewModelName
     * @param $filterTree
     * @param $orderby
     * @param string $order
     * @param int $itemsPerPage
     * @param int $middleRange
     * @param int $showPagerControlsIfMoreThan
     * @return \Dandelion\MVC\Application\Controllers\BootstrapPager
     * @throws \Dandelion\MVC\Core\Exceptions\ClassNotFoundException
     */
    public function GetPager($viewModelName, $filterTree, $orderby, $order = "ASC",
                             $itemsPerPage = 10, $middleRange = 5, $showPagerControlsIfMoreThan = 10)
    {
        $predicate = '';
        if ($filterTree instanceof IFilterNode){
            $sqlCodeGenerator = new SqlPredicateGenerator();
            $filterTree->generateSqlCode($sqlCodeGenerator);
            $predicate = $this->getComposedFilter($sqlCodeGenerator->getCode());
        }

        $this->checkForViewModel($viewModelName);

        $companyID = $this->DatUnitOfWork->CompanySuffix;
        $sqlTableSnippet = $viewModelName::getTableFor($companyID);
        $sqlSelectSnippet = $this->buildSQLSelectSnippet($viewModelName::getFieldsDefinitionFor($companyID));

        $sqlString = "SELECT "
            . $sqlSelectSnippet
            . " FROM $sqlTableSnippet "
            . "$predicate"
            . " ORDER BY $orderby $order";
        return new BootstrapPager($this->DatUnitOfWork->DBDriver,
            $sqlString, $itemsPerPage, $middleRange, $showPagerControlsIfMoreThan);
    }

    public function GetPagerBy($field, $value ,$viewModelName, $predicate, $orderby, $order = "ASC",
                             $itemsPerPage = 10, $middleRange = 5, $showPagerControlsIfMoreThan = 10)
    {
        $this->checkForViewModel($viewModelName);

        $companyID = $this->DatUnitOfWork->CompanySuffix;
        $sqlTableSnippet = $viewModelName::getTableFor($companyID);
        $sqlSelectSnippet = $this->buildSQLSelectSnippet($viewModelName::getFieldsDefinitionFor($companyID));
        $value = strtolower($value);
        if ($predicate === ''){
            $predicate = " WHERE LOWER([$field]) = '$value'";
        } else{
            $predicate . " AND LOWER([$field]) = '$value'";
        }

        $sqlString = "SELECT "
            . $sqlSelectSnippet
            . " FROM $sqlTableSnippet "
            . "$predicate"
            . " ORDER BY $orderby $order";
        error_log($sqlString);
        return new BootstrapPager($this->DatUnitOfWork->DBDriver,
            $sqlString, $itemsPerPage, $middleRange, $showPagerControlsIfMoreThan);
    }

    /**
     * @param array $fieldsDefinition definition of the field "field => type"
     * @return string SQL sentence that represent the fields from the table
     */
    protected function buildSQLSelectSnippet($fieldsDefinition)
    {
        $sqlSelectResult = "";
        foreach ($fieldsDefinition as $field => $components) {
            $currentField = '[' . $field . ']';

            if (array_key_exists('table', $components)) {
                $currentTable = $components['table'];
                $currentField = '[' . $currentTable . '].' . $currentField . ' AS ' . $currentField;
            }
            $sqlSelectResult .= $currentField . ", ";
        }
        return substr($sqlSelectResult, 0, strlen($sqlSelectResult) - 2);
    }

    /**
     * Check if view model exist
     * @param $viewModelName
     * @throws \Dandelion\MVC\Core\Exceptions\ClassNotFoundException
     */
    protected function checkForViewModel($viewModelName){
        if (!class_exists($viewModelName)) {
            $exception = new Exceptions\ClassNotFoundException($viewModelName);
            if ($this->Application->getState() == ApplicationState::Development()) {
                throw $exception;
            } else {
                header("Status: 404 Not Found");
            }
        }
    }

    /**
     * Returns default page number
     * @return int
     */
    public function getDefaultPage(){
        return 1;
    }

    /**
     * Returns Firts Field from ViewModel Field Definition
     * @param $viewModelName
     * @return mixed
     * @throws \Dandelion\MVC\Core\Exceptions\ClassNotFoundException
     */
    public function getDefaultOrderBy($viewModelName)
    {
        $this->checkForViewModel($viewModelName);

        $companyID = $this->DatUnitOfWork->CompanySuffix;
        $fieldsDefinition = $viewModelName::getFieldsDefinitionFor($companyID);
        $arrayField = array_keys($fieldsDefinition);
        return $arrayField[0];
    }

    /**
     * @return string
     */
    public function getDefaultOrder(){
        return "ASC";
    }

    // TODO: Clean and refactor. (Preguntar a victor para que es esto?)
    /**
     * by Victor.
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
}