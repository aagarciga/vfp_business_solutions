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

abstract class BinaryOperatorNode extends OperatorNode
{
    protected $leftChild;

    protected $rightChild;

    /**
     * BinaryOperatorNode constructor.
     * @param IFilterNode $leftChild
     * @param IFilterNode $rightChild
     */
    public function __construct($leftChild, $rightChild)
    {
        $this->leftChild = $leftChild;
        $this->rightChild = $rightChild;
    }

    abstract function getStringOperator();

    public function generateSqlCode($codeGenerator)
    {
        if ($this->getLeftChild()->getLevel() > INTERN_LEVEL){

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
        return $this->leftChild;
    }

    /**
     * @return IFilterNode
     */
    public function getRightChild()
    {
        return $this->rightChild;
    }

    public function getLevel()
    {
        if (is_null($this->level)){
            $this->level = max($this->getLeftChild()->getLevel(), $this->getRightChild()->getLevel()) + 1;
        }
        return $this->level;
    }
}