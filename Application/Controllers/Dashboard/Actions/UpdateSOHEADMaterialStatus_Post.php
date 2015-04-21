<?php

/**
 * Project:  VFP Business Series
 * Copyright: 2014. VFP Business Solutions, LLC
 */

namespace Dandelion\MVC\Application\Controllers\Dashboard\Actions;

use Dandelion\MVC\Core\Action;

/**
 * Ajax Get Material Status Items
 * @name UpdateSOHEADMaterialStatus_Post
 */
class UpdateSOHEADMaterialStatus_Post extends Action {

    /**
     * Returns Material Status Items
     * @return JSON
     */
    public function Execute() {
                
        $ordnum = $this->Request->hasProperty('ordnum') ? $this->Request->ordnum : '';
        $mtrlstatus = $this->Request->hasProperty('mtrlstatus') ? $this->Request->mtrlstatus : '';
        $result = "failure";
        if ($ordnum && $mtrlstatus) {
            
            $success = $this->controller->DatUnitOfWork->SOHEADRepository->UpdateMaterialStatus($ordnum, $mtrlstatus);
            if ($success) {
                $result = 'success';
            } 
        } else {
            $result = "Request values are empty";
        }
        
        return json_encode($result);
    }
}