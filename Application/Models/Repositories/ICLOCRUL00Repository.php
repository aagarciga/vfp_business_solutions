<?php

/**
 * Project:  VFP Business Series
 * Copyright: 2014. VFP Business Solutions, LLC
 */

namespace Dandelion\MVC\Application\Models\Repositories;

use Dandelion\Diana\Interfaces\IRepository;
use Dandelion\MVC\Application\Models\Entities\ICLOCRUL00;

class ICLOCRUL00Repository extends BaseRepository implements IRepository {

    /**
     * @return array of all ICLOCRUL00 objects from DB
     */
    public function GetAll() {
        $sqlString = "SELECT * FROM $this->entityName";
        $query = $this->dbDriver->GetQuery();
        $queryResult = $query->Execute($sqlString);
        $result = array();

        foreach ($queryResult as $row) {
            $result [] = new ICLOCRUL00($row->ROWID, $row->FROMBIN, $row->TOBIN, $row->ZONE, $row->BINTYPE, $row->SIZECODE, $row->REACHCODE, $row->HEIGHT, $row->FRONT, $row->DEPTH, $row->NDEEP, $row->SKIPCOUNT, $row->COMMENT_IN, $row->HANDLECODE, $row->PICK_TYPE, $row->SUBZONE, $row->PACKSIZE, $row->IS_RANDOM, $row->BILL_ZONE, $row->ISACTIVE, $row->WHSNO, $row->NFLG0, $row->FUPDTIME, $row->FUPDDATE, $row->FSTATION, $row->DESCRIP, $row->QBLISTID, $row->FUSERID);
        }

        return $result;
    }

    /**
     * @param string $predicate SQL Query Where clause
     * @return \Dandelion\MVC\Application\Models\Entities\ICLOCRUL00
     */
    public function Get($predicate) {
        $sqlString = "SELECT * FROM $this->entityName";
        $sqlString .= ' ' . $predicate;
        $query = $this->dbDriver->GetQuery();
        $queryResult = $query->Execute($sqlString);
        $result = array();

        foreach ($queryResult as $row) {
            $result [] = new ICLOCRUL00($row->ROWID, $row->FROMBIN, $row->TOBIN, $row->ZONE, $row->BINTYPE, $row->SIZECODE, $row->REACHCODE, $row->HEIGHT, $row->FRONT, $row->DEPTH, $row->NDEEP, $row->SKIPCOUNT, $row->COMMENT_IN, $row->HANDLECODE, $row->PICK_TYPE, $row->SUBZONE, $row->PACKSIZE, $row->IS_RANDOM, $row->BILL_ZONE, $row->ISACTIVE, $row->WHSNO, $row->NFLG0, $row->FUPDTIME, $row->FUPDDATE, $row->FSTATION, $row->DESCRIP, $row->QBLISTID, $row->FUSERID);
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
