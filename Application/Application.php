<?php

namespace Dandelion\MVC\Application;

use Dandelion\MVC\Core;

/* Dandelion MVC application definition object for manage it's instance
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

    public function setDefaultDbManager($dbManager)
    {
        $this->setDBValue('Manager', $dbManager);
//        $this->settings->DB[0]['Manager'] = $dbManager;
    }

    /**
     *
     * @return string
     */
    public function getDefaultDbManager()
    {
        $this->getDBValue('Manager');
//        return $this->settings->DB[0]['Manager'];
    }

    /**
     *
     * @param string $dbHost
     */
    public function setDefaultDbHost($dbHost)
    {
        $this->setDBValue('Host', $dbHost);
//        $this->settings->DB[0]['Host'] = $dbHost;
    }

    /**
     *
     * @return string
     */
    public function getDefaultDbHost()
    {
        $this->getDBValue('Host');
//        return $this->settings->DB[0]['Host'];
    }

    /**
     *
     * @param string $dbUser
     */
    public function setDefaultDbUser($dbUser)
    {
        $this->setDBValue('User', $dbUser);
//        $this->settings->DB[0]['User'] = $dbUser;
    }

    /**
     *
     * @return string
     */
    public function getDefaultDbUser()
    {
        $this->getDBValue('User');
//        return $this->settings->DB[0]['User'];
    }

    /**
     *
     * @param string $dbPassword
     */
    public function setDefaultDbPassword($dbPassword)
    {
        $this->setDBValue('Password', $dbPassword);
//        $this->settings->DB[0]['Password'] = $dbPassword;
    }

    /**
     *
     * @return string
     */
    public function getDefaultDbPassword()
    {
        $this->getDBValue('Password');
//        return $this->settings->DB[0]['Password'];
    }

    /**
     *
     * @param string $dbName
     */
    public function setDefaultDbName($dbName)
    {
        $this->setDBValue('Name', $dbName);
//        $this->settings->DB[0]['Name'] = $dbName;
    }

    /**
     *
     * @return string
     */
    public function getDefaultDbName()
    {
        $this->getDBValue('Name');
//        return $this->settings->DB[0]['Name'];
    }

    /**
     *
     * @return string
     */
    public function getDefaultDbServerType()
    {
        $serverType = $this->getDBValue('Name');
        return $serverType == null ? 'Remote' : $serverType;
//        return isset($this->settings->DB[0]['ServerType']) ? $this->settings->DB[0]['ServerType'] : 'Remote';
    }

    /**
     *
     * @param string $dbManager
     * @param int $index
     */
    public function setDbManager($dbManager, $index = 0)
    {
        $this->settings->DB[$index]['Manager'] = $dbManager;
    }

    /**
     *
     * @param int $index
     * @return string
     */
    public function getDbManager($index = 0)
    {
        return $this->settings->DB[$index]['Manager'];
    }

    /**
     *
     * @param string $dbHost
     * @param int $index
     */
    public function setDbHost($dbHost, $index = 0)
    {
        $this->settings->DB[$index]['Host'] = $dbHost;
    }

    /**
     *
     * @param int $index
     * @return string
     */
    public function getDbHost($index = 0)
    {
        return $this->settings->DB[$index]['Host'];
    }

    /**
     *
     * @param string $dbUser
     * @param int $index
     */
    public function setDbUser($dbUser, $index = 0)
    {
        $this->settings->DB[$index]['User'] = $dbUser;
    }

    /**
     *
     * @param int $index
     * @return string
     */
    public function getDbUser($index = 0)
    {
        return $this->settings->DB[$index]['User'];
    }

    /**
     *
     * @param string $dbPassword
     * @param int $index
     */
    public function setDbPassword($dbPassword, $index = 0)
    {
        $this->settings->DB[$index]['Password'] = $dbPassword;
    }

    /**
     *
     * @param int $index
     * @return string
     */
    public function getDbPassword($index = 0)
    {
        return $this->settings->DB[$index]['Password'];
    }

    /**
     *
     * @param string $dbName
     * @param int $index
     */
    public function setDbName($dbName, $index = 0)
    {
        $this->settings->DB[$index]['Name'] = $dbName;
    }

    /**
     *
     * @param int $index
     * @return string
     */
    public function getDbName($index = 0)
    {
        return $this->settings->DB[$index]['Name'];
    }

    /**
     *
     * @param int $index
     * @return string
     */
    public function getDbServerType($index = 0)
    {
        return isset($this->settings->DB[$index]['ServerType']) ? $this->settings->DB[0]['ServerType'] : 'Remote';
    }

    /**
     *
     * @param string $state
     */
    public function setState($state)
    {
        $this->settings['State'] = $state;
    }

    /**
     *
     * @return string
     */
    public function getState()
    {
        return $this->settings['State'];
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
        return isset($this->settings->Pager['ItemsPerPage']) ? $this->settings->Pager['ItemsPerPage'] : 10;
    }

    public function setDefaultPagerItemsPerPage($value)
    {
        $this->settings->Pager['ItemsPerPage'] = $value;
    }

    public function getCompany($companyId="default"){
        $companiesXmlObject = self::getChildrenXmlObject($this->settings, "Company");
        return self::getXmlObjectByAttribute($companiesXmlObject, "id", $companyId);
    }

    public function getDefaultCompanyDashboardPredicate($dashboard="default", $predicateId="default"){
        $company = $this->getCompany();
        if (!is_null($company) && isset($company->Dashboard)){
            $dashboards = self::getChildrenXmlObject($company, "Dashboard");
            $dashboardXmlObject = self::getXmlObjectByAttribute($dashboards, "id", $dashboard);
            if (!is_null($dashboardXmlObject) && isset($dashboardXmlObject->Predicate)){
                $predicates = self::getChildrenXmlObject($dashboardXmlObject, "Predicate");
                $predicateXmlObject = self::getXmlObjectByAttribute($predicates, "id", $predicateId);
                return (string) $predicateXmlObject;
            }
        }
        return "";
    }
}