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
        $setname = $this->Request->hasProperty('setname') ? $this->Request->setname : "details";
        $result = array();

        if (is_numeric($page)) {
            $this->UserName = (!isset($_SESSION['username']))? 'Anonimous' : $_SESSION['username'];
            $arDashboardItemPerPages = 10;
            $this->ItemPerPage = (!isset($_SESSION['arDashboardItemPerPages']))? $arDashboardItemPerPages : $_SESSION['arDashboardItemPerPages'];

            if ($setname === 'details')
                $this->Pager = $this->GetCustnoDetailPager($custno, $this->UserName, $this->ItemPerPage);
            if ($setname === 'setCurrent')
                $this->Pager = $this->GetCurrentSetPager($custno, $this->UserName, $this->ItemPerPage);
            if ($setname === 'set11_30')
                $this->Pager = $this->Get11_30SetPager($custno, $this->UserName, $this->ItemPerPage);
            if ($setname === 'set31_45')
                $this->Pager = $this->Get31_45SetPager($custno, $this->UserName, $this->ItemPerPage);
            if ($setname === 'set45_60')
                $this->Pager = $this->Get45_60SetPager($custno, $this->UserName, $this->ItemPerPage);
            if ($setname === 'set61_90')
                $this->Pager = $this->Get61_90SetPager($custno, $this->UserName, $this->ItemPerPage);
            if ($setname === 'setGreatherThan90')
                $this->Pager = $this->GetGreatherThan90SetPager($custno, $this->UserName, $this->ItemPerPage);


            $pager = $this->Pager->PaginateForAjax($page);
            $currentPagedItems = $pager['currentPagedItems'];
            $portion = 0.00;

            $pager['balance'] = $balance;
            $pager['custno'] = $custno;
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
                $portion += $currentOpenBal;
            }
            $pager['balancePortion'] = $portion;
            $pager['currentPagedItems'] = $result;

            if ($setname === 'setCurrent')
                $pager['setname'] = "Current";
            if ($setname === 'set11_30')
                $pager['setname'] = "11-30";
            if ($setname === 'set31_45')
                $pager['setname'] = "31-45";
            if ($setname === 'set45_60')
                $pager['setname'] = "45-60";
            if ($setname === 'set61_90')
                $pager['setname'] = "61-90";
            if ($setname === 'setGreatherThan90')
                $pager['setname'] = ">90";

        }

        return json_encode($pager);
    }

    public function GetCustnoDetailPager($custno, $username, $itemsPerpage = 50, $middleRange = 5, $showPagerControlsIfMoreThan = 10 ){

        $tableName = 'AROPEN' . $this->controller->DatUnitOfWork->CompanySuffix;
        $sqlString = "SELECT INVNO, INVDATE, AMTPAID, DATEPAID, REFNO, OPENBAL
                      FROM $tableName
                      WHERE CUSTNO = '$custno' AND OPENBAL <> 0";

        $query = $this->controller->DatUnitOfWork->DBDriver->GetQuery();
        $queryResult = $query->Execute($sqlString);
        $itemsCount = count($queryResult);
        return new BootstrapPager($this->controller->DatUnitOfWork->DBDriver, $sqlString, $itemsPerpage, $middleRange, $showPagerControlsIfMoreThan, $itemsCount);
    }

    public function GetCurrentSetPager($custno, $username, $itemsPerpage = 50, $middleRange = 5, $showPagerControlsIfMoreThan = 10 ){

        $tableName = 'AROPEN' . $this->controller->DatUnitOfWork->CompanySuffix;
        $lowerCustno = strtolower($custno);
        $sqlString = "SELECT INVNO, INVDATE, AMTPAID, DATEPAID, REFNO, OPENBAL";
        $sqlString .= " FROM $tableName";
        $sqlString .= " WHERE LOWER(CUSTNO) = '$lowerCustno'";
        $sqlString .= " AND (CURDATE() - INVDATE) < 11 AND OPENBAL <> 0";

        $query = $this->controller->DatUnitOfWork->DBDriver->GetQuery();
        $queryResult = $query->Execute($sqlString);
        $itemsCount = count($queryResult);
        return new BootstrapPager($this->controller->DatUnitOfWork->DBDriver, $sqlString, $itemsPerpage, $middleRange, $showPagerControlsIfMoreThan, $itemsCount);
    }

    public function Get11_30SetPager($custno, $username, $itemsPerpage = 50, $middleRange = 5, $showPagerControlsIfMoreThan = 10 ){

        $tableName = 'AROPEN' . $this->controller->DatUnitOfWork->CompanySuffix;
        $lowerCustno = strtolower($custno);
        $sqlString = "SELECT INVNO, INVDATE, AMTPAID, DATEPAID, REFNO, OPENBAL";
        $sqlString .= " FROM $tableName";
        $sqlString .= " WHERE LOWER(CUSTNO) = '$lowerCustno'";
        $sqlString .= " AND (CURDATE() - INVDATE) >= 11 AND (CURDATE() - INVDATE) < 31 AND OPENBAL <> 0";

        $query = $this->controller->DatUnitOfWork->DBDriver->GetQuery();
        $queryResult = $query->Execute($sqlString);
        $itemsCount = count($queryResult);
        return new BootstrapPager($this->controller->DatUnitOfWork->DBDriver, $sqlString, $itemsPerpage, $middleRange, $showPagerControlsIfMoreThan, $itemsCount);
    }

    public function Get31_45SetPager($custno, $username, $itemsPerpage = 50, $middleRange = 5, $showPagerControlsIfMoreThan = 10 ){

        $tableName = 'AROPEN' . $this->controller->DatUnitOfWork->CompanySuffix;
        $lowerCustno = strtolower($custno);
        $sqlString = "SELECT INVNO, INVDATE, AMTPAID, DATEPAID, REFNO, OPENBAL";
        $sqlString .= " FROM $tableName";
        $sqlString .= " WHERE LOWER(CUSTNO) = '$lowerCustno'";
        $sqlString .= " AND (CURDATE() - INVDATE) >= 31 AND (CURDATE() - INVDATE) < 45 AND OPENBAL <> 0";

        $query = $this->controller->DatUnitOfWork->DBDriver->GetQuery();
        $queryResult = $query->Execute($sqlString);
        $itemsCount = count($queryResult);
        return new BootstrapPager($this->controller->DatUnitOfWork->DBDriver, $sqlString, $itemsPerpage, $middleRange, $showPagerControlsIfMoreThan, $itemsCount);
    }

    public function Get45_60SetPager($custno, $username, $itemsPerpage = 50, $middleRange = 5, $showPagerControlsIfMoreThan = 10 ){

        $tableName = 'AROPEN' . $this->controller->DatUnitOfWork->CompanySuffix;
        $lowerCustno = strtolower($custno);
        $sqlString = "SELECT INVNO, INVDATE, AMTPAID, DATEPAID, REFNO, OPENBAL";
        $sqlString .= " FROM $tableName";
        $sqlString .= " WHERE LOWER(CUSTNO) = '$lowerCustno'";
        $sqlString .= " AND (CURDATE() - INVDATE) >= 46 AND (CURDATE() - INVDATE) < 60 AND OPENBAL <> 0";

        $query = $this->controller->DatUnitOfWork->DBDriver->GetQuery();
        $queryResult = $query->Execute($sqlString);
        $itemsCount = count($queryResult);
        return new BootstrapPager($this->controller->DatUnitOfWork->DBDriver, $sqlString, $itemsPerpage, $middleRange, $showPagerControlsIfMoreThan, $itemsCount);
    }

    public function Get61_90SetPager($custno, $username, $itemsPerpage = 50, $middleRange = 5, $showPagerControlsIfMoreThan = 10 ){

        $tableName = 'AROPEN' . $this->controller->DatUnitOfWork->CompanySuffix;
        $lowerCustno = strtolower($custno);
        $sqlString = "SELECT INVNO, INVDATE, AMTPAID, DATEPAID, REFNO, OPENBAL";
        $sqlString .= " FROM $tableName";
        $sqlString .= " WHERE LOWER(CUSTNO) = '$lowerCustno'";
        $sqlString .= " AND (CURDATE() - INVDATE) >= 61 AND (CURDATE() - INVDATE) < 90 AND OPENBAL <> 0";

        $query = $this->controller->DatUnitOfWork->DBDriver->GetQuery();
        $queryResult = $query->Execute($sqlString);
        $itemsCount = count($queryResult);
        return new BootstrapPager($this->controller->DatUnitOfWork->DBDriver, $sqlString, $itemsPerpage, $middleRange, $showPagerControlsIfMoreThan, $itemsCount);
    }

    public function GetGreatherThan90SetPager($custno, $username, $itemsPerpage = 50, $middleRange = 5, $showPagerControlsIfMoreThan = 10 ){

        $tableName = 'AROPEN' . $this->controller->DatUnitOfWork->CompanySuffix;
        $lowerCustno = strtolower($custno);
        $sqlString = "SELECT INVNO, INVDATE, AMTPAID, DATEPAID, REFNO, OPENBAL";
        $sqlString .= " FROM $tableName";
        $sqlString .= " WHERE LOWER(CUSTNO) = '$lowerCustno'";
        $sqlString .= " AND (CURDATE() - INVDATE) >= 91 AND OPENBAL <> 0";

        $query = $this->controller->DatUnitOfWork->DBDriver->GetQuery();
        $queryResult = $query->Execute($sqlString);
        $itemsCount = count($queryResult);
        return new BootstrapPager($this->controller->DatUnitOfWork->DBDriver, $sqlString, $itemsPerpage, $middleRange, $showPagerControlsIfMoreThan, $itemsCount);
    }


}
