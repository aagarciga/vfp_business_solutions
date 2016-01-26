<?php
/**
 * User: Victor
 * Date: 25/01/2016
 * Time: 21:27
 * @author    Victor Luis Aguado Leon <victorluisaguadoleon@gmail.com>
 * @copyright 2011-2014 Alex Alvarez G?rciga / Dandelion (http://www.thedandelionproject.com)
 * @license   http://www.opensource.org/licenses/mit-license.php MIT
 * @link      http://www.thedandelionproject.com
 */

namespace Dandelion\Tools;

define("TOOLS_VERSION", "1.0.0.0");

/**
 *
 * GLOBAL DEFINITIONS
 */

/**
 * When __DIR__ is not defined, prior 5.3.0
 */
if (!defined('__DIR__'))
    define('__DIR__', dirname(__FILE__));

define('TOOLS_DIR_ROOT', __DIR__);

require_once TOOLS_DIR_ROOT . DIRECTORY_SEPARATOR . 'tools.php';


final class Tools
{
    static private $instance = null;

    private $dirsFilter;

    final function __construct(){
        $directoryHead = FILTER_DIR_ROOT . DIRECTORY_SEPARATOR;
        $rootDirectorys = array(
        );

        $this->dirsFilter = loadDirs($rootDirectorys);
    }

    final function __clone(){
        ;
    }

    public static function Init(){
        if (self::$instance == null){
            self::$instance = new Tools();
        }
        spl_autoload(array(self::$instance, 'classLoader'));

        return self::$instance;
    }

    private function classLoader($className){
        classLoader($className, $this->dirsFilter, TOOLS_DIR_ROOT);
    }
}