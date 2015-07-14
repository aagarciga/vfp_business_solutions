<?php

/**
 * Project:  VFP Business Series
 * Copyright: 2014. VFP Business Solutions, LLC
 */

namespace Dandelion\MVC\Application\Controllers\QuoteDashboard\Actions;

use Dandelion\MVC\Core\Action;

/**
 * Ajax Delete Quote Dashboard Saved Filter Action
 * @name DeleteFilter_Post
 */
class DeleteFilter_Post extends Action {

    /**
     * Returns Status
     * @return JSON
     */
    public function Execute() {
                
        $filterId = filter_input(INPUT_POST, 'filterId');

        $result = array();
        
        $entity = $this->controller->VfpDataUnitOfWork->SysexportRepository->GetByFilterid($filterId);
        $success = $this->controller->VfpDataUnitOfWork->SysexportRepository->Delete($entity);
        $result['status'] = $success ? 'success' : 'failure';
        $result['filterid'] = $filterId;
        
        return json_encode($result);
    }
}