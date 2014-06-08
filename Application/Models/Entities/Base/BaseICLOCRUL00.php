<?php

/**
 * Project:  VFP Business Series
 * Copyright: 2014. VFP Business Solutions, LLC
 */

namespace Dandelion\MVC\Application\Models\Entities\Base;

/**
 * BaseICLOCRUL00
 */
class BaseICLOCRUL00 {

    /**
     * Private fields
     */
    private static $_name = "ICLOCRUL00";

    /**
     * Protected fields
     */

    /**
     * @var Char
     */
    protected $_rowid;

    /**
     * @var Char
     */
    protected $_frombin;

    /**
     * @var Char
     */
    protected $_tobin;

    /**
     * @var Char
     */
    protected $_zone;

    /**
     * @var Char
     */
    protected $_bintype;

    /**
     * @var Char
     */
    protected $_sizecode;

    /**
     * @var Char
     */
    protected $_reachcode;

    /**
     * @var Integer
     */
    protected $_height;

    /**
     * @var Integer
     */
    protected $_front;

    /**
     * @var Integer
     */
    protected $_depth;

    /**
     * @var Integer
     */
    protected $_ndeep;

    /**
     * @var Char
     */
    protected $_skipcount;

    /**
     * @var Char
     */
    protected $_comment_in;

    /**
     * @var Char
     */
    protected $_handlecode;

    /**
     * @var Char
     */
    protected $_pick_type;

    /**
     * @var Char
     */
    protected $_subzone;

    /**
     * @var Char
     */
    protected $_packsize;

    /**
     * @var Char
     */
    protected $_is_random;

    /**
     * @var Char
     */
    protected $_bill_zone;

    /**
     * @var Logical
     */
    protected $_isactive;

    /**
     * @var Char
     */
    protected $_whsno;

    /**
     * @var Logical
     */
    protected $_nflg0;

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
    protected $_descrip;

    /**
     * @var Char
     */
    protected $_qblistid;

    /**
     * @var Char
     */
    protected $_fuserid;

    /**
     * Getters
     */

    /**
     * @return Char
     */
    public function getRowid() {
        return $this->_rowid;
    }

    /**
     * @return Char
     */
    public function getFrombin() {
        return $this->_frombin;
    }

