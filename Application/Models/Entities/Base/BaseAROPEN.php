<?php

/**
 * Project:  VFP Business Series
 * Copyright: 2014. VFP Business Solutions, LLC
 */

namespace Dandelion\MVC\Application\Models\Entities\Base;

/**
 * BaseAROPEN
 */
class BaseAROPEN {

    /**
     * Private fields
     */
    private static $_name = "AROPEN";

    /**
     * Protected fields
     */

    /**
     * @var Char
     */
    protected $_invno;

    /**
     * @var Char
     */
    protected $_trxno;

    /**
     * @var Date
     */
    protected $_invdate;

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
    protected $_salesmn;

    /**
     * @var Char
     */
    protected $_ponum;

    /**
     * @var Numeric
     */
    protected $_invtotal;

    /**
     * @var Numeric
     */
    protected $_amtpaid;

    /**
     * @var Date
     */
    protected $_datepaid;

    /**
     * @var Char
     */
    protected $_refno;

    /**
     * @var Numeric
     */
    protected $_trxbal;

    /**
     * @var Date
     */
    protected $_duedate;

    /**
     * @var Date
     */
    protected $_discdate;

    /**
     * @var Numeric
     */
    protected $_discamt;

    /**
     * @var Char
     */
    protected $_discid;

    /**
     * @var Char
     */
    protected $_nonar;

    /**
     * @var Char
     */
    protected $_termid;

    /**
     * @var Char
     */
    protected $_acct2;

    /**
     * @var Char
     */
    protected $_aracct;

    /**
     * @var Numeric
     */
    protected $_openbal;

    /**
     * @var Numeric
     */
    protected $_aux1;

    /**
     * @var Numeric
     */
    protected $_aux2;

    /**
     * @var Logical
     */
    protected $_aux3;

    /**
     * @var Numeric
     */
    protected $_aux4;

    /**
     * @var Numeric
     */
    protected $_aux5;

    /**
     * @var Char
     */
    protected $_alf;

    /**
     * @var Numeric
     */
    protected $_batch_no;

    /**
     * @var Char
     */
    protected $_trackno;

    /**
     * @var Char
     */
    protected $_depgroup;

    /**
     * @var Char
     */
    protected $_subbatchno;

    /**
     * @var Numeric
     */
    protected $_discount;

    /**
     * @var Memo
     */
    protected $_arcrnotes;

    /**
     * @var Char
     */
    protected $_ordnum;

    /**
     * @var Char
     */
    protected $_whsno;

    /**
     * @var Char
     */
    protected $_glaracct;

    /**
     * @var Char
     */
    protected $_year;

    /**
     * @var Numeric
     */
    protected $_period;

    /**
     * @var Char
     */
    protected $_void;

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
    protected $_currid;

    /**
     * @var Char
     */
    protected $_baseid;

    /**
     * @var Char
     */
    protected $_depacct;

    /**
     * @var Date
     */
    protected $_depdate;

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
    protected $_sourceno;

    /**
     * @var Char
     */
    protected $_srctype;

    /**
     * @var Char
     */
    protected $_paytid;

    /**
     * @var Char
     */
    protected $_trxorigin;

    /**
     * @var Numeric
     */
    protected $_paypalfee;

    /**
     * @var Char
     */
    protected $_invnofc;

    /**
     * @var Char
     */
    protected $_cstctid;

    /**
     * @var Logical
     */
    protected $_flgcollect;

    /**
     * @var Logical
     */
    protected $_ntoflgag;

    /**
     * @var Date
     */
    protected $_ntodate;

    /**
     * @var Date
     */
    protected $_colldate;

    /**
     * @var Logical
     */
    protected $_lienflag;

    /**
     * @var Date
     */
    protected $_liendate;

    /**
     * @var Logical
     */
    protected $_ntoflag;

    /**
     * @var Date
     */
    protected $_liendaterl;

    /**
     * @var Char
     */
    protected $_usercode;

