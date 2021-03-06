<?php

/**
 * Project:  VFP Business Series
 * Copyright: 2014. VFP Business Solutions, LLC
 */

namespace Dandelion\MVC\Application\Models\Repositories;

use Dandelion\Diana\Interfaces\IRepository;
use Dandelion\MVC\Application\Models\Entities\SOHEAD;

class SOHEADRepository extends VFPRepository implements IRepository {

    /**
     * @return array of all SOHEAD objects from DB
     */
    public function GetAll() {
        $tableName = $this->entityName . $this->companySuffix;
        $sqlString = "SELECT * FROM $tableName";
        $query = $this->dbDriver->GetQuery();
        $queryResult = $query->Execute($sqlString);
        $result = array();

        foreach ($queryResult as $row) {
            $result [] = new SOHEAD(trim($row->ORDNUM), trim($row->INVNO), trim($row->INVTYPE), trim($row->ITMSTATUS), trim($row->CUSTNO), trim($row->PONUM), trim($row->VENDNO), trim($row->PODATE), trim($row->INVDATE), trim($row->SHIPDATE), trim($row->FITEMTYPE), trim($row->FTOTCOST), trim($row->FCOSTTYPE), trim($row->PERIOD), trim($row->SALESMN), trim($row->COMMISSION), trim($row->COMSLMN), trim($row->SALESMN2), trim($row->COMSLMN2), trim($row->SALESMN1NA), trim($row->SALESMN2NA), trim($row->PRICEBY), trim($row->INDUST), trim($row->TERR), trim($row->FCLASS), trim($row->FOBSTAT), trim($row->SHIPVIA), trim($row->SHIPVNAME), trim($row->SHIPSTAT), trim($row->FRGHTS), trim($row->TERMID), trim($row->TERMDESC), trim($row->TERMDESC1), trim($row->SUBTOTAL), trim($row->SUBTOTAL0), trim($row->DISCOUNT), trim($row->TXRT), trim($row->TAXABLE), trim($row->TAX), trim($row->TAX0), trim($row->TAXEXT), trim($row->TAXEXT0), trim($row->ITEMTAX), trim($row->ITEMTAX0), trim($row->FTAXCODE), trim($row->SHIPPING), trim($row->FMISC1), trim($row->FMISC2), trim($row->FMISC3), trim($row->TOTAL), trim($row->TOTAL0), trim($row->PREPAID), trim($row->REFNO), trim($row->PPDREF), trim($row->COMPANY), trim($row->ADDRESS1), trim($row->ADDRESS2), trim($row->ADDRESS3), trim($row->CITY), trim($row->STATE), trim($row->ZIP), trim($row->COUNTRY), trim($row->SHIPID), trim($row->SHIPTO1), trim($row->SHIPTO2), trim($row->SHIPTO3), trim($row->SHIPTO4), trim($row->SHIPTO5), trim($row->DUEDAY), trim($row->DISCDAY), trim($row->DISC), trim($row->KEY), trim($row->USERFLG), trim($row->FUSERID), trim($row->FSTATION), trim($row->FBLURB_ID), trim($row->ITMCOUNT), trim($row->TOTCOST), trim($row->CLOSECOMM), trim($row->INHSECOMM), trim($row->VALIDITY), trim($row->SHIPFROM), trim($row->MSUBTOTAL), trim($row->DELIVERY), trim($row->VESSEL), trim($row->RELPORT), trim($row->DESTINO), trim($row->CAR), trim($row->CIGSN), trim($row->SOURCE), trim($row->CARTOONS), trim($row->FREIGHT), trim($row->PICTICBANO), trim($row->NFLG0), trim($row->NFLG1), trim($row->CUSTDISC), trim($row->SUBTOTALPO), trim($row->DISCOUNTPO), trim($row->SHIPPINGPO), trim($row->TXRTPO), trim($row->TAXPO), trim($row->TOTALPO), trim($row->COMPDATE), trim($row->HOLDSTATUS), trim($row->SOSTATUS), trim($row->REQDATE), trim($row->SOREVNO), trim($row->SWORDNUM), trim($row->SOTYPE), trim($row->MSUBTOTAL0), trim($row->DISCOUNT0), trim($row->WHSNO), trim($row->TAXRATE), trim($row->TAXRATE1), trim($row->TAXRATE2), trim($row->TAXRATE3), trim($row->TAXRATE4), trim($row->GLARACCT), trim($row->AUTHREF), trim($row->RECVIA), trim($row->RECVIANAME), trim($row->LABREQ), trim($row->RRTYPE), trim($row->FRGHTPAY), trim($row->VERIFY), trim($row->SWLOCK), trim($row->FUPDDATE), trim($row->FUPDTIME), trim($row->SOURCENO), trim($row->SRCTYPE), trim($row->CURRID), trim($row->ORGVALUE), trim($row->EXCHRATE), trim($row->BASEID), trim($row->CSTCTID), trim($row->SCHDSTATUS), trim($row->INSPECTNO), trim($row->SWCALLINBY), trim($row->ZONE), trim($row->AREA), trim($row->SWRECVBY), trim($row->SWRECTIME), trim($row->TRAVELTIME), trim($row->CHRGMILE), trim($row->HALFMILE), trim($row->TECHNOTES), trim($row->BILLABLE), trim($row->WARRANTY), trim($row->EMERGENCY), trim($row->PRIORITY), trim($row->CHARGE15), trim($row->CHARGE2X), trim($row->CONTRACT), trim($row->QUOTEDJOB), trim($row->DATESCHD), trim($row->TIMESCHD), trim($row->NEWUSERID), trim($row->NEWDTETIME), trim($row->NEWSTATION), trim($row->EQMAKE), trim($row->EQMODEL), trim($row->EQSERIALNO), trim($row->LOCATIONID), trim($row->LOCATION), trim($row->DATECALLSH), trim($row->TIMECALLSH), trim($row->DOCPREFIX), trim($row->LOCPHONE), trim($row->SWRETRIPS), trim($row->SWINSPOTHR), trim($row->USERSCHD), trim($row->GLDEPT), trim($row->CHGNOTES), trim($row->PHONE), trim($row->PHONE1), trim($row->FAX), trim($row->SHIPCOMM), trim($row->PICKDATEOK), trim($row->NOTBEFORDT), trim($row->OKTOPICK), trim($row->SOTYPECODE), trim($row->CONSDATE), trim($row->OWNRETAIL), trim($row->BIDORDER), trim($row->BIDDATE), trim($row->QUICKSHIP), trim($row->GLTAXACCT), trim($row->SUSPEND), trim($row->WMSSTATUS), trim($row->INSURFLAG), trim($row->DISTCHAN), trim($row->NORMAFLAG), trim($row->RMADATE), trim($row->PORMOFLAG), trim($row->ALLOCADATE), trim($row->DATEHOLD), trim($row->NOPAYMENTS), trim($row->STARTDAYS), trim($row->TOTALDAYS), trim($row->SPECTERMS), trim($row->SPECTERAMT), trim($row->PAYFREQDAY), trim($row->STARTDATE), trim($row->S_ROUTINE), trim($row->COMPTIME), trim($row->COMPSTAT), trim($row->ARVLTIME), trim($row->DRIVERLIC), trim($row->TOTWEIGHT0), trim($row->TOTALBAL), trim($row->PRINTFLAG), trim($row->ESTSHPDATE), trim($row->BUDADDAPRV), trim($row->COMMSET), trim($row->COMMSETDTE), trim($row->RETRESVTOT), trim($row->TOTAMTSAVE), trim($row->QBSYNCSTAT), trim($row->IVREFNO), trim($row->DTRSTART), trim($row->DTREND), trim($row->TOTBOTDEP), trim($row->PROSTARTDT), trim($row->PROENDDT), trim($row->SHPCOMPNAM), trim($row->SHPADDRS1), trim($row->SHPADDRS2), trim($row->SHPCITY), trim($row->SHPSTATE), trim($row->SHPZIP), trim($row->SHPCOUNTRY), trim($row->SHPBILLOPT), trim($row->SHPPHONE), trim($row->SHPEMAIL), trim($row->SHPCONTACT), trim($row->QBLISTID), trim($row->BLINDSHIP), trim($row->EDIFLAG), trim($row->EDIDATE), trim($row->EDIBCK), trim($row->IMPORTKEY), trim($row->QUTNO), trim($row->SPLITPICK), trim($row->CC_REFNO), trim($row->CC_AMTREC), trim($row->CC_PAYTYPE), trim($row->JOBDESCRIP), trim($row->TECHNAM1), trim($row->TECHNAM2), trim($row->MTRLSTATUS), trim($row->JOBSTATUS), trim($row->VESSELID));
        }

        return $result;
    }

