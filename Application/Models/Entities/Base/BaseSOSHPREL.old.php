<?php

/**
 * Project:  VFP Business Series
 * Copyright: 2014. VFP Business Solutions, LLC
 */

namespace Dandelion\MVC\Application\Models\Entities\Base;

/**
 * BaseSOSHPREL
 */
class BaseSOSHPREL {

    /**
     * Private fields
     */
    private static $_name = "SOSHPREL";

    /**
     * Protected fields
     */

    /**
     * @var Char
     */
    protected $_shprelno;

    /**
     * @var Char
     */
    protected $_ordnum;

    /**
     * @var Char
     */
    protected $_itmcount;

    /**
     * @var Char
     */
    protected $_itemno;

    /**
     * @var Char
     */
    protected $_itmwhs;

    /**
     * @var Char
     */
    protected $_itemtype;

    /**
     * @var Date
     */
    protected $_shipdate;

    /**
     * @var Char
     */
    protected $_lotno;

    /**
     * @var Char
     */
    protected $_descrip;

    /**
     * @var Char
     */
    protected $_unit;

    /**
     * @var Numeric
     */
    protected $_weight;

    /**
     * @var Numeric
     */
    protected $_length;

    /**
     * @var Numeric
     */
    protected $_width;

    /**
     * @var Char
     */
    protected $_thick;

    /**
     * @var Numeric
     */
    protected $_cubic;

    /**
     * @var Numeric
     */
    protected $_qtyshprel;

    /**
     * @var Numeric
     */
    protected $_qtyord;

    /**
     * @var Numeric
     */
    protected $_qtyshp;

    /**
     * @var Numeric
     */
    protected $_qtytoinv;

    /**
     * @var Numeric
     */
    protected $_qtyinv;

    /**
     * @var Numeric
     */
    protected $_unitprice;

    /**
     * @var Numeric
     */
    protected $_qtyic;

    /**
     * @var Numeric
     */
    protected $_priceunit;

    /**
     * @var Numeric
     */
    protected $_extprice;

    /**
     * @var Numeric
     */
    protected $_extpr0;

    /**
     * @var Numeric
     */
    protected $_extcost;

    /**
     * @var Char
     */
    protected $_glacctno;

    /**
     * @var Char
     */
    protected $_glacctast;

    /**
     * @var Char
     */
    protected $_glacctexp;

    /**
     * @var Numeric
     */
    protected $_batch_no;

    /**
     * @var Numeric
     */
    protected $_period;

    /**
     * @var Char
     */
    protected $_prifctdsc;

    /**
     * @var Logical
     */
    protected $_taxable;

    /**
     * @var Numeric
     */
    protected $_itemtax;

    /**
     * @var Numeric
     */
    protected $_itemtax0;

    /**
     * @var Char
     */
    protected $_key;

    /**
     * @var Char
     */
    protected $_userflg;

    /**
     * @var Char
     */
    protected $_fuserid;

    /**
     * @var Char
     */
    protected $_fstation;

    /**
     * @var Memo
     */
    protected $_itmcomm;

    /**
     * @var Char
     */
    protected $_delivery;

    /**
     * @var Logical
     */
    protected $_lotitem;

    /**
     * @var Char
     */
    protected $_picticbano;

    /**
     * @var Logical
     */
    protected $_nflg0;

    /**
     * @var Numeric
     */
    protected $_pricefact;

    /**
     * @var Char
     */
    protected $_locno;

    /**
     * @var Memo
     */
    protected $_serialno;

    /**
     * @var Char
     */
    protected $_ftaxcode;

    /**
     * @var Char
     */
    protected $_taxcode;

    /**
     * @var Numeric
     */
    protected $_taxrate;

    /**
     * @var Date
     */
    protected $_fupddate;

    /**
     * @var Char
     */
    protected $_fupdtime;

    /**
     * @var Char
     */
    protected $_baseid;

    /**
     * @var Char
     */
    protected $_cstctid;

    /**
     * @var Logical
     */
    protected $_okupdic;

    /**
     * @var Char
     */
    protected $_newuserid;

    /**
     * @var Char
     */
    protected $_newdtetime;

    /**
     * @var Char
     */
    protected $_newstation;

    /**
     * @var Char
     */
    protected $_gldept;

    /**
     * @var Numeric
     */
    protected $_costfact;

    /**
     * @var Numeric
     */
    protected $_palqtysqf;

