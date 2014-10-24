<?php

/**
 * Project:  VFP Business Series
 * Copyright: 2014. VFP Business Solutions, LLC
 */

namespace Dandelion\MVC\Application\Controllers\Dashboard\Models;
class DashboardViewModel {
    
    // From SOHEAD
    protected $_ordnum;
    protected $_ponum;
    protected $_company;
    protected $_destino;
    protected $_ProStartDT;
    protected $_ProEndDT;
    protected $_sotypecode;
    protected $_mtrlstatus;
    protected $_jobstatus;
    protected $_inspectno;
    protected $_podate;
    protected $_qutno;
    protected $_Cstctid;
    
    /**
     * @return string
     */
    public function getOrdnum() {
        return $this->_ordnum;
    }
    
    /**
     * @return date
     */
    public function getPonum() {
        return $this->_ponum;
    }
    
    /**
     * @return string
     */
    public function getCompany() {
        return $this->_company;
    }
    
    /**
     * @return numeric
     */
    public function getDestino() {
        return $this->_destino;
    }
    
    /**
     * @return date
     */
    public function getProStartDT() {
        return $this->_ProStartDT;
    }
    
    /**
     * @return date
     */
    public function getProEndDT() {
        return $this->_ProEndDT;
    }
    
    /**
     * @return string
     */
    public function getSotypecode() {
        return $this->_sotypecode;
    }
    
    /**
     * @return string
     */
    public function getMtrlstatus() {
        return $this->_mtrlstatus;
    }
    
    /**
     * @return string
     */
    public function getJobstatus() {
        return $this->_jobstatus;
    }
    
    /**
     * Project Manager
     * @return string
     */
    public function getInspectno() {
        return $this->_inspectno;
    }
    
    /**
     * @return Date
     */
    public function getPodate() {
        return $this->_podate;
    }
    
    /**
     * @return number
     */
    public function getQutno() {
        return $this->_qutno;
    }
    
    /**
     * @return string
     */
    public function getCstctid() {
        return $this->_Cstctid;
    }
    
    
    /**
     * @param string
     */
    public function setOrdnum($value) {
        $this->_ordnum = $value;
    }
    
    /**
     * @param string
     */
    public function setPonum($value) {
        $this->_ponum = $value;
    }
        
    /**
     * @param string
     */
    public function setCompany($value) {
        $this->_company = $value;
    }
    
    /**
     * @param string
     */
    public function setDestino($value) {
        $this->_destino = $value;
    }
    
    /**
     * @param string
     */
    public function setProStartDT($value) {
        $this->_ProStartDT = $value;
    }
    
    /**
     * @param string
     */
    public function setProEndDT($value) {
        $this->_ProEndDT = $value;
    }
    
    /**
     * @param string
     */
    public function setSotypecode($value) {
        $this->_sotypecode = $value;
    }
    
    /**
     * @param string
     */
    public function setMtrlstatus($value) {
        $this->_mtrlstatus = $value;
    }
    
    /**
     * @param string
     */
    public function setJobstatus($value) {
        $this->_jobstatus = $value;
    }
    
    /**
     * Project Manager
     * @param string
     */
    public function setInspectno($value) {
        $this->_Inspectno = $value;
    }
    
    /**
     * @param string
     */
    public function setPodate($value) {
        $this->_podate = $value;
    }
    
    /**
     * @param string
     */
    public function setQutno($value) {
        $this->_qutno = $value;
    }
    
    /**
     * @param string
     */
    public function setCstctid($value) {
        $this->_Cstctid = $value;
    }

   /**
    * 
    * @param string $ordnum Sell Order Number
    * @param string $ponum Purchase Order Number
    * @param string $company Company
    * @param string $destino Vessel
    * @param date $ProStartDT Start Date
    * @param date $ProEndDT End Date
    * @param string $sotypecode Job Type
    * @param string $mtrlstatus Material Status
    * @param string $jobstatus Status
    * @param string $inspectno Project manager
    * @param date $podate Create Date
    * @param int $qutno Quote No
    * @param int $Cstctid Cost Center
    */
    public function __construct($ordnum, $ponum, $company, $destino, $ProStartDT, $ProEndDT, $sotypecode, $mtrlstatus , $jobstatus, $inspectno, $podate, $qutno, $Cstctid) {

        $this->_ordnum = trim($ordnum);
        $this->_ponum = trim($ponum);
        $this->_company = trim($company);
        $this->_destino = trim($destino);
        $this->_ProStartDT = $ProStartDT === "1899-12-30" ? "" : $ProStartDT;
        $this->_ProEndDT = $ProEndDT === "1899-12-30" ? "" : $ProEndDT;
        $this->_sotypecode = trim($sotypecode);
        $this->_mtrlstatus = trim($mtrlstatus);
        $this->_jobstatus = trim($jobstatus);
        $this->_inspectno = trim($inspectno);
        $this->_podate = $podate === "1899-12-30" ? "" : $podate;
        $this->_qutno = trim($qutno);
        $this->_Cstctid = trim($Cstctid);
        
    }
}