    /**
     * @param string $predicate SQL Query Where clause
     * @return \Dandelion\MVC\Application\Models\Entities\SOHEAD
     */
    public function Get($predicate) {
        $tableName = $this->entityName . $this->companySuffix;
        $sqlString = "SELECT * FROM $tableName";
        $sqlString .= ' ' . $predicate;
        $query = $this->dbDriver->GetQuery();
        $queryResult = $query->Execute($sqlString);
        $result = array();

        foreach ($queryResult as $row) {
            $result [] = new SOHEAD(trim($row->ORDNUM), trim($row->INVNO), trim($row->INVTYPE), trim($row->ITMSTATUS), trim($row->CUSTNO), trim($row->PONUM), trim($row->VENDNO), trim($row->PODATE), trim($row->INVDATE), trim($row->SHIPDATE), trim($row->FITEMTYPE), trim($row->FTOTCOST), trim($row->FCOSTTYPE), trim($row->PERIOD), trim($row->SALESMN), trim($row->COMMISSION), trim($row->COMSLMN), trim($row->SALESMN2), trim($row->COMSLMN2), trim($row->SALESMN1NA), trim($row->SALESMN2NA), trim($row->PRICEBY), trim($row->INDUST), trim($row->TERR), trim($row->FCLASS), trim($row->FOBSTAT), trim($row->SHIPVIA), trim($row->SHIPVNAME), trim($row->SHIPSTAT), trim($row->FRGHTS), trim($row->TERMID), trim($row->TERMDESC), trim($row->TERMDESC1), trim($row->SUBTOTAL), trim($row->SUBTOTAL0), trim($row->DISCOUNT), trim($row->TXRT), trim($row->TAXABLE), trim($row->TAX), trim($row->TAX0), trim($row->TAXEXT), trim($row->TAXEXT0), trim($row->ITEMTAX), trim($row->ITEMTAX0), trim($row->FTAXCODE), trim($row->SHIPPING), trim($row->FMISC1), trim($row->FMISC2), trim($row->FMISC3), trim($row->TOTAL), trim($row->TOTAL0), trim($row->PREPAID), trim($row->REFNO), trim($row->PPDREF), trim($row->COMPANY), trim($row->ADDRESS1), trim($row->ADDRESS2), trim($row->ADDRESS3), trim($row->CITY), trim($row->STATE), trim($row->ZIP), trim($row->COUNTRY), trim($row->SHIPID), trim($row->SHIPTO1), trim($row->SHIPTO2), trim($row->SHIPTO3), trim($row->SHIPTO4), trim($row->SHIPTO5), trim($row->DUEDAY), trim($row->DISCDAY), trim($row->DISC), trim($row->KEY), trim($row->USERFLG), trim($row->FUSERID), trim($row->FSTATION), trim($row->FBLURB_ID), trim($row->ITMCOUNT), trim($row->TOTCOST), trim($row->CLOSECOMM), trim($row->INHSECOMM), trim($row->VALIDITY), trim($row->SHIPFROM), trim($row->MSUBTOTAL), trim($row->DELIVERY), trim($row->VESSEL), trim($row->RELPORT), trim($row->DESTINO), trim($row->CAR), trim($row->CIGSN), trim($row->SOURCE), trim($row->CARTOONS), trim($row->FREIGHT), trim($row->PICTICBANO), trim($row->NFLG0), trim($row->NFLG1), trim($row->CUSTDISC), trim($row->SUBTOTALPO), trim($row->DISCOUNTPO), trim($row->SHIPPINGPO), trim($row->TXRTPO), trim($row->TAXPO), trim($row->TOTALPO), trim($row->COMPDATE), trim($row->HOLDSTATUS), trim($row->SOSTATUS), trim($row->REQDATE), trim($row->SOREVNO), trim($row->SWORDNUM), trim($row->SOTYPE), trim($row->MSUBTOTAL0), trim($row->DISCOUNT0), trim($row->WHSNO), trim($row->TAXRATE), trim($row->TAXRATE1), trim($row->TAXRATE2), trim($row->TAXRATE3), trim($row->TAXRATE4), trim($row->GLARACCT), trim($row->AUTHREF), trim($row->RECVIA), trim($row->RECVIANAME), trim($row->LABREQ), trim($row->RRTYPE), trim($row->FRGHTPAY), trim($row->VERIFY), trim($row->SWLOCK), trim($row->FUPDDATE), trim($row->FUPDTIME), trim($row->SOURCENO), trim($row->SRCTYPE), trim($row->CURRID), trim($row->ORGVALUE), trim($row->EXCHRATE), trim($row->BASEID), trim($row->CSTCTID), trim($row->SCHDSTATUS), trim($row->INSPECTNO), trim($row->SWCALLINBY), trim($row->ZONE), trim($row->AREA), trim($row->SWRECVBY), trim($row->SWRECTIME), trim($row->TRAVELTIME), trim($row->CHRGMILE), trim($row->HALFMILE), trim($row->TECHNOTES), trim($row->BILLABLE), trim($row->WARRANTY), trim($row->EMERGENCY), trim($row->PRIORITY), trim($row->CHARGE15), trim($row->CHARGE2X), trim($row->CONTRACT), trim($row->QUOTEDJOB), trim($row->DATESCHD), trim($row->TIMESCHD), trim($row->NEWUSERID), trim($row->NEWDTETIME), trim($row->NEWSTATION), trim($row->EQMAKE), trim($row->EQMODEL), trim($row->EQSERIALNO), trim($row->LOCATIONID), trim($row->LOCATION), trim($row->DATECALLSH), trim($row->TIMECALLSH), trim($row->DOCPREFIX), trim($row->LOCPHONE), trim($row->SWRETRIPS), trim($row->SWINSPOTHR), trim($row->USERSCHD), trim($row->GLDEPT), trim($row->CHGNOTES), trim($row->PHONE), trim($row->PHONE1), trim($row->FAX), trim($row->SHIPCOMM), trim($row->PICKDATEOK), trim($row->NOTBEFORDT), trim($row->OKTOPICK), trim($row->SOTYPECODE), trim($row->CONSDATE), trim($row->OWNRETAIL), trim($row->BIDORDER), trim($row->BIDDATE), trim($row->QUICKSHIP), trim($row->GLTAXACCT), trim($row->SUSPEND), trim($row->WMSSTATUS), trim($row->INSURFLAG), trim($row->DISTCHAN), trim($row->NORMAFLAG), trim($row->RMADATE), trim($row->PORMOFLAG), trim($row->ALLOCADATE), trim($row->DATEHOLD), trim($row->NOPAYMENTS), trim($row->STARTDAYS), trim($row->TOTALDAYS), trim($row->SPECTERMS), trim($row->SPECTERAMT), trim($row->PAYFREQDAY), trim($row->STARTDATE), trim($row->S_ROUTINE), trim($row->COMPTIME), trim($row->COMPSTAT), trim($row->ARVLTIME), trim($row->DRIVERLIC), trim($row->TOTWEIGHT0), trim($row->TOTALBAL), trim($row->PRINTFLAG), trim($row->ESTSHPDATE), trim($row->BUDADDAPRV), trim($row->COMMSET), trim($row->COMMSETDTE), trim($row->RETRESVTOT), trim($row->TOTAMTSAVE), trim($row->QBSYNCSTAT), trim($row->IVREFNO), trim($row->DTRSTART), trim($row->DTREND), trim($row->TOTBOTDEP), trim($row->PROSTARTDT), trim($row->PROENDDT), trim($row->SHPCOMPNAM), trim($row->SHPADDRS1), trim($row->SHPADDRS2), trim($row->SHPCITY), trim($row->SHPSTATE), trim($row->SHPZIP), trim($row->SHPCOUNTRY), trim($row->SHPBILLOPT), trim($row->SHPPHONE), trim($row->SHPEMAIL), trim($row->SHPCONTACT), trim($row->QBLISTID), trim($row->BLINDSHIP), trim($row->EDIFLAG), trim($row->EDIDATE), trim($row->EDIBCK), trim($row->IMPORTKEY), trim($row->QUTNO), trim($row->SPLITPICK), trim($row->CC_REFNO), trim($row->CC_AMTREC), trim($row->CC_PAYTYPE), trim($row->JOBDESCRIP), trim($row->TECHNAM1), trim($row->TECHNAM2), trim($row->MTRLSTATUS), trim($row->JOBSTATUS), trim($row->VESSELID));
        }

        return $result;
    }

