<?php
/**
 * Project:  VFP Business Series
 * Copyright: 2014. VFP Business Solutions, LLC
 */

namespace Dandelion\MVC\Application\Controllers;

use Dandelion\MVC\Core\ActionsController ;
use Dandelion\MVC\Core\Application;
use Dandelion\MVC\Core\Request;

/**
 * VFP Business Series File Manager Controller
 * @name FileManager
 */
class FileManager extends ActionsController {

    /**
     * @param $rootDir
     * @param $selectedDir
     * @param $fileName
     * @return string
     */
    protected function BuildPath ($rootDir, $selectedDir, $fileName = ''){

        $path = MVC_DIR_ROOT .
            DIRECTORY_SEPARATOR . "Public" .
            DIRECTORY_SEPARATOR . "Uploads" .
            DIRECTORY_SEPARATOR . $rootDir;
        $path .= DIRECTORY_SEPARATOR . str_replace('/', DIRECTORY_SEPARATOR, $selectedDir);
        if ($fileName !== ''){
            $path .= DIRECTORY_SEPARATOR . $fileName;
        }
        return $path;
    }

}