<?php

namespace Dandelion\MVC\Core;

use Dandelion\MVC\Core\Nomenclatures;
use Dandelion\MVC\Core\Exceptions;

//require_once MVC_DIR_CORE_INTERFACES . DIRECTORY_SEPARATOR . 'INameable.php';
//require_once MVC_DIR_CORE_INTERFACES . DIRECTORY_SEPARATOR . 'IDictionary.php';
//require_once MVC_DIR_CORE_NOMENCLATURES . DIRECTORY_SEPARATOR . 'RequestMethod.php';
//require_once MVC_DIR_CORE . DIRECTORY_SEPARATOR . 'Request.php';
//require_once MVC_DIR_CORE . DIRECTORY_SEPARATOR . 'View.php';

/**
 * Dandelion MVC parent of all application controllers actions.
 *
 * @author      Alex Alvarez Gárciga <aagarciga@gmail.com>
 * @copyright   2011-2013 Alex Alvarez Gárciga / Dandelion (http://www.thedandelionproject.com)
 * @license     http://www.opensource.org/licenses/mit-license.php MIT
 * @link        http://www.thedandelionproject.com
 * @ignore
 */
abstract class Action implements Interfaces\IDictionary, Interfaces\INameable {

    /**
     *
     * @var string 
     */
    private $name;

    /**
     * @var Array
     */
    private $data = array();

    /**
     * @var View
     */
    protected $view;
    
    /**
     * @var Request
     */
    public $Request;

    /**
     * @var ActionsController
     */
    protected $controller;


    /**
     * Constructor for Action object.
     * 
     * @param Request $request
     */
    public final function __construct(Request $request, ActionsController $controller) {
        $this->Request = $request;        
        $this->name = ucfirst($request->Action);
        if ($request->RequestMethod == Nomenclatures\RequestMethod::POST()) {
            $this->name .= '_Post';
        }
        $this->view = new View($this);
        $this->data['View'] = $this->view;
        $this->data['Controller'] = $request->Controller;
        $this->data['Action'] = $request->Action;
        $this->data['Application'] = $request->Application;
        $this->data['Request'] = $request;
        $this->controller = $controller;
    }

    /**
     * @ignore
     * @param mixed $key
     * @param mixed $value
     */
    public final function __set($key, $value) {
        $this->data[$key] = $value;
    }

    /**
     * @ignore
     * @param mixed $key
     * @throws Exceptions\PropertyNotFoundException
     * @return mixed
     */
    public final function __get($key) {
        if (array_key_exists($key, $this->data)) {
            return $this->data[$key];
        };
        throw new Exceptions\PropertyNotFoundException($this, $key);
    }

    /**
     * Return the Action's name.
     * 
     * @return string
     * @ignore
     */
    public function __toString() {
        return $this->name;
    }
    
    /**
     * 
     * 
     * @return Array
     */
    public function Data(){
        return $this->data;
    }

    public function PreAction() {}

    public abstract function Execute();

    public function PostAction() {}
       
    /**
     * 
     * 
     * @param string $controller Controller name
     * @param string $action Action name
     */
    public final function Redirect($controller, $action = 'index', $requestMethod = 'GET') {
        
        $this->Request->Controller = $controller;
        $this->Request->Action = $action;
        $this->Request->RequestMethod = $requestMethod;
        
        $controller = new FrontController();
        $controller->Redirect($this->Request);
        unset($controller);
    }

}

?>
