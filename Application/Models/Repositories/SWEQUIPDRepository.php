<?php

/**
 * Project:  VFP Business Series
 * Copyright: 2014. VFP Business Solutions, LLC
 */

namespace Dandelion\MVC\Application\Models\Repositories;

use Dandelion\Diana\Interfaces\IRepository;
use Dandelion\MVC\Application\Models\Entities\SWEQUIPD;

class SWEQUIPDRepository extends VFPRepository implements IRepository{

		/**
     * @return array of all SWEQUIPD objects from DB
     */
    public function GetAll()
    {
        $sqlString = "SELECT * FROM $this->entityName";
        $query = $this->dbDriver->GetQuery();
        $queryResult = $query->Execute($sqlString);
        $result = array();

        foreach($queryResult as $row){
            $result []= new SWEQUIPD(trim($row->EQUIPID), trim($row->ORDNUM), trim($row->INSPECTNO), trim($row->INSTALLDTE), trim($row->EXPDTEIN), trim($row->DATEREC), trim($row->FUPDTIME), trim($row->FUPDDATE), trim($row->FSTATION), trim($row->FUSERID), trim($row->QBLISTID), trim($row->QBTXLINEID), trim($row->NFLG0));
        }

        return $result;
    }

		/**
     * @param string $predicate SQL Query Where clause
     * @return \Dandelion\MVC\Application\Models\Entities\SWEQUIPD
     */
    public function Get($predicate)
    {
        $entityName = $this->getEntityWhitCompanySuffix();
        $sqlString = "SELECT * FROM $entityName";
        $sqlString .= ' ' . $predicate;
        $query = $this->dbDriver->GetQuery();
        $queryResult = $query->Execute($sqlString);
        $result = array();

        foreach($queryResult as $row){
            $result []= new SWEQUIPD(trim($row->EQUIPID), trim($row->ORDNUM), trim($row->INSPECTNO), trim($row->INSTALLDTE), trim($row->EXPDTEIN), trim($row->DATEREC), trim($row->FUPDTIME), trim($row->FUPDDATE), trim($row->FSTATION), trim($row->FUSERID), trim($row->QBLISTID), trim($row->QBTXLINEID), trim($row->NFLG0));
        }

        return $result;
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

    public function UpdateWorkOrder($equipmentId, $workOrder){
        $tableName = $this->entityName . $this->companySuffix;

        $assing = $this->getSqlEqual('ordnum', $workOrder);
        $predicate = $this->getSqlEqual('equipid', $equipmentId);
        $sqlString = 'UPDATE ' . $tableName . ' SET ' . $assing . ' WHERE ' . $predicate;

        $query = $this->DatUnitOfWork->DBDriver->GetQuery();
        $query->Execute($sqlString);
    }
}