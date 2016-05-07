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
        $this->ordnum = trim($ordnum);
        $this->equipid = trim($equipid);
        $this->itemno = trim($itemno);
        $this->descrip = trim($descrip);
        $this->make = trim($make);
        $this->model = trim($model);
        $this->serialno = trim($serialno);
        $this->Voltage = trim($Voltage);
        $this->EquipType = trim($EquipType);
        $this->installdte = trim($installdte);
        $this->expdtein = trim($expdtein);
        $this->daterec = trim($daterec);
        $this->status = trim($status);
        $this->notes = trim($notes);
        $this->picture_fi = trim($picture_fi);
        $this->assettag = trim($assettag);
        $this->locno = trim($locno);
        $this->qbtxlineid = trim($qbtxlineid);
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


        return  $this->installdte !== MODEL_TYPE_DATE_DEFAULT ? $this->installdte :'';
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
        return $this->expdtein !== MODEL_TYPE_DATE_DEFAULT ? $this->expdtein :'';
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
        return $this->daterec !== MODEL_TYPE_DATE_DEFAULT ? $this->daterec :'';
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
    public function getPicture_fi()
    {
        return $this->picture_fi;
    }

    /**
     * @param mixed $picture_fi
     * @return EquipmentHistoryDashboardViewModel
     */
    public function setPicture_fi($picture_fi)
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
    public static function getFieldsDefinitionFor($companyID)
    {
        $swequipTable =  'SWEQUIP' . $companyID;
        $icparmTable = 'ICPARM' . $companyID;

        return array(
            'ordnum' => array(
                FIELD_ATTR_NAME => 'ordnum',
                FIELD_ATTR_TYPE => MODEL_TYPE_DEFAULT,
                FIELD_ATTR_DISPLAY_NAME => 'Work Order',
                'table' => $swequipTable
            ),
            'equipid' => array(
                FIELD_ATTR_NAME => 'equipid',
                FIELD_ATTR_TYPE => MODEL_TYPE_DEFAULT,
                FIELD_ATTR_DISPLAY_NAME => 'Id',
                'table' => $swequipTable
            ),
            'itemno' => array(
                FIELD_ATTR_NAME => 'itemno',
                FIELD_ATTR_TYPE => MODEL_TYPE_DEFAULT,
                FIELD_ATTR_DISPLAY_NAME => 'Part No',
                'table' => $swequipTable
            ),
            'descrip' => array(
                FIELD_ATTR_NAME => 'descrip',
                FIELD_ATTR_TYPE => MODEL_TYPE_DEFAULT,
                FIELD_ATTR_DISPLAY_NAME => 'Description',
                'table' => $swequipTable
            ),
            'make' => array(
                FIELD_ATTR_NAME => 'make',
                FIELD_ATTR_TYPE => MODEL_TYPE_DEFAULT,
                FIELD_ATTR_DISPLAY_NAME => 'Brand',
                'table' => $swequipTable
            ),
            'model' => array(
                FIELD_ATTR_NAME => 'model',
                FIELD_ATTR_TYPE => MODEL_TYPE_DEFAULT,
                FIELD_ATTR_DISPLAY_NAME => 'Model',
                'table' => $swequipTable
            ),
            'serialno' => array(
                FIELD_ATTR_NAME => 'serialno',
                FIELD_ATTR_TYPE => MODEL_TYPE_DEFAULT,
                FIELD_ATTR_DISPLAY_NAME => 'Serial No',
                'table' => $swequipTable
            ),
            'Voltage' => array(
                FIELD_ATTR_NAME => 'Voltage',
                FIELD_ATTR_TYPE => MODEL_TYPE_DEFAULT,
                FIELD_ATTR_DISPLAY_NAME => 'Voltage',
                'table' => $swequipTable
            ),
            'EquipType' => array(
                FIELD_ATTR_NAME => 'EquipType',
                FIELD_ATTR_TYPE => MODEL_TYPE_DEFAULT,
                FIELD_ATTR_DISPLAY_NAME => 'Type',
                'table' => $swequipTable
            ),
            'installdte' => array(
                FIELD_ATTR_NAME => 'installdte',
                FIELD_ATTR_TYPE => MODEL_TYPE_DATE,
                FIELD_ATTR_DISPLAY_NAME => 'Date Out',
                'table' => $swequipTable
            ),
            'expdtein' => array(
                FIELD_ATTR_NAME => 'expdtein',
                FIELD_ATTR_TYPE => MODEL_TYPE_DATE,
                FIELD_ATTR_DISPLAY_NAME => 'Expected In',
                'table' => $swequipTable
            ),
            'daterec' => array(
                FIELD_ATTR_NAME => 'daterec',
                FIELD_ATTR_TYPE => MODEL_TYPE_DATE,
                FIELD_ATTR_DISPLAY_NAME => 'Received',
                'table' => $swequipTable
            ),

            'notes' => array(
                FIELD_ATTR_NAME => 'notes',
                FIELD_ATTR_TYPE => MODEL_TYPE_MEMO,
                FIELD_ATTR_DISPLAY_NAME => 'Notes',
                'table' => $swequipTable
            ),
            'picture_fi' => array(
                FIELD_ATTR_NAME => 'picture_fi',
                FIELD_ATTR_TYPE => MODEL_TYPE_LINK,
                FIELD_ATTR_DISPLAY_NAME => 'Image',
                'table' => $icparmTable,
                FIELD_ATTR_FILTERABLE => false,
                FIELD_ATTR_SORTABLE => false,
                FIELD_ATTR_VISIBLE => false

            ),
            'assettag' => array(
                FIELD_ATTR_NAME => 'assettag',
                FIELD_ATTR_TYPE => MODEL_TYPE_DEFAULT,
                FIELD_ATTR_DISPLAY_NAME => 'Asset Tag',
                'table' => $swequipTable
            ),
            'locno' => array(
                FIELD_ATTR_NAME => 'locno',
                FIELD_ATTR_TYPE => MODEL_TYPE_DEFAULT,
                FIELD_ATTR_DISPLAY_NAME => 'Locno',
                'table' => $swequipTable
            ),
            'status' => array(
                FIELD_ATTR_NAME => 'status',
                FIELD_ATTR_TYPE => MODEL_TYPE_DICTIONARY,
                FIELD_ATTR_DISPLAY_NAME => 'Status',
                FIELD_ATTR_HAVE_VALUES => true,
                FIELD_ATTR_VALUES => array(
                    'Available' => 'Available',
                    'Not Returned' => 'Not Returned',
                    'Broken' => 'Broken',
                    'Lost' => 'Lost',
                    'Received' => 'Received'
                ),
                'table' => $swequipTable
            ),
            'qbtxlineid' => array(
                FIELD_ATTR_NAME => 'qbtxlineid',
                FIELD_ATTR_TYPE => TYPE_CHAR,
                FIELD_ATTR_DISPLAY_NAME => 'Last History Id',
                'table' => $swequipTable,
                FIELD_ATTR_EDITABLE => false,
                FIELD_ATTR_VISIBLE => false,
                FIELD_ATTR_FILTERABLE => false
            ),
        );
    }

    public static function getTableFor($companyID){
        $swequipTable =  'SWEQUIP' . $companyID;
        $icparmTable = 'ICPARM' . $companyID;
        return "($swequipTable INNER JOIN $icparmTable ON $swequipTable.itemno = $icparmTable.itemno)";
    }

    public static function getName(){
        return __CLASS__;
    }

    /**
     * @param array $fieldDefinition
     * @return bool
     */
    public static function isFilterable($fieldDefinition){
        return array_key_exists(FIELD_ATTR_FILTERABLE, $fieldDefinition) ? $fieldDefinition[FIELD_ATTR_FILTERABLE] : true;
    }

    /**
     * @param array $fieldDefinition
     * @return bool
     */
    public static function isVisible($fieldDefinition){
        return array_key_exists(FIELD_ATTR_VISIBLE, $fieldDefinition) ? $fieldDefinition[FIELD_ATTR_VISIBLE] : true;
    }

    /**
     * @param array $fieldDefinition
     * @return bool
     */
    public static function isSortable($fieldDefinition){
        return array_key_exists(FIELD_ATTR_SORTABLE, $fieldDefinition) ? $fieldDefinition[FIELD_ATTR_SORTABLE] : true;
    }

    /**
     * @param array $fieldDefinition
     * @return string
     */
    public static function getTypeFor($fieldDefinition){
        return array_key_exists(FIELD_ATTR_TYPE, $fieldDefinition) ? $fieldDefinition[FIELD_ATTR_TYPE] : MODEL_TYPE_DEFAULT;
    }

    /**
     * @param array $fieldDefinition
     * @return string
     */
    public static function getJSTypeFor($fieldDefinition){
        $typeMapping = array(
            MODEL_TYPE_STRING => JS_TYPE_STRING,
            MODEL_TYPE_DATE => JS_TYPE_DATE,
            MODEL_TYPE_DATE_RANGE => JS_TYPE_DATE_RANGE
        );

        $fieldType = self::getTypeFor($fieldDefinition);
        return array_key_exists($fieldType, $typeMapping) ? $typeMapping[$fieldType] : $fieldType;
    }

    /**
     * @param array $fieldDefinition
     * @return string
     */
    public static function getDisplayNameFor($fieldDefinition){
        return array_key_exists(FIELD_ATTR_DISPLAY_NAME, $fieldDefinition) ? $fieldDefinition[FIELD_ATTR_DISPLAY_NAME] : 'unnamed';
    }

    /**
     * @param array $fieldDefinition
     * @return string
     */
    public static function hasValues($fieldDefinition){
        return array_key_exists(FIELD_ATTR_HAVE_VALUES, $fieldDefinition) ? $fieldDefinition[FIELD_ATTR_HAVE_VALUES] : false;
    }

    /**
     * @return mixed
     */
    public static function getStatusDictionary(){
        $fieldsDefinition = self::getFieldsDefinitionFor('');
        return $fieldsDefinition['status']['values'];
    }

    /**
     * Returns if fieldDefinition is Equipid
     * @param $fieldDefinition
     * @return bool
     */
    public static function isEquipid($fieldDefinition){
        if (array_key_exists(FIELD_ATTR_NAME, $fieldDefinition)){
            return 'equipid' === $fieldDefinition[FIELD_ATTR_NAME];
        }
        return false;
    }

    /**
     * Returns if fieldDefinition is Ordnum (Work Order)
     * @param $fieldDefinition
     * @return bool
     */
    public static function isWorkorder($fieldDefinition){
        if (array_key_exists(FIELD_ATTR_NAME, $fieldDefinition)){
            return 'ordnum' === $fieldDefinition[FIELD_ATTR_NAME];
        }
        return false;
    }

    /**
     * Returns if fieldDefinition is Status
     * @param $fieldDefinition
     * @return bool
     */
    public static function isStatus($fieldDefinition){
        if (array_key_exists(FIELD_ATTR_NAME, $fieldDefinition)){
            return 'status' === $fieldDefinition[FIELD_ATTR_NAME];
        }
        return false;
    }
}