<?php

/**
 * Project:  VFP Business Series
 * Copyright: 2014. VFP Business Solutions, LLC
 */

namespace Dandelion\MVC\Application\Models\Repositories;

use Dandelion\Diana\Interfaces\IRepository;
use Dandelion\MVC\Application\Models\Entities\POITOP;

class POITOPRepository extends VFPRepository implements IRepository {

    /**
     * @return array of all POITOP objects from DB
     */
    public function GetAll() {
        $tableName = $this->entityName . $this->companySuffix;
        $sqlString = "SELECT * FROM $tableName";
        $query = $this->dbDriver->GetQuery();
        $queryResult = $query->Execute($sqlString);
        $result = array();

        foreach ($queryResult as $row) {
            $result [] = new POITOP(trim($row->PONO), trim($row->ITMCOUNT), trim($row->ITEMNO), trim($row->ITMWHS), trim($row->ITEMTYPE), trim($row->DESCRIP), trim($row->DESCRIP1), trim($row->QTYORD), trim($row->QTYREC), trim($row->QTYREC0), trim($row->QTYLEFT), trim($row->NETCOST), trim($row->COSTUNIT), trim($row->EXTCOST), trim($row->ETCHING), trim($row->INLNDFRT), trim($row->OTHERCOST), trim($row->REBATE), trim($row->PODATE), trim($row->VENDNO), trim($row->LARV_DATE), trim($row->CUSTNO), trim($row->MAN_CODE), trim($row->UNIT), trim($row->WEIGHT), trim($row->CUBIC), trim($row->BCKORD), trim($row->LDATE), trim($row->VENDOR_NO), trim($row->BUYER), trim($row->REQDATE), trim($row->CLASS), trim($row->SUBCLASS1), trim($row->SUBCLASS2), trim($row->SUBCLASS3), trim($row->GLACCTNO), trim($row->GLACCTEXP), trim($row->GLACCTAST), trim($row->ALTERED), trim($row->DELIVERY), trim($row->SHIPPED), trim($row->FIMPTAXD), trim($row->RIMNO), trim($row->NFLG0), trim($row->COSTFACT), trim($row->DISCPER), trim($row->PORRNUM), trim($row->PORRNUM_ID), trim($row->AWBNO), trim($row->FRGHTS), trim($row->RECDCAR), trim($row->LOTNO), trim($row->SERIALNO), trim($row->FREC_WHS), trim($row->ITMCOMM), trim($row->BOND), trim($row->IMPDATE), trim($row->HTSNO), trim($row->HTSQTY), trim($row->ORDNUM), trim($row->LOCNO), trim($row->SOURCENO), trim($row->SRCTYPE), trim($row->FUPDTIME), trim($row->FUPDDATE), trim($row->FSTATION), trim($row->FUSERID), trim($row->RQORDNUM), trim($row->INSPECTNO), trim($row->RQCUSTNO), trim($row->ARSHIPID), trim($row->CSTCTID), trim($row->NOCHARGE), trim($row->REQNO), trim($row->W9), trim($row->DEFVCHR), trim($row->CORE), trim($row->CORRTDTE), trim($row->CORTRKNO), trim($row->CORSHPDT), trim($row->QUTNO), trim($row->VENSTKNO), trim($row->RQDATE), trim($row->ETADATE), trim($row->EPCDATE), trim($row->COSTLAND), trim($row->POTYPE), trim($row->BALENO), trim($row->PIECENO), trim($row->DESNAME), trim($row->CUSTFLD1), trim($row->CUSTFLD3), trim($row->CUSTFLD9), trim($row->COSTCODE), trim($row->WASHCODE), trim($row->WIDTH_CM), trim($row->LENGTH_CM), trim($row->METRICAREA), trim($row->COSTMETRIC), trim($row->LINESTATUS), trim($row->COSTAMT1), trim($row->COSTAMT2), trim($row->COSTAMT3), trim($row->COSTAMT4), trim($row->COSTAMT5), trim($row->SHIPSTATUS), trim($row->SUBSTATUS), trim($row->COSTAMT1A), trim($row->COSTAMT2A), trim($row->CUSTFLD4), trim($row->CUSTFLD8), trim($row->DISCID), trim($row->PCSLAYERS), trim($row->NOLAYERS), trim($row->QTYNOLAYR), trim($row->PALQTYSQF), trim($row->PALQTYPCS), trim($row->QTYSCRAP), trim($row->EXTCOST0), trim($row->PACKQTY), trim($row->PACKID), trim($row->QUANTITY), trim($row->PACKQTY0), trim($row->PACKQTYREC), trim($row->ABCCODE), trim($row->PO_FROM), trim($row->ONHAND), trim($row->TSF_SPLIT), trim($row->EST_DAYS), trim($row->FETAMT), trim($row->QBTXLINEID), trim($row->BOTLDEP), trim($row->UPCCODE), trim($row->FTAXCODE), trim($row->ITEMTAX), trim($row->TAXABLE), trim($row->TAXRATE), trim($row->DELFLAG), trim($row->COSTGSTBD), trim($row->COSTUNITGB), trim($row->COSTLANDGB), trim($row->EXTCOSTGB0), trim($row->EXTCOSTLN0), trim($row->EXTCOSTLG0), trim($row->QBLISTID), trim($row->COSTBASE), trim($row->COSTDISC), trim($row->DISCAMT), trim($row->PRODBINLOC), trim($row->INSPECTNOI), trim($row->DATEPROD), trim($row->INSPECTNOO), trim($row->PALLETSOUT), trim($row->DATEFINI), trim($row->QBSOLISTID), trim($row->ORDCOMP), trim($row->FTTAMT), trim($row->QTYNOLAYRF), trim($row->QTYNOLAYRL));
        }

        return $result;
    }

