<?php

/**
 * Project:  VFP Business Series
 * Copyright: 2014. VFP Business Solutions, LLC
 */

namespace Dandelion\MVC\Application\Models\Repositories;

use Dandelion\Diana\Interfaces\IRepository;
use Dandelion\MVC\Application\Models\Entities\ARCOMP;

class ARCOMPRepository extends BaseRepository implements IRepository {

    /**
     * @return array of all ARCOMP objects from DB
     */
    public function GetAll() {
        $sqlString = "SELECT * FROM $this->entityName";
        $query = $this->dbDriver->GetQuery();
        $queryResult = $query->Execute($sqlString);
        $result = array();

        foreach ($queryResult as $row) {
            $result [] = new ARCOMP(trim($row->PREPACCT), trim($row->NFLG0), trim($row->ARPOSACCT), trim($row->ARPERLOCK), trim($row->ARCASHPRT), trim($row->GLACCTICAR), trim($row->DBCOUNT), trim($row->CRCOUNT), trim($row->APTABSTOP), trim($row->ARSLSREPCH), trim($row->POSCREDIT), trim($row->DISCID), trim($row->CSHRCPAR), trim($row->SHIPTONO), trim($row->AUTSHPTONO), trim($row->AUTSHP15), trim($row->ARQRYSHPTO), trim($row->AUTCONTNO), trim($row->CONTNO), trim($row->TAXWHSNO), trim($row->SALESFLAG), trim($row->CSTSYNPATH), trim($row->CSTSYNTABL), trim($row->CSTFLDNAM), trim($row->CSTFLDLEN), trim($row->CONTFLAG), trim($row->GLARCREDIT), trim($row->ARFORMAT), trim($row->DEPGRPAUTO), trim($row->EXTPATHA), trim($row->EXTPATHB), trim($row->PRORATESO), trim($row->CHGTAXSO), trim($row->SOWARNFLG), trim($row->LOCALHOST), trim($row->ARDEFAULT), trim($row->CCVERIFYAD), trim($row->HIDECUSTIN), trim($row->DEPGROUPDF), trim($row->DEFUNDEP), trim($row->GENFLDLBL1), trim($row->GENFLDLBL2), trim($row->GENFLDLBL3), trim($row->AREMAILBDY), trim($row->ARNOTECUST), trim($row->ARSTATEPER), trim($row->CCTIERALMT), trim($row->CCTIERBLMT), trim($row->CCTIERCTRL), trim($row->AUTOCUSTNO), trim($row->DEPGRPMSG), trim($row->LBLTIERACC), trim($row->LBLTIERBCC), trim($row->MESTIERACC), trim($row->MESTIERBCC), trim($row->GLECOMMFEE), trim($row->GLECOMMBNK), trim($row->AMAZONLINK), trim($row->QBLISTID), trim($row->ARDBONLY), trim($row->XLSOPENOK), trim($row->CCURL), trim($row->FINCHGMES), trim($row->PICBCKGRND));
        }

        return $result;
    }

    /**
     * @param string $predicate SQL Query Where clause
     * @return \Dandelion\MVC\Application\Models\Entities\ARCOMP
     */
    public function Get($predicate) {
        $sqlString = "SELECT * FROM $this->entityName";
        $sqlString .= ' ' . $predicate;
        $query = $this->dbDriver->GetQuery();
        $queryResult = $query->Execute($sqlString);
        $result = array();

        foreach ($queryResult as $row) {
            $result [] = new ARCOMP(trim($row->PREPACCT), trim($row->NFLG0), trim($row->ARPOSACCT), trim($row->ARPERLOCK), trim($row->ARCASHPRT), trim($row->GLACCTICAR), trim($row->DBCOUNT), trim($row->CRCOUNT), trim($row->APTABSTOP), trim($row->ARSLSREPCH), trim($row->POSCREDIT), trim($row->DISCID), trim($row->CSHRCPAR), trim($row->SHIPTONO), trim($row->AUTSHPTONO), trim($row->AUTSHP15), trim($row->ARQRYSHPTO), trim($row->AUTCONTNO), trim($row->CONTNO), trim($row->TAXWHSNO), trim($row->SALESFLAG), trim($row->CSTSYNPATH), trim($row->CSTSYNTABL), trim($row->CSTFLDNAM), trim($row->CSTFLDLEN), trim($row->CONTFLAG), trim($row->GLARCREDIT), trim($row->ARFORMAT), trim($row->DEPGRPAUTO), trim($row->EXTPATHA), trim($row->EXTPATHB), trim($row->PRORATESO), trim($row->CHGTAXSO), trim($row->SOWARNFLG), trim($row->LOCALHOST), trim($row->ARDEFAULT), trim($row->CCVERIFYAD), trim($row->HIDECUSTIN), trim($row->DEPGROUPDF), trim($row->DEFUNDEP), trim($row->GENFLDLBL1), trim($row->GENFLDLBL2), trim($row->GENFLDLBL3), trim($row->AREMAILBDY), trim($row->ARNOTECUST), trim($row->ARSTATEPER), trim($row->CCTIERALMT), trim($row->CCTIERBLMT), trim($row->CCTIERCTRL), trim($row->AUTOCUSTNO), trim($row->DEPGRPMSG), trim($row->LBLTIERACC), trim($row->LBLTIERBCC), trim($row->MESTIERACC), trim($row->MESTIERBCC), trim($row->GLECOMMFEE), trim($row->GLECOMMBNK), trim($row->AMAZONLINK), trim($row->QBLISTID), trim($row->ARDBONLY), trim($row->XLSOPENOK), trim($row->CCURL), trim($row->FINCHGMES), trim($row->PICBCKGRND));
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
