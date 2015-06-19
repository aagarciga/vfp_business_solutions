<?php

/**
 * Project:  VFP Business Series
 * Copyright: 2014. VFP Business Solutions, LLC
 */

namespace Dandelion\MVC\Application\Models\Entities\Base;

/**
 * BaseQUHSTI
 */
class BaseQUHSTI {

    /**
     * Private fields
     */
    private static $_name = "QUHSTI";

    /**
     * Protected fields
     */

    /**
     * @var Char
     */
    protected $_qutno;

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
     * @var Char
     */
    protected $_descrip;

    /**
     * @var Char
     */
    protected $_descrip1;

    /**
     * @var Date
     */
    protected $_qutdate;

    /**
     * @var Char
     */
    protected $_custno;

    /**
     * @var Char
     */
    protected $_ordnum;

    /**
     * @var Char
     */
    protected $_quotstat;

    /**
     * @var Char
     */
    protected $_quotspcl;

    /**
     * @var Memo
     */
    protected $_itmcomm;

    /**
     * @var Char
     */
    protected $_delivery;

    /**
     * @var Char
     */
    protected $_buyercode;

    /**
     * @var Char
     */
    protected $_histstat;

    /**
     * @var Char
     */
    protected $_prifctdsc;

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
     * @var Char
     */
    protected $_class;

    /**
     * @var Char
     */
    protected $_subclass1;

    /**
     * @var Char
     */
    protected $_subclass2;

    /**
     * @var Char
     */
    protected $_subclass3;

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
    protected $_qtyshp0;

    /**
     * @var Numeric
     */
    protected $_qtyshp1;

    /**
     * @var Numeric
     */
    protected $_qtyreq;

    /**
     * @var Numeric
     */
    protected $_qtyordpo;

    /**
     * @var Numeric
     */
    protected $_unitprice;

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
    protected $_extprpo;

    /**
     * @var Numeric
     */
    protected $_muamt;

    /**
     * @var Char
     */
    protected $_costtype;

    /**
     * @var Numeric
     */
    protected $_costunit;

    /**
     * @var Numeric
     */
    protected $_costfact;

    /**
     * @var Numeric
     */
    protected $_unitcost;

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
    protected $_txrt;

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
     * @var Numeric
     */
    protected $_itemtaxpo;

    /**
     * @var Char
     */
    protected $_vendno;

    /**
     * @var Char
     */
    protected $_vendor;

    /**
     * @var Numeric
     */
    protected $_unitcost2;

    /**
     * @var Char
     */
    protected $_ven_code2;

    /**
     * @var Char
     */
    protected $_vendor2;

    /**
     * @var Numeric
     */
    protected $_unitcost3;

    /**
     * @var Char
     */
    protected $_ven_code3;

    /**
     * @var Char
     */
    protected $_vendor3;

    /**
     * @var Char
     */
    protected $_fuserid;

    /**
     * @var Char
     */
    protected $_fstation;

    /**
     * @var Numeric
     */
    protected $_commission;

    /**
     * @var Char
     */
    protected $_salesmn;

    /**
     * @var Char
     */
    protected $_invno;

    /**
     * @var Date
     */
    protected $_invdate;

    /**
     * @var Date
     */
    protected $_podate;

    /**
     * @var Char
     */
    protected $_pono;

    /**
     * @var Numeric
     */
    protected $_itmdisc;

    /**
     * @var Logical
     */
    protected $_nflg0;

    /**
     * @var Char
     */
    protected $_nflg1;

    /**
     * @var Numeric
     */
    protected $_pricefact;

    /**
     * @var Char
     */
    protected $_terr;

    /**
     * @var Char
     */
    protected $_locno;

    /**
     * @var Char
     */
    protected $_swordnum;

    /**
     * @var Date
     */
    protected $_shipdate;

    /**
     * @var Logical
     */
    protected $_websyncflg;

    /**
     * @var Numeric
     */
    protected $_comslmn;

    /**
     * @var Char
     */
    protected $_salesmn2;

    /**
     * @var Numeric
     */
    protected $_comslmn2;

    /**
     * @var Char
     */
    protected $_ftaxcode;

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
    protected $_sourceno;

    /**
     * @var Char
     */
    protected $_srctype;

    /**
     * @var Char
     */
    protected $_cstctid;

