<?php

/**
 * Project:  VFP Business Series
 * Copyright: 2014. VFP Business Solutions, LLC
 */

namespace Dandelion\MVC\Application\Controllers\APDashboard\Models;

class APDashboardViewModel
{

    protected $_vendno;
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
     * @param $_vendno
     * @param $_company
     * @param $_current
     * @param $_interval11_30
     * @param $_interval31_45
     * @param $_interval46_60
     * @param $_interval61_90
     * @param $_morethan91
     * @param $_balance
     */
    public function __construct($_vendno, $_company, $_current, $_interval11_30, $_interval31_45, $_interval46_60, $_interval61_90, $_morethan91, $_balance)
    {
        $this->_vendno = trim($_vendno);
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
    public function getVendno()
    {
        return $this->_vendno;
    }

    /**
     * @param mixed $vendno
     */
    public function setVendno($vendno)
    {
        $this->_vendno = $vendno;
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
    public function getCurrent($formated = false)
    {
        return ($formated) ? $this->formatToCurrency($this->_current) : $this->_current;
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
    public function getInterval1130($formated = false)
    {
        return ($formated) ? $this->formatToCurrency($this->_interval11_30) : $this->_interval11_30;
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
    public function getInterval3145($formated = false)
    {
        return ($formated) ? $this->formatToCurrency($this->_interval31_45) : $this->_interval31_45;
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
    public function getInterval4660($formated = false)
    {
        return ($formated) ? $this->formatToCurrency($this->_interval46_60) : $this->_interval46_60;
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
    public function getInterval6190($formated = false)
    {
        return ($formated) ? $this->formatToCurrency($this->_interval61_90) : $this->_interval61_90;
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
    public function getMorethan91($formated = false)
    {
        return ($formated) ? $this->formatToCurrency($this->_morethan91) : $this->_morethan91;
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
    public function getBalance($formated = false)
    {
        return ($formated) ? $this->formatToCurrency($this->_balance) : $this->_balance;
    }

    /**
     * @param mixed $balance
     */
    public function setBalance($balance)
    {
        $this->_balance = $balance;
    }


    private function formatToCurrency($number)
    {
        return number_format($number, 2, '.', ',');
    }
}
