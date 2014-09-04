<?php

/**
 * Project:  VFP Business Series
 * Copyright: 2014. VFP Business Solutions, LLC
 */

namespace Dandelion\MVC\Application\Models\Repositories;

use Dandelion\Diana\Interfaces\IRepository;
use Dandelion\MVC\Application\Models\Entities\WMPACK;

class WMPACKRepository extends VFPRepository implements IRepository {

    /**
     * @return array of all WMPACK objects from DB
     */
    public function GetAll() {
        $sqlString = "SELECT * FROM $this->entityName";
        $query = $this->dbDriver->GetQuery();
        $queryResult = $query->Execute($sqlString);
        $result = array();

        foreach ($queryResult as $row) {
            $result [] = new WMPACK(trim($row->PACKNO), trim($row->SHPRELDATE), trim($row->SHIPVNAME), trim($row->SHIPVIA), trim($row->TRACKNO), trim($row->SHIPPING), trim($row->SHPRELCOMM), trim($row->WMSTATUS), trim($row->COMPANY), trim($row->ADDRESS), trim($row->CITY), trim($row->STATE), trim($row->ZIP), trim($row->COUNTRY), trim($row->PACKAGE), trim($row->WEIGHT), trim($row->INSURANCE), trim($row->SERVICE), trim($row->QBLISTID), trim($row->SHPRELNO), trim($row->ORDNUM), trim($row->SHPTRK_ID), trim($row->SHIPDATE), trim($row->CA_ID), trim($row->PK_LENGTH), trim($row->PK_WIDTH), trim($row->PK_HEIGHT), trim($row->DIM_WEIGHT), trim($row->BOXTYPE), trim($row->VOID), trim($row->BILLCODE));
        }

        return $result;
    }

    /**
     * @param string $predicate SQL Query Where clause
     * @return \Dandelion\MVC\Application\Models\Entities\WMPACK
     */
    public function Get($predicate) {
        $sqlString = "SELECT * FROM $this->entityName";
        $sqlString .= ' ' . $predicate;
        $query = $this->dbDriver->GetQuery();
        $queryResult = $query->Execute($sqlString);
        $result = array();

        foreach ($queryResult as $row) {
            $result [] = new WMPACK(trim($row->PACKNO), trim($row->SHPRELDATE), trim($row->SHIPVNAME), trim($row->SHIPVIA), trim($row->TRACKNO), trim($row->SHIPPING), trim($row->SHPRELCOMM), trim($row->WMSTATUS), trim($row->COMPANY), trim($row->ADDRESS), trim($row->CITY), trim($row->STATE), trim($row->ZIP), trim($row->COUNTRY), trim($row->PACKAGE), trim($row->WEIGHT), trim($row->INSURANCE), trim($row->SERVICE), trim($row->QBLISTID), trim($row->SHPRELNO), trim($row->ORDNUM), trim($row->SHPTRK_ID), trim($row->SHIPDATE), trim($row->CA_ID), trim($row->PK_LENGTH), trim($row->PK_WIDTH), trim($row->PK_HEIGHT), trim($row->DIM_WEIGHT), trim($row->BOXTYPE), trim($row->VOID), trim($row->BILLCODE));
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
