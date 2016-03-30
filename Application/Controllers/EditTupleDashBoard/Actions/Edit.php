<?php
/**
 * User: Victor
 * Date: 25/03/2016
 * Time: 19:01
 * @author    Victor Luis Aguado Leon <victorluisaguadoleon@gmail.com>
 * @copyright 2011-2014 Alex Alvarez G�rciga / Dandelion (http://www.thedandelionproject.com)
 * @license   http://www.opensource.org/licenses/mit-license.php MIT
 * @link      http://www.thedandelionproject.com
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
        $this->Title = 'Details Dashboard | VFP Business Series';

        if (!$this->Request->hasProperty('dashboard')){
            throw new ControllerNotFoundException('');
        }
        $this->ControllerName = $this->Request->dashboard;

        $dashboardController = $this->controller->getDashboardController($this->ControllerName, $this->Request);
        if (is_null($dashboardController)){
            throw new ControllerNotFoundException($this->ControllerName);
        }


        if (!$this->Request->hasProperty('id')){
            throw new \HttpInvalidParamException('Request "Id" param not found.');
        }

        $this->Id = $this->Request->Id;

        $this->Values = $this->Request->hasProperty('values') ? json_decode(base64_decode($this->Request->values)) : new \stdClass();
        $this->RedirectUrl = $this->Request->hasProperty('redirect') ? $this->Request->redirect : '';

        $this->CompanyLogo = $this->controller->DatUnitOfWork->ARCOMPRepository->GetCompanyLogo();

        $companySuffix = $this->controller->DatUnitOfWork->CompanySuffix;
        $this->FieldsDefinition = $dashboardController->GetFieldsDefinition($companySuffix);

        $this->FieldIdName = 'Juan';
        $this->FieldIdValue = 001;

        $this->UserName = (!isset($_SESSION['username'])) ? 'Anonimous' : $_SESSION['username'];

        $this->FullFeatures = isset($_SESSION['fullFeatures']) ? $_SESSION['fullFeatures'] : false;
        $this->ShowFiancialDashboard = (!isset($_SESSION['showFiancialDashboard'])) ? false : $_SESSION['showFiancialDashboard'];
    }

}