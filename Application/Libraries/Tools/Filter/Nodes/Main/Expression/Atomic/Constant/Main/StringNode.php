<?php
/**
 * User: Victor
 * Date: 01/02/2016
 * Time: 19:31
 * @author    Victor Luis Aguado Leon <victorluisaguadoleon@gmail.com>
 * @copyright 2011-2014 Alex Alvarez G?rciga / Dandelion (http://www.thedandelionproject.com)
 * @license   http://www.opensource.org/licenses/mit-license.php MIT
 * @link      http://www.thedandelionproject.com
 */

namespace Dandelion\Tools\Filter;

use Dandelion\Tools\Filter\ConstantNode;
use Dandelion\Tools\CodeGenerator\SqlStringVirtualCode;
use Dandelion\Tools\CodeGenerator\HtmlTextVirtualCode;

class StringNode extends ConstantNode
{

    public function checkSemantic($report)
    {
        $this->setType(TYPE_STRING);
    }

    public function generateSqlCode($codeGenerator)
    {
        $virtualCode = new SqlStringVirtualCode($this->getValue());
        $codeGenerator->InsertCode($virtualCode);
    }

    public function generateHtmlCode($codeGenerator)
    {
        $virtualCode = new HtmlTextVirtualCode($this->getValue());
        $codeGenerator->InsertCode($virtualCode);
    }

}