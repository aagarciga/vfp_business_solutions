<?php
/**
 * User: Victor
 * Date: 12/01/2016
 * Time: 15:03
 * Project:  VFP Business Series
 * Copyright: 2014. VFP Business Solutions, LLC
 */

namespace Dandelion\MVC\Application\Controllers\HistoryDashboard\Models;


use Dandelion\MVC\Application\Tools\Dictionary;

/**
 * Created by: Victor
 * Class HistoryDashboardViewModel
 * @package Dandelion\MVC\Application\Controllers\OnSalesOrderDashboard\Models
 */
class HistoryDashboardViewModel extends Dictionary
{
    /**
     * HistoryDashboardViewModel constructor.
     * @param $eduipid
     * @param $ordnum
     * @param $inspectno
     * @param $installdte
     * @param $expdtein
     * @param $daterec
     */
    public function __construct($equipid, $ordnum, $inspectno, $installdte, $expdtein, $daterec)
    {
        parent::__construct();
        $this->equipid = $equipid;
        $this->ordnum = $ordnum;
        $this->inspectno = $inspectno;
        $this->installdte = $installdte;
        $this->expdtein = $expdtein;
        $this->daterec = $daterec;
    }

    /**
     * @return mixed
     */
    public function getEquipid()
    {
        return $this->equipid;
    }

    /**
     * @param mixed $eduipid
     * @return HistoryDashboardViewModel
     */
    public function setEquipid($eduipid)
    {
        $this->equipid = $eduipid;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getOrdnum()
    {
        return $this->ordnum;
    }

    /**
     * @param mixed $ordnum
     * @return HistoryDashboardViewModel
     */
    public function setOrdnum($ordnum)
    {
        $this->ordnum = $ordnum;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getInspectno()
    {
        return $this->inspectno;
    }

    /**
     * @param mixed $inspectno
     * @return HistoryDashboardViewModel
     */
    public function setInspectno($inspectno)
    {
        $this->inspectno = $inspectno;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getInstalldte()
    {
        return $this->installdte;
    }

    /**
     * @param mixed $installdte
     * @return HistoryDashboardViewModel
     */
    public function setInstalldte($installdte)
    {
        $this->installdte = $installdte;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getExpdtein()
    {
        return $this->expdtein;
    }

    /**
     * @param mixed $expdtein
     * @return HistoryDashboardViewModel
     */
    public function setExpdtein($expdtein)
    {
        $this->expdtein = $expdtein;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDaterec()
    {
        return $this->daterec;
    }

    /**
     * @param mixed $daterec
     * @return HistoryDashboardViewModel
     */
    public function setDaterec($daterec)
    {
        $this->daterec = $daterec;
        return $this;
    }
}