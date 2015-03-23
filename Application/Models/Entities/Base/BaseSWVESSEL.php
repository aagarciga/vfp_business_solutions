<?php

/**
 * Project:  VFP Business Series
 * Copyright: 2014. VFP Business Solutions, LLC
 */

namespace Dandelion\MVC\Application\Models\Entities\Base;

/**
 * BaseSWVESSEL
 */
class BaseSWVESSEL {

    /**
     * Private fields
     */
    private static $_name = "SWVESSEL";

    /**
     * Protected fields
     */

    /**
     * @var Char
     */
    protected $_vesselid;

    /**
     * @var Char
     */
    protected $_descrip;

    /**
     * @var Char
     */
    protected $_pentype;

    /**
     * @var Char
     */
    protected $_cementid;

    /**
     * @var Char
     */
    protected $_firecaulk;

    /**
     * @var Char
     */
    protected $_shipclass;

    /**
     * @var Memo
     */
    protected $_notes;

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
    protected $_fuserid;

    /**
     * @var Char
     */
    protected $_fstation;

    /**
     * @var Char
     */
    protected $_qblistid;

    /**
     * Getters
     */

    /**
     * @return Char
     */
    public function getVesselid() {
        return $this->_vesselid;
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
    public function getPentype() {
        return $this->_pentype;
    }

    /**
     * @return Char
     */
    public function getCementid() {
        return $this->_cementid;
    }

    /**
     * @return Char
     */
    public function getFirecaulk() {
        return $this->_firecaulk;
    }

    /**
     * @return Char
     */
    public function getShipclass() {
        return $this->_shipclass;
    }

    /**
     * @return Memo
     */
    public function getNotes() {
        return $this->_notes;
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
     * @return Char
     */
    public function getQblistid() {
        return $this->_qblistid;
    }

    /**
     * Setters
     */

    /**
     * @param Char
     */
    public function setVesselid($value) {
        $this->_vesselid = $value;
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
    public function setPentype($value) {
        $this->_pentype = $value;
    }

    /**
     * @param Char
     */
    public function setCementid($value) {
        $this->_cementid = $value;
    }

    /**
     * @param Char
     */
    public function setFirecaulk($value) {
        $this->_firecaulk = $value;
    }

    /**
     * @param Char
     */
    public function setShipclass($value) {
        $this->_shipclass = $value;
    }

    /**
     * @param Memo
     */
    public function setNotes($value) {
        $this->_notes = $value;
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
     * @param Char
     */
    public function setQblistid($value) {
        $this->_qblistid = $value;
    }

    /**
     * Constructor
     */
    public function __construct($vesselid, $descrip, $pentype, $cementid, $firecaulk, $shipclass, $notes, $nflg0, $fupdtime, $fupddate, $fuserid, $fstation, $qblistid) {
        $this->_vesselid = $vesselid;
        $this->_descrip = $descrip;
        $this->_pentype = $pentype;
        $this->_cementid = $cementid;
        $this->_firecaulk = $firecaulk;
        $this->_shipclass = $shipclass;
        $this->_notes = $notes;
        $this->_nflg0 = $nflg0;
        $this->_fupdtime = $fupdtime;
        $this->_fupddate = $fupddate;
        $this->_fuserid = $fuserid;
        $this->_fstation = $fstation;
        $this->_qblistid = $qblistid;
    }

    public static function toString() {
        return self::$_name;
    }

}
