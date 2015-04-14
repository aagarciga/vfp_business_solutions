<?php

/**
 * Project:  VFP Business Series
 * Copyright: 2014. VFP Business Solutions, LLC
 */

namespace Dandelion\MVC\Application\Models\Entities\Base;

/**
 * BaseSWINSP
 */
class BaseSWINSP {

    /**
     * Private fields
     */
    private static $_name = "SWINSP";

    /**
     * Protected fields
     */

    /**
     * @var Char
     */
    protected $_inspectno;

    /**
     * @var Char
     */
    protected $_inspectnm;

    /**
     * @var Memo
     */
    protected $_notes;

    /**
     * @var Logical
     */
    protected $_nflg0;

    /**
     * @var Char
     */
    protected $_truckcode;

    /**
     * @var Date
     */
    protected $_dtehire;

    /**
     * @var Date
     */
    protected $_dteraise;

    /**
     * @var Char
     */
    protected $_laborcode;

    /**
     * @var Numeric
     */
    protected $_payrate;

    /**
     * @var Logical
     */
    protected $_active;

    /**
     * @var Char
     */
    protected $_whsno;

    /**
     * @var Logical
     */
    protected $_schedule;

    /**
     * @var Char
     */
    protected $_insurance;

    /**
     * @var Char
     */
    protected $_driverlic;

    /**
     * @var Char
     */
    protected $_workcomp;

    /**
     * @var Char
     */
    protected $_techemail;

    /**
     * @var Logical
     */
    protected $_woemaildel;

    /**
     * @var Memo
     */
    protected $_picture;

    /**
     * @var Char
     */
    protected $_itemnolab;

    /**
     * @var Char
     */
    protected $_itemnotrv;

    /**
     * @var Char
     */
    protected $_itemnoofc;

    /**
     * @var Char
     */
    protected $_itemnostd;

    /**
     * @var Char
     */
    protected $_itemnogen;

    /**
     * @var Numeric
     */
    protected $_paytravel;

    /**
     * @var Numeric
     */
    protected $_payoffice;

    /**
     * @var Numeric
     */
    protected $_paystandb;

    /**
     * @var Numeric
     */
    protected $_paygeneral;

    /**
     * @var Numeric
     */
    protected $_billtravel;

    /**
     * @var Numeric
     */
    protected $_billoffice;

    /**
     * @var Numeric
     */
    protected $_billstandb;

    /**
     * @var Numeric
     */
    protected $_billgenerl;

    /**
     * @var Char
     */
    protected $_huwtravel;

    /**
     * @var Char
     */
    protected $_huwoffice;

    /**
     * @var Char
     */
    protected $_huwstandby;

    /**
     * @var Char
     */
    protected $_huwgeneral;

    /**
     * @var Numeric
     */
    protected $_billrate;

    /**
     * @var Char
     */
    protected $_huwrate;

    /**
     * @var Char
     */
    protected $_passportno;

    /**
     * @var Char
     */
    protected $_vendno;

    /**
     * @var Char
     */
    protected $_vendor;

    /**
     * @var Date
     */
    protected $_techdob;

    /**
     * @var Date
     */
    protected $_ppissue;

    /**
     * @var Date
     */
    protected $_ppexpire;

    /**
     * @var Char
     */
    protected $_visano;

    /**
     * @var Date
     */
    protected $_vsaissue;

    /**
     * @var Date
     */
    protected $_vsaexpire;

    /**
     * @var Char
     */
    protected $_qblistid;
    
    /**
     * @var Char
     */
    protected $_techim;

    /**
     * Getters
     */

    /**
     * @return Char
     */
    public function getInspectno() {
        return $this->_inspectno;
    }

    /**
     * @return Char
     */
    public function getInspectnm() {
        return $this->_inspectnm;
    }

    /**
     * @return Memo
     */
    public function getNotes() {
        return $this->_notes;
    }

    /**
     * @return Logical
     */
    public function getNflg0() {
        return $this->_nflg0;
    }

    /**
     * @return Char
     */
    public function getTruckcode() {
        return $this->_truckcode;
    }

    /**
     * @return Date
     */
    public function getDtehire() {
        return $this->_dtehire;
    }

    /**
     * @return Date
     */
    public function getDteraise() {
        return $this->_dteraise;
    }

    /**
     * @return Char
     */
    public function getLaborcode() {
        return $this->_laborcode;
    }

    /**
     * @return Numeric
     */
    public function getPayrate() {
        return $this->_payrate;
    }

    /**
     * @return Logical
     */
    public function getActive() {
        return $this->_active;
    }

