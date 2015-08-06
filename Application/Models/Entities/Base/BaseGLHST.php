<?php

/**
 * Project:  VFP Business Series
 * Copyright: 2014. VFP Business Solutions, LLC
 */

namespace Dandelion\MVC\Application\Models\Entities\Base;

/**
 * BaseGLHST
 */
class BaseGLHST {

    /**
     * Private fields
     */
    private static $_name = "GLHST";

    /**
     * Protected fields
     */

    /**
     * @var Numeric
     */
    protected $_amount;

    /**
     * @var Date
     */
    protected $_distdate;

    /**
     * @var Char
     */
    protected $_account;

    /**
     * @var Numeric
     */
    protected $_period;

    /**
     * @var Char
     */
    protected $_year;

    /**
     * @var Char
     */
    protected $_baseid;

    /**
     * @var Char
     */
    protected $_qblistid;

    /**
     * Getters
     */

    /**
     * @return Numeric
     */
    public function getAmount() {
        return $this->_amount;
    }

    /**
     * @return Date
     */
    public function getDistdate() {
        return $this->_distdate;
    }

    /**
     * @return Char
     */
    public function getAccount() {
        return $this->_account;
    }

    /**
     * @return Numeric
     */
    public function getPeriod() {
        return $this->_period;
    }

    /**
     * @return Char
     */
    public function getYear() {
        return $this->_year;
    }

    /**
     * @return Char
     */
    public function getBaseid() {
        return $this->_baseid;
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
     * @param Numeric
     */
    public function setAmount($value) {
        $this->_amount = $value;
    }

    /**
     * @param Date
     */
    public function setDistdate($value) {
        $this->_distdate = $value;
    }

    /**
     * @param Char
     */
    public function setAccount($value) {
        $this->_account = $value;
    }

    /**
     * @param Numeric
     */
    public function setPeriod($value) {
        $this->_period = $value;
    }

    /**
     * @param Char
     */
    public function setYear($value) {
        $this->_year = $value;
    }

    /**
     * @param Char
     */
    public function setBaseid($value) {
        $this->_baseid = $value;
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
    public function __construct($amount, $distdate, $account, $period, $year, $baseid, $qblistid) {
        $this->_amount = $amount;
        $this->_distdate = $distdate;
        $this->_account = $account;
        $this->_period = $period;
        $this->_year = $year;
        $this->_baseid = $baseid;
        $this->_qblistid = $qblistid;
    }

    public static function toString() {
        return self::$_name;
    }

}
