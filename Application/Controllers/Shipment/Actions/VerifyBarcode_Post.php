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
        
        if ($barcode != '') {
            $item = $this->FindItemByICPARM($barcode);
            if ($item !== null) {
                //$result = 'true';                
                $result = $this->FindByPonoAndItemno($pono, $item->getItemno());
            } else {
                $item = $this->FindItemByICUPCPARM($barcode);
                if ($item !== null) {
                    //$result = 'true';                
                    $result = $this->FindByPonoAndItemno($pono, $item->getItemno());
                }
            }
        }
        
        return json_encode($result);
    }
    
    /**
     * Find item in ICPARM by itemno, upccode and venstkno fields
     * @param string $barcode
     * @return null
     */
    private function FindItemByICPARM($barcode) {
        
        $lowerBarcode = strtolower($barcode);
        $queryResult = $this->controller->DatUnitOfWork->ICPARMRepository->Get("WHERE lower(ITEMNO) = '$lowerBarcode' OR lower(UPCCODE) = '$lowerBarcode' OR lower(VENSTKNO) = '$lowerBarcode'");
        if (count($queryResult)) {
            return $queryResult[0];
        }
        return null;
    }

    /**
     * Find item in ICUPCPARM by upccode field, if exist find item in ICPARM by the itemno from ICUPCPARM.
     * @param string $barcode
     * @return null
     */
    private function FindItemByICUPCPARM($barcode) {
        $lowerBarcode = strtolower($barcode);
        $queryResult = $this->controller->DatUnitOfWork->ICUPCPARMRepository->Get("WHERE lower(UPCCODE) = '$lowerBarcode'");
        if (count($queryResult)) {
            $itemno = strtolower($queryResult[0]->getItemno());
            $queryResultFromICPARM = $this->controller->DatUnitOfWork->ICPARMRepository->Get("WHERE lower(ITEMNO) = '$itemno'");
            if (count($queryResultFromICPARM)) {
                return $queryResultFromICPARM[0];
            }
            return null;
        }
    }
    
    /**
     * 
     * @param string $pono
     * @param string $barcode
     * @return array
     */
    private function FindByPonoAndItemno($pono, $barcode) {
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
        
        return $result;
    }
    
}