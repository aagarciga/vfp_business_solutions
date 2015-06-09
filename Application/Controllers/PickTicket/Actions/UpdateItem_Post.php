<?php
/**
 * Project:  VFP Business Series
 * Copyright: 2014. VFP Business Solutions, LLC
 */

namespace Dandelion\MVC\Application\Controllers\PickTicket\Actions;

use Dandelion\MVC\Core\Action;

/**
 * VFP Update Item
 * @name Index
 */
class UpdateItem_Post extends Action {

    public function Execute() {
        $item = $this->Request->hasProperty('item') ? $this->Request->item : '';
        $value = $this->Request->hasProperty('value') ? $this->Request->value : '';
        $qblistid = $this->Request->hasProperty('qblistid') ? $this->Request->qblistid : '';
        $sotxlineid = $this->Request->hasProperty('sotxlineid') ? $this->Request->sotxlineid : '';
        $location = $this->Request->hasProperty('location') ? $this->Request->location : '';
        $qbtxlineid = $this->Request->hasProperty('qbtxlineid') ? $this->Request->qbtxlineid : '';
        
        
        error_log("to update: ". $value . " for item: ". $item . " qblistid: " . $qblistid. ' sotxlineid: '. $sotxlineid);
        
        $result = array('success' => 'false');
        $queryResult = $this->controller->DatUnitOfWork->SOSHPRELRepository->GetQtypick($item, $qblistid);
        $qtyPick = 0;
        if (count($queryResult)) {
            $qtyPick = intval($queryResult[0]->QTYPICK) ;
        }
        
        $isSuccess = $this->controller->DatUnitOfWork->SOSHPRELRepository->UpdateItemByQbtxlineid($qbtxlineid, $value, $location);
        
        $queryResult = $this->controller->DatUnitOfWork->SOSHPRELRepository->GetQtypick($item, $qblistid);
        $updatedQtyPick = 0;
        if (count($queryResult)) {
            $updatedQtyPick = intval($queryResult[0]->QTYPICK) ;
        }
        
        // From Vivian's: UPDATE SOITEM00 SET qtyshp0 = soshprel00.QTYPICK  WHERE soitem00.qbtxlineid= Soshprel00.sotxlineid
        $isSuccess &= $this->controller->DatUnitOfWork->SOITEMRepository->UpdateItem($sotxlineid, $updatedQtyPick);
//        
//        4- en Icparm tienes que restar la cantidad que venia antes en soshprel00- qtypick
//          y sumarle la cantidad que tiene ahora qtypick despues del update para ese item
        
        // ya tengo la $qtyPick de antes update y la $updatedQtyPick de despues.
        // faltan que campos actualizar en icparm (comtoship)
        
        $comtoship = 0;
        $queryResult = $this->controller->DatUnitOfWork->ICPARMRepository->GetCOMTOSHIP($item);
        if(count($queryResult)){
            $comtoship = intval($queryResult->COMTOSHIP);
        }
        error_log('old $comtoship: '. $comtoship);
        $comtoship = ($comtoship - $qtyPick) + $updatedQtyPick;
        $isSuccess &= $this->controller->DatUnitOfWork->ICPARMRepository->UpdateCOMTOSHIP($item, $comtoship);
        error_log('$isSuccess: '. $isSuccess);
        error_log('new $comtoship: '. $comtoship);
        
        if ($isSuccess) {
            $result['success'] = 'true';
        }
        
        return json_encode($result);
    }
}