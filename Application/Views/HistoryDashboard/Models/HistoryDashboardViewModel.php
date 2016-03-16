<?php
/**
 * User: Victor
 * Date: 12/01/2016
 * Time: 15:03
 * Project:  VFP Business Series
 * Copyright: 2014. VFP Business Solutions, LLC
 */

namespace Dandelion\MVC\Application\Controllers\HistoryDashboard\Models;

/**
 * Created by: Victor
 * Class HistoryDashboardViewModel
 * @package Dandelion\MVC\Application\Controllers\OnSalesOrderDashboard\Models
 */
class HistoryDashboardViewModel
{
    protected $_eduipid;
    protected $_ordnum;
    protected $_inspectno;
    protected $_installdte;
    protected $_expdtein;
    protected $_daterec;

    /**
     * HistoryDashboardViewModel constructor.
     * @param $eduipid
     * @param $ordnum
     * @param $inspectno
     * @param $installdte
     * @param $expdtein
     * @param $daterec
     */
    public function __construct($eduipid, $ordnum, $inspectno, $installdte, $expdtein, $daterec)
    {
        $this->_eduipid = $eduipid;
        $this->_ordnum = $ordnum;
        $this->_inspectno = $inspectno;
        $this->_installdte = $installdte;
        $this->_expdtein = $expdtein;
        $this->_daterec = $daterec;
    }

    /**
     * @return mixed
     */
    public function getEduipid()
    {
        return $this->_eduipid;
    }

    /**
     * @param mixed $eduipid
     * @return HistoryDashboardViewModel
     */
    public function setEduipid($eduipid)
    {
        $this->_eduipid = $eduipid;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getOrdnum()
    {
        return $this->_ordnum;
    }

    /**
     * @param mixed $ordnum
     * @return HistoryDashboardViewModel
     */
    public function setOrdnum($ordnum)
    {
        $this->_ordnum = $ordnum;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getInspectno()
    {
        return $this->_inspectno;
    }

    /**
     * @param mixed $inspectno
     * @return HistoryDashboardViewModel
     */
    public function setInspectno($inspectno)
    {
        $this->_inspectno = $inspectno;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getInstalldte()
    {
        return $this->_installdte;
    }

    /**
     * @param mixed $installdte
     * @return HistoryDashboardViewModel
     */
    public function setInstalldte($installdte)
    {
        $this->_installdte = $installdte;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getExpdtein()
    {
        return $this->_expdtein;
    }

    /**
     * @param mixed $expdtein
     * @return HistoryDashboardViewModel
     */
    public function setExpdtein($expdtein)
    {
        $this->_expdtein = $expdtein;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDaterec()
    {
        return $this->_daterec;
    }

    /**
     * @param mixed $daterec
     * @return HistoryDashboardViewModel
     */
    public function setDaterec($daterec)
    {
        $this->_daterec = $daterec;
        return $this;
    }
}