    /**
     * Returns SOHEAD entity by a given itemno and location, null otherwise
     * @param string $ordnum
     * @return \Dandelion\MVC\Application\Models\Entities\SOHEAD
     */
    public function GetByOrdnum($ordnum) {
        $lowerOrdnum = strtolower($ordnum);

        $tableName = $this->entityName . $this->companySuffix;
        $sqlString = "SELECT * FROM $tableName";
        $sqlString .= " WHERE lower(ordnum) = '$lowerOrdnum'";

        $query = $this->dbDriver->GetQuery();
        $queryResult = $query->Execute($sqlString);
        $result = null;

        if (count($queryResult)) {
            $row = $queryResult[0];
            $result = new SOHEAD(trim($row->ORDNUM), trim($row->INVNO), trim($row->INVTYPE), trim($row->ITMSTATUS), trim($row->CUSTNO), trim($row->PONUM), trim($row->VENDNO), trim($row->PODATE), trim($row->INVDATE), trim($row->SHIPDATE), trim($row->FITEMTYPE), trim($row->FTOTCOST), trim($row->FCOSTTYPE), trim($row->PERIOD), trim($row->SALESMN), trim($row->COMMISSION), trim($row->COMSLMN), trim($row->SALESMN2), trim($row->COMSLMN2), trim($row->SALESMN1NA), trim($row->SALESMN2NA), trim($row->PRICEBY), trim($row->INDUST), trim($row->TERR), trim($row->FCLASS), trim($row->FOBSTAT), trim($row->SHIPVIA), trim($row->SHIPVNAME), trim($row->SHIPSTAT), trim($row->FRGHTS), trim($row->TERMID), trim($row->TERMDESC), trim($row->TERMDESC1), trim($row->SUBTOTAL), trim($row->SUBTOTAL0), trim($row->DISCOUNT), trim($row->TXRT), trim($row->TAXABLE), trim($row->TAX), trim($row->TAX0), trim($row->TAXEXT), trim($row->TAXEXT0), trim($row->ITEMTAX), trim($row->ITEMTAX0), trim($row->FTAXCODE), trim($row->SHIPPING), trim($row->FMISC1), trim($row->FMISC2), trim($row->FMISC3), trim($row->TOTAL), trim($row->TOTAL0), trim($row->PREPAID), trim($row->REFNO), trim($row->PPDREF), trim($row->COMPANY), trim($row->ADDRESS1), trim($row->ADDRESS2), trim($row->ADDRESS3), trim($row->CITY), trim($row->STATE), trim($row->ZIP), trim($row->COUNTRY), trim($row->SHIPID), trim($row->SHIPTO1), trim($row->SHIPTO2), trim($row->SHIPTO3), trim($row->SHIPTO4), trim($row->SHIPTO5), trim($row->DUEDAY), trim($row->DISCDAY), trim($row->DISC), trim($row->KEY), trim($row->USERFLG), trim($row->FUSERID), trim($row->FSTATION), trim($row->FBLURB_ID), trim($row->ITMCOUNT), trim($row->TOTCOST), trim($row->CLOSECOMM), trim($row->INHSECOMM), trim($row->VALIDITY), trim($row->SHIPFROM), trim($row->MSUBTOTAL), trim($row->DELIVERY), trim($row->VESSEL), trim($row->RELPORT), trim($row->DESTINO), trim($row->CAR), trim($row->CIGSN), trim($row->SOURCE), trim($row->CARTOONS), trim($row->FREIGHT), trim($row->PICTICBANO), trim($row->NFLG0), trim($row->NFLG1), trim($row->CUSTDISC), trim($row->SUBTOTALPO), trim($row->DISCOUNTPO), trim($row->SHIPPINGPO), trim($row->TXRTPO), trim($row->TAXPO), trim($row->TOTALPO), trim($row->COMPDATE), trim($row->HOLDSTATUS), trim($row->SOSTATUS), trim($row->REQDATE), trim($row->SOREVNO), trim($row->SWORDNUM), trim($row->SOTYPE), trim($row->MSUBTOTAL0), trim($row->DISCOUNT0), trim($row->WHSNO), trim($row->TAXRATE), trim($row->TAXRATE1), trim($row->TAXRATE2), trim($row->TAXRATE3), trim($row->TAXRATE4), trim($row->GLARACCT), trim($row->AUTHREF), trim($row->RECVIA), trim($row->RECVIANAME), trim($row->LABREQ), trim($row->RRTYPE), trim($row->FRGHTPAY), trim($row->VERIFY), trim($row->SWLOCK), trim($row->FUPDDATE), trim($row->FUPDTIME), trim($row->SOURCENO), trim($row->SRCTYPE), trim($row->CURRID), trim($row->ORGVALUE), trim($row->EXCHRATE), trim($row->BASEID), trim($row->CSTCTID), trim($row->SCHDSTATUS), trim($row->INSPECTNO), trim($row->SWCALLINBY), trim($row->ZONE), trim($row->AREA), trim($row->SWRECVBY), trim($row->SWRECTIME), trim($row->TRAVELTIME), trim($row->CHRGMILE), trim($row->HALFMILE), trim($row->TECHNOTES), trim($row->BILLABLE), trim($row->WARRANTY), trim($row->EMERGENCY), trim($row->PRIORITY), trim($row->CHARGE15), trim($row->CHARGE2X), trim($row->CONTRACT), trim($row->QUOTEDJOB), trim($row->DATESCHD), trim($row->TIMESCHD), trim($row->NEWUSERID), trim($row->NEWDTETIME), trim($row->NEWSTATION), trim($row->EQMAKE), trim($row->EQMODEL), trim($row->EQSERIALNO), trim($row->LOCATIONID), trim($row->LOCATION), trim($row->DATECALLSH), trim($row->TIMECALLSH), trim($row->DOCPREFIX), trim($row->LOCPHONE), trim($row->SWRETRIPS), trim($row->SWINSPOTHR), trim($row->USERSCHD), trim($row->GLDEPT), trim($row->CHGNOTES), trim($row->PHONE), trim($row->PHONE1), trim($row->FAX), trim($row->SHIPCOMM), trim($row->PICKDATEOK), trim($row->NOTBEFORDT), trim($row->OKTOPICK), trim($row->SOTYPECODE), trim($row->CONSDATE), trim($row->OWNRETAIL), trim($row->BIDORDER), trim($row->BIDDATE), trim($row->QUICKSHIP), trim($row->GLTAXACCT), trim($row->SUSPEND), trim($row->WMSSTATUS), trim($row->INSURFLAG), trim($row->DISTCHAN), trim($row->NORMAFLAG), trim($row->RMADATE), trim($row->PORMOFLAG), trim($row->ALLOCADATE), trim($row->DATEHOLD), trim($row->NOPAYMENTS), trim($row->STARTDAYS), trim($row->TOTALDAYS), trim($row->SPECTERMS), trim($row->SPECTERAMT), trim($row->PAYFREQDAY), trim($row->STARTDATE), trim($row->S_ROUTINE), trim($row->COMPTIME), trim($row->COMPSTAT), trim($row->ARVLTIME), trim($row->DRIVERLIC), trim($row->TOTWEIGHT0), trim($row->TOTALBAL), trim($row->PRINTFLAG), trim($row->ESTSHPDATE), trim($row->BUDADDAPRV), trim($row->COMMSET), trim($row->COMMSETDTE), trim($row->RETRESVTOT), trim($row->TOTAMTSAVE), trim($row->QBSYNCSTAT), trim($row->IVREFNO), trim($row->DTRSTART), trim($row->DTREND), trim($row->TOTBOTDEP), trim($row->PROSTARTDT), trim($row->PROENDDT), trim($row->SHPCOMPNAM), trim($row->SHPADDRS1), trim($row->SHPADDRS2), trim($row->SHPCITY), trim($row->SHPSTATE), trim($row->SHPZIP), trim($row->SHPCOUNTRY), trim($row->SHPBILLOPT), trim($row->SHPPHONE), trim($row->SHPEMAIL), trim($row->SHPCONTACT), trim($row->QBLISTID), trim($row->BLINDSHIP), trim($row->EDIFLAG), trim($row->EDIDATE), trim($row->EDIBCK), trim($row->IMPORTKEY), trim($row->QUTNO), trim($row->SPLITPICK), trim($row->CC_REFNO), trim($row->CC_AMTREC), trim($row->CC_PAYTYPE), trim($row->JOBDESCRIP), trim($row->TECHNAM1), trim($row->TECHNAM2), trim($row->MTRLSTATUS), trim($row->JOBSTATUS), trim($row->VESSELID));
        }

        return $result;
    }

