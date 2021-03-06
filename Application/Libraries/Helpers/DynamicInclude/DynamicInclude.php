<?php
/**
 * User: Victor
 * Date: 26/03/2016
 * Time: 13:08
 * @author    Victor Luis Aguado Leon <victorluisaguadoleon@gmail.com>
 * @copyright 2011-2014 Alex Alvarez G�rciga / Dandelion (http://www.thedandelionproject.com)
 * @license   http://www.opensource.org/licenses/mit-license.php MIT
 * @link      http://www.thedandelionproject.com
 */

namespace Dandelion\Tools\Helpers;

/**
 * Created by: Victor
 * Class DynamicInclude
 * @package Dandelion\Tools\Helpers
 */
final class DynamicInclude
{
    /**
     * @param string $fileName, file path
     * @param array $data, variable that see in the include file. Format variable => value.
     */
    public static function includeFile($fileName, $data){
        extract($data);
        include $fileName;
    }
}