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

        $salesorder = $this->Request->hasProperty('postSalesOrder') ? $this->Request->postSalesOrder : '';
        $selectedDir = $this->Request->hasProperty('postFilePath') ? $this->Request->postFilePath : '';
        $fileName = $this->Request->hasProperty('postFileName') ? $this->Request->postFileName : '';
        
        error_log("Sales Order: " . $salesorder);
        error_log("File Path: " . $selectedDir);
        error_log("File Name: " . $fileName);
        
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
