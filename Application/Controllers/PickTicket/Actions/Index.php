<?php
/**
 * Project:  VFP Business Series
 * Copyright: 2014. VFP Business Solutions, LLC
 */

namespace Dandelion\MVC\Application\Controllers\PickTicket\Actions;

use Dandelion\MVC\Core\Action;

/**
 * VFP Business Series PickTicket Default Controller Action
 * @name Index
 */
class Index extends Action {

    public function Execute() {
        $this->Title = 'Pick Ticket | VFP Business Series - Warehouse Management System';
        
        $this->UserName = (!isset($_SESSION['username']))? 'Anonimous' : $_SESSION['username'];
        
        $this->Tickets = $this->controller->DatUnitOfWork->SOSHPRELRepository->GetAll();
        
    }
}