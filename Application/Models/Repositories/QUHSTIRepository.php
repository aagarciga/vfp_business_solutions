<?php

/**
 * Project:  VFP Business Series
 * Copyright: 2014. VFP Business Solutions, LLC
 */

namespace Dandelion\MVC\Application\Models\Repositories;

use Dandelion\Diana\Interfaces\IRepository;
use Dandelion\MVC\Application\Models\Entities\QUHSTI;

class QUHSTIRepository extends VFPRepository implements IRepository {

    /**
     * @return array of all QUHSTI objects from DB
     */
    public function GetAll() {
        $tableName = $this->entityName . $this->companySuffix;
        $sqlString = "SELECT * FROM $tableName";
        $query = $this->dbDriver->GetQuery();
        $queryResult = $query->Execute($sqlString);
        $result = array();

        foreach ($queryResult as $row) {
            $result [] = new QUHSTI(trim($row->QUTNO), trim($row->ITMCOUNT), trim($row->ITEMNO), trim($row->ITMWHS), trim($row->ITEMTYPE), trim($row->DESCRIP), trim($row->DESCRIP1), trim($row->QUTDATE), trim($row->CUSTNO), trim($row->ORDNUM), trim($row->QUOTSTAT), trim($row->QUOTSPCL), trim($row->ITMCOMM), trim($row->DELIVERY), trim($row->BUYERCODE), trim($row->HISTSTAT), trim($row->PRIFCTDSC), trim($row->WEIGHT), trim($row->LENGTH), trim($row->WIDTH), trim($row->THICK), trim($row->CUBIC), trim($row->CLASS), trim($row->SUBCLASS1), trim($row->SUBCLASS2), trim($row->SUBCLASS3), trim($row->QTYORD), trim($row->QTYSHP), trim($row->QTYSHP0), trim($row->QTYSHP1), trim($row->QTYREQ), trim($row->QTYORDPO), trim($row->UNITPRICE), trim($row->PRICEUNIT), trim($row->EXTPRICE), trim($row->EXTPR0), trim($row->EXTPRPO), trim($row->MUAMT), trim($row->COSTTYPE), trim($row->COSTUNIT), trim($row->COSTFACT), trim($row->UNITCOST), trim($row->EXTCOST), trim($row->GLACCTNO), trim($row->GLACCTAST), trim($row->GLACCTEXP), trim($row->TXRT), trim($row->TAXABLE), trim($row->ITEMTAX), trim($row->ITEMTAX0), trim($row->ITEMTAXPO), trim($row->VENDNO), trim($row->VENDOR), trim($row->UNITCOST2), trim($row->VEN_CODE2), trim($row->VENDOR2), trim($row->UNITCOST3), trim($row->VEN_CODE3), trim($row->VENDOR3), trim($row->FUSERID), trim($row->FSTATION), trim($row->COMMISSION), trim($row->SALESMN), trim($row->INVNO), trim($row->INVDATE), trim($row->PODATE), trim($row->PONO), trim($row->ITMDISC), trim($row->NFLG0), trim($row->NFLG1), trim($row->PRICEFACT), trim($row->TERR), trim($row->LOCNO), trim($row->SWORDNUM), trim($row->SHIPDATE), trim($row->WEBSYNCFLG), trim($row->COMSLMN), trim($row->SALESMN2), trim($row->COMSLMN2), trim($row->FTAXCODE), trim($row->TAXRATE), trim($row->FUPDDATE), trim($row->FUPDTIME), trim($row->SOURCENO), trim($row->SRCTYPE), trim($row->CSTCTID), trim($row->HAZARDOUS), trim($row->REQDATE), trim($row->CUSTSTKNO), trim($row->ORGVALUE), trim($row->CURRID), trim($row->EXCHRATE), trim($row->BASEID), trim($row->CSTFCTDSC), trim($row->BOXREC), trim($row->QTYREC), trim($row->VENSTKNO), trim($row->TOINV), trim($row->PALQTYSQF), trim($row->PALQTYPCS), trim($row->DELFLAG), trim($row->BOTLDEP), trim($row->UPCCODE), trim($row->QTYINV), trim($row->ABCCODE), trim($row->SOTXLINEID), trim($row->QBLISTID), trim($row->PARTNO), trim($row->NEWDTETIME), trim($row->NEWSTATION), trim($row->NEWUSERID), trim($row->CASEPRICE), trim($row->GLDEPT), trim($row->QBTXLINEID), trim($row->DELDATE), trim($row->DELUSERID), trim($row->QTYTOSO), trim($row->QTYTOSO0), trim($row->QTYTOPO), trim($row->QTYTOPO0), trim($row->QTYTOINV0));
        }

        return $result;
    }

