<?php
/**
 * Project:  VFP Business Series
 * Copyright: 2014. VFP Business Solutions, LLC
 */

namespace Dandelion\MVC\Application\Controllers\QuoteDashboard\Actions;

use Dandelion\MVC\Core\Action;
use Dandelion\MVC\Application\Controllers\QuoteDashboard\Models\QuoteDashboardViewModel;

/**
 * VFP Business Series Quote Dashboard Controller Action
 * @name Index
 */
class Index extends Action {

    /**
     * Default Quote Dashboard page.
     */
    public function Execute() {
        $this->Title = 'Quote Dashboard | VFP Business Series - Warehouse Management System';
        $defaultItemsPerPage = $this->Request->Application->getDefaultPagerItermsPerPage();
        
        $this->UserName = (!isset($_SESSION['username']))? 'Anonimous' : $_SESSION['username'];
        $this->ItemPerPage = (!isset($_SESSION['itemperpages']))? $defaultItemsPerPage : $_SESSION['itemperpages'];
//        
        // Reset filter predicate when refresh the navigator.
        $this->FilterPredicate = "";//(!isset($_SESSION['filterPredicate']))? "" : $_SESSION['filterPredicate'];
//        
        $this->Pager = $this->controller->GetPager($this->FilterPredicate, $this->ItemPerPage);
        $this->Pager->Paginate();        
        $items = $this->Pager->getCurrentPagedItems();        
        $viewModels = array();
        
        foreach ($items as $item) {
            $currentItemViewModel = new QuoteDashboardViewModel($item->qutno, $item->projno, $item->company, $item->vesselid, $item->sotypecode, $item->jobdescrip, $item->status, $item->qutdate, $item->ordnum, $item->cstctid, $item->projectManager1, $item->projectManager2);
            $viewModels []= $currentItemViewModel;
        }
        
        $this->Items = $viewModels;
        
        $this->Status = array('1'=>'RFQ Received', 
            '2'=>'Quote Prepared', 
            '3'=>'Sent to Customer', 
            '4'=>'CSR follow up',
            '5'=>'Revisions',
            '6'=>'Not  approved',
            '7'=>'Quote approved',
            '8'=>'Billed');
//        
//        $this->MaterialStatusItems = $this->controller->DatUnitOfWork->SOEDISTATUSRepository->GetMaterialStatus();
//        $this->JobStatusItems = $this->controller->DatUnitOfWork->SOEDISTATUSRepository->GetJobStatus();
//        
//        $user = $this->controller->VfpDataUnitOfWork->SysuserRepository->GetByUsername($this->UserName);
//        
//        $this->DefaultUserFilterId = $user->getDbfilter();
//        
//        $this->SavedUserFilters = $this->controller->VfpDataUnitOfWork->SysexportRepository->GetSavedFiltersByUserName($user->getUsername());
//        
        $this->CompanyLogo = $this->controller->DatUnitOfWork->ARCOMPRepository->GetCompanyLogo();
//        
        $this->FullFeatures = (!isset($_SESSION['fullFeatures']))? false : $_SESSION['fullFeatures'];
        
    }

}
