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

define('EDITABLE_KEY', 'editable');

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
        return array_key_exists(EDITABLE_KEY, $fieldDefinition) ? $fieldDefinition[EDITABLE_KEY] : false;
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
            TYPE_CHAR => "text",
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
        return !array_value_exist($type, $nonSortableType);
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
        return isSortableType($fieldType);
    }
}