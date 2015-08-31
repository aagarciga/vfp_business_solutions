<?php
/**
 * Project:  VFP Business Series
 * Copyright: 2014. VFP Business Solutions, LLC
 */

namespace Dandelion\MVC\Application\Controllers\ARDashboard\Actions;

use Dandelion\MVC\Core\Action;

/**
 * VFP Business Series Account Receivable Dashboard Controller Action
 * @name GetPage_Post
 */
class GetPage_Post extends Action
{

    public function Execute()
    {

        $filterPredicate = $this->Request->hasProperty('predicate') ? $this->Request->predicate : "";
        $page = $this->Request->hasProperty('page') ? $this->Request->page : 1;
        $itemsPerPage = $this->Request->hasProperty('itemsPerPage') ? $this->Request->itemsPerPage : 50;
        $orderby = $this->Request->hasProperty('orderby') ? $this->Request->orderby : "ordnum";
        $order = $this->Request->hasProperty('order') ? $this->Request->order : "ASC";

        $this->FilterPredicate = $_SESSION['arDashboard_filterPredicate'] = $filterPredicate;
        $this->ItemPerPage = $_SESSION['arDashboard_itemperpages'] = $itemsPerPage;

        $result = array();

        if (!is_numeric($page)) {
            $page = 1;
        }

        $this->Pager = $this->controller->GetPager($this->FilterPredicate, $this->ItemPerPage, 5, 10, $orderby, $order);
        $pager = $this->Pager->PaginateForAjax($page);
        $queryResult = $this->Pager->getCurrentPagedItems();
        $items = $this->controller->calculate($queryResult);

//        error_log(print_r($items, true));

//        $currentPagedItems = $pager['currentPagedItems'];

        foreach ($items as $item) {
            $current = array();
            $current['custno'] = trim($item['custno']);
            $current['company'] = trim($item['company']);
            $current['current'] = trim($item['current']);
            $current['11-30'] = trim($item['11-30']);
            $current['31-45'] = trim($item['31-45']);
            $current['46-60'] = trim($item['46-60']);
            $current['61-90'] = trim($item['61-90']);
            $current['>91'] = trim($item['>91']);
            $current['balance'] = trim($item['balance']);
            $result[] = $current;
        }

        $pager['currentPagedItems'] = $result;

        return json_encode($pager);
    }

}
