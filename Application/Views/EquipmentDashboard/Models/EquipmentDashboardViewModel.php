<?php
/**
 * User: Victor
 * Date: 12/01/2016
 * Time: 15:03
 * Project:  VFP Business Series
 * Copyright: 2014. VFP Business Solutions, LLC
 */

namespace Dandelion\MVC\Application\Controllers\EquipmentDashboard\Models;

/**
 * Created by: Victor
 * Class OnSalesOrderDashboardViewModel
 * @package Dandelion\MVC\Application\Controllers\OnSalesOrderDashboard\Models
 */
class EquipmentDashboardViewModel
{
    protected $_ordnum;
    protected $_equipid;
    protected $_itemno;
    protected $_model;
    protected $_serialno;
    protected $_make;
    protected $_installdte;
    protected $_expdtein;
    protected $_daterec;
    protected $_order;
    protected $_status;
    protected $_toolboxid;
    protected $_notes;
    protected $_picture;

    /**
     * EquipmentDashboardViewModel constructor.
     * @param $_ordnum
     * @param $_equipid
     * @param $_itemno
     * @param $_model
     * @param $_serialno
     * @param $_make
     * @param $_installdte
     * @param $_expdtein
     * @param $_daterec
     * @param $_order
     * @param $_status
     * @param $_toolboxid
     * @param $_notes
     * @param $_picture
     */
    public function __construct($ordnum=null, $equipid=null, $itemno=null, $model=null,
                                $serialno=null, $make=null, $installdte=null, $expdtein=null, $daterec=null,
                                $order=null, $status=null, $toolboxid=null, $notes=null, $picture=null)
    {
        $this->_ordnum = $ordnum;
        $this->_equipid = $equipid;
        $this->_itemno = $itemno;
        $this->_model = $model;
        $this->_serialno = $serialno;
        $this->_make = $make;
        $this->_installdte = $installdte;
        $this->_expdtein = $expdtein;
        $this->_daterec = $daterec;
        $this->_order = $order;
        $this->_status = $status;
        $this->_toolboxid = $toolboxid;
        $this->_notes = $notes;
        $this->_picture = $picture;
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
     * @return EquipmentDashboardViewModel
     */
    public function setOrdnum($ordnum)
    {
        $this->_ordnum = $ordnum;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getEquipid()
    {
        return $this->_equipid;
    }

    /**
     * @param mixed $equipid
     * @return EquipmentDashboardViewModel
     */
    public function setEquipid($equipid)
    {
        $this->_equipid = $equipid;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getItemno()
    {
        return $this->_itemno;
    }

    /**
     * @param mixed $itemno
     * @return EquipmentDashboardViewModel
     */
    public function setItemno($itemno)
    {
        $this->_itemno = $itemno;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getModel()
    {
        return $this->_model;
    }

    /**
     * @param mixed $model
     * @return EquipmentDashboardViewModel
     */
    public function setModel($model)
    {
        $this->_model = $model;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getSerialno()
    {
        return $this->_serialno;
    }

    /**
     * @param mixed $serialno
     * @return EquipmentDashboardViewModel
     */
    public function setSerialno($serialno)
    {
        $this->_serialno = $serialno;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getMake()
    {
        return $this->_make;
    }

    /**
     * @param mixed $make
     * @return EquipmentDashboardViewModel
     */
    public function setMake($make)
    {
        $this->_make = $make;
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
     * @return EquipmentDashboardViewModel
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
     * @return EquipmentDashboardViewModel
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
     * @return EquipmentDashboardViewModel
     */
    public function setDaterec($daterec)
    {
        $this->_daterec = $daterec;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getOrder()
    {
        return $this->_order;
    }

    /**
     * @param mixed $order
     * @return EquipmentDashboardViewModel
     */
    public function setOrder($order)
    {
        $this->_order = $order;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getStatus()
    {
        return $this->_status;
    }

    /**
     * @param mixed $status
     * @return EquipmentDashboardViewModel
     */
    public function setStatus($status)
    {
        $this->_status = $status;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getToolboxid()
    {
        return $this->_toolboxid;
    }

    /**
     * @param mixed $toolboxid
     * @return EquipmentDashboardViewModel
     */
    public function setToolboxid($toolboxid)
    {
        $this->_toolboxid = $toolboxid;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getNotes()
    {
        return $this->_notes;
    }

    /**
     * @param mixed $notes
     * @return EquipmentDashboardViewModel
     */
    public function setNotes($notes)
    {
        $this->_notes = $notes;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPicture()
    {
        return $this->_picture;
    }

    /**
     * @param mixed $picture
     * @return EquipmentDashboardViewModel
     */
    public function setPicture($picture)
    {
        $this->_picture = $picture;
        return $this;
    }
}