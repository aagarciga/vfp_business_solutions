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
        
        $this->Pager = $this->controller->GetDashboardPager($this->UserName, 15);
        $this->Pager->ajaxPaginate();        
        $dashboardItems = $this->Pager->getCurrentPagedItems();
        $dashboardViewModel = array();
        
        foreach ($dashboardItems as $dashboardItem) {
            //ORDNUM, PONUM, COMPANY, DESTINO, PROSTARTDT, PROENDDT, SOTYPE, INSPECTNO, PODATE, QUTNO, CSTCTID
            //ordnum, ponum, company, destino, ProStartDT, ProEndDT, sotype, inspectno, podate, qutno, Cstctid
            $currentDashboardItem = new DashboardViewModel($dashboardItem->ordnum, $dashboardItem->ponum, $dashboardItem->company, $dashboardItem->destino, $dashboardItem->ProStartDT, $dashboardItem->ProEndDT, $dashboardItem->sotype, $dashboardItem->inspectno, $dashboardItem->podate, $dashboardItem->qutno, $dashboardItem->Cstctid);
            $dashboardViewModel []= $currentDashboardItem;
        }
        
        $this->DashboardItems = $dashboardViewModel;
    }

}

?>
