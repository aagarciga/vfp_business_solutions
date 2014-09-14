<?php
/**
 * Project:  VFP Business Series
 * Copyright: 2014. VFP Business Solutions, LLC
 */

namespace Dandelion\MVC\Application\Controllers\PickTicket\Actions;

use Dandelion\MVC\Core\Action;
use Dandelion\MVC\Application\Controllers\PickTicket\Models\TicketViewModel;

/**
 * VFP Business Series PickTicket Default Controller Action
 * @name Index
 */


class Index extends Action {

    public function Execute() {
        $this->Title = 'Pick Ticket | VFP Business Series - Warehouse Management System';
        
        $this->UserName = (!isset($_SESSION['username']))? 'Anonimous' : $_SESSION['username'];
        
        $tickets = $this->controller->DatUnitOfWork->SOSHPRELRepository->GetTickets();        
        $ticketsViewModel = array();
        
        foreach ($tickets as $ticket) {
            $ticket->COMPANY = $this->controller->DatUnitOfWork->SOSHPRELHRepository->GetTicketCompanyByOrdNum(trim($ticket->ORDNUM));
            $currentTicket = new TicketViewModel($ticket->SHPRELNO, $ticket->ORDNUM, $ticket->SHPRELDATE, $ticket->BATCH_NO, $ticket->QTYSHPREL, $ticket->QTYPICK, $ticket->QTYPACK, $ticket->WEIGHT, $ticket->COMPANY);
            $ticketsViewModel []= $currentTicket;
        }
        
        $this->Tickets = $ticketsViewModel;
        
    }
}