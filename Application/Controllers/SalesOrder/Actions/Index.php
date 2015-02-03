<?php
/**
 * Project:  VFP Business Series
 * Copyright: 2014. VFP Business Solutions, LLC
 */

namespace Dandelion\MVC\Application\Controllers\SalesOrder\Actions;

use Dandelion\MVC\Core\Action;
use Dandelion\MVC\Application\Controllers\SalesOrder\Models\SalesOrderViewModel;
use Dandelion\MVC\Application\Controllers\SalesOrder\Models\SalesOrderItemViewModel;

/**
 * VFP Business Series Dashboard Controller Action
 * @name Index
 */
class Index extends Action {

    /**
     * Default Dashboard page.
     */
    public function Execute() {
        $this->Title = 'Sales Order | VFP Business Series - Warehouse Management System';
        
        $this->UserName = (!isset($_SESSION['username']))? 'Anonimous' : $_SESSION['username'];
        $this->ItemPerPage = 1000;//(!isset($_SESSION['itemperpages']))? 10 : $_SESSION['itemperpages'];
        
        $this->FromController = $this->Request->hasProperty('fromController') ? $this->Request->fromController : "";
        $this->FromAction = $this->Request->hasProperty('fromAction') ? $this->Request->fromAction : "";
        
        $this->SalesOrder = $this->Request->hasProperty('salesorder') ? $this->Request->salesorder : "";
        
        $soheadData = $this->controller->DatUnitOfWork->SOHEADRepository->GetByOrdnum($this->SalesOrder);
        
        $this->SalesOrder = new SalesOrderViewModel($soheadData->getOrdnum(), $soheadData->getPodate(), $soheadData->getCustno(), $soheadData->getShipfrom(), $soheadData->getInhsecomm() );
        
        $this->Pager = $this->controller->GetSalesOrderItemsPager($this->UserName, $this->SalesOrder->getOrdnum(), $this->ItemPerPage);
        $this->Pager->Paginate();  
        $salesOrderItems = $this->Pager->getCurrentPagedItems();        
        $salesOrderItemsViewModel = array();
        
        foreach ($salesOrderItems as $item) {
            $currentItem = new SalesOrderItemViewModel($item->ORDNUM, $item->ITMCOUNT, $item->ITEMNO, $item->ITMWHS, $item->DESCRIP, $item->UNIT, $item->QTYORD, $item->QTYSHP, $item->UNITPRICE, $item->EXTPRICE);
            $salesOrderItemsViewModel []= $currentItem;
        }
        
        $this->SalesOrderItems= $salesOrderItemsViewModel;
        
    }

}
