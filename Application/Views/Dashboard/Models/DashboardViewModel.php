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
    protected $_sotype;
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
    public function getSotype() {
        return $this->_sotype;
    }
    
    /**
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
    public function setSotype($value) {
        $this->_Sotype = $value;
    }
    
    /**
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
    * @param type $ordnum
    * @param type $ponum
    * @param type $company
    * @param type $destino
    * @param type $ProStartDT
    * @param type $ProEndDT
    * @param type $sotype
    * @param type $inspectno
    * @param type $podate
    * @param type $qutno
    * @param type $Cstctid
    */
    public function __construct($ordnum, $ponum, $company, $destino, $ProStartDT, $ProEndDT, $sotype, $inspectno, $podate, $qutno, $Cstctid) {

        $this->_ordnum = trim($ordnum);
        $this->_ponum = trim($ponum);
        $this->_company = trim($company);
        $this->_destino = trim($destino);
        $this->_ProStartDT = trim($ProStartDT);
        $this->_ProEndDT = trim($ProEndDT);
        $this->_sotype = trim($sotype);
        $this->_inspectno = trim($inspectno);
        $this->_podate = trim($podate);
        $this->_qutno = intval($qutno);
        $this->_Cstctid = intval($Cstctid);
        
    }
}
