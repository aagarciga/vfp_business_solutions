<?php

/**
 * Project:  VFP Business Series
 * Copyright: 2014. VFP Business Solutions, LLC
 */

namespace Dandelion\MVC\Application\Models\Repositories;

use Dandelion\Diana\Interfaces\IRepository;
use Dandelion\MVC\Application\Models\Entities\Sysuser;

class SysuserRepository extends BaseRepository implements IRepository {

    /**
     * @return array of Sysuser entities
     */
    public function GetAll() {
        $sqlString = "SELECT * FROM $this->entityName";
        $query = $this->dbDriver->GetQuery();
        $queryResult = $query->Execute($sqlString);
        $result = array();

        foreach ($queryResult as $row) {
            $result [] = new Sysuser(trim($row->USERID), trim($row->USERCODE), trim($row->USERNAME), trim($row->USERPASS), trim($row->GROUP), trim($row->FDVIEW), trim($row->USERSTAT0), trim($row->ONDATE), trim($row->OFFDATE), trim($row->ONTIME), trim($row->OFFTIME), trim($row->FSCREEN), trim($row->FSTARTUP), trim($row->FUSERLPDEV), trim($row->FUSERCOMP), trim($row->FLANG_CTRL), trim($row->FORMINI), trim($row->NFLG0), trim($row->WHSDEF), trim($row->POSCTRL), trim($row->PSDRWOPEN), trim($row->PSDRWPORT), trim($row->PSBARCDLP), trim($row->SETCONFIRM), trim($row->DERDIRNAME), trim($row->EMAIL), trim($row->ICPREFIX), trim($row->DBFILTER), trim($row->FILTERNA), trim($row->SOFORMDB));
        }
        
        return $result;
    }

    /**
     * 
     * @param string $predicate SQL Query Where clause
     * @return \Dandelion\MVC\Application\Models\Entities\Sysuser
     */
    public function Get($predicate) {
        $sqlString = "SELECT * FROM $this->entityName";
        $sqlString .= ' ' . $predicate;
        $query = $this->dbDriver->GetQuery();
        $queryResult = $query->Execute($sqlString);
        $result = array();

        foreach ($queryResult as $row) {
            $result [] = new Sysuser(trim($row->USERID), trim($row->USERCODE), trim($row->USERNAME), trim($row->USERPASS), trim($row->GROUP), trim($row->FDVIEW), trim($row->USERSTAT0), trim($row->ONDATE), trim($row->OFFDATE), trim($row->ONTIME), trim($row->OFFTIME), trim($row->FSCREEN), trim($row->FSTARTUP), trim($row->FUSERLPDEV), trim($row->FUSERCOMP), trim($row->FLANG_CTRL), trim($row->FORMINI), trim($row->NFLG0), trim($row->WHSDEF), trim($row->POSCTRL), trim($row->PSDRWOPEN), trim($row->PSDRWPORT), trim($row->PSBARCDLP), trim($row->SETCONFIRM), trim($row->DERDIRNAME), trim($row->EMAIL), trim($row->ICPREFIX), trim($row->DBFILTER), trim($row->FILTERNA), trim($row->SOFORMDB));
        }

        return $result;
    }

    /**
     * 
     * @param string $username
     * @return \Dandelion\MVC\Application\Models\Entities\Sysuser
     */
    public function GetByUsername($username) {
        $sqlString = "SELECT * FROM $this->entityName";
        $sqlString .= " WHERE USERNAME = '$username';";
        $query = $this->dbDriver->GetQuery();
        $queryResult = $query->Execute($sqlString);

        if (count($queryResult)) {
            $row = $queryResult[0];
            return new Sysuser(trim($row->USERID), trim($row->USERCODE), trim($row->USERNAME), trim($row->USERPASS), trim($row->GROUP), trim($row->FDVIEW), trim($row->USERSTAT0), trim($row->ONDATE), trim($row->OFFDATE), trim($row->ONTIME), trim($row->OFFTIME), trim($row->FSCREEN), trim($row->FSTARTUP), trim($row->FUSERLPDEV), trim($row->FUSERCOMP), trim($row->FLANG_CTRL), trim($row->FORMINI), trim($row->NFLG0), trim($row->WHSDEF), trim($row->POSCTRL), trim($row->PSDRWOPEN), trim($row->PSDRWPORT), trim($row->PSBARCDLP), trim($row->SETCONFIRM), trim($row->DERDIRNAME), trim($row->EMAIL), trim($row->ICPREFIX), trim($row->DBFILTER), trim($row->FILTERNA), trim($row->SOFORMDB));
        }
        return "";
    }

