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
        $itemsperpage = filter_input(INPUT_POST, 'itemsperpage');
        $this->ItemPerPage = $_SESSION['itemperpages'] = (!isset($itemsperpage))? 10 : $itemsperpage;
        
        $result = array();
        
        if (is_numeric($page)) {
            $this->UserName = (!isset($_SESSION['username']))? 'Anonimous' : $_SESSION['username'];             
            
            $this->Pager = $this->controller->GetDashboardPager($this->UserName, $this->ItemPerPage);
            
            $pager = $this->Pager->PaginateForAjax($page);
            $currentPagedItems = $pager['currentPagedItems'];
            
            foreach ($currentPagedItems as $row){
                $current = array();
                $current['ordnum'] = trim($row->ordnum);
                $current['ponum'] = trim($row->ponum);
                $current['company'] = trim($row->company);
                $current['destino'] = trim($row->destino);
                $current['ProStartDT'] = trim($row->ProStartDT === "1899-12-30" ? "" : $row->ProStartDT);
                $current['ProEndDT'] = trim($row->ProEndDT === "1899-12-30" ? "" : $row->ProEndDT);
                $current['sotypecode'] = trim($row->sotypecode);
                $current['mtrlstatus'] = trim($row->MTRLSTATUS);
                $current['jobstatus'] = trim($row->JOBSTATUS);
                $current['inspectno'] = trim($row->inspectno);
                $current['podate'] = trim($row->podate === "1899-12-30" ? "" : $row->podate);
                $current['qutno'] = trim($row->qutno);
                $current['Cstctid'] = trim($row->Cstctid);
                $result[] = $current;
            }
            $pager['currentPagedItems'] = $result;
        }
        return json_encode($pager);
    }
}