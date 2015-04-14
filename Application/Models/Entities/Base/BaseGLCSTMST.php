<?php

/**
 * Project:  VFP Business Series
 * Copyright: 2014. VFP Business Solutions, LLC
 */

namespace Dandelion\MVC\Application\Models\Entities\Base;

/**
 * BaseGLCSTMST
 */
class BaseGLCSTMST {

    /**
     * Private fields
     */
    private static $_name = "GLCSTMST";

    /**
     * Protected fields
     */

    /**
     * @var Char
     */
    protected $_cstctid;

    /**
     * @var Char
     */
    protected $_descrip;

    /**
     * @var Logical
     */
    protected $_active;

    /**
     * @var Char
     */
    protected $_cstcatid;

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
    protected $_bankacct;

    /**
     * @var Logical
     */
    protected $_zeroprice;

    /**
     * @var Char
     */
    protected $_keyword;

    /**
     * @var Char
     */
    protected $_gldept;

    /**
     * @var Char
     */
    protected $_gldeptdesc;

    /**
     * @var Char
     */
    protected $_whsno;

    /**
     * @var Char
     */
    protected $_glcogsacct;

    /**
     * @var Char
     */
    protected $_glsaleacct;

    /**
     * @var Char
     */
    protected $_glaracct;

    /**
     * @var Char
     */
    protected $_glapacct;

    /**
     * @var Char
     */
    protected $_glapdisb;

    /**
     * @var Char
     */
    protected $_basecode;

    /**
     * @var Logical
     */
    protected $_intcompflg;

    /**
     * @var Char
     */
    protected $_qbclass;

    /**
     * @var Char
     */
    protected $_qblistid;

    /**
     * @var Char
     */
    protected $_custno;

    /**
     * @var Char
     */
    protected $_company;

    /**
     * Getters
     */

    /**
     * @return Char
     */
    public function getCstctid() {
        return $this->_cstctid;
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
    public function getActive() {
        return $this->_active;
    }

    /**
     * @return Char
     */
    public function getCstcatid() {
        return $this->_cstcatid;
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
    public function getBankacct() {
        return $this->_bankacct;
    }

    /**
     * @return Logical
     */
    public function getZeroprice() {
        return $this->_zeroprice;
    }

    /**
     * @return Char
     */
    public function getKeyword() {
        return $this->_keyword;
    }

    /**
     * @return Char
     */
    public function getGldept() {
        return $this->_gldept;
    }

    /**
     * @return Char
     */
    public function getGldeptdesc() {
        return $this->_gldeptdesc;
    }

    /**
     * @return Char
     */
    public function getWhsno() {
        return $this->_whsno;
    }

    /**
     * @return Char
     */
    public function getGlcogsacct() {
        return $this->_glcogsacct;
    }

    /**
     * @return Char
     */
    public function getGlsaleacct() {
        return $this->_glsaleacct;
    }

    /**
     * @return Char
     */
    public function getGlaracct() {
        return $this->_glaracct;
    }

    /**
     * @return Char
     */
    public function getGlapacct() {
        return $this->_glapacct;
    }

    /**
     * @return Char
     */
    public function getGlapdisb() {
        return $this->_glapdisb;
    }

    /**
     * @return Char
     */
    public function getBasecode() {
        return $this->_basecode;
    }

    /**
     * @return Logical
     */
    public function getIntcompflg() {
        return $this->_intcompflg;
    }

    /**
     * @return Char
     */
    public function getQbclass() {
        return $this->_qbclass;
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
    public function getCustno() {
        return $this->_custno;
    }

    /**
     * @return Char
     */
    public function getCompany() {
        return $this->_company;
    }

    /**
     * Setters
     */

    /**
     * @param Char
     */
    public function setCstctid($value) {
        $this->_cstctid = $value;
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
    public function setActive($value) {
        $this->_active = $value;
    }

    /**
     * @param Char
     */
    public function setCstcatid($value) {
        $this->_cstcatid = $value;
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
    public function setBankacct($value) {
        $this->_bankacct = $value;
    }

    /**
     * @param Logical
     */
    public function setZeroprice($value) {
        $this->_zeroprice = $value;
    }

    /**
     * @param Char
     */
    public function setKeyword($value) {
        $this->_keyword = $value;
    }

    /**
     * @param Char
     */
    public function setGldept($value) {
        $this->_gldept = $value;
    }

    /**
     * @param Char
     */
    public function setGldeptdesc($value) {
        $this->_gldeptdesc = $value;
    }

    /**
     * @param Char
     */
    public function setWhsno($value) {
        $this->_whsno = $value;
    }

    /**
     * @param Char
     */
    public function setGlcogsacct($value) {
        $this->_glcogsacct = $value;
    }

    /**
     * @param Char
     */
    public function setGlsaleacct($value) {
        $this->_glsaleacct = $value;
    }

    /**
     * @param Char
     */
    public function setGlaracct($value) {
        $this->_glaracct = $value;
    }

    /**
     * @param Char
     */
    public function setGlapacct($value) {
        $this->_glapacct = $value;
    }

    /**
     * @param Char
     */
    public function setGlapdisb($value) {
        $this->_glapdisb = $value;
    }

    /**
     * @param Char
     */
    public function setBasecode($value) {
        $this->_basecode = $value;
    }

    /**
     * @param Logical
     */
    public function setIntcompflg($value) {
        $this->_intcompflg = $value;
    }

    /**
     * @param Char
     */
    public function setQbclass($value) {
        $this->_qbclass = $value;
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
    public function setCustno($value) {
        $this->_custno = $value;
    }

    /**
     * @param Char
     */
    public function setCompany($value) {
        $this->_company = $value;
    }

    /**
     * Constructor
     */
    public function __construct($cstctid, $descrip, $active, $cstcatid, $nflg0, $fupdtime, $fupddate, $fuserid, $fstation, $bankacct, $zeroprice, $keyword, $gldept, $gldeptdesc, $whsno, $glcogsacct, $glsaleacct, $glaracct, $glapacct, $glapdisb, $basecode, $intcompflg, $qbclass, $qblistid, $custno, $company) {
        $this->_cstctid = $cstctid;
        $this->_descrip = $descrip;
        $this->_active = $active;
        $this->_cstcatid = $cstcatid;
        $this->_nflg0 = $nflg0;
        $this->_fupdtime = $fupdtime;
        $this->_fupddate = $fupddate;
        $this->_fuserid = $fuserid;
        $this->_fstation = $fstation;
        $this->_bankacct = $bankacct;
        $this->_zeroprice = $zeroprice;
        $this->_keyword = $keyword;
        $this->_gldept = $gldept;
        $this->_gldeptdesc = $gldeptdesc;
        $this->_whsno = $whsno;
        $this->_glcogsacct = $glcogsacct;
        $this->_glsaleacct = $glsaleacct;
        $this->_glaracct = $glaracct;
        $this->_glapacct = $glapacct;
        $this->_glapdisb = $glapdisb;
        $this->_basecode = $basecode;
        $this->_intcompflg = $intcompflg;
        $this->_qbclass = $qbclass;
        $this->_qblistid = $qblistid;
        $this->_custno = $custno;
        $this->_company = $company;
    }

    public static function toString() {
        return self::$_name;
    }

}
