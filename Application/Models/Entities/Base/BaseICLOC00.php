<?php

/**
 * Project:  VFP Business Series
 * Copyright: 2014. VFP Business Solutions, LLC
 */

namespace Dandelion\MVC\Application\Models\Entities\Base;

/**
 * BaseICLOC00
 */
class BaseICLOC00 {

    /**
     * Private fields
     */
    private static $_name = "ICLOC00";

    /**
     * Protected fields
     */

    /**
     * @var Char
     */
    protected $_locno;

    /**
     * @var Char
     */
    protected $_descrip;

    /**
     * @var Logical
     */
    protected $_nflg0;

    /**
     * @var Char
     */
    protected $_whsno;

    /**
     * @var Numeric
     */
    protected $_height;

    /**
     * @var Numeric
     */
    protected $_width;

    /**
     * @var Numeric
     */
    protected $_depth;

    /**
     * @var Numeric
     */
    protected $_cubic;

    /**
     * @var Char
     */
    protected $_bintype;

    /**
     * @var Char
     */
    protected $_zone;

    /**
     * @var Char
     */
    protected $_subzone;

    /**
     * @var Memo
     */
    protected $_comment;

    /**
     * @var Char
     */
    protected $_rowid;

    /**
     * @var Char
     */
    protected $_notes;

    /**
     * @var Numeric
     */
    protected $_weightcap;

    /**
     * @var Logical
     */
    protected $_isactive;

    /**
     * @var Logical
     */
    protected $_multisku;

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
    public function getLocno() {
        return $this->_locno;
    }

    /**
     * @return Char
     */
    public function getDescrip() {
        return $this->_descrip;
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
    public function getWhsno() {
        return $this->_whsno;
    }

    /**
     * @return Numeric
     */
    public function getHeight() {
        return $this->_height;
    }

    /**
     * @return Numeric
     */
    public function getWidth() {
        return $this->_width;
    }

    /**
     * @return Numeric
     */
    public function getDepth() {
        return $this->_depth;
    }

    /**
     * @return Numeric
     */
    public function getCubic() {
        return $this->_cubic;
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
    public function getZone() {
        return $this->_zone;
    }

    /**
     * @return Char
     */
    public function getSubzone() {
        return $this->_subzone;
    }

    /**
     * @return Memo
     */
    public function getComment() {
        return $this->_comment;
    }

    /**
     * @return Char
     */
    public function getRowid() {
        return $this->_rowid;
    }

    /**
     * @return Char
     */
    public function getNotes() {
        return $this->_notes;
    }

    /**
     * @return Numeric
     */
    public function getWeightcap() {
        return $this->_weightcap;
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
    public function getMultisku() {
        return $this->_multisku;
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
    public function setLocno($value) {
        $this->_locno = $value;
    }

    /**
     * @param Char
     */
    public function setDescrip($value) {
        $this->_descrip = $value;
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
    public function setWhsno($value) {
        $this->_whsno = $value;
    }

    /**
     * @param Numeric
     */
    public function setHeight($value) {
        $this->_height = $value;
    }

    /**
     * @param Numeric
     */
    public function setWidth($value) {
        $this->_width = $value;
    }

    /**
     * @param Numeric
     */
    public function setDepth($value) {
        $this->_depth = $value;
    }

    /**
     * @param Numeric
     */
    public function setCubic($value) {
        $this->_cubic = $value;
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
    public function setZone($value) {
        $this->_zone = $value;
    }

    /**
     * @param Char
     */
    public function setSubzone($value) {
        $this->_subzone = $value;
    }

    /**
     * @param Memo
     */
    public function setComment($value) {
        $this->_comment = $value;
    }

    /**
     * @param Char
     */
    public function setRowid($value) {
        $this->_rowid = $value;
    }

    /**
     * @param Char
     */
    public function setNotes($value) {
        $this->_notes = $value;
    }

    /**
     * @param Numeric
     */
    public function setWeightcap($value) {
        $this->_weightcap = $value;
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
    public function setMultisku($value) {
        $this->_multisku = $value;
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
     */
    public function __construct($locno, $descrip, $nflg0, $whsno, $height, $width, $depth, $cubic, $bintype, $zone, $subzone, $comment, $rowid, $notes, $weightcap, $isactive, $multisku, $qblistid, $casesingle) {
        $this->_locno = $locno;
        $this->_descrip = $descrip;
        $this->_nflg0 = $nflg0;
        $this->_whsno = $whsno;
        $this->_height = $height;
        $this->_width = $width;
        $this->_depth = $depth;
        $this->_cubic = $cubic;
        $this->_bintype = $bintype;
        $this->_zone = $zone;
        $this->_subzone = $subzone;
        $this->_comment = $comment;
        $this->_rowid = $rowid;
        $this->_notes = $notes;
        $this->_weightcap = $weightcap;
        $this->_isactive = $isactive;
        $this->_multisku = $multisku;
        $this->_qblistid = $qblistid;
        $this->_casesingle = $casesingle;
    }

    public static function toString() {
        return self::$_name;
    }

}
