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
class UpdateDashboardStatus_Post extends Action
{
    public function Execute()
    {
        $userJsonFilterTree = $this->Request->hasProperty('jsonFilterTree') ? base64_decode($this->Request->jsonFilterTree) : "";
        $itemPerPage = $this->Request->hasProperty('itemPerPage') ? $this->Request->itemPerPage : $this->controller->getDefaultItemPerPage($this->Request);
        $page = $this->Request->hasProperty('page') ? $this->Request->page : $this->controller->getDefaultPage();
        $orderBy = $this->Request->hasProperty('orderBy') ? $this->Request->orderBy : $this->controller->getDefaultOrderByField();
        $order = $this->Request->hasProperty('order') ? $this->Request->order : $this->controller->getDefaultOrder();

        $filterTree = TreeCreator::createTree(json_decode($userJsonFilterTree));

        $this->controller->setSessionFilterTree($filterTree);
        $_SESSION[HISTORY_ITEM_PER_PAGE] = $itemPerPage;
        $_SESSION[HISTORY_PAGE] = $page;
        $_SESSION[HISTORY_ORDERBY] = $orderBy;
        $_SESSION[HISTORY_ORDER] = $order;

        $this->Request->previousController = $this->Request->hdnController;
        $this->Request->previousAction = $this->Request->hdnAction;
        $this->Redirect('EquipmentDashboard', 'Index');
    }
}