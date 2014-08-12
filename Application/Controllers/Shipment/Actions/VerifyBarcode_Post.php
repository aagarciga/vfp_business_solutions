<?php

/**
 * Project:  VFP Business Series
 * Copyright: 2014. VFP Business Solutions, LLC
 */

namespace Dandelion\MVC\Application\Controllers\Shipment\Actions;

use Dandelion\MVC\Core\Action;

/**
 * Ajax Barcode verification
 * @name VerifyBarcode_Post
 */
class VerifyBarcode_Post extends Action {

    /**
     * Verify if exist the given barcode for the given pono
     * @return JSON
     */
    public function Execute() {
        $pono = filter_input(INPUT_POST, 'pono');
        $barcode = filter_input(INPUT_POST, 'barcode');
        
        $result = array();
        
        $queryResult = $this->controller->DatUnitOfWork->POITOPRepository->GetByPonoAndItemno($pono, $barcode);
        
        if ($queryResult !== null) {
            $result['verified'] = true;
            $result['locno'] = $queryResult->getLocno();
            $result['qtyleft'] = (intval($queryResult->getQtyord()) - intval($queryResult->getQtyrec()));
        }
        else{
            $result['verified'] = false;
        }
        
        return json_encode($result);
    }
    
}