<?php

/**
 * Project:  VFP Business Series
 * Copyright: 2014. VFP Business Solutions, LLC
 */

namespace Dandelion\MVC\Application\Models\Repositories;

use Dandelion\Diana\Interfaces\IRepository;
use Dandelion\MVC\Application\Models\Entities\APVEND;

class APVENDRepository extends VFPRepository implements IRepository
{

    /**
     * @return array of all APVEND objects from DB
     */
    public function GetAll()
    {
        $tableName = $this->entityName . $this->companySuffix;
        $sqlString = "SELECT * FROM $tableName";
        $query = $this->dbDriver->GetQuery();
        $queryResult = $query->Execute($sqlString);
        $result = array();

        foreach ($queryResult as $row) {
            $result [] = new APVEND(trim($row->VENDNO), trim($row->VENDOR), trim($row->ADDRESS1), trim($row->ADDRESS2), trim($row->CITY), trim($row->STATE), trim($row->ZIP), trim($row->COUNTRY), trim($row->PHONE), trim($row->PHONE1), trim($row->EMAIL), trim($row->PHONECRD), trim($row->CONTACT), trim($row->CONTACT1), trim($row->CRDMNGR), trim($row->TERMS), trim($row->TERMS1), trim($row->CHECK_NO), trim($row->AMOUNT), trim($row->LDATE), trim($row->YTD_PURCH), trim($row->PTD_PURCH), trim($row->UNPOSTBAL), trim($row->BALANCE), trim($row->CRDLIMIT), trim($row->DISCOUNT), trim($row->SSNMBR), trim($row->TITLE), trim($row->TITLE1), trim($row->FAXNUM), trim($row->FAXNUM2), trim($row->DUEDAYS), trim($row->DISCDAYS), trim($row->TERR), trim($row->SOURCE), trim($row->CLASS), trim($row->INDUST), trim($row->BUYERCODE), trim($row->SHIPVIA), trim($row->STATUS), trim($row->SHIPPART), trim($row->SHIPTO), trim($row->DOM_EXP), trim($row->REMITTO1), trim($row->REMITTO2), trim($row->REMITTO3), trim($row->VENDORREF), trim($row->NOTES), trim($row->AUTO), trim($row->ACCT_AUTO), trim($row->AUTOAMT), trim($row->AUTOPERIOD), trim($row->TAXSTAT), trim($row->TAX), trim($row->ENTRYDATE), trim($row->FED_ID_NO), trim($row->DISB_ACCT), trim($row->POREMARK), trim($row->BLANPO), trim($row->IDPONO), trim($row->FOBPOINT), trim($row->NFLG0), trim($row->PRT1099), trim($row->FRTSTAT), trim($row->REMITTO), trim($row->MANUFACT), trim($row->POSTCURRID), trim($row->PAYCURRID), trim($row->APACCT), trim($row->TAXTYPE), trim($row->TAX2), trim($row->TAXICA), trim($row->BASEID), trim($row->REGIONID), trim($row->CONFIRM), trim($row->ADDRESS3), trim($row->ADDRESS4), trim($row->PMTMED), trim($row->TAXCODE1), trim($row->TAXCODE2), trim($row->TAXCODE3), trim($row->TAXCODE4), trim($row->CMPTYPE), trim($row->BNKACTNO), trim($row->BNKCODE), trim($row->BNKACTTP), trim($row->BNKCONT), trim($row->BNKTITLE), trim($row->BNKZONE), trim($row->FUPDTIME), trim($row->FUPDDATE), trim($row->FUSERID), trim($row->FSTATION), trim($row->KEY), trim($row->BUSTYPE), trim($row->W9), trim($row->DEFVCHR), trim($row->TYPE1099), trim($row->YTDPAID), trim($row->DESIGNER), trim($row->EDICUSTNO), trim($row->EDICOMPANY), trim($row->EDIACTCOMP), trim($row->PTDQTY), trim($row->YTDQTY), trim($row->POSHPFLAG), trim($row->DESC_EXP), trim($row->QBLISTID), trim($row->ISACTIVE), trim($row->NAMEPREFIX), trim($row->FIRSTNAME), trim($row->LASTNAME), trim($row->APBUDGET), trim($row->EMAILCC), trim($row->CCTYPEVEND), trim($row->BNKABANO), trim($row->BNKSWIFTNO), trim($row->BOTLDEPGST), trim($row->FTAXCODE), trim($row->NAMEOTHER), trim($row->POLIMIT), trim($row->MANFID), trim($row->MANFUPC), trim($row->EDITYPE), trim($row->POEDILINK));
        }

        return $result;
    }

