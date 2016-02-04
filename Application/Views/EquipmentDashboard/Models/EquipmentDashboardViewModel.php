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
    protected $ordnum;
    protected $equipid;
    protected $itemno;
    protected $descrip;
    protected $make;
    protected $model;
    protected $serialno;
    protected $Voltage;
    protected $EquipType ;
    protected $installdte;
    protected $expdtein;
    protected $daterec;
    protected $status;
    protected $notes;
    protected $picture_fi;

    /**
     * EquipmentDashboardViewModel constructor.
     * @param $ordnum
     * @param $equipid
     * @param $itemno
     * @param $descrip
     * @param $make
     * @param $model
     * @param $serialno
     * @param $Voltage
     * @param $EquipType
     * @param $installdte
     * @param $expdtein
     * @param $daterec
     * @param $status
     * @param $notes
     * @param $picture_fi
     */
    public function __construct($ordnum, $equipid, $itemno, $descrip, $make, $model, $serialno, $Voltage, $EquipType, $installdte, $expdtein, $daterec, $status, $notes, $picture_fi)
    {
        $this->ordnum = $ordnum;
        $this->equipid = $equipid;
        $this->itemno = $itemno;
        $this->descrip = $descrip;
        $this->make = $make;
        $this->model = $model;
        $this->serialno = $serialno;
        $this->Voltage = $Voltage;
        $this->EquipType = $EquipType;
        $this->installdte = $installdte;
        $this->expdtein = $expdtein;
        $this->daterec = $daterec;
        $this->status = $status;
        $this->notes = $notes;
        $this->picture_fi = $picture_fi;
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
     * @return EquipmentDashboardViewModel
     */
    public function setOrdnum($ordnum)
    {
        $this->ordnum = $ordnum;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getEquipid()
    {
        return $this->equipid;
    }

    /**
     * @param mixed $equipid
     * @return EquipmentDashboardViewModel
     */
    public function setEquipid($equipid)
    {
        $this->equipid = $equipid;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getItemno()
    {
        return $this->itemno;
    }

    /**
     * @param mixed $itemno
     * @return EquipmentDashboardViewModel
     */
    public function setItemno($itemno)
    {
        $this->itemno = $itemno;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDescrip()
    {
        return $this->descrip;
    }

    /**
     * @param mixed $descrip
     * @return EquipmentDashboardViewModel
     */
    public function setDescrip($descrip)
    {
        $this->descrip = $descrip;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getMake()
    {
        return $this->make;
    }

    /**
     * @param mixed $make
     * @return EquipmentDashboardViewModel
     */
    public function setMake($make)
    {
        $this->make = $make;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * @param mixed $model
     * @return EquipmentDashboardViewModel
     */
    public function setModel($model)
    {
        $this->model = $model;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getSerialno()
    {
        return $this->serialno;
    }

    /**
     * @param mixed $serialno
     * @return EquipmentDashboardViewModel
     */
    public function setSerialno($serialno)
    {
        $this->serialno = $serialno;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getVoltage()
    {
        return $this->Voltage;
    }

    /**
     * @param mixed $Voltage
     * @return EquipmentDashboardViewModel
     */
    public function setVoltage($Voltage)
    {
        $this->Voltage = $Voltage;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getEquipType()
    {
        return $this->EquipType;
    }

    /**
     * @param mixed $EquipType
     * @return EquipmentDashboardViewModel
     */
    public function setEquipType($EquipType)
    {
        $this->EquipType = $EquipType;
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
     * @return EquipmentDashboardViewModel
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
     * @return EquipmentDashboardViewModel
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
     * @return EquipmentDashboardViewModel
     */
    public function setDaterec($daterec)
    {
        $this->daterec = $daterec;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param mixed $status
     * @return EquipmentDashboardViewModel
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getNotes()
    {
        return $this->notes;
    }

    /**
     * @param mixed $notes
     * @return EquipmentDashboardViewModel
     */
    public function setNotes($notes)
    {
        $this->notes = $notes;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPictureFi()
    {
        return $this->picture_fi;
    }

    /**
     * @param mixed $picture_fi
     * @return EquipmentDashboardViewModel
     */
    public function setPictureFi($picture_fi)
    {
        $this->picture_fi = $picture_fi;
        return $this;
    }


}