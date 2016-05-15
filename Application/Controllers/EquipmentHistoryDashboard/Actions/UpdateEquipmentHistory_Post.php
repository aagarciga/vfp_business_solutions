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
class UpdateEquipmentHistory_Post extends Action {

    /**
     * Returns JSON with success, equipment id and equipment new status for equipment update
     * @return JSON
     */
    public function Execute() {
        $result = array('success' => false);

        $this->qbtxlineid = $this->Request->hasProperty('qbtxlineid') ? $this->Request->qbtxlineid : '';
        $this->equipid = $this->Request->hasProperty('equipid') ? $this->Request->equipid : '';
        $this->inspectno = $this->Request->hasProperty('inspectno') ? $this->Request->inspectno : '';
        $this->installdte = $this->Request->hasProperty('installdte') ? $this->Request->installdte : '';
        $this->expdtein = $this->Request->hasProperty('expdtein') ? $this->Request->expdtein : '';
        $this->daterec = $this->Request->hasProperty('daterec') ? $this->Request->daterec : '';

        $this->UserName = $this->Session->getSessionValue(DASHBOARD_SESSION_PARAM_USERNAME, DASHBOARD_SESSION_PARAM_USERNAME_DEFAULT);
        $this->User = $this->controller->VfpDataUnitOfWork->SysuserRepository->GetByUsername($this->UserName);
        $this->userID = $this->User->getUserid();

        $this->status = EQUIPMENT_HISTORY_DASHBORD_STATUS_NOTRETURNED;
        if ($this->daterec) {
            $this->status = EQUIPMENT_HISTORY_DASHBORD_STATUS_AVAILABLE;
        }

        $now = new \DateTime();
        $this->fupddate = $now->format(GLOBAL_DEFAULT_DATE_FORMAT);

        $entity = $this->controller->DatUnitOfWork->SWEQUIPDRepository->GetByQbtxlineid($this->qbtxlineid);

        $entity->setInspectno($this->inspectno);
        $entity->setInstalldte($this->installdte);
        $entity->setExpdtein($this->expdtein);
        $entity->setDaterec($this->daterec);
        $entity->setFupddate($this->fupddate);
        $entity->setFuserid($this->userID);

        $this->ordnum = $entity->getOrdnum();

        $isSuccess = $this->controller->DatUnitOfWork->SWEQUIPDRepository->Update($entity);
        $isSuccess &= $this->controller->DatUnitOfWork->SWEQUIPRepository->UpdateStatus($this->equipid, $this->status);
        $isSuccess &= $this->controller->DatUnitOfWork->SWEQUIPRepository->UpdateDates($this->equipid, $this->installdte, $this->expdtein, $this->daterec);

        if ($isSuccess) {
            $result['success'] = true;
            $result['equipid'] = $this->equipid;
            $result['ordnum'] = $this->ordnum;
            $result['status'] = $this->status;
            $result['qbtxlineid'] = $this->qbtxlineid;
            $result['installdte'] = $this->installdte;
            $result['expdtein'] = $this->expdtein;
            $result['daterec'] = $this->daterec;
        }
        return json_encode($result);
    }


}