    /**
     * 
     * @param string $userid
     * @return \Dandelion\MVC\Application\Models\Entities\Sysuser
     */
    public function GetByUserid($userid) {
        $sqlString = "SELECT * FROM $this->entityName";
        $sqlString .= " WHERE USERID = '$userid';";
        $query = $this->dbDriver->GetQuery();
        $queryResult = $query->Execute($sqlString);

        if (count($queryResult)) {
            $row = $queryResult[0];
            return new Sysuser(trim($row->USERID), trim($row->USERCODE), trim($row->USERNAME), trim($row->USERPASS), trim($row->GROUP), trim($row->FDVIEW), trim($row->USERSTAT0), trim($row->ONDATE), trim($row->OFFDATE), trim($row->ONTIME), trim($row->OFFTIME), trim($row->FSCREEN), trim($row->FSTARTUP), trim($row->FUSERLPDEV), trim($row->FUSERCOMP), trim($row->FLANG_CTRL), trim($row->FORMINI), trim($row->NFLG0), trim($row->WHSDEF), trim($row->POSCTRL), trim($row->PSDRWOPEN), trim($row->PSDRWPORT), trim($row->PSBARCDLP), trim($row->SETCONFIRM), trim($row->DERDIRNAME), trim($row->EMAIL), trim($row->ICPREFIX), trim($row->DBFILTER), trim($row->FILTERNA), trim($row->SOFORMDB));
        }
        return "";
    }

    public function Add($entity) {
        // TODO: Implement Add() method.
    }

    public function Update($entity) {
        $userid = $entity->getUserid();
        $usercode = $entity->getUsercode();
        $username = $entity->getUsername();
        $userpass = $entity->getUserpass();
        $group = $entity->getGroup();
        $fdview = $entity->getFdview();
        $userstat0 = $entity->getUserstat0();
        $ondate = $entity->getOndate();
        $offdate = $entity->getOffdate();
        $ontime = $entity->getOntime();
        $offtime = $entity->getOfftime();
        $fscreen = $entity->getFscreen();
        $fstartup = $entity->getFstartup();
        $fuserlpdev = $entity->getFuserlpdev();
        $fusercomp = $entity->getFusercomp();
        $flang_ctrl = $entity->getFlangCtrl();
        $formini = $entity->getFormini();
        $nflg0 = $entity->getNflg0();
        $whsdef = $entity->getWhsdef();
        $posctrl = $entity->getPosctrl();
        $psdrwopen = $entity->getPsdrwopen();
        $psdrwport = $entity->getPsdrwport();
        $psbarcdlp = $entity->getPsbarcdlp();
        $setconfirm = $entity->getSetconfirm();
        $defdirname = $entity->getDefdirname();
        $email = $entity->getEmail();
//        $custno = $entity->getCustno();
        $icprefix = $entity->getIcprefix();
        $dbfilter = $entity->getDbfilter();
        $filterna = $entity->getFilterna();
        $soformdb = $entity->getSoformdb();


        
        $sqlString = "UPDATE $this->entityName SET USERCODE = '$usercode', USERNAME = '$username', USERPASS = '$userpass', \"GROUP\" = '$group', FDVIEW = $fdview, USERSTAT0 = '$userstat0', ONDATE = '$ondate', OFFDATE = '$offdate', ONTIME = '$ontime', OFFTIME = '$offtime', FSCREEN = '$fscreen', FSTARTUP = '$fstartup', FUSERLPDEV = '$fuserlpdev', FUSERCOMP = '$fusercomp', FLANG_CTRL = '$flang_ctrl', FORMINI = '$formini', NFLG0 = $nflg0, WHSDEF = '$whsdef', POSCTRL = $posctrl, PSDRWOPEN = '$psdrwopen', PSDRWPORT = '$psdrwport', PSBARCDLP = '$psbarcdlp', SETCONFIRM = $setconfirm, DEFDIRNAME = '$defdirname', EMAIL = '$email', ICPREFIX = '$icprefix', DBFILTER = '$dbfilter', FILTERNA = '$filterna', SOFORMDB = '$soformdb'" // , CUSTNO = '$custno',
                . " WHERE USERID = '$userid'";

        $query = $this->dbDriver->GetQuery();
        return $query->Execute($sqlString);
    }

    public function Delete($entity) {
        // TODO: Implement Delete() method.
    }

}
