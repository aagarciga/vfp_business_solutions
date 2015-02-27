<?php

/**
 * Project:  VFP Business Series
 * Copyright: 2014. VFP Business Solutions, LLC
 */

namespace Dandelion\MVC\Application\Controllers\Dashboard\Actions;

use Dandelion\MVC\Core\Action;

class GetCurrentProjectFiles_Post extends Action {

    /**
     * Commit Shipment Changes
     * @return JSON
     */
    public function Execute() {

        $salesorder = $this->Request->hasProperty('salesorder') ? $this->Request->salesorder : '';
        $selectedDir = $this->Request->hasProperty('filePath') ? $this->Request->filePath : '';
        $result = array();

        if ($salesorder !== '') {
            $currentProjectDir = MVC_DIR_ROOT .
                    DIRECTORY_SEPARATOR . "Public" .
                    DIRECTORY_SEPARATOR . "Uploads" .
                    DIRECTORY_SEPARATOR . $salesorder;
            $path = explode('/', $selectedDir);
            foreach ($path as $value) {
                $currentProjectDir .= DIRECTORY_SEPARATOR . $value;
            }

            /*
             * Scan "uploads" folder using PHP scandir function. 
             * This function returns FALSE if there is any error. 
             * And it will return Array of files' names when it is successful.
             * 
             */
            $files = scandir($currentProjectDir);
            if ($files) {
                foreach ($files as $file) {
                    /**
                     * Loop through the returned value from scandir function and 
                     * keep them in $result variable. Keep note, we ignore "." 
                     * and ".." since scandir will always return "." and ".." as 
                     * valid content referring to current and previous directory.
                     */
                    $filePath = $currentProjectDir . DIRECTORY_SEPARATOR . $file;
                    if ('.' != $file && '..' != $file && is_file($filePath)) {
                        $obj['name'] = $file;
                        $obj['size'] = filesize($filePath);
                        $result[] = $obj;
                    }
                }
            }
        }


        /**
         * Output proper header for JSON content and also encode PHP Array to 
         * JSON string using json_encode function.
         */
        header('Content-Type: application/json; charset=utf-8');
        return json_encode($result);
    }

}
