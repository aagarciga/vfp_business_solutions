<?php
/**
 * Created by PhpStorm.
 * User: Victor
 * Date: 04/12/2016
 * Time: 8:15
 * Project:  VFP Business Series
 * Copyright: 2014. VFP Business Solutions, LLC
 */

namespace Dandelion\MVC\Application\Controllers\OnPurchaseOrderDashboard\Actions;

use Dandelion\MVC\Core\Action;

/**
 * Created by: Victor
 * Class GetPage_Post
 * @package Dandelion\MVC\Application\Controllers\OnPurchaseOrderDashboard\Actions
 */
class GetPage_Post extends Action
{
    public function Execute()
    {
        $this->Itemno = $itemno = $this->Request->hasProperty('itemno') ? base64_decode($this->Request->itemno) : '';
        $this->Itemwhs = $itemwhs = $this->Request->hasProperty('itemwhs') ? base64_decode($this->Request->itemwhs) : '';
        $userFilterPredicate = $this->Request->hasProperty('predicate') ? $this->Request->predicate : "";

        //todo: Set default value as global default value
        $page = $this->Request->hasProperty('page') ? $this->Request->page : 1;
        $itemsPerPage = $this->Request->hasProperty('itemsPerPage') ? $this->Request->itemsPerPage : 50;
        $orderby = $this->Request->hasProperty('orderby') ? $this->Request->orderby : "pono";
        $order = $this->Request->hasProperty('order') ? $this->Request->order : "ASC";

        $defaultPredicate = $this->controller->GetOnOrderPredicate($itemno, $itemwhs);

        $key = $itemno.$itemwhs;

        if ($key !== "" && $userFilterPredicate !== "")
        {
            $filterPredicate = "$userFilterPredicate AND $defaultPredicate";
        }
        elseif ($key !== "")
        {
            $filterPredicate = $defaultPredicate;
        }

        $this->FilterPredicate = $_SESSION['OnPurchaseOrderDashboard_filterPredicate'] = $userFilterPredicate;
        $this->ItemPerPage = $_SESSION['OnPurchaseOrderDashboard_itemperpages'] = $itemsPerPage;

        $result = array();

        $this->Pager = $this->controller->GetPager($filterPredicate, $this->ItemPerPage, 5, 10, $orderby, $order);
        $pager = $this->Pager->PaginateForAjax($page);
        $itemCount = $this->Pager->getItemsCount();
        $queryResult = $this->Pager->getCurrentPagedItems();

        if ($itemCount > 0)
        {
            foreach ($queryResult as $item) {
                $poTypeValue = trim($item->podate);
                $shippedValue = trim($item->shipped);
                $current = array();
                $current['pono'] = trim($item->pono);
                $current['vendno'] = trim($item->vendno);
                $current['podate'] = ($poTypeValue === DATE_NULL_VALUE) ? '' : $poTypeValue;
                $current['qtyord'] = trim($item->qtyord);
                $current['qtyrec'] = trim($item->qtyrec);
                $current['qtyleft'] = trim($item->qtyleft);
                $current['shipped'] = ($shippedValue === DATE_NULL_VALUE) ? '' : $shippedValue;
                $current['potype'] = trim($item->potype);
                $result[] = $current;
            }
        }

        $pager['currentPagedItems'] = $result;

        return json_encode($pager);
    }

}