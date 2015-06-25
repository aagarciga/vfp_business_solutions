<?php
/**
 * Project:  VFP Business Series
 * Copyright: 2014. VFP Business Solutions, LLC
 */

namespace Dandelion\MVC\Application\Controllers\QuoteDashboard\Actions;

use Dandelion\MVC\Core\Action;

/**
 * VFP Business Series Quote Dashboard Controller Action
 * @name GetPage_Post
 */
class GetPage_Post extends Action {

    public function Execute() {
        
        $filterPredicate = $this->Request->hasProperty('predicate') ? $this->Request->predicate : "";
        $page = $this->Request->hasProperty('page') ? $this->Request->page : 1;
        $itemsPerPage = $this->Request->hasProperty('itemsPerPage') ? $this->Request->itemsPerPage : 50;
        $orderby = $this->Request->hasProperty('orderby') ? $this->Request->orderby : "ordnum";
        $order = $this->Request->hasProperty('order') ? $this->Request->order : "ASC";
        
        $this->FilterPredicate = $_SESSION['quoteDashboard_filterPredicate'] = $filterPredicate;
        $this->ItemPerPage = $_SESSION['quoteDashboard_itemperpages'] = $itemsPerPage;
        
        $result = array();
        
        if (!is_numeric($page)) {
            $page = 1;
        }
        
        $this->Pager = $this->controller->GetPager($this->FilterPredicate , $this->ItemPerPage, 5, 10, $orderby, $order);
        $pager = $this->Pager->PaginateForAjax($page);
        $currentPagedItems = $pager['currentPagedItems'];
        
        foreach ($currentPagedItems as $row){
            
            $current = array();
            $current['qutno'] = trim($row->QUTNO);
            $current['projno'] = trim($row->PROJNO);
            $current['company'] = trim($row->COMPANY);
            $current['vesselid'] = trim($row->VESSELID);
            $current['sotypecode'] = trim($row->SOTYPECODE);
            $current['jobdescrip'] = trim($row->JOBDESCRIP);
            $current['status'] = trim($row->STATUS);            
            $current['qutdate'] = trim($row->QUTDATE === "1899-12-30" ? "" : $row->QUTDATE);
            $current['ordnum'] = trim($row->ORDNUM);
            $current['cstctid'] = trim($row->CSTCTID);
            $current['projectManager1'] = trim($row->projectManager1);
            $current['projectManager2'] = trim($row->projectManager2);
            
            $result[] = $current;
        }
        $pager['currentPagedItems'] = $result;
        
        return json_encode($pager);
    }

}
