<?php

/**
 * Project:  VFP Business Series
 * Copyright: 2014. VFP Business Solutions, LLC
 */

namespace Dandelion\MVC\Application\Models\Repositories;

use Dandelion\Diana\Interfaces\IRepository;
use Dandelion\MVC\Application\Models\Entities\SWVESSEL;

class SWVESSELRepository extends VFPRepository implements IRepository {

    /**
     * @return array of all SWVESSEL objects from DB
     */
    public function GetAll() {
        $sqlString = "SELECT * FROM $this->entityName";
        $query = $this->dbDriver->GetQuery();
        $queryResult = $query->Execute($sqlString);
        $result = array();

        foreach ($queryResult as $row) {
            $result [] = new SWVESSEL(trim($row->VESSELID), trim($row->DESCRIP), trim($row->PENTYPE), trim($row->CEMENTID), trim($row->FIRECAULK), trim($row->SHIPCLASS), trim($row->NOTES), trim($row->NFLG0), trim($row->FUPDTIME), trim($row->FUPDDATE), trim($row->FUSERID), trim($row->FSTATION), trim($row->QBLISTID));
        }

        return $result;
    }

    /**
     * @param string $predicate SQL Query Where clause
     * @return \Dandelion\MVC\Application\Models\Entities\SWVESSEL
     */
    public function Get($predicate) {
        $sqlString = "SELECT * FROM $this->entityName";
        $sqlString .= ' ' . $predicate;
        $query = $this->dbDriver->GetQuery();
        $queryResult = $query->Execute($sqlString);
        $result = array();

        foreach ($queryResult as $row) {
            $result [] = new SWVESSEL(trim($row->VESSELID), trim($row->DESCRIP), trim($row->PENTYPE), trim($row->CEMENTID), trim($row->FIRECAULK), trim($row->SHIPCLASS), trim($row->NOTES), trim($row->NFLG0), trim($row->FUPDTIME), trim($row->FUPDDATE), trim($row->FUSERID), trim($row->FSTATION), trim($row->QBLISTID));
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
