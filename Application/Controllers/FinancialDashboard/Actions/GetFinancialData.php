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
class GetFinancialData extends Action {

    /**
     * GetFinancialData Ajax Action.
     */
    public function Execute() {

        $result = array('success' => false);
        $this->UserName = (!isset($_SESSION['username']))? 'Anonimous' : $_SESSION['username'];
//        $this->FullFeatures = (!isset($_SESSION['fullFeatures']))? false : $_SESSION['fullFeatures'];
        if($this->UserName !== 'Anonimous'){

            $result = array(
                array(
                    'net' => 0,
                    'ar' => $this->getAR() ,
                    'cash' => $this->getCash(),
                    'inventory' => $this->getInventory(),
                    'wip' => 1000000.00,
                    'ap' => $this->getAP()
                )
            );
            $result = $this->addNet($result);
        }
        return json_encode($result);
    }

    private function addNet($result){
        foreach($result[0] as $data => $value){
            if ($data !== 'net') {
                $result[0]['net'] += $value;
            }
        }
        return $result;
    }

    private function getAR(){
        $result = $this->controller->DatUnitOfWork->AROPENRepository->GetAccountReceivableValue();
        return floatval($result->VALUE);
    }

    private function getAP(){
        $result = $this->controller->DatUnitOfWork->APOPENRepository->GetAccountPayableValue();
        return -1 * (floatval($result->VALUE));
    }

    Private function getCash(){
        $today = getdate();

        // period equals to current month
        $currentPeriod = $today['mon'];
        $currentYear = $today['year'];

        $year = $this->controller->DatUnitOfWork->SYCOMPRepository->GetYearOfFirst();
        $result = $this->controller->DatUnitOfWork->GLHSTRepository->GetCashValueWhere($year, $currentYear, $currentPeriod);
        return floatval($result->VALUE);
    }

    private function getInventory(){
        $result = $this->controller->DatUnitOfWork->ICPARMRepository->GetInventoryValue();
        return round(floatval($result->VALUE), 2);
    }

}

?>
