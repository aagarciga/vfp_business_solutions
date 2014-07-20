<?php

/**
 * Project:  VFP Business Series
 * Copyright: 2014. VFP Business Solutions, LLC
 */

namespace Dandelion\MVC\Application\Models\Entities\Base;

/**
 * BaseICWHS
 */
class BaseICWHS {

    /**
     * Private fields
     */
    private static $_name = "ICWHS";

    /**
     * Protected fields
     */

    /**
     * @var Char
     */
    protected $_whsno;

    /**
     * @var Char
     */
    protected $_descrip;

    /**
     * @var Logical
     */
    protected $_nflg0;

    /**
     * @var Logical
     */
    protected $_reswhs;

    /**
     * @var Char
     */
    protected $_address1;

    /**
     * @var Char
     */
    protected $_address2;

    /**
     * @var Char
     */
    protected $_city;

    /**
     * @var Char
     */
    protected $_state;

    /**
     * @var Char
     */
    protected $_zip;

    /**
     * @var Char
     */
    protected $_country;

    /**
     * @var Char
     */
    protected $_phone;

    /**
     * @var Char
     */
    protected $_faxnum;

    /**
     * @var Char
     */
    protected $_email;

    /**
     * @var Char
     */
    protected $_website;

    /**
     * @var Char
     */
    protected $_contact;

    /**
     * @var Char
     */
    protected $_title;

    /**
     * @var Memo
     */
    protected $_notes;

    /**
     * @var Memo
     */
    protected $_picturede;

    /**
     * @var Char
     */
    protected $_ipaddress;

    /**
     * @var Date
     */
    protected $_lastoed;

    /**
     * @var Date
     */
    protected $_lasteod;

    /**
     * @var Date
     */
    protected $_nexteod;

    /**
     * @var Numeric
     */
    protected $_arbatch_no;

    /**
     * @var Date
     */
    protected $_batchdate;

    /**
     * @var Logical
     */
    protected $_consign;

    /**
     * @var Char
     */
    protected $_poprefix;

    /**
     * @var Logical
     */
    protected $_includepo;

    /**
     * @var Logical
     */
    protected $_servtruck;

    /**
     * @var Char
     */
    protected $_gltaxacct;

    /**
     * @var Logical
     */
    protected $_posstore;

    /**
     * @var Logical
     */
    protected $_isactive;

    /**
     * @var Char
     */
    protected $_qblistid;

    /**
     * Getters
     */

    /**
     * @return Char
     */
    public function getWhsno() {
        return $this->_whsno;
    }

