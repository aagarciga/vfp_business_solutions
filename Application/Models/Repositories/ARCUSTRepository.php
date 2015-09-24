<?php

/**
 * Project:  VFP Business Series
 * Copyright: 2014. VFP Business Solutions, LLC
 */

namespace Dandelion\MVC\Application\Models\Repositories;

use Dandelion\Diana\Interfaces\IRepository;
use Dandelion\MVC\Application\Models\Entities\ARCUST;

class ARCUSTRepository extends VFPRepository implements IRepository
{

    /**
     * @return array of all ARCUST objects from DB
     */
    public function GetAll()
    {
        $tableName = $this->entityName . $this->companySuffix;
        $sqlString = "SELECT * FROM $tableName";
        $query = $this->dbDriver->GetQuery();
        $queryResult = $query->Execute($sqlString);
        $result = array();

        foreach ($queryResult as $row) {
            $result [] = new ARCUST(trim($row->CUSTNO), trim($row->COMPANY), trim($row->CONTACT), trim($row->TITLE), trim($row->CONTACT1), trim($row->TITLE1), trim($row->ADDRESS1), trim($row->ADDRESS2), trim($row->ADDRESS3), trim($row->ADDRESS4), trim($row->ADDRESS5), trim($row->CITY), trim($row->STATE), trim($row->FCOUNTRY), trim($row->ZIP), trim($row->PHONE), trim($row->PHONE1), trim($row->EMAIL), trim($row->FAX), trim($row->TAXID), trim($row->FEDID), trim($row->NOTES), trim($row->TERR), trim($row->INDUST), trim($row->SALESMAN), trim($row->SLMCOMM), trim($row->SOURCE), trim($row->CLASS), trim($row->FINANCE), trim($row->TERMS), trim($row->TERMS1), trim($row->TERMREF), trim($row->DUEDAYS), trim($row->TERMSDISC), trim($row->DISCDAYS), trim($row->LIMIT), trim($row->BALANCE), trim($row->UNPOSTBAL), trim($row->YTDSLS), trim($row->LYTDSLS), trim($row->PTDSLS), trim($row->LPAYDLR), trim($row->LPAYDTE), trim($row->INDAY), trim($row->BALMETHOD), trim($row->PRTSTATE), trim($row->DUNLETTER), trim($row->LDATE), trim($row->TAX), trim($row->TAXSTAT), trim($row->AUTO), trim($row->AUTOAMT), trim($row->AUTOPERIOD), trim($row->AUTOACCT), trim($row->CREDIT), trim($row->CODE), trim($row->PORD), trim($row->LEVEL), trim($row->SHIPTO), trim($row->SHIPPART), trim($row->SHIPVIA), trim($row->DOM_EXP), trim($row->ENTRYDATE), trim($row->NFLG0), trim($row->TYTDSLS), trim($row->TTOTSLS), trim($row->PSTATUS), trim($row->PRICECODE), trim($row->PRODCODE), trim($row->DISC), trim($row->CFSIN), trim($row->WHSIN), trim($row->DOMEIN), trim($row->GOIN), trim($row->PRICEC1), trim($row->PRICEC2), trim($row->PRICEC3), trim($row->PRICEC4), trim($row->CHARGETYPE), trim($row->DAYS1), trim($row->DAYS2), trim($row->DAYS3), trim($row->PASSWORD), trim($row->ALTCUSTNO), trim($row->PRE_NAM), trim($row->FIRST_NAM), trim($row->MID_NAM), trim($row->LAST_NAM), trim($row->SUF_NAM), trim($row->NAMONBILL), trim($row->DEP_BAL), trim($row->CC_TYPE), trim($row->CC_NAME), trim($row->CC_NUM), trim($row->CC_EXP), trim($row->CURR_TYPE), trim($row->SYNC_BAL), trim($row->ICPREFIX), trim($row->SALESMN2), trim($row->COMSLMN2), trim($row->SHIPROUTE), trim($row->PRIORITY), trim($row->COUNTRY), trim($row->RATEDATE), trim($row->IATACODE), trim($row->HOLD), trim($row->ADDR1_BILL), trim($row->ADDR2_BILL), trim($row->CITY_BILL), trim($row->STATE_BILL), trim($row->ZIP_BILL), trim($row->PHONE_BILL), trim($row->FAX_BILL), trim($row->CONT_BILL), trim($row->CONT_AWB), trim($row->PHONE_AWB), trim($row->FAX_AWB), trim($row->EMAIL_AWB), trim($row->COMP_BILL), trim($row->EMAIL_BILL), trim($row->CRDHOLD), trim($row->TAXCODE), trim($row->REFERENCE), trim($row->USERNAME), trim($row->WEBACTIVE), trim($row->WEBSYNCFLG), trim($row->WMSPRCODE), trim($row->STOCHDATE), trim($row->PHONE2), trim($row->FTAXCODE), trim($row->VENDNO), trim($row->BASEID), trim($row->REGIONID), trim($row->BASECODE), trim($row->GLARACCT), trim($row->UNPOSTAUX), trim($row->TAXMISCID), trim($row->APGLACCT), trim($row->FUPDTIME), trim($row->FUPDDATE), trim($row->FSTATION), trim($row->FUSERID), trim($row->HALFTRAV), trim($row->TAXPARTS), trim($row->TAXLABOR), trim($row->PAYHIST), trim($row->CHRGMILE), trim($row->HALFMILE), trim($row->LINKMAST), trim($row->POREQU), trim($row->WHSNO), trim($row->MILERATE), trim($row->CHRGTRAVEL), trim($row->WOAUTNOTE), trim($row->WOAUTNTFLG), trim($row->WOAUTONOTE), trim($row->INACTIVE), trim($row->COLNOTES), trim($row->EMAILALT), trim($row->L2YTDSLS), trim($row->DRIVERLIC), trim($row->SOURCEID), trim($row->GRADEID), trim($row->MOBILE), trim($row->WEBPAGE), trim($row->CREDOKSO), trim($row->OWNRETAIL), trim($row->CUSTTYPE), trim($row->TYPECODE), trim($row->SELLCLASS), trim($row->CONSFACT), trim($row->CONSUP), trim($row->CREDOKSONO), trim($row->NORMAFLAG), trim($row->INSURFLAG), trim($row->RESPTIME), trim($row->EMAILINV), trim($row->PICKTKNOTE), trim($row->CC_SECID), trim($row->CC_ADDRESS), trim($row->CC_CITY), trim($row->CC_STATE), trim($row->CC_ZIP), trim($row->COMMOVERR), trim($row->QBLISTID), trim($row->QBCUSTNO), trim($row->QBSUBLEVEL), trim($row->COUNTRY_BL), trim($row->DAYSTOCALL), trim($row->DAYSTODEL), trim($row->DELVMIN), trim($row->EQUIPMENT), trim($row->LASTCALLDT), trim($row->TIMETOCALL), trim($row->GENFIELD1), trim($row->GENFIELD2), trim($row->GENFIELD3), trim($row->NOAMTSAVE), trim($row->BCKORDSTAT), trim($row->TOBNO), trim($row->SOTYPECODE), trim($row->SOTYPE), trim($row->SHPCARTID), trim($row->SHPCARTID0), trim($row->CC_NOTES), trim($row->CC_NOTSAVE), trim($row->EDITYPE), trim($row->CC_REFNO), trim($row->CC_AMTREC), trim($row->CC_PAYTYPE), trim($row->EDICUSTNO), trim($row->CUSTITEM), trim($row->FROM_COMP), trim($row->FROM_ADRS1), trim($row->FROM_ADRS2), trim($row->FROM_CITY), trim($row->FROM_STATE), trim($row->FROM_ZIP), trim($row->FROM_CNTRY), trim($row->LBL_SHPFRM), trim($row->LBL_DRPSHP), trim($row->LBL_3RDPTY));
        }

        return $result;
    }

