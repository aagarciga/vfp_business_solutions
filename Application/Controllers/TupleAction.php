<?php
/**
 * Project:  VFP Business Series
 * Copyright: 2014. VFP Business Solutions, LLC
 */

namespace Dandelion\MVC\Application\Controllers;

use Dandelion\MVC\Core\Action;
use Dandelion\Tools\Helpers\FieldDefinition;

abstract class TupleAction extends Action
{
    /**
     * @return array whit two values, 'values' and 'oldValues'
     */
    public function getDupleValuesRequestParam(){
        $companySuffix = $this->controller->DatUnitOfWork->CompanySuffix;
        $fieldsDefinition = $this->controller->GetFieldsDefinition($companySuffix);

        $values = array();
        $oldValues = array();
        foreach ($fieldsDefinition as $field => $fieldDefinition){
            $newField = NEW_PREFIX . $field;
            $oldField = OLD_PREFIX . $field;
            $fieldType = FieldDefinition::getType($fieldDefinition);

            $oldValues[$field] = ($this->Request->hasProperty($oldField)) ? $this->Request->$oldField : FieldDefinition::getDefaultValueByType($fieldType);
            if (FieldDefinition::isEditableFieldIfNullValue($fieldDefinition, $oldValues[$field]) && $this->Request->hasProperty($newField)){
                $values[$field] = $this->Request->$newField;
            }
        }

        return array(
            'values' => $values,
            'oldValues' => $oldValues,
        );
    }

    /**
     * @return string
     * @throws \HttpInvalidParamException
     */
    public function getIdRequestParam(){
        if (!$this->Request->hasProperty('id')){
            throw new \HttpInvalidParamException('"Id" not found.');
        }

        //TODO: Convert Id on base64.
        return base64_decode($this->Request->id);
    }

    /**
     * @return array
     */
    public function getRedirectRequestParam(){
        return ($this->Request->hasProperty('redirect')) ? json_decode(base64_decode($this->Request->redirect))
            : array('HistoryDashboard', 'Index');
    }

    /**
     * @return array
     */
    public function getValuesRequestParam(){
        $companySuffix = $this->controller->DatUnitOfWork->CompanySuffix;
        $fieldsDefinition = $this->controller->GetFieldsDefinition($companySuffix);

        $values = array();
        foreach ($fieldsDefinition as $field => $fieldDefinition){
            $newField = NEW_PREFIX . $field;
            $fieldType = FieldDefinition::getType($fieldDefinition);
            $values[$field] = $this->Request->hasProperty($newField) ? $this->Request->$newField : FieldDefinition::getDefaultValueByType($fieldType);
        }

        return $values;
    }
}