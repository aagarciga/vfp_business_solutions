<?php

/**
 * Project:  VFP Business Series
 * Copyright: 2014. VFP Business Solutions, LLC
 */

namespace Dandelion\MVC\Application\Controllers\PickTicket\Actions;

use Dandelion\MVC\Core\Action;

/**
 * Ajax Barcode verification
 * @name ShipmentUpdate_Post
 */
class GetTicketPage extends Action {

    /**
     * Commit Shipment Changes
     * @return JSON
     */
    public function Execute() {
        $pono = filter_input(INPUT_GET, 'page');
                
        $result = array();        
        
        if ($successful) {
            $result['success'] = true;
        }
        else{
            $result['success'] = false;
        }
        
        return json_encode($result);
    }
    
}