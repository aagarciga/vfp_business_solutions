<?php

/**
 * Project:  VFP Business Series
 * Copyright: 2014. VFP Business Solutions, LLC
 */

namespace Dandelion\MVC\Application\Models\Repositories;

use Dandelion\Diana\Interfaces\IRepository;
use Dandelion\MVC\Application\Models\Entities\ICBARCODE00;

class ICBARCODE00Repository extends BaseRepository implements IRepository {

    /**
     * @return array of all ICBARCODE00 objects from DB
     */
    public function GetAll() {
        $sqlString = "SELECT * FROM $this->entityName";
        $query = $this->dbDriver->GetQuery();
        $queryResult = $query->Execute($sqlString);
        $result = array();

        foreach ($queryResult as $row) {
            $result [] = new ICBARCODE00($row->DOCNO, $row->TYPE, $row->BARCODE, $row->SERIALNO, $row->WHS, $row->ITMCOUNT, $row->LOCATION, $row->QTY, $row->USER, $row->DATE, $row->DELETE, $row->NFLG0, $row->SERIALNF, $row->FUPDTIME, $row->FUPDDATE, $row->FSTATION, $row->FUSERID, $row->ITEMNO, $row->DESCRIP, $row->DUPRECORD, $row->DUPRECDEL, $row->LOCNO, $row->UPCCODE, $row->QBLISTID, $row->WHSNO, $row->PONO, $row->QTYSCAN, $row->PROSTATUS, $row->QTYTOPO, $row->UPDPODATE, $row->UPDPONO);
        }

        return $result;
    }

    /**
     * @param string $predicate SQL Query Where clause
     * @return \Dandelion\MVC\Application\Models\Entities\ICBARCODE00
     */
    public function Get($predicate) {
        $sqlString = "SELECT * FROM $this->entityName";
        $sqlString .= ' ' . $predicate;
        $query = $this->dbDriver->GetQuery();
        $queryResult = $query->Execute($sqlString);
        $result = array();

        foreach ($queryResult as $row) {
            $result [] = new ICBARCODE00($row->DOCNO, $row->TYPE, $row->BARCODE, $row->SERIALNO, $row->WHS, $row->ITMCOUNT, $row->LOCATION, $row->QTY, $row->USER, $row->DATE, $row->DELETE, $row->NFLG0, $row->SERIALNF, $row->FUPDTIME, $row->FUPDDATE, $row->FSTATION, $row->FUSERID, $row->ITEMNO, $row->DESCRIP, $row->DUPRECORD, $row->DUPRECDEL, $row->LOCNO, $row->UPCCODE, $row->QBLISTID, $row->WHSNO, $row->PONO, $row->QTYSCAN, $row->PROSTATUS, $row->QTYTOPO, $row->UPDPODATE, $row->UPDPONO);
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