    public function GetLike($query, $page = 0, $limit = 0){
        $lowerQuery = strtolower($query);
        $startAt = 0;
        if (intval($page) > 0)
            $startAt = ((intval($page) - 1) * intval($limit)) + 1;
        $tableName = $this->entityName . $this->companySuffix;
        $sqlString = "SELECT * FROM $tableName";
        if(intval($limit) > 0){
            $sqlString = "SELECT TOP $limit START AT $startAt * FROM $tableName";
        }
        $sqlString .= " WHERE LOWER(ORDNUM) LIKE '%$lowerQuery%' OR LOWER(CUSTNO) LIKE '%$lowerQuery%'";
        $query = $this->dbDriver->GetQuery();
        $queryResult = $query->Execute($sqlString);
        $result = array();
        foreach ($queryResult as $row) {
            $result [] = new SOHEAD(trim($row->ORDNUM), trim($row->INVNO), trim($row->INVTYPE), trim($row->ITMSTATUS), trim($row->CUSTNO), trim($row->PONUM), trim($row->VENDNO), trim($row->PODATE), trim($row->INVDATE), trim($row->SHIPDATE), trim($row->FITEMTYPE), trim($row->FTOTCOST), trim($row->FCOSTTYPE), trim($row->PERIOD), trim($row->SALESMN), trim($row->COMMISSION), trim($row->COMSLMN), trim($row->SALESMN2), trim($row->COMSLMN2), trim($row->SALESMN1NA), trim($row->SALESMN2NA), trim($row->PRICEBY), trim($row->INDUST), trim($row->TERR), trim($row->FCLASS), trim($row->FOBSTAT), trim($row->SHIPVIA), trim($row->SHIPVNAME), trim($row->SHIPSTAT), trim($row->FRGHTS), trim($row->TERMID), trim($row->TERMDESC), trim($row->TERMDESC1), trim($row->SUBTOTAL), trim($row->SUBTOTAL0), trim($row->DISCOUNT), trim($row->TXRT), trim($row->TAXABLE), trim($row->TAX), trim($row->TAX0), trim($row->TAXEXT), trim($row->TAXEXT0), trim($row->ITEMTAX), trim($row->ITEMTAX0), trim($row->FTAXCODE), trim($row->SHIPPING), trim($row->FMISC1), trim($row->FMISC2), trim($row->FMISC3), trim($row->TOTAL), trim($row->TOTAL0), trim($row->PREPAID), trim($row->REFNO), trim($row->PPDREF), trim($row->COMPANY), trim($row->ADDRESS1), trim($row->ADDRESS2), trim($row->ADDRESS3), trim($row->CITY), trim($row->STATE), trim($row->ZIP), trim($row->COUNTRY), trim($row->SHIPID), trim($row->SHIPTO1), trim($row->SHIPTO2), trim($row->SHIPTO3), trim($row->SHIPTO4), trim($row->SHIPTO5), trim($row->DUEDAY), trim($row->DISCDAY), trim($row->DISC), trim($row->KEY), trim($row->USERFLG), trim($row->FUSERID), trim($row->FSTATION), trim($row->FBLURB_ID), trim($row->ITMCOUNT), trim($row->TOTCOST), trim($row->CLOSECOMM), trim($row->INHSECOMM), trim($row->VALIDITY), trim($row->SHIPFROM), trim($row->MSUBTOTAL), trim($row->DELIVERY), trim($row->VESSEL), trim($row->RELPORT), trim($row->DESTINO), trim($row->CAR), trim($row->CIGSN), trim($row->SOURCE), trim($row->CARTOONS), trim($row->FREIGHT), trim($row->PICTICBANO), trim($row->NFLG0), trim($row->NFLG1), trim($row->CUSTDISC), trim($row->SUBTOTALPO), trim($row->DISCOUNTPO), trim($row->SHIPPINGPO), trim($row->TXRTPO), trim($row->TAXPO), trim($row->TOTALPO), trim($row->COMPDATE), trim($row->HOLDSTATUS), trim($row->SOSTATUS), trim($row->REQDATE), trim($row->SOREVNO), trim($row->SWORDNUM), trim($row->SOTYPE), trim($row->MSUBTOTAL0), trim($row->DISCOUNT0), trim($row->WHSNO), trim($row->TAXRATE), trim($row->TAXRATE1), trim($row->TAXRATE2), trim($row->TAXRATE3), trim($row->TAXRATE4), trim($row->GLARACCT), trim($row->AUTHREF), trim($row->RECVIA), trim($row->RECVIANAME), trim($row->LABREQ), trim($row->RRTYPE), trim($row->FRGHTPAY), trim($row->VERIFY), trim($row->SWLOCK), trim($row->FUPDDATE), trim($row->FUPDTIME), trim($row->SOURCENO), trim($row->SRCTYPE), trim($row->CURRID), trim($row->ORGVALUE), trim($row->EXCHRATE), trim($row->BASEID), trim($row->CSTCTID), trim($row->SCHDSTATUS), trim($row->INSPECTNO), trim($row->SWCALLINBY), trim($row->ZONE), trim($row->AREA), trim($row->SWRECVBY), trim($row->SWRECTIME), trim($row->TRAVELTIME), trim($row->CHRGMILE), trim($row->HALFMILE), trim($row->TECHNOTES), trim($row->BILLABLE), trim($row->WARRANTY), trim($row->EMERGENCY), trim($row->PRIORITY), trim($row->CHARGE15), trim($row->CHARGE2X), trim($row->CONTRACT), trim($row->QUOTEDJOB), trim($row->DATESCHD), trim($row->TIMESCHD), trim($row->NEWUSERID), trim($row->NEWDTETIME), trim($row->NEWSTATION), trim($row->EQMAKE), trim($row->EQMODEL), trim($row->EQSERIALNO), trim($row->LOCATIONID), trim($row->LOCATION), trim($row->DATECALLSH), trim($row->TIMECALLSH), trim($row->DOCPREFIX), trim($row->LOCPHONE), trim($row->SWRETRIPS), trim($row->SWINSPOTHR), trim($row->USERSCHD), trim($row->GLDEPT), trim($row->CHGNOTES), trim($row->PHONE), trim($row->PHONE1), trim($row->FAX), trim($row->SHIPCOMM), trim($row->PICKDATEOK), trim($row->NOTBEFORDT), trim($row->OKTOPICK), trim($row->SOTYPECODE), trim($row->CONSDATE), trim($row->OWNRETAIL), trim($row->BIDORDER), trim($row->BIDDATE), trim($row->QUICKSHIP), trim($row->GLTAXACCT), trim($row->SUSPEND), trim($row->WMSSTATUS), trim($row->INSURFLAG), trim($row->DISTCHAN), trim($row->NORMAFLAG), trim($row->RMADATE), trim($row->PORMOFLAG), trim($row->ALLOCADATE), trim($row->DATEHOLD), trim($row->NOPAYMENTS), trim($row->STARTDAYS), trim($row->TOTALDAYS), trim($row->SPECTERMS), trim($row->SPECTERAMT), trim($row->PAYFREQDAY), trim($row->STARTDATE), trim($row->S_ROUTINE), trim($row->COMPTIME), trim($row->COMPSTAT), trim($row->ARVLTIME), trim($row->DRIVERLIC), trim($row->TOTWEIGHT0), trim($row->TOTALBAL), trim($row->PRINTFLAG), trim($row->ESTSHPDATE), trim($row->BUDADDAPRV), trim($row->COMMSET), trim($row->COMMSETDTE), trim($row->RETRESVTOT), trim($row->TOTAMTSAVE), trim($row->QBSYNCSTAT), trim($row->IVREFNO), trim($row->DTRSTART), trim($row->DTREND), trim($row->TOTBOTDEP), trim($row->PROSTARTDT), trim($row->PROENDDT), trim($row->SHPCOMPNAM), trim($row->SHPADDRS1), trim($row->SHPADDRS2), trim($row->SHPCITY), trim($row->SHPSTATE), trim($row->SHPZIP), trim($row->SHPCOUNTRY), trim($row->SHPBILLOPT), trim($row->SHPPHONE), trim($row->SHPEMAIL), trim($row->SHPCONTACT), trim($row->QBLISTID), trim($row->BLINDSHIP), trim($row->EDIFLAG), trim($row->EDIDATE), trim($row->EDIBCK), trim($row->IMPORTKEY), trim($row->QUTNO), trim($row->SPLITPICK), trim($row->CC_REFNO), trim($row->CC_AMTREC), trim($row->CC_PAYTYPE), trim($row->JOBDESCRIP), trim($row->TECHNAM1), trim($row->TECHNAM2), trim($row->MTRLSTATUS), trim($row->JOBSTATUS), trim($row->VESSELID));
        }
        return $result;
    }

