<?php
/**
 * User: Victor
 * Date: 02/02/2016
 * Time: 10:10
 * @author    Victor Luis Aguado Leon <victorluisaguadoleon@gmail.com>
 * @copyright 2011-2014 Alex Alvarez G?rciga / Dandelion (http://www.thedandelionproject.com)
 * @license   http://www.opensource.org/licenses/mit-license.php MIT
 * @link      http://www.thedandelionproject.com
 */

namespace Dandelion\Tools\Filter;

use Dandelion\Tools\CodeGenerator\SqlAndVirtualCode;
use Dandelion\Tools\CodeGenerator\SqlGreaterEqualThanVirtualCode;
use Dandelion\Tools\Filter\TernaryOperatorNode;
use Dandelion\Tools\CodeGenerator\SqlStringVirtualCode;
use Dandelion\Tools\CodeGenerator\SqlLeftBracketVirtualCode;
use Dandelion\Tools\CodeGenerator\SqlRigthBarcketVirtualCode;
use Dandelion\Tools\CodeGenerator\SqlLessEqualThanVirtualCode;

class DataRangeComparisonOperatorNode extends TernaryOperatorNode
{
    /**
     * OrNode constructor.
     */
    public function __construct()
    {
        parent::__construct();
    }

    public function checkSemantic($report)
    {
        // TODO: Implement checkSemantic() method.
    }

    public function generateSqlCode($codeGenerator)
    {
        $leftBracketVirtualCode = new SqlLeftBracketVirtualCode();
        $rightBracketVirtualCode = new SqlRigthBarcketVirtualCode();
        $lessEqualThanVirtualCode = new SqlLessEqualThanVirtualCode();
        $rightEqualThanVirtualCode = new SqlGreaterEqualThanVirtualCode();
        $andVirtualCode = new SqlAndVirtualCode();

        $codeGenerator->InsertCode($leftBracketVirtualCode);

        $this->getFieldNode()->generateSqlCode($codeGenerator);
        $codeGenerator->InsertCode($rightEqualThanVirtualCode);
        $this->getLeftLimitNode()->generateSqlCode($codeGenerator);

        $codeGenerator->InsertCode($andVirtualCode);

        $this->getFieldNode()->generateSqlCode($codeGenerator);
        $codeGenerator->InsertCode($lessEqualThanVirtualCode);
        $this->getRightLimitNode()->generateSqlCode($codeGenerator);

        $codeGenerator->InsertCode($rightBracketVirtualCode);
    }

    public function generateHtmlCode($codeGenerator)
    {
        // TODO: Implement generateHtmlCode() method.
    }

    /**
     * @return IFilterNode
     */
    public  function getFieldNode(){
        return $this->getFirstChild();
    }

    /**
     * @return IFilterNode
     */
    public function getLeftLimitNode(){
        return $this->getSecondChild();
    }

    /**
     * @return IFilterNode
     */
    public function getRightLimitNode(){
        return $this->getThirdChild();
    }
}