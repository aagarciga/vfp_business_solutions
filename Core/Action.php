<?php

namespace Dandelion\MVC\Core;

use Dandelion\MVC\Core\Nomenclatures;
use Dandelion\MVC\Core\Exceptions;

/**
 * Dandelion MVC parent of all application controllers actions.
 *
 * @author      Alex Alvarez Gárciga <aagarciga@gmail.com>
 * @copyright   2011-2016 Alex Alvarez Gárciga / Dandelion (http://www.thedandelionproject.com)
 * @license     http://www.opensource.org/licenses/mit-license.php MIT
 * @link        http://www.thedandelionproject.com
 * @ignore
 */
abstract class Action implements Interfaces\IDictionary, Interfaces\INameable
{

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
     * @var Session
     */
    public $Session;

    /**
     * @var Application
     */
    public $Application;

    /**
     * @var ActionsController
     */
    protected $controller;

    /**
     * Constructor for Action object.
     *
     * @param Request $request
     * @param ActionsController $controller
     */

    public final function __construct(Request $request, ActionsController $controller)
    {
        $this->Request = $request;
        $this->name = ucfirst($request->Action);
        if ($request->RequestMethod == Nomenclatures\RequestMethod::POST()) {
            $this->name .= '_Post';
        }
        $this->view = new View($this);
        $this->data['View'] = $this->view;
        // TODO: Change ControllerName instead Controller for correct String/Object differentiation and move assignation below
        $this->data['Controller'] = $request->Controller; //For Object Name?
        $this->data['Action'] = $request->Action;
        $this->data['Request'] = $request;
        $this->controller = $controller; // For Object Instance

        // Whit this way of assignation Actions Objects can be used in both actions and actions views
        $this->Session = $this->data['Session'] = $request->Session;
        $this->Application = $this->data['Application'] = $request->Application;
    }

    /**
     * @ignore
     * @param mixed $key
     * @param mixed $value
     */
    public final function __set($key, $value)
    {
        $this->data[$key] = $value;
    }

    /**
     * @ignore
     * @param mixed $key
     * @throws Exceptions\PropertyNotFoundException
     * @return mixed
     */
    public final function __get($key)
    {
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
    public function __toString()
    {
        return $this->name;
    }

    /**
     *
     *
     * @return Array
     */
    public function Data()
    {
        return $this->data;
    }

    public function PreAction()
    {
    }

    public abstract function Execute();

    public function PostAction()
    {
    }

    /**
     *
     *
     * @param string $controller Controller name
     * @param string $action Action name
     * @param string $requestMethod
     */
    public final function Redirect($controller, $action = 'index', $requestMethod = 'GET')
    {

        $this->Request->Controller = $controller;
        $this->Request->Action = $action;
        $this->Request->RequestMethod = $requestMethod;

        $controller = new FrontController();
        $controller->Redirect($this->Request);
        unset($controller);
    }

}
