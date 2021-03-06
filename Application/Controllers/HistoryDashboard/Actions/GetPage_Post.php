<?php
/**
 * User: Victor
 * Date: 04/12/2016
 * Time: 8:15
 * Project:  VFP Business Series
 * Copyright: 2014. VFP Business Solutions, LLC
 */

namespace Dandelion\MVC\Application\Controllers\HistoryDashboard\Actions;

use Dandelion\MVC\Core\Action;
use Dandelion\MVC\Application\Tools;
use Dandelion\TreeCreator;

/**
 * Created by: Victor
 * Class GetPage_Post
 * @package Dandelion\MVC\Application\Controllers\HistoryDashboard\Actions
 */
class GetPage_Post extends Action
{
    public function Execute()
    {
        $equipidName = EQUIP_ID;

        $userJsonFilterTree = $this->Request->hasProperty('filterTree') ? $this->Request->filterTree : "";
        $equipid = $this->Request->hasProperty($equipidName) ? base64_decode($this->Request->$equipidName) : "";

        //todo: Set default value as global default value
        $page = $this->Request->hasProperty('page') ? $this->Request->page : $this->controller->getDefaultPage();
        $itemsPerPage = $this->Request->hasProperty('itemsPerPage') ? $this->Request->itemsPerPage : $this->controller->getDefaultItemPerPage($this->Request);
        $orderby = $this->Request->hasProperty('orderby') ? $this->Request->orderby : $this->controller->getDefaultOrderByField();
        $order = $this->Request->hasProperty('order') ? $this->Request->order : $this->controller->getDefaultOrder();

        $this->FieldsDefinition = $this->controller->GetFieldsDefinition($this->controller->DatUnitOfWork->CompanySuffix);

        $this->FilterPredicate = $this->controller->setSessionFilterTree($userJsonFilterTree);
        $this->ItemPerPage = $_SESSION[$this->controller->getSessionId(ITEM_PER_PAGE_SUFFIX)] = $itemsPerPage;
        $this->Page = $_SESSION[$this->controller->getSessionId(PAGE_SUFFIX)] = $page;
        $this->Orderby = $_SESSION[$this->controller->getSessionId(ORDERBY_SUFFIX)] = $orderby;
        $this->Order = $_SESSION[$this->controller->getSessionId(ORDER_SUFFIX)] = $order;

        $result = array();

        $filterTree = $this->controller->getFilterIncludeEquipId($equipidName, $equipid, $this->FilterPredicate, $this->FieldsDefinition);

        $this->Pager = $this->controller->GetPager($filterTree, $this->ItemPerPage, 5, 10, $orderby, $order);
        $pager = $this->Pager->PaginateForAjax($page);
        $itemCount = $this->Pager->getItemsCount();
        $queryResult = $this->Pager->getCurrentPagedItems();

        if ($itemCount > 0)
        {
            foreach ($queryResult as $item) {
                $current = Tools\createArrayModel($item, $this->FieldsDefinition);
                $result[] = $current;
            }
        }

        $pager['currentPagedItems'] = $result;

        return json_encode($pager);
    }
}