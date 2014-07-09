<?php

/**
 * Project:  VFP Business Series
 * Copyright: 2014. VFP Business Solutions, LLC
 */

namespace Dandelion\MVC\Application\Models\Entities\Base;

/**
 * BaseSysuser entity definition to map Syscomp Table to Syscompanies objects
 * 
 */
class BaseSyscomp {

    private static $_name = "syscomp";
    
    protected $_actcomp;
    protected $_company;
    protected $_nflg0;
    protected $_qbstatus;
    protected $_adssqldba;
    protected $_dbpath;

    public static function toString() {
        return self::$_name;
    }
    
    /**
     * @return string
     */
    public function getActcomp() {
        return trim($this->_actcomp);
    }

    /**
     * @param string $actcomp
     */
    public function setActcomp($actcomp) {
        $this->_actcomp = $actcomp;
    }
    
    /**
     * @return string
     */
    public function getCompany() {
        return trim($this->_company);
    }

    /**
     * @param string $company
     */
    public function setCompany($company) {
        $this->_company = $company;
    }
    
    /**
     * @return bool
     */
    public function getNflg0() {
        return trim($this->_nflg0);
    }

    /**
     * @param bool $nflg0
     */
    public function setNflg0($nflg0) {
        $this->_nflg0 = $nflg0;
    }
    
    /**
     * @return bool
     */
    public function getQbstatus() {
        return trim($this->_qbstatus);
    }

    /**
     * @param bool $qbstatus
     */
    public function setQbstatus($qbstatus) {
        $this->_qbstatus = $qbstatus;
    }
    
    /**
     * @return bool
     */
    public function getAdssqldba() {
        return trim($this->_adssqldba);
    }

    /**
     * @param bool $adssqldba
     */
    public function setAdssqldba($adssqldba) {
        $this->_adssqldba = $adssqldba;
    }

    /**
     * @return string
     */
    public function getDbpath() {
        return trim($this->_dbpath);
    }

    /**
     * @param string $dbpath
     */
    public function setDbpath($dbpath) {
        $this->_dbpath = $dbpath;
    }

    /**
     * 
     * @param string $actcomp
     * @param string $company
     * @param bool $nflg0
     * @param bool $qbstatus
     * @param bool $adssqldba
     * @param string $dbpath
     */
    public function __construct($actcomp, $company, $nflg0, $qbstatus, $adssqldba, $dbpath) {
        
        $this->_actcomp = $actcomp;
        $this->_company = $company;
        $this->_nflg0 = $nflg0;
        $this->_qbstatus = $qbstatus;
        $this->_adssqldba = $adssqldba;
        $this->_dbpath = $dbpath;        
    }

}
