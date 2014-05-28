<?php

namespace Dandelion\MVC\Application\Controllers\Main\Actions;

use Dandelion\MVC\Core;

require_once MVC_DIR_CORE . DIRECTORY_SEPARATOR . 'Action.php';

/**
 * @ignore
 */
class Index extends Core\Action {

    public function Execute() {
        $this->Title = 'Fermen Warehouse Management System';
        $this->Items = $this->controller->UnitOfWork->ICPARM00Repository->GetAll();
    }

    public function PreAction() {

    }

    public function PostAction() {

    }
    
}

?>
