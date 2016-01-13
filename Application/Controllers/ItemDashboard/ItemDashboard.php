<?php
/**
 * Created by PhpStorm.
 * User: Victor
 * Date: 12/01/2016
 * Time: 14:26
 * Project:  VFP Business Series
 * Copyright: 2014. VFP Business Solutions, LLC
 */

namespace Dandelion\MVC\Application\Controllers;

use Dandelion\MVC\Application\Controllers\DatActionsController;
use Dandelion\Diana\BootstrapPager;
use Dandelion\MVC\Core\Request;


class ItemDashboard extends DatActionsController
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
                             $showPagerControlsIfMoreThan = 10, $orderby = "itemno", $order = "ASC")
    {
        $companysuffix = $this->DatUnitOfWork->CompanySuffix;
        $sqlString = "SELECT "
            .'ordnum, '
            .'ponum, '
            .'custno, '
            .'podate, '
            .'qtyord, '
            .'qtyshp, '
            .'bckord, '
            .'qtyshp0, '
            .'qtyshprel, '
            .'shipdate '
            ."FROM SOITEM$companysuffix";

        return new BootstrapPager($this->DatUnitOfWork->DBDriver, $sqlString);
    }
}