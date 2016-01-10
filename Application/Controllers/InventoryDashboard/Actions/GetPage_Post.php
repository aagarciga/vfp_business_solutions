<?php
/**
 * Project:  VFP Business Series
 * Copyright: 2014. VFP Business Solutions, LLC
 */

namespace Dandelion\MVC\Application\Controllers\InventoryDashboard\Actions;

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

        $this->FilterPredicate = $_SESSION['inventoryDashboard_filterPredicate'] = $filterPredicate;
        $this->ItemPerPage = $_SESSION['inventoryDashboard_itemperpages'] = $itemsPerPage;

        $result = array();

        if (!is_numeric($page)) {
            $page = 1;
        }

        $this->Pager = $this->controller->GetPager($this->FilterPredicate, $this->ItemPerPage, 5, 10, $orderby, $order);
        $pager = $this->Pager->PaginateForAjax($page);
        $queryResult = $this->Pager->getCurrentPagedItems();

        foreach ($queryResult as $item) {
            $current = array();
            $current['itemno'] = trim($item->itemno);
            $current['itmwhs'] = trim($item->itmwhs);
            $current['descrip'] = trim($item->descrip);
            $current['onhand'] = number_format(trim($item->onhand));
            $current['onorder'] = number_format(trim($item->onorder));
            $current['committed'] = number_format(trim($item->committed));
            $result[] = $current;
        }

        $pager['currentPagedItems'] = $result;

        return json_encode($pager);
    }

}
