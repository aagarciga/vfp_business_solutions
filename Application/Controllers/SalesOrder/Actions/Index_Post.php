<?php
/**
 * Project:  VFP Business Series
 * Copyright: 2014. VFP Business Solutions, LLC
 */

namespace Dandelion\MVC\Application\Controllers\SalesOrder\Actions;

use Dandelion\MVC\Core\Action;

/**
 * VFP Business Series Dashboard Controller Action
 * @name Index
 */
class Index_Post extends Action {

    /**
     * Default Dashboard page.
     */
    public function Execute() {
        $this->Title = 'Sales Order | VFP Business Series - Warehouse Management System';
        
        $this->UserName = (!isset($_SESSION['username']))? 'Anonimous' : $_SESSION['username'];
        $this->ItemPerPage = (!isset($_SESSION['itemperpages']))? 10 : $_SESSION['itemperpages'];
        
        $this->SalesOrder = filter_input(INPUT_POST, 'salesorder');
        
    }

}

?>

