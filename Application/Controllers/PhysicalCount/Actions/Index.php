<?php
/**
 * Project:  VFP Business Series
 * Copyright: 2014. VFP Business Solutions, LLC
 */

namespace Dandelion\MVC\Application\Controllers\PhysicalCount\Actions;

use Dandelion\MVC\Core\Action;

/**
 * VFP Business Series Default Controller Action
 * @name Index
 */
class Index extends Action {

    /**
     * Default system page. Show Main menu.
     */
    public function Execute() {
        $this->Title = 'VFP Business Series - Warehouse Management System';
        
        $this->UserName = (!isset($_SESSION['username']))? 'Anonimous' : $_SESSION['username'];

    }

}

?>
