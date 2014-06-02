<?php
/**
 * Project:  VFP Business Series
 * Copyright: 2014. VFP Business Solutions, LLC
 */

namespace Dandelion\MVC\Application\Controllers\User\Actions;

use Dandelion\MVC\Core\Action;

require_once MVC_DIR_CORE . DIRECTORY_SEPARATOR . 'Action.php';

/**
 * VFP Business Series User Sing in Post Action
 * @name Index_Post
 */
class Singin_Post extends Action{

    /**
     * Verify user and password and redirect to previous page if access granted. 
     * Returns to Sing in form otherwise.
     */
    public function Execute()
    {
        // SELECT * FROM sysuser WHERE USERNAME = 'ADMIN'
        $user = $this->controller->FvpDataUnitOfWork->SysuserRepository->Get("WHERE USERNAME = '".$this->Request->txtUsername."'");
        
        if ($user) {
            $userPass = trim($user[0]->getUserpass());
            $formUserPass = $this->Request->txtPassword;

            if($userPass === $formUserPass){
                $_SESSION['username'] = $this->Request->txtUsername;
                $this->Redirect($this->Request->hdnController, $this->Request->hdnAction);
            }
        }
        
        $this->Request->previousController = $this->Request->hdnController;
        $this->Request->previousAction = $this->Request->hdnAction;
        $this->Redirect('User', 'Singin');
    }

}