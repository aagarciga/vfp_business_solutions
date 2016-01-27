<?php
/**
 * Created by PhpStorm.
 * User: Victor
 * Date: 19/01/2016
 * Time: 9:35
 */

namespace Dandelion\MVC\Application\Tools;


define("DATE_NULL_VALUE", '1899-12-30');

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
        $setMethod = 'set' . $suffix;
        $fixMethod = 'fix_' . $type;
        $value = $fixMethod($item->$field);
        $result.$setMethod($value);
    }
    return $result;
}