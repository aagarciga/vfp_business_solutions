<?php

/**
 * Project:  VFP Business Series
 * Copyright: 2014. VFP Business Solutions, LLC
 */

namespace Dandelion\MVC\Application\Controllers\FileManager\Actions;

use Dandelion\MVC\Core\Action;

/**
 * Ajax Upload File Action
 * @name Upload_Post
 */
class Upload_Post extends Action {

    /**
     * Ajax Upload File Action
     * @return JSON {success: BOOL_VALUE}
     */
    public function Execute() {
        error_log("Entro al Upload");

        $rootDir = $this->Request->hasProperty('rootDir') ? $this->Request->rootDir : '';
        $selectedDir  = $this->Request->hasProperty('selectedDir') ? $this->Request->selectedDir : '';
        error_log($rootDir);

        $filePath = $this->controller->BuildPath($rootDir, $selectedDir);
        $result = json_encode('{success: false}');

        if(!empty($_FILES)){
            if (!is_dir($filePath)) {
                mkdir($filePath);
            }

            // If file is sent to the page, store the file object to a temporary variable.
            // "file" is the name of the input file or DropzoneJs Object
            $tempFile = $_FILES['file']['tmp_name'];

            // Create the absolute path of the destination folder
            $targetPath = $filePath . DIRECTORY_SEPARATOR;

            // Create the absolute path of the uploaded file destination
            $targetFile = $targetPath . $_FILES['file']['name'];

            // Move uploaded file to destination
            if (move_uploaded_file($tempFile, $targetFile)){
                return json_encode('{success: true}');
            }
        }
        return json_encode('{success: false}');
    }

}
