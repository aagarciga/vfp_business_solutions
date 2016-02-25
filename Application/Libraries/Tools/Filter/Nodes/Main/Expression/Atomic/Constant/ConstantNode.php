<?php
/**
 * User: Victor
 * Date: 01/02/2016
 * Time: 19:29
 * @author    Victor Luis Aguado Leon <victorluisaguadoleon@gmail.com>
 * @copyright 2011-2014 Alex Alvarez G?rciga / Dandelion (http://www.thedandelionproject.com)
 * @license   http://www.opensource.org/licenses/mit-license.php MIT
 * @link      http://www.thedandelionproject.com
 */

namespace Dandelion\Tools\Filter;

use Dandelion\Tools\Filter\AtomicNode;

abstract class ConstantNode extends AtomicNode
{

    /**
     * ConstantNode constructor.
     * @param $value
     */
    public function __construct()
    {

    }

    public function generateSqlCode($codeGenerator)
    {
        $virtualCode = new SqlVirtualCode((string) $this->getValue());
        $codeGenerator->InsertCode($virtualCode);
    }

    public function generateHtmlCode($codeGenerator)
    {
        $virtualCode = new HtmlTextVirtualCode((string) $this->getValue());
        $codeGenerator->InsertCode($virtualCode);
    }

    public function getLevel()
    {
        return 0;
    }
}