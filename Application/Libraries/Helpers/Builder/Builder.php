<?php
/**
 * User: Victor
 * Date: 26/03/2016
 * Time: 11:21
 * @author    Victor Luis Aguado Leon <victorluisaguadoleon@gmail.com>
 * @copyright 2011-2014 Alex Alvarez G�rciga / Dandelion (http://www.thedandelionproject.com)
 * @license   http://www.opensource.org/licenses/mit-license.php MIT
 * @link      http://www.thedandelionproject.com
 */

namespace Dandelion\Tools\Helpers;

define('HELPERS_DIR_FIELD_BUILDER', HELPERS_DIR_BUILDER . DIRECTORY_SEPARATOR . 'FieldBuilder');

/**
 * Created by: Victor
 * Class Builder
 * @package Dandelion\Tools\Helpers
 */
final class Builder
{
    /**
     * @param array $fieldsDefinition
     * @param \stdClass $values
     * @param string $urlSubmit
     * @param string $httpMethodType
     */
    public static function createFormEditTupleDashboard($fieldsDefinition, $values, $urlSubmit, $httpMethodType){
        $includeFile = HELPERS_DIR_BUILDER . DIRECTORY_SEPARATOR . 'formEditTupleDashboard.php';

        $data = array(
            'FieldsDefinition' => $fieldsDefinition,
            'Values' => $values,
            'UrlSubmit' => $urlSubmit,
            'HttpMethodType' => $httpMethodType,
            'Add' => true,
        );

        DynamicInclude::includeFile($includeFile, $data);
    }

    /**
     * @param string $field
     * @param array $fieldDefinition
     * @param string|null $value
     * @throws \Exception
     */
    public static function buildFieldInput($field, $fieldDefinition, $value){
        $data = array(
            'Field' => $field,
            'FieldDefinition' => $fieldDefinition,
            'Value' => $value,
        );

        $pathHead = HELPERS_DIR_FIELD_BUILDER . DIRECTORY_SEPARATOR;
        $fieldTypeBuilderDictionary = array(
            TEXT_JS_TYPE => $pathHead . 'textFieldBuilder.php',
            DATE_JS_TYPE => $pathHead . 'dateRangeFieldBuilder.php',
            DROPDOWN_JS_TYPE => $pathHead . 'dropdownFieldBuilder.php',
        );

        $jsType = FieldDefinition::getJsType($fieldDefinition);
        if (array_key_exists($jsType, $fieldTypeBuilderDictionary)){
            DynamicInclude::includeFile($fieldTypeBuilderDictionary[$jsType], $data);
        }
        else{
            throw new \Exception('Js type not contain a builder field.');
        }
    }
}