<?php

/**
 * Project:  VFP Business Series
 * Copyright: 2014. VFP Business Solutions, LLC
 */

namespace Dandelion\MVC\Application\Models\Entities\Base;

/**
 * BaseICBARCODE
 */
class BaseICBARCODE {
    /**
     * Private fields
     */
    private static $_name = "ICBARCODE";
    
    /**
     * @var Char
     */
    protected $_docno;

    /**
     * @var Char
     */
    protected $_type;

    /**
     * @var Char
     */
    protected $_barcode;

    /**
     * @var Char
     */
    protected $_serialno;

    /**
     * @var Char
     */
    protected $_whs;

    /**
     * @var Char
     */
    protected $_itmcount;

    /**
     * @var Char
     */
    protected $_location;

    /**
     * @var Numeric
     */
    protected $_qty;

    /**
     * @var Char
     */
    protected $_vfpuser;

    /**
     * @var TimeStamp
     */
    protected $_date;

    /**
     * @var Logical
     */
    protected $_vfpdelete;

    /**
     * @var Logical
     */
    protected $_nflg0;

    /**
     * @var Logical
     */
    protected $_serialnf;

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
    protected $_fstation;

    /**
     * @var Char
     */
    protected $_fuserid;

    /**
     * @var Char
     */
    protected $_itemno;

    /**
     * @var Char
     */
    protected $_descrip;

    /**
     * @var Logical
     */
    protected $_duprecord;

    /**
     * @var Logical
     */
    protected $_duprecdel;

    /**
     * @var Char
     */
    protected $_locno;

    /**
     * @var Char
     */
    protected $_upccode;

    /**
     * @var Char
     */
    protected $_qblistid;

    /**
     * @var Char
     */
    protected $_whsno;

    /**
     * @var Char
     */
    protected $_pono;

    /**
     * @var Numeric
     */
    protected $_qtyscan;

    /**
     * @var Char
     */
    protected $_prostatus;

    /**
     * @var Numeric
     */
    protected $_qtytopo;

    /**
     * @var Date
     */
    protected $_updpodate;

    /**
     * @var Char
     */
    protected $_updpono;

    /**
     * Getters
     */

    /**
     * @return Char
     */
    public function getDocno() {
        return trim($this->_docno);
    }

    /**
     * @return Char
     */
    public function getType() {
        return trim($this->_type);
    }

    /**
     * @return Char
     */
    public function getBarcode() {
        return trim($this->_barcode);
    }

    /**
     * @return Char
     */
    public function getSerialno() {
        return trim($this->_serialno);
    }

    /**
     * @return Char
     */
    public function getWhs() {
        return trim($this->_whs);
    }

    /**
     * @return Char
     */
    public function getItmcount() {
        return trim($this->_itmcount);
    }

    /**
     * @return Char
     */
    public function getLocation() {
        return trim($this->_location);
    }

    /**
     * @return Numeric
     */
    public function getQty() {
        return trim($this->_qty);
    }

    /**
     * @return Char
     */
    public function getVfpuser() {
        return trim($this->_vfpuser);
    }

    /**
     * @return TimeStamp
     */
    public function getDate() {
        return trim($this->_date);
    }

    /**
     * @return Logical
     */
    public function getVfpdelete() {
        return $this->_vfpdelete;
    }

    /**
     * @return Logical
     */
    public function getNflg0() {
        return $this->_nflg0;
    }

    /**
     * @return Logical
     */
    public function getSerialnf() {
        return $this->_serialnf;
    }

    /**
     * @return Char
     */
    public function getFupdtime() {
        return trim($this->_fupdtime);
    }

    /**
     * @return Date
     */
    public function getFupddate() {
        return trim($this->_fupddate);
    }

    /**
     * @return Char
     */
    public function getFstation() {
        return trim($this->_fstation);
    }

    /**
     * @return Char
     */
    public function getFuserid() {
        return trim($this->_fuserid);
    }

    /**
     * @return Char
     */
    public function getItemno() {
        return trim($this->_itemno);
    }

    /**
     * @return Char
     */
    public function getDescrip() {
        return trim($this->_descrip);
    }

    /**
     * @return Logical
     */
    public function getDuprecord() {
        return trim($this->_duprecord);
    }

    /**
     * @return Logical
     */
    public function getDuprecdel() {
        return trim($this->_duprecdel);
    }

    /**
     * @return Char
     */
    public function getLocno() {
        return trim($this->_locno);
    }

    /**
     * @return Char
     */
    public function getUpccode() {
        return trim($this->_upccode);
    }

    /**
     * @return Char
     */
    public function getQblistid() {
        return trim($this->_qblistid);
    }

    /**
     * @return Char
     */
    public function getWhsno() {
        return trim($this->_whsno);
    }

    /**
     * @return Char
     */
    public function getPono() {
        return trim($this->_pono);
    }

    /**
     * @return Numeric
     */
    public function getQtyscan() {
        return trim($this->_qtyscan);
    }

