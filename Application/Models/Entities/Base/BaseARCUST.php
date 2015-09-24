<?php

/**
 * Project:  VFP Business Series
 * Copyright: 2014. VFP Business Solutions, LLC
 */

namespace Dandelion\MVC\Application\Models\Entities\Base;

/**
 * BaseARCUST
 */
class BaseARCUST
{

    /**
     * Private fields
     */
    private static $_name = "ARCUST";

    /**
     * Protected fields
     */

    /**
     * @var Char
     */
    protected $_custno;

    /**
     * @var Char
     */
    protected $_company;

    /**
     * @var Char
     */
    protected $_contact;

    /**
     * @var Char
     */
    protected $_title;

    /**
     * @var Char
     */
    protected $_contact1;

    /**
     * @var Char
     */
    protected $_title1;

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
    protected $_address4;

    /**
     * @var Char
     */
    protected $_address5;

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
    protected $_fcountry;

    /**
     * @var Char
     */
    protected $_zip;

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
    protected $_email;

    /**
     * @var Char
     */
    protected $_fax;

    /**
     * @var Char
     */
    protected $_taxid;

    /**
     * @var Char
     */
    protected $_fedid;

    /**
     * @var Memo
     */
    protected $_notes;

    /**
     * @var Char
     */
    protected $_terr;

    /**
     * @var Char
     */
    protected $_indust;

    /**
     * @var Char
     */
    protected $_salesman;

    /**
     * @var Numeric
     */
    protected $_slmcomm;

    /**
     * @var Char
     */
    protected $_source;

    /**
     * @var Char
     */
    protected $_class;

    /**
     * @var Logical
     */
    protected $_finance;

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
    protected $_termref;

    /**
     * @var Numeric
     */
    protected $_duedays;

    /**
     * @var Numeric
     */
    protected $_termsdisc;

    /**
     * @var Numeric
     */
    protected $_discdays;

    /**
     * @var Numeric
     */
    protected $_limit;

    /**
     * @var Numeric
     */
    protected $_balance;

    /**
     * @var Numeric
     */
    protected $_unpostbal;

    /**
     * @var Numeric
     */
    protected $_ytdsls;

    /**
     * @var Numeric
     */
    protected $_lytdsls;

    /**
     * @var Numeric
     */
    protected $_ptdsls;

    /**
     * @var Numeric
     */
    protected $_lpaydlr;

    /**
     * @var Date
     */
    protected $_lpaydte;

    /**
     * @var Date
     */
    protected $_inday;

    /**
     * @var Char
     */
    protected $_balmethod;

    /**
     * @var Logical
     */
    protected $_prtstate;

    /**
     * @var Logical
     */
    protected $_dunletter;

    /**
     * @var Date
     */
    protected $_ldate;

    /**
     * @var Numeric
     */
    protected $_tax;

    /**
     * @var Logical
     */
    protected $_taxstat;

    /**
     * @var Logical
     */
    protected $_auto;

    /**
     * @var Numeric
     */
    protected $_autoamt;

    /**
     * @var Char
     */
    protected $_autoperiod;

    /**
     * @var Char
     */
    protected $_autoacct;

    /**
     * @var Numeric
     */
    protected $_credit;

    /**
     * @var Char
     */
    protected $_code;

    /**
     * @var Char
     */
    protected $_pord;

    /**
     * @var Char
     */
    protected $_level;

    /**
     * @var Char
     */
    protected $_shipto;

    /**
     * @var Logical
     */
    protected $_shippart;

    /**
     * @var Char
     */
    protected $_shipvia;

    /**
     * @var Char
     */
    protected $_dom_exp;

    /**
     * @var Date
     */
    protected $_entrydate;

    /**
     * @var Logical
     */
    protected $_nflg0;

    /**
     * @var Numeric
     */
    protected $_tytdsls;

    /**
     * @var Numeric
     */
    protected $_ttotsls;

    /**
     * @var Char
     */
    protected $_pstatus;

    /**
     * @var Char
     */
    protected $_pricecode;

    /**
     * @var Char
     */
    protected $_prodcode;

    /**
     * @var Numeric
     */
    protected $_disc;

    /**
     * @var Logical
     */
    protected $_cfsin;

    /**
     * @var Logical
     */
    protected $_whsin;

    /**
     * @var Logical
     */
    protected $_domein;

    /**
     * @var Logical
     */
    protected $_goin;

    /**
     * @var Char
     */
    protected $_pricec1;

    /**
     * @var Char
     */
    protected $_pricec2;

    /**
     * @var Char
     */
    protected $_pricec3;

    /**
     * @var Char
     */
    protected $_pricec4;

    /**
     * @var Numeric
     */
    protected $_chargetype;

    /**
     * @var Numeric
     */
    protected $_days1;

    /**
     * @var Numeric
     */
    protected $_days2;

    /**
     * @var Numeric
     */
    protected $_days3;

    /**
     * @var Char
     */
    protected $_password;

    /**
     * @var Char
     */
    protected $_altcustno;

    /**
     * @var Char
     */
    protected $_pre_nam;

    /**
     * @var Char
     */
    protected $_first_nam;

    /**
     * @var Char
     */
    protected $_mid_nam;

    /**
     * @var Char
     */
    protected $_last_nam;

    /**
     * @var Char
     */
    protected $_suf_nam;

    /**
     * @var Char
     */
    protected $_namonbill;

    /**
     * @var Numeric
     */
    protected $_dep_bal;

    /**
     * @var Char
     */
    protected $_cc_type;

    /**
     * @var Char
     */
    protected $_cc_name;

    /**
     * @var Char
     */
    protected $_cc_num;

    /**
     * @var Char
     */
    protected $_cc_exp;

    /**
     * @var Char
     */
    protected $_curr_type;

    /**
     * @var Numeric
     */
    protected $_sync_bal;

    /**
     * @var Char
     */
    protected $_icprefix;

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
    protected $_shiproute;

    /**
     * @var Char
     */
    protected $_priority;

    /**
     * @var Char
     */
    protected $_country;

    /**
     * @var Date
     */
    protected $_ratedate;

    /**
     * @var Char
     */
    protected $_iatacode;

    /**
     * @var Logical
     */
    protected $_hold;

    /**
     * @var Char
     */
    protected $_addr1_bill;

    /**
     * @var Char
     */
    protected $_addr2_bill;

    /**
     * @var Char
     */
    protected $_city_bill;

    /**
     * @var Char
     */
    protected $_state_bill;

    /**
     * @var Char
     */
    protected $_zip_bill;

    /**
     * @var Char
     */
    protected $_phone_bill;

    /**
     * @var Char
     */
    protected $_fax_bill;

    /**
     * @var Char
     */
    protected $_cont_bill;

    /**
     * @var Char
     */
    protected $_cont_awb;

    /**
     * @var Char
     */
    protected $_phone_awb;

    /**
     * @var Char
     */
    protected $_fax_awb;

    /**
     * @var Char
     */
    protected $_email_awb;

    /**
     * @var Char
     */
    protected $_comp_bill;

    /**
     * @var Char
     */
    protected $_email_bill;

    /**
     * @var Logical
     */
    protected $_crdhold;

    /**
     * @var Char
     */
    protected $_taxcode;

    /**
     * @var Char
     */
    protected $_reference;

    /**
     * @var Char
     */
    protected $_username;

    /**
     * @var Logical
     */
    protected $_webactive;

    /**
     * @var Logical
     */
    protected $_websyncflg;

    /**
     * @var Char
     */
    protected $_wmsprcode;

    /**
     * @var Date
     */
    protected $_stochdate;

    /**
     * @var Char
     */
    protected $_phone2;

    /**
     * @var Char
     */
    protected $_ftaxcode;

    /**
     * @var Char
     */
    protected $_vendno;

    /**
     * @var Char
     */
    protected $_baseid;

    /**
     * @var Char
     */
    protected $_regionid;

    /**
     * @var Char
     */
    protected $_basecode;

    /**
     * @var Char
     */
    protected $_glaracct;

    /**
     * @var Numeric
     */
    protected $_unpostaux;

    /**
     * @var Char
     */
    protected $_taxmiscid;

    /**
     * @var Char
     */
    protected $_apglacct;

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
     * @var Logical
     */
    protected $_halftrav;

    /**
     * @var Logical
     */
    protected $_taxparts;

    /**
     * @var Logical
     */
    protected $_taxlabor;

    /**
     * @var Char
     */
    protected $_payhist;

    /**
     * @var Logical
     */
    protected $_chrgmile;

    /**
     * @var Logical
     */
    protected $_halfmile;

    /**
     * @var Char
     */
    protected $_linkmast;

    /**
     * @var Logical
     */
    protected $_porequ;

    /**
     * @var Char
     */
    protected $_whsno;

    /**
     * @var Numeric
     */
    protected $_milerate;

    /**
     * @var Logical
     */
    protected $_chrgtravel;

    /**
     * @var Memo
     */
    protected $_woautnote;

    /**
     * @var Logical
     */
    protected $_woautntflg;

    /**
     * @var Memo
     */
    protected $_woautonote;

    /**
     * @var Logical
     */
    protected $_inactive;

    /**
     * @var Memo
     */
    protected $_colnotes;

    /**
     * @var Char
     */
    protected $_emailalt;

    /**
     * @var Numeric
     */
    protected $_l2ytdsls;

