<?php

/**
 * Created by PhpStorm.
 * User: Victor
 * Date: 12/01/2016
 * Time: 15:03
 * Project:  VFP Business Series
 * Copyright: 2014. VFP Business Solutions, LLC
 */

namespace Dandelion\MVC\Application\Controllers\ItemDashboard\Models;

/**
 * Create by Victor
 */
class ItemDashboardViewModel
{
    /*
     * Retrieved from ICPARM
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

    public function __construct($ordnum, $ponum, $custno, $company, $podate, $qtyord,
                                $qtyshp, $bckord, $qtyshp0, $qtyshprel, $shipdate)

    {
        $this->_ordnum = trim($ordnum);
        $this->_ponum = trim($ponum);
        $this->_custno = trim($custno);
        $this->_company = $company;
        $this->_podate = $podate;
        $this->_qtyord = $qtyord;
        $this->_qtyshp = $qtyshp;
        $this->_bckord = $bckord;
        $this->_qtyshp0 = $qtyshp0;
        $this->_qtyshprel = $qtyshprel;
        $this->_shipdate = $shipdate;
    }

    public function getOrdnum()
    {
        return $this->_ordnum;
    }

    public function getPonum()
    {
        return $this->_ponum;
    }

    public function getCustno()
    {
        return $this->_custno;
    }

    public function getCompany()
    {
        return $this->_company;
    }

    public function getPodate()
    {
        return $this->_podate;
    }

    public function getQtyord()
    {
        return $this->_qtyord;
    }

    public function getQtyshp()
    {
        return $this->_qtyshp;
    }

    public function getBckord()
    {
        return $this->_bckord;
    }

    public function getQtyshp0()
    {
        return $this->_qtyshp0;
    }

    public function getQtyshprel()
    {
        return $this->_qtyshprel;
    }

    public function  getShipdate()
    {
        return $this->_shipdate;
    }
}