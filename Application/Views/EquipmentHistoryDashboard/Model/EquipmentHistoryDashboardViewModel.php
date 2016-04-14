<?php
/**
 * Project:  VFP Business Series
 * Copyright: 2014. VFP Business Solutions, LLC
 */

namespace Dandelion\MVC\Application\Controllers\EquipmentHistoryDashboard\Models;


class EquipmentHistoryDashboardViewModel
{
    private $ordnum;
    private $equipid;
    private $itemno;
    private $descrip;
    private $make;
    private $model;
    private $serialno;
    private $Voltage;
    private $EquipType ;
    private $installdte;
    private $expdtein;
    private $daterec;
    private $status;
    private $notes;
    private $picture_fi;
    private $assettag;
    private $locno;
    private $qbtxlineid;

    /**
     * EquipmentHistoryDashboardViewModel constructor.
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
     * @param $assettag
     * @param $locno
     * @param $qbtxlineid
     */
    public function __construct($ordnum, $equipid, $itemno, $descrip, $make, $model, $serialno, $Voltage, $EquipType, $installdte, $expdtein, $daterec, $status, $notes, $picture_fi, $assettag, $locno, $qbtxlineid)
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
        $this->assettag = $assettag;
        $this->locno = $locno;
        $this->qbtxlineid = $qbtxlineid;
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
     * @return EquipmentHistoryDashboardViewModel
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
     * @return EquipmentHistoryDashboardViewModel
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
     * @return EquipmentHistoryDashboardViewModel
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
     * @return EquipmentHistoryDashboardViewModel
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
     * @return EquipmentHistoryDashboardViewModel
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
     * @return EquipmentHistoryDashboardViewModel
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
     * @return EquipmentHistoryDashboardViewModel
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
     * @return EquipmentHistoryDashboardViewModel
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
     * @return EquipmentHistoryDashboardViewModel
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
     * @return EquipmentHistoryDashboardViewModel
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
     * @return EquipmentHistoryDashboardViewModel
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
     * @return EquipmentHistoryDashboardViewModel
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
     * @return EquipmentHistoryDashboardViewModel
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
     * @return EquipmentHistoryDashboardViewModel
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
     * @return EquipmentHistoryDashboardViewModel
     */
    public function setPictureFi($picture_fi)
    {
        $this->picture_fi = $picture_fi;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAssettag()
    {
        return $this->assettag;
    }

    /**
     * @param mixed $assettag
     * @return EquipmentHistoryDashboardViewModel
     */
    public function setAssettag($assettag)
    {
        $this->assettag = $assettag;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getLocno()
    {
        return $this->locno;
    }

    /**
     * @param mixed $locno
     * @return EquipmentHistoryDashboardViewModel
     */
    public function setLocno($locno)
    {
        $this->locno = $locno;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getQbtxlineid()
    {
        return $this->qbtxlineid;
    }

    /**
     * @param mixed $qbtxlineid
     * @return EquipmentHistoryDashboardViewModel
     */
    public function setQbtxlineid($qbtxlineid)
    {
        $this->qbtxlineid = $qbtxlineid;
        return $this;
    }

    /**
     * @param $companyID
     * @return array
     */
    public static function getFieldDefinitionFor($companyID)
    {
        $swequipTable =  'SWEQUIP' . $companyID;
        $icparmTable = 'ICPARM' . $companyID;

        return array(
            'ordnum' => array(
                'type' => MODEL_TYPE_DEFAULT,
                'displayName' => 'Work Order',
                'table' => $swequipTable
            ),
            'equipid' => array(
                'type' => MODEL_TYPE_DEFAULT,
                'displayName' => 'Equipment Id',
                'table' => $swequipTable
            ),
            'itemno' => array(
                'type' => MODEL_TYPE_DEFAULT,
                'displayName' => 'Part No',
                'table' => $swequipTable
            ),
            'descrip' => array(
                'type' => MODEL_TYPE_DEFAULT,
                'displayName' => 'Item Description',
                'table' => $swequipTable
            ),
            'make' => array(
                'type' => MODEL_TYPE_DEFAULT,
                'displayName' => 'Brand',
                'table' => $swequipTable
            ),
            'model' => array(
                'type' => MODEL_TYPE_DEFAULT,
                'displayName' => 'Model',
                'table' => $swequipTable
            ),
            'serialno' => array(
                'type' => MODEL_TYPE_DEFAULT,
                'displayName' => 'Serial No',
                'table' => $swequipTable
            ),
            'Voltage' => array(
                'type' => MODEL_TYPE_DEFAULT,
                'displayName' => 'Voltage',
                'table' => $swequipTable
            ),
            'EquipType' => array(
                'type' => MODEL_TYPE_DEFAULT,
                'displayName' => 'Type',
                'table' => $swequipTable
            ),
            'installdte' => array(
                'type' => MODEL_TYPE_DATE,
                'displayName' => 'Date Out',
                'table' => $swequipTable
            ),
            'expdtein' => array(
                'type' => MODEL_TYPE_DATE,
                'displayName' => 'Expected date In',
                'table' => $swequipTable
            ),
            'daterec' => array(
                'type' => MODEL_TYPE_DATE,
                'displayName' => 'Date Actually Received',
                'table' => $swequipTable
            ),
            'status' => array(
                'type' => MODEL_TYPE_DICTIONARY,
                'displayName' => 'Status',
                'values' => array(
                    'Available' => 'Available',
                    'Assigned' => 'Assigned',
                    'Broken' => 'Broken',
                    'Lost' => 'Lost',
                    'Received' => 'Received'
                ),
                'table' => $swequipTable
            ),
            'notes' => array(
                'type' => MODEL_TYPE_MEMO,
                'displayName' => 'Notes',
                'table' => $swequipTable
            ),
            'picture_fi' => array(
                'type' => MODEL_TYPE_LINK,
                'displayName' => 'Image',
                'table' => $icparmTable
            ),
            'assettag' => array(
                'type' => MODEL_TYPE_DEFAULT,
                'displayName' => 'Asset Tag',
                'table' => $swequipTable
            ),
            'locno' => array(
                'type' => MODEL_TYPE_DEFAULT,
                'displayName' => 'Locno',
                'table' => $swequipTable
            ),
            'qbtxlineid' => array(
                'type' => TYPE_CHAR,
                'displayName' => 'Last History Id',
                'table' => $swequipTable,
                HTML_DATA_ATTR_EDITABLE => false,
                HTML_DATA_ATTR_VISIBLE => false
            ),
        );
    }

    public static function getTableFor($companyID){
        $swequipTable =  'SWEQUIP' . $companyID;
        $icparmTable = 'ICPARM' . $companyID;
        return "($swequipTable INNER JOIN $icparmTable ON $swequipTable.itemno = $icparmTable.itemno)";
    }

    public static function getName(){
        return 'Dandelion\MVC\Application\Controllers\EquipmentHistoryDashboard\Models\EquipmentHistoryDashboardViewModel';
    }
}