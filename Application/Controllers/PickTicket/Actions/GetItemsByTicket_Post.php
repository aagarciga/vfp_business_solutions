<?php

/**
 * Project:  VFP Business Series
 * Copyright: 2014. VFP Business Solutions, LLC
 */

namespace Dandelion\MVC\Application\Controllers\PickTicket\Actions;

use Dandelion\MVC\Core\Action;

/**
 * Ajax Get Items by Ticket
 * @name GetItemsByTicket_Post
 */
class GetItemsByTicket_Post extends Action {

    /**
     * Commit Shipment Changes
     * @return JSON
     */
    public function Execute() {
        
        $ticket = $this->Request->hasProperty('ticket') ? $this->Request->ticket : '';
        $showFinished = $this->Request->hasProperty('showFinished') ? $this->Request->showFinished : true;
        
        $result = array();
        
        if ($ticket) {
             
            $items = $this->controller->DatUnitOfWork->SOSHPRELRepository->GetItemsByTicket($ticket, $showFinished);
            
            foreach ($items as $row) {
                $current = array();
                $current['itemno'] = trim($row->ITEMNO);
                $current['qtypick'] = trim($row->QTYPICK);
                $current['qtyshprel'] = trim($row->QTYSHPREL);
                $current['locno'] = trim($row->LOCNO);
                $current['qblistid'] = trim($row->QBLISTID);
                $current['sotxlineid'] = trim($row->SOTXLINEID);
                $current['qbtxlineid'] = trim($row->QBTXLINEID);
                $result[] = $current;
            }
        }
        
        return json_encode($result);
    }
    
}