<?php

/**
 * Project:  VFP Business Series
 * Copyright: 2014. VFP Business Solutions, LLC
 */

namespace Dandelion\MVC\Application\Controllers\PhysicalCount\Actions;

use Dandelion\MVC\Core\Action;

/**
 * Ajax Item Existence Verification
 * @name VerifyItem_Post
 */
class VerifyItem_Post extends Action {

    /**
     * Ajax Item Existence Verification
     */
    public function Execute() {
        $barcode = filter_input(INPUT_POST, 'barcode'); //$_POST['barcode'];
        $result = array();
        $result['verified'] = 'false';
        if ($barcode != '') {
            $item = $this->FindItemByICPARM($barcode);
            if ($item !== null) {
                //$result = 'true';                
                $result['itemno'] = trim($item->getItemno());
                $result['descrip'] = trim($item->getDescrip());
                $result['verified'] = 'true';
            } else {
                $item = $this->FindItemByICUPCPARM($barcode);
                if ($item !== null) {
                    //$result = 'true';                
                    $result['itemno'] = trim($item->getItemno());
                    $result['descrip'] = trim($item->getDescrip());
                    $result['verified'] = 'true';
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

}

?>
