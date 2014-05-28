<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 23/05/14
 * Time: 20:27
 */

namespace Dandelion\MVC\Application\Models;

use Dandelion\Diana;
use Dandelion\Diana\Interfaces;
use Dandelion\MVC\Application\Models\Entities;
use Dandelion\MVC\Application\Models\Repositories\ICPARM00Repository;

require_once MVC_DIR_APP_LIBRARIES . DIRECTORY_SEPARATOR .  'Diana' . DIRECTORY_SEPARATOR . 'Diana.php';

define('MVC_DIR_APP_MODELS_ENTITIES', MVC_DIR_APP_MODELS . DIRECTORY_SEPARATOR . 'Entities');
define('MVC_DIR_APP_MODELS_ENTITIES_BASE', MVC_DIR_APP_MODELS_ENTITIES . DIRECTORY_SEPARATOR . 'Base');
define('MVC_DIR_APP_MODELS_REPOSITORIES', MVC_DIR_APP_MODELS . DIRECTORY_SEPARATOR . 'Repositories');

require_once MVC_DIR_APP_MODELS_ENTITIES_BASE . DIRECTORY_SEPARATOR . 'BaseICPARM00.php';
require_once MVC_DIR_APP_MODELS_ENTITIES . DIRECTORY_SEPARATOR . 'ICPARM00.php';

require_once MVC_DIR_APP_MODELS_REPOSITORIES . DIRECTORY_SEPARATOR . 'BaseRepository.php';
require_once MVC_DIR_APP_MODELS_REPOSITORIES . DIRECTORY_SEPARATOR . 'ICPARM00Repository.php';


class FermenUnitOfWork {
    public $DBDriver;

    public $ICPARM00Repository;

    public function __construct($dbDriver){

        $this->DBDriver = $dbDriver;
        $this->ICPARM00Repository = new ICPARM00Repository($dbDriver, Entities\ICPARM00::toString());

    }
} 