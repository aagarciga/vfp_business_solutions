<?php
/**
 * Project:  VFP Business Series
 * Copyright: 2014. VFP Business Solutions, LLC
 */

namespace Dandelion\MVC\Application\Controllers;

use Dandelion\Diana\Drivers\AdvantageODBC\AdvantageODBCDriver;
use Dandelion\MVC\Application\Models\DatUnitOfWork;
use Dandelion\MVC\Application\Models\VfpDataUnitOfWork;
use Dandelion\MVC\Core\ActionsController ;
use Dandelion\MVC\Core\Application;
use Dandelion\MVC\Core\Request;

/**
 * VFP Business Series Dynamic Dat base actions controller
 * @name DatActionsController
 */
abstract class DatActionsController extends ActionsController {
    /**
     * Dat Context object
     * @var DatUnitOfWork
     */
    public $DatUnitOfWork;

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
        
        $this->FvpDataUnitOfWork = new VfpDataUnitOfWork(new AdvantageODBCDriver($application->getDefaultDbName(),
            $application->getDefaultDbHost(),
            $application->getDefaultDbUser(),
            $application->getDefaultDbPassword(),
            $application->getDefaultDbServerType()));
    }

    /**
     * Pre controller method
     * @param \Dandelion\MVC\Core\Request $request
     */
    protected function PreController(Request $request) {
        if(!isset($_SESSION['username'])){
            $redirectionRequest = new Request('User', 'Signin', $request->Application);
            // TODO : FIX that
            $redirectionRequest->previousController = $request->Controller[0];
            $redirectionRequest->previousAction = $request->Action[0];
            $this->Redirect($redirectionRequest);
        }
        else{
            $driver = $this->BuildDatConnection( $_SESSION['usercomp']);
            $this->DatUnitOfWork = new DatUnitOfWork($driver, $_SESSION['usercomp']);
        }
    }
    
    /**
     * 
     * @param \Dandelion\MVC\Application\Models\Entities\Sysuser $user
     * @param string $dbuser
     * @param string $dbpassword
     * @param string $dbservertype
     * @return \Dandelion\Diana\Drivers\AdvantageODBC\AdvantageODBCDriver
     */
    private function BuildDatConnection($usercomp){

        $company = $this->FvpDataUnitOfWork->SyscompRepository->GetByActcomp($usercomp);
        $result = null;
        if ($company) {

            $dbName = "Dat$usercomp.add";
            $dbHost = $company->getDbpath();
            $dbuser = $company->getDbuser();
            $dbpassword = $company->getDbpass();
            $dbservertype = $company->getDbsvrtype();
            
            $result = new AdvantageODBCDriver($dbName,
                $dbHost,
                $dbuser,
                $dbpassword,
                $dbservertype);
        }
        return $result;       
        
    }

}