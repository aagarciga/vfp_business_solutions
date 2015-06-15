<?php

/**
 * Project:  VFP Business Series
 * Copyright: 2014. VFP Business Solutions, LLC
 */

namespace Dandelion\MVC\Application\Models\Entities\Base;

/**
 * BaseSYCOMP
 */
class BaseSYCOMP {

    /**
     * Private fields
     */
    private static $_name = "SYCOMP";

    /**
     * Protected fields
     */

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
    protected $_city;

    /**
     * @var Char
     */
    protected $_state;

    /**
     * @var Char
     */
    protected $_country;

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
    protected $_fax;

    /**
     * @var Char
     */
    protected $_email;

    /**
     * @var Char
     */
    protected $_internet;

    /**
     * @var Logical
     */
    protected $_socolcommi;

    /**
     * @var Logical
     */
    protected $_ivcolcommi;

    /**
     * @var Logical
     */
    protected $_qucolcommi;

    /**
     * @var Logical
     */
    protected $_socolcost;

    /**
     * @var Logical
     */
    protected $_socomm;

    /**
     * @var Logical
     */
    protected $_sosubd;

    /**
     * @var Logical
     */
    protected $_ivsubd;

    /**
     * @var Logical
     */
    protected $_icover;

    /**
     * @var Logical
     */
    protected $_start;

    /**
     * @var Char
     */
    protected $_serial;

    /**
     * @var Memo
     */
    protected $_logo;

    /**
     * @var Numeric
     */
    protected $_fconvert;

    /**
     * @var Char
     */
    protected $_flang_ctrl;

    /**
     * @var Char
     */
    protected $_fedidnmbr;

    /**
     * @var Char
     */
    protected $_stidnmbr;

    /**
     * @var Logical
     */
    protected $_fmex;

    /**
     * @var Numeric
     */
    protected $_fdecimal;

    /**
     * @var Char
     */
    protected $_fnumber;

    /**
     * @var Numeric
     */
    protected $_glbatch_no;

    /**
     * @var Char
     */
    protected $_ret_earn;

    /**
     * @var Numeric
     */
    protected $_periods;

    /**
     * @var Date
     */
    protected $_closedate;

    /**
     * @var Numeric
     */
    protected $_currperiod;

    /**
     * @var Char
     */
    protected $_aracct;

    /**
     * @var Char
     */
    protected $_ardisacct;

    /**
     * @var Char
     */
    protected $_cashacct;

    /**
     * @var Char
     */
    protected $_finance;

    /**
     * @var Numeric
     */
    protected $_interest;

    /**
     * @var Numeric
     */
    protected $_scno;

    /**
     * @var Numeric
     */
    protected $_cashflow1;

    /**
     * @var Numeric
     */
    protected $_cashflow2;

    /**
     * @var Numeric
     */
    protected $_cashflow3;

    /**
     * @var Numeric
     */
    protected $_cashflow4;

    /**
     * @var Numeric
     */
    protected $_cashflow5;

    /**
     * @var Numeric
     */
    protected $_arbatch_no;

    /**
     * @var Numeric
     */
    protected $_custno;

    /**
     * @var Numeric
     */
    protected $_farage1;

    /**
     * @var Numeric
     */
    protected $_farage2;

    /**
     * @var Numeric
     */
    protected $_farage3;

    /**
     * @var Numeric
     */
    protected $_farage4;

    /**
     * @var Numeric
     */
    protected $_farage5;

    /**
     * @var Numeric
     */
    protected $_min_fin;

    /**
     * @var Date
     */
    protected $_arclosedt;

    /**
     * @var Numeric
     */
    protected $_arcurper;

    /**
     * @var Numeric
     */
    protected $_apply_no;

    /**
     * @var Char
     */
    protected $_cashflow;

    /**
     * @var Numeric
     */
    protected $_voucher;

    /**
     * @var Char
     */
    protected $_apdisacct;

    /**
     * @var Char
     */
    protected $_apacct;

    /**
     * @var Char
     */
    protected $_apcashacct;

    /**
     * @var Numeric
     */
    protected $_apbatch_no;

    /**
     * @var Numeric
     */
    protected $_vencode;

    /**
     * @var Numeric
     */
    protected $_fapage1;

    /**
     * @var Numeric
     */
    protected $_fapage2;

    /**
     * @var Numeric
     */
    protected $_fapage3;

    /**
     * @var Numeric
     */
    protected $_fapage4;

    /**
     * @var Numeric
     */
    protected $_fapage5;

    /**
     * @var Date
     */
    protected $_apclosedt;

    /**
     * @var Numeric
     */
    protected $_apcurper;

    /**
     * @var Numeric
     */
    protected $_apckno;

    /**
     * @var Char
     */
    protected $_invacct;

    /**
     * @var Char
     */
    protected $_costacct;

    /**
     * @var Numeric
     */
    protected $_icbatch_no;

    /**
     * @var Numeric
     */
    protected $_icrecno;

    /**
     * @var Numeric
     */
    protected $_maximum;

    /**
     * @var Numeric
     */
    protected $_minimum;

    /**
     * @var Char
     */
    protected $_icprifact;

    /**
     * @var Char
     */
    protected $_iccstfact;

    /**
     * @var Date
     */
    protected $_icclosedt;

    /**
     * @var Numeric
     */
    protected $_iccurper;

    /**
     * @var Numeric
     */
    protected $_ictrxno;

    /**
     * @var Numeric
     */
    protected $_icphyno;

    /**
     * @var Numeric
     */
    protected $_pono;

    /**
     * @var Numeric
     */
    protected $_potaxrate;

    /**
     * @var Numeric
     */
    protected $_pobatch_no;

    /**
     * @var Logical
     */
    protected $_poprupd;

    /**
     * @var Logical
     */
    protected $_podescflg;

    /**
     * @var Numeric
     */
    protected $_podescno;

    /**
     * @var Char
     */
    protected $_poauxacct;

    /**
     * @var Char
     */
    protected $_buyer;

    /**
     * @var Numeric
     */
    protected $_porrnum;

    /**
     * @var Numeric
     */
    protected $_refno;

    /**
     * @var Numeric
     */
    protected $_qutno;

    /**
     * @var Numeric
     */
    protected $_oeno;

    /**
     * @var Char
     */
    protected $_fshipvia;

    /**
     * @var Char
     */
    protected $_fshipfrm;

    /**
     * @var Numeric
     */
    protected $_invno;

    /**
     * @var Char
     */
    protected $_salesacct;

    /**
     * @var Char
     */
    protected $_shipacct;

    /**
     * @var Char
     */
    protected $_taxacct;

    /**
     * @var Numeric
     */
    protected $_restock;

    /**
     * @var Numeric
     */
    protected $_fcrdno;

    /**
     * @var Memo
     */
    protected $_invposmes;

    /**
     * @var Char
     */
    protected $_fposwhs;

    /**
     * @var Logical
     */
    protected $_fpostax;

    /**
     * @var Numeric
     */
    protected $_fposinv;

    /**
     * @var Numeric
     */
    protected $_qutreqnot;

    /**
     * @var Numeric
     */
    protected $_qutreqno;

    /**
     * @var Numeric
     */
    protected $_whsno;

    /**
     * @var Numeric
     */
    protected $_tallyno;

    /**
     * @var Numeric
     */
    protected $_whsfwair;

    /**
     * @var Numeric
     */
    protected $_whsfwsea;

    /**
     * @var Numeric
     */
    protected $_whsfacwei;

    /**
     * @var Memo
     */
    protected $_whsdecla;

    /**
     * @var Char
     */
    protected $_auto;

    /**
     * @var Char
     */
    protected $_farange;

    /**
     * @var Logical
     */
    protected $_fsalecom;

    /**
     * @var Numeric
     */
    protected $_workreq;

    /**
     * @var Numeric
     */
    protected $_shipinst;

    /**
     * @var Numeric
     */
    protected $_material;

    /**
     * @var Logical
     */
    protected $_cityla;

    /**
     * @var Char
     */
    protected $_def_dept;

    /**
     * @var Char
     */
    protected $_swprice0;

    /**
     * @var Numeric
     */
    protected $_taxrate;

    /**
     * @var Numeric
     */
    protected $_rimno;

    /**
     * @var Numeric
     */
    protected $_messno;

    /**
     * @var Numeric
     */
    protected $_messlocno;

    /**
     * @var Numeric
     */
    protected $_tmpnumber;

    /**
     * @var Numeric
     */
    protected $_peramt;

    /**
     * @var Numeric
     */
    protected $_awbno;

    /**
     * @var Numeric
     */
    protected $_awbrefe;

    /**
     * @var Numeric
     */
    protected $_bolrefe;

    /**
     * @var Numeric
     */
    protected $_commiby;

    /**
     * @var Numeric
     */
    protected $_insurance;

    /**
     * @var Numeric
     */
    protected $_prcommi1;

    /**
     * @var Numeric
     */
    protected $_prcommi2;

    /**
     * @var Numeric
     */
    protected $_prcommi3;

    /**
     * @var Numeric
     */
    protected $_prcommi4;

    /**
     * @var Numeric
     */
    protected $_prcommi5;

    /**
     * @var Numeric
     */
    protected $_prcommi6;

    /**
     * @var Logical
     */
    protected $_itmdisc;

    /**
     * @var Logical
     */
    protected $_faxserver;

    /**
     * @var Char
     */
    protected $_faxname;

    /**
     * @var Char
     */
    protected $_faxtype;

    /**
     * @var Logical
     */
    protected $_barcode;

    /**
     * @var Char
     */
    protected $_port;

    /**
     * @var Char
     */
    protected $_portsetup;

    /**
     * @var Numeric
     */
    protected $_qtytermina;

    /**
     * @var Logical
     */
    protected $_soclose;

    /**
     * @var Char
     */
    protected $_whsdef;

    /**
     * @var Logical
     */
    protected $_commcust;

    /**
     * @var Numeric
     */
    protected $_ivbatch_no;

    /**
     * @var Numeric
     */
    protected $_fdbtno;

    /**
     * @var Logical
     */
    protected $_linkqb;

    /**
     * @var Char
     */
    protected $_mailserver;

    /**
     * @var Char
     */
    protected $_ivcopy1;

    /**
     * @var Char
     */
    protected $_ivcopy2;

    /**
     * @var Char
     */
    protected $_ivcopy3;

    /**
     * @var Char
     */
    protected $_ivcopy4;

    /**
     * @var Char
     */
    protected $_ivcopy5;

    /**
     * @var Memo
     */
    protected $_ivdecla;