    /**
     * @var Char
     */
    protected $_driverlic;

    /**
     * @var Char
     */
    protected $_sourceid;

    /**
     * @var Char
     */
    protected $_gradeid;

    /**
     * @var Char
     */
    protected $_mobile;

    /**
     * @var Char
     */
    protected $_webpage;

    /**
     * @var Logical
     */
    protected $_credokso;

    /**
     * @var Logical
     */
    protected $_ownretail;

    /**
     * @var Char
     */
    protected $_custtype;

    /**
     * @var Char
     */
    protected $_typecode;

    /**
     * @var Char
     */
    protected $_sellclass;

    /**
     * @var Numeric
     */
    protected $_consfact;

    /**
     * @var Numeric
     */
    protected $_consup;

    /**
     * @var Logical
     */
    protected $_credoksono;

    /**
     * @var Logical
     */
    protected $_normaflag;

    /**
     * @var Logical
     */
    protected $_insurflag;

    /**
     * @var Numeric
     */
    protected $_resptime;

    /**
     * @var Logical
     */
    protected $_emailinv;

    /**
     * @var Memo
     */
    protected $_picktknote;

    /**
     * @var Char
     */
    protected $_cc_secid;

    /**
     * @var Char
     */
    protected $_cc_address;

    /**
     * @var Char
     */
    protected $_cc_city;

    /**
     * @var Char
     */
    protected $_cc_state;

    /**
     * @var Char
     */
    protected $_cc_zip;

    /**
     * @var Logical
     */
    protected $_commoverr;

    /**
     * @var Char
     */
    protected $_qblistid;

    /**
     * @var Char
     */
    protected $_qbcustno;

    /**
     * @var Numeric
     */
    protected $_qbsublevel;

    /**
     * @var Char
     */
    protected $_country_bl;

    /**
     * @var Char
     */
    protected $_daystocall;

    /**
     * @var Char
     */
    protected $_daystodel;

    /**
     * @var Numeric
     */
    protected $_delvmin;

    /**
     * @var Char
     */
    protected $_equipment;

    /**
     * @var Date
     */
    protected $_lastcalldt;

    /**
     * @var Char
     */
    protected $_timetocall;

    /**
     * @var Char
     */
    protected $_genfield1;

    /**
     * @var Char
     */
    protected $_genfield2;

    /**
     * @var Char
     */
    protected $_genfield3;

    /**
     * @var Logical
     */
    protected $_noamtsave;

    /**
     * @var Char
     */
    protected $_bckordstat;

    /**
     * @var Char
     */
    protected $_tobno;

    /**
     * @var Char
     */
    protected $_sotypecode;

    /**
     * @var Char
     */
    protected $_sotype;

    /**
     * @var Numeric
     */
    protected $_shpcartid;

    /**
     * @var Numeric
     */
    protected $_shpcartid0;

    /**
     * @var Char
     */
    protected $_cc_notes;

    /**
     * @var Logical
     */
    protected $_cc_notsave;

    /**
     * @var Char
     */
    protected $_editype;

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
     * @var Char
     */
    protected $_edicustno;

    /**
     * @var Char
     */
    protected $_custitem;

    /**
     * @var Char
     */
    protected $_from_comp;

    /**
     * @var Char
     */
    protected $_from_adrs1;

    /**
     * @var Char
     */
    protected $_from_adrs2;

    /**
     * @var Char
     */
    protected $_from_city;

    /**
     * @var Char
     */
    protected $_from_state;

    /**
     * @var Char
     */
    protected $_from_zip;

    /**
     * @var Char
     */
    protected $_from_cntry;

    /**
     * @var Logical
     */
    protected $_lbl_shpfrm;

    /**
     * @var Logical
     */
    protected $_lbl_drpshp;

    /**
     * @var Logical
     */
    protected $_lbl_3rdpty;


    /**
     * Getters
     */

    /**
     * @return Char
     */
    public function getCustno()
    {
        return $this->_custno;
    }

    /**
     * @return Char
     */
    public function getCompany()
    {
        return $this->_company;
    }

    /**
     * @return Char
     */
    public function getContact()
    {
        return $this->_contact;
    }

    /**
     * @return Char
     */
    public function getTitle()
    {
        return $this->_title;
    }

    /**
     * @return Char
     */
    public function getContact1()
    {
        return $this->_contact1;
    }

    /**
     * @return Char
     */
    public function getTitle1()
    {
        return $this->_title1;
    }

    /**
     * @return Char
     */
    public function getAddress1()
    {
        return $this->_address1;
    }

    /**
     * @return Char
     */
    public function getAddress2()
    {
        return $this->_address2;
    }

    /**
     * @return Char
     */
    public function getAddress3()
    {
        return $this->_address3;
    }

    /**
     * @return Char
     */
    public function getAddress4()
    {
        return $this->_address4;
    }

    /**
     * @return Char
     */
    public function getAddress5()
    {
        return $this->_address5;
    }

    /**
     * @return Char
     */
    public function getCity()
    {
        return $this->_city;
    }

    /**
     * @return Char
     */
    public function getState()
    {
        return $this->_state;
    }

    /**
     * @return Char
     */
    public function getFcountry()
    {
        return $this->_fcountry;
    }

    /**
     * @return Char
     */
    public function getZip()
    {
        return $this->_zip;
    }

    /**
     * @return Char
     */
    public function getPhone()
    {
        return $this->_phone;
    }

    /**
     * @return Char
     */
    public function getPhone1()
    {
        return $this->_phone1;
    }

    /**
     * @return Char
     */
    public function getEmail()
    {
        return $this->_email;
    }

    /**
     * @return Char
     */
    public function getFax()
    {
        return $this->_fax;
    }

    /**
     * @return Char
     */
    public function getTaxid()
    {
        return $this->_taxid;
    }

    /**
     * @return Char
     */
    public function getFedid()
    {
        return $this->_fedid;
    }

    /**
     * @return Memo
     */
    public function getNotes()
    {
        return $this->_notes;
    }

    /**
     * @return Char
     */
    public function getTerr()
    {
        return $this->_terr;
    }

    /**
     * @return Char
     */
    public function getIndust()
    {
        return $this->_indust;
    }

    /**
     * @return Char
     */
    public function getSalesman()
    {
        return $this->_salesman;
    }

    /**
     * @return Numeric
     */
    public function getSlmcomm()
    {
        return $this->_slmcomm;
    }

    /**
     * @return Char
     */
    public function getSource()
    {
        return $this->_source;
    }

    /**
     * @return Char
     */
    public function getClass()
    {
        return $this->_class;
    }

    /**
     * @return Logical
     */
    public function getFinance()
    {
        return $this->_finance;
    }

    /**
     * @return Char
     */
    public function getTerms()
    {
        return $this->_terms;
    }

    /**
     * @return Char
     */
    public function getTerms1()
    {
        return $this->_terms1;
    }

    /**
     * @return Char
     */
    public function getTermref()
    {
        return $this->_termref;
    }

    /**
     * @return Numeric
     */
    public function getDuedays()
    {
        return $this->_duedays;
    }

    /**
     * @return Numeric
     */
    public function getTermsdisc()
    {
        return $this->_termsdisc;
    }

    /**
     * @return Numeric
     */
    public function getDiscdays()
    {
        return $this->_discdays;
    }

    /**
     * @return Numeric
     */
    public function getLimit()
    {
        return $this->_limit;
    }

    /**
     * @return Numeric
     */
    public function getBalance()
    {
        return $this->_balance;
    }

    /**
     * @return Numeric
     */
    public function getUnpostbal()
    {
        return $this->_unpostbal;
    }

    /**
     * @return Numeric
     */
    public function getYtdsls()
    {
        return $this->_ytdsls;
    }

    /**
     * @return Numeric
     */
    public function getLytdsls()
    {
        return $this->_lytdsls;
    }

    /**
     * @return Numeric
     */
    public function getPtdsls()
    {
        return $this->_ptdsls;
    }

    /**
     * @return Numeric
     */
    public function getLpaydlr()
    {
        return $this->_lpaydlr;
    }

    /**
     * @return Date
     */
    public function getLpaydte()
    {
        return $this->_lpaydte;
    }

    /**
     * @return Date
     */
    public function getInday()
    {
        return $this->_inday;
    }

    /**
     * @return Char
     */
    public function getBalmethod()
    {
        return $this->_balmethod;
    }

    /**
     * @return Logical
     */
    public function getPrtstate()
    {
        return $this->_prtstate;
    }

    /**
     * @return Logical
     */
    public function getDunletter()
    {
        return $this->_dunletter;
    }

    /**
     * @return Date
     */
    public function getLdate()
    {
        return $this->_ldate;
    }

    /**
     * @return Numeric
     */
    public function getTax()
    {
        return $this->_tax;
    }

    /**
     * @return Logical
     */
    public function getTaxstat()
    {
        return $this->_taxstat;
    }

    /**
     * @return Logical
     */
    public function getAuto()
    {
        return $this->_auto;
    }

    /**
     * @return Numeric
     */
    public function getAutoamt()
    {
        return $this->_autoamt;
    }

    /**
     * @return Char
     */
    public function getAutoperiod()
    {
        return $this->_autoperiod;
    }

    /**
     * @return Char
     */
    public function getAutoacct()
    {
        return $this->_autoacct;
    }

    /**
     * @return Numeric
     */
    public function getCredit()
    {
        return $this->_credit;
    }

