<?php

/**
 * Project:  VFP Business Series
 * Copyright: 2014. VFP Business Solutions, LLC
 */

namespace Dandelion\MVC\Application\Models\Repositories;

use Dandelion\Diana\Interfaces\IRepository;
use Dandelion\MVC\Application\Models\Entities\SOITEM;

class SOITEMRepository extends VFPRepository implements IRepository {

    /**
     * @return array of all SOITEM objects from DB
     */
    public function GetAll() {
        $tableName = $this->entityName . $this->companySuffix;
        $sqlString = "SELECT * FROM $tableName";
        $query = $this->dbDriver->GetQuery();
        $queryResult = $query->Execute($sqlString);
        $result = array();

        foreach ($queryResult as $row) {
            $result [] = new SOITEM(trim($row->ORDNUM), trim($row->ITMCOUNT), trim($row->ITEMNO), trim($row->ITMWHS), trim($row->ITEMTYPE), trim($row->HAZARDOUS), trim($row->PODATE), trim($row->INVNO), trim($row->INVTYPE), trim($row->ITMSTATUS), trim($row->FORMNO), trim($row->CUSTNO), trim($row->CUSTSTKNO), trim($row->PONUM), trim($row->VENDNO), trim($row->INVDATE), trim($row->SHIPDATE), trim($row->LOTNO), trim($row->DESCRIP), trim($row->DESCRIP1), trim($row->UNIT), trim($row->WEIGHT), trim($row->LENGTH), trim($row->WIDTH), trim($row->THICK), trim($row->CUBIC), trim($row->CLASS), trim($row->SUBCLASS1), trim($row->SUBCLASS2), trim($row->SUBCLASS3), trim($row->QTYORD), trim($row->QTYSHP), trim($row->QTYIC), trim($row->QTYSHP0), trim($row->BCKORD), trim($row->UNITPRICE), trim($row->PRICEUNIT), trim($row->EXTPRICE), trim($row->EXTPR0), trim($row->COSTUNIT), trim($row->EXTCOST), trim($row->GLACCTNO), trim($row->GLACCTAST), trim($row->GLACCTEXP), trim($row->BATCH_NO), trim($row->PERIOD), trim($row->PRIFCTDSC), trim($row->SALESMN), trim($row->INDUST), trim($row->TERR), trim($row->TXRT), trim($row->TAXABLE), trim($row->ITEMTAX), trim($row->ITEMTAX0), trim($row->FMISC1), trim($row->FMISC2), trim($row->FMISC3), trim($row->KEY), trim($row->USERFLG), trim($row->FUSERID), trim($row->FSTATION), trim($row->ITMCOMM), trim($row->DELIVERY), trim($row->HISTSTAT), trim($row->BUYERCODE), trim($row->LOTITEM), trim($row->COMMISSION), trim($row->ITMDISC), trim($row->PICTICBANO), trim($row->NFLG0), trim($row->NFLG1), trim($row->QTYPO), trim($row->QTYPO0), trim($row->PODELIVERY), trim($row->VENSTKNO), trim($row->PRICEFACT), trim($row->REQDATE), trim($row->ORDCOMP), trim($row->LOCNO), trim($row->MONUM), trim($row->MODATE), trim($row->SERIALNO), trim($row->SWORDNUM), trim($row->SOTYPE), trim($row->SWDEPTID), trim($row->COMSLMN), trim($row->SALESMN2), trim($row->COMSLMN2), trim($row->FTAXCODE), trim($row->TAXCODE), trim($row->TAXRATE), trim($row->EXTCOST0), trim($row->PARTNO), trim($row->SHOPCODE), trim($row->PRTYPCODE), trim($row->WRTYPCODE), trim($row->ESTIMATE), trim($row->SWSERIALNO), trim($row->QTYREC), trim($row->TOTFLATRT), trim($row->TOTLABOR), trim($row->TOTPARTS), trim($row->LABORHOURS), trim($row->MODELTYPE), trim($row->SWCOMP), trim($row->FUPDDATE), trim($row->FUPDTIME), trim($row->SOURCENO), trim($row->SRCTYPE), trim($row->EXCHRATE), trim($row->ORGVALUE), trim($row->CURRID), trim($row->BASEID), trim($row->MAINRELDTE), trim($row->CSTCTID), trim($row->OKUPDIC), trim($row->NEWUSERID), trim($row->NEWDTETIME), trim($row->NEWSTATION), trim($row->PONO), trim($row->PODATEORD), trim($row->GLDEPT), trim($row->COSTFACT), trim($row->NOCHARGE), trim($row->PALQTYSQF), trim($row->PALQTYPCS), trim($row->QTYSHPREL), trim($row->CONSDATE), trim($row->OWNRETAIL), trim($row->QTYSHPREL0), trim($row->QTYSHPINV0), trim($row->SERIALNO1), trim($row->AMTPAID), trim($row->TAXRATE0), trim($row->FTAXCODE0), trim($row->PACKQTY), trim($row->PACKID), trim($row->COUNTRY), trim($row->QUANTITY), trim($row->PACKQTY0), trim($row->PACKQTYPO), trim($row->PACKQTYPO0), trim($row->PACKQTYIV), trim($row->ABCCODE), trim($row->FETAMT), trim($row->COSTJOB), trim($row->QBTXLINEID), trim($row->LISTPRICE), trim($row->PRFACT), trim($row->RETRESV), trim($row->COSTLOAD), trim($row->BOTLDEP), trim($row->UPCCODE), trim($row->INSPECTNO), trim($row->QBLISTID), trim($row->CASEPRICE), trim($row->CASEFLAG), trim($row->QTYCASE), trim($row->MODEL), trim($row->EDI850STAT), trim($row->EDIFLAG), trim($row->PRICECHG), trim($row->QUTNO), trim($row->FTTAMT), trim($row->CONTPRICE));
        }

        return $result;
    }

