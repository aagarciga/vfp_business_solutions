<?php

/**
 * Project:  VFP Business Series
 * Copyright: 2014. VFP Business Solutions, LLC
 */

namespace Dandelion\MVC\Application\Models\Repositories;

use Dandelion\Diana\Interfaces\IRepository;
use Dandelion\MVC\Application\Models\Entities\Syscomp;

class SyscompRepository extends BaseRepository implements IRepository {

    /**
     * @return array of Syscomp entities
     */
    public function GetAll() {
        $sqlString = "SELECT * FROM $this->entityName";
        $query = $this->dbDriver->GetQuery();
        $queryResult = $query->Execute($sqlString);
        $result = array();

        foreach ($queryResult as $row) {
            $result [] = new Syscomp($row->ACTCOMP, $row->COMPANY, $row->NFLG0, $row->QBSTATUS, $row->ADSSQLDBA, $row->DBPATH, $row->DBSVRTYPE, $row->DBUSER, $row->DBPASS);
        }

        return $result;
    }

    /**
     * 
     * @param string $predicate SQL Query Where clause
     * @return array
     */
    public function Get($predicate) {
        $sqlString = "SELECT * FROM $this->entityName";
        $sqlString .= ' ' . $predicate;
        $query = $this->dbDriver->GetQuery();
        $queryResult = $query->Execute($sqlString);
        $result = array();

        foreach ($queryResult as $row) {
            $result [] = new Syscomp($row->ACTCOMP, $row->COMPANY, $row->NFLG0, $row->QBSTATUS, $row->ADSSQLDBA, $row->DBPATH, $row->DBSVRTYPE, $row->DBUSER, $row->DBPASS);
        }

        return $result;
    }
    
    /**
     * 
     * @param string $actcmop
     * @return \Dandelion\MVC\Application\Models\Entities\Syscomp
     */
    public function GetByActcomp($actcmop) {
        $sqlString = "SELECT * FROM $this->entityName";
        $sqlString .= " WHERE ACTCOMP = '$actcmop'";
        $query = $this->dbDriver->GetQuery();
        $queryResult = $query->Execute($sqlString);
        $result = array();

        foreach ($queryResult as $row) {
            $result [] = new Syscomp($row->ACTCOMP, $row->COMPANY, $row->NFLG0, $row->QBSTATUS, $row->ADSSQLDBA, $row->DBPATH, $row->DBSVRTYPE, $row->DBUSER, $row->DBPASS);
        }

        return $result[0];
    }

    public function Add($entity) {
        // TODO: Implement Add() method.
    }

    public function Update($entity) {
        $actcomp = $entity->getActcomp();
        $company = $entity->getCompany();
        $nflg0 = $entity->getNflg0();
        $qbstatus = $entity->getQbstatus();
        $adssqldba = $entity->getAdssqldba();
        $dbpath = $entity->getDbpath();
        $dbsvrtype = $entity->getDbsvrtype();
        $dbuser = $entity->getDbuser();
        $dbpass = $entity->getDbpass();
        
        $sqlString = "UPDATE $this->entityName SET COMPANY = '$company', NFLG0 = $nflg0, QBSTATUS = $qbstatus, ADSSQLDBA = $adssqldba, DBPATH = '$dbpath', DBSVRTYPE = '$dbsvrtype', DBUSER = '$dbuser', DBPASS = '$dbpass'"
                . " WHERE ACTCOMP = '$actcomp'";
        
        $query = $this->dbDriver->GetQuery();
        return $query->Execute($sqlString);
    }

    public function Delete($entity) {
        // TODO: Implement Delete() method.
    }

}
