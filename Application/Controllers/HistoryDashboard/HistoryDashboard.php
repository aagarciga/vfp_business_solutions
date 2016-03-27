<?php
/**
 * User: Victor
 * Date: 12/01/2016
 * Time: 14:26
 * Project:  VFP Business Series
 * Copyright: 2014. VFP Business Solutions, LLC
 */

namespace Dandelion\MVC\Application\Controllers;

define('EQUIP_ID', 'equipid');

use Dandelion\MVC\Application\Controllers\DatActionsController;
use Dandelion\Diana\BootstrapPager;
use Dandelion\MVC\Core\Request;
use Dandelion\MVC\Application\Tools;
use Dandelion\MVC\Application\Tools\BootstrapPagerTest;
use Dandelion\Tools\CodeGenerator\SqlPredicateGenerator;
use Dandelion\Tools\Filter\BlockExpressionNode;
use Dandelion\Tools\Filter\FieldNode;
use Dandelion\Tools\Filter\AndNode;
use Dandelion\Tools\Filter\LikeNode;
use Dandelion\Tools\Filter\StringNode;
use Dandelion\Tools\Filter\IFilterNode;
use Dandelion\TreeCreator;
use Dandelion\MVC\Application\Controllers\DashboardController;

/**
 * Created by: Victor
 * Class HistoryDashboard
 * @package Dandelion\MVC\Application\Controllers
 */
class HistoryDashboard extends DashboardController
{
    /**
     * @param string $companySuffix
     * @return array
     */
    public function GetFieldsDefinition($companySuffix)
    {
        $swequipdTable = "SWEQUIPD" . $companySuffix;
        return array(
            'equipid' => array('type' => TYPE_CHAR, 'displayName' => 'Equipment Id', 'table' => $swequipdTable, EDITABLE_KEY => false),
            'ordnum' => array('type' => TYPE_CHAR, 'displayName' => 'Work Order', 'table' => $swequipdTable, EDITABLE_KEY => false),
            'inspectno' => array('type' => TYPE_CHAR, 'displayName' => 'Inpection No.', 'table' => $swequipdTable),
            'installdte' => array('type' => TYPE_DATE, 'displayName' => 'Date Out', 'table' => $swequipdTable),
            'expdtein' => array('type' => TYPE_DATE, 'displayName' => 'Expected date In', 'table' => $swequipdTable),
            'daterec' => array('type' => TYPE_DATE, 'displayName' => 'Date Actually Received', 'table' => $swequipdTable)
        );
    }

    public function getDashboardTable($companySuffix)
    {
        return "SWEQUIPD" . $companySuffix;
    }

    /**
     * @param string $equipid
     * @param $equipidValue
     * @param IFilterNode $filterTree
     * @param array $fieldsDefinition
     * @return IFilterNode
     */
    public function getFilterIncludeEquipId($equipid, $equipidValue, $filterTree, $fieldsDefinition){
        $tableFromEquipId = $fieldsDefinition[$equipid][TABLE_KEY];
        $diplayNameEquipId = $fieldsDefinition[$equipid][DISPLAY_NAME_KEY];
        if ($equipidValue !== '')
        {
            $fieldNode = new FieldNode();
            $fieldNode->setValue(array(
                $equipid,
                $tableFromEquipId,
                $diplayNameEquipId
            ));

            $valueNode = new StringNode();
            $valueNode->setValue($equipidValue);

            $likeNode = new LikeNode();
            $likeNode->addChild($fieldNode);
            $likeNode->addChild($valueNode);

            if ($filterTree instanceof BlockExpressionNode && $filterTree->getChildCount() < 1) {
                return $likeNode;
            }

            $andNode = new AndNode();
            $andNode->addChild($filterTree);
            $andNode->addChild($likeNode);

            return $andNode;
        }
        return $filterTree;
    }
}