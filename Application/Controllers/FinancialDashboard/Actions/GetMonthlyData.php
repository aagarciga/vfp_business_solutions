<?php
/**
 * Project:  VFP Business Series
 * Copyright: 2014. VFP Business Solutions, LLC
 */

namespace Dandelion\MVC\Application\Controllers\FinancialDashboard\Actions;

use Dandelion\MVC\Core\Action;

/**
 * VFP Business Series Financial Dashboard Controller GetFinancialData Action
 * @name Index
 */
class GetMonthlyData extends Action
{

    /**
     * GetMonthlyData Ajax Action.
     */
    public function Execute()
    {

        $result = array('success' => false,
            'data' =>
                array(
                    'ap' => array(),
                    'ar' => array()
                ),
            'chartData' => array()
        );

        $this->UserName = (!isset($_SESSION['username'])) ? 'Anonimous' : $_SESSION['username'];
        if ($this->UserName !== 'Anonimous') {

            $result['data']['ar'] = $this->FetchARMonthlyData();
            $result['data']['ap'] = $this->FetchAPMonthlyData();
            $result['chartData'] = $this->MergeMonthlyData($result['data']['ap'], $result['data']['ar']);
            $result['success'] = true;
        }

//        error_log(print_r($result, true));
        return json_encode($result);
    }

    private function FetchARMonthlyData($yearOffset = 1)
    {
        $result = array();
        foreach (range(1, 12) as $month) {
            $current = array();
            $current['month'] = $month;
            $queryResult = $this->controller->DatUnitOfWork->AROPENRepository->GetARByMonth($month, $yearOffset);
            $current['value'] = round(floatval($queryResult->VALUE), 2);
            $result [] = $current;
        }
        return $result;
    }

    private function FetchAPMonthlyData($yearOffset = 1)
    {
        $result = array();
        foreach (range(1, 12) as $month) {
            $current = array();
            $current['month'] = $month;
            $queryResult = $this->controller->DatUnitOfWork->APOPENRepository->GetAPByMonth($month, $yearOffset);
            $current['value'] = round(floatval($queryResult->VALUE), 2);
            $result [] = $current;
        }
        return $result;
    }

    private function MergeMonthlyData($apData, $arData)
    {
        $result = array();
        foreach (range(1, 12) as $month) {
            $current = array();
            $current['month'] = $month;
            $current['ap'] = $apData[$month - 1]['value'];
            $current['ar'] = $arData[$month - 1]['value'];
            $result [] = $current;
        }
        return $result;
    }


}

?>
