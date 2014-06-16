<?php
/**
 * Project:  VFP Business Series
 * Copyright: 2014. VFP Business Solutions, LLC
 */

namespace Dandelion\MVC\Application\Controllers\PhysicalCount\Actions;

use Dandelion\MVC\Core\Action;

require_once MVC_DIR_CORE . DIRECTORY_SEPARATOR . 'Action.php';

/**
 * Ajax Location Verification
 * @name Index
 */
class VerifyLocation_Post extends Action {

    /**
     * Ajax Location Verification
     */
    public function Execute() {
        $locno = strtolower($_POST['locno']);        
        $queryResult = null;
        $result = 'false';
        if($locno != ''){
            $queryResult = $this->controller->Dat00UnitOfWork->ICLOC00Repository->Get("WHERE lower(LOCNO) = '$locno'");
            if(count($queryResult)){
                $result = 'true';
            }
        }
               
        return $result;   
    }

}

?>
