<?php

/**
 * Project:  VFP Business Series
 * Copyright: 2014. VFP Business Solutions, LLC
 */

namespace Dandelion\MVC\Application\Models\Entities\Base;

/**
 * BaseSWEQUIP
 */
class BaseSWEQUIP {

	/**
	 * Private fields
	 */
    private static $_name = "SWEQUIP";

	/**
	 * Protected fields
	 */
	 
	/**
     * @var Char
     */
	protected $_equipid;

	/**
     * @var Char
     */
	protected $_descrip;

	/**
     * @var Char
     */
	protected $_itemno;

	/**
     * @var Char
     */
	protected $_model;

	/**
     * @var Char
     */
	protected $_man_code;

	/**
     * @var Char
     */
	protected $_vendno;

	/**
     * @var Char
     */
	protected $_serialno;

	/**
     * @var Memo
     */
	protected $_notes;

	/**
     * @var Char
     */
	protected $_srvagreno;

	/**
     * @var Date
     */
	protected $_installdte;

	/**
     * @var Date
     */
	protected $_warrantdte;

	/**
     * @var Char
     */
	protected $_prtypcode;

	/**
     * @var Char
     */
	protected $_custno;

	/**
     * @var Char
     */
	protected $_shiptono;

	/**
     * @var Logical
     */
	protected $_nflg0;

	/**
     * @var Date
     */
	protected $_manwarexp;

	/**
     * @var Date
     */
	protected $_custwarexp;

	/**
     * @var Char
     */
	protected $_make;

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
     * @var Logical
     */
	protected $_warranty;

	/**
     * @var Char
     */
	protected $_qblistid;

	/**
     * @var Char
     */
	protected $_toolboxid;

	/**
     * @var Char
     */
	protected $_ordnum;

	/**
     * @var Date
     */
	protected $_expdtein;

	/**
     * @var Date
     */
	protected $_daterec;

	/**
     * @var Char
     */
	protected $_status;

	/**
     * @var Char
     */
	protected $_order;

	/**
     * @var Char
     */
	protected $_assettag;

	/**
     * @var Char
     */
	protected $_voltage;

	/**
     * @var Char
     */
	protected $_equiptype;

	/**
     * @var Char
     */
	protected $_equipimage;

	/**
     * @var Char
     */
	protected $_assetdesc;

	/**
     * @var Char
     */
	protected $_locno;

	/**
	 * @var Char
	 */
	protected $_vesselid;


	/**
	 * Getters
	 */
	
    /**
	 * @return Char
     */
	public function getEquipid(){
		return $this->_equipid;
	}

    /**
	 * @return Char
     */
	public function getDescrip(){
		return $this->_descrip;
	}

    /**
	 * @return Char
     */
	public function getItemno(){
		return $this->_itemno;
	}

    /**
	 * @return Char
     */
	public function getModel(){
		return $this->_model;
	}

    /**
	 * @return Char
     */
	public function getMan_code(){
		return $this->_man_code;
	}

    /**
	 * @return Char
     */
	public function getVendno(){
		return $this->_vendno;
	}

    /**
	 * @return Char
     */
	public function getSerialno(){
		return $this->_serialno;
	}

    /**
	 * @return Memo
     */
	public function getNotes(){
		return $this->_notes;
	}

    /**
	 * @return Char
     */
	public function getSrvagreno(){
		return $this->_srvagreno;
	}

    /**
	 * @return Date
     */
	public function getInstalldte(){
		return $this->_installdte;
	}

    /**
	 * @return Date
     */
	public function getWarrantdte(){
		return $this->_warrantdte;
	}

    /**
	 * @return Char
     */
	public function getPrtypcode(){
		return $this->_prtypcode;
	}

    /**
	 * @return Char
     */
	public function getCustno(){
		return $this->_custno;
	}

    /**
	 * @return Char
     */
	public function getShiptono(){
		return $this->_shiptono;
	}

    /**
	 * @return Logical
     */
	public function getNflg0(){
		return $this->_nflg0;
	}

    /**
	 * @return Date
     */
	public function getManwarexp(){
		return $this->_manwarexp;
	}

