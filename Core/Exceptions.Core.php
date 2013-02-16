<?php

namespace Dandelion\MVC\Core\Exceptions{
    
    /**
     * 
     * EXCEPTIONS CORE DEFINITIONS
     */

    final class SystemExit extends Exception{}
    
    final class ClassNotFoundException extends Exception{
        public function __construct($className) {
            $message = "Dandelion MVC Core can't find " . $className . 
                    "in any of his commons locations";
            parent::__construct($message);
        }
    }
    
    final class ConfigurationNotChargedException extends Exception{
        public function __construct() {
            $message = "Configuration not charged".
            parent::__construct($message);
        }
    }    
}    
?>
