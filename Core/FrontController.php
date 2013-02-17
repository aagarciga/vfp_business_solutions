<?php

namespace Dandelion\MVC\Core;

require_once MVC_DIR_CORE . DIRECTORY_SEPARATOR . 'Controller.php';
require_once MVC_DIR_CORE . DIRECTORY_SEPARATOR . 'Application.php';
require_once MVC_DIR_CORE . DIRECTORY_SEPARATOR . 'Request.php';

/**
 * Description of FrontController
 *
 * @author Alex Alvarez Gárciga
 */
class FrontController extends Controller {
    /*
     * @ParamType name string
     * @DefaultValue index
     */

    function __construct($name = 'index') {
        parent::__construct($name);
    }

    /**
     * 
     * @param Request $request
     * @ParamType $request Dandelion\MVC\Core\Request
     * @ReturnType void
     * @example index.php?controller=<controller>[&action=<action>][<request:&a=1[&b=2...]>]
     */
    public function Dispatch(Request $request = null) {

        $application = new Application();

        $controller = "";
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
                if ($key = "controller" or $key = "action") {
                    continue;
                }
                $request->$key = $value;
            }

            $request->application = $application;
            $request->httpMethod = 'GET';
        }

        /**
         * HTTP POST Request Handler
         */
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            if (!empty($_POST['controller'])) {
                $controller = $_POST['controller'];
            } else {
                $controller = $application->getDefaultController();
            }
            if (!empty($_POST['action'])) {
                $action = $_POST['action'];
            } else {
                $action = $application->getDefaultAction();
            }

            $request = new Request($controller, $action);

            foreach ($_POST as $key => $value) {
                if ($key = "controller" or $key = "action") {
                    continue;
                }
                $request->$key = $value;
            }

            $request->application = $application;
            $request->httpMethod = 'POST';
        }

        $this->Forward($request);
    }

}

?>
