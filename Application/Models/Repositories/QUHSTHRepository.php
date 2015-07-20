<?php

/**
 * Project:  VFP Business Series
 * Copyright: 2014. VFP Business Solutions, LLC
 */

namespace Dandelion\MVC\Application\Models\Repositories;

use Dandelion\Diana\Interfaces\IRepository;
use Dandelion\MVC\Application\Models\Entities\QUHSTH;

class QUHSTHRepository extends VFPRepository implements IRepository {

    /**
     * @return array of all QUHSTH objects from DB
     */
    public function GetAll() {
        $tableName = $this->entityName . $this->companySuffix;
        $sqlString = "SELECT * FROM $tableName";
        $query = $this->dbDriver->GetQuery();
        $queryResult = $query->Execute($sqlString);
        $result = array();

        foreach ($queryResult as $row) {
            $result [] = new QUHSTH(trim($row->QUTNO), trim($row->QUTDATE), trim($row->QUTREQNO), trim($row->QUTSTAT), trim($row->QUTSPCL), trim($row->ORDNUM), trim($row->INVNO), trim($row->SOURCE), trim($row->CLOSECOMM), trim($row->INHSECOMM), trim($row->PONUM), trim($row->CUSTNO), trim($row->COMMISSION), trim($row->COMSLMN), trim($row->COMSLMN2), trim($row->SALESMN), trim($row->SALESMN2), trim($row->INDUST), trim($row->TERR), trim($row->CLASS), trim($row->FOBSTAT), trim($row->SHIPVIA), trim($row->SHIPSTAT), trim($row->SHIPFROM), trim($row->TERMDESC), trim($row->TERMDESC1), trim($row->SUBTOTAL), trim($row->DISC), trim($row->DISCOUNT), trim($row->MSUBTOTAL), trim($row->TXRT), trim($row->TAX), trim($row->SHIPPING), trim($row->TOTAL), trim($row->TOTCOST), trim($row->SUBTOTAL0), trim($row->SUBTOTPO), trim($row->TOTCOST0), trim($row->TAX0), trim($row->TAXEXT), trim($row->TAXEXT0), trim($row->TAXPO), trim($row->TAXEXTPO), trim($row->SHIPPO), trim($row->TOTAL0), trim($row->TOTALPO), trim($row->SHIPDATE), trim($row->DELIVERY), trim($row->VALIDITY), trim($row->FRGHTS), trim($row->TOTWGHT), trim($row->PREPAID), trim($row->REFNO), trim($row->PPDREF), trim($row->COMPANY), trim($row->ADDRESS1), trim($row->ADDRESS2), trim($row->ADDRESS3), trim($row->CITY), trim($row->STATE), trim($row->ZIP), trim($row->COUNTRY), trim($row->SHIPID), trim($row->SHIPTO1), trim($row->SHIPTO2), trim($row->SHIPTO3), trim($row->SHIPTO4), trim($row->SHIPTO5), trim($row->TERMID), trim($row->USERFLG), trim($row->INVTYPE), trim($row->KEY), trim($row->BLURB_ID), trim($row->FUSERID), trim($row->FSTATION), trim($row->NFLG1), trim($row->INVDATE), trim($row->PODATE), trim($row->PONO), trim($row->STATUS), trim($row->DTEREVIEW), trim($row->DTESIGNED), trim($row->DTECLOSE), trim($row->CARTOONS), trim($row->FREIGHT), trim($row->CUSTDISC), trim($row->SHIPVNAME), trim($row->SALESMN1NA), trim($row->SALESMN2NA), trim($row->NFLG0), trim($row->PRICEBY), trim($row->SWORDNUM), trim($row->SYSSTATUS), trim($row->WEBSYNCFLG), trim($row->TAXRATE), trim($row->TAXRATE1), trim($row->TAXRATE2), trim($row->TAXRATE3), trim($row->TAXRATE4), trim($row->FTAXCODE), trim($row->GLARACCT), trim($row->FRGHTPAY), trim($row->WHSNO), trim($row->DUEDAY), trim($row->DESTINO), trim($row->TRACKNO), trim($row->FUPDDATE), trim($row->FUPDTIME), trim($row->SOURCENO), trim($row->SRCTYPE), trim($row->DELETE), trim($row->NEWUSERID), trim($row->NEWSTATION), trim($row->NEWDTETIME), trim($row->APRVALDATE), trim($row->NTAPRVDATE), trim($row->REVDATE), trim($row->CSRDATE), trim($row->SENTDATE), trim($row->PRPAREDATE), trim($row->RFQDATE), trim($row->CLOSEPROB), trim($row->ANCLSEDATE), trim($row->NEXTFLLWUP), trim($row->LOSTSTATUS), trim($row->QUOTECOMM), trim($row->PHONE), trim($row->PHONE1), trim($row->FAX), trim($row->NOTEFLAG), trim($row->TOTBOTDEP), trim($row->SHPCOMPNAM), trim($row->SHPADDRS1), trim($row->SHPADDRS2), trim($row->SHPCITY), trim($row->SHPSTATE), trim($row->SHPZIP), trim($row->SHPCOUNTRY), trim($row->SHPBILLOPT), trim($row->SHPPHONE), trim($row->SHPEMAIL), trim($row->SHPCONTACT), trim($row->LOCPHONE), trim($row->LOCATIONID), trim($row->SOTYPECODE), trim($row->SOTYPE), trim($row->QBLISTID), trim($row->CSTCTID), trim($row->GLDEPT), trim($row->DELFLAG), trim($row->DELDATE), trim($row->DELUSERID), trim($row->TOSOFLAG), trim($row->TOSODATE), trim($row->TOSOUSERID), trim($row->TOIVFLAG), trim($row->TOIVDATE), trim($row->TOIVUSERID), trim($row->TOPOFLAG), trim($row->TOPODATE), trim($row->TOPOUSERID), trim($row->PROJNO));
        }

        return $result;
    }

