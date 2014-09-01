<?php

/**
 * Project:  VFP Business Series
 * Copyright: 2014. VFP Business Solutions, LLC
 */

namespace Dandelion\MVC\Application\Models\Entities\Base;

/**
 * BaseSOSHPRELH
 */
class BaseSOSHPRELH {

    /**
     * Private fields
     */
    private static $_name = "SOSHPRELH";

    /**
     * Protected fields
     */

    /**
     * @var Char
     */
    protected $_shprelno;

    /**
     * @var Char
     */
    protected $_ordnum;

    /**
     * @var Char
     */
    protected $_picticbano;

    /**
     * @var Char
     */
    protected $_custno;

    /**
     * @var Date
     */
    protected $_shpreldate;

    /**
     * @var Char
     */
    protected $_shipvia;

    /**
     * @var Char
     */
    protected $_shipvname;

    /**
     * @var Numeric
     */
    protected $_txrt;

    /**
     * @var Char
     */
    protected $_ftaxcode;

    /**
     * @var Numeric
     */
    protected $_shipping;

    /**
     * @var Char
     */
    protected $_fuserid;

    /**
     * @var Char
     */
    protected $_fstation;

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
     * @var Logical
     */
    protected $_nflg0;

    /**
     * @var Memo
     */
    protected $_shprelcomm;

    /**
     * @var Numeric
     */
    protected $_freight;

    /**
     * @var Numeric
     */
    protected $_cartoons;

    /**
     * @var Logical
     */
    protected $_void;

    /**
     * @var Char
     */
    protected $_shipdriver;

    /**
     * @var Char
     */
    protected $_itmcount;

    /**
     * @var Numeric
     */
    protected $_total;

    /**
     * @var Char
     */
    protected $_inspectno;

    /**
     * @var Char
     */
    protected $_packno;

    /**
     * @var Char
     */
    protected $_trackno;

    /**
     * @var Char
     */
    protected $_wmstatus;

    /**
     * @var Numeric
     */
    protected $_itemtax;

    /**
     * @var Numeric
     */
    protected $_tax;

    /**
     * @var Numeric
     */
    protected $_subtotal;

    /**
     * @var Numeric
     */
    protected $_totweight;

    /**
     * @var Date
     */
    protected $_shipdate;

    /**
     * @var Memo
     */
    protected $_tracknom;

    /**
     * @var Char
     */
    protected $_refno;

    /**
     * @var Numeric
     */
    protected $_prepaid;

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
    protected $_shpcompnam;

    /**
     * @var Char
     */
    protected $_shpphone;

    /**
     * @var Char
     */
    protected $_residenid;

    /**
     * @var Char
     */
    protected $_packtype;

    /**
     * @var Char
     */
    protected $_servtype;

    /**
     * @var Char
     */
    protected $_shpemail;

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
    protected $_shpnotifop;

    /**
     * @var Char
     */
    protected $_shplocid;

    /**
     * @var Char
     */
    protected $_shipid;

    /**
     * @var Logical
     */
    protected $_noshipchg;

    /**
     * @var Char
     */
    protected $_ca_id;

    /**
     * @var Char
     */
    protected $_nampicker;

    /**
     * @var Char
     */
    protected $_nampacker;

    /**
     * @var Char
     */
    protected $_boxtype;

    /**
     * @var Char
     */
    protected $_shpcontact;

    /**
     * @var Numeric
     */
    protected $_boxlength;

    /**
     * @var Numeric
     */
    protected $_boxwidth;

    /**
     * @var Numeric
     */
    protected $_boxheight;

    /**
     * @var Char
     */
    protected $_qblistid;

    /**
     * @var Char
     */
    protected $_namshipper;

    /**
     * @var Char
     */
    protected $_namchecker;

    /**
     * @var Numeric
     */
    protected $_custdisc;

    /**
     * @var Logical
     */
    protected $_blindship;

    /**
     * Getters
     */

