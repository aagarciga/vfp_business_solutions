<?php

namespace Dandelion\MVC\Core\Definitions{
    
    /**
     * 
     * GLOBAL DEFINITIONS
     */

    //When __DIR__ is not defined, prior 5.3.0
    if ( !defined('__DIR__') ) 
        define('__DIR__', dirname(__FILE__)); 

    define('MVC_DIR_ROOT' , __DIR__);

    define('MVC_DIR_CORE',      MVC_DIR_ROOT . DIRECTORY_SEPARATOR . 'Core');
    define('MVC_DIR_APP',       MVC_DIR_ROOT . DIRECTORY_SEPARATOR . 'Application');
    define('MVC_DIR_PUBLIC',    MVC_DIR_ROOT . DIRECTORY_SEPARATOR . 'Public');

    /**
     * 
     * CORE DEFINITIONS
     */

    define('MVC_DIR_CORE_DATA',         MVC_DIR_CORE . DIRECTORY_SEPARATOR . 'Data');
    define('MVC_DIR_CORE_INTERFACES',   MVC_DIR_CORE . DIRECTORY_SEPARATOR . 'Interfaces');

    /**
     * 
     * APPLICATION DEFINITIONS
     */

    define('MVC_DIR_APP_CONTROLLERS',   MVC_DIR_APP . DIRECTORY_SEPARATOR . 'Controllers');
    define('MVC_DIR_APP_DATA',          MVC_DIR_APP . DIRECTORY_SEPARATOR . 'Data');
    define('MVC_DIR_APP_LIBRARIES',     MVC_DIR_APP . DIRECTORY_SEPARATOR . 'Libraries');
    define('MVC_DIR_APP_MODELS',         MVC_DIR_APP . DIRECTORY_SEPARATOR . 'Models');
    define('MVC_DIR_APP_VIEWS',         MVC_DIR_APP . DIRECTORY_SEPARATOR . 'Views');

    define('MVC_DIR_APP_VIEWS_SHARED',  MVC_DIR_APP_VIEWS . DIRECTORY_SEPARATOR . 'Shared');

    /**
     * 
     * PUBLIC DEFINITIONS
     */
    
    define('MVC_DIR_PUBLIC_IMAGES',     MVC_DIR_PUBLIC . DIRECTORY_SEPARATOR . 'Images');
    define('MVC_DIR_PUBLIC_SCRIPTS',    MVC_DIR_PUBLIC . DIRECTORY_SEPARATOR . 'Scripts');
    define('MVC_DIR_PUBLIC_SHARED',     MVC_DIR_PUBLIC . DIRECTORY_SEPARATOR . 'Shared');
    define('MVC_DIR_PUBLIC_UPLOADS',    MVC_DIR_PUBLIC . DIRECTORY_SEPARATOR . 'Uploads');
    define('MVC_DIR_PUBLIC_STYLES',     MVC_DIR_PUBLIC . DIRECTORY_SEPARATOR . 'Styles');
    
    define('MVC_DIR_PUBLIC_SHARED_IMAGES',  MVC_DIR_PUBLIC_SHARED . DIRECTORY_SEPARATOR . 'Images');
    define('MVC_DIR_PUBLIC_SHARED_SCRIPTS', MVC_DIR_PUBLIC_SHARED . DIRECTORY_SEPARATOR . 'Scripts');
    define('MVC_DIR_PUBLIC_SHARED_STYLES',  MVC_DIR_PUBLIC_SHARED . DIRECTORY_SEPARATOR . 'Styles');
    
}
?>
