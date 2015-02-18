<?php

/**
 * Project:  VFP Business Series
 * Copyright: 2014. VFP Business Solutions, LLC
 */

namespace Dandelion\MVC\Application\Models\Entities\Base;

/**
 * BaseSysuser entity definition to map Sysuser Table to Sysuser objects
 * 
 */
class BaseSysuser {

    private static $_name = "sysuser";
    
    protected $_userid;
    protected $_usercode;
    protected $_username;
    protected $_userpass;
    protected $_group;
    protected $_userstat0;
    protected $_ondate;
    protected $_offdate;
    protected $_ontime;
    protected $_offtime;
    protected $_fscreen;
    protected $_fstartup;
    protected $_fuserlpdev;
    protected $_fusercomp;
    protected $_flang_ctrl;
    protected $_formini;
    protected $_nflg0;
    protected $_whsdef;
    protected $_posctrl;
    protected $_psdrwopen;
    protected $_psdrwport;
    protected $_psbarcdlp;
    protected $_setconfirm;
    protected $_defdirname;
    protected $_email;
//    protected $_custno;
    protected $_icprefix;
    protected $_dbfilter;
    protected $_filterna; //FILTERNA
    protected $_soformdb; //SOFORMDB 

    public static function toString() {
        return self::$_name;
    }

    /**
     * @return mixed
     */
    public function getUserid() {
        return trim($this->_userid);
    }

    /**
     * @param mixed $userid
     */
    public function setUserid($userid) {
        $this->_userid = $userid;
    }

    /**
     * @return mixed
     */
    public function getUsercode() {
        return trim($this->_usercode);
    }

    /**
     * @param mixed $usercode
     */
    public function setUsercode($usercode) {
        $this->_usercode = $usercode;
    }

    /**
     * @return mixed
     */
    public function getUsername() {
        return trim($this->_username);
    }

    /**
     * @param mixed $username
     */
    public function setUsername($username) {
        $this->_username = $username;
    }

    /**
     * @return mixed
     */
    public function getUserpass() {
        return trim($this->_userpass);
    }

    /**
     * @param mixed $userpass
     */
    public function setUserpass($userpass) {
        $this->_userpass = $userpass;
    }

    /**
     * @return mixed
     */
    public function getGroup() {
        return trim($this->_group);
    }

    /**
     * @param mixed $group
     */
    public function setGroup($group) {
        $this->_group = $group;
    }

    /**
     * @return mixed
     */
    public function getUserstat0() {
        return trim($this->_userstat0);
    }

    /**
     * @param mixed $userstat0
     */
    public function setUserstat0($userstat0) {
        $this->_userstat0 = $userstat0;
    }

    /**
     * @return mixed
     */
    public function getOndate() {
        return trim($this->_ondate);
    }

    /**
     * @param mixed $ondate
     */
    public function setOndate($ondate) {
        $this->_ondate = $ondate;
    }

    /**
     * @return mixed
     */
    public function getOffdate() {
        return trim($this->_offdate);
    }

    /**
     * @param mixed $offdate
     */
    public function setOffdate($offdate) {
        $this->_offdate = $offdate;
    }

    /**
     * @return mixed
     */
    public function getOntime() {
        return trim($this->_ontime);
    }

    /**
     * @param mixed $ontime
     */
    public function setOntime($ontime) {
        $this->_ontime = $ontime;
    }

    /**
     * @return mixed
     */
    public function getOfftime() {
        return trim($this->_offtime);
    }

    /**
     * @param mixed $offtime
     */
    public function setOfftime($offtime) {
        $this->_offtime = $offtime;
    }

    /**
     * @return mixed
     */
    public function getFscreen() {
        return trim($this->_fscreen);
    }

    /**
     * @param mixed $fscreen
     */
    public function setFscreen($fscreen) {
        $this->_fscreen = $fscreen;
    }

    /**
     * @return mixed
     */
    public function getFstartup() {
        return trim($this->_fstartup);
    }

    /**
     * @param mixed $fstartup
     */
    public function setFstartup($fstartup) {
        $this->_fstartup = $fstartup;
    }

    /**
     * @return mixed
     */
    public function getFuserlpdev() {
        return trim($this->_fuserlpdev);
    }

    /**
     * @param mixed $fuserlpdev
     */
    public function setFuserlpdev($fuserlpdev) {
        $this->_fuserlpdev = $fuserlpdev;
    }

    /**
     * @return mixed
     */
    public function getFusercomp() {
        return trim($this->_fusercomp);
    }

    /**
     * @param mixed $fusercomp
     */
    public function setFusercomp($fusercomp) {
        $this->_fusercomp = $fusercomp;
    }

    /**
     * @return mixed
     */
    public function getFlangCtrl() {
        return trim($this->_flang_ctrl);
    }

    /**
     * @param mixed $flang_ctrl
     */
    public function setFlangCtrl($flang_ctrl) {
        $this->_flang_ctrl = $flang_ctrl;
    }

    /**
     * @return mixed
     */
    public function getFormini() {
        return trim($this->_formini);
    }

    /**
     * @param mixed $formini
     */
    public function setFormini($formini) {
        $this->_formini = $formini;
    }

    /**
     * @return bool
     */
    public function getNflg0() {
        return trim($this->_nflg0);
    }

    /**
     * @param bool $nflg0
     */
    public function setNflg0($nflg0) {
        $this->_nflg0 = $nflg0;
    }

    /**
     * @return mixed
     */
    public function getWhsdef() {
        return trim($this->_whsdef);
    }

    /**
     * @param mixed $whsdef
     */
    public function setWhsdef($whsdef) {
        $this->_whsdef = $whsdef;
    }

