<?php

/**
 * Project:  VFP Business Series
 * Copyright: 2014. VFP Business Solutions, LLC
 */

namespace Dandelion\MVC\Application\Models\Repositories;

use Dandelion\Diana\Interfaces\IRepository;
use Dandelion\Diana\BootstrapPager;
use Dandelion\MVC\Application\Models\Entities\SOSHPREL;

class SOSHPRELRepository extends VFPRepository implements IRepository {

    /**
     * @return array of all SOSHPREL objects from DB
     */
    public function GetAll() {
        $tableName = $this->entityName . $this->companySuffix;
        $sqlString = "SELECT * FROM $tableName";
        $query = $this->dbDriver->GetQuery();
        $queryResult = $query->Execute($sqlString);
        $result = array();

        foreach ($queryResult as $row) {
            $result [] = new SOSHPREL(trim($row->SHPRELNO), trim($row->ORDNUM), trim($row->ITMCOUNT), trim($row->ITEMNO), trim($row->ITMWHS), trim($row->ITEMTYPE), trim($row->SHIPDATE), trim($row->LOTNO), trim($row->DESCRIP), trim($row->UNIT), trim($row->WEIGHT), trim($row->LENGTH), trim($row->WIDTH), trim($row->THICK), trim($row->CUBIC), trim($row->QTYSHPREL), trim($row->QTYORD), trim($row->QTYSHP), trim($row->QTYTOINV), trim($row->QTYINV), trim($row->UNITPRICE), trim($row->QTYIC), trim($row->PRICEUNIT), trim($row->EXTPRICE), trim($row->EXTPR0), trim($row->EXTCOST), trim($row->GLACCTNO), trim($row->GLACCTAST), trim($row->GLACCTEXP), trim($row->BATCH_NO), trim($row->PERIOD), trim($row->PRIFCTDSC), trim($row->TAXABLE), trim($row->ITEMTAX), trim($row->ITEMTAX0), trim($row->KEY), trim($row->USERFLG), trim($row->FUSERID), trim($row->FSTATION), trim($row->ITMCOMM), trim($row->DELIVERY), trim($row->LOTITEM), trim($row->PICTICBANO), trim($row->NFLG0), trim($row->PRICEFACT), trim($row->LOCNO), trim($row->SERIALNO), trim($row->FTAXCODE), trim($row->TAXCODE), trim($row->TAXRATE), trim($row->FUPDDATE), trim($row->FUPDTIME), trim($row->BASEID), trim($row->CSTCTID), trim($row->OKUPDIC), trim($row->NEWUSERID), trim($row->NEWDTETIME), trim($row->NEWSTATION), trim($row->GLDEPT), trim($row->COSTFACT), trim($row->PALQTYSQF), trim($row->PALQTYPCS), trim($row->CUSTNO), trim($row->SHPRELDATE), trim($row->VOID), trim($row->ID), trim($row->HITMCOUNT), trim($row->SERIALNO1), trim($row->QTYPICK), trim($row->QTYPACK), trim($row->PACKNO), trim($row->SERIALNO2), trim($row->WMSTATUS), trim($row->BINLOCAL), trim($row->CARTONNO), trim($row->HAZARDOUS), trim($row->LOCNO1), trim($row->LOCNO2), trim($row->LOCNO3), trim($row->ZONE), trim($row->ZONE1), trim($row->ZONE2), trim($row->ZONE3), trim($row->PARTNO), trim($row->QBTXLINEID), trim($row->SOTXLINEID), trim($row->QBLISTID), trim($row->SOITEMGUID), trim($row->ITMDISC));
        }

        return $result;
    }

