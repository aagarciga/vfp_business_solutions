<?php

/**
 * Project:  VFP Business Series
 * Copyright: 2014. VFP Business Solutions, LLC
 */

namespace Dandelion\MVC\Application\Models\Entities\Base;

/**
 * BaseSOEDISTATUS
 */
class BaseSOEDISTATUS {

    /**
     * Private fields
     */
    private static $_name = "SOEDISTATUS";

    /**
     * Protected fields
     */

    /**
     * @var Char
     */
    protected $_edistatid;

    /**
     * @var Char
     */
    protected $_descrip;

    /**
     * @var Char
     */
    protected $_sotypecode;

    /**
     * @var Char
     */
    protected $_qblistid;

    /**
     * @var Char
     */
    protected $_statusedin;

    /**
     * @var Logical
     */
    protected $_nflg0;

    /**
     * Getters
     */

    /**
     * @return Char
     */
    public function getEdistatid() {
        return $this->_edistatid;
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
    public function getSotypecode() {
        return $this->_sotypecode;
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
    public function getStatusedin() {
        return $this->_statusedin;
    }

    /**
     * @return Logical
     */
    public function getNflg0() {
        return $this->_nflg0;
    }

    /**
     * Setters
     */

    /**
     * @param Char
     */
    public function setEdistatid($value) {
        $this->_edistatid = $value;
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
    public function setSotypecode($value) {
        $this->_sotypecode = $value;
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
    public function setStatusedin($value) {
        $this->_statusedin = $value;
    }

    /**
     * @param Logical
     */
    public function setNflg0($value) {
        $this->_nflg0 = $value;
    }

    /**
     * Constructor
     */
    public function __construct($edistatid, $descrip, $sotypecode, $qblistid, $statusedin, $nflg0) {
        $this->_edistatid = $edistatid;
        $this->_descrip = $descrip;
        $this->_sotypecode = $sotypecode;
        $this->_qblistid = $qblistid;
        $this->_statusedin = $statusedin;
        $this->_nflg0 = $nflg0;
    }

    public static function toString() {
        return self::$_name;
    }

}
