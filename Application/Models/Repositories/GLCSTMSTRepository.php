<?php

/**
 * Project:  VFP Business Series
 * Copyright: 2014. VFP Business Solutions, LLC
 */

namespace Dandelion\MVC\Application\Models\Repositories;

use Dandelion\Diana\Interfaces\IRepository;
use Dandelion\MVC\Application\Models\Entities\GLCSTMST;

class GLCSTMSTRepository extends VFPRepository implements IRepository {

    /**
     * @return array of all GLCSTMST objects from DB
     */
    public function GetAll() {
        $tableName = $this->entityName . $this->companySuffix;
        $sqlString = "SELECT * FROM $tableName";
        $query = $this->dbDriver->GetQuery();
        $queryResult = $query->Execute($sqlString);
        $result = array();

        foreach ($queryResult as $row) {
            $result [] = new GLCSTMST(trim($row->CSTCTID), trim($row->DESCRIP), trim($row->ACTIVE), trim($row->CSTCATID), trim($row->NFLG0), trim($row->FUPDTIME), trim($row->FUPDDATE), trim($row->FUSERID), trim($row->FSTATION), trim($row->BANKACCT), trim($row->ZEROPRICE), trim($row->KEYWORD), trim($row->GLDEPT), trim($row->GLDEPTDESC), trim($row->WHSNO), trim($row->GLCOGSACCT), trim($row->GLSALEACCT), trim($row->GLARACCT), trim($row->GLAPACCT), trim($row->GLAPDISB), trim($row->BASECODE), trim($row->INTCOMPFLG), trim($row->QBCLASS), trim($row->QBLISTID), trim($row->CUSTNO), trim($row->COMPANY));
        }

        return $result;
    }

    /**
     * @param string $predicate SQL Query Where clause
     * @return \Dandelion\MVC\Application\Models\Entities\GLCSTMST
     */
    public function GetActives() {
        $tableName = $this->entityName . $this->companySuffix;
        $sqlString = "SELECT * FROM $tableName";
        $sqlString .= ' WHERE ACTIVE = True ORDER BY CSTCTID';
        $query = $this->dbDriver->GetQuery();
        $queryResult = $query->Execute($sqlString);
        $result = array();

        foreach ($queryResult as $row) {
            $result [] = new GLCSTMST(trim($row->CSTCTID), trim($row->DESCRIP), trim($row->ACTIVE), trim($row->CSTCATID), trim($row->NFLG0), trim($row->FUPDTIME), trim($row->FUPDDATE), trim($row->FUSERID), trim($row->FSTATION), trim($row->BANKACCT), trim($row->ZEROPRICE), trim($row->KEYWORD), trim($row->GLDEPT), trim($row->GLDEPTDESC), trim($row->WHSNO), trim($row->GLCOGSACCT), trim($row->GLSALEACCT), trim($row->GLARACCT), trim($row->GLAPACCT), trim($row->GLAPDISB), trim($row->BASECODE), trim($row->INTCOMPFLG), trim($row->QBCLASS), trim($row->QBLISTID), trim($row->CUSTNO), trim($row->COMPANY));
        }

        return $result;
    }
    
    public function Get($predicate) {
        $tableName = $this->entityName . $this->companySuffix;
        $sqlString = "SELECT * FROM $tableName";
        $sqlString .= ' ' . $predicate;
        $query = $this->dbDriver->GetQuery();
        $queryResult = $query->Execute($sqlString);
        $result = array();

        foreach ($queryResult as $row) {
            $result [] = new GLCSTMST(trim($row->CSTCTID), trim($row->DESCRIP), trim($row->ACTIVE), trim($row->CSTCATID), trim($row->NFLG0), trim($row->FUPDTIME), trim($row->FUPDDATE), trim($row->FUSERID), trim($row->FSTATION), trim($row->BANKACCT), trim($row->ZEROPRICE), trim($row->KEYWORD), trim($row->GLDEPT), trim($row->GLDEPTDESC), trim($row->WHSNO), trim($row->GLCOGSACCT), trim($row->GLSALEACCT), trim($row->GLARACCT), trim($row->GLAPACCT), trim($row->GLAPDISB), trim($row->BASECODE), trim($row->INTCOMPFLG), trim($row->QBCLASS), trim($row->QBLISTID), trim($row->CUSTNO), trim($row->COMPANY));
        }

        return $result;
    }

    public function Add($entity) {
        // TODO: Implement Add() method.
    }

    public function Update($entity) {
        // TODO: Implement Update() method.
    }

    public function Delete($entity) {
        // TODO: Implement Delete() method.
    }

}
