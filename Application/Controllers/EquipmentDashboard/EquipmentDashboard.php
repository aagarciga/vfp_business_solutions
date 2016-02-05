<?php
/**
 * User: Victor
 * Date: 12/01/2016
 * Time: 14:26
 * Project:  VFP Business Series
 * Copyright: 2014. VFP Business Solutions, LLC
 */

namespace Dandelion\MVC\Application\Controllers;

use Dandelion\MVC\Application\Controllers\DatActionsController;
use Dandelion\Diana\BootstrapPager;
use Dandelion\MVC\Core\Request;
use Dandelion\MVC\Application\Tools;
use Dandelion\MVC\Application\Tools\BootstrapPagerTest;

/**
 * Created by: Victor
 * Class EquipmentDashboard
 * @package Dandelion\MVC\Application\Controllers
 */
class EquipmentDashboard extends DatActionsController
{
    /**
     *
     * @param string $predicate
     * @param int $itemsPerpage
     * @param int $middleRange
     * @param int $showPagerControlsIfMoreThan
     * @param string $orderby
     * @param string $order (ASC | DESC)
     * @return \Dandelion\Diana\BootstrapPager
     *
     * @internal Because in the feature this will be an INNER JOIN
     */
    public function GetPager($predicate, $itemsPerpage = 50, $middleRange = 5,
                             $showPagerControlsIfMoreThan = 10, $orderby = "ordnum", $order = "ASC")
    {
        if ($predicate !== "") {
            $predicate = "WHERE $predicate ";
        }

        $companysuffix = $this->DatUnitOfWork->CompanySuffix;
        $table = $this->getDashboardTable($companysuffix);
        $selectField = Tools\fetchSelectSQLFields($this->GetFieldsDefinition($companysuffix));

        $sqlString = "SELECT "
            . $selectField
            . " FROM $table "
            . "$predicate"
            . " ORDER BY $orderby $order";

        return new BootstrapPager($this->DatUnitOfWork->DBDriver,
            $sqlString, $itemsPerpage, $middleRange, $showPagerControlsIfMoreThan);
    }

    public function GetFieldsDefinition($companySuffix)
    {
        $swequipTable = "SWEQUIP$companySuffix";
        $icparmTable = "ICPARM$companySuffix";
        return array(
            'ordnum' => array('type' => TYPE_CHAR, 'displayName' => 'Work Order', 'table' => $swequipTable),
            'equipid' => array('type' => TYPE_CHAR, 'displayName' => 'Equipment Id', 'table' => $swequipTable),
            'itemno' => array('type' => TYPE_CHAR, 'displayName' => 'Part No', 'table' => $swequipTable),
            'descrip' => array('type' => TYPE_CHAR, 'displayName' => 'Item Description', 'table' => $swequipTable),
            'make' => array('type' => TYPE_CHAR, 'displayName' => 'Brand', 'table' => $swequipTable),
            'model' => array('type' => TYPE_CHAR, 'displayName' => 'Model', 'table' => $swequipTable),
            'serialno' => array('type' => TYPE_CHAR, 'displayName' => 'Serial No', 'table' => $swequipTable),
            'Voltage' => array('type' => TYPE_CHAR, 'displayName' => 'Voltage', 'table' => $swequipTable),
            'EquipType' => array('type' => TYPE_CHAR, 'displayName' => 'Type', 'table' => $swequipTable),
            'installdte' => array('type' => TYPE_DATE, 'displayName' => 'Date Out', 'table' => $swequipTable),
            'expdtein' => array('type' => TYPE_DATE, 'displayName' => 'Expected date In', 'table' => $swequipTable),
            'daterec' => array('type' => TYPE_DATE, 'displayName' => 'Date Actually Received', 'table' => $swequipTable),
            'status' => array('type' => TYPE_DICTIONARY, 'displayName' => 'Status', array(
                'Broken' => 'Broken',
                'Lost' => 'Lost'
            ), 'table' => $swequipTable),
            'notes' => array('type' => TYPE_MEMO, 'displayName' => 'Notes', 'table' => $swequipTable),
            'picture_fi' => array('type' => TYPE_CHAR, 'displayName' => 'Image', 'table' => $icparmTable)
        );
    }

    public function getDashboardTable($companySuffix)
    {
        $swequipTable = "SWEQUIP$companySuffix";
        $icparmTable = "ICPARM$companySuffix";
        return "($swequipTable INNER JOIN $icparmTable ON $swequipTable.itemno = $icparmTable.itemno)";
    }
}