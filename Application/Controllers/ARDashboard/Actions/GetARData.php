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
class GetARData extends Action
{

    /**
     * GetARData Ajax Action.
     */
    public function Execute()
    {

        $result = array('success' => false,
            'data' => array()
        );

        $this->UserName = (!isset($_SESSION['username'])) ? 'Anonimous' : $_SESSION['username'];
//        $this->FullFeatures = (!isset($_SESSION['fullFeatures']))? false : $_SESSION['fullFeatures'];
        if ($this->UserName !== 'Anonimous') {

            $queryResult = $this->controller->DatUnitOfWork->AROPENRepository->GetCustnoCompanyPair();

            foreach ($queryResult as $row) {
                $currentCustno = trim($row->CUSTNO);
                $currentCompany = trim($row->COMPANY);

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

                $queryResultData = $this->controller->DatUnitOfWork->AROPENRepository->GetCustnoData($currentCustno);
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

                    $currentData['balance'] = $this->calculateBalance($currentData);
                }
                $result['data'] [] = $currentData;
            }
            $result['success'] = true;
        }
//        error_log(print_r($result, true));
        return json_encode($result);
    }

    private function calculateBalance($data)
    {
        return $data['current'] + $data['11-30'] + $data['31-45'] + $data['46-60'] + $data['61-90'] + $data['>91'];
    }

}

?>
