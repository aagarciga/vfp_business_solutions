<?php

/**
 * Project:  VFP Business Series
 * Copyright: 2014. VFP Business Solutions, LLC
 */

namespace Dandelion\MVC\Application\Models\Entities\Base;

/**
 * BaseSOHEAD
 */
class BaseSOHEAD {

    /**
     * Private fields
     */
    private static $_name = "SOHEAD";

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
    protected $_invno;

    /**
     * @var Numeric
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
    protected $_ponum;

    /**
     * @var Char
     */
    protected $_vendno;

    /**
     * @var Date
     */
    protected $_podate;

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
    protected $_fitemtype;

    /**
     * @var Numeric
     */
    protected $_ftotcost;

    /**
     * @var Char
     */
    protected $_fcosttype;

    /**
     * @var Numeric
     */
    protected $_period;

    /**
     * @var Char
     */
    protected $_salesmn;

    /**
     * @var Numeric
     */
    protected $_commission;

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
    protected $_salesmn1na;

    /**
     * @var Char
     */
    protected $_salesmn2na;

    /**
     * @var Char
     */
    protected $_priceby;

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
    protected $_fclass;

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
    protected $_shipvname;

    /**
     * @var Char
     */
    protected $_shipstat;

    /**
     * @var Char
     */
    protected $_frghts;

    /**
     * @var Char
     */
    protected $_termid;

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
    protected $_subtotal0;

    /**
     * @var Numeric
     */
    protected $_discount;

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
    protected $_tax;

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
    protected $_itemtax;

    /**
     * @var Numeric
     */
    protected $_itemtax0;

    /**
     * @var Char
     */
    protected $_ftaxcode;

    /**
     * @var Numeric
     */
    protected $_shipping;

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
     * @var Numeric
     */
    protected $_total;

    /**
     * @var Numeric
     */
    protected $_total0;

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
     * @var Date
     */
    protected $_dueday;

    /**
     * @var Date
     */
    protected $_discday;

    /**
     * @var Numeric
     */
    protected $_disc;

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
     * @var Char
     */
    protected $_fblurb_id;

    /**
     * @var Char
     */
    protected $_itmcount;

    /**
     * @var Numeric
     */
    protected $_totcost;

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
    protected $_validity;

    /**
     * @var Char
     */
    protected $_shipfrom;

    /**
     * @var Numeric
     */
    protected $_msubtotal;

    /**
     * @var Char
     */
    protected $_delivery;

    /**
     * @var Char
     */
    protected $_vessel;

    /**
     * @var Char
     */
    protected $_relport;

    /**
     * @var Char
     */
    protected $_destino;

    /**
     * @var Char
     */
    protected $_car;

    /**
     * @var Char
     */
    protected $_cigsn;

    /**
     * @var Logical
     */
    protected $_pticket;

    /**
     * @var Char
     */
    protected $_source;

    /**
     * @var Numeric
     */
    protected $_cartoons;

    /**
     * @var Numeric
     */
    protected $_freight;

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
    protected $_custdisc;

    /**
     * @var Numeric
     */
    protected $_subtotalpo;

    /**
     * @var Numeric
     */
    protected $_discountpo;

    /**
     * @var Numeric
     */
    protected $_shippingpo;

    /**
     * @var Numeric
     */
    protected $_txrtpo;

    /**
     * @var Numeric
     */
    protected $_taxpo;

    /**
     * @var Numeric
     */
    protected $_totalpo;

    /**
     * @var Date
     */
    protected $_reqdat;

    /**
     * @var Date
     */
    protected $_compdate;

    /**
     * @var Logical
     */
    protected $_holdstatus;

    /**
     * @var Char
     */
    protected $_sostatus;

    /**
     * @var Date
     */
    protected $_reqdate;

    /**
     * @var Numeric
     */
    protected $_sorevno;

    /**
     * @var Char
     */
    protected $_swordnum;

    /**
     * @var Char
     */
    protected $_sotype;

    /**
     * @var Numeric
     */
    protected $_msubtotal0;

    /**
     * @var Numeric
     */
    protected $_discount0;

    /**
     * @var Char
     */
    protected $_whsno;

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
    protected $_glaracct;

    /**
     * @var Char
     */
    protected $_authref;

    /**
     * @var Char
     */
    protected $_recvia;

    /**
     * @var Char
     */
    protected $_recvianame;

    /**
     * @var Numeric
     */
    protected $_labreq;

    /**
     * @var Char
     */
    protected $_rrtype;

    /**
     * @var Char
     */
    protected $_frghtpay;

    /**
     * @var Char
     */
    protected $_verify;

    /**
     * @var Char
     */
    protected $_swlock;

    /**
     * @var Date,
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
    protected $_currid;

    /**
     * @var Numeric
     */
    protected $_orgvalue;

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
    protected $_cstctid;

    /**
     * @var Char
     */
    protected $_schdstatus;

    /**
     * @var Char
     */
    protected $_inspectno;

    /**
     * @var Char
     */
    protected $_swcallinby;

    /**
     * @var Char
     */
    protected $_zone;

    /**
     * @var Char
     */
    protected $_area;

    /**
     * @var Char
     */
    protected $_swrecvby;

    /**
     * @var Char
     */
    protected $_swrectime;

    /**
     * @var Numeric
     */
    protected $_traveltime;

    /**
     * @var Logical,
     */
    protected $_chrgmile;

    /**
     * @var Logical,
     */
    protected $_halfmile;

    /**
     * @var Memo,
     */
    protected $_technotes;

    /**
     * @var Logical,
     */
    protected $_billable;

    /**
     * @var Logical,
     */
    protected $_warranty;

    /**
     * @var Logical,
     */
    protected $_emergency;

    /**
     * @var Logical,
     */
    protected $_priority;

    /**
     * @var Logical,
     */
    protected $_charge15;

    /**
     * @var Logical,
     */
    protected $_charge2x;

    /**
     * @var Logical,
     */
    protected $_contract;

    /**
     * @var Logical,
     */
    protected $_quotedjob;

    /**
     * @var Date,
     */
    protected $_dateschd;

    /**
     * @var Char
     */
    protected $_timeschd;

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
    protected $_eqmake;

    /**
     * @var Char
     */
    protected $_eqmodel;

    /**
     * @var Char
     */
    protected $_eqserialno;

    /**
     * @var Char
     */
    protected $_locationid;

    /**
     * @var Char
     */
    protected $_location;

    /**
     * @var Date,
     */
    protected $_datecallsh;

    /**
     * @var Char
     */
    protected $_timecallsh;

    /**
     * @var Char
     */
    protected $_docprefix;

    /**
     * @var Char
     */
    protected $_locphone;

