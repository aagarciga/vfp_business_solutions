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
        $filterid = $this->Request->hasProperty('filterid') ? $this->Request->filterid : '';

        $exportedBy = 'SO';
        $this->Title = 'Work Order Dashboard | VFP Business Series';
        $defaultItemsPerPage = $this->Request->Application->getDefaultPagerItermsPerPage();
        
        $this->UserName = (!isset($_SESSION['username']))? 'Anonimous' : $_SESSION['username'];
        $this->ItemPerPage = (!isset($_SESSION['itemperpages']))? $defaultItemsPerPage : $_SESSION['itemperpages'];
        
        // Reset filter predicate when refresh the navigator.
        $this->FilterPredicate = "";//(!isset($_SESSION['filterPredicate']))? "" : $_SESSION['filterPredicate'];
        
        $this->Pager = $this->controller->GetDashboardPager($this->UserName, $this->FilterPredicate, $this->ItemPerPage);
        $this->Pager->Paginate();        
        $dashboardItems = $this->Pager->getCurrentPagedItems();        
        $dashboardViewModel = array();
        
        foreach ($dashboardItems as $dashboardItem) {
            $currentDashboardItem = new DashboardViewModel($dashboardItem->ordnum, $dashboardItem->ponum, $dashboardItem->company, $dashboardItem->VESSELID, $dashboardItem->ProStartDT, $dashboardItem->ProEndDT, $dashboardItem->sotypecode, $dashboardItem->MTRLSTATUS, $dashboardItem->JOBSTATUS, $dashboardItem->projectManager1, $dashboardItem->projectManager2, $dashboardItem->podate, $dashboardItem->qutno, $dashboardItem->Cstctid, $dashboardItem->JobDescrip);
            $dashboardViewModel []= $currentDashboardItem;
        }
        
        $this->DashboardItems = $dashboardViewModel;
        
        $this->MaterialStatusItems = $this->controller->DatUnitOfWork->SOEDISTATUSRepository->GetMaterialStatus();
        $this->JobStatusItems = $this->controller->DatUnitOfWork->SOEDISTATUSRepository->GetJobStatus();
        
        $user = $this->controller->VfpDataUnitOfWork->SysuserRepository->GetByUsername($this->UserName);
        
        $this->DefaultUserFilterId = $user->getDbfilter();
        
        $this->SavedUserFilters = $this->controller->VfpDataUnitOfWork->SysexportRepository->GetSavedFiltersByUserName($user->getUsername(),$exportedBy);
        
        $this->CompanyLogo = $this->controller->DatUnitOfWork->ARCOMPRepository->GetCompanyLogo();
        
        $this->FullFeatures = (!isset($_SESSION['fullFeatures']))? false : $_SESSION['fullFeatures'];
        $this->ShowFiancialDashboard = (!isset($_SESSION['showFiancialDashboard']))? false : $_SESSION['showFiancialDashboard'];
        
    }

}