    /**
     * @return Char
     */
    public function getProstatus() {
        return trim($this->_prostatus);
    }

    /**
     * @return Numeric
     */
    public function getQtytopo() {
        return trim($this->_qtytopo);
    }

    /**
     * @return Date
     */
    public function getUpdpodate() {
        return trim($this->_updpodate);
    }

    /**
     * @return Char
     */
    public function getUpdpono() {
        return trim($this->_updpono);
    }

    /**
     * Setters
     */

    /**
     * @param Char
     */
    public function setDocno($value) {
        $this->_docno = $value;
    }

    /**
     * @param Char
     */
    public function setType($value) {
        $this->_type = $value;
    }

    /**
     * @param Char
     */
    public function setBarcode($value) {
        $this->_barcode = $value;
    }

    /**
     * @param Char
     */
    public function setSerialno($value) {
        $this->_serialno = $value;
    }

    /**
     * @param Char
     */
    public function setWhs($value) {
        $this->_whs = $value;
    }

    /**
     * @param Char
     */
    public function setItmcount($value) {
        $this->_itmcount = $value;
    }

    /**
     * @param Char
     */
    public function setLocation($value) {
        $this->_location = $value;
    }

    /**
     * @param Numeric
     */
    public function setQty($value) {
        $this->_qty = $value;
    }

    /**
     * @param Char
     */
    public function setVfpuser($value) {
        $this->_vfpuser = $value;
    }

    /**
     * @param TimeStamp
     */
    public function setDate($value) {
        $this->_date = $value;
    }

    /**
     * @param Logical
     */
    public function setVfpdelete($value) {
        $this->_vfpdelete = $value;
    }

    /**
     * @param Logical
     */
    public function setNflg0($value) {
        $this->_nflg0 = $value;
    }

    /**
     * @param Logical
     */
    public function setSerialnf($value) {
        $this->_serialnf = $value;
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
    public function setFstation($value) {
        $this->_fstation = $value;
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
    public function setItemno($value) {
        $this->_itemno = $value;
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
    public function setDuprecord($value) {
        $this->_duprecord = $value;
    }

    /**
     * @param Logical
     */
    public function setDuprecdel($value) {
        $this->_duprecdel = $value;
    }

    /**
     * @param Char
     */
    public function setLocno($value) {
        $this->_locno = $value;
    }

    /**
     * @param Char
     */
    public function setUpccode($value) {
        $this->_upccode = $value;
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
    public function setWhsno($value) {
        $this->_whsno = $value;
    }

    /**
     * @param Char
     */
    public function setPono($value) {
        $this->_pono = $value;
    }

    /**
     * @param Numeric
     */
    public function setQtyscan($value) {
        $this->_qtyscan = $value;
    }

    /**
     * @param Char
     */
    public function setProstatus($value) {
        $this->_prostatus = $value;
    }

    /**
     * @param Numeric
     */
    public function setQtytopo($value) {
        $this->_qtytopo = $value;
    }

    /**
     * @param Date
     */
    public function setUpdpodate($value) {
        $this->_updpodate = $value;
    }

    /**
     * @param Char
     */
    public function setUpdpono($value) {
        $this->_updpono = $value;
    }

    /**
     * Constructor
     */
    public function __construct($docno, $type, $barcode, $serialno, $whs, $itmcount, $location, $qty, $vfpuser, $date, $vfpdelete, $nflg0, $serialnf, $fupdtime, $fupddate, $fstation, $fuserid, $itemno, $descrip, $duprecord, $duprecdel, $locno, $upccode, $qblistid, $whsno, $pono, $qtyscan, $prostatus, $qtytopo, $updpodate, $updpono) {
        $this->_docno = $docno;
        $this->_type = $type;
        $this->_barcode = $barcode;
        $this->_serialno = $serialno;
        $this->_whs = $whs;
        $this->_itmcount = $itmcount;
        $this->_location = $location;
        $this->_qty = $qty;
        $this->_vfpuser = $vfpuser;
        $this->_date = $date;
        $this->_vfpdelete = ($vfpdelete === null)? false : $vfpdelete;
        $this->_nflg0 = ($nflg0 === null)? false : $nflg0 ;
        $this->_serialnf = ($serialnf === null)? false : $serialnf ;
        $this->_fupdtime = $fupdtime;
        $this->_fupddate = $fupddate;
        $this->_fstation = $fstation;
        $this->_fuserid = $fuserid;
        $this->_itemno = $itemno;
        $this->_descrip = $descrip;
        $this->_duprecord = $duprecord;
        $this->_duprecdel = $duprecdel;
        $this->_locno = $locno;
        $this->_upccode = $upccode;
        $this->_qblistid = $qblistid;
        $this->_whsno = $whsno;
        $this->_pono = $pono;
        $this->_qtyscan = $qtyscan;
        $this->_prostatus = $prostatus;
        $this->_qtytopo = $qtytopo;
        $this->_updpodate = $updpodate;
        $this->_updpono = $updpono;
    }
    
    public static function toString() {
        return self::$_name;
    }

}
