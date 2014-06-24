<?php
/**
 * @name UnitOfWork
 * @version 1.0
 * @access public
 * @author Alex Alvarez Gárciga
 * @copyright Copyright (C) 2014, Alex Alvarez Gárciga
 */

namespace Dandelion\Diana;

if (!defined('MVC_DIR_APP_MODELS_ENTITIES')) {
    define('MVC_DIR_APP_MODELS_ENTITIES', MVC_DIR_APP_MODELS . DIRECTORY_SEPARATOR . 'Entities');
}
if (!defined('MVC_DIR_APP_MODELS_ENTITIES_BASE')) {
    define('MVC_DIR_APP_MODELS_ENTITIES_BASE', MVC_DIR_APP_MODELS_ENTITIES . DIRECTORY_SEPARATOR . 'Base');
}
if (!defined('MVC_DIR_APP_MODELS_REPOSITORIES')) {
    define('MVC_DIR_APP_MODELS_REPOSITORIES', MVC_DIR_APP_MODELS . DIRECTORY_SEPARATOR . 'Repositories');
}

abstract class UnitOfWork {
    public function __construct() {
            spl_autoload_register(array($this, 'loader'));
        }
        
        private function loader($className) {
            $className = explode("\\", $className);
            $className = $className[count($className)-1];
            
            if (is_file(MVC_DIR_APP_MODELS_ENTITIES . DIRECTORY_SEPARATOR . $className . '.php'))
                require_once MVC_DIR_APP_MODELS_ENTITIES . DIRECTORY_SEPARATOR . $className . '.php';
            else if (is_file(MVC_DIR_APP_MODELS_ENTITIES_BASE . DIRECTORY_SEPARATOR . $className . '.php'))
                require_once MVC_DIR_APP_MODELS_ENTITIES_BASE . DIRECTORY_SEPARATOR . $className . '.php';
            else if (is_file(MVC_DIR_APP_MODELS_REPOSITORIES . DIRECTORY_SEPARATOR . $className . '.php'))
                require_once MVC_DIR_APP_MODELS_REPOSITORIES . DIRECTORY_SEPARATOR . $className . '.php';
        }

}
