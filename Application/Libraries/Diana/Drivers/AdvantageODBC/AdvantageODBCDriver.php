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

}