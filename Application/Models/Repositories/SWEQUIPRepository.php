<?php

/**
 * Project:  VFP Business Series
 * Copyright: 2014. VFP Business Solutions, LLC
 */

namespace Dandelion\MVC\Application\Models\Repositories;

use Dandelion\Diana\Interfaces\IRepository;
use Dandelion\MVC\Application\Models\Entities\SWEQUIP;

class SWEQUIPRepository extends VFPRepository implements IRepository {

		/**
     * @return array of all SWEQUIP objects from DB
     */
    public function GetAll()
    {
        $sqlString = "SELECT * FROM $this->entityName";
        $query = $this->dbDriver->GetQuery();
        $queryResult = $query->Execute($sqlString);
        $result = array();

        foreach($queryResult as $row){
            $result []= new SWEQUIP(trim($row->EQUIPID), trim($row->DESCRIP), trim($row->ITEMNO), trim($row->MODEL), trim($row->MAN_CODE), trim($row->VENDNO), trim($row->SERIALNO), trim($row->NOTES), trim($row->SRVAGRENO), trim($row->INSTALLDTE), trim($row->WARRANTDTE), trim($row->PRTYPCODE), trim($row->CUSTNO), trim($row->SHIPTONO), trim($row->NFLG0), trim($row->MANWAREXP), trim($row->CUSTWAREXP), trim($row->MAKE), trim($row->FUPDTIME), trim($row->FUPDDATE), trim($row->FSTATION), trim($row->FUSERID), trim($row->WARRANTY), trim($row->QBLISTID), trim($row->TOOLBOXID), trim($row->ORDNUM), trim($row->EXPDTEIN), trim($row->DATEREC), trim($row->STATUS), trim($row->ORDER), trim($row->ASSETTAG), trim($row->VOLTAGE), trim($row->EQUIPTYPE), trim($row->EQUIPIMAGE), trim($row->AssetDesc), trim($row->Locno));
        }

        return $result;
    }

		/**
     * @param string $predicate SQL Query Where clause
     * @return \Dandelion\MVC\Application\Models\Entities\SWEQUIP
     */
    public function Get($predicate)
    {
        $sqlString = "SELECT * FROM $this->entityName";
        $sqlString .= ' ' . $predicate;
        $query = $this->dbDriver->GetQuery();
        $queryResult = $query->Execute($sqlString);
        $result = array();

        foreach($queryResult as $row){
            $result []= new SWEQUIP(trim($row->EQUIPID), trim($row->DESCRIP), trim($row->ITEMNO), trim($row->MODEL), trim($row->MAN_CODE), trim($row->VENDNO), trim($row->SERIALNO), trim($row->NOTES), trim($row->SRVAGRENO), trim($row->INSTALLDTE), trim($row->WARRANTDTE), trim($row->PRTYPCODE), trim($row->CUSTNO), trim($row->SHIPTONO), trim($row->NFLG0), trim($row->MANWAREXP), trim($row->CUSTWAREXP), trim($row->MAKE), trim($row->FUPDTIME), trim($row->FUPDDATE), trim($row->FSTATION), trim($row->FUSERID), trim($row->WARRANTY), trim($row->QBLISTID), trim($row->TOOLBOXID), trim($row->ORDNUM), trim($row->EXPDTEIN), trim($row->DATEREC), trim($row->STATUS), trim($row->ORDER), trim($row->ASSETTAG), trim($row->VOLTAGE), trim($row->EQUIPTYPE), trim($row->EQUIPIMAGE), trim($row->AssetDesc), trim($row->Locno));
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

    public function UpdateStatus($equipid, $status) {
        $tableName = $this->entityName . $this->companySuffix;

        $sqlString = "UPDATE $tableName SET " .
            "STATUS = '$status' " .
            "WHERE equipid = '$equipid'";

        $query = $this->dbDriver->GetQuery();
        return $query->Execute($sqlString);
    }
}