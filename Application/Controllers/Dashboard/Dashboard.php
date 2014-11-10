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
    
    // Because in the feature this will be an INNER JOIN
    public function GetDashboardPager($userid, $predicate, $itemsPerpage = 5, $middleRange = 5, $showPagerControlsIfMoreThan = 10 ){
        if($predicate !== ""){
            $predicate = " AND ".$predicate;
        } 
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
                . "FROM SOHEAD$companySuffix "
                . "WHERE NOT(SOHEAD$companySuffix.sostatus = 'C' OR SOHEAD$companySuffix.sostatus = 'A') $predicate";

        return new BootstrapPager($this->DatUnitOfWork->DBDriver, $sqlString, $itemsPerpage, $middleRange, $showPagerControlsIfMoreThan);
    }
}