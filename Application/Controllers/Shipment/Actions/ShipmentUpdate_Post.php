<?php

/**
 * Project:  VFP Business Series
 * Copyright: 2014. VFP Business Solutions, LLC
 */

namespace Dandelion\MVC\Application\Controllers\Shipment\Actions;

use Dandelion\MVC\Core\Action;

/**
 * Ajax Barcode verification
 * @name ShipmentUpdate_Post
 */
class ShipmentUpdate_Post extends Action {

    /**
     * Commit Shipment Changes
     * @return JSON
     */
    public function Execute() {
        $pono = filter_input(INPUT_POST, 'pono');
        $updateObjects = json_decode($_POST['updateObjects']);
        
        $result = array();
        
        $qtyrec0Sum = 0;
        
        $successful = true;
        foreach ($updateObjects as $string) {
            $current = explode(',', $string);
            $successful &= $this->CommitShipmentRow($pono ,$current[0], $current[2], $current[3]);
            $qtyrec0Sum += intval($current[2]);
        }
        
        $successful &= $this->CommitShipmentInPOHDOP($pono , $qtyrec0Sum);
        
        if ($successful) {
            $result['success'] = true;
        }
        else{
            $result['success'] = false;
        }
        
        return json_encode($result);
    }
    
    private function CommitShipmentRow($pono, $itemno, $qtyrec0, $locno){
        
        $entity = $this->controller->DatUnitOfWork->POITOPRepository->GetByPonoAndItemno($pono, $itemno);
        if ($entity !== null) {
            $entity->setLarv_date(date("Y-m-d"));
            $entity->setQtyrec0($qtyrec0);
            $entity->setLocno($locno);
            
            $queryResult = $this->controller->DatUnitOfWork->POITOPRepository->UpdateShipment($entity);
            if ($queryResult) {
                return true;
            }
        }
        return false;
        
    }
    
    private function CommitShipmentInPOHDOP($pono, $qtyrec0Sum){
        
        $entity = $this->controller->DatUnitOfWork->POHDOPRepository->GetByPono($pono);
        if ($entity !== null) {
            
            $entity->setPopstat($qtyrec0Sum > 0 ? 'R' : '');
            
            $queryResult = $this->controller->DatUnitOfWork->POHDOPRepository->UpdateShipment($entity);
            if ($queryResult) {
                return true;
            }
        }
        return false;
        
    }
    
}