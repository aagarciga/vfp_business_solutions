<?php

/**
 * Project:  VFP Business Series
 * Copyright: 2014. VFP Business Solutions, LLC
 */

namespace Dandelion\MVC\Application\Models\Repositories;

use Dandelion\Diana\Interfaces\IRepository;
use Dandelion\MVC\Application\Models\Entities\ICWHS;

class ICWHSRepository extends VFPRepository implements IRepository {

    /**
     * @return array of all ICWHS objects from DB
     */
    public function GetAll() {
        $tableName = $this->entityName . $this->companySuffix;
        $sqlString = "SELECT * FROM $tableName";
        $query = $this->dbDriver->GetQuery();
        $queryResult = $query->Execute($sqlString);
        $result = array();

        foreach ($queryResult as $row) {
            //$result []= new ICWHS($row->WHSNO, $row->DESCRIP, $row->NFLG0, $row->RESWHS, $row->ADDRESS1, $row->ADDRESS2, $row->CITY, $row->STATE, $row->ZIP, $row->COUNTRY, $row->PHONE, $row->FAXNUM, $row->EMAIL, $row->WEBSITE, $row->CONTACT, $row->TITLE, $row->NOTES, $row->PICTUREDE, $row->IPADDRESS, $row->LASTOED, $row->LASTEOD, $row->NEXTEOD, $row->ARBATCH_NO, $row->BATCHDATE, $row->CONSIGN, $row->POPREFIX, $row->INCLUDEPO, $row->SERVTRUCK, $row->GLTAXACCT, $row->POSSTORE, $row->ISACTIVE, $row->QBLISTID);
            $result [] = new ICWHS(trim($row->WHSNO), trim($row->DESCRIP), trim($row->NFLG0), trim($row->RESWHS), trim($row->ADDRESS1), trim($row->ADDRESS2), trim($row->CITY), trim($row->STATE), trim($row->ZIP), trim($row->COUNTRY), trim($row->PHONE), trim($row->FAXNUM), trim($row->EMAIL), trim($row->WEBSITE), trim($row->CONTACT), trim($row->TITLE), trim($row->NOTES), trim($row->PICTUREDE), trim($row->IPADDRESS), trim($row->LASTOED), trim($row->LASTEOD), trim($row->NEXTEOD), trim($row->ARBATCH_NO), trim($row->BATCHDATE), trim($row->CONSIGN), trim($row->POPREFIX), trim($row->INCLUDEPO), trim($row->SERVTRUCK), trim($row->GLTAXACCT), trim($row->POSSTORE), trim($row->ISACTIVE), trim($row->QBLISTID));
        }

        return $result;
    }

    /**
     * @param string $predicate SQL Query Where clause
     * @return \Dandelion\MVC\Application\Models\Entities\ICWHS
     */
    public function Get($predicate) {
        $tableName = $this->entityName . $this->companySuffix;
        $sqlString = "SELECT * FROM $tableName";
        $sqlString .= ' ' . $predicate;
        $query = $this->dbDriver->GetQuery();
        $queryResult = $query->Execute($sqlString);
        $result = array();

        foreach ($queryResult as $row) {
            $result [] = new ICWHS(trim($row->WHSNO), trim($row->DESCRIP), trim($row->NFLG0), trim($row->RESWHS), trim($row->ADDRESS1), trim($row->ADDRESS2), trim($row->CITY), trim($row->STATE), trim($row->ZIP), trim($row->COUNTRY), trim($row->PHONE), trim($row->FAXNUM), trim($row->EMAIL), trim($row->WEBSITE), trim($row->CONTACT), trim($row->TITLE), trim($row->NOTES), trim($row->PICTUREDE), trim($row->IPADDRESS), trim($row->LASTOED), trim($row->LASTEOD), trim($row->NEXTEOD), trim($row->ARBATCH_NO), trim($row->BATCHDATE), trim($row->CONSIGN), trim($row->POPREFIX), trim($row->INCLUDEPO), trim($row->SERVTRUCK), trim($row->GLTAXACCT), trim($row->POSSTORE), trim($row->ISACTIVE), trim($row->QBLISTID));
            //$result []= new ICWHS($row->WHSNO, $row->DESCRIP, $row->NFLG0, $row->RESWHS, $row->ADDRESS1, $row->ADDRESS2, $row->CITY, $row->STATE, $row->ZIP, $row->COUNTRY, $row->PHONE, $row->FAXNUM, $row->EMAIL, $row->WEBSITE, $row->CONTACT, $row->TITLE, $row->NOTES, $row->PICTUREDE, $row->IPADDRESS, $row->LASTOED, $row->LASTEOD, $row->NEXTEOD, $row->ARBATCH_NO, $row->BATCHDATE, $row->CONSIGN, $row->POPREFIX, $row->INCLUDEPO, $row->SERVTRUCK, $row->GLTAXACCT, $row->POSSTORE, $row->ISACTIVE, $row->QBLISTID);
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
    
//    WHS:  Select from table  ICWHSdbf , show all active warehouse (dbf is the company suffix)
//     Select WhsNo,Descrip From ICWHSdbf Where !ICWHSdbf.IsActive Order WhsNo

    /**
     * @return array of all Active ICWHS objects from DB
     */
    public function GetActives() {
        $sqlString = "SELECT * FROM $this->entityName$this->companySuffix";
        $sqlString .= " WHERE IsActive = False";
        $query = $this->dbDriver->GetQuery();
        $queryResult = $query->Execute($sqlString);
        
        $result = array();

        foreach ($queryResult as $row) {
            $result [] = new ICWHS(trim($row->WHSNO), trim($row->DESCRIP), trim($row->NFLG0), trim($row->RESWHS), trim($row->ADDRESS1), trim($row->ADDRESS2), trim($row->CITY), trim($row->STATE), trim($row->ZIP), trim($row->COUNTRY), trim($row->PHONE), trim($row->FAXNUM), trim($row->EMAIL), trim($row->WEBSITE), trim($row->CONTACT), trim($row->TITLE), trim($row->NOTES), trim($row->PICTUREDE), trim($row->IPADDRESS), trim($row->LASTOED), trim($row->LASTEOD), trim($row->NEXTEOD), trim($row->ARBATCH_NO), trim($row->BATCHDATE), trim($row->CONSIGN), trim($row->POPREFIX), trim($row->INCLUDEPO), trim($row->SERVTRUCK), trim($row->GLTAXACCT), trim($row->POSSTORE), trim($row->ISACTIVE), trim($row->QBLISTID));
        }
        
        return $result;
    }
}
