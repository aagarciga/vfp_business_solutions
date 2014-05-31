<?php
/**
 * Project:  VFP Business Series
 * Copyright: 2014. VFP Business Solutions, LLC
 */

namespace Dandelion\MVC\Application\Models\Repositories;

use Dandelion\Diana\Interfaces\IDBDriver;

class BaseRepository {
    /**
     * @var
     */
    protected $dbDriver;

    /**
     * @var
     */
    protected $entityName;

    /**
     * @param IDBDriver $dbDriver
     * @param string    $entityName
     */
    public function __construct(IDBDriver $dbDriver, $entityName){

        $this->dbDriver = $dbDriver;
        $this->entityName = $entityName;
    }
} 