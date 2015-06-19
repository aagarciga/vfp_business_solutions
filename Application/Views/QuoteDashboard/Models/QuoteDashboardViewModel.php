<?php

/**
 * Project:  VFP Business Series
 * Copyright: 2014. VFP Business Solutions, LLC
 */

namespace Dandelion\MVC\Application\Controllers\QuoteDashboard\Models;
class QuoteDashboardViewModel {
    
    // From QUHSTH
    protected $_qutno;
    protected $_projno;
    protected $_company;
    protected $_vesselid;
    protected $_sotypecode;
    protected $_jobdescrip;
    protected $_status;
    protected $_qutdate;
    protected $_ordnum;
    protected $_cstctid;
    protected $_projectManager1;
    protected $_projectManager2;
    
    
    /**
     * @return string
     */
    public function getQutno() {
        return $this->_qutno;
    }
    
    /**
     * @param string
     */
    public function setQutno($value) {
        $this->_qutno = $value;
    }
    
    /**
     * @return string
     */
    public function getProjno() {
        return $this->_projno;
    }
    
    /**
     * @param string
     */
    public function setProjno($value) {
        $this->_projno = $value;
    }
    
    /**
     * @return string
     */
    public function getCompany() {
        return $this->_company;
    }
    
    /**
     * @param string
     */
    public function setCompany($value) {
        $this->_company = $value;
    }
    
    /**
     * @return string
     */
    public function getVesselid() {
        return $this->_vesselid;
    }
    
    /**
     * @param string
     */
    public function setVesselid($value) {
        $this->_vesselid = $value;
    }
    
    /**
     * @return string
     */
    public function getSotypecode() {
        return $this->_sotypecode;
    }
    
    /**
     * @param string
     */
    public function setSotypecode($value) {
        $this->_sotypecode = $value;
    }
    
    /**
     * @return string
     */
    public function getJobdescrip() {
        return $this->_jobdescrip;
    }
    
    /**
     * @param string
     */
    public function setJobdescrip($value) {
        $this->_jobdescrip = $value;
    }
    
    /**
     * @return string
     */
    public function getStatus() {
        return $this->_status;
    }
    
    /**
     * @param string
     */
    public function setStatus($value) {
        $this->_status = $value;
    }
    
    /**
     * @return string
     */
    public function getQudate() {
        return $this->_qutdate;
    }
    
    /**
     * @param string
     */
    public function setQudate($value) {
        $this->_qutdate = $value;
    }
    
    /**
     * @return string
     */
    public function getOrdnum() {
        return $this->_ordnum;
    }
    
    /**
     * @param string
     */
    public function setOrdnum($value) {
        $this->_ordnum = $value;
    }
    
    /**
     * @return string
     */
    public function getCstctid() {
        return $this->_cstctid;
    }
    
    /**
     * @param string
     */
    public function setCstctid($value) {
        $this->_cstctid = $value;
    }
    
    /**
     * @return string
     */
    public function getProjectManager1() {
        return $this->_projectManager1;
    }
    
    /**
     * @param string
     */
    public function setProjectManager1($value) {
        $this->_projectManager1 = $value;
    }
    
    /**
     * @return string
     */
    public function getProjectManager2() {
        return $this->_projectManager2;
    }
    
    /**
     * @param string
     */
    public function setProjectManager2($value) {
        $this->_projectManager2 = $value;
    }
    
    /**
     * 
     * @param type $qutno Quote Number
     * @param type $projno Project Number
     * @param type $company Company
     * @param type $vesselid Vessel
     * @param type $sotypecode Job Type
     * @param type $jobdescrip Description
     * @param type $status Status
     * @param type $qutdate Create Date
     * @param type $ordnum Sell Order Number
     * @param type $cstctid Cost Center
     * @param type $projectManager1 Project Manager 1
     * @param type $projectManager2 Project Manager 2
     */
    public function __construct($qutno, $projno, $company, $vesselid, $sotypecode, $jobdescrip, $status, $qutdate, $ordnum, $cstctid, $projectManager1, $projectManager2) {

        $this->_qutno = trim($qutno);
        $this->_projno = trim($projno);
        $this->_company = trim($company);
        $this->_vesselid = trim($vesselid);
        $this->_sotypecode = trim($sotypecode);
        $this->_jobdescrip = trim($jobdescrip);
        $this->_status = trim($status);
        $this->_qutdate = $qutdate === "1899-12-30" ? "" : $qutdate;
        $this->_ordnum = trim($ordnum);
        $this->_cstctid = trim($cstctid);
        $this->_projectManager1 = trim($projectManager1);
        $this->_projectManager2 = trim($projectManager2);
        
    }
}