    /**
     * @var Numeric
     */
    protected $_swretrips;

    /**
     * @var Memo,
     */
    protected $_swinspothr;

    /**
     * @var Char
     */
    protected $_userschd;

    /**
     * @var Char
     */
    protected $_gldept;

    /**
     * @var Memo,
     */
    protected $_chgnotes;

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
     * @var Memo,
     */
    protected $_shipcomm;

    /**
     * @var Date,
     */
    protected $_pickdateok;

    /**
     * @var Date,
     */
    protected $_notbefordt;

    /**
     * @var Logical,
     */
    protected $_oktopick;

    /**
     * @var Char
     */
    protected $_sotypecode;

    /**
     * @var Date,
     */
    protected $_consdate;

    /**
     * @var Logical,
     */
    protected $_ownretail;

    /**
     * @var Logical,
     */
    protected $_bidorder;

    /**
     * @var Date,
     */
    protected $_biddate;

    /**
     * @var Logical,
     */
    protected $_quickship;

    /**
     * @var Char
     */
    protected $_gltaxacct;

    /**
     * @var Logical,
     */
    protected $_suspend;

    /**
     * @var Char
     */
    protected $_wmsstatus;

    /**
     * @var Logical,
     */
    protected $_insurflag;

    /**
     * @var Char
     */
    protected $_distchan;

    /**
     * @var Logical,
     */
    protected $_normaflag;

    /**
     * @var Date,
     */
    protected $_rmadate;

    /**
     * @var Char
     */
    protected $_pormoflag;

    /**
     * @var Date,
     */
    protected $_allocadate;

    /**
     * @var Date,
     */
    protected $_datehold;

    /**
     * @var Numeric
     */
    protected $_nopayments;

    /**
     * @var Numeric
     */
    protected $_startdays;

    /**
     * @var Numeric
     */
    protected $_totaldays;

    /**
     * @var Logical,
     */
    protected $_specterms;

    /**
     * @var Numeric
     */
    protected $_specteramt;

    /**
     * @var Numeric
     */
    protected $_payfreqday;

    /**
     * @var Date,
     */
    protected $_startdate;

    /**
     * @var Logical,
     */
    protected $_s_routine;

    /**
     * @var Char
     */
    protected $_comptime;

    /**
     * @var Logical,
     */
    protected $_compstat;

    /**
     * @var Char
     */
    protected $_arvltime;

    /**
     * @var Char
     */
    protected $_driverlic;

    /**
     * @var Numeric
     */
    protected $_totweight0;

    /**
     * @var Numeric
     */
    protected $_totalbal;

    /**
     * @var Logical,
     */
    protected $_printflag;

    /**
     * @var Date,
     */
    protected $_estshpdate;

    /**
     * @var Logical,
     */
    protected $_budaddaprv;

    /**
     * @var Logical,
     */
    protected $_commset;

    /**
     * @var Date,
     */
    protected $_commsetdte;

    /**
     * @var Numeric
     */
    protected $_retresvtot;

    /**
     * @var Numeric
     */
    protected $_totamtsave;

    /**
     * @var Logical,
     */
    protected $_qbsyncstat;

    /**
     * @var Char
     */
    protected $_ivrefno;

    /**
     * @var Date,
     */
    protected $_dtrstart;

    /**
     * @var Date,
     */
    protected $_dtrend;

    /**
     * @var Numeric
     */
    protected $_totbotdep;

    /**
     * @var Date,
     */
    protected $_prostartdt;

    /**
     * @var Date,
     */
    protected $_proenddt;

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
    protected $_qblistid;

    /**
     * @var Logical,
     */
    protected $_blindship;

    /**
     * @var Logical,
     */
    protected $_ediflag;

    /**
     * @var Date,
     */
    protected $_edidate;

    /**
     * @var Logical,
     */
    protected $_edibck;

    /**
     * @var Char
     */
    protected $_importkey;

    /**
     * @var Char
     */
    protected $_qutno;

    /**
     * @var Logical,
     */
    protected $_splitpick;

    /**
     * @var Char
     */
    protected $_cc_refno;

    /**
     * @var Numeric
     */
    protected $_cc_amtrec;

