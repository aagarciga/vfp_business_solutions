<?php

namespace Dandelion\MVC\Core;

use Dandelion\MVC\Core\Nomenclatures;
use Dandelion\MVC\Application\Application;

require_once MVC_DIR_CORE . DIRECTORY_SEPARATOR . 'Controller.php';
require_once MVC_DIR_CORE . DIRECTORY_SEPARATOR . 'Request.php';
require_once MVC_DIR_CORE_NOMENCLATURES . DIRECTORY_SEPARATOR . 'RequestMethod.php';

/**
 * Dandelion MVC front controller.
 *
 * @author      Alex Alvarez Gárciga <aagarciga@gmail.com>
 * @copyright   2011-2016 Alex Alvarez Gárciga / Dandelion (http://www.thedandelionproject.com)
 * @license     http://www.opensource.org/licenses/mit-license.php MIT
 * @link        http://www.thedandelionproject.com
 * @ignore
 */
class FrontController extends Controller
{

    /**
     *
     * @param string $name
     */
    final function __construct($name = 'index')
    {
        parent::__construct($name);
    }

    final function __clone()
    {
        ;
    }

    /**
     *
     * @param \Dandelion\MVC\Core\Request $request
     * @example index.php?controller=<controller>[&action=<action>][<request:&a=1[&b=2...]>]
     */
    public function Dispatch(Request $request = null)
    {

        $application = new Application();

        $action = null;

        /*
         * Default Request
         */
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
            $request->$key = filter_input(INPUT_GET, $key);
        }

        $request->Application = $application;

        /**
         * HTTP GET Request Handler
         * Adds to Request Object all GET values
         */
        if ($_SERVER['REQUEST_METHOD'] === "GET") {
            $request->RequestMethod = Nomenclatures\RequestMethod::GET();
        }

        /**
         * HTTP POST Request Handler
         * Adds to Request Object all GET and POST values
         */
        if ($_SERVER['REQUEST_METHOD'] === "POST") {
            foreach ($_POST as $key => $value) {
                if ($key == "controller" or $key == "action") {
                    continue;
                }
                $request->$key = filter_input(INPUT_POST, $key);
            }
            $request->RequestMethod = Nomenclatures\RequestMethod::POST();
        }

        /**
         * HTTP PUT Request Handler
         * Adds to Request Object all GET Values
         */
        if ($_SERVER['REQUEST_METHOD'] === "PUT") {
            $request->RequestMethod = Nomenclatures\RequestMethod::PUT();
        }

        /**
         * HTTP PATCH Request Handler
         * Adds to Request Object all GET Values
         */
        if ($_SERVER['REQUEST_METHOD'] === "PATCH") {
            $request->RequestMethod = Nomenclatures\RequestMethod::PATCH();
        }

        /**
         * HTTP DELETE Request Handler
         * Adds to Request Object all POST Values
         */
        if ($_SERVER['REQUEST_METHOD'] === "DELETE") {
            $request->RequestMethod = Nomenclatures\RequestMethod::DELETE();
        }

        $this->Redirect($request);
    }

}