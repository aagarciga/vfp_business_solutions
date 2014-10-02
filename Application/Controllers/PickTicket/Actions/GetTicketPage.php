<?php

/**
 * Project:  VFP Business Series
 * Copyright: 2014. VFP Business Solutions, LLC
 */

namespace Dandelion\MVC\Application\Controllers\PickTicket\Actions;

use Dandelion\MVC\Core\Action;

/**
 * Ajax Barcode verification
 * @name ShipmentUpdate_Post
 */
class GetTicketPage extends Action {

    /**
     * Commit Shipment Changes
     * @return JSON
     */
    public function Execute() {
        $page = filter_input(INPUT_GET, 'page');
        
        $result = array();
        
        if (is_numeric($page)) {
            $this->Pager = $this->controller->DatUnitOfWork->SOSHPRELRepository->GetTicketsPager(10);
            $this->Pager->ajaxPaginate($page);
            $queryResult = $this->Pager->getCurrentPagedItems();
            foreach ($queryResult as $row) {
                $current = array();
                $current['company'] = $this->controller->DatUnitOfWork->SOSHPRELHRepository->GetTicketCompanyByOrdNum(trim($row->ORDNUM));
                $current['shprelno'] = $row->SHPRELNO;
                $current['ordnum'] = $row->ORDNUM;
                $current['shpreldate'] = $row->SHPRELDATE;
                $current['bath_no'] = $row->BATCH_NO;
                $current['qtyshprel'] = $row->QTYSHPREL;
                $current['qtypick'] = $row->QTYPICK;
                $current['qtypack'] = $row->QTYPACK;
                $current['weight'] = $row->WEIGHT;
                $result[] = $current;
            }         
        }
        
        return json_encode($result);
    }
    
}