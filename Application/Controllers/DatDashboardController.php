<?php
/**
 * Project:  VFP Business Series
 * Copyright: 2014. VFP Business Solutions, LLC
 */

namespace Dandelion\MVC\Application\Controllers;

use Dandelion\MVC\Core\Nomenclatures\ApplicationState;
use Dandelion\MVC\Core\Exceptions;

class DatDashboardController extends DatActionsController
{
    /**
     * @param array $fieldDefinition
     * @param string $predicate // TODO: Change for $filterTree using Victor's Filtering
     * @param $orderby
     * @param string $order (ASC | DESC)
     * @param int $itemsPerpage
     * @param int $middleRange
     * @param int $showPagerControlsIfMoreThan
     */
    public function GetPager($viewModelName, $predicate, $orderby, $order = "ASC",
                             $itemsPerpage = 10, $middleRange = 5, $showPagerControlsIfMoreThan = 10)
    {
        if(!class_exists($viewModelName)){
            $exception = new Exceptions\ClassNotFoundException($viewModelName);
            error_log($exception->getMessage());
            if ($this->Application->getState() == ApplicationState::Development()) {
                throw $exception;
            } else {
                header("Status: 404 Not Found");
            }
        }

        $companyID = $this->DatUnitOfWork->CompanySuffix;
        $sqlTableSnippet = $viewModelName::getTableFor($companyID);
        $sqlSelectSnippet = $this->buildSQLSelectSnippet($viewModelName::getFieldDefinitionFor($companyID));

        $sqlString = "SELECT "
            . $sqlSelectSnippet
            . " FROM $sqlTableSnippet "
            . "$predicate"
            . " ORDER BY $orderby $order";

        return new BootstrapPager($this->DatUnitOfWork->DBDriver,
            $sqlString, $itemsPerpage, $middleRange, $showPagerControlsIfMoreThan);
    }

    /**
     * @param array $fieldsDefinition definition of the field "field => type"
     * @return string SQL sentence that represent the fields from the table
     */
    protected function buildSQLSelectSnippet($fieldsDefinition){
        $sqlSelectResult = "";
        foreach ($fieldsDefinition as $field => $components){
            $currentField = '['.$field.']';

            if(array_key_exists('table', $components)){
                $currentTable = $components['table'];
                $currentField =  '['.$currentTable.'].' . $currentField . ' AS ' . $currentField;
            }
            $sqlSelectResult .= $currentField . ", ";
        }
        return substr($sqlSelectResult, 0, strlen($sqlSelectResult) - 2);
    }
}