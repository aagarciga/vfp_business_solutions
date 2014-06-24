<?php

namespace Dandelion\MVC\Core;

use Dandelion\MVC\Core\Interfaces\INameable;

//require_once MVC_DIR_CORE_INTERFACES . DIRECTORY_SEPARATOR . 'INameable.php';

/**
 * Dandelion MVC application definition object for manage it's instance 
 * configuration data.
 *
 * @author      Alex Alvarez Gárciga <aagarciga@gmail.com>
 * @copyright   2011-2013 Alex Alvarez Gárciga / Dandelion (http://www.thedandelionproject.com)
 * @license     http://www.opensource.org/licenses/mit-license.php MIT
 * @link        http://www.thedandelionproject.com
 * @ignore
 */
class Application implements INameable {

    //TODO: Do Application multiple DB settings support.

    /**
     * 
     * @var \SimpleXMLElement
     */
    private $settings;

    /**
     *
     * @param string $settingsFile settings
     * @internal param string $configurationFile
     */
    public final function __construct($settingsFile = 'settings') {
        $xmlFilePath = MVC_DIR_APP_DATA . DIRECTORY_SEPARATOR . $settingsFile . '.xml';
        $this->settings = simplexml_load_file($xmlFilePath);
    }
    
    public function __toString() {
        
        return (string) $this->settings['Name'];
    }

    /**
     * Save in hard disk the application instance configuration data.
     *
     * @param string $settingsFile settings
     * @return void
     */
    public final function Flush($settingsFile = 'settings') {
        $xmlFilePath = MVC_DIR_APP_DATA . DIRECTORY_SEPARATOR . $settingsFile . '.xml';
        file_put_contents($xmlFilePath, $this->settings->asXML());
    }

    /**
     * 
     * @param string $name
     */
    public function setName($name) {
        $this->settings['Name'] = $name;
    }

    /**
     * 
     * @return string
     */
    public function getName() {
        return $this->settings['Name'];
    }

    /**
     * 
     * @param string $defaultController
     */
    public function setDefaultController($defaultController) {
        $this->settings['Controller'] = $defaultController;
    }

    /**
     * 
     * @return string
     */
    public function getDefaultController() {
        return $this->settings['Controller'];
    }

    /**
     * 
     * @param string $defaultAction
     */
    public function setDefaultAction($defaultAction) {
        $this->settings['Action'] = $defaultAction;
    }

    /**
     * 
     * @return string
     */
    public function getDefaultAction() {
        return $this->settings['Action'];
    }

    /**
     * 
     * @param string $dbManager
     */
    public function setDefaultDbManager($dbManager) {
        $this->settings->DB[0]['Manager'] = $dbManager;
    }

   /**
     * 
     * @return string
     */
    public function getDefaultDbManager() {
        return $this->settings->DB[0]['Manager'];
    }

    /**
     * 
     * @param string $dbHost
     */
    public function setDefaultDbHost($dbHost) {
        $this->settings->DB[0]['Host'] = $dbHost;
    }

    /**
     * 
     * @return string
     */
    public function getDefaultDbHost() {
        return $this->settings->DB[0]['Host'];
    }

    /**
     * 
     * @param string $dbUser
     */
    public function setDefaultDbUser($dbUser) {
        $this->settings->DB[0]['User'] = $dbUser;
    }

    /**
     * 
     * @return string
     */
    public function getDefaultDbUser() {
        return $this->settings->DB[0]['User'];
    }

    /**
     * 
     * @param string $dbPassword
     */
    public function setDefaultDbPassword($dbPassword) {
        $this->settings->DB[0]['Password'] = $dbPassword;
    }

    /**
     * 
     * @return string
     */
    public function getDefaultDbPassword() {
        return $this->settings->DB[0]['Password'];
    }

    /**
     * 
     * @param string $dbName
     */
    public function setDefaultDbName($dbName) {
        $this->settings->DB[0]['Name'] = $dbName;
    }

    /**
     * 
     * @return string
     */
    public function getDefaultDbName() {
        return $this->settings->DB[0]['Name'];
    }

    /**
     *
     * @return string
     */
    public function getDefaultDbServerType() {
        return isset($this->settings->DB[0]['ServerType'])? $this->settings->DB[0]['ServerType'] : 'Remote';
    }

    /**
     *
     * @param string $dbManager
     * @param int    $index
     */
    public function setDbManager($dbManager, $index = 0) {
        $this->settings->DB[$index]['Manager'] = $dbManager;
    }

    /**
     *
     * @param int $index
     * @return string
     */
    public function getDbManager($index = 0) {
        return $this->settings->DB[$index]['Manager'];
    }

    /**
     *
     * @param string $dbHost
     * @param int    $index
     */
    public function setDbHost($dbHost, $index = 0) {
        $this->settings->DB[$index]['Host'] = $dbHost;
    }

    /**
     *
     * @param int $index
     * @return string
     */
    public function getDbHost($index = 0) {
        return $this->settings->DB[$index]['Host'];
    }

    /**
     *
     * @param string $dbUser
     * @param int    $index
     */
    public function setDbUser($dbUser, $index = 0) {
        $this->settings->DB[$index]['User'] = $dbUser;
    }

    /**
     *
     * @param int $index
     * @return string
     */
    public function getDbUser($index = 0) {
        return $this->settings->DB[$index]['User'];
    }

    /**
     *
     * @param string $dbPassword
     * @param int    $index
     */
    public function setDbPassword($dbPassword, $index = 0) {
        $this->settings->DB[$index]['Password'] = $dbPassword;
    }

    /**
     *
     * @param int $index
     * @return string
     */
    public function getDbPassword($index = 0) {
        return $this->settings->DB[$index]['Password'];
    }

    /**
     *
     * @param string $dbName
     * @param int    $index
     */
    public function setDbName($dbName, $index = 0) {
        $this->settings->DB[$index]['Name'] = $dbName;
    }

    /**
     *
     * @param int $index
     * @return string
     */
    public function getDbName($index = 0) {
        return $this->settings->DB[$index]['Name'];
    }

    /**
     *
     * @param int $index
     * @return string
     */
    public function getDbServerType($index = 0) {
        return isset($this->settings->DB[$index]['ServerType'])? $this->settings->DB[0]['ServerType'] : 'Remote';
    }

    /**
     * 
     * @param string $state
     */
    public function setState($state) {
        $this->settings['State'] = $state;
    }

    /**
     * 
     * @return string
     */
    public function getState() {
        return $this->settings['State'];
    }

    /**
     * @return \SimpleXMLElement[]
     */
    public function getDBSettingsCollection(){
        return $this->settings->DB;
    }

}

?>
