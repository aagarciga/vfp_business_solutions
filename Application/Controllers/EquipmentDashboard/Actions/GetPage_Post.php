<?php
/**
 * User: Victor
 * Date: 04/12/2016
 * Time: 8:15
 * Project:  VFP Business Series
 * Copyright: 2014. VFP Business Solutions, LLC
 */

namespace Dandelion\MVC\Application\Controllers\EquipmentDashboard\Actions;

use Dandelion\MVC\Core\Action;
use Dandelion\MVC\Application\Tools;

/**
 * Created by: Victor
 * Class GetPage_Post
 * @package Dandelion\MVC\Application\Controllers\EquipmentDashboard\Actions
 */
class GetPage_Post extends Action
{
    public function Execute()
    {
        $userFilterPredicate = $this->Request->hasProperty('predicate') ? $this->Request->predicate : "";

        //todo: Set default value as global default value
        $page = $this->Request->hasProperty('page') ? $this->Request->page : 1;
        $itemsPerPage = $this->Request->hasProperty('itemsPerPage') ? $this->Request->itemsPerPage : 50;
        $orderby = $this->Request->hasProperty('orderby') ? $this->Request->orderby : "ordnum";
        $order = $this->Request->hasProperty('order') ? $this->Request->order : "ASC";

        $this->FilterPredicate = $_SESSION['EquipmentDashboard_filterPredicate'] = $userFilterPredicate;
        $this->ItemPerPage = $_SESSION['EquipmentDashboard_itemperpages'] = $itemsPerPage;

        $result = array();

        $this->Pager = $this->controller->GetPager($userFilterPredicate, $this->ItemPerPage, 5, 10, $orderby, $order);
        $pager = $this->Pager->PaginateForAjax($page);
        $itemCount = $this->Pager->getItemsCount();
        $queryResult = $this->Pager->getCurrentPagedItems();

        if ($itemCount > 0)
        {
            foreach ($queryResult as $item) {
                $current = Tools\createArrayModel($item, $this->controller->GetFieldsDefinition());
                $result[] = $current;
            }
        }

        $pager['currentPagedItems'] = $result;

        return json_encode($pager);
    }

}