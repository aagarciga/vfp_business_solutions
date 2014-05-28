<?php

namespace Dandelion\MVC\Application\Controllers;

use Dandelion\Diana\Drivers\AdvantageODBC;
use Dandelion\Diana\Drivers\AdvantageODBC\AdvantageODBCDriver;
use Dandelion\MVC\Application\Models\FermenUnitOfWork;
use Dandelion\MVC\Core\ActionsController ;
use Dandelion\MVC\Core\Application;

require_once MVC_DIR_CORE . DIRECTORY_SEPARATOR . 'Request.php';
require_once MVC_DIR_CORE . DIRECTORY_SEPARATOR . 'ActionsController.php';
require_once MVC_DIR_APP_MODELS . DIRECTORY_SEPARATOR . 'FermenUnitOfWork.php';

require_once MVC_DIR_CORE . DIRECTORY_SEPARATOR . 'Application.php';

require_once MVC_DIR_APP_LIBRARIES . DIRECTORY_SEPARATOR .  'Diana' . DIRECTORY_SEPARATOR . 'Diana.php';


/**
 * Description of Main
 *
 * @author Alex Alvarez Gárciga
 * @ignore
 */
class Main extends ActionsController {
    public $UnitOfWork;

    protected function Init()
    {
        $application = new Application();

        $this->UnitOfWork = new FermenUnitOfWork(new AdvantageODBCDriver($application->getDefaultDbName(),
            $application->getDefaultDbHost(),
            $application->getDefaultDbUser(),
            $application->getDefaultDbPassword(),
            $application->getDefaultDbServerType()));
    }
}

?>
