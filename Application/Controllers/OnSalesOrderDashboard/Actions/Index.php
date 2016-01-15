<?php
/**
 * Created by PhpStorm.
 * User: Victor
 * Date: 13/01/2016
 * Time: 0:34
 * Project:  VFP Business Series
 * Copyright: 2014. VFP Business Solutions, LLC
 */

namespace Dandelion\MVC\Application\Controllers\OnSalesOrderDashboard\Actions;

use Dandelion\MVC\Application\Controllers\OnSalesOrderDashboard\Models\ItemDashboardViewModel;
use Dandelion\MVC\Core\Action;

/**
 * Created by: Victor
 * Class Index
 * @package Dandelion\MVC\Application\Controllers\OnSalesOrderDashboard\Actions
 */
class Index extends Action
{
    public function Execute()
    {
        $itemno = $this->Request->hasProperty('itemno') ? base64_decode($this->Request->itemno) : '';

        $this->Title = 'On Sales Order Dashboard | VFP Business Series';

        $defaultItemsPerPage = $this->Request->Application->getDefaultPagerItermsPerPage();

        $this->UserName = (!isset($_SESSION['username'])) ? 'Anonimous' : $_SESSION['username'];
        $this->ItemPerPage = isset($_SESSION['itemperpages']) ? $_SESSION['itemperpages'] : $defaultItemsPerPage;

        $this->Itemno = $itemno;

        $this->FilterPredicate = (is_string($itemno) && $itemno != "") ? "itemno = '$itemno'" : "";

        $this->Pager = $this->controller->GetPager($this->FilterPredicate, $this->ItemPerPage);
        $this->Pager->Paginate();
        $items = $this->Pager->getCurrentPagedItems();
        $viewModels = array();

        foreach($items as $item)
        {
            $currentItemViewModel = new ItemDashboardViewModel($item->ordnum, $item->ponum, $item->custno, $item->company, $item->podate, $item->qtyord, $item->qtyshp, $item->bckord, $item->qtyshp0, $item->qtyshprel, $item->shipdate);
            $viewModels[] = $currentItemViewModel;
        }

        $this->Items = $viewModels;

        $this->CompanyLogo = $this->controller->DatUnitOfWork->ARCOMPRepository->GetCompanyLogo();

        $this->FullFeatures = isset($_SESSION['fullFeatures']) ? $_SESSION['fullFeatures'] : false;
    }
}