<?php

/**
 * Project:  VFP Business Series
 * Copyright: 2014. VFP Business Solutions, LLC
 */

namespace Dandelion\MVC\Application\Models\Repositories;

use Dandelion\Diana\Interfaces\IRepository;
use Dandelion\MVC\Application\Models\Entities\POHDOP;

class POHDOPRepository extends VFPRepository implements IRepository {

    /**
     * @return array of all POHDOP objects from DB
     */
    public function GetAll() {
        $tableName = $this->entityName . $this->companySuffix;
        $sqlString = "SELECT * FROM $tableName";
        $query = $this->dbDriver->GetQuery();
        $queryResult = $query->Execute($sqlString);
        $result = array();

        foreach ($queryResult as $row) {
            $result [] = new POHDOP(trim($row->PONO), trim($row->PODATE), trim($row->SONO), trim($row->RFQNO), trim($row->POPSTAT), trim($row->VENDNO), trim($row->CUSTNO), trim($row->LDATE), trim($row->VENDOR), trim($row->VENADD1), trim($row->VENADD2), trim($row->VENCITY), trim($row->VENSTATE), trim($row->VENZIP), trim($row->VENCOUNTRY), trim($row->SHIPTO), trim($row->SHIPADD1), trim($row->SHIPADD2), trim($row->SCITY), trim($row->SSTATE), trim($row->SZIP), trim($row->SCOUNTRY), trim($row->SHIPVIA), trim($row->SHIPVDES), trim($row->FOBPOINT), trim($row->VENDOR_NO), trim($row->TERMS), trim($row->TERMS1), trim($row->BUYER), trim($row->FREIGHT), trim($row->REQDATE), trim($row->CONFIRM), trim($row->REMARK), trim($row->COMPANY), trim($row->ALTERED), trim($row->DELIVERY), trim($row->SUBTOTAL), trim($row->DISCPER), trim($row->DISCOUNT), trim($row->MSUBTOTAL), trim($row->TAX), trim($row->TAXAMT), trim($row->SHIPPING), trim($row->POTOTAL), trim($row->SUBTOTAL0), trim($row->SHIPPING0), trim($row->TAXAMT0), trim($row->POTOTAL0), trim($row->RIMNO), trim($row->RIMQTY), trim($row->RIMPACK), trim($row->RIMMEAS), trim($row->RIMWGHT), trim($row->RIMCARRIER), trim($row->RIMAWB_BL), trim($row->RIMCONSUL), trim($row->RIMCHKNO), trim($row->RIMAMT), trim($row->RIMFRGHT), trim($row->RIMFPL), trim($row->RIMCOMMENT), trim($row->POBLURB), trim($row->PORRNUM), trim($row->PORRNUM_ID), trim($row->AWBNO), trim($row->FRGHTS), trim($row->RECDCAR), trim($row->LOTNO), trim($row->FREC_WHS), trim($row->LARV_DATE), trim($row->POSTMARK), trim($row->POCOMMENT), trim($row->SHIP5), trim($row->CURRENCY), trim($row->BRANDNAME), trim($row->OTHERTANG), trim($row->NFLG0), trim($row->ORDNUM), trim($row->SHIPADD3), trim($row->SHIPADD4), trim($row->APFLAG), trim($row->APAMOUNT), trim($row->INVNO), trim($row->INVDATE), trim($row->VOUCHER), trim($row->GLACCTEXP), trim($row->VENDREF), trim($row->FRTSTAT), trim($row->POREVNO), trim($row->HOLSTATUS), trim($row->POSTATUS), trim($row->HOLDSTATUS), trim($row->DISCOUNT0), trim($row->COMPDATE), trim($row->PROAMOUNT), trim($row->POTYPE), trim($row->FUPDTIME), trim($row->FUPDDATE), trim($row->FSTATION), trim($row->FUSERID), trim($row->ARSHIPID), trim($row->INHSECOMM), trim($row->POPREFIX), trim($row->WHSNO), trim($row->W9), trim($row->DEFVCHR), trim($row->CSTCTID), trim($row->NEWUSERID), trim($row->NEWSTATION), trim($row->NEWDTETIME), trim($row->ETADATE), trim($row->EPCDATE), trim($row->TOTALCOST), trim($row->SHIPPERNO), trim($row->SHIPNO), trim($row->DROPSHIP), trim($row->SOTYPECODE), trim($row->SOTYPE), trim($row->EDICUSTNO), trim($row->EDICOMPANY), trim($row->EDIACTCOMP), trim($row->QUICKSHIP), trim($row->WASHCODE), trim($row->CUSTFLD8), trim($row->FTAXCODE), trim($row->TAXRATE), trim($row->TOTBOTDEP), trim($row->GSTFRMTOT), trim($row->NETNOGSTBD), trim($row->TAXEXT), trim($row->BOTLDEPGST), trim($row->QBLISTID), trim($row->TOTQTYORD), trim($row->TOTCSTBASE), trim($row->TOTCSTDISC), trim($row->MAXPOTOTAL));
        }

        return $result;
    }
    
