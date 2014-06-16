<?php

/**
 * Project:  VFP Business Series
 * Copyright: 2014. VFP Business Solutions, LLC
 */

namespace Dandelion\MVC\Application\Controllers\PhysicalCount\Actions;

use Dandelion\MVC\Core\Action;

require_once MVC_DIR_CORE . DIRECTORY_SEPARATOR . 'Action.php';

/**
 * Ajax Get Item Itemno and Upccode
 * @name GetItem_Post
 */
class GetItem_Post extends Action {

    /**
     * Ajax Get Item Itemno and Upccode
     */
    public function Execute() {
        $barcode = filter_input(INPUT_POST, 'barcode');
        $result = array();
        if ($barcode != '') {
            $item = $this->FindItemByICPARM($barcode);
            if ($item !== null) {
                //$result = 'true';                
                $result['itemno'] = trim($item->getItemno());
                $result['upccode'] = trim($item->getUpccode());
            } else {
                $item = $this->FindItemByICUPCPARM($barcode);
                if ($item !== null) {
                    //$result = 'true';                
                    $result['itemno'] = trim($item->getItemno());
                    $result['upccode'] = trim($item->getUpccode());
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
        $queryResult = $this->controller->Dat00UnitOfWork->ICPARM00Repository->Get("WHERE lower(ITEMNO) = '$lowerBarcode' OR lower(UPCCODE) = '$lowerBarcode' OR lower(VENSTKNO) = '$lowerBarcode'");
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
        $queryResult = $this->controller->Dat00UnitOfWork->ICUPCPARM00Repository->Get("WHERE lower(UPCCODE) = '$lowerBarcode'");
        if (count($queryResult)) {
            $itemno = strtolower($queryResult[0]->getItemno());
            $queryResultFromICPARM = $this->controller->Dat00UnitOfWork->ICPARM00Repository->Get("WHERE lower(ITEMNO) = '$itemno'");
            if (count($queryResultFromICPARM)) {
                return $queryResultFromICPARM[0];
            }
            return null;
        }
    }

}

?>