    /**
     * @return Char
     */
    public function getCode()
    {
        return $this->_code;
    }

    /**
     * @return Char
     */
    public function getPord()
    {
        return $this->_pord;
    }

    /**
     * @return Char
     */
    public function getLevel()
    {
        return $this->_level;
    }

    /**
     * @return Char
     */
    public function getShipto()
    {
        return $this->_shipto;
    }

    /**
     * @return Logical
     */
    public function getShippart()
    {
        return $this->_shippart;
    }

    /**
     * @return Char
     */
    public function getShipvia()
    {
        return $this->_shipvia;
    }

    /**
     * @return Char
     */
    public function getDom_exp()
    {
        return $this->_dom_exp;
    }

    /**
     * @return Date
     */
    public function getEntrydate()
    {
        return $this->_entrydate;
    }

    /**
     * @return Logical
     */
    public function getNflg0()
    {
        return $this->_nflg0;
    }

    /**
     * @return Numeric
     */
    public function getTytdsls()
    {
        return $this->_tytdsls;
    }

    /**
     * @return Numeric
     */
    public function getTtotsls()
    {
        return $this->_ttotsls;
    }

    /**
     * @return Char
     */
    public function getPstatus()
    {
        return $this->_pstatus;
    }

    /**
     * @return Char
     */
    public function getPricecode()
    {
        return $this->_pricecode;
    }

    /**
     * @return Char
     */
    public function getProdcode()
    {
        return $this->_prodcode;
    }

    /**
     * @return Numeric
     */
    public function getDisc()
    {
        return $this->_disc;
    }

    /**
     * @return Logical
     */
    public function getCfsin()
    {
        return $this->_cfsin;
    }

    /**
     * @return Logical
     */
    public function getWhsin()
    {
        return $this->_whsin;
    }

    /**
     * @return Logical
     */
    public function getDomein()
    {
        return $this->_domein;
    }

    /**
     * @return Logical
     */
    public function getGoin()
    {
        return $this->_goin;
    }

    /**
     * @return Char
     */
    public function getPricec1()
    {
        return $this->_pricec1;
    }

    /**
     * @return Char
     */
    public function getPricec2()
    {
        return $this->_pricec2;
    }

    /**
     * @return Char
     */
    public function getPricec3()
    {
        return $this->_pricec3;
    }

    /**
     * @return Char
     */
    public function getPricec4()
    {
        return $this->_pricec4;
    }

    /**
     * @return Numeric
     */
    public function getChargetype()
    {
        return $this->_chargetype;
    }

    /**
     * @return Numeric
     */
    public function getDays1()
    {
        return $this->_days1;
    }

    /**
     * @return Numeric
     */
    public function getDays2()
    {
        return $this->_days2;
    }

    /**
     * @return Numeric
     */
    public function getDays3()
    {
        return $this->_days3;
    }

    /**
     * @return Char
     */
    public function getPassword()
    {
        return $this->_password;
    }

    /**
     * @return Char
     */
    public function getAltcustno()
    {
        return $this->_altcustno;
    }

    /**
     * @return Char
     */
    public function getPre_nam()
    {
        return $this->_pre_nam;
    }

    /**
     * @return Char
     */
    public function getFirst_nam()
    {
        return $this->_first_nam;
    }

    /**
     * @return Char
     */
    public function getMid_nam()
    {
        return $this->_mid_nam;
    }

    /**
     * @return Char
     */
    public function getLast_nam()
    {
        return $this->_last_nam;
    }

    /**
     * @return Char
     */
    public function getSuf_nam()
    {
        return $this->_suf_nam;
    }

    /**
     * @return Char
     */
    public function getNamonbill()
    {
        return $this->_namonbill;
    }

    /**
     * @return Numeric
     */
    public function getDep_bal()
    {
        return $this->_dep_bal;
    }

    /**
     * @return Char
     */
    public function getCc_type()
    {
        return $this->_cc_type;
    }

    /**
     * @return Char
     */
    public function getCc_name()
    {
        return $this->_cc_name;
    }

    /**
     * @return Char
     */
    public function getCc_num()
    {
        return $this->_cc_num;
    }

    /**
     * @return Char
     */
    public function getCc_exp()
    {
        return $this->_cc_exp;
    }

    /**
     * @return Char
     */
    public function getCurr_type()
    {
        return $this->_curr_type;
    }

    /**
     * @return Numeric
     */
    public function getSync_bal()
    {
        return $this->_sync_bal;
    }

    /**
     * @return Char
     */
    public function getIcprefix()
    {
        return $this->_icprefix;
    }

    /**
     * @return Char
     */
    public function getSalesmn2()
    {
        return $this->_salesmn2;
    }

    /**
     * @return Numeric
     */
    public function getComslmn2()
    {
        return $this->_comslmn2;
    }

    /**
     * @return Char
     */
    public function getShiproute()
    {
        return $this->_shiproute;
    }

    /**
     * @return Char
     */
    public function getPriority()
    {
        return $this->_priority;
    }

    /**
     * @return Char
     */
    public function getCountry()
    {
        return $this->_country;
    }

    /**
     * @return Date
     */
    public function getRatedate()
    {
        return $this->_ratedate;
    }

    /**
     * @return Char
     */
    public function getIatacode()
    {
        return $this->_iatacode;
    }

    /**
     * @return Logical
     */
    public function getHold()
    {
        return $this->_hold;
    }

    /**
     * @return Char
     */
    public function getAddr1_bill()
    {
        return $this->_addr1_bill;
    }

    /**
     * @return Char
     */
    public function getAddr2_bill()
    {
        return $this->_addr2_bill;
    }

    /**
     * @return Char
     */
    public function getCity_bill()
    {
        return $this->_city_bill;
    }

    /**
     * @return Char
     */
    public function getState_bill()
    {
        return $this->_state_bill;
    }

    /**
     * @return Char
     */
    public function getZip_bill()
    {
        return $this->_zip_bill;
    }

    /**
     * @return Char
     */
    public function getPhone_bill()
    {
        return $this->_phone_bill;
    }

    /**
     * @return Char
     */
    public function getFax_bill()
    {
        return $this->_fax_bill;
    }

    /**
     * @return Char
     */
    public function getCont_bill()
    {
        return $this->_cont_bill;
    }

    /**
     * @return Char
     */
    public function getCont_awb()
    {
        return $this->_cont_awb;
    }

    /**
     * @return Char
     */
    public function getPhone_awb()
    {
        return $this->_phone_awb;
    }

    /**
     * @return Char
     */
    public function getFax_awb()
    {
        return $this->_fax_awb;
    }

    /**
     * @return Char
     */
    public function getEmail_awb()
    {
        return $this->_email_awb;
    }

    /**
     * @return Char
     */
    public function getComp_bill()
    {
        return $this->_comp_bill;
    }

    /**
     * @return Char
     */
    public function getEmail_bill()
    {
        return $this->_email_bill;
    }

    /**
     * @return Logical
     */
    public function getCrdhold()
    {
        return $this->_crdhold;
    }

    /**
     * @return Char
     */
    public function getTaxcode()
    {
        return $this->_taxcode;
    }

    /**
     * @return Char
     */
    public function getReference()
    {
        return $this->_reference;
    }

    /**
     * @return Char
     */
    public function getUsername()
    {
        return $this->_username;
    }

    /**
     * @return Logical
     */
    public function getWebactive()
    {
        return $this->_webactive;
    }

    /**
     * @return Logical
     */
    public function getWebsyncflg()
    {
        return $this->_websyncflg;
    }

    /**
     * @return Char
     */
    public function getWmsprcode()
    {
        return $this->_wmsprcode;
    }

    /**
     * @return Date
     */
    public function getStochdate()
    {
        return $this->_stochdate;
    }

    /**
     * @return Char
     */
    public function getPhone2()
    {
        return $this->_phone2;
    }

    /**
     * @return Char
     */
    public function getFtaxcode()
    {
        return $this->_ftaxcode;
    }

    /**
     * @return Char
     */
    public function getVendno()
    {
        return $this->_vendno;
    }

    /**
     * @return Char
     */
    public function getBaseid()
    {
        return $this->_baseid;
    }

    /**
     * @return Char
     */
    public function getRegionid()
    {
        return $this->_regionid;
    }

    /**
     * @return Char
     */
    public function getBasecode()
    {
        return $this->_basecode;
    }

    /**
     * @return Char
     */
    public function getGlaracct()
    {
        return $this->_glaracct;
    }

    /**
     * @return Numeric
     */
    public function getUnpostaux()
    {
        return $this->_unpostaux;
    }

    /**
     * @return Char
     */
    public function getTaxmiscid()
    {
        return $this->_taxmiscid;
    }

    /**
     * @return Char
     */
    public function getApglacct()
    {
        return $this->_apglacct;
    }

    /**
     * @return Char
     */
    public function getFupdtime()
    {
        return $this->_fupdtime;
    }

    /**
     * @return Date
     */
    public function getFupddate()
    {
        return $this->_fupddate;
    }

    /**
     * @return Char
     */
    public function getFstation()
    {
        return $this->_fstation;
    }

    /**
     * @return Char
     */
    public function getFuserid()
    {
        return $this->_fuserid;
    }

    /**
     * @return Logical
     */
    public function getHalftrav()
    {
        return $this->_halftrav;
    }

