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
class GetEquipmentPage_Post extends Action
{
    public function Execute()
    {
        $predicate = ""; // TODO: Change for Victor Filter Tree

        $this->CompanyID = $this->controller->DatUnitOfWork->CompanySuffix;
        $this->EquipmentHistoryDashboardViewModelName = EquipmentHistoryDashboardViewModel::getName();
        $this->EquipmentHistoryDashboardFieldsDefinition = EquipmentHistoryDashboardViewModel::getFieldsDefinitionFor($this->CompanyID);

        $this->JsonFilterTree = ''; //TODO: Implement this...

        $this->Page = $this->Request->hasProperty('page') ? $this->Request->page : $this->Session->getSessionValue(DASHBOARD_SESSION_PARAM_PAGE, $this->controller->getDefaultPage());
        $this->OrderBy = $this->Request->hasProperty('orderBy') ? $this->Request->orderBy : $this->Session->getSessionValue(DASHBOARD_SESSION_PARAM_ORDERBY, $this->controller->getDefaultOrderBy($this->EquipmentHistoryViewModelName));
        $this->Order = $this->Request->hasProperty('order') ? $this->Request->order : $this->Session->getSessionValue(DASHBOARD_SESSION_PARAM_ORDER, $this->controller->getDefaultOrder());
        $this->ItemsPerPage = $this->Request->hasProperty('itemsPerPage') ? $this->Request->itemsPerPage : $this->Session->getSessionValue(DASHBOARD_SESSION_PARAM_ITEMSPERPAGE, $this->Application->getDefaultPagerItemsPerPage());

        $this->Pager = $this->controller->GetPager($this->EquipmentHistoryDashboardViewModelName, $predicate, $this->OrderBy, $this->Order, $this->ItemsPerPage);

        $this->ItemCount = $this->Pager->getItemsCount();
        if(!($this->ItemCount > 0)){
            $this->ItemCount = 0;
        }
        $pager = $this->Pager->PaginateForAjax($this->Page);
        $currentPagedItems = $pager['currentPagedItems'];

        $result = array();
        foreach ($currentPagedItems as $item){
            $result[] = $this->createViewModel($item, $this->EquipmentHistoryDashboardFieldsDefinition);
        }


//        $this->Items = $this->Pager->getCurrentPagedItems();
//
//        foreach ($this->Items as $item) {
////            $current = $this->createViewModel($item, $this->EquipmentHistoryDashboardFieldsDefinition);
////            error_log(print_r($current, true));
////            $result['currentPagedItems'][] = $current;
//            $result['currentPagedItems'][] = $item;
//        }

        $pager['currentPagedItems'] = $result;

        return json_encode($pager);
    }

    private function createViewModel($item, $fieldDefinition) {
        $result = array();
        foreach ($fieldDefinition as $field => $definition){
            $type = MODEL_TYPE_DEFAULT;
            if (array_key_exists('type', $definition)){
                $type = $definition['type'];
            }
            $sanitizeFunc = $this->createSanitizeFunc($type);
            $value = $this->$sanitizeFunc($item->$field);
            $result[$field] = $value;
        }
        return $result;
    }

    private function createSanitizeFunc ($type) {
        $functionName = 'sanitize' . ucfirst($type);
        if (!function_exists($functionName))
            $functionName = 'sanitizeDefault';
        return $functionName;
    }

    private function sanitizeDefault($value) {
        if (is_null($value)) $value = '';
        if (is_string($value)) $value = trim($value);
        return $value;
    }

    private function sanitizeDate($value) {
        $value = trim($value);
        return ($value === MODEL_TYPE_DATE_DEFAULT) ? '' : $value;
    }

    private function sanatiteLink($value) {
        if (is_null($value) || $value == "") $value = '#';
        $value = trim($value);
        $value = View::ServerFileContext($value);
        return (string) $value;
    }

}