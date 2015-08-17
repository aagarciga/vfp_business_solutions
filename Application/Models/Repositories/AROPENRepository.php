<?php

/**
 * Project:  VFP Business Series
 * Copyright: 2014. VFP Business Solutions, LLC
 */

namespace Dandelion\MVC\Application\Models\Repositories;

use Dandelion\Diana\Interfaces\IRepository;
use Dandelion\MVC\Application\Models\Entities\AROPEN;

class AROPENRepository extends VFPRepository implements IRepository {

    /**
     * @return array of all AROPEN objects from DB
     */
    public function GetAll() {
        $tableName = $this->entityName . $this->companySuffix;
        $sqlString = "SELECT * FROM $tableName";
        $query = $this->dbDriver->GetQuery();
        $queryResult = $query->Execute($sqlString);
        $result = array();

        foreach ($queryResult as $row) {
            $result [] = new AROPEN(trim($row->INVNO), trim($row->TRXNO), trim($row->INVDATE), trim($row->CUSTNO), trim($row->COMPANY), trim($row->SALESMN), trim($row->PONUM), trim($row->INVTOTAL), trim($row->AMTPAID), trim($row->DATEPAID), trim($row->REFNO), trim($row->TRXBAL), trim($row->DUEDATE), trim($row->DISCDATE), trim($row->DISCAMT), trim($row->DISCID), trim($row->NONAR), trim($row->TERMID), trim($row->ACCT2), trim($row->ARACCT), trim($row->OPENBAL), trim($row->AUX1), trim($row->AUX2), trim($row->AUX3), trim($row->AUX4), trim($row->AUX5), trim($row->ALF), trim($row->BATCH_NO), trim($row->TRACKNO), trim($row->DEPGROUP), trim($row->SUBBATCHNO), trim($row->DISCOUNT), trim($row->ARCRNOTES), trim($row->ORDNUM), trim($row->WHSNO), trim($row->GLARACCT), trim($row->YEAR), trim($row->PERIOD), trim($row->VOID), trim($row->ORGVALUE), trim($row->EXCHRATE), trim($row->CURRID), trim($row->BASEID), trim($row->DEPACCT), trim($row->DEPDATE), trim($row->FUPDTIME), trim($row->FUPDDATE), trim($row->FSTATION), trim($row->FUSERID), trim($row->SOURCENO), trim($row->SRCTYPE), trim($row->PAYTID), trim($row->TRXORIGIN), trim($row->PAYPALFEE), trim($row->INVNOFC), trim($row->CSTCTID), trim($row->FLGCOLLECT), trim($row->NTOFLGAG), trim($row->NTODATE), trim($row->COLLDATE), trim($row->LIENFLAG), trim($row->LIENDATE), trim($row->NTOFLAG), trim($row->LIENDATERL), trim($row->USERCODE), trim($row->NOTEFLAG), trim($row->NOPAYMENTS), trim($row->STARTDAYS), trim($row->TOTALDAYS), trim($row->SPECTERMS), trim($row->SPECTERAMT), trim($row->PAYFREQDAY), trim($row->FIRSTDUEDT), trim($row->STARTDATE), trim($row->NSFCHECK), trim($row->QBTXNID), trim($row->POSINVNO), trim($row->QBLISTID), trim($row->SHPRELNO));
        }

        return $result;
    }

    /**
     * @param string $predicate SQL Query Where clause
     * @return \Dandelion\MVC\Application\Models\Entities\AROPEN
     */
    public function Get($predicate) {
        $tableName = $this->entityName . $this->companySuffix;
        $sqlString = "SELECT * FROM $tableName";
        $sqlString .= ' ' . $predicate;
        $query = $this->dbDriver->GetQuery();
        $queryResult = $query->Execute($sqlString);
        $result = array();

        foreach ($queryResult as $row) {
            $result [] = new AROPEN(trim($row->INVNO), trim($row->TRXNO), trim($row->INVDATE), trim($row->CUSTNO), trim($row->COMPANY), trim($row->SALESMN), trim($row->PONUM), trim($row->INVTOTAL), trim($row->AMTPAID), trim($row->DATEPAID), trim($row->REFNO), trim($row->TRXBAL), trim($row->DUEDATE), trim($row->DISCDATE), trim($row->DISCAMT), trim($row->DISCID), trim($row->NONAR), trim($row->TERMID), trim($row->ACCT2), trim($row->ARACCT), trim($row->OPENBAL), trim($row->AUX1), trim($row->AUX2), trim($row->AUX3), trim($row->AUX4), trim($row->AUX5), trim($row->ALF), trim($row->BATCH_NO), trim($row->TRACKNO), trim($row->DEPGROUP), trim($row->SUBBATCHNO), trim($row->DISCOUNT), trim($row->ARCRNOTES), trim($row->ORDNUM), trim($row->WHSNO), trim($row->GLARACCT), trim($row->YEAR), trim($row->PERIOD), trim($row->VOID), trim($row->ORGVALUE), trim($row->EXCHRATE), trim($row->CURRID), trim($row->BASEID), trim($row->DEPACCT), trim($row->DEPDATE), trim($row->FUPDTIME), trim($row->FUPDDATE), trim($row->FSTATION), trim($row->FUSERID), trim($row->SOURCENO), trim($row->SRCTYPE), trim($row->PAYTID), trim($row->TRXORIGIN), trim($row->PAYPALFEE), trim($row->INVNOFC), trim($row->CSTCTID), trim($row->FLGCOLLECT), trim($row->NTOFLGAG), trim($row->NTODATE), trim($row->COLLDATE), trim($row->LIENFLAG), trim($row->LIENDATE), trim($row->NTOFLAG), trim($row->LIENDATERL), trim($row->USERCODE), trim($row->NOTEFLAG), trim($row->NOPAYMENTS), trim($row->STARTDAYS), trim($row->TOTALDAYS), trim($row->SPECTERMS), trim($row->SPECTERAMT), trim($row->PAYFREQDAY), trim($row->FIRSTDUEDT), trim($row->STARTDATE), trim($row->NSFCHECK), trim($row->QBTXNID), trim($row->POSINVNO), trim($row->QBLISTID), trim($row->SHPRELNO));
        }

        return $result;
    }

    public function GetCustnoCompanyPair() {
        $tableName = $this->entityName . $this->companySuffix;
        $sqlString = "SELECT CUSTNO, COMPANY FROM $tableName";
        $sqlString .= ' GROUP BY CUSTNO, COMPANY';
        $query = $this->dbDriver->GetQuery();
        $queryResult = $query->Execute($sqlString);


        return $queryResult;
    }

    public function GetCustnoData($custno) {
        $tableName = $this->entityName . $this->companySuffix;
        $sqlString = "SELECT curdate() - invdate as DAYS, OPENBAL FROM $tableName";
        $sqlString .= " WHERE CUSTNO = '$custno'";
//        $sqlString .= ' GROUP BY CUSTNO, invdate, OPENBAL';
        $query = $this->dbDriver->GetQuery();
        $queryResult = $query->Execute($sqlString);


        return $queryResult;
    }

    public function GetAccountReceivableValue(){
        $tableName = $this->entityName . $this->companySuffix;
        $sqlString = "SELECT SUM(OPENBAL) AS VALUE FROM $tableName";
//        $sqlString .= ' WHERE OPENBAL > 0' ;
        $query = $this->dbDriver->GetQuery();
        $queryResult = $query->Execute($sqlString);
        return $queryResult[0];
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
