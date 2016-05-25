<?php

/**
 * Project:  VFP Business Series
 * Copyright: 2014. VFP Business Solutions, LLC
 */

namespace Dandelion\MVC\Application\Controllers\EquipmentHistoryDashboard\Actions;

use Dandelion\MVC\Core\Action;

/**
 * Ajax Endpoint for GetEquipmentNotes
 * @name GetEquipmentNotes_Post
 */
class GetEquipmentNotes_Post extends Action
{

    /**
     * Returns WorkOrder
     * @return JSON
     */
    public function Execute()
    {

        $result = array('success' => false);

        $this->Equipid = $this->Request->hasProperty('equipid') ? $this->Request->equipid : '';
        error_log($this->Equipid);
        
        $this->entity = $this->controller->DatUnitOfWork->SWEQUIPRepository->GetByEquipid($this->Equipid);

        if ($this->entity) {
            $result['success'] = true;
            $result['equipmentNotesObject']['equipid'] = $this->entity->getEquipid();
            $result['equipmentNotesObject']['notes'] = $this->entity->getNotes();
        }
        return json_encode($result);
    }
}