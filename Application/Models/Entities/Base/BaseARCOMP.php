<?php

/**
 * Project:  VFP Business Series
 * Copyright: 2014. VFP Business Solutions, LLC
 */

namespace Dandelion\MVC\Application\Models\Entities\Base;

/**
 * BaseARCOMP
 */
class BaseARCOMP {

    /**
     * Private fields
     */
    private static $_name = "ARCOMP";

    /**
     * Protected fields
     */

    /**
     * @var Char
     */
    protected $_prepacct;

    /**
     * @var Logical
     */
    protected $_nflg0;

    /**
     * @var Char
     */
    protected $_arposacct;

    /**
     * @var Logical
     */
    protected $_arperlock;

    /**
     * @var Logical
     */
    protected $_arcashprt;

    /**
     * @var Char
     */
    protected $_glaccticar;

    /**
     * @var Numeric
     */
    protected $_dbcount;

    /**
     * @var Numeric
     */
    protected $_crcount;

    /**
     * @var Logical
     */
    protected $_aptabstop;

    /**
     * @var Logical
     */
    protected $_arslsrepch;

    /**
     * @var Numeric
     */
    protected $_poscredit;

    /**
     * @var Char
     */
    protected $_discid;

    /**
     * @var Logical
     */
    protected $_cshrcpar;

    /**
     * @var Numeric
     */
    protected $_shiptono;

    /**
     * @var Logical
     */
    protected $_autshptono;

    /**
     * @var Logical
     */
    protected $_autshp15;

    /**
     * @var Logical
     */
    protected $_arqryshpto;

    /**
     * @var Logical
     */
    protected $_autcontno;

    /**
     * @var Numeric
     */
    protected $_contno;

    /**
     * @var Logical
     */
    protected $_taxwhsno;

    /**
     * @var Logical
     */
    protected $_salesflag;

    /**
     * @var Char
     */
    protected $_cstsynpath;

    /**
     * @var Char
     */
    protected $_cstsyntabl;

    /**
     * @var Char
     */
    protected $_cstfldnam;

    /**
     * @var Numeric
     */
    protected $_cstfldlen;

    /**
     * @var Logical
     */
    protected $_contflag;

    /**
     * @var Char
     */
    protected $_glarcredit;

    /**
     * @var Logical
     */
    protected $_arformat;

    /**
     * @var Logical
     */
    protected $_depgrpauto;

    /**
     * @var Char
     */
    protected $_extpatha;

    /**
     * @var Char
     */
    protected $_extpathb;

    /**
     * @var Logical
     */
    protected $_prorateso;

    /**
     * @var Logical
     */
    protected $_chgtaxso;

    /**
     * @var Logical
     */
    protected $_sowarnflg;

    /**
     * @var Char
     */
    protected $_localhost;

    /**
     * @var Logical
     */
    protected $_ardefault;

    /**
     * @var Logical
     */
    protected $_ccverifyad;

    /**
     * @var Logical
     */
    protected $_hidecustin;

    /**
     * @var Logical
     */
    protected $_depgroupdf;

    /**
     * @var Logical
     */
    protected $_defundep;

    /**
     * @var Char
     */
    protected $_genfldlbl1;

    /**
     * @var Char
     */
    protected $_genfldlbl2;

    /**
     * @var Char
     */
    protected $_genfldlbl3;

    /**
     * @var Memo
     */
    protected $_aremailbdy;

    /**
     * @var Logical
     */
    protected $_arnotecust;

    /**
     * @var Char
     */
    protected $_arstateper;

    /**
     * @var Numeric
     */
    protected $_cctieralmt;

    /**
     * @var Numeric
     */
    protected $_cctierblmt;

    /**
     * @var Logical
     */
    protected $_cctierctrl;

    /**
     * @var Logical
     */
    protected $_autocustno;

    /**
     * @var Logical
     */
    protected $_depgrpmsg;

