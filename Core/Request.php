<?php

namespace Dandelion\MVC\Core;

use Dandelion\MVC\Core\Interfaces;
use Dandelion\MVC\Core\Nomenclatures;

require_once MVC_DIR_CORE_INTERFACES . DIRECTORY_SEPARATOR . 'IDictionary.php';
require_once MVC_DIR_CORE_NOMENCLATURES . DIRECTORY_SEPARATOR . 'RequestMethod.php';

/**
 * Dandelion MVC request definition.
 *
 * @author      Alex Alvarez Gárciga <aagarciga@gmail.com>
 * @copyright   2011-2015 Alex Alvarez Gárciga / Dandelion (http://www.thedandelionproject.com)
 * @license     http://www.opensource.org/licenses/mit-license.php MIT
 * @link        http://www.thedandelionproject.com
 * @ignore
 */
class Request implements Interfaces\IDictionary {
    
    /**
     * Contains the controller name.
     * 
     * @var string 
     */
    public $Controller;
    
    /**
     * Contains the action name.
     * 
     * @var string
     */
    public $Action;
    
    /**
     *
     * @var array 
     */
    private $properties = array();
    
    /**
     * Contains the MVC Application instance.
     *
     * @var \Dandelion\MVC\Core\Application
     */
    public $Application;
    
    /**
     * Contains the request method type. These values can be obtained 
     * from Core\Nomenclatures\RequestMethod.
     * 
     * @var string
     */
    public $RequestMethod;

    /**
     *
     * @param string $controller
     * @param string $action
     * @param null $application
     * @param null $method
     */
    public final function __construct($controller, $action, $application = null, $method = null) {
        $this->Controller = $controller;
        $this->Action = $action;
        $this->Application = $application;
        $this->RequestMethod = $method;
    }

    /**
     * 
     * @param mixed $key
     * @param mixed $value
     * @ignore
     */
    public final function __set($key, $value) {
        $this->properties[$key] = $value;
    }

    /**
     *
     * @param mixed $key
     * @throws Exceptions\PropertyNotFoundException
     * @return mixed
     * @ignore
     */
    public final function __get($key) {
        if (array_key_exists($key, $this->properties))
            return $this->properties[$key];
        throw new Exceptions\PropertyNotFoundException($this, $key);
    }
    
    //TODO: Gets the collection of form variables that were sent by the client.
    function Form() {
        if ($this->RequestMethod == Nomenclatures\RequestMethod::POST()) {
            //...
        }
    }
    
}
