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
 * Dat Data Context (Dependency Injection Container)
 */
class DatUnitOfWork extends UnitOfWork {

    /**
     *
     * @var DBDriver 
     */
    public $DBDriver;

    /**
     * 
     * @var ICBARCODERepository 
     */
    public $ICBARCODERepository;

    /**
     * 
     * @var ICLOCRepository 
     */
    public $ICLOCRepository;

    /**
     * 
     * @var ICLOCRULRepository 
     */
    public $ICLOCRULRepository;

    /**
     * 
     * @var ICPARMRepository 
     */
    public $ICPARMRepository;

    /**
     * 
     * @var ICUPCPARMRepository 
     */
    public $ICUPCPARMRepository;

    /**
     * 
     * @var WMSCANRepository 
     */
    public $WMSCANRepository;

    /**
     * 
     * @var ICITLORepository 
     */
    public $ICITLORepository;

    /**
     * 
     * @var ICWHSRepository 
     */
    public $ICWHSRepository;

    /**
     * 
     * @var POHDOPRepository 
     */
    public $POHDOPRepository;

    /**
     * 
     * @var POITOPRepository 
     */
    public $POITOPRepository;

    /**
     * 
     * @var SOSHPRELHRepository 
     */
    public $SOSHPRELHRepository;

    /**
     * 
     * @var SOSHPRELRepository 
     */
    public $SOSHPRELRepository;
    
    /**
     * 
     * @var WMPACKRepository 
     */
    public $WMPACKRepository;

    /**
     * 
     * @var SOHEADRepository 
     */
    public $SOHEADRepository;

    /**
     * 
     * @param Interfaces\IDBDriver $dbDriver
     */
    public function __construct($dbDriver, $companySuffix = "00") {
        parent::__construct();
        $this->DBDriver = $dbDriver;

        $this->ICBARCODERepository = new Repositories\ICBARCODERepository($dbDriver, Entities\ICBARCODE::toString(), $companySuffix);
        $this->ICLOCRepository = new Repositories\ICLOCRepository($dbDriver, Entities\ICLOC::toString(), $companySuffix);
        $this->ICLOCRULRepository = new Repositories\ICLOCRULRepository($dbDriver, Entities\ICLOCRUL::toString(), $companySuffix);
        $this->ICPARMRepository = new Repositories\ICPARMRepository($dbDriver, Entities\ICPARM::toString(), $companySuffix);
        $this->ICUPCPARMRepository = new Repositories\ICUPCPARMRepository($dbDriver, Entities\ICUPCPARM::toString(), $companySuffix);
        $this->WMSCANRepository = new Repositories\WMSCANRepository($dbDriver, Entities\WMSCAN::toString(), $companySuffix);
        $this->ICITLORepository = new Repositories\ICITLORepository($dbDriver, Entities\ICITLO::toString(), $companySuffix);
        $this->ICWHSRepository = new Repositories\ICWHSRepository($dbDriver, Entities\ICWHS::toString(), $companySuffix);
        $this->POHDOPRepository = new Repositories\POHDOPRepository($dbDriver, Entities\POHDOP::toString(), $companySuffix);
        $this->POITOPRepository = new Repositories\POITOPRepository($dbDriver, Entities\POITOP::toString(), $companySuffix);

        $this->SOSHPRELHRepository = new Repositories\SOSHPRELHRepository($dbDriver, Entities\SOSHPRELH::toString(), $companySuffix);
        $this->SOSHPRELRepository = new Repositories\SOSHPRELRepository($dbDriver, Entities\SOSHPREL::toString(), $companySuffix);
        $this->WMPACKRepository = new Repositories\WMPACKRepository($dbDriver, Entities\WMPACK::toString(), $companySuffix);
        $this->SOHEADRepository = new Repositories\SOHEADRepository($dbDriver, Entities\SOHEAD::toString(), $companySuffix);
    }

}
