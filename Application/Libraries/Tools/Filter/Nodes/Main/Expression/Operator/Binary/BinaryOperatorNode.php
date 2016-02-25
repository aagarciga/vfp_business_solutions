<?php
/**
 * User: Victor
 * Date: 01/02/2016
 * Time: 13:49
 * @author    Victor Luis Aguado Leon <victorluisaguadoleon@gmail.com>
 * @copyright 2011-2014 Alex Alvarez G?rciga / Dandelion (http://www.thedandelionproject.com)
 * @license   http://www.opensource.org/licenses/mit-license.php MIT
 * @link      http://www.thedandelionproject.com
 */

namespace Dandelion\Tools\Filter;

define("INTERN_LEVEL", 1);

use Dandelion\Tools\Filter\OperatorNode;
use Dandelion\Tools\CodeGenerator\SqlVirtualCode;
use Dandelion\Tools\CodeGenerator\SqlLeftBracketVirtualCode, Dandelion\Tools\CodeGenerator\SqlRigthBarcketVirtualCode;

abstract class BinaryOperatorNode extends OperatorNode
{
    /**
     * BinaryOperatorNode constructor.
     */
    public function __construct()
    {
    }

    abstract function getStringOperator();

    public function generateSqlCode($codeGenerator)
    {
        if ($this->getLeftChild()->getLevel() > INTERN_LEVEL){
            $leftBracketVirtualCode = new SqlLeftBracketVirtualCode();
            $rightBracketVirtualCode = new SqlRigthBarcketVirtualCode();

            $codeGenerator->InsertCode($leftBracketVirtualCode);

            $this->generateSqlInternCode($codeGenerator);

            $codeGenerator->InsertCode($rightBracketVirtualCode);
        }
        else{
            $this->generateSqlInternCode($codeGenerator);
        }
    }

    private function generateSqlInternCode($codeGenerator){
        $this->getLeftChild()->generateSqlCode($codeGenerator);

        $virtualCode = new SqlVirtualCode($this->getStringOperator());
        $codeGenerator->InsertCode($virtualCode);

        $this->getRightChild()->generateSqlCode($codeGenerator);
    }

    /**
     * @return IFilterNode
     */
    public function getLeftChild()
    {
        return $this->getChild(0);
    }

    /**
     * @return IFilterNode
     */
    public function getRightChild()
    {
        return $this->getChild(1);
    }

    public function getLevel()
    {
        if (is_null($this->level)){
            $this->level = max($this->getLeftChild()->getLevel(), $this->getRightChild()->getLevel()) + 1;
        }
        return $this->level;
    }
}