<?php

namespace Dandelion\MVC\Core;

require_once MVC_DIR_CORE_INTERFACES . DIRECTORY_SEPARATOR . 'INameable.php';
require_once MVC_DIR_CORE_INTERFACES . DIRECTORY_SEPARATOR . 'IDictionary.php';
require_once MVC_DIR_CORE . DIRECTORY_SEPARATOR . 'Request.php';
require_once MVC_DIR_CORE . DIRECTORY_SEPARATOR . 'View.php';

/**
 * Parent of all Dandelion MVC Application controllers actions.
 *
 * @author      Alex Alvarez Gárciga <aagarciga@gmail.com>
 * @copyright   2011-2013 Alex Alvarez Gárciga / Dandelion (http://www.thedandelionproject.com)
 * @license     http://www.opensource.org/licenses/mit-license.php MIT
 * @link        http://www.thedandelionproject.com
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
     * @var Request
     */
    protected $request;

    /**
     * @var View
     */
    protected $view;

    /**
     * Constructor for Action object.
     * 
     * @param Request $request
     */
    public function __construct(Request $request) {
        $this->request = $request;
        $this->name = ucfirst($request->action);
        $this->view = new View();
        $this->data['view'] = $this->view;
        $this->data['controller'] = $request->controller;
        $this->data['action'] = $request->action;
    }

    /**
     * @ignore
     * @param mixed $key
     * @param mixed $value
     */
    public function __set($key, $value) {
        $this->data[$key] = $value;
    }

    /**
     * @ignore
     * @param mixed $key
     * @return mixed
     */
    public function __get($key) {
        if (array_key_exists($key, $this->data)) {
            return $this->data[$key];
        };
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
     * Pre Action method.
     * @param \Dandelion\MVC\Core\Request $request
     */
    public function PreAction(Request $request) {
        
    }

    /**
     * 
     * @param \Dandelion\MVC\Core\Request $request
     */
    public abstract function Execute(Request $request);

    /**
     * 
     * @param \Dandelion\MVC\Core\Request $request
     */
    public function PostAction(Request $request) {
        
    }

    /**
     * 
     * @throws Exceptions\ViewNotFoundException
     */
    public function Render() {
        $controllerName = ucfirst($this->request->controller);
        
        $viewFile = MVC_DIR_APP_VIEWS . DIRECTORY_SEPARATOR . $controllerName . DIRECTORY_SEPARATOR . $this . '.View.php';

        
        if (is_file($viewFile)) {
            extract($this->data);
            include $viewFile;
        } else {
            if ($this->request->application->getState() == ApplicationState::Development()) {
                throw new Exceptions\ViewNotFoundException($this);
                //TODO: Debug error information 
            } else {
                header("Status: 404 Not Found");
            }
        }
    }

}

?>
