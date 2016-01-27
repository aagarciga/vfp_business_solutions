<?php
/**
 * Created by PhpStorm.
 * User: Victor
 * Date: 19/01/2016
 * Time: 9:35
 */

namespace Dandelion\MVC\Application\Tools;


define("DATE_NULL_VALUE", '1899-12-30');

define("FIX_PREFIX", 'fix_');

define("FIX_DEFAULT", 'default');

define("SET_PREFIX", 'set');

/**
 * @param string $viewModelClass type of return view model
 * @param object $item db item
 * @param array $fieldDefinition definition of the field "field => type"
 * @return mixed view model object with field set
 */
function createViewModel($viewModelClass, $item, $fieldDefinition){
    $result = new $viewModelClass();
    foreach ($fieldDefinition as $field => $type){
        $arrayField = str_split($field);
        $arrayField[0] = strtoupper($arrayField[0]);
        $suffix = implode($arrayField);
        $setMethod = SET_PREFIX . $suffix;
        $fixMethod = createFixMethod($type);
        $value = $fixMethod($item->$field);
        $result.$setMethod($value);
    }
    return $result;
}

/**
 * @param string $type the type of field
 * @return string name of fix method
 */
function createFixMethod($type)
{
    $fixMethod = FIX_PREFIX . $type;

    if (!function_exists($fixMethod)) {
        $fixMethod = FIX_PREFIX . FIX_DEFAULT;
    }
    return $fixMethod;
}

/**
 * @param object $item db item
 * @param array $fieldDefinition definition of the field "field => type"
 * @return array object with field set
 */
function createArrayModel($item, $fieldDefinition){
    $result = array();
    foreach ($fieldDefinition as $field => $type){
        $fixMethod = createFixMethod($type);
        $value = $fixMethod($item->$field);
        $result[$field] = $value;
    }
    return $result;
}

function fix_default($value){
    if (is_string($value)){
        return trim($value);
    }
    return $value;
}