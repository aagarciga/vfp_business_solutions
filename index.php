<?php

namespace Dandelion\MVC

{

    /**
     * Dandelion MVC
     * (C) 2011-2013 Alex Alvarez Gárciga
     */
    
    use Dandelion\MVC\Core\Definitions;
    use Dandelion\MVC\Core\Exceptions;
    
    /*
    * show off @method
    * 
    * This function is for Auto Class Loader feature. 
    * @internal Please don't modify.
    * 
    * {@internal The Auto Class Loader feature only work for classes in to the
    *            __autoload folder list:
    *              MVC_DIR_CORE
    *              MVC_DIR_CORE_DATA
    *              MVC_DIR_CORE_INTERFACES
    *              MVC_DIR_APP_CONTROLLERS
    *              MVC_DIR_APP_LIBRARIES
    *              MVC_DIR_APP_MODELS
    * }}
    */
    function __autoload($className) 
    {
        if (        is_file(    MVC_DIR_CORE .              DIRECTORY_SEPARATOR . $className . '.php'))
            require_once        MVC_DIR_CORE .              DIRECTORY_SEPARATOR . $className . '.php';
        else if (   is_file(    MVC_DIR_CORE_DATA .         DIRECTORY_SEPARATOR . $className . '.php'))
            require_once        MVC_DIR_CORE_DATA .         DIRECTORY_SEPARATOR . $className . '.php';
        else if (   is_file(    MVC_DIR_CORE_INTERFACES .   DIRECTORY_SEPARATOR . $className . '.php'))
            require_once        MVC_DIR_CORE_INTERFACES .   DIRECTORY_SEPARATOR . $className . '.php';
        else if (   is_file(    MVC_DIR_APP_CONTROLLERS .   DIRECTORY_SEPARATOR . $className . '.php'))
            require_once        MVC_DIR_APP_CONTROLLERS .   DIRECTORY_SEPARATOR . $className . '.php';
        else if (   is_file(    MVC_DIR_APP_LIBRARIES .     DIRECTORY_SEPARATOR . $className . '.php'))
            require_once        MVC_DIR_APP_LIBRARIES .     DIRECTORY_SEPARATOR . $className . '.php';
        else if (   is_file(    MVC_DIR_APP_MODELS .        DIRECTORY_SEPARATOR . $className . '.php'))
            require_once        MVC_DIR_APP_MODELS .        DIRECTORY_SEPARATOR . $className . '.php';
        else
            throw new ClassNotFoundException($className);
    }
    
    /**
     * Index Class
     * 
     * @internal Front Controller instance for Singleton behavior
     */
    final class index extends FrontController 
    {
        
        /**
         * Main method
         * 
         * @internal This method is the Dispatcher Gateway
         * @return self 
         */
        public static function Main() 
        {
            session_start();
            error_reporting(E_ALL);
            return new index();
        }        
    }
}    
    /*
     * Calling to exit() will flush all buffers started by ob_start() 
     * to default output.
     * 
     * If you want to avoid calling exit() in FastCGI, but really, 
     * positively want to exit cleanly from nested function call 
     * or include, consider doing it the Python way: 
     */

    try 
    {
        Dandelion\MVC\index::Main()->Dispatch();
    } 
    catch (Exceptions\SystemExit $e) {unset($e);}
    catch (Exceptions\ClassNotFoundException $e) {echo $e->getMessage();}
    catch (Exceptions\ConfigurationNotChargedException $e) {echo $e->getMessage();}    
    catch (Exception $e) {echo $e->getMessage();}
    

?>
