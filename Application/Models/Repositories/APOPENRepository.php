<?php

/**
 * Project:  VFP Business Series
 * Copyright: 2014. VFP Business Solutions, LLC
 */

namespace Dandelion\MVC\Application\Models\Repositories;

use Dandelion\Diana\Interfaces\IRepository;
use Dandelion\MVC\Application\Models\Entities\APOPEN;

class APOPENRepository extends VFPRepository implements IRepository {

    /**
     * @return array of all APOPEN objects from DB
     */
    public function GetAll() {
        $tableName = $this->entityName . $this->companySuffix;
        $sqlString = "SELECT * FROM $tableName";
        $query = $this->dbDriver->GetQuery();
        $queryResult = $query->Execute($sqlString);
        $result = array();

        foreach ($queryResult as $row) {
            $result [] = new APOPEN(trim($row->INVNO), trim($row->INVDATE), trim($row->VENDNO), trim($row->VOUCHER), trim($row->ITOTAL), trim($row->BALANCE), trim($row->AMTPAID), trim($row->DTEPAID), trim($row->DISCTOTAL), trim($row->REFNO), trim($row->DUEDAY), trim($row->DISCDAY), trim($row->NETDATE), trim($row->DISTDATE), trim($row->DISCDATE), trim($row->DISCPERC), trim($row->TERMS), trim($row->TERMDESC), trim($row->APACCT), trim($row->CASHACCT), trim($row->AMTTOPAY), trim($row->DISCOUNT), trim($row->CHECK_NO), trim($row->PERIOD), trim($row->RECNO), trim($row->DEFFERD), trim($row->PMT), trim($row->VOIDED), trim($row->FVOID), trim($row->NONAP), trim($row->BATCH), trim($row->PONUM), trim($row->DUEDATE), trim($row->MARK), trim($row->MARKM), trim($row->NFLG0), trim($row->INDUST), trim($row->BASEID), trim($row->ORGVALUE), trim($row->EXCHRATE), trim($row->NOTES), trim($row->CURRID), trim($row->YEAR), trim($row->PMTMED), trim($row->CMPTYPE), trim($row->TAXCODE1), trim($row->TAXCODE2), trim($row->TAXCODE3), trim($row->TAXPER1), trim($row->TAXPER2), trim($row->TAXPER3), trim($row->TAXTYP1TOT), trim($row->TAXTYP2TOT), trim($row->TAXTYP3TOT), trim($row->TAXPER), trim($row->BASEAMT), trim($row->TAXAMT), trim($row->INVTOTAL), trim($row->EXPTOTAL), trim($row->APTOTAL), trim($row->CURRSTAT), trim($row->FUPDTIME), trim($row->FUPDDATE), trim($row->FUSERID), trim($row->FSTATION), trim($row->W9), trim($row->DEFVCHR), trim($row->POPREFIX), trim($row->BANKACCT), trim($row->BANKAMT), trim($row->SOURCE), trim($row->RIMNO), trim($row->COSTGROUP), trim($row->REMITCODE), trim($row->POSHPAMT), trim($row->POSHPQTY), trim($row->POSHPFLAG), trim($row->POSTFROM), trim($row->WIREFLAG), trim($row->CUSTNO), trim($row->PAYMETHOD), trim($row->PAYACCOUNT), trim($row->PAYVENDNO), trim($row->ORDNUM), trim($row->QBTXNID), trim($row->QBLISTID), trim($row->JOBCOST), trim($row->PPAMOUNT), trim($row->GLBATCHNO));
        }

        return $result;
    }

