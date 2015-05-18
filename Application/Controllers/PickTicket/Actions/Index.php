<?php
/**
 * Project:  VFP Business Series
 * Copyright: 2014. VFP Business Solutions, LLC
 */

namespace Dandelion\MVC\Application\Controllers\PickTicket\Actions;

use Dandelion\MVC\Core\Action;
use Dandelion\MVC\Application\Controllers\PickTicket\Models\TicketViewModel;
use Dandelion\Diana\BootstrapPager;

/**
 * VFP Business Series PickTicket Default Controller Action
 * @name Index
 */


class Index extends Action {

    public function Execute() {
        $this->Title = 'Pick Ticket | VFP Business Series - Warehouse Management System';
//        $pickticketItemsPerPage = $this->Request->Application->getPickTicketPagerItermsPerPage();
//        $pickticketItemsPerPage = 10;
//        $_SESSION['pickticketsitemperpages'] = $pickticketItemsPerPage;
//        
//        $this->UserName = (!isset($_SESSION['username']))? 'Anonimous' : $_SESSION['username'];        
//        $this->ItemPerPage = $pickticketItemsPerPage;
        
//        $this->Pager = $this->controller->GetTicketsPager($this->UserName, $this->ItemPerPage);       
//        $this->Pager->Paginate();        
//        $tickets = $this->Pager->getCurrentPagedItems();
//        $ticketsViewModel = array();
        
//        foreach ($tickets as $ticket) {
//            $sohead = $this->controller->DatUnitOfWork->SOHEADRepository->GetByOrdnum($ticket->ORDNUM);
//            $currentCompany = '';
//            if ($sohead !== null) {
//                $currentCompany = $sohead->getCompany();
//            }
//            
////            $currentTicket = new TicketViewModel($ticket->SHPRELNO, $ticket->ORDNUM, $ticket->QTYSHPREL, $ticket->QTYPICK, $ticket->QTYPACK, $ticket->COMPANY);
////            $currentTicket = new TicketViewModel($ticket->SHPRELNO, $ticket->ORDNUM, $ticket->QTYSHPREL, $ticket->QTYPICK, $ticket->QTYPACK);
//            $currentTicket = new TicketViewModel($ticket->SHPRELNO, $ticket->ORDNUM, $currentCompany);
//            $ticketsViewModel []= $currentTicket;
//        }
        
//        $this->Tickets = $ticketsViewModel;
        
        $this->JavascriptBootstrapPager = BootstrapPager::GetJavascriptBootstrapPager();
        
        $this->ShowLocationField = $_SESSION['usercomp_uselocno'];
        
    }
}