    /**
     * @var Numeric
     */
    protected $_palqtypcs;

    /**
     * @var Char
     */
    protected $_custno;

    /**
     * @var Date
     */
    protected $_shpreldate;

    /**
     * @var Logical
     */
    protected $_void;

    /**
     * @var AutoInc
     */
    protected $_id;

    /**
     * @var Char
     */
    protected $_hitmcount;

    /**
     * @var Char
     */
    protected $_serialno1;

    /**
     * @var Numeric
     */
    protected $_qtypick;

    /**
     * @var Numeric
     */
    protected $_qtypack;

    /**
     * @var Char
     */
    protected $_packno;

    /**
     * @var Char
     */
    protected $_serialno2;

    /**
     * @var Char
     */
    protected $_wmstatus;

    /**
     * @var Char
     */
    protected $_binlocal;

    /**
     * @var Char
     */
    protected $_cartonno;

    /**
     * @var Logical
     */
    protected $_hazardous;

    /**
     * @var Char
     */
    protected $_locno1;

    /**
     * @var Char
     */
    protected $_locno2;

    /**
     * @var Char
     */
    protected $_locno3;

    /**
     * @var Char
     */
    protected $_zone;

    /**
     * @var Char
     */
    protected $_zone1;

    /**
     * @var Char
     */
    protected $_zone2;

    /**
     * @var Char
     */
    protected $_zone3;

    /**
     * @var Char
     */
    protected $_partno;

    /**
     * @var Char
     */
    protected $_qbtxlineid;

    /**
     * @var Char
     */
    protected $_sotxlineid;

    /**
     * @var Char
     */
    protected $_qblistid;

    /**
     * @var Char
     */
    protected $_soitemguid;

    /**
     * @var Numeric
     */
    protected $_itmdisc;

    /**
     * Getters
     */

    /**
     * @return Char
     */
    public function getShprelno() {
        return $this->_shprelno;
    }

    /**
     * @return Char
     */
    public function getOrdnum() {
        return $this->_ordnum;
    }

    /**
     * @return Char
     */
    public function getItmcount() {
        return $this->_itmcount;
    }

    /**
     * @return Char
     */
    public function getItemno() {
        return $this->_itemno;
    }

    /**
     * @return Char
     */
    public function getItmwhs() {
        return $this->_itmwhs;
    }

    /**
     * @return Char
     */
    public function getItemtype() {
        return $this->_itemtype;
    }

    /**
     * @return Date
     */
    public function getShipdate() {
        return $this->_shipdate;
    }

    /**
     * @return Char
     */
    public function getLotno() {
        return $this->_lotno;
    }

    /**
     * @return Char
     */
    public function getDescrip() {
        return $this->_descrip;
    }

    /**
     * @return Char
     */
    public function getUnit() {
        return $this->_unit;
    }

    /**
     * @return Numeric
     */
    public function getWeight() {
        return $this->_weight;
    }

    /**
     * @return Numeric
     */
    public function getLength() {
        return $this->_length;
    }

    /**
     * @return Numeric
     */
    public function getWidth() {
        return $this->_width;
    }

    /**
     * @return Char
     */
    public function getThick() {
        return $this->_thick;
    }

    /**
     * @return Numeric
     */
    public function getCubic() {
        return $this->_cubic;
    }

    /**
     * @return Numeric
     */
    public function getQtyshprel() {
        return $this->_qtyshprel;
    }

    /**
     * @return Numeric
     */
    public function getQtyord() {
        return $this->_qtyord;
    }

    /**
     * @return Numeric
     */
    public function getQtyshp() {
        return $this->_qtyshp;
    }

    /**
     * @return Numeric
     */
    public function getQtytoinv() {
        return $this->_qtytoinv;
    }

    /**
     * @return Numeric
     */
    public function getQtyinv() {
        return $this->_qtyinv;
    }

    /**
     * @return Numeric
     */
    public function getUnitprice() {
        return $this->_unitprice;
    }

    /**
     * @return Numeric
     */
    public function getQtyic() {
        return $this->_qtyic;
    }

    /**
     * @return Numeric
     */
    public function getPriceunit() {
        return $this->_priceunit;
    }

    /**
     * @return Numeric
     */
    public function getExtprice() {
        return $this->_extprice;
    }

    /**
     * @return Numeric
     */
    public function getExtpr0() {
        return $this->_extpr0;
    }