    /**
     * @param string $predicate SQL Query Where clause
     * @return \Dandelion\MVC\Application\Models\Entities\POHDOP
     */
    public function Get($predicate) {
        $tableName = $this->entityName . $this->companySuffix;
        $sqlString = "SELECT * FROM $tableName";
        $sqlString .= ' ' . $predicate;
        $query = $this->dbDriver->GetQuery();
        $queryResult = $query->Execute($sqlString);
        $result = array();

        foreach ($queryResult as $row) {
            $result [] = new POHDOP(trim($row->PONO), trim($row->PODATE), trim($row->SONO), trim($row->RFQNO), trim($row->POPSTAT), trim($row->VENDNO), trim($row->CUSTNO), trim($row->LDATE), trim($row->VENDOR), trim($row->VENADD1), trim($row->VENADD2), trim($row->VENCITY), trim($row->VENSTATE), trim($row->VENZIP), trim($row->VENCOUNTRY), trim($row->SHIPTO), trim($row->SHIPADD1), trim($row->SHIPADD2), trim($row->SCITY), trim($row->SSTATE), trim($row->SZIP), trim($row->SCOUNTRY), trim($row->SHIPVIA), trim($row->SHIPVDES), trim($row->FOBPOINT), trim($row->VENDOR_NO), trim($row->TERMS), trim($row->TERMS1), trim($row->BUYER), trim($row->FREIGHT), trim($row->REQDATE), trim($row->CONFIRM), trim($row->REMARK), trim($row->COMPANY), trim($row->ALTERED), trim($row->DELIVERY), trim($row->SUBTOTAL), trim($row->DISCPER), trim($row->DISCOUNT), trim($row->MSUBTOTAL), trim($row->TAX), trim($row->TAXAMT), trim($row->SHIPPING), trim($row->POTOTAL), trim($row->SUBTOTAL0), trim($row->SHIPPING0), trim($row->TAXAMT0), trim($row->POTOTAL0), trim($row->RIMNO), trim($row->RIMQTY), trim($row->RIMPACK), trim($row->RIMMEAS), trim($row->RIMWGHT), trim($row->RIMCARRIER), trim($row->RIMAWB_BL), trim($row->RIMCONSUL), trim($row->RIMCHKNO), trim($row->RIMAMT), trim($row->RIMFRGHT), trim($row->RIMFPL), trim($row->RIMCOMMENT), trim($row->POBLURB), trim($row->PORRNUM), trim($row->PORRNUM_ID), trim($row->AWBNO), trim($row->FRGHTS), trim($row->RECDCAR), trim($row->LOTNO), trim($row->FREC_WHS), trim($row->LARV_DATE), trim($row->POSTMARK), trim($row->POCOMMENT), trim($row->SHIP5), trim($row->CURRENCY), trim($row->BRANDNAME), trim($row->OTHERTANG), trim($row->NFLG0), trim($row->ORDNUM), trim($row->SHIPADD3), trim($row->SHIPADD4), trim($row->APFLAG), trim($row->APAMOUNT), trim($row->INVNO), trim($row->INVDATE), trim($row->VOUCHER), trim($row->GLACCTEXP), trim($row->VENDREF), trim($row->FRTSTAT), trim($row->POREVNO), trim($row->HOLSTATUS), trim($row->POSTATUS), trim($row->HOLDSTATUS), trim($row->DISCOUNT0), trim($row->COMPDATE), trim($row->PROAMOUNT), trim($row->POTYPE), trim($row->FUPDTIME), trim($row->FUPDDATE), trim($row->FSTATION), trim($row->FUSERID), trim($row->ARSHIPID), trim($row->INHSECOMM), trim($row->POPREFIX), trim($row->WHSNO), trim($row->W9), trim($row->DEFVCHR), trim($row->CSTCTID), trim($row->NEWUSERID), trim($row->NEWSTATION), trim($row->NEWDTETIME), trim($row->ETADATE), trim($row->EPCDATE), trim($row->TOTALCOST), trim($row->SHIPPERNO), trim($row->SHIPNO), trim($row->DROPSHIP), trim($row->SOTYPECODE), trim($row->SOTYPE), trim($row->EDICUSTNO), trim($row->EDICOMPANY), trim($row->EDIACTCOMP), trim($row->QUICKSHIP), trim($row->WASHCODE), trim($row->CUSTFLD8), trim($row->FTAXCODE), trim($row->TAXRATE), trim($row->TOTBOTDEP), trim($row->GSTFRMTOT), trim($row->NETNOGSTBD), trim($row->TAXEXT), trim($row->BOTLDEPGST), trim($row->QBLISTID), trim($row->TOTQTYORD), trim($row->TOTCSTBASE), trim($row->TOTCSTDISC), trim($row->MAXPOTOTAL));
        }

        return $result;
    }
    
