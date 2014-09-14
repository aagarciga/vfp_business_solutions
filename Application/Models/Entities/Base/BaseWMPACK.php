<?php

/**
 * Project:  VFP Business Series
 * Copyright: 2014. VFP Business Solutions, LLC
 */

namespace Dandelion\MVC\Application\Models\Entities\Base;

/**
 * BaseWMPACK
 */
class BaseWMPACK {

	/**
	 * Private fields
	 */
    private static $_name = "WMPACK";

	/**
	 * Protected fields
	 */
	 
	/**
     * @var Char
     */
	protected $_packno;

	/**
     * @var Date
     */
	protected $_shpreldate;

	/**
     * @var Char
     */
	protected $_shipvname;

	/**
     * @var Char
     */
	protected $_shipvia;

	/**
     * @var Char
     */
	protected $_trackno;

	/**
     * @var Numeric
     */
	protected $_shipping;

	/**
     * @var Memo
     */
	protected $_shprelcomm;

	/**
     * @var Char
     */
	protected $_wmstatus;

	/**
     * @var Char
     */
	protected $_company;

	/**
     * @var Char
     */
	protected $_address;

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
	protected $_package;

	/**
     * @var Numeric
     */
	protected $_weight;

	/**
     * @var Numeric
     */
	protected $_insurance;

	/**
     * @var Char
     */
	protected $_service;

	/**
     * @var Char
     */
	protected $_qblistid;

	/**
     * @var Char
     */
	protected $_shprelno;

	/**
     * @var Char
     */
	protected $_ordnum;

	/**
     * @var Numeric
     */
	protected $_shptrk_id;

	/**
     * @var Date
     */
	protected $_shipdate;

	/**
     * @var Char
     */
	protected $_ca_id;

	/**
     * @var Numeric
     */
	protected $_pk_length;

	/**
     * @var Numeric
     */
	protected $_pk_width;

	/**
     * @var Numeric
     */
	protected $_pk_height;

	/**
     * @var Numeric
     */
	protected $_dim_weight;

	/**
     * @var Char
     */
	protected $_boxtype;

	/**
     * @var Logical
     */
	protected $_void;

	/**
     * @var Char
     */
	protected $_billcode;


	/**
	 * Getters
	 */
	
    /**
	 * @return Char
     */
	public function getPackno(){
		return $this->_packno;
	}

    /**
	 * @return Date
     */
	public function getShpreldate(){
		return $this->_shpreldate;
	}

    /**
	 * @return Char
     */
	public function getShipvname(){
		return $this->_shipvname;
	}

    /**
	 * @return Char
     */
	public function getShipvia(){
		return $this->_shipvia;
	}

    /**
	 * @return Char
     */
	public function getTrackno(){
		return $this->_trackno;
	}

    /**
	 * @return Numeric
     */
	public function getShipping(){
		return $this->_shipping;
	}

    /**
	 * @return Memo
     */
	public function getShprelcomm(){
		return $this->_shprelcomm;
	}

    /**
	 * @return Char
     */
	public function getWmstatus(){
		return $this->_wmstatus;
	}

    /**
	 * @return Char
     */
	public function getCompany(){
		return $this->_company;
	}

    /**
	 * @return Char
     */
	public function getAddress(){
		return $this->_address;
	}

    /**
	 * @return Char
     */
	public function getCity(){
		return $this->_city;
	}

    /**
	 * @return Char
     */
	public function getState(){
		return $this->_state;
	}

    /**
	 * @return Char
     */
	public function getZip(){
		return $this->_zip;
	}

    /**
	 * @return Char
     */
	public function getCountry(){
		return $this->_country;
	}

    /**
	 * @return Char
     */
	public function getPackage(){
		return $this->_package;
	}

    /**
	 * @return Numeric
     */
	public function getWeight(){
		return $this->_weight;
	}

    /**
	 * @return Numeric
     */
	public function getInsurance(){
		return $this->_insurance;
	}

    /**
	 * @return Char
     */
	public function getService(){
		return $this->_service;
	}

    /**
	 * @return Char
     */
	public function getQblistid(){
		return $this->_qblistid;
	}

    /**
	 * @return Char
     */
	public function getShprelno(){
		return $this->_shprelno;
	}

    /**
	 * @return Char
     */
	public function getOrdnum(){
		return $this->_ordnum;
	}

    /**
	 * @return Numeric
     */
	public function getShptrk_id(){
		return $this->_shptrk_id;
	}

    /**
	 * @return Date
     */
	public function getShipdate(){
		return $this->_shipdate;
	}

    /**
	 * @return Char
     */
	public function getCa_id(){
		return $this->_ca_id;
	}

    /**
	 * @return Numeric
     */
	public function getPk_length(){
		return $this->_pk_length;
	}

    /**
	 * @return Numeric
     */
	public function getPk_width(){
		return $this->_pk_width;
	}

    /**
	 * @return Numeric
     */
	public function getPk_height(){
		return $this->_pk_height;
	}

    /**
	 * @return Numeric
     */
	public function getDim_weight(){
		return $this->_dim_weight;
	}

    /**
	 * @return Char
     */
	public function getBoxtype(){
		return $this->_boxtype;
	}

    /**
	 * @return Logical
     */
	public function getVoid(){
		return $this->_void;
	}