    /**
     * 
     * @param string $predicate SQL Query Where clause
     * @param integer $limit
     * @param integer $offset
     * @return \Dandelion\MVC\Application\Models\Entities\SOSHPREL
     */
    public function Get($predicate, $limit = 0, $offset = 0) {
        $tableName = $this->entityName . $this->companySuffix;
        
        $limit = (is_integer($limit) && $limit > 0 ) ? "TOP $limit" : '';
        $offset = (is_integer($offset) && $offset > 0 ) ? "START AT $offset" : '';
        
        $sqlString = "SELECT $limit $offset * FROM $tableName";
        $sqlString .= ' ' . $predicate;
        $query = $this->dbDriver->GetQuery();
        $queryResult = $query->Execute($sqlString);
        $result = array();

        foreach ($queryResult as $row) {
            $result [] = new SOSHPREL(trim($row->SHPRELNO), trim($row->ORDNUM), trim($row->ITMCOUNT), trim($row->ITEMNO), trim($row->ITMWHS), trim($row->ITEMTYPE), trim($row->SHIPDATE), trim($row->LOTNO), trim($row->DESCRIP), trim($row->UNIT), trim($row->WEIGHT), trim($row->LENGTH), trim($row->WIDTH), trim($row->THICK), trim($row->CUBIC), trim($row->QTYSHPREL), trim($row->QTYORD), trim($row->QTYSHP), trim($row->QTYTOINV), trim($row->QTYINV), trim($row->UNITPRICE), trim($row->QTYIC), trim($row->PRICEUNIT), trim($row->EXTPRICE), trim($row->EXTPR0), trim($row->EXTCOST), trim($row->GLACCTNO), trim($row->GLACCTAST), trim($row->GLACCTEXP), trim($row->BATCH_NO), trim($row->PERIOD), trim($row->PRIFCTDSC), trim($row->TAXABLE), trim($row->ITEMTAX), trim($row->ITEMTAX0), trim($row->KEY), trim($row->USERFLG), trim($row->FUSERID), trim($row->FSTATION), trim($row->ITMCOMM), trim($row->DELIVERY), trim($row->LOTITEM), trim($row->PICTICBANO), trim($row->NFLG0), trim($row->PRICEFACT), trim($row->LOCNO), trim($row->SERIALNO), trim($row->FTAXCODE), trim($row->TAXCODE), trim($row->TAXRATE), trim($row->FUPDDATE), trim($row->FUPDTIME), trim($row->BASEID), trim($row->CSTCTID), trim($row->OKUPDIC), trim($row->NEWUSERID), trim($row->NEWDTETIME), trim($row->NEWSTATION), trim($row->GLDEPT), trim($row->COSTFACT), trim($row->PALQTYSQF), trim($row->PALQTYPCS), trim($row->CUSTNO), trim($row->SHPRELDATE), trim($row->VOID), trim($row->ID), trim($row->HITMCOUNT), trim($row->SERIALNO1), trim($row->QTYPICK), trim($row->QTYPACK), trim($row->PACKNO), trim($row->SERIALNO2), trim($row->WMSTATUS), trim($row->BINLOCAL), trim($row->CARTONNO), trim($row->HAZARDOUS), trim($row->LOCNO1), trim($row->LOCNO2), trim($row->LOCNO3), trim($row->ZONE), trim($row->ZONE1), trim($row->ZONE2), trim($row->ZONE3), trim($row->PARTNO), trim($row->QBTXLINEID), trim($row->SOTXLINEID), trim($row->QBLISTID), trim($row->SOITEMGUID), trim($row->ITMDISC));
        }

        return $result;
    }
    
    /**
     * @return array of all SOSHPREL objects from DB
     */
    public function GetTickets() {
        $tableName = $this->entityName . $this->companySuffix;
        
        $sqlString = "SELECT DISTINCT ".
                "SHPRELNO, ORDNUM, SHPRELDATE, BATCH_NO, ".
                "SUM(QTYSHPREL) AS QTYSHPREL, ".
                "SUM(QTYPICK) AS QTYPICK, ".
                "SUM(QTYPACK) AS QTYPACK, ".
                "Sum(WEIGHT) AS WEIGHT ".
                "FROM $tableName ".
                "WHERE NOT(WMSTATUS = 'R' OR WMSTATUS = 'I' OR WMSTATUS = 'X') ".
                "AND ((QTYPICK > QTYPACK) Or (QTYPICK = 0))".
                "GROUP BY SHPRELNO, ORDNUM, SHPRELDATE, BATCH_NO";
 
        $query = $this->dbDriver->GetQuery();
        $queryResult = $query->Execute($sqlString);

        return $queryResult;
    }
    
