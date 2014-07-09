<?php

/**
 * Project:  VFP Business Series
 * Copyright: 2014. VFP Business Solutions, LLC
 */

namespace Dandelion\MVC\Application\Models\Entities\Base;

/**
 * BaseICUPCPARM
 */
class BaseICUPCPARM {

    /**
     * Private fields
     */
    private static $_name = "ICUPCPARM";

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
    protected $_upccode;

    /**
     * @var Logical
     */
    protected $_isactive;

    /**
     * @var Logical
     */
    protected $_nflg0;

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
    public function getItemno() {
        return $this->_itemno;
    }

    /**
     * @return Char
     */
    public function getUpccode() {
        return $this->_upccode;
    }

    /**
     * @return Logical
     */
    public function getIsactive() {
        return $this->_isactive;
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
    public function getQblistid() {
        return $this->_qblistid;
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
    public function setUpccode($value) {
        $this->_upccode = $value;
    }

    /**
     * @param Logical
     */
    public function setIsactive($value) {
        $this->_isactive = $value;
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
    public function setQblistid($value) {
        $this->_qblistid = $value;
    }

    /**
     * Constructor
     */
    public function __construct($itemno, $upccode, $isactive, $nflg0, $qblistid) {
        $this->_itemno = $itemno;
        $this->_upccode = $upccode;
        $this->_isactive = $isactive;
        $this->_nflg0 = $nflg0;
        $this->_qblistid = $qblistid;
    }

    public static function toString() {
        return self::$_name;
    }

}