    /**
     * @param string $predicate SQL Query Where clause
     * @return \Dandelion\MVC\Application\Models\Entities\SOITEM
     */
    public function Get($predicate) {
        $tableName = $this->entityName . $this->companySuffix;
        $sqlString = "SELECT * FROM $tableName";
        $sqlString .= ' ' . $predicate;
        $query = $this->dbDriver->GetQuery();
        $queryResult = $query->Execute($sqlString);
        $result = array();

        foreach ($queryResult as $row) {
            $result [] = new SOITEM(trim($row->ORDNUM), trim($row->ITMCOUNT), trim($row->ITEMNO), trim($row->ITMWHS), trim($row->ITEMTYPE), trim($row->HAZARDOUS), trim($row->PODATE), trim($row->INVNO), trim($row->INVTYPE), trim($row->ITMSTATUS), trim($row->FORMNO), trim($row->CUSTNO), trim($row->CUSTSTKNO), trim($row->PONUM), trim($row->VENDNO), trim($row->INVDATE), trim($row->SHIPDATE), trim($row->LOTNO), trim($row->DESCRIP), trim($row->DESCRIP1), trim($row->UNIT), trim($row->WEIGHT), trim($row->LENGTH), trim($row->WIDTH), trim($row->THICK), trim($row->CUBIC), trim($row->CLASS), trim($row->SUBCLASS1), trim($row->SUBCLASS2), trim($row->SUBCLASS3), trim($row->QTYORD), trim($row->QTYSHP), trim($row->QTYIC), trim($row->QTYSHP0), trim($row->BCKORD), trim($row->UNITPRICE), trim($row->PRICEUNIT), trim($row->EXTPRICE), trim($row->EXTPR0), trim($row->COSTUNIT), trim($row->EXTCOST), trim($row->GLACCTNO), trim($row->GLACCTAST), trim($row->GLACCTEXP), trim($row->BATCH_NO), trim($row->PERIOD), trim($row->PRIFCTDSC), trim($row->SALESMN), trim($row->INDUST), trim($row->TERR), trim($row->TXRT), trim($row->TAXABLE), trim($row->ITEMTAX), trim($row->ITEMTAX0), trim($row->FMISC1), trim($row->FMISC2), trim($row->FMISC3), trim($row->KEY), trim($row->USERFLG), trim($row->FUSERID), trim($row->FSTATION), trim($row->ITMCOMM), trim($row->DELIVERY), trim($row->HISTSTAT), trim($row->BUYERCODE), trim($row->LOTITEM), trim($row->COMMISSION), trim($row->ITMDISC), trim($row->PICTICBANO), trim($row->NFLG0), trim($row->NFLG1), trim($row->QTYPO), trim($row->QTYPO0), trim($row->PODELIVERY), trim($row->VENSTKNO), trim($row->PRICEFACT), trim($row->REQDATE), trim($row->ORDCOMP), trim($row->LOCNO), trim($row->MONUM), trim($row->MODATE), trim($row->SERIALNO), trim($row->SWORDNUM), trim($row->SOTYPE), trim($row->SWDEPTID), trim($row->COMSLMN), trim($row->SALESMN2), trim($row->COMSLMN2), trim($row->FTAXCODE), trim($row->TAXCODE), trim($row->TAXRATE), trim($row->EXTCOST0), trim($row->PARTNO), trim($row->SHOPCODE), trim($row->PRTYPCODE), trim($row->WRTYPCODE), trim($row->ESTIMATE), trim($row->SWSERIALNO), trim($row->QTYREC), trim($row->TOTFLATRT), trim($row->TOTLABOR), trim($row->TOTPARTS), trim($row->LABORHOURS), trim($row->MODELTYPE), trim($row->SWCOMP), trim($row->FUPDDATE), trim($row->FUPDTIME), trim($row->SOURCENO), trim($row->SRCTYPE), trim($row->EXCHRATE), trim($row->ORGVALUE), trim($row->CURRID), trim($row->BASEID), trim($row->MAINRELDTE), trim($row->CSTCTID), trim($row->OKUPDIC), trim($row->NEWUSERID), trim($row->NEWDTETIME), trim($row->NEWSTATION), trim($row->PONO), trim($row->PODATEORD), trim($row->GLDEPT), trim($row->COSTFACT), trim($row->NOCHARGE), trim($row->PALQTYSQF), trim($row->PALQTYPCS), trim($row->QTYSHPREL), trim($row->CONSDATE), trim($row->OWNRETAIL), trim($row->QTYSHPREL0), trim($row->QTYSHPINV0), trim($row->SERIALNO1), trim($row->AMTPAID), trim($row->TAXRATE0), trim($row->FTAXCODE0), trim($row->PACKQTY), trim($row->PACKID), trim($row->COUNTRY), trim($row->QUANTITY), trim($row->PACKQTY0), trim($row->PACKQTYPO), trim($row->PACKQTYPO0), trim($row->PACKQTYIV), trim($row->ABCCODE), trim($row->FETAMT), trim($row->COSTJOB), trim($row->QBTXLINEID), trim($row->LISTPRICE), trim($row->PRFACT), trim($row->RETRESV), trim($row->COSTLOAD), trim($row->BOTLDEP), trim($row->UPCCODE), trim($row->INSPECTNO), trim($row->QBLISTID), trim($row->CASEPRICE), trim($row->CASEFLAG), trim($row->QTYCASE), trim($row->MODEL), trim($row->EDI850STAT), trim($row->EDIFLAG), trim($row->PRICECHG), trim($row->QUTNO), trim($row->FTTAMT), trim($row->CONTPRICE));
        }

        return $result;
    }
    
    public function UpdateItem ($item, $sotxlineid, $value){
        $itemLower = strtolower($item);
        $sotxlineidLower = strtolower($sotxlineid);
        $tableName = $this->entityName . $this->companySuffix;

        $sqlString = "UPDATE $tableName SET " .
                "QTYSHP0 = $value " .
                "WHERE lower(QBTXLINEID) = '$sotxlineidLower'";
        //lower(ITEMNO) = '$itemLower' AND
        
        // From Vivian's (v0): UPDATE SOITEM00 SET qtyshp0 = soshprel00.QTYPICK  WHERE soitem00.qblistid= Soshprel00.sotxlineid
        // From Vivian's (v1): UPDATE SOITEM00 SET qtyshp0 = soshprel00.QTYPICK  WHERE soitem00.qbtxlineid= Soshprel00.sotxlineid
        
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
