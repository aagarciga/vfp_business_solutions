<?php
/**
 * Created by PhpStorm.
 * User: Victor
 * Date: 13/01/2016
 * Time: 0:34
 * Project:  VFP Business Series
 * Copyright: 2014. VFP Business Solutions, LLC
 */

namespace Dandelion\MVC\Application\Controllers\OnPurchaseOrderDashboard\Actions;

use Dandelion\MVC\Application\Controllers\OnPurchaseOrderDashboard\Models\OnPurchaseOrderDashboardViewModel;
use Dandelion\MVC\Core\Action;
use Dandelion\Diana\BootstrapPager;

/**
 * Created by: Victor
 * Class Index
 * @package Dandelion\MVC\Application\Controllers\OnPurchaseOrderDashboard\Actions
 */
class Index extends Action
{
    public function Execute()
    {
        $exportedBy = 'OPO';
        $this->Itemno = $itemno = $this->Request->hasProperty('itemno') ? base64_decode($this->Request->itemno) : '';
        $this->Itemwhs = $itemwhs = $this->Request->hasProperty('itemwhs') ? base64_decode($this->Request->itemwhs) : '';

        $this->Title = 'On Purchase Order Dashboard | VFP Business Series';

        $defaultItemsPerPage = $this->Request->Application->getDefaultPagerItemsPerPage();

        $this->UserName = (!isset($_SESSION['username'])) ? 'Anonimous' : $_SESSION['username'];
        $this->ItemPerPage = isset($_SESSION['itemperpages']) ? $_SESSION['itemperpages'] : $defaultItemsPerPage;

        $this->FilterPredicate = $this->controller->GetOnOrderPredicate($itemno, $itemwhs);

        $this->Pager = $this->controller->GetPager($this->FilterPredicate, $this->ItemPerPage);
        $this->Pager->Paginate();
        $itemCount = $this->Pager->getItemsCount();
        $items = $this->Pager->getCurrentPagedItems();
        $viewModels = array();

        if ($itemCount > 0)
        {
            foreach($items as $item)
            {
                $poTypeValue = trim($item->podate);
                $shippedValue = trim($item->shipped);
                $poTypeValue = ($poTypeValue === DATE_NULL_VALUE) ? '' : $poTypeValue;
                $shippedValue = ($shippedValue === DATE_NULL_VALUE) ? '' : $shippedValue;
                $currentItemViewModel = new OnPurchaseOrderDashboardViewModel($item->pono, $item->vendno, $poTypeValue,
                    $item->qtyord, $item->qtyrec, $item->qtyleft, $shippedValue, $item->potype);
                $viewModels[] = $currentItemViewModel;
            }
        }

        $this->Items = $viewModels;
        $user = $this->controller->VfpDataUnitOfWork->SysuserRepository->GetByUsername($this->UserName);
        $this->SavedUserFilters = $this->controller->VfpDataUnitOfWork->SysexportRepository->GetSavedFiltersByUserName($user->getUsername(), $exportedBy);

        $this->CompanyLogo = $this->controller->DatUnitOfWork->ARCOMPRepository->GetCompanyLogo();

        $this->FullFeatures = isset($_SESSION['fullFeatures']) ? $_SESSION['fullFeatures'] : false;
        $this->ShowFiancialDashboard = (!isset($_SESSION['showFiancialDashboard'])) ? false : $_SESSION['showFiancialDashboard'];

        $this->JavascriptBootstrapPager = BootstrapPager::GetJavascriptBootstrapPager();
    }
}