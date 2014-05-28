<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 24/05/14
 * Time: 11:10
 */

namespace Dandelion\MVC\Application\Models\Repositories;


use Dandelion\Diana\Interfaces\IRepository;

class ICPARM00Repository extends BaseRepository implements IRepository {

    public function GetAll($predicate = "")
    {
        // TODO: Check if $predicate is empty. If not empty, build $sqlString with WHERE clause

        $sqlString = "SELECT * FROM $this->entityName";
        $query = $this->dbDriver->GetQuery();

        return $query->Execute($sqlString);
    }

    public function Get($predicate)
    {
        // TODO: Implement Get() method.
    }

    public function Add($entity)
    {
        // TODO: Implement Add() method.
    }

    public function Update($entity)
    {
        // TODO: Implement Update() method.
    }

    public function Delete($entity)
    {
        // TODO: Implement Delete() method.
    }
}