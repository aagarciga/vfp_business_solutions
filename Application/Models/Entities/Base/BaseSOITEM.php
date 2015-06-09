<?php

/**
 * Project:  VFP Business Series
 * Copyright: 2014. VFP Business Solutions, LLC
 */

namespace Dandelion\MVC\Application\Models\Entities\Base;

/**
 * BaseSOITEM
 */
class BaseSOITEM {

    /**
     * Private fields
     */
    private static $_name = "SOITEM";

    /**
     * Protected fields
     */

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
     * @var Logical
     */
    protected $_hazardous;

    /**
     * @var Date
     */
    protected $_podate;

    /**
     * @var Char
     */
    protected $_invno;

    /**
     * @var Char
     */
    protected $_invtype;

    /**
     * @var Char
     */
    protected $_itmstatus;

    /**
     * @var Char
     */
    protected $_formno;

    /**
     * @var Char
     */
    protected $_custno;

    /**
     * @var Char
     */
    protected $_custstkno;

    /**
     * @var Char
     */
    protected $_ponum;

    /**
     * @var Char
     */
    protected $_vendno;

    /**
     * @var Date
     */
    protected $_invdate;

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
    protected $_descrip1;

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
    protected $_qtyic;

    /**
     * @var Numeric
     */
    protected $_qtyshp0;

    /**
     * @var Numeric
     */
    protected $_bckord;

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
    protected $_costunit;

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
     * @var Char
     */
    protected $_salesmn;

    /**
     * @var Char
     */
    protected $_indust;

    /**
     * @var Char
     */
    protected $_terr;

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
    protected $_fmisc1;

    /**
     * @var Numeric
     */
    protected $_fmisc2;

    /**
     * @var Numeric
     */
    protected $_fmisc3;

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
     * @var Char
     */
    protected $_histstat;

    /**
     * @var Char
     */
    protected $_buyercode;

    /**
     * @var Logical
     */
    protected $_lotitem;

    /**
     * @var Numeric
     */
    protected $_commission;

    /**
     * @var Numeric
     */
    protected $_itmdisc;

    /**
     * @var Char
     */
    protected $_picticbano;

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
    protected $_qtypo;

    /**
     * @var Numeric
     */
    protected $_qtypo0;

    /**
     * @var Date
     */
    protected $_podelivery;

    /**
     * @var Char
     */
    protected $_venstkno;

    /**
     * @var Numeric
     */
    protected $_pricefact;

    /**
     * @var Date
     */
    protected $_reqdate;

    /**
     * @var Logical
     */
    protected $_ordcomp;

    /**
     * @var Char
     */
    protected $_locno;

    /**
     * @var Char
     */
    protected $_monum;

    /**
     * @var Date
     */
    protected $_modate;

    /**
     * @var Memo
     */
    protected $_serialno;

    /**
     * @var Char
     */
    protected $_swordnum;

    /**
     * @var Char
     */
    protected $_sotype;

    /**
     * @var Char
     */
    protected $_swdeptid;

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
     * @var Char
     */
    protected $_taxcode;

    /**
     * @var Numeric
     */
    protected $_taxrate;

    /**
     * @var Numeric
     */
    protected $_extcost0;

    /**
     * @var Char
     */
    protected $_partno;

    /**
     * @var Char
     */
    protected $_shopcode;

    /**
     * @var Char
     */
    protected $_prtypcode;

    /**
     * @var Char
     */
    protected $_wrtypcode;

    /**
     * @var Char
     */
    protected $_estimate;

    /**
     * @var Char
     */
    protected $_swserialno;

    /**
     * @var Numeric
     */
    protected $_qtyrec;

    /**
     * @var Numeric
     */
    protected $_totflatrt;

    /**
     * @var Numeric
     */
    protected $_totlabor;

    /**
     * @var Numeric
     */
    protected $_totparts;

    /**
     * @var Numeric
     */
    protected $_laborhours;

    /**
     * @var Char
     */
    protected $_modeltype;

    /**
     * @var Logical
     */
    protected $_swcomp;

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
     * @var Numeric
     */
    protected $_exchrate;

    /**
     * @var Numeric
     */
    protected $_orgvalue;

    /**
     * @var Char
     */
    protected $_currid;

    /**
     * @var Char
     */
    protected $_baseid;

    /**
     * @var Date
     */
    protected $_mainreldte;

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
    protected $_pono;

