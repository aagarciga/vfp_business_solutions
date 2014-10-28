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
class GetTicketPage_Post extends Action {

    /**
     * Commit Shipment Changes
     * @return JSON
     */
    public function Execute() {
        $page = filter_input(INPUT_POST, 'page');
        
        $result = array();
        
        if (is_numeric($page)) {
            $this->UserName = (!isset($_SESSION['username']))? 'Anonimous' : $_SESSION['username'];
            $this->Pager = $this->controller->GetTicketsPager($this->UserName, 10);
            
            $pager = $this->Pager->PaginateForAjax($page);
            $currentPagedItems = $pager['currentPagedItems'];
            foreach ($currentPagedItems as $row){
                $current = array();
                $current['company'] = trim($row->COMPANY);
                $current['shprelno'] = trim($row->SHPRELNO);
                $current['ordnum'] = trim($row->ORDNUM);
                $current['shpreldate'] = trim($row->SHPRELDATE);
                $current['bath_no'] = trim($row->BATCH_NO);
                $current['qtyshprel'] = intval($row->QTYSHPREL);
                $current['qtypick'] = intval($row->QTYPICK);
                $current['qtypack'] = intval($row->QTYPACK);
                $current['weight'] = trim($row->WEIGHT);
                $result[] = $current;
            }
            $pager['currentPagedItems'] = $result;
        }
        return json_encode($pager);
    }
    
}