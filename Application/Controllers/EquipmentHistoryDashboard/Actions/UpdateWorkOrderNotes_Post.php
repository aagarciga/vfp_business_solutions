<?php

/**
 * Project:  VFP Business Series
 * Copyright: 2014. VFP Business Solutions, LLC
 */

namespace Dandelion\MVC\Application\Controllers\EquipmentHistoryDashboard\Actions;

use Dandelion\MVC\Core\Action;

/**
 * Ajax Endpoint for Save Work Order Notes Fields Value
 * @name UpdateWorkOrderNotes_Post
 */
class UpdateWorkOrderNotes_Post extends Action {

    /**
     * Returns Material Status Items
     * @return JSON
     */
    public function Execute() {
        
        $ordnum = $this->Request->hasProperty('ordnum') ? $this->Request->ordnum : '';
        $notes= $this->Request->hasProperty('notes') ? $this->Request->notes : ''; 

        $result = array('success' => false);
        $isSuccess = $this->controller->DatUnitOfWork->SOHEADRepository->UpdateNotes($ordnum, $notes);
        if ($isSuccess) {
            $result['success'] = true;
        }
        
        return json_encode($result);
    }
}