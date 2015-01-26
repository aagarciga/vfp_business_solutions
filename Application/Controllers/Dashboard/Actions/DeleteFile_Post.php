<?php

/**
 * Project:  VFP Business Series
 * Copyright: 2014. VFP Business Solutions, LLC
 */

namespace Dandelion\MVC\Application\Controllers\Dashboard\Actions;

use Dandelion\MVC\Core\Action;

/**
 * Ajax Upload File Action
 * @name ShipmentUpdate_Post
 */
class DeleteFile_Post extends Action {

    /**
     * Ajax Delete File Action
     * @return JSON
     */
    public function Execute() {
        error_log($this->Request->hasProperty('postSalesOrder'));
        error_log($this->Request->hasProperty('postFilePath'));
        error_log($this->Request->hasProperty('postFileName'));
        
        $salesorder = $this->Request->hasProperty('postSalesOrder');
        $selectedDir = $this->Request->hasProperty('postFilePath');
        $fileName = $this->Request->hasProperty('postFileName');
        
        $currentProjectDir = MVC_DIR_ROOT . 
                    DIRECTORY_SEPARATOR . "Public" . 
                    DIRECTORY_SEPARATOR . "Uploads" .
                    DIRECTORY_SEPARATOR . $salesorder;
        
        $path = explode('/', $selectedDir);
        foreach ($path as $value) {
            $currentProjectDir .= DIRECTORY_SEPARATOR . $value;
        }
        
        $currentProjectDir .= DIRECTORY_SEPARATOR . $fileName;
        error_log($currentProjectDir);
        if (is_file($currentProjectDir)) {
            unlink($currentProjectDir);
            return json_encode('success');
        }
        return json_encode('failure');
        
    }

}
