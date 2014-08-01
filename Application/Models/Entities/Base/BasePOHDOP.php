<?php

/**
 * Project:  VFP Business Series
 * Copyright: 2014. VFP Business Solutions, LLC
 */

namespace Dandelion\MVC\Application\Models\Entities\Base;

/**
 * BasePOHDOP
 */
class BasePOHDOP {

    /**
     * Private fields
     */
    private static $_name = "POHDOP";

    /**
     * Protected fields
     */

    /**
     * @var Char
     */
    protected $_pono;

    /**
     * @var Date
     */
    protected $_podate;

    /**
     * @var Char
     */
    protected $_sono;

    /**
     * @var Char
     */
    protected $_rfqno;

    /**
     * @var Char
     */
    protected $_popstat;

    /**
     * @var Char
     */
    protected $_vendno;

    /**
     * @var Char
     */
    protected $_custno;

    /**
     * @var Date
     */
    protected $_ldate;

    /**
     * @var Char
     */
    protected $_vendor;

    /**
     * @var Char
     */
    protected $_venadd1;

    /**
     * @var Char
     */
    protected $_venadd2;

    /**
     * @var Char
     */
    protected $_vencity;

    /**
     * @var Char
     */
    protected $_venstate;

    /**
     * @var Char
     */
    protected $_venzip;

    /**
     * @var Char
     */
    protected $_vencountry;

    /**
     * @var Char
     */
    protected $_shipto;

    /**
     * @var Char
     */
    protected $_shipadd1;

    /**
     * @var Char
     */
    protected $_shipadd2;

    /**
     * @var Char
     */
    protected $_scity;

    /**
     * @var Char
     */
    protected $_sstate;

    /**
     * @var Char
     */
    protected $_szip;

    /**
     * @var Char
     */
    protected $_scountry;

    /**
     * @var Char
     */
    protected $_shipvia;

    /**
     * @var Char
     */
    protected $_shipvdes;

    /**
     * @var Char
     */
    protected $_fobpoint;

    /**
     * @var Char
     */
    protected $_vendor_no;

    /**
     * @var Char
     */
    protected $_terms;

    /**
     * @var Char
     */
    protected $_terms1;

    /**
     * @var Char
     */
    protected $_buyer;

    /**
     * @var Char
     */
    protected $_freight;

    /**
     * @var Char
     */
    protected $_reqdate;

    /**
     * @var Char
     */
    protected $_confirm;

    /**
     * @var Char
     */
    protected $_remark;

    /**
     * @var Char
     */
    protected $_company;

    /**
     * @var Logical
     */
    protected $_altered;

    /**
     * @var Date
     */
    protected $_delivery;

    /**
     * @var Numeric
     */
    protected $_subtotal;

    /**
     * @var Numeric
     */
    protected $_discper;

    /**
     * @var Numeric
     */
    protected $_discount;

    /**
     * @var Numeric
     */
    protected $_msubtotal;

    /**
     * @var Numeric
     */
    protected $_tax;

    /**
     * @var Numeric
     */
    protected $_taxamt;

    /**
     * @var Numeric
     */
    protected $_shipping;

    /**
     * @var Numeric
     */
    protected $_pototal;

    /**
     * @var Numeric
     */
    protected $_subtotal0;

    /**
     * @var Numeric
     */
    protected $_shipping0;

    /**
     * @var Numeric
     */
    protected $_taxamt0;

    /**
     * @var Numeric
     */
    protected $_pototal0;

    /**
     * @var Char
     */
    protected $_rimno;

    /**
     * @var Char
     */
    protected $_rimqty;

    /**
     * @var Char
     */
    protected $_rimpack;

    /**
     * @var Char
     */
    protected $_rimmeas;

    /**
     * @var Char
     */
    protected $_rimwght;

    /**
     * @var Char
     */
    protected $_rimcarrier;

    /**
     * @var Char
     */
    protected $_rimawb_bl;

    /**
     * @var Char
     */
    protected $_rimconsul;

    /**
     * @var Char
     */
    protected $_rimchkno;

    /**
     * @var Numeric
     */
    protected $_rimamt;

    /**
     * @var Char
     */
    protected $_rimfrght;

    /**
     * @var Char
     */
    protected $_rimfpl;

    /**
     * @var Memo
     */
    protected $_rimcomment;

    /**
     * @var Char
     */
    protected $_poblurb;

    /**
     * @var Char
     */
    protected $_porrnum;

    /**
     * @var Char
     */
    protected $_porrnum_id;

    /**
     * @var Char
     */
    protected $_awbno;

    /**
     * @var Char
     */
    protected $_frghts;

    /**
     * @var Char
     */
    protected $_recdcar;

    /**
     * @var Char
     */
    protected $_lotno;

    /**
     * @var Char
     */
    protected $_frec_whs;

    /**
     * @var Date
     */
    protected $_larv_date;

    /**
     * @var Logical
     */
    protected $_postmark;

    /**
     * @var Memo
     */
    protected $_pocomment;

    /**
     * @var Char
     */
    protected $_ship5;

    /**
     * @var Char
     */
    protected $_currency;

    /**
     * @var Char
     */
    protected $_brandname;

    /**
     * @var Char
     */
    protected $_othertang;

    /**
     * @var Logical,
     */
    protected $_nflg0;

    /**
     * @var Char
     */
    protected $_ordnum;

    /**
     * @var Char
     */
    protected $_shipadd3;

    /**
     * @var Char
     */
    protected $_shipadd4;

    /**
     * @var Logical
     */
    protected $_apflag;

    /**
     * @var Numeric
     */
    protected $_apamount;

    /**
     * @var Char
     */
    protected $_invno;

    /**
     * @var Date
     */
    protected $_invdate;

    /**
     * @var Char
     */
    protected $_voucher;