    /**
     * @param string $predicate SQL Query Where clause
     * @return \Dandelion\MVC\Application\Models\Entities\QUHSTH
     */
    public function Get($predicate) {
        $tableName = $this->entityName . $this->companySuffix;
        $sqlString = "SELECT * FROM $tableName";
        $sqlString .= ' ' . $predicate;
        $query = $this->dbDriver->GetQuery();
        $queryResult = $query->Execute($sqlString);
        $result = array();

        foreach ($queryResult as $row) {
            $result = new QUHSTH(trim($row->QUTNO), trim($row->QUTDATE), trim($row->QUTREQNO), trim($row->QUTSTAT), trim($row->QUTSPCL), trim($row->ORDNUM), trim($row->INVNO), trim($row->SOURCE), trim($row->CLOSECOMM), trim($row->INHSECOMM), trim($row->PONUM), trim($row->CUSTNO), trim($row->COMMISSION), trim($row->COMSLMN), trim($row->COMSLMN2), trim($row->SALESMN), trim($row->SALESMN2), trim($row->INDUST), trim($row->TERR), trim($row->CLASS), trim($row->FOBSTAT), trim($row->SHIPVIA), trim($row->SHIPSTAT), trim($row->SHIPFROM), trim($row->TERMDESC), trim($row->TERMDESC1), trim($row->SUBTOTAL), trim($row->DISC), trim($row->DISCOUNT), trim($row->MSUBTOTAL), trim($row->TXRT), trim($row->TAX), trim($row->SHIPPING), trim($row->TOTAL), trim($row->TOTCOST), trim($row->SUBTOTAL0), trim($row->SUBTOTPO), trim($row->TOTCOST0), trim($row->TAX0), trim($row->TAXEXT), trim($row->TAXEXT0), trim($row->TAXPO), trim($row->TAXEXTPO), trim($row->SHIPPO), trim($row->TOTAL0), trim($row->TOTALPO), trim($row->SHIPDATE), trim($row->DELIVERY), trim($row->VALIDITY), trim($row->FRGHTS), trim($row->TOTWGHT), trim($row->PREPAID), trim($row->REFNO), trim($row->PPDREF), trim($row->COMPANY), trim($row->ADDRESS1), trim($row->ADDRESS2), trim($row->ADDRESS3), trim($row->CITY), trim($row->STATE), trim($row->ZIP), trim($row->COUNTRY), trim($row->SHIPID), trim($row->SHIPTO1), trim($row->SHIPTO2), trim($row->SHIPTO3), trim($row->SHIPTO4), trim($row->SHIPTO5), trim($row->TERMID), trim($row->USERFLG), trim($row->INVTYPE), trim($row->KEY), trim($row->BLURB_ID), trim($row->FUSERID), trim($row->FSTATION), trim($row->NFLG1), trim($row->INVDATE), trim($row->PODATE), trim($row->PONO), trim($row->STATUS), trim($row->DTEREVIEW), trim($row->DTESIGNED), trim($row->DTECLOSE), trim($row->CARTOONS), trim($row->FREIGHT), trim($row->CUSTDISC), trim($row->SHIPVNAME), trim($row->SALESMN1NA), trim($row->SALESMN2NA), trim($row->NFLG0), trim($row->PRICEBY), trim($row->SWORDNUM), trim($row->SYSSTATUS), trim($row->WEBSYNCFLG), trim($row->TAXRATE), trim($row->TAXRATE1), trim($row->TAXRATE2), trim($row->TAXRATE3), trim($row->TAXRATE4), trim($row->FTAXCODE), trim($row->GLARACCT), trim($row->FRGHTPAY), trim($row->WHSNO), trim($row->DUEDAY), trim($row->DESTINO), trim($row->TRACKNO), trim($row->FUPDDATE), trim($row->FUPDTIME), trim($row->SOURCENO), trim($row->SRCTYPE), trim($row->DELETE), trim($row->NEWUSERID), trim($row->NEWSTATION), trim($row->NEWDTETIME), trim($row->APRVALDATE), trim($row->NTAPRVDATE), trim($row->REVDATE), trim($row->CSRDATE), trim($row->SENTDATE), trim($row->PRPAREDATE), trim($row->RFQDATE), trim($row->CLOSEPROB), trim($row->ANCLSEDATE), trim($row->NEXTFLLWUP), trim($row->LOSTSTATUS), trim($row->QUOTECOMM), trim($row->PHONE), trim($row->PHONE1), trim($row->FAX), trim($row->NOTEFLAG), trim($row->TOTBOTDEP), trim($row->SHPCOMPNAM), trim($row->SHPADDRS1), trim($row->SHPADDRS2), trim($row->SHPCITY), trim($row->SHPSTATE), trim($row->SHPZIP), trim($row->SHPCOUNTRY), trim($row->SHPBILLOPT), trim($row->SHPPHONE), trim($row->SHPEMAIL), trim($row->SHPCONTACT), trim($row->LOCPHONE), trim($row->LOCATIONID), trim($row->SOTYPECODE), trim($row->SOTYPE), trim($row->QBLISTID), trim($row->CSTCTID), trim($row->GLDEPT), trim($row->DELFLAG), trim($row->DELDATE), trim($row->DELUSERID), trim($row->TOSOFLAG), trim($row->TOSODATE), trim($row->TOSOUSERID), trim($row->TOIVFLAG), trim($row->TOIVDATE), trim($row->TOIVUSERID), trim($row->TOPOFLAG), trim($row->TOPODATE), trim($row->TOPOUSERID), trim($row->PROJNO), trim($row->TECHNAM1), trim($row->TECHNAM2), trim($row->TECHPM1), trim($row->TECHPM2), trim($row->VESSELID), trim($row->JOBDESCRIP));
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

    public function GetByQuoteNo($value) {
        $lowerValue = strtolower($value);

        $tableName = $this->entityName . $this->companySuffix;
        $sqlString = "SELECT * FROM $tableName WHERE LOWER(QUTNO) = '$lowerValue'";

        $query = $this->dbDriver->GetQuery();
        $queryResult = $query->Execute($sqlString);
        $result = null;

        if (count($queryResult)) {
            $row = $queryResult[0];
            $result = new QUHSTH(trim($row->QUTNO), trim($row->QUTDATE), trim($row->QUTREQNO), trim($row->QUTSTAT), trim($row->QUTSPCL), trim($row->ORDNUM), trim($row->INVNO), trim($row->SOURCE), trim($row->CLOSECOMM), trim($row->INHSECOMM), trim($row->PONUM), trim($row->CUSTNO), trim($row->COMMISSION), trim($row->COMSLMN), trim($row->COMSLMN2), trim($row->SALESMN), trim($row->SALESMN2), trim($row->INDUST), trim($row->TERR), trim($row->CLASS), trim($row->FOBSTAT), trim($row->SHIPVIA), trim($row->SHIPSTAT), trim($row->SHIPFROM), trim($row->TERMDESC), trim($row->TERMDESC1), trim($row->SUBTOTAL), trim($row->DISC), trim($row->DISCOUNT), trim($row->MSUBTOTAL), trim($row->TXRT), trim($row->TAX), trim($row->SHIPPING), trim($row->TOTAL), trim($row->TOTCOST), trim($row->SUBTOTAL0), trim($row->SUBTOTPO), trim($row->TOTCOST0), trim($row->TAX0), trim($row->TAXEXT), trim($row->TAXEXT0), trim($row->TAXPO), trim($row->TAXEXTPO), trim($row->SHIPPO), trim($row->TOTAL0), trim($row->TOTALPO), trim($row->SHIPDATE), trim($row->DELIVERY), trim($row->VALIDITY), trim($row->FRGHTS), trim($row->TOTWGHT), trim($row->PREPAID), trim($row->REFNO), trim($row->PPDREF), trim($row->COMPANY), trim($row->ADDRESS1), trim($row->ADDRESS2), trim($row->ADDRESS3), trim($row->CITY), trim($row->STATE), trim($row->ZIP), trim($row->COUNTRY), trim($row->SHIPID), trim($row->SHIPTO1), trim($row->SHIPTO2), trim($row->SHIPTO3), trim($row->SHIPTO4), trim($row->SHIPTO5), trim($row->TERMID), trim($row->USERFLG), trim($row->INVTYPE), trim($row->KEY), trim($row->BLURB_ID), trim($row->FUSERID), trim($row->FSTATION), trim($row->NFLG1), trim($row->INVDATE), trim($row->PODATE), trim($row->PONO), trim($row->STATUS), trim($row->DTEREVIEW), trim($row->DTESIGNED), trim($row->DTECLOSE), trim($row->CARTOONS), trim($row->FREIGHT), trim($row->CUSTDISC), trim($row->SHIPVNAME), trim($row->SALESMN1NA), trim($row->SALESMN2NA), trim($row->NFLG0), trim($row->PRICEBY), trim($row->SWORDNUM), trim($row->SYSSTATUS), trim($row->WEBSYNCFLG), trim($row->TAXRATE), trim($row->TAXRATE1), trim($row->TAXRATE2), trim($row->TAXRATE3), trim($row->TAXRATE4), trim($row->FTAXCODE), trim($row->GLARACCT), trim($row->FRGHTPAY), trim($row->WHSNO), trim($row->DUEDAY), trim($row->DESTINO), trim($row->TRACKNO), trim($row->FUPDDATE), trim($row->FUPDTIME), trim($row->SOURCENO), trim($row->SRCTYPE), trim($row->DELETE), trim($row->NEWUSERID), trim($row->NEWSTATION), trim($row->NEWDTETIME), trim($row->APRVALDATE), trim($row->NTAPRVDATE), trim($row->REVDATE), trim($row->CSRDATE), trim($row->SENTDATE), trim($row->PRPAREDATE), trim($row->RFQDATE), trim($row->CLOSEPROB), trim($row->ANCLSEDATE), trim($row->NEXTFLLWUP), trim($row->LOSTSTATUS), trim($row->QUOTECOMM), trim($row->PHONE), trim($row->PHONE1), trim($row->FAX), trim($row->NOTEFLAG), trim($row->TOTBOTDEP), trim($row->SHPCOMPNAM), trim($row->SHPADDRS1), trim($row->SHPADDRS2), trim($row->SHPCITY), trim($row->SHPSTATE), trim($row->SHPZIP), trim($row->SHPCOUNTRY), trim($row->SHPBILLOPT), trim($row->SHPPHONE), trim($row->SHPEMAIL), trim($row->SHPCONTACT), trim($row->LOCPHONE), trim($row->LOCATIONID), trim($row->SOTYPECODE), trim($row->SOTYPE), trim($row->QBLISTID), trim($row->CSTCTID), trim($row->GLDEPT), trim($row->DELFLAG), trim($row->DELDATE), trim($row->DELUSERID), trim($row->TOSOFLAG), trim($row->TOSODATE), trim($row->TOSOUSERID), trim($row->TOIVFLAG), trim($row->TOIVDATE), trim($row->TOIVUSERID), trim($row->TOPOFLAG), trim($row->TOPODATE), trim($row->TOPOUSERID), trim($row->PROJNO), trim($row->TECHNAM1), trim($row->TECHNAM2), trim($row->TECHPM1), trim($row->TECHPM2), trim($row->VESSELID), trim($row->JOBDESCRIP));
        }

        return $result;
    }

}
