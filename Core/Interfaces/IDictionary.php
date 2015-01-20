<?php

namespace Dandelion\MVC\Core\Interfaces;

/**
 * IDictionary Interface
 * @ignore
 */
interface IDictionary {

    /**
     * @param string $key The key name to put in dictionary.
     * @param mixed $value  The value in content to put in dictionary.
     */
    public function __set($key, $value);

    /**
     * 
     * @param string $key The key in dictionary name. 
     * @return mixed The value in dictionary content.
     * @expectedException Dandelion\MVC\Core\Exceptions\PropertyNotFoundException
     */
    public function __get($key);
}