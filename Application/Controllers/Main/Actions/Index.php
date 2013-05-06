<?php

namespace Dandelion\MVC\Application\Controllers\Main\Actions;

use Dandelion\MVC\Core;

require_once MVC_DIR_CORE . DIRECTORY_SEPARATOR . 'Action.php';

/**
 * @ignore
 */
class Index extends Core\Action {

    public function Execute() {

    }

    public function PreAction() {
        $this->Title = 'Dandelion MVC Application Test';
    }

    public function PostAction() {

    }
    
}

?>
