<?php
/**
 * Project:  VFP Business Series
 * Copyright: 2014. VFP Business Solutions, LLC
 */

namespace Dandelion\MVC\Application\Controllers\EquipmentHistoryDashboard\Actions;

use Dandelion\MVC\Core\Action;

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

        $equipid = $this->Request->hasProperty('equipid') ? $this->Request->equipid : '';
        $status = $this->Request->hasProperty('status') ? $this->Request->status : '';

        $result = array('success' => false);
        $isSuccess = $this->controller->DatUnitOfWork->SWEQUIPRepository->UpdateStatus($equipid, $status);

        if ($status === EQUIPMENT_HISTORY_DASHBORD_STATUS_AVAILABLE){
            $isSuccess &= $this->controller->DatUnitOfWork->SWEQUIPRepository->RemoveLastHistoryReference($equipid);
        }

        if ($isSuccess) {
            $result['success'] = true;
        }

        return json_encode($result);
    }
}