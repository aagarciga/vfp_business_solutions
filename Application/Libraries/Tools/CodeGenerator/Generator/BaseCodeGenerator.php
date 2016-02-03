<?php
/**
 * User: Victor
 * Date: 01/02/2016
 * Time: 20:40
 * @author    Victor Luis Aguado Leon <victorluisaguadoleon@gmail.com>
 * @copyright 2011-2014 Alex Alvarez G?rciga / Dandelion (http://www.thedandelionproject.com)
 * @license   http://www.opensource.org/licenses/mit-license.php MIT
 * @link      http://www.thedandelionproject.com
 */

namespace Dandelion\Tools\CodeGenerator;

use Dandelion\Tools\CodeGenerator\ICodeGenerator;

abstract class BaseCodeGenerator implements ICodeGenerator
{
    protected $virtualCodes;
    /**
     * HtmlGenerator constructor.
     */
    public function __construct()
    {
        $this->virtualCodes = array();
    }

    abstract function getCode();

    function InsertCode($virtualCode)
    {
        $this->virtualCodes[] = $virtualCode;
    }
}