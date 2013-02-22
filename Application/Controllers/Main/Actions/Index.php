<?php

namespace Dandelion\MVC\Application\Controllers\Main\Actions;

use Dandelion\MVC\Core;

require_once MVC_DIR_CORE . DIRECTORY_SEPARATOR . 'Request.php';
require_once MVC_DIR_CORE . DIRECTORY_SEPARATOR . 'Action.php';

/**
 * Description of Index
 *
 * @author Alex Alvarez Gárciga
 * @ignore
 */
class Index extends Core\Action {

    /**
     *
     * @param Dandelion\MVC\Core\Request $request 
     */
    public function Execute(Core\Request $request) {
//        Action logic here (Can be empty)
//        Some Importan request values:
//        $request->application   Dandelion\MVC\Core\Application
//        $request->httpMethod    string(GET | POST)
//        $request->controller    especialization of Dandelion\MVC\Core\ActionsController 
//        $request->action        Dandelion\MVC\Core\Action 

        $this->WelcomeMessage .= 'World';
    }

    public function PreAction(Core\Request $request) {
        /**
         * Preaction Logic Here (Can be empty)
         * Before Execute Action Logic and View Rendering... 
         */
        $this->WelcomeMessage = 'Hello ';
    }

    public function PostAction(Core\Request $request) {
        /**
         * Postaction Logic Here (Can be empty) 
         * After Execute Action Logic and View Rendering ...
         */
        echo('!!!');
    }

}

?>
