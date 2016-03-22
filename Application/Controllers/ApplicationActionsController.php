<?php
/**
 * Project:  VFP Business Series
 * Copyright: 2014. VFP Business Solutions, LLC
 */

namespace Dandelion\MVC\Application\Controllers;

use Dandelion\MVC\Core\ActionsController ;
use Dandelion\MVC\Application;
use Dandelion\MVC\Core\Request;

/**
 * VFP Business Series Dynamic Dat base actions controller
 * @name DatActionsController
 */
abstract class ApplicationActionsController extends ActionsController {


    /**
     * Controller initialization method
     * @param \Dandelion\MVC\Core\Request $request
     */
    protected function Init(Request $request)
    {
        ;
    }

    /**
     * Pre controller method
     * @param \Dandelion\MVC\Core\Request $request
     */
    protected function PreController(Request $request) {
        $this->CheckForAuthentication($request);
    }

    private function CheckForAuthentication(Request $request){

        // Determine if $_SESSION['username'] is set and is not NULL
        if(!isset($_SESSION['username'])){  // If NOT
            // Create new request for redirection
            $redirectionRequest = new Request('User', 'Signin', $request->Application);
            // Setting via magic method previous controller
            $redirectionRequest->previousController = $request->Controller;
            // Setting via magic method previous action
            $redirectionRequest->previousAction = $request->Action;
            $this->Redirect($redirectionRequest);
        }
    }

}