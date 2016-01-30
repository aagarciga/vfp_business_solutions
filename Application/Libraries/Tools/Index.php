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

use Dandelion\Tools\Filter\Filter;
use Dandelion\Tools\CodeGenerator\CodeGenerator;

define("TOOLS_VERSION", "1.0.0.0");

/**
 *
 * GLOBAL DEFINITIONS
 */

/**
 * When __DIR__ is not defined, prior 5.3.0
 */

define('TOOLS_DIR_ROOT', dirname(__FILE__));
define('CODE_GENERATOR', 'CodeGenerator');
define('FILTER', 'Filter');

require_once TOOLS_DIR_ROOT . DIRECTORY_SEPARATOR . 'tools.php';
require_once TOOLS_DIR_ROOT . DIRECTORY_SEPARATOR . CODE_GENERATOR . DIRECTORY_SEPARATOR . 'Index.php';
require_once TOOLS_DIR_ROOT . DIRECTORY_SEPARATOR . FILTER . DIRECTORY_SEPARATOR . 'Index.php';

final class Tools
{
    static private $instance = null;

    private $dirsFilter;

    final function __construct(){
        $directoryHead = TOOLS_DIR_ROOT . DIRECTORY_SEPARATOR;
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

        CodeGenerator::Init();
        Filter::Init();

        return self::$instance;
    }

    private function classLoader($className){
        classLoader($className, $this->dirsFilter, TOOLS_DIR_ROOT);
    }
}