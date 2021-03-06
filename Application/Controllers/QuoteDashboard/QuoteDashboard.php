<?php
/**
 * Project:  VFP Business Series
 * Copyright: 2014. VFP Business Solutions, LLC
 */

namespace Dandelion\MVC\Application\Controllers;

use Dandelion\MVC\Application\Controllers\DatActionsController;
use Dandelion\Diana\BootstrapPager;

/**
 * VFP Business Series Dashboard Controller
 * @name Dashboard
 */
class QuoteDashboard extends DatActionsController {

    private $statuses = array(
        '0'=>'Empty',
        '1'=>'RFQ Received',
        '2'=>'Quote Prepared',
        '3'=>'Sent to Customer',
        '4'=>'CSR follow up',
        '5'=>'Revisions',
        '6'=>'Not  approved',
        '7'=>'Quote approved',
        '8'=>'Billed');

    /**
     * @return array
     */
    public function getStatuses()
    {
        return $this->statuses;
    }
    
    /**
     * 
     * @param string $predicate
     * @param int $itemsPerpage
     * @param int $middleRange
     * @param int $showPagerControlsIfMoreThan
     * @param string $orderby
     * @param string $order (ASC | DESC)
     * @return \Dandelion\Diana\BootstrapPager
     * 
     * @internal Because in the feature this will be an INNER JOIN
     */
    public function GetPager($predicate, $itemsPerpage = 50, $middleRange = 5, $showPagerControlsIfMoreThan = 10, $orderby = "qutno", $order = "ASC" ){
        if($predicate !== "") { $predicate = " WHERE ".$predicate; } 
        $orderby = $this->prepareOrderByField($orderby); // Converting String yo Integer for correct representation
        $companySuffix = $this->DatUnitOfWork->CompanySuffix;
        
        $sqlString = "SELECT "
                . "qutno, "
                . "projno, "
                . "company, "
                . "vesselid, "
                . "sotypecode, "
                . "jobdescrip, "
                . "sotypecode, "
                . "status, "
            . "RFQReqDate, "
                . "qutdate, "
                . "ordnum, "
                . "cstctid ,"
                . "technam1 as projectManager1, "
                . "technam2 as projectManager2 "
            . "FROM QUHSTH$companySuffix $predicate GROUP BY qutno, projno, company, vesselid, sotypecode, jobdescrip, sotypecode, status, RFQReqDate, qutdate, ordnum, cstctid, projectManager1, projectManager2 ORDER BY $orderby $order";

        return new BootstrapPager($this->DatUnitOfWork->DBDriver, $sqlString, $itemsPerpage, $middleRange, $showPagerControlsIfMoreThan);
    }
    
    private function prepareOrderByField($orderByFiled){
        $result = $orderByFiled;
        if ($orderByFiled === "qutno" ){//|| $orderByFiled === "Cstctid") { // TODO Ask and fix that
            $result = $this->DatUnitOfWork->DBDriver->Convert2Integer($orderByFiled);
        }
        return $result;
    }
}