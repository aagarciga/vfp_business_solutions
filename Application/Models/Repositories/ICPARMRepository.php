<?php

/**
 * Project:  VFP Business Series
 * Copyright: 2014. VFP Business Solutions, LLC
 */

namespace Dandelion\MVC\Application\Models\Repositories;

use Dandelion\Diana\Interfaces\IRepository;
use Dandelion\MVC\Application\Models\Entities\ICPARM;

class ICPARMRepository extends VFPRepository implements IRepository {

    /**
     * @return array of all ICPARM objects from DB
     */
    public function GetAll() {
        $tableName = $this->entityName . $this->companySuffix;
        $sqlString = "SELECT * FROM $tableName";
        $query = $this->dbDriver->GetQuery();
        $queryResult = $query->Execute($sqlString);
        $result = array();

        foreach ($queryResult as $row) {
            $result [] = new ICPARM($row->ITEMNO, $row->ITMWHS, $row->ITEMTYPE, $row->ITEMORIGIN, $row->EQUIVITEM, $row->UPCCODE, $row->DESCRIP, $row->DESCRIP1, $row->DESCRIP2, $row->EXTDESCRIP, $row->PODESCRIP, $row->PODESCRIP1, $row->HAZARDOUS, $row->WEIGHT, $row->MWEIGHT, $row->MASTERQTY, $row->LENGTH, $row->WIDTH, $row->HEIGHT, $row->THICK, $row->CUBIC, $row->CLASS, $row->SUBCLASS1, $row->SUBCLASS2, $row->SUBCLASS3, $row->BINLOCAL, $row->COSTTYPE, $row->COSTBASE, $row->COSTDISC, $row->COSTNET, $row->COSTFACT, $row->CSTFCTDSC, $row->COSTUNIT, $row->COSTLAND, $row->COSTAVG, $row->LISTPRICE, $row->LISTPRCTL, $row->PRICE1, $row->PRFACT1, $row->PRQTY1, $row->PRCOMMI1, $row->PRICE2, $row->PRFACT2, $row->PRQTY2, $row->PRCOMMI2, $row->PRICE3, $row->PRFACT3, $row->PRQTY3, $row->PRCOMMI3, $row->PRICE4, $row->PRFACT4, $row->PRQTY4, $row->PRCOMMI4, $row->PRICE5, $row->PRFACT5, $row->PRQTY5, $row->PRCOMMI5, $row->PRICE6, $row->PRFACT6, $row->PRQTY6, $row->PRCOMMI6, $row->SALEPRICE, $row->SALENDDTE, $row->PRICEFACT, $row->PRIFCTDSC, $row->LSTPRCHG, $row->PRICECODE, $row->ONHAND, $row->NEGONHAND, $row->ONHANDMAX, $row->COMMITTED, $row->COMTOSHIP, $row->RMAQTY, $row->ONORDER, $row->ONHANDMIN, $row->REORDQTY, $row->MINORDQTY, $row->STKENDDTE, $row->BCKORDQTY, $row->VENDNO, $row->VENSTKNO, $row->LSTSALDTE, $row->LSTBUYDTE, $row->LSTARVDTE, $row->FRSBUYDTE, $row->LSTICDATE, $row->LSTICBAL, $row->ICDATECTRL, $row->TAXABLE, $row->TAXRATE, $row->TAXCODE, $row->IMPTAXID, $row->IMPTAXRATE, $row->PTDQTYSLD, $row->PTDSLS, $row->PTDCOST, $row->YTDQTYSLD, $row->YTDSLS, $row->YTDCOST, $row->PYQTYSLD, $row->PYSLS, $row->PYCOST, $row->PPYQTYSLD, $row->PPYSLS, $row->PPYCOST, $row->GLACCTSAL, $row->GLACCTEXP, $row->GLACCTAST, $row->GLACCTSW, $row->ICSERIAL, $row->RECPTDQTY, $row->RECYTDQTY, $row->RECPTDSLS, $row->RECYTDSLS, $row->SWPTDQTY, $row->SWYTDQTY, $row->SWPTDSLS, $row->SWYTDSLS, $row->ADJPTDQTY, $row->ADJYTDQTY, $row->ADJPTDSLS, $row->ADJYTDSLS, $row->GPTDQTY, $row->GYTDQTY, $row->GPTDSLS, $row->GYTDSLS, $row->RMPTDQTY, $row->RMYTDQTY, $row->RMPTDSLS, $row->RMYTDSLS, $row->ONBOND, $row->PICTURE_FI, $row->MAN_CODE, $row->METRIC, $row->CATPAGENO, $row->FACTTREAT, $row->MASTERD, $row->METRICD, $row->BMISC, $row->DEACTIVE, $row->NFLG0, $row->CUSTFLD1, $row->CUSTFLD2, $row->CUSTFLD3, $row->CUSTFLD4, $row->CUSTFLD5, $row->CUSTFLD6, $row->CUSTFLD7, $row->CUSTFLD8, $row->ORDER, $row->NOTES, $row->MFCSTKNO, $row->LOTS, $row->SALBEGDTE, $row->COSTCODE, $row->LABEL2, $row->TYPE2, $row->LABEL3, $row->TYPE3, $row->LABEL4, $row->TYPE4, $row->LABEL5, $row->TYPE5, $row->LABEL6, $row->TYPE6, $row->LOCNO, $row->CSTLOADFCT, $row->COSTLOAD, $row->OLDONHAND, $row->OLDOHDATE, $row->GLACCTWIP, $row->GLACCTSWCS, $row->CUSTFLD9, $row->SPCLFLAG, $row->RESWHS, $row->WEBDESCRIP, $row->WEBSYNCFLG, $row->WEBACTIVE, $row->USDASDSC, $row->VENDOR, $row->KIT, $row->MODEL, $row->TAGTYPE, $row->RLLUPDATE, $row->FUPDTIME, $row->FUPDDATE, $row->FSTATION, $row->FUSERID, $row->PRICECORE1, $row->PRICECORE2, $row->PRICECORE3, $row->PRICECORE4, $row->PRICECORE5, $row->PRICECORE6, $row->NOTEGEN, $row->COREBASE, $row->CORENET, $row->COREUNIT, $row->LISTCORE, $row->LANDCSTDTE, $row->LEADTIME, $row->SWCOGSFLAG, $row->PALQTYSQF, $row->PALQTYPCS, $row->BRDQTYSQF, $row->COMPER2, $row->COMR1F, $row->COMR2F, $row->COMR1T, $row->COMR2T, $row->COMPER1, $row->COMTYPE, $row->ABCCODE, $row->DESIGNER, $row->RETTRXCODE, $row->PROTOTYPE, $row->INSPECTION, $row->STNDCSTDTE, $row->COSTSTND, $row->ONCONSIGN, $row->ONCONSIGNP, $row->INTRAN, $row->METRICAREA, $row->CONSFLAG, $row->EPCDAYS, $row->ETADAYS, $row->INTROEND, $row->INTROCODE, $row->INTRODATE, $row->DESIGNNAM, $row->PCSLAYERS, $row->NOLAYERS, $row->QTYSCRAP, $row->QBLISTID, $row->BLOCKDATES, $row->BLOCKDATEE, $row->MINMAXDATE, $row->FETAMT, $row->PICNOUPD, $row->UPCCODEIN, $row->CASELENGTH, $row->CASEWIDTH, $row->CASEHEIGHT, $row->COUNTRYORG, $row->DISCAMT, $row->UNCODE, $row->BOTLDEP, $row->COSTHI6MTH, $row->MM_CODE, $row->COSTGSTBD, $row->BUYERCODE, $row->SHPCARTID, $row->ICSTAT);
        }

        return $result;
    }

