<?php
/**
 * User: Victor
 * Date: 26/03/2016
 * Time: 13:31
 * @author    Victor Luis Aguado Leon <victorluisaguadoleon@gmail.com>
 * @copyright 2011-2014 Alex Alvarez G�rciga / Dandelion (http://www.thedandelionproject.com)
 * @license   http://www.opensource.org/licenses/mit-license.php MIT
 * @link      http://www.thedandelionproject.com
 */

namespace Dandelion\Tools\Helpers;

/**
 * Created by: Victor
 * Class FieldDefinition
 * @package Dandelion\Tools\Helpers
 */
final class FieldDefinition
{
    /**
     * @param array $fieldDefinition
     * @return bool
     */
    public static function isEditableField($fieldDefinition){
        return array_key_exists(EDITABLE_KEY, $fieldDefinition) ? $fieldDefinition[EDITABLE_KEY] : true;
    }

    /**
     * @param array $fieldDefinition
     * @return bool
     */
    public static function isFilterAble($fieldDefinition){
        return array_key_exists(FILTER_ABLE_KEY, $fieldDefinition) ? $fieldDefinition[FILTER_ABLE_KEY] : true;
    }

    /**
     * @param array $fieldDefinition
     * @return string
     */
    public static function getDisplayName($fieldDefinition){
        return array_key_exists(DISPLAY_NAME_KEY, $fieldDefinition) ? $fieldDefinition[DISPLAY_NAME_KEY] : "";
    }

    /**
     * @param array $fieldDefinition
     * @return string
     */
    public static function getJsType($fieldDefinition){
        $fieldType = self::getType($fieldDefinition);

        $typesConvert = array(
            TYPE_CHAR => TEXT_JS_TYPE,
            TYPE_DATE => DATE_JS_TYPE,
            TYPE_DICTIONARY => DROPDOWN_JS_TYPE,
        );

        return array_key_exists($fieldType, $typesConvert) ? $typesConvert[$fieldType] : $fieldType;
    }

    /**
     * @param array $fieldDefinition
     * @return bool
     */
    public static function visible($fieldDefinition){
        return array_key_exists(VISIBLE_KEY, $fieldDefinition) ? $fieldDefinition[VISIBLE_KEY] : true;
    }

    /**
     * @param array $fieldDefinition
     * @return string
     */
    public static function getType($fieldDefinition){
        return array_key_exists(TYPE_KEY, $fieldDefinition) ? $fieldDefinition[TYPE_KEY] : DEFAULT_TYPE;
    }

    /**
     * @param string $type Library type
     * @return bool
     */
    public static function isSortableType($type){
        $nonSortableType = array(
            TYPE_MEMO,
        );
        return !self::array_value_exist($type, $nonSortableType);
    }

    /**
     * @param mixed $valueExist search value into array
     * @param array $array collection used in the search
     * @return bool true if value exist into array, false other wise
     */
    public static function array_value_exist($valueExist, $array){
        foreach ($array as $key => $value){
            if ($valueExist === $value){
                return true;
            }
        }
        return false;
    }

    /**
     * @param array $fieldDefinition
     * @return bool
     */
    public static function isSortable($fieldDefinition){
        if (array_key_exists(IS_SORTABLE_KEY, $fieldDefinition)){
            return $fieldDefinition[IS_SORTABLE_KEY];
        }

        $fieldType = self::getType($fieldDefinition);
        return self::isSortableType($fieldType);
    }

    /**
     * @param array $fieldDefinition
     * @return array
     */
    public static function getValues($fieldDefinition){
        return array_key_exists(VALUES_KEY, $fieldDefinition) ? $fieldDefinition[VALUES_KEY] : array();
    }

    public static function getDefaultValueByType($dataType){
        $defaultValueByType = array(
            TYPE_CHAR => '',
            TYPE_DATE => DATE_NULL_VALUE,
            TYPE_DICTIONARY => null
        );

        return isset($defaultValueByType[$dataType]) ? $defaultValueByType[$dataType] : '';
    }

    /**
     * @param \stdClass $stdClass
     * @param string $field
     * @param array $fieldDefinition
     * @return mixed
     */
    public static function getValueFromStdClass($stdClass, $field, $fieldDefinition){
        $fieldType = self::getType($fieldDefinition);

        if (isset($stdClass->$field)){
            return $stdClass->$field;
        }

        return self::getDefaultValueByType($fieldType);
    }

    /**
     * @param mixed $modelObject
     * @param array $fieldsDefinition
     * @return array
     */
    public static function modelToArray($modelObject, $fieldsDefinition){
        $result = array();

        foreach ($fieldsDefinition as $field => $fieldDefinition){
            $result[$field] = $modelObject->$field;
        }

        return $result;
    }
}