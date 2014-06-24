<?php
/**
 * Project:  VFP Business Series
 * Copyright: 2014. VFP Business Solutions, LLC
 */

namespace Dandelion\MVC\Application\Models;

use Dandelion\Diana\UnitOfWork;
use Dandelion\MVC\Application\Models\Entities;
use Dandelion\MVC\Application\Models\Repositories\SysuserRepository;

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

    public function __construct($dbDriver){
        parent::__construct();
        
        $this->DBDriver = $dbDriver;
        $this->SysuserRepository = new SysuserRepository($dbDriver, Entities\Sysuser::toString());

    }

} 