<?php

/**
 * Project:  VFP Business Series
 * Copyright: 2014. VFP Business Solutions, LLC
 */

namespace Dandelion\MVC\Application\Models\Entities\Base;

/**
 * BaseAPOPEN
 */
class BaseAPOPEN {

    /**
     * Private fields
     */
    private static $_name = "APOPEN";

    /**
     * Protected fields
     */

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
    protected $_vendno;

    /**
     * @var Char
     */
    protected $_voucher;

    /**
     * @var Numeric
     */
    protected $_itotal;

    /**
     * @var Numeric
     */
    protected $_balance;

    /**
     * @var Numeric
     */
    protected $_amtpaid;

    /**
     * @var Date
     */
    protected $_dtepaid;

    /**
     * @var Numeric
     */
    protected $_disctotal;

    /**
     * @var Char
     */
    protected $_refno;

    /**
     * @var Numeric
     */
    protected $_dueday;

    /**
     * @var Numeric
     */
    protected $_discday;

    /**
     * @var Date
     */
    protected $_netdate;

    /**
     * @var Date
     */
    protected $_distdate;

    /**
     * @var Date
     */
    protected $_discdate;

    /**
     * @var Numeric
     */
    protected $_discperc;

    /**
     * @var Char
     */
    protected $_terms;

    /**
     * @var Char
     */
    protected $_termdesc;

    /**
     * @var Char
     */
    protected $_apacct;

    /**
     * @var Char
     */
    protected $_cashacct;

    /**
     * @var Numeric
     */
    protected $_amttopay;

    /**
     * @var Numeric
     */
    protected $_discount;

    /**
     * @var Char
     */
    protected $_check_no;

    /**
     * @var Numeric
     */
    protected $_period;

    /**
     * @var Numeric
     */
    protected $_recno;

    /**
     * @var Char
     */
    protected $_defferd;

    /**
     * @var Char
     */
    protected $_pmt;

    /**
     * @var Char
     */
    protected $_voided;

    /**
     * @var Char
     */
    protected $_fvoid;

    /**
     * @var Numeric
     */
    protected $_nonap;

    /**
     * @var Numeric
     */
    protected $_batch;

    /**
     * @var Char
     */
    protected $_ponum;

    /**
     * @var Date
     */
    protected $_duedate;

    /**
     * @var Numeric
     */
    protected $_mark;

    /**
     * @var Numeric
     */
    protected $_markm;

    /**
     * @var Logical
     */
    protected $_nflg0;

    /**
     * @var Char
     */
    protected $_indust;

    /**
     * @var Char
     */
    protected $_baseid;

    /**
     * @var Numeric
     */
    protected $_orgvalue;

    /**
     * @var Numeric
     */
    protected $_exchrate;

    /**
     * @var Memo
     */
    protected $_notes;

    /**
     * @var Char
     */
    protected $_currid;

    /**
     * @var Char
     */
    protected $_year;

    /**
     * @var Char
     */
    protected $_pmtmed;

    /**
     * @var Char
     */
    protected $_cmptype;

    /**
     * @var Char
     */
    protected $_taxcode1;

    /**
     * @var Char
     */
    protected $_taxcode2;

    /**
     * @var Char
     */
    protected $_taxcode3;

    /**
     * @var Numeric
     */
    protected $_taxper1;

    /**
     * @var Numeric
     */
    protected $_taxper2;

    /**
     * @var Numeric
     */
    protected $_taxper3;

    /**
     * @var Numeric
     */
    protected $_taxtyp1tot;

    /**
     * @var Numeric
     */
    protected $_taxtyp2tot;

    /**
     * @var Numeric
     */
    protected $_taxtyp3tot;

    /**
     * @var Numeric
     */
    protected $_taxper;

    /**
     * @var Numeric
     */
    protected $_baseamt;

    /**
     * @var Numeric
     */
    protected $_taxamt;

    /**
     * @var Numeric
     */
    protected $_invtotal;

    /**
     * @var Numeric
     */
    protected $_exptotal;

    /**
     * @var Numeric
     */
    protected $_aptotal;

