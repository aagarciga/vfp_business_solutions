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
     * @param string $urlSubmit
     * @param string $httpMethodType
     */
    public static function createFormEditTupleDashboard($fieldsDefinition, $urlSubmit, $httpMethodType){
        $includeFile = HELPERS_DIR_BUILDER . DIRECTORY_SEPARATOR . 'formEditTupleDashboard.php';

        $data = array(
            'FieldsDefinition' => $fieldsDefinition,
            'UrlSubmit' => $urlSubmit,
            'HttpMethodType' => $httpMethodType
        );

        DynamicInclude::includeFile($includeFile, $data);
    }

    public static function buildFieldInput($fieldDefinition){
        //TODO: Me quede aqui
    }
}