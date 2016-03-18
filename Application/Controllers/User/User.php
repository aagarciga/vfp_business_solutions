<?php
/**
 * Project:  VFP Business Series
 * Copyright: 2014. VFP Business Solutions, LLC
 */

namespace Dandelion\MVC\Application\Controllers;

use Dandelion\Diana\Drivers\AdvantageODBC\AdvantageODBCDriver;
use Dandelion\MVC\Application\Models\VfpDataUnitOfWork;
use Dandelion\MVC\Core\ActionsController ;
//use Dandelion\MVC\Core\Application;
use Dandelion\MVC\Application\Application;
/**
 * VFP Business Series User Authentication Controller
 * @name User
 */
class User extends ActionsController {

    /**
     * VfpData Context object
     * @var VfpDataUnitOfWork 
     */
    public $VfpDataUnitOfWork;

    /**
     * Controller initialization method
     */
    protected function Init() {
        $application = new Application();
        $this->VfpDataUnitOfWork = new VfpDataUnitOfWork(new AdvantageODBCDriver($application->getDefaultDbName(),
            $application->getDefaultDbHost(),
            $application->getDefaultDbUser(),
            $application->getDefaultDbPassword(),
            $application->getDefaultDbServerType()));
    }
    
} 