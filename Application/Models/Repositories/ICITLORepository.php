<?php

/**
 * Project:  VFP Business Series
 * Copyright: 2014. VFP Business Solutions, LLC
 */

namespace Dandelion\MVC\Application\Models\Repositories;

use Dandelion\Diana\Interfaces\IRepository;
use Dandelion\MVC\Application\Models\Entities\ICITLO;

class ICITLORepository extends VFPRepository implements IRepository {

    /**
     * @return array of all ICITLO objects from DB
     */
    public function GetAll() {
        $tableName = $this->entityName . $this->companySuffix;
        $sqlString = "SELECT * FROM $tableName";
        $query = $this->dbDriver->GetQuery();
        $queryResult = $query->Execute($sqlString);
        $result = array();

        foreach ($queryResult as $row) {
            //$result []= new ICITLO($row->ITEMNO, $row->ITMWHS, $row->LOCNO, $row->NFLG0, $row->ONHAND, $row->QTYPICK, $row->QTYSHPREL, $row->LOCALFSORT, $row->ZONE, $row->QBLISTID, $row->CASESINGLE);
            $result [] = new ICITLO(trim($row->ITEMNO), trim($row->ITMWHS), trim($row->LOCNO), trim($row->NFLG0), trim($row->ONHAND), trim($row->QTYPICK), trim($row->QTYSHPREL), trim($row->LOCALFSORT), trim($row->ZONE), trim($row->QBLISTID), trim($row->CASESINGLE));
        }

        return $result;
    }

    /**
     * @param string $predicate SQL Query Where clause
     * @return \Dandelion\MVC\Application\Models\Entities\ICITLO
     */
    public function Get($predicate) {
        $tableName = $this->entityName . $this->companySuffix;
        $sqlString = "SELECT * FROM $tableName";
        $sqlString .= ' ' . $predicate;
        $query = $this->dbDriver->GetQuery();
        $queryResult = $query->Execute($sqlString);
        $result = array();

        foreach ($queryResult as $row) {
            $result [] = new ICITLO(trim($row->ITEMNO), trim($row->ITMWHS), trim($row->LOCNO), trim($row->NFLG0), trim($row->ONHAND), trim($row->QTYPICK), trim($row->QTYSHPREL), trim($row->LOCALFSORT), trim($row->ZONE), trim($row->QBLISTID), trim($row->CASESINGLE));
            //$result []= new ICITLO($row->ITEMNO, $row->ITMWHS, $row->LOCNO, $row->NFLG0, $row->ONHAND, $row->QTYPICK, $row->QTYSHPREL, $row->LOCALFSORT, $row->ZONE, $row->QBLISTID, $row->CASESINGLE);
        }

        return $result;
    }

    /**
     * 
     * @param \Dandelion\MVC\Application\Models\Entities\ICITLO $entity
     * @return boolean
     */
    public function Add($entity) {
        $tableName = $this->entityName . $this->companySuffix;
        
        // Primary Key Set
        $itemno = $entity->getItemno();
        $locno = $entity->getLocno();
        $itmwhs = $entity->getItmwhs();
        
        $nflg0 = $entity->getNflg0()? "True" : "False";
        $onhand = $entity->getOnhand();
        $qtypick = $entity->getQtypick();
        $qtyshprel = $entity->getQtyshprel();
        $localfsort = $entity->getLocalfsort();
        $zone = $entity->getZone();
        $qblistid = $entity->getQblistid();
        $casesingle = $entity->getCasesingle();
        
        $sqlString = "Insert INTO $tableName (ITEMNO, ITMWHS, LOCNO, NFLG0, ONHAND, QTYPICK , QTYSHPREL, LOCALFSORT, ZONE, QBLISTID, CASESINGLE) ".
                "VALUES('$itemno', '$itmwhs', '$locno', $nflg0, $onhand, $qtypick, $qtyshprel, '$localfsort', '$zone', '$qblistid', '$casesingle')";
        $query = $this->dbDriver->GetQuery();
        return $query->Execute($sqlString);
    }

    /**
     * 
     * @param \Dandelion\MVC\Application\Models\Entities\ICITLO $entity
     * @return boolean
     */
    public function Update($entity) {
        $tableName = $this->entityName . $this->companySuffix;
        
        // Primary Key Set
        $itemno = $entity->getItemno();
        $locno = $entity->getLocno();
        $itmwhs = $entity->getItmwhs();
        
        $nflg0 = $entity->getNflg0();
        $onhand = $entity->getOnhand();
        $qtypick = $entity->getQtypick();
        $qtyshprel = $entity->getQtyshprel();
        $localfsort = $entity->getLocalfsort();
        $zone = $entity->getZone();
        $qblistid = $entity->getQblistid();
        $casesingle = $entity->getCasesingle();
        
        $sqlString = "UPDATE $tableName SET ".
                "NFLG0 = $nflg0 ,".
                "ONHAND = $onhand ,".
                "QTYPICK = $qtypick ,".
                "QTYSHPREL = $qtyshprel ,".
                "LOCALFSORT = '$localfsort' ,".
                "ZONE = '$zone' ,".
                "QBLISTID = '$qblistid' ,".
                "CASESINGLE = '$casesingle' ".
                "WHERE ITEMNO = '$itemno' AND ITMWHS = '$itmwhs' AND LOCNO = '$locno'";
        
        $query = $this->dbDriver->GetQuery();
        return $query->Execute($sqlString);
    }

    public function Delete($entity) {
        // TODO: Implement Delete() method.
    }
    
    public function GetByItemno($itemno) {
        $tableName = $this->entityName . $this->companySuffix;
        $sqlString = "SELECT * FROM $tableName";
        $sqlString .= " WHERE ITEMNO = '$itemno'";
        $query = $this->dbDriver->GetQuery();
        $queryResult = $query->Execute($sqlString);
        $result = array();

        foreach ($queryResult as $row) {
            $result [] = new ICITLO(trim($row->ITEMNO), trim($row->ITMWHS), trim($row->LOCNO), trim($row->NFLG0), trim($row->ONHAND), trim($row->QTYPICK), trim($row->QTYSHPREL), trim($row->LOCALFSORT), trim($row->ZONE), trim($row->QBLISTID), trim($row->CASESINGLE));
        }

        return $result;
    }
    
    /**
     * Get ICITLO by it's primary key columns (itemno, itmwhs, locno)
     * @param string $itemno
     * @param string $itmwhs
     * @param string $locno
     * @return \Dandelion\MVC\Application\Models\Entities\ICITLO, null otherwise
     */
    public function GetByPK($itemno, $itmwhs, $locno) {
        $lowerItemno = strtolower($itemno);
        $lowerItmwhs = strtolower($itmwhs);
        $lowerlocno = strtolower($locno);
        
        $tableName = $this->entityName . $this->companySuffix;
        $sqlString = "SELECT * FROM $tableName ";
        $sqlString .= "WHERE lower(ITEMNO) = '$lowerItemno' AND lower(ITMWHS) = '$lowerItmwhs' AND lower(LOCNO) = '$lowerlocno'";
        $query = $this->dbDriver->GetQuery();
        $queryResult = $query->Execute($sqlString);
        $result = null;

        if (count($queryResult)) {
            $row = $queryResult[0];
            $result = new ICITLO(trim($row->ITEMNO), trim($row->ITMWHS), trim($row->LOCNO), trim($row->NFLG0), trim($row->ONHAND), trim($row->QTYPICK), trim($row->QTYSHPREL), trim($row->LOCALFSORT), trim($row->ZONE), trim($row->QBLISTID), trim($row->CASESINGLE));
        }
            
        return $result;
    }

}