    /**
	 * @return Char
     */
	public function getBillcode(){
		return $this->_billcode;
	}


	/**
	 * Setters
	 */
	
	/**
	 * @param Char
     */
	public function setPackno($value){
		$this->_packno = $value;
	}

	/**
	 * @param Date
     */
	public function setShpreldate($value){
		$this->_shpreldate = $value;
	}

	/**
	 * @param Char
     */
	public function setShipvname($value){
		$this->_shipvname = $value;
	}

	/**
	 * @param Char
     */
	public function setShipvia($value){
		$this->_shipvia = $value;
	}

	/**
	 * @param Char
     */
	public function setTrackno($value){
		$this->_trackno = $value;
	}

	/**
	 * @param Numeric
     */
	public function setShipping($value){
		$this->_shipping = $value;
	}

	/**
	 * @param Memo
     */
	public function setShprelcomm($value){
		$this->_shprelcomm = $value;
	}

	/**
	 * @param Char
     */
	public function setWmstatus($value){
		$this->_wmstatus = $value;
	}

	/**
	 * @param Char
     */
	public function setCompany($value){
		$this->_company = $value;
	}

	/**
	 * @param Char
     */
	public function setAddress($value){
		$this->_address = $value;
	}

	/**
	 * @param Char
     */
	public function setCity($value){
		$this->_city = $value;
	}

	/**
	 * @param Char
     */
	public function setState($value){
		$this->_state = $value;
	}

	/**
	 * @param Char
     */
	public function setZip($value){
		$this->_zip = $value;
	}

	/**
	 * @param Char
     */
	public function setCountry($value){
		$this->_country = $value;
	}

	/**
	 * @param Char
     */
	public function setPackage($value){
		$this->_package = $value;
	}

	/**
	 * @param Numeric
     */
	public function setWeight($value){
		$this->_weight = $value;
	}

	/**
	 * @param Numeric
     */
	public function setInsurance($value){
		$this->_insurance = $value;
	}

	/**
	 * @param Char
     */
	public function setService($value){
		$this->_service = $value;
	}

	/**
	 * @param Char
     */
	public function setQblistid($value){
		$this->_qblistid = $value;
	}

	/**
	 * @param Char
     */
	public function setShprelno($value){
		$this->_shprelno = $value;
	}

	/**
	 * @param Char
     */
	public function setOrdnum($value){
		$this->_ordnum = $value;
	}

	/**
	 * @param Numeric
     */
	public function setShptrk_id($value){
		$this->_shptrk_id = $value;
	}

	/**
	 * @param Date
     */
	public function setShipdate($value){
		$this->_shipdate = $value;
	}

	/**
	 * @param Char
     */
	public function setCa_id($value){
		$this->_ca_id = $value;
	}

	/**
	 * @param Numeric
     */
	public function setPk_length($value){
		$this->_pk_length = $value;
	}

	/**
	 * @param Numeric
     */
	public function setPk_width($value){
		$this->_pk_width = $value;
	}

	/**
	 * @param Numeric
     */
	public function setPk_height($value){
		$this->_pk_height = $value;
	}

	/**
	 * @param Numeric
     */
	public function setDim_weight($value){
		$this->_dim_weight = $value;
	}

	/**
	 * @param Char
     */
	public function setBoxtype($value){
		$this->_boxtype = $value;
	}

	/**
	 * @param Logical
     */
	public function setVoid($value){
		$this->_void = $value;
	}

	/**
	 * @param Char
     */
	public function setBillcode($value){
		$this->_billcode = $value;
	}


	/**
	 * Constructor
	 */
	public function __construct( $packno, $shpreldate, $shipvname, $shipvia, $trackno, $shipping, $shprelcomm, $wmstatus, $company, $address, $city, $state, $zip, $country, $package, $weight, $insurance, $service, $qblistid, $shprelno, $ordnum, $shptrk_id, $shipdate, $ca_id, $pk_length, $pk_width, $pk_height, $dim_weight, $boxtype, $void, $billcode ){
		$this->_packno = $packno;
		$this->_shpreldate = $shpreldate;
		$this->_shipvname = $shipvname;
		$this->_shipvia = $shipvia;
		$this->_trackno = $trackno;
		$this->_shipping = $shipping;
		$this->_shprelcomm = $shprelcomm;
		$this->_wmstatus = $wmstatus;
		$this->_company = $company;
		$this->_address = $address;
		$this->_city = $city;
		$this->_state = $state;
		$this->_zip = $zip;
		$this->_country = $country;
		$this->_package = $package;
		$this->_weight = $weight;
		$this->_insurance = $insurance;
		$this->_service = $service;
		$this->_qblistid = $qblistid;
		$this->_shprelno = $shprelno;
		$this->_ordnum = $ordnum;
		$this->_shptrk_id = $shptrk_id;
		$this->_shipdate = $shipdate;
		$this->_ca_id = $ca_id;
		$this->_pk_length = $pk_length;
		$this->_pk_width = $pk_width;
		$this->_pk_height = $pk_height;
		$this->_dim_weight = $dim_weight;
		$this->_boxtype = $boxtype;
		$this->_void = $void;
		$this->_billcode = $billcode;
		
    }

	public static function toString(){
        return self::$_name;
    }

}