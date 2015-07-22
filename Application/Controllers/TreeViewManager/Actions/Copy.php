<?php

/**
 * Project:  VFP Business Series
 * Copyright: 2014. VFP Business Solutions, LLC
 */

namespace Dandelion\MVC\Application\Controllers\TreeViewManager\Actions;

use Dandelion\MVC\Core\Action;
use Dandelion\FileSystem;

/**
 * Ajax Copy Node Action
 * @name Copy
 */
class Copy extends Action {

    /**
     * Ajax Copy Node Action
     * @return JSON {success: BOOL_VALUE}
     */
    public function Execute() {

        $rootDir = $this->Request->hasProperty('rootDir') ? $this->Request->rootDir : '';
        $id = $this->Request->hasProperty('id') ? $this->Request->id : '';
        $parent = $this->Request->hasProperty('parent') ? $this->Request->parent : '';

        $filePath = $this->controller->BuildPath($rootDir);
        $this->controller->CreateDefaultFolderStructure($filePath);
        $fileSystem = new FileSystem($filePath);
        $result = null;
        try{
            $node = isset($id) && $id !== '#' ? $id : '/';
            $parn = isset($parent) && $parent !== '#' ? $parent : '/';
            $result = $fileSystem->Copy($node, $parn);
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