    /**
     * @param string $predicate SQL Query Where clause
     * @return \Dandelion\MVC\Application\Models\Entities\POITOP
     */
    public function Get($predicate) {
        $tableName = $this->entityName . $this->companySuffix;
        $sqlString = "SELECT * FROM $tableName";
        $sqlString .= ' ' . $predicate;
        $query = $this->dbDriver->GetQuery();
        $queryResult = $query->Execute($sqlString);
        $result = array();

        foreach ($queryResult as $row) {
            $result [] = new POITOP(trim($row->PONO), trim($row->ITMCOUNT), trim($row->ITEMNO), trim($row->ITMWHS), trim($row->ITEMTYPE), trim($row->DESCRIP), trim($row->DESCRIP1), trim($row->QTYORD), trim($row->QTYREC), trim($row->QTYREC0), trim($row->QTYLEFT), trim($row->NETCOST), trim($row->COSTUNIT), trim($row->EXTCOST), trim($row->ETCHING), trim($row->INLNDFRT), trim($row->OTHERCOST), trim($row->REBATE), trim($row->PODATE), trim($row->VENDNO), trim($row->LARV_DATE), trim($row->CUSTNO), trim($row->MAN_CODE), trim($row->UNIT), trim($row->WEIGHT), trim($row->CUBIC), trim($row->BCKORD), trim($row->LDATE), trim($row->VENDOR_NO), trim($row->BUYER), trim($row->REQDATE), trim($row->CLASS), trim($row->SUBCLASS1), trim($row->SUBCLASS2), trim($row->SUBCLASS3), trim($row->GLACCTNO), trim($row->GLACCTEXP), trim($row->GLACCTAST), trim($row->ALTERED), trim($row->DELIVERY), trim($row->SHIPPED), trim($row->FIMPTAXD), trim($row->RIMNO), trim($row->NFLG0), trim($row->COSTFACT), trim($row->DISCPER), trim($row->PORRNUM), trim($row->PORRNUM_ID), trim($row->AWBNO), trim($row->FRGHTS), trim($row->RECDCAR), trim($row->LOTNO), trim($row->SERIALNO), trim($row->FREC_WHS), trim($row->ITMCOMM), trim($row->BOND), trim($row->IMPDATE), trim($row->HTSNO), trim($row->HTSQTY), trim($row->ORDNUM), trim($row->LOCNO), trim($row->SOURCENO), trim($row->SRCTYPE), trim($row->FUPDTIME), trim($row->FUPDDATE), trim($row->FSTATION), trim($row->FUSERID), trim($row->RQORDNUM), trim($row->INSPECTNO), trim($row->RQCUSTNO), trim($row->ARSHIPID), trim($row->CSTCTID), trim($row->NOCHARGE), trim($row->REQNO), trim($row->W9), trim($row->DEFVCHR), trim($row->CORE), trim($row->CORRTDTE), trim($row->CORTRKNO), trim($row->CORSHPDT), trim($row->QUTNO), trim($row->VENSTKNO), trim($row->RQDATE), trim($row->ETADATE), trim($row->EPCDATE), trim($row->COSTLAND), trim($row->POTYPE), trim($row->BALENO), trim($row->PIECENO), trim($row->DESNAME), trim($row->CUSTFLD1), trim($row->CUSTFLD3), trim($row->CUSTFLD9), trim($row->COSTCODE), trim($row->WASHCODE), trim($row->WIDTH_CM), trim($row->LENGTH_CM), trim($row->METRICAREA), trim($row->COSTMETRIC), trim($row->LINESTATUS), trim($row->COSTAMT1), trim($row->COSTAMT2), trim($row->COSTAMT3), trim($row->COSTAMT4), trim($row->COSTAMT5), trim($row->SHIPSTATUS), trim($row->SUBSTATUS), trim($row->COSTAMT1A), trim($row->COSTAMT2A), trim($row->CUSTFLD4), trim($row->CUSTFLD8), trim($row->DISCID), trim($row->PCSLAYERS), trim($row->NOLAYERS), trim($row->QTYNOLAYR), trim($row->PALQTYSQF), trim($row->PALQTYPCS), trim($row->QTYSCRAP), trim($row->EXTCOST0), trim($row->PACKQTY), trim($row->PACKID), trim($row->QUANTITY), trim($row->PACKQTY0), trim($row->PACKQTYREC), trim($row->ABCCODE), trim($row->PO_FROM), trim($row->ONHAND), trim($row->TSF_SPLIT), trim($row->EST_DAYS), trim($row->FETAMT), trim($row->QBTXLINEID), trim($row->BOTLDEP), trim($row->UPCCODE), trim($row->FTAXCODE), trim($row->ITEMTAX), trim($row->TAXABLE), trim($row->TAXRATE), trim($row->DELFLAG), trim($row->COSTGSTBD), trim($row->COSTUNITGB), trim($row->COSTLANDGB), trim($row->EXTCOSTGB0), trim($row->EXTCOSTLN0), trim($row->EXTCOSTLG0), trim($row->QBLISTID), trim($row->COSTBASE), trim($row->COSTDISC), trim($row->DISCAMT), trim($row->PRODBINLOC), trim($row->INSPECTNOI), trim($row->DATEPROD), trim($row->INSPECTNOO), trim($row->PALLETSOUT), trim($row->DATEFINI), trim($row->QBSOLISTID), trim($row->ORDCOMP), trim($row->FTTAMT), trim($row->QTYNOLAYRF), trim($row->QTYNOLAYRL));
        }

        return $result;
    }
    