    /**
     * @return Logical
     */
    public function getTaxparts()
    {
        return $this->_taxparts;
    }

    /**
     * @return Logical
     */
    public function getTaxlabor()
    {
        return $this->_taxlabor;
    }

    /**
     * @return Char
     */
    public function getPayhist()
    {
        return $this->_payhist;
    }

    /**
     * @return Logical
     */
    public function getChrgmile()
    {
        return $this->_chrgmile;
    }

    /**
     * @return Logical
     */
    public function getHalfmile()
    {
        return $this->_halfmile;
    }

    /**
     * @return Char
     */
    public function getLinkmast()
    {
        return $this->_linkmast;
    }

    /**
     * @return Logical
     */
    public function getPorequ()
    {
        return $this->_porequ;
    }

    /**
     * @return Char
     */
    public function getWhsno()
    {
        return $this->_whsno;
    }

    /**
     * @return Numeric
     */
    public function getMilerate()
    {
        return $this->_milerate;
    }

    /**
     * @return Logical
     */
    public function getChrgtravel()
    {
        return $this->_chrgtravel;
    }

    /**
     * @return Memo
     */
    public function getWoautnote()
    {
        return $this->_woautnote;
    }

    /**
     * @return Logical
     */
    public function getWoautntflg()
    {
        return $this->_woautntflg;
    }

    /**
     * @return Memo
     */
    public function getWoautonote()
    {
        return $this->_woautonote;
    }

    /**
     * @return Logical
     */
    public function getInactive()
    {
        return $this->_inactive;
    }

    /**
     * @return Memo
     */
    public function getColnotes()
    {
        return $this->_colnotes;
    }

    /**
     * @return Char
     */
    public function getEmailalt()
    {
        return $this->_emailalt;
    }

    /**
     * @return Numeric
     */
    public function getL2ytdsls()
    {
        return $this->_l2ytdsls;
    }

    /**
     * @return Char
     */
    public function getDriverlic()
    {
        return $this->_driverlic;
    }

    /**
     * @return Char
     */
    public function getSourceid()
    {
        return $this->_sourceid;
    }

    /**
     * @return Char
     */
    public function getGradeid()
    {
        return $this->_gradeid;
    }

    /**
     * @return Char
     */
    public function getMobile()
    {
        return $this->_mobile;
    }

    /**
     * @return Char
     */
    public function getWebpage()
    {
        return $this->_webpage;
    }

    /**
     * @return Logical
     */
    public function getCredokso()
    {
        return $this->_credokso;
    }

    /**
     * @return Logical
     */
    public function getOwnretail()
    {
        return $this->_ownretail;
    }

    /**
     * @return Char
     */
    public function getCusttype()
    {
        return $this->_custtype;
    }

    /**
     * @return Char
     */
    public function getTypecode()
    {
        return $this->_typecode;
    }

    /**
     * @return Char
     */
    public function getSellclass()
    {
        return $this->_sellclass;
    }

    /**
     * @return Numeric
     */
    public function getConsfact()
    {
        return $this->_consfact;
    }

    /**
     * @return Numeric
     */
    public function getConsup()
    {
        return $this->_consup;
    }

    /**
     * @return Logical
     */
    public function getCredoksono()
    {
        return $this->_credoksono;
    }

    /**
     * @return Logical
     */
    public function getNormaflag()
    {
        return $this->_normaflag;
    }

    /**
     * @return Logical
     */
    public function getInsurflag()
    {
        return $this->_insurflag;
    }

    /**
     * @return Numeric
     */
    public function getResptime()
    {
        return $this->_resptime;
    }

    /**
     * @return Logical
     */
    public function getEmailinv()
    {
        return $this->_emailinv;
    }

    /**
     * @return Memo
     */
    public function getPicktknote()
    {
        return $this->_picktknote;
    }

    /**
     * @return Char
     */
    public function getCc_secid()
    {
        return $this->_cc_secid;
    }

    /**
     * @return Char
     */
    public function getCc_address()
    {
        return $this->_cc_address;
    }

    /**
     * @return Char
     */
    public function getCc_city()
    {
        return $this->_cc_city;
    }

    /**
     * @return Char
     */
    public function getCc_state()
    {
        return $this->_cc_state;
    }

    /**
     * @return Char
     */
    public function getCc_zip()
    {
        return $this->_cc_zip;
    }

    /**
     * @return Logical
     */
    public function getCommoverr()
    {
        return $this->_commoverr;
    }

    /**
     * @return Char
     */
    public function getQblistid()
    {
        return $this->_qblistid;
    }

    /**
     * @return Char
     */
    public function getQbcustno()
    {
        return $this->_qbcustno;
    }

    /**
     * @return Numeric
     */
    public function getQbsublevel()
    {
        return $this->_qbsublevel;
    }

    /**
     * @return Char
     */
    public function getCountry_bl()
    {
        return $this->_country_bl;
    }

    /**
     * @return Char
     */
    public function getDaystocall()
    {
        return $this->_daystocall;
    }

    /**
     * @return Char
     */
    public function getDaystodel()
    {
        return $this->_daystodel;
    }

    /**
     * @return Numeric
     */
    public function getDelvmin()
    {
        return $this->_delvmin;
    }

    /**
     * @return Char
     */
    public function getEquipment()
    {
        return $this->_equipment;
    }

    /**
     * @return Date
     */
    public function getLastcalldt()
    {
        return $this->_lastcalldt;
    }

    /**
     * @return Char
     */
    public function getTimetocall()
    {
        return $this->_timetocall;
    }

    /**
     * @return Char
     */
    public function getGenfield1()
    {
        return $this->_genfield1;
    }

    /**
     * @return Char
     */
    public function getGenfield2()
    {
        return $this->_genfield2;
    }

    /**
     * @return Char
     */
    public function getGenfield3()
    {
        return $this->_genfield3;
    }

    /**
     * @return Logical
     */
    public function getNoamtsave()
    {
        return $this->_noamtsave;
    }

    /**
     * @return Char
     */
    public function getBckordstat()
    {
        return $this->_bckordstat;
    }

    /**
     * @return Char
     */
    public function getTobno()
    {
        return $this->_tobno;
    }

    /**
     * @return Char
     */
    public function getSotypecode()
    {
        return $this->_sotypecode;
    }

    /**
     * @return Char
     */
    public function getSotype()
    {
        return $this->_sotype;
    }

    /**
     * @return Numeric
     */
    public function getShpcartid()
    {
        return $this->_shpcartid;
    }

    /**
     * @return Numeric
     */
    public function getShpcartid0()
    {
        return $this->_shpcartid0;
    }

    /**
     * @return Char
     */
    public function getCc_notes()
    {
        return $this->_cc_notes;
    }

    /**
     * @return Logical
     */
    public function getCc_notsave()
    {
        return $this->_cc_notsave;
    }

    /**
     * @return Char
     */
    public function getEditype()
    {
        return $this->_editype;
    }

    /**
     * @return Char
     */
    public function getCc_refno()
    {
        return $this->_cc_refno;
    }

    /**
     * @return Numeric
     */
    public function getCc_amtrec()
    {
        return $this->_cc_amtrec;
    }

    /**
     * @return Char
     */
    public function getCc_paytype()
    {
        return $this->_cc_paytype;
    }

    /**
     * @return Char
     */
    public function getEdicustno()
    {
        return $this->_edicustno;
    }

    /**
     * @return Char
     */
    public function getCustitem()
    {
        return $this->_custitem;
    }

    /**
     * @return Char
     */
    public function getFrom_comp()
    {
        return $this->_from_comp;
    }

    /**
     * @return Char
     */
    public function getFrom_adrs1()
    {
        return $this->_from_adrs1;
    }

    /**
     * @return Char
     */
    public function getFrom_adrs2()
    {
        return $this->_from_adrs2;
    }

    /**
     * @return Char
     */
    public function getFrom_city()
    {
        return $this->_from_city;
    }

    /**
     * @return Char
     */
    public function getFrom_state()
    {
        return $this->_from_state;
    }

    /**
     * @return Char
     */
    public function getFrom_zip()
    {
        return $this->_from_zip;
    }

    /**
     * @return Char
     */
    public function getFrom_cntry()
    {
        return $this->_from_cntry;
    }

    /**
     * @return Logical
     */
    public function getLbl_shpfrm()
    {
        return $this->_lbl_shpfrm;
    }

    /**
     * @return Logical
     */
    public function getLbl_drpshp()
    {
        return $this->_lbl_drpshp;
    }

    /**
     * @return Logical
     */
    public function getLbl_3rdpty()
    {
        return $this->_lbl_3rdpty;
    }


    /**
     * Setters
     */

    /**
     * @param Char
     */
    public function setCustno($value)
    {
        $this->_custno = $value;
    }

    /**
     * @param Char
     */
    public function setCompany($value)
    {
        $this->_company = $value;
    }

    /**
     * @param Char
     */
    public function setContact($value)
    {
        $this->_contact = $value;
    }

    /**
     * @param Char
     */
    public function setTitle($value)
    {
        $this->_title = $value;
    }

    /**
     * @param Char
     */
    public function setContact1($value)
    {
        $this->_contact1 = $value;
    }

    /**
     * @param Char
     */
    public function setTitle1($value)
    {
        $this->_title1 = $value;
    }

    /**
     * @param Char
     */
    public function setAddress1($value)
    {
        $this->_address1 = $value;
    }

