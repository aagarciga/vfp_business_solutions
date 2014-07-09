<?php

/**
 * Project:  VFP Business Series
 * Copyright: 2014. VFP Business Solutions, LLC
 */

namespace Dandelion\MVC\Application\Models\Entities\Base;

/**
 * BaseWMSCAN
 */
class BaseWMSCAN {

    /**
     * Private fields
     */
    private static $_name = "WMSCAN";

    /**
     * Protected fields
     */

    /**
     * @var Char
     */
    protected $_code;

    /**
     * @var Char
     */
    protected $_scanid;

    /**
     * @var Char
     */
    protected $_descrip;

    /**
     * @var Char
     */
    protected $_status;

    /**
     * @var Logical
     */
    protected $_menu;

    /**
     * @var Logical
     */
    protected $_locswitch;

    /**
     * @var Char
     */
    protected $_location;

    /**
     * @var Char
     */
    protected $_pickticket;

    /**
     * @var Char
     */
    protected $_ordnum;

    /**
     * @var Char
     */
    protected $_palletno;

    /**
     * @var Char
     */
    protected $_packno;

    /**
     * @var Char
     */
    protected $_barcode;

    /**
     * @var Char
     */
    protected $_picture;

    /**
     * @var Logical
     */
    protected $_error;

    /**
     * @var Char
     */
    protected $_errormsg;

    /**
     * @var Char
     */
    protected $_userid;

    /**
     * @var Logical
     */
    protected $_nflg0;

    /**
     * @var Logical
     */
    protected $_quantities;

    /**
     * @var Logical
     */
    protected $_shipping;

    /**
     * @var Char
     */
    protected $_binloc;

    /**
     * @var Logical
     */
    protected $_moveitem;

    /**
     * @var Logical
     */
    protected $_bintobin;

    /**
     * @var Logical
     */
    protected $_phycount;

    /**
     * @var Logical
     */
    protected $_chgprop;

    /**
     * @var Char
     */
    protected $_pono;

    /**
     * @var Char
     */
    protected $_itemno;

    /**
     * @var Char
     */
    protected $_rimno;

    /**
     * @var Logical
     */
    protected $_shipment;

    /**
     * @var Logical
     */
    protected $_return;

    /**
     * @var Char
     */
    protected $_qblistid;

    /**
     * @var Logical
     */
    protected $_binlocal;

    /**
     * Getters
     */

    /**
     * @return Char
     */
    public function getCode() {
        return $this->_code;
    }

    /**
     * @return Char
     */
    public function getScanid() {
        return $this->_scanid;
    }

    /**
     * @return Char
     */
    public function getDescrip() {
        return $this->_descrip;
    }

    /**
     * @return Char
     */
    public function getStatus() {
        return $this->_status;
    }

    /**
     * @return Logical
     */
    public function getMenu() {
        return $this->_menu;
    }

    /**
     * @return Logical
     */
    public function getLocswitch() {
        return $this->_locswitch;
    }

    /**
     * @return Char
     */
    public function getLocation() {
        return $this->_location;
    }

