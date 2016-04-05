<?php

/**
 * Project:  VFP Business Series
 * Copyright: 2014. VFP Business Solutions, LLC
 */

namespace Dandelion\MVC\Application\Models\Repositories;

use Dandelion\Diana\Interfaces\IDBDriver;

/**
 * 
 */
class VFPRepository extends BaseRepository  {

    /**
     * @var
     */
    protected $companySuffix;
    
    /**
     * 
     * @param \Dandelion\MVC\Application\Models\Repositories\IDBDriver $dbDriver
     * @param string $entityName
     * @param string $companySuffix
     */
    public function __construct(IDBDriver $dbDriver, $entityName, $companySuffix) {
        parent::__construct($dbDriver, $entityName);

        $this->companySuffix = $companySuffix;
    }

    /**
     * Created by: Victor.
     */
    public function getEntityWhitCompanySuffix(){
        return $this->entityName . $this->companySuffix;
    }

}
