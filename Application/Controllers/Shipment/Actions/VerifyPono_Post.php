<?php

/**
 * Project:  VFP Business Series
 * Copyright: 2014. VFP Business Solutions, LLC
 */

namespace Dandelion\MVC\Application\Controllers\Shipment\Actions;

use Dandelion\MVC\Core\Action;

/**
 * Ajax Pono verification
 * @name VerifyPono_Post
 */
class VerifyPono_Post extends Action {

    /**
     * Verify if the given pono exists and retrieve its postatus value
     * @return JSON
     */
    public function Execute() {
        $pono = filter_input(INPUT_POST, 'pono');
        
        $result = array();
        
        $queryResult = $this->controller->DatUnitOfWork->POHDOPRepository->GetByPono($pono);
        
        if ($queryResult !== null) {
            $result['verified'] = true;
            $result['postatus'] = $queryResult->getPostatus();
        }
        else{
            $result['verified'] = false;
        }
        
        return json_encode($result);
    }
    
}