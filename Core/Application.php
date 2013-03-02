<?php

namespace Dandelion\MVC\Core;

require_once MVC_DIR_CORE_INTERFACES . DIRECTORY_SEPARATOR . 'INameable.php';
require_once MVC_DIR_CORE . DIRECTORY_SEPARATOR . 'XmlConfigurationFile.php';

/**
 * Dandelion MVC application definition object for manage it's instance 
 * configuration data.
 *
 * @author      Alex Alvarez Gárciga <aagarciga@gmail.com>
 * @copyright   2011-2013 Alex Alvarez Gárciga / Dandelion (http://www.thedandelionproject.com)
 * @license     http://www.opensource.org/licenses/mit-license.php MIT
 * @link        http://www.thedandelionproject.com
 */
class Application {

    /**
     *
     * @var string
     */
    private $name;

    /**
     *
     * @var string
     */
    private $defaultController = 'default';

    /**
     *
     * @var string
     */
    private $defaultAction = 'index';

    /**
     *
     * @var string
     */
    private $dbManager;

    /**
     *
     * @var string
     */
    private $dbHost;

    /**
     *
     * @var string
     */
    private $dbUser;

    /**
     *
     * @var string
     */
    private $dbPassword;

    /**
     *
     * @var string
     */
    private $dbName;

    /**
     *
     * @var string
     */
    private $state;

    /**
     * 
     * @var Dandelion\Mvc\Core\XmlConfigurationFile
     */
    public $configuration;

    /**
     * 
     * @param string $configurationFile
     */
    public final function __construct($configurationFile = 'settings') {

        $this->configuration = new XmlConfigurationFile($configurationFile);
        $this->name = $this->configuration->Read('Name');
        $this->defaultController = $this->configuration->Read('DefaultController');
        $this->defaultAction = $this->configuration->Read('DefaultAction');

        $this->dbManager = $this->configuration->Read('DBManager');
        $this->dbHost = $this->configuration->Read('DBHost');
        $this->dbName = $this->configuration->Read('DBName');
        $this->dbUser = $this->configuration->Read('DBUser');
        $this->dbPassword = $this->configuration->Read('DBPassword');

        $this->state = $this->configuration->Read('State');
    }

    /**
     * Save in hard disk the application instance configuration data.
     * 
     * @return void
     */
    public final function Flush() {
        //TODO: Not yet implemented
    }

    /**
     * 
     * @param string $name
     */
    public function setName($name) {
        $this->name = $name;
    }

    /**
     * 
     * @return string
     */
    public function getName() {
        return $this->name;
    }

    /**
     * 
     * @param string $defaultController
     */
    public function setDefaultController($defaultController) {
        $this->defaultController = $defaultController;
    }

    /**
     * 
     * @return string
     */
    public function getDefaultController() {
        return $this->defaultController;
    }

    /**
     * 
     * @param string $defaultAction
     */
    public function setDefaultAction($defaultAction) {
        $this->defaultAction = $defaultAction;
    }

    /**
     * 
     * @return string
     */
    public function getDefaultAction() {
        return $this->defaultAction;
    }

    /**
     * 
     * @param string $dbManager
     */
    public function setDbManager($dbManager) {
        $this->dbManager = $dbManager;
    }

   /**
     * 
     * @return string
     */
    public function getDbManager() {
        return $this->dbManager;
    }

    /**
     * 
     * @param string $dbHost
     */
    public function setDbHost($dbHost) {
        $this->dbHost = $dbHost;
    }

    /**
     * 
     * @return string
     */
    public function getDbHost() {
        return $this->dbHost;
    }

    /**
     * 
     * @param string $dbUser
     */
    public function setDbUser($dbUser) {
        $this->dbUser = $dbUser;
    }

    /**
     * 
     * @return string
     */
    public function getDbUser() {
        return $this->dbUser;
    }

    /**
     * 
     * @param string $dbPassword
     */
    public function setDbPassword($dbPassword) {
        $this->dbPassword = $dbPassword;
    }

    /**
     * 
     * @return string
     */
    public function getDbPassword() {
        return $this->dbPassword;
    }

    /**
     * 
     * @param string $dbName
     */
    public function setDbName($dbName) {
        $this->dbName = $dbName;
    }

    /**
     * 
     * @return string
     */
    public function getDbName() {
        return $this->dbName;
    }

    /**
     * 
     * @param string $state
     */
    public function setState($state) {
        $this->state = $state;
    }

    /**
     * 
     * @return string
     */
    public function getState() {
        return $this->state;
    }

}

?>
