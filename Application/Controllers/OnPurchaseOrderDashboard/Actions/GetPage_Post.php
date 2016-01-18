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
 * @package Dandelion\MVC\Application\Controllers\ItemDashboard\Actions
 */
class GetPage_Post extends Action
{
    public function Execute()
    {
        $onorder = $this->Request->hasProperty('onorder') ? base64_decode($this->Request->onorder) : "";
        $userFilterPredicate = $this->Request->hasProperty('predicate') ? $this->Request->predicate : "";

        //todo: Set default value as global default value
        $page = $this->Request->hasProperty('page') ? $this->Request->page : 1;
        $itemsPerPage = $this->Request->hasProperty('itemsPerPage') ? $this->Request->itemsPerPage : 50;
        $orderby = $this->Request->hasProperty('orderby') ? $this->Request->orderby : "pono";
        $order = $this->Request->hasProperty('order') ? $this->Request->order : "ASC";

        $onorderPredicate = $this->controller->GetOnOrderPredicate($onorder);

        if ($onorder !== "" && $userFilterPredicate !== "")
        {
            $filterPredicate = "$userFilterPredicate AND $onorderPredicate";
        }
        elseif ($onorder !== "")
        {
            $filterPredicate = $onorderPredicate;
        }

        $this->FilterPredicate = $_SESSION['OnPurchaseOrderDashboard_filterPredicate'] = $userFilterPredicate;
        $this->ItemPerPage = $_SESSION['OnPurchaseOrderDashboard_itemperpages'] = $userFilterPredicate;

        $result = array();

        $this->Pager = $this->controller->GetPager($filterPredicate, $this->ItemPerPage, 5, 10, $orderby, $order);
        $pager = $this->Pager->PaginateForAjax($page);
        $itemCount = $this->Pager->getItemsCount();
        $queryResult = $this->Pager->getCurrentPagedItems();

        if ($itemCount > 0)
        {
            foreach ($queryResult as $item) {
                $current = array();
                $current['pono'] = trim($item->pono);
                $current['vendno'] = trim($item->vendno);
                $current['podate'] = trim($item->podate);
                $current['qtyord'] = trim($item->qtyord);
                $current['qtyrec'] = trim($item->qtyrec);
                $current['qtyleft'] = trim($item->qtyord);
                $current['qtyshp'] = trim($item->qtyleft);
                $current['shipped'] = trim($item->shipped);
                $current['potype'] = trim($item->potype);
                $result[] = $current;
            }
        }

        $pager['currentPagedItems'] = $result;

        return json_encode($pager);
    }

}