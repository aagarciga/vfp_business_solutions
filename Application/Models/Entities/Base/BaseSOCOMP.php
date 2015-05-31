<?php

/**
 * Project:  VFP Business Series
 * Copyright: 2014. VFP Business Solutions, LLC
 */

namespace Dandelion\MVC\Application\Models\Entities\Base;

/**
 * BaseSOCOMP
 */
class BaseSOCOMP {

    /**
     * Private fields
     */
    private static $_name = "SOCOMP";

    /**
     * Protected fields
     */

    /**
     * @var Logical
     */
    protected $_icparmcost;

    /**
     * @var Memo
     */
    protected $_soblurb;

    /**
     * @var Char
     */
    protected $_salesemail;

    /**
     * @var Logical
     */
    protected $_syschglog;

    /**
     * @var Logical
     */
    protected $_solineflg;

    /**
     * @var Logical
     */
    protected $_custstkno;

    /**
     * @var Char
     */
    protected $_sodefprt;

    /**
     * @var Numeric
     */
    protected $_shprelno;

    /**
     * @var Numeric
     */
    protected $_sostbno;

    /**
     * @var Numeric
     */
    protected $_soshpvalid;

    /**
     * @var Memo
     */
    protected $_qublurbpf;

    /**
     * @var Logical
     */
    protected $_qutaddmode;

    /**
     * @var Logical
     */
    protected $_oktopickfl;

    /**
     * @var Logical
     */
    protected $_soallocate;

    /**
     * @var Numeric
     */
    protected $_edisonum;

    /**
     * @var Logical
     */
    protected $_emailform;

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
    protected $_shipfrom;

    /**
     * @var Char
     */
    protected $_priceby;

    /**
     * @var Char
     */
    protected $_frghts;

    /**
     * @var Char
     */
    protected $_frghtpay;

    /**
     * @var Logical
     */
    protected $_driverlic;

    /**
     * @var Logical
     */
    protected $_wmsmanpick;

    /**
     * @var Numeric
     */
    protected $_oeno;

    /**
     * @var Memo
     */
    protected $_packblurb;

    /**
     * @var Logical
     */
    protected $_shpcominv;

    /**
     * @var Char
     */
    protected $_sotype;

    /**
     * @var Logical
     */
    protected $_sotypechg;

    /**
     * @var Logical
     */
    protected $_soutilflg;

    /**
     * @var Logical
     */
    protected $_wmsprtinv;

    /**
     * @var Char
     */
    protected $_wmsoptmz;

    /**
     * @var Char
     */
    protected $_soreqdtelb;

    /**
     * @var Char
     */
    protected $_soreldtelb;

    /**
     * @var Logical
     */
    protected $_costchange;

    /**
     * @var Numeric
     */
    protected $_picksort;

    /**
     * @var Logical
     */
    protected $_salerepreq;

    /**
     * @var Logical
     */
    protected $_fetshow;

    /**
     * @var Logical
     */
    protected $_listprdisc;

    /**
     * @var Logical
     */
    protected $_discintval;

    /**
     * @var Logical
     */
    protected $_bocolor;

    /**
     * @var Logical
     */
    protected $_hidecompso;

    /**
     * @var Logical
     */
    protected $_notabdesc;

    /**
     * @var Memo
     */
    protected $_quemailbdy;

    /**
     * @var Memo
     */
    protected $_soemailbdy;

    /**
     * @var Logical
     */
    protected $_wmsmanpack;

    /**
     * @var Logical
     */
    protected $_hhpickshow;

    /**
     * @var Logical
     */
    protected $_noprthead;

    /**
     * @var Logical
     */
    protected $_selshpdate;

    /**
     * @var Logical
     */
    protected $_instoretrx;

    /**
     * @var Logical
     */
    protected $_hhpickadd;

    /**
     * @var Logical
     */
    protected $_discorflag;

    /**
     * @var Logical
     */
    protected $_newsocust;

    /**
     * @var Char
     */
    protected $_trackprefx;

    /**
     * @var Logical
     */
    protected $_wmsmenuflg;

    /**
     * @var Logical
     */
    protected $_wmsshipto;

    /**
     * @var Char
     */
    protected $_sotypecode;

    /**
     * @var Logical
     */
    protected $_soshpamt;

    /**
     * @var Logical
     */
    protected $_wmspackiv;

    /**
     * @var Char
     */
    protected $_ecommport;

    /**
     * @var Char
     */
    protected $_ecommsrv;

    /**
     * @var Char
     */
    protected $_ecommdba;

    /**
     * @var Char
     */
    protected $_ecommuser;

    /**
     * @var Char
     */
    protected $_ecommpw;

    /**
     * @var Char
     */
    protected $_qblistid;

    /**
     * @var Char
     */
    protected $_wmsemailst;

    /**
     * @var Char
     */
    protected $_cookiekey;

    /**
     * @var Logical
     */
    protected $_sonofrght;

    /**
     * @var Char
     */
    protected $_webname;

    /**
     * @var Logical
     */
    protected $_xlsopenok;

    /**
     * @var Logical
     */
    protected $_nochqtyshp;

    /**
     * @var Char
     */
    protected $_ftpesrvnam;

