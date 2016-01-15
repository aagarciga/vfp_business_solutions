<?php
/**
 * Created by PhpStorm.
 * User: Victor
 * Date: 04/12/2016
 * Time: 8:15
 * Project:  VFP Business Series
 * Copyright: 2014. VFP Business Solutions, LLC
 */

namespace Dandelion\MVC\Application\Controllers\ItemDashboard\Actions;


use Dandelion\MVC\Core\Action;

class GetPage_Post extends Action
{
    public function Execute()
    {
        $itemno = $this->Request->hasProperty('itemno') ? $this->Request->itemno : "";
        $filterPredicate = $this->Request->hasProperty('predicate') ? $this->Request->predicate : "";

        //todo: Set default value as global default value
        $page = $this->Request->hasProperty('page') ? $this->Request->page : 1;
        $itemsPerPage = $this->Request->hasProperty('itemsPerPage') ? $this->Request->itemsPerPage : 50;
        $orderby = $this->Request->hasProperty('orderby') ? $this->Request->orderby : "ordnum";
        $order = $this->Request->hasProperty('order') ? $this->Request->order : "ASC";

        $itemnoPredicate = "itemno = '$itemno'";

        if ($itemno !== "" && $filterPredicate !== "")
        {
            $filterPredicate .= "AND $itemnoPredicate";
        }
        elseif ($itemno !== "")
        {
            $filterPredicate = $itemnoPredicate;
        }

        $this->FilterPredicate = $_SESSION['itemDashboard_filterPredicate'] = $filterPredicate;
        $this->ItemPerPage = $_SESSION['itemDashboard_itemperpages'] = $itemsPerPage;

        $result = array();


        $this->Pager = $this->controller->GetPager($this->FilterPredicate, $this->ItemPerPage, 5, 10, $orderby, $order);
        $pager = $this->Pager->PaginateForAjax($page);
        $queryResult = $this->Pager->getCurrentPagedItems();

        foreach ($queryResult as $item) {
            $current = array();
            $current['ordnum'] = trim($item->ordnum);
            $current['ponum'] = trim($item->ponum);
            $current['custno'] = trim($item->custno);
            $current['company'] = $item->company;
            $current['podate'] = trim($item->podate);
            $current['qtyord'] = trim($item->qtyord);
            $current['qtyshp'] = trim($item->qtyshp);
            $current['bckord'] = trim($item->bckord);
            $current['qtyshp0'] = trim($item->qtyshp0);
            $current['qtyshprel'] = trim($item->qtyshprel);
            $current['shipdate'] = trim($item->shipdate);
            $result[] = $current;
        }

        $pager['currentPagedItems'] = $result;

        return json_encode($pager);
    }

}