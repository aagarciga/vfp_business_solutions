<?php
/**
 * Project:  VFP Business Series
 * Copyright: 2014. VFP Business Solutions, LLC
 */

namespace Dandelion\MVC\Application\Controllers\User\Actions;

use Dandelion\MVC\Core\Action;

/**
 * VFP Business Series User Sign in Post Action
 * @name Index_Post
 */
class Signin_Post extends Action{

    /**
     * Verify user and password and redirect to previous page if access granted. 
     * Returns to Sign in form otherwise.
     */
    public function Execute()
    {        
        $queryResult = $this->controller->VfpDataUnitOfWork->SysuserRepository->Get("WHERE USERNAME = '".$this->Request->txtUsername."'");
        if (count($queryResult)) {
            $user = $queryResult[0];
            if(trim($user->getUserpass()) === $this->Request->txtPassword){
                $_SESSION['username'] = $this->Request->txtUsername;
                
                $userCompany = $user->getFusercomp();

                $userGroup = $user->getGroup();
                $userFdview = $user->getFdview();
                // TODO: Change showFinancialDashboard instead showFiancialDashboard to correct typo and review ussages in all project
                $_SESSION['showFiancialDashboard'] = ($userGroup === 'ADMIN' && $userFdview);
                $_SESSION['usercomp'] = $userCompany;
                $_SESSION['userwhsdef'] = $user->getWhsdef();
                $user->setOndate(date("Y-m-d"));
                $user->setOntime(date("H:i:s"));
                
                // Updating Ondate and Ontime fields
                $this->controller->VfpDataUnitOfWork->SysuserRepository->Update($user);
                $companyEntity = $this->controller->VfpDataUnitOfWork->SyscompRepository->GetByActcomp($userCompany);
                if (!empty($companyEntity)) {
//                $_SESSION['usercomp_uselocno'] = $companyEntity->getUselocno();

                    // If Current User Company got DBOPTION Field Value equals to 'ALL0000' (No Case Sensitive)
                    if ( strtolower($companyEntity->getDboption()) === "all0000") {
                        $this->Redirect($this->Request->hdnController, $this->Request->hdnAction);
                    }
                    // Redirect to Dashboard Screen
                    $this->Redirect('Dashboard', 'Index');
                } else {
                    error_log("Company Entity can't be loaded. Verify existence of $userCompany in Syscomp Table");
                }

            }
        }        
        $this->Request->previousController = $this->Request->hdnController;
        $this->Request->previousAction = $this->Request->hdnAction;
        $this->Redirect('User', 'Signin');
    }

}