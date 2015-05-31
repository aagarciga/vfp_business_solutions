<?php

/**
 * Project:  VFP Business Series
 * Copyright: 2014. VFP Business Solutions, LLC
 */

namespace Dandelion\MVC\Application\Models\Repositories;

use Dandelion\Diana\Interfaces\IRepository;
use Dandelion\MVC\Application\Models\Entities\SOCOMP;

class SOCOMPRepository extends BaseRepository implements IRepository {

    /**
     * @return array of all SOCOMP objects from DB
     */
    public function GetAll() {
        $sqlString = "SELECT * FROM $this->entityName";
        $query = $this->dbDriver->GetQuery();
        $queryResult = $query->Execute($sqlString);
        $result = array();

        foreach ($queryResult as $row) {
            $result [] = new SOCOMP(trim($row->ICPARMCOST), trim($row->SOBLURB), trim($row->SALESEMAIL), trim($row->SYSCHGLOG), trim($row->SOLINEFLG), trim($row->CUSTSTKNO), trim($row->SODEFPRT), trim($row->SHPRELNO), trim($row->SOSTBNO), trim($row->SOSHPVALID), trim($row->QUBLURBPF), trim($row->QUTADDMODE), trim($row->OKTOPICKFL), trim($row->SOALLOCATE), trim($row->EDISONUM), trim($row->EMAILFORM), trim($row->SHIPVIA), trim($row->SHIPVNAME), trim($row->SHIPFROM), trim($row->PRICEBY), trim($row->FRGHTS), trim($row->FRGHTPAY), trim($row->DRIVERLIC), trim($row->WMSMANPICK), trim($row->OENO), trim($row->PACKBLURB), trim($row->SHPCOMINV), trim($row->SOTYPE), trim($row->SOTYPECHG), trim($row->SOUTILFLG), trim($row->WMSPRTINV), trim($row->WMSOPTMZ), trim($row->SOREQDTELB), trim($row->SORELDTELB), trim($row->COSTCHANGE), trim($row->PICKSORT), trim($row->SALEREPREQ), trim($row->FETSHOW), trim($row->LISTPRDISC), trim($row->DISCINTVAL), trim($row->BOCOLOR), trim($row->HIDECOMPSO), trim($row->NOTABDESC), trim($row->QUEMAILBDY), trim($row->SOEMAILBDY), trim($row->WMSMANPACK), trim($row->HHPICKSHOW), trim($row->NOPRTHEAD), trim($row->SELSHPDATE), trim($row->INSTORETRX), trim($row->HHPICKADD), trim($row->DISCORFLAG), trim($row->NEWSOCUST), trim($row->TRACKPREFX), trim($row->WMSMENUFLG), trim($row->WMSSHIPTO), trim($row->SOTYPECODE), trim($row->SOSHPAMT), trim($row->WMSPACKIV), trim($row->ECOMMPORT), trim($row->ECOMMSRV), trim($row->ECOMMDBA), trim($row->ECOMMUSER), trim($row->ECOMMPW), trim($row->QBLISTID), trim($row->WMSEMAILST), trim($row->COOKIEKEY), trim($row->SONOFRGHT), trim($row->WEBNAME), trim($row->XLSOPENOK), trim($row->NOCHQTYSHP), trim($row->FTPESRVNAM), trim($row->FTPEUSER), trim($row->FTPEPSWD), trim($row->FTPEPICITM), trim($row->FTPEPICCAT), trim($row->WEBCATLVL), trim($row->WEBREF), trim($row->WEBCUSTPO), trim($row->WEBARTERM), trim($row->VALPICPAK), trim($row->WMSPACKCMP), trim($row->ESTSRV), trim($row->ESTPORT), trim($row->ESTDBA), trim($row->ESTUSER), trim($row->ESTPW), trim($row->USESHPTRK), trim($row->PACKNO), trim($row->ECOMMPRFX), trim($row->ECOMMVER), trim($row->ECOMMDBV), trim($row->WMSLOCPICK), trim($row->WEBFRNDURL), trim($row->SETAMAZON), trim($row->RECALSOTOT), trim($row->AMAZONID), trim($row->AMAZON_ISA), trim($row->AMAZON_GS), trim($row->AMAZON_ST), trim($row->AMAVENCODE), trim($row->ECOMMOHSO), trim($row->POSTERMS), trim($row->POSREP), trim($row->FTTSHOW), trim($row->CC_GATEWAY), trim($row->SHIPBYDAY), trim($row->PGID1), trim($row->PGID2), trim($row->PGID3), trim($row->CCPATH), trim($row->REPRTPICME), trim($row->EDINFITEM), trim($row->USEPACKFRM), trim($row->WEBCUSTUPD), trim($row->GS1PREFIX), trim($row->NONOTB4DTE));
        }

        return $result;
    }
    
