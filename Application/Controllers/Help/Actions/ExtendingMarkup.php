<?php

namespace Dandelion\MVC\Application\Controllers\Help\Actions;

use Dandelion\MVC\Core\Action;

require_once MVC_DIR_CORE . DIRECTORY_SEPARATOR . 'Action.php';

/**
 * @ignore
 */
class ExtendingMarkup extends Action {

    public function Execute() {
        $this->Title = 'Extend and customize Html5 Boilerplate | Dandelion MVC ' . MVC_VERSION ;
    }
    
}

?>
