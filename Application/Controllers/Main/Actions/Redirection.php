<?php

namespace Dandelion\MVC\Application\Controllers\Main\Actions;

use Dandelion\MVC\Core;

/**
 * @ignore
 */
class Redirection extends Core\Action {

    public function Execute() {
        $this->Redirect('Main');
    }
   
}

?>
