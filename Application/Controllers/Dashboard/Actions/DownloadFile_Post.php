<?php

/**
 * Project:  VFP Business Series
 * Copyright: 2014. VFP Business Solutions, LLC
 */

namespace Dandelion\MVC\Application\Controllers\Dashboard\Actions;

use Dandelion\MVC\Core\Action;

/**
 * Ajax Download File Action
 * @name DownloadFile
 */
class DownloadFile_Post extends Action {

    /**
     * Ajax Download File Action
     * @return File
     */
    public function Execute() {
        
        $filePath = MVC_DIR_ROOT . 
                    DIRECTORY_SEPARATOR . "Public" . 
                    DIRECTORY_SEPARATOR . "Uploads" .
                    DIRECTORY_SEPARATOR . $this->Request->salesorder;

        $filePath .= $this->Request->hasProperty('filepath') ?
                $this->Request->filepath : '';
        $fileName = $this->Request->hasProperty('filename') ?
                $this->Request->filename : '';
        
        error_log($filePath);
        $filePath = str_replace('/', DIRECTORY_SEPARATOR, $filePath);
        error_log($filePath);
        
        // Required for some browsers 
        if (ini_get('zlib.output_compression')){
            ini_set('zlib.output_compression', 'Off');
        }

        // Must be fresh start and File Exists? 
        if (!headers_sent() && file_exists($filePath)) {
            error_log("Entro");
            // Parse Info / Get Extension 
            $fsize = filesize($filePath);
            $path_parts = pathinfo($filePath);
            $ext = strtolower($path_parts["extension"]);
            error_log($fsize);
            error_log($ext);
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
            error_log("Ready to send file to download.....");
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