    /**
     * @var Logical
     */
    protected $_hazardous;

    /**
     * @var Date
     */
    protected $_reqdate;

    /**
     * @var Char
     */
    protected $_custstkno;

    /**
     * @var Numeric
     */
    protected $_orgvalue;

    /**
     * @var Char
     */
    protected $_currid;

    /**
     * @var Numeric
     */
    protected $_exchrate;

    /**
     * @var Char
     */
    protected $_baseid;

    /**
     * @var Char
     */
    protected $_cstfctdsc;

    /**
     * @var Numeric
     */
    protected $_boxrec;

    /**
     * @var Numeric
     */
    protected $_qtyrec;

    /**
     * @var Char
     */
    protected $_venstkno;

    /**
     * @var Char
     */
    protected $_toinv;

    /**
     * @var Numeric
     */
    protected $_palqtysqf;

    /**
     * @var Numeric
     */
    protected $_palqtypcs;

    /**
     * @var Logical
     */
    protected $_delflag;

    /**
     * @var Numeric
     */
    protected $_botldep;

    /**
     * @var Char
     */
    protected $_upccode;

    /**
     * @var Numeric
     */
    protected $_qtyinv;

    /**
     * @var Char
     */
    protected $_abccode;

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
    protected $_partno;

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
    protected $_newuserid;

    /**
     * @var Numeric
     */
    protected $_caseprice;

    /**
     * @var Char
     */
    protected $_gldept;

    /**
     * @var Char
     */
    protected $_qbtxlineid;

    /**
     * @var TimeStamp
     */
    protected $_deldate;

    /**
     * @var Char
     */
    protected $_deluserid;

    /**
     * @var Numeric
     */
    protected $_qtytoso;

    /**
     * @var Numeric
     */
    protected $_qtytoso0;

    /**
     * @var Numeric
     */
    protected $_qtytopo;

    /**
     * @var Numeric
     */
    protected $_qtytopo0;

    /**
     * @var Numeric
     */
    protected $_qtytoinv0;

    /**
     * Getters
     */

