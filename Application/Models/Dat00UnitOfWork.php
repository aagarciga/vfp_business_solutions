<?php
/**
 * Project:  VFP Business Series
 * Copyright: 2014. VFP Business Solutions, LLC
 */

namespace Dandelion\MVC\Application\Models;

use Dandelion\Diana;
use Dandelion\Diana\Interfaces;
use Dandelion\MVC\Application\Models\Entities;
use Dandelion\MVC\Application\Models\Repositories\ICPARM00Repository;

require_once MVC_DIR_APP_LIBRARIES . DIRECTORY_SEPARATOR .  'Diana' . DIRECTORY_SEPARATOR . 'Diana.php';

if(!defined('MVC_DIR_APP_MODELS_ENTITIES')){
    define('MVC_DIR_APP_MODELS_ENTITIES', MVC_DIR_APP_MODELS . DIRECTORY_SEPARATOR . 'Entities');
}
if(!defined('MVC_DIR_APP_MODELS_ENTITIES_BASE')){
    define('MVC_DIR_APP_MODELS_ENTITIES_BASE', MVC_DIR_APP_MODELS_ENTITIES . DIRECTORY_SEPARATOR . 'Base');
}
if(!defined('MVC_DIR_APP_MODELS_REPOSITORIES')){
    define('MVC_DIR_APP_MODELS_REPOSITORIES', MVC_DIR_APP_MODELS . DIRECTORY_SEPARATOR . 'Repositories');
}


require_once MVC_DIR_APP_MODELS_ENTITIES_BASE . DIRECTORY_SEPARATOR . 'BaseICPARM00.php';
require_once MVC_DIR_APP_MODELS_ENTITIES . DIRECTORY_SEPARATOR . 'ICPARM00.php';

require_once MVC_DIR_APP_MODELS_REPOSITORIES . DIRECTORY_SEPARATOR . 'BaseRepository.php';
require_once MVC_DIR_APP_MODELS_REPOSITORIES . DIRECTORY_SEPARATOR . 'ICPARM00Repository.php';

/**
 * Dat00 Data Context
 */
class Dat00UnitOfWork {
    
    /**
     *
     * @var DBDriver 
     */
    public $DBDriver;

    /**
     * 
     * @var ICPARM00Repository 
     */
    public $ICPARM00Repository;

    public function __construct($dbDriver){

        $this->DBDriver = $dbDriver;
        $this->ICPARM00Repository = new ICPARM00Repository($dbDriver, Entities\ICPARM00::toString());

    }
} 