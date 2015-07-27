<?php

/**
 * Project:  VFP Business Series
 * Copyright: 2014. VFP Business Solutions, LLC
 */

namespace Dandelion\MVC\Application\Controllers\FileManager\Actions;

use Dandelion\MVC\Core\Action;

/**
 * Ajax List Files Action
 * @name ListFiles
 */
class List_Post extends Action {


    /**
     * Ajax List Files Action
     * @return JSON File List
     */
    public function Execute() {
        $rootDir = $this->Request->hasProperty('rootDir') ? $this->Request->rootDir : '';
        $selectedDir  = $this->Request->hasProperty('selectedDir') ? $this->Request->selectedDir : '';

        $path = $this->controller->BuildPath($rootDir, $selectedDir);

        $result = array();

        /*
         * Scan "uploads" folder using PHP scandir function.
         * This function returns FALSE if there is any error.
         * And it will return Array of files' names when it is successful.
         */
        $files = scandir($path);
        if ($files !== false) {
            foreach ($files as $file) {
                /**
                 * Loop through the returned value from scandir function and
                 * keep them in $result variable. Keep note, we ignore "."
                 * and ".." since scandir will always return "." and ".." as
                 * valid content referring to current and previous directory.
                 */
                $filePath = $path . DIRECTORY_SEPARATOR . $file;
                if ('.' != $file && '..' != $file && is_file($filePath)) {
                    $current['name'] = $file;
                    $current['size'] = filesize($filePath);
                    $result[] = $current;
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
