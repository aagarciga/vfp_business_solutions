<?php

/**
 * Project:  VFP Business Series
 * Copyright: 2014. VFP Business Solutions, LLC
 */

namespace Dandelion\MVC\Application\Models\Repositories;

use Dandelion\Diana\Interfaces\IRepository;
use Dandelion\MVC\Application\Models\Entities\SOEDISTATUS;

class SOEDISTATUSRepository extends VFPRepository implements IRepository {

    /**
     * @return array of all SOEDISTATUS objects from DB
     */
    public function GetAll() {
        $tableName = $this->entityName . $this->companySuffix;
        $sqlString = "SELECT * FROM $tableName ORDER BY DESCRIP ASC";
        $query = $this->dbDriver->GetQuery();
        $queryResult = $query->Execute($sqlString);
        $result = array();

        foreach ($queryResult as $row) {
            $result [] = new SOEDISTATUS(trim($row->EDISTATID), trim($row->DESCRIP), trim($row->SOTYPECODE), trim($row->QBLISTID), trim($row->STATUSEDIN), trim($row->NFLG0));
        }

        return $result;
    }

    /**
     * @param string $predicate SQL Query Where clause
     * @return \Dandelion\MVC\Application\Models\Entities\SOEDISTATUS
     */
    public function Get($predicate) {
        $tableName = $this->entityName . $this->companySuffix;
        $sqlString = "SELECT * FROM $tableName";
        $sqlString .= ' ' . $predicate;
        $query = $this->dbDriver->GetQuery();
        $queryResult = $query->Execute($sqlString);
        $result = array();

        foreach ($queryResult as $row) {
            $result [] = new SOEDISTATUS(trim($row->EDISTATID), trim($row->DESCRIP), trim($row->SOTYPECODE), trim($row->QBLISTID), trim($row->STATUSEDIN), trim($row->NFLG0));
        }

        return $result;
    }
    
    /**
     * @return array of all Material Status objects from SOEDISTATUS
     */
    public function GetMaterialStatus() {
        $tableName = $this->entityName . $this->companySuffix;
        $sqlString = "SELECT * FROM $tableName";
        $sqlString .= " WHERE STATUSEDIN = 'M' ORDER BY DESCRIP ASC";
        $query = $this->dbDriver->GetQuery();
        $queryResult = $query->Execute($sqlString);
        $result = array();

        foreach ($queryResult as $row) {
            $result [] = new SOEDISTATUS(trim($row->EDISTATID), trim($row->DESCRIP), trim($row->SOTYPECODE), trim($row->QBLISTID), trim($row->STATUSEDIN), trim($row->NFLG0));
        }

        return $result;
    }
    
    /**
     * 
     * @param string $id EDISTATID
     * @return SOEDISTATUS. Null otherwise
     */
    public function GetMaterialStatusById($id) {
        $tableName = $this->entityName . $this->companySuffix;
        $sqlString = "SELECT * FROM $tableName";
        $sqlString .= " WHERE EDISTATID = '$id' AND STATUSEDIN = 'M'";
        $query = $this->dbDriver->GetQuery();
        $queryResult = $query->Execute($sqlString);
        $result = null;
        
        if (count($queryResult)) {
            $row = $queryResult[0];
            $result = new SOEDISTATUS(trim($row->EDISTATID), trim($row->DESCRIP), trim($row->SOTYPECODE), trim($row->QBLISTID), trim($row->STATUSEDIN), trim($row->NFLG0));
        }
        return $result;
    }
    
     /**
     * @return array of all Job Status objects from SOEDISTATUS
     */
    public function GetJobStatus() {
        $tableName = $this->entityName . $this->companySuffix;
        $sqlString = "SELECT * FROM $tableName";
        $sqlString .= " WHERE STATUSEDIN = 'S' ORDER BY DESCRIP ASC";
        $query = $this->dbDriver->GetQuery();
        $queryResult = $query->Execute($sqlString);
        $result = array();

        foreach ($queryResult as $row) {
            $result [] = new SOEDISTATUS(trim($row->EDISTATID), trim($row->DESCRIP), trim($row->SOTYPECODE), trim($row->QBLISTID), trim($row->STATUSEDIN), trim($row->NFLG0));
        }

        return $result;
    }
    
    /**
     * 
     * @param type $id EDISTATID
     * @return SOEDISTATUS. Null otherwise
     */
    public function GetJobStatusById($id) {
        $tableName = $this->entityName . $this->companySuffix;
        $sqlString = "SELECT * FROM $tableName";
        $sqlString .= " WHERE EDISTATID = '$id' AND STATUSEDIN = 'S'";
        $query = $this->dbDriver->GetQuery();
        $queryResult = $query->Execute($sqlString);
        $result = null;
        
        if (count($queryResult)) {
            $row = $queryResult[0];
            $result = new SOEDISTATUS(trim($row->EDISTATID), trim($row->DESCRIP), trim($row->SOTYPECODE), trim($row->QBLISTID), trim($row->STATUSEDIN), trim($row->NFLG0));
        
        }

        return $result;
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
