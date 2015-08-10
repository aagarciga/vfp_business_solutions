<?php

/**
 * Project:  VFP Business Series
 * Copyright: 2014. VFP Business Solutions, LLC
 */

namespace Dandelion\MVC\Application\Models\Repositories;

use Dandelion\Diana\Interfaces\IRepository;
use Dandelion\MVC\Application\Models\Entities\GLHST;

class GLHSTRepository extends VFPRepository implements IRepository {

    /**
     * @return array of all GLHST objects from DB
     */
    public function GetAll() {
        $tableName = $this->entityName . $this->companySuffix;
        $sqlString = "SELECT * FROM $tableName";
        $query = $this->dbDriver->GetQuery();
        $queryResult = $query->Execute($sqlString);
        $result = array();

        foreach ($queryResult as $row) {
            $result [] = new GLHST(trim($row->AMOUNT), trim($row->DISTDATE), trim($row->ACCOUNT), trim($row->PERIOD), trim($row->YEAR), trim($row->BASEID), trim($row->QBLISTID));
        }

        return $result;
    }

    /**
     * @param string $predicate SQL Query Where clause
     * @return \Dandelion\MVC\Application\Models\Entities\GLHST
     */
    public function Get($predicate) {
        $tableName = $this->entityName . $this->companySuffix;
        $sqlString = "SELECT * FROM $tableName";
        $sqlString .= ' ' . $predicate;
        $query = $this->dbDriver->GetQuery();
        $queryResult = $query->Execute($sqlString);
        $result = array();

        foreach ($queryResult as $row) {
            $result [] = new GLHST(trim($row->AMOUNT), trim($row->DISTDATE), trim($row->ACCOUNT), trim($row->PERIOD), trim($row->YEAR), trim($row->BASEID), trim($row->QBLISTID));
        }

        return $result;
    }

    public function GetCashValue(){
        $tableName = $this->entityName . $this->companySuffix;
        $sqlString = "SELECT SUM(AMOUNT) AS VALUE FROM $tableName";
//        $sqlString .= ' WHERE OPENBAL > 0' ;
        $query = $this->dbDriver->GetQuery();
        error_log($sqlString);
        $queryResult = $query->Execute($sqlString);
        return $queryResult[0];
    }

    public function GetCashValueWhere($year, $currentYear, $currentPeriod){
        $tableName = $this->entityName . $this->companySuffix;
        $glmastTableName = 'GLMAST' . $this->companySuffix;

//        if ($currentYear > $year) {
            $predicate = "(CONVERT($tableName.YEAR, SQL_INTEGER) >= $year AND CONVERT($tableName.YEAR, SQL_INTEGER) <= $currentYear) AND $glmastTableName.TYPEACCT = '10'";
//            $predicate .= " AND ($tableName.PERIOD <= $currentPeriod AND CONVERT($tableName.YEAR, SQL_INTEGER) = $currentYear)";
//            $predicate .= " OR ($tableName.PERIOD = $currentPeriod AND CONVERT($tableName.YEAR, SQL_INTEGER) = $year)";
//        }
//        else {
//            $predicate = "CONVERT($tableName.YEAR, SQL_INTEGER) <= $currentYear AND $glmastTableName.TYPEACCT = '10'";
//            $predicate .= " AND $tableName.PERIOD <= $currentPeriod";
//        }

        $sqlString = "SELECT SUM($tableName.AMOUNT) AS VALUE FROM $tableName INNER JOIN $glmastTableName ON $tableName.ACCOUNT = $glmastTableName.ACCOUNT";
        $sqlString .= ' WHERE ' . $predicate;
        $query = $this->dbDriver->GetQuery();
//        error_log($sqlString);
        $queryResult = $query->Execute($sqlString);
        return $queryResult[0];
    }

    public function Add($entity) {
        // TODO: Implement Add() method.
    }

    public function Update($entity) {
        // TODO: Implement Update() method.
    }

    public function Delete($entity) {
        // TODO: Implement Delete() method.
    }

}
