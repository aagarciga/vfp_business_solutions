<?php
/**
 * Created by PhpStorm.
 * User: Victor
 * Date: 24/01/2016
 * Time: 15:26
 * @author    Victor Luis Aguado Leon <victorluisaguadoleon@gmail.com>
 * @copyright 2011-2014 Alex Alvarez G�rciga / Dandelion (http://www.thedandelionproject.com)
 * @license   http://www.opensource.org/licenses/mit-license.php MIT
 * @link      http://www.thedandelionproject.com
 */

namespace Dandelion\Filter;

define("FILTER_VERSION", "1.0.0.0");

/**
 *
 * GLOBAL DEFINITIONS
 */

/**
 * When __DIR__ is not defined, prior 5.3.0
 */
if (!defined('__DIR__'))
    define('__DIR__', dirname(__FILE__));

define('FILTER_DIR_ROOT', __DIR__);

define('FILTER_DIR_INTERFACES', 'Interfaces');

define('FILTER_DIR_NODES', 'Nodes');

require_once FILTER_DIR_ROOT . DIRECTORY_SEPARATOR . 'tools.php';


final class Filter
{
    static private $instance = null;

    private $dirsFilter;

    public static function Init(){
        if (self::$instance == null){
            self::$instance = new Filter();
        }
        spl_autoload(array(self::$instance, 'classLoader'));

        return self::$instance;
    }

    final function __construct(){
        $directoryHead = FILTER_DIR_ROOT . DIRECTORY_SEPARATOR;
        $rootDirectorys = array(
            $directoryHead . FILTER_DIR_INTERFACES => false,
            $directoryHead . FILTER_DIR_NODES => true
        );

        $this->dirsFilter = loadDirs($rootDirectorys);
    }

    final function __clone(){
        ;
    }

    private function classLoader($className){
        classLoader($className, $this->dirsFilter, FILTER_DIR_ROOT);
    }
}