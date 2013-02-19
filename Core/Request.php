<?php

namespace Dandelion\MVC\Core;

require_once MVC_DIR_CORE_INTERFACES . DIRECTORY_SEPARATOR . 'IDictionary.php';

/**
 * Description of Request
 *
 * @author Alex Alvarez Gárciga
 */
class Request implements Interfaces\IDictionary {

    public $controller;
    public $action;
    private $properties = array();
    
    /**
     *
     * @var Core\Application
     */
    public $Application = null;
    
    /**
     *
     * @var Core\Nomenclatures\RequestMethod 
     */
    public $RequestMethod = null;

    /**
     * @ParamType controller string
     * @ParamType action string
     */
    public function __construct($controller, $action) {
        $this->controller = $controller;
        $this->action = $action;
    }

    /**
     * @ParamType key 
     * @ParamType value 
     */
    public function __set($key, $value) {
        $this->properties[$key] = $value;
    }

    /**
     * @ParamType key 
     */
    public function __get($key) {
        if (array_key_exists($key, $this->properties))
            return $this->properties[$key];
    }

}

?>
