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
     * @param \Dandelion\MVC\Core\Request $request
     * @internal param $
     * @return void
     */
    public function Execute(Core\Request $request) {
//        Action logic here (Can be empty)
//        Some Important request values:
//        $request->application   Dandelion\MVC\Core\Application
//        $request->httpMethod    string(GET | POST)
//        $request->controller    Especialization of Dandelion\MVC\Core\ActionsController
//        $request->action        Dandelion\MVC\Core\Action         
    }

    public function PreAction(Core\Request $request) {
        /**
         * PreAction Logic Here (Can be empty)
         * Before Execute Action Logic and View Rendering... 
         */
        $this->Title = 'Dandelion MVC Application Test';
    }

    public function PostAction(Core\Request $request) {
        /**
         * PostAction Logic Here (Can be empty)
         * After Execute Action Logic and View Rendering ...
         */
    }
    
}

?>
