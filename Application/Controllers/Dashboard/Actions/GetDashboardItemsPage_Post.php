<?php

/**
 * Project:  VFP Business Series
 * Copyright: 2014. VFP Business Solutions, LLC
 */

namespace Dandelion\MVC\Application\Controllers\Dashboard\Actions;

use Dandelion\MVC\Core\Action;

/**
 * Ajax Barcode verification
 * @name ShipmentUpdate_Post
 */
class GetDashboardItemsPage_Post extends Action {

    /**
     * Commit Shipment Changes
     * @return JSON
     */
    public function Execute() {
        $page = filter_input(INPUT_POST, 'page');
        
        $result = array();
        
        if (is_numeric($page)) {
            $this->UserName = (!isset($_SESSION['username']))? 'Anonimous' : $_SESSION['username'];
            $this->Pager = $this->controller->GetDashboardPager($this->UserName, 15);
            
            $pager = $this->Pager->getAjaxResponse($page);
            $currentPagedItems = $pager['currentPagedItems'];
            //ordnum, ponum, company, destino, ProStartDT, ProEndDT, sotype, inspectno, podate, qutno, Cstctid
            
            foreach ($currentPagedItems as $row){
                $current = array();
                $current['ordnum'] = trim($row->ordnum);
                $current['ponum'] = trim($row->ponum);
                $current['company'] = trim($row->company);
                $current['destino'] = trim($row->destino);
                $current['ProStartDT'] = trim($row->ProStartDT);
                $current['ProEndDT'] = trim($row->ProEndDT);
                $current['sotype'] = trim($row->sotype);
                $current['inspectno'] = trim($row->inspectno);
                $current['podate'] = trim($row->podate);
                $current['qutno'] = intval($row->qutno);
                $current['Cstctid'] = intval($row->Cstctid);
                $result[] = $current;
            }
            $pager['currentPagedItems'] = $result;
        }
        return json_encode($pager);
    }
    
}