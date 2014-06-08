<?php

/**
 * Project:  VFP Business Series
 * Copyright: 2014. VFP Business Solutions, LLC
 */

namespace Dandelion\MVC\Application\Models\Repositories;

use Dandelion\Diana\Interfaces\IRepository;
use Dandelion\MVC\Application\Models\Entities\WMSCAN00;

class WMSCAN00Repository extends BaseRepository implements IRepository {

    /**
     * @return array of all WMSCAN00 objects from DB
     */
    public function GetAll() {
        $sqlString = "SELECT * FROM $this->entityName";
        $query = $this->dbDriver->GetQuery();
        $queryResult = $query->Execute($sqlString);
        $result = array();

        foreach ($queryResult as $row) {
            $result [] = new WMSCAN00($row->CODE, $row->SCANID, $row->DESCRIP, $row->STATUS, $row->MENU, $row->LOCSWITCH, $row->LOCATION, $row->PICKTICKET, $row->ORDNUM, $row->PALLETNO, $row->PACKNO, $row->BARCODE, $row->PICTURE, $row->ERROR, $row->ERRORMSG, $row->USERID, $row->NFLG0, $row->QUANTITIES, $row->SHIPPING, $row->BINLOC, $row->MOVEITEM, $row->BINTOBIN, $row->PHYCOUNT, $row->CHGPROP, $row->PONO, $row->ITEMNO, $row->RIMNO, $row->SHIPMENT, $row->RETURN, $row->QBLISTID, $row->BINLOCAL);
        }

        return $result;
    }

    /**
     * @param string $predicate SQL Query Where clause
     * @return \Dandelion\MVC\Application\Models\Entities\WMSCAN00
     */
    public function Get($predicate) {
        $sqlString = "SELECT * FROM $this->entityName";
        $sqlString .= ' ' . $predicate;
        $query = $this->dbDriver->GetQuery();
        $queryResult = $query->Execute($sqlString);
        $result = array();

        foreach ($queryResult as $row) {
            $result [] = new WMSCAN00($row->CODE, $row->SCANID, $row->DESCRIP, $row->STATUS, $row->MENU, $row->LOCSWITCH, $row->LOCATION, $row->PICKTICKET, $row->ORDNUM, $row->PALLETNO, $row->PACKNO, $row->BARCODE, $row->PICTURE, $row->ERROR, $row->ERRORMSG, $row->USERID, $row->NFLG0, $row->QUANTITIES, $row->SHIPPING, $row->BINLOC, $row->MOVEITEM, $row->BINTOBIN, $row->PHYCOUNT, $row->CHGPROP, $row->PONO, $row->ITEMNO, $row->RIMNO, $row->SHIPMENT, $row->RETURN, $row->QBLISTID, $row->BINLOCAL);
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
