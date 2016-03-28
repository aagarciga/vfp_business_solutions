<?php
/**
 * User: Victor
 * Date: 25/03/2016
 * Time: 18:14
 * @author    Victor Luis Aguado Leon <victorluisaguadoleon@gmail.com>
 * @copyright 2011-2014 Alex Alvarez G�rciga / Dandelion (http://www.thedandelionproject.com)
 * @license   http://www.opensource.org/licenses/mit-license.php MIT
 * @link      http://www.thedandelionproject.com
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
    public function getDashboardController($dashboardName){
        $dashboardControllerObject = Controller::loadController($dashboardName, __NAMESPACE__);

        return ($dashboardControllerObject instanceof DashboardController) ? $dashboardControllerObject : null;
    }
}