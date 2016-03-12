<?php
/**
 * User: Victor
 * Date: 21/02/2016
 * Time: 14:30
 * @author    Victor Luis Aguado Leon <victorluisaguadoleon@gmail.com>
 * @copyright 2011-2014 Alex Alvarez G?rciga / Dandelion (http://www.thedandelionproject.com)
 * @license   http://www.opensource.org/licenses/mit-license.php MIT
 * @link      http://www.thedandelionproject.com
 */

namespace Dandelion\Tools\Filter;

use Dandelion\Tools\CodeGenerator\DivHtmlOpenTagVirtualCode;
use Dandelion\Tools\CodeGenerator\HtmlBlockTagGenerator;
use Dandelion\Tools\CodeGenerator\IdHtmlAttribute;
use Dandelion\Tools\CodeGenerator\IVirtualCode;
use Dandelion\Tools\Filter\BaseBlockExpressionNode;


abstract class ConnectionChildBlockExpressionNode extends BaseBlockExpressionNode
{
    public function __construct(){
        parent::__construct();

    }

    /**
     * @param int $leftIndex
     * @return IVirtualCode
     */
    public abstract function getSqlConnectionChildCode($leftIndex);

    /**
     * @param int $leftIndex
     * @return IVirtualCode
     */
    public abstract function getHtmlConnectionChildCode($leftIndex);

    public function checkSemantic($report)
    {
        // TODO: Implement checkSemantic() method.
    }

    public function generateSqlCode($codeGenerator)
    {
        $countChild = $this->getChildCount();
        for($i = 0; $i < $countChild - 1; $i++){
            $child = $this->getChild($i);
            $child->generateSqlCode($codeGenerator);

            $codeGenerator->InsertCode($this->getSqlConnectionChildCode($i));
        }

        if ($countChild > 0){
            $child = $this->getChild($countChild - 1);
            $child->generateSqlCode($codeGenerator);
        }
    }

    public function generateHtmlCode($codeGenerator)
    {
        $countChild = $this->getChildCount();
        for($i = 0; $i < $countChild - 1; $i++){
            $child = $this->getChild($i);
            $child->generateHtmlCode($codeGenerator);

            $connectionVirtualCode = $this->getHtmlConnectionChildCode($i);

            $codeGenerator->InsertCode($connectionVirtualCode);
        }

        if ($countChild > 0){
            $child = $this->getChild($countChild - 1);
            $child->generateHtmlCode($codeGenerator);
        }
    }
}