    /**
     * @return Char
     */
    public function getPickticket() {
        return $this->_pickticket;
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
    public function getPalletno() {
        return $this->_palletno;
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
    public function getBarcode() {
        return $this->_barcode;
    }

    /**
     * @return Char
     */
    public function getPicture() {
        return $this->_picture;
    }

    /**
     * @return Logical
     */
    public function getError() {
        return $this->_error;
    }

    /**
     * @return Char
     */
    public function getErrormsg() {
        return $this->_errormsg;
    }

    /**
     * @return Char
     */
    public function getUserid() {
        return $this->_userid;
    }

    /**
     * @return Logical
     */
    public function getNflg0() {
        return $this->_nflg0;
    }

    /**
     * @return Logical
     */
    public function getQuantities() {
        return $this->_quantities;
    }

    /**
     * @return Logical
     */
    public function getShipping() {
        return $this->_shipping;
    }

    /**
     * @return Char
     */
    public function getBinloc() {
        return $this->_binloc;
    }

    /**
     * @return Logical
     */
    public function getMoveitem() {
        return $this->_moveitem;
    }

    /**
     * @return Logical
     */
    public function getBintobin() {
        return $this->_bintobin;
    }

    /**
     * @return Logical
     */
    public function getPhycount() {
        return $this->_phycount;
    }

    /**
     * @return Logical
     */
    public function getChgprop() {
        return $this->_chgprop;
    }

    /**
     * @return Char
     */
    public function getPono() {
        return $this->_pono;
    }

    /**
     * @return Char
     */
    public function getItemno() {
        return $this->_itemno;
    }

    /**
     * @return Char
     */
    public function getRimno() {
        return $this->_rimno;
    }

    /**
     * @return Logical
     */
    public function getShipment() {
        return $this->_shipment;
    }

    /**
     * @return Logical
     */
    public function getReturn() {
        return $this->_return;
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
    public function getBinlocal() {
        return $this->_binlocal;
    }

    /**
     * Setters
     */

    /**
     * @param Char
     */
    public function setCode($value) {
        $this->_code = $value;
    }

    /**
     * @param Char
     */
    public function setScanid($value) {
        $this->_scanid = $value;
    }

    /**
     * @param Char
     */
    public function setDescrip($value) {
        $this->_descrip = $value;
    }

    /**
     * @param Char
     */
    public function setStatus($value) {
        $this->_status = $value;
    }

    /**
     * @param Logical
     */
    public function setMenu($value) {
        $this->_menu = $value;
    }

    /**
     * @param Logical
     */
    public function setLocswitch($value) {
        $this->_locswitch = $value;
    }

    /**
     * @param Char
     */
    public function setLocation($value) {
        $this->_location = $value;
    }

    /**
     * @param Char
     */
    public function setPickticket($value) {
        $this->_pickticket = $value;
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
    public function setPalletno($value) {
        $this->_palletno = $value;
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
    public function setBarcode($value) {
        $this->_barcode = $value;
    }

    /**
     * @param Char
     */
    public function setPicture($value) {
        $this->_picture = $value;
    }

    /**
     * @param Logical
     */
    public function setError($value) {
        $this->_error = $value;
    }

    /**
     * @param Char
     */
    public function setErrormsg($value) {
        $this->_errormsg = $value;
    }

    /**
     * @param Char
     */
    public function setUserid($value) {
        $this->_userid = $value;
    }

    /**
     * @param Logical
     */
    public function setNflg0($value) {
        $this->_nflg0 = $value;
    }

    /**
     * @param Logical
     */
    public function setQuantities($value) {
        $this->_quantities = $value;
    }

    /**
     * @param Logical
     */
    public function setShipping($value) {
        $this->_shipping = $value;
    }

    /**
     * @param Char
     */
    public function setBinloc($value) {
        $this->_binloc = $value;
    }

    /**
     * @param Logical
     */
    public function setMoveitem($value) {
        $this->_moveitem = $value;
    }

    /**
     * @param Logical
     */
    public function setBintobin($value) {
        $this->_bintobin = $value;
    }

    /**
     * @param Logical
     */
    public function setPhycount($value) {
        $this->_phycount = $value;
    }

    /**
     * @param Logical
     */
    public function setChgprop($value) {
        $this->_chgprop = $value;
    }

    /**
     * @param Char
     */
    public function setPono($value) {
        $this->_pono = $value;
    }

    /**
     * @param Char
     */
    public function setItemno($value) {
        $this->_itemno = $value;
    }

    /**
     * @param Char
     */
    public function setRimno($value) {
        $this->_rimno = $value;
    }

    /**
     * @param Logical
     */
    public function setShipment($value) {
        $this->_shipment = $value;
    }

    /**
     * @param Logical
     */
    public function setReturn($value) {
        $this->_return = $value;
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
    public function setBinlocal($value) {
        $this->_binlocal = $value;
    }

    /**
     * Constructor
     */
    public function __construct($code, $scanid, $descrip, $status, $menu, $locswitch, $location, $pickticket, $ordnum, $palletno, $packno, $barcode, $picture, $error, $errormsg, $userid, $nflg0, $quantities, $shipping, $binloc, $moveitem, $bintobin, $phycount, $chgprop, $pono, $itemno, $rimno, $shipment, $return, $qblistid, $binlocal) {
        $this->_code = $code;
        $this->_scanid = $scanid;
        $this->_descrip = $descrip;
        $this->_status = $status;
        $this->_menu = $menu;
        $this->_locswitch = $locswitch;
        $this->_location = $location;
        $this->_pickticket = $pickticket;
        $this->_ordnum = $ordnum;
        $this->_palletno = $palletno;
        $this->_packno = $packno;
        $this->_barcode = $barcode;
        $this->_picture = $picture;
        $this->_error = $error;
        $this->_errormsg = $errormsg;
        $this->_userid = $userid;
        $this->_nflg0 = $nflg0;
        $this->_quantities = $quantities;
        $this->_shipping = $shipping;
        $this->_binloc = $binloc;
        $this->_moveitem = $moveitem;
        $this->_bintobin = $bintobin;
        $this->_phycount = $phycount;
        $this->_chgprop = $chgprop;
        $this->_pono = $pono;
        $this->_itemno = $itemno;
        $this->_rimno = $rimno;
        $this->_shipment = $shipment;
        $this->_return = $return;
        $this->_qblistid = $qblistid;
        $this->_binlocal = $binlocal;
    }

    public static function toString() {
        return self::$_name;
    }

}
