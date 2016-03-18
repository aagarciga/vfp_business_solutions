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
//        error_log(print_r($this->Request, true));
//        error_log(print_r($this->Request->Application, true));





        $currentCompany = $this->Request->Application->getCompany($_SESSION['usercomp']);
        if($currentCompany == ''){
            // Default Company Configuration
            $currentCompany = $this->Request->Application->getCompany();
        }
        $companyMenuEntries = $currentCompany->Menu->MenuEntry;
        foreach ($companyMenuEntries as $menuEntry) {
            error_log("Menu ENtry:  >>> ".$menuEntry['DisplayName']);
        }


//        error_log("User Company >>> ". print_r($_SESSION['usercomp'], true));
//        error_log("COMPANY >>> ".print_r($currentCompany, true));
//        error_log("COMPANY Menu >>> ".print_r($currentCompany->Menu->MenuEntry, true));
//        error_log("COMPANY Menu >>> ".print_r(count($currentCompany->Menu->MenuEntry), true));

        $this->UserName = (!isset($_SESSION['username']))? 'Anonimous' : $_SESSION['username'];
        $this->FullFeatures = (!isset($_SESSION['fullFeatures']))? false : $_SESSION['fullFeatures'];
        $this->ShowFiancialDashboard = (!isset($_SESSION['showFiancialDashboard']))? false : $_SESSION['showFiancialDashboard'];
    }

}

?>
