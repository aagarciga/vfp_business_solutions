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
class ProjectManagerSearch extends Action {

    /**
     * Returns Job Status Items
     * @return JSON
     */
    public function Execute() {
        $this->query = $this->Request->hasProperty('q') ? $this->Request->q : '';

        $result = array('items' =>
            array()
        );
        $projectManagerCollection = $this->controller->DatUnitOfWork->SWINSPRepository->GetActivesLike($this->query);
        foreach ($projectManagerCollection as $row){
            $current = array();
            $current['id'] = trim($row->getInspectno());
            $current['text'] = trim($row->getInspectnm());
            $result['items'][] = $current;
        }
        return json_encode($result);
    }
}