    /**
     * @return Numeric
     */
    public function getExtcost() {
        return $this->_extcost;
    }

    /**
     * @return Char
     */
    public function getGlacctno() {
        return $this->_glacctno;
    }

    /**
     * @return Char
     */
    public function getGlacctast() {
        return $this->_glacctast;
    }

    /**
     * @return Char
     */
    public function getGlacctexp() {
        return $this->_glacctexp;
    }

    /**
     * @return Numeric
     */
    public function getBatch_no() {
        return $this->_batch_no;
    }

    /**
     * @return Numeric
     */
    public function getPeriod() {
        return $this->_period;
    }

    /**
     * @return Char
     */
    public function getPrifctdsc() {
        return $this->_prifctdsc;
    }

    /**
     * @return Logical
     */
    public function getTaxable() {
        return $this->_taxable;
    }

    /**
     * @return Numeric
     */
    public function getItemtax() {
        return $this->_itemtax;
    }

    /**
     * @return Numeric
     */
    public function getItemtax0() {
        return $this->_itemtax0;
    }

    /**
     * @return Char
     */
    public function getKey() {
        return $this->_key;
    }

    /**
     * @return Char
     */
    public function getUserflg() {
        return $this->_userflg;
    }

    /**
     * @return Char
     */
    public function getFuserid() {
        return $this->_fuserid;
    }

    /**
     * @return Char
     */
    public function getFstation() {
        return $this->_fstation;
    }

    /**
     * @return Memo
     */
    public function getItmcomm() {
        return $this->_itmcomm;
    }

    /**
     * @return Char
     */
    public function getDelivery() {
        return $this->_delivery;
    }

    /**
     * @return Logical
     */
    public function getLotitem() {
        return $this->_lotitem;
    }

    /**
     * @return Char
     */
    public function getPicticbano() {
        return $this->_picticbano;
    }

    /**
     * @return Logical
     */
    public function getNflg0() {
        return $this->_nflg0;
    }

    /**
     * @return Numeric
     */
    public function getPricefact() {
        return $this->_pricefact;
    }

    /**
     * @return Char
     */
    public function getLocno() {
        return $this->_locno;
    }

    /**
     * @return Memo
     */
    public function getSerialno() {
        return $this->_serialno;
    }

    /**
     * @return Char
     */
    public function getFtaxcode() {
        return $this->_ftaxcode;
    }

    /**
     * @return Char
     */
    public function getTaxcode() {
        return $this->_taxcode;
    }

    /**
     * @return Numeric
     */
    public function getTaxrate() {
        return $this->_taxrate;
    }

    /**
     * @return Date
     */
    public function getFupddate() {
        return $this->_fupddate;
    }

    /**
     * @return Char
     */
    public function getFupdtime() {
        return $this->_fupdtime;
    }

    /**
     * @return Char
     */
    public function getBaseid() {
        return $this->_baseid;
    }

    /**
     * @return Char
     */
    public function getCstctid() {
        return $this->_cstctid;
    }

    /**
     * @return Logical
     */
    public function getOkupdic() {
        return $this->_okupdic;
    }

    /**
     * @return Char
     */
    public function getNewuserid() {
        return $this->_newuserid;
    }

    /**
     * @return Char
     */
    public function getNewdtetime() {
        return $this->_newdtetime;
    }

    /**
     * @return Char
     */
    public function getNewstation() {
        return $this->_newstation;
    }

    /**
     * @return Char
     */
    public function getGldept() {
        return $this->_gldept;
    }

    /**
     * @return Numeric
     */
    public function getCostfact() {
        return $this->_costfact;
    }

    /**
     * @return Numeric
     */
    public function getPalqtysqf() {
        return $this->_palqtysqf;
    }

    /**
     * @return Numeric
     */
    public function getPalqtypcs() {
        return $this->_palqtypcs;
    }

    /**
     * @return Char
     */
    public function getCustno() {
        return $this->_custno;
    }

    /**
     * @return Date
     */
    public function getShpreldate() {
        return $this->_shpreldate;
    }

    /**
     * @return Logical
     */
    public function getVoid() {
        return $this->_void;
    }

    /**
     * @return AutoInc
     */
    public function getId() {
        return $this->_id;
    }

    /**
     * @return Char
     */
    public function getHitmcount() {
        return $this->_hitmcount;
    }

