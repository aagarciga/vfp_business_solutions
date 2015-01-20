<?php

namespace Dandelion\MVC\Core\Nomenclatures;

/**
 * Description of ApplicationState 
 * @ignore
 */
class ApplicationState {

    static private $production = 'Production';
    static private $development = 'Development';

    static function Production() {
        return self::$production;
    }

    static function Development() {
        return self::$development;
    }

}