    /**
     * @var Date
     */
    protected $_podateord;

    /**
     * @var Char
     */
    protected $_gldept;

    /**
     * @var Numeric
     */
    protected $_costfact;

    /**
     * @var Logical
     */
    protected $_nocharge;

    /**
     * @var Numeric
     */
    protected $_palqtysqf;

    /**
     * @var Numeric
     */
    protected $_palqtypcs;

    /**
     * @var Numeric
     */
    protected $_qtyshprel;

    /**
     * @var Date
     */
    protected $_consdate;

    /**
     * @var Logical
     */
    protected $_ownretail;

    /**
     * @var Numeric
     */
    protected $_qtyshprel0;

    /**
     * @var Numeric
     */
    protected $_qtyshpinv0;

    /**
     * @var Char
     */
    protected $_serialno1;

    /**
     * @var Numeric
     */
    protected $_amtpaid;

    /**
     * @var Numeric
     */
    protected $_taxrate0;

    /**
     * @var Char
     */
    protected $_ftaxcode0;

    /**
     * @var Numeric
     */
    protected $_packqty;

    /**
     * @var Char
     */
    protected $_packid;

    /**
     * @var Char
     */
    protected $_country;

    /**
     * @var Numeric
     */
    protected $_quantity;

    /**
     * @var Numeric
     */
    protected $_packqty0;

    /**
     * @var Numeric
     */
    protected $_packqtypo;

    /**
     * @var Numeric
     */
    protected $_packqtypo0;

    /**
     * @var Numeric
     */
    protected $_packqtyiv;

    /**
     * @var Char
     */
    protected $_abccode;

    /**
     * @var Numeric
     */
    protected $_fetamt;

    /**
     * @var Numeric
     */
    protected $_costjob;

    /**
     * @var Char
     */
    protected $_qbtxlineid;

    /**
     * @var Numeric
     */
    protected $_listprice;

    /**
     * @var Numeric
     */
    protected $_prfact;

    /**
     * @var Numeric
     */
    protected $_retresv;

    /**
     * @var Numeric
     */
    protected $_costload;

    /**
     * @var Numeric
     */
    protected $_botldep;

    /**
     * @var Char
     */
    protected $_upccode;

    /**
     * @var Char
     */
    protected $_inspectno;

    /**
     * @var Char
     */
    protected $_qblistid;

    /**
     * @var Numeric
     */
    protected $_caseprice;

    /**
     * @var Logical
     */
    protected $_caseflag;

    /**
     * @var Numeric
     */
    protected $_qtycase;

    /**
     * @var Char
     */
    protected $_model;

    /**
     * @var Char
     */
    protected $_edi850stat;

    /**
     * @var Logical
     */
    protected $_ediflag;

    /**
     * @var Logical
     */
    protected $_pricechg;

    /**
     * @var Char
     */
    protected $_qutno;

    /**
     * @var Numeric
     */
    protected $_fttamt;

    /**
     * @var Numeric
     */
    protected $_contprice;