    /**
     * @return Char
     */
    public function getSerialno1() {
        return $this->_serialno1;
    }

    /**
     * @return Numeric
     */
    public function getQtypick() {
        return $this->_qtypick;
    }

    /**
     * @return Numeric
     */
    public function getQtypack() {
        return $this->_qtypack;
    }

    /**
     * @return Char
     */
    public function getPackno() {
        return $this->_packno;
    }

    /**
     * @return Char
     */
    public function getSerialno2() {
        return $this->_serialno2;
    }

    /**
     * @return Char
     */
    public function getWmstatus() {
        return $this->_wmstatus;
    }

    /**
     * @return Char
     */
    public function getBinlocal() {
        return $this->_binlocal;
    }

    /**
     * @return Char
     */
    public function getCartonno() {
        return $this->_cartonno;
    }

    /**
     * @return Logical
     */
    public function getHazardous() {
        return $this->_hazardous;
    }

    /**
     * @return Char
     */
    public function getLocno1() {
        return $this->_locno1;
    }

    /**
     * @return Char
     */
    public function getLocno2() {
        return $this->_locno2;
    }

    /**
     * @return Char
     */
    public function getLocno3() {
        return $this->_locno3;
    }

    /**
     * @return Char
     */
    public function getZone() {
        return $this->_zone;
    }

    /**
     * @return Char
     */
    public function getZone1() {
        return $this->_zone1;
    }

    /**
     * @return Char
     */
    public function getZone2() {
        return $this->_zone2;
    }

    /**
     * @return Char
     */
    public function getZone3() {
        return $this->_zone3;
    }

    /**
     * @return Char
     */
    public function getPartno() {
        return $this->_partno;
    }

    /**
     * @return Char
     */
    public function getQbtxlineid() {
        return $this->_qbtxlineid;
    }

    /**
     * @return Char
     */
    public function getSotxlineid() {
        return $this->_sotxlineid;
    }

    /**
     * @return Char
     */
    public function getQblistid() {
        return $this->_qblistid;
    }

    /**
     * @return Char
     */
    public function getSoitemguid() {
        return $this->_soitemguid;
    }

    /**
     * @return Numeric
     */
    public function getItmdisc() {
        return $this->_itmdisc;
    }

    /**
     * Setters
     */

    /**
     * @param Char
     */
    public function setShprelno($value) {
        $this->_shprelno = $value;
    }

    /**
     * @param Char
     */
    public function setOrdnum($value) {
        $this->_ordnum = $value;
    }

    /**
     * @param Char
     */
    public function setItmcount($value) {
        $this->_itmcount = $value;
    }

    /**
     * @param Char
     */
    public function setItemno($value) {
        $this->_itemno = $value;
    }

    /**
     * @param Char
     */
    public function setItmwhs($value) {
        $this->_itmwhs = $value;
    }

    /**
     * @param Char
     */
    public function setItemtype($value) {
        $this->_itemtype = $value;
    }

    /**
     * @param Date
     */
    public function setShipdate($value) {
        $this->_shipdate = $value;
    }

    /**
     * @param Char
     */
    public function setLotno($value) {
        $this->_lotno = $value;
    }

    /**
     * @param Char
     */
    public function setDescrip($value) {
        $this->_descrip = $value;
    }

    /**
     * @param Char
     */
    public function setUnit($value) {
        $this->_unit = $value;
    }

    /**
     * @param Numeric
     */
    public function setWeight($value) {
        $this->_weight = $value;
    }

    /**
     * @param Numeric
     */
    public function setLength($value) {
        $this->_length = $value;
    }

    /**
     * @param Numeric
     */
    public function setWidth($value) {
        $this->_width = $value;
    }

    /**
     * @param Char
     */
    public function setThick($value) {
        $this->_thick = $value;
    }

    /**
     * @param Numeric
     */
    public function setCubic($value) {
        $this->_cubic = $value;
    }

    /**
     * @param Numeric
     */
    public function setQtyshprel($value) {
        $this->_qtyshprel = $value;
    }

    /**
     * @param Numeric
     */
    public function setQtyord($value) {
        $this->_qtyord = $value;
    }

    /**
     * @param Numeric
     */
    public function setQtyshp($value) {
        $this->_qtyshp = $value;
    }

    /**
     * @param Numeric
     */
    public function setQtytoinv($value) {
        $this->_qtytoinv = $value;
    }

