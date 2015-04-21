<?php

/**
 * Project:  VFP Business Series
 * Copyright: 2014. VFP Business Solutions, LLC
 */

namespace Dandelion\MVC\Application\Controllers\Dashboard\Actions;

use Dandelion\MVC\Core\Action;

/**
 * Ajax Update Job Status in SPHEAD Record
 * @name GetJobStatusItems_Post
 */
class UpdateSOHEADJobStatus_Post extends Action {

    /**
     * Returns Job Status Items
     * @return JSON
     */
    public function Execute() {
        $ordnum = $this->Request->hasProperty('ordnum') ? $this->Request->ordnum : '';
        $jobstatus = $this->Request->hasProperty('jobstatus') ? $this->Request->jobstatus : '';
        $result = "failure";
        if ($ordnum && $jobstatus) {
            
            $success = $this->controller->DatUnitOfWork->SOHEADRepository->UpdateJobStatus($ordnum, $jobstatus);
            if ($success) {
                $result = 'success';
            } 
        } else {
            $result = "Request values are empty";
        }
        
        return json_encode($result);
    }
}