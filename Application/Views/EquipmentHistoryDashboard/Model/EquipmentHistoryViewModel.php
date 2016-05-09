<?php
/**
 * Project:  VFP Business Series
 * Copyright: 2014. VFP Business Solutions, LLC
 */

namespace Dandelion\MVC\Application\Controllers\EquipmentHistoryDashboard\Models;


class EquipmentHistoryViewModel
{
    private $qbtxlineid;
    private $equipid;
    private $ordnum;
    private $inspectno;
    private $inspectnm;
    private $installdte;
    private $expdtein;
    private $daterec;

    /**
     * EquipmentHistoryViewModel constructor.
     * @param GUID $qbtxlineid
     * @param string $equipid
     * @param string $ordnum
     * @param string $inspectno
     * @param string $inspectnm
     * @param date $installdte
     * @param date $expdtein
     * @param date $daterec
     */
    public function __construct($qbtxlineid, $equipid, $ordnum, $inspectno, $inspectnm, $installdte, $expdtein, $daterec)
    {
        $this->qbtxlineid = trim($qbtxlineid);
        $this->equipid = trim($equipid);
        $this->ordnum = trim($ordnum);
        $this->inspectno = trim($inspectno);
        $this->inspectnm = trim($inspectnm);
        $this->installdte = trim($installdte);
        $this->expdtein = trim($expdtein);
        $this->daterec = trim($daterec);
    }

    /**
     * @return GUID
     */
    public function getQbtxlineid()
    {
        return $this->qbtxlineid;
    }

    /**
     * @param GUID $qbtxlineid
     * @return EquipmentHistoryViewModel
     */
    public function setQbtxlineid($qbtxlineid)
    {
        $this->qbtxlineid = $qbtxlineid;
        return $this;
    }

    /**
     * @return string
     */
    public function getEquipid()
    {
        return $this->equipid;
    }

    /**
     * @param string $equipid
     * @return EquipmentHistoryViewModel
     */
    public function setEquipid($equipid)
    {
        $this->equipid = $equipid;
        return $this;
    }

    /**
     * @return string
     */
    public function getOrdnum()
    {
        return $this->ordnum;
    }

    /**
     * @param string $ordnum
     * @return EquipmentHistoryViewModel
     */
    public function setOrdnum($ordnum)
    {
        $this->ordnum = $ordnum;
        return $this;
    }

    /**
     * @return string
     */
    public function getInspectno()
    {
        return $this->inspectno;
    }

    /**
     * @param string $inspectno
     * @return EquipmentHistoryViewModel
     */
    public function setInspectno($inspectno)
    {
        $this->inspectno = $inspectno;
        return $this;
    }

    /**
     * @param string $inspectnm
     * @return EquipmentHistoryViewModel
     */
    public function setInspectnm($inspectnm)
    {
        $this->inspectnm = $inspectnm;
        return $this;
    }

    /**
     * @return string
     */
    public function getInspectnm()
    {
        return $this->inspectnm;
    }

    /**
     * @return string
     */
    public function getInstalldte()
    {
        return $this->installdte !== MODEL_TYPE_DATE_DEFAULT ? $this->installdte : '';
    }

    /**
     * @param string $installdte
     * @return EquipmentHistoryViewModel
     */
    public function setInstalldte($installdte)
    {
        $this->installdte = $installdte;
        return $this;
    }

    /**
     * @return string
     */
    public function getExpdtein()
    {
        return $this->expdtein !== MODEL_TYPE_DATE_DEFAULT ? $this->expdtein : '';
    }

    /**
     * @param string $expdtein
     * @return EquipmentHistoryViewModel
     */
    public function setExpdtein($expdtein)
    {
        $this->expdtein = $expdtein;
        return $this;
    }

    /**
     * @return string
     */
    public function getDaterec()
    {
        return $this->daterec !== MODEL_TYPE_DATE_DEFAULT ? $this->daterec : '';
    }

    /**
     * @param string $daterec
     * @return EquipmentHistoryViewModel
     */
    public function setDaterec($daterec)
    {
        $this->daterec = $daterec;
        return $this;
    }

    /**
     * @param $companyID
     * @return array
     */
    public static function getFieldsDefinitionFor($companyID)
    {
        $swequipdTable =  'SWEQUIPD' . $companyID;
        $swinspTable = 'SWINSP' . $companyID;

        return array(
            'qbtxlineid' => array(
                FIELD_ATTR_NAME => 'qbtxlineid',
                FIELD_ATTR_TYPE => TYPE_CHAR,
                FIELD_ATTR_DISPLAY_NAME => 'History Id',
                'table' => $swequipdTable,
                FIELD_ATTR_EDITABLE => false,
                FIELD_ATTR_VISIBLE => false,
                FIELD_ATTR_FILTERABLE => false
            ),
            'equipid' => array(
                FIELD_ATTR_NAME => 'equipid',
                FIELD_ATTR_TYPE => MODEL_TYPE_DEFAULT,
                FIELD_ATTR_DISPLAY_NAME => 'Equipment Id',
                'table' => $swequipdTable
            ),
            'ordnum' => array(
                FIELD_ATTR_NAME => 'ordnum',
                FIELD_ATTR_TYPE => MODEL_TYPE_DEFAULT,
                FIELD_ATTR_DISPLAY_NAME => 'Work Order',
                'table' => $swequipdTable
            ),
            'inspectno' => array(
                FIELD_ATTR_NAME => 'inspectno',
                FIELD_ATTR_TYPE => MODEL_TYPE_DEFAULT,
                FIELD_ATTR_DISPLAY_NAME => 'Project Manager',
                FIELD_ATTR_VISIBLE => false,
                'table' => $swequipdTable
            ),
            'inspectnm' => array(
                FIELD_ATTR_NAME => 'inspectnm',
                FIELD_ATTR_TYPE => MODEL_TYPE_DEFAULT,
                FIELD_ATTR_DISPLAY_NAME => 'Project Manager',
                'table' => $swinspTable,
                FIELD_ATTR_FILTERABLE => false,
                FIELD_ATTR_SORTABLE => false,
                FIELD_ATTR_VISIBLE => true

            ),
            'installdte' => array(
                FIELD_ATTR_NAME => 'installdte',
                FIELD_ATTR_TYPE => MODEL_TYPE_DATE,
                FIELD_ATTR_DISPLAY_NAME => 'Date Out',
                'table' => $swequipdTable
            ),
            'expdtein' => array(
                FIELD_ATTR_NAME => 'expdtein',
                FIELD_ATTR_TYPE => MODEL_TYPE_DATE,
                FIELD_ATTR_DISPLAY_NAME => 'Expected In',
                'table' => $swequipdTable
            ),
            'daterec' => array(
                FIELD_ATTR_NAME => 'daterec',
                FIELD_ATTR_TYPE => MODEL_TYPE_DATE,
                FIELD_ATTR_DISPLAY_NAME => 'Received',
                'table' => $swequipdTable
            )
        );
    }

    public static function getTableFor($companyID){
        $swequipdTable =  'SWEQUIPD' . $companyID;
        $swinspTable = 'SWINSP' . $companyID;
        return "($swequipdTable INNER JOIN $swinspTable ON $swequipdTable.inspectno = $swinspTable.inspectno)";
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

}