<?php

namespace Dandelion\MVC\Application\Controllers\Main\Actions;

use Dandelion\MVC\Core;

require_once MVC_DIR_CORE . DIRECTORY_SEPARATOR . 'Action.php';

/**
 * @ignore
 */
class Redirection extends Core\Action {

    public function Execute() {
        $this->Redirect('main');
    }
   
}

?>
