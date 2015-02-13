<?php

/**
 * Project:  VFP Business Series
 * Copyright: 2014. VFP Business Solutions, LLC
 */

namespace Dandelion\MVC\Application\Controllers\Dashboard\Actions;

use Dandelion\MVC\Core\Action;

/**
 * Ajax Job Status Items
 * @name GetSavedFilter_Post
 */
class GetSavedFilter_Post extends Action {

    /**
     * Returns Job Status Items
     * @return JSON
     */
    public function Execute() {
                
        $result = array();    
        
        $filterid = filter_input(INPUT_POST, 'filterid');
        $savedFilter = $this->controller->VfpDataUnitOfWork->SysexportRepository->GetByFilterid($filterid);
        
        $success = $savedFilter !== "";
        $result['status'] = $success ? 'success' : 'failure';
        $result['exportid'] = trim($savedFilter->getExportid()); // Filter Name
        $result['descrip'] = trim($savedFilter->getDescrip()); // Legacy
        $result['expfields'] = $savedFilter->getExpfields() ; // HTML Filter fields
        $result['expfrom'] = trim($savedFilter->getExpfrom()); // Legacy
        $result['expfilter'] = trim($savedFilter->getExpfilter()); // Filter String
        $result['explink'] = trim($savedFilter->getExplink()); //Legacy
        $result['exporderby'] = trim($savedFilter->getExporderby()); // Legacy
        $result['fuserid'] = trim($savedFilter->getFuserid()); // User ID
        $result['filterid'] = trim($savedFilter->getFilterid()); // Filter ID (Curly GUID) 38 char lenght

        return json_encode($result);
    }
}