    /**
     * @var Logical
     */
    protected $_ivsignatu;

    /**
     * @var Char
     */
    protected $_pocopy1;

    /**
     * @var Char
     */
    protected $_pocopy2;

    /**
     * @var Char
     */
    protected $_pocopy3;

    /**
     * @var Char
     */
    protected $_pocopy4;

    /**
     * @var Char
     */
    protected $_pocopy5;

    /**
     * @var Memo
     */
    protected $_qtdecla;

    /**
     * @var Numeric
     */
    protected $_checkform;

    /**
     * @var Logical
     */
    protected $_dollarsign;

    /**
     * @var Numeric
     */
    protected $_psno;

    /**
     * @var Numeric
     */
    protected $_woformno;

    /**
     * @var Logical
     */
    protected $_whscstupd;

    /**
     * @var Char
     */
    protected $_labelt1;

    /**
     * @var Char
     */
    protected $_labelt2;

    /**
     * @var Numeric
     */
    protected $_gltrxno;

    /**
     * @var Numeric
     */
    protected $_inittab;

    /**
     * @var Numeric
     */
    protected $_defaprn;

    /**
     * @var Logical
     */
    protected $_msgqtynav;

    /**
     * @var Char
     */
    protected $_ftpsrvnam;

    /**
     * @var Char
     */
    protected $_ftplogin;

    /**
     * @var Char
     */
    protected $_ftppswd;

    /**
     * @var Logical
     */
    protected $_ftpstatus;

    /**
     * @var Char
     */
    protected $_ftpport;

    /**
     * @var Char
     */
    protected $_psbarcdlp;

    /**
     * @var Char
     */
    protected $_icfld1;

    /**
     * @var Char
     */
    protected $_icfld2;

    /**
     * @var Char
     */
    protected $_icfld3;

    /**
     * @var Char
     */
    protected $_icfld4;

    /**
     * @var Char
     */
    protected $_icfld5;

    /**
     * @var Char
     */
    protected $_icfld6;

    /**
     * @var Char
     */
    protected $_icfld7;

    /**
     * @var Char
     */
    protected $_icfld8;

    /**
     * @var Numeric
     */
    protected $_icidlen;

    /**
     * @var Char
     */
    protected $_icprefix1;

    /**
     * @var Char
     */
    protected $_icprefix2;

    /**
     * @var Char
     */
    protected $_icprefix3;

    /**
     * @var Char
     */
    protected $_icprefix4;

    /**
     * @var Char
     */
    protected $_icprefix5;

    /**
     * @var Char
     */
    protected $_icprefix6;

    /**
     * @var Numeric
     */
    protected $_itemnolen;

    /**
     * @var Logical
     */
    protected $_serialno;

    /**
     * @var Numeric
     */
    protected $_soptbno;

    /**
     * @var Logical
     */
    protected $_prncustfld;

    /**
     * @var Logical
     */
    protected $_sldtoshp;

    /**
     * @var Char
     */
    protected $_costtype;

    /**
     * @var Char
     */
    protected $_pathimage;

    /**
     * @var Logical
     */
    protected $_poapvch;

    /**
     * @var Char
     */
    protected $_poglfrtin;

    /**
     * @var Date
     */
    protected $_strtfsclyr;

    /**
     * @var Logical
     */
    protected $_tpl;

    /**
     * @var Char
     */
    protected $_year;

    /**
     * @var Date
     */
    protected $_begdate;

    /**
     * @var Logical
     */
    protected $_sorev;

    /**
     * @var Char
     */
    protected $_arexport;

    /**
     * @var Memo
     */
    protected $_poblurb;

    /**
     * @var Logical
     */
    protected $_prtpicktk;

    /**
     * @var Logical
     */
    protected $_prtso;

    /**
     * @var Logical
     */
    protected $_prtpackslp;

    /**
     * @var Logical
     */
    protected $_ivautogen;

    /**
     * @var Numeric
     */
    protected $_pckslpcpy;

    /**
     * @var Char
     */
    protected $_reportprfx;

    /**
     * @var Logical
     */
    protected $_uselocno;

    /**
     * @var Numeric
     */
    protected $_swordnum;

    /**
     * @var Logical
     */
    protected $_chkcustpo;

    /**
     * @var Char
     */
    protected $_glacctwip;

    /**
     * @var Char
     */
    protected $_glacctswrv;

    /**
     * @var Char
     */
    protected $_glacctswcs;

    /**
     * @var Logical
     */
    protected $_usepricecd;

    /**
     * @var Logical
     */
    protected $_swso;

    /**
     * @var Numeric
     */
    protected $_depgroupno;

    /**
     * @var Logical
     */
    protected $_ivautodef;

    /**
     * @var Char
     */
    protected $_detailform;

    /**
     * @var Logical
     */
    protected $_usecrdlim;

    /**
     * @var Logical
     */
    protected $_scanscrn;

    /**
     * @var Char
     */
    protected $_icfld9;

    /**
     * @var Logical
     */
    protected $_startqry;

    /**
     * @var Logical
     */
    protected $_soivbckord;

    /**
     * @var Char
     */
    protected $_fprimkey;

    /**
     * @var Logical
     */
    protected $_sobkorchk;

    /**
     * @var Logical
     */
    protected $_poitvend;

    /**
     * @var Char
     */
    protected $_glcurprof;

    /**
     * @var Char
     */
    protected $_glcurloss;

    /**
     * @var Char
     */
    protected $_basecurr;

    /**
     * @var Char
     */
    protected $_baseid;

    /**
     * @var Logical
     */
    protected $_glsyncdata;

    /**
     * @var Char
     */
    protected $_dba;

    /**
     * @var Char
     */
    protected $_apshiptono;

    /**
     * @var Logical
     */
    protected $_sysasstab;

    /**
     * @var Numeric
     */
    protected $_glrjbtno;

    /**
     * @var Char
     */
    protected $_qblistid;

    /**
     * @var Numeric
     */
    protected $_icprefixdf;