    /**
     * @param string $predicate SQL Query Where clause
     * @return \Dandelion\MVC\Application\Models\Entities\APVEND
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
            $result [] = new APVEND(trim($row->VENDNO), trim($row->VENDOR), trim($row->ADDRESS1), trim($row->ADDRESS2), trim($row->CITY), trim($row->STATE), trim($row->ZIP), trim($row->COUNTRY), trim($row->PHONE), trim($row->PHONE1), trim($row->EMAIL), trim($row->PHONECRD), trim($row->CONTACT), trim($row->CONTACT1), trim($row->CRDMNGR), trim($row->TERMS), trim($row->TERMS1), trim($row->CHECK_NO), trim($row->AMOUNT), trim($row->LDATE), trim($row->YTD_PURCH), trim($row->PTD_PURCH), trim($row->UNPOSTBAL), trim($row->BALANCE), trim($row->CRDLIMIT), trim($row->DISCOUNT), trim($row->SSNMBR), trim($row->TITLE), trim($row->TITLE1), trim($row->FAXNUM), trim($row->FAXNUM2), trim($row->DUEDAYS), trim($row->DISCDAYS), trim($row->TERR), trim($row->SOURCE), trim($row->CLASS), trim($row->INDUST), trim($row->BUYERCODE), trim($row->SHIPVIA), trim($row->STATUS), trim($row->SHIPPART), trim($row->SHIPTO), trim($row->DOM_EXP), trim($row->REMITTO1), trim($row->REMITTO2), trim($row->REMITTO3), trim($row->VENDORREF), trim($row->NOTES), trim($row->AUTO), trim($row->ACCT_AUTO), trim($row->AUTOAMT), trim($row->AUTOPERIOD), trim($row->TAXSTAT), trim($row->TAX), trim($row->ENTRYDATE), trim($row->FED_ID_NO), trim($row->DISB_ACCT), trim($row->POREMARK), trim($row->BLANPO), trim($row->IDPONO), trim($row->FOBPOINT), trim($row->NFLG0), trim($row->PRT1099), trim($row->FRTSTAT), trim($row->REMITTO), trim($row->MANUFACT), trim($row->POSTCURRID), trim($row->PAYCURRID), trim($row->APACCT), trim($row->TAXTYPE), trim($row->TAX2), trim($row->TAXICA), trim($row->BASEID), trim($row->REGIONID), trim($row->CONFIRM), trim($row->ADDRESS3), trim($row->ADDRESS4), trim($row->PMTMED), trim($row->TAXCODE1), trim($row->TAXCODE2), trim($row->TAXCODE3), trim($row->TAXCODE4), trim($row->CMPTYPE), trim($row->BNKACTNO), trim($row->BNKCODE), trim($row->BNKACTTP), trim($row->BNKCONT), trim($row->BNKTITLE), trim($row->BNKZONE), trim($row->FUPDTIME), trim($row->FUPDDATE), trim($row->FUSERID), trim($row->FSTATION), trim($row->KEY), trim($row->BUSTYPE), trim($row->W9), trim($row->DEFVCHR), trim($row->TYPE1099), trim($row->YTDPAID), trim($row->DESIGNER), trim($row->EDICUSTNO), trim($row->EDICOMPANY), trim($row->EDIACTCOMP), trim($row->PTDQTY), trim($row->YTDQTY), trim($row->POSHPFLAG), trim($row->DESC_EXP), trim($row->QBLISTID), trim($row->ISACTIVE), trim($row->NAMEPREFIX), trim($row->FIRSTNAME), trim($row->LASTNAME), trim($row->APBUDGET), trim($row->EMAILCC), trim($row->CCTYPEVEND), trim($row->BNKABANO), trim($row->BNKSWIFTNO), trim($row->BOTLDEPGST), trim($row->FTAXCODE), trim($row->NAMEOTHER), trim($row->POLIMIT), trim($row->MANFID), trim($row->MANFUPC), trim($row->EDITYPE), trim($row->POEDILINK));
        }

        return $result;
    }

    public function GetCompanyBy($vendno)
    {
        $tableName = $this->entityName . $this->companySuffix;
        $sqlString = "SELECT VENDOR FROM $tableName";
        $sqlString .= " WHERE VENDNO = '$vendno'";
        $query = $this->dbDriver->GetQuery();
        $queryResult = $query->Execute($sqlString);

        if (count($queryResult)) {
            return $queryResult[0]->VENDOR;
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