<?php
/**
 * Project:  VFP Business Series
 * Copyright: 2014. VFP Business Solutions, LLC
 */

namespace Dandelion\MVC\Application\Controllers;

use Dandelion\MVC\Core\ActionsController ;
use Dandelion\MVC\Application\Application;

/**
 * VFP Business Series File Manager Controller
 * @name TreeViewManager
 */
class TreeViewManager extends ActionsController {

    /**
     * @param $rootDir
     * @param $selectedDir
     * @param $fileName
     * @return string
     */
    public function BuildPath ($rootDir, $selectedDir = '', $fileName = ''){

        $path = MVC_DIR_ROOT .
            DIRECTORY_SEPARATOR . "Public" .
            DIRECTORY_SEPARATOR . "Uploads" .
            DIRECTORY_SEPARATOR . $rootDir;
        if ($selectedDir !== '') {
            $path .= DIRECTORY_SEPARATOR . str_replace('/', DIRECTORY_SEPARATOR, $selectedDir);
        }
        if ($fileName !== '') {
            $path .= DIRECTORY_SEPARATOR . $fileName;
        }
        return $path;
    }

    /**
     * Create Folder Structure by settings
     *
     * @param $rootDir
     * @param string $controllerName
     */
    public function CreateDefaultFolderStructure($rootDir, $controllerName = 'default') {
        // TODO: Refactor this: same code @ ProjectAttachmentsApi
        if (!is_dir($rootDir)) { // mkdir(path, mode, recursive = bool)
            mkdir($rootDir);
        }
        $application = new Application();
        // Get Current Company or Default instead
        $defaultCompany = $application->getCompany();
        $currentCompany = $application->getCompany($_SESSION['usercomp']);
        $controllers = $currentCompany->Controllers;
        if($controllers == ''){
            $controllers = $defaultCompany->Controllers;
        }

        // Get current Controller configuration or default instead
        $controllerArray = array();
        foreach ($controllers->Controller as $xmlObject){
            $controllerArray []= $xmlObject;
        }
        $controller = Application::getXmlObjectByAttribute($controllerArray, 'Name', $controllerName);
        if($controller == ''){
            $controller = Application::getXmlObjectByAttribute($controllerArray, 'Name', 'default');
        }
        foreach($controller->Attachments->FileStructure->Dir as $directory){
            $currentStructureDir = $rootDir.DIRECTORY_SEPARATOR.$directory['Name'];
            if (!is_dir($currentStructureDir)) {
                mkdir($currentStructureDir);
            }
        }
    }

}