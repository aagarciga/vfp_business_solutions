<?php

/**
 * Project:  VFP Business Series
 * Copyright: 2014. VFP Business Solutions, LLC
 */

namespace Dandelion\MVC\Application\Controllers\ARDashboard\Models;

class ARDashboardViewModel {
    
    protected $_custno;
    protected $_company;
    protected $_current;
    protected $_interval11_30;
    protected $_interval31_45;
    protected $_interval46_60;
    protected $_interval61_90;
    protected $_morethan91;
    protected $_balance;

    /**
     * QuoteDashboardViewModel constructor.
     * @param $_custno
     * @param $_company
     * @param $_current
     * @param $_interval11_30
     * @param $_interval31_45
     * @param $_interval46_60
     * @param $_interval61_90
     * @param $_morethan91
     * @param $_balance
     */
    public function __construct($_custno, $_company, $_current, $_interval11_30, $_interval31_45, $_interval46_60, $_interval61_90, $_morethan91, $_balance)
    {
        $this->_custno = trim($_custno);
        $this->_company = trim($_company);
        $this->_current = trim($_current);
        $this->_interval11_30 = trim($_interval11_30);
        $this->_interval31_45 = trim($_interval31_45);
        $this->_interval46_60 = trim($_interval46_60);
        $this->_interval61_90 = trim($_interval61_90);
        $this->_morethan91 = trim($_morethan91);
        $this->_balance = trim($_balance);
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
    public function getCompany()
    {
        return $this->_company;
    }

    /**
     * @param mixed $company
     */
    public function setCompany($company)
    {
        $this->_company = $company;
    }

    /**
     * @return mixed
     */
    public function getCurrent()
    {
        return $this->_current;
    }

    /**
     * @param mixed $current
     */
    public function setCurrent($current)
    {
        $this->_current = $current;
    }

    /**
     * @return mixed
     */
    public function getInterval1130()
    {
        return $this->_interval11_30;
    }

    /**
     * @param mixed $interval11_30
     */
    public function setInterval1130($interval11_30)
    {
        $this->_interval11_30 = $interval11_30;
    }

    /**
     * @return mixed
     */
    public function getInterval3145()
    {
        return $this->_interval31_45;
    }

    /**
     * @param mixed $interval31_45
     */
    public function setInterval3145($interval31_45)
    {
        $this->_interval31_45 = $interval31_45;
    }

    /**
     * @return mixed
     */
    public function getInterval4660()
    {
        return $this->_interval46_60;
    }

    /**
     * @param mixed $interval46_60
     */
    public function setInterval4660($interval46_60)
    {
        $this->_interval46_60 = $interval46_60;
    }

    /**
     * @return mixed
     */
    public function getInterval6190()
    {
        return $this->_interval61_90;
    }

    /**
     * @param mixed $interval61_90
     */
    public function setInterval6190($interval61_90)
    {
        $this->_interval61_90 = $interval61_90;
    }

    /**
     * @return mixed
     */
    public function getMorethan91()
    {
        return $this->_morethan91;
    }

    /**
     * @param mixed $morethan91
     */
    public function setMorethan91($morethan91)
    {
        $this->_morethan91 = $morethan91;
    }

    /**
     * @return mixed
     */
    public function getBalance()
    {
        return $this->_balance;
    }

    /**
     * @param mixed $balance
     */
    public function setBalance($balance)
    {
        $this->_balance = $balance;
    }



    

}