    /**
     * @param Char
     */
    public function setAddress2($value)
    {
        $this->_address2 = $value;
    }

    /**
     * @param Char
     */
    public function setAddress3($value)
    {
        $this->_address3 = $value;
    }

    /**
     * @param Char
     */
    public function setAddress4($value)
    {
        $this->_address4 = $value;
    }

    /**
     * @param Char
     */
    public function setAddress5($value)
    {
        $this->_address5 = $value;
    }

    /**
     * @param Char
     */
    public function setCity($value)
    {
        $this->_city = $value;
    }

    /**
     * @param Char
     */
    public function setState($value)
    {
        $this->_state = $value;
    }

    /**
     * @param Char
     */
    public function setFcountry($value)
    {
        $this->_fcountry = $value;
    }

    /**
     * @param Char
     */
    public function setZip($value)
    {
        $this->_zip = $value;
    }

    /**
     * @param Char
     */
    public function setPhone($value)
    {
        $this->_phone = $value;
    }

    /**
     * @param Char
     */
    public function setPhone1($value)
    {
        $this->_phone1 = $value;
    }

    /**
     * @param Char
     */
    public function setEmail($value)
    {
        $this->_email = $value;
    }

    /**
     * @param Char
     */
    public function setFax($value)
    {
        $this->_fax = $value;
    }

    /**
     * @param Char
     */
    public function setTaxid($value)
    {
        $this->_taxid = $value;
    }

    /**
     * @param Char
     */
    public function setFedid($value)
    {
        $this->_fedid = $value;
    }

    /**
     * @param Memo
     */
    public function setNotes($value)
    {
        $this->_notes = $value;
    }

    /**
     * @param Char
     */
    public function setTerr($value)
    {
        $this->_terr = $value;
    }

    /**
     * @param Char
     */
    public function setIndust($value)
    {
        $this->_indust = $value;
    }

    /**
     * @param Char
     */
    public function setSalesman($value)
    {
        $this->_salesman = $value;
    }

    /**
     * @param Numeric
     */
    public function setSlmcomm($value)
    {
        $this->_slmcomm = $value;
    }

    /**
     * @param Char
     */
    public function setSource($value)
    {
        $this->_source = $value;
    }

    /**
     * @param Char
     */
    public function setClass($value)
    {
        $this->_class = $value;
    }

    /**
     * @param Logical
     */
    public function setFinance($value)
    {
        $this->_finance = $value;
    }

    /**
     * @param Char
     */
    public function setTerms($value)
    {
        $this->_terms = $value;
    }

    /**
     * @param Char
     */
    public function setTerms1($value)
    {
        $this->_terms1 = $value;
    }

    /**
     * @param Char
     */
    public function setTermref($value)
    {
        $this->_termref = $value;
    }

    /**
     * @param Numeric
     */
    public function setDuedays($value)
    {
        $this->_duedays = $value;
    }

    /**
     * @param Numeric
     */
    public function setTermsdisc($value)
    {
        $this->_termsdisc = $value;
    }

    /**
     * @param Numeric
     */
    public function setDiscdays($value)
    {
        $this->_discdays = $value;
    }

    /**
     * @param Numeric
     */
    public function setLimit($value)
    {
        $this->_limit = $value;
    }

    /**
     * @param Numeric
     */
    public function setBalance($value)
    {
        $this->_balance = $value;
    }

    /**
     * @param Numeric
     */
    public function setUnpostbal($value)
    {
        $this->_unpostbal = $value;
    }

    /**
     * @param Numeric
     */
    public function setYtdsls($value)
    {
        $this->_ytdsls = $value;
    }

    /**
     * @param Numeric
     */
    public function setLytdsls($value)
    {
        $this->_lytdsls = $value;
    }

    /**
     * @param Numeric
     */
    public function setPtdsls($value)
    {
        $this->_ptdsls = $value;
    }

    /**
     * @param Numeric
     */
    public function setLpaydlr($value)
    {
        $this->_lpaydlr = $value;
    }

    /**
     * @param Date
     */
    public function setLpaydte($value)
    {
        $this->_lpaydte = $value;
    }

    /**
     * @param Date
     */
    public function setInday($value)
    {
        $this->_inday = $value;
    }

    /**
     * @param Char
     */
    public function setBalmethod($value)
    {
        $this->_balmethod = $value;
    }

    /**
     * @param Logical
     */
    public function setPrtstate($value)
    {
        $this->_prtstate = $value;
    }

    /**
     * @param Logical
     */
    public function setDunletter($value)
    {
        $this->_dunletter = $value;
    }

    /**
     * @param Date
     */
    public function setLdate($value)
    {
        $this->_ldate = $value;
    }

    /**
     * @param Numeric
     */
    public function setTax($value)
    {
        $this->_tax = $value;
    }

    /**
     * @param Logical
     */
    public function setTaxstat($value)
    {
        $this->_taxstat = $value;
    }

    /**
     * @param Logical
     */
    public function setAuto($value)
    {
        $this->_auto = $value;
    }

    /**
     * @param Numeric
     */
    public function setAutoamt($value)
    {
        $this->_autoamt = $value;
    }

    /**
     * @param Char
     */
    public function setAutoperiod($value)
    {
        $this->_autoperiod = $value;
    }

    /**
     * @param Char
     */
    public function setAutoacct($value)
    {
        $this->_autoacct = $value;
    }

    /**
     * @param Numeric
     */
    public function setCredit($value)
    {
        $this->_credit = $value;
    }

    /**
     * @param Char
     */
    public function setCode($value)
    {
        $this->_code = $value;
    }

    /**
     * @param Char
     */
    public function setPord($value)
    {
        $this->_pord = $value;
    }

    /**
     * @param Char
     */
    public function setLevel($value)
    {
        $this->_level = $value;
    }

    /**
     * @param Char
     */
    public function setShipto($value)
    {
        $this->_shipto = $value;
    }

    /**
     * @param Logical
     */
    public function setShippart($value)
    {
        $this->_shippart = $value;
    }

    /**
     * @param Char
     */
    public function setShipvia($value)
    {
        $this->_shipvia = $value;
    }

    /**
     * @param Char
     */
    public function setDom_exp($value)
    {
        $this->_dom_exp = $value;
    }

    /**
     * @param Date
     */
    public function setEntrydate($value)
    {
        $this->_entrydate = $value;
    }

    /**
     * @param Logical
     */
    public function setNflg0($value)
    {
        $this->_nflg0 = $value;
    }

    /**
     * @param Numeric
     */
    public function setTytdsls($value)
    {
        $this->_tytdsls = $value;
    }

    /**
     * @param Numeric
     */
    public function setTtotsls($value)
    {
        $this->_ttotsls = $value;
    }

    /**
     * @param Char
     */
    public function setPstatus($value)
    {
        $this->_pstatus = $value;
    }

    /**
     * @param Char
     */
    public function setPricecode($value)
    {
        $this->_pricecode = $value;
    }

    /**
     * @param Char
     */
    public function setProdcode($value)
    {
        $this->_prodcode = $value;
    }

    /**
     * @param Numeric
     */
    public function setDisc($value)
    {
        $this->_disc = $value;
    }

    /**
     * @param Logical
     */
    public function setCfsin($value)
    {
        $this->_cfsin = $value;
    }

    /**
     * @param Logical
     */
    public function setWhsin($value)
    {
        $this->_whsin = $value;
    }

    /**
     * @param Logical
     */
    public function setDomein($value)
    {
        $this->_domein = $value;
    }

    /**
     * @param Logical
     */
    public function setGoin($value)
    {
        $this->_goin = $value;
    }

    /**
     * @param Char
     */
    public function setPricec1($value)
    {
        $this->_pricec1 = $value;
    }

    /**
     * @param Char
     */
    public function setPricec2($value)
    {
        $this->_pricec2 = $value;
    }

    /**
     * @param Char
     */
    public function setPricec3($value)
    {
        $this->_pricec3 = $value;
    }

    /**
     * @param Char
     */
    public function setPricec4($value)
    {
        $this->_pricec4 = $value;
    }

    /**
     * @param Numeric
     */
    public function setChargetype($value)
    {
        $this->_chargetype = $value;
    }

    /**
     * @param Numeric
     */
    public function setDays1($value)
    {
        $this->_days1 = $value;
    }

    /**
     * @param Numeric
     */
    public function setDays2($value)
    {
        $this->_days2 = $value;
    }

    /**
     * @param Numeric
     */
    public function setDays3($value)
    {
        $this->_days3 = $value;
    }

    /**
     * @param Char
     */
    public function setPassword($value)
    {
        $this->_password = $value;
    }

    /**
     * @param Char
     */
    public function setAltcustno($value)
    {
        $this->_altcustno = $value;
    }

    /**
     * @param Char
     */
    public function setPre_nam($value)
    {
        $this->_pre_nam = $value;
    }

    /**
     * @param Char
     */
    public function setFirst_nam($value)
    {
        $this->_first_nam = $value;
    }

    /**
     * @param Char
     */
    public function setMid_nam($value)
    {
        $this->_mid_nam = $value;
    }

    /**
     * @param Char
     */
    public function setLast_nam($value)
    {
        $this->_last_nam = $value;
    }

    /**
     * @param Char
     */
    public function setSuf_nam($value)
    {
        $this->_suf_nam = $value;
    }

    /**
     * @param Char
     */
    public function setNamonbill($value)
    {
        $this->_namonbill = $value;
    }

