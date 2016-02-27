<?php
/**
 * User: Victor
 * Date: 03/02/2016
 * Time: 10:20
 * @author    Victor Luis Aguado Leon <victorluisaguadoleon@gmail.com>
 * @copyright 2011-2014 Alex Alvarez G?rciga / Dandelion (http://www.thedandelionproject.com)
 * @license   http://www.opensource.org/licenses/mit-license.php MIT
 * @link      http://www.thedandelionproject.com
 */

namespace Dandelion\Tools\CodeGenerator;

use Dandelion\Tools\CodeGenerator\SqlVirtualCode;

class SqlStringVirtualCode extends SqlVirtualCode
{
    /**
     * SqlStringVirtualCode constructor.
     * @param string $stringValue
     */
    public function __construct($stringValue)
    {
        parent::__construct("\"$stringValue\"");
    }
}