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
}