    /**
     * Getters
     */

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
    public function getCountry() {
        return $this->_country;
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
    public function getPhone() {
        return $this->_phone;
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
    public function getEmail() {
        return $this->_email;
    }

    /**
     * @return Char
     */
    public function getInternet() {
        return $this->_internet;
    }

    /**
     * @return Logical
     */
    public function getSocolcommi() {
        return $this->_socolcommi;
    }

    /**
     * @return Logical
     */
    public function getIvcolcommi() {
        return $this->_ivcolcommi;
    }

    /**
     * @return Logical
     */
    public function getQucolcommi() {
        return $this->_qucolcommi;
    }

    /**
     * @return Logical
     */
    public function getSocolcost() {
        return $this->_socolcost;
    }

    /**
     * @return Logical
     */
    public function getSocomm() {
        return $this->_socomm;
    }

    /**
     * @return Logical
     */
    public function getSosubd() {
        return $this->_sosubd;
    }

    /**
     * @return Logical
     */
    public function getIvsubd() {
        return $this->_ivsubd;
    }

    /**
     * @return Logical
     */
    public function getIcover() {
        return $this->_icover;
    }

    /**
     * @return Logical
     */
    public function getStart() {
        return $this->_start;
    }

    /**
     * @return Char
     */
    public function getSerial() {
        return $this->_serial;
    }

    /**
     * @return Memo
     */
    public function getLogo() {
        return $this->_logo;
    }

    /**
     * @return Numeric
     */
    public function getFconvert() {
        return $this->_fconvert;
    }

    /**
     * @return Char
     */
    public function getFlang_ctrl() {
        return $this->_flang_ctrl;
    }

    /**
     * @return Char
     */
    public function getFedidnmbr() {
        return $this->_fedidnmbr;
    }

    /**
     * @return Char
     */
    public function getStidnmbr() {
        return $this->_stidnmbr;
    }

    /**
     * @return Logical
     */
    public function getFmex() {
        return $this->_fmex;
    }

    /**
     * @return Numeric
     */
    public function getFdecimal() {
        return $this->_fdecimal;
    }

    /**
     * @return Char
     */
    public function getFnumber() {
        return $this->_fnumber;
    }

    /**
     * @return Numeric
     */
    public function getGlbatch_no() {
        return $this->_glbatch_no;
    }

    /**
     * @return Char
     */
    public function getRet_earn() {
        return $this->_ret_earn;
    }

    /**
     * @return Numeric
     */
    public function getPeriods() {
        return $this->_periods;
    }

    /**
     * @return Date
     */
    public function getClosedate() {
        return $this->_closedate;
    }

    /**
     * @return Numeric
     */
    public function getCurrperiod() {
        return $this->_currperiod;
    }

    /**
     * @return Char
     */
    public function getAracct() {
        return $this->_aracct;
    }

    /**
     * @return Char
     */
    public function getArdisacct() {
        return $this->_ardisacct;
    }

    /**
     * @return Char
     */
    public function getCashacct() {
        return $this->_cashacct;
    }

    /**
     * @return Char
     */
    public function getFinance() {
        return $this->_finance;
    }

    /**
     * @return Numeric
     */
    public function getInterest() {
        return $this->_interest;
    }

    /**
     * @return Numeric
     */
    public function getScno() {
        return $this->_scno;
    }

    /**
     * @return Numeric
     */
    public function getCashflow1() {
        return $this->_cashflow1;
    }

    /**
     * @return Numeric
     */
    public function getCashflow2() {
        return $this->_cashflow2;
    }

    /**
     * @return Numeric
     */
    public function getCashflow3() {
        return $this->_cashflow3;
    }

    /**
     * @return Numeric
     */
    public function getCashflow4() {
        return $this->_cashflow4;
    }

    /**
     * @return Numeric
     */
    public function getCashflow5() {
        return $this->_cashflow5;
    }

    /**
     * @return Numeric
     */
    public function getArbatch_no() {
        return $this->_arbatch_no;
    }

    /**
     * @return Numeric
     */
    public function getCustno() {
        return $this->_custno;
    }

    /**
     * @return Numeric
     */
    public function getFarage1() {
        return $this->_farage1;
    }

    /**
     * @return Numeric
     */
    public function getFarage2() {
        return $this->_farage2;
    }

    /**
     * @return Numeric
     */
    public function getFarage3() {
        return $this->_farage3;
    }

    /**
     * @return Numeric
     */
    public function getFarage4() {
        return $this->_farage4;
    }

    /**
     * @return Numeric
     */
    public function getFarage5() {
        return $this->_farage5;
    }

    /**
     * @return Numeric
     */
    public function getMin_fin() {
        return $this->_min_fin;
    }

    /**
     * @return Date
     */
    public function getArclosedt() {
        return $this->_arclosedt;
    }

    /**
     * @return Numeric
     */
    public function getArcurper() {
        return $this->_arcurper;
    }

    /**
     * @return Numeric
     */
    public function getApply_no() {
        return $this->_apply_no;
    }

    /**
     * @return Char
     */
    public function getCashflow() {
        return $this->_cashflow;
    }

    /**
     * @return Numeric
     */
    public function getVoucher() {
        return $this->_voucher;
    }

    /**
     * @return Char
     */
    public function getApdisacct() {
        return $this->_apdisacct;
    }

    /**
     * @return Char
     */
    public function getApacct() {
        return $this->_apacct;
    }

    /**
     * @return Char
     */
    public function getApcashacct() {
        return $this->_apcashacct;
    }

    /**
     * @return Numeric
     */
    public function getApbatch_no() {
        return $this->_apbatch_no;
    }

    /**
     * @return Numeric
     */
    public function getVencode() {
        return $this->_vencode;
    }

    /**
     * @return Numeric
     */
    public function getFapage1() {
        return $this->_fapage1;
    }

    /**
     * @return Numeric
     */
    public function getFapage2() {
        return $this->_fapage2;
    }

    /**
     * @return Numeric
     */
    public function getFapage3() {
        return $this->_fapage3;
    }

    /**
     * @return Numeric
     */
    public function getFapage4() {
        return $this->_fapage4;
    }

    /**
     * @return Numeric
     */
    public function getFapage5() {
        return $this->_fapage5;
    }

    /**
     * @return Date
     */
    public function getApclosedt() {
        return $this->_apclosedt;
    }

    /**
     * @return Numeric
     */
    public function getApcurper() {
        return $this->_apcurper;
    }

    /**
     * @return Numeric
     */
    public function getApckno() {
        return $this->_apckno;
    }

    /**
     * @return Char
     */
    public function getInvacct() {
        return $this->_invacct;
    }

    /**
     * @return Char
     */
    public function getCostacct() {
        return $this->_costacct;
    }

    /**
     * @return Numeric
     */
    public function getIcbatch_no() {
        return $this->_icbatch_no;
    }

    /**
     * @return Numeric
     */
    public function getIcrecno() {
        return $this->_icrecno;
    }

    /**
     * @return Numeric
     */
    public function getMaximum() {
        return $this->_maximum;
    }

    /**
     * @return Numeric
     */
    public function getMinimum() {
        return $this->_minimum;
    }

    /**
     * @return Char
     */
    public function getIcprifact() {
        return $this->_icprifact;
    }

    /**
     * @return Char
     */
    public function getIccstfact() {
        return $this->_iccstfact;
    }

    /**
     * @return Date
     */
    public function getIcclosedt() {
        return $this->_icclosedt;
    }

    /**
     * @return Numeric
     */
    public function getIccurper() {
        return $this->_iccurper;
    }

    /**
     * @return Numeric
     */
    public function getIctrxno() {
        return $this->_ictrxno;
    }

    /**
     * @return Numeric
     */
    public function getIcphyno() {
        return $this->_icphyno;
    }

    /**
     * @return Numeric
     */
    public function getPono() {
        return $this->_pono;
    }

    /**
     * @return Numeric
     */
    public function getPotaxrate() {
        return $this->_potaxrate;
    }

    /**
     * @return Numeric
     */
    public function getPobatch_no() {
        return $this->_pobatch_no;
    }

    /**
     * @return Logical
     */
    public function getPoprupd() {
        return $this->_poprupd;
    }

    /**
     * @return Logical
     */
    public function getPodescflg() {
        return $this->_podescflg;
    }

    /**
     * @return Numeric
     */
    public function getPodescno() {
        return $this->_podescno;
    }

    /**
     * @return Char
     */
    public function getPoauxacct() {
        return $this->_poauxacct;
    }

    /**
     * @return Char
     */
    public function getBuyer() {
        return $this->_buyer;
    }

    /**
     * @return Numeric
     */
    public function getPorrnum() {
        return $this->_porrnum;
    }

    /**
     * @return Numeric
     */
    public function getRefno() {
        return $this->_refno;
    }

    /**
     * @return Numeric
     */
    public function getQutno() {
        return $this->_qutno;
    }

    /**
     * @return Numeric
     */
    public function getOeno() {
        return $this->_oeno;
    }

    /**
     * @return Char
     */
    public function getFshipvia() {
        return $this->_fshipvia;
    }

    /**
     * @return Char
     */
    public function getFshipfrm() {
        return $this->_fshipfrm;
    }

    /**
     * @return Numeric
     */
    public function getInvno() {
        return $this->_invno;
    }

    /**
     * @return Char
     */
    public function getSalesacct() {
        return $this->_salesacct;
    }

    /**
     * @return Char
     */
    public function getShipacct() {
        return $this->_shipacct;
    }

    /**
     * @return Char
     */
    public function getTaxacct() {
        return $this->_taxacct;
    }

    /**
     * @return Numeric
     */
    public function getRestock() {
        return $this->_restock;
    }

    /**
     * @return Numeric
     */
    public function getFcrdno() {
        return $this->_fcrdno;
    }

    /**
     * @return Memo
     */
    public function getInvposmes() {
        return $this->_invposmes;
    }

    /**
     * @return Char
     */
    public function getFposwhs() {
        return $this->_fposwhs;
    }

    /**
     * @return Logical
     */
    public function getFpostax() {
        return $this->_fpostax;
    }

    /**
     * @return Numeric
     */
    public function getFposinv() {
        return $this->_fposinv;
    }

    /**
     * @return Numeric
     */
    public function getQutreqnot() {
        return $this->_qutreqnot;
    }

    /**
     * @return Numeric
     */
    public function getQutreqno() {
        return $this->_qutreqno;
    }

    /**
     * @return Numeric
     */
    public function getWhsno() {
        return $this->_whsno;
    }

    /**
     * @return Numeric
     */
    public function getTallyno() {
        return $this->_tallyno;
    }

    /**
     * @return Numeric
     */
    public function getWhsfwair() {
        return $this->_whsfwair;
    }

    /**
     * @return Numeric
     */
    public function getWhsfwsea() {
        return $this->_whsfwsea;
    }

    /**
     * @return Numeric
     */
    public function getWhsfacwei() {
        return $this->_whsfacwei;
    }

    /**
     * @return Memo
     */
    public function getWhsdecla() {
        return $this->_whsdecla;
    }

    /**
     * @return Char
     */
    public function getAuto() {
        return $this->_auto;
    }

    /**
     * @return Char
     */
    public function getFarange() {
        return $this->_farange;
    }

    /**
     * @return Logical
     */
    public function getFsalecom() {
        return $this->_fsalecom;
    }

    /**
     * @return Numeric
     */
    public function getWorkreq() {
        return $this->_workreq;
    }

    /**
     * @return Numeric
     */
    public function getShipinst() {
        return $this->_shipinst;
    }

    /**
     * @return Numeric
     */
    public function getMaterial() {
        return $this->_material;
    }

    /**
     * @return Logical
     */
    public function getCityla() {
        return $this->_cityla;
    }

    /**
     * @return Char
     */
    public function getDef_dept() {
        return $this->_def_dept;
    }

    /**
     * @return Char
     */
    public function getSwprice0() {
        return $this->_swprice0;
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
    public function getRimno() {
        return $this->_rimno;
    }

    /**
     * @return Numeric
     */
    public function getMessno() {
        return $this->_messno;
    }

    /**
     * @return Numeric
     */
    public function getMesslocno() {
        return $this->_messlocno;
    }

    /**
     * @return Numeric
     */
    public function getTmpnumber() {
        return $this->_tmpnumber;
    }

    /**
     * @return Numeric
     */
    public function getPeramt() {
        return $this->_peramt;
    }

    /**
     * @return Numeric
     */
    public function getAwbno() {
        return $this->_awbno;
    }

    /**
     * @return Numeric
     */
    public function getAwbrefe() {
        return $this->_awbrefe;
    }

    /**
     * @return Numeric
     */
    public function getBolrefe() {
        return $this->_bolrefe;
    }

    /**
     * @return Numeric
     */
    public function getCommiby() {
        return $this->_commiby;
    }

    /**
     * @return Numeric
     */
    public function getInsurance() {
        return $this->_insurance;
    }

    /**
     * @return Numeric
     */
    public function getPrcommi1() {
        return $this->_prcommi1;
    }

    /**
     * @return Numeric
     */
    public function getPrcommi2() {
        return $this->_prcommi2;
    }

    /**
     * @return Numeric
     */
    public function getPrcommi3() {
        return $this->_prcommi3;
    }

    /**
     * @return Numeric
     */
    public function getPrcommi4() {
        return $this->_prcommi4;
    }

    /**
     * @return Numeric
     */
    public function getPrcommi5() {
        return $this->_prcommi5;
    }

    /**
     * @return Numeric
     */
    public function getPrcommi6() {
        return $this->_prcommi6;
    }

    /**
     * @return Logical
     */
    public function getItmdisc() {
        return $this->_itmdisc;
    }

    /**
     * @return Logical
     */
    public function getFaxserver() {
        return $this->_faxserver;
    }

    /**
     * @return Char
     */
    public function getFaxname() {
        return $this->_faxname;
    }

    /**
     * @return Char
     */
    public function getFaxtype() {
        return $this->_faxtype;
    }

    /**
     * @return Logical
     */
    public function getBarcode() {
        return $this->_barcode;
    }

    /**
     * @return Char
     */
    public function getPort() {
        return $this->_port;
    }

    /**
     * @return Char
     */
    public function getPortsetup() {
        return $this->_portsetup;
    }

    /**
     * @return Numeric
     */
    public function getQtytermina() {
        return $this->_qtytermina;
    }

    /**
     * @return Logical
     */
    public function getSoclose() {
        return $this->_soclose;
    }

    /**
     * @return Char
     */
    public function getWhsdef() {
        return $this->_whsdef;
    }

    /**
     * @return Logical
     */
    public function getCommcust() {
        return $this->_commcust;
    }

    /**
     * @return Numeric
     */
    public function getIvbatch_no() {
        return $this->_ivbatch_no;
    }

    /**
     * @return Numeric
     */
    public function getFdbtno() {
        return $this->_fdbtno;
    }

    /**
     * @return Logical
     */
    public function getLinkqb() {
        return $this->_linkqb;
    }

    /**
     * @return Char
     */
    public function getMailserver() {
        return $this->_mailserver;
    }

    /**
     * @return Char
     */
    public function getIvcopy1() {
        return $this->_ivcopy1;
    }

    /**
     * @return Char
     */
    public function getIvcopy2() {
        return $this->_ivcopy2;
    }

    /**
     * @return Char
     */
    public function getIvcopy3() {
        return $this->_ivcopy3;
    }

    /**
     * @return Char
     */
    public function getIvcopy4() {
        return $this->_ivcopy4;
    }

    /**
     * @return Char
     */
    public function getIvcopy5() {
        return $this->_ivcopy5;
    }

    /**
     * @return Memo
     */
    public function getIvdecla() {
        return $this->_ivdecla;
    }

    /**
     * @return Logical
     */
    public function getIvsignatu() {
        return $this->_ivsignatu;
    }

    /**
     * @return Char
     */
    public function getPocopy1() {
        return $this->_pocopy1;
    }

    /**
     * @return Char
     */
    public function getPocopy2() {
        return $this->_pocopy2;
    }

    /**
     * @return Char
     */
    public function getPocopy3() {
        return $this->_pocopy3;
    }

    /**
     * @return Char
     */
    public function getPocopy4() {
        return $this->_pocopy4;
    }

    /**
     * @return Char
     */
    public function getPocopy5() {
        return $this->_pocopy5;
    }

    /**
     * @return Memo
     */
    public function getQtdecla() {
        return $this->_qtdecla;
    }

    /**
     * @return Numeric
     */
    public function getCheckform() {
        return $this->_checkform;
    }

    /**
     * @return Logical
     */
    public function getDollarsign() {
        return $this->_dollarsign;
    }

    /**
     * @return Numeric
     */
    public function getPsno() {
        return $this->_psno;
    }

    /**
     * @return Numeric
     */
    public function getWoformno() {
        return $this->_woformno;
    }

    /**
     * @return Logical
     */
    public function getWhscstupd() {
        return $this->_whscstupd;
    }

    /**
     * @return Char
     */
    public function getLabelt1() {
        return $this->_labelt1;
    }

    /**
     * @return Char
     */
    public function getLabelt2() {
        return $this->_labelt2;
    }

    /**
     * @return Numeric
     */
    public function getGltrxno() {
        return $this->_gltrxno;
    }

    /**
     * @return Numeric
     */
    public function getInittab() {
        return $this->_inittab;
    }

    /**
     * @return Numeric
     */
    public function getDefaprn() {
        return $this->_defaprn;
    }

    /**
     * @return Logical
     */
    public function getMsgqtynav() {
        return $this->_msgqtynav;
    }

    /**
     * @return Char
     */
    public function getFtpsrvnam() {
        return $this->_ftpsrvnam;
    }

    /**
     * @return Char
     */
    public function getFtplogin() {
        return $this->_ftplogin;
    }

    /**
     * @return Char
     */
    public function getFtppswd() {
        return $this->_ftppswd;
    }

    /**
     * @return Logical
     */
    public function getFtpstatus() {
        return $this->_ftpstatus;
    }

    /**
     * @return Char
     */
    public function getFtpport() {
        return $this->_ftpport;
    }

    /**
     * @return Char
     */
    public function getPsbarcdlp() {
        return $this->_psbarcdlp;
    }

    /**
     * @return Char
     */
    public function getIcfld1() {
        return $this->_icfld1;
    }

    /**
     * @return Char
     */
    public function getIcfld2() {
        return $this->_icfld2;
    }

    /**
     * @return Char
     */
    public function getIcfld3() {
        return $this->_icfld3;
    }

    /**
     * @return Char
     */
    public function getIcfld4() {
        return $this->_icfld4;
    }

    /**
     * @return Char
     */
    public function getIcfld5() {
        return $this->_icfld5;
    }

    /**
     * @return Char
     */
    public function getIcfld6() {
        return $this->_icfld6;
    }

    /**
     * @return Char
     */
    public function getIcfld7() {
        return $this->_icfld7;
    }

    /**
     * @return Char
     */
    public function getIcfld8() {
        return $this->_icfld8;
    }

    /**
     * @return Numeric
     */
    public function getIcidlen() {
        return $this->_icidlen;
    }

    /**
     * @return Char
     */
    public function getIcprefix1() {
        return $this->_icprefix1;
    }

    /**
     * @return Char
     */
    public function getIcprefix2() {
        return $this->_icprefix2;
    }

    /**
     * @return Char
     */
    public function getIcprefix3() {
        return $this->_icprefix3;
    }

    /**
     * @return Char
     */
    public function getIcprefix4() {
        return $this->_icprefix4;
    }

    /**
     * @return Char
     */
    public function getIcprefix5() {
        return $this->_icprefix5;
    }

    /**
     * @return Char
     */
    public function getIcprefix6() {
        return $this->_icprefix6;
    }

    /**
     * @return Numeric
     */
    public function getItemnolen() {
        return $this->_itemnolen;
    }

    /**
     * @return Logical
     */
    public function getSerialno() {
        return $this->_serialno;
    }

    /**
     * @return Numeric
     */
    public function getSoptbno() {
        return $this->_soptbno;
    }

    /**
     * @return Logical
     */
    public function getPrncustfld() {
        return $this->_prncustfld;
    }

    /**
     * @return Logical
     */
    public function getSldtoshp() {
        return $this->_sldtoshp;
    }

    /**
     * @return Char
     */
    public function getCosttype() {
        return $this->_costtype;
    }

    /**
     * @return Char
     */
    public function getPathimage() {
        return $this->_pathimage;
    }

    /**
     * @return Logical
     */
    public function getPoapvch() {
        return $this->_poapvch;
    }

    /**
     * @return Char
     */
    public function getPoglfrtin() {
        return $this->_poglfrtin;
    }

    /**
     * @return Date
     */
    public function getStrtfsclyr() {
        return $this->_strtfsclyr;
    }

    /**
     * @return Logical
     */
    public function getTpl() {
        return $this->_tpl;
    }

    /**
     * @return Char
     */
    public function getYear() {
        return $this->_year;
    }

    /**
     * @return Date
     */
    public function getBegdate() {
        return $this->_begdate;
    }

    /**
     * @return Logical
     */
    public function getSorev() {
        return $this->_sorev;
    }

    /**
     * @return Char
     */
    public function getArexport() {
        return $this->_arexport;
    }

    /**
     * @return Memo
     */
    public function getPoblurb() {
        return $this->_poblurb;
    }

    /**
     * @return Logical
     */
    public function getPrtpicktk() {
        return $this->_prtpicktk;
    }

    /**
     * @return Logical
     */
    public function getPrtso() {
        return $this->_prtso;
    }

    /**
     * @return Logical
     */
    public function getPrtpackslp() {
        return $this->_prtpackslp;
    }

    /**
     * @return Logical
     */
    public function getIvautogen() {
        return $this->_ivautogen;
    }

    /**
     * @return Numeric
     */
    public function getPckslpcpy() {
        return $this->_pckslpcpy;
    }

    /**
     * @return Char
     */
    public function getReportprfx() {
        return $this->_reportprfx;
    }

    /**
     * @return Logical
     */
    public function getUselocno() {
        return $this->_uselocno;
    }

    /**
     * @return Numeric
     */
    public function getSwordnum() {
        return $this->_swordnum;
    }

    /**
     * @return Logical
     */
    public function getChkcustpo() {
        return $this->_chkcustpo;
    }

    /**
     * @return Char
     */
    public function getGlacctwip() {
        return $this->_glacctwip;
    }

    /**
     * @return Char
     */
    public function getGlacctswrv() {
        return $this->_glacctswrv;
    }

    /**
     * @return Char
     */
    public function getGlacctswcs() {
        return $this->_glacctswcs;
    }

    /**
     * @return Logical
     */
    public function getUsepricecd() {
        return $this->_usepricecd;
    }

    /**
     * @return Logical
     */
    public function getSwso() {
        return $this->_swso;
    }

    /**
     * @return Numeric
     */
    public function getDepgroupno() {
        return $this->_depgroupno;
    }

    /**
     * @return Logical
     */
    public function getIvautodef() {
        return $this->_ivautodef;
    }

    /**
     * @return Char
     */
    public function getDetailform() {
        return $this->_detailform;
    }

    /**
     * @return Logical
     */
    public function getUsecrdlim() {
        return $this->_usecrdlim;
    }

    /**
     * @return Logical
     */
    public function getScanscrn() {
        return $this->_scanscrn;
    }

    /**
     * @return Char
     */
    public function getIcfld9() {
        return $this->_icfld9;
    }

    /**
     * @return Logical
     */
    public function getStartqry() {
        return $this->_startqry;
    }

    /**
     * @return Logical
     */
    public function getSoivbckord() {
        return $this->_soivbckord;
    }

    /**
     * @return Char
     */
    public function getFprimkey() {
        return $this->_fprimkey;
    }

    /**
     * @return Logical
     */
    public function getSobkorchk() {
        return $this->_sobkorchk;
    }

    /**
     * @return Logical
     */
    public function getPoitvend() {
        return $this->_poitvend;
    }

    /**
     * @return Char
     */
    public function getGlcurprof() {
        return $this->_glcurprof;
    }

    /**
     * @return Char
     */
    public function getGlcurloss() {
        return $this->_glcurloss;
    }

    /**
     * @return Char
     */
    public function getBasecurr() {
        return $this->_basecurr;
    }

    /**
     * @return Char
     */
    public function getBaseid() {
        return $this->_baseid;
    }

    /**
     * @return Logical
     */
    public function getGlsyncdata() {
        return $this->_glsyncdata;
    }

    /**
     * @return Char
     */
    public function getDba() {
        return $this->_dba;
    }

    /**
     * @return Char
     */
    public function getApshiptono() {
        return $this->_apshiptono;
    }

    /**
     * @return Logical
     */
    public function getSysasstab() {
        return $this->_sysasstab;
    }

    /**
     * @return Numeric
     */
    public function getGlrjbtno() {
        return $this->_glrjbtno;
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
    public function getIcprefixdf() {
        return $this->_icprefixdf;
    }

    /**
     * Setters
     */

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
    public function setCountry($value) {
        $this->_country = $value;
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
    public function setPhone($value) {
        $this->_phone = $value;
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
    public function setEmail($value) {
        $this->_email = $value;
    }

    /**
     * @param Char
     */
    public function setInternet($value) {
        $this->_internet = $value;
    }

    /**
     * @param Logical
     */
    public function setSocolcommi($value) {
        $this->_socolcommi = $value;
    }

    /**
     * @param Logical
     */
    public function setIvcolcommi($value) {
        $this->_ivcolcommi = $value;
    }

    /**
     * @param Logical
     */
    public function setQucolcommi($value) {
        $this->_qucolcommi = $value;
    }

    /**
     * @param Logical
     */
    public function setSocolcost($value) {
        $this->_socolcost = $value;
    }

    /**
     * @param Logical
     */
    public function setSocomm($value) {
        $this->_socomm = $value;
    }

    /**
     * @param Logical
     */
    public function setSosubd($value) {
        $this->_sosubd = $value;
    }

    /**
     * @param Logical
     */
    public function setIvsubd($value) {
        $this->_ivsubd = $value;
    }

    /**
     * @param Logical
     */
    public function setIcover($value) {
        $this->_icover = $value;
    }

    /**
     * @param Logical
     */
    public function setStart($value) {
        $this->_start = $value;
    }

    /**
     * @param Char
     */
    public function setSerial($value) {
        $this->_serial = $value;
    }

    /**
     * @param Memo
     */
    public function setLogo($value) {
        $this->_logo = $value;
    }

    /**
     * @param Numeric
     */
    public function setFconvert($value) {
        $this->_fconvert = $value;
    }

    /**
     * @param Char
     */
    public function setFlang_ctrl($value) {
        $this->_flang_ctrl = $value;
    }

    /**
     * @param Char
     */
    public function setFedidnmbr($value) {
        $this->_fedidnmbr = $value;
    }

    /**
     * @param Char
     */
    public function setStidnmbr($value) {
        $this->_stidnmbr = $value;
    }

    /**
     * @param Logical
     */
    public function setFmex($value) {
        $this->_fmex = $value;
    }

    /**
     * @param Numeric
     */
    public function setFdecimal($value) {
        $this->_fdecimal = $value;
    }

    /**
     * @param Char
     */
    public function setFnumber($value) {
        $this->_fnumber = $value;
    }

    /**
     * @param Numeric
     */
    public function setGlbatch_no($value) {
        $this->_glbatch_no = $value;
    }

    /**
     * @param Char
     */
    public function setRet_earn($value) {
        $this->_ret_earn = $value;
    }

    /**
     * @param Numeric
     */
    public function setPeriods($value) {
        $this->_periods = $value;
    }

    /**
     * @param Date
     */
    public function setClosedate($value) {
        $this->_closedate = $value;
    }

    /**
     * @param Numeric
     */
    public function setCurrperiod($value) {
        $this->_currperiod = $value;
    }

    /**
     * @param Char
     */
    public function setAracct($value) {
        $this->_aracct = $value;
    }

    /**
     * @param Char
     */
    public function setArdisacct($value) {
        $this->_ardisacct = $value;
    }

    /**
     * @param Char
     */
    public function setCashacct($value) {
        $this->_cashacct = $value;
    }

    /**
     * @param Char
     */
    public function setFinance($value) {
        $this->_finance = $value;
    }

    /**
     * @param Numeric
     */
    public function setInterest($value) {
        $this->_interest = $value;
    }

    /**
     * @param Numeric
     */
    public function setScno($value) {
        $this->_scno = $value;
    }

    /**
     * @param Numeric
     */
    public function setCashflow1($value) {
        $this->_cashflow1 = $value;
    }

    /**
     * @param Numeric
     */
    public function setCashflow2($value) {
        $this->_cashflow2 = $value;
    }

    /**
     * @param Numeric
     */
    public function setCashflow3($value) {
        $this->_cashflow3 = $value;
    }

    /**
     * @param Numeric
     */
    public function setCashflow4($value) {
        $this->_cashflow4 = $value;
    }

    /**
     * @param Numeric
     */
    public function setCashflow5($value) {
        $this->_cashflow5 = $value;
    }

    /**
     * @param Numeric
     */
    public function setArbatch_no($value) {
        $this->_arbatch_no = $value;
    }

    /**
     * @param Numeric
     */
    public function setCustno($value) {
        $this->_custno = $value;
    }

    /**
     * @param Numeric
     */
    public function setFarage1($value) {
        $this->_farage1 = $value;
    }

    /**
     * @param Numeric
     */
    public function setFarage2($value) {
        $this->_farage2 = $value;
    }

    /**
     * @param Numeric
     */
    public function setFarage3($value) {
        $this->_farage3 = $value;
    }

    /**
     * @param Numeric
     */
    public function setFarage4($value) {
        $this->_farage4 = $value;
    }

    /**
     * @param Numeric
     */
    public function setFarage5($value) {
        $this->_farage5 = $value;
    }

    /**
     * @param Numeric
     */
    public function setMin_fin($value) {
        $this->_min_fin = $value;
    }

    /**
     * @param Date
     */
    public function setArclosedt($value) {
        $this->_arclosedt = $value;
    }

    /**
     * @param Numeric
     */
    public function setArcurper($value) {
        $this->_arcurper = $value;
    }

    /**
     * @param Numeric
     */
    public function setApply_no($value) {
        $this->_apply_no = $value;
    }

    /**
     * @param Char
     */
    public function setCashflow($value) {
        $this->_cashflow = $value;
    }

    /**
     * @param Numeric
     */
    public function setVoucher($value) {
        $this->_voucher = $value;
    }

    /**
     * @param Char
     */
    public function setApdisacct($value) {
        $this->_apdisacct = $value;
    }

    /**
     * @param Char
     */
    public function setApacct($value) {
        $this->_apacct = $value;
    }

    /**
     * @param Char
     */
    public function setApcashacct($value) {
        $this->_apcashacct = $value;
    }

    /**
     * @param Numeric
     */
    public function setApbatch_no($value) {
        $this->_apbatch_no = $value;
    }

    /**
     * @param Numeric
     */
    public function setVencode($value) {
        $this->_vencode = $value;
    }

    /**
     * @param Numeric
     */
    public function setFapage1($value) {
        $this->_fapage1 = $value;
    }

    /**
     * @param Numeric
     */
    public function setFapage2($value) {
        $this->_fapage2 = $value;
    }

    /**
     * @param Numeric
     */
    public function setFapage3($value) {
        $this->_fapage3 = $value;
    }

    /**
     * @param Numeric
     */
    public function setFapage4($value) {
        $this->_fapage4 = $value;
    }

    /**
     * @param Numeric
     */
    public function setFapage5($value) {
        $this->_fapage5 = $value;
    }

    /**
     * @param Date
     */
    public function setApclosedt($value) {
        $this->_apclosedt = $value;
    }

    /**
     * @param Numeric
     */
    public function setApcurper($value) {
        $this->_apcurper = $value;
    }

    /**
     * @param Numeric
     */
    public function setApckno($value) {
        $this->_apckno = $value;
    }

    /**
     * @param Char
     */
    public function setInvacct($value) {
        $this->_invacct = $value;
    }

    /**
     * @param Char
     */
    public function setCostacct($value) {
        $this->_costacct = $value;
    }

    /**
     * @param Numeric
     */
    public function setIcbatch_no($value) {
        $this->_icbatch_no = $value;
    }

    /**
     * @param Numeric
     */
    public function setIcrecno($value) {
        $this->_icrecno = $value;
    }

    /**
     * @param Numeric
     */
    public function setMaximum($value) {
        $this->_maximum = $value;
    }

    /**
     * @param Numeric
     */
    public function setMinimum($value) {
        $this->_minimum = $value;
    }

    /**
     * @param Char
     */
    public function setIcprifact($value) {
        $this->_icprifact = $value;
    }

    /**
     * @param Char
     */
    public function setIccstfact($value) {
        $this->_iccstfact = $value;
    }

    /**
     * @param Date
     */
    public function setIcclosedt($value) {
        $this->_icclosedt = $value;
    }

    /**
     * @param Numeric
     */
    public function setIccurper($value) {
        $this->_iccurper = $value;
    }

    /**
     * @param Numeric
     */
    public function setIctrxno($value) {
        $this->_ictrxno = $value;
    }

    /**
     * @param Numeric
     */
    public function setIcphyno($value) {
        $this->_icphyno = $value;
    }

    /**
     * @param Numeric
     */
    public function setPono($value) {
        $this->_pono = $value;
    }

    /**
     * @param Numeric
     */
    public function setPotaxrate($value) {
        $this->_potaxrate = $value;
    }

    /**
     * @param Numeric
     */
    public function setPobatch_no($value) {
        $this->_pobatch_no = $value;
    }

    /**
     * @param Logical
     */
    public function setPoprupd($value) {
        $this->_poprupd = $value;
    }

    /**
     * @param Logical
     */
    public function setPodescflg($value) {
        $this->_podescflg = $value;
    }

    /**
     * @param Numeric
     */
    public function setPodescno($value) {
        $this->_podescno = $value;
    }

    /**
     * @param Char
     */
    public function setPoauxacct($value) {
        $this->_poauxacct = $value;
    }

    /**
     * @param Char
     */
    public function setBuyer($value) {
        $this->_buyer = $value;
    }

    /**
     * @param Numeric
     */
    public function setPorrnum($value) {
        $this->_porrnum = $value;
    }

    /**
     * @param Numeric
     */
    public function setRefno($value) {
        $this->_refno = $value;
    }

    /**
     * @param Numeric
     */
    public function setQutno($value) {
        $this->_qutno = $value;
    }

    /**
     * @param Numeric
     */
    public function setOeno($value) {
        $this->_oeno = $value;
    }

    /**
     * @param Char
     */
    public function setFshipvia($value) {
        $this->_fshipvia = $value;
    }

    /**
     * @param Char
     */
    public function setFshipfrm($value) {
        $this->_fshipfrm = $value;
    }

    /**
     * @param Numeric
     */
    public function setInvno($value) {
        $this->_invno = $value;
    }

    /**
     * @param Char
     */
    public function setSalesacct($value) {
        $this->_salesacct = $value;
    }

    /**
     * @param Char
     */
    public function setShipacct($value) {
        $this->_shipacct = $value;
    }

    /**
     * @param Char
     */
    public function setTaxacct($value) {
        $this->_taxacct = $value;
    }

    /**
     * @param Numeric
     */
    public function setRestock($value) {
        $this->_restock = $value;
    }

    /**
     * @param Numeric
     */
    public function setFcrdno($value) {
        $this->_fcrdno = $value;
    }

    /**
     * @param Memo
     */
    public function setInvposmes($value) {
        $this->_invposmes = $value;
    }

    /**
     * @param Char
     */
    public function setFposwhs($value) {
        $this->_fposwhs = $value;
    }

    /**
     * @param Logical
     */
    public function setFpostax($value) {
        $this->_fpostax = $value;
    }

    /**
     * @param Numeric
     */
    public function setFposinv($value) {
        $this->_fposinv = $value;
    }

    /**
     * @param Numeric
     */
    public function setQutreqnot($value) {
        $this->_qutreqnot = $value;
    }

    /**
     * @param Numeric
     */
    public function setQutreqno($value) {
        $this->_qutreqno = $value;
    }

    /**
     * @param Numeric
     */
    public function setWhsno($value) {
        $this->_whsno = $value;
    }

    /**
     * @param Numeric
     */
    public function setTallyno($value) {
        $this->_tallyno = $value;
    }

    /**
     * @param Numeric
     */
    public function setWhsfwair($value) {
        $this->_whsfwair = $value;
    }

    /**
     * @param Numeric
     */
    public function setWhsfwsea($value) {
        $this->_whsfwsea = $value;
    }

    /**
     * @param Numeric
     */
    public function setWhsfacwei($value) {
        $this->_whsfacwei = $value;
    }

    /**
     * @param Memo
     */
    public function setWhsdecla($value) {
        $this->_whsdecla = $value;
    }

    /**
     * @param Char
     */
    public function setAuto($value) {
        $this->_auto = $value;
    }

    /**
     * @param Char
     */
    public function setFarange($value) {
        $this->_farange = $value;
    }

    /**
     * @param Logical
     */
    public function setFsalecom($value) {
        $this->_fsalecom = $value;
    }

    /**
     * @param Numeric
     */
    public function setWorkreq($value) {
        $this->_workreq = $value;
    }

    /**
     * @param Numeric
     */
    public function setShipinst($value) {
        $this->_shipinst = $value;
    }

    /**
     * @param Numeric
     */
    public function setMaterial($value) {
        $this->_material = $value;
    }

    /**
     * @param Logical
     */
    public function setCityla($value) {
        $this->_cityla = $value;
    }

    /**
     * @param Char
     */
    public function setDef_dept($value) {
        $this->_def_dept = $value;
    }

    /**
     * @param Char
     */
    public function setSwprice0($value) {
        $this->_swprice0 = $value;
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
    public function setRimno($value) {
        $this->_rimno = $value;
    }

    /**
     * @param Numeric
     */
    public function setMessno($value) {
        $this->_messno = $value;
    }

    /**
     * @param Numeric
     */
    public function setMesslocno($value) {
        $this->_messlocno = $value;
    }

    /**
     * @param Numeric
     */
    public function setTmpnumber($value) {
        $this->_tmpnumber = $value;
    }

    /**
     * @param Numeric
     */
    public function setPeramt($value) {
        $this->_peramt = $value;
    }

    /**
     * @param Numeric
     */
    public function setAwbno($value) {
        $this->_awbno = $value;
    }

    /**
     * @param Numeric
     */
    public function setAwbrefe($value) {
        $this->_awbrefe = $value;
    }

    /**
     * @param Numeric
     */
    public function setBolrefe($value) {
        $this->_bolrefe = $value;
    }

    /**
     * @param Numeric
     */
    public function setCommiby($value) {
        $this->_commiby = $value;
    }

    /**
     * @param Numeric
     */
    public function setInsurance($value) {
        $this->_insurance = $value;
    }

    /**
     * @param Numeric
     */
    public function setPrcommi1($value) {
        $this->_prcommi1 = $value;
    }

    /**
     * @param Numeric
     */
    public function setPrcommi2($value) {
        $this->_prcommi2 = $value;
    }

    /**
     * @param Numeric
     */
    public function setPrcommi3($value) {
        $this->_prcommi3 = $value;
    }

    /**
     * @param Numeric
     */
    public function setPrcommi4($value) {
        $this->_prcommi4 = $value;
    }

    /**
     * @param Numeric
     */
    public function setPrcommi5($value) {
        $this->_prcommi5 = $value;
    }

    /**
     * @param Numeric
     */
    public function setPrcommi6($value) {
        $this->_prcommi6 = $value;
    }

    /**
     * @param Logical
     */
    public function setItmdisc($value) {
        $this->_itmdisc = $value;
    }

    /**
     * @param Logical
     */
    public function setFaxserver($value) {
        $this->_faxserver = $value;
    }

    /**
     * @param Char
     */
    public function setFaxname($value) {
        $this->_faxname = $value;
    }

    /**
     * @param Char
     */
    public function setFaxtype($value) {
        $this->_faxtype = $value;
    }

    /**
     * @param Logical
     */
    public function setBarcode($value) {
        $this->_barcode = $value;
    }

    /**
     * @param Char
     */
    public function setPort($value) {
        $this->_port = $value;
    }

    /**
     * @param Char
     */
    public function setPortsetup($value) {
        $this->_portsetup = $value;
    }

    /**
     * @param Numeric
     */
    public function setQtytermina($value) {
        $this->_qtytermina = $value;
    }

    /**
     * @param Logical
     */
    public function setSoclose($value) {
        $this->_soclose = $value;
    }

    /**
     * @param Char
     */
    public function setWhsdef($value) {
        $this->_whsdef = $value;
    }

    /**
     * @param Logical
     */
    public function setCommcust($value) {
        $this->_commcust = $value;
    }

    /**
     * @param Numeric
     */
    public function setIvbatch_no($value) {
        $this->_ivbatch_no = $value;
    }

    /**
     * @param Numeric
     */
    public function setFdbtno($value) {
        $this->_fdbtno = $value;
    }

    /**
     * @param Logical
     */
    public function setLinkqb($value) {
        $this->_linkqb = $value;
    }

    /**
     * @param Char
     */
    public function setMailserver($value) {
        $this->_mailserver = $value;
    }

    /**
     * @param Char
     */
    public function setIvcopy1($value) {
        $this->_ivcopy1 = $value;
    }

    /**
     * @param Char
     */
    public function setIvcopy2($value) {
        $this->_ivcopy2 = $value;
    }

    /**
     * @param Char
     */
    public function setIvcopy3($value) {
        $this->_ivcopy3 = $value;
    }

    /**
     * @param Char
     */
    public function setIvcopy4($value) {
        $this->_ivcopy4 = $value;
    }

    /**
     * @param Char
     */
    public function setIvcopy5($value) {
        $this->_ivcopy5 = $value;
    }

    /**
     * @param Memo
     */
    public function setIvdecla($value) {
        $this->_ivdecla = $value;
    }

    /**
     * @param Logical
     */
    public function setIvsignatu($value) {
        $this->_ivsignatu = $value;
    }

    /**
     * @param Char
     */
    public function setPocopy1($value) {
        $this->_pocopy1 = $value;
    }

    /**
     * @param Char
     */
    public function setPocopy2($value) {
        $this->_pocopy2 = $value;
    }

    /**
     * @param Char
     */
    public function setPocopy3($value) {
        $this->_pocopy3 = $value;
    }

    /**
     * @param Char
     */
    public function setPocopy4($value) {
        $this->_pocopy4 = $value;
    }

    /**
     * @param Char
     */
    public function setPocopy5($value) {
        $this->_pocopy5 = $value;
    }

    /**
     * @param Memo
     */
    public function setQtdecla($value) {
        $this->_qtdecla = $value;
    }

    /**
     * @param Numeric
     */
    public function setCheckform($value) {
        $this->_checkform = $value;
    }

    /**
     * @param Logical
     */
    public function setDollarsign($value) {
        $this->_dollarsign = $value;
    }

    /**
     * @param Numeric
     */
    public function setPsno($value) {
        $this->_psno = $value;
    }

    /**
     * @param Numeric
     */
    public function setWoformno($value) {
        $this->_woformno = $value;
    }

    /**
     * @param Logical
     */
    public function setWhscstupd($value) {
        $this->_whscstupd = $value;
    }

    /**
     * @param Char
     */
    public function setLabelt1($value) {
        $this->_labelt1 = $value;
    }

    /**
     * @param Char
     */
    public function setLabelt2($value) {
        $this->_labelt2 = $value;
    }

    /**
     * @param Numeric
     */
    public function setGltrxno($value) {
        $this->_gltrxno = $value;
    }

    /**
     * @param Numeric
     */
    public function setInittab($value) {
        $this->_inittab = $value;
    }

    /**
     * @param Numeric
     */
    public function setDefaprn($value) {
        $this->_defaprn = $value;
    }

    /**
     * @param Logical
     */
    public function setMsgqtynav($value) {
        $this->_msgqtynav = $value;
    }

    /**
     * @param Char
     */
    public function setFtpsrvnam($value) {
        $this->_ftpsrvnam = $value;
    }

    /**
     * @param Char
     */
    public function setFtplogin($value) {
        $this->_ftplogin = $value;
    }

    /**
     * @param Char
     */
    public function setFtppswd($value) {
        $this->_ftppswd = $value;
    }

    /**
     * @param Logical
     */
    public function setFtpstatus($value) {
        $this->_ftpstatus = $value;
    }

    /**
     * @param Char
     */
    public function setFtpport($value) {
        $this->_ftpport = $value;
    }

    /**
     * @param Char
     */
    public function setPsbarcdlp($value) {
        $this->_psbarcdlp = $value;
    }

    /**
     * @param Char
     */
    public function setIcfld1($value) {
        $this->_icfld1 = $value;
    }

    /**
     * @param Char
     */
    public function setIcfld2($value) {
        $this->_icfld2 = $value;
    }

    /**
     * @param Char
     */
    public function setIcfld3($value) {
        $this->_icfld3 = $value;
    }

    /**
     * @param Char
     */
    public function setIcfld4($value) {
        $this->_icfld4 = $value;
    }

    /**
     * @param Char
     */
    public function setIcfld5($value) {
        $this->_icfld5 = $value;
    }

    /**
     * @param Char
     */
    public function setIcfld6($value) {
        $this->_icfld6 = $value;
    }

    /**
     * @param Char
     */
    public function setIcfld7($value) {
        $this->_icfld7 = $value;
    }

    /**
     * @param Char
     */
    public function setIcfld8($value) {
        $this->_icfld8 = $value;
    }

    /**
     * @param Numeric
     */
    public function setIcidlen($value) {
        $this->_icidlen = $value;
    }

    /**
     * @param Char
     */
    public function setIcprefix1($value) {
        $this->_icprefix1 = $value;
    }

    /**
     * @param Char
     */
    public function setIcprefix2($value) {
        $this->_icprefix2 = $value;
    }

    /**
     * @param Char
     */
    public function setIcprefix3($value) {
        $this->_icprefix3 = $value;
    }

    /**
     * @param Char
     */
    public function setIcprefix4($value) {
        $this->_icprefix4 = $value;
    }

    /**
     * @param Char
     */
    public function setIcprefix5($value) {
        $this->_icprefix5 = $value;
    }

    /**
     * @param Char
     */
    public function setIcprefix6($value) {
        $this->_icprefix6 = $value;
    }

    /**
     * @param Numeric
     */
    public function setItemnolen($value) {
        $this->_itemnolen = $value;
    }

    /**
     * @param Logical
     */
    public function setSerialno($value) {
        $this->_serialno = $value;
    }

    /**
     * @param Numeric
     */
    public function setSoptbno($value) {
        $this->_soptbno = $value;
    }

    /**
     * @param Logical
     */
    public function setPrncustfld($value) {
        $this->_prncustfld = $value;
    }

    /**
     * @param Logical
     */
    public function setSldtoshp($value) {
        $this->_sldtoshp = $value;
    }

    /**
     * @param Char
     */
    public function setCosttype($value) {
        $this->_costtype = $value;
    }

    /**
     * @param Char
     */
    public function setPathimage($value) {
        $this->_pathimage = $value;
    }

    /**
     * @param Logical
     */
    public function setPoapvch($value) {
        $this->_poapvch = $value;
    }

    /**
     * @param Char
     */
    public function setPoglfrtin($value) {
        $this->_poglfrtin = $value;
    }

    /**
     * @param Date
     */
    public function setStrtfsclyr($value) {
        $this->_strtfsclyr = $value;
    }

    /**
     * @param Logical
     */
    public function setTpl($value) {
        $this->_tpl = $value;
    }

    /**
     * @param Char
     */
    public function setYear($value) {
        $this->_year = $value;
    }

    /**
     * @param Date
     */
    public function setBegdate($value) {
        $this->_begdate = $value;
    }

    /**
     * @param Logical
     */
    public function setSorev($value) {
        $this->_sorev = $value;
    }

    /**
     * @param Char
     */
    public function setArexport($value) {
        $this->_arexport = $value;
    }

    /**
     * @param Memo
     */
    public function setPoblurb($value) {
        $this->_poblurb = $value;
    }

    /**
     * @param Logical
     */
    public function setPrtpicktk($value) {
        $this->_prtpicktk = $value;
    }

    /**
     * @param Logical
     */
    public function setPrtso($value) {
        $this->_prtso = $value;
    }

    /**
     * @param Logical
     */
    public function setPrtpackslp($value) {
        $this->_prtpackslp = $value;
    }

    /**
     * @param Logical
     */
    public function setIvautogen($value) {
        $this->_ivautogen = $value;
    }

    /**
     * @param Numeric
     */
    public function setPckslpcpy($value) {
        $this->_pckslpcpy = $value;
    }

    /**
     * @param Char
     */
    public function setReportprfx($value) {
        $this->_reportprfx = $value;
    }

    /**
     * @param Logical
     */
    public function setUselocno($value) {
        $this->_uselocno = $value;
    }

    /**
     * @param Numeric
     */
    public function setSwordnum($value) {
        $this->_swordnum = $value;
    }

    /**
     * @param Logical
     */
    public function setChkcustpo($value) {
        $this->_chkcustpo = $value;
    }

    /**
     * @param Char
     */
    public function setGlacctwip($value) {
        $this->_glacctwip = $value;
    }

    /**
     * @param Char
     */
    public function setGlacctswrv($value) {
        $this->_glacctswrv = $value;
    }

    /**
     * @param Char
     */
    public function setGlacctswcs($value) {
        $this->_glacctswcs = $value;
    }

    /**
     * @param Logical
     */
    public function setUsepricecd($value) {
        $this->_usepricecd = $value;
    }

    /**
     * @param Logical
     */
    public function setSwso($value) {
        $this->_swso = $value;
    }

    /**
     * @param Numeric
     */
    public function setDepgroupno($value) {
        $this->_depgroupno = $value;
    }

    /**
     * @param Logical
     */
    public function setIvautodef($value) {
        $this->_ivautodef = $value;
    }

    /**
     * @param Char
     */
    public function setDetailform($value) {
        $this->_detailform = $value;
    }

    /**
     * @param Logical
     */
    public function setUsecrdlim($value) {
        $this->_usecrdlim = $value;
    }

    /**
     * @param Logical
     */
    public function setScanscrn($value) {
        $this->_scanscrn = $value;
    }

    /**
     * @param Char
     */
    public function setIcfld9($value) {
        $this->_icfld9 = $value;
    }

    /**
     * @param Logical
     */
    public function setStartqry($value) {
        $this->_startqry = $value;
    }

    /**
     * @param Logical
     */
    public function setSoivbckord($value) {
        $this->_soivbckord = $value;
    }

    /**
     * @param Char
     */
    public function setFprimkey($value) {
        $this->_fprimkey = $value;
    }

    /**
     * @param Logical
     */
    public function setSobkorchk($value) {
        $this->_sobkorchk = $value;
    }

    /**
     * @param Logical
     */
    public function setPoitvend($value) {
        $this->_poitvend = $value;
    }

    /**
     * @param Char
     */
    public function setGlcurprof($value) {
        $this->_glcurprof = $value;
    }

    /**
     * @param Char
     */
    public function setGlcurloss($value) {
        $this->_glcurloss = $value;
    }

    /**
     * @param Char
     */
    public function setBasecurr($value) {
        $this->_basecurr = $value;
    }

    /**
     * @param Char
     */
    public function setBaseid($value) {
        $this->_baseid = $value;
    }

    /**
     * @param Logical
     */
    public function setGlsyncdata($value) {
        $this->_glsyncdata = $value;
    }

    /**
     * @param Char
     */
    public function setDba($value) {
        $this->_dba = $value;
    }

    /**
     * @param Char
     */
    public function setApshiptono($value) {
        $this->_apshiptono = $value;
    }

    /**
     * @param Logical
     */
    public function setSysasstab($value) {
        $this->_sysasstab = $value;
    }

    /**
     * @param Numeric
     */
    public function setGlrjbtno($value) {
        $this->_glrjbtno = $value;
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
    public function setIcprefixdf($value) {
        $this->_icprefixdf = $value;
    }

    /**
     * Constructor
     */
    public function __construct($company, $address1, $address2, $city, $state, $country, $zip, $phone, $fax, $email, $internet, $socolcommi, $ivcolcommi, $qucolcommi, $socolcost, $socomm, $sosubd, $ivsubd, $icover, $start, $serial, $logo, $fconvert, $flang_ctrl, $fedidnmbr, $stidnmbr, $fmex, $fdecimal, $fnumber, $glbatch_no, $ret_earn, $periods, $closedate, $currperiod, $aracct, $ardisacct, $cashacct, $finance, $interest, $scno, $cashflow1, $cashflow2, $cashflow3, $cashflow4, $cashflow5, $arbatch_no, $custno, $farage1, $farage2, $farage3, $farage4, $farage5, $min_fin, $arclosedt, $arcurper, $apply_no, $cashflow, $voucher, $apdisacct, $apacct, $apcashacct, $apbatch_no, $vencode, $fapage1, $fapage2, $fapage3, $fapage4, $fapage5, $apclosedt, $apcurper, $apckno, $invacct, $costacct, $icbatch_no, $icrecno, $maximum, $minimum, $icprifact, $iccstfact, $icclosedt, $iccurper, $ictrxno, $icphyno, $pono, $potaxrate, $pobatch_no, $poprupd, $podescflg, $podescno, $poauxacct, $buyer, $porrnum, $refno, $qutno, $oeno, $fshipvia, $fshipfrm, $invno, $salesacct, $shipacct, $taxacct, $restock, $fcrdno, $invposmes, $fposwhs, $fpostax, $fposinv, $qutreqnot, $qutreqno, $whsno, $tallyno, $whsfwair, $whsfwsea, $whsfacwei, $whsdecla, $auto, $farange, $fsalecom, $workreq, $shipinst, $material, $cityla, $def_dept, $swprice0, $taxrate, $rimno, $messno, $messlocno, $tmpnumber, $peramt, $awbno, $awbrefe, $bolrefe, $commiby, $insurance, $prcommi1, $prcommi2, $prcommi3, $prcommi4, $prcommi5, $prcommi6, $itmdisc, $faxserver, $faxname, $faxtype, $barcode, $port, $portsetup, $qtytermina, $soclose, $whsdef, $commcust, $ivbatch_no, $fdbtno, $linkqb, $mailserver, $ivcopy1, $ivcopy2, $ivcopy3, $ivcopy4, $ivcopy5, $ivdecla, $ivsignatu, $pocopy1, $pocopy2, $pocopy3, $pocopy4, $pocopy5, $qtdecla, $checkform, $dollarsign, $psno, $woformno, $whscstupd, $labelt1, $labelt2, $gltrxno, $inittab, $defaprn, $msgqtynav, $ftpsrvnam, $ftplogin, $ftppswd, $ftpstatus, $ftpport, $psbarcdlp, $icfld1, $icfld2, $icfld3, $icfld4, $icfld5, $icfld6, $icfld7, $icfld8, $icidlen, $icprefix1, $icprefix2, $icprefix3, $icprefix4, $icprefix5, $icprefix6, $itemnolen, $serialno, $soptbno, $prncustfld, $sldtoshp, $costtype, $pathimage, $poapvch, $poglfrtin, $strtfsclyr, $tpl, $year, $begdate, $sorev, $arexport, $poblurb, $prtpicktk, $prtso, $prtpackslp, $ivautogen, $pckslpcpy, $reportprfx, $uselocno, $swordnum, $chkcustpo, $glacctwip, $glacctswrv, $glacctswcs, $usepricecd, $swso, $depgroupno, $ivautodef, $detailform, $usecrdlim, $scanscrn, $icfld9, $startqry, $soivbckord, $fprimkey, $sobkorchk, $poitvend, $glcurprof, $glcurloss, $basecurr, $baseid, $glsyncdata, $dba, $apshiptono, $sysasstab, $glrjbtno, $qblistid, $icprefixdf) {
        $this->_company = $company;
        $this->_address1 = $address1;
        $this->_address2 = $address2;
        $this->_city = $city;
        $this->_state = $state;
        $this->_country = $country;
        $this->_zip = $zip;
        $this->_phone = $phone;
        $this->_fax = $fax;
        $this->_email = $email;
        $this->_internet = $internet;
        $this->_socolcommi = $socolcommi;
        $this->_ivcolcommi = $ivcolcommi;
        $this->_qucolcommi = $qucolcommi;
        $this->_socolcost = $socolcost;
        $this->_socomm = $socomm;
        $this->_sosubd = $sosubd;
        $this->_ivsubd = $ivsubd;
        $this->_icover = $icover;
        $this->_start = $start;
        $this->_serial = $serial;
        $this->_logo = $logo;
        $this->_fconvert = $fconvert;
        $this->_flang_ctrl = $flang_ctrl;
        $this->_fedidnmbr = $fedidnmbr;
        $this->_stidnmbr = $stidnmbr;
        $this->_fmex = $fmex;
        $this->_fdecimal = $fdecimal;
        $this->_fnumber = $fnumber;
        $this->_glbatch_no = $glbatch_no;
        $this->_ret_earn = $ret_earn;
        $this->_periods = $periods;
        $this->_closedate = $closedate;
        $this->_currperiod = $currperiod;
        $this->_aracct = $aracct;
        $this->_ardisacct = $ardisacct;
        $this->_cashacct = $cashacct;
        $this->_finance = $finance;
        $this->_interest = $interest;
        $this->_scno = $scno;
        $this->_cashflow1 = $cashflow1;
        $this->_cashflow2 = $cashflow2;
        $this->_cashflow3 = $cashflow3;
        $this->_cashflow4 = $cashflow4;
        $this->_cashflow5 = $cashflow5;
        $this->_arbatch_no = $arbatch_no;
        $this->_custno = $custno;
        $this->_farage1 = $farage1;
        $this->_farage2 = $farage2;
        $this->_farage3 = $farage3;
        $this->_farage4 = $farage4;
        $this->_farage5 = $farage5;
        $this->_min_fin = $min_fin;
        $this->_arclosedt = $arclosedt;
        $this->_arcurper = $arcurper;
        $this->_apply_no = $apply_no;
        $this->_cashflow = $cashflow;
        $this->_voucher = $voucher;
        $this->_apdisacct = $apdisacct;
        $this->_apacct = $apacct;
        $this->_apcashacct = $apcashacct;
        $this->_apbatch_no = $apbatch_no;
        $this->_vencode = $vencode;
        $this->_fapage1 = $fapage1;
        $this->_fapage2 = $fapage2;
        $this->_fapage3 = $fapage3;
        $this->_fapage4 = $fapage4;
        $this->_fapage5 = $fapage5;
        $this->_apclosedt = $apclosedt;
        $this->_apcurper = $apcurper;
        $this->_apckno = $apckno;
        $this->_invacct = $invacct;
        $this->_costacct = $costacct;
        $this->_icbatch_no = $icbatch_no;
        $this->_icrecno = $icrecno;
        $this->_maximum = $maximum;
        $this->_minimum = $minimum;
        $this->_icprifact = $icprifact;
        $this->_iccstfact = $iccstfact;
        $this->_icclosedt = $icclosedt;
        $this->_iccurper = $iccurper;
        $this->_ictrxno = $ictrxno;
        $this->_icphyno = $icphyno;
        $this->_pono = $pono;
        $this->_potaxrate = $potaxrate;
        $this->_pobatch_no = $pobatch_no;
        $this->_poprupd = $poprupd;
        $this->_podescflg = $podescflg;
        $this->_podescno = $podescno;
        $this->_poauxacct = $poauxacct;
        $this->_buyer = $buyer;
        $this->_porrnum = $porrnum;
        $this->_refno = $refno;
        $this->_qutno = $qutno;
        $this->_oeno = $oeno;
        $this->_fshipvia = $fshipvia;
        $this->_fshipfrm = $fshipfrm;
        $this->_invno = $invno;
        $this->_salesacct = $salesacct;
        $this->_shipacct = $shipacct;
        $this->_taxacct = $taxacct;
        $this->_restock = $restock;
        $this->_fcrdno = $fcrdno;
        $this->_invposmes = $invposmes;
        $this->_fposwhs = $fposwhs;
        $this->_fpostax = $fpostax;
        $this->_fposinv = $fposinv;
        $this->_qutreqnot = $qutreqnot;
        $this->_qutreqno = $qutreqno;
        $this->_whsno = $whsno;
        $this->_tallyno = $tallyno;
        $this->_whsfwair = $whsfwair;
        $this->_whsfwsea = $whsfwsea;
        $this->_whsfacwei = $whsfacwei;
        $this->_whsdecla = $whsdecla;
        $this->_auto = $auto;
        $this->_farange = $farange;
        $this->_fsalecom = $fsalecom;
        $this->_workreq = $workreq;
        $this->_shipinst = $shipinst;
        $this->_material = $material;
        $this->_cityla = $cityla;
        $this->_def_dept = $def_dept;
        $this->_swprice0 = $swprice0;
        $this->_taxrate = $taxrate;
        $this->_rimno = $rimno;
        $this->_messno = $messno;
        $this->_messlocno = $messlocno;
        $this->_tmpnumber = $tmpnumber;
        $this->_peramt = $peramt;
        $this->_awbno = $awbno;
        $this->_awbrefe = $awbrefe;
        $this->_bolrefe = $bolrefe;
        $this->_commiby = $commiby;
        $this->_insurance = $insurance;
        $this->_prcommi1 = $prcommi1;
        $this->_prcommi2 = $prcommi2;
        $this->_prcommi3 = $prcommi3;
        $this->_prcommi4 = $prcommi4;
        $this->_prcommi5 = $prcommi5;
        $this->_prcommi6 = $prcommi6;
        $this->_itmdisc = $itmdisc;
        $this->_faxserver = $faxserver;
        $this->_faxname = $faxname;
        $this->_faxtype = $faxtype;
        $this->_barcode = $barcode;
        $this->_port = $port;
        $this->_portsetup = $portsetup;
        $this->_qtytermina = $qtytermina;
        $this->_soclose = $soclose;
        $this->_whsdef = $whsdef;
        $this->_commcust = $commcust;
        $this->_ivbatch_no = $ivbatch_no;
        $this->_fdbtno = $fdbtno;
        $this->_linkqb = $linkqb;
        $this->_mailserver = $mailserver;
        $this->_ivcopy1 = $ivcopy1;
        $this->_ivcopy2 = $ivcopy2;
        $this->_ivcopy3 = $ivcopy3;
        $this->_ivcopy4 = $ivcopy4;
        $this->_ivcopy5 = $ivcopy5;
        $this->_ivdecla = $ivdecla;
        $this->_ivsignatu = $ivsignatu;
        $this->_pocopy1 = $pocopy1;
        $this->_pocopy2 = $pocopy2;
        $this->_pocopy3 = $pocopy3;
        $this->_pocopy4 = $pocopy4;
        $this->_pocopy5 = $pocopy5;
        $this->_qtdecla = $qtdecla;
        $this->_checkform = $checkform;
        $this->_dollarsign = $dollarsign;
        $this->_psno = $psno;
        $this->_woformno = $woformno;
        $this->_whscstupd = $whscstupd;
        $this->_labelt1 = $labelt1;
        $this->_labelt2 = $labelt2;
        $this->_gltrxno = $gltrxno;
        $this->_inittab = $inittab;
        $this->_defaprn = $defaprn;
        $this->_msgqtynav = $msgqtynav;
        $this->_ftpsrvnam = $ftpsrvnam;
        $this->_ftplogin = $ftplogin;
        $this->_ftppswd = $ftppswd;
        $this->_ftpstatus = $ftpstatus;
        $this->_ftpport = $ftpport;
        $this->_psbarcdlp = $psbarcdlp;
        $this->_icfld1 = $icfld1;
        $this->_icfld2 = $icfld2;
        $this->_icfld3 = $icfld3;
        $this->_icfld4 = $icfld4;
        $this->_icfld5 = $icfld5;
        $this->_icfld6 = $icfld6;
        $this->_icfld7 = $icfld7;
        $this->_icfld8 = $icfld8;
        $this->_icidlen = $icidlen;
        $this->_icprefix1 = $icprefix1;
        $this->_icprefix2 = $icprefix2;
        $this->_icprefix3 = $icprefix3;
        $this->_icprefix4 = $icprefix4;
        $this->_icprefix5 = $icprefix5;
        $this->_icprefix6 = $icprefix6;
        $this->_itemnolen = $itemnolen;
        $this->_serialno = $serialno;
        $this->_soptbno = $soptbno;
        $this->_prncustfld = $prncustfld;
        $this->_sldtoshp = $sldtoshp;
        $this->_costtype = $costtype;
        $this->_pathimage = $pathimage;
        $this->_poapvch = $poapvch;
        $this->_poglfrtin = $poglfrtin;
        $this->_strtfsclyr = $strtfsclyr;
        $this->_tpl = $tpl;
        $this->_year = $year;
        $this->_begdate = $begdate;
        $this->_sorev = $sorev;
        $this->_arexport = $arexport;
        $this->_poblurb = $poblurb;
        $this->_prtpicktk = $prtpicktk;
        $this->_prtso = $prtso;
        $this->_prtpackslp = $prtpackslp;
        $this->_ivautogen = $ivautogen;
        $this->_pckslpcpy = $pckslpcpy;
        $this->_reportprfx = $reportprfx;
        $this->_uselocno = ($uselocno === null)? false : $uselocno;
        $this->_swordnum = $swordnum;
        $this->_chkcustpo = $chkcustpo;
        $this->_glacctwip = $glacctwip;
        $this->_glacctswrv = $glacctswrv;
        $this->_glacctswcs = $glacctswcs;
        $this->_usepricecd = $usepricecd;
        $this->_swso = $swso;
        $this->_depgroupno = $depgroupno;
        $this->_ivautodef = $ivautodef;
        $this->_detailform = $detailform;
        $this->_usecrdlim = $usecrdlim;
        $this->_scanscrn = $scanscrn;
        $this->_icfld9 = $icfld9;
        $this->_startqry = $startqry;
        $this->_soivbckord = $soivbckord;
        $this->_fprimkey = $fprimkey;
        $this->_sobkorchk = $sobkorchk;
        $this->_poitvend = $poitvend;
        $this->_glcurprof = $glcurprof;
        $this->_glcurloss = $glcurloss;
        $this->_basecurr = $basecurr;
        $this->_baseid = $baseid;
        $this->_glsyncdata = $glsyncdata;
        $this->_dba = $dba;
        $this->_apshiptono = $apshiptono;
        $this->_sysasstab = $sysasstab;
        $this->_glrjbtno = $glrjbtno;
        $this->_qblistid = $qblistid;
        $this->_icprefixdf = $icprefixdf;
    }

    public static function toString() {
        return self::$_name;
    }

}
