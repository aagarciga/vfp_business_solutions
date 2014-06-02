<?php
/**
 * Project:  VFP Business Series
 * Copyright: 2014. VFP Business Solutions, LLC
 */

namespace Dandelion\MVC\Application\Controllers;

use Dandelion\Diana\Drivers\AdvantageODBC\AdvantageODBCDriver;
use Dandelion\MVC\Application\Models\VfpDataUnitOfWork;
use Dandelion\MVC\Core\ActionsController ;
use Dandelion\MVC\Core\Application;

require_once MVC_DIR_CORE . DIRECTORY_SEPARATOR . 'Request.php';
require_once MVC_DIR_CORE . DIRECTORY_SEPARATOR . 'ActionsController.php';
require_once MVC_DIR_APP_MODELS . DIRECTORY_SEPARATOR . 'VfpDataUnitOfWork.php';
require_once MVC_DIR_CORE . DIRECTORY_SEPARATOR . 'Application.php';
require_once MVC_DIR_APP_LIBRARIES . DIRECTORY_SEPARATOR .  'Diana' . DIRECTORY_SEPARATOR . 'Diana.php';

/**
 * VFP Business Series User Authentication Controller
 * @name User
 */
class User extends ActionsController {

    /**
     * FvpData Context object
     * @var FvpDataUnitOfWork 
     */
    public $FvpDataUnitOfWork;

    /**
     * Controller initialization method
     */
    protected function Init() {
        $application = new Application();
        $this->FvpDataUnitOfWork = new VfpDataUnitOfWork(new AdvantageODBCDriver($application->getDbName(1),
            $application->getDbHost(1),
            $application->getDbUser(1),
            $application->getDbPassword(1),
            $application->getDbServerType(1)));
    }
    
} 