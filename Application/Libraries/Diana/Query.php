<?php
/**
 * @name Query
 * @version 1.0
 * @access public
 * @author Alex Alvarez Gárciga
 * @copyright Copyright (C) 2014, Alex Alvarez Gárciga
 */

namespace Dandelion\Diana;

abstract class Query {

    /**
     * @var Connection
     */
    protected $connection;

    public function __construct($connection){
        $this->connection = $connection;
    }

    abstract function Execute($sqlString);
} 