    /**
     * @return Char
     */
    public function getShprelno() {
        return $this->_shprelno;
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
    public function getPicticbano() {
        return $this->_picticbano;
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
    public function getShpreldate() {
        return $this->_shpreldate;
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
     * @return Numeric
     */
    public function getTxrt() {
        return $this->_txrt;
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
     * @return Logical
     */
    public function getNflg0() {
        return $this->_nflg0;
    }

    /**
     * @return Memo
     */
    public function getShprelcomm() {
        return $this->_shprelcomm;
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
    public function getCartoons() {
        return $this->_cartoons;
    }

    /**
     * @return Logical
     */
    public function getVoid() {
        return $this->_void;
    }

    /**
     * @return Char
     */
    public function getShipdriver() {
        return $this->_shipdriver;
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
    public function getTotal() {
        return $this->_total;
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
    public function getPackno() {
        return $this->_packno;
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
    public function getWmstatus() {
        return $this->_wmstatus;
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
    public function getTax() {
        return $this->_tax;
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
    public function getTotweight() {
        return $this->_totweight;
    }

    /**
     * @return Date
     */
    public function getShipdate() {
        return $this->_shipdate;
    }

    /**
     * @return Memo
     */
    public function getTracknom() {
        return $this->_tracknom;
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
    public function getPrepaid() {
        return $this->_prepaid;
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
    public function getShpcompnam() {
        return $this->_shpcompnam;
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
    public function getResidenid() {
        return $this->_residenid;
    }

    /**
     * @return Char
     */
    public function getPacktype() {
        return $this->_packtype;
    }

    /**
     * @return Char
     */
    public function getServtype() {
        return $this->_servtype;
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
    public function getShpnotifop() {
        return $this->_shpnotifop;
    }

    /**
     * @return Char
     */
    public function getShplocid() {
        return $this->_shplocid;
    }

    /**
     * @return Char
     */
    public function getShipid() {
        return $this->_shipid;
    }

    /**
     * @return Logical
     */
    public function getNoshipchg() {
        return $this->_noshipchg;
    }

    /**
     * @return Char
     */
    public function getCa_id() {
        return $this->_ca_id;
    }

    /**
     * @return Char
     */
    public function getNampicker() {
        return $this->_nampicker;
    }

    /**
     * @return Char
     */
    public function getNampacker() {
        return $this->_nampacker;
    }

    /**
     * @return Char
     */
    public function getBoxtype() {
        return $this->_boxtype;
    }

    /**
     * @return Char
     */
    public function getShpcontact() {
        return $this->_shpcontact;
    }

    /**
     * @return Numeric
     */
    public function getBoxlength() {
        return $this->_boxlength;
    }

    /**
     * @return Numeric
     */
    public function getBoxwidth() {
        return $this->_boxwidth;
    }

    /**
     * @return Numeric
     */
    public function getBoxheight() {
        return $this->_boxheight;
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
    public function getNamshipper() {
        return $this->_namshipper;
    }

    /**
     * @return Char
     */
    public function getNamchecker() {
        return $this->_namchecker;
    }

    /**
     * @return Numeric
     */
    public function getCustdisc() {
        return $this->_custdisc;
    }

    /**
     * @return Logical
     */
    public function getBlindship() {
        return $this->_blindship;
    }

    /**
     * Setters
     */

    /**
     * @param Char
     */
    public function setShprelno($value) {
        $this->_shprelno = $value;
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
    public function setPicticbano($value) {
        $this->_picticbano = $value;
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
    public function setShpreldate($value) {
        $this->_shpreldate = $value;
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
     * @param Numeric
     */
    public function setTxrt($value) {
        $this->_txrt = $value;
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
     * @param Logical
     */
    public function setNflg0($value) {
        $this->_nflg0 = $value;
    }

    /**
     * @param Memo
     */
    public function setShprelcomm($value) {
        $this->_shprelcomm = $value;
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
    public function setCartoons($value) {
        $this->_cartoons = $value;
    }

    /**
     * @param Logical
     */
    public function setVoid($value) {
        $this->_void = $value;
    }

    /**
     * @param Char
     */
    public function setShipdriver($value) {
        $this->_shipdriver = $value;
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
    public function setTotal($value) {
        $this->_total = $value;
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
    public function setPackno($value) {
        $this->_packno = $value;
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
    public function setWmstatus($value) {
        $this->_wmstatus = $value;
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
    public function setTax($value) {
        $this->_tax = $value;
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
    public function setTotweight($value) {
        $this->_totweight = $value;
    }

    /**
     * @param Date
     */
    public function setShipdate($value) {
        $this->_shipdate = $value;
    }

    /**
     * @param Memo
     */
    public function setTracknom($value) {
        $this->_tracknom = $value;
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
    public function setPrepaid($value) {
        $this->_prepaid = $value;
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
    public function setShpcompnam($value) {
        $this->_shpcompnam = $value;
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
    public function setResidenid($value) {
        $this->_residenid = $value;
    }

    /**
     * @param Char
     */
    public function setPacktype($value) {
        $this->_packtype = $value;
    }

    /**
     * @param Char
     */
    public function setServtype($value) {
        $this->_servtype = $value;
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
    public function setShpnotifop($value) {
        $this->_shpnotifop = $value;
    }

    /**
     * @param Char
     */
    public function setShplocid($value) {
        $this->_shplocid = $value;
    }

    /**
     * @param Char
     */
    public function setShipid($value) {
        $this->_shipid = $value;
    }

    /**
     * @param Logical
     */
    public function setNoshipchg($value) {
        $this->_noshipchg = $value;
    }

    /**
     * @param Char
     */
    public function setCa_id($value) {
        $this->_ca_id = $value;
    }

    /**
     * @param Char
     */
    public function setNampicker($value) {
        $this->_nampicker = $value;
    }

    /**
     * @param Char
     */
    public function setNampacker($value) {
        $this->_nampacker = $value;
    }

    /**
     * @param Char
     */
    public function setBoxtype($value) {
        $this->_boxtype = $value;
    }

    /**
     * @param Char
     */
    public function setShpcontact($value) {
        $this->_shpcontact = $value;
    }

    /**
     * @param Numeric
     */
    public function setBoxlength($value) {
        $this->_boxlength = $value;
    }

    /**
     * @param Numeric
     */
    public function setBoxwidth($value) {
        $this->_boxwidth = $value;
    }

    /**
     * @param Numeric
     */
    public function setBoxheight($value) {
        $this->_boxheight = $value;
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
    public function setNamshipper($value) {
        $this->_namshipper = $value;
    }

    /**
     * @param Char
     */
    public function setNamchecker($value) {
        $this->_namchecker = $value;
    }

    /**
     * @param Numeric
     */
    public function setCustdisc($value) {
        $this->_custdisc = $value;
    }

    /**
     * @param Logical
     */
    public function setBlindship($value) {
        $this->_blindship = $value;
    }

    /**
     * Constructor
     */
    public function __construct($shprelno, $ordnum, $picticbano, $custno, $shpreldate, $shipvia, $shipvname, $txrt, $ftaxcode, $shipping, $fuserid, $fstation, $fupddate, $fupdtime, $newuserid, $newdtetime, $newstation, $nflg0, $shprelcomm, $freight, $cartoons, $void, $shipdriver, $itmcount, $total, $inspectno, $packno, $trackno, $wmstatus, $itemtax, $tax, $subtotal, $totweight, $shipdate, $tracknom, $refno, $prepaid, $shpaddrs1, $shpaddrs2, $shpcity, $shpstate, $shpzip, $shpcompnam, $shpphone, $residenid, $packtype, $servtype, $shpemail, $shpcountry, $shpbillopt, $shpnotifop, $shplocid, $shipid, $noshipchg, $ca_id, $nampicker, $nampacker, $boxtype, $shpcontact, $boxlength, $boxwidth, $boxheight, $qblistid, $namshipper, $namchecker, $custdisc, $blindship) {
        $this->_shprelno = $shprelno;
        $this->_ordnum = $ordnum;
        $this->_picticbano = $picticbano;
        $this->_custno = $custno;
        $this->_shpreldate = $shpreldate;
        $this->_shipvia = $shipvia;
        $this->_shipvname = $shipvname;
        $this->_txrt = $txrt;
        $this->_ftaxcode = $ftaxcode;
        $this->_shipping = $shipping;
        $this->_fuserid = $fuserid;
        $this->_fstation = $fstation;
        $this->_fupddate = $fupddate;
        $this->_fupdtime = $fupdtime;
        $this->_newuserid = $newuserid;
        $this->_newdtetime = $newdtetime;
        $this->_newstation = $newstation;
        $this->_nflg0 = $nflg0;
        $this->_shprelcomm = $shprelcomm;
        $this->_freight = $freight;
        $this->_cartoons = $cartoons;
        $this->_void = $void;
        $this->_shipdriver = $shipdriver;
        $this->_itmcount = $itmcount;
        $this->_total = $total;
        $this->_inspectno = $inspectno;
        $this->_packno = $packno;
        $this->_trackno = $trackno;
        $this->_wmstatus = $wmstatus;
        $this->_itemtax = $itemtax;
        $this->_tax = $tax;
        $this->_subtotal = $subtotal;
        $this->_totweight = $totweight;
        $this->_shipdate = $shipdate;
        $this->_tracknom = $tracknom;
        $this->_refno = $refno;
        $this->_prepaid = $prepaid;
        $this->_shpaddrs1 = $shpaddrs1;
        $this->_shpaddrs2 = $shpaddrs2;
        $this->_shpcity = $shpcity;
        $this->_shpstate = $shpstate;
        $this->_shpzip = $shpzip;
        $this->_shpcompnam = $shpcompnam;
        $this->_shpphone = $shpphone;
        $this->_residenid = $residenid;
        $this->_packtype = $packtype;
        $this->_servtype = $servtype;
        $this->_shpemail = $shpemail;
        $this->_shpcountry = $shpcountry;
        $this->_shpbillopt = $shpbillopt;
        $this->_shpnotifop = $shpnotifop;
        $this->_shplocid = $shplocid;
        $this->_shipid = $shipid;
        $this->_noshipchg = $noshipchg;
        $this->_ca_id = $ca_id;
        $this->_nampicker = $nampicker;
        $this->_nampacker = $nampacker;
        $this->_boxtype = $boxtype;
        $this->_shpcontact = $shpcontact;
        $this->_boxlength = $boxlength;
        $this->_boxwidth = $boxwidth;
        $this->_boxheight = $boxheight;
        $this->_qblistid = $qblistid;
        $this->_namshipper = $namshipper;
        $this->_namchecker = $namchecker;
        $this->_custdisc = $custdisc;
        $this->_blindship = $blindship;
    }

    public static function toString() {
        return self::$_name;
    }

}
