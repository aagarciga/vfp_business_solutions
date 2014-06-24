<?php
/**
 * Diana Data Access 1.0.0.7
 *
 * PHP Version 5.3
 *
 * @author    Alex Alvarez Gárciga <aagarciga@gmail.com>
 * @copyright 2011-2014 Alex Alvarez Gárciga / Dandelion (http://www.thedandelionproject.com)
 * @license   http://www.opensource.org/licenses/mit-license.php MIT
 * @link      http://www.thedandelionproject.com
 */

namespace Dandelion\Diana;

define('DIANA_VERSION', "1.0.0.7");

/**
 *
 * GLOBAL DEFINITIONS
 */

/**
 * When __DIR__ is not defined, prior 5.3.0
 */
if (!defined('__DIR__'))
    define('__DIR__', dirname(__FILE__));

define('DIANA_DIR_ROOT', __DIR__);

define('DIANA_DIR_DRIVERS', DIANA_DIR_ROOT . DIRECTORY_SEPARATOR . 'Drivers');
define('DIANA_DIR_INTERFACES', DIANA_DIR_ROOT . DIRECTORY_SEPARATOR . 'Interfaces');

/**
 *
 * DRIVERS DEFINITIONS
 */
define('DIANA_DIR_DRIVER_ADVANTAGE_ODBC', DIANA_DIR_DRIVERS . DIRECTORY_SEPARATOR . 'AdvantageODBC');

/**
 * Diana Instace
 */
final class Diana {
    
    static private $instance = null;
    
    public static function Init() {
        
        if (self::$instance == null) {
            self::$instance = new Diana();            
        }
        spl_autoload_register(array(self::$instance, 'classLoader'));
        
        return self::$instance;
    }
    
    final function __construct() {
        
    }
    
    final function __clone() {
        ;
    }

    /**
     * 
     * @param type $className
     */
    private function classLoader($className) {
        $className = explode("\\", $className);
        $className = $className[count($className)-1];

        if (is_file(DIANA_DIR_ROOT . DIRECTORY_SEPARATOR . $className . '.php'))
            require_once DIANA_DIR_ROOT . DIRECTORY_SEPARATOR . $className . '.php';
        else if (is_file(DIANA_DIR_INTERFACES . DIRECTORY_SEPARATOR . $className . '.php'))
            require_once DIANA_DIR_INTERFACES . DIRECTORY_SEPARATOR . $className . '.php';
        else if (is_file(DIANA_DIR_DRIVER_ADVANTAGE_ODBC . DIRECTORY_SEPARATOR . $className . '.php'))
            require_once DIANA_DIR_DRIVER_ADVANTAGE_ODBC . DIRECTORY_SEPARATOR . $className . '.php';
        else if (is_file(MVC_DIR_CORE_NOMENCLATURES . DIRECTORY_SEPARATOR . $className . '.php'))
            require_once MVC_DIR_CORE_NOMENCLATURES . DIRECTORY_SEPARATOR . $className . '.php';            
    }
}