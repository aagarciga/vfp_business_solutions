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

//TODO: Move to ternary operator.

namespace Dandelion\Tools\Filter;

use Dandelion\Tools\CodeGenerator\SqlAndVirtualCode;
use Dandelion\Tools\CodeGenerator\SqlGreaterEqualThanVirtualCode;
use Dandelion\Tools\Filter\ComparisonBinaryOperatorNode;
use Dandelion\Tools\CodeGenerator\SqlStringVirtualCode;
use Dandelion\Tools\CodeGenerator\SqlLeftBracketVirtualCode;
use Dandelion\Tools\CodeGenerator\SqlRigthBarcketVirtualCode;
use Dandelion\Tools\CodeGenerator\SqlLessEqualThanVirtualCode;

class DataRangeComparisonOperatorNode extends ComparisonBinaryOperatorNode
{
    protected $thirdChild;

    /**
     * OrNode constructor.
     * @param IFilterNode $fieldChild
     * @param IFilterNode $leftLimitChild
     * @param IFilterNode $rightLimitChild
     */
    public function __construct($fieldChild, $leftLimitChild, $rightLimitChild)
    {
        parent::__construct($fieldChild, $leftLimitChild);

        $this->thirdChild = $rightLimitChild;
    }

    function getStringOperator()
    {
        return "";
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
        return $this->leftChild;
    }

    /**
     * @return IFilterNode
     */
    public function getLeftLimitNode(){
        return $this->rightChild;
    }

    /**
     * @return IFilterNode
     */
    public function getRightLimitNode(){
        return $this->thirdChild;
    }
}