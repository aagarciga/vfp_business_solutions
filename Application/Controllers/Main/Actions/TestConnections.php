<?php
/**
 * Project:  VFP Business Series
 * Copyright: 2014. VFP Business Solutions, LLC
 */

namespace Dandelion\MVC\Application\Controllers\Main\Actions;

use Dandelion\MVC\Core\Action;

/**
 * Page to show some user and ICPARM00 data in order to demostrate 
 * multiple data context mechanism feature.
 * @name TestConnections
 */
class TestConnections extends Action {

    /**
     * Page to show some user and ICPARM00 data in order to demostrate 
     * multiple data context mechanism feature.
     */
    public function Execute() {
        $this->Title = 'Test Connections | VFP Business Series - Warehouse Management System';
        $this->Users = $this->controller->VfpDataUnitOfWork->SysuserRepository->GetAll();
        $this->Items = $this->controller->DatUnitOfWork->ICPARMRepository->GetAll();
        
        $this->UserName = (!isset($_SESSION['username']))? 'Anonimous' : $_SESSION['username'];
        
    }

}