    /**
     * @param Numeric
     */
    public function setQtyinv($value) {
        $this->_qtyinv = $value;
    }

    /**
     * @param Numeric
     */
    public function setUnitprice($value) {
        $this->_unitprice = $value;
    }

    /**
     * @param Numeric
     */
    public function setQtyic($value) {
        $this->_qtyic = $value;
    }

    /**
     * @param Numeric
     */
    public function setPriceunit($value) {
        $this->_priceunit = $value;
    }

    /**
     * @param Numeric
     */
    public function setExtprice($value) {
        $this->_extprice = $value;
    }

    /**
     * @param Numeric
     */
    public function setExtpr0($value) {
        $this->_extpr0 = $value;
    }

    /**
     * @param Numeric
     */
    public function setExtcost($value) {
        $this->_extcost = $value;
    }

    /**
     * @param Char
     */
    public function setGlacctno($value) {
        $this->_glacctno = $value;
    }

    /**
     * @param Char
     */
    public function setGlacctast($value) {
        $this->_glacctast = $value;
    }

    /**
     * @param Char
     */
    public function setGlacctexp($value) {
        $this->_glacctexp = $value;
    }

    /**
     * @param Numeric
     */
    public function setBatch_no($value) {
        $this->_batch_no = $value;
    }

    /**
     * @param Numeric
     */
    public function setPeriod($value) {
        $this->_period = $value;
    }

    /**
     * @param Char
     */
    public function setPrifctdsc($value) {
        $this->_prifctdsc = $value;
    }

    /**
     * @param Logical
     */
    public function setTaxable($value) {
        $this->_taxable = $value;
    }

    /**
     * @param Numeric
     */
    public function setItemtax($value) {
        $this->_itemtax = $value;
    }

    /**
     * @param Numeric
     */
    public function setItemtax0($value) {
        $this->_itemtax0 = $value;
    }

    /**
     * @param Char
     */
    public function setKey($value) {
        $this->_key = $value;
    }

    /**
     * @param Char
     */
    public function setUserflg($value) {
        $this->_userflg = $value;
    }

    /**
     * @param Char
     */
    public function setFuserid($value) {
        $this->_fuserid = $value;
    }

    /**
     * @param Char
     */
    public function setFstation($value) {
        $this->_fstation = $value;
    }

    /**
     * @param Memo
     */
    public function setItmcomm($value) {
        $this->_itmcomm = $value;
    }

    /**
     * @param Char
     */
    public function setDelivery($value) {
        $this->_delivery = $value;
    }

    /**
     * @param Logical
     */
    public function setLotitem($value) {
        $this->_lotitem = $value;
    }

    /**
     * @param Char
     */
    public function setPicticbano($value) {
        $this->_picticbano = $value;
    }

    /**
     * @param Logical
     */
    public function setNflg0($value) {
        $this->_nflg0 = $value;
    }

    /**
     * @param Numeric
     */
    public function setPricefact($value) {
        $this->_pricefact = $value;
    }

    /**
     * @param Char
     */
    public function setLocno($value) {
        $this->_locno = $value;
    }

    /**
     * @param Memo
     */
    public function setSerialno($value) {
        $this->_serialno = $value;
    }

    /**
     * @param Char
     */
    public function setFtaxcode($value) {
        $this->_ftaxcode = $value;
    }

    /**
     * @param Char
     */
    public function setTaxcode($value) {
        $this->_taxcode = $value;
    }

    /**
     * @param Numeric
     */
    public function setTaxrate($value) {
        $this->_taxrate = $value;
    }

    /**
     * @param Date
     */
    public function setFupddate($value) {
        $this->_fupddate = $value;
    }

    /**
     * @param Char
     */
    public function setFupdtime($value) {
        $this->_fupdtime = $value;
    }

    /**
     * @param Char
     */
    public function setBaseid($value) {
        $this->_baseid = $value;
    }

    /**
     * @param Char
     */
    public function setCstctid($value) {
        $this->_cstctid = $value;
    }

    /**
     * @param Logical
     */
    public function setOkupdic($value) {
        $this->_okupdic = $value;
    }

    /**
     * @param Char
     */
    public function setNewuserid($value) {
        $this->_newuserid = $value;
    }

    /**
     * @param Char
     */
    public function setNewdtetime($value) {
        $this->_newdtetime = $value;
    }

