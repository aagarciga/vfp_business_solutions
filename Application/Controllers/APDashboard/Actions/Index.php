<?php
/**
 * Project:  VFP Business Series
 * Copyright: 2014. VFP Business Solutions, LLC
 */

namespace Dandelion\MVC\Application\Controllers\APDashboard\Actions;

use Dandelion\MVC\Core\Action;
use Dandelion\Diana\BootstrapPager;
use Dandelion\MVC\Application\Controllers\APDashboard\Models\APDashboardViewModel;

/**
 * VFP Business Series Financial Dashboard Controller Default Action
 * @name Index
 */
class Index extends Action
{

    /**
     * Account Payable Dashboard page.
     */
    public function Execute()
    {
        $exportedBy = 'AP';
        $this->Title = 'Account Payable Dashboard | VFP Business Series';
        $defaultItemsPerPage = $this->Request->Application->getDefaultPagerItemsPerPage();

        $this->UserName = (!isset($_SESSION['username'])) ? 'Anonimous' : $_SESSION['username'];
        $this->ItemPerPage = (!isset($_SESSION['itemperpages'])) ? $defaultItemsPerPage : $_SESSION['itemperpages'];


        $this->FilterPredicate = ""; // Reset filter predicate when refresh the navigator.

        $this->Pager = $this->controller->GetPager($this->FilterPredicate, $this->ItemPerPage);
        $this->Pager->Paginate();
        $queryResult = $this->Pager->getCurrentPagedItems();
        $items = $this->controller->calculate($queryResult);

        $viewModels = array();

        foreach ($items as $item) {
            $currentItemViewModel = new APDashboardViewModel(trim($item['vendno']), trim($item['company']), $item['current'], $item['11-30'], $item['31-45'], $item['46-60'], $item['61-90'], $item['>91'], $item['balance']);
            $viewModels [] = $currentItemViewModel;
        }

        $this->Items = $viewModels;

        $user = $this->controller->VfpDataUnitOfWork->SysuserRepository->GetByUsername($this->UserName);
        $this->SavedUserFilters = $this->controller->VfpDataUnitOfWork->SysexportRepository->GetSavedFiltersByUserName($user->getUsername(), $exportedBy);
        $this->CompanyLogo = $this->controller->DatUnitOfWork->ARCOMPRepository->GetCompanyLogo();

        $this->FullFeatures = (!isset($_SESSION['fullFeatures'])) ? false : $_SESSION['fullFeatures'];
        $this->ShowFiancialDashboard = (!isset($_SESSION['showFiancialDashboard'])) ? false : $_SESSION['showFiancialDashboard'];

        $this->JavascriptBootstrapPager = BootstrapPager::GetJavascriptBootstrapPager();
    }


}

?>
