<?php
/**
 * Project:  VFP Business Series
 * Copyright: 2014. VFP Business Solutions, LLC
 */

namespace Dandelion\MVC\Application\Controllers;

define('EQUIP_ID', 'equipid');
define('VIEW_MODEL_HISTORY_CLASS', '\\Dandelion\\MVC\Application\\Controllers\\HistoryDashboard\\Models\\HistoryDashboardViewModel');

use Dandelion\MVC\Application\Controllers\DatActionsController;
use Dandelion\Diana\BootstrapPager;
use Dandelion\MVC\Application\Models\DatUnitOfWork;
use Dandelion\MVC\Core\Request;
use Dandelion\MVC\Application\Tools;
use Dandelion\MVC\Application\Tools\BootstrapPagerTest;
use Dandelion\Tools\CodeGenerator\CodeGenerator;
use Dandelion\Tools\CodeGenerator\SqlPredicateGenerator;
use Dandelion\Tools\Filter\BlockExpressionNode;
use Dandelion\Tools\Filter\EqualNode;
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
    public function GetFieldsDefinition($companySuffix=null)
    {
        if (is_null($companySuffix)){
            $companySuffix = $this->DatUnitOfWork->CompanySuffix;
        }
        $swequipdTable = "SWEQUIPD" . $companySuffix;
        return array(
            'equipid' => array('type' => TYPE_CHAR, 'displayName' => 'Equipment Id', 'table' => $swequipdTable, EDITABLE_KEY => false, ADD_ABLE_KEY => false),
            'ordnum' => array('type' => TYPE_CHAR, 'displayName' => 'Work Order', 'table' => $swequipdTable, EDITABLE_KEY => false, ADD_ABLE_KEY => false, ADD_ABLE_IF_NULL_KEY => true),
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

    /**
     * @param string $id qbtxlineid field
     * @param array $values
     * @param array $oldValues
     */
    public function UpdateEntity($id, $values, $oldValues){
        $tableName = 'swequipd' . $this->DatUnitOfWork->CompanySuffix;

        $sqlString = 'UPDATE ' . $tableName . ' SET ';

        $execute = false;
        foreach($values as $field => $fieldValue){
            $oldFieldValue = $oldValues[$field];
            if ($oldFieldValue !== $fieldValue){
                $sqlString .= self::getSqlEqual($field, $fieldValue) . ', ';
                $execute = true;
            }
        }

        if ($execute){
            $sqlString = substr($sqlString, 0, strlen($sqlString) - 2);
            $sqlString .= ' WHERE ' . self::getSqlEqual('qbtxlineid', $id);

            $query = $this->DatUnitOfWork->DBDriver->GetQuery();
            $query->Execute($sqlString);
        }
    }

    /**
     * @param string $id
     * @param array $values
     * @param \stdClass $valuesRequest
     */
    public function AddEntity($id, $values, $valuesRequest){
        $companySuffix = $this->DatUnitOfWork->CompanySuffix;
        $tableName = 'swequipd' . $companySuffix;
        $fieldsDefinition = $this->GetFieldsDefinition($companySuffix);
        $sqlString = 'INSERT INTO ' . $tableName . ' ([qbtxlineid], ';
        $sqlValues = '(' . self::getSqlStringValue($id) . ', ';

        foreach($values as $field => $fieldValue){
            $sqlString .= '[' . $field . '], ';
            $sqlValues .= self::getSqlStringValue($fieldValue) . ', ';
        }

        foreach($fieldsDefinition as $field => $fieldDefinition){
            if (isset($valuesRequest->$field)){
                $sqlString .= '[' . $field . '], ';
                $sqlValues .= self::getSqlStringValue($valuesRequest->$field) . ', ';
            }
        }

        if (count($values) > 0){
            $sqlString = substr($sqlString, 0, strlen($sqlString) - 2) . ')';
            $sqlValues = substr($sqlValues, 0, strlen($sqlValues) - 2) . ')';
            $sqlString .= ' VALUES ' . $sqlValues;

            $query = $this->DatUnitOfWork->DBDriver->GetQuery();
            $query->Execute($sqlString);
        }
    }

    public function UpdateWorkOrder($equipmentId, $workOrder, $id){
        //TODO: Implement here
    }

    /**
     * @param string $field
     * @param mixed $fieldValue
     * @return string
     */
    public static function getSqlEqual($field, $fieldValue){
        $fieldNode = new FieldNode();
        $fieldNode->setValue(array($field, null, null));

        $stringNode = new StringNode();
        $stringNode->setValue($fieldValue);

        $equalNode = new EqualNode();
        $equalNode->addChild($fieldNode);
        $equalNode->addChild($stringNode);

        $codeGenerator = new SqlPredicateGenerator();
        $equalNode->generateSqlCode($codeGenerator);

        return $codeGenerator->getCode();
    }

    /**
     * @param string $value
     * @return string
     */
    public static function getSqlStringValue($value){
        $node = new StringNode();
        $node->setValue($value);

        $sqlCodeGenerator = new SqlPredicateGenerator();
        $node->generateSqlCode($sqlCodeGenerator);

        return $sqlCodeGenerator->getCode();
    }

    /**
     * @param string $id
     * @param DatUnitOfWork $datUnitOfWork
     * @return null|object
     */
    public function getModel($id, $datUnitOfWork)
    {
        $dbDriver = $datUnitOfWork->DBDriver;
        $companySuffix = $datUnitOfWork->CompanySuffix;
        $tableName = 'swequipd' . $companySuffix;
        $fieldsDefinition = $this->GetFieldsDefinition($companySuffix);

        $selectFields = Tools\fetchSelectSQLFields($fieldsDefinition);

        $sqlString = 'SELECT ' . $selectFields . ' FROM ' . $tableName . ' WHERE ' . $this->getSqlEqual('qbtxlineid', $id);

        $query = $dbDriver->GetQuery();
        $dataModels = $query->Execute($sqlString);

        if (count($dataModels) > 0){
            $model = Tools\createViewModel(VIEW_MODEL_HISTORY_CLASS, $dataModels[0], $fieldsDefinition);
            return $model;
        }

        return null;
    }
}