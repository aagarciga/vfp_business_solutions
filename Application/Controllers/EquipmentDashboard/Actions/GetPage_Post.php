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
use Dandelion\TreeCreator;

/**
 * Created by: Victor
 * Class GetPage_Post
 * @package Dandelion\MVC\Application\Controllers\EquipmentDashboard\Actions
 */
class GetPage_Post extends Action
{
    public function Execute()
    {
        TreeCreator::Init();

        $userJsonFilterTree = $this->Request->hasProperty('filterTree') ? $this->Request->filterTree : "";
        $filterTree = TreeCreator::createTree(json_decode($userJsonFilterTree));

        //todo: Set default value as global default value
        $page = $this->Request->hasProperty('page') ? $this->Request->page : 1;
        $itemsPerPage = $this->Request->hasProperty('itemsPerPage') ? $this->Request->itemsPerPage : 50;
        $orderby = $this->Request->hasProperty('orderby') ? $this->Request->orderby : "ordnum";
        $order = $this->Request->hasProperty('order') ? $this->Request->order : "ASC";

        $this->FilterPredicate = $_SESSION[EQUIPMENT_FILTER_TREE] = $filterTree;
        $this->ItemPerPage = $_SESSION[EQUIPMENT_ITEM_PER_PAGE] = $itemsPerPage;
        $this->Page = $_SESSION[EQUIPMENT_PAGE] = $page;
        $this->Orderby = $_SESSION[EQUIPMENT_ORDERBY] = $orderby;
        $this->Order = $_SESSION[EQUIPMENT_ORDER] = $order;

        $result = array();

        $this->Pager = $this->controller->GetPager($filterTree, $this->ItemPerPage, 5, 10, $orderby, $order);
        $pager = $this->Pager->PaginateForAjax($page);
        $itemCount = $this->Pager->getItemsCount();
        $queryResult = $this->Pager->getCurrentPagedItems();

        if ($itemCount > 0)
        {
            foreach ($queryResult as $item) {
                $current = Tools\createArrayModel($item, $this->controller->GetFieldsDefinition($this->controller->DatUnitOfWork->CompanySuffix));
                $result[] = $current;
            }
        }

        $pager['currentPagedItems'] = $result;

        return json_encode($pager);
    }
}