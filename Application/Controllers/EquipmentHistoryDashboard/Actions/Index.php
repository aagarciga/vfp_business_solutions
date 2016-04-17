<?php
/**
 * Project:  VFP Business Series
 * Copyright: 2014. VFP Business Solutions, LLC
 */

namespace Dandelion\MVC\Application\Controllers\EquipmentHistoryDashboard\Actions;

use Dandelion\MVC\Core\Action;
use Dandelion\MVC\Application\Controllers\EquipmentHistoryDashboard\Models\EquipmentHistoryDashboardViewModel;

require_once MVC_DIR_APP_VIEWS . DIRECTORY_SEPARATOR . 'EquipmentHistoryDashboard' . DIRECTORY_SEPARATOR . 'Model' . DIRECTORY_SEPARATOR . 'EquipmentHistoryDashboardViewModel.php';

/**
 * Class Index
 * @package Dandelion\MVC\Application\Controllers\EquipmentHistoryDashboard\Actions
 */
class Index extends Action
{
    public function PreAction()
    {
        parent::PreAction(); // TODO: Change the autogenerated stub
        $this->Title = "Equipment Dashboard | VFP Business Series";
        $this->Signature = 'EQM';
        $this->UserName = $this->Session->getSessionValue(DASHBOARD_SESSION_PARAM_USERNAME, DASHBOARD_SESSION_PARAM_USERNAME_DEFAULT);
        $this->FullFeatures = $this->Session->getSessionValue(DASHBOARD_SESSION_PARAM_FULLFEATURES, DASHBOARD_SESSION_PARAM_FULLFEATURES_DEFAULT);
        $this->ShowFiancialDashboard = $this->Session->getSessionValue(DASHBOARD_SESSION_PARAM_SHOWFINANCIALDASHBOARD, DASHBOARD_SESSION_PARAM_SHOWFINANCIALDASHBOARD_DEFAULT);
        $this->CompanyLogo = $this->controller->DatUnitOfWork->ARCOMPRepository->GetCompanyLogo();

    }

    public function Execute()
    {
        // TODO: Implement Execute() method.

        $predicate = ""; // TODO: Change for Victor Filter Tree

        $this->Page = $this->Session->getSessionValue(DASHBOARD_SESSION_PARAM_PAGE, $this->controller->getDefaultPage());
        $this->OrderBy = $this->Session->getSessionValue(DASHBOARD_SESSION_PARAM_ORDERBY, $this->controller->getDefaultOrderBy(EquipmentHistoryDashboardViewModel::getName()));
        $this->Order = $this->Session->getSessionValue(DASHBOARD_SESSION_PARAM_ORDER, $this->controller->getDefaultOrder());
        $this->ItemsPerPage = $this->Session->getSessionValue(DASHBOARD_SESSION_PARAM_ITEMSPERPAGE, $this->Application->getDefaultPagerItermsPerPage());

        $this->Pager = $this->controller->GetPager(EquipmentHistoryDashboardViewModel::getName(), $predicate, $this->OrderBy, $this->Order, $this->ItemsPerPage);
        $this->Pager->Paginate();
        $this->ItemCount = $this->Pager->getItemsCount();
        $this->Items = $this->Pager->getCurrentPagedItems();

        $viewModels = array();
        foreach ($this->Items as $item) {
            $viewModels [] = new EquipmentHistoryDashboardViewModel($item->ordnum, $item->equipid, $item->itemno, $item->descrip, $item->make, $item->model, $item->serialno, $item->Voltage, $item->EquipType, $item->installdte, $item->expdtein, $item->daterec, $item->status, $item->notes, $item->picture_fi, $item->assettag, $item->locno, $item->qbtxlineid);
        }
        $this->Items = $viewModels;
    }
}