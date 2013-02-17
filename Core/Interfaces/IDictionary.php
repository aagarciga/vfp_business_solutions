<?php

namespace Dandelion\MVC\Core\Interfaces;

/**
 * IDictionary Interface
 */
interface IDictionary {

    /**
     * @ParamType key 
     * @ParamType value 
     */
    public function __set($key, $value);

    /**
     * @ParamType key 
     */
    public function __get($key);
}

?>