    /**
     * @param $query
     * @return int
     */
    public function GetLikeCount($query){
        $lowerQuery = strtolower($query);
        $tableName = $this->entityName . $this->companySuffix;
        $sqlString = "SELECT COUNT(ORDNUM) FROM $tableName";
        $sqlString .= " WHERE LOWER(ORDNUM) LIKE '%$lowerQuery%' OR LOWER(CUSTNO) LIKE '%$lowerQuery%'";
        $query = $this->dbDriver->GetQuery();
        $queryResult = $query->Execute($sqlString);
        return intval($queryResult[0]->EXPR);
    }

    public function Add($entity) {
        // TODO: Implement Add() method.
    }

    public function Update($entity) {
        // TODO: Implement Update() method.
    }

    public function UpdateMaterialStatus($ordnum, $mtrlstatus) {
        $tableName = $this->entityName . $this->companySuffix;

        $sqlString = "UPDATE $tableName SET " .
                "MTRLSTATUS = '$mtrlstatus' " .
                "WHERE ordnum = '$ordnum'";

        $query = $this->dbDriver->GetQuery();
        return $query->Execute($sqlString);
    }

    public function UpdateNotes($ordnum, $notes) {
        $tableName = $this->entityName . $this->companySuffix;

        $sqlString = "UPDATE $tableName SET " .
                "inHseComm = '$notes' " .
                "WHERE ordnum = '$ordnum'";

        $query = $this->dbDriver->GetQuery();
        return $query->Execute($sqlString);
    }

    public function UpdateJobStatus($ordnum, $jobstatus) {
        $tableName = $this->entityName . $this->companySuffix;

        $sqlString = "UPDATE $tableName SET " .
                "JOBSTATUS = '$jobstatus' " .
                "WHERE ordnum = '$ordnum'";

        $query = $this->dbDriver->GetQuery();
        return $query->Execute($sqlString);
    }

    public function Delete($entity) {
        // TODO: Implement Delete() method.
    }

}
