<?php

namespace Dandelion\MVC\Application\Controllers;

use Dandelion\MVC\Core;

require_once MVC_DIR_CORE . DIRECTORY_SEPARATOR . 'Request.php';
require_once MVC_DIR_CORE . DIRECTORY_SEPARATOR . 'ActionsController.php';

/**
 * Description of Main
 *
 * @author Alex Alvarez Gárciga
 * @ignore
 */
class Main extends Core\ActionsController {
    protected function PostController(Core\Request $request) {
        parent::PostController($request);
        
        echo "<br />";
        echo "<hr />";
        echo "<small>Powered by Dandelion MVC ". MVC_VERSION . "</small>";
    }
}

?>
