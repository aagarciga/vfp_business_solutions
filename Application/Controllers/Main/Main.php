<?php

namespace Dandelion\MVC\Application\Controllers;

use Dandelion\MVC\Core;

require_once MVC_DIR_CORE . DIRECTORY_SEPARATOR . 'Request.php';
require_once MVC_DIR_CORE . DIRECTORY_SEPARATOR . 'ActionsController.php';

/**
 * Description of Main
 *
 * @author Alex Alvarez Gárciga
 */
class Main extends Core\ActionsController {

    protected function PreController(Core\Request $request) {
        echo 'Main Precontroller Execution. <br/>';
        parent::PreController($request);
    }

    protected function PostController(Core\Request $request) {
        echo '<br/>Main Postcontroller Execution. <br/>';
        parent::PostController($request);
    }

}

?>
