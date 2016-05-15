<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 13/04/2016
 * Time: 07:06
 */

namespace Dandelion\MVC\Core;

use Dandelion\MVC\Core\Interfaces;

require_once MVC_DIR_CORE_INTERFACES . DIRECTORY_SEPARATOR . 'IDictionary.php';

/**
 * Dandelion MVC request definition.
 *
 * @author      Alex Alvarez G�rciga <aagarciga@gmail.com>
 * @copyright   2011-2016 Alex Alvarez Gárciga / Dandelion (http://www.thedandelionproject.com)
 * @license     http://www.opensource.org/licenses/mit-license.php MIT
 * @link        http://www.thedandelionproject.com
 * @ignore
 */
final class Session implements Interfaces\IDictionary
{
    /**
     * Session constructor.
     */
    public function __construct()
    {
        session_start();
    }

    /**
     * @param string $key
     * @param mixed $value
     */
    public final function __set($key, $value)
    {
        $this->$_SESSION[$key] = $value;
    }

    /**
     * @param string $key
     * @return mixed|null
     */
    public final function __get($key)
    {
        if (array_key_exists($key, $this->$_SESSION)) {
            return $this->$_SESSION[$key];
        }
        return null;
    }

    /**
     * @param $key
     * @param $defaultValue
     * @return mixed
     */
    public function getSessionValue($key, $defaultValue){
        return isset($_SESSION[$key]) ? $_SESSION[$key] : $defaultValue;
    }
}