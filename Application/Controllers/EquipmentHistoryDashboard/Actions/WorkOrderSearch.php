<?php

/**
 * Project:  VFP Business Series
 * Copyright: 2014. VFP Business Solutions, LLC
 */

namespace Dandelion\MVC\Application\Controllers\EquipmentHistoryDashboard\Actions;

use Dandelion\MVC\Core\Action;

/**
 * Ajax Endpoint for ProjectManagerSearch
 * @name ProjectManagerSearch_Post
 */
class WorkOrderSearch extends Action {

    /**
     * Returns Job Status Items
     * @return JSON
     */
    public function Execute() {
        $this->query = $this->Request->hasProperty('q') ? $this->Request->q : '';
        $this->page = $this->Request->hasProperty('page') ? $this->Request->page : '';

        $result = array('items' =>
            array()
        );
        $workOrderCollection = $this->controller->DatUnitOfWork->SOHEADRepository->GetLike($this->query, $this->page, 30);
        foreach ($workOrderCollection as $row){
            $current = array();
            $current['id'] = trim($row->getOrdnum());
            $current['text'] = '(' . trim($row->getOrdnum()) . ') - ' . trim($row->getCustno()) . ' (' . trim($row->getPodate()). ')';
            $result['items'][] = $current;
        }
        $workOrderCollection = $this->controller->DatUnitOfWork->SOHEADRepository->GetLike($this->query);

        $result['total_count'] = count($workOrderCollection);
        return json_encode($result);
    }
}