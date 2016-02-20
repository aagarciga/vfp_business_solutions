<?php
/**
 * User: Victor
 * Date: 20/02/2016
 * Time: 16:00
 * @author    Victor Luis Aguado Leon <victorluisaguadoleon@gmail.com>
 * @copyright 2011-2014 Alex Alvarez G?rciga / Dandelion (http://www.thedandelionproject.com)
 * @license   http://www.opensource.org/licenses/mit-license.php MIT
 * @link      http://www.thedandelionproject.com
 */

namespace Dandelion\Tools\Filter;

use Dandelion\Tools\CodeGenerator\SqlAndVirtualCode;
use Dandelion\Tools\Filter\BlockExpresionNode;


class AndBlockExpresionNode extends BlockExpresionNode
{
    public function checkSemantic($report)
    {
        // TODO: Implement checkSemantic() method.
    }

    public function generateSqlCode($codeGenerator)
    {
        $countChild = $this->getChildCount();
        $andSqlCode = new SqlAndVirtualCode();
        for($i = 0; $i < $countChild - 1; $i++){
            $child = $this->getChild($i);
            $child->generateSqlCode($codeGenerator);

            $codeGenerator->InsertCode($andSqlCode);
        }
    }

    public function generateHtmlCode($codeGenerator)
    {
        // TODO: Implement generateHtmlCode() method.
    }
}