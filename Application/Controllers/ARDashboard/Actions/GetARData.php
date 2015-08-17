<?php
/**
 * Project:  VFP Business Series
 * Copyright: 2014. VFP Business Solutions, LLC
 */

namespace Dandelion\MVC\Application\Controllers\ARDashboard\Actions;

use Dandelion\MVC\Core\Action;

/**
 * VFP Business Series Financial Dashboard Controller GetFinancialData Action
 * @name Index
 */
class GetARData extends Action {

    /**
     * GetARData Ajax Action.
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

            $queryResult = $this->controller->DatUnitOfWork->AROPENRepository->GetCustnoCompanyPair();

            foreach ($queryResult as $row) {
                $currentCustno = trim($row->CUSTNO);
                $currentCompany = trim($row->COMPANY);
                $queryResultData = $this->controller->DatUnitOfWork->AROPENRepository->GetCustnoData($currentCustno);
                foreach ($queryResultData as $data){
                    $days = intval($data->DAYS, 10);
                    $value = floatval($data->OPENBAL);

                    // Current
                    if ($days < 11){
                        $result['data']['current'] += $value;
                    } elseif ($days < 31){
                        $result['data']['11-30'] += $value;
                    } elseif ($days < 46){
                        $result['data']['31-45'] += $value;
                    } elseif ($days < 61) {
                        $result['data']['46-60'] += $value;
                    } elseif ($days < 91) {
                        $result['data']['61-90'] += $value;
                    } else{
                        $result['data']['>91'] += $value;
                    }
                }
            }
            $result['success'] = true;
        }
        error_log(print_r($result, true));
        return json_encode($result);
    }

//    private function addNet($result){
//        foreach($result[0] as $data => $value){
//            if ($data !== 'net') {
//                $result[0]['net'] += $value;
//            }
//        }
//        return $result;
//    }
//
//    private function getAR(){
//        $result = $this->controller->DatUnitOfWork->AROPENRepository->GetAccountReceivableValue();
//        return floatval($result->VALUE);
//    }
//
//    private function getAP(){
//        $result = $this->controller->DatUnitOfWork->APOPENRepository->GetAccountPayableValue();
//        return -1 * (floatval($result->VALUE));
//    }
//
//    Private function getCash(){
//        $today = getdate();
//
//        // period equals to current month
//        $currentPeriod = $today['mon'];
//        $currentYear = $today['year'];
//
//        $year = $this->controller->DatUnitOfWork->SYCOMPRepository->GetYearOfFirst();
//        $result = $this->controller->DatUnitOfWork->GLHSTRepository->GetCashValueWhere($year, $currentYear, $currentPeriod);
//        return floatval($result->VALUE);
//    }
//
//    private function getInventory(){
//        $result = $this->controller->DatUnitOfWork->ICPARMRepository->GetInventoryValue();
//        return round(floatval($result->VALUE), 2);
//    }
//
//    private function getWIP(){
//        $result = $this->controller->DatUnitOfWork->SOITEMRepository->GetWIPValue();
//        return round(floatval($result->VALUE), 2);
//    }

}

?>
