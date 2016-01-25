<?php
/**
 * Created by PhpStorm.
 * User: Victor
 * Date: 24/01/2016
 * Time: 19:34
 * @author    Victor Luis Aguado Leon <victorluisaguadoleon@gmail.com>
 * @copyright 2011-2014 Alex Alvarez Gárciga / Dandelion (http://www.thedandelionproject.com)
 * @license   http://www.opensource.org/licenses/mit-license.php MIT
 * @link      http://www.thedandelionproject.com
 */

namespace Dandelion\Filter;

/**
 * @param array $rootDirectorys <p>
 * keys are the root directory, the values suggest if sub-directorys are load
 * </p>
 * @return array the directorys loaded
 */
function loadDirs($rootDirectorys){
    $result = array();
    foreach($rootDirectorys as $rootDirectory => $exploreSubDirectory){
        $result[] = $rootDirectory;
        if ($exploreSubDirectory){
            $subDirectorys = loadDirs($rootDirectory);
            $result = array_merge($result, $subDirectorys);
        }
    }
    return $result;
}

/**
 * @param string $directory <p> Root directory
 * </p>
 * @return array the sub-directorys of root directory
 */
function loadSubDirectorys($directory){
    $result = array();
    $directoryIterator = new DirectoryIterator($directory);
    foreach($directoryIterator as $file){
        if ($file->isDir()){
            $path = $file->getPath();
            $result[] = $path;
            $subDirectorys = loadSubDirectorys($path);
            $result = array_merge($result, $subDirectorys);
        }
    }
    return $result;
}