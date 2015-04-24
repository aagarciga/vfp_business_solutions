<?php

/**
 * Project:  VFP Business Series
 * Copyright: 2014. VFP Business Solutions, LLC
 */

namespace Dandelion\MVC\Application\Models\Repositories;

use Dandelion\Diana\Interfaces\IRepository;
use Dandelion\MVC\Application\Models\Entities\SWINSP;

class SWINSPRepository extends VFPRepository implements IRepository {

    /**
     * @return array of all SWINSP objects from DB
     */
    public function GetAll() {
        $tableName = $this->entityName . $this->companySuffix;
        $sqlString = "SELECT * FROM $tableName";
        $query = $this->dbDriver->GetQuery();
        $queryResult = $query->Execute($sqlString);
        $result = array();

        foreach ($queryResult as $row) {
            $result [] = new SWINSP(trim($row->INSPECTNO), trim($row->INSPECTNM), trim($row->NOTES), trim($row->NFLG0), trim($row->TRUCKCODE), trim($row->DTEHIRE), trim($row->DTERAISE), trim($row->LABORCODE), trim($row->PAYRATE), trim($row->ACTIVE), trim($row->WHSNO), trim($row->SCHEDULE), trim($row->INSURANCE), trim($row->DRIVERLIC), trim($row->WORKCOMP), trim($row->TECHEMAIL), trim($row->WOEMAILDEL), trim($row->PICTURE), trim($row->ITEMNOLAB), trim($row->ITEMNOTRV), trim($row->ITEMNOOFC), trim($row->ITEMNOSTD), trim($row->ITEMNOGEN), trim($row->PAYTRAVEL), trim($row->PAYOFFICE), trim($row->PAYSTANDB), trim($row->PAYGENERAL), trim($row->BILLTRAVEL), trim($row->BILLOFFICE), trim($row->BILLSTANDB), trim($row->BILLGENERL), trim($row->HUWTRAVEL), trim($row->HUWOFFICE), trim($row->HUWSTANDBY), trim($row->HUWGENERAL), trim($row->BILLRATE), trim($row->HUWRATE), trim($row->PASSPORTNO), trim($row->VENDNO), trim($row->VENDOR), trim($row->TECHDOB), trim($row->PPISSUE), trim($row->PPEXPIRE), trim($row->VISANO), trim($row->VSAISSUE), trim($row->VSAEXPIRE), trim($row->QBLISTID), trim($row->TECHIM));
        }

        return $result;
    }

    /**
     * @param string $predicate SQL Query Where clause
     * @return \Dandelion\MVC\Application\Models\Entities\SWINSP
     */
    public function GetActives() {
        $tableName = $this->entityName . $this->companySuffix;
        $sqlString = "SELECT * FROM $tableName";
        $sqlString .= ' WHERE ACTIVE = True AND TECHPM = True ORDER BY INSPECTNO';
        $query = $this->dbDriver->GetQuery();
        $queryResult = $query->Execute($sqlString);
        $result = array();

        foreach ($queryResult as $row) {
            $result [] = new SWINSP(trim($row->INSPECTNO), trim($row->INSPECTNM), trim($row->NOTES), trim($row->NFLG0), trim($row->TRUCKCODE), trim($row->DTEHIRE), trim($row->DTERAISE), trim($row->LABORCODE), trim($row->PAYRATE), trim($row->ACTIVE), trim($row->WHSNO), trim($row->SCHEDULE), trim($row->INSURANCE), trim($row->DRIVERLIC), trim($row->WORKCOMP), trim($row->TECHEMAIL), trim($row->WOEMAILDEL), trim($row->PICTURE), trim($row->ITEMNOLAB), trim($row->ITEMNOTRV), trim($row->ITEMNOOFC), trim($row->ITEMNOSTD), trim($row->ITEMNOGEN), trim($row->PAYTRAVEL), trim($row->PAYOFFICE), trim($row->PAYSTANDB), trim($row->PAYGENERAL), trim($row->BILLTRAVEL), trim($row->BILLOFFICE), trim($row->BILLSTANDB), trim($row->BILLGENERL), trim($row->HUWTRAVEL), trim($row->HUWOFFICE), trim($row->HUWSTANDBY), trim($row->HUWGENERAL), trim($row->BILLRATE), trim($row->HUWRATE), trim($row->PASSPORTNO), trim($row->VENDNO), trim($row->VENDOR), trim($row->TECHDOB), trim($row->PPISSUE), trim($row->PPEXPIRE), trim($row->VISANO), trim($row->VSAISSUE), trim($row->VSAEXPIRE), trim($row->QBLISTID), trim($row->TECHIM));
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
            $result [] = new SWINSP(trim($row->INSPECTNO), trim($row->INSPECTNM), trim($row->NOTES), trim($row->NFLG0), trim($row->TRUCKCODE), trim($row->DTEHIRE), trim($row->DTERAISE), trim($row->LABORCODE), trim($row->PAYRATE), trim($row->ACTIVE), trim($row->WHSNO), trim($row->SCHEDULE), trim($row->INSURANCE), trim($row->DRIVERLIC), trim($row->WORKCOMP), trim($row->TECHEMAIL), trim($row->WOEMAILDEL), trim($row->PICTURE), trim($row->ITEMNOLAB), trim($row->ITEMNOTRV), trim($row->ITEMNOOFC), trim($row->ITEMNOSTD), trim($row->ITEMNOGEN), trim($row->PAYTRAVEL), trim($row->PAYOFFICE), trim($row->PAYSTANDB), trim($row->PAYGENERAL), trim($row->BILLTRAVEL), trim($row->BILLOFFICE), trim($row->BILLSTANDB), trim($row->BILLGENERL), trim($row->HUWTRAVEL), trim($row->HUWOFFICE), trim($row->HUWSTANDBY), trim($row->HUWGENERAL), trim($row->BILLRATE), trim($row->HUWRATE), trim($row->PASSPORTNO), trim($row->VENDNO), trim($row->VENDOR), trim($row->TECHDOB), trim($row->PPISSUE), trim($row->PPEXPIRE), trim($row->VISANO), trim($row->VSAISSUE), trim($row->VSAEXPIRE), trim($row->QBLISTID), trim($row->TECHIM));
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
