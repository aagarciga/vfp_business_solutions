<?php

/**
 * Project:  VFP Business Series
 * Copyright: 2014. VFP Business Solutions, LLC
 */

namespace Dandelion\MVC\Application\Controllers\Dashboard\Actions;

use Dandelion\MVC\Core\Action;

class GetCurrentProjectsDir extends Action {

    /**
     * Commit Shipment Changes
     * @return JSON
     */
    public function Execute() {
        $salesorder = filter_input(INPUT_GET, 'salesorder');
        
        $result = array();
        
        $result[] = array('id' => $salesorder, 'text' => $salesorder, 'children' => false);

        header('Content-Type: application/json; charset=utf-8');
        return json_encode($result);
    }
}