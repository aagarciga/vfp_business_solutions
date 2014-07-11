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
        $queryResult = $this->controller->FvpDataUnitOfWork->SysuserRepository->Get("WHERE USERNAME = '".$this->Request->txtUsername."'");
        if (count($queryResult)) {
            $user = $queryResult[0];
            if(trim($user->getUserpass()) === $this->Request->txtPassword){
                $_SESSION['username'] = $this->Request->txtUsername;
                $_SESSION['usercomp'] = $user->getFusercomp();
                $_SESSION['userwhsdef'] = $user->getWhsdef();
                
                $user->setOndate(date("Y-m-d"));
                $user->setOntime(date("H:i:s"));
                
//                $_SESSION['user'] = $user; Not work
                
                // Updating Ondate and Ontime fields
                $this->controller->FvpDataUnitOfWork->SysuserRepository->Update($user);
                
                $this->Redirect($this->Request->hdnController, $this->Request->hdnAction);
            }
        }        
        $this->Request->previousController = $this->Request->hdnController;
        $this->Request->previousAction = $this->Request->hdnAction;
        $this->Redirect('User', 'Signin');
    }

}