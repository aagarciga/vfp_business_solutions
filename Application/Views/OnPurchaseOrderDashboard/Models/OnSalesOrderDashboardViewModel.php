<?php

/**
 * Created by PhpStorm.
 * User: Victor
 * Date: 12/01/2016
 * Time: 15:03
 * Project:  VFP Business Series
 * Copyright: 2014. VFP Business Solutions, LLC
 */

namespace Dandelion\MVC\Application\Controllers\OnSalesOrderDashboard\Models;

/**
 * Created by: Victor
 * Class OnSalesOrderDashboardViewModel
 * @package Dandelion\MVC\Application\Controllers\OnSalesOrderDashboard\Models
 */
class OnSalesOrderDashboardViewModel
{
    /*
     * Retrieved from SOITEM
     */
    protected $_ordnum;
    protected $_ponum;
    protected $_custno;
    protected $_company;
    protected $_podate;
    protected $_qtyord;
    protected $_qtyshp;
    protected $_bckord;
    protected $_qtyshp0;
    protected $_qtyshprel;
    protected $_shipdate;

    /**
     * @param $ordnum
     * @param $ponum
     * @param $custno
     * @param $company
     * @param $podate
     * @param $qtyord
     * @param $qtyshp
     * @param $bckord
     * @param $qtyshp0
     * @param $qtyshprel
     * @param $shipdate
     */
    public function __construct($ordnum, $ponum, $custno, $company, $podate, $qtyord, $qtyshp, $bckord, $qtyshp0, $qtyshprel, $shipdate)
    {
        $this->_ordnum = trim($ordnum);
        $this->_ponum = trim($ponum);
        $this->_custno = trim($custno);
        $this->_company = trim($company);
        $this->_podate = trim($podate);
        $this->_qtyord = trim($qtyord);
        $this->_qtyshp = trim($qtyshp);
        $this->_bckord = trim($bckord);
        $this->_qtyshp0 = trim($qtyshp0);
        $this->_qtyshprel = trim($qtyshprel);
        $this->_shipdate = trim($shipdate);
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
     * @return OnSalesOrderDashboardViewModel
     */
    public function setOrdnum($ordnum)
    {
        $this->_ordnum = $ordnum;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPonum()
    {
        return $this->_ponum;
    }

    /**
     * @param mixed $ponum
     * @return OnSalesOrderDashboardViewModel
     */
    public function setPonum($ponum)
    {
        $this->_ponum = $ponum;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCustno()
    {
        return $this->_custno;
    }

    /**
     * @param mixed $custno
     * @return OnSalesOrderDashboardViewModel
     */
    public function setCustno($custno)
    {
        $this->_custno = $custno;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCompany()
    {
        return $this->_company;
    }

    /**
     * @param mixed $company
     * @return OnSalesOrderDashboardViewModel
     */
    public function setCompany($company)
    {
        $this->_company = $company;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPodate()
    {
        return $this->_podate;
    }

    /**
     * @param mixed $podate
     * @return OnSalesOrderDashboardViewModel
     */
    public function setPodate($podate)
    {
        $this->_podate = $podate;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getQtyord()
    {
        return $this->_qtyord;
    }

    /**
     * @param mixed $qtyord
     * @return OnSalesOrderDashboardViewModel
     */
    public function setQtyord($qtyord)
    {
        $this->_qtyord = $qtyord;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getQtyshp()
    {
        return $this->_qtyshp;
    }

    /**
     * @param mixed $qtyshp
     * @return OnSalesOrderDashboardViewModel
     */
    public function setQtyshp($qtyshp)
    {
        $this->_qtyshp = $qtyshp;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getBckord()
    {
        return $this->_bckord;
    }

    /**
     * @param mixed $bckord
     * @return OnSalesOrderDashboardViewModel
     */
    public function setBckord($bckord)
    {
        $this->_bckord = $bckord;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getQtyshp0()
    {
        return $this->_qtyshp0;
    }

    /**
     * @param mixed $qtyshp0
     * @return OnSalesOrderDashboardViewModel
     */
    public function setQtyshp0($qtyshp0)
    {
        $this->_qtyshp0 = $qtyshp0;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getQtyshprel()
    {
        return $this->_qtyshprel;
    }

    /**
     * @param mixed $qtyshprel
     * @return OnSalesOrderDashboardViewModel
     */
    public function setQtyshprel($qtyshprel)
    {
        $this->_qtyshprel = $qtyshprel;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getShipdate()
    {
        return $this->_shipdate;
    }

    /**
     * @param mixed $shipdate
     * @return OnSalesOrderDashboardViewModel
     */
    public function setShipdate($shipdate)
    {
        $this->_shipdate = $shipdate;
        return $this;
    }


//    public function __construct($ordnum, $ponum, $custno, $company, $podate, $qtyord,
//                                $qtyshp, $bckord, $qtyshp0, $qtyshprel, $shipdate)
//
//    {
//        $this->_ordnum = trim($ordnum);
//        $this->_ponum = trim($ponum);
//        $this->_custno = trim($custno);
//        $this->_company = $company;
//        $this->_podate = $podate;
//        $this->_qtyord = $qtyord;
//        $this->_qtyshp = $qtyshp;
//        $this->_bckord = $bckord;
//        $this->_qtyshp0 = $qtyshp0;
//        $this->_qtyshprel = $qtyshprel;
//        $this->_shipdate = $shipdate;
//    }

}