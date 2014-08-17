<?php

/**
 * Project:  VFP Business Series
 * Copyright: 2014. VFP Business Solutions, LLC
 */

namespace Dandelion\MVC\Application\Controllers\Shipment\Actions;

use Dandelion\MVC\Core\Action;

/**
 * Ajax Get the collection of related pono items
 * @name GetQtyLeft_Post
 */
class GetQtyLeft_Post extends Action {

    /**
     * @return JSON
     */
    public function Execute() {
        $pono = filter_input(INPUT_POST, 'pono');
        $itemno = filter_input(INPUT_POST, 'itemno');
        
        $result = array();
        
        $queryResult = $this->controller->DatUnitOfWork->POITOPRepository->GetByPonoAndItemno($pono, $itemno);
        
        if ($queryResult === null) {
            $result['success'] = false;
        }
        else{
            $result['success'] = true;
            $result['qtyleft'] = (intval($queryResult->getQtyord()) - intval($queryResult->getQtyrec()));
        }
                
        return json_encode($result);
    }
    
}