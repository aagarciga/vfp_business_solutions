<?php
/**
 * Project:  VFP Business Series
 * Copyright: 2014. VFP Business Solutions, LLC
 */

namespace Dandelion\MVC\Application\Controllers\InventoryDashboard\Actions;

use Dandelion\MVC\Core\Action;
use Dandelion\MVC\Application\Controllers\InventoryDashboard\Models\InventoryDashboardViewModel;

/**
 * VFP Business Series Quote Dashboard Controller Action
 * @name Index
 */
class Index extends Action {

    /**
     * Default Quote Dashboard page.
     */
    public function Execute() {
        $exportedBy = 'IN';
        $this->Title = 'Inventory Dashboard | VFP Business Series';
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
            $currentItemViewModel = new InventoryDashboardViewModel($item->itemno, $item->itmwhs, $item->descrip, $item->onhand, $item->onorder, $item->committed);
            $viewModels []= $currentItemViewModel;
        }
        
        $this->Items = $viewModels;

        $user = $this->controller->VfpDataUnitOfWork->SysuserRepository->GetByUsername($this->UserName);
//        
//        $this->DefaultUserFilterId = $user->getDbfilter();
//        
        $this->SavedUserFilters = $this->controller->VfpDataUnitOfWork->SysexportRepository->GetSavedFiltersByUserName($user->getUsername(), $exportedBy);
//        
        $this->CompanyLogo = $this->controller->DatUnitOfWork->ARCOMPRepository->GetCompanyLogo();
//        
        $this->FullFeatures = (!isset($_SESSION['fullFeatures']))? false : $_SESSION['fullFeatures'];
        $this->ShowFiancialDashboard = (!isset($_SESSION['showFiancialDashboard']))? false : $_SESSION['showFiancialDashboard'];

    }

}
