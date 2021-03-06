<?php

/**
 * Project:  VFP Business Series
 * Copyright: 2014. VFP Business Solutions, LLC
 */

namespace Dandelion\MVC\Application\Controllers\Dashboard\Actions;

use Dandelion\MVC\Core\Action;

/**
 * Load and populate the DynamicFilter instance with a saved filter
 * @name GetSavedFilter_Post
 */
class GetSavedFilter_Post extends Action {

    /**
     * Returns saved filter JSON data
     * @return JSON
     */
    public function Execute() {
                
        $result = array();    
        
        $filterid = $this->Request->hasProperty('filterid') ? $this->Request->filterid : '';
        $savedFilter = $this->controller->VfpDataUnitOfWork->SysexportRepository->GetByFilterid($filterid);

        $success = $savedFilter !== "";
        $result['success'] = $success ? true : false ;
        if ($success) {
            $result['exportid'] = trim($savedFilter->getExportid()); // Filter Name
            $result['descrip'] = trim($savedFilter->getDescrip()); // Legacy
            $result['expfields'] = $savedFilter->getExpfields() ; // HTML Filter fields
            $result['expfrom'] = trim($savedFilter->getExpfrom()); // Legacy
            $result['expfilter'] = trim($savedFilter->getExpfilter()); // Filter String
            $result['explink'] = trim($savedFilter->getExplink()); //Legacy
            $result['exporderby'] = trim($savedFilter->getExporderby()); // Legacy
            $result['fuserid'] = trim($savedFilter->getFuserid()); // User ID
            $result['filterid'] = trim($savedFilter->getFilterid()); // Filter ID (Curly GUID) 38 char lenght
        }

        return json_encode($result);
    }
}