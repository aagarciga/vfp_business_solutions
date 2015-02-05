<?php

/**
 * Project:  VFP Business Series
 * Copyright: 2014. VFP Business Solutions, LLC
 */

namespace Dandelion\MVC\Application\Controllers\Dashboard\Actions;

use Dandelion\MVC\Core\Action;
use Dandelion\Diana\BootstrapPager;

/**
 * Ajax Job Status Items
 * @name GetJobStatusItems_Post
 */
class GetSalesOrder_Post extends Action {

    /**
     * Returns SalesOrderObject with Associated Items Collection from Soitem
     * @return JSON
     */
    public function Execute() {
        
        $result = array('success' => false);
        $salesOrder = $this->Request->hasProperty('salesOrder') ? $this->Request->salesOrder : '';
        $soheadData = $this->controller->DatUnitOfWork->SOHEADRepository->GetByOrdnum($salesOrder);

        if ($soheadData) {
            $result['salesOrderObject'] = array(
                'ordnum' => $salesOrder,
                'date' => $soheadData->getPodate(),
                'custno' => $soheadData->getCustno(),
                'projectLocation' => $soheadData->getShipfrom(),
                'notes' => $soheadData->getInhsecomm()
                );
            $result['success'] = true;
            $result['salesOrderObject']['itemsCollection'] = $this->getSalesOrderItems($salesOrder);
        }
        return json_encode($result);
    }
    
    private function getSalesOrderItems($salesOrder){
        $result = array();
        
        $pager = $this->getSalesOrderItemsPager($salesOrder, 100); /// Try to get the first 100
        $pager->Paginate();  
        $salesOrderItems = $pager->getCurrentPagedItems();
        
        if (count($salesOrderItems)) {
            foreach ($salesOrderItems as $item){
                $result []= array(
                    'ordnum' => trim($item->ORDNUM),
                    'itmcount' => trim($item->ITMCOUNT),
                    'itemno' => trim($item->ITEMNO),
                    'itmwhs' => trim($item->ITMWHS),
                    'descrip' => trim($item->DESCRIP),
                    'unit' => trim($item->UNIT),
                    'qtyord' => trim($item->QTYORD),
                    'qtyshp' => trim($item->QTYSHP),
                    'unitprice' => trim($item->UNITPRICE),
                    'extprice' => trim($item->EXTPRICE)
                );
            }
        }
        return $result;
    }
    
    private function getSalesOrderItemsPager($ordnum , $itemsPerpage = 5, $middleRange = 5, $showPagerControlsIfMoreThan = 10, $orderby = "ordnum", $order = "ASC" ){
        $orderby = $this->prepareOrderByField($orderby);
        $companySuffix = $this->controller->DatUnitOfWork->CompanySuffix;
        $ordnum = strtolower($ordnum);
        
        $sqlString = "SELECT "
                . "ORDNUM, "
                . "ITMCOUNT, "
                . "ITEMNO, "
                . "ITMWHS, "
                . "DESCRIP, "
                . "UNIT, "
                . "QTYORD, "
                . "QTYSHP, "
                . "UNITPRICE, "
                . "EXTPRICE "                
                . "FROM SOITEM$companySuffix WHERE LOWER(ORDNUM) = '$ordnum' GROUP BY ORDNUM, ITMCOUNT, ITEMNO, ITMWHS, DESCRIP, UNIT, QTYORD, QTYSHP, UNITPRICE, EXTPRICE ORDER BY $orderby $order";
        return new BootstrapPager($this->controller->DatUnitOfWork->DBDriver, $sqlString, $itemsPerpage, $middleRange, $showPagerControlsIfMoreThan);
    }
    
    private function prepareOrderByField($orderByFiled){
        $result = $orderByFiled;
        if ($orderByFiled === "QTYORD" || $orderByFiled === "QTYSHP"){ // For Numeric columns
            $result = $this->controller->DatUnitOfWork->DBDriver->Convert2Integer($orderByFiled);
        }
        return $result;
    }
}