<?php
/**
 * User: Victor
 * Date: 24/03/2016
 * Time: 18:23
 */

namespace Dandelion\MVC\Application\Tools;


class Session
{
    public static function getSessionValue($key, $defaultValue){
        return isset($_SESSION[$key]) ? $_SESSION[$key] : $defaultValue;
    }
}