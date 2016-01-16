<?php

/**
 * Project:  VFP Business Series
 * Copyright: 2014. VFP Business Solutions, LLC
 */

namespace Dandelion\MVC\Application\Controllers\InventoryDashboard\Models;
class InventoryDashboardViewModel
{

    /*
     * Retrieved from ICPARM
     */
    protected $_itemno;
    protected $_itmwhs;
    protected $_descrip;
    protected $_onhand;
    protected $_onorder;
    protected $_committed;

    /**
     * InventoryDashboardViewModel constructor.
     * @param $itemno
     * @param $itmwhs
     * @param $descrip
     * @param $onhand
     * @param $onorder
     * @param $committed
     */
    public function __construct($itemno, $itmwhs, $descrip, $onhand, $onorder, $committed)
    {
        /*
         * In order to clean VM constructor parameters use trim function for all data types
         * and treat date type like:
         *
         * $this->_date = $date === "1899-12-30" ? "" : $date;
         */

        $this->_itemno = trim($itemno);
        $this->_itmwhs = trim($itmwhs);
        $this->_descrip = utf8_encode(trim($descrip));
        $this->_onhand = number_format(trim($onhand));
        $this->_onorder = number_format(trim($onorder));
        $this->_committed = number_format(trim($committed));
    }

    /*
     * Getters and Setters with Fluent Setters generation
     */

    /**
     * @return mixed
     */
    public function getItemno()
    {
        return $this->_itemno;
    }

    /**
     * @param mixed $itemno
     * @return InventoryDashboardViewModel
     */
    public function setItemno($itemno)
    {
        $this->_itemno = $itemno;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getItmwhs()
    {
        return $this->_itmwhs;
    }

    /**
     * @param mixed $itmwhs
     * @return InventoryDashboardViewModel
     */
    public function setItmwhs($itmwhs)
    {
        $this->_itmwhs = $itmwhs;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDescrip()
    {
        return $this->_descrip;
    }

    /**
     * @param mixed $descrip
     * @return InventoryDashboardViewModel
     */
    public function setDescrip($descrip)
    {
        $this->_descrip = $descrip;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getOnhand()
    {
        return $this->_onhand;
    }

    /**
     * @param mixed $onhand
     * @return InventoryDashboardViewModel
     */
    public function setOnhand($onhand)
    {
        $this->_onhand = $onhand;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getOnorder()
    {
        return $this->_onorder;
    }

    /**
     * @param mixed $onorder
     * @return InventoryDashboardViewModel
     */
    public function setOnorder($onorder)
    {
        $this->_onorder = $onorder;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCommitted()
    {
        return $this->_committed;
    }

    /**
     * @param mixed $committed
     * @return InventoryDashboardViewModel
     */
    public function setCommitted($committed)
    {
        $this->_committed = $committed;
        return $this;
    }
}

