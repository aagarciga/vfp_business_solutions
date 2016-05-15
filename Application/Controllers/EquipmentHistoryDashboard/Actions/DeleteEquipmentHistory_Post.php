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
 * Ajax Endpoint for UpdateEquipmentHistory
 * @name UpdateEquipmentHistory_Post
 */
class DeleteEquipmentHistory_Post extends Action {

    /**
     * Returns JSON with success value
     * @return JSON
     */
    public function Execute() {
        $result = array('success' => false);

        $this->qbtxlineid = $this->Request->hasProperty('qbtxlineid') ? $this->Request->qbtxlineid : '';
        $this->equipid = $this->Request->hasProperty('equipid') ? $this->Request->equipid : '';


        $this->status = EQUIPMENT_HISTORY_DASHBORD_STATUS_AVAILABLE;

        $entity = $this->controller->DatUnitOfWork->SWEQUIPDRepository->GetByQbtxlineid($this->qbtxlineid);
        $this->ordnum = $entity->getOrdnum();

        $isSuccess = $this->controller->DatUnitOfWork->SWEQUIPDRepository->Delete($entity);
        $isSuccess &= $this->controller->DatUnitOfWork->SWEQUIPRepository->UpdateStatus($this->equipid, $this->status);
        $isSuccess &= $this->controller->DatUnitOfWork->SWEQUIPRepository->RemoveLastHistoryReference($this->equipid);
        $isSuccess &= $this->controller->DatUnitOfWork->SWEQUIPRepository->RemoveLastWorkOrder($this->equipid);

        if ($isSuccess) {
            $result['success'] = true;
            $result['equipid'] = $this->equipid; // For equipmnet status update
            $result['ordnum'] = $this->ordnum;
            $result['status'] = $this->status;
            $result['qbtxlineid'] = $this->qbtxlineid;
        }
        return json_encode($result);
    }


}