    /**
     * @param Char
     */
    public function setNewstation($value) {
        $this->_newstation = $value;
    }

    /**
     * @param Char
     */
    public function setGldept($value) {
        $this->_gldept = $value;
    }

    /**
     * @param Numeric
     */
    public function setCostfact($value) {
        $this->_costfact = $value;
    }

    /**
     * @param Numeric
     */
    public function setPalqtysqf($value) {
        $this->_palqtysqf = $value;
    }

    /**
     * @param Numeric
     */
    public function setPalqtypcs($value) {
        $this->_palqtypcs = $value;
    }

    /**
     * @param Char
     */
    public function setCustno($value) {
        $this->_custno = $value;
    }

    /**
     * @param Date
     */
    public function setShpreldate($value) {
        $this->_shpreldate = $value;
    }

    /**
     * @param Logical
     */
    public function setVoid($value) {
        $this->_void = $value;
    }

    /**
     * @param AutoInc
     */
    public function setId($value) {
        $this->_id = $value;
    }

    /**
     * @param Char
     */
    public function setHitmcount($value) {
        $this->_hitmcount = $value;
    }

    /**
     * @param Char
     */
    public function setSerialno1($value) {
        $this->_serialno1 = $value;
    }

    /**
     * @param Numeric
     */
    public function setQtypick($value) {
        $this->_qtypick = $value;
    }

    /**
     * @param Numeric
     */
    public function setQtypack($value) {
        $this->_qtypack = $value;
    }

    /**
     * @param Char
     */
    public function setPackno($value) {
        $this->_packno = $value;
    }

    /**
     * @param Char
     */
    public function setSerialno2($value) {
        $this->_serialno2 = $value;
    }

    /**
     * @param Char
     */
    public function setWmstatus($value) {
        $this->_wmstatus = $value;
    }

    /**
     * @param Char
     */
    public function setBinlocal($value) {
        $this->_binlocal = $value;
    }

    /**
     * @param Char
     */
    public function setCartonno($value) {
        $this->_cartonno = $value;
    }

    /**
     * @param Logical
     */
    public function setHazardous($value) {
        $this->_hazardous = $value;
    }

    /**
     * @param Char
     */
    public function setLocno1($value) {
        $this->_locno1 = $value;
    }

    /**
     * @param Char
     */
    public function setLocno2($value) {
        $this->_locno2 = $value;
    }

    /**
     * @param Char
     */
    public function setLocno3($value) {
        $this->_locno3 = $value;
    }

    /**
     * @param Char
     */
    public function setZone($value) {
        $this->_zone = $value;
    }

    /**
     * @param Char
     */
    public function setZone1($value) {
        $this->_zone1 = $value;
    }

    /**
     * @param Char
     */
    public function setZone2($value) {
        $this->_zone2 = $value;
    }

    /**
     * @param Char
     */
    public function setZone3($value) {
        $this->_zone3 = $value;
    }

    /**
     * @param Char
     */
    public function setPartno($value) {
        $this->_partno = $value;
    }

    /**
     * @param Char
     */
    public function setQbtxlineid($value) {
        $this->_qbtxlineid = $value;
    }

    /**
     * @param Char
     */
    public function setSotxlineid($value) {
        $this->_sotxlineid = $value;
    }

    /**
     * @param Char
     */
    public function setQblistid($value) {
        $this->_qblistid = $value;
    }

    /**
     * @param Char
     */
    public function setSoitemguid($value) {
        $this->_soitemguid = $value;
    }

    /**
     * @param Numeric
     */
    public function setItmdisc($value) {
        $this->_itmdisc = $value;
    }

