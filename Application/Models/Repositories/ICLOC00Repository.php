<?php

/**
 * Project:  VFP Business Series
 * Copyright: 2014. VFP Business Solutions, LLC
 */

namespace Dandelion\MVC\Application\Models\Repositories;

use Dandelion\Diana\Interfaces\IRepository;
use Dandelion\MVC\Application\Models\Entities\ICLOC00;

class ICLOC00Repository extends BaseRepository implements IRepository {

    /**
     * @return array of all ICLOC00 objects from DB
     */
    public function GetAll() {
        $sqlString = "SELECT * FROM $this->entityName";
        $query = $this->dbDriver->GetQuery();
        $queryResult = $query->Execute($sqlString);
        $result = array();

        foreach ($queryResult as $row) {
            $result [] = new ICLOC00($row->LOCNO, $row->DESCRIP, $row->NFLG0, $row->WHSNO, $row->HEIGHT, $row->WIDTH, $row->DEPTH, $row->CUBIC, $row->BINTYPE, $row->ZONE, $row->SUBZONE, $row->COMMENT, $row->ROWID, $row->NOTES, $row->WEIGHTCAP, $row->ISACTIVE, $row->MULTISKU, $row->QBLISTID, $row->CASESINGLE);
        }

        return $result;
    }

    /**
     * @param string $predicate SQL Query Where clause
     * @return \Dandelion\MVC\Application\Models\Entities\ICLOC00
     */
    public function Get($predicate) {
        $sqlString = "SELECT * FROM $this->entityName";
        $sqlString .= ' ' . $predicate;
        $query = $this->dbDriver->GetQuery();
        $queryResult = $query->Execute($sqlString);
        $result = array();

        foreach ($queryResult as $row) {
            $result [] = new ICLOC00($row->LOCNO, $row->DESCRIP, $row->NFLG0, $row->WHSNO, $row->HEIGHT, $row->WIDTH, $row->DEPTH, $row->CUBIC, $row->BINTYPE, $row->ZONE, $row->SUBZONE, $row->COMMENT, $row->ROWID, $row->NOTES, $row->WEIGHTCAP, $row->ISACTIVE, $row->MULTISKU, $row->QBLISTID, $row->CASESINGLE);
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
