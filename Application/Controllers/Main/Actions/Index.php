<?php

namespace Dandelion\MVC\Application\Controllers\Main\Actions;

use Dandelion\MVC\Core;

require_once MVC_DIR_CORE . DIRECTORY_SEPARATOR . 'Action.php';

/**
 * @ignore
 */
class Index extends Core\Action {

    public function Execute() {
        $this->Title = 'VFP Business Series - Warehouse Management System';
        $this->Items = $this->controller->Dat00UnitOfWork->ICPARM00Repository->GetAll();
        $this->Users = $this->controller->FvpDataUnitOfWork->SysuserRepository->GetAll();
    }

    public function PreAction() {

    }

    public function PostAction() {

    }
    
}

?>
