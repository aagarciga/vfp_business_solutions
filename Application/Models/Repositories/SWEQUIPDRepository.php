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
            $result []= new SWEQUIPD(trim($row->EQUIPID), trim($row->ORDNUM), trim($row->INSPECTNO), trim($row->INSTALLDTE), trim($row->EXPDTEIN), trim($row->DATEREC), trim($row->FUPDTIME), trim($row->FUPDDATE), trim($row->FSTATION), trim($row->FUSERID), trim($row->QBLISTID), trim($row->QBTXLINEID), trim($row->NFLG0), trim($row->VESSELID));
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
            $result []= new SWEQUIPD(trim($row->EQUIPID), trim($row->ORDNUM), trim($row->INSPECTNO), trim($row->INSTALLDTE), trim($row->EXPDTEIN), trim($row->DATEREC), trim($row->FUPDTIME), trim($row->FUPDDATE), trim($row->FSTATION), trim($row->FUSERID), trim($row->QBLISTID), trim($row->QBTXLINEID), trim($row->NFLG0), trim($row->VESSELID));
        }

        return $result;
    }

    /**
     * @param $qbtxlineid
     * @return \Dandelion\MVC\Application\Models\Entities\SWEQUIPD
     */
    public function GetByQbtxlineid($qbtxlineid)
    {

        $entityName = $this->getEntityWhitCompanySuffix();
        $sqlString = "SELECT * FROM $entityName";
        $sqlString .= " WHERE [QBTXLINEID] = '$qbtxlineid'";

        $query = $this->dbDriver->GetQuery();
        $queryResult = $query->Execute($sqlString);
        $result = array();

        foreach($queryResult as $row){
            $result []= new SWEQUIPD(trim($row->EQUIPID), trim($row->ORDNUM), trim($row->INSPECTNO), trim($row->INSTALLDTE), trim($row->EXPDTEIN), trim($row->DATEREC), trim($row->FUPDTIME), trim($row->FUPDDATE), trim($row->FSTATION), trim($row->FUSERID), trim($row->QBLISTID), trim($row->QBTXLINEID), trim($row->NFLG0), trim($row->VESSELID));
        }

        return $result[0];
    }

    /**
     * @param \Dandelion\MVC\Application\Models\Entities\SWEQUIPD $entity
     * @return mixed | bool
     */
    public function Add($entity)
    {
        $equipid = $entity->getEquipid();
        $ordnum = $entity->getOrdnum();
        $inspectno = $entity->getInspectno();
        $installdte = $entity->getInstalldte(); $installdte = $installdte === '' ? 'NULL' : "'$installdte'";
        $expdtein = $entity->getExpdtein(); $expdtein = $expdtein === '' ? 'NULL' : "'$expdtein'";
        $daterec = $entity->getDaterec(); $daterec = $daterec === '' ? 'NULL' : "'$daterec'";
        $fupdtime = $entity->getFupdtime();
        $fupddate = $entity->getFupddate();
        $fstation = $entity->getFstation();
        $fuserid = $entity->getFuserid();
        $qblistid = $entity->getQblistid();
        $qbtxlineid = $entity->getQbtxlineid();
        $nflg0 = $entity->getNflg0() ? "True" : "False";
        $vesselid = $entity->getVesselid();

        $tableName = $this->getEntityWhitCompanySuffix();
        $sqlString = 'INSERT INTO ' . $tableName
            . ' ([EQUIPID], [ORDNUM], [INSPECTNO], [INSTALLDTE], [EXPDTEIN], [DATEREC], [FUPDTIME], [FUPDDATE], [FSTATION], [FUSERID], [QBLISTID], [QBTXLINEID], [NFLG0], [VESSELID])'
            . " VALUES ('$equipid', '$ordnum', '$inspectno', $installdte, $expdtein, $daterec, '$fupdtime', '$fupddate', '$fstation', '$fuserid', '$qblistid', '$qbtxlineid', $nflg0, $vesselid)";
        $query = $this->dbDriver->GetQuery();
        return $query->Execute($sqlString);
    }

    public function Update($entity)
    {
        $equipid = $entity->getEquipid();
        $ordnum = $entity->getOrdnum();
        $inspectno = $entity->getInspectno();
        $installdte = $entity->getInstalldte(); $installdte = $installdte === '' ? 'NULL' : "'$installdte'";
        $expdtein = $entity->getExpdtein(); $expdtein = $expdtein === '' ? 'NULL' : "'$expdtein'";
        $daterec = $entity->getDaterec(); $daterec = $daterec === '' ? 'NULL' : "'$daterec'";
        $fupdtime = $entity->getFupdtime();
        $fupddate = $entity->getFupddate();
        $fstation = $entity->getFstation();
        $fuserid = $entity->getFuserid();
        $qblistid = $entity->getQblistid();
        $qbtxlineid = $entity->getQbtxlineid();
        $nflg0 = $entity->getNflg0() ? "True" : "False";
        $vesselid = $entity->getVesselid();

        $tableName = $this->getEntityWhitCompanySuffix();
        $sqlString = "UPDATE $tableName SET " .
            "[EQUIPID] = '$equipid', " .
            "[ORDNUM] = '$ordnum', " .
            "[INSPECTNO] = '$inspectno', " .
            "[INSTALLDTE] = $installdte, " .
            "[EXPDTEIN] = $expdtein, " .
            "[DATEREC] = $daterec, " .
            "[FUPDTIME] = '$fupdtime', " .
            "[FUPDDATE] = '$fupddate', " .
            "[FSTATION] = '$fstation', " .
            "[FUSERID] = '$fuserid', " .
            "[QBLISTID] = '$qblistid', " .
            "[NFLG0] = $nflg0 " .
            "[VESSELID] = $vesselid " .
            " WHERE [QBTXLINEID] = '$qbtxlineid'";
        $query = $this->dbDriver->GetQuery();
        return $query->Execute($sqlString);
    }

    /**
     * @param $entity
     * @return mixed
     */
    public function Delete($entity)
    {
        $tableName = $this->getEntityWhitCompanySuffix();
        $qbtxlineid = $entity->getQbtxlineid();
        $sqlString = "DELETE FROM $tableName WHERE [QBTXLINEID] = '$qbtxlineid'";
        $query = $this->dbDriver->GetQuery();
        return $query->Execute($sqlString);
    }

    /**
     * @param GUID $qbtxlineid
     * @return mixed
     */
    public function DeleteBy($qbtxlineid)
    {
        $tableName = $this->getEntityWhitCompanySuffix();
        $qbtxlineid = $qbtxlineid;
        $sqlString = "DELETE FROM $tableName WHERE [QBTXLINEID] = '$qbtxlineid'";
        $query = $this->dbDriver->GetQuery();

        return $query->Execute($sqlString);
    }

    public function UpdateWorkOrder($equipmentId, $workOrder){
        $tableName = $this->getEntityWhitCompanySuffix();

        $assing = '[ordnum] = \'' . $workOrder . '\'';
        $predicate = '[EQUIPID] = \'' . $equipmentId . '\'';
        $sqlString = 'UPDATE ' . $tableName . ' SET ' . $assing . ' WHERE ' . $predicate;
        $query = $this->dbDriver->GetQuery();
        return $query->Execute($sqlString);
    }
}