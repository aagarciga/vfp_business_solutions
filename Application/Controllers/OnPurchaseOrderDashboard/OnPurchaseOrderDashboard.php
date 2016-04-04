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
 * Created by: Victor
 * Class OnPurchaseOrderDashboard
 * @package Dandelion\MVC\Application\Controllers
 */
class OnPurchaseOrderDashboard extends DatActionsController
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
    public function GetPager($predicate, $itemsPerpage = 50, $middleRange = 5,
                             $showPagerControlsIfMoreThan = 10, $orderby = "pono", $order = "ASC")
    {
        if ($predicate !== "")
        {
            $predicate = "WHERE $predicate ";
        }

        $companysuffix = $this->DatUnitOfWork->CompanySuffix;
        $poitemTable = "POITOP$companysuffix";
        $fields = 'pono, vendno, podate, qtyord, qtyrec, qtyleft, shipped, potype ';

        $sqlString = "SELECT "
            .$fields
            ."FROM $poitemTable "
            ."$predicate GROUP BY $fields"
            ."ORDER BY $orderby $order";

        return new BootstrapPager($this->DatUnitOfWork->DBDriver, $sqlString, $itemsPerpage, $middleRange, $showPagerControlsIfMoreThan);
    }

    public function GetOnOrderPredicate($itemno, $itemwhs)
    {
        $key = $itemno.$itemwhs;
        return "((ABS(qtyord) - ABS(qtyrec)) > 0 AND not ordcomp) AND CONCAT(TRIM(itemno), TRIM(itmwhs)) = '$key'";
    }
}