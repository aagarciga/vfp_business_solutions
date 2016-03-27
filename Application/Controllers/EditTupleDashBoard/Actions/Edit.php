<?php
/**
 * User: Victor
 * Date: 25/03/2016
 * Time: 19:01
 */

namespace Dandelion\MVC\Application\Controllers\EditTupleDashboard\Actions;

use Dandelion\MVC\Core\Action;
use Dandelion\MVC\Core\Exceptions\ControllerNotFoundException;

/**
 * Created by: Victor
 * Class Edit
 * @package Dandelion\MVC\Application\Controllers\EditTupleDashboard\Actions
 */
class Edit extends Action
{
    /**
     * When the action is called method 'Execute' is called
     */
    public function Execute()
    {
        if (!$this->Request->hasProperty('dashboard')){
            throw new ControllerNotFoundException('');
        }
        $this->ControllerName = $this->Request->dashboard;

        $dashboardController = $this->controller->getDashboardController($this->ControllerName);
        if (is_null($dashboardController)){
            throw new ControllerNotFoundException($this->ControllerName);
        }

        $this->Values = $this->Request->hasProperty('values') ? json_decode($this->Request->values) : new \stdClass();

        $companySuffix = $this->controller->DatUnitOfWork->CompanySuffix;
        $this->FieldsDefinition = $dashboardController->GetFieldsDefinition($companySuffix);
    }

}