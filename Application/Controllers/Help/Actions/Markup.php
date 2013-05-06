<?php

namespace Dandelion\MVC\Application\Controllers\Help\Actions;

use Dandelion\MVC\Core\Action;

require_once MVC_DIR_CORE . DIRECTORY_SEPARATOR . 'Action.php';

/**
 * @ignore
 */
class Markup extends Action {

    public function Execute() {
        $this->Title = 'Html5 Boilerplate | Dandelion MVC ' . MVC_VERSION ;
    }
    
}

?>