    /**
     * @param string $predicate SQL Query Where clause
     * @return \Dandelion\MVC\Application\Models\Entities\APOPEN
     */
    public function Get($predicate) {
        $tableName = $this->entityName . $this->companySuffix;
        $sqlString = "SELECT * FROM $tableName";
        $sqlString .= ' ' . $predicate;
        $query = $this->dbDriver->GetQuery();
        $queryResult = $query->Execute($sqlString);
        $result = array();

        foreach ($queryResult as $row) {
            $result [] = new APOPEN(trim($row->INVNO), trim($row->INVDATE), trim($row->VENDNO), trim($row->VOUCHER), trim($row->ITOTAL), trim($row->BALANCE), trim($row->AMTPAID), trim($row->DTEPAID), trim($row->DISCTOTAL), trim($row->REFNO), trim($row->DUEDAY), trim($row->DISCDAY), trim($row->NETDATE), trim($row->DISTDATE), trim($row->DISCDATE), trim($row->DISCPERC), trim($row->TERMS), trim($row->TERMDESC), trim($row->APACCT), trim($row->CASHACCT), trim($row->AMTTOPAY), trim($row->DISCOUNT), trim($row->CHECK_NO), trim($row->PERIOD), trim($row->RECNO), trim($row->DEFFERD), trim($row->PMT), trim($row->VOIDED), trim($row->FVOID), trim($row->NONAP), trim($row->BATCH), trim($row->PONUM), trim($row->DUEDATE), trim($row->MARK), trim($row->MARKM), trim($row->NFLG0), trim($row->INDUST), trim($row->BASEID), trim($row->ORGVALUE), trim($row->EXCHRATE), trim($row->NOTES), trim($row->CURRID), trim($row->YEAR), trim($row->PMTMED), trim($row->CMPTYPE), trim($row->TAXCODE1), trim($row->TAXCODE2), trim($row->TAXCODE3), trim($row->TAXPER1), trim($row->TAXPER2), trim($row->TAXPER3), trim($row->TAXTYP1TOT), trim($row->TAXTYP2TOT), trim($row->TAXTYP3TOT), trim($row->TAXPER), trim($row->BASEAMT), trim($row->TAXAMT), trim($row->INVTOTAL), trim($row->EXPTOTAL), trim($row->APTOTAL), trim($row->CURRSTAT), trim($row->FUPDTIME), trim($row->FUPDDATE), trim($row->FUSERID), trim($row->FSTATION), trim($row->W9), trim($row->DEFVCHR), trim($row->POPREFIX), trim($row->BANKACCT), trim($row->BANKAMT), trim($row->SOURCE), trim($row->RIMNO), trim($row->COSTGROUP), trim($row->REMITCODE), trim($row->POSHPAMT), trim($row->POSHPQTY), trim($row->POSHPFLAG), trim($row->POSTFROM), trim($row->WIREFLAG), trim($row->CUSTNO), trim($row->PAYMETHOD), trim($row->PAYACCOUNT), trim($row->PAYVENDNO), trim($row->ORDNUM), trim($row->QBTXNID), trim($row->QBLISTID), trim($row->JOBCOST), trim($row->PPAMOUNT), trim($row->GLBATCHNO));
        }

        return $result;
    }

    public function GetAccountPayableValue(){
        $tableName = $this->entityName . $this->companySuffix;
        $sqlString = "SELECT SUM(BALANCE) AS VALUE FROM $tableName";
//        $sqlString .= ' WHERE BALANCE > 0' ;
//        Alex: Issue with ap value calculation. All ap rows don't have a custno value
//        $sqlString .= " WHERE CUSTNO <> ''" ;
        $query = $this->dbDriver->GetQuery();
        $queryResult = $query->Execute($sqlString);
        return $queryResult[0];
    }

    public function GetAllCustno()
    {
        $tableName = $this->entityName . $this->companySuffix;
        $sqlString = "SELECT VENDNO FROM $tableName";
        $sqlString .= ' WHERE BALANCE > 0 GROUP BY VENDNO';
//        error_log($sqlString);

        $query = $this->dbDriver->GetQuery();
        $queryResult = $query->Execute($sqlString);

        return $queryResult;
    }

    /**
     * @param int $month
     * @param int $yearOffset
     * @return mixed
     */
    public function GetAPByMonth($month = 1, $yearOffset = 0)
    {
        //SELECT SUM(BALANCE) FROM APOPEN05 WHERE MONTH(invdate) = 4 AND YEAR(invdate) =  (YEAR(CURDATE())) - 1

        $tableName = $this->entityName . $this->companySuffix;
        $sqlString = "SELECT SUM(itotal) AS VALUE FROM $tableName WHERE MONTH(invdate) = $month AND YEAR(invdate) = (YEAR(CURDATE())) - $yearOffset";
//        error_log("APOPEN QUERY:".$sqlString);
        $query = $this->dbDriver->GetQuery();
        $queryResult = $query->Execute($sqlString);

        return $queryResult[0];
    }

    /**
     * Details
     * @param $vendno
     * @return mixed
     */
    public function GetVendnoData($vendno)
    {
        $tableName = $this->entityName . $this->companySuffix;
        $sqlString = "SELECT curdate() - invdate as DAYS, BALANCE FROM $tableName";
        $sqlString .= " WHERE VENDNO = '$vendno' AND BALANCE > 0";
        $query = $this->dbDriver->GetQuery();
        $queryResult = $query->Execute($sqlString);

        return $queryResult;
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
