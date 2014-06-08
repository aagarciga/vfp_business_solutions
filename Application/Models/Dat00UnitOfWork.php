<?php

/**
 * Project:  VFP Business Series
 * Copyright: 2014. VFP Business Solutions, LLC
 */

namespace Dandelion\MVC\Application\Models;

use Dandelion\Diana;
use Dandelion\Diana\Interfaces;
use Dandelion\MVC\Application\Models\Entities;
use Dandelion\MVC\Application\Models\Repositories;

require_once MVC_DIR_APP_LIBRARIES . DIRECTORY_SEPARATOR . 'Diana' . DIRECTORY_SEPARATOR . 'Diana.php';

if (!defined('MVC_DIR_APP_MODELS_ENTITIES')) {
    define('MVC_DIR_APP_MODELS_ENTITIES', MVC_DIR_APP_MODELS . DIRECTORY_SEPARATOR . 'Entities');
}
if (!defined('MVC_DIR_APP_MODELS_ENTITIES_BASE')) {
    define('MVC_DIR_APP_MODELS_ENTITIES_BASE', MVC_DIR_APP_MODELS_ENTITIES . DIRECTORY_SEPARATOR . 'Base');
}
if (!defined('MVC_DIR_APP_MODELS_REPOSITORIES')) {
    define('MVC_DIR_APP_MODELS_REPOSITORIES', MVC_DIR_APP_MODELS . DIRECTORY_SEPARATOR . 'Repositories');
}

require_once MVC_DIR_APP_MODELS_ENTITIES_BASE . DIRECTORY_SEPARATOR . 'BaseICPARM00.php';
require_once MVC_DIR_APP_MODELS_ENTITIES_BASE . DIRECTORY_SEPARATOR . 'BaseICBARCODE00.php';
require_once MVC_DIR_APP_MODELS_ENTITIES_BASE . DIRECTORY_SEPARATOR . 'BaseICLOC00.php';
require_once MVC_DIR_APP_MODELS_ENTITIES_BASE . DIRECTORY_SEPARATOR . 'BaseICLOCRUL00.php';
require_once MVC_DIR_APP_MODELS_ENTITIES_BASE . DIRECTORY_SEPARATOR . 'BaseICPARM00.php';
require_once MVC_DIR_APP_MODELS_ENTITIES_BASE . DIRECTORY_SEPARATOR . 'BaseICUPCPARM00.php';
require_once MVC_DIR_APP_MODELS_ENTITIES_BASE . DIRECTORY_SEPARATOR . 'BaseWMSCAN00.php';

require_once MVC_DIR_APP_MODELS_ENTITIES . DIRECTORY_SEPARATOR . 'ICBARCODE00.php';
require_once MVC_DIR_APP_MODELS_ENTITIES . DIRECTORY_SEPARATOR . 'ICLOC00.php';
require_once MVC_DIR_APP_MODELS_ENTITIES . DIRECTORY_SEPARATOR . 'ICLOCRUL00.php';
require_once MVC_DIR_APP_MODELS_ENTITIES . DIRECTORY_SEPARATOR . 'ICPARM00.php';
require_once MVC_DIR_APP_MODELS_ENTITIES . DIRECTORY_SEPARATOR . 'ICUPCPARM00.php';
require_once MVC_DIR_APP_MODELS_ENTITIES . DIRECTORY_SEPARATOR . 'WMSCAN00.php';

require_once MVC_DIR_APP_MODELS_REPOSITORIES . DIRECTORY_SEPARATOR . 'BaseRepository.php';

require_once MVC_DIR_APP_MODELS_REPOSITORIES . DIRECTORY_SEPARATOR . 'ICBARCODE00Repository.php';
require_once MVC_DIR_APP_MODELS_REPOSITORIES . DIRECTORY_SEPARATOR . 'ICLOC00Repository.php';
require_once MVC_DIR_APP_MODELS_REPOSITORIES . DIRECTORY_SEPARATOR . 'ICLOCRUL00Repository.php';
require_once MVC_DIR_APP_MODELS_REPOSITORIES . DIRECTORY_SEPARATOR . 'ICPARM00Repository.php';
require_once MVC_DIR_APP_MODELS_REPOSITORIES . DIRECTORY_SEPARATOR . 'ICUPCPARM00Repository.php';
require_once MVC_DIR_APP_MODELS_REPOSITORIES . DIRECTORY_SEPARATOR . 'WMSCAN00Repository.php';

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
        $this->DBDriver = $dbDriver;
        
        $this->ICBARCODE00Repository = new Repositories\ICBARCODE00Repository($dbDriver, Entities\ICBARCODE00::toString());
        $this->ICLOC00Repository = new Repositories\ICLOC00Repository($dbDriver, Entities\ICLOC00::toString());
        $this->ICLOCRUL00Repository = new Repositories\ICLOCRUL00Repository($dbDriver, Entities\ICLOCRUL00::toString());
        $this->ICPARM00Repository = new Repositories\ICPARM00Repository($dbDriver, Entities\ICPARM00::toString());
        $this->ICUPCPARM00Repository = new Repositories\ICUPCPARM00Repository($dbDriver, Entities\ICUPCPARM00::toString());
        $this->WMSCAN00Repository = new Repositories\WMSCAN00Repository($dbDriver, Entities\WMSCAN00::toString());
    }

}