    /**
	 * @return Date
     */
	public function getCustwarexp(){
		return $this->_custwarexp;
	}

    /**
	 * @return Char
     */
	public function getMake(){
		return $this->_make;
	}

    /**
	 * @return Char
     */
	public function getFupdtime(){
		return $this->_fupdtime;
	}

    /**
	 * @return Date
     */
	public function getFupddate(){
		return $this->_fupddate;
	}

    /**
	 * @return Char
     */
	public function getFstation(){
		return $this->_fstation;
	}

    /**
	 * @return Char
     */
	public function getFuserid(){
		return $this->_fuserid;
	}

    /**
	 * @return Logical
     */
	public function getWarranty(){
		return $this->_warranty;
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
	public function getToolboxid(){
		return $this->_toolboxid;
	}

    /**
	 * @return Char
     */
	public function getOrdnum(){
		return $this->_ordnum;
	}

    /**
	 * @return Date
     */
	public function getExpdtein(){
		return $this->_expdtein;
	}

    /**
	 * @return Date
     */
	public function getDaterec(){
		return $this->_daterec;
	}

    /**
	 * @return Char
     */
	public function getStatus(){
		return $this->_status;
	}

    /**
	 * @return Char
     */
	public function getOrder(){
		return $this->_order;
	}

    /**
	 * @return Char
     */
	public function getAssettag(){
		return $this->_assettag;
	}

    /**
	 * @return Char
     */
	public function getVoltage(){
		return $this->_voltage;
	}

    /**
	 * @return Char
     */
	public function getEquiptype(){
		return $this->_equiptype;
	}

    /**
	 * @return Char
     */
	public function getEquipimage(){
		return $this->_equipimage;
	}

    /**
	 * @return Char
     */
	public function getAssetdesc(){
		return $this->_assetdesc;
	}

    /**
	 * @return Char
     */
	public function getLocno(){
		return $this->_locno;
	}

	/**
	 * @return Char
	 */
	public function getVesselid(){
		return $this->_vesselid;
	}


	/**
	 * Setters
	 */
	
	/**
	 * @param Char
     */
	public function setEquipid($value){
		$this->_equipid = $value;
	}

	/**
	 * @param Char
     */
	public function setDescrip($value){
		$this->_descrip = $value;
	}

	/**
	 * @param Char
     */
	public function setItemno($value){
		$this->_itemno = $value;
	}

	/**
	 * @param Char
     */
	public function setModel($value){
		$this->_model = $value;
	}

	/**
	 * @param Char
     */
	public function setMan_code($value){
		$this->_man_code = $value;
	}

	/**
	 * @param Char
     */
	public function setVendno($value){
		$this->_vendno = $value;
	}

	/**
	 * @param Char
     */
	public function setSerialno($value){
		$this->_serialno = $value;
	}

	/**
	 * @param Memo
     */
	public function setNotes($value){
		$this->_notes = $value;
	}

	/**
	 * @param Char
     */
	public function setSrvagreno($value){
		$this->_srvagreno = $value;
	}

	/**
	 * @param Date
     */
	public function setInstalldte($value){
		$this->_installdte = $value;
	}

	/**
	 * @param Date
     */
	public function setWarrantdte($value){
		$this->_warrantdte = $value;
	}

	/**
	 * @param Char
     */
	public function setPrtypcode($value){
		$this->_prtypcode = $value;
	}

	/**
	 * @param Char
     */
	public function setCustno($value){
		$this->_custno = $value;
	}

	/**
	 * @param Char
     */
	public function setShiptono($value){
		$this->_shiptono = $value;
	}

	/**
	 * @param Logical
     */
	public function setNflg0($value){
		$this->_nflg0 = $value;
	}

	/**
	 * @param Date
     */
	public function setManwarexp($value){
		$this->_manwarexp = $value;
	}

	/**
	 * @param Date
     */
	public function setCustwarexp($value){
		$this->_custwarexp = $value;
	}

	/**
	 * @param Char
     */
	public function setMake($value){
		$this->_make = $value;
	}

	/**
	 * @param Char
     */
	public function setFupdtime($value){
		$this->_fupdtime = $value;
	}

	/**
	 * @param Date
     */
	public function setFupddate($value){
		$this->_fupddate = $value;
	}

	/**
	 * @param Char
     */
	public function setFstation($value){
		$this->_fstation = $value;
	}

	/**
	 * @param Char
     */
	public function setFuserid($value){
		$this->_fuserid = $value;
	}

	/**
	 * @param Logical
     */
	public function setWarranty($value){
		$this->_warranty = $value;
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
	public function setToolboxid($value){
		$this->_toolboxid = $value;
	}

	/**
	 * @param Char
     */
	public function setOrdnum($value){
		$this->_ordnum = $value;
	}

	/**
	 * @param Date
     */
	public function setExpdtein($value){
		$this->_expdtein = $value;
	}

	/**
	 * @param Date
     */
	public function setDaterec($value){
		$this->_daterec = $value;
	}

	/**
	 * @param Char
     */
	public function setStatus($value){
		$this->_status = $value;
	}

	/**
	 * @param Char
     */
	public function setOrder($value){
		$this->_order = $value;
	}

	/**
	 * @param Char
     */
	public function setAssettag($value){
		$this->_assettag = $value;
	}

	/**
	 * @param Char
     */
	public function setVoltage($value){
		$this->_voltage = $value;
	}

	/**
	 * @param Char
     */
	public function setEquiptype($value){
		$this->_equiptype = $value;
	}

	/**
	 * @param Char
     */
	public function setEquipimage($value){
		$this->_equipimage = $value;
	}

	/**
	 * @param Char
     */
	public function setAssetdesc($value){
		$this->_assetdesc = $value;
	}

	/**
	 * @param Char
     */
	public function setLocno($value){
		$this->_locno = $value;
	}

	/**
	 * @param Char
	 */
	public function setVesselid($value){
		$this->_vesselid= $value;
	}


	/**
	 * Constructor
	 */
	public function __construct( $equipid, $descrip, $itemno, $model, $man_code, $vendno, $serialno, $notes, $srvagreno, $installdte, $warrantdte, $prtypcode, $custno, $shiptono, $nflg0, $manwarexp, $custwarexp, $make, $fupdtime, $fupddate, $fstation, $fuserid, $warranty, $qblistid, $toolboxid, $ordnum, $expdtein, $daterec, $status, $order, $assettag, $voltage, $equiptype, $equipimage, $assetdesc, $locno, $vesselid ){
		$this->_equipid = $equipid;
		$this->_descrip = $descrip;
		$this->_itemno = $itemno;
		$this->_model = $model;
		$this->_man_code = $man_code;
		$this->_vendno = $vendno;
		$this->_serialno = $serialno;
		$this->_notes = $notes;
		$this->_srvagreno = $srvagreno;
		$this->_installdte = $installdte;
		$this->_warrantdte = $warrantdte;
		$this->_prtypcode = $prtypcode;
		$this->_custno = $custno;
		$this->_shiptono = $shiptono;
		$this->_nflg0 = $nflg0;
		$this->_manwarexp = $manwarexp;
		$this->_custwarexp = $custwarexp;
		$this->_make = $make;
		$this->_fupdtime = $fupdtime;
		$this->_fupddate = $fupddate;
		$this->_fstation = $fstation;
		$this->_fuserid = $fuserid;
		$this->_warranty = $warranty;
		$this->_qblistid = $qblistid;
		$this->_toolboxid = $toolboxid;
		$this->_ordnum = $ordnum;
		$this->_expdtein = $expdtein;
		$this->_daterec = $daterec;
		$this->_status = $status;
		$this->_order = $order;
		$this->_assettag = $assettag;
		$this->_voltage = $voltage;
		$this->_equiptype = $equiptype;
		$this->_equipimage = $equipimage;
		$this->_assetdesc = $assetdesc;
		$this->_locno = $locno;
		$this->_vesselid = $vesselid;
    }

	public static function toString(){
        return self::$_name;
    }

}