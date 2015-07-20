<?php

/**
 * Project:  VFP Business Series
 * Copyright: 2014. VFP Business Solutions, LLC
 */

namespace Dandelion\MVC\Application\Controllers\QuoteDashboard\Actions;

use Dandelion\MVC\Core\Action;
use Dandelion\Diana\BootstrapPager;

/**
 * Ajax Job Status Items
 * @name GetJobStatusItems_Post
 */
class GetQuoteDetails_Post extends Action {

    /**
     * Returns QuoteDashboardObject with Associated Items Collection from Soitem
     * @return JSON
     */
    public function Execute() {
        
        $result = array('success' => false);
        $quoteNo = $this->Request->hasProperty('quoteNo') ? $this->Request->quoteNo : '';
        $quoteDetails = $this->controller->DatUnitOfWork->QUHSTHRepository->GetByQuoteNo($quoteNo);

        if ($quoteDetails) {
            $result['quoteDetails'] = $this->prepareResult($quoteDetails);

            
            $result['success'] = true;
            $result['quoteDetails']['itemsCollection'] = $this->getItems($quoteNo);
        }
        return json_encode($result);
    }
    
    private function prepareResult($quoteDetails){

        $statuses = $this->controller->getStatuses();
        return array(
                'qutno' => $quoteDetails->getQutno(),
                'status' => $statuses[$quoteDetails->getStatus()],
                'ordnum' => $quoteDetails->getOrdnum(),
                'date' => $quoteDetails->getQutdate(),
                'custno' => $quoteDetails->getCustno(),
                'projectLocation' => $quoteDetails->getShipfrom(),
                'notes' => $quoteDetails->getQuotecomm(),
                'companyName' => $quoteDetails->getCompany(),
                'address' => $quoteDetails->getAddress1(),
                'city' => $quoteDetails->getCity(),
                'state' => $quoteDetails->getState(),
                'zip' => $quoteDetails->getZip(),
                'phone' => $quoteDetails->getPhone(),
                'subtotal' => $quoteDetails->getSubtotal(),
                'discount' => $quoteDetails->getDiscount(),
                'tax' => $quoteDetails->getTax(),
                'shipping' => $quoteDetails->getShipping(),
                'total' => $quoteDetails->getTotal(),
                'ponum' => $quoteDetails->getPonum(),
                'company' => $quoteDetails->getCompany(),
                'destino' => $quoteDetails->getVesselid(), //Ask to vivian
                'sotypecode' => $quoteDetails->getSotypecode(),
                'cstctid' => $quoteDetails->getCstctid(),
                'jobdescrip' => $quoteDetails->getJobdescrip(),
                'technam1' => $quoteDetails->getTechnam1(),
                'technam2' => $quoteDetails->getTechnam2(),
                'projno' => $quoteDetails->getProjno()
//                'vesselid' => $quoteDetails->getVesselid(),
            );
    }

    private function getItems($quoteNo){
        $result = array();
        
        $pager = $this->getSalesOrderItemsPager($quoteNo, 1000); /// Try to get the first 1000
        $pager->Paginate();  
        $items = $pager->getCurrentPagedItems();
        
        if (count($items)) {
            foreach ($items as $item){
                $result []= array(
                    'qutno' => trim($item->QUTNO),
                    'ordnum' => trim($item->ORDNUM),
                    'itmcount' => trim($item->ITMCOUNT),
                    'itemno' => trim($item->ITEMNO),
                    'itmwhs' => trim($item->ITMWHS),
                    'descrip' => trim($item->DESCRIP),
                    'qtyord' => trim($item->QTYORD),
                    'qtyshp' => trim($item->QTYSHP),
                    'unitprice' => trim($item->UNITPRICE),
                    'extprice' => trim($item->EXTPRICE)
                );
            }
        }
        return $result;
    }
    
    private function getSalesOrderItemsPager($quoteNo , $itemsPerpage = 5, $middleRange = 5, $showPagerControlsIfMoreThan = 10, $orderby = "ordnum", $order = "ASC" ){
        $orderby = $this->prepareOrderByField($orderby);
        $companySuffix = $this->controller->DatUnitOfWork->CompanySuffix;
        $quoteNo = strtolower($quoteNo);
        
        $sqlString = "SELECT "
            ."QUTNO, "
            . "ORDNUM, "
            . "ITMCOUNT, "
            . "ITEMNO, "
            . "ITMWHS, "
            . "DESCRIP, "
            . "QTYORD, "
            . "QTYSHP, "
            . "UNITPRICE, "
            . "EXTPRICE "
            . "FROM QUHSTI$companySuffix WHERE LOWER(QUTNO) = '$quoteNo' GROUP BY QUTNO, ORDNUM, ITMCOUNT, ITEMNO, ITMWHS, DESCRIP, QTYORD, QTYSHP, UNITPRICE, EXTPRICE ORDER BY $orderby $order";
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