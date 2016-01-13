<?php
/**
 * Created by PhpStorm.
 * User: Victor
 * Date: 13/01/2016
 * Time: 0:34
 */

namespace Dandelion\MVC\Application\Controllers\ItemDashboard\Actions;

use Dandelion\MVC\Application\Controllers\ItemDashboard\Models\ItemDashboardViewModel;
use Dandelion\MVC\Core\Action;

class Index extends Action
{
    public function Execute()
    {
        $itemno = $this->Request->hasProperty('itemno') ? $this->Request->itemno : '';

        $this->Title = 'Item Dashboard | VFP Business Series';

        $defaultItemsPerPage = $this->Request->Application->getDefaultPagerItermsPerPage();

        $this->UserName = (!isset($_SESSION['username'])) ? 'Anonimous' : $_SESSION['username'];
        $this->ItemPerPage = isset($_SESSION['itemperpages']) ? $_SESSION['itemperpages'] : $defaultItemsPerPage;

        $this->Itemno = $itemno;

        $this->FilterPredicate = "";

        $this->Pager = $this->controller->GetPager($this->FilterPredicate, $this->ItemPerPage);
        $this->Pager->Paginate();
        $items = $this->Pager->getCurrentPagedItems();
        $viewModels = array();

        foreach($items as $item)
        {
            $currentItemViewModel = new ItemDashboardViewModel($item->ordnum, $item->ponum, $item->custno, $item->podate, $item->qtyord, $item->qtyshp, $item->bckord, $item->qtyshp0, $item->qtyshprel, $item->shipdate);
            $viewModels[] = $currentItemViewModel;
        }

        $this->Items = $viewModels;

        $this->CompanyLogo = $this->controller->DatUnitOfWork->ARCOMPRepository->GetCompanyLogo();

        $this->FullFeatures = isset($_SESSION['fullFeatures']) ? $_SESSION['fullFeatures'] : false;
    }
}