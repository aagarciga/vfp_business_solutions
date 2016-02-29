<?php

/**
 * Project:  VFP Business Series
 * Copyright: 2014. VFP Business Solutions, LLC
 */

namespace Dandelion\MVC\Application\Controllers\Dashboard\Actions;

use Dandelion\MVC\Core\Action;

/**
 * VFP Business Series Quote Dashboard Controller Action
 * @name GetDashboardItemsPage_Post
 */
class GetPage_Post extends Action {

    public function Execute() {
        
        $filterPredicate = $this->Request->hasProperty('predicate') ? $this->Request->predicate : "";
        $page = $this->Request->hasProperty('page') ? $this->Request->page : 1;
        $itemsPerPage = $this->Request->hasProperty('itemsPerPage') ? $this->Request->itemsPerPage : 50;
        $orderby = $this->Request->hasProperty('orderby') ? $this->Request->orderby : "ordnum";
        $order = $this->Request->hasProperty('order') ? $this->Request->order : "ASC";

//        //Set filter and count on sesion global variable.
//        $this->FilterPredicate = $_SESSION['filterPredicate'] = $filterPredicate;
//        $this->ItemPerPage = $_SESSION['itemperpages'] = $itemsPerPage;

        $this->FilterPredicate =  $filterPredicate;
        $this->ItemPerPage =  $itemsPerPage;
        
        $result = array();
        
        if (!is_numeric($page)) {
            $page = 1;
        }
        
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
        return json_encode($pager);
    }
}