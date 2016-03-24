<?php
/**
 * User: Victor
 * Date: 13/01/2016
 * Time: 0:34
 * Project:  VFP Business Series
 * Copyright: 2014. VFP Business Solutions, LLC
 */

namespace Dandelion\MVC\Application\Controllers\HistoryDashboard\Actions;

use Dandelion\MVC\Core\Action;
use Dandelion\Diana\BootstrapPager;
use Dandelion\MVC\Application\Tools;
use Dandelion\MVC\Core\View;

define("VIEW_MODEL_CLASS", 'Dandelion\MVC\Application\Controllers\HistoryDashboard\Models\HistoryDashboardViewModel');

/**
 * Created by: Victor
 * Class Index
 * @package Dandelion\MVC\Application\Controllers\HistoryDashboard\Actions
 */
class Index extends Action
{
    public function Execute()
    {
        $exportedBy = 'HTD';
        $this->Title = 'History Dashboard | VFP Business Series';

        $equipid = EQUIP_ID;

        $this->EquipId = $this->Request->hasProperty($equipid) ? base64_decode($this->Request->$equipid) : "";
        $this->JsonFilterTree = $this->Request->hasProperty('jsonFilterTree') ? $this->Request->jsonFilterTree : null;
        $this->ItemPerPage = $this->Request->hasProperty('itemPerPage') ? $this->Request->itemPerPage : null;
        $this->Page = $this->Request->hasProperty('page') ? $this->Request->page : null;
        $this->OrderBy = $this->Request->hasProperty('orderBy') ? $this->Request->orderBy : null;
        $this->Order = $this->Request->hasProperty('order') ? $this->Request->order : null;

        $this->FieldsDefinitions = $this->controller->GetFieldsDefinition($this->controller->DatUnitOfWork->CompanySuffix);

        $defaultItemsPerPage = $this->controller->getDefaultItemPerPage($this->Request);

        $this->UserName = (!isset($_SESSION['username'])) ? 'Anonimous' : $_SESSION['username'];
        $this->ItemPerPage = $defaultItemsPerPage;
        $this->FilterTree = $this->controller->getDefaultFilterTree();
        $this->FilterId = "";
        $this->Page = Tools\Session::getSessionValue($this->controller->getSessionId(PAGE_SUFFIX), $this->controller->getDefaultPage());
        $this->OrderBy = Tools\Session::getSessionValue($this->controller->getSessionId(ORDERBY_SUFFIX), $this->controller->getDefaultOrderByField());
        $this->Order = Tools\Session::getSessionValue($this->controller->getSessionId(ORDER_SUFFIX), $this->controller->getDefaultOrder());

        $filterTree = $this->controller->getFilterIncludeEquipId($equipid, $this->EquipId, $this->FilterTree, $this->FieldsDefinitions);

        $this->Pager = $this->controller->GetPager($filterTree, $this->ItemPerPage, 5, 10, $this->OrderBy, $this->Order);
        $this->Pager->Paginate();
        $itemCount = $this->Pager->getItemsCount();
        $items = $this->Pager->getCurrentPagedItems();
        $viewModels = array();

        if ($itemCount > 0)
        {
            foreach($items as $item)
            {
                $currentItemViewModel = Tools\createViewModel(VIEW_MODEL_CLASS, $item, $this->controller->GetFieldsDefinition($this->controller->DatUnitOfWork->CompanySuffix));
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