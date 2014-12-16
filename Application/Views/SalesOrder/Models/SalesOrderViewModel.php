<?php

/**
 * Project:  VFP Business Series
 * Copyright: 2014. VFP Business Solutions, LLC
 */

namespace Dandelion\MVC\Application\Controllers\SalesOrder\Models;
class SalesOrderViewModel {
    
    protected $_ordnum;
    protected $_date;
    protected $_custno;

    
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
    public function getDate() {
        return $this->_date;
    } 
    
    /**
     * @param string
     */
    public function setDate($value) {
        $this->_date = $value;
    }
    
    /**
     * @return string
     */
    public function getCustno() {
        return $this->_custno;
    } 
    
    /**
     * @param string
     */
    public function setCustno($value) {
        $this->_custno = $value;
    }

    /**
     * 
     * @param type $ordnum
     * @param type $date
     */
    public function __construct($ordnum, $date, $custno) {
        $this->_ordnum = trim($ordnum);
        $this->_date = trim($date);
        $this->_custno = trim($custno);
    }
}
