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

        $result = array('success' => 'false');
        $queryResult = $this->controller->DatUnitOfWork->SOSHPRELRepository->GetQtypick($item, $qbtxlineid);
        $qtyPick = 0;
        if (count($queryResult)) {
            $qtyPick = intval($queryResult[0]->QTYPICK) ;
        }
        $isSuccess = $this->controller->DatUnitOfWork->SOSHPRELRepository->UpdateItemByQbtxlineid($qbtxlineid, $value, $location);
        
        $queryResult = $this->controller->DatUnitOfWork->SOSHPRELRepository->GetQtypick($item, $qbtxlineid);
        $updatedQtyPick = 0;
        if (count($queryResult)) {
            $updatedQtyPick = intval($queryResult[0]->QTYPICK) ;
        }

        $isSuccess &= $this->controller->DatUnitOfWork->SOITEMRepository->UpdateItem($sotxlineid, $updatedQtyPick);
        $comtoship = 0;
        $queryResult = $this->controller->DatUnitOfWork->ICPARMRepository->GetCOMTOSHIP($item);
        if(count($queryResult)){
            $comtoship = intval($queryResult->COMTOSHIP);
        }

        
        $comtoship = ($comtoship - $qtyPick) + $updatedQtyPick;

        $isSuccess &= $this->controller->DatUnitOfWork->ICPARMRepository->UpdateCOMTOSHIP($item, $comtoship);

        if ($isSuccess) {
            $result['success'] = 'true';
        }
        
        return json_encode($result);
    }
}