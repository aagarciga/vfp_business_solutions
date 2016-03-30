<?php
/**
 * User: Victor
 * Date: 28/03/2016
 * Time: 11:07
 * @author    Victor Luis Aguado Leon <victorluisaguadoleon@gmail.com>
 * @copyright 2011-2014 Alex Alvarez G�rciga / Dandelion (http://www.thedandelionproject.com)
 * @license   http://www.opensource.org/licenses/mit-license.php MIT
 * @link      http://www.thedandelionproject.com
 */

namespace Dandelion\MVC\Application\Tools;

use Dandelion\MVC\Core\Request;

final class Controller
{
    /**
     * @param string $controllerFullName
     * @param Request $request
     * @return object|null
     */
    public static function loadController($controllerFullName, $request){
        $controllerName = getClassName($controllerFullName);
        //e.g. Application/Controller/Default/Default.Controller.php
        $classFile = MVC_DIR_APP_CONTROLLERS . DIRECTORY_SEPARATOR . $controllerName . DIRECTORY_SEPARATOR . $controllerName . '.php';
        if (is_file($classFile)){
            require_once $classFile;

            $classFullName = $controllerFullName;
            if (class_exists($classFullName)){
                $rc = new \ReflectionClass($classFullName);
                return $rc->newInstanceArgs(array($request));
            }
        }

        return null;
    }
}