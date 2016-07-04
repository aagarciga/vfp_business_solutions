<?php
/**
 * Project:  VFP Business Series
 * Copyright: 2014. VFP Business Solutions, LLC
 */

use Dandelion\MVC\Core\View;

/**
 * Class Helpers for static helpers methods
 */
class Helpers
{
    static function HelperMethod1(){
        return "I'm a Helper method";
    }

    /**
     * @param string $path
     * @return string href
     */
    static function buildAssetHref($path){
        $result = '#';
        if (!(is_null($path) || $path === '')){
            $result = trim($path);
            $result = View::ServerFileContext($result);
        }
        return (string) $result;
    }

}