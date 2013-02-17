<?php

namespace Dandelion\MVC\Core;

require_once MVC_DIR_CORE_INTERFACES . DIRECTORY_SEPARATOR . 'INameable.php';
require_once MVC_DIR_CORE . DIRECTORY_SEPARATOR . 'XmlConfigurationFile.php';

/**
 * Description of Settings
 *
 * @author Alex
 */
class Application {

    /**
     * @AttributeType string
     */
    private $name;

    /**
     * @AttributeType string
     */
    private $defaultController = 'default';

    /**
     * @AttributeType string
     */
    private $defaultAction = 'index';

    /**
     * @AttributeType string
     */
    private $dbManager;

    /**
     * @AttributeType string
     */
    private $dbHost;

    /**
     * @AttributeType string
     */
    private $dbUser;

    /**
     * @AttributeType string
     */
    private $dbPassword;

    /**
     * @AttributeType string
     */
    private $dbName;

    /**
     * @AttributeType string
     */
    private $state;

    /**
     * @AssociationType Dandelion\Mvc\Core\XmlConfigurationFile
     */
    public $configuration;

    /**
     * @ParamType configurationFile string
     */
    public function __construct($configurationFile = 'settings') {

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
     * @ReturnType void
     */
    public function Flush() {
        //TODO: Not yet implemented
    }

    /**
     * @ParamType name string
     */
    public function setName($name) {
        $this->name = $name;
    }

    /**
     * @ReturnType string
     */
    public function getName() {
        return $this->name;
    }

    /**
     * @ParamType defaultController string
     */
    public function setDefaultController($defaultController) {
        $this->defaultController = $defaultController;
    }

    /**
     * @ReturnType string
     */
    public function getDefaultController() {
        return $this->defaultController;
    }

    /**
     * @ParamType defaultAction string
     */
    public function setDefaultAction($defaultAction) {
        $this->defaultAction = $defaultAction;
    }

    /**
     * @ReturnType string
     */
    public function getDefaultAction() {
        return $this->defaultAction;
    }

    /**
     * @ParamType dbManager string
     */
    public function setDbManager($dbManager) {
        $this->dbManager = $dbManager;
    }

    /**
     * @ReturnType string
     */
    public function getDbManager() {
        return $this->dbManager;
    }

    /**
     * @ParamType dbHost string
     */
    public function setDbHost($dbHost) {
        $this->dbHost = $dbHost;
    }

    /**
     * @ReturnType string
     */
    public function getDbHost() {
        return $this->dbHost;
    }

    /**
     * @ParamType dbUser string
     */
    public function setDbUser($dbUser) {
        $this->dbUser = $dbUser;
    }

    /**
     * @ReturnType string
     */
    public function getDbUser() {
        return $this->dbUser;
    }

    /**
     * @ParamType dbPassword string
     */
    public function setDbPassword($dbPassword) {
        $this->dbPassword = $dbPassword;
    }

    /**
     * @ReturnType string
     */
    public function getDbPassword() {
        return $this->dbPassword;
    }

    /**
     * @ParamType dbName string
     */
    public function setDbName($dbName) {
        $this->dbName = $dbName;
    }

    /**
     * @ReturnType string
     */
    public function getDbName() {
        return $this->dbName;
    }

    /**
     * @ParamType state string
     */
    public function setState($state) {
        $this->state = $state;
    }

    /**
     * @ReturnType string
     */
    public function getState() {
        return $this->state;
    }

}

?>