    /**
     * 
     * @param string $pono
     * @param string $itemno
     * @return \Dandelion\MVC\Application\Models\Entities\POITOP
     */
    public function GetByPonoAndItemno($pono, $itemno) {
        $lowerPono = strtolower($pono);
        $lowerItemno = strtolower($itemno);
        
        $tableName = $this->entityName . $this->companySuffix;
        $sqlString = "SELECT * FROM $tableName";
        $sqlString .= " WHERE lower(PONO) = '$lowerPono' AND lower(ITEMNO) = '$lowerItemno'";
        $query = $this->dbDriver->GetQuery();
        $queryResult = $query->Execute($sqlString);
        
        $result = null;
        
        if (count($queryResult)) {
            $row = $queryResult[0];
            $result = new POITOP(trim($row->PONO), trim($row->ITMCOUNT), trim($row->ITEMNO), trim($row->ITMWHS), trim($row->ITEMTYPE), trim($row->DESCRIP), trim($row->DESCRIP1), trim($row->QTYORD), trim($row->QTYREC), trim($row->QTYREC0), trim($row->QTYLEFT), trim($row->NETCOST), trim($row->COSTUNIT), trim($row->EXTCOST), trim($row->ETCHING), trim($row->INLNDFRT), trim($row->OTHERCOST), trim($row->REBATE), trim($row->PODATE), trim($row->VENDNO), trim($row->LARV_DATE), trim($row->CUSTNO), trim($row->MAN_CODE), trim($row->UNIT), trim($row->WEIGHT), trim($row->CUBIC), trim($row->BCKORD), trim($row->LDATE), trim($row->VENDOR_NO), trim($row->BUYER), trim($row->REQDATE), trim($row->CLASS), trim($row->SUBCLASS1), trim($row->SUBCLASS2), trim($row->SUBCLASS3), trim($row->GLACCTNO), trim($row->GLACCTEXP), trim($row->GLACCTAST), trim($row->ALTERED), trim($row->DELIVERY), trim($row->SHIPPED), trim($row->FIMPTAXD), trim($row->RIMNO), trim($row->NFLG0), trim($row->COSTFACT), trim($row->DISCPER), trim($row->PORRNUM), trim($row->PORRNUM_ID), trim($row->AWBNO), trim($row->FRGHTS), trim($row->RECDCAR), trim($row->LOTNO), trim($row->SERIALNO), trim($row->FREC_WHS), trim($row->ITMCOMM), trim($row->BOND), trim($row->IMPDATE), trim($row->HTSNO), trim($row->HTSQTY), trim($row->ORDNUM), trim($row->LOCNO), trim($row->SOURCENO), trim($row->SRCTYPE), trim($row->FUPDTIME), trim($row->FUPDDATE), trim($row->FSTATION), trim($row->FUSERID), trim($row->RQORDNUM), trim($row->INSPECTNO), trim($row->RQCUSTNO), trim($row->ARSHIPID), trim($row->CSTCTID), trim($row->NOCHARGE), trim($row->REQNO), trim($row->W9), trim($row->DEFVCHR), trim($row->CORE), trim($row->CORRTDTE), trim($row->CORTRKNO), trim($row->CORSHPDT), trim($row->QUTNO), trim($row->VENSTKNO), trim($row->RQDATE), trim($row->ETADATE), trim($row->EPCDATE), trim($row->COSTLAND), trim($row->POTYPE), trim($row->BALENO), trim($row->PIECENO), trim($row->DESNAME), trim($row->CUSTFLD1), trim($row->CUSTFLD3), trim($row->CUSTFLD9), trim($row->COSTCODE), trim($row->WASHCODE), trim($row->WIDTH_CM), trim($row->LENGTH_CM), trim($row->METRICAREA), trim($row->COSTMETRIC), trim($row->LINESTATUS), trim($row->COSTAMT1), trim($row->COSTAMT2), trim($row->COSTAMT3), trim($row->COSTAMT4), trim($row->COSTAMT5), trim($row->SHIPSTATUS), trim($row->SUBSTATUS), trim($row->COSTAMT1A), trim($row->COSTAMT2A), trim($row->CUSTFLD4), trim($row->CUSTFLD8), trim($row->DISCID), trim($row->PCSLAYERS), trim($row->NOLAYERS), trim($row->QTYNOLAYR), trim($row->PALQTYSQF), trim($row->PALQTYPCS), trim($row->QTYSCRAP), trim($row->EXTCOST0), trim($row->PACKQTY), trim($row->PACKID), trim($row->QUANTITY), trim($row->PACKQTY0), trim($row->PACKQTYREC), trim($row->ABCCODE), trim($row->PO_FROM), trim($row->ONHAND), trim($row->TSF_SPLIT), trim($row->EST_DAYS), trim($row->FETAMT), trim($row->QBTXLINEID), trim($row->BOTLDEP), trim($row->UPCCODE), trim($row->FTAXCODE), trim($row->ITEMTAX), trim($row->TAXABLE), trim($row->TAXRATE), trim($row->DELFLAG), trim($row->COSTGSTBD), trim($row->COSTUNITGB), trim($row->COSTLANDGB), trim($row->EXTCOSTGB0), trim($row->EXTCOSTLN0), trim($row->EXTCOSTLG0), trim($row->QBLISTID), trim($row->COSTBASE), trim($row->COSTDISC), trim($row->DISCAMT), trim($row->PRODBINLOC), trim($row->INSPECTNOI), trim($row->DATEPROD), trim($row->INSPECTNOO), trim($row->PALLETSOUT), trim($row->DATEFINI), trim($row->QBSOLISTID), trim($row->ORDCOMP), trim($row->FTTAMT), trim($row->QTYNOLAYRF), trim($row->QTYNOLAYRL));
        }

        return $result;
    }
    
