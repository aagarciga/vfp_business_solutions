<?php
/**
 * Project:  VFP Business Series
 * Copyright: 2014. VFP Business Solutions, LLC
 */

namespace Dandelion\MVC\Application\Controllers\Main\Actions;

use Dandelion\MVC\Core\Action;

require_once MVC_DIR_CORE . DIRECTORY_SEPARATOR . 'Action.php';

/**
 * VFP Business Series Default Controller Action
 * @name Index
 */
class Index extends Action {

    /**
     * Page to show some user and ICPARM00 data in order to demostrate 
     * multiple data context mechanism feature.
     */
    public function Execute() {
        $this->Title = 'VFP Business Series - Warehouse Management System';
        $this->Users = $this->controller->FvpDataUnitOfWork->SysuserRepository->GetAll();
        $this->Items = $this->controller->Dat00UnitOfWork->ICPARM00Repository->GetAll();
        
        $this->UserName = (!isset($_SESSION['username']))? 'Anonimous' : $_SESSION['username'];
        
    }

}

?>
