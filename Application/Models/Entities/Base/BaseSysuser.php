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
    protected $_fuercomp;
    protected $_flang_ctrl;
    protected $_formini;
    protected $_nflg0;
    protected $_whsdef;
    protected $_posctrl;
    protected $_psdrwopen;
    protected $_psdrwport;
    protected $_psbarcdlp;
    protected $_setconfirm;
    protected $_derdirname;
    protected $_email;
    protected $_custno;
    protected $_icprefix;

    public static function toString(){
        return self::$_name;
    }

    /**
     * @return mixed
     */
    public function getUserid()
    {
        return $this->_userid;
    }

    /**
     * @param mixed $userid
     */
    public function setUserid($userid)
    {
        $this->_userid = $userid;
    }

    /**
     * @return mixed
     */
    public function getUsercode()
    {
        return $this->_usercode;
    }

    /**
     * @param mixed $usercode
     */
    public function setUsercode($usercode)
    {
        $this->_usercode = $usercode;
    }

    /**
     * @return mixed
     */
    public function getUsername()
    {
        return $this->_username;
    }

    /**
     * @param mixed $username
     */
    public function setUsername($username)
    {
        $this->_username = $username;
    }

    /**
     * @return mixed
     */
    public function getUserpass()
    {
        return $this->_userpass;
    }

    /**
     * @param mixed $userpass
     */
    public function setUserpass($userpass)
    {
        $this->_userpass = $userpass;
    }

    /**
     * @return mixed
     */
    public function getGroup()
    {
        return $this->_group;
    }

    /**
     * @param mixed $group
     */
    public function setGroup($group)
    {
        $this->_group = $group;
    }

    /**
     * @return mixed
     */
    public function getUserstat0()
    {
        return $this->_userstat0;
    }

    /**
     * @param mixed $userstat0
     */
    public function setUserstat0($userstat0)
    {
        $this->_userstat0 = $userstat0;
    }

    /**
     * @return mixed
     */
    public function getOndate()
    {
        return $this->_ondate;
    }

    /**
     * @param mixed $ondate
     */
    public function setOndate($ondate)
    {
        $this->_ondate = $ondate;
    }

    /**
     * @return mixed
     */
    public function getOffdate()
    {
        return $this->_offdate;
    }

    /**
     * @param mixed $offdate
     */
    public function setOffdate($offdate)
    {
        $this->_offdate = $offdate;
    }

    /**
     * @return mixed
     */
    public function getOntime()
    {
        return $this->_ontime;
    }

    /**
     * @param mixed $ontime
     */
    public function setOntime($ontime)
    {
        $this->_ontime = $ontime;
    }

    /**
     * @return mixed
     */
    public function getOfftime()
    {
        return $this->_offtime;
    }

    /**
     * @param mixed $offtime
     */
    public function setOfftime($offtime)
    {
        $this->_offtime = $offtime;
    }

    /**
     * @return mixed
     */
    public function getFscreen()
    {
        return $this->_fscreen;
    }

    /**
     * @param mixed $fscreen
     */
    public function setFscreen($fscreen)
    {
        $this->_fscreen = $fscreen;
    }

    /**
     * @return mixed
     */
    public function getFstartup()
    {
        return $this->_fstartup;
    }

    /**
     * @param mixed $fstartup
     */
    public function setFstartup($fstartup)
    {
        $this->_fstartup = $fstartup;
    }

    /**
     * @return mixed
     */
    public function getFuserlpdev()
    {
        return $this->_fuserlpdev;
    }

    /**
     * @param mixed $fuserlpdev
     */
    public function setFuserlpdev($fuserlpdev)
    {
        $this->_fuserlpdev = $fuserlpdev;
    }

    /**
     * @return mixed
     */
    public function getFuercomp()
    {
        return $this->_fuercomp;
    }

    /**
     * @param mixed $fuercomp
     */
    public function setFuercomp($fuercomp)
    {
        $this->_fuercomp = $fuercomp;
    }

    /**
     * @return mixed
     */
    public function getFlangCtrl()
    {
        return $this->_flang_ctrl;
    }

    /**
     * @param mixed $flang_ctrl
     */
    public function setFlangCtrl($flang_ctrl)
    {
        $this->_flang_ctrl = $flang_ctrl;
    }

    /**
     * @return mixed
     */
    public function getFormini()
    {
        return $this->_formini;
    }

    /**
     * @param mixed $formini
     */
    public function setFormini($formini)
    {
        $this->_formini = $formini;
    }

    /**
     * @return mixed
     */
    public function getNflg0()
    {
        return $this->_nflg0;
    }

    /**
     * @param mixed $nflg0
     */
    public function setNflg0($nflg0)
    {
        $this->_nflg0 = $nflg0;
    }

    /**
     * @return mixed
     */
    public function getWhsdef()
    {
        return $this->_whsdef;
    }

    /**
     * @param mixed $whsdef
     */
    public function setWhsdef($whsdef)
    {
        $this->_whsdef = $whsdef;
    }

    /**
     * @return mixed
     */
    public function getPosctrl()
    {
        return $this->_posctrl;
    }

    /**
     * @param mixed $posctrl
     */
    public function setPosctrl($posctrl)
    {
        $this->_posctrl = $posctrl;
    }

    /**
     * @return mixed
     */
    public function getPsdrwopen()
    {
        return $this->_psdrwopen;
    }

    /**
     * @param mixed $psdrwopen
     */
    public function setPsdrwopen($psdrwopen)
    {
        $this->_psdrwopen = $psdrwopen;
    }

    /**
     * @return mixed
     */
    public function getPsdrwport()
    {
        return $this->_psdrwport;
    }

    /**
     * @param mixed $psdrwport
     */
    public function setPsdrwport($psdrwport)
    {
        $this->_psdrwport = $psdrwport;
    }

    /**
     * @return mixed
     */
    public function getPsbarcdlp()
    {
        return $this->_psbarcdlp;
    }

    /**
     * @param mixed $psbarcdlp
     */
    public function setPsbarcdlp($psbarcdlp)
    {
        $this->_psbarcdlp = $psbarcdlp;
    }

    /**
     * @return mixed
     */
    public function getSetconfirm()
    {
        return $this->_setconfirm;
    }

    /**
     * @param mixed $setconfirm
     */
    public function setSetconfirm($setconfirm)
    {
        $this->_setconfirm = $setconfirm;
    }

    /**
     * @return mixed
     */
    public function getDerdirname()
    {
        return $this->_derdirname;
    }

    /**
     * @param mixed $derdirname
     */
    public function setDerdirname($derdirname)
    {
        $this->_derdirname = $derdirname;
    }

    /**
     * @return mixed
     */
    public function getCustno()
    {
        return $this->_custno;
    }

    /**
     * @param mixed $custno
     */
    public function setCustno($custno)
    {
        $this->_custno = $custno;
    }

    /**
     * @return mixed
     */
    public function getIcprefix()
    {
        return $this->_icprefix;
    }

    /**
     * @param mixed $icprefix
     */
    public function setIcprefix($icprefix)
    {
        $this->_icprefix = $icprefix;
    }

    public function __construct( $userid,
                                $usercode,
                                $username,
                                $userpass,
                                $group,
                                $userstat0 = '',
                                $ondate = '',
                                $offdate = '',
                                $ontime = '',
                                $offtime = '',
                                $fscreen = '',
                                $fstartup = '',
                                $fuserlpdev = '',
                                $fuercomp = '',
                                $flang_ctrl = '',
                                $formini = '',
                                $nflg0 = '',
                                $whsdef = '',
                                $posctrl = '',
                                $psdrwopen = '',
                                $psdrwport = '',
                                $psbarcdlp = '',
                                $setconfirm = '',
                                $derdirname = '',
                                $email = '',
                                $custno = '',
                                $icprefix = ''  ){

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
        $this->_fuercomp = $fuercomp;
        $this->_flang_ctrl = $flang_ctrl;
        $this->_formini = $formini;
        $this->_nflg0 = $nflg0;
        $this->_whsdef = $whsdef;
        $this->_posctrl = $posctrl;
        $this->_psdrwopen = $psdrwopen;
        $this->_psdrwport = $psdrwport;
        $this->_psbarcdlp = $psbarcdlp;
        $this->_setconfirm = $setconfirm;
        $this->_derdirname = $derdirname;
        $this->_email = $email;
        $this->_custno = $custno;
        $this->_icprefix = $icprefix;
    }

} 