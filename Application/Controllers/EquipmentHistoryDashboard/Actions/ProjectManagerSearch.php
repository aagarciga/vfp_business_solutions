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
        $this->page = $this->Request->hasProperty('page') ? $this->Request->page : '0';
        $result = array('items' =>
            array()
        );
        $projectManagerCollection = $this->controller->DatUnitOfWork->SWINSPRepository->GetActivesLike($this->query, $this->page, 30);
        foreach ($projectManagerCollection as $row){
            $current = array();
            $current['id'] = trim($row->getInspectno());
            $current['text'] = trim($row->getInspectnm());
            $result['items'][] = $current;
        }
        $result['totalCount'] = $this->controller->DatUnitOfWork->SWINSPRepository->GetActivesLikeCount($this->query);
        return json_encode($result);
    }
}