<?php
/**
 * Created by PhpStorm.
 * User: Princesa
 * Date: 28/01/2016
 * Time: 19:51
 */

namespace Dandelion\MVC\Application\Tools;


use Dandelion\MVC\Core\Interfaces\Dandelion;
use Dandelion\MVC\Core\Interfaces\IDictionary;

abstract class Dictionary implements IDictionary
{
    protected $_dictionary;

    /**
     * Dictionary constructor.
     */
    public function __construct()
    {
        $this->_dictionary = array();
    }


    public function __set($key, $value)
    {
        $this->_dictionary[$key] = $value;
    }

    public function __get($key)
    {
        if (array_key_exists($key, $this->_dictionary)){
            return $this->_dictionary[$key];
        }
        return null;
    }

}