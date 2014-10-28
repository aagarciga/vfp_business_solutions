<?php

/**
 * Project:  VFP Business Series
 * Copyright: 2014. VFP Business Solutions, LLC
 */

namespace Dandelion\MVC\Application\Controllers\Dashboard\Actions;

use Dandelion\MVC\Core\Action;

/**
 * Ajax Get Material Status Items
 * @name UpdateSOHEADMaterialStatus_Post
 */
class UpdateSOHEADMaterialStatus_Post extends Action {

    /**
     * Returns Material Status Items
     * @return JSON
     */
    public function Execute() {
                
        $ordnum = filter_input(INPUT_POST, 'ordnum');
        $mtrlstatus = filter_input(INPUT_POST, 'mtrlstatus');
                
        $result = array();
        $success = $this->controller->DatUnitOfWork->SOHEADRepository->UpdateMaterialStatus($ordnum, $mtrlstatus);
        if ($success) {
            $result = 'success';
        }
        
        return json_encode($result);
    }
}