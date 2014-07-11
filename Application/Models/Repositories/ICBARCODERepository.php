<?php

/**
 * Project:  VFP Business Series
 * Copyright: 2014. VFP Business Solutions, LLC
 */

namespace Dandelion\MVC\Application\Models\Repositories;

use Dandelion\Diana\Interfaces\IRepository;
use Dandelion\MVC\Application\Models\Entities\ICBARCODE;

class ICBARCODERepository extends VFPRepository implements IRepository {

    /**
     * @return array of all ICBARCODE objects from DB
     */
    public function GetAll() {
        $tableName = $this->entityName . $this->companySuffix;
        $sqlString = "SELECT * FROM $tableName";
        $query = $this->dbDriver->GetQuery();
        $queryResult = $query->Execute($sqlString);
        $result = array();

        foreach ($queryResult as $row) {
            $result [] = new ICBARCODE($row->DOCNO, $row->TYPE, $row->BARCODE, $row->SERIALNO, $row->WHS, $row->ITMCOUNT, $row->LOCATION, $row->QTY, $row->VFPUSER, $row->DATE, $row->VFPDELETE, $row->NFLG0, $row->SERIALNF, $row->FUPDTIME, $row->FUPDDATE, $row->FSTATION, $row->FUSERID, $row->ITEMNO, $row->DESCRIP, $row->DUPRECORD, $row->DUPRECDEL, $row->LOCNO, $row->UPCCODE, $row->QBLISTID, $row->WHSNO, $row->PONO, $row->QTYSCAN, $row->PROSTATUS, $row->QTYTOPO, $row->UPDPODATE, $row->UPDPONO);
        }

        return $result;
    }

    /**
     * @param string $predicate SQL Query Where clause
     * @return \Dandelion\MVC\Application\Models\Entities\ICBARCODE
     */
    public function Get($predicate) {
        $tableName = $this->entityName . $this->companySuffix;
        $sqlString = "SELECT * FROM $tableName";
        $sqlString .= ' ' . $predicate;
        $query = $this->dbDriver->GetQuery();
        $queryResult = $query->Execute($sqlString);
        $result = array();

        foreach ($queryResult as $row) {
            $result [] = new ICBARCODE($row->DOCNO, $row->TYPE, $row->BARCODE, $row->SERIALNO, $row->WHS, $row->ITMCOUNT, $row->LOCATION, $row->QTY, $row->VFPUSER, $row->DATE, $row->VFPDELETE, $row->NFLG0, $row->SERIALNF, $row->FUPDTIME, $row->FUPDDATE, $row->FSTATION, $row->FUSERID, $row->ITEMNO, $row->DESCRIP, $row->DUPRECORD, $row->DUPRECDEL, $row->LOCNO, $row->UPCCODE, $row->QBLISTID, $row->WHSNO, $row->PONO, $row->QTYSCAN, $row->PROSTATUS, $row->QTYTOPO, $row->UPDPODATE, $row->UPDPONO);
        }

        return $result;
    }

    public function Add($entity) {
        
        $docno = $entity->getDocno();
        $type = $entity->getType();
        $barcode = $entity->getBarcode();     
        $serialno = $entity->getSerialno();
        $whs = $entity->getWhs();
        $itmcount = $entity->getItmcount();
        $location = $entity->getLocation();
        $qty = $entity->getQty();
        $vfpuser = $entity->getVfpuser();
        $date = $entity->getDate();
        $vfpdelete = $entity->getVfpdelete()? "True" : "False";
        $nflg0 = $entity->getNflg0() ? "True" : "False";
        $serialnf = $entity->getSerialnf()? "True" : "False";
        $fupdtime = $entity->getFupdtime();
        $fupddate = $entity->getFupddate();
        $fstation = $entity->getFstation();
        $fuserid = $entity->getFuserid();
        $itemno = $entity->getItemno();
        $descrip = $entity->getDescrip();
        $duprecord = $entity->getDuprecord()? "True" : "False";
        $duprecdel = $entity->getDuprecdel()? "True" : "False";
        $locno = $entity->getLocno();
        $upccode = $entity->getUpccode();
        $qblistid = $entity->getQblistid();
        $whsno = $entity->getWhsno();
        $pono = $entity->getPono();
        $qtyscan = $entity->getQtyscan();
        $prostatus = $entity->getProstatus();
        $qtytopo = $entity->getQtytopo();
        $updpodate = $entity->getUpdpodate();
        $updpono = $entity->getUpdpono();
        
        $sqlString = "INSERT INTO " . $this->entityName . $this->companySuffix 
                . " (       DOCNO,      \"TYPE\",   BARCODE,    SERIALNO,       WHS,    ITMCOUNT,       LOCATION,       QTY,    VFPUSER,        \"DATE\", VFPDELETE,   NFLG0,  SERIALNF,   FUPDTIME,       FUPDDATE,       FSTATION,       FUSERID,        ITEMNO,     DESCRIP,    DUPRECORD,  DUPRECDEL,  LOCNO,      UPCCODE,    QBLISTID,       WHSNO,      PONO,       QTYSCAN,    PROSTATUS,      QTYTOPO,    UPDPODATE,      UPDPONO)"
                . " VALUES('$docno' ,   '$type',    '$barcode', '$serialno',    '$whs', '$itmcount',    '$location',    $qty,   '$vfpuser',    '$date',   $vfpdelete,  $nflg0, $serialnf,  '$fupdtime',    '$fupddate',    '$fstation',    '$fuserid',     '$itemno',  '$descrip', $duprecord, $duprecdel, '$locno',   '$upccode', '$qblistid',    '$whsno',   '$pono',    $qtyscan,   '$prostatus',   $qtytopo,   '$updpodate',   '$updpono')";

//                INSERT INTO ICBARCODE00
//                (DOCNO, TYPE, BARCODE, SERIALNO, WHS, ITMCOUNT, LOCATION, QTY,
//                FUSER, DATE, FDELETE, NFLG0, SERIALNF, FUPDTIME,
//                FUPDDATE, FSTATION, FUSERID, ITEMNO, DESCRIP, DUPRECORD, DUPRECDEL,
//                LOCNO, UPCCODE,QBLISTID, WHSNO, PONO, QTYSCAN, PROSTATUS, QTYTOPO,
//                UPDPODATE, UPDPONO)
//                VALUES('docno','ME', '200',    '',     '000', 'OK',     '100',      5,
//                '', '1999-03-19 13:45:33.013', False, False, False,       '123',
//                '1992-05-25', 'ADMIN', 'ADMIN',  '200', 'TEST-200',False, False,
//                '100', '4567', '', '',    '',     0,     ''         ,0,    '1992-05-25'
//                ,'')
        
        $query = $this->dbDriver->GetQuery();
        return $query->Execute($sqlString);
    }

