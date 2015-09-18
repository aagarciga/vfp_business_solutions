<?php
/**
 * Project:  VFP Business Series
 * Copyright: 2014. VFP Business Solutions, LLC
 */

namespace Dandelion\MVC\Application\Controllers\ARDashboard\Actions;

use Dandelion\MVC\Core\Action;
use Dandelion\Diana\BootstrapPager;

/**
 * VFP Business Series Account Receivable Dashboard Controller Action
 * @name GetPage_Post
 */
class GetCustnoDetailPage_Post extends Action
{

    public function Execute()
    {


        $page = $this->Request->hasProperty('page') ? $this->Request->page : 1;

        $custno = $this->Request->hasProperty('custno') ? $this->Request->custno : "";
        $balance = $this->Request->hasProperty('balance') ? $this->Request->balance : "0";

//        $itemsPerPage = $this->Request->hasProperty('itemsPerPage') ? $this->Request->itemsPerPage : 50;


//        $this->ItemPerPage = $_SESSION['arDashboard_itemperpages'] = $itemsPerPage;

        $result = array();

        if (is_numeric($page)) {
            $this->UserName = (!isset($_SESSION['username']))? 'Anonimous' : $_SESSION['username'];
            $arDashboardItemPerPages = 10;
            $this->ItemPerPage = (!isset($_SESSION['arDashboardItemPerPages']))? $arDashboardItemPerPages : $_SESSION['arDashboardItemPerPages'];

            $this->Pager = $this->GetCustnoDetailPager($custno, $this->UserName, $this->ItemPerPage);

            $pager = $this->Pager->PaginateForAjax($page);
            $currentPagedItems = $pager['currentPagedItems'];
            foreach ($currentPagedItems as $row){

                $current = array();
                $currentOpenBal = trim($row->OPENBAL);
                $current['invno'] = trim($row->INVNO);
                $current['invdate'] = trim($row->INVDATE);
                $current['amtpaid'] = trim($row->AMTPAID);
                $current['datepaid'] = trim($row->DATEPAID);
                $current['refno'] = trim($row->REFNO);
                $current['openbal'] = $currentOpenBal;
                $result[] = $current;

            }
            $pager['currentPagedItems'] = $result;
            $pager['balance'] = $balance;
        }

//        error_log(print_r($pager, true));
        return json_encode($pager);
    }

    public function GetCustnoDetailPager($custno, $username, $itemsPerpage = 50, $middleRange = 5, $showPagerControlsIfMoreThan = 10 ){

        $tableName = 'AROPEN' . $this->controller->DatUnitOfWork->CompanySuffix;
        $sqlString = "SELECT INVNO, INVDATE, AMTPAID, DATEPAID, REFNO, OPENBAL
                      FROM $tableName
                      WHERE CUSTNO = '$custno'";

//        error_log($sqlString);

        $query = $this->controller->DatUnitOfWork->DBDriver->GetQuery();
        $queryResult = $query->Execute($sqlString);
        $itemsCount = count($queryResult);
        return new BootstrapPager($this->controller->DatUnitOfWork->DBDriver, $sqlString, $itemsPerpage, $middleRange, $showPagerControlsIfMoreThan, $itemsCount);
    }

}
