<?php

namespace Dandelion\MVC\Core;

require_once MVC_DIR_CORE_INTERFACES . DIRECTORY_SEPARATOR . 'INameable.php';
require_once MVC_DIR_CORE_INTERFACES . DIRECTORY_SEPARATOR . 'IDictionary.php';
require_once MVC_DIR_CORE . DIRECTORY_SEPARATOR . 'Request.php';
require_once MVC_DIR_CORE . DIRECTORY_SEPARATOR . 'View.php';

/**
 * Description of Action
 *
 * @author Alex
 */
abstract class Action implements Interfaces\IDictionary, Interfaces\INameable {

    /**
     * @AttributeType string
     */
    private $name;

    /**
     * @AttributeType Array
     */
    private $data = array();

    /**
     * @AssociationType Dandelion\Mvc\Core\Request
     */
    protected $request;

    /**
     * @AssociationType Dandelion\Mvc\Core\View
     */
    protected $view;

    /**
     *
     * @ParamType request Dandelion\Mvc\Core\Request
     */
    public function __construct($request) {
        $this->request = $request;
        $this->name = ucfirst($request->action);
        $this->view = new View();
        $this->data['view'] = $this->view;
        $this->data['controller'] = $request->controller;
        $this->data['action'] = $request->action;
    }

    public function __set($key, $value) {
        $this->data[$key] = $value;
    }

    public function __get($key) {
        if (array_key_exists($key, $this->data)) {
            return $this->data[$key];
        };
    }

    /**
     *
     * @ReturnType string
     */
    public function __toString() {
        return $this->name;
    }

    /**
     * @ParamType request Mvc.Core.Request
     */
    public function PreAction() {
        
    }

    /**
     * @ParamType request Mvc.Core.Request
     */
    public abstract function Execute();

    /**
     * @ParamType request Mvc.Core.Request
     */
    public function PostAction() {
        
    }

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