    public function GetItemsByTicket($ticket, $showFinished) {
        $tableName = $this->entityName . $this->companySuffix;
        $lowerTicket = strtolower($ticket);
        
        
        $sqlString = "SELECT ".
                "ITEMNO, QTYPICK, QTYSHPREL, LOCNO, QBLISTID ".
                "FROM $tableName ".
                "WHERE LOWER(SHPRELNO) = '$lowerTicket'";
        
        if ($showFinished === 'false') {
            $sqlString .= " AND QTYSHPREL <> QTYPICK";
        }
        $query = $this->dbDriver->GetQuery();
        $queryResult = $query->Execute($sqlString);

        return $queryResult;
    }
    
    public function GetTicketsPager($itemsPerpage = 5, $middleRange = 5, $showPagerControlsIfMoreThan = 10 ) {
        $tableName = $this->entityName . $this->companySuffix;        
        $sqlString = "SELECT DISTINCT ".
                "SHPRELNO, ORDNUM, SHPRELDATE, BATCH_NO, ".
                "SUM(QTYSHPREL) AS QTYSHPREL, ".
                "SUM(QTYPICK) AS QTYPICK, ".
                "SUM(QTYPACK) AS QTYPACK, ".
                "Sum(WEIGHT) AS WEIGHT ".
                "FROM $tableName ".
                "WHERE NOT(WMSTATUS = 'R' OR WMSTATUS = 'I' OR WMSTATUS = 'X') ".
                "AND ((QTYPICK > QTYPACK) Or (QTYPICK = 0))".
                "GROUP BY SHPRELNO, ORDNUM, SHPRELDATE, BATCH_NO";    
 
        $query = $this->dbDriver->GetQuery();
        $queryResult = $query->Execute($sqlString);        
        $itemsCount = count($queryResult);
        return new BootstrapPager($this->dbDriver, $this->entityName, $sqlString, $itemsPerpage, $middleRange, $showPagerControlsIfMoreThan, $itemsCount);        
    }

    public function UpdateItem ($item, $qblistid, $value, $location){
        $itemLower = strtolower($item);
        $qblistidLower = strtolower($qblistid);
        $tableName = $this->entityName . $this->companySuffix;

        $sqlString = "UPDATE $tableName SET " .
                "WMSTATUS = 'P', " .
                "LOCNO = '$location', " .
                "QTYPICK = (QTYPICK + $value) " .
                //"WHERE LOWER(ITEMNO) = '$itemLower' AND LOWER(QBLISTID) = '$qblistidLower'";
                "WHERE LOWER(QBTXLINEID) = '$itemLower'";
                
        
        // From Vivian's: UPDATE SOSHPREL00 SET 
        // WMSTATUS = 'P', QTYPICK = QTYPICK + 'valor del qtyform' WHERE ITEMNO = 'item'  
        // ( aqui tienes que agregar la condicion que sea ese ticket number o usar el qblistid para update el record correcto)
        error_log($sqlString);
        $query = $this->dbDriver->GetQuery();
        return $query->Execute($sqlString);
    }
    
    public function UpdateItemByQbtxlineid ($qbtxlineid, $value, $location){
        $tableName = $this->entityName . $this->companySuffix;
        
        $sqlString = "UPDATE $tableName SET " .
                "WMSTATUS = 'P', ";
        if ($location !== '') {
            $sqlString .= "LOCNO = '$location', ";
        }
        $sqlString .= "QTYPICK = (QTYPICK + $value) " .
        //"WHERE LOWER(ITEMNO) = '$itemLower' AND LOWER(QBLISTID) = '$qblistidLower'";
        "WHERE QBTXLINEID = '$qbtxlineid'";

        error_log($sqlString);
        $query = $this->dbDriver->GetQuery();
        return $query->Execute($sqlString);
    }
    
    public function GetQtypick($item, $qblistid) {
        $itemLower = strtolower($item);
        $qblistidLower = strtolower($qblistid);
        
        $tableName = $this->entityName . $this->companySuffix;

        $sqlString = "SELECT ".
                "QTYPICK ".
                "FROM $tableName ".
                "WHERE LOWER(ITEMNO) = '$itemLower' AND LOWER(QBLISTID) = '$qblistidLower'";
      
        error_log($sqlString);
        
        $query = $this->dbDriver->GetQuery();
        return $query->Execute($sqlString);
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
