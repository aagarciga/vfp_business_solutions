<?php

/**
 * Project:  VFP Business Series
 * Copyright: 2014. VFP Business Solutions, LLC
 */

namespace Dandelion\MVC\Application\Controllers\EquipmentHistoryDashboard\Actions;

use Dandelion\MVC\Core\Action;
use Dandelion\Diana\BootstrapPager;

/**
 * Ajax Endpoint for GetWorkOrder
 * @name GetSalesOrder_Post
 */
class GetWorkOrder_Post extends Action {

    /**
     * Returns WorkOrder
     * @return JSON
     */
    public function Execute() {

        $result = array('success' => false);
        $salesOrder = $this->Request->hasProperty('ordnum') ? $this->Request->ordnum : '';
        $soheadData = $this->controller->DatUnitOfWork->SOHEADRepository->GetByOrdnum($salesOrder);

        if ($soheadData) {
            
            $username = (!isset($_SESSION['username']))? 'Anonimous' : $_SESSION['username'];
            $userEntity = $this->controller->VfpDataUnitOfWork->SysuserRepository->GetByUsername($username);
            $formType =  strtoupper($userEntity->getSoformdb());
            if ($formType === 'A') {
                $result['salesOrderObject'] = $this->prepareResultA($soheadData);
            } else if ($formType === 'B') {
                $result['salesOrderObject'] = $this->prepareResultB($soheadData);
            } else if ($formType === 'C') {
                $result['salesOrderObject'] = $this->prepareResultC($soheadData);
            }
            
            $result['formType'] = $formType;
            $result['success'] = true;
            $result['salesOrderObject']['itemsCollection'] = $this->getSalesOrderItems($salesOrder);
        }
        return json_encode($result);
    }
    
    private function prepareResultA($soheadData){
        return array(
                'ordnum' => $soheadData->getOrdnum(),
                'date' => $soheadData->getPodate(),
                'custno' => $soheadData->getCustno(),
                'projectLocation' => $soheadData->getShipfrom(),
                'notes' => $soheadData->getInhsecomm(),
                'companyName' => $soheadData->getCompany(),
                'address' => $soheadData->getAddress1(),
                'city' => $soheadData->getCity(),
                'state' => $soheadData->getState(),
                'zip' => $soheadData->getZip(),
                'phone' => $soheadData->getPhone(),
                'subtotal' => $soheadData->getSubtotal(),
                'discount' => $soheadData->getDiscount(),
                'tax' => $soheadData->getTax(),
                'shipping' => $soheadData->getShipping(),
                'total' => $soheadData->getTotal()            
            );
    }
    
    private function prepareResultB($soheadData){
        $materialStatus = $this->controller->DatUnitOfWork->SOEDISTATUSRepository->GetMaterialStatusById($soheadData->getMtrlstatus());
        $materialStatusValue = "";
        if ($materialStatus !== null) {
            $materialStatusValue = $materialStatus->getDescrip();
        }        
        $jobStatus = $this->controller->DatUnitOfWork->SOEDISTATUSRepository->GetJobStatusById($soheadData->getJobstatus());
        $jobStatusValue = "";
        if ($jobStatus !== null) {
            $jobStatusValue = $jobStatus->getDescrip();
        }  
        return array_merge($this->prepareResultA($soheadData),
                array(
                    'ponum' => $soheadData->getPonum(),
                    'company' => $soheadData->getCompany(),
                    'destino' => $soheadData->getVesselid(),
                    'prostartdt' => $soheadData->getProstartdt(),
                    'proenddt' => $soheadData->getProenddt(),
                    'sotypecode' => $soheadData->getSotypecode(),
                    'mtrlstatus' => $materialStatusValue,
                    'jobstatus' => $jobStatusValue,
                    'technam1' => $soheadData->getTechnam1(),
                    'technam2' => $soheadData->getTechnam2(),
                    'qutno' => $soheadData->getQutno(),
                    'cstctid' => $soheadData->getCstctid(),
                    'jobdescrip' => $soheadData->getJobdescrip(),
                    )
                );
    }
    
    private function prepareResultC($soheadData){
        return $this->prepareResultB($soheadData);
    }
    
    private function getSalesOrderItems($salesOrder){
        $result = array();
        
        $pager = $this->getSalesOrderItemsPager($salesOrder, 1000); /// Try to get the first 1000
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