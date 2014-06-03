<?php
/**
 * Project:  VFP Business Series
 * Copyright: 2014. VFP Business Solutions, LLC
 */

namespace Dandelion\MVC\Application\Controllers\User\Actions;

use Dandelion\MVC\Core\Action;

require_once MVC_DIR_CORE . DIRECTORY_SEPARATOR . 'Action.php';

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
        $user = $this->controller->FvpDataUnitOfWork->SysuserRepository->Get("WHERE USERNAME = '".$this->Request->txtUsername."'");
        if ($user) {
            if(trim($user[0]->getUserpass()) === $this->Request->txtPassword){
                $_SESSION['username'] = $this->Request->txtUsername;
                $this->Redirect($this->Request->hdnController, $this->Request->hdnAction);
            }
        }        
        $this->Request->previousController = $this->Request->hdnController;
        $this->Request->previousAction = $this->Request->hdnAction;
        $this->Redirect('User', 'Signin');
    }

}