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
     * @var VfpDataUnitOfWork
     */
    public $VfpDataUnitOfWork;

    /**
     * Controller initialization method
     */
    protected function Init()
    {
        $application = new Application();
        
        $this->VfpDataUnitOfWork = new VfpDataUnitOfWork(new AdvantageODBCDriver($application->getDefaultDbName(),
            $application->getDefaultDbHost(),
            $application->getDefaultDbUser(),
            $application->getDefaultDbPassword(),
            $application->getDefaultDbServerType()), $_SESSION['usercomp']);
    }

    /**
     * Pre controller method
     * @param \Dandelion\MVC\Core\Request $request
     */
    protected function PreController(Request $request) {
        if(!isset($_SESSION['username'])){
            $redirectionRequest = new Request('User', 'Signin', $request->Application);
            $redirectionRequest->previousController = $request->Controller;
            $redirectionRequest->previousAction = $request->Action;
            $this->Redirect($redirectionRequest);
        }
        else{
            $driver = $this->BuildDatConnection( $_SESSION['usercomp']);
            $this->DatUnitOfWork = new DatUnitOfWork($driver, $_SESSION['usercomp']);
            
            $currentCompanyEntity = $this->VfpDataUnitOfWork->SyscompRepository->GetByActcomp($_SESSION['usercomp']);
            $_SESSION['fullFeatures'] = false;             
            if ( strtolower($currentCompanyEntity->getDboption()) === "all0000"){
                $_SESSION['fullFeatures'] = true;
            }
            else{
                if ($request->Controller !== "Dashboard") {
                    $this->Redirect(new Request('Dashboard', 'Index', $request->Application));
                }
            }
            
            
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

        $company = $this->VfpDataUnitOfWork->SyscompRepository->GetByActcomp($usercomp);
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