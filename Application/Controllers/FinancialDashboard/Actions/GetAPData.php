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
class GetAPData extends Action {

    /**
     * GetAPData Ajax Action.
     */
    public function Execute() {

        $result = array('success' => false,
            'data' =>
                array(
                    'current' => 0,
                    '11-30' => 0,
                    '31-45' => 0,
                    '46-60' => 0,
                    '61-90' => 0,
                    '>91' => 0,
                ));

        $this->UserName = (!isset($_SESSION['username']))? 'Anonimous' : $_SESSION['username'];
//        $this->FullFeatures = (!isset($_SESSION['fullFeatures']))? false : $_SESSION['fullFeatures'];
        if($this->UserName !== 'Anonimous'){

            $queryResult = $this->controller->DatUnitOfWork->APOPENRepository->GetAllCustno();
            $previousVendno = "";
            foreach ($queryResult as $row) {
                $currentVendno = trim($row->VENDNO);
//                Alex: Old code backup below
//                $currentCompany = trim($row->COMPANY);
//                ALex: I think company is not necessary in here...
//                $currentCompany = $this->DatUnitOfWork->ARCUSTRepository->GetCompany($currentCustno);

                /*
                 * Alex: In order to fix issue when to a same custno value correspond diferent companies.
                 * */
                if ($previousVendno !== $currentVendno){

                    $queryResultData = $this->controller->DatUnitOfWork->APOPENRepository->GetVendnoData($currentVendno);
                    foreach ($queryResultData as $data) {
                        $days = intval($data->DAYS, 10);
                        $value = floatval($data->BALANCE);

                        // Current
                        if ($days < 11) {
                            $result['data']['current'] += $value;
                        } elseif ($days < 31) {
                            $result['data']['11-30'] += $value;
                        } elseif ($days < 46) {
                            $result['data']['31-45'] += $value;
                        } elseif ($days < 61) {
                            $result['data']['46-60'] += $value;
                        } elseif ($days < 91) {
                            $result['data']['61-90'] += $value;
                        } else {
                            $result['data']['>91'] += $value;
                        }
                    }
                }
                $previousVendno = $currentVendno;
            }
            $result['success'] = true;
        }

        $result['chartData'] = $this->makeChartData($result['data']);
        return json_encode($result);
    }

    private function makeChartData($data){
        $result = array();
        foreach ($data as $interval => $value){
            $chartData = array(
                'interval'=> $interval,
                'value' => $value
            );

            $result []= $chartData;
        }
        return $result;
    }

}

?>
