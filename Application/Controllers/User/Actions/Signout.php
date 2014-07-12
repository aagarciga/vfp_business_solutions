<?php
/**
 * Project:  VFP Business Series
 * Copyright: 2014. VFP Business Solutions, LLC
 */

namespace Dandelion\MVC\Application\Controllers\User\Actions;

use Dandelion\MVC\Core\Action;

/**
 * VFP Business Series User Sign out Action
 * @name Index
 */
class Signout extends Action {

    /**
     * Show Sign out Action
     */
    public function Execute()
    {
        session_unset();
        $this->Redirect('User', 'Signin');

    }
}