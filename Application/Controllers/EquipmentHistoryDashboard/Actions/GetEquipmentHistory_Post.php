<?php

/**
 * Project:  VFP Business Series
 * Copyright: 2014. VFP Business Solutions, LLC
 */

namespace Dandelion\MVC\Application\Controllers\EquipmentHistoryDashboard\Actions;

use Dandelion\MVC\Core\Action;
use Dandelion\Diana\BootstrapPager;

/**
 * Ajax Endpoint for GetEquipmentHistory
 * @name GetSalesOrder_Post
 */
class GetEquipmentHistory_Post extends Action {

    /**
     * Returns EquipmentHistory
     * @return JSON
     */
    public function Execute() {

        $result = array('success' => false);
        $equipmentHistoryID = $this->Request->hasProperty('qbtxlineid') ? $this->Request->qbtxlineid : '';
        $equipmentHistory = $this->controller->DatUnitOfWork->SWEQUIPDRepository->GetByQbtxlineid($equipmentHistoryID);
        $projectmanager = $this->controller->DatUnitOfWork->SWINSPRepository->GetActiveBy($equipmentHistory->getInspectno());
        if ($equipmentHistory) {

            $result['success'] = true;
            $result['equipmentHistoryObject']['qbtxlineid'] = $equipmentHistory->getQbtxlineid();
            $result['equipmentHistoryObject']['equipid'] = $equipmentHistory->getEquipid();
            $result['equipmentHistoryObject']['inspectno'] = $equipmentHistory->getInspectno();
            $result['equipmentHistoryObject']['inspectnoName'] = $projectmanager->getInspectnm();
            $result['equipmentHistoryObject']['installdte'] = $equipmentHistory->getInstalldte();
            $result['equipmentHistoryObject']['expdtein'] = $equipmentHistory->getExpdtein();
            $result['equipmentHistoryObject']['daterec'] = $equipmentHistory->getDaterec();
        }
        return json_encode($result);
    }
}