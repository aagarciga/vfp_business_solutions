<?php

/**
 * Project:  VFP Business Series
 * Copyright: 2014. VFP Business Solutions, LLC
 */

namespace Dandelion\MVC\Application\Controllers\QuoteDashboard\Actions;

use Dandelion\MVC\Core\Action;

/**
 * Ajax Save Quote Notes Fields Value
 * @name UpdateSalesOrderNotes_Post
 */
class UpdateQuoteNotes_Post extends Action {

    /**
     * Returns Boolean Success
     * @return JSON
     */
    public function Execute() {
        
        $qutno = $this->Request->hasProperty('qutno') ? $this->Request->qutno : '';
        $notes= $this->Request->hasProperty('notes') ? $this->Request->notes : ''; 

        $result = array('success' => false);
        $isSuccess = $this->controller->DatUnitOfWork->QUHSTHRepository->UpdateNotes($qutno, $notes);
        if ($isSuccess) {
            $result['success'] = true;
        }
        
        return json_encode($result);
    }
}