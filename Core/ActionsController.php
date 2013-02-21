<?php

namespace Dandelion\MVC\Core;

require_once MVC_DIR_CORE . DIRECTORY_SEPARATOR . 'Request.php';
require_once MVC_DIR_CORE . DIRECTORY_SEPARATOR . 'Controller.php';
require_once MVC_DIR_CORE_NOMENCLATURES . DIRECTORY_SEPARATOR . 'ApplicationState.php';

/**
 * Description of ActionsController
 * 
 * @abstract
 * @author Alex Alvarez Gárciga
 */
abstract class ActionsController extends Controller {

    /**
     *
     * @ParamType request Dandelion\Mvc\Core\Request
     * @ReturnType void
     * @throws Exception 
     */
    public final function Dispatch(Request $request = null) {
        
        //e.g. Index
        $actionName = ucfirst($request->action);

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
            $action->PreAction();
        }

        $action->Execute();
        $action->Render();
        
        if (method_exists($action, 'PostAction')) {
            $action->PostAction();
        }
    }
    
}

?>
