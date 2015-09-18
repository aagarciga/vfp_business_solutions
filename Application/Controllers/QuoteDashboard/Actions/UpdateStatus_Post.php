<?php

/**
 * Project:  VFP Business Series
 * Copyright: 2014. VFP Business Solutions, LLC
 */

namespace Dandelion\MVC\Application\Controllers\QuoteDashboard\Actions;

use Dandelion\MVC\Core\Action;

/**
 * Ajax Update Status Items
 * @name UpdateStatus_Post
 */
class UpdateStatus_Post extends Action {

    /**
     * Update Status Items
     * @return JSON
     */
    public function Execute() {
                
        $qutno = $this->Request->hasProperty('qutno') ? $this->Request->qutno : '';
        $status = $this->Request->hasProperty('status') ? $this->Request->status : '';

        $result = "failure";
        if ($qutno && $status !== '') {
            $success = $this->controller->DatUnitOfWork->QUHSTHRepository->UpdateStatus($qutno, $status);
            if ($success) {
                $result = 'success';
            } 
        } else {
            $result = "Request values are empty";
        }
        
        return json_encode($result);
    }
}