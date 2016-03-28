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
        $this->UserName = (!isset($_SESSION['username']))? 'Anonimous' : $_SESSION['username'];
        $this->FullFeatures = (!isset($_SESSION['fullFeatures']))? false : $_SESSION['fullFeatures'];
        $this->ShowFiancialDashboard = (!isset($_SESSION['showFiancialDashboard']))? false : $_SESSION['showFiancialDashboard'];
        $this->HTMLMainPanelEntries = $this->getMainPanelEntries();
    }

    /**
     * Return the HTML LI collection of Main entries from
     * configuration settings.xml ready for put inside an HTML UL element.
     * @return string
     */
    private function getMainPanelEntries(){
        $result = "";
        $application = $this->Request->Application;
        $currentCompany = $application->getCompany($_SESSION['usercomp']);
        if($currentCompany == ''){
            // Default Company Configuration
            $currentCompany = $application->getCompany();
        }
        $companyMenuEntries = $currentCompany->Menu->MenuEntry;
        foreach ($companyMenuEntries as $menuEntry) {

            $entryHref = $this->view->Href($menuEntry['Controller'], $menuEntry['Action']);
            $entryClassName = $menuEntry['ClassName'];
            $entryDisplayName = $menuEntry['DisplayName'];

            if (isset($menuEntry['IdName'])){
                $entryIdName = $menuEntry['IdName'];
                $entryHTML = "<li id=\"$entryIdName\"><a href=\"$entryHref\" class=\"\" ><span class=\"$entryClassName\"></span><span class=\"main-panel-caption\">$entryDisplayName</span> </a></li>\r";
                // Visibility condition must correspond with session var name
                // If menu entry contain a visibility condition
                if(isset($menuEntry['VisibilityCondition'])){
                    $conditionName = lcfirst($menuEntry['VisibilityCondition']);
                    // Check visibility condition from session
                    if(isset($_SESSION[$conditionName])){
                        if($_SESSION[$conditionName]){
                            // And include in result for visualization
                            $result .= $entryHTML;
                        }
                    } else{
                        error_log("$conditionName not found in SESSION: ". print_r($_SESSION,true));
                    }
                } else{ // If menu entry NOT contain a visibility condition, just include in result for visualization
                    $result .= $entryHTML;
                }
            }
        }
        return $result;
    }
}

?>
