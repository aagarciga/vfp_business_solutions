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
     * Default Folder Structure
     * @param string $rootDir
     */
    public function CreateDefaultFolderStructure($rootDir, $controllerName = 'default') {
        if (!is_dir($rootDir)) {
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

        $controller = Application::getXmlObjectByAttribute($controllers->Controller, 'Name', $controllerName);



//
//
//
//        foreach($controllers as $controller){
//
//        }

        error_log('Controllers >>>>'. print_r($controller, true));




        // /[ROOTDIR]/Freights
        $currentStructureDir = $rootDir.DIRECTORY_SEPARATOR.'Freights';
        if (!is_dir($currentStructureDir)) {
            mkdir($currentStructureDir);
        }
        // /[ROOTDIR]/Miscellaneous
        $currentStructureDir = $rootDir.DIRECTORY_SEPARATOR.'Miscellaneous';
        if (!is_dir($currentStructureDir)) {
            mkdir($currentStructureDir);
        }
        // /[ROOTDIR]/POs and Invoices from OMG
        $currentStructureDir = $rootDir.DIRECTORY_SEPARATOR.'POs and Invoices from OMG';
        if (!is_dir($currentStructureDir)) {
            mkdir($currentStructureDir);
        }
        // /[ROOTDIR]/POs and Invoices from WMS
        $currentStructureDir = $rootDir.DIRECTORY_SEPARATOR.'POs and Invoices from WMS';
        if (!is_dir($currentStructureDir)) {
            mkdir($currentStructureDir);
        }
        // /[ROOTDIR]/Quotation-PO-Invoice
        $currentStructureDir = $rootDir.DIRECTORY_SEPARATOR.'Quotation-PO-Invoice';
        if (!is_dir($currentStructureDir)) {
            mkdir($currentStructureDir);
        }
        // /[ROOTDIR]/Reports and Files
        $currentStructureDir = $rootDir.DIRECTORY_SEPARATOR.'Reports and Files';
        if (!is_dir($currentStructureDir)) {
            mkdir($currentStructureDir);
        }
        // /[ROOTDIR]/Time Sheets
        $currentStructureDir = $rootDir.DIRECTORY_SEPARATOR.'Time Sheets';
        if (!is_dir($currentStructureDir)) {
            mkdir($currentStructureDir);
        }
        // /[ROOTDIR]/Tool Box
        $currentStructureDir = $rootDir.DIRECTORY_SEPARATOR.'Tool Box';
        if (!is_dir($currentStructureDir)) {
            mkdir($currentStructureDir);
        }
        // /[ROOTDIR]/Travel Expenses
        $currentStructureDir = $rootDir.DIRECTORY_SEPARATOR.'Travel Expenses';
        if (!is_dir($currentStructureDir)) {
            mkdir($currentStructureDir);
        }
    }

}