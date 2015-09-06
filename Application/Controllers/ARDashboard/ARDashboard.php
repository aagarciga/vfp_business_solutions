<?php
/**
 * Project:  VFP Business Series
 * Copyright: 2014. VFP Business Solutions, LLC
 */

namespace Dandelion\MVC\Application\Controllers;

use Dandelion\MVC\Application\Controllers\DatActionsController;
use Dandelion\Diana\BootstrapPager;

/**
 * VFP Business Series Financial Account Receivable Dashboard Controller
 * @name ARDashboard
 */
class ARDashboard extends DatActionsController
{

    public function GetPager($predicate, $itemsPerpage = 50, $middleRange = 5, $showPagerControlsIfMoreThan = 10, $orderby = "CUSTNO", $order = "ASC")
    {
        if ($predicate !== "") {
            $predicate = " WHERE " . $predicate;
        }

        $tableName = 'AROPEN' . $this->DatUnitOfWork->CompanySuffix;
        $sqlString = "SELECT CUSTNO FROM $tableName $predicate";
        $sqlString .= ' GROUP BY CUSTNO';
        $sqlString .= " ORDER BY $orderby $order";

        $query = $this->DatUnitOfWork->DBDriver->GetQuery();
        $queryResult = $query->Execute($sqlString);
        $itemsCount = count($queryResult);

        return new BootstrapPager($this->DatUnitOfWork->DBDriver, $sqlString, $itemsPerpage, $middleRange, $showPagerControlsIfMoreThan, $itemsCount);
    }

    public function calculate($queryResult)
    {
        $result = array();
        $previousCustno = "";
        foreach ($queryResult as $row) {
            $currentCustno = trim($row->CUSTNO);
            $currentCompany = "";

            /*
             * Alex: In order to fix issue when to a same custno value correspond different companies.
             * This do not fix the issue, only put away the errors with different companies for a same custno, and not show its.
             * */
            if ($previousCustno !== $currentCustno) {

                $currentData = array(
                    'custno' => $currentCustno,
                    'company' => $currentCompany,
                    'current' => 0,
                    '11-30' => 0,
                    '31-45' => 0,
                    '46-60' => 0,
                    '61-90' => 0,
                    '>91' => 0,
                    'balance' => 0
                );

                $queryResultData = $this->DatUnitOfWork->AROPENRepository->GetCustnoData($currentCustno);
                foreach ($queryResultData as $data) {
                    $days = intval($data->DAYS, 10);
                    $value = floatval($data->OPENBAL);

                    // Current
                    if ($days < 11) {
                        $currentData['current'] += $value;
                    } elseif ($days < 31) {
                        $currentData['11-30'] += $value;
                    } elseif ($days < 46) {
                        $currentData['31-45'] += $value;
                    } elseif ($days < 61) {
                        $currentData['46-60'] += $value;
                    } elseif ($days < 91) {
                        $currentData['61-90'] += $value;
                    } else {
                        $currentData['>91'] += $value;
                    }

                    if($currentCompany === ""){
                        $currentCompany = trim($data->COMPANY);
                    }
                    $currentData['company'] = $currentCompany;

                    $currentData['balance'] = $this->calculateBalance($currentData);

                }

                $result [] = $currentData;
            }
            $previousCustno = $currentCustno;
        }
        return $result;
    }

    private function calculateBalance($data)
    {
        return $data['current'] + $data['11-30'] + $data['31-45'] + $data['46-60'] + $data['61-90'] + $data['>91'];
    }
}