<?php

/**
 * Project:  VFP Business Series
 * Copyright: 2014. VFP Business Solutions, LLC
 */

namespace Dandelion\MVC\Application\Models\Repositories;

use Dandelion\Diana\Interfaces\IRepository;
use Dandelion\MVC\Application\Models\Entities\SOTYPEORD;

class SOTYPEORDRepository extends VFPRepository implements IRepository {

    /**
     * @return array of all SOTYPEORD objects from DB
     */
    public function GetAll() {
        $tableName = $this->entityName . $this->companySuffix;
        $sqlString = "SELECT * FROM $tableName";
        $query = $this->dbDriver->GetQuery();
        $queryResult = $query->Execute($sqlString);
        $result = array();

        foreach ($queryResult as $row) {
            $result [] = new SOTYPEORD(trim($row->SOTYPECODE), trim($row->SOTYPE), trim($row->DESCRIP), trim($row->CTRLDATE), trim($row->NFLG0), trim($row->SOTYPEDESC), trim($row->INACTIVE), trim($row->NODAYS), trim($row->SERVTYPE), trim($row->SOWMSFLAG), trim($row->ORDTYPLOGO), trim($row->QBLISTID), trim($row->SALESMN), trim($row->SHIPVIA), trim($row->SHIPVNAME));
        }

        return $result;
    }

    /**
     * @param string $predicate SQL Query Where clause
     * @return \Dandelion\MVC\Application\Models\Entities\SOTYPEORD
     */
    public function Get($predicate) {
        $tableName = $this->entityName . $this->companySuffix;
        $sqlString = "SELECT * FROM $tableName";
        $sqlString .= ' ' . $predicate;
        $query = $this->dbDriver->GetQuery();
        $queryResult = $query->Execute($sqlString);
        $result = array();

        foreach ($queryResult as $row) {
            $result [] = new SOTYPEORD(trim($row->SOTYPECODE), trim($row->SOTYPE), trim($row->DESCRIP), trim($row->CTRLDATE), trim($row->NFLG0), trim($row->SOTYPEDESC), trim($row->INACTIVE), trim($row->NODAYS), trim($row->SERVTYPE), trim($row->SOWMSFLAG), trim($row->ORDTYPLOGO), trim($row->QBLISTID), trim($row->SALESMN), trim($row->SHIPVIA), trim($row->SHIPVNAME));
        }

        return $result;
    }
    
    public function GetActives() {
        $tableName = $this->entityName . $this->companySuffix;
        $sqlString = "SELECT * FROM $tableName";
        $sqlString .= " WHERE INACTIVE = False";
        $query = $this->dbDriver->GetQuery();
        $queryResult = $query->Execute($sqlString);
        $result = array();

        foreach ($queryResult as $row) {
            $result [] = new SOTYPEORD(trim($row->SOTYPECODE), trim($row->SOTYPE), trim($row->DESCRIP), trim($row->CTRLDATE), trim($row->NFLG0), trim($row->SOTYPEDESC), trim($row->INACTIVE), trim($row->NODAYS), trim($row->SERVTYPE), trim($row->SOWMSFLAG), trim($row->ORDTYPLOGO), trim($row->QBLISTID), trim($row->SALESMN), trim($row->SHIPVIA), trim($row->SHIPVNAME));
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
