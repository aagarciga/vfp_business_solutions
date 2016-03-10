<?php
/**
 * Created by PhpStorm.
 * User: Victor
 * Date: 13/01/2016
 * Time: 0:34
 * Project:  VFP Business Series
 * Copyright: 2014. VFP Business Solutions, LLC
 */

namespace Dandelion\MVC\Application\Controllers\EquipmentDashboard\Actions;

use Dandelion\MVC\Core\Action;
use Dandelion\Diana\BootstrapPager;
use Dandelion\MVC\Application\Tools;
use Dandelion\Tools\Filter\BlockExpressionNode;

define("VIEW_MODEL_CLASS", 'Dandelion\MVC\Application\Controllers\EquipmentDashboard\Models\EquipmentDashboardViewModel');



/**
 * Created by: Victor
 * Class Index
 * @package Dandelion\MVC\Application\Controllers\EquipmentDashboard\Actions
 */
class Index extends Action
{
    public function Execute()
    {
        $exportedBy = 'EQM';
        $this->Title = 'Equipment Dashboard | VFP Business Series';

        $this->FieldDefinitions = $this->controller->GetFieldsDefinition($this->controller->DatUnitOfWork->CompanySuffix);

        $defaultItemsPerPage = $this->controller->getDefaultItemPerPage($this->Request);

        $this->UserName = (!isset($_SESSION['username'])) ? 'Anonimous' : $_SESSION['username'];
        $this->ItemPerPage = self::getSessionValue(EQUIPMENT_ITEM_PER_PAGE, $defaultItemsPerPage);
        $this->FilterTree = $this->controller->getSessionFilterTree();
        $this->Page = self::getSessionValue(EQUIPMENT_PAGE, $this->controller->getDefaultPage());
        $this->OrderBy = self::getSessionValue(EQUIPMENT_ORDERBY, $this->controller->getDefaultOrderByField());
        $this->Order = self::getSessionValue(EQUIPMENT_ORDER, $this->controller->getDefaultOrder());

        $this->Pager = $this->controller->GetPager($this->FilterTree, $this->ItemPerPage, 5, 10, $this->OrderBy, $this->Order);
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

    private static function getSessionValue($key, $defaultValue){
        return isset($_SESSION[$key]) ? $_SESSION[$key] : $defaultValue;
    }
}