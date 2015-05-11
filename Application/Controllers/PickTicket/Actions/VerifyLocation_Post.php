<?php

/**
 * Project:  VFP Business Series
 * Copyright: 2014. VFP Business Solutions, LLC
 */

namespace Dandelion\MVC\Application\Controllers\PickTicket\Actions;

use Dandelion\MVC\Core\Action;

/**
 * Ajax Location verification
 * @name VerifyLocation_Post
 */
class VerifyLocation_Post extends Action {

    /**
     * Ajax Location Verification
     * @return JSON
     */
    public function Execute() {
        
        $location = $this->Request->hasProperty('location') ? $this->Request->location : '';
        $queryResult = null;
        $result = array();
        $result['verified'] = false;
        if ($location !== '') {
            $location = strtolower($location);
            $queryResult = $this->controller->DatUnitOfWork->ICLOCRepository->Get("WHERE lower(LOCNO) = '$location'");
            if(count($queryResult)){
                $result['verified'] = true;
            }
        }
        return json_encode($result);
    }
    
}