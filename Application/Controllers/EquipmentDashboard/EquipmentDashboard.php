<?php
/**
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

/**
 * Created by: Victor
 * Class EquipmentDashboard
 * @package Dandelion\MVC\Application\Controllers
 */
class EquipmentDashboard extends DatActionsController
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

    protected static function GetFieldsDefinition(){
        return array(
            'ordnum' => TYPE_CHAR,
            'equipid' => TYPE_CHAR,
            'itemno' => TYPE_CHAR,
            'model' => TYPE_CHAR,
            'serialno' => TYPE_CHAR,
            'make' => TYPE_CHAR,
            'installdte' => TYPE_DATE,
            'expdtein' => TYPE_DATE,
            'daterec' => TYPE_DATE,
            'order' => TYPE_CHAR,
            'status' => TYPE_CHAR,
            'toolboxid' => TYPE_CHAR,
            'notes' => TYPE_MEMO,
            'picture_fi' => TYPE_DATE
        );
    }

    public function GetOnOrderPredicate($itemno, $itemwhs)
    {
        $key = $itemno.$itemwhs;
        return "((ABS(qtyord) - ABS(qtyrec)) > 0 AND not ordcomp) AND CONCAT(TRIM(itemno), TRIM(itmwhs)) = '$key'";
    }
}