    /**
     * @return Char
     */
    public function getWhsno() {
        return $this->_whsno;
    }

    /**
     * @return Logical
     */
    public function getSchedule() {
        return $this->_schedule;
    }

    /**
     * @return Char
     */
    public function getInsurance() {
        return $this->_insurance;
    }

    /**
     * @return Char
     */
    public function getDriverlic() {
        return $this->_driverlic;
    }

    /**
     * @return Char
     */
    public function getWorkcomp() {
        return $this->_workcomp;
    }

    /**
     * @return Char
     */
    public function getTechemail() {
        return $this->_techemail;
    }

    /**
     * @return Logical
     */
    public function getWoemaildel() {
        return $this->_woemaildel;
    }

    /**
     * @return Memo
     */
    public function getPicture() {
        return $this->_picture;
    }

    /**
     * @return Char
     */
    public function getItemnolab() {
        return $this->_itemnolab;
    }

    /**
     * @return Char
     */
    public function getItemnotrv() {
        return $this->_itemnotrv;
    }

    /**
     * @return Char
     */
    public function getItemnoofc() {
        return $this->_itemnoofc;
    }

    /**
     * @return Char
     */
    public function getItemnostd() {
        return $this->_itemnostd;
    }

    /**
     * @return Char
     */
    public function getItemnogen() {
        return $this->_itemnogen;
    }

    /**
     * @return Numeric
     */
    public function getPaytravel() {
        return $this->_paytravel;
    }

    /**
     * @return Numeric
     */
    public function getPayoffice() {
        return $this->_payoffice;
    }

    /**
     * @return Numeric
     */
    public function getPaystandb() {
        return $this->_paystandb;
    }

    /**
     * @return Numeric
     */
    public function getPaygeneral() {
        return $this->_paygeneral;
    }

    /**
     * @return Numeric
     */
    public function getBilltravel() {
        return $this->_billtravel;
    }

    /**
     * @return Numeric
     */
    public function getBilloffice() {
        return $this->_billoffice;
    }

    /**
     * @return Numeric
     */
    public function getBillstandb() {
        return $this->_billstandb;
    }

    /**
     * @return Numeric
     */
    public function getBillgenerl() {
        return $this->_billgenerl;
    }

    /**
     * @return Char
     */
    public function getHuwtravel() {
        return $this->_huwtravel;
    }

    /**
     * @return Char
     */
    public function getHuwoffice() {
        return $this->_huwoffice;
    }

    /**
     * @return Char
     */
    public function getHuwstandby() {
        return $this->_huwstandby;
    }

    /**
     * @return Char
     */
    public function getHuwgeneral() {
        return $this->_huwgeneral;
    }

    /**
     * @return Numeric
     */
    public function getBillrate() {
        return $this->_billrate;
    }

    /**
     * @return Char
     */
    public function getHuwrate() {
        return $this->_huwrate;
    }

    /**
     * @return Char
     */
    public function getPassportno() {
        return $this->_passportno;
    }

    /**
     * @return Char
     */
    public function getVendno() {
        return $this->_vendno;
    }

    /**
     * @return Char
     */
    public function getVendor() {
        return $this->_vendor;
    }

    /**
     * @return Date
     */
    public function getTechdob() {
        return $this->_techdob;
    }

    /**
     * @return Date
     */
    public function getPpissue() {
        return $this->_ppissue;
    }

    /**
     * @return Date
     */
    public function getPpexpire() {
        return $this->_ppexpire;
    }

    /**
     * @return Char
     */
    public function getVisano() {
        return $this->_visano;
    }

    /**
     * @return Date
     */
    public function getVsaissue() {
        return $this->_vsaissue;
    }

    /**
     * @return Date
     */
    public function getVsaexpire() {
        return $this->_vsaexpire;
    }

    /**
     * @return Char
     */
    public function getQblistid() {
        return $this->_qblistid;
    }
    
    /**
     * @return Char
     */
    public function getTechim() {
        return $this->_techim;
    }
    
    /**
     * Setters
     */

    /**
     * @param Char
     */
    public function setInspectno($value) {
        $this->_inspectno = $value;
    }

    /**
     * @param Char
     */
    public function setInspectnm($value) {
        $this->_inspectnm = $value;
    }

    /**
     * @param Memo
     */
    public function setNotes($value) {
        $this->_notes = $value;
    }

    /**
     * @param Logical
     */
    public function setNflg0($value) {
        $this->_nflg0 = $value;
    }

    /**
     * @param Char
     */
    public function setTruckcode($value) {
        $this->_truckcode = $value;
    }

