<?php

/**
 * Project:  VFP Business Series
 * Copyright: 2014. VFP Business Solutions, LLC
 */

namespace Dandelion\MVC\Application\Controllers\Dashboard\Actions;

use Dandelion\MVC\Core\Action;
use Dandelion\FileSystem;

class ProjectAttachementsAPI extends Action {

    /**
     * Commit Shipment Changes
     * @return JSON
     */
    public function Execute() {

        // API Operation parameter. example: get_node
        $operation = $this->Request->hasProperty('operation') ? $this->Request->operation : "";
        $id = $this->Request->hasProperty('id') ? $this->Request->id : "";        
        $text = $this->Request->hasProperty('text') ? $this->Request->text : "";
        $type = $this->Request->hasProperty('type') ? $this->Request->type : "";
        $parent = $this->Request->hasProperty('parent') ? $this->Request->parent : "";

        // Current Project ID
        $salesorder = filter_input(INPUT_GET, 'salesorder');

        $rootDir = MVC_DIR_ROOT .
                DIRECTORY_SEPARATOR . "Public" .
                DIRECTORY_SEPARATOR . "Uploads" .
                DIRECTORY_SEPARATOR . $salesorder;
        
        if (!is_dir($rootDir)) { // mkdir(path, mode, recursive = bool)
            mkdir($rootDir);
        }

        $fs = new FileSystem($rootDir);
        try {
            $result = null;
            switch ($operation) {
                case 'get_node':
                    $node = isset($id) && $id !== '#' ? $id : '/';
                    $result = $fs->ListDir($node, (isset($id) && $id === '#'));
                    break;
                case "get_content":
                    $node = isset($id) && $id !== '#' ? $id : '/';
                    $result = $fs->GetContent($node);
                    break;
                case 'create_node':
                    $node = isset($id) && $id !== '#' ? $id : '/';
                    $result = $fs->Create($node, isset($text) ? $text : '', (!isset($type) || $type !== 'file'));
                    break;
                case 'rename_node':
                    $node = isset($id) && $id !== '#' ? $id : '/';
                    $result = $fs->Rename($node, isset($text) ? $text : '');
                    break;
                case 'delete_node':
                    $node = isset($id) && $id !== '#' ? $id : '/';
                    $result = $fs->Remove($node);
                    break;
                case 'move_node':
                    $node = isset($id) && $id !== '#' ? $id : '/';
                    $parn = isset($parent) && $parent !== '#' ? $parent : '/';
                    $result = $fs->Move($node, $parn);
                    break;
                case 'copy_node':
                    $node = isset($id) && $id !== '#' ? $id : '/';
                    $parn = isset($parent) && $parent !== '#' ? $parent : '/';
                    $result = $fs->Copy($node, $parn);
                    break;
                default:
                    throw new Exception('Unsupported operation: ' . $operation);
            }
            header('Content-Type: application/json; charset=utf-8');
            return json_encode($result);
        } catch (Exception $e) {
            header($_SERVER["SERVER_PROTOCOL"] . ' 500 Server Error');
            header('Status:  500 Server Error');
            return $e->getMessage();
        }
    }

}
