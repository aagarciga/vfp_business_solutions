<?php
/**
 * Project:  VFP Business Series
 * Copyright: 2014. VFP Business Solutions, LLC
 */

namespace Dandelion\MVC\Application\Controllers\EquipmentHistoryDashboard\Actions;

use Dandelion\MVC\Core\Action;
use Dandelion\MVC\Application\Controllers\EquipmentHistoryDashboard\Models\EquipmentHistoryDashboardViewModel;
require_once MVC_DIR_APP_VIEWS . DIRECTORY_SEPARATOR . 'EquipmentHistoryDashboard' . DIRECTORY_SEPARATOR . 'Model' . DIRECTORY_SEPARATOR . 'EquipmentHistoryDashboardViewModel.php';
/**
 * Class Index
 * @package Dandelion\MVC\Application\Controllers\EquipmentHistoryDashboard\Actions
 */
class Index extends Action
{

    public function Execute()
    {
        // TODO: Implement Execute() method.
        $this->Title = "Equipment Dashboard | VFP Business Series";

        $predicate = ""; // TODO: Change for Victor Filter Tree

        $this->Page = $this->Session->getSessionValue(DASHBOARD_REQUEST_PARAM_PAGE, $this->controller->getDefaultPage());
        $this->OrderBy = $this->Session->getSessionValue(DASHBOARD_REQUEST_PARAM_ORDERBY, $this->controller->getDefaultOrderBy(EquipmentHistoryDashboardViewModel::getName()));
        $this->Order = $this->Session->getSessionValue(DASHBOARD_REQUEST_PARAM_ORDER, $this->controller->getDefaultOrder());


        $this->Pager = $this->controller->GetPager(EquipmentHistoryDashboardViewModel::getName(), $predicate, $this->OrderBy, $this->Order);
        $this->Pager->Paginate();
        $itemCount = $this->Pager->getItemsCount();
        $items = $this->Pager->getCurrentPagedItems();
    }
}