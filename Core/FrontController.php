<?php

namespace Dandelion\MVC\Core;

use Dandelion\MVC\Core\Nomenclatures;

require_once MVC_DIR_CORE . DIRECTORY_SEPARATOR . 'Controller.php';
require_once MVC_DIR_CORE . DIRECTORY_SEPARATOR . 'Application.php';
require_once MVC_DIR_CORE . DIRECTORY_SEPARATOR . 'Request.php';
require_once MVC_DIR_CORE_NOMENCLATURES . DIRECTORY_SEPARATOR . 'RequestMethod.php';

/**
 * Dandelion MVC front controller.
 *
 * @author      Alex Alvarez Gárciga <aagarciga@gmail.com>
 * @copyright   2011-2013 Alex Alvarez Gárciga / Dandelion (http://www.thedandelionproject.com)
 * @license     http://www.opensource.org/licenses/mit-license.php MIT
 * @link        http://www.thedandelionproject.com
 * @ignore
 */
class FrontController extends Controller {

    /**
     * 
     * @param string $name
     */
    final function __construct($name = 'index') {
        parent::__construct($name);
    }
    
    final function __clone() {
        ;
    }
  
    /**
     * 
     * @param \Dandelion\MVC\Core\Request $request
     * @example index.php?controller=<controller>[&action=<action>][<request:&a=1[&b=2...]>]
     */
    public function Dispatch(Request $request = null) {

        $application = new Application();

        $action = null;
        $request = null;

        /**
         * HTTP GET Request Handler
         */
        if ($_SERVER['REQUEST_METHOD'] == "GET") {
            if (!empty($_GET['controller'])) {
                $controller = $_GET['controller'];
            } else {
                $controller = $application->getDefaultController();
            }

            if (!empty($_GET['action'])) {
                $action = $_GET['action'];
            } else {
                $action = $application->getDefaultAction();
            }

            $request = new Request($controller, $action);

            foreach ($_GET as $key => $value) {
                if ($key == "controller" or $key == "action") {
                    continue;
                }
                $request->$key = $value;
            }

            $request->Application = $application;
            $request->RequestMethod = Nomenclatures\RequestMethod::GET();
        }

        /**
         * HTTP POST Request Handler
         */
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            if (!empty($_GET['controller'])) {
                $controller = $_GET['controller'];
            } else {
                $controller = $application->getDefaultController();
            }
            if (!empty($_GET['action'])) {
                $action = $_GET['action'];
            } else {
                $action = $application->getDefaultAction();
            }

            $request = new Request($controller, $action);

            foreach ($_POST as $key => $value) {
                if ($key == "controller" or $key == "action") {
                    continue;
                }
                $request->$key = $value;
            }

            $request->Application = $application;
            $request->RequestMethod = Nomenclatures\RequestMethod::POST();
        }

        $this->Redirect($request);
    }

}

?>
