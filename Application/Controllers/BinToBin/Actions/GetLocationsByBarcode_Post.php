<?php

/**
 * Project:  VFP Business Series
 * Copyright: 2014. VFP Business Solutions, LLC
 */

namespace Dandelion\MVC\Application\Controllers\BinToBin\Actions;

use Dandelion\MVC\Core\Action;

/**
 * Ajax Get Locations By Barcode
 * @name GetLocationsByBarcode_Post
 */
class GetLocationsByBarcode_Post extends Action {

    /**
     * Ajax Get Item Itemno and Upccode
     */
    public function Execute() {
        $barcode = filter_input(INPUT_POST, 'barcode');
        $itemno = $this->GetItemno($barcode);  
        $result = array();
        
        $queryResult = $this->controller->DatUnitOfWork->ICITLORepository->GetByItemno($itemno);
        foreach ($queryResult as $row) {
            $current = array();
            $current['locno'] = $row->getLocno();
            $current['onhand'] = intval($row->getOnhand());
            $result[] = $current;
        }
        return json_encode($result);
    }
    
    /**
     * 
     * @param string $barcode
     * @return type
     */
    private function GetItemno($barcode) {
        $result = null;
        if ($barcode != '') {
            $item = $this->FindItemByICPARM($barcode);
            if ($item !== null) {
                //$result = 'true';                
                $result = trim($item->getItemno());
                
            } else {
                $item = $this->FindItemByICUPCPARM($barcode);
                if ($item !== null) {
                    //$result = 'true';                
                    $result= trim($item->getItemno());
                }
            }
        }
        return $result;
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