<?php

/**
 * Project:  VFP Business Series
 * Copyright: 2014. VFP Business Solutions, LLC
 */

namespace Dandelion\MVC\Application\Controllers\BinToBin\Actions;

use Dandelion\MVC\Core\Action;

/**
 * Ajax Get Actives Locations from ICLOC
 * @name GetLocationsByBarcode_Post
 */
class GetActivesLocations_Post extends Action {

    /**
     * Ajax Get Actives Locations from ICLOC
     */
    public function Execute() {
        $result = array();
        
        $queryResult = $this->controller->DatUnitOfWork->ICLOCRepository->GetActives();
        foreach ($queryResult as $row) {
            $current = array();
            $current['locno'] = $row->getLocno();
            $result[] = $current;
        }
        return json_encode($result);
    }

}