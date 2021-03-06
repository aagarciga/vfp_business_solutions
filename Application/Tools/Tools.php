<?php
/**
 * User: Victor
 * Date: 19/01/2016
 * Time: 9:35
 */

namespace Dandelion\MVC\Application\Tools;

use Dandelion\MVC\Core\View;
use Dandelion\Tools\Helpers\FieldDefinition;

require_once MVC_DIR_APP_TOOLS . DIRECTORY_SEPARATOR . 'BootstrapPagerTest.php';
require_once MVC_DIR_APP_TOOLS . DIRECTORY_SEPARATOR . 'Session.php';
require_once MVC_DIR_APP_TOOLS . DIRECTORY_SEPARATOR . 'Controller.php';

define("FIX_PREFIX", __NAMESPACE__ . '\fix_');

define("FIX_DEFAULT", 'default');

define("SET_PREFIX", 'set');

define("FILTER_ABLE_KEY", 'filter-able');

define("DISPLAY_NAME_KEY", 'displayName');

define("VISIBLE_KEY", 'visible');

define("TYPE_KEY", 'type');

define("IS_SORTABLE_KEY", 'isSortable');

define("TABLE_KEY", 'table');

define('OLD_PREFIX', 'old-');

define('NEW_PREFIX', 'new-');

function fix_default($value){
    if (is_null($value))
    {
        return '';
    }
    if (is_string($value)){
        return trim($value);
    }
    return $value;
}

function fix_date($value){
    $value = trim($value);
    return ($value === DATE_NULL_VALUE) ? '' : $value;
}

function fix_href($value){
    if (is_null($value) || $value === ""){
        return "#";
    }
    $value = trim($value);
    $value = View::ServerFileContext($value);
    return (string) $value;
}

/**
 * @param string $viewModelClass type of return view model
 * @param object $item db item
 * @param array $fieldDefinition definition of the field "field => field definition"
 * @return mixed view model object with field set
 */
function createViewModel($viewModelClass, $item, $fieldDefinition){
    $rc = new \ReflectionClass($viewModelClass);
    return $rc->newInstanceArgs(createArrayModel($item, $fieldDefinition));
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
    foreach ($fieldDefinition as $field => $component){
        $type = DEFAULT_TYPE;
        if (array_key_exists('type', $component)){
            $type = $component['type'];
        }

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
function fetchSelectSQLFields($fieldsDefinition){
    $sqlSelectResult = "";
    foreach ($fieldsDefinition as $field => $components){
        $currentField = '['.$field.']';

        if(array_key_exists('table', $components)){
            $currentTable = $components['table'];
            $currentField =  '['.$currentTable.'].' . $currentField . ' AS ' . $currentField;
        }
        $sqlSelectResult .= $currentField . ", ";
    }
    return substr($sqlSelectResult, 0, strlen($sqlSelectResult) - 2);
}

function fetchSQLFields($fieldsDefinition){
    $sqlSelectResult = "";
    foreach ($fieldsDefinition as $field => $components){
        $currentField = '['.$field.']';

        if(array_key_exists('table', $components)){
            $currentTable = $components['table'];
            $currentField =  '['.$currentTable.']' . $currentField;
        }
        $sqlSelectResult .= $currentField . ", ";
    }
    return substr($sqlSelectResult, 0, strlen($sqlSelectResult) - 2);
}

/**
 * @param mixed $valueExist search value into array
 * @param array $array collection used in the search
 * @return bool true if value exist into array, false other wise
 */
function array_value_exist($valueExist, $array){
    FieldDefinition::array_value_exist($valueExist, $array);
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
        return '[' . $field . ']';
    }
    return $field;
}

/**
 * @param string $classFullName
 * @return string
 */
function getClassName($classFullName){
    return FieldDefinition::getClassName($classFullName);
}

/**
 * @param array $fieldDefinition
 * @return bool
 */
function isFilterAble($fieldDefinition){
    return FieldDefinition::isFilterAble($fieldDefinition);
}

/**
 * @param array $fieldDefinition
 * @return string
 */
function getDisplayName($fieldDefinition){
    return FieldDefinition::getDisplayName($fieldDefinition);
}

/**
 * @param array $fieldDefinition
 * @return string
 */
function getJsType($fieldDefinition){
   return FieldDefinition::getJsType($fieldDefinition);
}

/**
 * @param array $fieldDefinition
 * @return bool
 */
function visible($fieldDefinition){
    return FieldDefinition::visible($fieldDefinition);
}

/**
 * @param array $fieldDefinition
 * @return string
 */
function getType($fieldDefinition){
    return FieldDefinition::getType($fieldDefinition);
}

/**
 * @param string $type Library type
 * @return bool
 */
function isSortableType($type){
    return FieldDefinition::isSortableType($type);
}

/**
 * @param array $fieldDefinition
 * @return bool
 */
function isSortable($fieldDefinition){
    return FieldDefinition::isSortable($fieldDefinition);
}