<?php

namespace Dandelion\MVC;

/**
 * Dandelion MVC 1.0.0.12
 * 
 * PHP Version 5.3
 * 
 * @author    Alex Alvarez Gárciga <aagarciga@gmail.com>
 * @copyright 2011-2013 Alex Alvarez Gárciga / Dandelion (http://www.thedandelionproject.com)
 * @license   http://www.opensource.org/licenses/mit-license.php MIT
 * @link      http://www.thedandelionproject.com
 */

/**
 * 
 * GLOBAL DEFINITIONS
 */

/**
 * When __DIR__ is not defined, prior 5.3.0
 */
if (!defined('__DIR__'))
    define('__DIR__', dirname(__FILE__));

define('MVC_DIR_ROOT', __DIR__);

define('MVC_DIR_CORE', MVC_DIR_ROOT . DIRECTORY_SEPARATOR . 'Core');
define('MVC_DIR_APP', MVC_DIR_ROOT . DIRECTORY_SEPARATOR . 'Application');
define('MVC_DIR_PUBLIC', MVC_DIR_ROOT . DIRECTORY_SEPARATOR . 'Public');

/**
 * 
 * CORE DEFINITIONS
 */
define('MVC_DIR_CORE_DATA', MVC_DIR_CORE . DIRECTORY_SEPARATOR . 'Data');
define('MVC_DIR_CORE_INTERFACES', MVC_DIR_CORE . DIRECTORY_SEPARATOR . 'Interfaces');
define('MVC_DIR_CORE_NOMENCLATURES', MVC_DIR_CORE . DIRECTORY_SEPARATOR . 'Nomenclatures');

/**
 * 
 * APPLICATION DEFINITIONS
 */
define('MVC_DIR_APP_CONTROLLERS', MVC_DIR_APP . DIRECTORY_SEPARATOR . 'Controllers');
define('MVC_DIR_APP_DATA', MVC_DIR_APP . DIRECTORY_SEPARATOR . 'Data');
define('MVC_DIR_APP_LIBRARIES', MVC_DIR_APP . DIRECTORY_SEPARATOR . 'Libraries');
define('MVC_DIR_APP_MODELS', MVC_DIR_APP . DIRECTORY_SEPARATOR . 'Models');
define('MVC_DIR_APP_VIEWS', MVC_DIR_APP . DIRECTORY_SEPARATOR . 'Views');

define('MVC_DIR_APP_VIEWS_SHARED', MVC_DIR_APP_VIEWS . DIRECTORY_SEPARATOR . 'Shared');

/**
 * 
 * PUBLIC DEFINITIONS
 */
define('MVC_DIR_PUBLIC_IMAGES', MVC_DIR_PUBLIC . DIRECTORY_SEPARATOR . 'Images');
define('MVC_DIR_PUBLIC_SCRIPTS', MVC_DIR_PUBLIC . DIRECTORY_SEPARATOR . 'Scripts');
define('MVC_DIR_PUBLIC_SHARED', MVC_DIR_PUBLIC . DIRECTORY_SEPARATOR . 'Shared');
define('MVC_DIR_PUBLIC_UPLOADS', MVC_DIR_PUBLIC . DIRECTORY_SEPARATOR . 'Uploads');
define('MVC_DIR_PUBLIC_STYLES', MVC_DIR_PUBLIC . DIRECTORY_SEPARATOR . 'Styles');

define('MVC_DIR_PUBLIC_SHARED_IMAGES', MVC_DIR_PUBLIC_SHARED . DIRECTORY_SEPARATOR . 'Images');
define('MVC_DIR_PUBLIC_SHARED_SCRIPTS', MVC_DIR_PUBLIC_SHARED . DIRECTORY_SEPARATOR . 'Scripts');
define('MVC_DIR_PUBLIC_SHARED_STYLES', MVC_DIR_PUBLIC_SHARED . DIRECTORY_SEPARATOR . 'Styles');

/**
 *
 * SETTINGS DEFINITIONS
 */
define('MVC_SETTINGS_INSTANCE', 'Application');


include_once 'Core/Exceptions.Core.php';