    public function Update($entity) {
        
        $docno = $entity->getDocno();
        $type = $entity->getType();
        $barcode = $entity->getBarcode();     
        $serialno = $entity->getSerialno();
        $whs = $entity->getWhs();
        $itmcount = $entity->getItmcount();
        $location = $entity->getLocation();
        $qty = $entity->getQty();
        $vfpuser = $entity->getVfpuser();
        $date = $entity->getDate();
        $vfpdelete = $entity->getVfpdelete()? "True" : "False";
        $nflg0 = $entity->getNflg0() ? "True" : "False";
        $serialnf = $entity->getSerialnf()? "True" : "False";
        $fupdtime = $entity->getFupdtime();
        $fupddate = $entity->getFupddate();
        $fstation = $entity->getFstation();
        $fuserid = $entity->getFuserid();
        $itemno = $entity->getItemno();
        $descrip = $entity->getDescrip();
        $duprecord = $entity->getDuprecord()? "True" : "False";
        $duprecdel = $entity->getDuprecdel()? "True" : "False";
        $locno = $entity->getLocno();
        $upccode = $entity->getUpccode();
        $qblistid = $entity->getQblistid();
        $whsno = $entity->getWhsno();
        $pono = $entity->getPono();
        $qtyscan = $entity->getQtyscan();
        $prostatus = $entity->getProstatus();
        $qtytopo = $entity->getQtytopo();
        $updpodate = $entity->getUpdpodate();
        $updpono = $entity->getUpdpono();
        
        $sqlString = "UPDATE " . $this->entityName . $this->companySuffix . " SET \"TYPE\" = '$type', BARCODE = '$barcode', SERIALNO = '$serialno', WHS = '$whs', ITMCOUNT = '$itmcount', LOCATION = '$location', QTY = $qty, VFPUSER = '$vfpuser', \"DATE\" = '$date', VFPDELETE = $vfpdelete, NFLG0 = $nflg0, SERIALNF = $serialnf, FUPDTIME = '$fupdtime', FUPDDATE = '$fupddate', FSTATION = '$fstation', FUSERID = '$fuserid', ITEMNO = '$itemno', DESCRIP = '$descrip', DUPRECORD = $duprecord, DUPRECDEL = $duprecdel, LOCNO = '$locno', UPCCODE = '$upccode', QBLISTID = '$qblistid', WHSNO = '$whsno', PONO = '$pono', QTYSCAN = $qtyscan, PROSTATUS = '$prostatus', QTYTOPO = $qtytopo, UPDPODATE = '$updpodate', UPDPONO = '$updpono'"
                . " WHERE DOCNO = '$docno'";
        $query = $this->dbDriver->GetQuery();
        return $query->Execute($sqlString);
    }
    
    /**
     * Returns ICBARCODE entity by a given itemno and location, null otherwise
     * @param string $itemno
     * @param string $location
     * @return \Dandelion\MVC\Application\Models\Entities\ICBARCODE
     */
    public function GetByItemnoAndLocation($itemno, $location) {
        
        $lowerItemno = strtolower($itemno);
        $lowerLocation = strtolower($location);
        
        $tableName = $this->entityName . $this->companySuffix;
        $sqlString = "SELECT * FROM $tableName";
        $sqlString .= " WHERE lower(ITEMNO) = '$lowerItemno' AND lower(LOCATION) = '$lowerLocation'";
        
        $query = $this->dbDriver->GetQuery();
        $queryResult = $query->Execute($sqlString);
        $result = null;
        
        if (count($queryResult)) {
            $row = $queryResult[0];
            $result = new ICBARCODE($row->DOCNO, $row->TYPE, $row->BARCODE, $row->SERIALNO, $row->WHS, $row->ITMCOUNT, $row->LOCATION, $row->QTY, $row->VFPUSER, $row->DATE, $row->VFPDELETE, $row->NFLG0, $row->SERIALNF, $row->FUPDTIME, $row->FUPDDATE, $row->FSTATION, $row->FUSERID, $row->ITEMNO, $row->DESCRIP, $row->DUPRECORD, $row->DUPRECDEL, $row->LOCNO, $row->UPCCODE, $row->QBLISTID, $row->WHSNO, $row->PONO, $row->QTYSCAN, $row->PROSTATUS, $row->QTYTOPO, $row->UPDPODATE, $row->UPDPONO);
        }

        return $result;
    }
    
    public function Delete($entity) {
        // TODO: Implement Delete() method.
    }
    
}
