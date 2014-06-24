<?php
/**
 * Project:  VFP Business Series
 * Copyright: 2014. VFP Business Solutions, LLC
 */

namespace Dandelion\MVC\Application\Controllers\User\Actions;

use Dandelion\MVC\Core\Action;

/**
 * VFP Business Series User Sign in Action
 * @name Index
 */
class Signin extends Action {

    /**
     * Show Sign in Form
     */
    public function Execute()
    {
        session_unset();
        $this->Title = 'Sign In | VFP Business Series - Warehouse Management System';
        
        $this->PreviousController = (isset($this->Request->previousController)) 
                ? $this->Request->previousController 
                : $this->Request->Application->getDefaultController();
        $this->PreviousAction = (isset($this->Request->previousAction)) 
                ? $this->Request->previousAction 
                : $this->Request->Application->getDefaultAction();
    }
}