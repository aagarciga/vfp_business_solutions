<?php

namespace Dandelion\MVC\Core;

require_once MVC_DIR_CORE_INTERFACES . DIRECTORY_SEPARATOR . 'INameable.php';
require_once MVC_DIR_CORE . DIRECTORY_SEPARATOR . 'Request.php';
require_once MVC_DIR_CORE . DIRECTORY_SEPARATOR . 'ApplicationState.php';

/**
 * Description of Controller
 *
 * @abstract
 * @author Alex Alvarez Gárciga
 */
abstract class Controller implements Interfaces\INameable {

    /**
     * 
     * @AttributeType string
     * @var string 
     */
    private $name;

    /**
     * 
     * @ParamType name string
     */
    function __construct($name) {
        $this->name = ucfirst($name);
    }

    /*
     * 
     * @ReturnType string
     */

    public function __toString() {
        return $this->name;
    }

    /**
     * 
     * @ParamType request Dandelion\Mvc\Core\Request
     * @ReturnType void 
     */
    public abstract function Dispatch(Request $request = null);

    /**
     *
     * @param Dandelion\MVC\Core\Request $request
     * @throws Exception 
     */
    public final function Forward(Request $request) {
        //e.g. Default
        $controllerName = ucfirst($request->controller);

        //e.g. Application/Controller/Default/Default.Controller.php
        $classFile = MVC_DIR_APP_CONTROLLERS . DIRECTORY_SEPARATOR . $controllerName . DIRECTORY_SEPARATOR . $controllerName . '.php';

        if (!is_file($classFile)) {

            if ($request->application->getState() == ApplicationState::Development()) {
                throw new Exceptions\ControllerNotFoundException($controllerName);
                //TODO: Debug error information 
            } else {
                header("Status: 404 Not Found");
            }
        }

        require_once $classFile;

        $class = "Dandelion\\MVC\\Application\\Controllers\\$controllerName";

        if (!class_exists($class)) {
            if ($request->application->getState() == ApplicationState::Development()) {
                throw new Exceptions\ControllerNotFoundException($controllerName);
                //TODO: Debug error information.
            } else {
                header("Status: 404 Not Found");
            }
        }

        $controller = new $class($request->controller);

        $controller->PreController($request);
        $controller->PostController($request);
    }

    /**
     * @ParamType request Mvc.Core.Request
     * @ReturnType void
     */
    protected function PreController(Request $request) {
        $this->Dispatch($request);
    }

    /**
     * @ParamType request Mvc.Core.Request
     * @ReturnType void
     */
    protected function PostController(Request $request) {
        unset($request);
        throw new Exceptions\SystemExit(); //Finish script execution cleanly
    }

}

?>
