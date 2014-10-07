<?php

/**
 * Project:  VFP Business Series
 * Copyright: 2014. VFP Business Solutions, LLC
 */

namespace Dandelion\MVC\Application\Models\Repositories;

use Dandelion\Diana\Interfaces\IRepository;
use Dandelion\MVC\Application\Models\Entities\SOSHPRELH;

class SOSHPRELHRepository extends VFPRepository implements IRepository {

    /**
     * @return array of all SOSHPRELH objects from DB
     */
    public function GetAll() {
        $tableName = $this->entityName . $this->companySuffix;
        $sqlString = "SELECT * FROM $tableName";
        $query = $this->dbDriver->GetQuery();
        $queryResult = $query->Execute($sqlString);
        $result = array();

        foreach ($queryResult as $row) {
            $result [] = new SOSHPRELH(trim($row->SHPRELNO), trim($row->ORDNUM), trim($row->PICTICBANO), trim($row->CUSTNO), trim($row->SHPRELDATE), trim($row->SHIPVIA), trim($row->SHIPVNAME), trim($row->TXRT), trim($row->FTAXCODE), trim($row->SHIPPING), trim($row->FUSERID), trim($row->FSTATION), trim($row->FUPDDATE), trim($row->FUPDTIME), trim($row->NEWUSERID), trim($row->NEWDTETIME), trim($row->NEWSTATION), trim($row->NFLG0), trim($row->SHPRELCOMM), trim($row->FREIGHT), trim($row->CARTOONS), trim($row->VOID), trim($row->SHIPDRIVER), trim($row->ITMCOUNT), trim($row->TOTAL), trim($row->INSPECTNO), trim($row->PACKNO), trim($row->TRACKNO), trim($row->WMSTATUS), trim($row->ITEMTAX), trim($row->TAX), trim($row->SUBTOTAL), trim($row->TOTWEIGHT), trim($row->SHIPDATE), trim($row->TRACKNOM), trim($row->REFNO), trim($row->PREPAID), trim($row->SHPADDRS1), trim($row->SHPADDRS2), trim($row->SHPCITY), trim($row->SHPSTATE), trim($row->SHPZIP), trim($row->SHPCOMPNAM), trim($row->SHPPHONE), trim($row->RESIDENID), trim($row->PACKTYPE), trim($row->SERVTYPE), trim($row->SHPEMAIL), trim($row->SHPCOUNTRY), trim($row->SHPBILLOPT), trim($row->SHPNOTIFOP), trim($row->SHPLOCID), trim($row->SHIPID), trim($row->NOSHIPCHG), trim($row->CA_ID), trim($row->NAMPICKER), trim($row->NAMPACKER), trim($row->BOXTYPE), trim($row->SHPCONTACT), trim($row->BOXLENGTH), trim($row->BOXWIDTH), trim($row->BOXHEIGHT), trim($row->QBLISTID), trim($row->NAMSHIPPER), trim($row->NAMCHECKER), trim($row->CUSTDISC), trim($row->BLINDSHIP));
        }

        return $result;
    }

    /**
     * @param string $predicate SQL Query Where clause
     * @return \Dandelion\MVC\Application\Models\Entities\SOSHPRELH
     */
    public function Get($predicate) {
        $tableName = $this->entityName . $this->companySuffix;
        $sqlString = "SELECT * FROM $tableName";
        $sqlString .= ' ' . $predicate;
        $query = $this->dbDriver->GetQuery();
        $queryResult = $query->Execute($sqlString);
        $result = array();

        foreach ($queryResult as $row) {
            $result [] = new SOSHPRELH(trim($row->SHPRELNO), trim($row->ORDNUM), trim($row->PICTICBANO), trim($row->CUSTNO), trim($row->SHPRELDATE), trim($row->SHIPVIA), trim($row->SHIPVNAME), trim($row->TXRT), trim($row->FTAXCODE), trim($row->SHIPPING), trim($row->FUSERID), trim($row->FSTATION), trim($row->FUPDDATE), trim($row->FUPDTIME), trim($row->NEWUSERID), trim($row->NEWDTETIME), trim($row->NEWSTATION), trim($row->NFLG0), trim($row->SHPRELCOMM), trim($row->FREIGHT), trim($row->CARTOONS), trim($row->VOID), trim($row->SHIPDRIVER), trim($row->ITMCOUNT), trim($row->TOTAL), trim($row->INSPECTNO), trim($row->PACKNO), trim($row->TRACKNO), trim($row->WMSTATUS), trim($row->ITEMTAX), trim($row->TAX), trim($row->SUBTOTAL), trim($row->TOTWEIGHT), trim($row->SHIPDATE), trim($row->TRACKNOM), trim($row->REFNO), trim($row->PREPAID), trim($row->SHPADDRS1), trim($row->SHPADDRS2), trim($row->SHPCITY), trim($row->SHPSTATE), trim($row->SHPZIP), trim($row->SHPCOMPNAM), trim($row->SHPPHONE), trim($row->RESIDENID), trim($row->PACKTYPE), trim($row->SERVTYPE), trim($row->SHPEMAIL), trim($row->SHPCOUNTRY), trim($row->SHPBILLOPT), trim($row->SHPNOTIFOP), trim($row->SHPLOCID), trim($row->SHIPID), trim($row->NOSHIPCHG), trim($row->CA_ID), trim($row->NAMPICKER), trim($row->NAMPACKER), trim($row->BOXTYPE), trim($row->SHPCONTACT), trim($row->BOXLENGTH), trim($row->BOXWIDTH), trim($row->BOXHEIGHT), trim($row->QBLISTID), trim($row->NAMSHIPPER), trim($row->NAMCHECKER), trim($row->CUSTDISC), trim($row->BLINDSHIP));
        }

        return $result;
    }
    
    public function GetTicketCompanyByOrdNum($ordnum) {
        $tableName = $this->entityName . $this->companySuffix;
        $sqlString = "SELECT SHPCOMPNAM FROM $tableName";
        $sqlString .= " WHERE ORDNUM = '$ordnum'";
        $query = $this->dbDriver->GetQuery();
        $queryResult = $query->Execute($sqlString);
        
        if (count($queryResult)) {
            return trim($queryResult[0]->SHPCOMPNAM);
        }
        return "";
        
    }
    
    public function GetTicketScanIdByOrdNum($ordnum) {
        $tableName = $this->entityName . $this->companySuffix;
        $sqlString = "SELECT SCANID FROM $tableName";
        $sqlString .= " WHERE ORDNUM = '$ordnum'";
        $query = $this->dbDriver->GetQuery();
        $queryResult = $query->Execute($sqlString);
        
        if (count($queryResult)) {
            return trim($queryResult[0]->SCANID);
        }
        return "";
        
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