    /**
     * Getters
     */

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
     * @return Logical
     */
    public function getHazardous() {
        return $this->_hazardous;
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
    public function getInvno() {
        return $this->_invno;
    }

    /**
     * @return Char
     */
    public function getInvtype() {
        return $this->_invtype;
    }

    /**
     * @return Char
     */
    public function getItmstatus() {
        return $this->_itmstatus;
    }

    /**
     * @return Char
     */
    public function getFormno() {
        return $this->_formno;
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
    public function getCuststkno() {
        return $this->_custstkno;
    }

    /**
     * @return Char
     */
    public function getPonum() {
        return $this->_ponum;
    }

    /**
     * @return Char
     */
    public function getVendno() {
        return $this->_vendno;
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
    public function getDescrip1() {
        return $this->_descrip1;
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
    public function getQtyic() {
        return $this->_qtyic;
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
    public function getBckord() {
        return $this->_bckord;
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
    public function getCostunit() {
        return $this->_costunit;
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
     * @return Char
     */
    public function getSalesmn() {
        return $this->_salesmn;
    }

    /**
     * @return Char
     */
    public function getIndust() {
        return $this->_indust;
    }

    /**
     * @return Char
     */
    public function getTerr() {
        return $this->_terr;
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
    public function getFmisc1() {
        return $this->_fmisc1;
    }

    /**
     * @return Numeric
     */
    public function getFmisc2() {
        return $this->_fmisc2;
    }

    /**
     * @return Numeric
     */
    public function getFmisc3() {
        return $this->_fmisc3;
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
     * @return Char
     */
    public function getHiststat() {
        return $this->_histstat;
    }

    /**
     * @return Char
     */
    public function getBuyercode() {
        return $this->_buyercode;
    }

    /**
     * @return Logical
     */
    public function getLotitem() {
        return $this->_lotitem;
    }

    /**
     * @return Numeric
     */
    public function getCommission() {
        return $this->_commission;
    }

    /**
     * @return Numeric
     */
    public function getItmdisc() {
        return $this->_itmdisc;
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
     * @return Char
     */
    public function getNflg1() {
        return $this->_nflg1;
    }

    /**
     * @return Numeric
     */
    public function getQtypo() {
        return $this->_qtypo;
    }

    /**
     * @return Numeric
     */
    public function getQtypo0() {
        return $this->_qtypo0;
    }

    /**
     * @return Date
     */
    public function getPodelivery() {
        return $this->_podelivery;
    }

    /**
     * @return Char
     */
    public function getVenstkno() {
        return $this->_venstkno;
    }

    /**
     * @return Numeric
     */
    public function getPricefact() {
        return $this->_pricefact;
    }

    /**
     * @return Date
     */
    public function getReqdate() {
        return $this->_reqdate;
    }

    /**
     * @return Logical
     */
    public function getOrdcomp() {
        return $this->_ordcomp;
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
    public function getMonum() {
        return $this->_monum;
    }

    /**
     * @return Date
     */
    public function getModate() {
        return $this->_modate;
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
    public function getSwordnum() {
        return $this->_swordnum;
    }

    /**
     * @return Char
     */
    public function getSotype() {
        return $this->_sotype;
    }

    /**
     * @return Char
     */
    public function getSwdeptid() {
        return $this->_swdeptid;
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
     * @return Numeric
     */
    public function getExtcost0() {
        return $this->_extcost0;
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
    public function getShopcode() {
        return $this->_shopcode;
    }

    /**
     * @return Char
     */
    public function getPrtypcode() {
        return $this->_prtypcode;
    }

    /**
     * @return Char
     */
    public function getWrtypcode() {
        return $this->_wrtypcode;
    }

    /**
     * @return Char
     */
    public function getEstimate() {
        return $this->_estimate;
    }

    /**
     * @return Char
     */
    public function getSwserialno() {
        return $this->_swserialno;
    }

    /**
     * @return Numeric
     */
    public function getQtyrec() {
        return $this->_qtyrec;
    }

    /**
     * @return Numeric
     */
    public function getTotflatrt() {
        return $this->_totflatrt;
    }

    /**
     * @return Numeric
     */
    public function getTotlabor() {
        return $this->_totlabor;
    }

    /**
     * @return Numeric
     */
    public function getTotparts() {
        return $this->_totparts;
    }

    /**
     * @return Numeric
     */
    public function getLaborhours() {
        return $this->_laborhours;
    }

    /**
     * @return Char
     */
    public function getModeltype() {
        return $this->_modeltype;
    }

    /**
     * @return Logical
     */
    public function getSwcomp() {
        return $this->_swcomp;
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
     * @return Numeric
     */
    public function getExchrate() {
        return $this->_exchrate;
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
     * @return Char
     */
    public function getBaseid() {
        return $this->_baseid;
    }

    /**
     * @return Date
     */
    public function getMainreldte() {
        return $this->_mainreldte;
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
    public function getPono() {
        return $this->_pono;
    }

    /**
     * @return Date
     */
    public function getPodateord() {
        return $this->_podateord;
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
     * @return Logical
     */
    public function getNocharge() {
        return $this->_nocharge;
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
     * @return Numeric
     */
    public function getQtyshprel() {
        return $this->_qtyshprel;
    }

    /**
     * @return Date
     */
    public function getConsdate() {
        return $this->_consdate;
    }

    /**
     * @return Logical
     */
    public function getOwnretail() {
        return $this->_ownretail;
    }

    /**
     * @return Numeric
     */
    public function getQtyshprel0() {
        return $this->_qtyshprel0;
    }

    /**
     * @return Numeric
     */
    public function getQtyshpinv0() {
        return $this->_qtyshpinv0;
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
    public function getAmtpaid() {
        return $this->_amtpaid;
    }

    /**
     * @return Numeric
     */
    public function getTaxrate0() {
        return $this->_taxrate0;
    }

    /**
     * @return Char
     */
    public function getFtaxcode0() {
        return $this->_ftaxcode0;
    }

    /**
     * @return Numeric
     */
    public function getPackqty() {
        return $this->_packqty;
    }

    /**
     * @return Char
     */
    public function getPackid() {
        return $this->_packid;
    }

    /**
     * @return Char
     */
    public function getCountry() {
        return $this->_country;
    }

    /**
     * @return Numeric
     */
    public function getQuantity() {
        return $this->_quantity;
    }

    /**
     * @return Numeric
     */
    public function getPackqty0() {
        return $this->_packqty0;
    }

    /**
     * @return Numeric
     */
    public function getPackqtypo() {
        return $this->_packqtypo;
    }

    /**
     * @return Numeric
     */
    public function getPackqtypo0() {
        return $this->_packqtypo0;
    }

    /**
     * @return Numeric
     */
    public function getPackqtyiv() {
        return $this->_packqtyiv;
    }

    /**
     * @return Char
     */
    public function getAbccode() {
        return $this->_abccode;
    }

    /**
     * @return Numeric
     */
    public function getFetamt() {
        return $this->_fetamt;
    }

    /**
     * @return Numeric
     */
    public function getCostjob() {
        return $this->_costjob;
    }

    /**
     * @return Char
     */
    public function getQbtxlineid() {
        return $this->_qbtxlineid;
    }

    /**
     * @return Numeric
     */
    public function getListprice() {
        return $this->_listprice;
    }

    /**
     * @return Numeric
     */
    public function getPrfact() {
        return $this->_prfact;
    }

    /**
     * @return Numeric
     */
    public function getRetresv() {
        return $this->_retresv;
    }

    /**
     * @return Numeric
     */
    public function getCostload() {
        return $this->_costload;
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
     * @return Char
     */
    public function getInspectno() {
        return $this->_inspectno;
    }

    /**
     * @return Char
     */
    public function getQblistid() {
        return $this->_qblistid;
    }

    /**
     * @return Numeric
     */
    public function getCaseprice() {
        return $this->_caseprice;
    }

    /**
     * @return Logical
     */
    public function getCaseflag() {
        return $this->_caseflag;
    }

    /**
     * @return Numeric
     */
    public function getQtycase() {
        return $this->_qtycase;
    }

    /**
     * @return Char
     */
    public function getModel() {
        return $this->_model;
    }

    /**
     * @return Char
     */
    public function getEdi850stat() {
        return $this->_edi850stat;
    }

    /**
     * @return Logical
     */
    public function getEdiflag() {
        return $this->_ediflag;
    }

    /**
     * @return Logical
     */
    public function getPricechg() {
        return $this->_pricechg;
    }

    /**
     * @return Char
     */
    public function getQutno() {
        return $this->_qutno;
    }

    /**
     * @return Numeric
     */
    public function getFttamt() {
        return $this->_fttamt;
    }

    /**
     * @return Numeric
     */
    public function getContprice() {
        return $this->_contprice;
    }

    /**
     * Setters
     */

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
     * @param Logical
     */
    public function setHazardous($value) {
        $this->_hazardous = $value;
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
    public function setInvno($value) {
        $this->_invno = $value;
    }

    /**
     * @param Char
     */
    public function setInvtype($value) {
        $this->_invtype = $value;
    }

    /**
     * @param Char
     */
    public function setItmstatus($value) {
        $this->_itmstatus = $value;
    }

    /**
     * @param Char
     */
    public function setFormno($value) {
        $this->_formno = $value;
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
    public function setCuststkno($value) {
        $this->_custstkno = $value;
    }

    /**
     * @param Char
     */
    public function setPonum($value) {
        $this->_ponum = $value;
    }

    /**
     * @param Char
     */
    public function setVendno($value) {
        $this->_vendno = $value;
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
    public function setDescrip1($value) {
        $this->_descrip1 = $value;
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
    public function setQtyic($value) {
        $this->_qtyic = $value;
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
    public function setBckord($value) {
        $this->_bckord = $value;
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
    public function setCostunit($value) {
        $this->_costunit = $value;
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
     * @param Char
     */
    public function setSalesmn($value) {
        $this->_salesmn = $value;
    }

    /**
     * @param Char
     */
    public function setIndust($value) {
        $this->_indust = $value;
    }

    /**
     * @param Char
     */
    public function setTerr($value) {
        $this->_terr = $value;
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
    public function setFmisc1($value) {
        $this->_fmisc1 = $value;
    }

    /**
     * @param Numeric
     */
    public function setFmisc2($value) {
        $this->_fmisc2 = $value;
    }

    /**
     * @param Numeric
     */
    public function setFmisc3($value) {
        $this->_fmisc3 = $value;
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
     * @param Char
     */
    public function setHiststat($value) {
        $this->_histstat = $value;
    }

    /**
     * @param Char
     */
    public function setBuyercode($value) {
        $this->_buyercode = $value;
    }

    /**
     * @param Logical
     */
    public function setLotitem($value) {
        $this->_lotitem = $value;
    }

    /**
     * @param Numeric
     */
    public function setCommission($value) {
        $this->_commission = $value;
    }

    /**
     * @param Numeric
     */
    public function setItmdisc($value) {
        $this->_itmdisc = $value;
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
     * @param Char
     */
    public function setNflg1($value) {
        $this->_nflg1 = $value;
    }

    /**
     * @param Numeric
     */
    public function setQtypo($value) {
        $this->_qtypo = $value;
    }

    /**
     * @param Numeric
     */
    public function setQtypo0($value) {
        $this->_qtypo0 = $value;
    }

    /**
     * @param Date
     */
    public function setPodelivery($value) {
        $this->_podelivery = $value;
    }

    /**
     * @param Char
     */
    public function setVenstkno($value) {
        $this->_venstkno = $value;
    }

    /**
     * @param Numeric
     */
    public function setPricefact($value) {
        $this->_pricefact = $value;
    }

    /**
     * @param Date
     */
    public function setReqdate($value) {
        $this->_reqdate = $value;
    }

    /**
     * @param Logical
     */
    public function setOrdcomp($value) {
        $this->_ordcomp = $value;
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
    public function setMonum($value) {
        $this->_monum = $value;
    }

    /**
     * @param Date
     */
    public function setModate($value) {
        $this->_modate = $value;
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
    public function setSwordnum($value) {
        $this->_swordnum = $value;
    }

    /**
     * @param Char
     */
    public function setSotype($value) {
        $this->_sotype = $value;
    }

    /**
     * @param Char
     */
    public function setSwdeptid($value) {
        $this->_swdeptid = $value;
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
     * @param Numeric
     */
    public function setExtcost0($value) {
        $this->_extcost0 = $value;
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
    public function setShopcode($value) {
        $this->_shopcode = $value;
    }

    /**
     * @param Char
     */
    public function setPrtypcode($value) {
        $this->_prtypcode = $value;
    }

    /**
     * @param Char
     */
    public function setWrtypcode($value) {
        $this->_wrtypcode = $value;
    }

    /**
     * @param Char
     */
    public function setEstimate($value) {
        $this->_estimate = $value;
    }

    /**
     * @param Char
     */
    public function setSwserialno($value) {
        $this->_swserialno = $value;
    }

    /**
     * @param Numeric
     */
    public function setQtyrec($value) {
        $this->_qtyrec = $value;
    }

    /**
     * @param Numeric
     */
    public function setTotflatrt($value) {
        $this->_totflatrt = $value;
    }

    /**
     * @param Numeric
     */
    public function setTotlabor($value) {
        $this->_totlabor = $value;
    }

    /**
     * @param Numeric
     */
    public function setTotparts($value) {
        $this->_totparts = $value;
    }

    /**
     * @param Numeric
     */
    public function setLaborhours($value) {
        $this->_laborhours = $value;
    }

    /**
     * @param Char
     */
    public function setModeltype($value) {
        $this->_modeltype = $value;
    }

    /**
     * @param Logical
     */
    public function setSwcomp($value) {
        $this->_swcomp = $value;
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
     * @param Numeric
     */
    public function setExchrate($value) {
        $this->_exchrate = $value;
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
     * @param Char
     */
    public function setBaseid($value) {
        $this->_baseid = $value;
    }

    /**
     * @param Date
     */
    public function setMainreldte($value) {
        $this->_mainreldte = $value;
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
    public function setPono($value) {
        $this->_pono = $value;
    }

    /**
     * @param Date
     */
    public function setPodateord($value) {
        $this->_podateord = $value;
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
     * @param Logical
     */
    public function setNocharge($value) {
        $this->_nocharge = $value;
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
     * @param Numeric
     */
    public function setQtyshprel($value) {
        $this->_qtyshprel = $value;
    }

    /**
     * @param Date
     */
    public function setConsdate($value) {
        $this->_consdate = $value;
    }

    /**
     * @param Logical
     */
    public function setOwnretail($value) {
        $this->_ownretail = $value;
    }

    /**
     * @param Numeric
     */
    public function setQtyshprel0($value) {
        $this->_qtyshprel0 = $value;
    }

    /**
     * @param Numeric
     */
    public function setQtyshpinv0($value) {
        $this->_qtyshpinv0 = $value;
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
    public function setAmtpaid($value) {
        $this->_amtpaid = $value;
    }

    /**
     * @param Numeric
     */
    public function setTaxrate0($value) {
        $this->_taxrate0 = $value;
    }

    /**
     * @param Char
     */
    public function setFtaxcode0($value) {
        $this->_ftaxcode0 = $value;
    }

    /**
     * @param Numeric
     */
    public function setPackqty($value) {
        $this->_packqty = $value;
    }

    /**
     * @param Char
     */
    public function setPackid($value) {
        $this->_packid = $value;
    }

    /**
     * @param Char
     */
    public function setCountry($value) {
        $this->_country = $value;
    }

    /**
     * @param Numeric
     */
    public function setQuantity($value) {
        $this->_quantity = $value;
    }

    /**
     * @param Numeric
     */
    public function setPackqty0($value) {
        $this->_packqty0 = $value;
    }

    /**
     * @param Numeric
     */
    public function setPackqtypo($value) {
        $this->_packqtypo = $value;
    }

    /**
     * @param Numeric
     */
    public function setPackqtypo0($value) {
        $this->_packqtypo0 = $value;
    }

    /**
     * @param Numeric
     */
    public function setPackqtyiv($value) {
        $this->_packqtyiv = $value;
    }

    /**
     * @param Char
     */
    public function setAbccode($value) {
        $this->_abccode = $value;
    }

    /**
     * @param Numeric
     */
    public function setFetamt($value) {
        $this->_fetamt = $value;
    }

    /**
     * @param Numeric
     */
    public function setCostjob($value) {
        $this->_costjob = $value;
    }

    /**
     * @param Char
     */
    public function setQbtxlineid($value) {
        $this->_qbtxlineid = $value;
    }

    /**
     * @param Numeric
     */
    public function setListprice($value) {
        $this->_listprice = $value;
    }

    /**
     * @param Numeric
     */
    public function setPrfact($value) {
        $this->_prfact = $value;
    }

    /**
     * @param Numeric
     */
    public function setRetresv($value) {
        $this->_retresv = $value;
    }

    /**
     * @param Numeric
     */
    public function setCostload($value) {
        $this->_costload = $value;
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
     * @param Char
     */
    public function setInspectno($value) {
        $this->_inspectno = $value;
    }

    /**
     * @param Char
     */
    public function setQblistid($value) {
        $this->_qblistid = $value;
    }

    /**
     * @param Numeric
     */
    public function setCaseprice($value) {
        $this->_caseprice = $value;
    }

    /**
     * @param Logical
     */
    public function setCaseflag($value) {
        $this->_caseflag = $value;
    }

    /**
     * @param Numeric
     */
    public function setQtycase($value) {
        $this->_qtycase = $value;
    }

    /**
     * @param Char
     */
    public function setModel($value) {
        $this->_model = $value;
    }

    /**
     * @param Char
     */
    public function setEdi850stat($value) {
        $this->_edi850stat = $value;
    }

    /**
     * @param Logical
     */
    public function setEdiflag($value) {
        $this->_ediflag = $value;
    }

    /**
     * @param Logical
     */
    public function setPricechg($value) {
        $this->_pricechg = $value;
    }

    /**
     * @param Char
     */
    public function setQutno($value) {
        $this->_qutno = $value;
    }

    /**
     * @param Numeric
     */
    public function setFttamt($value) {
        $this->_fttamt = $value;
    }

    /**
     * @param Numeric
     */
    public function setContprice($value) {
        $this->_contprice = $value;
    }

    /**
     * Constructor
     */
    public function __construct($ordnum, $itmcount, $itemno, $itmwhs, $itemtype, $hazardous, $podate, $invno, $invtype, $itmstatus, $formno, $custno, $custstkno, $ponum, $vendno, $invdate, $shipdate, $lotno, $descrip, $descrip1, $unit, $weight, $length, $width, $thick, $cubic, $class, $subclass1, $subclass2, $subclass3, $qtyord, $qtyshp, $qtyic, $qtyshp0, $bckord, $unitprice, $priceunit, $extprice, $extpr0, $costunit, $extcost, $glacctno, $glacctast, $glacctexp, $batch_no, $period, $prifctdsc, $salesmn, $indust, $terr, $txrt, $taxable, $itemtax, $itemtax0, $fmisc1, $fmisc2, $fmisc3, $key, $userflg, $fuserid, $fstation, $itmcomm, $delivery, $histstat, $buyercode, $lotitem, $commission, $itmdisc, $picticbano, $nflg0, $nflg1, $qtypo, $qtypo0, $podelivery, $venstkno, $pricefact, $reqdate, $ordcomp, $locno, $monum, $modate, $serialno, $swordnum, $sotype, $swdeptid, $comslmn, $salesmn2, $comslmn2, $ftaxcode, $taxcode, $taxrate, $extcost0, $partno, $shopcode, $prtypcode, $wrtypcode, $estimate, $swserialno, $qtyrec, $totflatrt, $totlabor, $totparts, $laborhours, $modeltype, $swcomp, $fupddate, $fupdtime, $sourceno, $srctype, $exchrate, $orgvalue, $currid, $baseid, $mainreldte, $cstctid, $okupdic, $newuserid, $newdtetime, $newstation, $pono, $podateord, $gldept, $costfact, $nocharge, $palqtysqf, $palqtypcs, $qtyshprel, $consdate, $ownretail, $qtyshprel0, $qtyshpinv0, $serialno1, $amtpaid, $taxrate0, $ftaxcode0, $packqty, $packid, $country, $quantity, $packqty0, $packqtypo, $packqtypo0, $packqtyiv, $abccode, $fetamt, $costjob, $qbtxlineid, $listprice, $prfact, $retresv, $costload, $botldep, $upccode, $inspectno, $qblistid, $caseprice, $caseflag, $qtycase, $model, $edi850stat, $ediflag, $pricechg, $qutno, $fttamt, $contprice) {
        $this->_ordnum = $ordnum;
        $this->_itmcount = $itmcount;
        $this->_itemno = $itemno;
        $this->_itmwhs = $itmwhs;
        $this->_itemtype = $itemtype;
        $this->_hazardous = $hazardous;
        $this->_podate = $podate;
        $this->_invno = $invno;
        $this->_invtype = $invtype;
        $this->_itmstatus = $itmstatus;
        $this->_formno = $formno;
        $this->_custno = $custno;
        $this->_custstkno = $custstkno;
        $this->_ponum = $ponum;
        $this->_vendno = $vendno;
        $this->_invdate = $invdate;
        $this->_shipdate = $shipdate;
        $this->_lotno = $lotno;
        $this->_descrip = $descrip;
        $this->_descrip1 = $descrip1;
        $this->_unit = $unit;
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
        $this->_qtyic = $qtyic;
        $this->_qtyshp0 = $qtyshp0;
        $this->_bckord = $bckord;
        $this->_unitprice = $unitprice;
        $this->_priceunit = $priceunit;
        $this->_extprice = $extprice;
        $this->_extpr0 = $extpr0;
        $this->_costunit = $costunit;
        $this->_extcost = $extcost;
        $this->_glacctno = $glacctno;
        $this->_glacctast = $glacctast;
        $this->_glacctexp = $glacctexp;
        $this->_batch_no = $batch_no;
        $this->_period = $period;
        $this->_prifctdsc = $prifctdsc;
        $this->_salesmn = $salesmn;
        $this->_indust = $indust;
        $this->_terr = $terr;
        $this->_txrt = $txrt;
        $this->_taxable = $taxable;
        $this->_itemtax = $itemtax;
        $this->_itemtax0 = $itemtax0;
        $this->_fmisc1 = $fmisc1;
        $this->_fmisc2 = $fmisc2;
        $this->_fmisc3 = $fmisc3;
        $this->_key = $key;
        $this->_userflg = $userflg;
        $this->_fuserid = $fuserid;
        $this->_fstation = $fstation;
        $this->_itmcomm = $itmcomm;
        $this->_delivery = $delivery;
        $this->_histstat = $histstat;
        $this->_buyercode = $buyercode;
        $this->_lotitem = $lotitem;
        $this->_commission = $commission;
        $this->_itmdisc = $itmdisc;
        $this->_picticbano = $picticbano;
        $this->_nflg0 = $nflg0;
        $this->_nflg1 = $nflg1;
        $this->_qtypo = $qtypo;
        $this->_qtypo0 = $qtypo0;
        $this->_podelivery = $podelivery;
        $this->_venstkno = $venstkno;
        $this->_pricefact = $pricefact;
        $this->_reqdate = $reqdate;
        $this->_ordcomp = $ordcomp;
        $this->_locno = $locno;
        $this->_monum = $monum;
        $this->_modate = $modate;
        $this->_serialno = $serialno;
        $this->_swordnum = $swordnum;
        $this->_sotype = $sotype;
        $this->_swdeptid = $swdeptid;
        $this->_comslmn = $comslmn;
        $this->_salesmn2 = $salesmn2;
        $this->_comslmn2 = $comslmn2;
        $this->_ftaxcode = $ftaxcode;
        $this->_taxcode = $taxcode;
        $this->_taxrate = $taxrate;
        $this->_extcost0 = $extcost0;
        $this->_partno = $partno;
        $this->_shopcode = $shopcode;
        $this->_prtypcode = $prtypcode;
        $this->_wrtypcode = $wrtypcode;
        $this->_estimate = $estimate;
        $this->_swserialno = $swserialno;
        $this->_qtyrec = $qtyrec;
        $this->_totflatrt = $totflatrt;
        $this->_totlabor = $totlabor;
        $this->_totparts = $totparts;
        $this->_laborhours = $laborhours;
        $this->_modeltype = $modeltype;
        $this->_swcomp = $swcomp;
        $this->_fupddate = $fupddate;
        $this->_fupdtime = $fupdtime;
        $this->_sourceno = $sourceno;
        $this->_srctype = $srctype;
        $this->_exchrate = $exchrate;
        $this->_orgvalue = $orgvalue;
        $this->_currid = $currid;
        $this->_baseid = $baseid;
        $this->_mainreldte = $mainreldte;
        $this->_cstctid = $cstctid;
        $this->_okupdic = $okupdic;
        $this->_newuserid = $newuserid;
        $this->_newdtetime = $newdtetime;
        $this->_newstation = $newstation;
        $this->_pono = $pono;
        $this->_podateord = $podateord;
        $this->_gldept = $gldept;
        $this->_costfact = $costfact;
        $this->_nocharge = $nocharge;
        $this->_palqtysqf = $palqtysqf;
        $this->_palqtypcs = $palqtypcs;
        $this->_qtyshprel = $qtyshprel;
        $this->_consdate = $consdate;
        $this->_ownretail = $ownretail;
        $this->_qtyshprel0 = $qtyshprel0;
        $this->_qtyshpinv0 = $qtyshpinv0;
        $this->_serialno1 = $serialno1;
        $this->_amtpaid = $amtpaid;
        $this->_taxrate0 = $taxrate0;
        $this->_ftaxcode0 = $ftaxcode0;
        $this->_packqty = $packqty;
        $this->_packid = $packid;
        $this->_country = $country;
        $this->_quantity = $quantity;
        $this->_packqty0 = $packqty0;
        $this->_packqtypo = $packqtypo;
        $this->_packqtypo0 = $packqtypo0;
        $this->_packqtyiv = $packqtyiv;
        $this->_abccode = $abccode;
        $this->_fetamt = $fetamt;
        $this->_costjob = $costjob;
        $this->_qbtxlineid = $qbtxlineid;
        $this->_listprice = $listprice;
        $this->_prfact = $prfact;
        $this->_retresv = $retresv;
        $this->_costload = $costload;
        $this->_botldep = $botldep;
        $this->_upccode = $upccode;
        $this->_inspectno = $inspectno;
        $this->_qblistid = $qblistid;
        $this->_caseprice = $caseprice;
        $this->_caseflag = $caseflag;
        $this->_qtycase = $qtycase;
        $this->_model = $model;
        $this->_edi850stat = $edi850stat;
        $this->_ediflag = $ediflag;
        $this->_pricechg = $pricechg;
        $this->_qutno = $qutno;
        $this->_fttamt = $fttamt;
        $this->_contprice = $contprice;
    }

    public static function toString() {
        return self::$_name;
    }

}
