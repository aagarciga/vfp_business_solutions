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
            $current['qutno'] = trim($row->qutno);
            $current['projno'] = trim($row->projno);
            $current['company'] = trim($row->company);
            $current['vesselid'] = trim($row->vesselid);
            $current['sotypecode'] = trim($row->sotypecode);
            $current['jobdescrip'] = trim($row->jobdescrip);
            $current['status'] = trim($row->status);            
            $current['qutdate'] = trim($row->qutdate === "1899-12-30" ? "" : $row->qutdate);
            $current['ordnum'] = trim($row->ordnum);
            $current['cstctid'] = trim($row->cstctid);
            $current['projectManager1'] = trim($row->projectManager1);
            $current['projectManager2'] = trim($row->projectManager2);
            
            $result[] = $current;
        }
        $pager['currentPagedItems'] = $result;
        
        return json_encode($pager);
    }

}
