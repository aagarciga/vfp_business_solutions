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
class SalesOrder extends DatActionsController {
    
    public function GetSalesOrderItemsPager($userid, $ordnum , $itemsPerpage = 5, $middleRange = 5, $showPagerControlsIfMoreThan = 10, $orderby = "ordnum", $order = "ASC" ){
        $orderby = $this->prepareOrderByField($orderby);
        $companySuffix = $this->DatUnitOfWork->CompanySuffix;
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
        return new BootstrapPager($this->DatUnitOfWork->DBDriver, $sqlString, $itemsPerpage, $middleRange, $showPagerControlsIfMoreThan);
    }
    
    private function prepareOrderByField($orderByFiled){
        $result = $orderByFiled;
        if ($orderByFiled === "QTYORD" || $orderByFiled === "QTYSHP"){ // For Numeric columns
            $result = $this->DatUnitOfWork->DBDriver->Convert2Integer($orderByFiled);
        }
        return $result;
    }
        
}