    /**
     * @param string $predicate SQL Query Where clause
     * @return \Dandelion\MVC\Application\Models\Entities\QUHSTI
     */
    public function Get($predicate) {
        $tableName = $this->entityName . $this->companySuffix;
        $sqlString = "SELECT * FROM $tableName";
        $sqlString .= ' ' . $predicate;
        $query = $this->dbDriver->GetQuery();
        $queryResult = $query->Execute($sqlString);
        $result = array();

        foreach ($queryResult as $row) {
            $result [] = new QUHSTI(trim($row->QUTNO), trim($row->ITMCOUNT), trim($row->ITEMNO), trim($row->ITMWHS), trim($row->ITEMTYPE), trim($row->DESCRIP), trim($row->DESCRIP1), trim($row->QUTDATE), trim($row->CUSTNO), trim($row->ORDNUM), trim($row->QUOTSTAT), trim($row->QUOTSPCL), trim($row->ITMCOMM), trim($row->DELIVERY), trim($row->BUYERCODE), trim($row->HISTSTAT), trim($row->PRIFCTDSC), trim($row->WEIGHT), trim($row->LENGTH), trim($row->WIDTH), trim($row->THICK), trim($row->CUBIC), trim($row->CLASS), trim($row->SUBCLASS1), trim($row->SUBCLASS2), trim($row->SUBCLASS3), trim($row->QTYORD), trim($row->QTYSHP), trim($row->QTYSHP0), trim($row->QTYSHP1), trim($row->QTYREQ), trim($row->QTYORDPO), trim($row->UNITPRICE), trim($row->PRICEUNIT), trim($row->EXTPRICE), trim($row->EXTPR0), trim($row->EXTPRPO), trim($row->MUAMT), trim($row->COSTTYPE), trim($row->COSTUNIT), trim($row->COSTFACT), trim($row->UNITCOST), trim($row->EXTCOST), trim($row->GLACCTNO), trim($row->GLACCTAST), trim($row->GLACCTEXP), trim($row->TXRT), trim($row->TAXABLE), trim($row->ITEMTAX), trim($row->ITEMTAX0), trim($row->ITEMTAXPO), trim($row->VENDNO), trim($row->VENDOR), trim($row->UNITCOST2), trim($row->VEN_CODE2), trim($row->VENDOR2), trim($row->UNITCOST3), trim($row->VEN_CODE3), trim($row->VENDOR3), trim($row->FUSERID), trim($row->FSTATION), trim($row->COMMISSION), trim($row->SALESMN), trim($row->INVNO), trim($row->INVDATE), trim($row->PODATE), trim($row->PONO), trim($row->ITMDISC), trim($row->NFLG0), trim($row->NFLG1), trim($row->PRICEFACT), trim($row->TERR), trim($row->LOCNO), trim($row->SWORDNUM), trim($row->SHIPDATE), trim($row->WEBSYNCFLG), trim($row->COMSLMN), trim($row->SALESMN2), trim($row->COMSLMN2), trim($row->FTAXCODE), trim($row->TAXRATE), trim($row->FUPDDATE), trim($row->FUPDTIME), trim($row->SOURCENO), trim($row->SRCTYPE), trim($row->CSTCTID), trim($row->HAZARDOUS), trim($row->REQDATE), trim($row->CUSTSTKNO), trim($row->ORGVALUE), trim($row->CURRID), trim($row->EXCHRATE), trim($row->BASEID), trim($row->CSTFCTDSC), trim($row->BOXREC), trim($row->QTYREC), trim($row->VENSTKNO), trim($row->TOINV), trim($row->PALQTYSQF), trim($row->PALQTYPCS), trim($row->DELFLAG), trim($row->BOTLDEP), trim($row->UPCCODE), trim($row->QTYINV), trim($row->ABCCODE), trim($row->SOTXLINEID), trim($row->QBLISTID), trim($row->PARTNO), trim($row->NEWDTETIME), trim($row->NEWSTATION), trim($row->NEWUSERID), trim($row->CASEPRICE), trim($row->GLDEPT), trim($row->QBTXLINEID), trim($row->DELDATE), trim($row->DELUSERID), trim($row->QTYTOSO), trim($row->QTYTOSO0), trim($row->QTYTOPO), trim($row->QTYTOPO0), trim($row->QTYTOINV0));
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
