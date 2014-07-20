<?php

/**
 * Project:  VFP Business Series
 * Copyright: 2014. VFP Business Solutions, LLC
 */

namespace Dandelion\MVC\Application\Models\Repositories;

use Dandelion\Diana\Interfaces\IRepository;
use Dandelion\MVC\Application\Models\Entities\ICITLO;

class ICITLORepository extends VFPRepository implements IRepository {

    /**
     * @return array of all ICITLO objects from DB
     */
    public function GetAll() {
        $sqlString = "SELECT * FROM $this->entityName . $this->companySuffix";
        $query = $this->dbDriver->GetQuery();
        $queryResult = $query->Execute($sqlString);
        $result = array();

        foreach ($queryResult as $row) {
            //$result []= new ICITLO($row->ITEMNO, $row->ITMWHS, $row->LOCNO, $row->NFLG0, $row->ONHAND, $row->QTYPICK, $row->QTYSHPREL, $row->LOCALFSORT, $row->ZONE, $row->QBLISTID, $row->CASESINGLE);
            $result [] = new ICITLO(trim($row->ITEMNO), trim($row->ITMWHS), trim($row->LOCNO), trim($row->NFLG0), trim($row->ONHAND), trim($row->QTYPICK), trim($row->QTYSHPREL), trim($row->LOCALFSORT), trim($row->ZONE), trim($row->QBLISTID), trim($row->CASESINGLE));
        }

        return $result;
    }

    /**
     * @param string $predicate SQL Query Where clause
     * @return \Dandelion\MVC\Application\Models\Entities\ICITLO
     */
    public function Get($predicate) {
        $sqlString = "SELECT * FROM $this->entityName . $this->companySuffix";
        $sqlString .= ' ' . $predicate;
        $query = $this->dbDriver->GetQuery();
        $queryResult = $query->Execute($sqlString);
        $result = array();

        foreach ($queryResult as $row) {
            $result [] = new ICITLO(trim($row->ITEMNO), trim($row->ITMWHS), trim($row->LOCNO), trim($row->NFLG0), trim($row->ONHAND), trim($row->QTYPICK), trim($row->QTYSHPREL), trim($row->LOCALFSORT), trim($row->ZONE), trim($row->QBLISTID), trim($row->CASESINGLE));
            //$result []= new ICITLO($row->ITEMNO, $row->ITMWHS, $row->LOCNO, $row->NFLG0, $row->ONHAND, $row->QTYPICK, $row->QTYSHPREL, $row->LOCALFSORT, $row->ZONE, $row->QBLISTID, $row->CASESINGLE);
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
