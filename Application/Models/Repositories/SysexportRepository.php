<?php

/**
 * Project:  VFP Business Series
 * Copyright: 2014. VFP Business Solutions, LLC
 */

namespace Dandelion\MVC\Application\Models\Repositories;

use Dandelion\Diana\Interfaces\IRepository;
use Dandelion\MVC\Application\Models\Entities\SYSEXPORT;
//use Dandelion\GUIDGenerator;

class SysexportRepository extends BaseRepository implements IRepository {

    /**
     * @return array of all SYSEXPORT objects from DB
     */
    public function GetAll() {
        $sqlString = "SELECT * FROM $this->entityName";
        $query = $this->dbDriver->GetQuery();
        $queryResult = $query->Execute($sqlString);
        $result = array();

        foreach ($queryResult as $row) {
            $result [] = new SYSEXPORT(trim($row->EXPORTID), trim($row->DESCRIP), trim($row->EXPFIELDS), trim($row->EXPFROM), trim($row->EXPFILTER), trim($row->EXPLINK), trim($row->EXPORDERBY), trim($row->FUSERID), trim($row->FILTERID));
        }

        return $result;
    }

    /**
     * @param string $predicate SQL Query Where clause
     * @return \Dandelion\MVC\Application\Models\Entities\SYSEXPORT
     */
    public function Get($predicate) {
        $sqlString = "SELECT * FROM $this->entityName";
        $sqlString .= ' ' . $predicate;
        $query = $this->dbDriver->GetQuery();
        $queryResult = $query->Execute($sqlString);
        $result = array();

        foreach ($queryResult as $row) {
            $result [] = new SYSEXPORT(trim($row->EXPORTID), trim($row->DESCRIP), trim($row->EXPFIELDS), trim($row->EXPFROM), trim($row->EXPFILTER), trim($row->EXPLINK), trim($row->EXPORDERBY), trim($row->FUSERID), trim($row->FILTERID));
        }

        return $result;
    }
    
    /**
     * @param string $filterid
     * @return \Dandelion\MVC\Application\Models\Entities\SYSEXPORT
     */
    public function GetByFilterid($filterid) {
        $sqlString = "SELECT * FROM $this->entityName";
        $sqlString .= " WHERE FILTERID = '$filterid'";
        $query = $this->dbDriver->GetQuery();
        $queryResult = $query->Execute($sqlString);

        if (count($queryResult)) {
            $row = $queryResult[0];
            return new SYSEXPORT(trim($row->EXPORTID), trim($row->DESCRIP), trim($row->EXPFIELDS), trim($row->EXPFROM), trim($row->EXPFILTER), trim($row->EXPLINK), trim($row->EXPORDERBY), trim($row->FUSERID), trim($row->FILTERID));
        }
        return "";
    }
    
    /**
     * 
     * @param type $username
     * @param type $limit
     * @return \Dandelion\MVC\Application\Models\Entities\SYSEXPORT
     */
    public function GetSavedFiltersByUserName($username ,$limit = 10) {
        
        $countSqlString = "SELECT COUNT(*) AS LENGHT FROM $this->entityName";
        $countSqlString .= " WHERE FUSERID = '$username'";
        $countQuery = $this->dbDriver->GetQuery();
        $countQueryResult = $countQuery->Execute($countSqlString);
        $count = intval($countQueryResult[0]->LENGHT);
        
        $startAt = ($count < $limit)? 0 : $count - $limit + 1;     
        
        $sqlString = "SELECT TOP $limit START AT $startAt * FROM $this->entityName";
        $sqlString .= " WHERE FUSERID = '$username'";
        $query = $this->dbDriver->GetQuery();
        $queryResult = $query->Execute($sqlString);
        $result = array(); 
        
        foreach ($queryResult as $row) {
            $result [] = new SYSEXPORT(trim($row->EXPORTID), trim($row->DESCRIP), trim($row->EXPFIELDS), trim($row->EXPFROM), trim($row->EXPFILTER), trim($row->EXPLINK), trim($row->EXPORDERBY), trim($row->FUSERID), trim($row->FILTERID));
        }

        return $result;
    }

    public function Add($entity) {
        $exportid =  $entity->getExportid();
//        $exportid = GUIDGenerator::getGUID(); // In ADS Server can be used NEWIDSTRING(D)
//        $entity->setExportid($exportid);
        $descrip = $entity->getDescrip();
        $expfields = $entity->getExpfields();
        $expfilter = $entity->getExpfilter();
        $expfrom = $entity->getExpfrom();
        $explink = $entity->getExplink();
        $exporderby = $entity->getExporderby();
        $fuserid = $entity->getFuserid();
        $filterid = $entity->getFilterid();
        
        $sqlString = "INSERT INTO $this->entityName"
            . " (EXPORTID, DESCRIP, EXPFIELDS, EXPFILTER, EXPFROM, EXPLINK, EXPORDERBY, FUSERID, FILTERID)"
            . " VALUES('$exportid', '$descrip', '$expfields', '$expfilter', '$expfrom', '$explink', '$exporderby', '$fuserid', '$filterid');";
        
        $query = $this->dbDriver->GetQuery();
        
        return $query->Execute($sqlString);
    }

    public function Update($entity) {
        $exportid = $entity->getExportid();
        $descrip = $entity->getDescrip();
        $expfields = $entity->getExpfields();
        $expfilter = $entity->getExpfilter();
        $expfrom = $entity->getExpfrom();
        $explink = $entity->getExplink();
        $exporderby = $entity->getExporderby();
        $fuserid = $entity->getFuserid();
        $filterid = $entity->getFilterid();
        
        $sqlString = "UPDATE $this->entityName SET EXPORTID = '$exportid', DESCRIP = '$descrip', EXPFIELDS = $expfields, EXPFILTER = $expfilter, EXPFROM = $expfrom, EXPLINK = '$explink', EXPORDERBY = '$exporderby', FUSERID = '$fuserid'"
                    . " WHERE FILTERID = '$filterid'";
        
        $query = $this->dbDriver->GetQuery();
        return $query->Execute($sqlString);
        
    }

    public function Delete($entity) {
        // TODO: Implement Delete() method.
    }

}