    /**
     * @param string $predicate SQL Query Where clause
     * @return \Dandelion\MVC\Application\Models\Entities\ARCUST
     */
    public function Get($predicate)
    {
        $tableName = $this->entityName . $this->companySuffix;
        $sqlString = "SELECT * FROM $tableName";
        $sqlString .= ' ' . $predicate;
        $query = $this->dbDriver->GetQuery();
        $queryResult = $query->Execute($sqlString);
        $result = array();

        foreach ($queryResult as $row) {
            $result [] = new ARCUST(trim($row->CUSTNO), trim($row->COMPANY), trim($row->CONTACT), trim($row->TITLE), trim($row->CONTACT1), trim($row->TITLE1), trim($row->ADDRESS1), trim($row->ADDRESS2), trim($row->ADDRESS3), trim($row->ADDRESS4), trim($row->ADDRESS5), trim($row->CITY), trim($row->STATE), trim($row->FCOUNTRY), trim($row->ZIP), trim($row->PHONE), trim($row->PHONE1), trim($row->EMAIL), trim($row->FAX), trim($row->TAXID), trim($row->FEDID), trim($row->NOTES), trim($row->TERR), trim($row->INDUST), trim($row->SALESMAN), trim($row->SLMCOMM), trim($row->SOURCE), trim($row->CLASS), trim($row->FINANCE), trim($row->TERMS), trim($row->TERMS1), trim($row->TERMREF), trim($row->DUEDAYS), trim($row->TERMSDISC), trim($row->DISCDAYS), trim($row->LIMIT), trim($row->BALANCE), trim($row->UNPOSTBAL), trim($row->YTDSLS), trim($row->LYTDSLS), trim($row->PTDSLS), trim($row->LPAYDLR), trim($row->LPAYDTE), trim($row->INDAY), trim($row->BALMETHOD), trim($row->PRTSTATE), trim($row->DUNLETTER), trim($row->LDATE), trim($row->TAX), trim($row->TAXSTAT), trim($row->AUTO), trim($row->AUTOAMT), trim($row->AUTOPERIOD), trim($row->AUTOACCT), trim($row->CREDIT), trim($row->CODE), trim($row->PORD), trim($row->LEVEL), trim($row->SHIPTO), trim($row->SHIPPART), trim($row->SHIPVIA), trim($row->DOM_EXP), trim($row->ENTRYDATE), trim($row->NFLG0), trim($row->TYTDSLS), trim($row->TTOTSLS), trim($row->PSTATUS), trim($row->PRICECODE), trim($row->PRODCODE), trim($row->DISC), trim($row->CFSIN), trim($row->WHSIN), trim($row->DOMEIN), trim($row->GOIN), trim($row->PRICEC1), trim($row->PRICEC2), trim($row->PRICEC3), trim($row->PRICEC4), trim($row->CHARGETYPE), trim($row->DAYS1), trim($row->DAYS2), trim($row->DAYS3), trim($row->PASSWORD), trim($row->ALTCUSTNO), trim($row->PRE_NAM), trim($row->FIRST_NAM), trim($row->MID_NAM), trim($row->LAST_NAM), trim($row->SUF_NAM), trim($row->NAMONBILL), trim($row->DEP_BAL), trim($row->CC_TYPE), trim($row->CC_NAME), trim($row->CC_NUM), trim($row->CC_EXP), trim($row->CURR_TYPE), trim($row->SYNC_BAL), trim($row->ICPREFIX), trim($row->SALESMN2), trim($row->COMSLMN2), trim($row->SHIPROUTE), trim($row->PRIORITY), trim($row->COUNTRY), trim($row->RATEDATE), trim($row->IATACODE), trim($row->HOLD), trim($row->ADDR1_BILL), trim($row->ADDR2_BILL), trim($row->CITY_BILL), trim($row->STATE_BILL), trim($row->ZIP_BILL), trim($row->PHONE_BILL), trim($row->FAX_BILL), trim($row->CONT_BILL), trim($row->CONT_AWB), trim($row->PHONE_AWB), trim($row->FAX_AWB), trim($row->EMAIL_AWB), trim($row->COMP_BILL), trim($row->EMAIL_BILL), trim($row->CRDHOLD), trim($row->TAXCODE), trim($row->REFERENCE), trim($row->USERNAME), trim($row->WEBACTIVE), trim($row->WEBSYNCFLG), trim($row->WMSPRCODE), trim($row->STOCHDATE), trim($row->PHONE2), trim($row->FTAXCODE), trim($row->VENDNO), trim($row->BASEID), trim($row->REGIONID), trim($row->BASECODE), trim($row->GLARACCT), trim($row->UNPOSTAUX), trim($row->TAXMISCID), trim($row->APGLACCT), trim($row->FUPDTIME), trim($row->FUPDDATE), trim($row->FSTATION), trim($row->FUSERID), trim($row->HALFTRAV), trim($row->TAXPARTS), trim($row->TAXLABOR), trim($row->PAYHIST), trim($row->CHRGMILE), trim($row->HALFMILE), trim($row->LINKMAST), trim($row->POREQU), trim($row->WHSNO), trim($row->MILERATE), trim($row->CHRGTRAVEL), trim($row->WOAUTNOTE), trim($row->WOAUTNTFLG), trim($row->WOAUTONOTE), trim($row->INACTIVE), trim($row->COLNOTES), trim($row->EMAILALT), trim($row->L2YTDSLS), trim($row->DRIVERLIC), trim($row->SOURCEID), trim($row->GRADEID), trim($row->MOBILE), trim($row->WEBPAGE), trim($row->CREDOKSO), trim($row->OWNRETAIL), trim($row->CUSTTYPE), trim($row->TYPECODE), trim($row->SELLCLASS), trim($row->CONSFACT), trim($row->CONSUP), trim($row->CREDOKSONO), trim($row->NORMAFLAG), trim($row->INSURFLAG), trim($row->RESPTIME), trim($row->EMAILINV), trim($row->PICKTKNOTE), trim($row->CC_SECID), trim($row->CC_ADDRESS), trim($row->CC_CITY), trim($row->CC_STATE), trim($row->CC_ZIP), trim($row->COMMOVERR), trim($row->QBLISTID), trim($row->QBCUSTNO), trim($row->QBSUBLEVEL), trim($row->COUNTRY_BL), trim($row->DAYSTOCALL), trim($row->DAYSTODEL), trim($row->DELVMIN), trim($row->EQUIPMENT), trim($row->LASTCALLDT), trim($row->TIMETOCALL), trim($row->GENFIELD1), trim($row->GENFIELD2), trim($row->GENFIELD3), trim($row->NOAMTSAVE), trim($row->BCKORDSTAT), trim($row->TOBNO), trim($row->SOTYPECODE), trim($row->SOTYPE), trim($row->SHPCARTID), trim($row->SHPCARTID0), trim($row->CC_NOTES), trim($row->CC_NOTSAVE), trim($row->EDITYPE), trim($row->CC_REFNO), trim($row->CC_AMTREC), trim($row->CC_PAYTYPE), trim($row->EDICUSTNO), trim($row->CUSTITEM), trim($row->FROM_COMP), trim($row->FROM_ADRS1), trim($row->FROM_ADRS2), trim($row->FROM_CITY), trim($row->FROM_STATE), trim($row->FROM_ZIP), trim($row->FROM_CNTRY), trim($row->LBL_SHPFRM), trim($row->LBL_DRPSHP), trim($row->LBL_3RDPTY));
        }

        return $result;
    }

    public function GetCompany($custno){
        $lowerCustno = strtolower($custno);
        $tableName = $this->entityName . $this->companySuffix;
        $sqlString = "SELECT COMPANY FROM $tableName";
        $sqlString .= " WHERE LOWER(CUSTNO) = '$lowerCustno'";
        $query = $this->dbDriver->GetQuery();
        $queryResult = $query->Execute($sqlString);
        if (count($queryResult)) {
            return trim($queryResult[0]->COMPANY);
        }
        return "";
    }

    public function Add($entity)
    {
        // TODO: Implement Add() method.
    }

    public function Update($entity)
    {
        // TODO: Implement Update() method.
    }

    public function Delete($entity)
    {
        // TODO: Implement Delete() method.
    }
}