    /**
     * @var Logical
     */
    protected $_currstat;

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
    protected $_fuserid;

    /**
     * @var Char
     */
    protected $_fstation;

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
    protected $_poprefix;

    /**
     * @var Char
     */
    protected $_bankacct;

    /**
     * @var Numeric
     */
    protected $_bankamt;

    /**
     * @var Char
     */
    protected $_source;

    /**
     * @var Char
     */
    protected $_rimno;

    /**
     * @var Char
     */
    protected $_costgroup;

    /**
     * @var Char
     */
    protected $_remitcode;

    /**
     * @var Numeric
     */
    protected $_poshpamt;

    /**
     * @var Numeric
     */
    protected $_poshpqty;

    /**
     * @var Logical
     */
    protected $_poshpflag;

    /**
     * @var Char
     */
    protected $_postfrom;

    /**
     * @var Logical
     */
    protected $_wireflag;

    /**
     * @var Char
     */
    protected $_custno;

    /**
     * @var Char
     */
    protected $_paymethod;

    /**
     * @var Char
     */
    protected $_payaccount;

    /**
     * @var Char
     */
    protected $_payvendno;

    /**
     * @var Char
     */
    protected $_ordnum;

    /**
     * @var Char
     */
    protected $_qbtxnid;

    /**
     * @var Char
     */
    protected $_qblistid;

    /**
     * @var Logical
     */
    protected $_jobcost;

    /**
     * @var Numeric
     */
    protected $_ppamount;

