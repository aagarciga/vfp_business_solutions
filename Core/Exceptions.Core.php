<?php

namespace Dandelion\MVC\Core\Exceptions;

/**
 *
 * EXCEPTIONS CORE DEFINITIONS
 */

final class SystemExit extends \Exception
{

}

final class ClassNotFoundException extends \Exception
{

    /**
     *
     * @param string $className
     */
    public function __construct($className)
    {
        $this->message = "Dandelion MVC Core can't find " . $className . " in any of his commons locations";
        parent::__construct();
    }

}

final class ConfigurationNotChargedException extends \Exception
{

    public function __construct()
    {
        $this->message = 'Configuration not charged';
        parent::__construct();
    }

}

final class ControllerNotFoundException extends \Exception
{

    /**
     *
     * @param string $controller
     */
    public function __construct($controller)
    {
        $this->message = 'Controller: ' . $controller . ' not found.';
        parent::__construct();
    }

}

final class ActionNotFoundException extends \Exception
{

    /**
     *
     * @param string $action
     */
    public function __construct($action)
    {
        $this->message = 'Action: ' . $action . ' not found.';
        parent::__construct();
    }

}

final class ViewNotFoundException extends \Exception
{

    /**
     *
     * @param string $view
     */
    public function __construct($view)
    {
        $this->message = 'View: ' . $view . ' not found.';
        parent::__construct();
    }

}

final class PropertyNotFoundException extends \Exception
{

    /**
     * @param string $class
     * @param int $property
     */
    public function __construct($class, $property)
    {
        $this->message = "$class haven't a property named $property.";
        parent::__construct();
    }
}