    /**
     * Fetch POHDOP Entity by Pono
     * @param string $pono
     * @return \Dandelion\MVC\Application\Models\Entities\POHDOP
     */
    public function GetByPono($pono) {
        $lowerPono = strtolower($pono);
        $tableName = $this->entityName . $this->companySuffix;
        $sqlString = "SELECT * FROM $tableName";
        $sqlString .= " WHERE lower(PONO) = '$lowerPono'"; 
        $query = $this->dbDriver->GetQuery();
        $queryResult = $query->Execute($sqlString);
        
        $result = null;
        
        if (count($queryResult)) {
            $row = $queryResult[0];
            $result = new POHDOP(trim($row->PONO), trim($row->PODATE), trim($row->SONO), trim($row->RFQNO), trim($row->POPSTAT), trim($row->VENDNO), trim($row->CUSTNO), trim($row->LDATE), trim($row->VENDOR), trim($row->VENADD1), trim($row->VENADD2), trim($row->VENCITY), trim($row->VENSTATE), trim($row->VENZIP), trim($row->VENCOUNTRY), trim($row->SHIPTO), trim($row->SHIPADD1), trim($row->SHIPADD2), trim($row->SCITY), trim($row->SSTATE), trim($row->SZIP), trim($row->SCOUNTRY), trim($row->SHIPVIA), trim($row->SHIPVDES), trim($row->FOBPOINT), trim($row->VENDOR_NO), trim($row->TERMS), trim($row->TERMS1), trim($row->BUYER), trim($row->FREIGHT), trim($row->REQDATE), trim($row->CONFIRM), trim($row->REMARK), trim($row->COMPANY), trim($row->ALTERED), trim($row->DELIVERY), trim($row->SUBTOTAL), trim($row->DISCPER), trim($row->DISCOUNT), trim($row->MSUBTOTAL), trim($row->TAX), trim($row->TAXAMT), trim($row->SHIPPING), trim($row->POTOTAL), trim($row->SUBTOTAL0), trim($row->SHIPPING0), trim($row->TAXAMT0), trim($row->POTOTAL0), trim($row->RIMNO), trim($row->RIMQTY), trim($row->RIMPACK), trim($row->RIMMEAS), trim($row->RIMWGHT), trim($row->RIMCARRIER), trim($row->RIMAWB_BL), trim($row->RIMCONSUL), trim($row->RIMCHKNO), trim($row->RIMAMT), trim($row->RIMFRGHT), trim($row->RIMFPL), trim($row->RIMCOMMENT), trim($row->POBLURB), trim($row->PORRNUM), trim($row->PORRNUM_ID), trim($row->AWBNO), trim($row->FRGHTS), trim($row->RECDCAR), trim($row->LOTNO), trim($row->FREC_WHS), trim($row->LARV_DATE), trim($row->POSTMARK), trim($row->POCOMMENT), trim($row->SHIP5), trim($row->CURRENCY), trim($row->BRANDNAME), trim($row->OTHERTANG), trim($row->NFLG0), trim($row->ORDNUM), trim($row->SHIPADD3), trim($row->SHIPADD4), trim($row->APFLAG), trim($row->APAMOUNT), trim($row->INVNO), trim($row->INVDATE), trim($row->VOUCHER), trim($row->GLACCTEXP), trim($row->VENDREF), trim($row->FRTSTAT), trim($row->POREVNO), trim($row->HOLSTATUS), trim($row->POSTATUS), trim($row->HOLDSTATUS), trim($row->DISCOUNT0), trim($row->COMPDATE), trim($row->PROAMOUNT), trim($row->POTYPE), trim($row->FUPDTIME), trim($row->FUPDDATE), trim($row->FSTATION), trim($row->FUSERID), trim($row->ARSHIPID), trim($row->INHSECOMM), trim($row->POPREFIX), trim($row->WHSNO), trim($row->W9), trim($row->DEFVCHR), trim($row->CSTCTID), trim($row->NEWUSERID), trim($row->NEWSTATION), trim($row->NEWDTETIME), trim($row->ETADATE), trim($row->EPCDATE), trim($row->TOTALCOST), trim($row->SHIPPERNO), trim($row->SHIPNO), trim($row->DROPSHIP), trim($row->SOTYPECODE), trim($row->SOTYPE), trim($row->EDICUSTNO), trim($row->EDICOMPANY), trim($row->EDIACTCOMP), trim($row->QUICKSHIP), trim($row->WASHCODE), trim($row->CUSTFLD8), trim($row->FTAXCODE), trim($row->TAXRATE), trim($row->TOTBOTDEP), trim($row->GSTFRMTOT), trim($row->NETNOGSTBD), trim($row->TAXEXT), trim($row->BOTLDEPGST), trim($row->QBLISTID), trim($row->TOTQTYORD), trim($row->TOTCSTBASE), trim($row->TOTCSTDISC), trim($row->MAXPOTOTAL));
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

}