    /**
     * 
     * @param string $pono
     * @return \Dandelion\MVC\Application\Models\Entities\POITOP
     */
    public function GetByPono($pono) {
        $lowerPono = strtolower($pono);
        
        $tableName = $this->entityName . $this->companySuffix;
        $sqlString = "SELECT * FROM $tableName";
        $sqlString .= " WHERE lower(PONO) = '$lowerPono'";
        $query = $this->dbDriver->GetQuery();
        $queryResult = $query->Execute($sqlString);
        
        $result = array();
        
        foreach ($queryResult as $row) {
            $result [] = new POITOP(trim($row->PONO), trim($row->ITMCOUNT), trim($row->ITEMNO), trim($row->ITMWHS), trim($row->ITEMTYPE), trim($row->DESCRIP), trim($row->DESCRIP1), trim($row->QTYORD), trim($row->QTYREC), trim($row->QTYREC0), trim($row->QTYLEFT), trim($row->NETCOST), trim($row->COSTUNIT), trim($row->EXTCOST), trim($row->ETCHING), trim($row->INLNDFRT), trim($row->OTHERCOST), trim($row->REBATE), trim($row->PODATE), trim($row->VENDNO), trim($row->LARV_DATE), trim($row->CUSTNO), trim($row->MAN_CODE), trim($row->UNIT), trim($row->WEIGHT), trim($row->CUBIC), trim($row->BCKORD), trim($row->LDATE), trim($row->VENDOR_NO), trim($row->BUYER), trim($row->REQDATE), trim($row->CLASS), trim($row->SUBCLASS1), trim($row->SUBCLASS2), trim($row->SUBCLASS3), trim($row->GLACCTNO), trim($row->GLACCTEXP), trim($row->GLACCTAST), trim($row->ALTERED), trim($row->DELIVERY), trim($row->SHIPPED), trim($row->FIMPTAXD), trim($row->RIMNO), trim($row->NFLG0), trim($row->COSTFACT), trim($row->DISCPER), trim($row->PORRNUM), trim($row->PORRNUM_ID), trim($row->AWBNO), trim($row->FRGHTS), trim($row->RECDCAR), trim($row->LOTNO), trim($row->SERIALNO), trim($row->FREC_WHS), trim($row->ITMCOMM), trim($row->BOND), trim($row->IMPDATE), trim($row->HTSNO), trim($row->HTSQTY), trim($row->ORDNUM), trim($row->LOCNO), trim($row->SOURCENO), trim($row->SRCTYPE), trim($row->FUPDTIME), trim($row->FUPDDATE), trim($row->FSTATION), trim($row->FUSERID), trim($row->RQORDNUM), trim($row->INSPECTNO), trim($row->RQCUSTNO), trim($row->ARSHIPID), trim($row->CSTCTID), trim($row->NOCHARGE), trim($row->REQNO), trim($row->W9), trim($row->DEFVCHR), trim($row->CORE), trim($row->CORRTDTE), trim($row->CORTRKNO), trim($row->CORSHPDT), trim($row->QUTNO), trim($row->VENSTKNO), trim($row->RQDATE), trim($row->ETADATE), trim($row->EPCDATE), trim($row->COSTLAND), trim($row->POTYPE), trim($row->BALENO), trim($row->PIECENO), trim($row->DESNAME), trim($row->CUSTFLD1), trim($row->CUSTFLD3), trim($row->CUSTFLD9), trim($row->COSTCODE), trim($row->WASHCODE), trim($row->WIDTH_CM), trim($row->LENGTH_CM), trim($row->METRICAREA), trim($row->COSTMETRIC), trim($row->LINESTATUS), trim($row->COSTAMT1), trim($row->COSTAMT2), trim($row->COSTAMT3), trim($row->COSTAMT4), trim($row->COSTAMT5), trim($row->SHIPSTATUS), trim($row->SUBSTATUS), trim($row->COSTAMT1A), trim($row->COSTAMT2A), trim($row->CUSTFLD4), trim($row->CUSTFLD8), trim($row->DISCID), trim($row->PCSLAYERS), trim($row->NOLAYERS), trim($row->QTYNOLAYR), trim($row->PALQTYSQF), trim($row->PALQTYPCS), trim($row->QTYSCRAP), trim($row->EXTCOST0), trim($row->PACKQTY), trim($row->PACKID), trim($row->QUANTITY), trim($row->PACKQTY0), trim($row->PACKQTYREC), trim($row->ABCCODE), trim($row->PO_FROM), trim($row->ONHAND), trim($row->TSF_SPLIT), trim($row->EST_DAYS), trim($row->FETAMT), trim($row->QBTXLINEID), trim($row->BOTLDEP), trim($row->UPCCODE), trim($row->FTAXCODE), trim($row->ITEMTAX), trim($row->TAXABLE), trim($row->TAXRATE), trim($row->DELFLAG), trim($row->COSTGSTBD), trim($row->COSTUNITGB), trim($row->COSTLANDGB), trim($row->EXTCOSTGB0), trim($row->EXTCOSTLN0), trim($row->EXTCOSTLG0), trim($row->QBLISTID), trim($row->COSTBASE), trim($row->COSTDISC), trim($row->DISCAMT), trim($row->PRODBINLOC), trim($row->INSPECTNOI), trim($row->DATEPROD), trim($row->INSPECTNOO), trim($row->PALLETSOUT), trim($row->DATEFINI), trim($row->QBSOLISTID), trim($row->ORDCOMP), trim($row->FTTAMT), trim($row->QTYNOLAYRF), trim($row->QTYNOLAYRL));
        }

        return $result;
    }
    