    public function GetFirst() {
        $sqlString = "SELECT * FROM $this->entityName";
        $query = $this->dbDriver->GetQuery();
        $queryResult = $query->Execute($sqlString);
        $result = null;
        
        if (count($queryResult)) {
            $row = $queryResult[0];
            $result = new SOCOMP(trim($row->ICPARMCOST), trim($row->SOBLURB), trim($row->SALESEMAIL), trim($row->SYSCHGLOG), trim($row->SOLINEFLG), trim($row->CUSTSTKNO), trim($row->SODEFPRT), trim($row->SHPRELNO), trim($row->SOSTBNO), trim($row->SOSHPVALID), trim($row->QUBLURBPF), trim($row->QUTADDMODE), trim($row->OKTOPICKFL), trim($row->SOALLOCATE), trim($row->EDISONUM), trim($row->EMAILFORM), trim($row->SHIPVIA), trim($row->SHIPVNAME), trim($row->SHIPFROM), trim($row->PRICEBY), trim($row->FRGHTS), trim($row->FRGHTPAY), trim($row->DRIVERLIC), trim($row->WMSMANPICK), trim($row->OENO), trim($row->PACKBLURB), trim($row->SHPCOMINV), trim($row->SOTYPE), trim($row->SOTYPECHG), trim($row->SOUTILFLG), trim($row->WMSPRTINV), trim($row->WMSOPTMZ), trim($row->SOREQDTELB), trim($row->SORELDTELB), trim($row->COSTCHANGE), trim($row->PICKSORT), trim($row->SALEREPREQ), trim($row->FETSHOW), trim($row->LISTPRDISC), trim($row->DISCINTVAL), trim($row->BOCOLOR), trim($row->HIDECOMPSO), trim($row->NOTABDESC), trim($row->QUEMAILBDY), trim($row->SOEMAILBDY), trim($row->WMSMANPACK), trim($row->HHPICKSHOW), trim($row->NOPRTHEAD), trim($row->SELSHPDATE), trim($row->INSTORETRX), trim($row->HHPICKADD), trim($row->DISCORFLAG), trim($row->NEWSOCUST), trim($row->TRACKPREFX), trim($row->WMSMENUFLG), trim($row->WMSSHIPTO), trim($row->SOTYPECODE), trim($row->SOSHPAMT), trim($row->WMSPACKIV), trim($row->ECOMMPORT), trim($row->ECOMMSRV), trim($row->ECOMMDBA), trim($row->ECOMMUSER), trim($row->ECOMMPW), trim($row->QBLISTID), trim($row->WMSEMAILST), trim($row->COOKIEKEY), trim($row->SONOFRGHT), trim($row->WEBNAME), trim($row->XLSOPENOK), trim($row->NOCHQTYSHP), trim($row->FTPESRVNAM), trim($row->FTPEUSER), trim($row->FTPEPSWD), trim($row->FTPEPICITM), trim($row->FTPEPICCAT), trim($row->WEBCATLVL), trim($row->WEBREF), trim($row->WEBCUSTPO), trim($row->WEBARTERM), trim($row->VALPICPAK), trim($row->WMSPACKCMP), trim($row->ESTSRV), trim($row->ESTPORT), trim($row->ESTDBA), trim($row->ESTUSER), trim($row->ESTPW), trim($row->USESHPTRK), trim($row->PACKNO), trim($row->ECOMMPRFX), trim($row->ECOMMVER), trim($row->ECOMMDBV), trim($row->WMSLOCPICK), trim($row->WEBFRNDURL), trim($row->SETAMAZON), trim($row->RECALSOTOT), trim($row->AMAZONID), trim($row->AMAZON_ISA), trim($row->AMAZON_GS), trim($row->AMAZON_ST), trim($row->AMAVENCODE), trim($row->ECOMMOHSO), trim($row->POSTERMS), trim($row->POSREP), trim($row->FTTSHOW), trim($row->CC_GATEWAY), trim($row->SHIPBYDAY), trim($row->PGID1), trim($row->PGID2), trim($row->PGID3), trim($row->CCPATH), trim($row->REPRTPICME), trim($row->EDINFITEM), trim($row->USEPACKFRM), trim($row->WEBCUSTUPD), trim($row->GS1PREFIX), trim($row->NONOTB4DTE));
        }
        
        return $result;
    }

