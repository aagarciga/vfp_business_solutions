<?php

/**
 * Project:  VFP Business Series
 * Copyright: 2014. VFP Business Solutions, LLC
 */

namespace Dandelion\MVC\Application\Models\Entities\Base;

/**
 * BaseQUHSTH
 */
class BaseQUHSTH {

    /**
     * Private fields
     */
    private static $_name = "QUHSTH";

    /**
     * Protected fields
     */

    /**
     * @var Char
     */
    protected $_qutno;

    /**
     * @var Date
     */
    protected $_qutdate;

    /**
     * @var Char
     */
    protected $_qutreqno;

    /**
     * @var Char
     */
    protected $_qutstat;

    /**
     * @var Char
     */
    protected $_qutspcl;

    /**
     * @var Char
     */
    protected $_ordnum;

    /**
     * @var Char
     */
    protected $_invno;

    /**
     * @var Char
     */
    protected $_source;

    /**
     * @var Memo
     */
    protected $_closecomm;

    /**
     * @var Memo
     */
    protected $_inhsecomm;

    /**
     * @var Char
     */
    protected $_ponum;

    /**
     * @var Char
     */
    protected $_custno;

    /**
     * @var Numeric
     */
    protected $_commission;

    /**
     * @var Numeric
     */
    protected $_comslmn;

    /**
     * @var Numeric
     */
    protected $_comslmn2;

    /**
     * @var Char
     */
    protected $_salesmn;

    /**
     * @var Char
     */
    protected $_salesmn2;

    /**
     * @var Char
     */
    protected $_indust;

    /**
     * @var Char
     */
    protected $_terr;

    /**
     * @var Char
     */
    protected $_class;

    /**
     * @var Char
     */
    protected $_fobstat;

    /**
     * @var Char
     */
    protected $_shipvia;

    /**
     * @var Char
     */
    protected $_shipstat;

    /**
     * @var Char
     */
    protected $_shipfrom;

    /**
     * @var Char
     */
    protected $_termdesc;

    /**
     * @var Char
     */
    protected $_termdesc1;

    /**
     * @var Numeric
     */
    protected $_subtotal;

    /**
     * @var Numeric
     */
    protected $_disc;

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
    protected $_txrt;

    /**
     * @var Numeric
     */
    protected $_tax;

    /**
     * @var Numeric
     */
    protected $_shipping;

    /**
     * @var Numeric
     */
    protected $_total;

    /**
     * @var Numeric
     */
    protected $_totcost;

    /**
     * @var Numeric
     */
    protected $_subtotal0;

    /**
     * @var Numeric
     */
    protected $_subtotpo;

    /**
     * @var Numeric
     */
    protected $_totcost0;

    /**
     * @var Numeric
     */
    protected $_tax0;

    /**
     * @var Numeric
     */
    protected $_taxext;

    /**
     * @var Numeric
     */
    protected $_taxext0;

    /**
     * @var Numeric
     */
    protected $_taxpo;

    /**
     * @var Numeric
     */
    protected $_taxextpo;

    /**
     * @var Numeric
     */
    protected $_shippo;

    /**
     * @var Numeric
     */
    protected $_total0;

    /**
     * @var Numeric
     */
    protected $_totalpo;

    /**
     * @var Date
     */
    protected $_shipdate;

    /**
     * @var Char
     */
    protected $_delivery;

    /**
     * @var Char
     */
    protected $_validity;

    /**
     * @var Char
     */
    protected $_frghts;

    /**
     * @var Char
     */
    protected $_totwght;

    /**
     * @var Numeric
     */
    protected $_prepaid;

    /**
     * @var Char
     */
    protected $_refno;

    /**
     * @var Char
     */
    protected $_ppdref;

    /**
     * @var Char
     */
    protected $_company;

    /**
     * @var Char
     */
    protected $_address1;

    /**
     * @var Char
     */
    protected $_address2;

    /**
     * @var Char
     */
    protected $_address3;

    /**
     * @var Char
     */
    protected $_city;

    /**
     * @var Char
     */
    protected $_state;

    /**
     * @var Char
     */
    protected $_zip;

    /**
     * @var Char
     */
    protected $_country;

    /**
     * @var Char
     */
    protected $_shipid;

    /**
     * @var Char
     */
    protected $_shipto1;

    /**
     * @var Char
     */
    protected $_shipto2;

    /**
     * @var Char
     */
    protected $_shipto3;

    /**
     * @var Char
     */
    protected $_shipto4;

    /**
     * @var Char
     */
    protected $_shipto5;

    /**
     * @var Char
     */
    protected $_termid;

    /**
     * @var Char
     */
    protected $_userflg;

    /**
     * @var Numeric
     */
    protected $_invtype;

    /**
     * @var Char
     */
    protected $_key;

    /**
     * @var Char
     */
    protected $_blurb_id;

    /**
     * @var Char
     */
    protected $_fuserid;

    /**
     * @var Char
     */
    protected $_fstation;

    /**
     * @var Char
     */
    protected $_nflg1;

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
    protected $_status;

    /**
     * @var Date
     */
    protected $_dtereview;

    /**
     * @var Date
     */
    protected $_dtesigned;

    /**
     * @var Date
     */
    protected $_dteclose;

    /**
     * @var Numeric
     */
    protected $_cartoons;

    /**
     * @var Numeric
     */
    protected $_freight;

    /**
     * @var Numeric
     */
    protected $_custdisc;

    /**
     * @var Char
     */
    protected $_shipvname;

