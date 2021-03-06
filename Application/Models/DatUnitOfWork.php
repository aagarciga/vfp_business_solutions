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
     * @var CompanySuffix 
     */
    public $CompanySuffix;

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
     * @var SOEDISTATUSRepository 
     */
    public $SOEDISTATUSRepository;
    
    /**
     * 
     * @var ARCOMPRepository 
     */
    public $ARCOMPRepository;
    
    /**
     * 
     * @var SWVESSELRepository 
     */
    public $SWVESSELRepository;
    
    /**
     * 
     * @var SOTYPEORDRepository 
     */
    public $SOTYPEORDRepository;
    
    /**
     * 
     * @var SWINSPRepository 
     */
    public $SWINSPRepository;
    
    /**
     * 
     * @var SWINSPRepository 
     */
    public $GLCSTMSTRepository;
    
    /**
     *
     * @var SOCOMPRepository 
     */
    public $SOCOMPRepository;
    
    /**
     *
     * @var SOITEMRepository 
     */
    public $SOITEMRepository;
    
    /**
     *
     * @var SYCOMPRepository 
     */
    public $SYCOMPRepository;
    
    /**
     *
     * @var QUHSTHRepository
     */
    public $QUHSTHRepository;
    
    /**
     *
     * @var QUHSTIRepository
     */
    public $QUHSTIRepository;

    /**
     *
     * @var AROPENRepository
     */
    public $AROPENRepository;
    
    /**
     *
     * @var APOPENRepository
     */
    public $APOPENRepository;
    
    /**
     *
     * @var GLHSTRepository
     */
    public $GLHSTRepository;

    /**
     *
     * @var ARCUSTRepository
     */
    public $ARCUSTRepository;

    /**
     *
     * @var APVENDRepository
     */
    public $APVENDTRepository;

    /**
     *
     * @var SWEQUIPRepository
     */
    public $SWEQUIPRepository;

    /**
     *
     * @var SWEQUIPDRepository
     */
    public $SWEQUIPDRepository;



    /**
     * 
     * @param Interfaces\IDBDriver $dbDriver
     */
    public function __construct($dbDriver, $companySuffix = "00") {
        parent::__construct();
        $this->DBDriver = $dbDriver;
        $this->CompanySuffix = $companySuffix; 

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
        $this->SOEDISTATUSRepository = new Repositories\SOEDISTATUSRepository($dbDriver, Entities\SOEDISTATUS::toString(), $companySuffix);
        $this->ARCOMPRepository = new Repositories\ARCOMPRepository($dbDriver, Entities\ARCOMP::toString(), $companySuffix);
        $this->SWVESSELRepository = new Repositories\SWVESSELRepository($dbDriver, Entities\SWVESSEL::toString(), $companySuffix);
        $this->SOTYPEORDRepository = new Repositories\SOTYPEORDRepository($dbDriver, Entities\SOTYPEORD::toString(), $companySuffix);
        $this->SWINSPRepository = new Repositories\SWINSPRepository($dbDriver, Entities\SWINSP::toString(), $companySuffix);
        $this->GLCSTMSTRepository = new Repositories\GLCSTMSTRepository($dbDriver, Entities\GLCSTMST::toString(), $companySuffix);
        $this->SOCOMPRepository = new Repositories\SOCOMPRepository($dbDriver, Entities\SOCOMP::toString(), $companySuffix);
        $this->SOITEMRepository = new Repositories\SOITEMRepository($dbDriver, Entities\SOITEM::toString(), $companySuffix);
        $this->SYCOMPRepository = new Repositories\SYCOMPRepository($dbDriver, Entities\SYCOMP::toString(), $companySuffix);
        $this->QUHSTHRepository = new Repositories\QUHSTHRepository($dbDriver, Entities\QUHSTH::toString(), $companySuffix);
        $this->QUHSTIRepository = new Repositories\QUHSTIRepository($dbDriver, Entities\QUHSTI::toString(), $companySuffix);
        $this->AROPENRepository = new Repositories\AROPENRepository($dbDriver, Entities\AROPEN::toString(), $companySuffix);
        $this->APOPENRepository = new Repositories\APOPENRepository($dbDriver, Entities\APOPEN::toString(), $companySuffix);
        $this->GLHSTRepository = new Repositories\GLHSTRepository($dbDriver, Entities\GLHST::toString(), $companySuffix);
        $this->ARCUSTRepository = new Repositories\ARCUSTRepository($dbDriver, Entities\ARCUST::toString(), $companySuffix);
        $this->APVENDRepository = new Repositories\APVENDRepository($dbDriver, Entities\APVEND::toString(), $companySuffix);
        $this->SWEQUIPRepository = new Repositories\SWEQUIPRepository($dbDriver, Entities\SWEQUIP::toString(), $companySuffix);
        $this->SWEQUIPDRepository = new Repositories\SWEQUIPDRepository($dbDriver, Entities\SWEQUIPD::toString(), $companySuffix);
    }
}
