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