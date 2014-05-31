<?php

namespace Dandelion\MVC\Application\Controllers;

use Dandelion\Diana\Drivers\AdvantageODBC;
use Dandelion\Diana\Drivers\AdvantageODBC\AdvantageODBCDriver;
use Dandelion\MVC\Application\Models\Dat00UnitOfWork;
use Dandelion\MVC\Application\Models\VfpDataUnitOfWork;
use Dandelion\MVC\Core\ActionsController ;
use Dandelion\MVC\Core\Application;

require_once MVC_DIR_CORE . DIRECTORY_SEPARATOR . 'Request.php';
require_once MVC_DIR_CORE . DIRECTORY_SEPARATOR . 'ActionsController.php';
require_once MVC_DIR_APP_MODELS . DIRECTORY_SEPARATOR . 'Dat00UnitOfWork.php';
require_once MVC_DIR_APP_MODELS . DIRECTORY_SEPARATOR . 'VfpDataUnitOfWork.php';

require_once MVC_DIR_CORE . DIRECTORY_SEPARATOR . 'Application.php';

require_once MVC_DIR_APP_LIBRARIES . DIRECTORY_SEPARATOR .  'Diana' . DIRECTORY_SEPARATOR . 'Diana.php';


/**
 * Description of Main
 *
 * @author Alex Alvarez Gárciga
 * @ignore
 */
class Main extends ActionsController {
    public $Dat00UnitOfWork;
    public $FvpDataUnitOfWork;

    protected function Init()
    {
        $application = new Application();

        $this->Dat00UnitOfWork = new Dat00UnitOfWork(new AdvantageODBCDriver($application->getDefaultDbName(),
            $application->getDefaultDbHost(),
            $application->getDefaultDbUser(),
            $application->getDefaultDbPassword(),
            $application->getDefaultDbServerType()));

        $this->FvpDataUnitOfWork = new VfpDataUnitOfWork(new AdvantageODBCDriver($application->getDbName(1),
            $application->getDbHost(1),
            $application->getDbUser(1),
            $application->getDbPassword(1),
            $application->getDbServerType(1)));
    }
}

?>