    /**
     * @return bool
     */
    public function getPosctrl() {
        return trim($this->_posctrl);
    }

    /**
     * @param bool $posctrl
     */
    public function setPosctrl($posctrl) {
        $this->_posctrl = $posctrl;
    }

    /**
     * @return mixed
     */
    public function getPsdrwopen() {
        return trim($this->_psdrwopen);
    }

    /**
     * @param mixed $psdrwopen
     */
    public function setPsdrwopen($psdrwopen) {
        $this->_psdrwopen = $psdrwopen;
    }

    /**
     * @return mixed
     */
    public function getPsdrwport() {
        return trim($this->_psdrwport);
    }

    /**
     * @param mixed $psdrwport
     */
    public function setPsdrwport($psdrwport) {
        $this->_psdrwport = $psdrwport;
    }

    /**
     * @return mixed
     */
    public function getPsbarcdlp() {
        return trim($this->_psbarcdlp);
    }

    /**
     * @param mixed $psbarcdlp
     */
    public function setPsbarcdlp($psbarcdlp) {
        $this->_psbarcdlp = $psbarcdlp;
    }

    /**
     * @return bool
     */
    public function getSetconfirm() {
        return trim($this->_setconfirm);
    }

    /**
     * @param bool $setconfirm
     */
    public function setSetconfirm($setconfirm) {
        $this->_setconfirm = $setconfirm;
    }

    /**
     * @return mixed
     */
    public function getDefdirname() {
        return trim($this->_defdirname);
    }

    /**
     * @param mixed $defdirname
     */
    public function setDefdirname($defdirname) {
        $this->_defdirname = $defdirname;
    }
    
    /**
     * @return mixed
     */
    public function getEmail() {
        return trim($this->_email);
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email) {
        $this->_email = $email;
    }

//    /**
//     * @return mixed
//     */
//    public function getCustno() {
//        return trim($this->_custno);
//    }
//
//    /**
//     * @param mixed $custno
//     */
//    public function setCustno($custno) {
//        $this->_custno = $custno;
//    }

    /**
     * @return mixed
     */
    public function getIcprefix() {
        return trim($this->_icprefix);
    }

    /**
     * @param mixed $icprefix
     */
    public function setIcprefix($icprefix) {
        $this->_icprefix = $icprefix;
    }
    
    /**
     * @return mixed
     */
    public function getDbfilter() {
        return trim($this->_dbfilter);
    }

    /**
     * @param mixed $icprefix
     */
    public function setDbfilter($dbfilter) {
        $this->_dbfilter = $dbfilter;
    }
    
    /**
     * @return mixed
     */
    public function getFilterna() {
        return trim($this->_filterna);
    }

    /**
     * @param mixed $icprefix
     */
    public function setFilterna($filterna) {
        $this->_filterna = $filterna;
    }
    
    /**
     * @return mixed
     */
    public function getSoformdb() {
        return trim($this->_soformdb);
    }

    /**
     * @param mixed $icprefix
     */
    public function setSoformdb($soformdb) {
        $this->_soformdb = $soformdb;
    }

   /**
    * 
    * @param type $userid
    * @param type $usercode
    * @param type $username
    * @param type $userpass
    * @param type $group
    * @param type $userstat0
    * @param type $ondate
    * @param type $offdate
    * @param type $ontime
    * @param type $offtime
    * @param type $fscreen
    * @param type $fstartup
    * @param type $fuserlpdev
    * @param type $fuercomp
    * @param type $flang_ctrl
    * @param type $formini
    * @param type $nflg0
    * @param type $whsdef
    * @param type $posctrl
    * @param type $psdrwopen
    * @param type $psdrwport
    * @param type $psbarcdlp
    * @param type $setconfirm
    * @param type $defdirname
    * @param type $email
    * @param type $icprefix
    * @param GUID $dbfilter
    * @param type $filterna
    * @param type $soformdb
    */
    public function __construct($userid, $usercode, $username, $userpass, $group, $userstat0 = '', $ondate = '', $offdate = '', $ontime = '', $offtime = '', $fscreen = '', $fstartup = '', $fuserlpdev = '', $fuercomp = '', $flang_ctrl = '', $formini = '', $nflg0 = false, $whsdef = '', $posctrl = false, $psdrwopen = '', $psdrwport = '', $psbarcdlp = '', $setconfirm = false, $defdirname = '', $email = '', $icprefix = '', $dbfilter = '', $filterna = '', $soformdb = '') {
        $this->_userid = $userid;
        $this->_usercode = $usercode;
        $this->_username = $username;
        $this->_userpass = $userpass;
        $this->_group = $group;
        $this->_userstat0 = $userstat0;
        $this->_ondate = $ondate;
        $this->_offdate = $offdate;
        $this->_ontime = $ontime;
        $this->_offtime = $offtime;
        $this->_fscreen = $fscreen;
        $this->_fstartup = $fstartup;
        $this->_fuserlpdev = $fuserlpdev;
        $this->_fusercomp = $fuercomp;
        $this->_flang_ctrl = $flang_ctrl;
        $this->_formini = $formini;
        $this->_nflg0 = $nflg0;
        $this->_whsdef = $whsdef;
        $this->_posctrl = $posctrl;
        $this->_psdrwopen = $psdrwopen;
        $this->_psdrwport = $psdrwport;
        $this->_psbarcdlp = $psbarcdlp;
        $this->_setconfirm = $setconfirm;
        $this->_defdirname = $defdirname;
        $this->_email = $email;
        $this->_icprefix = $icprefix;
        $this->_dbfilter = $dbfilter;
        $this->_filterna = $filterna;
        $this->_soformdb = $soformdb;
    }

}
