<?php

/**
 * User: Victor
 * Date: 25/03/2016
 * Time: 18:14
 */

namespace Dandelion\MVC\Application\Controllers;
use Dandelion\MVC\Core\Request;

/**
 * Created by: Victor
 * Class EditTupleDashboard
 * @package Dandelion\MVC\Application\Controllers
 */
class EditTupleDashboard extends DatActionsController
{
    public function getDashboardController($dashboardName){
        $classFullName = __NAMESPACE__ . '\\' . $dashboardName;
        if (class_exists($classFullName)){
            $rc = new \ReflectionClass($classFullName);
            $constructor = $rc->getConstructor();
            if ($constructor->getNumberOfParameters() === 1){
                $request = new Request($dashboardName, 'index');
                $dashboardControllerObject = $constructor->invoke(null, array($request));
                return $dashboardControllerObject;
            }
        }

        return null;
    }
}