    /**
     * @param Numeric
     */
    public function setDep_bal($value)
    {
        $this->_dep_bal = $value;
    }

    /**
     * @param Char
     */
    public function setCc_type($value)
    {
        $this->_cc_type = $value;
    }

    /**
     * @param Char
     */
    public function setCc_name($value)
    {
        $this->_cc_name = $value;
    }

    /**
     * @param Char
     */
    public function setCc_num($value)
    {
        $this->_cc_num = $value;
    }

    /**
     * @param Char
     */
    public function setCc_exp($value)
    {
        $this->_cc_exp = $value;
    }

    /**
     * @param Char
     */
    public function setCurr_type($value)
    {
        $this->_curr_type = $value;
    }

    /**
     * @param Numeric
     */
    public function setSync_bal($value)
    {
        $this->_sync_bal = $value;
    }

    /**
     * @param Char
     */
    public function setIcprefix($value)
    {
        $this->_icprefix = $value;
    }

    /**
     * @param Char
     */
    public function setSalesmn2($value)
    {
        $this->_salesmn2 = $value;
    }

    /**
     * @param Numeric
     */
    public function setComslmn2($value)
    {
        $this->_comslmn2 = $value;
    }

    /**
     * @param Char
     */
    public function setShiproute($value)
    {
        $this->_shiproute = $value;
    }

    /**
     * @param Char
     */
    public function setPriority($value)
    {
        $this->_priority = $value;
    }

    /**
     * @param Char
     */
    public function setCountry($value)
    {
        $this->_country = $value;
    }

    /**
     * @param Date
     */
    public function setRatedate($value)
    {
        $this->_ratedate = $value;
    }

    /**
     * @param Char
     */
    public function setIatacode($value)
    {
        $this->_iatacode = $value;
    }

    /**
     * @param Logical
     */
    public function setHold($value)
    {
        $this->_hold = $value;
    }

    /**
     * @param Char
     */
    public function setAddr1_bill($value)
    {
        $this->_addr1_bill = $value;
    }

    /**
     * @param Char
     */
    public function setAddr2_bill($value)
    {
        $this->_addr2_bill = $value;
    }

    /**
     * @param Char
     */
    public function setCity_bill($value)
    {
        $this->_city_bill = $value;
    }

    /**
     * @param Char
     */
    public function setState_bill($value)
    {
        $this->_state_bill = $value;
    }

    /**
     * @param Char
     */
    public function setZip_bill($value)
    {
        $this->_zip_bill = $value;
    }

    /**
     * @param Char
     */
    public function setPhone_bill($value)
    {
        $this->_phone_bill = $value;
    }

    /**
     * @param Char
     */
    public function setFax_bill($value)
    {
        $this->_fax_bill = $value;
    }

    /**
     * @param Char
     */
    public function setCont_bill($value)
    {
        $this->_cont_bill = $value;
    }

    /**
     * @param Char
     */
    public function setCont_awb($value)
    {
        $this->_cont_awb = $value;
    }

    /**
     * @param Char
     */
    public function setPhone_awb($value)
    {
        $this->_phone_awb = $value;
    }

    /**
     * @param Char
     */
    public function setFax_awb($value)
    {
        $this->_fax_awb = $value;
    }

    /**
     * @param Char
     */
    public function setEmail_awb($value)
    {
        $this->_email_awb = $value;
    }

    /**
     * @param Char
     */
    public function setComp_bill($value)
    {
        $this->_comp_bill = $value;
    }

    /**
     * @param Char
     */
    public function setEmail_bill($value)
    {
        $this->_email_bill = $value;
    }

    /**
     * @param Logical
     */
    public function setCrdhold($value)
    {
        $this->_crdhold = $value;
    }

    /**
     * @param Char
     */
    public function setTaxcode($value)
    {
        $this->_taxcode = $value;
    }

    /**
     * @param Char
     */
    public function setReference($value)
    {
        $this->_reference = $value;
    }

    /**
     * @param Char
     */
    public function setUsername($value)
    {
        $this->_username = $value;
    }

    /**
     * @param Logical
     */
    public function setWebactive($value)
    {
        $this->_webactive = $value;
    }

    /**
     * @param Logical
     */
    public function setWebsyncflg($value)
    {
        $this->_websyncflg = $value;
    }

    /**
     * @param Char
     */
    public function setWmsprcode($value)
    {
        $this->_wmsprcode = $value;
    }

    /**
     * @param Date
     */
    public function setStochdate($value)
    {
        $this->_stochdate = $value;
    }

    /**
     * @param Char
     */
    public function setPhone2($value)
    {
        $this->_phone2 = $value;
    }

    /**
     * @param Char
     */
    public function setFtaxcode($value)
    {
        $this->_ftaxcode = $value;
    }

    /**
     * @param Char
     */
    public function setVendno($value)
    {
        $this->_vendno = $value;
    }

    /**
     * @param Char
     */
    public function setBaseid($value)
    {
        $this->_baseid = $value;
    }

    /**
     * @param Char
     */
    public function setRegionid($value)
    {
        $this->_regionid = $value;
    }

    /**
     * @param Char
     */
    public function setBasecode($value)
    {
        $this->_basecode = $value;
    }

    /**
     * @param Char
     */
    public function setGlaracct($value)
    {
        $this->_glaracct = $value;
    }

    /**
     * @param Numeric
     */
    public function setUnpostaux($value)
    {
        $this->_unpostaux = $value;
    }

    /**
     * @param Char
     */
    public function setTaxmiscid($value)
    {
        $this->_taxmiscid = $value;
    }

    /**
     * @param Char
     */
    public function setApglacct($value)
    {
        $this->_apglacct = $value;
    }

    /**
     * @param Char
     */
    public function setFupdtime($value)
    {
        $this->_fupdtime = $value;
    }

    /**
     * @param Date
     */
    public function setFupddate($value)
    {
        $this->_fupddate = $value;
    }

    /**
     * @param Char
     */
    public function setFstation($value)
    {
        $this->_fstation = $value;
    }

    /**
     * @param Char
     */
    public function setFuserid($value)
    {
        $this->_fuserid = $value;
    }

    /**
     * @param Logical
     */
    public function setHalftrav($value)
    {
        $this->_halftrav = $value;
    }

    /**
     * @param Logical
     */
    public function setTaxparts($value)
    {
        $this->_taxparts = $value;
    }

    /**
     * @param Logical
     */
    public function setTaxlabor($value)
    {
        $this->_taxlabor = $value;
    }

    /**
     * @param Char
     */
    public function setPayhist($value)
    {
        $this->_payhist = $value;
    }

    /**
     * @param Logical
     */
    public function setChrgmile($value)
    {
        $this->_chrgmile = $value;
    }

    /**
     * @param Logical
     */
    public function setHalfmile($value)
    {
        $this->_halfmile = $value;
    }

    /**
     * @param Char
     */
    public function setLinkmast($value)
    {
        $this->_linkmast = $value;
    }

    /**
     * @param Logical
     */
    public function setPorequ($value)
    {
        $this->_porequ = $value;
    }

    /**
     * @param Char
     */
    public function setWhsno($value)
    {
        $this->_whsno = $value;
    }

    /**
     * @param Numeric
     */
    public function setMilerate($value)
    {
        $this->_milerate = $value;
    }

    /**
     * @param Logical
     */
    public function setChrgtravel($value)
    {
        $this->_chrgtravel = $value;
    }

    /**
     * @param Memo
     */
    public function setWoautnote($value)
    {
        $this->_woautnote = $value;
    }

    /**
     * @param Logical
     */
    public function setWoautntflg($value)
    {
        $this->_woautntflg = $value;
    }

    /**
     * @param Memo
     */
    public function setWoautonote($value)
    {
        $this->_woautonote = $value;
    }

    /**
     * @param Logical
     */
    public function setInactive($value)
    {
        $this->_inactive = $value;
    }

    /**
     * @param Memo
     */
    public function setColnotes($value)
    {
        $this->_colnotes = $value;
    }

    /**
     * @param Char
     */
    public function setEmailalt($value)
    {
        $this->_emailalt = $value;
    }

    /**
     * @param Numeric
     */
    public function setL2ytdsls($value)
    {
        $this->_l2ytdsls = $value;
    }

    /**
     * @param Char
     */
    public function setDriverlic($value)
    {
        $this->_driverlic = $value;
    }

    /**
     * @param Char
     */
    public function setSourceid($value)
    {
        $this->_sourceid = $value;
    }

    /**
     * @param Char
     */
    public function setGradeid($value)
    {
        $this->_gradeid = $value;
    }

    /**
     * @param Char
     */
    public function setMobile($value)
    {
        $this->_mobile = $value;
    }

    /**
     * @param Char
     */
    public function setWebpage($value)
    {
        $this->_webpage = $value;
    }

    /**
     * @param Logical
     */
    public function setCredokso($value)
    {
        $this->_credokso = $value;
    }

    /**
     * @param Logical
     */
    public function setOwnretail($value)
    {
        $this->_ownretail = $value;
    }

    /**
     * @param Char
     */
    public function setCusttype($value)
    {
        $this->_custtype = $value;
    }

    /**
     * @param Char
     */
    public function setTypecode($value)
    {
        $this->_typecode = $value;
    }

    /**
     * @param Char
     */
    public function setSellclass($value)
    {
        $this->_sellclass = $value;
    }