    /**
     * @param Date
     */
    public function setDtehire($value) {
        $this->_dtehire = $value;
    }

    /**
     * @param Date
     */
    public function setDteraise($value) {
        $this->_dteraise = $value;
    }

    /**
     * @param Char
     */
    public function setLaborcode($value) {
        $this->_laborcode = $value;
    }

    /**
     * @param Numeric
     */
    public function setPayrate($value) {
        $this->_payrate = $value;
    }

    /**
     * @param Logical
     */
    public function setActive($value) {
        $this->_active = $value;
    }

    /**
     * @param Char
     */
    public function setWhsno($value) {
        $this->_whsno = $value;
    }

    /**
     * @param Logical
     */
    public function setSchedule($value) {
        $this->_schedule = $value;
    }

    /**
     * @param Char
     */
    public function setInsurance($value) {
        $this->_insurance = $value;
    }

    /**
     * @param Char
     */
    public function setDriverlic($value) {
        $this->_driverlic = $value;
    }

    /**
     * @param Char
     */
    public function setWorkcomp($value) {
        $this->_workcomp = $value;
    }

    /**
     * @param Char
     */
    public function setTechemail($value) {
        $this->_techemail = $value;
    }

    /**
     * @param Logical
     */
    public function setWoemaildel($value) {
        $this->_woemaildel = $value;
    }

    /**
     * @param Memo
     */
    public function setPicture($value) {
        $this->_picture = $value;
    }

    /**
     * @param Char
     */
    public function setItemnolab($value) {
        $this->_itemnolab = $value;
    }

    /**
     * @param Char
     */
    public function setItemnotrv($value) {
        $this->_itemnotrv = $value;
    }

    /**
     * @param Char
     */
    public function setItemnoofc($value) {
        $this->_itemnoofc = $value;
    }

    /**
     * @param Char
     */
    public function setItemnostd($value) {
        $this->_itemnostd = $value;
    }

    /**
     * @param Char
     */
    public function setItemnogen($value) {
        $this->_itemnogen = $value;
    }

    /**
     * @param Numeric
     */
    public function setPaytravel($value) {
        $this->_paytravel = $value;
    }

    /**
     * @param Numeric
     */
    public function setPayoffice($value) {
        $this->_payoffice = $value;
    }

    /**
     * @param Numeric
     */
    public function setPaystandb($value) {
        $this->_paystandb = $value;
    }

    /**
     * @param Numeric
     */
    public function setPaygeneral($value) {
        $this->_paygeneral = $value;
    }

    /**
     * @param Numeric
     */
    public function setBilltravel($value) {
        $this->_billtravel = $value;
    }

    /**
     * @param Numeric
     */
    public function setBilloffice($value) {
        $this->_billoffice = $value;
    }

    /**
     * @param Numeric
     */
    public function setBillstandb($value) {
        $this->_billstandb = $value;
    }

    /**
     * @param Numeric
     */
    public function setBillgenerl($value) {
        $this->_billgenerl = $value;
    }

    /**
     * @param Char
     */
    public function setHuwtravel($value) {
        $this->_huwtravel = $value;
    }

    /**
     * @param Char
     */
    public function setHuwoffice($value) {
        $this->_huwoffice = $value;
    }

    /**
     * @param Char
     */
    public function setHuwstandby($value) {
        $this->_huwstandby = $value;
    }

    /**
     * @param Char
     */
    public function setHuwgeneral($value) {
        $this->_huwgeneral = $value;
    }

    /**
     * @param Numeric
     */
    public function setBillrate($value) {
        $this->_billrate = $value;
    }

    /**
     * @param Char
     */
    public function setHuwrate($value) {
        $this->_huwrate = $value;
    }

    /**
     * @param Char
     */
    public function setPassportno($value) {
        $this->_passportno = $value;
    }

    /**
     * @param Char
     */
    public function setVendno($value) {
        $this->_vendno = $value;
    }

    /**
     * @param Char
     */
    public function setVendor($value) {
        $this->_vendor = $value;
    }

    /**
     * @param Date
     */
    public function setTechdob($value) {
        $this->_techdob = $value;
    }

    /**
     * @param Date
     */
    public function setPpissue($value) {
        $this->_ppissue = $value;
    }

    /**
     * @param Date
     */
    public function setPpexpire($value) {
        $this->_ppexpire = $value;
    }

    /**
     * @param Char
     */
    public function setVisano($value) {
        $this->_visano = $value;
    }

    /**
     * @param Date
     */
    public function setVsaissue($value) {
        $this->_vsaissue = $value;
    }

