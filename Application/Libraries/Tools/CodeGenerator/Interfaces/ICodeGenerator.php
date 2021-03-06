<?php
/**
 * User: Victor
 * Date: 25/01/2016
 * Time: 14:42
 * @author    Victor Luis Aguado Leon <victorluisaguadoleon@gmail.com>
 * @copyright 2011-2014 Alex Alvarez G�rciga / Dandelion (http://www.thedandelionproject.com)
 * @license   http://www.opensource.org/licenses/mit-license.php MIT
 * @link      http://www.thedandelionproject.com
 */

namespace Dandelion\Tools\CodeGenerator;

use Dandelion\Tools\CodeGenerator\IVirtualCode;

interface ICodeGenerator extends IVirtualCode
{
    /**
     * @param IVirtualCode $virtualCode
     * @return ICodeGenerator
     */
    function InsertCode($virtualCode);

    /**
     * @return bool
     */
    function isEmpty();
}