    /**
     * @var Char
     */
    protected $_glacctexp;

    /**
     * @var Char
     */
    protected $_vendref;

    /**
     * @var Char
     */
    protected $_frtstat;

    /**
     * @var Numeric
     */
    protected $_porevno;

    /**
     * @var Logical
     */
    protected $_holstatus;

    /**
     * @var Char
     */
    protected $_postatus;

    /**
     * @var Logical
     */
    protected $_holdstatus;

    /**
     * @var Numeric
     */
    protected $_discount0;

    /**
     * @var Date
     */
    protected $_compdate;

    /**
     * @var Numeric
     */
    protected $_proamount;

    /**
     * @var Numeric
     */
    protected $_potype;

    /**
     * @var Char
     */
    protected $_fupdtime;

    /**
     * @var Date
     */
    protected $_fupddate;

    /**
     * @var Char
     */
    protected $_fstation;

    /**
     * @var Char
     */
    protected $_fuserid;

    /**
     * @var Char
     */
    protected $_arshipid;

    /**
     * @var Memo
     */
    protected $_inhsecomm;

    /**
     * @var Char
     */
    protected $_poprefix;

    /**
     * @var Char
     */
    protected $_whsno;

    /**
     * @var Logical
     */
    protected $_w9;

    /**
     * @var Logical
     */
    protected $_defvchr;

    /**
     * @var Char
     */
    protected $_cstctid;

    /**
     * @var Char
     */
    protected $_newuserid;

    /**
     * @var Char
     */
    protected $_newstation;

    /**
     * @var Char
     */
    protected $_newdtetime;

    /**
     * @var Date
     */
    protected $_etadate;

    /**
     * @var Date
     */
    protected $_epcdate;

    /**
     * @var Numeric
     */
    protected $_totalcost;

    /**
     * @var Char
     */
    protected $_shipperno;

    /**
     * @var Char
     */
    protected $_shipno;

    /**
     * @var Logical
     */
    protected $_dropship;

    /**
     * @var Char
     */
    protected $_sotypecode;

    /**
     * @var Char
     */
    protected $_sotype;

    /**
     * @var Char
     */
    protected $_edicustno;

    /**
     * @var Char
     */
    protected $_edicompany;

    /**
     * @var Char
     */
    protected $_ediactcomp;

    /**
     * @var Logical
     */
    protected $_quickship;

    /**
     * @var Char
     */
    protected $_washcode;

    /**
     * @var Char
     */
    protected $_custfld8;

    /**
     * @var Char
     */
    protected $_ftaxcode;

    /**
     * @var Numeric
     */
    protected $_taxrate;

    /**
     * @var Numeric
     */
    protected $_totbotdep;

    /**
     * @var Numeric
     */
    protected $_gstfrmtot;

    /**
     * @var Numeric
     */
    protected $_netnogstbd;

    /**
     * @var Numeric
     */
    protected $_taxext;

    /**
     * @var Logical
     */
    protected $_botldepgst;

    /**
     * @var Char
     */
    protected $_qblistid;

    /**
     * @var Numeric
     */
    protected $_totqtyord;

    /**
     * @var Numeric
     */
    protected $_totcstbase;

    /**
     * @var Numeric
     */
    protected $_totcstdisc;

    /**
     * @var Numeric
     */
    protected $_maxpototal;

    /**
     * Getters
     */

