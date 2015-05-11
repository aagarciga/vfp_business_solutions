<?php

/**
 * Project:  VFP Business Series
 * Copyright: 2014. VFP Business Solutions, LLC
 */

namespace Dandelion\MVC\Application\Controllers\PickTicket\Actions;

use Dandelion\MVC\Core\Action;

/**
 * Ajax Ticket verification
 * @name VerifyTicket_Post
 */
class VerifyTicket_Post extends Action {

    /**
     * Verify if exist the given ticket
     * @return JSON
     */
    public function Execute() {
        
        $ticket = $this->Request->hasProperty('ticketId') ? $this->Request->ticketId : "";
        $ticket = strtolower($ticket);
        $predicate = "WHERE lower(SHPRELNO) = '$ticket'";
        $result = array();
        
        $queryResult = $this->controller->DatUnitOfWork->SOSHPRELRepository->Get($predicate, 1);
        if (count($queryResult)) {
            $queryResult = $queryResult[0];
            if ($queryResult !== null) {
                $result['verified'] = true;
            }
            else{
                $result['verified'] = false;
            }
        }
        
        
        return json_encode($result);
    }
    
}