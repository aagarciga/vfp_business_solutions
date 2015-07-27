<?php
/**
 * Project:  VFP Business Series
 * Copyright: 2014. VFP Business Solutions, LLC
 */

namespace Dandelion\MVC\Application\Controllers\FinancialDashboard\Actions;

use Dandelion\MVC\Core\Action;

/**
 * VFP Business Series Financial Dashboard Controller Default Action
 * @name Index
 */
class Index extends Action {

    /**
     * Default Financial Dashboard page.
     */
    public function Execute() {
        $this->Title = 'Financial Dashboard | VFP Business Series';
        
        $this->UserName = (!isset($_SESSION['username']))? 'Anonimous' : $_SESSION['username'];
        $this->FullFeatures = (!isset($_SESSION['fullFeatures']))? false : $_SESSION['fullFeatures'];
    }

}

?>