    /**
     * @param Numeric
     */
    public function setConsfact($value)
    {
        $this->_consfact = $value;
    }

    /**
     * @param Numeric
     */
    public function setConsup($value)
    {
        $this->_consup = $value;
    }

    /**
     * @param Logical
     */
    public function setCredoksono($value)
    {
        $this->_credoksono = $value;
    }

    /**
     * @param Logical
     */
    public function setNormaflag($value)
    {
        $this->_normaflag = $value;
    }

    /**
     * @param Logical
     */
    public function setInsurflag($value)
    {
        $this->_insurflag = $value;
    }

    /**
     * @param Numeric
     */
    public function setResptime($value)
    {
        $this->_resptime = $value;
    }

    /**
     * @param Logical
     */
    public function setEmailinv($value)
    {
        $this->_emailinv = $value;
    }

    /**
     * @param Memo
     */
    public function setPicktknote($value)
    {
        $this->_picktknote = $value;
    }

    /**
     * @param Char
     */
    public function setCc_secid($value)
    {
        $this->_cc_secid = $value;
    }

    /**
     * @param Char
     */
    public function setCc_address($value)
    {
        $this->_cc_address = $value;
    }

    /**
     * @param Char
     */
    public function setCc_city($value)
    {
        $this->_cc_city = $value;
    }

    /**
     * @param Char
     */
    public function setCc_state($value)
    {
        $this->_cc_state = $value;
    }

    /**
     * @param Char
     */
    public function setCc_zip($value)
    {
        $this->_cc_zip = $value;
    }

    /**
     * @param Logical
     */
    public function setCommoverr($value)
    {
        $this->_commoverr = $value;
    }

    /**
     * @param Char
     */
    public function setQblistid($value)
    {
        $this->_qblistid = $value;
    }

    /**
     * @param Char
     */
    public function setQbcustno($value)
    {
        $this->_qbcustno = $value;
    }

    /**
     * @param Numeric
     */
    public function setQbsublevel($value)
    {
        $this->_qbsublevel = $value;
    }

    /**
     * @param Char
     */
    public function setCountry_bl($value)
    {
        $this->_country_bl = $value;
    }

    /**
     * @param Char
     */
    public function setDaystocall($value)
    {
        $this->_daystocall = $value;
    }

    /**
     * @param Char
     */
    public function setDaystodel($value)
    {
        $this->_daystodel = $value;
    }

    /**
     * @param Numeric
     */
    public function setDelvmin($value)
    {
        $this->_delvmin = $value;
    }

    /**
     * @param Char
     */
    public function setEquipment($value)
    {
        $this->_equipment = $value;
    }

    /**
     * @param Date
     */
    public function setLastcalldt($value)
    {
        $this->_lastcalldt = $value;
    }

    /**
     * @param Char
     */
    public function setTimetocall($value)
    {
        $this->_timetocall = $value;
    }

    /**
     * @param Char
     */
    public function setGenfield1($value)
    {
        $this->_genfield1 = $value;
    }

    /**
     * @param Char
     */
    public function setGenfield2($value)
    {
        $this->_genfield2 = $value;
    }

    /**
     * @param Char
     */
    public function setGenfield3($value)
    {
        $this->_genfield3 = $value;
    }

    /**
     * @param Logical
     */
    public function setNoamtsave($value)
    {
        $this->_noamtsave = $value;
    }

    /**
     * @param Char
     */
    public function setBckordstat($value)
    {
        $this->_bckordstat = $value;
    }

    /**
     * @param Char
     */
    public function setTobno($value)
    {
        $this->_tobno = $value;
    }

    /**
     * @param Char
     */
    public function setSotypecode($value)
    {
        $this->_sotypecode = $value;
    }

    /**
     * @param Char
     */
    public function setSotype($value)
    {
        $this->_sotype = $value;
    }

    /**
     * @param Numeric
     */
    public function setShpcartid($value)
    {
        $this->_shpcartid = $value;
    }

    /**
     * @param Numeric
     */
    public function setShpcartid0($value)
    {
        $this->_shpcartid0 = $value;
    }

    /**
     * @param Char
     */
    public function setCc_notes($value)
    {
        $this->_cc_notes = $value;
    }

    /**
     * @param Logical
     */
    public function setCc_notsave($value)
    {
        $this->_cc_notsave = $value;
    }

    /**
     * @param Char
     */
    public function setEditype($value)
    {
        $this->_editype = $value;
    }

    /**
     * @param Char
     */
    public function setCc_refno($value)
    {
        $this->_cc_refno = $value;
    }

    /**
     * @param Numeric
     */
    public function setCc_amtrec($value)
    {
        $this->_cc_amtrec = $value;
    }

    /**
     * @param Char
     */
    public function setCc_paytype($value)
    {
        $this->_cc_paytype = $value;
    }

    /**
     * @param Char
     */
    public function setEdicustno($value)
    {
        $this->_edicustno = $value;
    }

    /**
     * @param Char
     */
    public function setCustitem($value)
    {
        $this->_custitem = $value;
    }

    /**
     * @param Char
     */
    public function setFrom_comp($value)
    {
        $this->_from_comp = $value;
    }

    /**
     * @param Char
     */
    public function setFrom_adrs1($value)
    {
        $this->_from_adrs1 = $value;
    }

    /**
     * @param Char
     */
    public function setFrom_adrs2($value)
    {
        $this->_from_adrs2 = $value;
    }

    /**
     * @param Char
     */
    public function setFrom_city($value)
    {
        $this->_from_city = $value;
    }

    /**
     * @param Char
     */
    public function setFrom_state($value)
    {
        $this->_from_state = $value;
    }

    /**
     * @param Char
     */
    public function setFrom_zip($value)
    {
        $this->_from_zip = $value;
    }

    /**
     * @param Char
     */
    public function setFrom_cntry($value)
    {
        $this->_from_cntry = $value;
    }

    /**
     * @param Logical
     */
    public function setLbl_shpfrm($value)
    {
        $this->_lbl_shpfrm = $value;
    }

    /**
     * @param Logical
     */
    public function setLbl_drpshp($value)
    {
        $this->_lbl_drpshp = $value;
    }

    /**
     * @param Logical
     */
    public function setLbl_3rdpty($value)
    {
        $this->_lbl_3rdpty = $value;
    }