    /**
     * @var Char
     */
    protected $_ftpeuser;

    /**
     * @var Char
     */
    protected $_ftpepswd;

    /**
     * @var Char
     */
    protected $_ftpepicitm;

    /**
     * @var Char
     */
    protected $_ftpepiccat;

    /**
     * @var Char
     */
    protected $_webcatlvl;

    /**
     * @var Char
     */
    protected $_webref;

    /**
     * @var Logical
     */
    protected $_webcustpo;

    /**
     * @var Logical
     */
    protected $_webarterm;

    /**
     * @var Logical
     */
    protected $_valpicpak;

    /**
     * @var Logical
     */
    protected $_wmspackcmp;

    /**
     * @var Char
     */
    protected $_estsrv;

    /**
     * @var Char
     */
    protected $_estport;

    /**
     * @var Char
     */
    protected $_estdba;

    /**
     * @var Char
     */
    protected $_estuser;

    /**
     * @var Char
     */
    protected $_estpw;

    /**
     * @var Logical
     */
    protected $_useshptrk;

    /**
     * @var Numeric
     */
    protected $_packno;

    /**
     * @var Char
     */
    protected $_ecommprfx;

    /**
     * @var Char
     */
    protected $_ecommver;

    /**
     * @var Char
     */
    protected $_ecommdbv;

    /**
     * @var Logical
     */
    protected $_wmslocpick;

    /**
     * @var Logical
     */
    protected $_webfrndurl;

    /**
     * @var Logical
     */
    protected $_setamazon;

    /**
     * @var Logical
     */
    protected $_recalsotot;

    /**
     * @var Char
     */
    protected $_amazonid;

    /**
     * @var Numeric
     */
    protected $_amazon_isa;

    /**
     * @var Numeric
     */
    protected $_amazon_gs;

    /**
     * @var Numeric
     */
    protected $_amazon_st;

    /**
     * @var Char
     */
    protected $_amavencode;

    /**
     * @var Logical
     */
    protected $_ecommohso;

    /**
     * @var Char
     */
    protected $_posterms;

    /**
     * @var Char
     */
    protected $_posrep;

    /**
     * @var Logical
     */
    protected $_fttshow;

    /**
     * @var Char
     */
    protected $_cc_gateway;

    /**
     * @var Numeric
     */
    protected $_shipbyday;

    /**
     * @var Char
     */
    protected $_pgid1;

    /**
     * @var Char
     */
    protected $_pgid2;

    /**
     * @var Char
     */
    protected $_pgid3;

    /**
     * @var Char
     */
    protected $_ccpath;

    /**
     * @var Logical
     */
    protected $_reprtpicme;

    /**
     * @var Char
     */
    protected $_edinfitem;

    /**
     * @var Logical
     */
    protected $_usepackfrm;

    /**
     * @var Logical
     */
    protected $_webcustupd;

    /**
     * @var Char
     */
    protected $_gs1prefix;

    /**
     * @var Logical
     */
    protected $_nonotb4dte;

    /**
     * Getters
     */

    /**
     * @return Logical
     */
    public function getIcparmcost() {
        return $this->_icparmcost;
    }

    /**
     * @return Memo
     */
    public function getSoblurb() {
        return $this->_soblurb;
    }

    /**
     * @return Char
     */
    public function getSalesemail() {
        return $this->_salesemail;
    }

    /**
     * @return Logical
     */
    public function getSyschglog() {
        return $this->_syschglog;
    }

    /**
     * @return Logical
     */
    public function getSolineflg() {
        return $this->_solineflg;
    }

    /**
     * @return Logical
     */
    public function getCuststkno() {
        return $this->_custstkno;
    }

    /**
     * @return Char
     */
    public function getSodefprt() {
        return $this->_sodefprt;
    }

    /**
     * @return Numeric
     */
    public function getShprelno() {
        return $this->_shprelno;
    }

    /**
     * @return Numeric
     */
    public function getSostbno() {
        return $this->_sostbno;
    }

    /**
     * @return Numeric
     */
    public function getSoshpvalid() {
        return $this->_soshpvalid;
    }

    /**
     * @return Memo
     */
    public function getQublurbpf() {
        return $this->_qublurbpf;
    }

    /**
     * @return Logical
     */
    public function getQutaddmode() {
        return $this->_qutaddmode;
    }

    /**
     * @return Logical
     */
    public function getOktopickfl() {
        return $this->_oktopickfl;
    }

    /**
     * @return Logical
     */
    public function getSoallocate() {
        return $this->_soallocate;
    }

    /**
     * @return Numeric
     */
    public function getEdisonum() {
        return $this->_edisonum;
    }

