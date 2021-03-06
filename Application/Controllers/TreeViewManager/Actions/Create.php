<?php

/**
 * Project:  VFP Business Series
 * Copyright: 2014. VFP Business Solutions, LLC
 */

namespace Dandelion\MVC\Application\Controllers\TreeViewManager\Actions;

use Dandelion\MVC\Core\Action;
use Dandelion\FileSystem;

/**
 * Ajax Create Node Action
 * @name Create
 */
class Create extends Action {

    /**
     * Ajax Create Node Action
     * @return JSON {success: BOOL_VALUE}
     */
    public function Execute() {

        $rootDir = $this->Request->hasProperty('rootDir') ? $this->Request->rootDir : '';
        $id = $this->Request->hasProperty('id') ? $this->Request->id : '';
        $text = $this->Request->hasProperty('text') ? $this->Request->text : '';
        $type = $this->Request->hasProperty('type') ? $this->Request->type : '';
        $controllerName = $this->Request->hasProperty('controllerName') ? $this->Request->controllerName : '';


        $filePath = $this->controller->BuildPath($rootDir);
        $this->controller->CreateDefaultFolderStructure($filePath, $controllerName);
        $fileSystem = new FileSystem($filePath);
        $result = null;
        try{
            $node = isset($id) && $id !== '#' ? $id : '/';
            $result = $fileSystem->Create($node, isset($text) ? $text : '', (!isset($type) || $type !== 'file'));
            header('Content-Type: application/json; charset=utf-8');
            return json_encode($result);
        }
        catch (Exception $e) {
            header($_SERVER["SERVER_PROTOCOL"] . ' 500 Server Error');
            header('Status:  500 Server Error');
            error_log($e->getMessage());
            return json_encode('{success: false}');
        }
    }

}
