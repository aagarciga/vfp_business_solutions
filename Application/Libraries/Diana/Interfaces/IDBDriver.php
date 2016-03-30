<?php
/**
 * User: Alex
 * Date: 5/22/14
 * Time: 10:57 AM
 */

namespace Dandelion\Diana\Interfaces;


use Dandelion\Diana\Query;

interface IDBDriver {
    function __construct($dbName, $host, $user, $password, $serverType, $debugMode = false);

    function GetConnection();

    /**
     * @return Query
     */
    function GetQuery();
} 