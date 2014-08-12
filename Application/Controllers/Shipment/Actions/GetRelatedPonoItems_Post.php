<?php

/**
 * Project:  VFP Business Series
 * Copyright: 2014. VFP Business Solutions, LLC
 */

namespace Dandelion\MVC\Application\Controllers\Shipment\Actions;

use Dandelion\MVC\Core\Action;

/**
 * Ajax Get the collection of related pono items
 * @name GetRelatedPonoItems_Post
 */
class GetRelatedPonoItems_Post extends Action {

    /**
     * @return JSON
     */
    public function Execute() {
        $pono = filter_input(INPUT_POST, 'pono');
        
        $result = array();
        
        $queryResult = $this->controller->DatUnitOfWork->POITOPRepository->GetAssociatesToPono($pono);
        foreach ($queryResult as $row) {
            $current = array();
            $current['itemno'] = $row->getItemno();
            $current['qtyleft'] = (intval($row->getQtyord()) - intval($row->getQtyrec()));
            $current['qtyrec0'] = intval($row->getQtyrec0());
            $current['locno'] = $row->getLocno();
            $result[] = $current;
        }
                
        return json_encode($result);
    }
    
}