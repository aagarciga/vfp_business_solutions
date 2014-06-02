<?php
/**
 * Project:  VFP Business Series
 * Copyright: 2014. VFP Business Solutions, LLC
 */

namespace Dandelion\MVC\Application\Models;

use Dandelion\Diana;
use Dandelion\Diana\Interfaces;
use Dandelion\MVC\Application\Models\Entities;
use Dandelion\MVC\Application\Models\Repositories\SysuserRepository;

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

require_once MVC_DIR_APP_MODELS_ENTITIES_BASE . DIRECTORY_SEPARATOR . 'BaseSysuser.php';
require_once MVC_DIR_APP_MODELS_ENTITIES . DIRECTORY_SEPARATOR . 'Sysuser.php';
require_once MVC_DIR_APP_MODELS_REPOSITORIES . DIRECTORY_SEPARATOR . 'BaseRepository.php';
require_once MVC_DIR_APP_MODELS_REPOSITORIES . DIRECTORY_SEPARATOR . 'SysuserRepository.php';

/**
 * VfpData Data Context
 */
class VfpDataUnitOfWork {
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

        $this->DBDriver = $dbDriver;
        $this->SysuserRepository = new SysuserRepository($dbDriver, Entities\Sysuser::toString());

    }

} 