<?php
/**
 * User: Victor
 * Date: 19/01/2016
 * Time: 9:35
 */

namespace Dandelion\MVC\Application\Tools;

require_once MVC_DIR_APP_TOOLS . DIRECTORY_SEPARATOR . 'BootstrapPagerTest.php';

define("DATE_NULL_VALUE", '1899-12-30');

define("FIX_PREFIX", __NAMESPACE__ . '\fix_');

define("FIX_DEFAULT", 'default');

define("SET_PREFIX", 'set');

/**
 * BEGIN: Type definition
*/

define("TYPE_CHAR", 'char');

define("TYPE_DATE", 'date');

define("TYPE_MEMO", 'memo');

/**
 * END: Type definition
 */

function fix_default($value){
    if (is_string($value)){
        return trim($value);
    }
    return $value;
}

function fix_date($value){
    $value = trim($value);
    return ($value === DATE_NULL_VALUE) ? '' : $value;
}

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
        $value = $item->$field;
        $value = $fixMethod($value);
        $result->$setMethod($value);
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

/**
 * @param array $fieldsDefinition definition of the field "field => type"
 * @param array $innerJoinFields keys are fields, values are tables
 * @return string sentence sql that represent the fields from the table
 */
function loadFieldsSql($fieldsDefinition, $innerJoinFields=array()){
    $sqlSelectResult = "";
    foreach ($fieldsDefinition as $field => $type){
        if (array_key_exists($field, $innerJoinFields)){
            $innerTable = $innerJoinFields[$field];
            $field = fixKeywordsProblem($field);
            $sqlSelectResult .= " $innerTable.$field AS $field,";
        }
        else{
            $field = fixKeywordsProblem($field);
            $sqlSelectResult .= " $field,";
        }
    }
    return substr($sqlSelectResult, 0, strlen($sqlSelectResult) - 1);
}

/**
 * @param mixed $valueExist search value into array
 * @param array $array collection used in the search
 * @return bool true if value exist into array, false other wise
 */
function array_value_exist($valueExist, $array){
    foreach ($array as $key => $value){
        if ($valueExist === $value){
            return true;
        }
    }
    return false;
}

/**
 * @param str $name
 * @return bool true if name is a sql keyword
 */
function isSqlKeyword($name){
    $name = strtolower($name);
    $keywords = array(
        'order'
    );
    return array_value_exist($name, $keywords);
}

/**
 * @param str $field the name of the field or table to be fixed.
 * @return string field or table name fixed.
 */
function fixKeywordsProblem($field){
    if (isSqlKeyword($field)){
        return "[$field]";
    }
    return $field;
}