    /**
     * @return Char
     */
    public function getQutno() {
        return $this->_qutno;
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
     * @return Char
     */
    public function getDescrip() {
        return $this->_descrip;
    }

    /**
     * @return Char
     */
    public function getDescrip1() {
        return $this->_descrip1;
    }

    /**
     * @return Date
     */
    public function getQutdate() {
        return $this->_qutdate;
    }

    /**
     * @return Char
     */
    public function getCustno() {
        return $this->_custno;
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
    public function getQuotstat() {
        return $this->_quotstat;
    }

    /**
     * @return Char
     */
    public function getQuotspcl() {
        return $this->_quotspcl;
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
     * @return Char
     */
    public function getBuyercode() {
        return $this->_buyercode;
    }

    /**
     * @return Char
     */
    public function getHiststat() {
        return $this->_histstat;
    }

    /**
     * @return Char
     */
    public function getPrifctdsc() {
        return $this->_prifctdsc;
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
     * @return Char
     */
    public function getClass() {
        return $this->_class;
    }

    /**
     * @return Char
     */
    public function getSubclass1() {
        return $this->_subclass1;
    }

    /**
     * @return Char
     */
    public function getSubclass2() {
        return $this->_subclass2;
    }

    /**
     * @return Char
     */
    public function getSubclass3() {
        return $this->_subclass3;
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
    public function getQtyshp0() {
        return $this->_qtyshp0;
    }

    /**
     * @return Numeric
     */
    public function getQtyshp1() {
        return $this->_qtyshp1;
    }

    /**
     * @return Numeric
     */
    public function getQtyreq() {
        return $this->_qtyreq;
    }

    /**
     * @return Numeric
     */
    public function getQtyordpo() {
        return $this->_qtyordpo;
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
    public function getExtprpo() {
        return $this->_extprpo;
    }

    /**
     * @return Numeric
     */
    public function getMuamt() {
        return $this->_muamt;
    }

    /**
     * @return Char
     */
    public function getCosttype() {
        return $this->_costtype;
    }

    /**
     * @return Numeric
     */
    public function getCostunit() {
        return $this->_costunit;
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
    public function getUnitcost() {
        return $this->_unitcost;
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
    public function getTxrt() {
        return $this->_txrt;
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
     * @return Numeric
     */
    public function getItemtaxpo() {
        return $this->_itemtaxpo;
    }

    /**
     * @return Char
     */
    public function getVendno() {
        return $this->_vendno;
    }

    /**
     * @return Char
     */
    public function getVendor() {
        return $this->_vendor;
    }

    /**
     * @return Numeric
     */
    public function getUnitcost2() {
        return $this->_unitcost2;
    }

    /**
     * @return Char
     */
    public function getVen_code2() {
        return $this->_ven_code2;
    }

    /**
     * @return Char
     */
    public function getVendor2() {
        return $this->_vendor2;
    }

    /**
     * @return Numeric
     */
    public function getUnitcost3() {
        return $this->_unitcost3;
    }

    /**
     * @return Char
     */
    public function getVen_code3() {
        return $this->_ven_code3;
    }

    /**
     * @return Char
     */
    public function getVendor3() {
        return $this->_vendor3;
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
     * @return Numeric
     */
    public function getCommission() {
        return $this->_commission;
    }

    /**
     * @return Char
     */
    public function getSalesmn() {
        return $this->_salesmn;
    }

    /**
     * @return Char
     */
    public function getInvno() {
        return $this->_invno;
    }

    /**
     * @return Date
     */
    public function getInvdate() {
        return $this->_invdate;
    }

    /**
     * @return Date
     */
    public function getPodate() {
        return $this->_podate;
    }

    /**
     * @return Char
     */
    public function getPono() {
        return $this->_pono;
    }

    /**
     * @return Numeric
     */
    public function getItmdisc() {
        return $this->_itmdisc;
    }

    /**
     * @return Logical
     */
    public function getNflg0() {
        return $this->_nflg0;
    }

    /**
     * @return Char
     */
    public function getNflg1() {
        return $this->_nflg1;
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
    public function getTerr() {
        return $this->_terr;
    }

    /**
     * @return Char
     */
    public function getLocno() {
        return $this->_locno;
    }

    /**
     * @return Char
     */
    public function getSwordnum() {
        return $this->_swordnum;
    }

    /**
     * @return Date
     */
    public function getShipdate() {
        return $this->_shipdate;
    }

    /**
     * @return Logical
     */
    public function getWebsyncflg() {
        return $this->_websyncflg;
    }

    /**
     * @return Numeric
     */
    public function getComslmn() {
        return $this->_comslmn;
    }

    /**
     * @return Char
     */
    public function getSalesmn2() {
        return $this->_salesmn2;
    }

    /**
     * @return Numeric
     */
    public function getComslmn2() {
        return $this->_comslmn2;
    }

    /**
     * @return Char
     */
    public function getFtaxcode() {
        return $this->_ftaxcode;
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
    public function getSourceno() {
        return $this->_sourceno;
    }

    /**
     * @return Char
     */
    public function getSrctype() {
        return $this->_srctype;
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
    public function getHazardous() {
        return $this->_hazardous;
    }

    /**
     * @return Date
     */
    public function getReqdate() {
        return $this->_reqdate;
    }

    /**
     * @return Char
     */
    public function getCuststkno() {
        return $this->_custstkno;
    }

    /**
     * @return Numeric
     */
    public function getOrgvalue() {
        return $this->_orgvalue;
    }

    /**
     * @return Char
     */
    public function getCurrid() {
        return $this->_currid;
    }

    /**
     * @return Numeric
     */
    public function getExchrate() {
        return $this->_exchrate;
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
    public function getCstfctdsc() {
        return $this->_cstfctdsc;
    }

    /**
     * @return Numeric
     */
    public function getBoxrec() {
        return $this->_boxrec;
    }

    /**
     * @return Numeric
     */
    public function getQtyrec() {
        return $this->_qtyrec;
    }

    /**
     * @return Char
     */
    public function getVenstkno() {
        return $this->_venstkno;
    }

    /**
     * @return Char
     */
    public function getToinv() {
        return $this->_toinv;
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
     * @return Logical
     */
    public function getDelflag() {
        return $this->_delflag;
    }

    /**
     * @return Numeric
     */
    public function getBotldep() {
        return $this->_botldep;
    }

    /**
     * @return Char
     */
    public function getUpccode() {
        return $this->_upccode;
    }

    /**
     * @return Numeric
     */
    public function getQtyinv() {
        return $this->_qtyinv;
    }

    /**
     * @return Char
     */
    public function getAbccode() {
        return $this->_abccode;
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
    public function getPartno() {
        return $this->_partno;
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
    public function getNewuserid() {
        return $this->_newuserid;
    }

    /**
     * @return Numeric
     */
    public function getCaseprice() {
        return $this->_caseprice;
    }

    /**
     * @return Char
     */
    public function getGldept() {
        return $this->_gldept;
    }

    /**
     * @return Char
     */
    public function getQbtxlineid() {
        return $this->_qbtxlineid;
    }

    /**
     * @return TimeStamp
     */
    public function getDeldate() {
        return $this->_deldate;
    }

    /**
     * @return Char
     */
    public function getDeluserid() {
        return $this->_deluserid;
    }

    /**
     * @return Numeric
     */
    public function getQtytoso() {
        return $this->_qtytoso;
    }

    /**
     * @return Numeric
     */
    public function getQtytoso0() {
        return $this->_qtytoso0;
    }

    /**
     * @return Numeric
     */
    public function getQtytopo() {
        return $this->_qtytopo;
    }

    /**
     * @return Numeric
     */
    public function getQtytopo0() {
        return $this->_qtytopo0;
    }

    /**
     * @return Numeric
     */
    public function getQtytoinv0() {
        return $this->_qtytoinv0;
    }

    /**
     * Setters
     */

    /**
     * @param Char
     */
    public function setQutno($value) {
        $this->_qutno = $value;
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
     * @param Char
     */
    public function setDescrip($value) {
        $this->_descrip = $value;
    }

    /**
     * @param Char
     */
    public function setDescrip1($value) {
        $this->_descrip1 = $value;
    }

    /**
     * @param Date
     */
    public function setQutdate($value) {
        $this->_qutdate = $value;
    }

    /**
     * @param Char
     */
    public function setCustno($value) {
        $this->_custno = $value;
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
    public function setQuotstat($value) {
        $this->_quotstat = $value;
    }

    /**
     * @param Char
     */
    public function setQuotspcl($value) {
        $this->_quotspcl = $value;
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
     * @param Char
     */
    public function setBuyercode($value) {
        $this->_buyercode = $value;
    }

    /**
     * @param Char
     */
    public function setHiststat($value) {
        $this->_histstat = $value;
    }

    /**
     * @param Char
     */
    public function setPrifctdsc($value) {
        $this->_prifctdsc = $value;
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
     * @param Char
     */
    public function setClass($value) {
        $this->_class = $value;
    }

    /**
     * @param Char
     */
    public function setSubclass1($value) {
        $this->_subclass1 = $value;
    }

    /**
     * @param Char
     */
    public function setSubclass2($value) {
        $this->_subclass2 = $value;
    }

    /**
     * @param Char
     */
    public function setSubclass3($value) {
        $this->_subclass3 = $value;
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
    public function setQtyshp0($value) {
        $this->_qtyshp0 = $value;
    }

    /**
     * @param Numeric
     */
    public function setQtyshp1($value) {
        $this->_qtyshp1 = $value;
    }

    /**
     * @param Numeric
     */
    public function setQtyreq($value) {
        $this->_qtyreq = $value;
    }

    /**
     * @param Numeric
     */
    public function setQtyordpo($value) {
        $this->_qtyordpo = $value;
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
    public function setExtprpo($value) {
        $this->_extprpo = $value;
    }

    /**
     * @param Numeric
     */
    public function setMuamt($value) {
        $this->_muamt = $value;
    }

    /**
     * @param Char
     */
    public function setCosttype($value) {
        $this->_costtype = $value;
    }

    /**
     * @param Numeric
     */
    public function setCostunit($value) {
        $this->_costunit = $value;
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
    public function setUnitcost($value) {
        $this->_unitcost = $value;
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
    public function setTxrt($value) {
        $this->_txrt = $value;
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
     * @param Numeric
     */
    public function setItemtaxpo($value) {
        $this->_itemtaxpo = $value;
    }

    /**
     * @param Char
     */
    public function setVendno($value) {
        $this->_vendno = $value;
    }

    /**
     * @param Char
     */
    public function setVendor($value) {
        $this->_vendor = $value;
    }

    /**
     * @param Numeric
     */
    public function setUnitcost2($value) {
        $this->_unitcost2 = $value;
    }

    /**
     * @param Char
     */
    public function setVen_code2($value) {
        $this->_ven_code2 = $value;
    }

    /**
     * @param Char
     */
    public function setVendor2($value) {
        $this->_vendor2 = $value;
    }

    /**
     * @param Numeric
     */
    public function setUnitcost3($value) {
        $this->_unitcost3 = $value;
    }

    /**
     * @param Char
     */
    public function setVen_code3($value) {
        $this->_ven_code3 = $value;
    }

    /**
     * @param Char
     */
    public function setVendor3($value) {
        $this->_vendor3 = $value;
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
     * @param Numeric
     */
    public function setCommission($value) {
        $this->_commission = $value;
    }

    /**
     * @param Char
     */
    public function setSalesmn($value) {
        $this->_salesmn = $value;
    }

    /**
     * @param Char
     */
    public function setInvno($value) {
        $this->_invno = $value;
    }

    /**
     * @param Date
     */
    public function setInvdate($value) {
        $this->_invdate = $value;
    }

    /**
     * @param Date
     */
    public function setPodate($value) {
        $this->_podate = $value;
    }

    /**
     * @param Char
     */
    public function setPono($value) {
        $this->_pono = $value;
    }

    /**
     * @param Numeric
     */
    public function setItmdisc($value) {
        $this->_itmdisc = $value;
    }

    /**
     * @param Logical
     */
    public function setNflg0($value) {
        $this->_nflg0 = $value;
    }

    /**
     * @param Char
     */
    public function setNflg1($value) {
        $this->_nflg1 = $value;
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
    public function setTerr($value) {
        $this->_terr = $value;
    }

    /**
     * @param Char
     */
    public function setLocno($value) {
        $this->_locno = $value;
    }

    /**
     * @param Char
     */
    public function setSwordnum($value) {
        $this->_swordnum = $value;
    }

    /**
     * @param Date
     */
    public function setShipdate($value) {
        $this->_shipdate = $value;
    }

    /**
     * @param Logical
     */
    public function setWebsyncflg($value) {
        $this->_websyncflg = $value;
    }

    /**
     * @param Numeric
     */
    public function setComslmn($value) {
        $this->_comslmn = $value;
    }

    /**
     * @param Char
     */
    public function setSalesmn2($value) {
        $this->_salesmn2 = $value;
    }

    /**
     * @param Numeric
     */
    public function setComslmn2($value) {
        $this->_comslmn2 = $value;
    }

    /**
     * @param Char
     */
    public function setFtaxcode($value) {
        $this->_ftaxcode = $value;
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
    public function setSourceno($value) {
        $this->_sourceno = $value;
    }

    /**
     * @param Char
     */
    public function setSrctype($value) {
        $this->_srctype = $value;
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
    public function setHazardous($value) {
        $this->_hazardous = $value;
    }

    /**
     * @param Date
     */
    public function setReqdate($value) {
        $this->_reqdate = $value;
    }

    /**
     * @param Char
     */
    public function setCuststkno($value) {
        $this->_custstkno = $value;
    }

    /**
     * @param Numeric
     */
    public function setOrgvalue($value) {
        $this->_orgvalue = $value;
    }

    /**
     * @param Char
     */
    public function setCurrid($value) {
        $this->_currid = $value;
    }

    /**
     * @param Numeric
     */
    public function setExchrate($value) {
        $this->_exchrate = $value;
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
    public function setCstfctdsc($value) {
        $this->_cstfctdsc = $value;
    }

    /**
     * @param Numeric
     */
    public function setBoxrec($value) {
        $this->_boxrec = $value;
    }

    /**
     * @param Numeric
     */
    public function setQtyrec($value) {
        $this->_qtyrec = $value;
    }

    /**
     * @param Char
     */
    public function setVenstkno($value) {
        $this->_venstkno = $value;
    }

    /**
     * @param Char
     */
    public function setToinv($value) {
        $this->_toinv = $value;
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
     * @param Logical
     */
    public function setDelflag($value) {
        $this->_delflag = $value;
    }

    /**
     * @param Numeric
     */
    public function setBotldep($value) {
        $this->_botldep = $value;
    }

    /**
     * @param Char
     */
    public function setUpccode($value) {
        $this->_upccode = $value;
    }

    /**
     * @param Numeric
     */
    public function setQtyinv($value) {
        $this->_qtyinv = $value;
    }

    /**
     * @param Char
     */
    public function setAbccode($value) {
        $this->_abccode = $value;
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
    public function setPartno($value) {
        $this->_partno = $value;
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
    public function setNewuserid($value) {
        $this->_newuserid = $value;
    }

    /**
     * @param Numeric
     */
    public function setCaseprice($value) {
        $this->_caseprice = $value;
    }

    /**
     * @param Char
     */
    public function setGldept($value) {
        $this->_gldept = $value;
    }

    /**
     * @param Char
     */
    public function setQbtxlineid($value) {
        $this->_qbtxlineid = $value;
    }

    /**
     * @param TimeStamp
     */
    public function setDeldate($value) {
        $this->_deldate = $value;
    }

    /**
     * @param Char
     */
    public function setDeluserid($value) {
        $this->_deluserid = $value;
    }

    /**
     * @param Numeric
     */
    public function setQtytoso($value) {
        $this->_qtytoso = $value;
    }

    /**
     * @param Numeric
     */
    public function setQtytoso0($value) {
        $this->_qtytoso0 = $value;
    }

    /**
     * @param Numeric
     */
    public function setQtytopo($value) {
        $this->_qtytopo = $value;
    }

    /**
     * @param Numeric
     */
    public function setQtytopo0($value) {
        $this->_qtytopo0 = $value;
    }

    /**
     * @param Numeric
     */
    public function setQtytoinv0($value) {
        $this->_qtytoinv0 = $value;
    }

    /**
     * Constructor
     */
    public function __construct($qutno, $itmcount, $itemno, $itmwhs, $itemtype, $descrip, $descrip1, $qutdate, $custno, $ordnum, $quotstat, $quotspcl, $itmcomm, $delivery, $buyercode, $histstat, $prifctdsc, $weight, $length, $width, $thick, $cubic, $class, $subclass1, $subclass2, $subclass3, $qtyord, $qtyshp, $qtyshp0, $qtyshp1, $qtyreq, $qtyordpo, $unitprice, $priceunit, $extprice, $extpr0, $extprpo, $muamt, $costtype, $costunit, $costfact, $unitcost, $extcost, $glacctno, $glacctast, $glacctexp, $txrt, $taxable, $itemtax, $itemtax0, $itemtaxpo, $vendno, $vendor, $unitcost2, $ven_code2, $vendor2, $unitcost3, $ven_code3, $vendor3, $fuserid, $fstation, $commission, $salesmn, $invno, $invdate, $podate, $pono, $itmdisc, $nflg0, $nflg1, $pricefact, $terr, $locno, $swordnum, $shipdate, $websyncflg, $comslmn, $salesmn2, $comslmn2, $ftaxcode, $taxrate, $fupddate, $fupdtime, $sourceno, $srctype, $cstctid, $hazardous, $reqdate, $custstkno, $orgvalue, $currid, $exchrate, $baseid, $cstfctdsc, $boxrec, $qtyrec, $venstkno, $toinv, $palqtysqf, $palqtypcs, $delflag, $botldep, $upccode, $qtyinv, $abccode, $sotxlineid, $qblistid, $partno, $newdtetime, $newstation, $newuserid, $caseprice, $gldept, $qbtxlineid, $deldate, $deluserid, $qtytoso, $qtytoso0, $qtytopo, $qtytopo0, $qtytoinv0) {
        $this->_qutno = $qutno;
        $this->_itmcount = $itmcount;
        $this->_itemno = $itemno;
        $this->_itmwhs = $itmwhs;
        $this->_itemtype = $itemtype;
        $this->_descrip = $descrip;
        $this->_descrip1 = $descrip1;
        $this->_qutdate = $qutdate;
        $this->_custno = $custno;
        $this->_ordnum = $ordnum;
        $this->_quotstat = $quotstat;
        $this->_quotspcl = $quotspcl;
        $this->_itmcomm = $itmcomm;
        $this->_delivery = $delivery;
        $this->_buyercode = $buyercode;
        $this->_histstat = $histstat;
        $this->_prifctdsc = $prifctdsc;
        $this->_weight = $weight;
        $this->_length = $length;
        $this->_width = $width;
        $this->_thick = $thick;
        $this->_cubic = $cubic;
        $this->_class = $class;
        $this->_subclass1 = $subclass1;
        $this->_subclass2 = $subclass2;
        $this->_subclass3 = $subclass3;
        $this->_qtyord = $qtyord;
        $this->_qtyshp = $qtyshp;
        $this->_qtyshp0 = $qtyshp0;
        $this->_qtyshp1 = $qtyshp1;
        $this->_qtyreq = $qtyreq;
        $this->_qtyordpo = $qtyordpo;
        $this->_unitprice = $unitprice;
        $this->_priceunit = $priceunit;
        $this->_extprice = $extprice;
        $this->_extpr0 = $extpr0;
        $this->_extprpo = $extprpo;
        $this->_muamt = $muamt;
        $this->_costtype = $costtype;
        $this->_costunit = $costunit;
        $this->_costfact = $costfact;
        $this->_unitcost = $unitcost;
        $this->_extcost = $extcost;
        $this->_glacctno = $glacctno;
        $this->_glacctast = $glacctast;
        $this->_glacctexp = $glacctexp;
        $this->_txrt = $txrt;
        $this->_taxable = $taxable;
        $this->_itemtax = $itemtax;
        $this->_itemtax0 = $itemtax0;
        $this->_itemtaxpo = $itemtaxpo;
        $this->_vendno = $vendno;
        $this->_vendor = $vendor;
        $this->_unitcost2 = $unitcost2;
        $this->_ven_code2 = $ven_code2;
        $this->_vendor2 = $vendor2;
        $this->_unitcost3 = $unitcost3;
        $this->_ven_code3 = $ven_code3;
        $this->_vendor3 = $vendor3;
        $this->_fuserid = $fuserid;
        $this->_fstation = $fstation;
        $this->_commission = $commission;
        $this->_salesmn = $salesmn;
        $this->_invno = $invno;
        $this->_invdate = $invdate;
        $this->_podate = $podate;
        $this->_pono = $pono;
        $this->_itmdisc = $itmdisc;
        $this->_nflg0 = $nflg0;
        $this->_nflg1 = $nflg1;
        $this->_pricefact = $pricefact;
        $this->_terr = $terr;
        $this->_locno = $locno;
        $this->_swordnum = $swordnum;
        $this->_shipdate = $shipdate;
        $this->_websyncflg = $websyncflg;
        $this->_comslmn = $comslmn;
        $this->_salesmn2 = $salesmn2;
        $this->_comslmn2 = $comslmn2;
        $this->_ftaxcode = $ftaxcode;
        $this->_taxrate = $taxrate;
        $this->_fupddate = $fupddate;
        $this->_fupdtime = $fupdtime;
        $this->_sourceno = $sourceno;
        $this->_srctype = $srctype;
        $this->_cstctid = $cstctid;
        $this->_hazardous = $hazardous;
        $this->_reqdate = $reqdate;
        $this->_custstkno = $custstkno;
        $this->_orgvalue = $orgvalue;
        $this->_currid = $currid;
        $this->_exchrate = $exchrate;
        $this->_baseid = $baseid;
        $this->_cstfctdsc = $cstfctdsc;
        $this->_boxrec = $boxrec;
        $this->_qtyrec = $qtyrec;
        $this->_venstkno = $venstkno;
        $this->_toinv = $toinv;
        $this->_palqtysqf = $palqtysqf;
        $this->_palqtypcs = $palqtypcs;
        $this->_delflag = $delflag;
        $this->_botldep = $botldep;
        $this->_upccode = $upccode;
        $this->_qtyinv = $qtyinv;
        $this->_abccode = $abccode;
        $this->_sotxlineid = $sotxlineid;
        $this->_qblistid = $qblistid;
        $this->_partno = $partno;
        $this->_newdtetime = $newdtetime;
        $this->_newstation = $newstation;
        $this->_newuserid = $newuserid;
        $this->_caseprice = $caseprice;
        $this->_gldept = $gldept;
        $this->_qbtxlineid = $qbtxlineid;
        $this->_deldate = $deldate;
        $this->_deluserid = $deluserid;
        $this->_qtytoso = $qtytoso;
        $this->_qtytoso0 = $qtytoso0;
        $this->_qtytopo = $qtytopo;
        $this->_qtytopo0 = $qtytopo0;
        $this->_qtytoinv0 = $qtytoinv0;
    }

    public static function toString() {
        return self::$_name;
    }

}