    /**
     * @return Logical
     */
    public function getEmailform() {
        return $this->_emailform;
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
    public function getShipfrom() {
        return $this->_shipfrom;
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
    public function getFrghts() {
        return $this->_frghts;
    }

    /**
     * @return Char
     */
    public function getFrghtpay() {
        return $this->_frghtpay;
    }

    /**
     * @return Logical
     */
    public function getDriverlic() {
        return $this->_driverlic;
    }

    /**
     * @return Logical
     */
    public function getWmsmanpick() {
        return $this->_wmsmanpick;
    }

    /**
     * @return Numeric
     */
    public function getOeno() {
        return $this->_oeno;
    }

    /**
     * @return Memo
     */
    public function getPackblurb() {
        return $this->_packblurb;
    }

    /**
     * @return Logical
     */
    public function getShpcominv() {
        return $this->_shpcominv;
    }

    /**
     * @return Char
     */
    public function getSotype() {
        return $this->_sotype;
    }

    /**
     * @return Logical
     */
    public function getSotypechg() {
        return $this->_sotypechg;
    }

    /**
     * @return Logical
     */
    public function getSoutilflg() {
        return $this->_soutilflg;
    }

    /**
     * @return Logical
     */
    public function getWmsprtinv() {
        return $this->_wmsprtinv;
    }

    /**
     * @return Char
     */
    public function getWmsoptmz() {
        return $this->_wmsoptmz;
    }

    /**
     * @return Char
     */
    public function getSoreqdtelb() {
        return $this->_soreqdtelb;
    }

    /**
     * @return Char
     */
    public function getSoreldtelb() {
        return $this->_soreldtelb;
    }

    /**
     * @return Logical
     */
    public function getCostchange() {
        return $this->_costchange;
    }

    /**
     * @return Numeric
     */
    public function getPicksort() {
        return $this->_picksort;
    }

    /**
     * @return Logical
     */
    public function getSalerepreq() {
        return $this->_salerepreq;
    }

    /**
     * @return Logical
     */
    public function getFetshow() {
        return $this->_fetshow;
    }

    /**
     * @return Logical
     */
    public function getListprdisc() {
        return $this->_listprdisc;
    }

    /**
     * @return Logical
     */
    public function getDiscintval() {
        return $this->_discintval;
    }

    /**
     * @return Logical
     */
    public function getBocolor() {
        return $this->_bocolor;
    }

    /**
     * @return Logical
     */
    public function getHidecompso() {
        return $this->_hidecompso;
    }

    /**
     * @return Logical
     */
    public function getNotabdesc() {
        return $this->_notabdesc;
    }

    /**
     * @return Memo
     */
    public function getQuemailbdy() {
        return $this->_quemailbdy;
    }

    /**
     * @return Memo
     */
    public function getSoemailbdy() {
        return $this->_soemailbdy;
    }

    /**
     * @return Logical
     */
    public function getWmsmanpack() {
        return $this->_wmsmanpack;
    }

    /**
     * @return Logical
     */
    public function getHhpickshow() {
        return $this->_hhpickshow;
    }

    /**
     * @return Logical
     */
    public function getNoprthead() {
        return $this->_noprthead;
    }

    /**
     * @return Logical
     */
    public function getSelshpdate() {
        return $this->_selshpdate;
    }

    /**
     * @return Logical
     */
    public function getInstoretrx() {
        return $this->_instoretrx;
    }

    /**
     * @return Logical
     */
    public function getHhpickadd() {
        return $this->_hhpickadd;
    }

    /**
     * @return Logical
     */
    public function getDiscorflag() {
        return $this->_discorflag;
    }

    /**
     * @return Logical
     */
    public function getNewsocust() {
        return $this->_newsocust;
    }

    /**
     * @return Char
     */
    public function getTrackprefx() {
        return $this->_trackprefx;
    }

    /**
     * @return Logical
     */
    public function getWmsmenuflg() {
        return $this->_wmsmenuflg;
    }

    /**
     * @return Logical
     */
    public function getWmsshipto() {
        return $this->_wmsshipto;
    }

    /**
     * @return Char
     */
    public function getSotypecode() {
        return $this->_sotypecode;
    }

    /**
     * @return Logical
     */
    public function getSoshpamt() {
        return $this->_soshpamt;
    }

    /**
     * @return Logical
     */
    public function getWmspackiv() {
        return $this->_wmspackiv;
    }

    /**
     * @return Char
     */
    public function getEcommport() {
        return $this->_ecommport;
    }

    /**
     * @return Char
     */
    public function getEcommsrv() {
        return $this->_ecommsrv;
    }

    /**
     * @return Char
     */
    public function getEcommdba() {
        return $this->_ecommdba;
    }

    /**
     * @return Char
     */
    public function getEcommuser() {
        return $this->_ecommuser;
    }

    /**
     * @return Char
     */
    public function getEcommpw() {
        return $this->_ecommpw;
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
    public function getWmsemailst() {
        return $this->_wmsemailst;
    }

    /**
     * @return Char
     */
    public function getCookiekey() {
        return $this->_cookiekey;
    }

    /**
     * @return Logical
     */
    public function getSonofrght() {
        return $this->_sonofrght;
    }

    /**
     * @return Char
     */
    public function getWebname() {
        return $this->_webname;
    }

    /**
     * @return Logical
     */
    public function getXlsopenok() {
        return $this->_xlsopenok;
    }

    /**
     * @return Logical
     */
    public function getNochqtyshp() {
        return $this->_nochqtyshp;
    }

    /**
     * @return Char
     */
    public function getFtpesrvnam() {
        return $this->_ftpesrvnam;
    }

    /**
     * @return Char
     */
    public function getFtpeuser() {
        return $this->_ftpeuser;
    }

    /**
     * @return Char
     */
    public function getFtpepswd() {
        return $this->_ftpepswd;
    }

    /**
     * @return Char
     */
    public function getFtpepicitm() {
        return $this->_ftpepicitm;
    }

    /**
     * @return Char
     */
    public function getFtpepiccat() {
        return $this->_ftpepiccat;
    }

    /**
     * @return Char
     */
    public function getWebcatlvl() {
        return $this->_webcatlvl;
    }

    /**
     * @return Char
     */
    public function getWebref() {
        return $this->_webref;
    }

    /**
     * @return Logical
     */
    public function getWebcustpo() {
        return $this->_webcustpo;
    }

    /**
     * @return Logical
     */
    public function getWebarterm() {
        return $this->_webarterm;
    }

    /**
     * @return Logical
     */
    public function getValpicpak() {
        return $this->_valpicpak;
    }

    /**
     * @return Logical
     */
    public function getWmspackcmp() {
        return $this->_wmspackcmp;
    }

    /**
     * @return Char
     */
    public function getEstsrv() {
        return $this->_estsrv;
    }

    /**
     * @return Char
     */
    public function getEstport() {
        return $this->_estport;
    }

    /**
     * @return Char
     */
    public function getEstdba() {
        return $this->_estdba;
    }

    /**
     * @return Char
     */
    public function getEstuser() {
        return $this->_estuser;
    }

    /**
     * @return Char
     */
    public function getEstpw() {
        return $this->_estpw;
    }

    /**
     * @return Logical
     */
    public function getUseshptrk() {
        return $this->_useshptrk;
    }

    /**
     * @return Numeric
     */
    public function getPackno() {
        return $this->_packno;
    }

    /**
     * @return Char
     */
    public function getEcommprfx() {
        return $this->_ecommprfx;
    }

    /**
     * @return Char
     */
    public function getEcommver() {
        return $this->_ecommver;
    }

    /**
     * @return Char
     */
    public function getEcommdbv() {
        return $this->_ecommdbv;
    }

    /**
     * @return Logical
     */
    public function getWmslocpick() {
        return $this->_wmslocpick;
    }

    /**
     * @return Logical
     */
    public function getWebfrndurl() {
        return $this->_webfrndurl;
    }

    /**
     * @return Logical
     */
    public function getSetamazon() {
        return $this->_setamazon;
    }

    /**
     * @return Logical
     */
    public function getRecalsotot() {
        return $this->_recalsotot;
    }

    /**
     * @return Char
     */
    public function getAmazonid() {
        return $this->_amazonid;
    }

    /**
     * @return Numeric
     */
    public function getAmazon_isa() {
        return $this->_amazon_isa;
    }

    /**
     * @return Numeric
     */
    public function getAmazon_gs() {
        return $this->_amazon_gs;
    }

    /**
     * @return Numeric
     */
    public function getAmazon_st() {
        return $this->_amazon_st;
    }

    /**
     * @return Char
     */
    public function getAmavencode() {
        return $this->_amavencode;
    }

    /**
     * @return Logical
     */
    public function getEcommohso() {
        return $this->_ecommohso;
    }

    /**
     * @return Char
     */
    public function getPosterms() {
        return $this->_posterms;
    }

    /**
     * @return Char
     */
    public function getPosrep() {
        return $this->_posrep;
    }

    /**
     * @return Logical
     */
    public function getFttshow() {
        return $this->_fttshow;
    }

    /**
     * @return Char
     */
    public function getCc_gateway() {
        return $this->_cc_gateway;
    }

    /**
     * @return Numeric
     */
    public function getShipbyday() {
        return $this->_shipbyday;
    }

    /**
     * @return Char
     */
    public function getPgid1() {
        return $this->_pgid1;
    }

    /**
     * @return Char
     */
    public function getPgid2() {
        return $this->_pgid2;
    }

    /**
     * @return Char
     */
    public function getPgid3() {
        return $this->_pgid3;
    }

    /**
     * @return Char
     */
    public function getCcpath() {
        return $this->_ccpath;
    }

    /**
     * @return Logical
     */
    public function getReprtpicme() {
        return $this->_reprtpicme;
    }

    /**
     * @return Char
     */
    public function getEdinfitem() {
        return $this->_edinfitem;
    }

    /**
     * @return Logical
     */
    public function getUsepackfrm() {
        return $this->_usepackfrm;
    }

    /**
     * @return Logical
     */
    public function getWebcustupd() {
        return $this->_webcustupd;
    }

    /**
     * @return Char
     */
    public function getGs1prefix() {
        return $this->_gs1prefix;
    }

    /**
     * @return Logical
     */
    public function getNonotb4dte() {
        return $this->_nonotb4dte;
    }

    /**
     * Setters
     */

    /**
     * @param Logical
     */
    public function setIcparmcost($value) {
        $this->_icparmcost = $value;
    }

    /**
     * @param Memo
     */
    public function setSoblurb($value) {
        $this->_soblurb = $value;
    }

    /**
     * @param Char
     */
    public function setSalesemail($value) {
        $this->_salesemail = $value;
    }

    /**
     * @param Logical
     */
    public function setSyschglog($value) {
        $this->_syschglog = $value;
    }

    /**
     * @param Logical
     */
    public function setSolineflg($value) {
        $this->_solineflg = $value;
    }

    /**
     * @param Logical
     */
    public function setCuststkno($value) {
        $this->_custstkno = $value;
    }

    /**
     * @param Char
     */
    public function setSodefprt($value) {
        $this->_sodefprt = $value;
    }

    /**
     * @param Numeric
     */
    public function setShprelno($value) {
        $this->_shprelno = $value;
    }

    /**
     * @param Numeric
     */
    public function setSostbno($value) {
        $this->_sostbno = $value;
    }

    /**
     * @param Numeric
     */
    public function setSoshpvalid($value) {
        $this->_soshpvalid = $value;
    }

    /**
     * @param Memo
     */
    public function setQublurbpf($value) {
        $this->_qublurbpf = $value;
    }

    /**
     * @param Logical
     */
    public function setQutaddmode($value) {
        $this->_qutaddmode = $value;
    }

    /**
     * @param Logical
     */
    public function setOktopickfl($value) {
        $this->_oktopickfl = $value;
    }

    /**
     * @param Logical
     */
    public function setSoallocate($value) {
        $this->_soallocate = $value;
    }

    /**
     * @param Numeric
     */
    public function setEdisonum($value) {
        $this->_edisonum = $value;
    }

    /**
     * @param Logical
     */
    public function setEmailform($value) {
        $this->_emailform = $value;
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
    public function setShipfrom($value) {
        $this->_shipfrom = $value;
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
    public function setFrghts($value) {
        $this->_frghts = $value;
    }

    /**
     * @param Char
     */
    public function setFrghtpay($value) {
        $this->_frghtpay = $value;
    }

    /**
     * @param Logical
     */
    public function setDriverlic($value) {
        $this->_driverlic = $value;
    }

    /**
     * @param Logical
     */
    public function setWmsmanpick($value) {
        $this->_wmsmanpick = $value;
    }

    /**
     * @param Numeric
     */
    public function setOeno($value) {
        $this->_oeno = $value;
    }

    /**
     * @param Memo
     */
    public function setPackblurb($value) {
        $this->_packblurb = $value;
    }

    /**
     * @param Logical
     */
    public function setShpcominv($value) {
        $this->_shpcominv = $value;
    }

    /**
     * @param Char
     */
    public function setSotype($value) {
        $this->_sotype = $value;
    }

    /**
     * @param Logical
     */
    public function setSotypechg($value) {
        $this->_sotypechg = $value;
    }

    /**
     * @param Logical
     */
    public function setSoutilflg($value) {
        $this->_soutilflg = $value;
    }

    /**
     * @param Logical
     */
    public function setWmsprtinv($value) {
        $this->_wmsprtinv = $value;
    }

    /**
     * @param Char
     */
    public function setWmsoptmz($value) {
        $this->_wmsoptmz = $value;
    }

    /**
     * @param Char
     */
    public function setSoreqdtelb($value) {
        $this->_soreqdtelb = $value;
    }

    /**
     * @param Char
     */
    public function setSoreldtelb($value) {
        $this->_soreldtelb = $value;
    }

    /**
     * @param Logical
     */
    public function setCostchange($value) {
        $this->_costchange = $value;
    }

    /**
     * @param Numeric
     */
    public function setPicksort($value) {
        $this->_picksort = $value;
    }

    /**
     * @param Logical
     */
    public function setSalerepreq($value) {
        $this->_salerepreq = $value;
    }

    /**
     * @param Logical
     */
    public function setFetshow($value) {
        $this->_fetshow = $value;
    }

    /**
     * @param Logical
     */
    public function setListprdisc($value) {
        $this->_listprdisc = $value;
    }

    /**
     * @param Logical
     */
    public function setDiscintval($value) {
        $this->_discintval = $value;
    }

    /**
     * @param Logical
     */
    public function setBocolor($value) {
        $this->_bocolor = $value;
    }

    /**
     * @param Logical
     */
    public function setHidecompso($value) {
        $this->_hidecompso = $value;
    }

    /**
     * @param Logical
     */
    public function setNotabdesc($value) {
        $this->_notabdesc = $value;
    }

    /**
     * @param Memo
     */
    public function setQuemailbdy($value) {
        $this->_quemailbdy = $value;
    }

    /**
     * @param Memo
     */
    public function setSoemailbdy($value) {
        $this->_soemailbdy = $value;
    }

    /**
     * @param Logical
     */
    public function setWmsmanpack($value) {
        $this->_wmsmanpack = $value;
    }

    /**
     * @param Logical
     */
    public function setHhpickshow($value) {
        $this->_hhpickshow = $value;
    }

    /**
     * @param Logical
     */
    public function setNoprthead($value) {
        $this->_noprthead = $value;
    }

    /**
     * @param Logical
     */
    public function setSelshpdate($value) {
        $this->_selshpdate = $value;
    }

    /**
     * @param Logical
     */
    public function setInstoretrx($value) {
        $this->_instoretrx = $value;
    }

    /**
     * @param Logical
     */
    public function setHhpickadd($value) {
        $this->_hhpickadd = $value;
    }

    /**
     * @param Logical
     */
    public function setDiscorflag($value) {
        $this->_discorflag = $value;
    }

    /**
     * @param Logical
     */
    public function setNewsocust($value) {
        $this->_newsocust = $value;
    }

    /**
     * @param Char
     */
    public function setTrackprefx($value) {
        $this->_trackprefx = $value;
    }

    /**
     * @param Logical
     */
    public function setWmsmenuflg($value) {
        $this->_wmsmenuflg = $value;
    }

    /**
     * @param Logical
     */
    public function setWmsshipto($value) {
        $this->_wmsshipto = $value;
    }

    /**
     * @param Char
     */
    public function setSotypecode($value) {
        $this->_sotypecode = $value;
    }

    /**
     * @param Logical
     */
    public function setSoshpamt($value) {
        $this->_soshpamt = $value;
    }

    /**
     * @param Logical
     */
    public function setWmspackiv($value) {
        $this->_wmspackiv = $value;
    }

    /**
     * @param Char
     */
    public function setEcommport($value) {
        $this->_ecommport = $value;
    }

    /**
     * @param Char
     */
    public function setEcommsrv($value) {
        $this->_ecommsrv = $value;
    }

    /**
     * @param Char
     */
    public function setEcommdba($value) {
        $this->_ecommdba = $value;
    }

    /**
     * @param Char
     */
    public function setEcommuser($value) {
        $this->_ecommuser = $value;
    }

    /**
     * @param Char
     */
    public function setEcommpw($value) {
        $this->_ecommpw = $value;
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
    public function setWmsemailst($value) {
        $this->_wmsemailst = $value;
    }

    /**
     * @param Char
     */
    public function setCookiekey($value) {
        $this->_cookiekey = $value;
    }

    /**
     * @param Logical
     */
    public function setSonofrght($value) {
        $this->_sonofrght = $value;
    }

    /**
     * @param Char
     */
    public function setWebname($value) {
        $this->_webname = $value;
    }

    /**
     * @param Logical
     */
    public function setXlsopenok($value) {
        $this->_xlsopenok = $value;
    }

    /**
     * @param Logical
     */
    public function setNochqtyshp($value) {
        $this->_nochqtyshp = $value;
    }

    /**
     * @param Char
     */
    public function setFtpesrvnam($value) {
        $this->_ftpesrvnam = $value;
    }

    /**
     * @param Char
     */
    public function setFtpeuser($value) {
        $this->_ftpeuser = $value;
    }

    /**
     * @param Char
     */
    public function setFtpepswd($value) {
        $this->_ftpepswd = $value;
    }

    /**
     * @param Char
     */
    public function setFtpepicitm($value) {
        $this->_ftpepicitm = $value;
    }

    /**
     * @param Char
     */
    public function setFtpepiccat($value) {
        $this->_ftpepiccat = $value;
    }

    /**
     * @param Char
     */
    public function setWebcatlvl($value) {
        $this->_webcatlvl = $value;
    }

    /**
     * @param Char
     */
    public function setWebref($value) {
        $this->_webref = $value;
    }

    /**
     * @param Logical
     */
    public function setWebcustpo($value) {
        $this->_webcustpo = $value;
    }

    /**
     * @param Logical
     */
    public function setWebarterm($value) {
        $this->_webarterm = $value;
    }

    /**
     * @param Logical
     */
    public function setValpicpak($value) {
        $this->_valpicpak = $value;
    }

    /**
     * @param Logical
     */
    public function setWmspackcmp($value) {
        $this->_wmspackcmp = $value;
    }

    /**
     * @param Char
     */
    public function setEstsrv($value) {
        $this->_estsrv = $value;
    }

    /**
     * @param Char
     */
    public function setEstport($value) {
        $this->_estport = $value;
    }

    /**
     * @param Char
     */
    public function setEstdba($value) {
        $this->_estdba = $value;
    }

    /**
     * @param Char
     */
    public function setEstuser($value) {
        $this->_estuser = $value;
    }

    /**
     * @param Char
     */
    public function setEstpw($value) {
        $this->_estpw = $value;
    }

    /**
     * @param Logical
     */
    public function setUseshptrk($value) {
        $this->_useshptrk = $value;
    }

    /**
     * @param Numeric
     */
    public function setPackno($value) {
        $this->_packno = $value;
    }

    /**
     * @param Char
     */
    public function setEcommprfx($value) {
        $this->_ecommprfx = $value;
    }

    /**
     * @param Char
     */
    public function setEcommver($value) {
        $this->_ecommver = $value;
    }

    /**
     * @param Char
     */
    public function setEcommdbv($value) {
        $this->_ecommdbv = $value;
    }

    /**
     * @param Logical
     */
    public function setWmslocpick($value) {
        $this->_wmslocpick = $value;
    }

    /**
     * @param Logical
     */
    public function setWebfrndurl($value) {
        $this->_webfrndurl = $value;
    }

    /**
     * @param Logical
     */
    public function setSetamazon($value) {
        $this->_setamazon = $value;
    }

    /**
     * @param Logical
     */
    public function setRecalsotot($value) {
        $this->_recalsotot = $value;
    }

    /**
     * @param Char
     */
    public function setAmazonid($value) {
        $this->_amazonid = $value;
    }

    /**
     * @param Numeric
     */
    public function setAmazon_isa($value) {
        $this->_amazon_isa = $value;
    }

    /**
     * @param Numeric
     */
    public function setAmazon_gs($value) {
        $this->_amazon_gs = $value;
    }

    /**
     * @param Numeric
     */
    public function setAmazon_st($value) {
        $this->_amazon_st = $value;
    }

    /**
     * @param Char
     */
    public function setAmavencode($value) {
        $this->_amavencode = $value;
    }

    /**
     * @param Logical
     */
    public function setEcommohso($value) {
        $this->_ecommohso = $value;
    }

    /**
     * @param Char
     */
    public function setPosterms($value) {
        $this->_posterms = $value;
    }

    /**
     * @param Char
     */
    public function setPosrep($value) {
        $this->_posrep = $value;
    }

    /**
     * @param Logical
     */
    public function setFttshow($value) {
        $this->_fttshow = $value;
    }

    /**
     * @param Char
     */
    public function setCc_gateway($value) {
        $this->_cc_gateway = $value;
    }

    /**
     * @param Numeric
     */
    public function setShipbyday($value) {
        $this->_shipbyday = $value;
    }

    /**
     * @param Char
     */
    public function setPgid1($value) {
        $this->_pgid1 = $value;
    }

    /**
     * @param Char
     */
    public function setPgid2($value) {
        $this->_pgid2 = $value;
    }

    /**
     * @param Char
     */
    public function setPgid3($value) {
        $this->_pgid3 = $value;
    }

    /**
     * @param Char
     */
    public function setCcpath($value) {
        $this->_ccpath = $value;
    }

    /**
     * @param Logical
     */
    public function setReprtpicme($value) {
        $this->_reprtpicme = $value;
    }

    /**
     * @param Char
     */
    public function setEdinfitem($value) {
        $this->_edinfitem = $value;
    }

    /**
     * @param Logical
     */
    public function setUsepackfrm($value) {
        $this->_usepackfrm = $value;
    }

    /**
     * @param Logical
     */
    public function setWebcustupd($value) {
        $this->_webcustupd = $value;
    }

    /**
     * @param Char
     */
    public function setGs1prefix($value) {
        $this->_gs1prefix = $value;
    }

    /**
     * @param Logical
     */
    public function setNonotb4dte($value) {
        $this->_nonotb4dte = $value;
    }

    /**
     * Constructor
     */
    public function __construct($icparmcost, $soblurb, $salesemail, $syschglog, $solineflg, $custstkno, $sodefprt, $shprelno, $sostbno, $soshpvalid, $qublurbpf, $qutaddmode, $oktopickfl, $soallocate, $edisonum, $emailform, $shipvia, $shipvname, $shipfrom, $priceby, $frghts, $frghtpay, $driverlic, $wmsmanpick, $oeno, $packblurb, $shpcominv, $sotype, $sotypechg, $soutilflg, $wmsprtinv, $wmsoptmz, $soreqdtelb, $soreldtelb, $costchange, $picksort, $salerepreq, $fetshow, $listprdisc, $discintval, $bocolor, $hidecompso, $notabdesc, $quemailbdy, $soemailbdy, $wmsmanpack, $hhpickshow, $noprthead, $selshpdate, $instoretrx, $hhpickadd, $discorflag, $newsocust, $trackprefx, $wmsmenuflg, $wmsshipto, $sotypecode, $soshpamt, $wmspackiv, $ecommport, $ecommsrv, $ecommdba, $ecommuser, $ecommpw, $qblistid, $wmsemailst, $cookiekey, $sonofrght, $webname, $xlsopenok, $nochqtyshp, $ftpesrvnam, $ftpeuser, $ftpepswd, $ftpepicitm, $ftpepiccat, $webcatlvl, $webref, $webcustpo, $webarterm, $valpicpak, $wmspackcmp, $estsrv, $estport, $estdba, $estuser, $estpw, $useshptrk, $packno, $ecommprfx, $ecommver, $ecommdbv, $wmslocpick, $webfrndurl, $setamazon, $recalsotot, $amazonid, $amazon_isa, $amazon_gs, $amazon_st, $amavencode, $ecommohso, $posterms, $posrep, $fttshow, $cc_gateway, $shipbyday, $pgid1, $pgid2, $pgid3, $ccpath, $reprtpicme, $edinfitem, $usepackfrm, $webcustupd, $gs1prefix, $nonotb4dte) {
        $this->_icparmcost = $icparmcost;
        $this->_soblurb = $soblurb;
        $this->_salesemail = $salesemail;
        $this->_syschglog = $syschglog;
        $this->_solineflg = $solineflg;
        $this->_custstkno = $custstkno;
        $this->_sodefprt = $sodefprt;
        $this->_shprelno = $shprelno;
        $this->_sostbno = $sostbno;
        $this->_soshpvalid = $soshpvalid;
        $this->_qublurbpf = $qublurbpf;
        $this->_qutaddmode = $qutaddmode;
        $this->_oktopickfl = $oktopickfl;
        $this->_soallocate = $soallocate;
        $this->_edisonum = $edisonum;
        $this->_emailform = $emailform;
        $this->_shipvia = $shipvia;
        $this->_shipvname = $shipvname;
        $this->_shipfrom = $shipfrom;
        $this->_priceby = $priceby;
        $this->_frghts = $frghts;
        $this->_frghtpay = $frghtpay;
        $this->_driverlic = $driverlic;
        $this->_wmsmanpick = $wmsmanpick;
        $this->_oeno = $oeno;
        $this->_packblurb = $packblurb;
        $this->_shpcominv = $shpcominv;
        $this->_sotype = $sotype;
        $this->_sotypechg = $sotypechg;
        $this->_soutilflg = $soutilflg;
        $this->_wmsprtinv = $wmsprtinv;
        $this->_wmsoptmz = $wmsoptmz;
        $this->_soreqdtelb = $soreqdtelb;
        $this->_soreldtelb = $soreldtelb;
        $this->_costchange = $costchange;
        $this->_picksort = $picksort;
        $this->_salerepreq = $salerepreq;
        $this->_fetshow = $fetshow;
        $this->_listprdisc = $listprdisc;
        $this->_discintval = $discintval;
        $this->_bocolor = $bocolor;
        $this->_hidecompso = $hidecompso;
        $this->_notabdesc = $notabdesc;
        $this->_quemailbdy = $quemailbdy;
        $this->_soemailbdy = $soemailbdy;
        $this->_wmsmanpack = $wmsmanpack;
        $this->_hhpickshow = $hhpickshow;
        $this->_noprthead = $noprthead;
        $this->_selshpdate = $selshpdate;
        $this->_instoretrx = $instoretrx;
        $this->_hhpickadd = $hhpickadd;
        $this->_discorflag = $discorflag;
        $this->_newsocust = $newsocust;
        $this->_trackprefx = $trackprefx;
        $this->_wmsmenuflg = $wmsmenuflg;
        $this->_wmsshipto = $wmsshipto;
        $this->_sotypecode = $sotypecode;
        $this->_soshpamt = $soshpamt;
        $this->_wmspackiv = $wmspackiv;
        $this->_ecommport = $ecommport;
        $this->_ecommsrv = $ecommsrv;
        $this->_ecommdba = $ecommdba;
        $this->_ecommuser = $ecommuser;
        $this->_ecommpw = $ecommpw;
        $this->_qblistid = $qblistid;
        $this->_wmsemailst = $wmsemailst;
        $this->_cookiekey = $cookiekey;
        $this->_sonofrght = $sonofrght;
        $this->_webname = $webname;
        $this->_xlsopenok = $xlsopenok;
        $this->_nochqtyshp = $nochqtyshp;
        $this->_ftpesrvnam = $ftpesrvnam;
        $this->_ftpeuser = $ftpeuser;
        $this->_ftpepswd = $ftpepswd;
        $this->_ftpepicitm = $ftpepicitm;
        $this->_ftpepiccat = $ftpepiccat;
        $this->_webcatlvl = $webcatlvl;
        $this->_webref = $webref;
        $this->_webcustpo = $webcustpo;
        $this->_webarterm = $webarterm;
        $this->_valpicpak = $valpicpak;
        $this->_wmspackcmp = $wmspackcmp;
        $this->_estsrv = $estsrv;
        $this->_estport = $estport;
        $this->_estdba = $estdba;
        $this->_estuser = $estuser;
        $this->_estpw = $estpw;
        $this->_useshptrk = $useshptrk;
        $this->_packno = $packno;
        $this->_ecommprfx = $ecommprfx;
        $this->_ecommver = $ecommver;
        $this->_ecommdbv = $ecommdbv;
        
        $this->_wmslocpick = ($wmslocpick === null)? false : $wmslocpick;
        $this->_webfrndurl = $webfrndurl;
        $this->_setamazon = $setamazon;
        $this->_recalsotot = $recalsotot;
        $this->_amazonid = $amazonid;
        $this->_amazon_isa = $amazon_isa;
        $this->_amazon_gs = $amazon_gs;
        $this->_amazon_st = $amazon_st;
        $this->_amavencode = $amavencode;
        $this->_ecommohso = $ecommohso;
        $this->_posterms = $posterms;
        $this->_posrep = $posrep;
        $this->_fttshow = $fttshow;
        $this->_cc_gateway = $cc_gateway;
        $this->_shipbyday = $shipbyday;
        $this->_pgid1 = $pgid1;
        $this->_pgid2 = $pgid2;
        $this->_pgid3 = $pgid3;
        $this->_ccpath = $ccpath;
        $this->_reprtpicme = $reprtpicme;
        $this->_edinfitem = $edinfitem;
        $this->_usepackfrm = $usepackfrm;
        $this->_webcustupd = $webcustupd;
        $this->_gs1prefix = $gs1prefix;
        $this->_nonotb4dte = $nonotb4dte;
    }

    public static function toString() {
        return self::$_name;
    }

}
