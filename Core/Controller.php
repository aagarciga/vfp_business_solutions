<?php

namespace Dandelion\MVC\Core;

require_once MVC_DIR_CORE . DIRECTORY_SEPARATOR . 'Request.php';
require_once MVC_DIR_CORE_INTERFACES . DIRECTORY_SEPARATOR . 'INameable.php';
require_once MVC_DIR_CORE_NOMENCLATURES . DIRECTORY_SEPARATOR . 'ApplicationState.php';


/**
 * Dandelion MVC Controller main concept.
 *
 * @author      Alex Alvarez Gárciga <aagarciga@gmail.com>
 * @copyright   2011-2013 Alex Alvarez Gárciga / Dandelion (http://www.thedandelionproject.com)
 * @license     http://www.opensource.org/licenses/mit-license.php MIT
 * @link        http://www.thedandelionproject.com
 */
abstract class Controller implements Interfaces\INameable {

    /**
     *
     * @var string
     */
    private $name;

    /**
     * 
     * @param string $name
     */
    function __construct($name) {
        $this->name = ucfirst($name);
    }

    /**
     * 
     * @return string
     */
    public function __toString() {
        return $this->name;
    }

    /**
     * 
     * @param \Dandelion\MVC\Core\Request $request
     */
    public abstract function Dispatch(Request $request = null);

    /**
     * 
     * @param \Dandelion\MVC\Core\Request $request
     * @throws Exceptions\ControllerNotFoundException
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
        $controller->PreControllerInvocation($request);
        $controller->PostController($request);
        $controller->PostControllerInvocation($request);
    }

    /**
     * 
     * @param \Dandelion\MVC\Core\Request $request
     */
    protected function PreController(Request $request) {
        ;
    }

    /**
     * 
     * @param \Dandelion\MVC\Core\Request $request
     */
    protected function PostController(Request $request) {
        ;
    }
    
    /**
     * 
     * @param \Dandelion\MVC\Core\Request $request
     */
    final private function PreControllerInvocation(Request $request){
        $this->Dispatch($request);
    }
    
    /**
     * 
     * @param \Dandelion\MVC\Core\Request $request
     * @throws Exceptions\SystemExit
     */
    final private function PostControllerInvocation(Request $request){
        unset($request);
        throw new Exceptions\SystemExit(); //Finish script execution cleanly
    }

}

?>