    /**
     * @return Char
     */
    public function getPono() {
        return $this->_pono;
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
    public function getSono() {
        return $this->_sono;
    }

    /**
     * @return Char
     */
    public function getRfqno() {
        return $this->_rfqno;
    }

    /**
     * @return Char
     */
    public function getPopstat() {
        return $this->_popstat;
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
    public function getCustno() {
        return $this->_custno;
    }

    /**
     * @return Date
     */
    public function getLdate() {
        return $this->_ldate;
    }

    /**
     * @return Char
     */
    public function getVendor() {
        return $this->_vendor;
    }

    /**
     * @return Char
     */
    public function getVenadd1() {
        return $this->_venadd1;
    }

    /**
     * @return Char
     */
    public function getVenadd2() {
        return $this->_venadd2;
    }

    /**
     * @return Char
     */
    public function getVencity() {
        return $this->_vencity;
    }

    /**
     * @return Char
     */
    public function getVenstate() {
        return $this->_venstate;
    }

    /**
     * @return Char
     */
    public function getVenzip() {
        return $this->_venzip;
    }

    /**
     * @return Char
     */
    public function getVencountry() {
        return $this->_vencountry;
    }

    /**
     * @return Char
     */
    public function getShipto() {
        return $this->_shipto;
    }

    /**
     * @return Char
     */
    public function getShipadd1() {
        return $this->_shipadd1;
    }

    /**
     * @return Char
     */
    public function getShipadd2() {
        return $this->_shipadd2;
    }

    /**
     * @return Char
     */
    public function getScity() {
        return $this->_scity;
    }

    /**
     * @return Char
     */
    public function getSstate() {
        return $this->_sstate;
    }

    /**
     * @return Char
     */
    public function getSzip() {
        return $this->_szip;
    }

    /**
     * @return Char
     */
    public function getScountry() {
        return $this->_scountry;
    }

    /**
     * @return Char
     */
    public function getShipvia() {
        return $this->_shipvia;
    }

    /**
     * @return Char
     */
    public function getShipvdes() {
        return $this->_shipvdes;
    }

    /**
     * @return Char
     */
    public function getFobpoint() {
        return $this->_fobpoint;
    }

    /**
     * @return Char
     */
    public function getVendor_no() {
        return $this->_vendor_no;
    }

    /**
     * @return Char
     */
    public function getTerms() {
        return $this->_terms;
    }

    /**
     * @return Char
     */
    public function getTerms1() {
        return $this->_terms1;
    }

    /**
     * @return Char
     */
    public function getBuyer() {
        return $this->_buyer;
    }

    /**
     * @return Char
     */
    public function getFreight() {
        return $this->_freight;
    }

    /**
     * @return Char
     */
    public function getReqdate() {
        return $this->_reqdate;
    }

    /**
     * @return Char
     */
    public function getConfirm() {
        return $this->_confirm;
    }

    /**
     * @return Char
     */
    public function getRemark() {
        return $this->_remark;
    }

    /**
     * @return Char
     */
    public function getCompany() {
        return $this->_company;
    }

    /**
     * @return Logical
     */
    public function getAltered() {
        return $this->_altered;
    }

    /**
     * @return Date
     */
    public function getDelivery() {
        return $this->_delivery;
    }

    /**
     * @return Numeric
     */
    public function getSubtotal() {
        return $this->_subtotal;
    }

    /**
     * @return Numeric
     */
    public function getDiscper() {
        return $this->_discper;
    }

    /**
     * @return Numeric
     */
    public function getDiscount() {
        return $this->_discount;
    }

    /**
     * @return Numeric
     */
    public function getMsubtotal() {
        return $this->_msubtotal;
    }

    /**
     * @return Numeric
     */
    public function getTax() {
        return $this->_tax;
    }

    /**
     * @return Numeric
     */
    public function getTaxamt() {
        return $this->_taxamt;
    }

    /**
     * @return Numeric
     */
    public function getShipping() {
        return $this->_shipping;
    }

    /**
     * @return Numeric
     */
    public function getPototal() {
        return $this->_pototal;
    }

    /**
     * @return Numeric
     */
    public function getSubtotal0() {
        return $this->_subtotal0;
    }

    /**
     * @return Numeric
     */
    public function getShipping0() {
        return $this->_shipping0;
    }

    /**
     * @return Numeric
     */
    public function getTaxamt0() {
        return $this->_taxamt0;
    }

    /**
     * @return Numeric
     */
    public function getPototal0() {
        return $this->_pototal0;
    }

    /**
     * @return Char
     */
    public function getRimno() {
        return $this->_rimno;
    }

    /**
     * @return Char
     */
    public function getRimqty() {
        return $this->_rimqty;
    }

    /**
     * @return Char
     */
    public function getRimpack() {
        return $this->_rimpack;
    }

    /**
     * @return Char
     */
    public function getRimmeas() {
        return $this->_rimmeas;
    }

    /**
     * @return Char
     */
    public function getRimwght() {
        return $this->_rimwght;
    }

    /**
     * @return Char
     */
    public function getRimcarrier() {
        return $this->_rimcarrier;
    }

    /**
     * @return Char
     */
    public function getRimawb_bl() {
        return $this->_rimawb_bl;
    }

    /**
     * @return Char
     */
    public function getRimconsul() {
        return $this->_rimconsul;
    }

    /**
     * @return Char
     */
    public function getRimchkno() {
        return $this->_rimchkno;
    }

    /**
     * @return Numeric
     */
    public function getRimamt() {
        return $this->_rimamt;
    }

    /**
     * @return Char
     */
    public function getRimfrght() {
        return $this->_rimfrght;
    }

    /**
     * @return Char
     */
    public function getRimfpl() {
        return $this->_rimfpl;
    }

    /**
     * @return Memo
     */
    public function getRimcomment() {
        return $this->_rimcomment;
    }

    /**
     * @return Char
     */
    public function getPoblurb() {
        return $this->_poblurb;
    }

    /**
     * @return Char
     */
    public function getPorrnum() {
        return $this->_porrnum;
    }

    /**
     * @return Char
     */
    public function getPorrnum_id() {
        return $this->_porrnum_id;
    }

    /**
     * @return Char
     */
    public function getAwbno() {
        return $this->_awbno;
    }

    /**
     * @return Char
     */
    public function getFrghts() {
        return $this->_frghts;
    }

    /**
     * @return Char
     */
    public function getRecdcar() {
        return $this->_recdcar;
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
    public function getFrec_whs() {
        return $this->_frec_whs;
    }

    /**
     * @return Date
     */
    public function getLarv_date() {
        return $this->_larv_date;
    }

    /**
     * @return Logical
     */
    public function getPostmark() {
        return $this->_postmark;
    }

    /**
     * @return Memo
     */
    public function getPocomment() {
        return $this->_pocomment;
    }

    /**
     * @return Char
     */
    public function getShip5() {
        return $this->_ship5;
    }

    /**
     * @return Char
     */
    public function getCurrency() {
        return $this->_currency;
    }

    /**
     * @return Char
     */
    public function getBrandname() {
        return $this->_brandname;
    }

    /**
     * @return Char
     */
    public function getOthertang() {
        return $this->_othertang;
    }

    /**
     * @return Logical,
     */
    public function getNflg0() {
        return $this->_nflg0;
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
    public function getShipadd3() {
        return $this->_shipadd3;
    }

    /**
     * @return Char
     */
    public function getShipadd4() {
        return $this->_shipadd4;
    }

    /**
     * @return Logical
     */
    public function getApflag() {
        return $this->_apflag;
    }

    /**
     * @return Numeric
     */
    public function getApamount() {
        return $this->_apamount;
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
     * @return Char
     */
    public function getVoucher() {
        return $this->_voucher;
    }

    /**
     * @return Char
     */
    public function getGlacctexp() {
        return $this->_glacctexp;
    }

    /**
     * @return Char
     */
    public function getVendref() {
        return $this->_vendref;
    }

    /**
     * @return Char
     */
    public function getFrtstat() {
        return $this->_frtstat;
    }

    /**
     * @return Numeric
     */
    public function getPorevno() {
        return $this->_porevno;
    }

    /**
     * @return Logical
     */
    public function getHolstatus() {
        return $this->_holstatus;
    }

    /**
     * @return Char
     */
    public function getPostatus() {
        return $this->_postatus;
    }

    /**
     * @return Logical
     */
    public function getHoldstatus() {
        return $this->_holdstatus;
    }

    /**
     * @return Numeric
     */
    public function getDiscount0() {
        return $this->_discount0;
    }

    /**
     * @return Date
     */
    public function getCompdate() {
        return $this->_compdate;
    }

    /**
     * @return Numeric
     */
    public function getProamount() {
        return $this->_proamount;
    }

    /**
     * @return Numeric
     */
    public function getPotype() {
        return $this->_potype;
    }

    /**
     * @return Char
     */
    public function getFupdtime() {
        return $this->_fupdtime;
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
    public function getFstation() {
        return $this->_fstation;
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
    public function getArshipid() {
        return $this->_arshipid;
    }

    /**
     * @return Memo
     */
    public function getInhsecomm() {
        return $this->_inhsecomm;
    }

    /**
     * @return Char
     */
    public function getPoprefix() {
        return $this->_poprefix;
    }

    /**
     * @return Char
     */
    public function getWhsno() {
        return $this->_whsno;
    }

    /**
     * @return Logical
     */
    public function getW9() {
        return $this->_w9;
    }

    /**
     * @return Logical
     */
    public function getDefvchr() {
        return $this->_defvchr;
    }

    /**
     * @return Char
     */
    public function getCstctid() {
        return $this->_cstctid;
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
    public function getNewstation() {
        return $this->_newstation;
    }

    /**
     * @return Char
     */
    public function getNewdtetime() {
        return $this->_newdtetime;
    }

    /**
     * @return Date
     */
    public function getEtadate() {
        return $this->_etadate;
    }

    /**
     * @return Date
     */
    public function getEpcdate() {
        return $this->_epcdate;
    }

    /**
     * @return Numeric
     */
    public function getTotalcost() {
        return $this->_totalcost;
    }

    /**
     * @return Char
     */
    public function getShipperno() {
        return $this->_shipperno;
    }

    /**
     * @return Char
     */
    public function getShipno() {
        return $this->_shipno;
    }

    /**
     * @return Logical
     */
    public function getDropship() {
        return $this->_dropship;
    }

    /**
     * @return Char
     */
    public function getSotypecode() {
        return $this->_sotypecode;
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
    public function getEdicustno() {
        return $this->_edicustno;
    }

    /**
     * @return Char
     */
    public function getEdicompany() {
        return $this->_edicompany;
    }

    /**
     * @return Char
     */
    public function getEdiactcomp() {
        return $this->_ediactcomp;
    }

    /**
     * @return Logical
     */
    public function getQuickship() {
        return $this->_quickship;
    }

    /**
     * @return Char
     */
    public function getWashcode() {
        return $this->_washcode;
    }

    /**
     * @return Char
     */
    public function getCustfld8() {
        return $this->_custfld8;
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
     * @return Numeric
     */
    public function getTotbotdep() {
        return $this->_totbotdep;
    }

    /**
     * @return Numeric
     */
    public function getGstfrmtot() {
        return $this->_gstfrmtot;
    }

    /**
     * @return Numeric
     */
    public function getNetnogstbd() {
        return $this->_netnogstbd;
    }

    /**
     * @return Numeric
     */
    public function getTaxext() {
        return $this->_taxext;
    }

    /**
     * @return Logical
     */
    public function getBotldepgst() {
        return $this->_botldepgst;
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
    public function getTotqtyord() {
        return $this->_totqtyord;
    }

    /**
     * @return Numeric
     */
    public function getTotcstbase() {
        return $this->_totcstbase;
    }

    /**
     * @return Numeric
     */
    public function getTotcstdisc() {
        return $this->_totcstdisc;
    }

    /**
     * @return Numeric
     */
    public function getMaxpototal() {
        return $this->_maxpototal;
    }

    /**
     * Setters
     */

    /**
     * @param Char
     */
    public function setPono($value) {
        $this->_pono = $value;
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
    public function setSono($value) {
        $this->_sono = $value;
    }

    /**
     * @param Char
     */
    public function setRfqno($value) {
        $this->_rfqno = $value;
    }

    /**
     * @param Char
     */
    public function setPopstat($value) {
        $this->_popstat = $value;
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
    public function setCustno($value) {
        $this->_custno = $value;
    }

    /**
     * @param Date
     */
    public function setLdate($value) {
        $this->_ldate = $value;
    }

    /**
     * @param Char
     */
    public function setVendor($value) {
        $this->_vendor = $value;
    }

    /**
     * @param Char
     */
    public function setVenadd1($value) {
        $this->_venadd1 = $value;
    }

    /**
     * @param Char
     */
    public function setVenadd2($value) {
        $this->_venadd2 = $value;
    }

    /**
     * @param Char
     */
    public function setVencity($value) {
        $this->_vencity = $value;
    }

    /**
     * @param Char
     */
    public function setVenstate($value) {
        $this->_venstate = $value;
    }

    /**
     * @param Char
     */
    public function setVenzip($value) {
        $this->_venzip = $value;
    }

    /**
     * @param Char
     */
    public function setVencountry($value) {
        $this->_vencountry = $value;
    }

    /**
     * @param Char
     */
    public function setShipto($value) {
        $this->_shipto = $value;
    }

    /**
     * @param Char
     */
    public function setShipadd1($value) {
        $this->_shipadd1 = $value;
    }

    /**
     * @param Char
     */
    public function setShipadd2($value) {
        $this->_shipadd2 = $value;
    }

    /**
     * @param Char
     */
    public function setScity($value) {
        $this->_scity = $value;
    }

    /**
     * @param Char
     */
    public function setSstate($value) {
        $this->_sstate = $value;
    }

    /**
     * @param Char
     */
    public function setSzip($value) {
        $this->_szip = $value;
    }

    /**
     * @param Char
     */
    public function setScountry($value) {
        $this->_scountry = $value;
    }

    /**
     * @param Char
     */
    public function setShipvia($value) {
        $this->_shipvia = $value;
    }

    /**
     * @param Char
     */
    public function setShipvdes($value) {
        $this->_shipvdes = $value;
    }

    /**
     * @param Char
     */
    public function setFobpoint($value) {
        $this->_fobpoint = $value;
    }

    /**
     * @param Char
     */
    public function setVendor_no($value) {
        $this->_vendor_no = $value;
    }

    /**
     * @param Char
     */
    public function setTerms($value) {
        $this->_terms = $value;
    }

    /**
     * @param Char
     */
    public function setTerms1($value) {
        $this->_terms1 = $value;
    }

    /**
     * @param Char
     */
    public function setBuyer($value) {
        $this->_buyer = $value;
    }

    /**
     * @param Char
     */
    public function setFreight($value) {
        $this->_freight = $value;
    }

    /**
     * @param Char
     */
    public function setReqdate($value) {
        $this->_reqdate = $value;
    }

    /**
     * @param Char
     */
    public function setConfirm($value) {
        $this->_confirm = $value;
    }

    /**
     * @param Char
     */
    public function setRemark($value) {
        $this->_remark = $value;
    }

    /**
     * @param Char
     */
    public function setCompany($value) {
        $this->_company = $value;
    }

    /**
     * @param Logical
     */
    public function setAltered($value) {
        $this->_altered = $value;
    }

    /**
     * @param Date
     */
    public function setDelivery($value) {
        $this->_delivery = $value;
    }

    /**
     * @param Numeric
     */
    public function setSubtotal($value) {
        $this->_subtotal = $value;
    }

    /**
     * @param Numeric
     */
    public function setDiscper($value) {
        $this->_discper = $value;
    }

    /**
     * @param Numeric
     */
    public function setDiscount($value) {
        $this->_discount = $value;
    }

    /**
     * @param Numeric
     */
    public function setMsubtotal($value) {
        $this->_msubtotal = $value;
    }

    /**
     * @param Numeric
     */
    public function setTax($value) {
        $this->_tax = $value;
    }

    /**
     * @param Numeric
     */
    public function setTaxamt($value) {
        $this->_taxamt = $value;
    }

    /**
     * @param Numeric
     */
    public function setShipping($value) {
        $this->_shipping = $value;
    }

    /**
     * @param Numeric
     */
    public function setPototal($value) {
        $this->_pototal = $value;
    }

    /**
     * @param Numeric
     */
    public function setSubtotal0($value) {
        $this->_subtotal0 = $value;
    }

    /**
     * @param Numeric
     */
    public function setShipping0($value) {
        $this->_shipping0 = $value;
    }

    /**
     * @param Numeric
     */
    public function setTaxamt0($value) {
        $this->_taxamt0 = $value;
    }

    /**
     * @param Numeric
     */
    public function setPototal0($value) {
        $this->_pototal0 = $value;
    }

    /**
     * @param Char
     */
    public function setRimno($value) {
        $this->_rimno = $value;
    }

    /**
     * @param Char
     */
    public function setRimqty($value) {
        $this->_rimqty = $value;
    }

    /**
     * @param Char
     */
    public function setRimpack($value) {
        $this->_rimpack = $value;
    }

    /**
     * @param Char
     */
    public function setRimmeas($value) {
        $this->_rimmeas = $value;
    }

    /**
     * @param Char
     */
    public function setRimwght($value) {
        $this->_rimwght = $value;
    }

    /**
     * @param Char
     */
    public function setRimcarrier($value) {
        $this->_rimcarrier = $value;
    }

    /**
     * @param Char
     */
    public function setRimawb_bl($value) {
        $this->_rimawb_bl = $value;
    }

    /**
     * @param Char
     */
    public function setRimconsul($value) {
        $this->_rimconsul = $value;
    }

    /**
     * @param Char
     */
    public function setRimchkno($value) {
        $this->_rimchkno = $value;
    }

    /**
     * @param Numeric
     */
    public function setRimamt($value) {
        $this->_rimamt = $value;
    }

    /**
     * @param Char
     */
    public function setRimfrght($value) {
        $this->_rimfrght = $value;
    }

    /**
     * @param Char
     */
    public function setRimfpl($value) {
        $this->_rimfpl = $value;
    }

    /**
     * @param Memo
     */
    public function setRimcomment($value) {
        $this->_rimcomment = $value;
    }

    /**
     * @param Char
     */
    public function setPoblurb($value) {
        $this->_poblurb = $value;
    }

    /**
     * @param Char
     */
    public function setPorrnum($value) {
        $this->_porrnum = $value;
    }

    /**
     * @param Char
     */
    public function setPorrnum_id($value) {
        $this->_porrnum_id = $value;
    }

    /**
     * @param Char
     */
    public function setAwbno($value) {
        $this->_awbno = $value;
    }

    /**
     * @param Char
     */
    public function setFrghts($value) {
        $this->_frghts = $value;
    }

    /**
     * @param Char
     */
    public function setRecdcar($value) {
        $this->_recdcar = $value;
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
    public function setFrec_whs($value) {
        $this->_frec_whs = $value;
    }

    /**
     * @param Date
     */
    public function setLarv_date($value) {
        $this->_larv_date = $value;
    }

    /**
     * @param Logical
     */
    public function setPostmark($value) {
        $this->_postmark = $value;
    }

    /**
     * @param Memo
     */
    public function setPocomment($value) {
        $this->_pocomment = $value;
    }

    /**
     * @param Char
     */
    public function setShip5($value) {
        $this->_ship5 = $value;
    }

    /**
     * @param Char
     */
    public function setCurrency($value) {
        $this->_currency = $value;
    }

    /**
     * @param Char
     */
    public function setBrandname($value) {
        $this->_brandname = $value;
    }

    /**
     * @param Char
     */
    public function setOthertang($value) {
        $this->_othertang = $value;
    }

    /**
     * @param Logical,
     */
    public function setNflg0($value) {
        $this->_nflg0 = $value;
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
    public function setShipadd3($value) {
        $this->_shipadd3 = $value;
    }

    /**
     * @param Char
     */
    public function setShipadd4($value) {
        $this->_shipadd4 = $value;
    }

    /**
     * @param Logical
     */
    public function setApflag($value) {
        $this->_apflag = $value;
    }

    /**
     * @param Numeric
     */
    public function setApamount($value) {
        $this->_apamount = $value;
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
     * @param Char
     */
    public function setVoucher($value) {
        $this->_voucher = $value;
    }

    /**
     * @param Char
     */
    public function setGlacctexp($value) {
        $this->_glacctexp = $value;
    }

    /**
     * @param Char
     */
    public function setVendref($value) {
        $this->_vendref = $value;
    }

    /**
     * @param Char
     */
    public function setFrtstat($value) {
        $this->_frtstat = $value;
    }

    /**
     * @param Numeric
     */
    public function setPorevno($value) {
        $this->_porevno = $value;
    }

    /**
     * @param Logical
     */
    public function setHolstatus($value) {
        $this->_holstatus = $value;
    }

    /**
     * @param Char
     */
    public function setPostatus($value) {
        $this->_postatus = $value;
    }

    /**
     * @param Logical
     */
    public function setHoldstatus($value) {
        $this->_holdstatus = $value;
    }

    /**
     * @param Numeric
     */
    public function setDiscount0($value) {
        $this->_discount0 = $value;
    }

    /**
     * @param Date
     */
    public function setCompdate($value) {
        $this->_compdate = $value;
    }

    /**
     * @param Numeric
     */
    public function setProamount($value) {
        $this->_proamount = $value;
    }

    /**
     * @param Numeric
     */
    public function setPotype($value) {
        $this->_potype = $value;
    }

    /**
     * @param Char
     */
    public function setFupdtime($value) {
        $this->_fupdtime = $value;
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
    public function setFstation($value) {
        $this->_fstation = $value;
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
    public function setArshipid($value) {
        $this->_arshipid = $value;
    }

    /**
     * @param Memo
     */
    public function setInhsecomm($value) {
        $this->_inhsecomm = $value;
    }

    /**
     * @param Char
     */
    public function setPoprefix($value) {
        $this->_poprefix = $value;
    }

    /**
     * @param Char
     */
    public function setWhsno($value) {
        $this->_whsno = $value;
    }

    /**
     * @param Logical
     */
    public function setW9($value) {
        $this->_w9 = $value;
    }

    /**
     * @param Logical
     */
    public function setDefvchr($value) {
        $this->_defvchr = $value;
    }

    /**
     * @param Char
     */
    public function setCstctid($value) {
        $this->_cstctid = $value;
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
    public function setNewstation($value) {
        $this->_newstation = $value;
    }

    /**
     * @param Char
     */
    public function setNewdtetime($value) {
        $this->_newdtetime = $value;
    }

    /**
     * @param Date
     */
    public function setEtadate($value) {
        $this->_etadate = $value;
    }

    /**
     * @param Date
     */
    public function setEpcdate($value) {
        $this->_epcdate = $value;
    }

    /**
     * @param Numeric
     */
    public function setTotalcost($value) {
        $this->_totalcost = $value;
    }

    /**
     * @param Char
     */
    public function setShipperno($value) {
        $this->_shipperno = $value;
    }

    /**
     * @param Char
     */
    public function setShipno($value) {
        $this->_shipno = $value;
    }

    /**
     * @param Logical
     */
    public function setDropship($value) {
        $this->_dropship = $value;
    }

    /**
     * @param Char
     */
    public function setSotypecode($value) {
        $this->_sotypecode = $value;
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
    public function setEdicustno($value) {
        $this->_edicustno = $value;
    }

    /**
     * @param Char
     */
    public function setEdicompany($value) {
        $this->_edicompany = $value;
    }

    /**
     * @param Char
     */
    public function setEdiactcomp($value) {
        $this->_ediactcomp = $value;
    }

    /**
     * @param Logical
     */
    public function setQuickship($value) {
        $this->_quickship = $value;
    }

    /**
     * @param Char
     */
    public function setWashcode($value) {
        $this->_washcode = $value;
    }

    /**
     * @param Char
     */
    public function setCustfld8($value) {
        $this->_custfld8 = $value;
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
     * @param Numeric
     */
    public function setTotbotdep($value) {
        $this->_totbotdep = $value;
    }

    /**
     * @param Numeric
     */
    public function setGstfrmtot($value) {
        $this->_gstfrmtot = $value;
    }

    /**
     * @param Numeric
     */
    public function setNetnogstbd($value) {
        $this->_netnogstbd = $value;
    }

    /**
     * @param Numeric
     */
    public function setTaxext($value) {
        $this->_taxext = $value;
    }

    /**
     * @param Logical
     */
    public function setBotldepgst($value) {
        $this->_botldepgst = $value;
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
    public function setTotqtyord($value) {
        $this->_totqtyord = $value;
    }

    /**
     * @param Numeric
     */
    public function setTotcstbase($value) {
        $this->_totcstbase = $value;
    }

    /**
     * @param Numeric
     */
    public function setTotcstdisc($value) {
        $this->_totcstdisc = $value;
    }

    /**
     * @param Numeric
     */
    public function setMaxpototal($value) {
        $this->_maxpototal = $value;
    }

    /**
     * Constructor
     * @param type $pono
     * @param type $podate
     * @param type $sono
     * @param type $rfqno
     * @param type $popstat
     * @param type $vendno
     * @param type $custno
     * @param type $ldate
     * @param type $vendor
     * @param type $venadd1
     * @param type $venadd2
     * @param type $vencity
     * @param type $venstate
     * @param type $venzip
     * @param type $vencountry
     * @param type $shipto
     * @param type $shipadd1
     * @param type $shipadd2
     * @param type $scity
     * @param type $sstate
     * @param type $szip
     * @param type $scountry
     * @param type $shipvia
     * @param type $shipvdes
     * @param type $fobpoint
     * @param type $vendor_no
     * @param type $terms
     * @param type $terms1
     * @param type $buyer
     * @param type $freight
     * @param type $reqdate
     * @param type $confirm
     * @param type $remark
     * @param type $company
     * @param type $altered
     * @param type $delivery
     * @param type $subtotal
     * @param type $discper
     * @param type $discount
     * @param type $msubtotal
     * @param type $tax
     * @param type $taxamt
     * @param type $shipping
     * @param type $pototal
     * @param type $subtotal0
     * @param type $shipping0
     * @param type $taxamt0
     * @param type $pototal0
     * @param type $rimno
     * @param type $rimqty
     * @param type $rimpack
     * @param type $rimmeas
     * @param type $rimwght
     * @param type $rimcarrier
     * @param type $rimawb_bl
     * @param type $rimconsul
     * @param type $rimchkno
     * @param type $rimamt
     * @param type $rimfrght
     * @param type $rimfpl
     * @param type $rimcomment
     * @param type $poblurb
     * @param type $porrnum
     * @param type $porrnum_id
     * @param type $awbno
     * @param type $frghts
     * @param type $recdcar
     * @param type $lotno
     * @param type $frec_whs
     * @param type $larv_date
     * @param type $postmark
     * @param type $pocomment
     * @param type $ship5
     * @param type $currency
     * @param type $brandname
     * @param type $othertang
     * @param type $nflg0
     * @param type $ordnum
     * @param type $shipadd3
     * @param type $shipadd4
     * @param type $apflag
     * @param type $apamount
     * @param type $invno
     * @param type $invdate
     * @param type $voucher
     * @param type $glacctexp
     * @param type $vendref
     * @param type $frtstat
     * @param type $porevno
     * @param type $holstatus
     * @param type $postatus
     * @param type $holdstatus
     * @param type $discount0
     * @param type $compdate
     * @param type $proamount
     * @param type $potype
     * @param type $fupdtime
     * @param type $fupddate
     * @param type $fstation
     * @param type $fuserid
     * @param type $arshipid
     * @param type $inhsecomm
     * @param type $poprefix
     * @param type $whsno
     * @param type $w9
     * @param type $defvchr
     * @param type $cstctid
     * @param type $newuserid
     * @param type $newstation
     * @param type $newdtetime
     * @param type $etadate
     * @param type $epcdate
     * @param type $totalcost
     * @param type $shipperno
     * @param type $shipno
     * @param type $dropship
     * @param type $sotypecode
     * @param type $sotype
     * @param type $edicustno
     * @param type $edicompany
     * @param type $ediactcomp
     * @param type $quickship
     * @param type $washcode
     * @param type $custfld8
     * @param type $ftaxcode
     * @param type $taxrate
     * @param type $totbotdep
     * @param type $gstfrmtot
     * @param type $netnogstbd
     * @param type $taxext
     * @param type $botldepgst
     * @param type $qblistid
     * @param type $totqtyord
     * @param type $totcstbase
     * @param type $totcstdisc
     * @param type $maxpototal
     */
    public function __construct($pono, $podate, $sono, $rfqno, $popstat, $vendno, $custno, $ldate, $vendor, $venadd1, $venadd2, $vencity, $venstate, $venzip, $vencountry, $shipto, $shipadd1, $shipadd2, $scity, $sstate, $szip, $scountry, $shipvia, $shipvdes, $fobpoint, $vendor_no, $terms, $terms1, $buyer, $freight, $reqdate, $confirm, $remark, $company, $altered, $delivery, $subtotal, $discper, $discount, $msubtotal, $tax, $taxamt, $shipping, $pototal, $subtotal0, $shipping0, $taxamt0, $pototal0, $rimno, $rimqty, $rimpack, $rimmeas, $rimwght, $rimcarrier, $rimawb_bl, $rimconsul, $rimchkno, $rimamt, $rimfrght, $rimfpl, $rimcomment, $poblurb, $porrnum, $porrnum_id, $awbno, $frghts, $recdcar, $lotno, $frec_whs, $larv_date, $postmark, $pocomment, $ship5, $currency, $brandname, $othertang, $nflg0, $ordnum, $shipadd3, $shipadd4, $apflag, $apamount, $invno, $invdate, $voucher, $glacctexp, $vendref, $frtstat, $porevno, $holstatus, $postatus, $holdstatus, $discount0, $compdate, $proamount, $potype, $fupdtime, $fupddate, $fstation, $fuserid, $arshipid, $inhsecomm, $poprefix, $whsno, $w9, $defvchr, $cstctid, $newuserid, $newstation, $newdtetime, $etadate, $epcdate, $totalcost, $shipperno, $shipno, $dropship, $sotypecode, $sotype, $edicustno, $edicompany, $ediactcomp, $quickship, $washcode, $custfld8, $ftaxcode, $taxrate, $totbotdep, $gstfrmtot, $netnogstbd, $taxext, $botldepgst, $qblistid, $totqtyord, $totcstbase, $totcstdisc, $maxpototal) {
        $this->_pono = $pono;
        $this->_podate = $podate;
        $this->_sono = $sono;
        $this->_rfqno = $rfqno;
        $this->_popstat = $popstat;
        $this->_vendno = $vendno;
        $this->_custno = $custno;
        $this->_ldate = $ldate;
        $this->_vendor = $vendor;
        $this->_venadd1 = $venadd1;
        $this->_venadd2 = $venadd2;
        $this->_vencity = $vencity;
        $this->_venstate = $venstate;
        $this->_venzip = $venzip;
        $this->_vencountry = $vencountry;
        $this->_shipto = $shipto;
        $this->_shipadd1 = $shipadd1;
        $this->_shipadd2 = $shipadd2;
        $this->_scity = $scity;
        $this->_sstate = $sstate;
        $this->_szip = $szip;
        $this->_scountry = $scountry;
        $this->_shipvia = $shipvia;
        $this->_shipvdes = $shipvdes;
        $this->_fobpoint = $fobpoint;
        $this->_vendor_no = $vendor_no;
        $this->_terms = $terms;
        $this->_terms1 = $terms1;
        $this->_buyer = $buyer;
        $this->_freight = $freight;
        $this->_reqdate = $reqdate;
        $this->_confirm = $confirm;
        $this->_remark = $remark;
        $this->_company = $company;
        $this->_altered = $altered;
        $this->_delivery = $delivery;
        $this->_subtotal = $subtotal;
        $this->_discper = $discper;
        $this->_discount = $discount;
        $this->_msubtotal = $msubtotal;
        $this->_tax = $tax;
        $this->_taxamt = $taxamt;
        $this->_shipping = $shipping;
        $this->_pototal = $pototal;
        $this->_subtotal0 = $subtotal0;
        $this->_shipping0 = $shipping0;
        $this->_taxamt0 = $taxamt0;
        $this->_pototal0 = $pototal0;
        $this->_rimno = $rimno;
        $this->_rimqty = $rimqty;
        $this->_rimpack = $rimpack;
        $this->_rimmeas = $rimmeas;
        $this->_rimwght = $rimwght;
        $this->_rimcarrier = $rimcarrier;
        $this->_rimawb_bl = $rimawb_bl;
        $this->_rimconsul = $rimconsul;
        $this->_rimchkno = $rimchkno;
        $this->_rimamt = $rimamt;
        $this->_rimfrght = $rimfrght;
        $this->_rimfpl = $rimfpl;
        $this->_rimcomment = $rimcomment;
        $this->_poblurb = $poblurb;
        $this->_porrnum = $porrnum;
        $this->_porrnum_id = $porrnum_id;
        $this->_awbno = $awbno;
        $this->_frghts = $frghts;
        $this->_recdcar = $recdcar;
        $this->_lotno = $lotno;
        $this->_frec_whs = $frec_whs;
        $this->_larv_date = $larv_date;
        $this->_postmark = $postmark;
        $this->_pocomment = $pocomment;
        $this->_ship5 = $ship5;
        $this->_currency = $currency;
        $this->_brandname = $brandname;
        $this->_othertang = $othertang;
        $this->_nflg0 = $nflg0;
        $this->_ordnum = $ordnum;
        $this->_shipadd3 = $shipadd3;
        $this->_shipadd4 = $shipadd4;
        $this->_apflag = $apflag;
        $this->_apamount = $apamount;
        $this->_invno = $invno;
        $this->_invdate = $invdate;
        $this->_voucher = $voucher;
        $this->_glacctexp = $glacctexp;
        $this->_vendref = $vendref;
        $this->_frtstat = $frtstat;
        $this->_porevno = $porevno;
        $this->_holstatus = $holstatus;
        $this->_postatus = $postatus;
        $this->_holdstatus = $holdstatus;
        $this->_discount0 = $discount0;
        $this->_compdate = $compdate;
        $this->_proamount = $proamount;
        $this->_potype = $potype;
        $this->_fupdtime = $fupdtime;
        $this->_fupddate = $fupddate;
        $this->_fstation = $fstation;
        $this->_fuserid = $fuserid;
        $this->_arshipid = $arshipid;
        $this->_inhsecomm = $inhsecomm;
        $this->_poprefix = $poprefix;
        $this->_whsno = $whsno;
        $this->_w9 = $w9;
        $this->_defvchr = $defvchr;
        $this->_cstctid = $cstctid;
        $this->_newuserid = $newuserid;
        $this->_newstation = $newstation;
        $this->_newdtetime = $newdtetime;
        $this->_etadate = $etadate;
        $this->_epcdate = $epcdate;
        $this->_totalcost = $totalcost;
        $this->_shipperno = $shipperno;
        $this->_shipno = $shipno;
        $this->_dropship = $dropship;
        $this->_sotypecode = $sotypecode;
        $this->_sotype = $sotype;
        $this->_edicustno = $edicustno;
        $this->_edicompany = $edicompany;
        $this->_ediactcomp = $ediactcomp;
        $this->_quickship = $quickship;
        $this->_washcode = $washcode;
        $this->_custfld8 = $custfld8;
        $this->_ftaxcode = $ftaxcode;
        $this->_taxrate = $taxrate;
        $this->_totbotdep = $totbotdep;
        $this->_gstfrmtot = $gstfrmtot;
        $this->_netnogstbd = $netnogstbd;
        $this->_taxext = $taxext;
        $this->_botldepgst = $botldepgst;
        $this->_qblistid = $qblistid;
        $this->_totqtyord = $totqtyord;
        $this->_totcstbase = $totcstbase;
        $this->_totcstdisc = $totcstdisc;
        $this->_maxpototal = $maxpototal;
    }

    public static function toString() {
        return self::$_name;
    }

}
