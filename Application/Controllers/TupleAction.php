<?php
/**
 * User: Victor
 * Date: 29/03/2016
 * Time: 19:23
 * @author    Victor Luis Aguado Leon <victorluisaguadoleon@gmail.com>
 * @copyright 2011-2014 Alex Alvarez G�rciga / Dandelion (http://www.thedandelionproject.com)
 * @license   http://www.opensource.org/licenses/mit-license.php MIT
 * @link      http://www.thedandelionproject.com
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

            if (FieldDefinition::isEditableField($fieldDefinition) && $this->Request->hasProperty($newField)){
                $values[$field] = $this->Request->$newField;
                $oldValues[$field] = ($this->Request->hasProperty($oldField)) ? $this->Request->$oldField : FieldDefinition::getDefaultValueByType($fieldType);
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
            $fieldType = FieldDefinition::getType($fieldDefinition);
            $values[$field] = $this->Request->hasProperty($field) ? $this->Request->$field : FieldDefinition::getDefaultValueByType($fieldType);
        }

        return $values;
    }
}