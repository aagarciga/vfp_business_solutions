<?php
/**
 * Project:  VFP Business Series
 * Copyright: 2014. VFP Business Solutions, LLC
 */

namespace Dandelion\MVC\Application\Controllers;

use Dandelion\MVC\Application\Controllers\DatActionsController;
use Dandelion\Diana\BootstrapPager;
use Dandelion\MVC\Core\Request;

/**
 * VFP Business Series Dashboard Controller
 * @name Dashboard
 */
class InventoryDashboard extends DatActionsController
{

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
    public function GetPager($predicate, $itemsPerpage = 50, $middleRange = 5, $showPagerControlsIfMoreThan = 10, $orderby = "itemno", $order = "ASC")
    {
        if ($predicate !== "") {
            $predicate = " WHERE " . $predicate;
        }
//        $orderby = $this->prepareOrderByField($orderby); // Converting String yo Integer for correct representation
        $companySuffix = $this->DatUnitOfWork->CompanySuffix;

//        itemno
//        itmwhs
//        descrip(Description)
//        onhand(On hand)
//        onorder(On PO)         --Debe ir a un Purchase Order Dashboard(este es nuevo de la tabla Pohdop00 )
//        committed(On Sls Order) --Debe cuando click mostrar el sales order dashboard para las ordenes que tengan este item

        $sqlString = "SELECT "
            . "itemno, "
            . "itmwhs, "
            . "descrip, "
            . "onhand, "
            . "onorder, "
            . "committed, "
            . "picture_fi "
            . "FROM ICPARM$companySuffix $predicate ORDER BY $orderby $order";

        //SELECT itemno, itmwhs, descrip, onhand, onorder, committed FROM ICPARM05 GROUP BY itemno, itmwhs, descrip, onhand, onorder, committed ORDER BY itemno asc

        return new BootstrapPager($this->DatUnitOfWork->DBDriver, $sqlString, $itemsPerpage, $middleRange, $showPagerControlsIfMoreThan);
    }

    private function prepareOrderByField($orderByFiled)
    {
        $result = $orderByFiled;
        if ($orderByFiled === "onhand" || $orderByFiled === "onorder" || $orderByFiled === "committed") {
            $result = $this->DatUnitOfWork->DBDriver->Convert2Integer($orderByFiled);
//            $result = $this->DatUnitOfWork->DBDriver->Convert2Integer(number_format(doubleval($orderByFiled), 2, '.', ''));
        }
        return $result;
    }
}