    /**
     * @param Date
     */
    public function setVsaexpire($value) {
        $this->_vsaexpire = $value;
    }

    /**
     * @param Char
     */
    public function setQblistid($value) {
        $this->_qblistid = $value;
    }
    
    /**
     * @param Logical
     */
    public function setTechim($value) {
        $this->_techim = $value;
    }
    
    /**
     * 
     * @param type $inspectno
     * @param type $inspectnm
     * @param type $notes
     * @param type $nflg0
     * @param type $truckcode
     * @param type $dtehire
     * @param type $dteraise
     * @param type $laborcode
     * @param type $payrate
     * @param logical $active
     * @param type $whsno
     * @param type $schedule
     * @param type $insurance
     * @param type $driverlic
     * @param type $workcomp
     * @param type $techemail
     * @param type $woemaildel
     * @param type $picture
     * @param type $itemnolab
     * @param type $itemnotrv
     * @param type $itemnoofc
     * @param type $itemnostd
     * @param type $itemnogen
     * @param type $paytravel
     * @param type $payoffice
     * @param type $paystandb
     * @param type $paygeneral
     * @param type $billtravel
     * @param type $billoffice
     * @param type $billstandb
     * @param type $billgenerl
     * @param type $huwtravel
     * @param type $huwoffice
     * @param type $huwstandby
     * @param type $huwgeneral
     * @param type $billrate
     * @param type $huwrate
     * @param type $passportno
     * @param type $vendno
     * @param type $vendor
     * @param type $techdob
     * @param type $ppissue
     * @param type $ppexpire
     * @param type $visano
     * @param type $vsaissue
     * @param type $vsaexpire
     * @param type $qblistid
     * @param logical $techim
     */
    public function __construct($inspectno, $inspectnm, $notes, $nflg0, $truckcode, $dtehire, $dteraise, $laborcode, $payrate, $active, $whsno, $schedule, $insurance, $driverlic, $workcomp, $techemail, $woemaildel, $picture, $itemnolab, $itemnotrv, $itemnoofc, $itemnostd, $itemnogen, $paytravel, $payoffice, $paystandb, $paygeneral, $billtravel, $billoffice, $billstandb, $billgenerl, $huwtravel, $huwoffice, $huwstandby, $huwgeneral, $billrate, $huwrate, $passportno, $vendno, $vendor, $techdob, $ppissue, $ppexpire, $visano, $vsaissue, $vsaexpire, $qblistid, $techim) {
        $this->_inspectno = $inspectno;
        $this->_inspectnm = $inspectnm;
        $this->_notes = $notes;
        $this->_nflg0 = $nflg0;
        $this->_truckcode = $truckcode;
        $this->_dtehire = $dtehire;
        $this->_dteraise = $dteraise;
        $this->_laborcode = $laborcode;
        $this->_payrate = $payrate;
        $this->_active = $active;
        $this->_whsno = $whsno;
        $this->_schedule = $schedule;
        $this->_insurance = $insurance;
        $this->_driverlic = $driverlic;
        $this->_workcomp = $workcomp;
        $this->_techemail = $techemail;
        $this->_woemaildel = $woemaildel;
        $this->_picture = $picture;
        $this->_itemnolab = $itemnolab;
        $this->_itemnotrv = $itemnotrv;
        $this->_itemnoofc = $itemnoofc;
        $this->_itemnostd = $itemnostd;
        $this->_itemnogen = $itemnogen;
        $this->_paytravel = $paytravel;
        $this->_payoffice = $payoffice;
        $this->_paystandb = $paystandb;
        $this->_paygeneral = $paygeneral;
        $this->_billtravel = $billtravel;
        $this->_billoffice = $billoffice;
        $this->_billstandb = $billstandb;
        $this->_billgenerl = $billgenerl;
        $this->_huwtravel = $huwtravel;
        $this->_huwoffice = $huwoffice;
        $this->_huwstandby = $huwstandby;
        $this->_huwgeneral = $huwgeneral;
        $this->_billrate = $billrate;
        $this->_huwrate = $huwrate;
        $this->_passportno = $passportno;
        $this->_vendno = $vendno;
        $this->_vendor = $vendor;
        $this->_techdob = $techdob;
        $this->_ppissue = $ppissue;
        $this->_ppexpire = $ppexpire;
        $this->_visano = $visano;
        $this->_vsaissue = $vsaissue;
        $this->_vsaexpire = $vsaexpire;
        $this->_qblistid = $qblistid;
        $this->_techim = $techim;
    }

    public static function toString() {
        return self::$_name;
    }

}
