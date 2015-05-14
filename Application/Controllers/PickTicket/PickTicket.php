<?php
/**
 * Project:  VFP Business Series
 * Copyright: 2014. VFP Business Solutions, LLC
 */

namespace Dandelion\MVC\Application\Controllers;

use Dandelion\MVC\Application\Controllers\DatActionsController;
use Dandelion\Diana\BootstrapPager;

/**
 * VFP PickTicket Series Shipment Controller
 * @name PickTicket
 */
class PickTicket extends DatActionsController {
    
//    public function GetTicketsPager($userid, $itemsPerpage = 50, $middleRange = 5, $showPagerControlsIfMoreThan = 10 ){
//        $companySuffix = $this->DatUnitOfWork->CompanySuffix;        
//        $sqlString = "SELECT DISTINCT 
//                        SOSHPREL$companySuffix.SHPRELNO, 
//                        SOSHPREL$companySuffix.ORDNUM, 
//                        SOSHPREL$companySuffix.SHPRELDATE, 
//                        SOSHPREL$companySuffix.BATCH_NO, 
//                        SUM(SOSHPREL$companySuffix.QTYSHPREL) AS QTYSHPREL,
//                        SUM(SOSHPREL$companySuffix.QTYPICK) AS QTYPICK,
//                        SUM(SOSHPREL$companySuffix.QTYPACK) AS QTYPACK,
//                        Sum(SOSHPREL$companySuffix.WEIGHT) AS WEIGHT,
//                        SOSHPRELH$companySuffix.SHPCOMPNAM AS COMPANY
//                        FROM SOSHPREL$companySuffix INNER JOIN SOSHPRELH$companySuffix ON SOSHPREL$companySuffix.ORDNUM = SOSHPRELH$companySuffix.ORDNUM
//                        WHERE SOSHPRELH$companySuffix.SCANID = '$userid'
//                        AND NOT(SOSHPREL$companySuffix.WMSTATUS = 'R' OR SOSHPREL$companySuffix.WMSTATUS = 'I' OR SOSHPREL$companySuffix.WMSTATUS = 'X') 
//                        AND ((SOSHPREL$companySuffix.QTYPICK > SOSHPREL$companySuffix.QTYPACK) Or (SOSHPREL$companySuffix.QTYPICK = 0))
//                        GROUP BY SOSHPREL$companySuffix.SHPRELNO, SOSHPREL$companySuffix.ORDNUM, SOSHPREL$companySuffix.SHPRELDATE, SOSHPREL$companySuffix.BATCH_NO, SOSHPRELH$companySuffix.SHPCOMPNAM";
//        SELECT 2
//        $sqlString = "SELECT DISTINCT "
//                . "SOSHPREL$companySuffix.SHPRELNO, "
//                . "SOSHPREL$companySuffix.ORDNUM, "
//                . "SOSHPREL00.SHPRELDATE, "
//                . "SOSHPREL00.BATCH_NO, "
//                . "SUM(SOSHPREL$companySuffix.QTYSHPREL) AS QTYSHPREL, "
//                . "SUM(SOSHPREL$companySuffix.QTYPICK) AS QTYPICK, "
//                . "SUM(SOSHPREL$companySuffix.QTYPACK) AS QTYPACK, "
//                . "SUM(SOSHPREL$companySuffix.WEIGHT) AS WEIGHT "
//                . "FROM SOSHPREL$companySuffix WHERE "
//                . "NOT(SOSHPREL$companySuffix.WMSTATUS = 'R' OR SOSHPREL$companySuffix.WMSTATUS = 'I' OR SOSHPREL$companySuffix.WMSTATUS = 'X') "
//                . "AND ((SOSHPREL$companySuffix.QTYPICK > SOSHPREL$companySuffix.QTYPACK) Or (SOSHPREL$companySuffix.QTYPICK = 0)) "
//                . "GROUP BY SOSHPREL$companySuffix.SHPRELNO, SOSHPREL$companySuffix.ORDNUM, SOSHPREL$companySuffix.SHPRELDATE, SOSHPREL$companySuffix.BATCH_NO";
//        
//        $sqlString = "SELECT DISTINCT
//                        SOSHPREL$companySuffix.SHPRELNO,
//                        SOSHPREL$companySuffix.ORDNUM,
//                        SUM(SOSHPREL$companySuffix.QTYSHPREL) AS QTYSHPREL,
//                        SUM(SOSHPREL$companySuffix.QTYPICK) AS QTYPICK,
//                        SUM(SOSHPREL$companySuffix.QTYPACK) AS QTYPACK,
//                        SOHEAD$companySuffix.COMPANY
//                        FROM SOSHPREL$companySuffix INNER JOIN SOHEAD$companySuffix ON SOSHPREL$companySuffix.ORDNUM = 
//                        SOHEAD$companySuffix.ORDNUM
//                        WHERE
//                        NOT(SOSHPREL$companySuffix.WMSTATUS = 'R' OR SOSHPREL$companySuffix.WMSTATUS = 'I' OR 
//                        SOSHPREL$companySuffix.WMSTATUS = 'X') AND NOT(SOSHPREL$companySuffix.VOID)
//                        AND ((SOSHPREL$companySuffix.QTYPICK > SOSHPREL$companySuffix.QTYPACK) Or (SOSHPREL$companySuffix.QTYPICK = 0))
//                        GROUP BY SOSHPREL$companySuffix.SHPRELNO, SOSHPREL$companySuffix.ORDNUM, SOHEAD$companySuffix.COMPANY";
        
//                $sqlString = "SELECT DISTINCT
//                        SOSHPREL$companySuffix.SHPRELNO,
//                        SOSHPREL$companySuffix.ORDNUM,
//                        SUM(SOSHPREL$companySuffix.QTYSHPREL) AS QTYSHPREL,
//                        SUM(SOSHPREL$companySuffix.QTYPICK) AS QTYPICK,
//                        SUM(SOSHPREL$companySuffix.QTYPACK) AS QTYPACK
//                        FROM SOSHPREL$companySuffix
//                        WHERE
//                        NOT(SOSHPREL$companySuffix.WMSTATUS = 'R' OR SOSHPREL$companySuffix.WMSTATUS = 'I' OR 
//                        SOSHPREL$companySuffix.WMSTATUS = 'X') AND NOT(SOSHPREL$companySuffix.VOID)
//                        AND ((SOSHPREL$companySuffix.QTYPICK > SOSHPREL$companySuffix.QTYPACK) Or (SOSHPREL$companySuffix.QTYPICK = 0))
//                        GROUP BY SOSHPREL$companySuffix.SHPRELNO, SOSHPREL$companySuffix.ORDNUM";
        
//                        $sqlString = "SELECT DISTINCT
//                        SOSHPREL$companySuffix.SHPRELNO,
//                        SOSHPREL$companySuffix.ORDNUM,
//                        SUM(SOSHPREL$companySuffix.QTYSHPREL) AS QTYSHPREL,
//                        SUM(SOSHPREL$companySuffix.QTYPICK) AS QTYPICK,
//                        SUM(SOSHPREL$companySuffix.QTYPACK) AS QTYPACK
//                        FROM SOSHPREL$companySuffix
//                        WHERE
//                        NOT(SOSHPREL$companySuffix.WMSTATUS = 'R' OR SOSHPREL$companySuffix.WMSTATUS = 'I' OR 
//                        SOSHPREL$companySuffix.WMSTATUS = 'X') AND NOT(SOSHPREL$companySuffix.VOID)
//                        AND ((SOSHPREL$companySuffix.QTYPICK > SOSHPREL$companySuffix.QTYPACK) Or (SOSHPREL$companySuffix.QTYPICK = 0))
//                        GROUP BY SOSHPREL$companySuffix.SHPRELNO, SOSHPREL$companySuffix.ORDNUM";
                        
//                        $sqlString = "SELECT DISTINCT
//                        SOSHPREL$companySuffix.SHPRELNO,
//                        SOSHPREL$companySuffix.ORDNUM,
//                        SOHEAD$companySuffix.COMPANY
//                        FROM SOSHPREL$companySuffix INNER JOIN SOHEAD$companySuffix ON SOSHPREL$companySuffix.ORDNUM = 
//                        SOHEAD$companySuffix.ORDNUM
//                        WHERE
//                        NOT(SOSHPREL$companySuffix.WMSTATUS = 'R' OR SOSHPREL$companySuffix.WMSTATUS = 'I' OR 
//                        SOSHPREL$companySuffix.WMSTATUS = 'X') AND NOT(SOSHPREL$companySuffix.VOID)
//                        AND ((SOSHPREL$companySuffix.QTYPICK > SOSHPREL$companySuffix.QTYPACK) Or (SOSHPREL$companySuffix.QTYPICK = 0))";
//        
//        $sqlString = "SELECT DISTINCT
//                        SOSHPREL$companySuffix.SHPRELNO,
//                        SOSHPREL$companySuffix.ORDNUM,
//                        '' as COMPANY
//                      FROM SOSHPREL$companySuffix 
//                      WHERE
//                        NOT(SOSHPREL$companySuffix.WMSTATUS = 'R' OR SOSHPREL$companySuffix.WMSTATUS = 'I' OR 
//                        SOSHPREL$companySuffix.WMSTATUS = 'X') AND NOT(SOSHPREL$companySuffix.VOID)
//                        AND ((SOSHPREL$companySuffix.QTYPICK > SOSHPREL$companySuffix.QTYPACK) Or (SOSHPREL$companySuffix.QTYPICK = 0))";
//                        
//        error_log($sqlString);
//        $query = $this->DatUnitOfWork->DBDriver->GetQuery();
//        $queryResult = $query->Execute($sqlString);    
//        $itemsCount = count($queryResult);
//        return new BootstrapPager($this->DatUnitOfWork->DBDriver, $sqlString, $itemsPerpage, $middleRange, $showPagerControlsIfMoreThan, $itemsCount); 
//        return new BootstrapPager($this->DatUnitOfWork->DBDriver, $sqlString, $itemsPerpage, $middleRange, $showPagerControlsIfMoreThan); 
//    }
    
}