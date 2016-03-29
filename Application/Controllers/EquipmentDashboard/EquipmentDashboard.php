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
use Dandelion\Tools\CodeGenerator\SqlPredicateGenerator;
use Dandelion\Tools\Filter\BlockExpressionNode;
use Dandelion\Tools\Filter\IFilterNode;
use Dandelion\TreeCreator;
use Dandelion\MVC\Application\Controllers\DashboardController;

/**
 * Created by: Victor
 * Class EquipmentDashboard
 * @package Dandelion\MVC\Application\Controllers
 */
class EquipmentDashboard extends DashboardController
{
    /**
     * @param string $companySuffix
     * @return array
     */
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
            'status' => array('type' => TYPE_DICTIONARY, 'displayName' => 'Status', 'values' => array(
                'Available' => 'Available',
                'Assigned' => 'Assigned',
                'Broken' => 'Broken',
                'Lost' => 'Lost',
                'Received' => 'Received'
            ), 'table' => $swequipTable),
            'notes' => array('type' => TYPE_MEMO, 'displayName' => 'Notes', 'table' => $swequipTable),
            'picture_fi' => array('type' => TYPE_HREF, 'displayName' => 'Image', 'table' => $icparmTable),
            'assettag' => array('type' => TYPE_CHAR, 'displayName' => 'Asset Tag', 'table' => $swequipTable),
            'Locno' => array('type' => TYPE_CHAR, 'displayName' => 'Locno', 'table' => $swequipTable),
            'qbtxlineid' => array('type' => TYPE_CHAR, 'displayName' => 'Last History Id', 'table' => $swequipTable, EDITABLE_KEY => false, VISIBLE_KEY => false)
        );
    }

    public function getDashboardTable($companySuffix)
    {
        $swequipTable = "SWEQUIP$companySuffix";
        $icparmTable = "ICPARM$companySuffix";
        return "($swequipTable INNER JOIN $icparmTable ON $swequipTable.itemno = $icparmTable.itemno)";
    }
}