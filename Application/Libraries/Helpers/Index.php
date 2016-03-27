<?php
/**
 * User: Victor
 * Date: 26/03/2016
 * Time: 11:11
 * @author    Victor Luis Aguado Leon <victorluisaguadoleon@gmail.com>
 * @copyright 2011-2014 Alex Alvarez G�rciga / Dandelion (http://www.thedandelionproject.com)
 * @license   http://www.opensource.org/licenses/mit-license.php MIT
 * @link      http://www.thedandelionproject.com
 */

namespace Dandelion\Tools\Helpers;

define("HELPERS_VERSION", "1.0.0.0");

/**
 *
 * GLOBAL DEFINITIONS
 */

/**
 * When __DIR__ is not defined, prior 5.3.0
 */

define('HELPERS_DIR_ROOT', dirname(__FILE__));

define('HELPERS_DIR_BUILDER', HELPERS_DIR_ROOT . DIRECTORY_SEPARATOR. 'Builder');

define('HELPERS_DIR_DYNAMIC_INCLUDE', HELPERS_DIR_ROOT . DIRECTORY_SEPARATOR . 'DynamicInclude');

define('HELPERS_DIR_FIELD_DEFINITION', HELPERS_DIR_ROOT . DIRECTORY_SEPARATOR . 'FieldDefinition');

require_once HELPERS_DIR_ROOT . DIRECTORY_SEPARATOR . 'defineConstant.php';

/**
 * Created by: Victor
 * Class Helpers
 * @package Dandelion\Tools\Helpers
 */
final class Helpers
{
    static private $instance = null;

    private $dirsFilter;

    public static function Init(){
        if (self::$instance == null){
            self::$instance = new Helpers();
        }
        spl_autoload_register(array(self::$instance, 'classLoader'));

        return self::$instance;
    }

    final function __construct(){
        $directoryHead = HELPERS_DIR_ROOT . DIRECTORY_SEPARATOR;
        $rootDirectorys = array(
            //Added folder Builder to auto load class.
            HELPERS_DIR_BUILDER => false,
            //Added DynamicInclude to auto load class.
            HELPERS_DIR_DYNAMIC_INCLUDE => false,
            //Added FieldDefinition to auto load class.
            HELPERS_DIR_FIELD_DEFINITION => false,
        );

        $this->dirsFilter = \Dandelion\Tools\loadDirs($rootDirectorys);
    }

    final function __clone(){
        ;
    }

    private function classLoader($className){
        \Dandelion\Tools\classLoader($className, $this->dirsFilter, HELPERS_DIR_ROOT);
    }
}