    /**
     * @return Char
     */
    public function getTobin() {
        return $this->_tobin;
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
    public function getBintype() {
        return $this->_bintype;
    }

    /**
     * @return Char
     */
    public function getSizecode() {
        return $this->_sizecode;
    }

    /**
     * @return Char
     */
    public function getReachcode() {
        return $this->_reachcode;
    }

    /**
     * @return Integer
     */
    public function getHeight() {
        return $this->_height;
    }

    /**
     * @return Integer
     */
    public function getFront() {
        return $this->_front;
    }

    /**
     * @return Integer
     */
    public function getDepth() {
        return $this->_depth;
    }

    /**
     * @return Integer
     */
    public function getNdeep() {
        return $this->_ndeep;
    }

    /**
     * @return Char
     */
    public function getSkipcount() {
        return $this->_skipcount;
    }

    /**
     * @return Char
     */
    public function getComment_in() {
        return $this->_comment_in;
    }

    /**
     * @return Char
     */
    public function getHandlecode() {
        return $this->_handlecode;
    }

    /**
     * @return Char
     */
    public function getPick_type() {
        return $this->_pick_type;
    }

    /**
     * @return Char
     */
    public function getSubzone() {
        return $this->_subzone;
    }

    /**
     * @return Char
     */
    public function getPacksize() {
        return $this->_packsize;
    }

    /**
     * @return Char
     */
    public function getIs_random() {
        return $this->_is_random;
    }

    /**
     * @return Char
     */
    public function getBill_zone() {
        return $this->_bill_zone;
    }

    /**
     * @return Logical
     */
    public function getIsactive() {
        return $this->_isactive;
    }

    /**
     * @return Char
     */
    public function getWhsno() {
        return $this->_whsno;
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
    public function getDescrip() {
        return $this->_descrip;
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
    public function getFuserid() {
        return $this->_fuserid;
    }

    /**
     * Setters
     */

    /**
     * @param Char
     */
    public function setRowid($value) {
        $this->_rowid = $value;
    }

    /**
     * @param Char
     */
    public function setFrombin($value) {
        $this->_frombin = $value;
    }

    /**
     * @param Char
     */
    public function setTobin($value) {
        $this->_tobin = $value;
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
    public function setBintype($value) {
        $this->_bintype = $value;
    }

    /**
     * @param Char
     */
    public function setSizecode($value) {
        $this->_sizecode = $value;
    }

    /**
     * @param Char
     */
    public function setReachcode($value) {
        $this->_reachcode = $value;
    }

    /**
     * @param Integer
     */
    public function setHeight($value) {
        $this->_height = $value;
    }

    /**
     * @param Integer
     */
    public function setFront($value) {
        $this->_front = $value;
    }

    /**
     * @param Integer
     */
    public function setDepth($value) {
        $this->_depth = $value;
    }

    /**
     * @param Integer
     */
    public function setNdeep($value) {
        $this->_ndeep = $value;
    }

    /**
     * @param Char
     */
    public function setSkipcount($value) {
        $this->_skipcount = $value;
    }

    /**
     * @param Char
     */
    public function setComment_in($value) {
        $this->_comment_in = $value;
    }

    /**
     * @param Char
     */
    public function setHandlecode($value) {
        $this->_handlecode = $value;
    }

    /**
     * @param Char
     */
    public function setPick_type($value) {
        $this->_pick_type = $value;
    }

    /**
     * @param Char
     */
    public function setSubzone($value) {
        $this->_subzone = $value;
    }

    /**
     * @param Char
     */
    public function setPacksize($value) {
        $this->_packsize = $value;
    }

    /**
     * @param Char
     */
    public function setIs_random($value) {
        $this->_is_random = $value;
    }

    /**
     * @param Char
     */
    public function setBill_zone($value) {
        $this->_bill_zone = $value;
    }

    /**
     * @param Logical
     */
    public function setIsactive($value) {
        $this->_isactive = $value;
    }

    /**
     * @param Char
     */
    public function setWhsno($value) {
        $this->_whsno = $value;
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
    public function setDescrip($value) {
        $this->_descrip = $value;
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
    public function setFuserid($value) {
        $this->_fuserid = $value;
    }

    /**
     * Constructor
     */
    public function __construct($rowid, $frombin, $tobin, $zone, $bintype, $sizecode, $reachcode, $height, $front, $depth, $ndeep, $skipcount, $comment_in, $handlecode, $pick_type, $subzone, $packsize, $is_random, $bill_zone, $isactive, $whsno, $nflg0, $fupdtime, $fupddate, $fstation, $descrip, $qblistid, $fuserid) {
        $this->_rowid = $rowid;
        $this->_frombin = $frombin;
        $this->_tobin = $tobin;
        $this->_zone = $zone;
        $this->_bintype = $bintype;
        $this->_sizecode = $sizecode;
        $this->_reachcode = $reachcode;
        $this->_height = $height;
        $this->_front = $front;
        $this->_depth = $depth;
        $this->_ndeep = $ndeep;
        $this->_skipcount = $skipcount;
        $this->_comment_in = $comment_in;
        $this->_handlecode = $handlecode;
        $this->_pick_type = $pick_type;
        $this->_subzone = $subzone;
        $this->_packsize = $packsize;
        $this->_is_random = $is_random;
        $this->_bill_zone = $bill_zone;
        $this->_isactive = $isactive;
        $this->_whsno = $whsno;
        $this->_nflg0 = $nflg0;
        $this->_fupdtime = $fupdtime;
        $this->_fupddate = $fupddate;
        $this->_fstation = $fstation;
        $this->_descrip = $descrip;
        $this->_qblistid = $qblistid;
        $this->_fuserid = $fuserid;
    }

    public static function toString() {
        return self::$_name;
    }

}
