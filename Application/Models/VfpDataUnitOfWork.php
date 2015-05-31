<?php
/**
 * Project:  VFP Business Series
 * Copyright: 2014. VFP Business Solutions, LLC
 */

namespace Dandelion\MVC\Application\Models;

use Dandelion\Diana\UnitOfWork;
use Dandelion\MVC\Application\Models\Entities;
use Dandelion\MVC\Application\Models\Repositories\SysuserRepository;
use Dandelion\MVC\Application\Models\Repositories\SyscompRepository;
use Dandelion\MVC\Application\Models\Repositories\SysexportRepository;
use Dandelion\MVC\Application\Models\Repositories\SOCOMPRepository;

/**
 * VfpData Data Context
 */
class VfpDataUnitOfWork extends UnitOfWork {
    /**
     *
     * @var DBDriver 
     */
    public $DBDriver;

    /**
     *
     * @var SysuserRepository 
     */
    public $SysuserRepository;
    
    /**
     *
     * @var SyscompRepository 
     */
    public $SyscompRepository;
    
    /**
     *
     * @var SysexportRepository 
     */
    public $SysexportRepository;
    
    /**
     *
     * @var SOCOMPRepository 
     */
    public $SOCOMPRepository;
    
    

    public function __construct($dbDriver){
        parent::__construct();
        
        $this->DBDriver = $dbDriver;
        $this->SysuserRepository = new SysuserRepository($dbDriver, Entities\Sysuser::toString());
        $this->SyscompRepository = new SyscompRepository($dbDriver, Entities\Syscomp::toString());
        $this->SysexportRepository = new SysexportRepository($dbDriver, Entities\SYSEXPORT::toString());
        $this->SOCOMPRepository = new SOCOMPRepository($dbDriver, Entities\SOCOMP::toString());
    }

} 