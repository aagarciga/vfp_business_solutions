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

use Dandelion\MVC\Application\Tools\Controller;
use Dandelion\MVC\Core\Action;
use Dandelion\MVC\Core\Exceptions\ControllerNotFoundException;
use Dandelion\Tools\Helpers\FieldDefinition;

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
        $this->Title = 'Save Tuple Dashboard | VFP Business Series';

        $dashboardController = Controller::getDashboardControllerFromRequest($this->controller, $this);

        if (!$this->Request->hasProperty('id')){
            throw new \HttpInvalidParamException('Request "Id" param not found.');
        }

        $this->Id = $this->Request->id;
        $this->RedirectUrl = $this->Request->hasProperty('redirect') ? $this->Request->redirect : '';

        $this->CompanyLogo = $this->controller->DatUnitOfWork->ARCOMPRepository->GetCompanyLogo();

        $companySuffix = $this->controller->DatUnitOfWork->CompanySuffix;
        $this->FieldsDefinition = $dashboardController->GetFieldsDefinition($companySuffix);

        $this->UserName = (!isset($_SESSION['username'])) ? 'Anonimous' : $_SESSION['username'];

        $model = $dashboardController->getModel(base64_decode($this->Id), $this->controller->DatUnitOfWork);
        $arrayModel = FieldDefinition::modelToArray($model, $this->FieldsDefinition);
        $this->Values = $arrayModel;
    }

}