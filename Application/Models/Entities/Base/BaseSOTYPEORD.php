<?php

/**
 * Project:  VFP Business Series
 * Copyright: 2014. VFP Business Solutions, LLC
 */

namespace Dandelion\MVC\Application\Models\Entities\Base;

/**
 * BaseSOTYPEORD
 */
class BaseSOTYPEORD {

    /**
     * Private fields
     */
    private static $_name = "SOTYPEORD";

    /**
     * Protected fields
     */

    /**
     * @var Char
     */
    protected $_sotypecode;

    /**
     * @var Char
     */
    protected $_sotype;

    /**
     * @var Char
     */
    protected $_descrip;

    /**
     * @var Date
     */
    protected $_ctrldate;

    /**
     * @var Logical
     */
    protected $_nflg0;

    /**
     * @var Char
     */
    protected $_sotypedesc;

    /**
     * @var Logical
     */
    protected $_inactive;

    /**
     * @var Numeric
     */
    protected $_nodays;

    /**
     * @var Char
     */
    protected $_servtype;

    /**
     * @var Logical
     */
    protected $_sowmsflag;

    /**
     * @var Char
     */
    protected $_ordtyplogo;

    /**
     * @var Char
     */
    protected $_qblistid;

    /**
     * @var Char
     */
    protected $_salesmn;

    /**
     * @var Char
     */
    protected $_shipvia;

    /**
     * @var Char
     */
    protected $_shipvname;

    /**
     * Getters
     */

    /**
     * @return Char
     */
    public function getSotypecode() {
        return $this->_sotypecode;
    }

    /**
     * @return Char
     */
    public function getSotype() {
        return $this->_sotype;
    }

    /**
     * @return Char
     */
    public function getDescrip() {
        return $this->_descrip;
    }

    /**
     * @return Date
     */
    public function getCtrldate() {
        return $this->_ctrldate;
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
    public function getSotypedesc() {
        return $this->_sotypedesc;
    }

    /**
     * @return Logical
     */
    public function getInactive() {
        return $this->_inactive;
    }

    /**
     * @return Numeric
     */
    public function getNodays() {
        return $this->_nodays;
    }

    /**
     * @return Char
     */
    public function getServtype() {
        return $this->_servtype;
    }

    /**
     * @return Logical
     */
    public function getSowmsflag() {
        return $this->_sowmsflag;
    }

    /**
     * @return Char
     */
    public function getOrdtyplogo() {
        return $this->_ordtyplogo;
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
    public function getSalesmn() {
        return $this->_salesmn;
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
     * Setters
     */

    /**
     * @param Char
     */
    public function setSotypecode($value) {
        $this->_sotypecode = $value;
    }

    /**
     * @param Char
     */
    public function setSotype($value) {
        $this->_sotype = $value;
    }

    /**
     * @param Char
     */
    public function setDescrip($value) {
        $this->_descrip = $value;
    }

    /**
     * @param Date
     */
    public function setCtrldate($value) {
        $this->_ctrldate = $value;
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
    public function setSotypedesc($value) {
        $this->_sotypedesc = $value;
    }

    /**
     * @param Logical
     */
    public function setInactive($value) {
        $this->_inactive = $value;
    }

    /**
     * @param Numeric
     */
    public function setNodays($value) {
        $this->_nodays = $value;
    }

    /**
     * @param Char
     */
    public function setServtype($value) {
        $this->_servtype = $value;
    }

    /**
     * @param Logical
     */
    public function setSowmsflag($value) {
        $this->_sowmsflag = $value;
    }

    /**
     * @param Char
     */
    public function setOrdtyplogo($value) {
        $this->_ordtyplogo = $value;
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
    public function setSalesmn($value) {
        $this->_salesmn = $value;
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
     * Constructor
     */
    public function __construct($sotypecode, $sotype, $descrip, $ctrldate, $nflg0, $sotypedesc, $inactive, $nodays, $servtype, $sowmsflag, $ordtyplogo, $qblistid, $salesmn, $shipvia, $shipvname) {
        $this->_sotypecode = $sotypecode;
        $this->_sotype = $sotype;
        $this->_descrip = $descrip;
        $this->_ctrldate = $ctrldate;
        $this->_nflg0 = $nflg0;
        $this->_sotypedesc = $sotypedesc;
        $this->_inactive = $inactive;
        $this->_nodays = $nodays;
        $this->_servtype = $servtype;
        $this->_sowmsflag = $sowmsflag;
        $this->_ordtyplogo = $ordtyplogo;
        $this->_qblistid = $qblistid;
        $this->_salesmn = $salesmn;
        $this->_shipvia = $shipvia;
        $this->_shipvname = $shipvname;
    }

    public static function toString() {
        return self::$_name;
    }

}
