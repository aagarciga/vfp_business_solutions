<?php

/**
 * Created by PhpStorm.
 * User: Victor
 * Date: 12/01/2016
 * Time: 15:03
 * Project:  VFP Business Series
 * Copyright: 2014. VFP Business Solutions, LLC
 */

namespace Dandelion\MVC\Application\Controllers\OnPurchaseOrderDashboard\Models;

/**
 * Created by: Victor
 * Class OnSalesOrderDashboardViewModel
 * @package Dandelion\MVC\Application\Controllers\OnSalesOrderDashboard\Models
 */
class OnPurchaseOrderDashboardViewModel
{
    /*
     * Retrieved from POITOP
     */
    protected $_pono;
    protected $_vendo;
    protected $_podate;
    protected $_qtyord;
    protected $_qtyrec;
    protected $_qtyleft;
    protected $_shipped;
    protected $_potype;

    /**
     * OnPurchaseOrderDashboardViewModel constructor.
     * @param $_pono
     * @param $_vendo
     * @param $_podate
     * @param $_qtyord
     * @param $_qtyrec
     * @param $_qtyleft
     * @param $_shipped
     * @param $_potype
     */
    public function __construct($pono, $vendo, $podate, $qtyord, $qtyrec, $qtyleft, $shipped, $potype)
    {
        $this->_pono = trim($pono);
        $this->_vendo = trim($vendo);
        $this->_podate = trim($podate);
        $this->_qtyord = trim($qtyord);
        $this->_qtyrec = trim($qtyrec);
        $this->_qtyleft = trim($qtyleft);
        $this->_shipped = trim($shipped);
        $this->_potype = trim($potype);
    }

    /**
     * @return mixed
     */
    public function getPono()
    {
        return $this->_pono;
    }

    /**
     * @param mixed $pono
     * @return OnPurchaseOrderDashboardViewModel
     */
    public function setPono($pono)
    {
        $this->_pono = $pono;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getVendo()
    {
        return $this->_vendo;
    }

    /**
     * @param mixed $vendo
     * @return OnPurchaseOrderDashboardViewModel
     */
    public function setVendo($vendo)
    {
        $this->_vendo = $vendo;
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
     * @return OnPurchaseOrderDashboardViewModel
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
     * @return OnPurchaseOrderDashboardViewModel
     */
    public function setQtyord($qtyord)
    {
        $this->_qtyord = $qtyord;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getQtyrec()
    {
        return $this->_qtyrec;
    }

    /**
     * @param mixed $qtyrec
     * @return OnPurchaseOrderDashboardViewModel
     */
    public function setQtyrec($qtyrec)
    {
        $this->_qtyrec = $qtyrec;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getQtyleft()
    {
        return $this->_qtyleft;
    }

    /**
     * @param mixed $qtyleft
     * @return OnPurchaseOrderDashboardViewModel
     */
    public function setQtyleft($qtyleft)
    {
        $this->_qtyleft = $qtyleft;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getShipped()
    {
        return $this->_shipped;
    }

    /**
     * @param mixed $shipped
     * @return OnPurchaseOrderDashboardViewModel
     */
    public function setShipped($shipped)
    {
        $this->_shipped = $shipped;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPotype()
    {
        return $this->_potype;
    }

    /**
     * @param mixed $potype
     * @return OnPurchaseOrderDashboardViewModel
     */
    public function setPotype($potype)
    {
        $this->_potype = $potype;
        return $this;
    }

}