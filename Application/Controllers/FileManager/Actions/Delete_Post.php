<?php

/**
 * Project:  VFP Business Series
 * Copyright: 2014. VFP Business Solutions, LLC
 */

namespace Dandelion\MVC\Application\Controllers\FileManager\Actions;

use Dandelion\MVC\Core\Action;

/**
 * Ajax Delete File Action
 * @name Delete_Post
 */
class Delete_Post extends Action {

    /**
     * Ajax Delete File Action
     * @return JSON {success: BOOL_VALUE}
     */
    public function Execute() {

        $rootDir = $this->Request->hasProperty('rootDir') ? $this->Request->rootDir : '';
        $selectedDir  = $this->Request->hasProperty('selectedDir') ? $this->Request->selectedDir : '';
        $fileName = $this->Request->hasProperty('fileName') ? $this->Request->fileName : '';

        $filePath = $this->controller->BuildPath($rootDir, $selectedDir, $fileName);

        if (is_file($filePath)) {
            unlink($filePath);
            return json_encode('{success: true}');
        }
        return json_encode('{success: false}');
    }

}
