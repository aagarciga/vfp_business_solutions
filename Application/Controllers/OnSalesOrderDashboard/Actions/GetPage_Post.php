<?php
/**
 * Created by PhpStorm.
 * User: Victor
 * Date: 04/12/2016
 * Time: 8:15
 * Project:  VFP Business Series
 * Copyright: 2014. VFP Business Solutions, LLC
 */

namespace Dandelion\MVC\Application\Controllers\OnSalesOrderDashboard\Actions;


use Dandelion\MVC\Core\Action;

/**
 * Created by: Victor
 * Class GetPage_Post
 * @package Dandelion\MVC\Application\Controllers\ItemDashboard\Actions
 */
class GetPage_Post extends Action
{
    public function Execute()
    {
        $itemno = $this->Request->hasProperty('itemno') ? base64_decode($this->Request->itemno) : "";
        $userFilterPredicate = $this->Request->hasProperty('predicate') ? $this->Request->predicate : "";

        //todo: Set default value as global default value
        $page = $this->Request->hasProperty('page') ? $this->Request->page : 1;
        $itemsPerPage = $this->Request->hasProperty('itemsPerPage') ? $this->Request->itemsPerPage : 50;
        $orderby = $this->Request->hasProperty('orderby') ? $this->Request->orderby : "ordnum";
        $order = $this->Request->hasProperty('order') ? $this->Request->order : "ASC";

        $itemnoPredicate = "itemno = '$itemno'";
        $filterPredicate = "";

        if ($itemno !== "" && $userFilterPredicate !== "")
        {
            $filterPredicate = "$userFilterPredicate AND $itemnoPredicate";
        }
        elseif ($itemno !== "")
        {
            $filterPredicate = $itemnoPredicate;
        }

        $this->FilterPredicate = $_SESSION['OnSalesOrderDashboard_filterPredicate'] = $userFilterPredicate;
        $this->ItemPerPage = $_SESSION['OnSalesOrderDashboard_itemperpages'] = $itemsPerPage;

        $result = array();


        $this->Pager = $this->controller->GetPager($filterPredicate, $this->ItemPerPage, 5, 10, $orderby, $order);
        $pager = $this->Pager->PaginateForAjax($page);
        $itemCount = $this->Pager->getItemsCount();
        $queryResult = $this->Pager->getCurrentPagedItems();

        if ($itemCount > 0)
        {
            foreach ($queryResult as $item) {
                $current = array();
                $current['ordnum'] = trim($item->ordnum);
                $current['ponum'] = trim($item->ponum);
                $current['custno'] = trim($item->custno);
                $current['company'] = trim($item->company);
                $current['podate'] = trim($item->podate);
                $current['qtyord'] = trim($item->qtyord);
                $current['qtyshp'] = trim($item->qtyshp);
                $current['bckord'] = trim($item->bckord);
                $current['qtyshp0'] = trim($item->qtyshp0);
                $current['qtyshprel'] = trim($item->qtyshprel);
                $current['shipdate'] = trim($item->shipdate);
                $result[] = $current;
            }
        }

        $pager['currentPagedItems'] = $result;

        return json_encode($pager);
    }

}