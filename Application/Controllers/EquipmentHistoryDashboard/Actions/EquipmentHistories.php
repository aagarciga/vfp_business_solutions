<?php
/**
 * Project:  VFP Business Series
 * Copyright: 2014. VFP Business Solutions, LLC
 */

namespace Dandelion\MVC\Application\Controllers\EquipmentHistoryDashboard\Actions;

use Dandelion\MVC\Core\Action;
use Dandelion\MVC\Application\Controllers\EquipmentHistoryDashboard\Models\EquipmentHistoryViewModel;

require_once MVC_DIR_APP_VIEWS . DIRECTORY_SEPARATOR . 'EquipmentHistoryDashboard' . DIRECTORY_SEPARATOR . 'Model' . DIRECTORY_SEPARATOR . 'EquipmentHistoryViewModel.php';

/**
 * Class EquipmentHistories
 * @package Dandelion\MVC\Application\Controllers\EquipmentHistoryDashboard\Actions
 */
class EquipmentHistories extends Action
{
    public function PreAction()
    {
        parent::PreAction(); // TODO: Change the autogenerated stub
        $this->Title = "Equipment History Dashboard | VFP Business Series";
        $this->Caption = "Equipment History";
        $this->Signature = 'EQH';
        $this->ControllerName = $this->Controller;
        $this->FullFeatures = $this->Session->getSessionValue(DASHBOARD_SESSION_PARAM_FULLFEATURES, DASHBOARD_SESSION_PARAM_FULLFEATURES_DEFAULT);
        $this->ShowFiancialDashboard = $this->Session->getSessionValue(DASHBOARD_SESSION_PARAM_SHOWFINANCIALDASHBOARD, DASHBOARD_SESSION_PARAM_SHOWFINANCIALDASHBOARD_DEFAULT);
        $this->CompanyLogo = $this->controller->DatUnitOfWork->ARCOMPRepository->GetCompanyLogo();
        $this->UserName = $this->Session->getSessionValue(DASHBOARD_SESSION_PARAM_USERNAME, DASHBOARD_SESSION_PARAM_USERNAME_DEFAULT);
        $this->User = $this->controller->VfpDataUnitOfWork->SysuserRepository->GetByUsername($this->UserName);
        $this->SavedUserFilters = $this->controller->VfpDataUnitOfWork->SysexportRepository->GetSavedFiltersByUserName($this->User->getUsername(), $this->Signature);
    }

    public function Execute()
    {
        $predicate = ""; // TODO: Change for Victor Filter Tree

        $this->EquipId = $this->Request->hasProperty('equipid') ? base64_decode($this->Request->equipid) : "";
        $this->JsonFilterTree = $this->Request->hasProperty('jsonFilterTree') ? $this->Request->jsonFilterTree : null;



        $this->CompanyID = $this->controller->DatUnitOfWork->CompanySuffix;
        $this->EquipmentHistoryViewModelName = EquipmentHistoryViewModel::getName();
        $this->EquipmentHistoryFieldsDefinition = EquipmentHistoryViewModel::getFieldsDefinitionFor($this->CompanyID);

        $this->JsonFilterTree = ''; //TODO: Implement this...

        $this->Page = $this->Request->hasProperty('page') ? $this->Request->page : $this->Session->getSessionValue(DASHBOARD_SESSION_PARAM_PAGE, $this->controller->getDefaultPage());
        $this->OrderBy = $this->Request->hasProperty('orderBy') ? $this->Request->orderBy : $this->Session->getSessionValue(DASHBOARD_SESSION_PARAM_ORDERBY, $this->controller->getDefaultOrderBy($this->EquipmentHistoryViewModelName));
        $this->Order = $this->Request->hasProperty('order') ? $this->Request->order : $this->Session->getSessionValue(DASHBOARD_SESSION_PARAM_ORDER, $this->controller->getDefaultOrder());
        $this->ItemsPerPage = $this->Request->hasProperty('itemsPerPage') ? $this->Request->itemsPerPage : $this->Session->getSessionValue(DASHBOARD_SESSION_PARAM_ITEMSPERPAGE, $this->Application->getDefaultPagerItemsPerPage());

        error_log('$this->EquipId :'. $this->EquipId);
        error_log('$this->JsonFilterTree :'. $this->JsonFilterTree);
        error_log('$this->ItemsPerPage :'. $this->ItemsPerPage);
        error_log('$this->Page :'. $this->Page);
        error_log('$this->OrderBy :'. $this->OrderBy);
        error_log('$this->Order :'. $this->Order);

        $this->Pager = $this->controller->GetPagerBy( 'equipid', $this->EquipId, $this->EquipmentHistoryViewModelName, $predicate, $this->OrderBy, $this->Order, $this->ItemsPerPage);
        $this->Pager->Paginate();
        $this->ItemCount = $this->Pager->getItemsCount();
        if(!($this->ItemCount > 0)){
            $this->ItemCount = 0;
        }
        $this->Items = $this->Pager->getCurrentPagedItems();

        $viewModels = array();
        foreach ($this->Items as $item) {
            $viewModels [] = new EquipmentHistoryViewModel($item->qbtxlineid, $item->equipid, $item->ordnum, $item->inspectno, $item->inspectnm, $item->installdte, $item->expdtein, $item->daterec, $item->vesselid);
        }
        $this->Items = $viewModels;

    }

}