    /**
     * @param string $predicate SQL Query Where clause
     * @return \Dandelion\MVC\Application\Models\Entities\ICPARM00
     */
    public function Get($predicate) {
        $tableName = $this->entityName . $this->companySuffix;
        $sqlString = "SELECT * FROM $tableName";
        $sqlString .= ' ' . $predicate;
        $query = $this->dbDriver->GetQuery();
        $queryResult = $query->Execute($sqlString);
        $result = array();

        foreach ($queryResult as $row) {
            $result [] = new ICPARM($row->ITEMNO, $row->ITMWHS, $row->ITEMTYPE, $row->ITEMORIGIN, $row->EQUIVITEM, $row->UPCCODE, $row->DESCRIP, $row->DESCRIP1, $row->DESCRIP2, $row->EXTDESCRIP, $row->PODESCRIP, $row->PODESCRIP1, $row->HAZARDOUS, $row->WEIGHT, $row->MWEIGHT, $row->MASTERQTY, $row->LENGTH, $row->WIDTH, $row->HEIGHT, $row->THICK, $row->CUBIC, $row->CLASS, $row->SUBCLASS1, $row->SUBCLASS2, $row->SUBCLASS3, $row->BINLOCAL, $row->COSTTYPE, $row->COSTBASE, $row->COSTDISC, $row->COSTNET, $row->COSTFACT, $row->CSTFCTDSC, $row->COSTUNIT, $row->COSTLAND, $row->COSTAVG, $row->LISTPRICE, $row->LISTPRCTL, $row->PRICE1, $row->PRFACT1, $row->PRQTY1, $row->PRCOMMI1, $row->PRICE2, $row->PRFACT2, $row->PRQTY2, $row->PRCOMMI2, $row->PRICE3, $row->PRFACT3, $row->PRQTY3, $row->PRCOMMI3, $row->PRICE4, $row->PRFACT4, $row->PRQTY4, $row->PRCOMMI4, $row->PRICE5, $row->PRFACT5, $row->PRQTY5, $row->PRCOMMI5, $row->PRICE6, $row->PRFACT6, $row->PRQTY6, $row->PRCOMMI6, $row->SALEPRICE, $row->SALENDDTE, $row->PRICEFACT, $row->PRIFCTDSC, $row->LSTPRCHG, $row->PRICECODE, $row->ONHAND, $row->NEGONHAND, $row->ONHANDMAX, $row->COMMITTED, $row->COMTOSHIP, $row->RMAQTY, $row->ONORDER, $row->ONHANDMIN, $row->REORDQTY, $row->MINORDQTY, $row->STKENDDTE, $row->BCKORDQTY, $row->VENDNO, $row->VENSTKNO, $row->LSTSALDTE, $row->LSTBUYDTE, $row->LSTARVDTE, $row->FRSBUYDTE, $row->LSTICDATE, $row->LSTICBAL, $row->ICDATECTRL, $row->TAXABLE, $row->TAXRATE, $row->TAXCODE, $row->IMPTAXID, $row->IMPTAXRATE, $row->PTDQTYSLD, $row->PTDSLS, $row->PTDCOST, $row->YTDQTYSLD, $row->YTDSLS, $row->YTDCOST, $row->PYQTYSLD, $row->PYSLS, $row->PYCOST, $row->PPYQTYSLD, $row->PPYSLS, $row->PPYCOST, $row->GLACCTSAL, $row->GLACCTEXP, $row->GLACCTAST, $row->GLACCTSW, $row->ICSERIAL, $row->RECPTDQTY, $row->RECYTDQTY, $row->RECPTDSLS, $row->RECYTDSLS, $row->SWPTDQTY, $row->SWYTDQTY, $row->SWPTDSLS, $row->SWYTDSLS, $row->ADJPTDQTY, $row->ADJYTDQTY, $row->ADJPTDSLS, $row->ADJYTDSLS, $row->GPTDQTY, $row->GYTDQTY, $row->GPTDSLS, $row->GYTDSLS, $row->RMPTDQTY, $row->RMYTDQTY, $row->RMPTDSLS, $row->RMYTDSLS, $row->ONBOND, $row->PICTURE_FI, $row->MAN_CODE, $row->METRIC, $row->CATPAGENO, $row->FACTTREAT, $row->MASTERD, $row->METRICD, $row->BMISC, $row->DEACTIVE, $row->NFLG0, $row->CUSTFLD1, $row->CUSTFLD2, $row->CUSTFLD3, $row->CUSTFLD4, $row->CUSTFLD5, $row->CUSTFLD6, $row->CUSTFLD7, $row->CUSTFLD8, $row->ORDER, $row->NOTES, $row->MFCSTKNO, $row->LOTS, $row->SALBEGDTE, $row->COSTCODE, $row->LABEL2, $row->TYPE2, $row->LABEL3, $row->TYPE3, $row->LABEL4, $row->TYPE4, $row->LABEL5, $row->TYPE5, $row->LABEL6, $row->TYPE6, $row->LOCNO, $row->CSTLOADFCT, $row->COSTLOAD, $row->OLDONHAND, $row->OLDOHDATE, $row->GLACCTWIP, $row->GLACCTSWCS, $row->CUSTFLD9, $row->SPCLFLAG, $row->RESWHS, $row->WEBDESCRIP, $row->WEBSYNCFLG, $row->WEBACTIVE, $row->USDASDSC, $row->VENDOR, $row->KIT, $row->MODEL, $row->TAGTYPE, $row->RLLUPDATE, $row->FUPDTIME, $row->FUPDDATE, $row->FSTATION, $row->FUSERID, $row->PRICECORE1, $row->PRICECORE2, $row->PRICECORE3, $row->PRICECORE4, $row->PRICECORE5, $row->PRICECORE6, $row->NOTEGEN, $row->COREBASE, $row->CORENET, $row->COREUNIT, $row->LISTCORE, $row->LANDCSTDTE, $row->LEADTIME, $row->SWCOGSFLAG, $row->PALQTYSQF, $row->PALQTYPCS, $row->BRDQTYSQF, $row->COMPER2, $row->COMR1F, $row->COMR2F, $row->COMR1T, $row->COMR2T, $row->COMPER1, $row->COMTYPE, $row->ABCCODE, $row->DESIGNER, $row->RETTRXCODE, $row->PROTOTYPE, $row->INSPECTION, $row->STNDCSTDTE, $row->COSTSTND, $row->ONCONSIGN, $row->ONCONSIGNP, $row->INTRAN, $row->METRICAREA, $row->CONSFLAG, $row->EPCDAYS, $row->ETADAYS, $row->INTROEND, $row->INTROCODE, $row->INTRODATE, $row->DESIGNNAM, $row->PCSLAYERS, $row->NOLAYERS, $row->QTYSCRAP, $row->QBLISTID, $row->BLOCKDATES, $row->BLOCKDATEE, $row->MINMAXDATE, $row->FETAMT, $row->PICNOUPD, $row->UPCCODEIN, $row->CASELENGTH, $row->CASEWIDTH, $row->CASEHEIGHT, $row->COUNTRYORG, $row->DISCAMT, $row->UNCODE, $row->BOTLDEP, $row->COSTHI6MTH, $row->MM_CODE, $row->COSTGSTBD, $row->BUYERCODE, $row->SHPCARTID, $row->ICSTAT);
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
