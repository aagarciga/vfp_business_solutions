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
class Dashboard extends DatActionsController {
    
    /**
     * 
     * @param string $userid
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
    public function GetDashboardPager($userid, $predicate, $itemsPerpage = 50, $middleRange = 5, $showPagerControlsIfMoreThan = 10, $orderby = "ordnum", $order = "ASC" ){
        if($predicate !== "") { $predicate = " WHERE ".$predicate; } 
        $orderby = $this->prepareOrderByField($orderby); // Converting String yo Integer for correct representation
        $companySuffix = $this->DatUnitOfWork->CompanySuffix;
        $sqlString = "SELECT "
                . "ordnum, "
                . "ponum, "
                . "company, "
                . "destino, "
                . "ProStartDT, "
                . "ProEndDT, "
                . "sotypecode, "
                . "MTRLSTATUS, "
                . "JOBSTATUS, "
                . "TECHNAM1 as projectManager1, "
                . "TECHNAM2 as projectManager2, "
                . "podate, "
                . "qutno, "
                . "Cstctid ,"
                . "JobDescrip "
                . "FROM SOHEAD$companySuffix $predicate GROUP BY ordnum, ponum, company, destino, ProStartDT, ProEndDT, sotypecode, MTRLSTATUS, JOBSTATUS, projectManager1, projectManager2, podate, qutno, Cstctid ,JobDescrip ORDER BY $orderby $order";
                //. "FROM SOHEAD$companySuffix WHERE NOT(SOHEAD$companySuffix.sostatus = 'C' OR SOHEAD$companySuffix.sostatus = 'A')$predicate GROUP BY ordnum, ponum, company, destino, ProStartDT, ProEndDT, sotypecode, MTRLSTATUS, JOBSTATUS, projectManager1, projectManager2, podate, qutno, Cstctid ,JobDescrip ORDER BY $orderby $order";
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