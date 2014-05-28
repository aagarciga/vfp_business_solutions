<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 24/05/14
 * Time: 11:19
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