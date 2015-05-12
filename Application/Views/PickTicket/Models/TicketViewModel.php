<?php

/**
 * Project:  VFP Business Series
 * Copyright: 2014. VFP Business Solutions, LLC
 */

namespace Dandelion\MVC\Application\Controllers\PickTicket\Models;
class TicketViewModel {
    
    private $_shprelno;
    private $_ordnum;
//    private $_shpreldate;
//    private $_batch_no;
    private $_qtyshprel;
    private $_qtypick;
    private $_qtypack;
//    private $_weight;
    private $_company;
    
    /**
     * @return string
     */
    public function getShprelno() {
        return $this->_shprelno;
    }
    
    /**
     * @return string
     */
    public function getOrdnum() {
        return $this->_ordnum;
    }
    
//    /**
//     * @return date
//     */
//    public function getShpreldate() {
//        return $this->_shpreldate;
//    }
//    
//    /**
//     * @return string
//     */
//    public function getBatch_no() {
//        return $this->_batch_no;
//    }
    
    /**
     * @return numeric
     */
    public function getQtyshprel() {
        return $this->_qtyshprel;
    }
    
    /**
     * @return numeric
     */
    public function getQtypick() {
        return $this->_qtypick;
    }
    
    /**
     * @return double
     */
//    public function getWeight() {
//        return $this->_weight;
//    }
    
    /**
     * @return string
     */
    public function getCompany() {
        return $this->_company;
    }
    
    /**
     * @return numeric
     */
    public function getQtypack() {
        return $this->_qtypack;
    }
    
    /**
     * @param string
     */
    public function setShprelno($value) {
        $this->_shprelno = $value;
    }
    
    /**
     * @param string
     */
    public function setOrdnum($value) {
        $this->_ordnum = $value;
    }
    
    /**
     * @param Date
     */
//    public function setShpreldate($value) {
//        $this->_shpreldate = $value;
//    }
//    
//    /**
//     * @param string
//     */
//    public function setBatch_no($value) {
//        $this->_batch_no = $value;
//    }
    
    /**
     * @param Numeric
     */
    public function setQtyshprel($value) {
        $this->_qtyshprel = $value;
    }
    
    /**
     * @param Numeric
     */
    public function setQtypick($value) {
        $this->_qtypick = $value;
    }
    
    /**
     * @param Numeric
     */
    public function setQtypack($value) {
        $this->_Qtypack = $value;
    }
    
    /**
     * @param Double
     */
//    public function setWeight($value) {
//        $this->_weight = $value;
//    }
    
    /**
     * @param string
     */
    public function setCompany($value) {
        $this->_company = $value;
    }
    
    /**
     * 
     * @param string $shprelno
     * @param string $ordnum
     * @param date $shpreldate
     * @param string $batch_no
     * @param numeric $qtyshprel
     * @param numeric $qtypick
     * @param numeric $qtypack
     * @param double $weight
     * @param string $company
     */
    public function __construct($shprelno, $ordnum, $qtyshprel, $qtypick, $qtypack, $company) {
        $this->_shprelno = trim($shprelno);
        $this->_ordnum = trim($ordnum);
//        $this->_shpreldate = trim($shpreldate);
//        $this->_batch_no = trim($batch_no);
        $this->_qtyshprel = intval($qtyshprel);
        $this->_qtypick = intval($qtypick);
        $this->_qtypack = intval($qtypack);
//        $this->_weight = trim($weight);
        $this->_company = trim($company);
    }
}