use Dandelion\MVC\Core;
use Dandelion\MVC\Core\Exceptions;

/**
 * @internal This function is for Auto Class Loader feature. 
 * @internal Please don't modify.
 * @internal The Auto Class Loader feature only work for classes in to the
 *            __autoload folder list:
 *              MVC_DIR_CORE
 *              MVC_DIR_CORE_DATA
 *              MVC_DIR_CORE_INTERFACES
 *              MVC_DIR_CORE_NOMENCLATURES 
 *              MVC_DIR_APP_CONTROLLERS
 *              MVC_DIR_APP_LIBRARIES
 *              MVC_DIR_APP_MODELS
 * @ignore
 */

function __autoload($className) {
    if (is_file(MVC_DIR_CORE . DIRECTORY_SEPARATOR . $className . '.php'))
        require_once MVC_DIR_CORE . DIRECTORY_SEPARATOR . $className . '.php';
    else if (is_file(MVC_DIR_CORE_DATA . DIRECTORY_SEPARATOR . $className . '.php'))
        require_once MVC_DIR_CORE_DATA . DIRECTORY_SEPARATOR . $className . '.php';
    else if (is_file(MVC_DIR_CORE_INTERFACES . DIRECTORY_SEPARATOR . $className . '.php'))
        require_once MVC_DIR_CORE_INTERFACES . DIRECTORY_SEPARATOR . $className . '.php';
    else if (is_file(MVC_DIR_CORE_NOMENCLATURES . DIRECTORY_SEPARATOR . $className . '.php'))
        require_once MVC_DIR_CORE_NOMENCLATURES . DIRECTORY_SEPARATOR . $className . '.php';
    else if (is_file(MVC_DIR_APP_CONTROLLERS . DIRECTORY_SEPARATOR . $className . '.php'))
        require_once MVC_DIR_APP_CONTROLLERS . DIRECTORY_SEPARATOR . $className . '.php';
    else if (is_file(MVC_DIR_APP_LIBRARIES . DIRECTORY_SEPARATOR . $className . '.php'))
        require_once MVC_DIR_APP_LIBRARIES . DIRECTORY_SEPARATOR . $className . '.php';
    else if (is_file(MVC_DIR_APP_MODELS . DIRECTORY_SEPARATOR . $className . '.php'))
        require_once MVC_DIR_APP_MODELS . DIRECTORY_SEPARATOR . $className . '.php';
    else
        throw new Exceptions\ClassNotFoundException($className);
}

include_once MVC_DIR_CORE . DIRECTORY_SEPARATOR . 'FrontController.php';

/**
 * Front Controller instance for Singleton behavior.
 * 
 * @author    Alex Alvarez Gárciga <aagarciga@gmail.com>
 * @copyright 2011-2013 Alex Alvarez Gárciga / Dandelion (http://www.thedandelionproject.com)
 * @license   http://www.opensource.org/licenses/mit-license.php MIT
 * @link      http://www.thedandelionproject.com
 */
final class index extends Core\FrontController {

    /**
     * Dispatcher Gateway.
     * 
     * @return \Dandelion\MVC\index
     */
    public static function Main() {
        session_start();
        error_reporting(E_ALL);
        return new index();
    }

}

/**
 * Calling to exit() will flush all buffers started by ob_start() 
 * to default output.
 * 
 * If you want to avoid calling exit() in FastCGI, but really, 
 * positively want to exit cleanly from nested function call 
 * or include, consider doing it the Python way: 
 */

try {
    index::Main()->Dispatch();
} catch (Exceptions\SystemExit $e) {
    unset($e);
} catch (Exceptions\ClassNotFoundException $e) {
    echo $e->getMessage();
} catch (Exceptions\ConfigurationNotChargedException $e) {
    echo $e->getMessage();
} catch (Exceptions\ControllerNotFoundException $e) {
    echo $e->getMessage();
} catch (Exceptions\ActionNotFoundException $e) {
    echo $e->getMessage();
} catch (Exceptions\ViewNotFoundException $e) {
    echo $e->getMessage();
} catch (\Exception $e) {
    echo $e->getMessage();
}
?>
