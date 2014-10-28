<?php

/**
 * Project:  VFP Business Series
 * Copyright: 2014. VFP Business Solutions, LLC
 */

namespace Dandelion\MVC\Application\Controllers\Dashboard\Actions;

use Dandelion\MVC\Core\Action;

/**
 * Ajax Barcode verification
 * @name ShipmentUpdate_Post
 */
class GetMaterialStatusItems_Post extends Action {

    /**
     * Returns Material Status Items
     * @return JSON
     */
    public function Execute() {
                
        $result = array();
        $materialStatusCollection = $this->controller->DatUnitOfWork->SOEDISTATUSRepository->GetMaterialStatus();

        foreach ($materialStatusCollection as $row){
            $current = array();
            $current['edistatid'] = trim($row->getEdistatid());
            $current['descrip'] = trim($row->getDescrip());
            $result[] = $current;
        }
        return json_encode($result);
    }
}