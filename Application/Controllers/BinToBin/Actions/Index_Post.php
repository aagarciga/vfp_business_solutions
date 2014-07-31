<?php

/**
 * Project:  VFP Business Series
 * Copyright: 2014. VFP Business Solutions, LLC
 */

namespace Dandelion\MVC\Application\Controllers\BinToBin\Actions;

use Dandelion\MVC\Core\Action;
use Dandelion\MVC\Application\Models\Entities\ICITLO;

/**
 * Ajax Bin To Bin Action Execution
 * @name Index_Post
 */
class Index_Post extends Action {

    /**
     * Ajax Bin To Bin Action Execution
     */
    public function Execute() {
        $quantity = intval(filter_input(INPUT_POST, 'quantity'));
        $fromlocno = filter_input(INPUT_POST, 'fromlocno');
        $tolocno = filter_input(INPUT_POST, 'tolocno');
        $warehouse = filter_input(INPUT_POST, 'warehouse');
        $barcode = filter_input(INPUT_POST, 'barcode');
        
        $result = array();
        $result['success'] = 'false';
        
        if ( $this->VerifyPostValues($fromlocno, $tolocno, $warehouse, $barcode, $quantity) ) {
            $entityFrom = $this->controller->DatUnitOfWork->ICITLORepository->GetByPK($barcode, $warehouse, $fromlocno);
            
            if ($entityFrom !== null) {
                $result['success'] = 'true';                
                $entityFrom->setOnhand($entityFrom->getOnhand() - $quantity);
                $this->controller->DatUnitOfWork->ICITLORepository->Update($entityFrom);               
            }               
            else{
               $result['success'] = 'false'; 
               $result['message'] = 'ICITLO Row related to FROM Location can not be updated';
            }            
            $entityTo = $this->controller->DatUnitOfWork->ICITLORepository->GetByPK($barcode, $warehouse, $tolocno);
            if ($entityTo !== null) { 
                $result['success'] = 'true';
                
                $entityTo->setOnhand($entityTo->getOnhand() + $quantity);
                $updated = $this->controller->DatUnitOfWork->ICITLORepository->Update($entityTo);   
                if (!$updated) {
                    $result['success'] = 'false';
                    $result['message'] = 'ICITLO Row related to To Location can not be updated';
                }
            }               
            else{
                $result['success'] = 'true';                
                $entityTo = new ICITLO($barcode, $warehouse, $tolocno, false, $quantity, 0, 0, "", "", "", "");
                $added = $this->controller->DatUnitOfWork->ICITLORepository->Add($entityTo); 
                if (!$added) {
                    $result['success'] = 'false';
                    $result['message'] = 'ICITLO Row related to To Location found and can not be added';
                }
            }
        }else{
            $result['message'] = 'Verify all form fields contains valid values. None can be empty';
        }
        
        return json_encode($result);
    }
    
    /**
     * Verify all values send to the action via POST
     * @param string $fromlocno Locno related to the from field
     * @param string $tolocno Locno related to the to field
     * @param string $warehouse Current Warehouse
     * @param string $barcode Current Item barcode
     * @param integer $quantity The quantity value to move
     * @return boolean
     */
    private function VerifyPostValues($fromlocno, $tolocno, $warehouse, $barcode, $quantity){
        $verifyEmptynes = $quantity > 0 && $barcode !== "" && $warehouse !== "" && $fromlocno !== "" && $tolocno !== "";
        $verifyFromAndToValues = $fromlocno !== $tolocno;
        
        return ($verifyEmptynes && $verifyFromAndToValues)? true : false;
    }

}