    /**
     * @var Char
     */
    protected $_cc_paytype;

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
    public function getInvno() {
        return $this->_invno;
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
    public function getPodate() {
        return $this->_podate;
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
    public function getFitemtype() {
        return $this->_fitemtype;
    }

    /**
     * @return Numeric
     */
    public function getFtotcost() {
        return $this->_ftotcost;
    }

    /**
     * @return Char
     */
    public function getFcosttype() {
        return $this->_fcosttype;
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
    public function getSalesmn() {
        return $this->_salesmn;
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
     * @return Char
     */
    public function getPriceby() {
        return $this->_priceby;
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
    public function getFclass() {
        return $this->_fclass;
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
    public function getShipvname() {
        return $this->_shipvname;
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
    public function getFrghts() {
        return $this->_frghts;
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
    public function getSubtotal0() {
        return $this->_subtotal0;
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
    public function getTax() {
        return $this->_tax;
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
    public function getFtaxcode() {
        return $this->_ftaxcode;
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
     * @return Numeric
     */
    public function getTotal() {
        return $this->_total;
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
     * @return Date
     */
    public function getDueday() {
        return $this->_dueday;
    }

    /**
     * @return Date
     */
    public function getDiscday() {
        return $this->_discday;
    }

    /**
     * @return Numeric
     */
    public function getDisc() {
        return $this->_disc;
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
     * @return Char
     */
    public function getFblurb_id() {
        return $this->_fblurb_id;
    }

    /**
     * @return Char
     */
    public function getItmcount() {
        return $this->_itmcount;
    }

    /**
     * @return Numeric
     */
    public function getTotcost() {
        return $this->_totcost;
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
    public function getValidity() {
        return $this->_validity;
    }

    /**
     * @return Char
     */
    public function getShipfrom() {
        return $this->_shipfrom;
    }

    /**
     * @return Numeric
     */
    public function getMsubtotal() {
        return $this->_msubtotal;
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
    public function getVessel() {
        return $this->_vessel;
    }

    /**
     * @return Char
     */
    public function getRelport() {
        return $this->_relport;
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
    public function getCar() {
        return $this->_car;
    }

    /**
     * @return Char
     */
    public function getCigsn() {
        return $this->_cigsn;
    }

    /**
     * @return Logical
     */
    public function getPticket() {
        return $this->_pticket;
    }

    /**
     * @return Char
     */
    public function getSource() {
        return $this->_source;
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
    public function getCustdisc() {
        return $this->_custdisc;
    }

    /**
     * @return Numeric
     */
    public function getSubtotalpo() {
        return $this->_subtotalpo;
    }

    /**
     * @return Numeric
     */
    public function getDiscountpo() {
        return $this->_discountpo;
    }

    /**
     * @return Numeric
     */
    public function getShippingpo() {
        return $this->_shippingpo;
    }

    /**
     * @return Numeric
     */
    public function getTxrtpo() {
        return $this->_txrtpo;
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
    public function getTotalpo() {
        return $this->_totalpo;
    }

    /**
     * @return Date
     */
    public function getReqdat() {
        return $this->_reqdat;
    }

    /**
     * @return Date
     */
    public function getCompdate() {
        return $this->_compdate;
    }

    /**
     * @return Logical
     */
    public function getHoldstatus() {
        return $this->_holdstatus;
    }

    /**
     * @return Char
     */
    public function getSostatus() {
        return $this->_sostatus;
    }

    /**
     * @return Date
     */
    public function getReqdate() {
        return $this->_reqdate;
    }

    /**
     * @return Numeric
     */
    public function getSorevno() {
        return $this->_sorevno;
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
     * @return Numeric
     */
    public function getMsubtotal0() {
        return $this->_msubtotal0;
    }

    /**
     * @return Numeric
     */
    public function getDiscount0() {
        return $this->_discount0;
    }

    /**
     * @return Char
     */
    public function getWhsno() {
        return $this->_whsno;
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
    public function getGlaracct() {
        return $this->_glaracct;
    }

    /**
     * @return Char
     */
    public function getAuthref() {
        return $this->_authref;
    }

    /**
     * @return Char
     */
    public function getRecvia() {
        return $this->_recvia;
    }

    /**
     * @return Char
     */
    public function getRecvianame() {
        return $this->_recvianame;
    }

    /**
     * @return Numeric
     */
    public function getLabreq() {
        return $this->_labreq;
    }

    /**
     * @return Char
     */
    public function getRrtype() {
        return $this->_rrtype;
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
    public function getVerify() {
        return $this->_verify;
    }

    /**
     * @return Char
     */
    public function getSwlock() {
        return $this->_swlock;
    }

    /**
     * @return Date,
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
    public function getCurrid() {
        return $this->_currid;
    }

    /**
     * @return Numeric
     */
    public function getOrgvalue() {
        return $this->_orgvalue;
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
    public function getCstctid() {
        return $this->_cstctid;
    }

    /**
     * @return Char
     */
    public function getSchdstatus() {
        return $this->_schdstatus;
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
    public function getSwcallinby() {
        return $this->_swcallinby;
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
    public function getArea() {
        return $this->_area;
    }

    /**
     * @return Char
     */
    public function getSwrecvby() {
        return $this->_swrecvby;
    }

    /**
     * @return Char
     */
    public function getSwrectime() {
        return $this->_swrectime;
    }

    /**
     * @return Numeric
     */
    public function getTraveltime() {
        return $this->_traveltime;
    }

    /**
     * @return Logical,
     */
    public function getChrgmile() {
        return $this->_chrgmile;
    }

    /**
     * @return Logical,
     */
    public function getHalfmile() {
        return $this->_halfmile;
    }

    /**
     * @return Memo,
     */
    public function getTechnotes() {
        return $this->_technotes;
    }

    /**
     * @return Logical,
     */
    public function getBillable() {
        return $this->_billable;
    }

    /**
     * @return Logical,
     */
    public function getWarranty() {
        return $this->_warranty;
    }

    /**
     * @return Logical,
     */
    public function getEmergency() {
        return $this->_emergency;
    }

    /**
     * @return Logical,
     */
    public function getPriority() {
        return $this->_priority;
    }

    /**
     * @return Logical,
     */
    public function getCharge15() {
        return $this->_charge15;
    }

    /**
     * @return Logical,
     */
    public function getCharge2x() {
        return $this->_charge2x;
    }

    /**
     * @return Logical,
     */
    public function getContract() {
        return $this->_contract;
    }

    /**
     * @return Logical,
     */
    public function getQuotedjob() {
        return $this->_quotedjob;
    }

    /**
     * @return Date,
     */
    public function getDateschd() {
        return $this->_dateschd;
    }

    /**
     * @return Char
     */
    public function getTimeschd() {
        return $this->_timeschd;
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
    public function getEqmake() {
        return $this->_eqmake;
    }

    /**
     * @return Char
     */
    public function getEqmodel() {
        return $this->_eqmodel;
    }

    /**
     * @return Char
     */
    public function getEqserialno() {
        return $this->_eqserialno;
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
    public function getLocation() {
        return $this->_location;
    }

    /**
     * @return Date,
     */
    public function getDatecallsh() {
        return $this->_datecallsh;
    }

    /**
     * @return Char
     */
    public function getTimecallsh() {
        return $this->_timecallsh;
    }

    /**
     * @return Char
     */
    public function getDocprefix() {
        return $this->_docprefix;
    }

    /**
     * @return Char
     */
    public function getLocphone() {
        return $this->_locphone;
    }

    /**
     * @return Numeric
     */
    public function getSwretrips() {
        return $this->_swretrips;
    }

    /**
     * @return Memo,
     */
    public function getSwinspothr() {
        return $this->_swinspothr;
    }

    /**
     * @return Char
     */
    public function getUserschd() {
        return $this->_userschd;
    }

    /**
     * @return Char
     */
    public function getGldept() {
        return $this->_gldept;
    }

    /**
     * @return Memo,
     */
    public function getChgnotes() {
        return $this->_chgnotes;
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
     * @return Memo,
     */
    public function getShipcomm() {
        return $this->_shipcomm;
    }

    /**
     * @return Date,
     */
    public function getPickdateok() {
        return $this->_pickdateok;
    }

    /**
     * @return Date,
     */
    public function getNotbefordt() {
        return $this->_notbefordt;
    }

    /**
     * @return Logical,
     */
    public function getOktopick() {
        return $this->_oktopick;
    }

    /**
     * @return Char
     */
    public function getSotypecode() {
        return $this->_sotypecode;
    }

    /**
     * @return Date,
     */
    public function getConsdate() {
        return $this->_consdate;
    }

    /**
     * @return Logical,
     */
    public function getOwnretail() {
        return $this->_ownretail;
    }

    /**
     * @return Logical,
     */
    public function getBidorder() {
        return $this->_bidorder;
    }

    /**
     * @return Date,
     */
    public function getBiddate() {
        return $this->_biddate;
    }

    /**
     * @return Logical,
     */
    public function getQuickship() {
        return $this->_quickship;
    }

    /**
     * @return Char
     */
    public function getGltaxacct() {
        return $this->_gltaxacct;
    }

    /**
     * @return Logical,
     */
    public function getSuspend() {
        return $this->_suspend;
    }

    /**
     * @return Char
     */
    public function getWmsstatus() {
        return $this->_wmsstatus;
    }

    /**
     * @return Logical,
     */
    public function getInsurflag() {
        return $this->_insurflag;
    }

    /**
     * @return Char
     */
    public function getDistchan() {
        return $this->_distchan;
    }

    /**
     * @return Logical,
     */
    public function getNormaflag() {
        return $this->_normaflag;
    }

    /**
     * @return Date,
     */
    public function getRmadate() {
        return $this->_rmadate;
    }

    /**
     * @return Char
     */
    public function getPormoflag() {
        return $this->_pormoflag;
    }

    /**
     * @return Date,
     */
    public function getAllocadate() {
        return $this->_allocadate;
    }

    /**
     * @return Date,
     */
    public function getDatehold() {
        return $this->_datehold;
    }

    /**
     * @return Numeric
     */
    public function getNopayments() {
        return $this->_nopayments;
    }

    /**
     * @return Numeric
     */
    public function getStartdays() {
        return $this->_startdays;
    }

    /**
     * @return Numeric
     */
    public function getTotaldays() {
        return $this->_totaldays;
    }

    /**
     * @return Logical,
     */
    public function getSpecterms() {
        return $this->_specterms;
    }

    /**
     * @return Numeric
     */
    public function getSpecteramt() {
        return $this->_specteramt;
    }

    /**
     * @return Numeric
     */
    public function getPayfreqday() {
        return $this->_payfreqday;
    }

    /**
     * @return Date,
     */
    public function getStartdate() {
        return $this->_startdate;
    }

    /**
     * @return Logical,
     */
    public function getS_routine() {
        return $this->_s_routine;
    }

    /**
     * @return Char
     */
    public function getComptime() {
        return $this->_comptime;
    }

    /**
     * @return Logical,
     */
    public function getCompstat() {
        return $this->_compstat;
    }

    /**
     * @return Char
     */
    public function getArvltime() {
        return $this->_arvltime;
    }

    /**
     * @return Char
     */
    public function getDriverlic() {
        return $this->_driverlic;
    }

    /**
     * @return Numeric
     */
    public function getTotweight0() {
        return $this->_totweight0;
    }

    /**
     * @return Numeric
     */
    public function getTotalbal() {
        return $this->_totalbal;
    }

    /**
     * @return Logical,
     */
    public function getPrintflag() {
        return $this->_printflag;
    }

    /**
     * @return Date,
     */
    public function getEstshpdate() {
        return $this->_estshpdate;
    }

    /**
     * @return Logical,
     */
    public function getBudaddaprv() {
        return $this->_budaddaprv;
    }

    /**
     * @return Logical,
     */
    public function getCommset() {
        return $this->_commset;
    }

    /**
     * @return Date,
     */
    public function getCommsetdte() {
        return $this->_commsetdte;
    }

    /**
     * @return Numeric
     */
    public function getRetresvtot() {
        return $this->_retresvtot;
    }

    /**
     * @return Numeric
     */
    public function getTotamtsave() {
        return $this->_totamtsave;
    }

    /**
     * @return Logical,
     */
    public function getQbsyncstat() {
        return $this->_qbsyncstat;
    }

    /**
     * @return Char
     */
    public function getIvrefno() {
        return $this->_ivrefno;
    }

    /**
     * @return Date,
     */
    public function getDtrstart() {
        return $this->_dtrstart;
    }

    /**
     * @return Date,
     */
    public function getDtrend() {
        return $this->_dtrend;
    }

    /**
     * @return Numeric
     */
    public function getTotbotdep() {
        return $this->_totbotdep;
    }

    /**
     * @return Date,
     */
    public function getProstartdt() {
        return $this->_prostartdt;
    }

    /**
     * @return Date,
     */
    public function getProenddt() {
        return $this->_proenddt;
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
    public function getQblistid() {
        return $this->_qblistid;
    }

    /**
     * @return Logical,
     */
    public function getBlindship() {
        return $this->_blindship;
    }

    /**
     * @return Logical,
     */
    public function getEdiflag() {
        return $this->_ediflag;
    }

    /**
     * @return Date,
     */
    public function getEdidate() {
        return $this->_edidate;
    }

    /**
     * @return Logical,
     */
    public function getEdibck() {
        return $this->_edibck;
    }

    /**
     * @return Char
     */
    public function getImportkey() {
        return $this->_importkey;
    }

    /**
     * @return Char
     */
    public function getQutno() {
        return $this->_qutno;
    }

    /**
     * @return Logical,
     */
    public function getSplitpick() {
        return $this->_splitpick;
    }

    /**
     * @return Char
     */
    public function getCc_refno() {
        return $this->_cc_refno;
    }

    /**
     * @return Numeric
     */
    public function getCc_amtrec() {
        return $this->_cc_amtrec;
    }

    /**
     * @return Char
     */
    public function getCc_paytype() {
        return $this->_cc_paytype;
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
    public function setInvno($value) {
        $this->_invno = $value;
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
    public function setPodate($value) {
        $this->_podate = $value;
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
    public function setFitemtype($value) {
        $this->_fitemtype = $value;
    }

    /**
     * @param Numeric
     */
    public function setFtotcost($value) {
        $this->_ftotcost = $value;
    }

    /**
     * @param Char
     */
    public function setFcosttype($value) {
        $this->_fcosttype = $value;
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
    public function setSalesmn($value) {
        $this->_salesmn = $value;
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
     * @param Char
     */
    public function setPriceby($value) {
        $this->_priceby = $value;
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
    public function setFclass($value) {
        $this->_fclass = $value;
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
    public function setShipvname($value) {
        $this->_shipvname = $value;
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
    public function setFrghts($value) {
        $this->_frghts = $value;
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
    public function setSubtotal0($value) {
        $this->_subtotal0 = $value;
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
    public function setTax($value) {
        $this->_tax = $value;
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
    public function setFtaxcode($value) {
        $this->_ftaxcode = $value;
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
     * @param Numeric
     */
    public function setTotal($value) {
        $this->_total = $value;
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
     * @param Date
     */
    public function setDueday($value) {
        $this->_dueday = $value;
    }

    /**
     * @param Date
     */
    public function setDiscday($value) {
        $this->_discday = $value;
    }

    /**
     * @param Numeric
     */
    public function setDisc($value) {
        $this->_disc = $value;
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
     * @param Char
     */
    public function setFblurb_id($value) {
        $this->_fblurb_id = $value;
    }

    /**
     * @param Char
     */
    public function setItmcount($value) {
        $this->_itmcount = $value;
    }

    /**
     * @param Numeric
     */
    public function setTotcost($value) {
        $this->_totcost = $value;
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
    public function setValidity($value) {
        $this->_validity = $value;
    }

    /**
     * @param Char
     */
    public function setShipfrom($value) {
        $this->_shipfrom = $value;
    }

    /**
     * @param Numeric
     */
    public function setMsubtotal($value) {
        $this->_msubtotal = $value;
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
    public function setVessel($value) {
        $this->_vessel = $value;
    }

    /**
     * @param Char
     */
    public function setRelport($value) {
        $this->_relport = $value;
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
    public function setCar($value) {
        $this->_car = $value;
    }

    /**
     * @param Char
     */
    public function setCigsn($value) {
        $this->_cigsn = $value;
    }

    /**
     * @param Logical
     */
    public function setPticket($value) {
        $this->_pticket = $value;
    }

    /**
     * @param Char
     */
    public function setSource($value) {
        $this->_source = $value;
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
    public function setCustdisc($value) {
        $this->_custdisc = $value;
    }

    /**
     * @param Numeric
     */
    public function setSubtotalpo($value) {
        $this->_subtotalpo = $value;
    }

    /**
     * @param Numeric
     */
    public function setDiscountpo($value) {
        $this->_discountpo = $value;
    }

    /**
     * @param Numeric
     */
    public function setShippingpo($value) {
        $this->_shippingpo = $value;
    }

    /**
     * @param Numeric
     */
    public function setTxrtpo($value) {
        $this->_txrtpo = $value;
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
    public function setTotalpo($value) {
        $this->_totalpo = $value;
    }

    /**
     * @param Date
     */
    public function setReqdat($value) {
        $this->_reqdat = $value;
    }

    /**
     * @param Date
     */
    public function setCompdate($value) {
        $this->_compdate = $value;
    }

    /**
     * @param Logical
     */
    public function setHoldstatus($value) {
        $this->_holdstatus = $value;
    }

    /**
     * @param Char
     */
    public function setSostatus($value) {
        $this->_sostatus = $value;
    }

    /**
     * @param Date
     */
    public function setReqdate($value) {
        $this->_reqdate = $value;
    }

    /**
     * @param Numeric
     */
    public function setSorevno($value) {
        $this->_sorevno = $value;
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
     * @param Numeric
     */
    public function setMsubtotal0($value) {
        $this->_msubtotal0 = $value;
    }

    /**
     * @param Numeric
     */
    public function setDiscount0($value) {
        $this->_discount0 = $value;
    }

    /**
     * @param Char
     */
    public function setWhsno($value) {
        $this->_whsno = $value;
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
    public function setGlaracct($value) {
        $this->_glaracct = $value;
    }

    /**
     * @param Char
     */
    public function setAuthref($value) {
        $this->_authref = $value;
    }

    /**
     * @param Char
     */
    public function setRecvia($value) {
        $this->_recvia = $value;
    }

    /**
     * @param Char
     */
    public function setRecvianame($value) {
        $this->_recvianame = $value;
    }

    /**
     * @param Numeric
     */
    public function setLabreq($value) {
        $this->_labreq = $value;
    }

    /**
     * @param Char
     */
    public function setRrtype($value) {
        $this->_rrtype = $value;
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
    public function setVerify($value) {
        $this->_verify = $value;
    }

    /**
     * @param Char
     */
    public function setSwlock($value) {
        $this->_swlock = $value;
    }

    /**
     * @param Date,
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
    public function setCurrid($value) {
        $this->_currid = $value;
    }

    /**
     * @param Numeric
     */
    public function setOrgvalue($value) {
        $this->_orgvalue = $value;
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
    public function setCstctid($value) {
        $this->_cstctid = $value;
    }

    /**
     * @param Char
     */
    public function setSchdstatus($value) {
        $this->_schdstatus = $value;
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
    public function setSwcallinby($value) {
        $this->_swcallinby = $value;
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
    public function setArea($value) {
        $this->_area = $value;
    }

    /**
     * @param Char
     */
    public function setSwrecvby($value) {
        $this->_swrecvby = $value;
    }

    /**
     * @param Char
     */
    public function setSwrectime($value) {
        $this->_swrectime = $value;
    }

    /**
     * @param Numeric
     */
    public function setTraveltime($value) {
        $this->_traveltime = $value;
    }

    /**
     * @param Logical,
     */
    public function setChrgmile($value) {
        $this->_chrgmile = $value;
    }

    /**
     * @param Logical,
     */
    public function setHalfmile($value) {
        $this->_halfmile = $value;
    }

    /**
     * @param Memo,
     */
    public function setTechnotes($value) {
        $this->_technotes = $value;
    }

    /**
     * @param Logical,
     */
    public function setBillable($value) {
        $this->_billable = $value;
    }

    /**
     * @param Logical,
     */
    public function setWarranty($value) {
        $this->_warranty = $value;
    }

    /**
     * @param Logical,
     */
    public function setEmergency($value) {
        $this->_emergency = $value;
    }

    /**
     * @param Logical,
     */
    public function setPriority($value) {
        $this->_priority = $value;
    }

    /**
     * @param Logical,
     */
    public function setCharge15($value) {
        $this->_charge15 = $value;
    }

    /**
     * @param Logical,
     */
    public function setCharge2x($value) {
        $this->_charge2x = $value;
    }

    /**
     * @param Logical,
     */
    public function setContract($value) {
        $this->_contract = $value;
    }

    /**
     * @param Logical,
     */
    public function setQuotedjob($value) {
        $this->_quotedjob = $value;
    }

    /**
     * @param Date,
     */
    public function setDateschd($value) {
        $this->_dateschd = $value;
    }

    /**
     * @param Char
     */
    public function setTimeschd($value) {
        $this->_timeschd = $value;
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
    public function setEqmake($value) {
        $this->_eqmake = $value;
    }

    /**
     * @param Char
     */
    public function setEqmodel($value) {
        $this->_eqmodel = $value;
    }

    /**
     * @param Char
     */
    public function setEqserialno($value) {
        $this->_eqserialno = $value;
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
    public function setLocation($value) {
        $this->_location = $value;
    }

    /**
     * @param Date,
     */
    public function setDatecallsh($value) {
        $this->_datecallsh = $value;
    }

    /**
     * @param Char
     */
    public function setTimecallsh($value) {
        $this->_timecallsh = $value;
    }

    /**
     * @param Char
     */
    public function setDocprefix($value) {
        $this->_docprefix = $value;
    }

    /**
     * @param Char
     */
    public function setLocphone($value) {
        $this->_locphone = $value;
    }

    /**
     * @param Numeric
     */
    public function setSwretrips($value) {
        $this->_swretrips = $value;
    }

    /**
     * @param Memo,
     */
    public function setSwinspothr($value) {
        $this->_swinspothr = $value;
    }

    /**
     * @param Char
     */
    public function setUserschd($value) {
        $this->_userschd = $value;
    }

    /**
     * @param Char
     */
    public function setGldept($value) {
        $this->_gldept = $value;
    }

    /**
     * @param Memo,
     */
    public function setChgnotes($value) {
        $this->_chgnotes = $value;
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
     * @param Memo,
     */
    public function setShipcomm($value) {
        $this->_shipcomm = $value;
    }

    /**
     * @param Date,
     */
    public function setPickdateok($value) {
        $this->_pickdateok = $value;
    }

    /**
     * @param Date,
     */
    public function setNotbefordt($value) {
        $this->_notbefordt = $value;
    }

    /**
     * @param Logical,
     */
    public function setOktopick($value) {
        $this->_oktopick = $value;
    }

    /**
     * @param Char
     */
    public function setSotypecode($value) {
        $this->_sotypecode = $value;
    }

    /**
     * @param Date,
     */
    public function setConsdate($value) {
        $this->_consdate = $value;
    }

    /**
     * @param Logical,
     */
    public function setOwnretail($value) {
        $this->_ownretail = $value;
    }

    /**
     * @param Logical,
     */
    public function setBidorder($value) {
        $this->_bidorder = $value;
    }

    /**
     * @param Date,
     */
    public function setBiddate($value) {
        $this->_biddate = $value;
    }

    /**
     * @param Logical,
     */
    public function setQuickship($value) {
        $this->_quickship = $value;
    }

    /**
     * @param Char
     */
    public function setGltaxacct($value) {
        $this->_gltaxacct = $value;
    }

    /**
     * @param Logical,
     */
    public function setSuspend($value) {
        $this->_suspend = $value;
    }

    /**
     * @param Char
     */
    public function setWmsstatus($value) {
        $this->_wmsstatus = $value;
    }

    /**
     * @param Logical,
     */
    public function setInsurflag($value) {
        $this->_insurflag = $value;
    }

    /**
     * @param Char
     */
    public function setDistchan($value) {
        $this->_distchan = $value;
    }

    /**
     * @param Logical,
     */
    public function setNormaflag($value) {
        $this->_normaflag = $value;
    }

    /**
     * @param Date,
     */
    public function setRmadate($value) {
        $this->_rmadate = $value;
    }

    /**
     * @param Char
     */
    public function setPormoflag($value) {
        $this->_pormoflag = $value;
    }

    /**
     * @param Date,
     */
    public function setAllocadate($value) {
        $this->_allocadate = $value;
    }

    /**
     * @param Date,
     */
    public function setDatehold($value) {
        $this->_datehold = $value;
    }

    /**
     * @param Numeric
     */
    public function setNopayments($value) {
        $this->_nopayments = $value;
    }

    /**
     * @param Numeric
     */
    public function setStartdays($value) {
        $this->_startdays = $value;
    }

    /**
     * @param Numeric
     */
    public function setTotaldays($value) {
        $this->_totaldays = $value;
    }

    /**
     * @param Logical,
     */
    public function setSpecterms($value) {
        $this->_specterms = $value;
    }

    /**
     * @param Numeric
     */
    public function setSpecteramt($value) {
        $this->_specteramt = $value;
    }

    /**
     * @param Numeric
     */
    public function setPayfreqday($value) {
        $this->_payfreqday = $value;
    }

    /**
     * @param Date,
     */
    public function setStartdate($value) {
        $this->_startdate = $value;
    }

    /**
     * @param Logical,
     */
    public function setS_routine($value) {
        $this->_s_routine = $value;
    }

    /**
     * @param Char
     */
    public function setComptime($value) {
        $this->_comptime = $value;
    }

    /**
     * @param Logical,
     */
    public function setCompstat($value) {
        $this->_compstat = $value;
    }

    /**
     * @param Char
     */
    public function setArvltime($value) {
        $this->_arvltime = $value;
    }

    /**
     * @param Char
     */
    public function setDriverlic($value) {
        $this->_driverlic = $value;
    }

    /**
     * @param Numeric
     */
    public function setTotweight0($value) {
        $this->_totweight0 = $value;
    }

    /**
     * @param Numeric
     */
    public function setTotalbal($value) {
        $this->_totalbal = $value;
    }

    /**
     * @param Logical,
     */
    public function setPrintflag($value) {
        $this->_printflag = $value;
    }

    /**
     * @param Date,
     */
    public function setEstshpdate($value) {
        $this->_estshpdate = $value;
    }

    /**
     * @param Logical,
     */
    public function setBudaddaprv($value) {
        $this->_budaddaprv = $value;
    }

    /**
     * @param Logical,
     */
    public function setCommset($value) {
        $this->_commset = $value;
    }

    /**
     * @param Date,
     */
    public function setCommsetdte($value) {
        $this->_commsetdte = $value;
    }

    /**
     * @param Numeric
     */
    public function setRetresvtot($value) {
        $this->_retresvtot = $value;
    }

    /**
     * @param Numeric
     */
    public function setTotamtsave($value) {
        $this->_totamtsave = $value;
    }

    /**
     * @param Logical,
     */
    public function setQbsyncstat($value) {
        $this->_qbsyncstat = $value;
    }

    /**
     * @param Char
     */
    public function setIvrefno($value) {
        $this->_ivrefno = $value;
    }

    /**
     * @param Date,
     */
    public function setDtrstart($value) {
        $this->_dtrstart = $value;
    }

    /**
     * @param Date,
     */
    public function setDtrend($value) {
        $this->_dtrend = $value;
    }

    /**
     * @param Numeric
     */
    public function setTotbotdep($value) {
        $this->_totbotdep = $value;
    }

    /**
     * @param Date,
     */
    public function setProstartdt($value) {
        $this->_prostartdt = $value;
    }

    /**
     * @param Date,
     */
    public function setProenddt($value) {
        $this->_proenddt = $value;
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
    public function setQblistid($value) {
        $this->_qblistid = $value;
    }

    /**
     * @param Logical,
     */
    public function setBlindship($value) {
        $this->_blindship = $value;
    }

    /**
     * @param Logical,
     */
    public function setEdiflag($value) {
        $this->_ediflag = $value;
    }

    /**
     * @param Date,
     */
    public function setEdidate($value) {
        $this->_edidate = $value;
    }

    /**
     * @param Logical,
     */
    public function setEdibck($value) {
        $this->_edibck = $value;
    }

    /**
     * @param Char
     */
    public function setImportkey($value) {
        $this->_importkey = $value;
    }

    /**
     * @param Char
     */
    public function setQutno($value) {
        $this->_qutno = $value;
    }

    /**
     * @param Logical,
     */
    public function setSplitpick($value) {
        $this->_splitpick = $value;
    }

    /**
     * @param Char
     */
    public function setCc_refno($value) {
        $this->_cc_refno = $value;
    }

    /**
     * @param Numeric
     */
    public function setCc_amtrec($value) {
        $this->_cc_amtrec = $value;
    }

    /**
     * @param Char
     */
    public function setCc_paytype($value) {
        $this->_cc_paytype = $value;
    }

    /**
     * Constructor
     */
    public function __construct($ordnum, $invno, $invtype, $itmstatus, $formno, $custno, $ponum, $vendno, $podate, $invdate, $shipdate, $fitemtype, $ftotcost, $fcosttype, $period, $salesmn, $commission, $comslmn, $salesmn2, $comslmn2, $salesmn1na, $salesmn2na, $priceby, $indust, $terr, $fclass, $fobstat, $shipvia, $shipvname, $shipstat, $frghts, $termid, $termdesc, $termdesc1, $subtotal, $subtotal0, $discount, $txrt, $taxable, $tax, $tax0, $taxext, $taxext0, $itemtax, $itemtax0, $ftaxcode, $shipping, $fmisc1, $fmisc2, $fmisc3, $total, $total0, $prepaid, $refno, $ppdref, $company, $address1, $address2, $address3, $city, $state, $zip, $country, $shipid, $shipto1, $shipto2, $shipto3, $shipto4, $shipto5, $dueday, $discday, $disc, $key, $userflg, $fuserid, $fstation, $fblurb_id, $itmcount, $totcost, $closecomm, $inhsecomm, $validity, $shipfrom, $msubtotal, $delivery, $vessel, $relport, $destino, $car, $cigsn, $pticket, $source, $cartoons, $freight, $picticbano, $nflg0, $nflg1, $custdisc, $subtotalpo, $discountpo, $shippingpo, $txrtpo, $taxpo, $totalpo, $reqdat, $compdate, $holdstatus, $sostatus, $reqdate, $sorevno, $swordnum, $sotype, $msubtotal0, $discount0, $whsno, $taxrate, $taxrate1, $taxrate2, $taxrate3, $taxrate4, $glaracct, $authref, $recvia, $recvianame, $labreq, $rrtype, $frghtpay, $verify, $swlock, $fupddate, $fupdtime, $sourceno, $srctype, $currid, $orgvalue, $exchrate, $baseid, $cstctid, $schdstatus, $inspectno, $swcallinby, $zone, $area, $swrecvby, $swrectime, $traveltime, $chrgmile, $halfmile, $technotes, $billable, $warranty, $emergency, $priority, $charge15, $charge2x, $contract, $quotedjob, $dateschd, $timeschd, $newuserid, $newdtetime, $newstation, $eqmake, $eqmodel, $eqserialno, $locationid, $location, $datecallsh, $timecallsh, $docprefix, $locphone, $swretrips, $swinspothr, $userschd, $gldept, $chgnotes, $phone, $phone1, $fax, $shipcomm, $pickdateok, $notbefordt, $oktopick, $sotypecode, $consdate, $ownretail, $bidorder, $biddate, $quickship, $gltaxacct, $suspend, $wmsstatus, $insurflag, $distchan, $normaflag, $rmadate, $pormoflag, $allocadate, $datehold, $nopayments, $startdays, $totaldays, $specterms, $specteramt, $payfreqday, $startdate, $s_routine, $comptime, $compstat, $arvltime, $driverlic, $totweight0, $totalbal, $printflag, $estshpdate, $budaddaprv, $commset, $commsetdte, $retresvtot, $totamtsave, $qbsyncstat, $ivrefno, $dtrstart, $dtrend, $totbotdep, $prostartdt, $proenddt, $shpcompnam, $shpaddrs1, $shpaddrs2, $shpcity, $shpstate, $shpzip, $shpcountry, $shpbillopt, $shpphone, $shpemail, $shpcontact, $qblistid, $blindship, $ediflag, $edidate, $edibck, $importkey, $qutno, $splitpick, $cc_refno, $cc_amtrec, $cc_paytype) {
        $this->_ordnum = $ordnum;
        $this->_invno = $invno;
        $this->_invtype = $invtype;
        $this->_itmstatus = $itmstatus;
        $this->_formno = $formno;
        $this->_custno = $custno;
        $this->_ponum = $ponum;
        $this->_vendno = $vendno;
        $this->_podate = $podate;
        $this->_invdate = $invdate;
        $this->_shipdate = $shipdate;
        $this->_fitemtype = $fitemtype;
        $this->_ftotcost = $ftotcost;
        $this->_fcosttype = $fcosttype;
        $this->_period = $period;
        $this->_salesmn = $salesmn;
        $this->_commission = $commission;
        $this->_comslmn = $comslmn;
        $this->_salesmn2 = $salesmn2;
        $this->_comslmn2 = $comslmn2;
        $this->_salesmn1na = $salesmn1na;
        $this->_salesmn2na = $salesmn2na;
        $this->_priceby = $priceby;
        $this->_indust = $indust;
        $this->_terr = $terr;
        $this->_fclass = $fclass;
        $this->_fobstat = $fobstat;
        $this->_shipvia = $shipvia;
        $this->_shipvname = $shipvname;
        $this->_shipstat = $shipstat;
        $this->_frghts = $frghts;
        $this->_termid = $termid;
        $this->_termdesc = $termdesc;
        $this->_termdesc1 = $termdesc1;
        $this->_subtotal = $subtotal;
        $this->_subtotal0 = $subtotal0;
        $this->_discount = $discount;
        $this->_txrt = $txrt;
        $this->_taxable = $taxable;
        $this->_tax = $tax;
        $this->_tax0 = $tax0;
        $this->_taxext = $taxext;
        $this->_taxext0 = $taxext0;
        $this->_itemtax = $itemtax;
        $this->_itemtax0 = $itemtax0;
        $this->_ftaxcode = $ftaxcode;
        $this->_shipping = $shipping;
        $this->_fmisc1 = $fmisc1;
        $this->_fmisc2 = $fmisc2;
        $this->_fmisc3 = $fmisc3;
        $this->_total = $total;
        $this->_total0 = $total0;
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
        $this->_dueday = $dueday;
        $this->_discday = $discday;
        $this->_disc = $disc;
        $this->_key = $key;
        $this->_userflg = $userflg;
        $this->_fuserid = $fuserid;
        $this->_fstation = $fstation;
        $this->_fblurb_id = $fblurb_id;
        $this->_itmcount = $itmcount;
        $this->_totcost = $totcost;
        $this->_closecomm = $closecomm;
        $this->_inhsecomm = $inhsecomm;
        $this->_validity = $validity;
        $this->_shipfrom = $shipfrom;
        $this->_msubtotal = $msubtotal;
        $this->_delivery = $delivery;
        $this->_vessel = $vessel;
        $this->_relport = $relport;
        $this->_destino = $destino;
        $this->_car = $car;
        $this->_cigsn = $cigsn;
        $this->_pticket = $pticket;
        $this->_source = $source;
        $this->_cartoons = $cartoons;
        $this->_freight = $freight;
        $this->_picticbano = $picticbano;
        $this->_nflg0 = $nflg0;
        $this->_nflg1 = $nflg1;
        $this->_custdisc = $custdisc;
        $this->_subtotalpo = $subtotalpo;
        $this->_discountpo = $discountpo;
        $this->_shippingpo = $shippingpo;
        $this->_txrtpo = $txrtpo;
        $this->_taxpo = $taxpo;
        $this->_totalpo = $totalpo;
        $this->_reqdat = $reqdat;
        $this->_compdate = $compdate;
        $this->_holdstatus = $holdstatus;
        $this->_sostatus = $sostatus;
        $this->_reqdate = $reqdate;
        $this->_sorevno = $sorevno;
        $this->_swordnum = $swordnum;
        $this->_sotype = $sotype;
        $this->_msubtotal0 = $msubtotal0;
        $this->_discount0 = $discount0;
        $this->_whsno = $whsno;
        $this->_taxrate = $taxrate;
        $this->_taxrate1 = $taxrate1;
        $this->_taxrate2 = $taxrate2;
        $this->_taxrate3 = $taxrate3;
        $this->_taxrate4 = $taxrate4;
        $this->_glaracct = $glaracct;
        $this->_authref = $authref;
        $this->_recvia = $recvia;
        $this->_recvianame = $recvianame;
        $this->_labreq = $labreq;
        $this->_rrtype = $rrtype;
        $this->_frghtpay = $frghtpay;
        $this->_verify = $verify;
        $this->_swlock = $swlock;
        $this->_fupddate = $fupddate;
        $this->_fupdtime = $fupdtime;
        $this->_sourceno = $sourceno;
        $this->_srctype = $srctype;
        $this->_currid = $currid;
        $this->_orgvalue = $orgvalue;
        $this->_exchrate = $exchrate;
        $this->_baseid = $baseid;
        $this->_cstctid = $cstctid;
        $this->_schdstatus = $schdstatus;
        $this->_inspectno = $inspectno;
        $this->_swcallinby = $swcallinby;
        $this->_zone = $zone;
        $this->_area = $area;
        $this->_swrecvby = $swrecvby;
        $this->_swrectime = $swrectime;
        $this->_traveltime = $traveltime;
        $this->_chrgmile = $chrgmile;
        $this->_halfmile = $halfmile;
        $this->_technotes = $technotes;
        $this->_billable = $billable;
        $this->_warranty = $warranty;
        $this->_emergency = $emergency;
        $this->_priority = $priority;
        $this->_charge15 = $charge15;
        $this->_charge2x = $charge2x;
        $this->_contract = $contract;
        $this->_quotedjob = $quotedjob;
        $this->_dateschd = $dateschd;
        $this->_timeschd = $timeschd;
        $this->_newuserid = $newuserid;
        $this->_newdtetime = $newdtetime;
        $this->_newstation = $newstation;
        $this->_eqmake = $eqmake;
        $this->_eqmodel = $eqmodel;
        $this->_eqserialno = $eqserialno;
        $this->_locationid = $locationid;
        $this->_location = $location;
        $this->_datecallsh = $datecallsh;
        $this->_timecallsh = $timecallsh;
        $this->_docprefix = $docprefix;
        $this->_locphone = $locphone;
        $this->_swretrips = $swretrips;
        $this->_swinspothr = $swinspothr;
        $this->_userschd = $userschd;
        $this->_gldept = $gldept;
        $this->_chgnotes = $chgnotes;
        $this->_phone = $phone;
        $this->_phone1 = $phone1;
        $this->_fax = $fax;
        $this->_shipcomm = $shipcomm;
        $this->_pickdateok = $pickdateok;
        $this->_notbefordt = $notbefordt;
        $this->_oktopick = $oktopick;
        $this->_sotypecode = $sotypecode;
        $this->_consdate = $consdate;
        $this->_ownretail = $ownretail;
        $this->_bidorder = $bidorder;
        $this->_biddate = $biddate;
        $this->_quickship = $quickship;
        $this->_gltaxacct = $gltaxacct;
        $this->_suspend = $suspend;
        $this->_wmsstatus = $wmsstatus;
        $this->_insurflag = $insurflag;
        $this->_distchan = $distchan;
        $this->_normaflag = $normaflag;
        $this->_rmadate = $rmadate;
        $this->_pormoflag = $pormoflag;
        $this->_allocadate = $allocadate;
        $this->_datehold = $datehold;
        $this->_nopayments = $nopayments;
        $this->_startdays = $startdays;
        $this->_totaldays = $totaldays;
        $this->_specterms = $specterms;
        $this->_specteramt = $specteramt;
        $this->_payfreqday = $payfreqday;
        $this->_startdate = $startdate;
        $this->_s_routine = $s_routine;
        $this->_comptime = $comptime;
        $this->_compstat = $compstat;
        $this->_arvltime = $arvltime;
        $this->_driverlic = $driverlic;
        $this->_totweight0 = $totweight0;
        $this->_totalbal = $totalbal;
        $this->_printflag = $printflag;
        $this->_estshpdate = $estshpdate;
        $this->_budaddaprv = $budaddaprv;
        $this->_commset = $commset;
        $this->_commsetdte = $commsetdte;
        $this->_retresvtot = $retresvtot;
        $this->_totamtsave = $totamtsave;
        $this->_qbsyncstat = $qbsyncstat;
        $this->_ivrefno = $ivrefno;
        $this->_dtrstart = $dtrstart;
        $this->_dtrend = $dtrend;
        $this->_totbotdep = $totbotdep;
        $this->_prostartdt = $prostartdt;
        $this->_proenddt = $proenddt;
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
        $this->_qblistid = $qblistid;
        $this->_blindship = $blindship;
        $this->_ediflag = $ediflag;
        $this->_edidate = $edidate;
        $this->_edibck = $edibck;
        $this->_importkey = $importkey;
        $this->_qutno = $qutno;
        $this->_splitpick = $splitpick;
        $this->_cc_refno = $cc_refno;
        $this->_cc_amtrec = $cc_amtrec;
        $this->_cc_paytype = $cc_paytype;
    }

    public static function toString() {
        return self::$_name;
    }

}
