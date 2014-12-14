<?php

/**
 * Project:  VFP Business Series
 * Copyright: 2014. VFP Business Solutions, LLC
 */

namespace Dandelion\MVC\Application\Controllers\SalesOrder\Models;
class SalesOrderItemViewModel {
    
    // From SOITEM
    protected $_ordnum;
    protected $_itmcount;
    protected $_itemno;
    protected $_itmwhs;
    protected $_descrip;
    protected $_unit;
    protected $_qtyord;
    protected $_qtyshp;
    protected $_unitprice;
    protected $_extprice;
    
    /**
     * @return string
     */
    public function getOrdnum() {
        return $this->_ordnum;
    }
    
    /**
     * @return string
     */
    public function getItmcount() {
        return $this->_itmcount;
    }
    
    /**
     * @return string
     */
    public function getItemno() {
        return $this->_itemno;
    }
    
    /**
     * @return string
     */
    public function getItmwhs() {
        return $this->_itmwhs;
    }
    
    /**
     * @return string
     */
    public function getDescrip() {
        return $this->_descrip;
    }
    
    /**
     * @return string
     */
    public function getUnit() {
        return $this->_unit;
    }
    
    /**
     * @return string
     */
    public function getQtyord() {
        return $this->_qtyord;
    }
    
    /**
     * @return string
     */
    public function getQtyshp() {
        return $this->_qtyshp;
    }
   
    /**
     * @return string
     */
    public function getUnitprice() {
        return $this->_unitprice;
    }
    
    /**
     * @return string
     */
    public function getExtprice() {
        return $this->_extprice;
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
    public function setItmcount($value) {
        $this->_itmcount = $value;
    }
    
    /**
     * @param string
     */
    public function setItemno($value) {
        $this->_itemno = $value;
    }
    
    /**
     * @param string
     */
    public function setItmwhs($value) {
        $this->_itmwhs = $value;
    }
    
    /**
     * @param string
     */
    public function setDescrip($value) {
        $this->_descrip = $value;
    }
    
    /**
     * @param string
     */
    public function setUnit($value) {
        $this->_unit = $value;
    }
    
    /**
     * @param string
     */
    public function setQtyord($value) {
        $this->_qtyord = $value;
    }
    
    /**
     * @param string
     */
    public function setQtyshp($value) {
        $this->_qtyshp = $value;
    }
    
    /**
     * @param string
     */
    public function setUnitprice($value) {
        $this->_unitprice = $value;
    }
    
    /**
     * @param string
     */
    public function setExtprice($value) {
        $this->_extprice = $value;
    }
    
    /**
     * 
     * @param type $ordnum
     * @param type $itmcount
     * @param type $itemno
     * @param type $itmwhs
     * @param type $descrip
     * @param type $unit
     * @param type $qtyord
     * @param type $qtyshp
     * @param type $unitprice
     * @param type $extprice
     */
    public function __construct($ordnum, $itmcount, $itemno, $itmwhs, $descrip, $unit, $qtyord, $qtyshp , $unitprice, $extprice) {

        $this->_ordnum = trim($ordnum);
        $this->_itmcount = trim($itmcount);
        $this->_itemno = trim($itemno);
        $this->_itmwhs = trim($itmwhs);
        $this->_descrip = trim($descrip);
        $this->_unit = trim($unit);
        $this->_qtyord = trim($qtyord);
        $this->_qtyshp = trim($qtyshp);
        $this->_unitprice = trim($unitprice);
        $this->_extprice = trim($extprice);
        
    }
}
