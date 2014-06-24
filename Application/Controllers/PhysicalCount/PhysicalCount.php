<?php
/**
 * Project:  VFP Business Series
 * Copyright: 2014. VFP Business Solutions, LLC
 */

namespace Dandelion\MVC\Application\Controllers;

use Dandelion\Diana\Drivers\AdvantageODBC\AdvantageODBCDriver;
use Dandelion\MVC\Application\Models\Dat00UnitOfWork;
use Dandelion\MVC\Application\Models\VfpDataUnitOfWork;
use Dandelion\MVC\Core\ActionsController ;
use Dandelion\MVC\Core\Application;
use Dandelion\MVC\Core\Request;

/**
 * VFP Business Series Physical Count Controller
 * @name PhysicalCount
 */
class PhysicalCount extends ActionsController {
    /**
     * Dat00 Context object
     * @var Dat00UnitOfWork
     */
    public $Dat00UnitOfWork;

    /**
     * FvpData Context object
     * @var FvpDataUnitOfWork
     */
    public $FvpDataUnitOfWork;

    /**
     * Controller initialization method
     */
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

    /**
     * Pre controller method
     * @param \Dandelion\MVC\Core\Request $request
     */
    protected function PreController(Request $request) {
        if(!isset($_SESSION['username'])){            
            $redirectionRequest = new Request('User', 'Signin', $request->Application);
            $redirectionRequest->previousController = $request->Controller[0];
            $redirectionRequest->previousAction = $request->Action[0];
            $this->Redirect($redirectionRequest);
        }
    }

}