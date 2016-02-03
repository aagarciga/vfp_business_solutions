<?php
/**
 * User: Victor
 * Date: 24/01/2016
 * Time: 15:26
 * @author    Victor Luis Aguado Leon <victorluisaguadoleon@gmail.com>
 * @copyright 2011-2014 Alex Alvarez G�rciga / Dandelion (http://www.thedandelionproject.com)
 * @license   http://www.opensource.org/licenses/mit-license.php MIT
 * @link      http://www.thedandelionproject.com
 */

namespace Dandelion\Tools\CodeGenerator;

define("GENERATOR_VERSION", "1.0.0.0");

/**
 *
 * GLOBAL DEFINITIONS
 */

/**
 * When __DIR__ is not defined, prior 5.3.0
 */


define('TOOLS_DIR_GENERATOR_ROOT', dirname(__FILE__));

define('GENERATOR_DIR_INTERFACES', 'Interfaces');

define('TOOLS_DIR_GENERATOR_VIRTUALCODE', 'VirtualCode');

define('TOOLS_DIR_GENERATOR_GENERATOR', 'Generator');


final class CodeGenerator
{
    static private $instance = null;

    private $dirsFilter;

    public static function Init(){
        if (self::$instance == null){
            self::$instance = new Generator();
        }
        spl_autoload(array(self::$instance, 'classLoader'));

        return self::$instance;
    }

    final function __construct(){
        $directoryHead = TOOLS_DIR_GENERATOR_ROOT . DIRECTORY_SEPARATOR;
        $rootDirectorys = array(
            $directoryHead . GENERATOR_DIR_INTERFACES => false,
            $directoryHead . TOOLS_DIR_GENERATOR_VIRTUALCODE => true,
            $directoryHead . TOOLS_DIR_GENERATOR_GENERATOR => true,
        );

        $this->dirsFilter = loadDirs($rootDirectorys);
    }

    final function __clone(){
        ;
    }

    private function classLoader($className){
        classLoader($className, $this->dirsFilter, TOOLS_DIR_GENERATOR_ROOT);
    }
}