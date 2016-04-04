<?php

/**
 * Project:  VFP Business Series
 * Copyright: 2014. VFP Business Solutions, LLC
 */

namespace Dandelion\MVC\Application\Models\Entities\Base;

/**
 * BaseSWEQUIPD
 */
class BaseSWEQUIPD
{

    /**
     * Private fields
     */
    private static $_name = "SWEQUIPD";

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
    protected $_ordnum;

    /**
     * @var Char
     */
    protected $_inspectno;

    /**
     * @var Date
     */
    protected $_installdte;

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
    protected $_qblistid;

    /**
     * @var Char
     */
    protected $_qbtxlineid;

    /**
     * @var Logical
     */
    protected $_nflg0;


    /**
     * Getters
     */

    /**
     * @return Char
     */
    public function getEquipid()
    {
        return $this->_equipid;
    }

    /**
     * @return Char
     */
    public function getOrdnum()
    {
        return $this->_ordnum;
    }

    /**
     * @return Char
     */
    public function getInspectno()
    {
        return $this->_inspectno;
    }

    /**
     * @return Date
     */
    public function getInstalldte()
    {
        return $this->_installdte;
    }

    /**
     * @return Date
     */
    public function getExpdtein()
    {
        return $this->_expdtein;
    }

    /**
     * @return Date
     */
    public function getDaterec()
    {
        return $this->_daterec;
    }

    /**
     * @return Char
     */
    public function getFupdtime()
    {
        return $this->_fupdtime;
    }

    /**
     * @return Date
     */
    public function getFupddate()
    {
        return $this->_fupddate;
    }

    /**
     * @return Char
     */
    public function getFstation()
    {
        return $this->_fstation;
    }

    /**
     * @return Char
     */
    public function getFuserid()
    {
        return $this->_fuserid;
    }

    /**
     * @return Char
     */
    public function getQblistid()
    {
        return $this->_qblistid;
    }

    /**
     * @return Char
     */
    public function getQbtxlineid()
    {
        return $this->_qbtxlineid;
    }

    /**
     * @return Logical
     */
    public function getNflg0()
    {
        return $this->_nflg0;
    }


    /**
     * Setters
     */

    /**
     * @param Char
     */
    public function setEquipid($value)
    {
        $this->_equipid = $value;
    }

    /**
     * @param Char
     */
    public function setOrdnum($value)
    {
        $this->_ordnum = $value;
    }

    /**
     * @param Char
     */
    public function setInspectno($value)
    {
        $this->_inspectno = $value;
    }

    /**
     * @param Date
     */
    public function setInstalldte($value)
    {
        $this->_installdte = $value;
    }

    /**
     * @param Date
     */
    public function setExpdtein($value)
    {
        $this->_expdtein = $value;
    }

    /**
     * @param Date
     */
    public function setDaterec($value)
    {
        $this->_daterec = $value;
    }

    /**
     * @param Char
     */
    public function setFupdtime($value)
    {
        $this->_fupdtime = $value;
    }

    /**
     * @param Date
     */
    public function setFupddate($value)
    {
        $this->_fupddate = $value;
    }

    /**
     * @param Char
     */
    public function setFstation($value)
    {
        $this->_fstation = $value;
    }

    /**
     * @param Char
     */
    public function setFuserid($value)
    {
        $this->_fuserid = $value;
    }

    /**
     * @param Char
     */
    public function setQblistid($value)
    {
        $this->_qblistid = $value;
    }

    /**
     * @param Char
     */
    public function setQbtxlineid($value)
    {
        $this->_qbtxlineid = $value;
    }

    /**
     * @param Logical
     */
    public function setNflg0($value)
    {
        $this->_nflg0 = $value;
    }


    /**
     * Constructor
     */
    public function __construct($equipid, $ordnum, $inspectno, $installdte, $expdtein, $daterec, $fupdtime, $fupddate, $fstation, $fuserid, $qblistid, $qbtxlineid, $nflg0)
    {
        $this->_equipid = $equipid;
        $this->_ordnum = $ordnum;
        $this->_inspectno = $inspectno;
        $this->_installdte = $installdte;
        $this->_expdtein = $expdtein;
        $this->_daterec = $daterec;
        $this->_fupdtime = $fupdtime;
        $this->_fupddate = $fupddate;
        $this->_fstation = $fstation;
        $this->_fuserid = $fuserid;
        $this->_qblistid = $qblistid;
        $this->_qbtxlineid = $qbtxlineid;
        $this->_nflg0 = $nflg0;

    }

    public static function toString()
    {
        return self::$_name;
    }

}