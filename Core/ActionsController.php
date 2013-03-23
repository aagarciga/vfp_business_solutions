<?php

namespace Dandelion\MVC\Core;

use Dandelion\MVC\Core\Nomenclatures\ApplicationState;

require_once MVC_DIR_CORE . DIRECTORY_SEPARATOR . 'Request.php';
require_once MVC_DIR_CORE . DIRECTORY_SEPARATOR . 'Controller.php';
require_once MVC_DIR_CORE_NOMENCLATURES . DIRECTORY_SEPARATOR . 'ApplicationState.php';
require_once MVC_DIR_CORE_NOMENCLATURES . DIRECTORY_SEPARATOR . 'RequestMethod.php';

/**
 * Dandelion MVC parent of all application controllers.
 * 
 * @author      Alex Alvarez Gárciga <aagarciga@gmail.com>
 * @copyright   2011-2013 Alex Alvarez Gárciga / Dandelion (http://www.thedandelionproject.com)
 * @license     http://www.opensource.org/licenses/mit-license.php MIT
 * @link        http://www.thedandelionproject.com
 */
abstract class ActionsController extends Controller {

    public final function __construct($name) {
        parent::__construct($name);
    }
    
    /**
     * Dispatcher for Controller's Actions.
     * 
     * @param \Dandelion\MVC\Core\Request $request
     * @throws Exceptions\ActionNotFoundException
     */
    public final function Dispatch(Request $request = null) {
        
//e.g. Index
        $actionName = ucfirst($request->action);
        if ($request->RequestMethod == Nomenclatures\RequestMethod::POST()) {
            //e.g. Index_Post
            $actionName .= '_Post'; 
        }

        //e.g. App/Controllers/Default/Actions/Index.php
        $classFile = MVC_DIR_APP_CONTROLLERS . DIRECTORY_SEPARATOR . $this . DIRECTORY_SEPARATOR . 'Actions' . DIRECTORY_SEPARATOR . $actionName . '.php';

        if (!is_file($classFile)) {
            if ($request->application->getState() == ApplicationState::Development()) {
                throw new Exceptions\ActionNotFoundException($actionName);
                //TODO: Debug error information 
            } else {
                header("Status: 404 Not Found");
            }
        }

        require_once $classFile;

        $class = "Dandelion\\MVC\\Application\\Controllers\\$this\\Actions\\$actionName";

        if (!class_exists($class)) {
            if ($request->application->getState() == ApplicationState::Development()) {
                throw new Exceptions\ActionNotFoundException($actionName);
                //TODO: Debug error information.
            } else {
                header("Status: 404 Not Found");
            }
        }

        $action = new $class($request);

        //Method Exists Verification aim to optimization...

        if (method_exists($action, 'PreAction')) {
            $action->PreAction($request);
        }

        $action->Execute($request);
        $action->Render();
        
        if (method_exists($action, 'PostAction')) {
            $action->PostAction($request);
        }
    }
    
}

?>
