<?php
/**
 * Diana Data Access 1.0.0.2
 *
 * PHP Version 5.3
 *
 * @author    Alex Alvarez Gárciga <aagarciga@gmail.com>
 * @copyright 2011-2014 Alex Alvarez Gárciga / Dandelion (http://www.thedandelionproject.com)
 * @license   http://www.opensource.org/licenses/mit-license.php MIT
 * @link      http://www.thedandelionproject.com
 */

define('DIANA_VERSION', "1.0.0.2");

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

require_once DIANA_DIR_ROOT . DIRECTORY_SEPARATOR . 'Query.php';
require_once DIANA_DIR_ROOT . DIRECTORY_SEPARATOR . 'QueryResult.php';

require_once DIANA_DIR_INTERFACES . DIRECTORY_SEPARATOR . 'IDBDriver.php';
require_once DIANA_DIR_INTERFACES . DIRECTORY_SEPARATOR . 'IRepository.php';

require_once DIANA_DIR_DRIVER_ADVANTAGE_ODBC . DIRECTORY_SEPARATOR . 'AdvantageODBCDriver.php';
require_once DIANA_DIR_DRIVER_ADVANTAGE_ODBC . DIRECTORY_SEPARATOR . 'AdvantageODBCQuery.php';