    /**
     * Constructor
     */
    public function __construct($shprelno, $ordnum, $itmcount, $itemno, $itmwhs, $itemtype, $shipdate, $lotno, $descrip, $unit, $weight, $length, $width, $thick, $cubic, $qtyshprel, $qtyord, $qtyshp, $qtytoinv, $qtyinv, $unitprice, $qtyic, $priceunit, $extprice, $extpr0, $extcost, $glacctno, $glacctast, $glacctexp, $batch_no, $period, $prifctdsc, $taxable, $itemtax, $itemtax0, $key, $userflg, $fuserid, $fstation, $itmcomm, $delivery, $lotitem, $picticbano, $nflg0, $pricefact, $locno, $serialno, $ftaxcode, $taxcode, $taxrate, $fupddate, $fupdtime, $baseid, $cstctid, $okupdic, $newuserid, $newdtetime, $newstation, $gldept, $costfact, $palqtysqf, $palqtypcs, $custno, $shpreldate, $void, $id, $hitmcount, $serialno1, $qtypick, $qtypack, $packno, $serialno2, $wmstatus, $binlocal, $cartonno, $hazardous, $locno1, $locno2, $locno3, $zone, $zone1, $zone2, $zone3, $partno, $qbtxlineid, $sotxlineid, $qblistid, $soitemguid, $itmdisc) {
        $this->_shprelno = $shprelno;
        $this->_ordnum = $ordnum;
        $this->_itmcount = $itmcount;
        $this->_itemno = $itemno;
        $this->_itmwhs = $itmwhs;
        $this->_itemtype = $itemtype;
        $this->_shipdate = $shipdate;
        $this->_lotno = $lotno;
        $this->_descrip = $descrip;
        $this->_unit = $unit;
        $this->_weight = $weight;
        $this->_length = $length;
        $this->_width = $width;
        $this->_thick = $thick;
        $this->_cubic = $cubic;
        $this->_qtyshprel = $qtyshprel;
        $this->_qtyord = $qtyord;
        $this->_qtyshp = $qtyshp;
        $this->_qtytoinv = $qtytoinv;
        $this->_qtyinv = $qtyinv;
        $this->_unitprice = $unitprice;
        $this->_qtyic = $qtyic;
        $this->_priceunit = $priceunit;
        $this->_extprice = $extprice;
        $this->_extpr0 = $extpr0;
        $this->_extcost = $extcost;
        $this->_glacctno = $glacctno;
        $this->_glacctast = $glacctast;
        $this->_glacctexp = $glacctexp;
        $this->_batch_no = $batch_no;
        $this->_period = $period;
        $this->_prifctdsc = $prifctdsc;
        $this->_taxable = $taxable;
        $this->_itemtax = $itemtax;
        $this->_itemtax0 = $itemtax0;
        $this->_key = $key;
        $this->_userflg = $userflg;
        $this->_fuserid = $fuserid;
        $this->_fstation = $fstation;
        $this->_itmcomm = $itmcomm;
        $this->_delivery = $delivery;
        $this->_lotitem = $lotitem;
        $this->_picticbano = $picticbano;
        $this->_nflg0 = $nflg0;
        $this->_pricefact = $pricefact;
        $this->_locno = $locno;
        $this->_serialno = $serialno;
        $this->_ftaxcode = $ftaxcode;
        $this->_taxcode = $taxcode;
        $this->_taxrate = $taxrate;
        $this->_fupddate = $fupddate;
        $this->_fupdtime = $fupdtime;
        $this->_baseid = $baseid;
        $this->_cstctid = $cstctid;
        $this->_okupdic = $okupdic;
        $this->_newuserid = $newuserid;
        $this->_newdtetime = $newdtetime;
        $this->_newstation = $newstation;
        $this->_gldept = $gldept;
        $this->_costfact = $costfact;
        $this->_palqtysqf = $palqtysqf;
        $this->_palqtypcs = $palqtypcs;
        $this->_custno = $custno;
        $this->_shpreldate = $shpreldate;
        $this->_void = $void;
        $this->_id = $id;
        $this->_hitmcount = $hitmcount;
        $this->_serialno1 = $serialno1;
        $this->_qtypick = $qtypick;
        $this->_qtypack = $qtypack;
        $this->_packno = $packno;
        $this->_serialno2 = $serialno2;
        $this->_wmstatus = $wmstatus;
        $this->_binlocal = $binlocal;
        $this->_cartonno = $cartonno;
        $this->_hazardous = $hazardous;
        $this->_locno1 = $locno1;
        $this->_locno2 = $locno2;
        $this->_locno3 = $locno3;
        $this->_zone = $zone;
        $this->_zone1 = $zone1;
        $this->_zone2 = $zone2;
        $this->_zone3 = $zone3;
        $this->_partno = $partno;
        $this->_qbtxlineid = $qbtxlineid;
        $this->_sotxlineid = $sotxlineid;
        $this->_qblistid = $qblistid;
        $this->_soitemguid = $soitemguid;
        $this->_itmdisc = $itmdisc;
    }

    public static function toString() {
        return self::$_name;
    }

}
