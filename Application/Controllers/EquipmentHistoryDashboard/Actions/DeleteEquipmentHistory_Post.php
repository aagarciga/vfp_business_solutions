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
        $isSuccess = false;

        $this->qbtxlineid = $this->Request->hasProperty('qbtxlineid') ? $this->Request->qbtxlineid : '';
        $this->equipid = $this->Request->hasProperty('equipid') ? $this->Request->equipid : '';


        $this->status = EQUIPMENT_HISTORY_DASHBORD_STATUS_AVAILABLE;

        if ($this->qbtxlineid !== ''){
            $entity = $this->controller->DatUnitOfWork->SWEQUIPDRepository->GetByQbtxlineid($this->qbtxlineid);
            $this->ordnum = '';
            $this->vesselid = '';
            $this->installdte = '';
            $this->expdtein = '';
            $this->daterec = '';

            if($entity){
                $isSuccess = $this->controller->DatUnitOfWork->SWEQUIPDRepository->Delete($entity);
                $isSuccess &= $this->controller->DatUnitOfWork->SWEQUIPRepository->UpdateStatus($this->equipid, $this->status);
                $isSuccess &= $this->controller->DatUnitOfWork->SWEQUIPRepository->UpdateDates($this->equipid, $this->installdte, $this->expdtein, $this->daterec);
                $isSuccess &= $this->controller->DatUnitOfWork->SWEQUIPRepository->RemoveLastHistoryReference($this->equipid);
                $isSuccess &= $this->controller->DatUnitOfWork->SWEQUIPRepository->RemoveLastWorkOrder($this->equipid);
                $isSuccess &= $this->controller->DatUnitOfWork->SWEQUIPRepository->RemoveLastVesselid($this->equipid);
            }
        }

        if ($isSuccess) {
            $result['success'] = true;
            $result['equipid'] = $this->equipid; // For equipmnet status update
            $result['ordnum'] = $this->ordnum;
            $result['vesselid'] = $this->vesselid;
            $result['status'] = $this->status;
            $result['qbtxlineid'] = '';
            $result['installdte'] = $this->installdte;
            $result['expdtein'] = $this->expdtein;
            $result['daterec'] = $this->daterec;
        }
        return json_encode($result);
    }


}