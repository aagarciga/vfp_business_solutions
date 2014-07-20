<?php

/**
 * Project:  VFP Business Series
 * Copyright: 2014. VFP Business Solutions, LLC
 */

namespace Dandelion\MVC\Application\Models\Entities\Base;

/**
 * BaseICITLO
 */
class BaseICITLO {

    /**
     * Private fields
     */
    private static $_name = "ICITLO";

    /**
     * Protected fields
     */

    /**
     * @var Char
     */
    protected $_itemno;

    /**
     * @var Char
     */
    protected $_itmwhs;

    /**
     * @var Char
     */
    protected $_locno;

    /**
     * @var Logical
     */
    protected $_nflg0;

    /**
     * @var Numeric
     */
    protected $_onhand;

    /**
     * @var Numeric
     */
    protected $_qtypick;

    /**
     * @var Numeric
     */
    protected $_qtyshprel;

    /**
     * @var Char
     */
    protected $_localfsort;

    /**
     * @var Char
     */
    protected $_zone;

    /**
     * @var Char
     */
    protected $_qblistid;

    /**
     * @var Char
     */
    protected $_casesingle;

    /**
     * Getters
     */

    /**
     * @return Char
     */
    public function getItemno() {
        return $this->_itemno;
    }

    /**
     * @return Char
     */
    public function getItmwhs() {
        return $this->_itmwhs;
    }

    /**
     * @return Char
     */
    public function getLocno() {
        return $this->_locno;
    }

    /**
     * @return Logical
     */
    public function getNflg0() {
        return $this->_nflg0;
    }

    /**
     * @return Numeric
     */
    public function getOnhand() {
        return $this->_onhand;
    }

    /**
     * @return Numeric
     */
    public function getQtypick() {
        return $this->_qtypick;
    }

    /**
     * @return Numeric
     */
    public function getQtyshprel() {
        return $this->_qtyshprel;
    }

    /**
     * @return Char
     */
    public function getLocalfsort() {
        return $this->_localfsort;
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
    public function getQblistid() {
        return $this->_qblistid;
    }

    /**
     * @return Char
     */
    public function getCasesingle() {
        return $this->_casesingle;
    }

    /**
     * Setters
     */

    /**
     * @param Char
     */
    public function setItemno($value) {
        $this->_itemno = $value;
    }

    /**
     * @param Char
     */
    public function setItmwhs($value) {
        $this->_itmwhs = $value;
    }

    /**
     * @param Char
     */
    public function setLocno($value) {
        $this->_locno = $value;
    }

    /**
     * @param Logical
     */
    public function setNflg0($value) {
        $this->_nflg0 = $value;
    }

    /**
     * @param Numeric
     */
    public function setOnhand($value) {
        $this->_onhand = $value;
    }

    /**
     * @param Numeric
     */
    public function setQtypick($value) {
        $this->_qtypick = $value;
    }

    /**
     * @param Numeric
     */
    public function setQtyshprel($value) {
        $this->_qtyshprel = $value;
    }

    /**
     * @param Char
     */
    public function setLocalfsort($value) {
        $this->_localfsort = $value;
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
    public function setQblistid($value) {
        $this->_qblistid = $value;
    }

    /**
     * @param Char
     */
    public function setCasesingle($value) {
        $this->_casesingle = $value;
    }

    /**
     * Constructor
     * @param string $itemno
     * @param string $itmwhs
     * @param string $locno
     * @param bool $nflg0
     * @param int $onhand
     * @param int $qtypick
     * @param int $qtyshprel
     * @param string $localfsort
     * @param string $zone
     * @param string $qblistid
     * @param string $casesingle
     */
    public function __construct($itemno, $itmwhs, $locno, $nflg0, $onhand, $qtypick, $qtyshprel, $localfsort, $zone, $qblistid, $casesingle) {
        $this->_itemno = $itemno;
        $this->_itmwhs = $itmwhs;
        $this->_locno = $locno;
        $this->_nflg0 = ($nflg0 === null) ? false : $nflg0;
        $this->_onhand = $onhand;
        $this->_qtypick = $qtypick;
        $this->_qtyshprel = $qtyshprel;
        $this->_localfsort = $localfsort;
        $this->_zone = $zone;
        $this->_qblistid = $qblistid;
        $this->_casesingle = $casesingle;
    }

    public static function toString() {
        return self::$_name;
    }

}