    /**
     * @var Char
     */
    protected $_noteflag;

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
     * @var Logical
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
     * @var Date
     */
    protected $_firstduedt;

    /**
     * @var Date
     */
    protected $_startdate;

    /**
     * @var Logical
     */
    protected $_nsfcheck;

    /**
     * @var Char
     */
    protected $_qbtxnid;

    /**
     * @var Char
     */
    protected $_posinvno;

    /**
     * @var Char
     */
    protected $_qblistid;

    /**
     * @var Char
     */
    protected $_shprelno;

    /**
     * Getters
     */

    /**
     * @return Char
     */
    public function getInvno() {
        return $this->_invno;
    }

    /**
     * @return Char
     */
    public function getTrxno() {
        return $this->_trxno;
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
    public function getCustno() {
        return $this->_custno;
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
    public function getSalesmn() {
        return $this->_salesmn;
    }

    /**
     * @return Char
     */
    public function getPonum() {
        return $this->_ponum;
    }

    /**
     * @return Numeric
     */
    public function getInvtotal() {
        return $this->_invtotal;
    }

    /**
     * @return Numeric
     */
    public function getAmtpaid() {
        return $this->_amtpaid;
    }

    /**
     * @return Date
     */
    public function getDatepaid() {
        return $this->_datepaid;
    }

    /**
     * @return Char
     */
    public function getRefno() {
        return $this->_refno;
    }

    /**
     * @return Numeric
     */
    public function getTrxbal() {
        return $this->_trxbal;
    }

    /**
     * @return Date
     */
    public function getDuedate() {
        return $this->_duedate;
    }

    /**
     * @return Date
     */
    public function getDiscdate() {
        return $this->_discdate;
    }

    /**
     * @return Numeric
     */
    public function getDiscamt() {
        return $this->_discamt;
    }

    /**
     * @return Char
     */
    public function getDiscid() {
        return $this->_discid;
    }

    /**
     * @return Char
     */
    public function getNonar() {
        return $this->_nonar;
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
    public function getAcct2() {
        return $this->_acct2;
    }

    /**
     * @return Char
     */
    public function getAracct() {
        return $this->_aracct;
    }

    /**
     * @return Numeric
     */
    public function getOpenbal() {
        return $this->_openbal;
    }

    /**
     * @return Numeric
     */
    public function getAux1() {
        return $this->_aux1;
    }

    /**
     * @return Numeric
     */
    public function getAux2() {
        return $this->_aux2;
    }

    /**
     * @return Logical
     */
    public function getAux3() {
        return $this->_aux3;
    }

    /**
     * @return Numeric
     */
    public function getAux4() {
        return $this->_aux4;
    }

    /**
     * @return Numeric
     */
    public function getAux5() {
        return $this->_aux5;
    }

    /**
     * @return Char
     */
    public function getAlf() {
        return $this->_alf;
    }

    /**
     * @return Numeric
     */
    public function getBatch_no() {
        return $this->_batch_no;
    }

    /**
     * @return Char
     */
    public function getTrackno() {
        return $this->_trackno;
    }

    /**
     * @return Char
     */
    public function getDepgroup() {
        return $this->_depgroup;
    }

    /**
     * @return Char
     */
    public function getSubbatchno() {
        return $this->_subbatchno;
    }

    /**
     * @return Numeric
     */
    public function getDiscount() {
        return $this->_discount;
    }

    /**
     * @return Memo
     */
    public function getArcrnotes() {
        return $this->_arcrnotes;
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
    public function getWhsno() {
        return $this->_whsno;
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
    public function getYear() {
        return $this->_year;
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
    public function getVoid() {
        return $this->_void;
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
     * @return Char
     */
    public function getDepacct() {
        return $this->_depacct;
    }

    /**
     * @return Date
     */
    public function getDepdate() {
        return $this->_depdate;
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
    public function getPaytid() {
        return $this->_paytid;
    }

    /**
     * @return Char
     */
    public function getTrxorigin() {
        return $this->_trxorigin;
    }

    /**
     * @return Numeric
     */
    public function getPaypalfee() {
        return $this->_paypalfee;
    }

    /**
     * @return Char
     */
    public function getInvnofc() {
        return $this->_invnofc;
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
    public function getFlgcollect() {
        return $this->_flgcollect;
    }

    /**
     * @return Logical
     */
    public function getNtoflgag() {
        return $this->_ntoflgag;
    }

    /**
     * @return Date
     */
    public function getNtodate() {
        return $this->_ntodate;
    }

    /**
     * @return Date
     */
    public function getColldate() {
        return $this->_colldate;
    }

    /**
     * @return Logical
     */
    public function getLienflag() {
        return $this->_lienflag;
    }

    /**
     * @return Date
     */
    public function getLiendate() {
        return $this->_liendate;
    }

    /**
     * @return Logical
     */
    public function getNtoflag() {
        return $this->_ntoflag;
    }

    /**
     * @return Date
     */
    public function getLiendaterl() {
        return $this->_liendaterl;
    }

    /**
     * @return Char
     */
    public function getUsercode() {
        return $this->_usercode;
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
     * @return Logical
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
     * @return Date
     */
    public function getFirstduedt() {
        return $this->_firstduedt;
    }

    /**
     * @return Date
     */
    public function getStartdate() {
        return $this->_startdate;
    }

    /**
     * @return Logical
     */
    public function getNsfcheck() {
        return $this->_nsfcheck;
    }

    /**
     * @return Char
     */
    public function getQbtxnid() {
        return $this->_qbtxnid;
    }

    /**
     * @return Char
     */
    public function getPosinvno() {
        return $this->_posinvno;
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
    public function getShprelno() {
        return $this->_shprelno;
    }

    /**
     * Setters
     */

    /**
     * @param Char
     */
    public function setInvno($value) {
        $this->_invno = $value;
    }

    /**
     * @param Char
     */
    public function setTrxno($value) {
        $this->_trxno = $value;
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
    public function setCustno($value) {
        $this->_custno = $value;
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
    public function setSalesmn($value) {
        $this->_salesmn = $value;
    }

    /**
     * @param Char
     */
    public function setPonum($value) {
        $this->_ponum = $value;
    }

    /**
     * @param Numeric
     */
    public function setInvtotal($value) {
        $this->_invtotal = $value;
    }

    /**
     * @param Numeric
     */
    public function setAmtpaid($value) {
        $this->_amtpaid = $value;
    }

    /**
     * @param Date
     */
    public function setDatepaid($value) {
        $this->_datepaid = $value;
    }

    /**
     * @param Char
     */
    public function setRefno($value) {
        $this->_refno = $value;
    }

    /**
     * @param Numeric
     */
    public function setTrxbal($value) {
        $this->_trxbal = $value;
    }

    /**
     * @param Date
     */
    public function setDuedate($value) {
        $this->_duedate = $value;
    }

    /**
     * @param Date
     */
    public function setDiscdate($value) {
        $this->_discdate = $value;
    }

    /**
     * @param Numeric
     */
    public function setDiscamt($value) {
        $this->_discamt = $value;
    }

    /**
     * @param Char
     */
    public function setDiscid($value) {
        $this->_discid = $value;
    }

    /**
     * @param Char
     */
    public function setNonar($value) {
        $this->_nonar = $value;
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
    public function setAcct2($value) {
        $this->_acct2 = $value;
    }

    /**
     * @param Char
     */
    public function setAracct($value) {
        $this->_aracct = $value;
    }

    /**
     * @param Numeric
     */
    public function setOpenbal($value) {
        $this->_openbal = $value;
    }

    /**
     * @param Numeric
     */
    public function setAux1($value) {
        $this->_aux1 = $value;
    }

    /**
     * @param Numeric
     */
    public function setAux2($value) {
        $this->_aux2 = $value;
    }

    /**
     * @param Logical
     */
    public function setAux3($value) {
        $this->_aux3 = $value;
    }

    /**
     * @param Numeric
     */
    public function setAux4($value) {
        $this->_aux4 = $value;
    }

    /**
     * @param Numeric
     */
    public function setAux5($value) {
        $this->_aux5 = $value;
    }

    /**
     * @param Char
     */
    public function setAlf($value) {
        $this->_alf = $value;
    }

    /**
     * @param Numeric
     */
    public function setBatch_no($value) {
        $this->_batch_no = $value;
    }

    /**
     * @param Char
     */
    public function setTrackno($value) {
        $this->_trackno = $value;
    }

    /**
     * @param Char
     */
    public function setDepgroup($value) {
        $this->_depgroup = $value;
    }

    /**
     * @param Char
     */
    public function setSubbatchno($value) {
        $this->_subbatchno = $value;
    }

    /**
     * @param Numeric
     */
    public function setDiscount($value) {
        $this->_discount = $value;
    }

    /**
     * @param Memo
     */
    public function setArcrnotes($value) {
        $this->_arcrnotes = $value;
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
    public function setWhsno($value) {
        $this->_whsno = $value;
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
    public function setYear($value) {
        $this->_year = $value;
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
    public function setVoid($value) {
        $this->_void = $value;
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
     * @param Char
     */
    public function setDepacct($value) {
        $this->_depacct = $value;
    }

    /**
     * @param Date
     */
    public function setDepdate($value) {
        $this->_depdate = $value;
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
    public function setPaytid($value) {
        $this->_paytid = $value;
    }

    /**
     * @param Char
     */
    public function setTrxorigin($value) {
        $this->_trxorigin = $value;
    }

    /**
     * @param Numeric
     */
    public function setPaypalfee($value) {
        $this->_paypalfee = $value;
    }

    /**
     * @param Char
     */
    public function setInvnofc($value) {
        $this->_invnofc = $value;
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
    public function setFlgcollect($value) {
        $this->_flgcollect = $value;
    }

    /**
     * @param Logical
     */
    public function setNtoflgag($value) {
        $this->_ntoflgag = $value;
    }

    /**
     * @param Date
     */
    public function setNtodate($value) {
        $this->_ntodate = $value;
    }

    /**
     * @param Date
     */
    public function setColldate($value) {
        $this->_colldate = $value;
    }

    /**
     * @param Logical
     */
    public function setLienflag($value) {
        $this->_lienflag = $value;
    }

    /**
     * @param Date
     */
    public function setLiendate($value) {
        $this->_liendate = $value;
    }

    /**
     * @param Logical
     */
    public function setNtoflag($value) {
        $this->_ntoflag = $value;
    }

    /**
     * @param Date
     */
    public function setLiendaterl($value) {
        $this->_liendaterl = $value;
    }

    /**
     * @param Char
     */
    public function setUsercode($value) {
        $this->_usercode = $value;
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
     * @param Logical
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
     * @param Date
     */
    public function setFirstduedt($value) {
        $this->_firstduedt = $value;
    }

    /**
     * @param Date
     */
    public function setStartdate($value) {
        $this->_startdate = $value;
    }

    /**
     * @param Logical
     */
    public function setNsfcheck($value) {
        $this->_nsfcheck = $value;
    }

    /**
     * @param Char
     */
    public function setQbtxnid($value) {
        $this->_qbtxnid = $value;
    }

    /**
     * @param Char
     */
    public function setPosinvno($value) {
        $this->_posinvno = $value;
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
    public function setShprelno($value) {
        $this->_shprelno = $value;
    }

    /**
     * Constructor
     */
    public function __construct($invno, $trxno, $invdate, $custno, $company, $salesmn, $ponum, $invtotal, $amtpaid, $datepaid, $refno, $trxbal, $duedate, $discdate, $discamt, $discid, $nonar, $termid, $acct2, $aracct, $openbal, $aux1, $aux2, $aux3, $aux4, $aux5, $alf, $batch_no, $trackno, $depgroup, $subbatchno, $discount, $arcrnotes, $ordnum, $whsno, $glaracct, $year, $period, $void, $orgvalue, $exchrate, $currid, $baseid, $depacct, $depdate, $fupdtime, $fupddate, $fstation, $fuserid, $sourceno, $srctype, $paytid, $trxorigin, $paypalfee, $invnofc, $cstctid, $flgcollect, $ntoflgag, $ntodate, $colldate, $lienflag, $liendate, $ntoflag, $liendaterl, $usercode, $noteflag, $nopayments, $startdays, $totaldays, $specterms, $specteramt, $payfreqday, $firstduedt, $startdate, $nsfcheck, $qbtxnid, $posinvno, $qblistid, $shprelno) {
        $this->_invno = $invno;
        $this->_trxno = $trxno;
        $this->_invdate = $invdate;
        $this->_custno = $custno;
        $this->_company = $company;
        $this->_salesmn = $salesmn;
        $this->_ponum = $ponum;
        $this->_invtotal = $invtotal;
        $this->_amtpaid = $amtpaid;
        $this->_datepaid = $datepaid;
        $this->_refno = $refno;
        $this->_trxbal = $trxbal;
        $this->_duedate = $duedate;
        $this->_discdate = $discdate;
        $this->_discamt = $discamt;
        $this->_discid = $discid;
        $this->_nonar = $nonar;
        $this->_termid = $termid;
        $this->_acct2 = $acct2;
        $this->_aracct = $aracct;
        $this->_openbal = $openbal;
        $this->_aux1 = $aux1;
        $this->_aux2 = $aux2;
        $this->_aux3 = $aux3;
        $this->_aux4 = $aux4;
        $this->_aux5 = $aux5;
        $this->_alf = $alf;
        $this->_batch_no = $batch_no;
        $this->_trackno = $trackno;
        $this->_depgroup = $depgroup;
        $this->_subbatchno = $subbatchno;
        $this->_discount = $discount;
        $this->_arcrnotes = $arcrnotes;
        $this->_ordnum = $ordnum;
        $this->_whsno = $whsno;
        $this->_glaracct = $glaracct;
        $this->_year = $year;
        $this->_period = $period;
        $this->_void = $void;
        $this->_orgvalue = $orgvalue;
        $this->_exchrate = $exchrate;
        $this->_currid = $currid;
        $this->_baseid = $baseid;
        $this->_depacct = $depacct;
        $this->_depdate = $depdate;
        $this->_fupdtime = $fupdtime;
        $this->_fupddate = $fupddate;
        $this->_fstation = $fstation;
        $this->_fuserid = $fuserid;
        $this->_sourceno = $sourceno;
        $this->_srctype = $srctype;
        $this->_paytid = $paytid;
        $this->_trxorigin = $trxorigin;
        $this->_paypalfee = $paypalfee;
        $this->_invnofc = $invnofc;
        $this->_cstctid = $cstctid;
        $this->_flgcollect = $flgcollect;
        $this->_ntoflgag = $ntoflgag;
        $this->_ntodate = $ntodate;
        $this->_colldate = $colldate;
        $this->_lienflag = $lienflag;
        $this->_liendate = $liendate;
        $this->_ntoflag = $ntoflag;
        $this->_liendaterl = $liendaterl;
        $this->_usercode = $usercode;
        $this->_noteflag = $noteflag;
        $this->_nopayments = $nopayments;
        $this->_startdays = $startdays;
        $this->_totaldays = $totaldays;
        $this->_specterms = $specterms;
        $this->_specteramt = $specteramt;
        $this->_payfreqday = $payfreqday;
        $this->_firstduedt = $firstduedt;
        $this->_startdate = $startdate;
        $this->_nsfcheck = $nsfcheck;
        $this->_qbtxnid = $qbtxnid;
        $this->_posinvno = $posinvno;
        $this->_qblistid = $qblistid;
        $this->_shprelno = $shprelno;
    }

    public static function toString() {
        return self::$_name;
    }

}
