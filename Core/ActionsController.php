<?php

namespace Dandelion\MVC\Core;

use Dandelion\MVC\Core\Nomenclatures\ApplicationState;
use Dandelion\MVC\Core\Exceptions\ViewNotFoundException;

require_once MVC_DIR_CORE . DIRECTORY_SEPARATOR . 'Request.php';
require_once MVC_DIR_CORE . DIRECTORY_SEPARATOR . 'Controller.php';
require_once MVC_DIR_CORE_NOMENCLATURES . DIRECTORY_SEPARATOR . 'ApplicationState.php';
require_once MVC_DIR_CORE_NOMENCLATURES . DIRECTORY_SEPARATOR . 'RequestMethod.php';

/**
 * Dandelion MVC parent of all application controllers.
 * 
 * @author      Alex Alvarez Gárciga <aagarciga@gmail.com>
 * @copyright   2011-2015 Alex Alvarez Gárciga / Dandelion (http://www.thedandelionproject.com)
 * @license     http://www.opensource.org/licenses/mit-license.php MIT
 * @link        http://www.thedandelionproject.com
 * @ignore
 */
abstract class ActionsController extends Controller {

    /**'
     * @type \Dandelion\MVC\Application\Application
     */
    protected $Application;

    /**
     * @var Session
     */
    public $Session;

    /**
     * @param \Dandelion\MVC\Core\Request $request
     */
    protected function Init(Request $request){
        $this->Application = $request->Application;
    }

    /**
     * @param \Dandelion\MVC\Core\Request $request
     */
    public final function __construct(Request $request) {
        parent::__construct($request->Controller);
        $this->Session = $this->data['Session'] = $request->Session;
        spl_autoload_register(array($this, 'ViewModelLoader'));
        $this->Init($request);
    }
    
    /**
     * Dispatcher for Controller's Actions.
     * 
     * @param \Dandelion\MVC\Core\Request $request
     * @throws Exceptions\ActionNotFoundException
     */
    public final function Dispatch(Request $request = null) {
        
        //e.g. Index
        $actionName = ucfirst($request->Action);
        if ($request->RequestMethod == Nomenclatures\RequestMethod::POST()) {
            //e.g. Index_Post
            $actionName .= '_Post'; 
        }

        if ($request->RequestMethod == Nomenclatures\RequestMethod::PUT()) {
            //e.g. Index_Put
            $actionName .= '_Put';
        }

        if ($request->RequestMethod == Nomenclatures\RequestMethod::PATCH()) {
            //e.g. Index_Patch
            $actionName .= '_Patch';
        }

        if ($request->RequestMethod == Nomenclatures\RequestMethod::DELETE()) {
            //e.g. Index_Delete
            $actionName .= '_Delete';
        }

        //e.g. App/Controllers/Default/Actions/Index.php
        $classFile = MVC_DIR_APP_CONTROLLERS . DIRECTORY_SEPARATOR . $this . DIRECTORY_SEPARATOR . 'Actions' . DIRECTORY_SEPARATOR . $actionName . '.php';

        if (!is_file($classFile)) {
            if ($request->Application->getState() == ApplicationState::Development()) {
                throw new Exceptions\ActionNotFoundException($actionName);
                //TODO: Debug error information 
            } else {
                header("Status: 404 Not Found");
            }
        }

        require_once $classFile;

        $class = "Dandelion\\MVC\\Application\\Controllers\\$this\\Actions\\$actionName";

        if (!class_exists($class)) {
            if ($request->Application->getState() == ApplicationState::Development()) {
                throw new Exceptions\ActionNotFoundException($actionName);
                //TODO: Debug error information.
            } else {
                header("Status: 404 Not Found");
            }
        }

        $action = new $class($request, $this);

        if (method_exists($action, 'PreAction')) {
            $action->PreAction();
        }
        
        $canRender = false;
        $executeResult = $action->Execute();
        if ( $executeResult === null) {
            $canRender = true;
        }
        
        if (method_exists($action, 'PostAction')) {
            $action->PostAction();
        }
        
        if ($canRender) {
           $this->Render($action);
        }
        else{
            echo $executeResult ;
        }
        
    }
    
    /**
     * 
     * 
     * @throws Exceptions\ViewNotFoundException
     */
    private final function Render(Action $action) {
        $controllerName = ucfirst($action->Request->Controller);
        $viewFile = MVC_DIR_APP_VIEWS . DIRECTORY_SEPARATOR . $controllerName . DIRECTORY_SEPARATOR . $action . '.View.php';
        
        if (is_file($viewFile)) {
            extract($action->Data());
            include $viewFile;
        }
        else {
            if ($action->Request->Application->getState() == ApplicationState::Development()) {
                throw new ViewNotFoundException($this);
                //TODO: Debug error information 
            } else {
                header("Status: 404 Not Found");
            }
        }
    }
    
    private function ViewModelLoader($className) {
        
        $className = explode("\\", $className);
        $className = $className[count($className)-1];

        $require_file = MVC_DIR_APP_VIEWS . DIRECTORY_SEPARATOR . $this . DIRECTORY_SEPARATOR . "Models" . DIRECTORY_SEPARATOR . $className . '.php';
        if (is_file($require_file)){
            require_once $require_file;
        }   
    }
    
}
