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
    public function GetDashboardPager($userid, $itemsPerpage = 5, $middleRange = 5, $showPagerControlsIfMoreThan = 10 ){
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
                . "inspectno, "
                . "podate, "
                . "qutno, "
                . "Cstctid FROM SOHEAD$companySuffix "
                . "WHERE  NOT(SOHEAD$companySuffix.sostatus = 'C' OR SOHEAD$companySuffix.sostatus = 'A')";
        // Lets BootstrapPager deal with item count
//        $query = $this->DatUnitOfWork->DBDriver->GetQuery();
//        $queryResult = $query->Execute($sqlString);        
//        $itemsCount = count($queryResult);
        return new BootstrapPager($this->DatUnitOfWork->DBDriver, $sqlString, $itemsPerpage, $middleRange, $showPagerControlsIfMoreThan);
    }
}