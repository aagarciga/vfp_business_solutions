<?php
/**
 * User: Victor
 * Date: 29/03/2016
 * Time: 19:23
 */

namespace Dandelion\MVC\Application\Controllers;

use Dandelion\MVC\Core\Action;

abstract class EditTupleAction extends Action
{
    public function processRequest(){
        $companySuffix = $this->controller->DatUnitOfWork->CompanySuffix;
        $fieldsDefinition = $this->controller->GetFieldsDefinition($companySuffix);

        $values = array();
        $oldValues = array();
        foreach ($fieldsDefinition as $field => $fieldDefinition){
            $newField = NEW_PREFIX . $field;
            $oldField = OLD_PREFIX . $field;
            $fieldType = FieldDefinition::getType($fieldDefinition);

            if (FieldDefinition::isEditableField($fieldDefinition) && $this->Request->hasProperty($newField)){
                $values[$field] = $this->Request->$newField;
                $oldValues[$field] = ($this->Request->hasProperty($oldField)) ? $this->Request->$oldField : FieldDefinition::getDefaultValueByType($fieldType);
            }
        }

        if (!$this->Request->hasProperty('id')){
            throw new \HttpInvalidParamException('"Id" not found.');
        }

        //TODO: Convert Id on base64.
        $id = base64_decode($this->Request->id);
        $redirect = ($this->Request->hasProperty('redirect')) ? json_decode(base64_decode($this->Request->redirect))
            : array('HistoryDashboard', 'Index');

        return array(
            'id' => $id,
            'redirect' => $redirect,
            'values' => $values,
            'oldValues' => $oldValues,
        );
    }
}