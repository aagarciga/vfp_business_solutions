<?php
/**
 * @name AdvantageODBCDriver
 * @version 1.0
 * @access public
 * @author Alex Alvarez Gárciga
 * @copyright Copyright (C) 2014, Alex Alvarez Gárciga
 */

namespace Dandelion\Diana\Drivers\AdvantageODBC;


use Dandelion\Diana\Interfaces\IDBDriver;

class AdvantageODBCDriver implements IDBDriver {

    /**
     * @var
     */
    private $dbName;
    /**
     * @var
     */
    private $host;
    /**
     * @var
     */
    private $user;
    /**
     * @var
     */
    private $password;
    /**
     * @var string
     */
    private $serverType;
    /**
     * @var bool
     */
    private $debugMode;

    /**
     * @param string $dbName
     * @param string $host
     * @param string $user
     * @param string $password
     * @param string $serverType
     * @param bool   $debugMode
     */
    public final function __construct($dbName, $host, $user, $password, $serverType, $debugMode = false) {

        $this->dbName = $dbName;
        $this->host = $host;
        $this->user = $user;
        $this->password = $password;
        $this->serverType = strtolower($serverType);
        $this->debugMode = $debugMode;
    }

    public function GetQuery()
    {
        return new AdvantageODBCQuery($this->GetConnection());
    }

    public function GetConnection()
    {
        $connectionString = 'Driver={Advantage StreamlineSQL ODBC}'.
            ';AdvantageLocking=off'.
            ';DefaultType=FoxPro'.
            ';ServerTypes='. ($this->serverType == 'local' ? '1' : '2').
            ';MaxTableCloseCache=5'.
            ';Locking=Record'.
            ';DataDirectory='.$this->host.$this->dbName;

        return odbc_connect($connectionString, $this->user, $this->password);
    }
    
    public function Convert2($columnName, $dataType){
        return "CONVERT($columnName, $dataType)";
    }
    
    public function Convert2Integer($columnName){
        return "CONVERT($columnName, SQL_INTEGER)";
    }
    
    //SQL_BINARY, SQL_VARBINARY, SQL_BIT (logical), SQL_LONGVARCHAR, SQL_VARCHAR, SQL_CHAR, SQL_WLONGVARCHAR, SQL_WVARCHAR, SQL_WCHAR, SQL_DATE, SQL_DOUBLE, SQL_INTEGER, SQL_NUMERIC, SQL_TIME, SQL_TIMESTAMP, or SQL_MONEY

}