<?php

/**
 * Project:  VFP Business Series
 * Copyright: 2014. VFP Business Solutions, LLC
 */

namespace Dandelion\MVC\Application\Controllers\EquipmentHistoryDashboard\Actions;

use Dandelion\MVC\Core\Action;
use Dandelion\GUIDGenerator;
use Dandelion\MVC\Application\Models\Entities\SWEQUIPD;

/**
 * Ajax Endpoint for UpdateEquipmentNotes
 * @name UpdateEquipmentHistory_Post
 */
class UpdateEquipmentNotes_Post extends Action {

    /**
     * Returns JSON with success
     * @return JSON
     */
    public function Execute() {
        $result = array('success' => false);

        $this->equipid = $this->Request->hasProperty('equipid') ? $this->Request->equipid : '';
        $this->notes = $this->Request->hasProperty('notes') ? $this->Request->notes : '';

        $isSuccess = $this->controller->DatUnitOfWork->SWEQUIPRepository->UpdateNotes($this->equipid, $this->notes);

        if ($isSuccess) {
            $result['success'] = true;
        }
        return json_encode($result);
    }


}