<?php
/**
 * @name QueryResult
 * @version 1.0
 * @access public
 * @author Alex Alvarez Gárciga
 * @copyright Copyright (C) 2011, Alex Alvarez Gárciga
 */

namespace Dandelion\Diana;


class QueryResult {
    private $_results = array();

    public function __construct(){}

    public function __set($var, $value){
        $this->_results[$var] = $value;
    }

    public function __get($var){
        return ( isset($this->_results[$var])) ? $this->_results[$var] : null;
    }
}