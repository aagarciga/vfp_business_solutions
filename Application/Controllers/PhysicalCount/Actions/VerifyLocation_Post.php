<?php
/**
 * Project:  VFP Business Series
 * Copyright: 2014. VFP Business Solutions, LLC
 */

namespace Dandelion\MVC\Application\Controllers\PhysicalCount\Actions;

use Dandelion\MVC\Core\Action;

/**
 * Ajax Location Verification
 * @name Index
 */
class VerifyLocation_Post extends Action {

    /**
     * Ajax Location Verification
     */
    public function Execute() {
        $locno = filter_input(INPUT_POST, 'locno');       
        $queryResult = null;
        $result = 'false';
        if($locno != ''){
            $queryResult = $this->controller->DatUnitOfWork->ICLOCRepository->Get("WHERE lower(LOCNO) = '$locno'");
            if(count($queryResult)){
                $result = 'true';
            }
        }
               
        return $result;   
    }

}

?>
