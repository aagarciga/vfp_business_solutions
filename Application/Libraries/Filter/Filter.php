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

define('PHP_EXT_FILE', '.php');




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
        $this->dirsFilter = $this->loadDirs();
    }

    final function __clone(){
        ;
    }

    private function loadDirs(){
        return array(

        );
    }

    private function classLoader($className){
        $arrayClassName = explode("\\", $className);
        $className = $arrayClassName[count($arrayClassName) - 1];

        if (is_file(FILTER_DIR_ROOT . DIRECTORY_SEPARATOR . $className . PHP_EXT_FILE)){
            require_once FILTER_DIR_ROOT . DIRECTORY_SEPARATOR . $className . PHP_EXT_FILE;
            return;
        }

        foreach($this->dirsFilter as $key => $value){
            if (is_file(FILTER_DIR_ROOT . DIRECTORY_SEPARATOR . $value . DIRECTORY_SEPARATOR . $className . PHP_EXT_FILE)){
                require_once FILTER_DIR_ROOT . DIRECTORY_SEPARATOR . $value . DIRECTORY_SEPARATOR . $className . PHP_EXT_FILE;
            }
        }
    }
}