    /**
     * @var Char
     */
    protected $_lbltieracc;

    /**
     * @var Char
     */
    protected $_lbltierbcc;

    /**
     * @var Char
     */
    protected $_mestieracc;

    /**
     * @var Char
     */
    protected $_mestierbcc;

    /**
     * @var Char
     */
    protected $_glecommfee;

    /**
     * @var Char
     */
    protected $_glecommbnk;

    /**
     * @var Logical
     */
    protected $_amazonlink;

    /**
     * @var Char
     */
    protected $_qblistid;

    /**
     * @var Logical
     */
    protected $_ardbonly;

    /**
     * @var Logical
     */
    protected $_xlsopenok;

    /**
     * @var Char
     */
    protected $_ccurl;

    /**
     * @var Logical
     */
    protected $_finchgmes;

    /**
     * @var Char
     */
    protected $_picbckgrnd;
    
    /**
     * @var Char
     */
    protected $_logo;

    /**
     * Getters
     */

    /**
     * @return Char
     */
    public function getPrepacct() {
        return $this->_prepacct;
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
    public function getArposacct() {
        return $this->_arposacct;
    }

    /**
     * @return Logical
     */
    public function getArperlock() {
        return $this->_arperlock;
    }

    /**
     * @return Logical
     */
    public function getArcashprt() {
        return $this->_arcashprt;
    }

    /**
     * @return Char
     */
    public function getGlaccticar() {
        return $this->_glaccticar;
    }

    /**
     * @return Numeric
     */
    public function getDbcount() {
        return $this->_dbcount;
    }

    /**
     * @return Numeric
     */
    public function getCrcount() {
        return $this->_crcount;
    }

    /**
     * @return Logical
     */
    public function getAptabstop() {
        return $this->_aptabstop;
    }

    /**
     * @return Logical
     */
    public function getArslsrepch() {
        return $this->_arslsrepch;
    }

    /**
     * @return Numeric
     */
    public function getPoscredit() {
        return $this->_poscredit;
    }

    /**
     * @return Char
     */
    public function getDiscid() {
        return $this->_discid;
    }

    /**
     * @return Logical
     */
    public function getCshrcpar() {
        return $this->_cshrcpar;
    }

    /**
     * @return Numeric
     */
    public function getShiptono() {
        return $this->_shiptono;
    }

    /**
     * @return Logical
     */
    public function getAutshptono() {
        return $this->_autshptono;
    }

    /**
     * @return Logical
     */
    public function getAutshp15() {
        return $this->_autshp15;
    }

    /**
     * @return Logical
     */
    public function getArqryshpto() {
        return $this->_arqryshpto;
    }

    /**
     * @return Logical
     */
    public function getAutcontno() {
        return $this->_autcontno;
    }

    /**
     * @return Numeric
     */
    public function getContno() {
        return $this->_contno;
    }

    /**
     * @return Logical
     */
    public function getTaxwhsno() {
        return $this->_taxwhsno;
    }

    /**
     * @return Logical
     */
    public function getSalesflag() {
        return $this->_salesflag;
    }

    /**
     * @return Char
     */
    public function getCstsynpath() {
        return $this->_cstsynpath;
    }

    /**
     * @return Char
     */
    public function getCstsyntabl() {
        return $this->_cstsyntabl;
    }

    /**
     * @return Char
     */
    public function getCstfldnam() {
        return $this->_cstfldnam;
    }

    /**
     * @return Numeric
     */
    public function getCstfldlen() {
        return $this->_cstfldlen;
    }

    /**
     * @return Logical
     */
    public function getContflag() {
        return $this->_contflag;
    }

    /**
     * @return Char
     */
    public function getGlarcredit() {
        return $this->_glarcredit;
    }

    /**
     * @return Logical
     */
    public function getArformat() {
        return $this->_arformat;
    }

    /**
     * @return Logical
     */
    public function getDepgrpauto() {
        return $this->_depgrpauto;
    }

    /**
     * @return Char
     */
    public function getExtpatha() {
        return $this->_extpatha;
    }

    /**
     * @return Char
     */
    public function getExtpathb() {
        return $this->_extpathb;
    }

    /**
     * @return Logical
     */
    public function getProrateso() {
        return $this->_prorateso;
    }

    /**
     * @return Logical
     */
    public function getChgtaxso() {
        return $this->_chgtaxso;
    }

    /**
     * @return Logical
     */
    public function getSowarnflg() {
        return $this->_sowarnflg;
    }

    /**
     * @return Char
     */
    public function getLocalhost() {
        return $this->_localhost;
    }

    /**
     * @return Logical
     */
    public function getArdefault() {
        return $this->_ardefault;
    }

    /**
     * @return Logical
     */
    public function getCcverifyad() {
        return $this->_ccverifyad;
    }

    /**
     * @return Logical
     */
    public function getHidecustin() {
        return $this->_hidecustin;
    }

    /**
     * @return Logical
     */
    public function getDepgroupdf() {
        return $this->_depgroupdf;
    }

    /**
     * @return Logical
     */
    public function getDefundep() {
        return $this->_defundep;
    }

    /**
     * @return Char
     */
    public function getGenfldlbl1() {
        return $this->_genfldlbl1;
    }

    /**
     * @return Char
     */
    public function getGenfldlbl2() {
        return $this->_genfldlbl2;
    }

    /**
     * @return Char
     */
    public function getGenfldlbl3() {
        return $this->_genfldlbl3;
    }

    /**
     * @return Memo
     */
    public function getAremailbdy() {
        return $this->_aremailbdy;
    }

    /**
     * @return Logical
     */
    public function getArnotecust() {
        return $this->_arnotecust;
    }

    /**
     * @return Char
     */
    public function getArstateper() {
        return $this->_arstateper;
    }

    /**
     * @return Numeric
     */
    public function getCctieralmt() {
        return $this->_cctieralmt;
    }

    /**
     * @return Numeric
     */
    public function getCctierblmt() {
        return $this->_cctierblmt;
    }

    /**
     * @return Logical
     */
    public function getCctierctrl() {
        return $this->_cctierctrl;
    }

    /**
     * @return Logical
     */
    public function getAutocustno() {
        return $this->_autocustno;
    }

    /**
     * @return Logical
     */
    public function getDepgrpmsg() {
        return $this->_depgrpmsg;
    }

    /**
     * @return Char
     */
    public function getLbltieracc() {
        return $this->_lbltieracc;
    }

    /**
     * @return Char
     */
    public function getLbltierbcc() {
        return $this->_lbltierbcc;
    }

    /**
     * @return Char
     */
    public function getMestieracc() {
        return $this->_mestieracc;
    }

    /**
     * @return Char
     */
    public function getMestierbcc() {
        return $this->_mestierbcc;
    }

    /**
     * @return Char
     */
    public function getGlecommfee() {
        return $this->_glecommfee;
    }

    /**
     * @return Char
     */
    public function getGlecommbnk() {
        return $this->_glecommbnk;
    }

    /**
     * @return Logical
     */
    public function getAmazonlink() {
        return $this->_amazonlink;
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
    public function getArdbonly() {
        return $this->_ardbonly;
    }

    /**
     * @return Logical
     */
    public function getXlsopenok() {
        return $this->_xlsopenok;
    }

    /**
     * @return Char
     */
    public function getCcurl() {
        return $this->_ccurl;
    }

    /**
     * @return Logical
     */
    public function getFinchgmes() {
        return $this->_finchgmes;
    }

    /**
     * @return Char
     */
    public function getLogo() {
        return $this->_logo;
    }
    
    /**
     * @return Char
     */
    public function getPicbckgrnd() {
        return $this->_picbckgrnd;
    }

    /**
     * Setters
     */

    /**
     * @param Char
     */
    public function setPrepacct($value) {
        $this->_prepacct = $value;
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
    public function setArposacct($value) {
        $this->_arposacct = $value;
    }

    /**
     * @param Logical
     */
    public function setArperlock($value) {
        $this->_arperlock = $value;
    }

    /**
     * @param Logical
     */
    public function setArcashprt($value) {
        $this->_arcashprt = $value;
    }

    /**
     * @param Char
     */
    public function setGlaccticar($value) {
        $this->_glaccticar = $value;
    }

    /**
     * @param Numeric
     */
    public function setDbcount($value) {
        $this->_dbcount = $value;
    }

    /**
     * @param Numeric
     */
    public function setCrcount($value) {
        $this->_crcount = $value;
    }

    /**
     * @param Logical
     */
    public function setAptabstop($value) {
        $this->_aptabstop = $value;
    }

    /**
     * @param Logical
     */
    public function setArslsrepch($value) {
        $this->_arslsrepch = $value;
    }

    /**
     * @param Numeric
     */
    public function setPoscredit($value) {
        $this->_poscredit = $value;
    }

    /**
     * @param Char
     */
    public function setDiscid($value) {
        $this->_discid = $value;
    }

    /**
     * @param Logical
     */
    public function setCshrcpar($value) {
        $this->_cshrcpar = $value;
    }

    /**
     * @param Numeric
     */
    public function setShiptono($value) {
        $this->_shiptono = $value;
    }

    /**
     * @param Logical
     */
    public function setAutshptono($value) {
        $this->_autshptono = $value;
    }

    /**
     * @param Logical
     */
    public function setAutshp15($value) {
        $this->_autshp15 = $value;
    }

    /**
     * @param Logical
     */
    public function setArqryshpto($value) {
        $this->_arqryshpto = $value;
    }

    /**
     * @param Logical
     */
    public function setAutcontno($value) {
        $this->_autcontno = $value;
    }

    /**
     * @param Numeric
     */
    public function setContno($value) {
        $this->_contno = $value;
    }

    /**
     * @param Logical
     */
    public function setTaxwhsno($value) {
        $this->_taxwhsno = $value;
    }

    /**
     * @param Logical
     */
    public function setSalesflag($value) {
        $this->_salesflag = $value;
    }

    /**
     * @param Char
     */
    public function setCstsynpath($value) {
        $this->_cstsynpath = $value;
    }

    /**
     * @param Char
     */
    public function setCstsyntabl($value) {
        $this->_cstsyntabl = $value;
    }

    /**
     * @param Char
     */
    public function setCstfldnam($value) {
        $this->_cstfldnam = $value;
    }

    /**
     * @param Numeric
     */
    public function setCstfldlen($value) {
        $this->_cstfldlen = $value;
    }

    /**
     * @param Logical
     */
    public function setContflag($value) {
        $this->_contflag = $value;
    }

    /**
     * @param Char
     */
    public function setGlarcredit($value) {
        $this->_glarcredit = $value;
    }

    /**
     * @param Logical
     */
    public function setArformat($value) {
        $this->_arformat = $value;
    }

    /**
     * @param Logical
     */
    public function setDepgrpauto($value) {
        $this->_depgrpauto = $value;
    }

    /**
     * @param Char
     */
    public function setExtpatha($value) {
        $this->_extpatha = $value;
    }

    /**
     * @param Char
     */
    public function setExtpathb($value) {
        $this->_extpathb = $value;
    }

    /**
     * @param Logical
     */
    public function setProrateso($value) {
        $this->_prorateso = $value;
    }

    /**
     * @param Logical
     */
    public function setChgtaxso($value) {
        $this->_chgtaxso = $value;
    }

    /**
     * @param Logical
     */
    public function setSowarnflg($value) {
        $this->_sowarnflg = $value;
    }

    /**
     * @param Char
     */
    public function setLocalhost($value) {
        $this->_localhost = $value;
    }

    /**
     * @param Logical
     */
    public function setArdefault($value) {
        $this->_ardefault = $value;
    }

    /**
     * @param Logical
     */
    public function setCcverifyad($value) {
        $this->_ccverifyad = $value;
    }

    /**
     * @param Logical
     */
    public function setHidecustin($value) {
        $this->_hidecustin = $value;
    }

    /**
     * @param Logical
     */
    public function setDepgroupdf($value) {
        $this->_depgroupdf = $value;
    }

    /**
     * @param Logical
     */
    public function setDefundep($value) {
        $this->_defundep = $value;
    }

    /**
     * @param Char
     */
    public function setGenfldlbl1($value) {
        $this->_genfldlbl1 = $value;
    }

    /**
     * @param Char
     */
    public function setGenfldlbl2($value) {
        $this->_genfldlbl2 = $value;
    }

    /**
     * @param Char
     */
    public function setGenfldlbl3($value) {
        $this->_genfldlbl3 = $value;
    }

    /**
     * @param Memo
     */
    public function setAremailbdy($value) {
        $this->_aremailbdy = $value;
    }

    /**
     * @param Logical
     */
    public function setArnotecust($value) {
        $this->_arnotecust = $value;
    }

    /**
     * @param Char
     */
    public function setArstateper($value) {
        $this->_arstateper = $value;
    }

    /**
     * @param Numeric
     */
    public function setCctieralmt($value) {
        $this->_cctieralmt = $value;
    }

    /**
     * @param Numeric
     */
    public function setCctierblmt($value) {
        $this->_cctierblmt = $value;
    }

    /**
     * @param Logical
     */
    public function setCctierctrl($value) {
        $this->_cctierctrl = $value;
    }

    /**
     * @param Logical
     */
    public function setAutocustno($value) {
        $this->_autocustno = $value;
    }

    /**
     * @param Logical
     */
    public function setDepgrpmsg($value) {
        $this->_depgrpmsg = $value;
    }

    /**
     * @param Char
     */
    public function setLbltieracc($value) {
        $this->_lbltieracc = $value;
    }

    /**
     * @param Char
     */
    public function setLbltierbcc($value) {
        $this->_lbltierbcc = $value;
    }

    /**
     * @param Char
     */
    public function setMestieracc($value) {
        $this->_mestieracc = $value;
    }

    /**
     * @param Char
     */
    public function setMestierbcc($value) {
        $this->_mestierbcc = $value;
    }

    /**
     * @param Char
     */
    public function setGlecommfee($value) {
        $this->_glecommfee = $value;
    }

    /**
     * @param Char
     */
    public function setGlecommbnk($value) {
        $this->_glecommbnk = $value;
    }

    /**
     * @param Logical
     */
    public function setAmazonlink($value) {
        $this->_amazonlink = $value;
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
    public function setArdbonly($value) {
        $this->_ardbonly = $value;
    }

    /**
     * @param Logical
     */
    public function setXlsopenok($value) {
        $this->_xlsopenok = $value;
    }

    /**
     * @param Char
     */
    public function setCcurl($value) {
        $this->_ccurl = $value;
    }

    /**
     * @param Logical
     */
    public function setFinchgmes($value) {
        $this->_finchgmes = $value;
    }

    /**
     * @param Char
     */
    public function setLogo($value) {
        $this->_logo = $value;
    }
    
    /**
     * @param Char
     */
    public function setPicbckgrnd($value) {
        $this->_picbckgrnd = $value;
    }

    /**
     * Constructor
     */
    public function __construct($prepacct, $nflg0, $arposacct, $arperlock, $arcashprt, $glaccticar, $dbcount, $crcount, $aptabstop, $arslsrepch, $poscredit, $discid, $cshrcpar, $shiptono, $autshptono, $autshp15, $arqryshpto, $autcontno, $contno, $taxwhsno, $salesflag, $cstsynpath, $cstsyntabl, $cstfldnam, $cstfldlen, $contflag, $glarcredit, $arformat, $depgrpauto, $extpatha, $extpathb, $prorateso, $chgtaxso, $sowarnflg, $localhost, $ardefault, $ccverifyad, $hidecustin, $depgroupdf, $defundep, $genfldlbl1, $genfldlbl2, $genfldlbl3, $aremailbdy, $arnotecust, $arstateper, $cctieralmt, $cctierblmt, $cctierctrl, $autocustno, $depgrpmsg, $lbltieracc, $lbltierbcc, $mestieracc, $mestierbcc, $glecommfee, $glecommbnk, $amazonlink, $qblistid, $ardbonly, $xlsopenok, $ccurl, $finchgmes, $picbckgrnd, $logo) {
        $this->_prepacct = $prepacct;
        $this->_nflg0 = $nflg0;
        $this->_arposacct = $arposacct;
        $this->_arperlock = $arperlock;
        $this->_arcashprt = $arcashprt;
        $this->_glaccticar = $glaccticar;
        $this->_dbcount = $dbcount;
        $this->_crcount = $crcount;
        $this->_aptabstop = $aptabstop;
        $this->_arslsrepch = $arslsrepch;
        $this->_poscredit = $poscredit;
        $this->_discid = $discid;
        $this->_cshrcpar = $cshrcpar;
        $this->_shiptono = $shiptono;
        $this->_autshptono = $autshptono;
        $this->_autshp15 = $autshp15;
        $this->_arqryshpto = $arqryshpto;
        $this->_autcontno = $autcontno;
        $this->_contno = $contno;
        $this->_taxwhsno = $taxwhsno;
        $this->_salesflag = $salesflag;
        $this->_cstsynpath = $cstsynpath;
        $this->_cstsyntabl = $cstsyntabl;
        $this->_cstfldnam = $cstfldnam;
        $this->_cstfldlen = $cstfldlen;
        $this->_contflag = $contflag;
        $this->_glarcredit = $glarcredit;
        $this->_arformat = $arformat;
        $this->_depgrpauto = $depgrpauto;
        $this->_extpatha = $extpatha;
        $this->_extpathb = $extpathb;
        $this->_prorateso = $prorateso;
        $this->_chgtaxso = $chgtaxso;
        $this->_sowarnflg = $sowarnflg;
        $this->_localhost = $localhost;
        $this->_ardefault = $ardefault;
        $this->_ccverifyad = $ccverifyad;
        $this->_hidecustin = $hidecustin;
        $this->_depgroupdf = $depgroupdf;
        $this->_defundep = $defundep;
        $this->_genfldlbl1 = $genfldlbl1;
        $this->_genfldlbl2 = $genfldlbl2;
        $this->_genfldlbl3 = $genfldlbl3;
        $this->_aremailbdy = $aremailbdy;
        $this->_arnotecust = $arnotecust;
        $this->_arstateper = $arstateper;
        $this->_cctieralmt = $cctieralmt;
        $this->_cctierblmt = $cctierblmt;
        $this->_cctierctrl = $cctierctrl;
        $this->_autocustno = $autocustno;
        $this->_depgrpmsg = $depgrpmsg;
        $this->_lbltieracc = $lbltieracc;
        $this->_lbltierbcc = $lbltierbcc;
        $this->_mestieracc = $mestieracc;
        $this->_mestierbcc = $mestierbcc;
        $this->_glecommfee = $glecommfee;
        $this->_glecommbnk = $glecommbnk;
        $this->_amazonlink = $amazonlink;
        $this->_qblistid = $qblistid;
        $this->_ardbonly = $ardbonly;
        $this->_xlsopenok = $xlsopenok;
        $this->_ccurl = $ccurl;
        $this->_finchgmes = $finchgmes;
        $this->_picbckgrnd = $picbckgrnd;
        $this->_logo = $logo;
    }

    public static function toString() {
        return self::$_name;
    }

}