    /**
     * @return Char
     */
    public function getDescrip() {
        return $this->_descrip;
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
    public function getReswhs() {
        return $this->_reswhs;
    }

    /**
     * @return Char
     */
    public function getAddress1() {
        return $this->_address1;
    }

    /**
     * @return Char
     */
    public function getAddress2() {
        return $this->_address2;
    }

    /**
     * @return Char
     */
    public function getCity() {
        return $this->_city;
    }

    /**
     * @return Char
     */
    public function getState() {
        return $this->_state;
    }

    /**
     * @return Char
     */
    public function getZip() {
        return $this->_zip;
    }

    /**
     * @return Char
     */
    public function getCountry() {
        return $this->_country;
    }

    /**
     * @return Char
     */
    public function getPhone() {
        return $this->_phone;
    }

    /**
     * @return Char
     */
    public function getFaxnum() {
        return $this->_faxnum;
    }

    /**
     * @return Char
     */
    public function getEmail() {
        return $this->_email;
    }

    /**
     * @return Char
     */
    public function getWebsite() {
        return $this->_website;
    }

    /**
     * @return Char
     */
    public function getContact() {
        return $this->_contact;
    }

    /**
     * @return Char
     */
    public function getTitle() {
        return $this->_title;
    }

    /**
     * @return Memo
     */
    public function getNotes() {
        return $this->_notes;
    }

    /**
     * @return Memo
     */
    public function getPicturede() {
        return $this->_picturede;
    }

    /**
     * @return Char
     */
    public function getIpaddress() {
        return $this->_ipaddress;
    }

    /**
     * @return Date
     */
    public function getLastoed() {
        return $this->_lastoed;
    }

    /**
     * @return Date
     */
    public function getLasteod() {
        return $this->_lasteod;
    }

    /**
     * @return Date
     */
    public function getNexteod() {
        return $this->_nexteod;
    }

    /**
     * @return Numeric
     */
    public function getArbatch_no() {
        return $this->_arbatch_no;
    }

    /**
     * @return Date
     */
    public function getBatchdate() {
        return $this->_batchdate;
    }

    /**
     * @return Logical
     */
    public function getConsign() {
        return $this->_consign;
    }

    /**
     * @return Char
     */
    public function getPoprefix() {
        return $this->_poprefix;
    }

    /**
     * @return Logical
     */
    public function getIncludepo() {
        return $this->_includepo;
    }

    /**
     * @return Logical
     */
    public function getServtruck() {
        return $this->_servtruck;
    }

    /**
     * @return Char
     */
    public function getGltaxacct() {
        return $this->_gltaxacct;
    }

    /**
     * @return Logical
     */
    public function getPosstore() {
        return $this->_posstore;
    }

    /**
     * @return Logical
     */
    public function getIsactive() {
        return $this->_isactive;
    }

    /**
     * @return Char
     */
    public function getQblistid() {
        return $this->_qblistid;
    }

    /**
     * Setters
     */

    /**
     * @param Char
     */
    public function setWhsno($value) {
        $this->_whsno = $value;
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
    public function setNflg0($value) {
        $this->_nflg0 = $value;
    }

    /**
     * @param Logical
     */
    public function setReswhs($value) {
        $this->_reswhs = $value;
    }

    /**
     * @param Char
     */
    public function setAddress1($value) {
        $this->_address1 = $value;
    }

    /**
     * @param Char
     */
    public function setAddress2($value) {
        $this->_address2 = $value;
    }

    /**
     * @param Char
     */
    public function setCity($value) {
        $this->_city = $value;
    }

    /**
     * @param Char
     */
    public function setState($value) {
        $this->_state = $value;
    }

    /**
     * @param Char
     */
    public function setZip($value) {
        $this->_zip = $value;
    }

    /**
     * @param Char
     */
    public function setCountry($value) {
        $this->_country = $value;
    }

    /**
     * @param Char
     */
    public function setPhone($value) {
        $this->_phone = $value;
    }

    /**
     * @param Char
     */
    public function setFaxnum($value) {
        $this->_faxnum = $value;
    }

    /**
     * @param Char
     */
    public function setEmail($value) {
        $this->_email = $value;
    }

    /**
     * @param Char
     */
    public function setWebsite($value) {
        $this->_website = $value;
    }

    /**
     * @param Char
     */
    public function setContact($value) {
        $this->_contact = $value;
    }

    /**
     * @param Char
     */
    public function setTitle($value) {
        $this->_title = $value;
    }

    /**
     * @param Memo
     */
    public function setNotes($value) {
        $this->_notes = $value;
    }

    /**
     * @param Memo
     */
    public function setPicturede($value) {
        $this->_picturede = $value;
    }

    /**
     * @param Char
     */
    public function setIpaddress($value) {
        $this->_ipaddress = $value;
    }

    /**
     * @param Date
     */
    public function setLastoed($value) {
        $this->_lastoed = $value;
    }

    /**
     * @param Date
     */
    public function setLasteod($value) {
        $this->_lasteod = $value;
    }

    /**
     * @param Date
     */
    public function setNexteod($value) {
        $this->_nexteod = $value;
    }

    /**
     * @param Numeric
     */
    public function setArbatch_no($value) {
        $this->_arbatch_no = $value;
    }

    /**
     * @param Date
     */
    public function setBatchdate($value) {
        $this->_batchdate = $value;
    }

    /**
     * @param Logical
     */
    public function setConsign($value) {
        $this->_consign = $value;
    }

    /**
     * @param Char
     */
    public function setPoprefix($value) {
        $this->_poprefix = $value;
    }

    /**
     * @param Logical
     */
    public function setIncludepo($value) {
        $this->_includepo = $value;
    }

    /**
     * @param Logical
     */
    public function setServtruck($value) {
        $this->_servtruck = $value;
    }

    /**
     * @param Char
     */
    public function setGltaxacct($value) {
        $this->_gltaxacct = $value;
    }

    /**
     * @param Logical
     */
    public function setPosstore($value) {
        $this->_posstore = $value;
    }

    /**
     * @param Logical
     */
    public function setIsactive($value) {
        $this->_isactive = $value;
    }

    /**
     * @param Char
     */
    public function setQblistid($value) {
        $this->_qblistid = $value;
    }

    /**
     * Constructor
     * @param string $whsno
     * @param string $descrip
     * @param bool $nflg0
     * @param bool $reswhs
     * @param string $address1
     * @param string $address2
     * @param string $city
     * @param string $state
     * @param string $zip
     * @param string $country
     * @param string $phone
     * @param string $faxnum
     * @param string $email
     * @param string $website
     * @param string $contact
     * @param string $title
     * @param string $notes
     * @param string $picturede
     * @param string $ipaddress
     * @param date $lastoed
     * @param date $lasteod
     * @param date $nexteod
     * @param int $arbatch_no
     * @param date $batchdate
     * @param bool $consign
     * @param string $poprefix
     * @param bool $includepo
     * @param bool $servtruck
     * @param string $gltaxacct
     * @param bool $posstore
     * @param bool $isactive
     * @param string $qblistid
     */
    public function __construct($whsno, $descrip, $nflg0, $reswhs, $address1, $address2, $city, $state, $zip, $country, $phone, $faxnum, $email, $website, $contact, $title, $notes, $picturede, $ipaddress, $lastoed, $lasteod, $nexteod, $arbatch_no, $batchdate, $consign, $poprefix, $includepo, $servtruck, $gltaxacct, $posstore, $isactive, $qblistid) {
        $this->_whsno = $whsno;
        $this->_descrip = $descrip;
        $this->_nflg0 = ($nflg0 === null) ? false : $nflg0;
        $this->_reswhs = ($reswhs === null) ? false : $reswhs;
        $this->_address1 = $address1;
        $this->_address2 = $address2;
        $this->_city = $city;
        $this->_state = $state;
        $this->_zip = $zip;
        $this->_country = $country;
        $this->_phone = $phone;
        $this->_faxnum = $faxnum;
        $this->_email = $email;
        $this->_website = $website;
        $this->_contact = $contact;
        $this->_title = $title;
        $this->_notes = $notes;
        $this->_picturede = $picturede;
        $this->_ipaddress = $ipaddress;
        $this->_lastoed = $lastoed;
        $this->_lasteod = $lasteod;
        $this->_nexteod = $nexteod;
        $this->_arbatch_no = $arbatch_no;
        $this->_batchdate = $batchdate;
        $this->_consign = ($consign === null) ? false : $consign;
        $this->_poprefix = $poprefix;
        $this->_includepo = ($includepo === null) ? false : $includepo;
        $this->_servtruck = ($servtruck === null) ? false : $servtruck;
        $this->_gltaxacct = $gltaxacct;
        $this->_posstore = ($posstore === null) ? false : $posstore;
        $this->_isactive = ($isactive === null) ? false : $isactive;
        $this->_qblistid = $qblistid;
    }

    public static function toString() {
        return self::$_name;
    }

}
