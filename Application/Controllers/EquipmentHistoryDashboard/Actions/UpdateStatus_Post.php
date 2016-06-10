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
 * Ajax Endpoint for Update Status
 * @name UpdateStatus_Post
 */
class UpdateStatus_Post extends Action
{
    /**
     * Update Status Items
     * @return JSON
     */
    public function Execute() {

        $this->equipid = $this->Request->hasProperty('equipid') ? $this->Request->equipid : '';
        $status = $this->Request->hasProperty('status') ? $this->Request->status : '';

        $this->ordnum = '';
        $this->inspectno = '';

        $now = new \DateTime();
        $this->fupdate = $now->format(GLOBAL_DEFAULT_DATE_FORMAT);
        $this->installdte = $this->fupdate;

        $this->expdtein = '';
        $this->daterec = '';

        $this->UserName = $this->Session->getSessionValue(DASHBOARD_SESSION_PARAM_USERNAME, DASHBOARD_SESSION_PARAM_USERNAME_DEFAULT);
        $this->User = $this->controller->VfpDataUnitOfWork->SysuserRepository->GetByUsername($this->UserName);
        $this->userID = $this->User->getUserid();

        $this->vesselid = '';

        $result = array('success' => false);
        $isSuccess = $this->controller->DatUnitOfWork->SWEQUIPRepository->UpdateStatus($this->equipid, $status);


        $this->historyId = GUIDGenerator::getGUID();

        $entity = new SWEQUIPD($this->equipid, $this->ordnum, $this->inspectno, $this->installdte, $this->expdtein, $this->daterec, '', $this->fupdate, '', $this->userID, '', $this->historyId, '', $this->vesselid);
        $isSuccess &= $this->controller->DatUnitOfWork->SWEQUIPDRepository->Add($entity);

        if ($status === EQUIPMENT_HISTORY_DASHBORD_STATUS_AVAILABLE){
            $isSuccess &= $this->controller->DatUnitOfWork->SWEQUIPRepository->RemoveLastHistoryReference($this->equipid);
        }

        if ($isSuccess) {
            $result['success'] = true;
        }

        return json_encode($result);
    }
}