    /**
     * @param string $predicate SQL Query Where clause
     * @return \Dandelion\MVC\Application\Models\Entities\SOCOMP
     */
    public function Get($predicate) {
        $sqlString = "SELECT * FROM $this->entityName";
        $sqlString .= ' ' . $predicate;
        $query = $this->dbDriver->GetQuery();
        $queryResult = $query->Execute($sqlString);
        $result = array();

        foreach ($queryResult as $row) {
            $result [] = new SOCOMP(trim($row->ICPARMCOST), trim($row->SOBLURB), trim($row->SALESEMAIL), trim($row->SYSCHGLOG), trim($row->SOLINEFLG), trim($row->CUSTSTKNO), trim($row->SODEFPRT), trim($row->SHPRELNO), trim($row->SOSTBNO), trim($row->SOSHPVALID), trim($row->QUBLURBPF), trim($row->QUTADDMODE), trim($row->OKTOPICKFL), trim($row->SOALLOCATE), trim($row->EDISONUM), trim($row->EMAILFORM), trim($row->SHIPVIA), trim($row->SHIPVNAME), trim($row->SHIPFROM), trim($row->PRICEBY), trim($row->FRGHTS), trim($row->FRGHTPAY), trim($row->DRIVERLIC), trim($row->WMSMANPICK), trim($row->OENO), trim($row->PACKBLURB), trim($row->SHPCOMINV), trim($row->SOTYPE), trim($row->SOTYPECHG), trim($row->SOUTILFLG), trim($row->WMSPRTINV), trim($row->WMSOPTMZ), trim($row->SOREQDTELB), trim($row->SORELDTELB), trim($row->COSTCHANGE), trim($row->PICKSORT), trim($row->SALEREPREQ), trim($row->FETSHOW), trim($row->LISTPRDISC), trim($row->DISCINTVAL), trim($row->BOCOLOR), trim($row->HIDECOMPSO), trim($row->NOTABDESC), trim($row->QUEMAILBDY), trim($row->SOEMAILBDY), trim($row->WMSMANPACK), trim($row->HHPICKSHOW), trim($row->NOPRTHEAD), trim($row->SELSHPDATE), trim($row->INSTORETRX), trim($row->HHPICKADD), trim($row->DISCORFLAG), trim($row->NEWSOCUST), trim($row->TRACKPREFX), trim($row->WMSMENUFLG), trim($row->WMSSHIPTO), trim($row->SOTYPECODE), trim($row->SOSHPAMT), trim($row->WMSPACKIV), trim($row->ECOMMPORT), trim($row->ECOMMSRV), trim($row->ECOMMDBA), trim($row->ECOMMUSER), trim($row->ECOMMPW), trim($row->QBLISTID), trim($row->WMSEMAILST), trim($row->COOKIEKEY), trim($row->SONOFRGHT), trim($row->WEBNAME), trim($row->XLSOPENOK), trim($row->NOCHQTYSHP), trim($row->FTPESRVNAM), trim($row->FTPEUSER), trim($row->FTPEPSWD), trim($row->FTPEPICITM), trim($row->FTPEPICCAT), trim($row->WEBCATLVL), trim($row->WEBREF), trim($row->WEBCUSTPO), trim($row->WEBARTERM), trim($row->VALPICPAK), trim($row->WMSPACKCMP), trim($row->ESTSRV), trim($row->ESTPORT), trim($row->ESTDBA), trim($row->ESTUSER), trim($row->ESTPW), trim($row->USESHPTRK), trim($row->PACKNO), trim($row->ECOMMPRFX), trim($row->ECOMMVER), trim($row->ECOMMDBV), trim($row->WMSLOCPICK), trim($row->WEBFRNDURL), trim($row->SETAMAZON), trim($row->RECALSOTOT), trim($row->AMAZONID), trim($row->AMAZON_ISA), trim($row->AMAZON_GS), trim($row->AMAZON_ST), trim($row->AMAVENCODE), trim($row->ECOMMOHSO), trim($row->POSTERMS), trim($row->POSREP), trim($row->FTTSHOW), trim($row->CC_GATEWAY), trim($row->SHIPBYDAY), trim($row->PGID1), trim($row->PGID2), trim($row->PGID3), trim($row->CCPATH), trim($row->REPRTPICME), trim($row->EDINFITEM), trim($row->USEPACKFRM), trim($row->WEBCUSTUPD), trim($row->GS1PREFIX), trim($row->NONOTB4DTE));
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