    /**
     * 
     * @param string $pono
     * @return \Dandelion\MVC\Application\Models\Entities\POITOP
     */
    public function GetAssociatesToPono($pono) {
        $lowerPono = strtolower($pono);
        
        $tableName = $this->entityName . $this->companySuffix;
        $sqlString = "SELECT * FROM $tableName";
        $sqlString .= " WHERE lower(PONO) = '$lowerPono'";
        $sqlString .= " AND (QTYORD - QTYREC > 0 AND POTYPE = 1)";
        $sqlString .= " OR (QTYORD - QTYREC < 0 AND POTYPE = 2)";
        $query = $this->dbDriver->GetQuery();
        $queryResult = $query->Execute($sqlString);
        
        $result = array();
        
        foreach ($queryResult as $row) {
            $result [] = new POITOP(trim($row->PONO), trim($row->ITMCOUNT), trim($row->ITEMNO), trim($row->ITMWHS), trim($row->ITEMTYPE), trim($row->DESCRIP), trim($row->DESCRIP1), trim($row->QTYORD), trim($row->QTYREC), trim($row->QTYREC0), trim($row->QTYLEFT), trim($row->NETCOST), trim($row->COSTUNIT), trim($row->EXTCOST), trim($row->ETCHING), trim($row->INLNDFRT), trim($row->OTHERCOST), trim($row->REBATE), trim($row->PODATE), trim($row->VENDNO), trim($row->LARV_DATE), trim($row->CUSTNO), trim($row->MAN_CODE), trim($row->UNIT), trim($row->WEIGHT), trim($row->CUBIC), trim($row->BCKORD), trim($row->LDATE), trim($row->VENDOR_NO), trim($row->BUYER), trim($row->REQDATE), trim($row->CLASS), trim($row->SUBCLASS1), trim($row->SUBCLASS2), trim($row->SUBCLASS3), trim($row->GLACCTNO), trim($row->GLACCTEXP), trim($row->GLACCTAST), trim($row->ALTERED), trim($row->DELIVERY), trim($row->SHIPPED), trim($row->FIMPTAXD), trim($row->RIMNO), trim($row->NFLG0), trim($row->COSTFACT), trim($row->DISCPER), trim($row->PORRNUM), trim($row->PORRNUM_ID), trim($row->AWBNO), trim($row->FRGHTS), trim($row->RECDCAR), trim($row->LOTNO), trim($row->SERIALNO), trim($row->FREC_WHS), trim($row->ITMCOMM), trim($row->BOND), trim($row->IMPDATE), trim($row->HTSNO), trim($row->HTSQTY), trim($row->ORDNUM), trim($row->LOCNO), trim($row->SOURCENO), trim($row->SRCTYPE), trim($row->FUPDTIME), trim($row->FUPDDATE), trim($row->FSTATION), trim($row->FUSERID), trim($row->RQORDNUM), trim($row->INSPECTNO), trim($row->RQCUSTNO), trim($row->ARSHIPID), trim($row->CSTCTID), trim($row->NOCHARGE), trim($row->REQNO), trim($row->W9), trim($row->DEFVCHR), trim($row->CORE), trim($row->CORRTDTE), trim($row->CORTRKNO), trim($row->CORSHPDT), trim($row->QUTNO), trim($row->VENSTKNO), trim($row->RQDATE), trim($row->ETADATE), trim($row->EPCDATE), trim($row->COSTLAND), trim($row->POTYPE), trim($row->BALENO), trim($row->PIECENO), trim($row->DESNAME), trim($row->CUSTFLD1), trim($row->CUSTFLD3), trim($row->CUSTFLD9), trim($row->COSTCODE), trim($row->WASHCODE), trim($row->WIDTH_CM), trim($row->LENGTH_CM), trim($row->METRICAREA), trim($row->COSTMETRIC), trim($row->LINESTATUS), trim($row->COSTAMT1), trim($row->COSTAMT2), trim($row->COSTAMT3), trim($row->COSTAMT4), trim($row->COSTAMT5), trim($row->SHIPSTATUS), trim($row->SUBSTATUS), trim($row->COSTAMT1A), trim($row->COSTAMT2A), trim($row->CUSTFLD4), trim($row->CUSTFLD8), trim($row->DISCID), trim($row->PCSLAYERS), trim($row->NOLAYERS), trim($row->QTYNOLAYR), trim($row->PALQTYSQF), trim($row->PALQTYPCS), trim($row->QTYSCRAP), trim($row->EXTCOST0), trim($row->PACKQTY), trim($row->PACKID), trim($row->QUANTITY), trim($row->PACKQTY0), trim($row->PACKQTYREC), trim($row->ABCCODE), trim($row->PO_FROM), trim($row->ONHAND), trim($row->TSF_SPLIT), trim($row->EST_DAYS), trim($row->FETAMT), trim($row->QBTXLINEID), trim($row->BOTLDEP), trim($row->UPCCODE), trim($row->FTAXCODE), trim($row->ITEMTAX), trim($row->TAXABLE), trim($row->TAXRATE), trim($row->DELFLAG), trim($row->COSTGSTBD), trim($row->COSTUNITGB), trim($row->COSTLANDGB), trim($row->EXTCOSTGB0), trim($row->EXTCOSTLN0), trim($row->EXTCOSTLG0), trim($row->QBLISTID), trim($row->COSTBASE), trim($row->COSTDISC), trim($row->DISCAMT), trim($row->PRODBINLOC), trim($row->INSPECTNOI), trim($row->DATEPROD), trim($row->INSPECTNOO), trim($row->PALLETSOUT), trim($row->DATEFINI), trim($row->QBSOLISTID), trim($row->ORDCOMP), trim($row->FTTAMT), trim($row->QTYNOLAYRF), trim($row->QTYNOLAYRL));
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
