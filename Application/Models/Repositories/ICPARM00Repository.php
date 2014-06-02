<?php
/**
 * Project:  VFP Business Series
 * Copyright: 2014. VFP Business Solutions, LLC
 */

namespace Dandelion\MVC\Application\Models\Repositories;


use Dandelion\Diana\Interfaces\IRepository;
use Dandelion\MVC\Application\Models\Entities\ICPARM00;

/**
 * 
 */
class ICPARM00Repository extends BaseRepository implements IRepository {

    /**
     * Return All ICPARM00 elements
     * @return array of ICPARM00 objects
     */
    public function GetAll()
    {

        $sqlString = "SELECT * FROM $this->entityName";
        $query = $this->dbDriver->GetQuery();
        $queryResult = $query->Execute($sqlString);
        $result = array();

        foreach($queryResult as $row){
            $result []= new ICPARM00($row->ITEMNO, $row->DESCRIP);
        }

        return $result;
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