    /**
     * @var Char
     */
    protected $_salesmn1na;

    /**
     * @var Char
     */
    protected $_salesmn2na;

    /**
     * @var Logical
     */
    protected $_nflg0;

    /**
     * @var Char
     */
    protected $_priceby;

    /**
     * @var Char
     */
    protected $_swordnum;

    /**
     * @var Char
     */
    protected $_sysstatus;

    /**
     * @var Logical
     */
    protected $_websyncflg;

    /**
     * @var Numeric
     */
    protected $_taxrate;

    /**
     * @var Numeric
     */
    protected $_taxrate1;

    /**
     * @var Numeric
     */
    protected $_taxrate2;

    /**
     * @var Numeric
     */
    protected $_taxrate3;

    /**
     * @var Numeric
     */
    protected $_taxrate4;

    /**
     * @var Char
     */
    protected $_ftaxcode;

    /**
     * @var Char
     */
    protected $_glaracct;

    /**
     * @var Char
     */
    protected $_frghtpay;

    /**
     * @var Char
     */
    protected $_whsno;

    /**
     * @var Date
     */
    protected $_dueday;

    /**
     * @var Char
     */
    protected $_destino;

    /**
     * @var Char
     */
    protected $_trackno;

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
     * @var Logical
     */
    protected $_delete;

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
    protected $_aprvaldate;

    /**
     * @var Date
     */
    protected $_ntaprvdate;

    /**
     * @var Date
     */
    protected $_revdate;

    /**
     * @var Date
     */
    protected $_csrdate;

    /**
     * @var Date
     */
    protected $_sentdate;

    /**
     * @var Date
     */
    protected $_prparedate;

    /**
     * @var Date
     */
    protected $_rfqdate;

    /**
     * @var Numeric
     */
    protected $_closeprob;

    /**
     * @var Date
     */
    protected $_anclsedate;

    /**
     * @var Numeric
     */
    protected $_nextfllwup;

    /**
     * @var Numeric
     */
    protected $_loststatus;

    /**
     * @var Memo
     */
    protected $_quotecomm;

    /**
     * @var Char
     */
    protected $_phone;

    /**
     * @var Char
     */
    protected $_phone1;

    /**
     * @var Char
     */
    protected $_fax;

    /**
     * @var Char
     */
    protected $_noteflag;

    /**
     * @var Numeric
     */
    protected $_totbotdep;

    /**
     * @var Char
     */
    protected $_shpcompnam;

    /**
     * @var Char
     */
    protected $_shpaddrs1;

    /**
     * @var Char
     */
    protected $_shpaddrs2;

    /**
     * @var Char
     */
    protected $_shpcity;

    /**
     * @var Char
     */
    protected $_shpstate;

    /**
     * @var Char
     */
    protected $_shpzip;

    /**
     * @var Char
     */
    protected $_shpcountry;

    /**
     * @var Char
     */
    protected $_shpbillopt;

    /**
     * @var Char
     */
    protected $_shpphone;

    /**
     * @var Char
     */
    protected $_shpemail;

    /**
     * @var Char
     */
    protected $_shpcontact;

    /**
     * @var Char
     */
    protected $_locphone;

    /**
     * @var Char
     */
    protected $_locationid;

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
    protected $_qblistid;

    /**
     * @var Char
     */
    protected $_cstctid;

    /**
     * @var Char
     */
    protected $_gldept;

    /**
     * @var Logical
     */
    protected $_delflag;

    /**
     * @var TimeStamp
     */
    protected $_deldate;

    /**
     * @var Char
     */
    protected $_deluserid;

    /**
     * @var Logical
     */
    protected $_tosoflag;

    /**
     * @var TimeStamp
     */
    protected $_tosodate;

    /**
     * @var Char
     */
    protected $_tosouserid;

    /**
     * @var Logical
     */
    protected $_toivflag;

    /**
     * @var TimeStamp
     */
    protected $_toivdate;

    /**
     * @var Char
     */
    protected $_toivuserid;

    /**
     * @var Logical
     */
    protected $_topoflag;

    /**
     * @var TimeStamp
     */
    protected $_topodate;

    /**
     * @var Char
     */
    protected $_topouserid;

    /**
     * @var Char
     */
    protected $_projno;

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
     * @return Date
     */
    public function getQutdate() {
        return $this->_qutdate;
    }

    /**
     * @return Char
     */
    public function getQutreqno() {
        return $this->_qutreqno;
    }

    /**
     * @return Char
     */
    public function getQutstat() {
        return $this->_qutstat;
    }

