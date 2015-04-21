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
        
        $filterPredicate = $this->Request->hasProperty('predicate') ? $this->Request->predicate : "";
        $page = $this->Request->hasProperty('page') ? $this->Request->page : 1;
        $itemsPerPage = $this->Request->hasProperty('itemsPerPage') ? $this->Request->itemsPerPage : 50;
        $orderby = $this->Request->hasProperty('orderby') ? $this->Request->orderby : "ordnum";
        $order = $this->Request->hasProperty('order') ? $this->Request->order : "ASC";

        $this->FilterPredicate = $_SESSION['filterPredicate'] = $filterPredicate;
        $this->ItemPerPage = $_SESSION['itemperpages'] = $itemsPerPage;
        
//        error_log("_BEGIN_______________________________");
//        error_log('$filterPredicate: '.$filterPredicate);
//        error_log('$page: '.$page);
//        error_log('$itemsPerPage: '.$itemsPerPage);
//        error_log('$orderby: '.$orderby);
//        error_log('$order: '.$order);
////        
//        error_log('$this->FilterPredicate: '.$this->FilterPredicate);
//        error_log('$this->ItemPerPage: '.$this->ItemPerPage);
//        error_log("_END_________________________________");

//        $filterPredicate = filter_input(INPUT_POST, 'predicate');
//        $page = filter_input(INPUT_POST, 'page');
//        $itemsperpage = filter_input(INPUT_POST, 'itemsPerPage');        
//        $orderby = filter_input(INPUT_POST, 'orderby');
//        $order = filter_input(INPUT_POST, 'order');
//        $this->ItemPerPage = $_SESSION['itemperpages'] = (!isset($itemsperpage))? 10 : $itemsperpage;
//        $this->FilterPredicate = $_SESSION['filterPredicate'] = (!isset($filterPredicate))? "" : $filterPredicate;
//        
//        error_log('$filterPredicate: '.$filterPredicate);
//        error_log('$page: '.$page);
//        error_log('$itemsPerPage: '.$itemsPerPage);
//        error_log('$orderby: '.$orderby);
//        error_log('$order: '.$order);
//        
//        error_log('$this->FilterPredicate: '.$this->FilterPredicate);
//        error_log('$this->ItemPerPage: '.$this->ItemPerPage);
        
        $result = array();
        
        if (is_numeric($page)) {
            $this->UserName = (!isset($_SESSION['username']))? 'Anonimous' : $_SESSION['username'];             
            
            $this->Pager = $this->controller->GetDashboardPager($this->UserName, $this->FilterPredicate , $this->ItemPerPage, 5, 10, $orderby, $order);
            
            $pager = $this->Pager->PaginateForAjax($page);
            $currentPagedItems = $pager['currentPagedItems'];
            
            foreach ($currentPagedItems as $row){
                $current = array();
                $current['ordnum'] = trim($row->ordnum);
                $current['ponum'] = trim($row->ponum);
                $current['company'] = trim($row->company);
                $current['vesselid'] = trim($row->VESSELID);
                $current['ProStartDT'] = trim($row->ProStartDT === "1899-12-30" ? "" : $row->ProStartDT);
                $current['ProEndDT'] = trim($row->ProEndDT === "1899-12-30" ? "" : $row->ProEndDT);
                $current['sotypecode'] = trim($row->sotypecode);
                $current['mtrlstatus'] = trim($row->MTRLSTATUS);
                $current['jobstatus'] = trim($row->JOBSTATUS);
                $current['projectManager1'] = trim($row->projectManager1);
                $current['projectManager2'] = trim($row->projectManager2);
                $current['podate'] = trim($row->podate === "1899-12-30" ? "" : $row->podate);
                $current['qutno'] = trim($row->qutno);
                $current['Cstctid'] = trim($row->Cstctid);
                $current['JobDescrip'] = trim($row->JobDescrip);
                $result[] = $current;
            }
            $pager['currentPagedItems'] = $result;
        }
        return json_encode($pager);
    }
}