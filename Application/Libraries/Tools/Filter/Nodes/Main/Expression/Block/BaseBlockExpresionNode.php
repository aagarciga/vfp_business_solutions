<?php
/**
 * User: Victor
 * Date: 20/02/2016
 * Time: 15:48
 * @author    Victor Luis Aguado Leon <victorluisaguadoleon@gmail.com>
 * @copyright 2011-2014 Alex Alvarez G?rciga / Dandelion (http://www.thedandelionproject.com)
 * @license   http://www.opensource.org/licenses/mit-license.php MIT
 * @link      http://www.thedandelionproject.com
 */

namespace Dandelion\Tools\Filter;

use Dandelion\Tools\Filter\ExpressionNode;

/**
 * Class BlockExpresionNode
 * @package Dandelion\Tools\Filter
 */
abstract class BaseBlockExpresionNode extends ExpressionNode
{
    private $_child;

    public function __construct(){
        parent::__construct();
        $this->_child = array();
    }

    /**
     * @return int
     */
    public function getChildCount(){
        return count($this->_child);
    }

    /**
     * @param int $index
     * @return IFilterNode mixed
     */
    public function getChild($index){
        return $this->_child[$index];
    }

    /**
     * @param IFilterNode $child
     * @return BlockExpresionNode $this
     */
    public function addChild($child){
        $this->_child[] = $child;
        return $this;
    }

    public function getLevel()
    {
        $maxLevel = 0;
        $countChild = $this->getChildCount();
        for($i = 0; $i < $countChild; $i++){
            $childLevel = $this->getChild($i)->getLevel();
            if ($childLevel > $maxLevel){
                $maxLevel = $childLevel;
            }
        }
        return $maxLevel + 1;
    }
}