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

use Dandelion\MVC\Application\Controllers\DashboardController;
use Dandelion\MVC\Core\Action;
use Dandelion\MVC\Core\Request;

final class Controller
{
    /**
     * @param string $controllerFullName
     * @param Request $request
     * @return object|null
     */
    public static function loadController($controllerFullName, $request){
        $tempName = $request->Controller;
        $controllerName = getClassName($controllerFullName);
        $request->Controller = $controllerName;
        //e.g. Application/Controller/Default/Default.Controller.php
        $classFile = MVC_DIR_APP_CONTROLLERS . DIRECTORY_SEPARATOR . $controllerName . DIRECTORY_SEPARATOR . $controllerName . '.php';
        if (is_file($classFile)){
            require_once $classFile;

            $classFullName = $controllerFullName;
            if (class_exists($classFullName)){
                $rc = new \ReflectionClass($classFullName);
                $dashboardObject = $rc->newInstanceArgs(array($request));
                $request->Controller = $tempName;
                return $dashboardObject;
            }
        }

        $request->Controller = $tempName;
        return null;
    }

    /**
     * @param Action $action
     * @param Controller $controller
     * @return DashboardController
     * @throws ControllerNotFoundException
     */
    public static function getDashboardControllerFromRequest($controller, $action){
        if (!$action->Request->hasProperty('dashboard')){
            throw new ControllerNotFoundException('');
        }
        $action->ControllerName = base64_decode($action->Request->dashboard);

        $dashboardController = $controller->getDashboardController($action->ControllerName, $action->Request);
        if (is_null($dashboardController)){
            throw new ControllerNotFoundException($action->ControllerName);
        }

        return $dashboardController;
    }
}