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
class UpdateEquipmentHistories_Post extends Action {

    /**
     * Returns JSON with success, equipment id and equipment new status for equipment update
     * @return JSON
     */
    public function Execute() {
        $result = array('success' => false);

        $this->qbtxlineidCollection = $this->Request->hasProperty('qbtxlineidCollection') ? json_decode($this->Request->qbtxlineidCollection) : array();
        $this->equipidCollection = $this->Request->hasProperty('equipidCollection') ? json_decode($this->Request->equipidCollection) : array();
        $this->inspectno = $this->Request->hasProperty('inspectno') ? $this->Request->inspectno : '';
        $this->installdte = $this->Request->hasProperty('installdte') ? $this->Request->installdte : '';
        $this->expdtein = $this->Request->hasProperty('expdtein') ? $this->Request->expdtein : '';
        $this->daterec = $this->Request->hasProperty('daterec') ? $this->Request->daterec : '';

        $this->equipid = '';
        $this->qbtxlineid = '';

        $this->UserName = $this->Session->getSessionValue(DASHBOARD_SESSION_PARAM_USERNAME, DASHBOARD_SESSION_PARAM_USERNAME_DEFAULT);
        $this->User = $this->controller->VfpDataUnitOfWork->SysuserRepository->GetByUsername($this->UserName);
        $this->userID = $this->User->getUserid();

        $this->status = EQUIPMENT_HISTORY_DASHBORD_STATUS_NOTRETURNED;

        $now = new \DateTime();
        $this->fupddate = $now->format(GLOBAL_DEFAULT_DATE_FORMAT);

        $this->ordnum = 'HAVE';
        $this->vesselid = 'HAVE';

        foreach ($this->qbtxlineidCollection as $index => $qbtxlineid){
            $currentEquipid = $this->equipidCollection[$index];

            $entity = $this->controller->DatUnitOfWork->SWEQUIPDRepository->GetByQbtxlineid($qbtxlineid);

            if ($this->inspectno !== ''){
                $entity->setInspectno($this->inspectno);
            } else {
                $this->inspectno = $entity->getInspectno();
            }
            if ($this->installdte !== ''){
                $entity->setInstalldte($this->installdte);
            } else {
                $this->installdte = $entity->getInstalldte();
            }
            if ($this->expdtein !== ''){
                $entity->setExpdtein($this->expdtein);
            } else {
                $this->expdtein = $entity->getExpdtein();
            }
            if ($this->daterec !== ''){
                $entity->setDaterec($this->daterec);
            } else {
                $this->daterec = $entity->getDaterec();
            }
            if ($this->fupddate !== ''){
                $entity->setFupddate($this->fupddate);
            } else {
                $this->fupddate = $entity->getFupddate();
            }
            $entity->setFuserid($this->userID);

//        $this->ordnum = $entity->getOrdnum();
//        $this->vesselid = $entity->getVesselid();

            $isSuccess = $this->controller->DatUnitOfWork->SWEQUIPDRepository->Update($entity);
            $isSuccess &= $this->controller->DatUnitOfWork->SWEQUIPRepository->UpdateDates($currentEquipid, $this->installdte, $this->expdtein, $this->daterec);

            if ($this->daterec) {
                $this->status = EQUIPMENT_HISTORY_DASHBORD_STATUS_AVAILABLE;
                $isSuccess &= $this->controller->DatUnitOfWork->SWEQUIPRepository->RemoveLastWorkOrder($currentEquipid);
                $isSuccess &= $this->controller->DatUnitOfWork->SWEQUIPRepository->RemoveLastVesselid($currentEquipid);
                $this->ordnum = '';
                $this->vesselid = '';
            }

            $isSuccess &= $this->controller->DatUnitOfWork->SWEQUIPRepository->UpdateStatus($currentEquipid, $this->status);
        }

        if ($isSuccess) {
            $result['success'] = true;
            $result['equipidCollection'] = $this->equipidCollection;
            $result['ordnum'] = $this->ordnum;
            $result['status'] = $this->status;
            $result['qbtxlineidCollection'] = $this->qbtxlineidCollection;
            $result['installdte'] = $this->installdte;
            $result['expdtein'] = $this->expdtein;
            $result['daterec'] = $this->daterec;
            $result['vesselid'] = $this->vesselid;
        }
        return json_encode($result);
    }


}