<?php
/**
 * Project:  VFP Business Series
 * Copyright: 2014. VFP Business Solutions, LLC
 */

namespace Dandelion\MVC\Application\Controllers\Main\Actions;

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
        $this->Title = 'VFP Business Series';

        $currentCompany = $this->Request->Application->getCompany($_SESSION['usercomp']);
        if($currentCompany == ''){
            // Default Company Configuration
            $currentCompany = $this->Request->Application->getCompany();
        }
        $companyMenuEntries = $currentCompany->Menu->MenuEntry;
        foreach ($companyMenuEntries as $menuEntry) {
            error_log("Menu ENtry:  >>> ".$menuEntry['DisplayName']);
        }

        $this->UserName = (!isset($_SESSION['username']))? 'Anonimous' : $_SESSION['username'];
        $this->FullFeatures = (!isset($_SESSION['fullFeatures']))? false : $_SESSION['fullFeatures'];
        $this->ShowFiancialDashboard = (!isset($_SESSION['showFiancialDashboard']))? false : $_SESSION['showFiancialDashboard'];
    }

}

?>
