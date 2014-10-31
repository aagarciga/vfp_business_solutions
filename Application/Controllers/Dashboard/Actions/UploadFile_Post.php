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
class UploadFile_Post extends Action {

    /**
     * Ajax Upload File Action
     * @return JSON
     */
    public function Execute() {

        $storeFolder = MVC_DIR_ROOT . 
                DIRECTORY_SEPARATOR . "Public" . 
                DIRECTORY_SEPARATOR . "Uploads";

        if (!empty($_FILES)) {

            // If file is sent to the page, store the file object to a temporary variable.
            // "file" is the name of the input file or DropzoneJs Object
            $tempFile = $_FILES['file']['tmp_name'];

            // Create the absolute path of the destination folder
            $targetPath = $storeFolder . DIRECTORY_SEPARATOR;

            // Create the absolute path of the uploaded file destination 
            $targetFile = $targetPath . $_FILES['file']['name'];

            // Move uploaded file to destination
            move_uploaded_file($tempFile, $targetFile);
        }
    }

}
