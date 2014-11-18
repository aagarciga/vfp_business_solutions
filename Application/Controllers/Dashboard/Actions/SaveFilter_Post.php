<?php

/**
 * Project:  VFP Business Series
 * Copyright: 2014. VFP Business Solutions, LLC
 */

namespace Dandelion\MVC\Application\Controllers\Dashboard\Actions;

use Dandelion\MVC\Core\Action;
use Dandelion\MVC\Application\Models\Entities\SYSEXPORT;
use Dandelion\GUIDGenerator;

/**
 * Ajax Get Material Status Items
 * @name UpdateSOHEADMaterialStatus_Post
 */
class SaveFilter_Post extends Action {

    /**
     * Returns Material Status Items
     * @return JSON
     */
    public function Execute() {
                
        $filterName = filter_input(INPUT_POST, 'filterName');
        $filterString = filter_input(INPUT_POST, 'filterString');
        $filterHtml = filter_input(INPUT_POST, 'filterHtml');
        $this->UserName = (!isset($_SESSION['username']))? 'Anonimous' : $_SESSION['username'];
        
        if ($filterName === "" && $filterString === "" && $filterHtml === "") {
            return json_encode('failure');
        }
        
        $entity = new SYSEXPORT(GUIDGenerator::getGUID(), $filterName, $filterHtml, "", $filterString, "", "", $this->UserName);        
        $success = $this->controller->VfpDataUnitOfWork->SysexportRepository->Add($entity);        
        $result = $success ? 'success' : 'failure';
        
        return json_encode($result);
    }
}