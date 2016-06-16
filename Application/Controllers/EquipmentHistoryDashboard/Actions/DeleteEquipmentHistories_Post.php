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
 * Ajax Endpoint for UpdateEquipmentHistories
 * @name UpdateEquipmentHistories_Post
 */
class DeleteEquipmentHistories_Post extends Action {

    /**
     * Returns JSON with success value
     * @return JSON
     */
    public function Execute() {
        $result = array('success' => false);
        $isSuccess = false;
        $this->qbtxlineidCollection = $this->Request->hasProperty('qbtxlineidCollection') ? json_decode($this->Request->qbtxlineidCollection) : array();
        $this->equipidCollection = $this->Request->hasProperty('equipidCollection') ? json_decode($this->Request->equipidCollection) : array();

        $this->status = EQUIPMENT_HISTORY_DASHBORD_STATUS_AVAILABLE;
        $this->ordnum = '';
        $this->vesselid = '';
        $this->installdte = '';
        $this->expdtein = '';
        $this->daterec = '';

        foreach ($this->qbtxlineidCollection as $index => $qbtxlineid){
            $currentEquipid = $this->equipidCollection[$index];

            if ($qbtxlineid !== ''){
                $entity = $this->controller->DatUnitOfWork->SWEQUIPDRepository->GetByQbtxlineid($qbtxlineid);
                if ($entity) {
                    $isSuccess = $this->controller->DatUnitOfWork->SWEQUIPDRepository->Delete($entity);
                    $isSuccess &= $this->controller->DatUnitOfWork->SWEQUIPRepository->UpdateStatus($currentEquipid, $this->status);
                    $isSuccess &= $this->controller->DatUnitOfWork->SWEQUIPRepository->UpdateDates($currentEquipid, $this->installdte, $this->expdtein, $this->daterec);
                    $isSuccess &= $this->controller->DatUnitOfWork->SWEQUIPRepository->RemoveLastHistoryReference($currentEquipid);
                    $isSuccess &= $this->controller->DatUnitOfWork->SWEQUIPRepository->RemoveLastWorkOrder($currentEquipid);
                    $isSuccess &= $this->controller->DatUnitOfWork->SWEQUIPRepository->RemoveLastVesselid($currentEquipid);
                }
            }
        }

        if ($isSuccess) {
            $result['success'] = true;
            $result['equipidCollection'] = $this->equipidCollection;
            $result['ordnum'] = $this->ordnum;
            $result['vesselid'] = $this->vesselid;
            $result['status'] = $this->status;
            $result['qbtxlineidCollection'] = $this->qbtxlineidCollection;
            $result['installdte'] = $this->installdte;
            $result['expdtein'] = $this->expdtein;
            $result['daterec'] = $this->daterec;
        }
        return json_encode($result);
    }


}