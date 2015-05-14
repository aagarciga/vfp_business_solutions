<?php

/**
 * Project:  VFP Business Series
 * Copyright: 2014. VFP Business Solutions, LLC
 */

namespace Dandelion\MVC\Application\Controllers\PickTicket\Actions;

use Dandelion\MVC\Core\Action;
use Dandelion\Diana\BootstrapPager;

/**
 * Ajax Barcode verification
 * @name ShipmentUpdate_Post
 */
class GetTicketPage_Post extends Action {

    /**
     * Commit Shipment Changes
     * @return JSON
     */
    public function Execute() {
//        $page = filter_input(INPUT_POST, 'page');
        
        $page = $this->Request->hasProperty('page') ? $this->Request->page : '1';
        
        $result = array();
        
        if (is_numeric($page)) {
            $this->UserName = (!isset($_SESSION['username']))? 'Anonimous' : $_SESSION['username'];
            //$pickticketItemsPerPage = $this->Request->Application->getPickTicketPagerItermsPerPage();
            $pickticketItemsPerPage = 10;
            $this->ItemPerPage = (!isset($_SESSION['pickticketsitemperpages']))? $pickticketItemsPerPage : $_SESSION['pickticketsitemperpages'];
            
//            $this->Pager = $this->controller->GetTicketsPager($this->UserName, $this->ItemPerPage);
            $this->Pager = $this->GetTicketsPager($this->UserName, $this->ItemPerPage);
            
            $pager = $this->Pager->PaginateForAjax($page);
            $currentPagedItems = $pager['currentPagedItems'];
            foreach ($currentPagedItems as $row){
                
                $sohead = $this->controller->DatUnitOfWork->SOHEADRepository->GetByOrdnum($row->ORDNUM);
                $currentCompany = '';
                if ($sohead !== null) {
                    $currentCompany = $sohead->getCompany();
                }
                
                $current = array();
                $current['company'] = trim($currentCompany);
                $current['shprelno'] = trim($row->SHPRELNO);
                $current['ordnum'] = trim($row->ORDNUM);
//                $current['shpreldate'] = trim($row->SHPRELDATE);
//                $current['bath_no'] = trim($row->BATCH_NO);
//                $current['qtyshprel'] = intval($row->QTYSHPREL);
//                $current['qtypick'] = intval($row->QTYPICK);
//                $current['qtypack'] = intval($row->QTYPACK);
//                $current['weight'] = trim($row->WEIGHT);
                $result[] = $current;
            }
            $pager['currentPagedItems'] = $result;
        }
        return json_encode($pager);
    }
    
    public function GetTicketsPager($userid, $itemsPerpage = 50, $middleRange = 5, $showPagerControlsIfMoreThan = 10 ){
        $companySuffix = $this->controller->DatUnitOfWork->CompanySuffix; 
        
        $sqlString = "SELECT DISTINCT
                        SOSHPREL$companySuffix.SHPRELNO,
                        SOSHPREL$companySuffix.ORDNUM,
                        '' as COMPANY
                      FROM SOSHPREL$companySuffix 
                      WHERE
                        NOT(SOSHPREL$companySuffix.WMSTATUS = 'R' OR SOSHPREL$companySuffix.WMSTATUS = 'I' OR 
                        SOSHPREL$companySuffix.WMSTATUS = 'X') AND NOT(SOSHPREL$companySuffix.VOID)
                        AND ((SOSHPREL$companySuffix.QTYPICK > SOSHPREL$companySuffix.QTYPACK) Or (SOSHPREL$companySuffix.QTYPICK = 0))";
                        
//        error_log($sqlString);
        
        $query = $this->controller->DatUnitOfWork->DBDriver->GetQuery();
        $queryResult = $query->Execute($sqlString);    
        $itemsCount = count($queryResult);
        return new BootstrapPager($this->controller->DatUnitOfWork->DBDriver, $sqlString, $itemsPerpage, $middleRange, $showPagerControlsIfMoreThan, $itemsCount); 
    }
    
}