    /**
     * Constructor
     */
    public function __construct($custno, $company, $contact, $title, $contact1, $title1, $address1, $address2, $address3, $address4, $address5, $city, $state, $fcountry, $zip, $phone, $phone1, $email, $fax, $taxid, $fedid, $notes, $terr, $indust, $salesman, $slmcomm, $source, $class, $finance, $terms, $terms1, $termref, $duedays, $termsdisc, $discdays, $limit, $balance, $unpostbal, $ytdsls, $lytdsls, $ptdsls, $lpaydlr, $lpaydte, $inday, $balmethod, $prtstate, $dunletter, $ldate, $tax, $taxstat, $auto, $autoamt, $autoperiod, $autoacct, $credit, $code, $pord, $level, $shipto, $shippart, $shipvia, $dom_exp, $entrydate, $nflg0, $tytdsls, $ttotsls, $pstatus, $pricecode, $prodcode, $disc, $cfsin, $whsin, $domein, $goin, $pricec1, $pricec2, $pricec3, $pricec4, $chargetype, $days1, $days2, $days3, $password, $altcustno, $pre_nam, $first_nam, $mid_nam, $last_nam, $suf_nam, $namonbill, $dep_bal, $cc_type, $cc_name, $cc_num, $cc_exp, $curr_type, $sync_bal, $icprefix, $salesmn2, $comslmn2, $shiproute, $priority, $country, $ratedate, $iatacode, $hold, $addr1_bill, $addr2_bill, $city_bill, $state_bill, $zip_bill, $phone_bill, $fax_bill, $cont_bill, $cont_awb, $phone_awb, $fax_awb, $email_awb, $comp_bill, $email_bill, $crdhold, $taxcode, $reference, $username, $webactive, $websyncflg, $wmsprcode, $stochdate, $phone2, $ftaxcode, $vendno, $baseid, $regionid, $basecode, $glaracct, $unpostaux, $taxmiscid, $apglacct, $fupdtime, $fupddate, $fstation, $fuserid, $halftrav, $taxparts, $taxlabor, $payhist, $chrgmile, $halfmile, $linkmast, $porequ, $whsno, $milerate, $chrgtravel, $woautnote, $woautntflg, $woautonote, $inactive, $colnotes, $emailalt, $l2ytdsls, $driverlic, $sourceid, $gradeid, $mobile, $webpage, $credokso, $ownretail, $custtype, $typecode, $sellclass, $consfact, $consup, $credoksono, $normaflag, $insurflag, $resptime, $emailinv, $picktknote, $cc_secid, $cc_address, $cc_city, $cc_state, $cc_zip, $commoverr, $qblistid, $qbcustno, $qbsublevel, $country_bl, $daystocall, $daystodel, $delvmin, $equipment, $lastcalldt, $timetocall, $genfield1, $genfield2, $genfield3, $noamtsave, $bckordstat, $tobno, $sotypecode, $sotype, $shpcartid, $shpcartid0, $cc_notes, $cc_notsave, $editype, $cc_refno, $cc_amtrec, $cc_paytype, $edicustno, $custitem, $from_comp, $from_adrs1, $from_adrs2, $from_city, $from_state, $from_zip, $from_cntry, $lbl_shpfrm, $lbl_drpshp, $lbl_3rdpty)
    {
        $this->_custno = $custno;
        $this->_company = $company;
        $this->_contact = $contact;
        $this->_title = $title;
        $this->_contact1 = $contact1;
        $this->_title1 = $title1;
        $this->_address1 = $address1;
        $this->_address2 = $address2;
        $this->_address3 = $address3;
        $this->_address4 = $address4;
        $this->_address5 = $address5;
        $this->_city = $city;
        $this->_state = $state;
        $this->_fcountry = $fcountry;
        $this->_zip = $zip;
        $this->_phone = $phone;
        $this->_phone1 = $phone1;
        $this->_email = $email;
        $this->_fax = $fax;
        $this->_taxid = $taxid;
        $this->_fedid = $fedid;
        $this->_notes = $notes;
        $this->_terr = $terr;
        $this->_indust = $indust;
        $this->_salesman = $salesman;
        $this->_slmcomm = $slmcomm;
        $this->_source = $source;
        $this->_class = $class;
        $this->_finance = $finance;
        $this->_terms = $terms;
        $this->_terms1 = $terms1;
        $this->_termref = $termref;
        $this->_duedays = $duedays;
        $this->_termsdisc = $termsdisc;
        $this->_discdays = $discdays;
        $this->_limit = $limit;
        $this->_balance = $balance;
        $this->_unpostbal = $unpostbal;
        $this->_ytdsls = $ytdsls;
        $this->_lytdsls = $lytdsls;
        $this->_ptdsls = $ptdsls;
        $this->_lpaydlr = $lpaydlr;
        $this->_lpaydte = $lpaydte;
        $this->_inday = $inday;
        $this->_balmethod = $balmethod;
        $this->_prtstate = $prtstate;
        $this->_dunletter = $dunletter;
        $this->_ldate = $ldate;
        $this->_tax = $tax;
        $this->_taxstat = $taxstat;
        $this->_auto = $auto;
        $this->_autoamt = $autoamt;
        $this->_autoperiod = $autoperiod;
        $this->_autoacct = $autoacct;
        $this->_credit = $credit;
        $this->_code = $code;
        $this->_pord = $pord;
        $this->_level = $level;
        $this->_shipto = $shipto;
        $this->_shippart = $shippart;
        $this->_shipvia = $shipvia;
        $this->_dom_exp = $dom_exp;
        $this->_entrydate = $entrydate;
        $this->_nflg0 = $nflg0;
        $this->_tytdsls = $tytdsls;
        $this->_ttotsls = $ttotsls;
        $this->_pstatus = $pstatus;
        $this->_pricecode = $pricecode;
        $this->_prodcode = $prodcode;
        $this->_disc = $disc;
        $this->_cfsin = $cfsin;
        $this->_whsin = $whsin;
        $this->_domein = $domein;
        $this->_goin = $goin;
        $this->_pricec1 = $pricec1;
        $this->_pricec2 = $pricec2;
        $this->_pricec3 = $pricec3;
        $this->_pricec4 = $pricec4;
        $this->_chargetype = $chargetype;
        $this->_days1 = $days1;
        $this->_days2 = $days2;
        $this->_days3 = $days3;
        $this->_password = $password;
        $this->_altcustno = $altcustno;
        $this->_pre_nam = $pre_nam;
        $this->_first_nam = $first_nam;
        $this->_mid_nam = $mid_nam;
        $this->_last_nam = $last_nam;
        $this->_suf_nam = $suf_nam;
        $this->_namonbill = $namonbill;
        $this->_dep_bal = $dep_bal;
        $this->_cc_type = $cc_type;
        $this->_cc_name = $cc_name;
        $this->_cc_num = $cc_num;
        $this->_cc_exp = $cc_exp;
        $this->_curr_type = $curr_type;
        $this->_sync_bal = $sync_bal;
        $this->_icprefix = $icprefix;
        $this->_salesmn2 = $salesmn2;
        $this->_comslmn2 = $comslmn2;
        $this->_shiproute = $shiproute;
        $this->_priority = $priority;
        $this->_country = $country;
        $this->_ratedate = $ratedate;
        $this->_iatacode = $iatacode;
        $this->_hold = $hold;
        $this->_addr1_bill = $addr1_bill;
        $this->_addr2_bill = $addr2_bill;
        $this->_city_bill = $city_bill;
        $this->_state_bill = $state_bill;
        $this->_zip_bill = $zip_bill;
        $this->_phone_bill = $phone_bill;
        $this->_fax_bill = $fax_bill;
        $this->_cont_bill = $cont_bill;
        $this->_cont_awb = $cont_awb;
        $this->_phone_awb = $phone_awb;
        $this->_fax_awb = $fax_awb;
        $this->_email_awb = $email_awb;
        $this->_comp_bill = $comp_bill;
        $this->_email_bill = $email_bill;
        $this->_crdhold = $crdhold;
        $this->_taxcode = $taxcode;
        $this->_reference = $reference;
        $this->_username = $username;
        $this->_webactive = $webactive;
        $this->_websyncflg = $websyncflg;
        $this->_wmsprcode = $wmsprcode;
        $this->_stochdate = $stochdate;
        $this->_phone2 = $phone2;
        $this->_ftaxcode = $ftaxcode;
        $this->_vendno = $vendno;
        $this->_baseid = $baseid;
        $this->_regionid = $regionid;
        $this->_basecode = $basecode;
        $this->_glaracct = $glaracct;
        $this->_unpostaux = $unpostaux;
        $this->_taxmiscid = $taxmiscid;
        $this->_apglacct = $apglacct;
        $this->_fupdtime = $fupdtime;
        $this->_fupddate = $fupddate;
        $this->_fstation = $fstation;
        $this->_fuserid = $fuserid;
        $this->_halftrav = $halftrav;
        $this->_taxparts = $taxparts;
        $this->_taxlabor = $taxlabor;
        $this->_payhist = $payhist;
        $this->_chrgmile = $chrgmile;
        $this->_halfmile = $halfmile;
        $this->_linkmast = $linkmast;
        $this->_porequ = $porequ;
        $this->_whsno = $whsno;
        $this->_milerate = $milerate;
        $this->_chrgtravel = $chrgtravel;
        $this->_woautnote = $woautnote;
        $this->_woautntflg = $woautntflg;
        $this->_woautonote = $woautonote;
        $this->_inactive = $inactive;
        $this->_colnotes = $colnotes;
        $this->_emailalt = $emailalt;
        $this->_l2ytdsls = $l2ytdsls;
        $this->_driverlic = $driverlic;
        $this->_sourceid = $sourceid;
        $this->_gradeid = $gradeid;
        $this->_mobile = $mobile;
        $this->_webpage = $webpage;
        $this->_credokso = $credokso;
        $this->_ownretail = $ownretail;
        $this->_custtype = $custtype;
        $this->_typecode = $typecode;
        $this->_sellclass = $sellclass;
        $this->_consfact = $consfact;
        $this->_consup = $consup;
        $this->_credoksono = $credoksono;
        $this->_normaflag = $normaflag;
        $this->_insurflag = $insurflag;
        $this->_resptime = $resptime;
        $this->_emailinv = $emailinv;
        $this->_picktknote = $picktknote;
        $this->_cc_secid = $cc_secid;
        $this->_cc_address = $cc_address;
        $this->_cc_city = $cc_city;
        $this->_cc_state = $cc_state;
        $this->_cc_zip = $cc_zip;
        $this->_commoverr = $commoverr;
        $this->_qblistid = $qblistid;
        $this->_qbcustno = $qbcustno;
        $this->_qbsublevel = $qbsublevel;
        $this->_country_bl = $country_bl;
        $this->_daystocall = $daystocall;
        $this->_daystodel = $daystodel;
        $this->_delvmin = $delvmin;
        $this->_equipment = $equipment;
        $this->_lastcalldt = $lastcalldt;
        $this->_timetocall = $timetocall;
        $this->_genfield1 = $genfield1;
        $this->_genfield2 = $genfield2;
        $this->_genfield3 = $genfield3;
        $this->_noamtsave = $noamtsave;
        $this->_bckordstat = $bckordstat;
        $this->_tobno = $tobno;
        $this->_sotypecode = $sotypecode;
        $this->_sotype = $sotype;
        $this->_shpcartid = $shpcartid;
        $this->_shpcartid0 = $shpcartid0;
        $this->_cc_notes = $cc_notes;
        $this->_cc_notsave = $cc_notsave;
        $this->_editype = $editype;
        $this->_cc_refno = $cc_refno;
        $this->_cc_amtrec = $cc_amtrec;
        $this->_cc_paytype = $cc_paytype;
        $this->_edicustno = $edicustno;
        $this->_custitem = $custitem;
        $this->_from_comp = $from_comp;
        $this->_from_adrs1 = $from_adrs1;
        $this->_from_adrs2 = $from_adrs2;
        $this->_from_city = $from_city;
        $this->_from_state = $from_state;
        $this->_from_zip = $from_zip;
        $this->_from_cntry = $from_cntry;
        $this->_lbl_shpfrm = $lbl_shpfrm;
        $this->_lbl_drpshp = $lbl_drpshp;
        $this->_lbl_3rdpty = $lbl_3rdpty;

    }

    public static function toString()
    {
        return self::$_name;
    }

}