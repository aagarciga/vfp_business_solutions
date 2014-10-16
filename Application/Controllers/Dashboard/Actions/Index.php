<?php
/**
 * Project:  VFP Business Series
 * Copyright: 2014. VFP Business Solutions, LLC
 */

namespace Dandelion\MVC\Application\Controllers\Dashboard\Actions;

use Dandelion\MVC\Core\Action;

/**
 * VFP Business Series Dashboard Controller Action
 * @name Index
 */
class Index extends Action {

    /**
     * Default Dashboard page.
     */
    public function Execute() {
        $this->Title = 'Dashboard | VFP Business Series - Warehouse Management System';
        
        $this->UserName = (!isset($_SESSION['username']))? 'Anonimous' : $_SESSION['username'];
        
    }

}

?>
