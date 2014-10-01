<?php
/**
 * @name AdvantageODBCQuery
 * @version 1.0
 * @access public
 * @author Alex Alvarez Gárciga
 * @copyright Copyright (C) 2014, Alex Alvarez Gárciga
 */

namespace Dandelion\Diana\Drivers\AdvantageODBC;

use Dandelion\Diana\Query;
use Dandelion\Diana\QueryResult;

class AdvantageODBCQuery extends Query {

    function Execute($sqlString)
    {
        $resource = odbc_exec($this->connection, $sqlString);

        if($resource)
        {
            if (strpos($sqlString, 'SELECT') === false)
            {
                return true;
            }
            else
            {
                if (strpos($sqlString, 'SELECT') === false)
                {
                    return false;
                }
                else
                {
                    $results = array();
                    while($row = @odbc_fetch_array($resource))
                    {
                        $queryResult = new QueryResult();
                        foreach ($row as $key => $value){
                            $queryResult->$key = $value;
                        }
                        $results[] = $queryResult;
                    }
                    @odbc_free_result($resource);
                    return $results;
                }
            }
        }

    }
    
    function ExecutePaged($sqlString, $itemsPerPage, $offset){
        $search = "select";
        // The ADS SQL Dialect way
        $replace = "SELECT TOP $itemsPerPage START AT $offset";
        $sqlString = str_ireplace($search, $replace, $sqlString);
        
        return $this->Execute($sqlString);
    }
}