    /**
     * @return Char
     */
    public function getQutspcl() {
        return $this->_qutspcl;
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
    public function getInvno() {
        return $this->_invno;
    }

    /**
     * @return Char
     */
    public function getSource() {
        return $this->_source;
    }

    /**
     * @return Memo
     */
    public function getClosecomm() {
        return $this->_closecomm;
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
    public function getPonum() {
        return $this->_ponum;
    }

    /**
     * @return Char
     */
    public function getCustno() {
        return $this->_custno;
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
    public function getComslmn() {
        return $this->_comslmn;
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
    public function getSalesmn() {
        return $this->_salesmn;
    }

    /**
     * @return Char
     */
    public function getSalesmn2() {
        return $this->_salesmn2;
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
     * @return Char
     */
    public function getClass() {
        return $this->_class;
    }

    /**
     * @return Char
     */
    public function getFobstat() {
        return $this->_fobstat;
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
    public function getShipstat() {
        return $this->_shipstat;
    }

    /**
     * @return Char
     */
    public function getShipfrom() {
        return $this->_shipfrom;
    }

    /**
     * @return Char
     */
    public function getTermdesc() {
        return $this->_termdesc;
    }

    /**
     * @return Char
     */
    public function getTermdesc1() {
        return $this->_termdesc1;
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
    public function getDisc() {
        return $this->_disc;
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
    public function getTxrt() {
        return $this->_txrt;
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
    public function getShipping() {
        return $this->_shipping;
    }

    /**
     * @return Numeric
     */
    public function getTotal() {
        return $this->_total;
    }

    /**
     * @return Numeric
     */
    public function getTotcost() {
        return $this->_totcost;
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
    public function getSubtotpo() {
        return $this->_subtotpo;
    }

    /**
     * @return Numeric
     */
    public function getTotcost0() {
        return $this->_totcost0;
    }

    /**
     * @return Numeric
     */
    public function getTax0() {
        return $this->_tax0;
    }

    /**
     * @return Numeric
     */
    public function getTaxext() {
        return $this->_taxext;
    }

    /**
     * @return Numeric
     */
    public function getTaxext0() {
        return $this->_taxext0;
    }

    /**
     * @return Numeric
     */
    public function getTaxpo() {
        return $this->_taxpo;
    }

    /**
     * @return Numeric
     */
    public function getTaxextpo() {
        return $this->_taxextpo;
    }

    /**
     * @return Numeric
     */
    public function getShippo() {
        return $this->_shippo;
    }

    /**
     * @return Numeric
     */
    public function getTotal0() {
        return $this->_total0;
    }

    /**
     * @return Numeric
     */
    public function getTotalpo() {
        return $this->_totalpo;
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
    public function getDelivery() {
        return $this->_delivery;
    }

    /**
     * @return Char
     */
    public function getValidity() {
        return $this->_validity;
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
    public function getTotwght() {
        return $this->_totwght;
    }

    /**
     * @return Numeric
     */
    public function getPrepaid() {
        return $this->_prepaid;
    }

    /**
     * @return Char
     */
    public function getRefno() {
        return $this->_refno;
    }

    /**
     * @return Char
     */
    public function getPpdref() {
        return $this->_ppdref;
    }

    /**
     * @return Char
     */
    public function getCompany() {
        return $this->_company;
    }

    /**
     * @return Char
     */
    public function getAddress1() {
        return $this->_address1;
    }

    /**
     * @return Char
     */
    public function getAddress2() {
        return $this->_address2;
    }

    /**
     * @return Char
     */
    public function getAddress3() {
        return $this->_address3;
    }

    /**
     * @return Char
     */
    public function getCity() {
        return $this->_city;
    }

    /**
     * @return Char
     */
    public function getState() {
        return $this->_state;
    }

    /**
     * @return Char
     */
    public function getZip() {
        return $this->_zip;
    }

    /**
     * @return Char
     */
    public function getCountry() {
        return $this->_country;
    }

    /**
     * @return Char
     */
    public function getShipid() {
        return $this->_shipid;
    }

    /**
     * @return Char
     */
    public function getShipto1() {
        return $this->_shipto1;
    }

    /**
     * @return Char
     */
    public function getShipto2() {
        return $this->_shipto2;
    }

    /**
     * @return Char
     */
    public function getShipto3() {
        return $this->_shipto3;
    }

    /**
     * @return Char
     */
    public function getShipto4() {
        return $this->_shipto4;
    }

    /**
     * @return Char
     */
    public function getShipto5() {
        return $this->_shipto5;
    }

    /**
     * @return Char
     */
    public function getTermid() {
        return $this->_termid;
    }

    /**
     * @return Char
     */
    public function getUserflg() {
        return $this->_userflg;
    }

    /**
     * @return Numeric
     */
    public function getInvtype() {
        return $this->_invtype;
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
    public function getBlurb_id() {
        return $this->_blurb_id;
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
     * @return Char
     */
    public function getNflg1() {
        return $this->_nflg1;
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
    public function getStatus() {
        return $this->_status;
    }

    /**
     * @return Date
     */
    public function getDtereview() {
        return $this->_dtereview;
    }

    /**
     * @return Date
     */
    public function getDtesigned() {
        return $this->_dtesigned;
    }

    /**
     * @return Date
     */
    public function getDteclose() {
        return $this->_dteclose;
    }

    /**
     * @return Numeric
     */
    public function getCartoons() {
        return $this->_cartoons;
    }

    /**
     * @return Numeric
     */
    public function getFreight() {
        return $this->_freight;
    }

    /**
     * @return Numeric
     */
    public function getCustdisc() {
        return $this->_custdisc;
    }

    /**
     * @return Char
     */
    public function getShipvname() {
        return $this->_shipvname;
    }

    /**
     * @return Char
     */
    public function getSalesmn1na() {
        return $this->_salesmn1na;
    }

    /**
     * @return Char
     */
    public function getSalesmn2na() {
        return $this->_salesmn2na;
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
    public function getPriceby() {
        return $this->_priceby;
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
    public function getSysstatus() {
        return $this->_sysstatus;
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
    public function getTaxrate() {
        return $this->_taxrate;
    }

    /**
     * @return Numeric
     */
    public function getTaxrate1() {
        return $this->_taxrate1;
    }

    /**
     * @return Numeric
     */
    public function getTaxrate2() {
        return $this->_taxrate2;
    }

    /**
     * @return Numeric
     */
    public function getTaxrate3() {
        return $this->_taxrate3;
    }

    /**
     * @return Numeric
     */
    public function getTaxrate4() {
        return $this->_taxrate4;
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
    public function getGlaracct() {
        return $this->_glaracct;
    }

    /**
     * @return Char
     */
    public function getFrghtpay() {
        return $this->_frghtpay;
    }

    /**
     * @return Char
     */
    public function getWhsno() {
        return $this->_whsno;
    }

    /**
     * @return Date
     */
    public function getDueday() {
        return $this->_dueday;
    }

    /**
     * @return Char
     */
    public function getDestino() {
        return $this->_destino;
    }

    /**
     * @return Char
     */
    public function getTrackno() {
        return $this->_trackno;
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
     * @return Logical
     */
    public function getDelete() {
        return $this->_delete;
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
    public function getAprvaldate() {
        return $this->_aprvaldate;
    }

    /**
     * @return Date
     */
    public function getNtaprvdate() {
        return $this->_ntaprvdate;
    }

    /**
     * @return Date
     */
    public function getRevdate() {
        return $this->_revdate;
    }

    /**
     * @return Date
     */
    public function getCsrdate() {
        return $this->_csrdate;
    }

    /**
     * @return Date
     */
    public function getSentdate() {
        return $this->_sentdate;
    }

    /**
     * @return Date
     */
    public function getPrparedate() {
        return $this->_prparedate;
    }

    /**
     * @return Date
     */
    public function getRfqdate() {
        return $this->_rfqdate;
    }

    /**
     * @return Numeric
     */
    public function getCloseprob() {
        return $this->_closeprob;
    }

    /**
     * @return Date
     */
    public function getAnclsedate() {
        return $this->_anclsedate;
    }

    /**
     * @return Numeric
     */
    public function getNextfllwup() {
        return $this->_nextfllwup;
    }

    /**
     * @return Numeric
     */
    public function getLoststatus() {
        return $this->_loststatus;
    }

    /**
     * @return Memo
     */
    public function getQuotecomm() {
        return $this->_quotecomm;
    }

    /**
     * @return Char
     */
    public function getPhone() {
        return $this->_phone;
    }

    /**
     * @return Char
     */
    public function getPhone1() {
        return $this->_phone1;
    }

    /**
     * @return Char
     */
    public function getFax() {
        return $this->_fax;
    }

    /**
     * @return Char
     */
    public function getNoteflag() {
        return $this->_noteflag;
    }

    /**
     * @return Numeric
     */
    public function getTotbotdep() {
        return $this->_totbotdep;
    }

    /**
     * @return Char
     */
    public function getShpcompnam() {
        return $this->_shpcompnam;
    }

    /**
     * @return Char
     */
    public function getShpaddrs1() {
        return $this->_shpaddrs1;
    }

    /**
     * @return Char
     */
    public function getShpaddrs2() {
        return $this->_shpaddrs2;
    }

    /**
     * @return Char
     */
    public function getShpcity() {
        return $this->_shpcity;
    }

    /**
     * @return Char
     */
    public function getShpstate() {
        return $this->_shpstate;
    }

    /**
     * @return Char
     */
    public function getShpzip() {
        return $this->_shpzip;
    }

    /**
     * @return Char
     */
    public function getShpcountry() {
        return $this->_shpcountry;
    }

    /**
     * @return Char
     */
    public function getShpbillopt() {
        return $this->_shpbillopt;
    }

    /**
     * @return Char
     */
    public function getShpphone() {
        return $this->_shpphone;
    }

    /**
     * @return Char
     */
    public function getShpemail() {
        return $this->_shpemail;
    }

    /**
     * @return Char
     */
    public function getShpcontact() {
        return $this->_shpcontact;
    }

    /**
     * @return Char
     */
    public function getLocphone() {
        return $this->_locphone;
    }

    /**
     * @return Char
     */
    public function getLocationid() {
        return $this->_locationid;
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
    public function getQblistid() {
        return $this->_qblistid;
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
    public function getGldept() {
        return $this->_gldept;
    }

    /**
     * @return Logical
     */
    public function getDelflag() {
        return $this->_delflag;
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
     * @return Logical
     */
    public function getTosoflag() {
        return $this->_tosoflag;
    }

    /**
     * @return TimeStamp
     */
    public function getTosodate() {
        return $this->_tosodate;
    }

    /**
     * @return Char
     */
    public function getTosouserid() {
        return $this->_tosouserid;
    }

    /**
     * @return Logical
     */
    public function getToivflag() {
        return $this->_toivflag;
    }

    /**
     * @return TimeStamp
     */
    public function getToivdate() {
        return $this->_toivdate;
    }

    /**
     * @return Char
     */
    public function getToivuserid() {
        return $this->_toivuserid;
    }

    /**
     * @return Logical
     */
    public function getTopoflag() {
        return $this->_topoflag;
    }

    /**
     * @return TimeStamp
     */
    public function getTopodate() {
        return $this->_topodate;
    }

    /**
     * @return Char
     */
    public function getTopouserid() {
        return $this->_topouserid;
    }

    /**
     * @return Char
     */
    public function getProjno() {
        return $this->_projno;
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
     * @param Date
     */
    public function setQutdate($value) {
        $this->_qutdate = $value;
    }

    /**
     * @param Char
     */
    public function setQutreqno($value) {
        $this->_qutreqno = $value;
    }

    /**
     * @param Char
     */
    public function setQutstat($value) {
        $this->_qutstat = $value;
    }

    /**
     * @param Char
     */
    public function setQutspcl($value) {
        $this->_qutspcl = $value;
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
    public function setInvno($value) {
        $this->_invno = $value;
    }

    /**
     * @param Char
     */
    public function setSource($value) {
        $this->_source = $value;
    }

    /**
     * @param Memo
     */
    public function setClosecomm($value) {
        $this->_closecomm = $value;
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
    public function setPonum($value) {
        $this->_ponum = $value;
    }

    /**
     * @param Char
     */
    public function setCustno($value) {
        $this->_custno = $value;
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
    public function setComslmn($value) {
        $this->_comslmn = $value;
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
    public function setSalesmn($value) {
        $this->_salesmn = $value;
    }

    /**
     * @param Char
     */
    public function setSalesmn2($value) {
        $this->_salesmn2 = $value;
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
     * @param Char
     */
    public function setClass($value) {
        $this->_class = $value;
    }

    /**
     * @param Char
     */
    public function setFobstat($value) {
        $this->_fobstat = $value;
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
    public function setShipstat($value) {
        $this->_shipstat = $value;
    }

    /**
     * @param Char
     */
    public function setShipfrom($value) {
        $this->_shipfrom = $value;
    }

    /**
     * @param Char
     */
    public function setTermdesc($value) {
        $this->_termdesc = $value;
    }

    /**
     * @param Char
     */
    public function setTermdesc1($value) {
        $this->_termdesc1 = $value;
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
    public function setDisc($value) {
        $this->_disc = $value;
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
    public function setTxrt($value) {
        $this->_txrt = $value;
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
    public function setShipping($value) {
        $this->_shipping = $value;
    }

    /**
     * @param Numeric
     */
    public function setTotal($value) {
        $this->_total = $value;
    }

    /**
     * @param Numeric
     */
    public function setTotcost($value) {
        $this->_totcost = $value;
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
    public function setSubtotpo($value) {
        $this->_subtotpo = $value;
    }

    /**
     * @param Numeric
     */
    public function setTotcost0($value) {
        $this->_totcost0 = $value;
    }

    /**
     * @param Numeric
     */
    public function setTax0($value) {
        $this->_tax0 = $value;
    }

    /**
     * @param Numeric
     */
    public function setTaxext($value) {
        $this->_taxext = $value;
    }

    /**
     * @param Numeric
     */
    public function setTaxext0($value) {
        $this->_taxext0 = $value;
    }

    /**
     * @param Numeric
     */
    public function setTaxpo($value) {
        $this->_taxpo = $value;
    }

    /**
     * @param Numeric
     */
    public function setTaxextpo($value) {
        $this->_taxextpo = $value;
    }

    /**
     * @param Numeric
     */
    public function setShippo($value) {
        $this->_shippo = $value;
    }

    /**
     * @param Numeric
     */
    public function setTotal0($value) {
        $this->_total0 = $value;
    }

    /**
     * @param Numeric
     */
    public function setTotalpo($value) {
        $this->_totalpo = $value;
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
    public function setDelivery($value) {
        $this->_delivery = $value;
    }

    /**
     * @param Char
     */
    public function setValidity($value) {
        $this->_validity = $value;
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
    public function setTotwght($value) {
        $this->_totwght = $value;
    }

    /**
     * @param Numeric
     */
    public function setPrepaid($value) {
        $this->_prepaid = $value;
    }

    /**
     * @param Char
     */
    public function setRefno($value) {
        $this->_refno = $value;
    }

    /**
     * @param Char
     */
    public function setPpdref($value) {
        $this->_ppdref = $value;
    }

    /**
     * @param Char
     */
    public function setCompany($value) {
        $this->_company = $value;
    }

    /**
     * @param Char
     */
    public function setAddress1($value) {
        $this->_address1 = $value;
    }

    /**
     * @param Char
     */
    public function setAddress2($value) {
        $this->_address2 = $value;
    }

    /**
     * @param Char
     */
    public function setAddress3($value) {
        $this->_address3 = $value;
    }

    /**
     * @param Char
     */
    public function setCity($value) {
        $this->_city = $value;
    }

    /**
     * @param Char
     */
    public function setState($value) {
        $this->_state = $value;
    }

    /**
     * @param Char
     */
    public function setZip($value) {
        $this->_zip = $value;
    }

    /**
     * @param Char
     */
    public function setCountry($value) {
        $this->_country = $value;
    }

    /**
     * @param Char
     */
    public function setShipid($value) {
        $this->_shipid = $value;
    }

    /**
     * @param Char
     */
    public function setShipto1($value) {
        $this->_shipto1 = $value;
    }

    /**
     * @param Char
     */
    public function setShipto2($value) {
        $this->_shipto2 = $value;
    }

    /**
     * @param Char
     */
    public function setShipto3($value) {
        $this->_shipto3 = $value;
    }

    /**
     * @param Char
     */
    public function setShipto4($value) {
        $this->_shipto4 = $value;
    }

    /**
     * @param Char
     */
    public function setShipto5($value) {
        $this->_shipto5 = $value;
    }

    /**
     * @param Char
     */
    public function setTermid($value) {
        $this->_termid = $value;
    }

    /**
     * @param Char
     */
    public function setUserflg($value) {
        $this->_userflg = $value;
    }

    /**
     * @param Numeric
     */
    public function setInvtype($value) {
        $this->_invtype = $value;
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
    public function setBlurb_id($value) {
        $this->_blurb_id = $value;
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
     * @param Char
     */
    public function setNflg1($value) {
        $this->_nflg1 = $value;
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
    public function setStatus($value) {
        $this->_status = $value;
    }

    /**
     * @param Date
     */
    public function setDtereview($value) {
        $this->_dtereview = $value;
    }

    /**
     * @param Date
     */
    public function setDtesigned($value) {
        $this->_dtesigned = $value;
    }

    /**
     * @param Date
     */
    public function setDteclose($value) {
        $this->_dteclose = $value;
    }

    /**
     * @param Numeric
     */
    public function setCartoons($value) {
        $this->_cartoons = $value;
    }

    /**
     * @param Numeric
     */
    public function setFreight($value) {
        $this->_freight = $value;
    }

    /**
     * @param Numeric
     */
    public function setCustdisc($value) {
        $this->_custdisc = $value;
    }

    /**
     * @param Char
     */
    public function setShipvname($value) {
        $this->_shipvname = $value;
    }

    /**
     * @param Char
     */
    public function setSalesmn1na($value) {
        $this->_salesmn1na = $value;
    }

    /**
     * @param Char
     */
    public function setSalesmn2na($value) {
        $this->_salesmn2na = $value;
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
    public function setPriceby($value) {
        $this->_priceby = $value;
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
    public function setSysstatus($value) {
        $this->_sysstatus = $value;
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
    public function setTaxrate($value) {
        $this->_taxrate = $value;
    }

    /**
     * @param Numeric
     */
    public function setTaxrate1($value) {
        $this->_taxrate1 = $value;
    }

    /**
     * @param Numeric
     */
    public function setTaxrate2($value) {
        $this->_taxrate2 = $value;
    }

    /**
     * @param Numeric
     */
    public function setTaxrate3($value) {
        $this->_taxrate3 = $value;
    }

    /**
     * @param Numeric
     */
    public function setTaxrate4($value) {
        $this->_taxrate4 = $value;
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
    public function setGlaracct($value) {
        $this->_glaracct = $value;
    }

    /**
     * @param Char
     */
    public function setFrghtpay($value) {
        $this->_frghtpay = $value;
    }

    /**
     * @param Char
     */
    public function setWhsno($value) {
        $this->_whsno = $value;
    }

    /**
     * @param Date
     */
    public function setDueday($value) {
        $this->_dueday = $value;
    }

    /**
     * @param Char
     */
    public function setDestino($value) {
        $this->_destino = $value;
    }

    /**
     * @param Char
     */
    public function setTrackno($value) {
        $this->_trackno = $value;
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
     * @param Logical
     */
    public function setDelete($value) {
        $this->_delete = $value;
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
    public function setAprvaldate($value) {
        $this->_aprvaldate = $value;
    }

    /**
     * @param Date
     */
    public function setNtaprvdate($value) {
        $this->_ntaprvdate = $value;
    }

    /**
     * @param Date
     */
    public function setRevdate($value) {
        $this->_revdate = $value;
    }

    /**
     * @param Date
     */
    public function setCsrdate($value) {
        $this->_csrdate = $value;
    }

    /**
     * @param Date
     */
    public function setSentdate($value) {
        $this->_sentdate = $value;
    }

    /**
     * @param Date
     */
    public function setPrparedate($value) {
        $this->_prparedate = $value;
    }

    /**
     * @param Date
     */
    public function setRfqdate($value) {
        $this->_rfqdate = $value;
    }

    /**
     * @param Numeric
     */
    public function setCloseprob($value) {
        $this->_closeprob = $value;
    }

    /**
     * @param Date
     */
    public function setAnclsedate($value) {
        $this->_anclsedate = $value;
    }

    /**
     * @param Numeric
     */
    public function setNextfllwup($value) {
        $this->_nextfllwup = $value;
    }

    /**
     * @param Numeric
     */
    public function setLoststatus($value) {
        $this->_loststatus = $value;
    }

    /**
     * @param Memo
     */
    public function setQuotecomm($value) {
        $this->_quotecomm = $value;
    }

    /**
     * @param Char
     */
    public function setPhone($value) {
        $this->_phone = $value;
    }

    /**
     * @param Char
     */
    public function setPhone1($value) {
        $this->_phone1 = $value;
    }

    /**
     * @param Char
     */
    public function setFax($value) {
        $this->_fax = $value;
    }

    /**
     * @param Char
     */
    public function setNoteflag($value) {
        $this->_noteflag = $value;
    }

    /**
     * @param Numeric
     */
    public function setTotbotdep($value) {
        $this->_totbotdep = $value;
    }

    /**
     * @param Char
     */
    public function setShpcompnam($value) {
        $this->_shpcompnam = $value;
    }

    /**
     * @param Char
     */
    public function setShpaddrs1($value) {
        $this->_shpaddrs1 = $value;
    }

    /**
     * @param Char
     */
    public function setShpaddrs2($value) {
        $this->_shpaddrs2 = $value;
    }

    /**
     * @param Char
     */
    public function setShpcity($value) {
        $this->_shpcity = $value;
    }

    /**
     * @param Char
     */
    public function setShpstate($value) {
        $this->_shpstate = $value;
    }

    /**
     * @param Char
     */
    public function setShpzip($value) {
        $this->_shpzip = $value;
    }

    /**
     * @param Char
     */
    public function setShpcountry($value) {
        $this->_shpcountry = $value;
    }

    /**
     * @param Char
     */
    public function setShpbillopt($value) {
        $this->_shpbillopt = $value;
    }

    /**
     * @param Char
     */
    public function setShpphone($value) {
        $this->_shpphone = $value;
    }

    /**
     * @param Char
     */
    public function setShpemail($value) {
        $this->_shpemail = $value;
    }

    /**
     * @param Char
     */
    public function setShpcontact($value) {
        $this->_shpcontact = $value;
    }

    /**
     * @param Char
     */
    public function setLocphone($value) {
        $this->_locphone = $value;
    }

    /**
     * @param Char
     */
    public function setLocationid($value) {
        $this->_locationid = $value;
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
    public function setQblistid($value) {
        $this->_qblistid = $value;
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
    public function setGldept($value) {
        $this->_gldept = $value;
    }

    /**
     * @param Logical
     */
    public function setDelflag($value) {
        $this->_delflag = $value;
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
     * @param Logical
     */
    public function setTosoflag($value) {
        $this->_tosoflag = $value;
    }

    /**
     * @param TimeStamp
     */
    public function setTosodate($value) {
        $this->_tosodate = $value;
    }

    /**
     * @param Char
     */
    public function setTosouserid($value) {
        $this->_tosouserid = $value;
    }

    /**
     * @param Logical
     */
    public function setToivflag($value) {
        $this->_toivflag = $value;
    }

    /**
     * @param TimeStamp
     */
    public function setToivdate($value) {
        $this->_toivdate = $value;
    }

    /**
     * @param Char
     */
    public function setToivuserid($value) {
        $this->_toivuserid = $value;
    }

    /**
     * @param Logical
     */
    public function setTopoflag($value) {
        $this->_topoflag = $value;
    }

    /**
     * @param TimeStamp
     */
    public function setTopodate($value) {
        $this->_topodate = $value;
    }

    /**
     * @param Char
     */
    public function setTopouserid($value) {
        $this->_topouserid = $value;
    }

    /**
     * @param Char
     */
    public function setProjno($value) {
        $this->_projno = $value;
    }

    /**
     * Constructor
     */
    public function __construct($qutno, $qutdate, $qutreqno, $qutstat, $qutspcl, $ordnum, $invno, $source, $closecomm, $inhsecomm, $ponum, $custno, $commission, $comslmn, $comslmn2, $salesmn, $salesmn2, $indust, $terr, $class, $fobstat, $shipvia, $shipstat, $shipfrom, $termdesc, $termdesc1, $subtotal, $disc, $discount, $msubtotal, $txrt, $tax, $shipping, $total, $totcost, $subtotal0, $subtotpo, $totcost0, $tax0, $taxext, $taxext0, $taxpo, $taxextpo, $shippo, $total0, $totalpo, $shipdate, $delivery, $validity, $frghts, $totwght, $prepaid, $refno, $ppdref, $company, $address1, $address2, $address3, $city, $state, $zip, $country, $shipid, $shipto1, $shipto2, $shipto3, $shipto4, $shipto5, $termid, $userflg, $invtype, $key, $blurb_id, $fuserid, $fstation, $nflg1, $invdate, $podate, $pono, $status, $dtereview, $dtesigned, $dteclose, $cartoons, $freight, $custdisc, $shipvname, $salesmn1na, $salesmn2na, $nflg0, $priceby, $swordnum, $sysstatus, $websyncflg, $taxrate, $taxrate1, $taxrate2, $taxrate3, $taxrate4, $ftaxcode, $glaracct, $frghtpay, $whsno, $dueday, $destino, $trackno, $fupddate, $fupdtime, $sourceno, $srctype, $delete, $newuserid, $newstation, $newdtetime, $aprvaldate, $ntaprvdate, $revdate, $csrdate, $sentdate, $prparedate, $rfqdate, $closeprob, $anclsedate, $nextfllwup, $loststatus, $quotecomm, $phone, $phone1, $fax, $noteflag, $totbotdep, $shpcompnam, $shpaddrs1, $shpaddrs2, $shpcity, $shpstate, $shpzip, $shpcountry, $shpbillopt, $shpphone, $shpemail, $shpcontact, $locphone, $locationid, $sotypecode, $sotype, $qblistid, $cstctid, $gldept, $delflag, $deldate, $deluserid, $tosoflag, $tosodate, $tosouserid, $toivflag, $toivdate, $toivuserid, $topoflag, $topodate, $topouserid, $projno) {
        $this->_qutno = $qutno;
        $this->_qutdate = $qutdate;
        $this->_qutreqno = $qutreqno;
        $this->_qutstat = $qutstat;
        $this->_qutspcl = $qutspcl;
        $this->_ordnum = $ordnum;
        $this->_invno = $invno;
        $this->_source = $source;
        $this->_closecomm = $closecomm;
        $this->_inhsecomm = $inhsecomm;
        $this->_ponum = $ponum;
        $this->_custno = $custno;
        $this->_commission = $commission;
        $this->_comslmn = $comslmn;
        $this->_comslmn2 = $comslmn2;
        $this->_salesmn = $salesmn;
        $this->_salesmn2 = $salesmn2;
        $this->_indust = $indust;
        $this->_terr = $terr;
        $this->_class = $class;
        $this->_fobstat = $fobstat;
        $this->_shipvia = $shipvia;
        $this->_shipstat = $shipstat;
        $this->_shipfrom = $shipfrom;
        $this->_termdesc = $termdesc;
        $this->_termdesc1 = $termdesc1;
        $this->_subtotal = $subtotal;
        $this->_disc = $disc;
        $this->_discount = $discount;
        $this->_msubtotal = $msubtotal;
        $this->_txrt = $txrt;
        $this->_tax = $tax;
        $this->_shipping = $shipping;
        $this->_total = $total;
        $this->_totcost = $totcost;
        $this->_subtotal0 = $subtotal0;
        $this->_subtotpo = $subtotpo;
        $this->_totcost0 = $totcost0;
        $this->_tax0 = $tax0;
        $this->_taxext = $taxext;
        $this->_taxext0 = $taxext0;
        $this->_taxpo = $taxpo;
        $this->_taxextpo = $taxextpo;
        $this->_shippo = $shippo;
        $this->_total0 = $total0;
        $this->_totalpo = $totalpo;
        $this->_shipdate = $shipdate;
        $this->_delivery = $delivery;
        $this->_validity = $validity;
        $this->_frghts = $frghts;
        $this->_totwght = $totwght;
        $this->_prepaid = $prepaid;
        $this->_refno = $refno;
        $this->_ppdref = $ppdref;
        $this->_company = $company;
        $this->_address1 = $address1;
        $this->_address2 = $address2;
        $this->_address3 = $address3;
        $this->_city = $city;
        $this->_state = $state;
        $this->_zip = $zip;
        $this->_country = $country;
        $this->_shipid = $shipid;
        $this->_shipto1 = $shipto1;
        $this->_shipto2 = $shipto2;
        $this->_shipto3 = $shipto3;
        $this->_shipto4 = $shipto4;
        $this->_shipto5 = $shipto5;
        $this->_termid = $termid;
        $this->_userflg = $userflg;
        $this->_invtype = $invtype;
        $this->_key = $key;
        $this->_blurb_id = $blurb_id;
        $this->_fuserid = $fuserid;
        $this->_fstation = $fstation;
        $this->_nflg1 = $nflg1;
        $this->_invdate = $invdate;
        $this->_podate = $podate;
        $this->_pono = $pono;
        $this->_status = $status;
        $this->_dtereview = $dtereview;
        $this->_dtesigned = $dtesigned;
        $this->_dteclose = $dteclose;
        $this->_cartoons = $cartoons;
        $this->_freight = $freight;
        $this->_custdisc = $custdisc;
        $this->_shipvname = $shipvname;
        $this->_salesmn1na = $salesmn1na;
        $this->_salesmn2na = $salesmn2na;
        $this->_nflg0 = $nflg0;
        $this->_priceby = $priceby;
        $this->_swordnum = $swordnum;
        $this->_sysstatus = $sysstatus;
        $this->_websyncflg = $websyncflg;
        $this->_taxrate = $taxrate;
        $this->_taxrate1 = $taxrate1;
        $this->_taxrate2 = $taxrate2;
        $this->_taxrate3 = $taxrate3;
        $this->_taxrate4 = $taxrate4;
        $this->_ftaxcode = $ftaxcode;
        $this->_glaracct = $glaracct;
        $this->_frghtpay = $frghtpay;
        $this->_whsno = $whsno;
        $this->_dueday = $dueday;
        $this->_destino = $destino;
        $this->_trackno = $trackno;
        $this->_fupddate = $fupddate;
        $this->_fupdtime = $fupdtime;
        $this->_sourceno = $sourceno;
        $this->_srctype = $srctype;
        $this->_delete = $delete;
        $this->_newuserid = $newuserid;
        $this->_newstation = $newstation;
        $this->_newdtetime = $newdtetime;
        $this->_aprvaldate = $aprvaldate;
        $this->_ntaprvdate = $ntaprvdate;
        $this->_revdate = $revdate;
        $this->_csrdate = $csrdate;
        $this->_sentdate = $sentdate;
        $this->_prparedate = $prparedate;
        $this->_rfqdate = $rfqdate;
        $this->_closeprob = $closeprob;
        $this->_anclsedate = $anclsedate;
        $this->_nextfllwup = $nextfllwup;
        $this->_loststatus = $loststatus;
        $this->_quotecomm = $quotecomm;
        $this->_phone = $phone;
        $this->_phone1 = $phone1;
        $this->_fax = $fax;
        $this->_noteflag = $noteflag;
        $this->_totbotdep = $totbotdep;
        $this->_shpcompnam = $shpcompnam;
        $this->_shpaddrs1 = $shpaddrs1;
        $this->_shpaddrs2 = $shpaddrs2;
        $this->_shpcity = $shpcity;
        $this->_shpstate = $shpstate;
        $this->_shpzip = $shpzip;
        $this->_shpcountry = $shpcountry;
        $this->_shpbillopt = $shpbillopt;
        $this->_shpphone = $shpphone;
        $this->_shpemail = $shpemail;
        $this->_shpcontact = $shpcontact;
        $this->_locphone = $locphone;
        $this->_locationid = $locationid;
        $this->_sotypecode = $sotypecode;
        $this->_sotype = $sotype;
        $this->_qblistid = $qblistid;
        $this->_cstctid = $cstctid;
        $this->_gldept = $gldept;
        $this->_delflag = $delflag;
        $this->_deldate = $deldate;
        $this->_deluserid = $deluserid;
        $this->_tosoflag = $tosoflag;
        $this->_tosodate = $tosodate;
        $this->_tosouserid = $tosouserid;
        $this->_toivflag = $toivflag;
        $this->_toivdate = $toivdate;
        $this->_toivuserid = $toivuserid;
        $this->_topoflag = $topoflag;
        $this->_topodate = $topodate;
        $this->_topouserid = $topouserid;
        $this->_projno = $projno;
    }

    public static function toString() {
        return self::$_name;
    }

}
