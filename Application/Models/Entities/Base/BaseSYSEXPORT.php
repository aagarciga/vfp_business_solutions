<?php

/**
 * Project:  VFP Business Series
 * Copyright: 2014. VFP Business Solutions, LLC
 */

namespace Dandelion\MVC\Application\Models\Entities\Base;

/**
 * BaseSYSEXPORT
 */
class BaseSYSEXPORT {

    /**
     * Private fields
     */
    private static $_name = "SYSEXPORT";

    /**
     * Protected fields
     */

    /**
     * @var Char
     */
    protected $_exportid;

    /**
     * @var Char
     */
    protected $_descrip;

    /**
     * @var Memo,
     */
    protected $_expfields;

    /**
     * @var Memo,
     */
    protected $_expfrom;

    /**
     * @var Memo,
     */
    protected $_expfilter;

    /**
     * @var Memo,
     */
    protected $_explink;

    /**
     * @var Memo
     */
    protected $_exporderby;
    
    /**
     * @var char
     */
    protected $_fuserid;

    /**
     * Getters
     */

    /**
     * @return Char
     */
    public function getExportid() {
        return $this->_exportid;
    }

    /**
     * @return Char
     */
    public function getDescrip() {
        return $this->_descrip;
    }

    /**
     * @return Memo,
     */
    public function getExpfields() {
        return $this->_expfields;
    }

    /**
     * @return Memo,
     */
    public function getExpfrom() {
        return $this->_expfrom;
    }

    /**
     * @return Memo,
     */
    public function getExpfilter() {
        return $this->_expfilter;
    }

    /**
     * @return Memo,
     */
    public function getExplink() {
        return $this->_explink;
    }

    /**
     * @return Memo
     */
    public function getExporderby() {
        return $this->_exporderby;
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
    public function setExportid($value) {
        $this->_exportid = $value;
    }

    /**
     * @param Char
     */
    public function setDescrip($value) {
        $this->_descrip = $value;
    }

    /**
     * @param Memo,
     */
    public function setExpfields($value) {
        $this->_expfields = $value;
    }

    /**
     * @param Memo,
     */
    public function setExpfrom($value) {
        $this->_expfrom = $value;
    }

    /**
     * @param Memo,
     */
    public function setExpfilter($value) {
        $this->_expfilter = $value;
    }

    /**
     * @param Memo,
     */
    public function setExplink($value) {
        $this->_explink = $value;
    }

    /**
     * @param Memo
     */
    public function setExporderby($value) {
        $this->_exporderby = $value;
    }
    
    /**
     * @param Char
     */
    public function setFuserid($value) {
        $this->_fuserid = $value;
    }

    /**
     * Constructor
     * @param type $exportid
     * @param type $descrip
     * @param type $expfields
     * @param type $expfrom
     * @param type $expfilter
     * @param type $explink
     * @param type $exporderby
     * @param type $fuserid
     */
    public function __construct($exportid, $descrip, $expfields, $expfrom, $expfilter, $explink, $exporderby, $fuserid) {
        $this->_exportid = $exportid;
        $this->_descrip = $descrip;
        $this->_expfields = $expfields;
        $this->_expfrom = $expfrom;
        $this->_expfilter = $expfilter;
        $this->_explink = $explink;
        $this->_exporderby = $exporderby;
        $this->_fuserid = $fuserid;
    }

    public static function toString() {
        return self::$_name;
    }

}
