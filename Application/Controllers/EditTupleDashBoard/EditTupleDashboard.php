<?php
/**
 * Project:  VFP Business Series
 * Copyright: 2014. VFP Business Solutions, LLC
 */

namespace Dandelion\MVC\Application\Controllers;

use Dandelion\MVC\Application\Tools\Controller;
use Dandelion\MVC\Core\Request;

/**
 * Created by: Victor
 * Class EditTupleDashboard
 * @package Dandelion\MVC\Application\Controllers
 */
class EditTupleDashboard extends DatActionsController
{
    /**
     * @param string $dashboardName
     * @param Request $request
     * @return DashboardController|null
     */
    public function getDashboardController($dashboardName, $request){
        $dashboardControllerObject = Controller::loadController(__NAMESPACE__ . '\\' . $dashboardName, $request);

        return ($dashboardControllerObject instanceof DashboardController) ? $dashboardControllerObject : null;
    }
}