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
 * Ajax Endpoint for ProjectManagerSearch
 * @name ProjectManagerSearch_Post
 */
class AddEquipmentHistory_Post extends Action {

    /**
     * Returns Job Status Items
     * @return JSON
     */
    public function Execute() {
        $this->equipid = $this->Request->hasProperty('equipid') ? $this->Request->equipid : '';
        $this->ordnum = $this->Request->hasProperty('ordnum') ? $this->Request->ordnum : '';
        $this->inspectno = $this->Request->hasProperty('inspectno') ? $this->Request->inspectno : '';
        $this->installdte = $this->Request->hasProperty('installdte') ? $this->Request->installdte : '';
        $this->expdtein = $this->Request->hasProperty('expdtein') ? $this->Request->expdtein : '';
        $this->daterec = $this->Request->hasProperty('daterec') ? $this->Request->daterec : '';

        $this->historyId = GUIDGenerator::getGUID();

        $this->UserName = $this->Session->getSessionValue(DASHBOARD_SESSION_PARAM_USERNAME, DASHBOARD_SESSION_PARAM_USERNAME_DEFAULT);
        $this->User = $this->controller->VfpDataUnitOfWork->SysuserRepository->GetByUsername($this->UserName);
        $this->userID = $this->User->getUserid();

        $this->status = 'Assigned';

        $now = new \DateTime();
        $this->fupdate = $now->format(GLOBAL_DEFAULT_DATE_FORMAT);

        $result = array('success' => false);

        $entity = new SWEQUIPD($this->equipid, $this->ordnum, $this->inspectno, $this->installdte, $this->expdtein, $this->daterec, '', $this->fupdate, '', $this->userID, '', $this->historyId, '');

        $isSuccess = $this->controller->DatUnitOfWork->SWEQUIPDRepository->Add($entity);
        $isSuccess &= $this->controller->DatUnitOfWork->SWEQUIPRepository->UpdateWorkOrderFor($this->equipid, $this->ordnum, $this->status);
        if ($isSuccess) {
            $result['success'] = true;
            $result['equipid'] = $this->equipid;
            $result['ordnum'] = $this->ordnum;
            $result['status'] = $this->status;
        }
        return json_encode($result);
    }
}