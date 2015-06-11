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
        
        error_log("1.Pick Ticket Update");
        error_log("2.Item: ".$item);
        error_log("3.QTY Form Value: ".$value);
        error_log("4.In ROW Item qblistid field value: ".$qblistid);
        error_log("5.In ROW Item sotxlineid field value: ".$sotxlineid);
        error_log("6.In ROW Item qbtxlineid field value: ".$qbtxlineid);
        error_log("7.Location: ".$location);
        
        error_log("8.Step 1.");
        
        $result = array('success' => 'false');
        $queryResult = $this->controller->DatUnitOfWork->SOSHPRELRepository->GetQtypick($item, $qbtxlineid);
        $qtyPick = 0;
        if (count($queryResult)) {
            $qtyPick = intval($queryResult[0]->QTYPICK) ;
        }
        error_log("9.Getting QTYPICK without update: ". $qtyPick);
        
        error_log("10.Updating Item in SOSHPREL by Qtxlineid where: qbtxlineid:". $qbtxlineid. " value: ". $value. "Location: ".$location);
        $isSuccess = $this->controller->DatUnitOfWork->SOSHPRELRepository->UpdateItemByQbtxlineid($qbtxlineid, $value, $location);
        
        $queryResult = $this->controller->DatUnitOfWork->SOSHPRELRepository->GetQtypick($item, $qbtxlineid);
        $updatedQtyPick = 0;
        if (count($queryResult)) {
            $updatedQtyPick = intval($queryResult[0]->QTYPICK) ;
        }
        error_log("11.Getting QTYPICK with update: ". $updatedQtyPick);
        
        error_log("12.Updating In SOITEM by sotxlineid: ". $sotxlineid. " with quantity: ". $updatedQtyPick);
        // From Vivian's: UPDATE SOITEM00 SET qtyshp0 = soshprel00.QTYPICK  WHERE soitem00.qbtxlineid= Soshprel00.sotxlineid
        $isSuccess &= $this->controller->DatUnitOfWork->SOITEMRepository->UpdateItem($sotxlineid, $updatedQtyPick);
        
        
//        
//        4- en Icparm tienes que restar la cantidad que venia antes en soshprel00- qtypick
//          y sumarle la cantidad que tiene ahora qtypick despues del update para ese item
        
        // ya tengo la $qtyPick de antes update y la $updatedQtyPick de despues.
        // faltan que campos actualizar en icparm (comtoship)
        error_log("13.Getting COMTOSHIP from ICPARM by itemno (item): ". $item);
        $comtoship = 0;
        $queryResult = $this->controller->DatUnitOfWork->ICPARMRepository->GetCOMTOSHIP($item);
        if(count($queryResult)){
            $comtoship = intval($queryResult->COMTOSHIP);
        }
        
        error_log("14.COMTOSHIP: ". $comtoship);
        
        $comtoship = ($comtoship - $qtyPick) + $updatedQtyPick;
        
        error_log("15.Updating COMTOSHIP for: ". $item. " now with new value: ". $comtoship);
        $isSuccess &= $this->controller->DatUnitOfWork->ICPARMRepository->UpdateCOMTOSHIP($item, $comtoship);
        
        error_log('$isSuccess: '. $isSuccess);
        if ($isSuccess) {
            $result['success'] = 'true';
        }
        
        return json_encode($result);
    }
}