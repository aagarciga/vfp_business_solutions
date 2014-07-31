<?php

/**
 * Project:  VFP Business Series
 * Copyright: 2014. VFP Business Solutions, LLC
 */

namespace Dandelion\MVC\Application\Models\Repositories;

use Dandelion\Diana\Interfaces\IRepository;
use Dandelion\MVC\Application\Models\Entities\ICLOC;

class ICLOCRepository extends VFPRepository implements IRepository {

    /**
     * @return array of all ICLOC objects from DB
     */
    public function GetAll() {
        $tableName = $this->entityName . $this->companySuffix;
        $sqlString = "SELECT * FROM $tableName";
        $query = $this->dbDriver->GetQuery();
        $queryResult = $query->Execute($sqlString);
        $result = array();

        foreach ($queryResult as $row) {
            $result [] = new ICLOC(trim($row->LOCNO), trim($row->DESCRIP), trim($row->NFLG0), trim($row->WHSNO), trim($row->HEIGHT), trim($row->WIDTH), trim($row->DEPTH), trim($row->CUBIC), trim($row->BINTYPE), trim($row->ZONE), trim($row->SUBZONE), trim($row->COMMENT), trim($row->ROWID), trim($row->NOTES), trim($row->WEIGHTCAP), trim($row->ISACTIVE), trim($row->MULTISKU), trim($row->QBLISTID), trim($row->CASESINGLE));
            //$result [] = new ICLOC($row->LOCNO, $row->DESCRIP, $row->NFLG0, $row->WHSNO, $row->HEIGHT, $row->WIDTH, $row->DEPTH, $row->CUBIC, $row->BINTYPE, $row->ZONE, $row->SUBZONE, $row->COMMENT, $row->ROWID, $row->NOTES, $row->WEIGHTCAP, $row->ISACTIVE, $row->MULTISKU, $row->QBLISTID, $row->CASESINGLE);
        }

        return $result;
    }

    /**
     * @param string $predicate SQL Query Where clause
     * @return \Dandelion\MVC\Application\Models\Entities\ICLOC
     */
    public function Get($predicate) {
        $tableName = $this->entityName . $this->companySuffix;
        $sqlString = "SELECT * FROM $tableName";
        $sqlString .= ' ' . $predicate;
        $query = $this->dbDriver->GetQuery();
        $queryResult = $query->Execute($sqlString);
        $result = array();

        foreach ($queryResult as $row) {
            $result [] = new ICLOC(trim($row->LOCNO), trim($row->DESCRIP), trim($row->NFLG0), trim($row->WHSNO), trim($row->HEIGHT), trim($row->WIDTH), trim($row->DEPTH), trim($row->CUBIC), trim($row->BINTYPE), trim($row->ZONE), trim($row->SUBZONE), trim($row->COMMENT), trim($row->ROWID), trim($row->NOTES), trim($row->WEIGHTCAP), trim($row->ISACTIVE), trim($row->MULTISKU), trim($row->QBLISTID), trim($row->CASESINGLE));
            //$result [] = new ICLOC($row->LOCNO, $row->DESCRIP, $row->NFLG0, $row->WHSNO, $row->HEIGHT, $row->WIDTH, $row->DEPTH, $row->CUBIC, $row->BINTYPE, $row->ZONE, $row->SUBZONE, $row->COMMENT, $row->ROWID, $row->NOTES, $row->WEIGHTCAP, $row->ISACTIVE, $row->MULTISKU, $row->QBLISTID, $row->CASESINGLE);
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
    
    public function GetActives() {
        $tableName = $this->entityName . $this->companySuffix;
        $sqlString = "SELECT * FROM $tableName";
        $sqlString .= ' WHERE IsActive = False' ;
        $query = $this->dbDriver->GetQuery();
        $queryResult = $query->Execute($sqlString);
        $result = array();

        foreach ($queryResult as $row) {
            $result [] = new ICLOC(trim($row->LOCNO), trim($row->DESCRIP), trim($row->NFLG0), trim($row->WHSNO), trim($row->HEIGHT), trim($row->WIDTH), trim($row->DEPTH), trim($row->CUBIC), trim($row->BINTYPE), trim($row->ZONE), trim($row->SUBZONE), trim($row->COMMENT), trim($row->ROWID), trim($row->NOTES), trim($row->WEIGHTCAP), trim($row->ISACTIVE), trim($row->MULTISKU), trim($row->QBLISTID), trim($row->CASESINGLE));
            //$result [] = new ICLOC($row->LOCNO, $row->DESCRIP, $row->NFLG0, $row->WHSNO, $row->HEIGHT, $row->WIDTH, $row->DEPTH, $row->CUBIC, $row->BINTYPE, $row->ZONE, $row->SUBZONE, $row->COMMENT, $row->ROWID, $row->NOTES, $row->WEIGHTCAP, $row->ISACTIVE, $row->MULTISKU, $row->QBLISTID, $row->CASESINGLE);
        }

        return $result;
    }

}