    /**
     * @var Numeric
     */
    protected $_glbatchno;

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
     * @return Date
     */
    public function getInvdate() {
        return $this->_invdate;
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
    public function getVoucher() {
        return $this->_voucher;
    }

    /**
     * @return Numeric
     */
    public function getItotal() {
        return $this->_itotal;
    }

    /**
     * @return Numeric
     */
    public function getBalance() {
        return $this->_balance;
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
    public function getDtepaid() {
        return $this->_dtepaid;
    }

    /**
     * @return Numeric
     */
    public function getDisctotal() {
        return $this->_disctotal;
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
    public function getDueday() {
        return $this->_dueday;
    }

    /**
     * @return Numeric
     */
    public function getDiscday() {
        return $this->_discday;
    }

    /**
     * @return Date
     */
    public function getNetdate() {
        return $this->_netdate;
    }

    /**
     * @return Date
     */
    public function getDistdate() {
        return $this->_distdate;
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
    public function getDiscperc() {
        return $this->_discperc;
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
    public function getTermdesc() {
        return $this->_termdesc;
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
    public function getCashacct() {
        return $this->_cashacct;
    }

    /**
     * @return Numeric
     */
    public function getAmttopay() {
        return $this->_amttopay;
    }

    /**
     * @return Numeric
     */
    public function getDiscount() {
        return $this->_discount;
    }

    /**
     * @return Char
     */
    public function getCheck_no() {
        return $this->_check_no;
    }

    /**
     * @return Numeric
     */
    public function getPeriod() {
        return $this->_period;
    }

    /**
     * @return Numeric
     */
    public function getRecno() {
        return $this->_recno;
    }

    /**
     * @return Char
     */
    public function getDefferd() {
        return $this->_defferd;
    }

    /**
     * @return Char
     */
    public function getPmt() {
        return $this->_pmt;
    }

    /**
     * @return Char
     */
    public function getVoided() {
        return $this->_voided;
    }

    /**
     * @return Char
     */
    public function getFvoid() {
        return $this->_fvoid;
    }

    /**
     * @return Numeric
     */
    public function getNonap() {
        return $this->_nonap;
    }

    /**
     * @return Numeric
     */
    public function getBatch() {
        return $this->_batch;
    }

    /**
     * @return Char
     */
    public function getPonum() {
        return $this->_ponum;
    }

    /**
     * @return Date
     */
    public function getDuedate() {
        return $this->_duedate;
    }

    /**
     * @return Numeric
     */
    public function getMark() {
        return $this->_mark;
    }

    /**
     * @return Numeric
     */
    public function getMarkm() {
        return $this->_markm;
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
    public function getIndust() {
        return $this->_indust;
    }

    /**
     * @return Char
     */
    public function getBaseid() {
        return $this->_baseid;
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
     * @return Memo
     */
    public function getNotes() {
        return $this->_notes;
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
    public function getYear() {
        return $this->_year;
    }

    /**
     * @return Char
     */
    public function getPmtmed() {
        return $this->_pmtmed;
    }

    /**
     * @return Char
     */
    public function getCmptype() {
        return $this->_cmptype;
    }

    /**
     * @return Char
     */
    public function getTaxcode1() {
        return $this->_taxcode1;
    }

    /**
     * @return Char
     */
    public function getTaxcode2() {
        return $this->_taxcode2;
    }

    /**
     * @return Char
     */
    public function getTaxcode3() {
        return $this->_taxcode3;
    }

    /**
     * @return Numeric
     */
    public function getTaxper1() {
        return $this->_taxper1;
    }

    /**
     * @return Numeric
     */
    public function getTaxper2() {
        return $this->_taxper2;
    }

    /**
     * @return Numeric
     */
    public function getTaxper3() {
        return $this->_taxper3;
    }

    /**
     * @return Numeric
     */
    public function getTaxtyp1tot() {
        return $this->_taxtyp1tot;
    }

    /**
     * @return Numeric
     */
    public function getTaxtyp2tot() {
        return $this->_taxtyp2tot;
    }

    /**
     * @return Numeric
     */
    public function getTaxtyp3tot() {
        return $this->_taxtyp3tot;
    }

    /**
     * @return Numeric
     */
    public function getTaxper() {
        return $this->_taxper;
    }

    /**
     * @return Numeric
     */
    public function getBaseamt() {
        return $this->_baseamt;
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
    public function getInvtotal() {
        return $this->_invtotal;
    }

    /**
     * @return Numeric
     */
    public function getExptotal() {
        return $this->_exptotal;
    }

    /**
     * @return Numeric
     */
    public function getAptotal() {
        return $this->_aptotal;
    }

    /**
     * @return Logical
     */
    public function getCurrstat() {
        return $this->_currstat;
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
    public function getPoprefix() {
        return $this->_poprefix;
    }

    /**
     * @return Char
     */
    public function getBankacct() {
        return $this->_bankacct;
    }

    /**
     * @return Numeric
     */
    public function getBankamt() {
        return $this->_bankamt;
    }

    /**
     * @return Char
     */
    public function getSource() {
        return $this->_source;
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
    public function getCostgroup() {
        return $this->_costgroup;
    }

    /**
     * @return Char
     */
    public function getRemitcode() {
        return $this->_remitcode;
    }

    /**
     * @return Numeric
     */
    public function getPoshpamt() {
        return $this->_poshpamt;
    }

    /**
     * @return Numeric
     */
    public function getPoshpqty() {
        return $this->_poshpqty;
    }

    /**
     * @return Logical
     */
    public function getPoshpflag() {
        return $this->_poshpflag;
    }

    /**
     * @return Char
     */
    public function getPostfrom() {
        return $this->_postfrom;
    }

    /**
     * @return Logical
     */
    public function getWireflag() {
        return $this->_wireflag;
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
    public function getPaymethod() {
        return $this->_paymethod;
    }

    /**
     * @return Char
     */
    public function getPayaccount() {
        return $this->_payaccount;
    }

    /**
     * @return Char
     */
    public function getPayvendno() {
        return $this->_payvendno;
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
    public function getQbtxnid() {
        return $this->_qbtxnid;
    }

    /**
     * @return Char
     */
    public function getQblistid() {
        return $this->_qblistid;
    }

    /**
     * @return Logical
     */
    public function getJobcost() {
        return $this->_jobcost;
    }

    /**
     * @return Numeric
     */
    public function getPpamount() {
        return $this->_ppamount;
    }

    /**
     * @return Numeric
     */
    public function getGlbatchno() {
        return $this->_glbatchno;
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
     * @param Date
     */
    public function setInvdate($value) {
        $this->_invdate = $value;
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
    public function setVoucher($value) {
        $this->_voucher = $value;
    }

    /**
     * @param Numeric
     */
    public function setItotal($value) {
        $this->_itotal = $value;
    }

    /**
     * @param Numeric
     */
    public function setBalance($value) {
        $this->_balance = $value;
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
    public function setDtepaid($value) {
        $this->_dtepaid = $value;
    }

    /**
     * @param Numeric
     */
    public function setDisctotal($value) {
        $this->_disctotal = $value;
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
    public function setDueday($value) {
        $this->_dueday = $value;
    }

    /**
     * @param Numeric
     */
    public function setDiscday($value) {
        $this->_discday = $value;
    }

    /**
     * @param Date
     */
    public function setNetdate($value) {
        $this->_netdate = $value;
    }

    /**
     * @param Date
     */
    public function setDistdate($value) {
        $this->_distdate = $value;
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
    public function setDiscperc($value) {
        $this->_discperc = $value;
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
    public function setTermdesc($value) {
        $this->_termdesc = $value;
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
    public function setCashacct($value) {
        $this->_cashacct = $value;
    }

    /**
     * @param Numeric
     */
    public function setAmttopay($value) {
        $this->_amttopay = $value;
    }

    /**
     * @param Numeric
     */
    public function setDiscount($value) {
        $this->_discount = $value;
    }

    /**
     * @param Char
     */
    public function setCheck_no($value) {
        $this->_check_no = $value;
    }

    /**
     * @param Numeric
     */
    public function setPeriod($value) {
        $this->_period = $value;
    }

    /**
     * @param Numeric
     */
    public function setRecno($value) {
        $this->_recno = $value;
    }

    /**
     * @param Char
     */
    public function setDefferd($value) {
        $this->_defferd = $value;
    }

    /**
     * @param Char
     */
    public function setPmt($value) {
        $this->_pmt = $value;
    }

    /**
     * @param Char
     */
    public function setVoided($value) {
        $this->_voided = $value;
    }

    /**
     * @param Char
     */
    public function setFvoid($value) {
        $this->_fvoid = $value;
    }

    /**
     * @param Numeric
     */
    public function setNonap($value) {
        $this->_nonap = $value;
    }

    /**
     * @param Numeric
     */
    public function setBatch($value) {
        $this->_batch = $value;
    }

    /**
     * @param Char
     */
    public function setPonum($value) {
        $this->_ponum = $value;
    }

    /**
     * @param Date
     */
    public function setDuedate($value) {
        $this->_duedate = $value;
    }

    /**
     * @param Numeric
     */
    public function setMark($value) {
        $this->_mark = $value;
    }

    /**
     * @param Numeric
     */
    public function setMarkm($value) {
        $this->_markm = $value;
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
    public function setIndust($value) {
        $this->_indust = $value;
    }

    /**
     * @param Char
     */
    public function setBaseid($value) {
        $this->_baseid = $value;
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
     * @param Memo
     */
    public function setNotes($value) {
        $this->_notes = $value;
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
    public function setYear($value) {
        $this->_year = $value;
    }

    /**
     * @param Char
     */
    public function setPmtmed($value) {
        $this->_pmtmed = $value;
    }

    /**
     * @param Char
     */
    public function setCmptype($value) {
        $this->_cmptype = $value;
    }

    /**
     * @param Char
     */
    public function setTaxcode1($value) {
        $this->_taxcode1 = $value;
    }

    /**
     * @param Char
     */
    public function setTaxcode2($value) {
        $this->_taxcode2 = $value;
    }

    /**
     * @param Char
     */
    public function setTaxcode3($value) {
        $this->_taxcode3 = $value;
    }

    /**
     * @param Numeric
     */
    public function setTaxper1($value) {
        $this->_taxper1 = $value;
    }

    /**
     * @param Numeric
     */
    public function setTaxper2($value) {
        $this->_taxper2 = $value;
    }

    /**
     * @param Numeric
     */
    public function setTaxper3($value) {
        $this->_taxper3 = $value;
    }

    /**
     * @param Numeric
     */
    public function setTaxtyp1tot($value) {
        $this->_taxtyp1tot = $value;
    }

    /**
     * @param Numeric
     */
    public function setTaxtyp2tot($value) {
        $this->_taxtyp2tot = $value;
    }

    /**
     * @param Numeric
     */
    public function setTaxtyp3tot($value) {
        $this->_taxtyp3tot = $value;
    }

    /**
     * @param Numeric
     */
    public function setTaxper($value) {
        $this->_taxper = $value;
    }

    /**
     * @param Numeric
     */
    public function setBaseamt($value) {
        $this->_baseamt = $value;
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
    public function setInvtotal($value) {
        $this->_invtotal = $value;
    }

    /**
     * @param Numeric
     */
    public function setExptotal($value) {
        $this->_exptotal = $value;
    }

    /**
     * @param Numeric
     */
    public function setAptotal($value) {
        $this->_aptotal = $value;
    }

    /**
     * @param Logical
     */
    public function setCurrstat($value) {
        $this->_currstat = $value;
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
    public function setPoprefix($value) {
        $this->_poprefix = $value;
    }

    /**
     * @param Char
     */
    public function setBankacct($value) {
        $this->_bankacct = $value;
    }

    /**
     * @param Numeric
     */
    public function setBankamt($value) {
        $this->_bankamt = $value;
    }

    /**
     * @param Char
     */
    public function setSource($value) {
        $this->_source = $value;
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
    public function setCostgroup($value) {
        $this->_costgroup = $value;
    }

    /**
     * @param Char
     */
    public function setRemitcode($value) {
        $this->_remitcode = $value;
    }

    /**
     * @param Numeric
     */
    public function setPoshpamt($value) {
        $this->_poshpamt = $value;
    }

    /**
     * @param Numeric
     */
    public function setPoshpqty($value) {
        $this->_poshpqty = $value;
    }

    /**
     * @param Logical
     */
    public function setPoshpflag($value) {
        $this->_poshpflag = $value;
    }

    /**
     * @param Char
     */
    public function setPostfrom($value) {
        $this->_postfrom = $value;
    }

    /**
     * @param Logical
     */
    public function setWireflag($value) {
        $this->_wireflag = $value;
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
    public function setPaymethod($value) {
        $this->_paymethod = $value;
    }

    /**
     * @param Char
     */
    public function setPayaccount($value) {
        $this->_payaccount = $value;
    }

    /**
     * @param Char
     */
    public function setPayvendno($value) {
        $this->_payvendno = $value;
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
    public function setQbtxnid($value) {
        $this->_qbtxnid = $value;
    }

    /**
     * @param Char
     */
    public function setQblistid($value) {
        $this->_qblistid = $value;
    }

    /**
     * @param Logical
     */
    public function setJobcost($value) {
        $this->_jobcost = $value;
    }

    /**
     * @param Numeric
     */
    public function setPpamount($value) {
        $this->_ppamount = $value;
    }

    /**
     * @param Numeric
     */
    public function setGlbatchno($value) {
        $this->_glbatchno = $value;
    }

    /**
     * Constructor
     */
    public function __construct($invno, $invdate, $vendno, $voucher, $itotal, $balance, $amtpaid, $dtepaid, $disctotal, $refno, $dueday, $discday, $netdate, $distdate, $discdate, $discperc, $terms, $termdesc, $apacct, $cashacct, $amttopay, $discount, $check_no, $period, $recno, $defferd, $pmt, $voided, $fvoid, $nonap, $batch, $ponum, $duedate, $mark, $markm, $nflg0, $indust, $baseid, $orgvalue, $exchrate, $notes, $currid, $year, $pmtmed, $cmptype, $taxcode1, $taxcode2, $taxcode3, $taxper1, $taxper2, $taxper3, $taxtyp1tot, $taxtyp2tot, $taxtyp3tot, $taxper, $baseamt, $taxamt, $invtotal, $exptotal, $aptotal, $currstat, $fupdtime, $fupddate, $fuserid, $fstation, $w9, $defvchr, $poprefix, $bankacct, $bankamt, $source, $rimno, $costgroup, $remitcode, $poshpamt, $poshpqty, $poshpflag, $postfrom, $wireflag, $custno, $paymethod, $payaccount, $payvendno, $ordnum, $qbtxnid, $qblistid, $jobcost, $ppamount, $glbatchno) {
        $this->_invno = $invno;
        $this->_invdate = $invdate;
        $this->_vendno = $vendno;
        $this->_voucher = $voucher;
        $this->_itotal = $itotal;
        $this->_balance = $balance;
        $this->_amtpaid = $amtpaid;
        $this->_dtepaid = $dtepaid;
        $this->_disctotal = $disctotal;
        $this->_refno = $refno;
        $this->_dueday = $dueday;
        $this->_discday = $discday;
        $this->_netdate = $netdate;
        $this->_distdate = $distdate;
        $this->_discdate = $discdate;
        $this->_discperc = $discperc;
        $this->_terms = $terms;
        $this->_termdesc = $termdesc;
        $this->_apacct = $apacct;
        $this->_cashacct = $cashacct;
        $this->_amttopay = $amttopay;
        $this->_discount = $discount;
        $this->_check_no = $check_no;
        $this->_period = $period;
        $this->_recno = $recno;
        $this->_defferd = $defferd;
        $this->_pmt = $pmt;
        $this->_voided = $voided;
        $this->_fvoid = $fvoid;
        $this->_nonap = $nonap;
        $this->_batch = $batch;
        $this->_ponum = $ponum;
        $this->_duedate = $duedate;
        $this->_mark = $mark;
        $this->_markm = $markm;
        $this->_nflg0 = $nflg0;
        $this->_indust = $indust;
        $this->_baseid = $baseid;
        $this->_orgvalue = $orgvalue;
        $this->_exchrate = $exchrate;
        $this->_notes = $notes;
        $this->_currid = $currid;
        $this->_year = $year;
        $this->_pmtmed = $pmtmed;
        $this->_cmptype = $cmptype;
        $this->_taxcode1 = $taxcode1;
        $this->_taxcode2 = $taxcode2;
        $this->_taxcode3 = $taxcode3;
        $this->_taxper1 = $taxper1;
        $this->_taxper2 = $taxper2;
        $this->_taxper3 = $taxper3;
        $this->_taxtyp1tot = $taxtyp1tot;
        $this->_taxtyp2tot = $taxtyp2tot;
        $this->_taxtyp3tot = $taxtyp3tot;
        $this->_taxper = $taxper;
        $this->_baseamt = $baseamt;
        $this->_taxamt = $taxamt;
        $this->_invtotal = $invtotal;
        $this->_exptotal = $exptotal;
        $this->_aptotal = $aptotal;
        $this->_currstat = $currstat;
        $this->_fupdtime = $fupdtime;
        $this->_fupddate = $fupddate;
        $this->_fuserid = $fuserid;
        $this->_fstation = $fstation;
        $this->_w9 = $w9;
        $this->_defvchr = $defvchr;
        $this->_poprefix = $poprefix;
        $this->_bankacct = $bankacct;
        $this->_bankamt = $bankamt;
        $this->_source = $source;
        $this->_rimno = $rimno;
        $this->_costgroup = $costgroup;
        $this->_remitcode = $remitcode;
        $this->_poshpamt = $poshpamt;
        $this->_poshpqty = $poshpqty;
        $this->_poshpflag = $poshpflag;
        $this->_postfrom = $postfrom;
        $this->_wireflag = $wireflag;
        $this->_custno = $custno;
        $this->_paymethod = $paymethod;
        $this->_payaccount = $payaccount;
        $this->_payvendno = $payvendno;
        $this->_ordnum = $ordnum;
        $this->_qbtxnid = $qbtxnid;
        $this->_qblistid = $qblistid;
        $this->_jobcost = $jobcost;
        $this->_ppamount = $ppamount;
        $this->_glbatchno = $glbatchno;
    }

    public static function toString() {
        return self::$_name;
    }

}
