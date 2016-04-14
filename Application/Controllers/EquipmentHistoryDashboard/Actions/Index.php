<?php
/**
 * Project:  VFP Business Series
 * Copyright: 2014. VFP Business Solutions, LLC
 */

namespace Dandelion\MVC\Application\Controllers\EquipmentHistoryDashboard\Actions;

use Dandelion\MVC\Core\Action;
use Dandelion\MVC\Application\Controllers\EquipmentHistoryDashboard\Models\EquipmentHistoryDashboardViewModel;

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

        $this->Pager = $this->controller->GetPager(EquipmentHistoryDashboardViewModel::getName());
    }
}