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
    protected $_dbsvrtype;
    protected $_dbuser;
    protected $_dbpass;

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
     * @param string $dbsvrtype
     */
    public function setDbsvrtype($dbsvrtype) {
        $this->_dbsvrtype = $dbsvrtype;
    }
    
    /**
     * @return string
     */
    public function getDbsvrtype() {
        return trim($this->_dbsvrtype);
    }
    
    /**
     * @param string $dbuser
     */
    public function setDbuser($dbuser) {
        $this->_dbuser = $dbuser;
    }
    
    /**
     * @return string
     */
    public function getDbuser() {
        return trim($this->_dbuser);
    }
    
    /**
     * @param string $dbpass
     */
    public function setDbpass($dbpass) {
        $this->_dbpass = $dbpass;
    }
    
    /**
     * @return string
     */
    public function getDbpass() {
        return trim($this->_dbpass);
    }

    /**
     * 
     * @param type $actcomp
     * @param type $company
     * @param type $nflg0
     * @param type $qbstatus
     * @param type $adssqldba
     * @param type $dbpath
     * @param type $dbsvrtype
     * @param type $dbuser
     * @param type $dbpass
     */
    public function __construct($actcomp, $company, $nflg0, $qbstatus, $adssqldba, $dbpath, $dbsvrtype, $dbuser, $dbpass) {
        
        $this->_actcomp = $actcomp;
        $this->_company = $company;
        $this->_nflg0 = $nflg0;
        $this->_qbstatus = $qbstatus;
        $this->_adssqldba = $adssqldba;
        $this->_dbpath = $dbpath;  
        $this->_dbsvrtype = $dbsvrtype;
        $this->_dbuser = $dbuser;
        $this->_dbpass = $dbpass;
    }

}
