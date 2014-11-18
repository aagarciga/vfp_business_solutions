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
            $result [] = new SYSEXPORT(trim($row->EXPORTID), trim($row->DESCRIP), trim($row->EXPFIELDS), trim($row->EXPFROM), trim($row->EXPFILTER), trim($row->EXPLINK), trim($row->EXPORDERBY), trim($row->FUSERID));
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
            $result [] = new SYSEXPORT(trim($row->EXPORTID), trim($row->DESCRIP), trim($row->EXPFIELDS), trim($row->EXPFROM), trim($row->EXPFILTER), trim($row->EXPLINK), trim($row->EXPORDERBY), trim($row->FUSERID));
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
        
        $sqlString = "INSERT INTO $this->entityName"
            . " (EXPORTID, DESCRIP, EXPFIELDS, EXPFILTER, EXPFROM, EXPLINK, EXPORDERBY, FUSERID)"
            . " VALUES('$exportid', '$descrip', '$expfields', '$expfilter', '$expfrom', '$explink', '$exporderby', '$fuserid');";
        
        $query = $this->dbDriver->GetQuery();
        
        return $query->Execute($sqlString);
        
//        if ($query->Execute($sqlString)) {
//            return $entity; //Return the Entity Object with the Export id setted
//        }
//        return false;
        
//        INSERT INTO SYSEXPORT (EXPORTID, DESCRIP, EXPFIELDS, EXPFILTER, EXPFROM, EXPLINK, EXPORDERBY, FUSERID)
//        VALUES( NEWIDSTRING(D), 'Test GUID', '$expfields', '$expfilter', '$expfrom', '$explink', '$exporderby', '$fuserid')

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
        
        $sqlString = "UPDATE $this->entityName SET DESCRIP = '$descrip', EXPFIELDS = $expfields, EXPFILTER = $expfilter, EXPFROM = $expfrom, EXPLINK = '$explink', EXPORDERBY = '$exporderby', FUSERID = '$fuserid'"
                    . " WHERE EXPORTID = '$exportid'";
        
        $query = $this->dbDriver->GetQuery();
        return $query->Execute($sqlString);
        
    }

    public function Delete($entity) {
        // TODO: Implement Delete() method.
    }

}
