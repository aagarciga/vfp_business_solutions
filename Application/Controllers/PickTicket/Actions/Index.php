<?php
/**
 * Project:  VFP Business Series
 * Copyright: 2014. VFP Business Solutions, LLC
 */

namespace Dandelion\MVC\Application\Controllers\PickTicket\Actions;

use Dandelion\MVC\Core\Action;
use Dandelion\Diana\BootstrapPager;

/**
 * VFP Business Series PickTicket Default Controller Action
 * @name Index
 */


class Index extends Action {

    public function Execute() {
        $this->Title = 'Pick Ticket | VFP Business Series - Warehouse Management System';
        $this->JavascriptBootstrapPager = BootstrapPager::GetJavascriptBootstrapPager();
        
        $this->ShowLocationField = ($_SESSION['usercomp_uselocno'] && !$_SESSION['usercomp_wmslocpick'])? 'true' : 'false';
        // if false show finished tickets.
        $this->ShowFinishedTickets = ($_SESSION['usercomp_hhpickshow']) ? 'false' : 'true';
    }
}