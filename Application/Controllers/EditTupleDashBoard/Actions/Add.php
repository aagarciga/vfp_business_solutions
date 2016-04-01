<?php
/**
 * User: Victor
 * Date: 31/03/2016
 * Time: 18:24
 * @author    Victor Luis Aguado Leon <victorluisaguadoleon@gmail.com>
 * @copyright 2011-2014 Alex Alvarez G�rciga / Dandelion (http://www.thedandelionproject.com)
 * @license   http://www.opensource.org/licenses/mit-license.php MIT
 * @link      http://www.thedandelionproject.com
 */

namespace Dandelion\MVC\Application\Controllers\EditTupleDashboard\Actions;


use Dandelion\GUIDGenerator;
use Dandelion\MVC\Core\Action;
use Dandelion\MVC\Application\Tools\Controller;

class Add extends Action
{
    /**
     * When the action is called method 'Execute' is called
     */
    public function Execute()
    {
        $this->Title = 'Add Tuple Dashboard | VFP Business Series';

        $dashboardController = Controller::getDashboardControllerFromRequest($this->controller, $this);

        $this->RedirectUrl = $this->Request->hasProperty('redirect') ? $this->Request->redirect : '';
        $this->Values = $this->Request->hasProperty('values') ? $this->Request->values : null;

        $this->CompanyLogo = $this->controller->DatUnitOfWork->ARCOMPRepository->GetCompanyLogo();

        $companySuffix = $this->controller->DatUnitOfWork->CompanySuffix;
        $this->FieldsDefinition = $dashboardController->GetFieldsDefinition($companySuffix);

        $this->UserName = (!isset($_SESSION['username'])) ? 'Anonimous' : $_SESSION['username'];
    }
}