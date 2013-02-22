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

    protected function PreController(Core\Request $request) {
        echo '<strong> HTTP Method: </strong>'.$request->RequestMethod.'<br/>';
        echo '<strong> Controller: </strong>'.$request->controller.'<br/>';
        echo '<strong> Action: </strong>'.$request->action.'<br/>';
        echo '<br/>';
        echo '[ ';
    }

    protected function PostController(Core\Request $request) {
        echo ' ]';
    }

}

?>
