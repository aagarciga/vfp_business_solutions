<?php

namespace Dandelion\MVC\Application\Controllers\Main\Actions;

use Dandelion\MVC\Core;

require_once MVC_DIR_CORE . DIRECTORY_SEPARATOR . 'Request.php';
require_once MVC_DIR_CORE . DIRECTORY_SEPARATOR . 'Action.php';
/**
 * Description of Index_Post
 *
 * @author Alex
 * @ignore
 */
class Index_Post extends Core\Action{
    public function Execute(Core\Request $request) {
        $this->Title = 'Dandelion MVC Application Test';
        $this->Name = $request->Name;
    }
}

?>
