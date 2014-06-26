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
            $result [] = new Sysuser($row->USERID, $row->USERCODE, $row->USERNAME, $row->USERPASS, $row->GROUP, $row->USERSTAT0, $row->ONDATE, $row->OFFDATE, $row->ONTIME, $row->OFFTIME, $row->FSCREEN, $row->FSTARTUP, $row->FUSERLPDEV, $row->FUSERCOMP, $row->FLANG_CTRL, $row->FORMINI, $row->NFLG0, $row->WHSDEF, $row->POSCTRL, $row->PSDRWOPEN, $row->PSDRWPORT, $row->PSBARCDLP, $row->SETCONFIRM, $row->DERDIRNAME, $row->EMAIL, $row->CUSTNO, $row->ICPREFIX);
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
            $result [] = new Sysuser($row->USERID, $row->USERCODE, $row->USERNAME, $row->USERPASS, $row->GROUP, $row->USERSTAT0, $row->ONDATE, $row->OFFDATE, $row->ONTIME, $row->OFFTIME, $row->FSCREEN, $row->FSTARTUP, $row->FUSERLPDEV, $row->FUSERCOMP, $row->FLANG_CTRL, $row->FORMINI, $row->NFLG0, $row->WHSDEF, $row->POSCTRL, $row->PSDRWOPEN, $row->PSDRWPORT, $row->PSBARCDLP, $row->SETCONFIRM, $row->DERDIRNAME, $row->EMAIL, $row->CUSTNO, $row->ICPREFIX);
        }

        return $result;
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
        $custno = $entity->getCustno();
        $icprefix = $entity->getIcprefix();
        
        $sqlString = "UPDATE $this->entityName SET USERCODE = '$usercode', USERNAME = '$username', USERPASS = '$userpass', \"GROUP\" = '$group', USERSTAT0 = '$userstat0', ONDATE = '$ondate', OFFDATE = '$offdate', ONTIME = '$ontime', OFFTIME = '$offtime', FSCREEN = '$fscreen', FSTARTUP = '$fstartup', FUSERLPDEV = '$fuserlpdev', FUSERCOMP = '$fusercomp', FLANG_CTRL = '$flang_ctrl', FORMINI = '$formini', NFLG0 = $nflg0, WHSDEF = '$whsdef', POSCTRL = $posctrl, PSDRWOPEN = '$psdrwopen', PSDRWPORT = '$psdrwport', PSBARCDLP = '$psbarcdlp', SETCONFIRM = $setconfirm, DEFDIRNAME = '$defdirname', EMAIL = '$email', CUSTNO = '$custno', ICPREFIX = '$icprefix'"
                . " WHERE USERID = '$userid'";
        
        $query = $this->dbDriver->GetQuery();
        //UPDATE sysuser SET USERCODE = 'ADM', USERNAME = 'ADMIN', USERPASS = 'MASTER', "GROUP" = 'ADMIN', USERSTAT0 = '0', ONDATE = '2014-06-26', OFFDATE = '2008-04-11', ONTIME = '14:01:11', OFFTIME = '09:08:40', FSCREEN = '0', FSTARTUP = '', FUSERLPDEV = '\\HP01\Fermen - HP 1100', FUSERCOMP = '00', FLANG_CTRL = 'E', FORMINI = '', NFLG0 = 0, WHSDEF = '000', POSCTRL = 0, PSDRWOPEN = '', PSDRWPORT = '', PSBARCDLP = '', SETCONFIRM = 1, DEFDIRNAME = '', EMAIL = 'info@fermen.com', CUSTNO = '', ICPREFIX = '' WHERE USERID = '001'
        return $query->Execute($sqlString);
    }

    public function Delete($entity) {
        // TODO: Implement Delete() method.
    }

}
