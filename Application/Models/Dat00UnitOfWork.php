<?php

/**
 * Project:  VFP Business Series
 * Copyright: 2014. VFP Business Solutions, LLC
 */

namespace Dandelion\MVC\Application\Models;

use Dandelion\Diana\UnitOfWork;
use Dandelion\Diana\Interfaces;
use Dandelion\MVC\Application\Models\Entities;
use Dandelion\MVC\Application\Models\Repositories;

/**
 * Dat00 Data Context
 */
class Dat00UnitOfWork extends UnitOfWork {

    /**
     *
     * @var DBDriver 
     */
    public $DBDriver;

    /**
     * 
     * @var ICBARCODE00Repository 
     */
    public $ICBARCODE00Repository;

    /**
     * 
     * @var ICLOC00Repository 
     */
    public $ICLOC00Repository;

    /**
     * 
     * @var ICLOCRUL00Repository 
     */
    public $ICLOCRUL00Repository;

    /**
     * 
     * @var ICPARM00Repository 
     */
    public $ICPARM00Repository;

    /**
     * 
     * @var ICUPCPARM00Repository 
     */
    public $ICUPCPARM00Repository;

    /**
     * 
     * @var WMSCAN00Repository 
     */
    public $WMSCAN00Repository;

    /**
     * 
     * @param Interfaces\IDBDriver $dbDriver
     */
    public function __construct($dbDriver) {
        parent::__construct();
        $this->DBDriver = $dbDriver;
        
        $this->ICBARCODE00Repository = new Repositories\ICBARCODE00Repository($dbDriver, Entities\ICBARCODE00::toString());
        $this->ICLOC00Repository = new Repositories\ICLOC00Repository($dbDriver, Entities\ICLOC00::toString());
        $this->ICLOCRUL00Repository = new Repositories\ICLOCRUL00Repository($dbDriver, Entities\ICLOCRUL00::toString());
        $this->ICPARM00Repository = new Repositories\ICPARM00Repository($dbDriver, Entities\ICPARM00::toString());
        $this->ICUPCPARM00Repository = new Repositories\ICUPCPARM00Repository($dbDriver, Entities\ICUPCPARM00::toString());
        $this->WMSCAN00Repository = new Repositories\WMSCAN00Repository($dbDriver, Entities\WMSCAN00::toString());
    }

}
