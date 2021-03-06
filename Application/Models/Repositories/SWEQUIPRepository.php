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
            $result []= new SWEQUIP(trim($row->EQUIPID), trim($row->DESCRIP), trim($row->ITEMNO), trim($row->MODEL), trim($row->MAN_CODE), trim($row->VENDNO), trim($row->SERIALNO), trim($row->NOTES), trim($row->SRVAGRENO), trim($row->INSTALLDTE), trim($row->WARRANTDTE), trim($row->PRTYPCODE), trim($row->CUSTNO), trim($row->SHIPTONO), trim($row->NFLG0), trim($row->MANWAREXP), trim($row->CUSTWAREXP), trim($row->MAKE), trim($row->FUPDTIME), trim($row->FUPDDATE), trim($row->FSTATION), trim($row->FUSERID), trim($row->WARRANTY), trim($row->QBLISTID), trim($row->TOOLBOXID), trim($row->ORDNUM), trim($row->EXPDTEIN), trim($row->DATEREC), trim($row->STATUS), trim($row->ORDER), trim($row->ASSETTAG), trim($row->VOLTAGE), trim($row->EQUIPTYPE), trim($row->EQUIPIMAGE), trim($row->AssetDesc), trim($row->Locno), trim($row->VESSELID));
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
            $result []= new SWEQUIP(trim($row->EQUIPID), trim($row->DESCRIP), trim($row->ITEMNO), trim($row->MODEL), trim($row->MAN_CODE), trim($row->VENDNO), trim($row->SERIALNO), trim($row->NOTES), trim($row->SRVAGRENO), trim($row->INSTALLDTE), trim($row->WARRANTDTE), trim($row->PRTYPCODE), trim($row->CUSTNO), trim($row->SHIPTONO), trim($row->NFLG0), trim($row->MANWAREXP), trim($row->CUSTWAREXP), trim($row->MAKE), trim($row->FUPDTIME), trim($row->FUPDDATE), trim($row->FSTATION), trim($row->FUSERID), trim($row->WARRANTY), trim($row->QBLISTID), trim($row->TOOLBOXID), trim($row->ORDNUM), trim($row->EXPDTEIN), trim($row->DATEREC), trim($row->STATUS), trim($row->ORDER), trim($row->ASSETTAG), trim($row->VOLTAGE), trim($row->EQUIPTYPE), trim($row->EQUIPIMAGE), trim($row->AssetDesc), trim($row->Locno), trim($row->VESSELID));
        }

        return $result;
    }

    public function GetByEquipid($equipid)
    {
        $tableName = $this->getEntityWhitCompanySuffix();
        $equipid = strtolower($equipid);
        $predicate = "WHERE LOWER([EQUIPID]) = '$equipid'";
        $sqlString = "SELECT * FROM $tableName";
        $sqlString .= ' ' . $predicate;

        $query = $this->dbDriver->GetQuery();
        $queryResult = $query->Execute($sqlString);
        $result = array();

        foreach($queryResult as $row){
            $result []= new SWEQUIP(trim($row->EQUIPID), trim($row->DESCRIP), trim($row->ITEMNO), trim($row->MODEL), trim($row->MAN_CODE), trim($row->VENDNO), trim($row->SERIALNO), trim($row->NOTES), trim($row->SRVAGRENO), trim($row->INSTALLDTE), trim($row->WARRANTDTE), trim($row->PRTYPCODE), trim($row->CUSTNO), trim($row->SHIPTONO), trim($row->NFLG0), trim($row->MANWAREXP), trim($row->CUSTWAREXP), trim($row->MAKE), trim($row->FUPDTIME), trim($row->FUPDDATE), trim($row->FSTATION), trim($row->FUSERID), trim($row->WARRANTY), trim($row->QBLISTID), trim($row->TOOLBOXID), trim($row->ORDNUM), trim($row->EXPDTEIN), trim($row->DATEREC), trim($row->STATUS), trim($row->ORDER), trim($row->ASSETTAG), trim($row->VOLTAGE), trim($row->EQUIPTYPE), trim($row->EQUIPIMAGE), trim($row->AssetDesc), trim($row->Locno), trim($row->VESSELID));
        }

        return $result[0];
    }

    public function UpdateWorkOrderFor($equipid, $workorder, $status, $qbtxlineid){
        $tableName = $this->entityName . $this->companySuffix;
        $equipid = strtolower($equipid);
        $sqlString = "UPDATE $tableName  SET [ORDNUM] = '$workorder', [STATUS] = '$status', [QBTXLINEID] = '$qbtxlineid' WHERE LOWER([EQUIPID]) = '$equipid'";
        $query = $this->dbDriver->GetQuery();
        return $query->Execute($sqlString);
    }

    public function UpdateVesselFor($equipid, $vesselid){
        $tableName = $this->entityName . $this->companySuffix;
        $equipid = strtolower($equipid);
        $sqlString = "UPDATE $tableName  SET [VESSELID] = '$vesselid' WHERE LOWER([EQUIPID]) = '$equipid'";
        $query = $this->dbDriver->GetQuery();
        return $query->Execute($sqlString);
    }

    /**
     * Update Equip Dates
     * @param $equipid
     * @param $installdte
     * @param $expdtein
     * @param $daterec
     * @return mixed
     */
    public function UpdateDates($equipid, $installdte, $expdtein, $daterec){
        $tableName = $this->entityName . $this->companySuffix;
        $equipid = strtolower($equipid);
        $installdte = $installdte === '' ? 'NULL' : "'$installdte'";
        $expdtein = $expdtein === '' ? 'NULL' : "'$expdtein'";
        $daterec = $daterec === '' ? 'NULL' : "'$daterec'";
        $sqlString = "UPDATE $tableName  SET [INSTALLDTE] = $installdte, [EXPDTEIN] = $expdtein, [DATEREC] = $daterec WHERE LOWER([EQUIPID]) = '$equipid'";
        $query = $this->dbDriver->GetQuery();
        return $query->Execute($sqlString);
    }

    public function UpdateNotes($equipid, $notes){
        $tableName = $this->getEntityWhitCompanySuffix();
        $equipid = strtolower($equipid);

        $sqlString = "UPDATE $tableName SET [NOTES] = '$notes' WHERE LOWER([EQUIPID]) = '$equipid'";
        $query = $this->dbDriver->GetQuery();
        return $query->Execute($sqlString);
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

    /**
     * @param string $equipid
     * @param string $status
     * @return mixed
     */
    public function UpdateStatus($equipid, $status) {
        $tableName = $this->entityName . $this->companySuffix;

        $sqlString = "UPDATE $tableName SET " .
            "[STATUS] = '$status' " .
            "WHERE equipid = '$equipid'";

        $query = $this->dbDriver->GetQuery();
        return $query->Execute($sqlString);
    }

    public function RemoveLastHistoryReference($equipid) {
        $tableName = $this->getEntityWhitCompanySuffix();

        $sqlString = "UPDATE $tableName SET " .
            "[QBTXLINEID] = '' " .
            "WHERE [EQUIPID] = '$equipid'";

        $query = $this->dbDriver->GetQuery();
        return $query->Execute($sqlString);
    }

    public function RemoveLastWorkOrder($equipid) {
        $tableName = $this->getEntityWhitCompanySuffix();

        $sqlString = "UPDATE $tableName SET " .
            "[ORDNUM] = '' " .
            "WHERE [EQUIPID] = '$equipid'";

        $query = $this->dbDriver->GetQuery();
        return $query->Execute($sqlString);
    }

    public function RemoveLastVesselid($equipid) {
        $tableName = $this->getEntityWhitCompanySuffix();

        $sqlString = "UPDATE $tableName SET " .
            "[VESSELID] = '' " .
            "WHERE [EQUIPID] = '$equipid'";

        $query = $this->dbDriver->GetQuery();
        return $query->Execute($sqlString);
    }

    public function UpdateHistoryId($equipmentId, $id){
        $tableName = $this->entityName . $this->companySuffix;

        $sqlString = "UPDATE $tableName SET " .
            "[qbtxlineid] = '$id' " .
            "WHERE [equipid] = '$equipmentId'";
        $query = $this->dbDriver->GetQuery();
        return $query->Execute($sqlString);
    }

    public function UpdateOrdNum($ordnum, $id){
        $tableName = $this->entityName . $this->companySuffix;

        $sqlString = "UPDATE $tableName SET " .
            "[ordnum] = '$ordnum' " .
            "WHERE [qbtxlineid] = '$id'";

        $query = $this->dbDriver->GetQuery();
        return $query->Execute($sqlString);
    }
}