<?php

/**
 * Project:  VFP Business Series
 * Copyright: 2014. VFP Business Solutions, LLC
 */

namespace Dandelion\MVC\Application\Controllers\ItemLookup\Actions;

use Dandelion\MVC\Core\Action;

/**
 * Ajax Item Existence Verification
 * @name VerifyItem_Post
 */
class UpdateItemBinLocation_Post extends Action {

    /**
     * Ajax Item Existence Verification
     */
    public function Execute() {
        $barcode = filter_input(INPUT_POST, 'barcode');
        $location = filter_input(INPUT_POST, 'location');
        $result = array();
        $result['success'] = 'false';
        $queryResult = $this->controller->DatUnitOfWork->ICPARMRepository->UpdateBinLocation($barcode, $location);
        if ($queryResult) {
            $result['success'] = 'true';
        }
        return json_encode($result);
    }

}
