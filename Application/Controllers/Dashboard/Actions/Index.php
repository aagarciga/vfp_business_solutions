<?php
/**
 * Project:  VFP Business Series
 * Copyright: 2014. VFP Business Solutions, LLC
 */

namespace Dandelion\MVC\Application\Controllers\Dashboard\Actions;

use Dandelion\MVC\Core\Action;
use Dandelion\MVC\Application\Controllers\Dashboard\Models\DashboardViewModel;

/**
 * VFP Business Series Dashboard Controller Action
 * @name Index
 */
class Index extends Action {

    /**
     * Default Dashboard page.
     */
    public function Execute() {
        $this->Title = 'Dashboard | VFP Business Series - Warehouse Management System';
        
        $this->UserName = (!isset($_SESSION['username']))? 'Anonimous' : $_SESSION['username'];
        $this->ItemPerPage = (!isset($_SESSION['itemperpages']))? 10 : $_SESSION['itemperpages'];
        
        $this->Pager = $this->controller->GetDashboardPager($this->UserName, $this->ItemPerPage);
        $this->Pager->ajaxPaginate();        
        $dashboardItems = $this->Pager->getCurrentPagedItems();        
        $dashboardViewModel = array();
        
        foreach ($dashboardItems as $dashboardItem) {
            $currentDashboardItem = new DashboardViewModel($dashboardItem->ordnum, $dashboardItem->ponum, $dashboardItem->company, $dashboardItem->destino, $dashboardItem->ProStartDT, $dashboardItem->ProEndDT, $dashboardItem->sotypecode, $dashboardItem->MTRLSTATUS, $dashboardItem->JOBSTATUS, $dashboardItem->inspectno, $dashboardItem->podate, $dashboardItem->qutno, $dashboardItem->Cstctid);
            $dashboardViewModel []= $currentDashboardItem;
        }
        
        $this->DashboardItems = $dashboardViewModel;
        
        $this->MaterialStatusItems = $this->controller->DatUnitOfWork->SOEDISTATUSRepository->GetMaterialStatus();
        $this->JobStatusItems = $this->controller->DatUnitOfWork->SOEDISTATUSRepository->GetJobStatus();
    }

}

?>
