<?php
/**
 * Project:  VFP Business Series
 * Copyright: 2014. VFP Business Solutions, LLC
 */

namespace Dandelion\MVC\Application;

use Dandelion\MVC\Core;

/** Dandelion MVC application definition object for manage it's instance
 * configuration data.
 *
 * @author      Alex Alvarez Gárciga <aagarciga@gmail.com>
 * @copyright   2011-2016 Alex Alvarez Gárciga / Dandelion (http://www.thedandelionproject.com)
 * @license     http://www.opensource.org/licenses/mit-license.php MIT
 * @link        http://www.thedandelionproject.com
 * @ignore
 */
class Application extends Core\Application
{
    /**
     *
     * @param string $settingsFile settings
     * @internal param string $configurationFile
     */
    public function __construct($settingsFile = 'settings')
    {
        require_once MVC_DIR_APP_LOGIC . DIRECTORY_SEPARATOR . 'Constants.php';
        parent::__construct($settingsFile);
    }


    public function setDefaultDbManager($dbManager)
    {
        $this->setDBValue('Manager', $dbManager);
    }

    /**
     *
     * @return string
     */
    public function getDefaultDbManager()
    {
        return $this->getDBValue('Manager');
    }

    /**
     *
     * @param string $dbHost
     */
    public function setDefaultDbHost($dbHost)
    {
        $this->setDBValue('Host', $dbHost);
    }

    /**
     *
     * @return string
     */
    public function getDefaultDbHost()
    {
        return $this->getDBValue('Host');
    }

    /**
     *
     * @param string $dbUser
     */
    public function setDefaultDbUser($dbUser)
    {
        $this->setDBValue('User', $dbUser);
    }

    /**
     *
     * @return string
     */
    public function getDefaultDbUser()
    {
        return $this->getDBValue('User');
    }

    /**
     *
     * @param string $dbPassword
     */
    public function setDefaultDbPassword($dbPassword)
    {
        $this->setDBValue('Password', $dbPassword);
    }

    /**
     *
     * @return string
     */
    public function getDefaultDbPassword()
    {
        return $this->getDBValue('Password');
    }

    /**
     *
     * @param string $dbName
     */
    public function setDefaultDbName($dbName)
    {
        $this->setDBValue('Name', $dbName);
    }

    /**
     *
     * @return string
     */
    public function getDefaultDbName()
    {
        return $this->getDBValue('Name');
    }

    /**
     *
     * @return string
     */
    public function getDefaultDbServerType()
    {
        $serverType = $this->getDBValue('Name');
        return $serverType == null ? 'Remote' : $serverType;
    }

    /**
     *
     * @param string $dbManager
     * @param int $index
     */
    public function setDbManager($dbManager, $index = 0)
    {
        $this->setDBValue('Manager', $dbManager, $index);
    }

    /**
     *
     * @param int $index
     * @return string
     */
    public function getDbManager($index = 0)
    {
        return $this->getDBValue('Manager', $index);
    }

    /**
     *
     * @param string $dbHost
     * @param int $index
     */
    public function setDbHost($dbHost, $index = 0)
    {
        $this->setDBValue('Manager', $dbHost, $index);
    }

    /**
     *
     * @param int $index
     * @return string
     */
    public function getDbHost($index = 0)
    {
        return $this->getDBValue('Host', $index);
    }

    /**
     *
     * @param string $dbUser
     * @param int $index
     */
    public function setDbUser($dbUser, $index = 0)
    {
        $this->setDBValue('User', $dbUser, $index);
    }

    /**
     *
     * @param int $index
     * @return string
     */
    public function getDbUser($index = 0)
    {
        return $this->getDBValue('User', $index);
    }

    /**
     *
     * @param string $dbPassword
     * @param int $index
     */
    public function setDbPassword($dbPassword, $index = 0)
    {
        $this->setDBValue('Password', $dbPassword, $index);
    }

    /**
     *
     * @param int $index
     * @return string
     */
    public function getDbPassword($index = 0)
    {
        return $this->getDBValue('Password', $index);
    }

    /**
     *
     * @param string $dbName
     * @param int $index
     */
    public function setDbName($dbName, $index = 0)
    {
        $this->setDBValue('Name', $dbName, $index);
    }

    /**
     *
     * @param int $index
     * @return string
     */
    public function getDbName($index = 0)
    {
        return $this->getDBValue('Name', $index);
    }

    /**
     *
     * @param int $index
     * @return string
     */
    public function getDbServerType($index = 0)
    {
        $serverType = $this->getDBValue('Name', $index);
        return $serverType == null ? 'Remote' : $serverType;
    }

    /**
     *
     * @param string $state
     */
    public function setState($state)
    {
        $this->SetValue('State', $state);
    }

    /**
     *
     * @return string
     */
    public function getState()
    {
        return $this->GetValue('State');
    }

    /**
     *
     * @return \SimpleXMLElement[]
     */
    public function getDBSettingsCollection()
    {
        return $this->settings->DB;
    }

    public function getDefaultPagerItermsPerPage()
    {
        $pager = $this->GetValue('Pager');
        $itemsPerPage = $pager['ItemsPerPage'];
        $result = isset($itemsPerPage) ? $itemsPerPage : 10;
        return $result;
    }

    public function setDefaultPagerItemsPerPage($value)
    {
        $this->SetValueProperty('Pager', 'ItemsPerPage', $value);
//        $this->settings->Pager['ItemsPerPage'] = $value;
    }

    public function getCompany($companyId="default"){
        $companiesXmlObject = self::getChildrenXmlObject($this->settings, "Company");
        return self::getXmlObjectByAttribute($companiesXmlObject, "id", $companyId);
    }

    public function getDefaultCompanyDashboardPredicate($dashboard="default", $predicateId="default"){
        $company = $this->getCompany();
        if (!is_null($company) && isset($company->Controller)){
            $controllers = self::getChildrenXmlObject($company, "Controller");
            $dashboards = self::getXmlObjectsByAttribute($controllers, "type", "Dashboard");
            $dashboardXmlObject = self::getXmlObjectByAttribute($dashboards, "name", $dashboard);
            if (!is_null($dashboardXmlObject) && isset($dashboardXmlObject->Predicate)){
                $predicates = self::getChildrenXmlObject($dashboardXmlObject, "Predicate");
                $predicateXmlObject = self::getXmlObjectByAttribute($predicates, "id", $predicateId);
                return (string) $predicateXmlObject;
            }
        }
        return "";
    }

}