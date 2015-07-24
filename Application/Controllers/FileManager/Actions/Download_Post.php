<?php

/**
 * Project:  VFP Business Series
 * Copyright: 2014. VFP Business Solutions, LLC
 */

namespace Dandelion\MVC\Application\Controllers\FileManager\Actions;

use Dandelion\MVC\Core\Action;

/**
 * Ajax Download File Action
 * @name DownloadFile
 */
class Download_Post extends Action {

    /**
     * Ajax Download File Action
     * @return File
     */
    public function Execute() {
        error_log("entro al download");

        $rootDir = $this->Request->hasProperty('rootDir') ? $this->Request->rootDir : '';
        $selectedDir  = $this->Request->hasProperty('selectedDir') ? $this->Request->selectedDir : '';
        $fileName = $this->Request->hasProperty('fileName') ? $this->Request->fileName : '';

        $filePath = $this->controller->BuildPath($rootDir, $selectedDir, $fileName);
        error_log($filePath);
        // Required for some browsers
        if (ini_get('zlib.output_compression')){
            ini_set('zlib.output_compression', 'Off');
        }

        // Must be fresh start and File Exists?
        if (!headers_sent() && file_exists($filePath)) {
            // Parse Info / Get Extension
            $fsize = filesize($filePath);
            $path_parts = pathinfo($filePath);
            $ext = strtolower($path_parts["extension"]);
            // Determine Content Type
            switch ($ext) {
                case "pdf": $ctype = "application/pdf";
                    break;
                case "exe": $ctype = "application/octet-stream";
                    break;
                case "zip": $ctype = "application/zip";
                    break;
                case "docx":
                case "doc": $ctype = "application/msword";
                    break;
                case "xlsx":
                case "xls": $ctype = "application/vnd.ms-excel";
                    break;
                case "pptx":
                case "ppt": $ctype = "application/vnd.ms-powerpoint";
                    break;
                case "gif": $ctype = "image/gif";
                    break;
                case "png": $ctype = "image/png";
                    break;
                case "jpeg":
                case "jpg": $ctype = "image/jpg";
                    break;
                default: $ctype = "octet-stream"; //"application/force-download";
            }
            header("Pragma: public"); // required
            header("Expires: 0");
            header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
            header("Cache-Control: private", false); // required for certain browsers
            header("Content-Type: $ctype");
            header("Content-Disposition: attachment; filename=\"" . basename($filePath) . "\";");
            header("Content-Transfer-Encoding: binary");
            header("Content-Length: " . $fsize);
            ob_clean();
            flush();
            readfile($filePath);
        }
    }

}
