<?php
/**
 * User: Victor
 * Date: 01/02/2016
 * Time: 9:32
 * @author    Victor Luis Aguado Leon <victorluisaguadoleon@gmail.com>
 * @copyright 2011-2014 Alex Alvarez G?rciga / Dandelion (http://www.thedandelionproject.com)
 * @license   http://www.opensource.org/licenses/mit-license.php MIT
 * @link      http://www.thedandelionproject.com
 */

namespace Dandelion\Tools\Filter;

use Dandelion\Tools\Filter\BaseFilterNode;

abstract class FilterNode extends BaseFilterNode implements IFilterNode, INodeCreator
{
    private $_isOk;

    private $_level;

    protected $children;

    protected $value;

    /**
     * FilterNode constructor.
     */
    public function __construct()
    {
        $this->_isOk = false;
        $this->children = array();
        $this->value = null;
        $this->_level = null;
    }

    protected function setIsOk($isOk){
        $this->_isOk = $isOk;
    }

    public function isOk(){
        return $this->_isOk;
    }

    /**
     * @return int
     */
    public function getLevel()
    {
        if (is_null($this->_level)){
            $this->_level = $this->getLevelByChild();
        }
        return $this->_level;
    }

    private function getLevelByChild(){
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

    function getChild($index)
    {
        return $this->children[$index];
    }

    function addChild($child)
    {
        $this->children[] = $child;
        return $this;
    }

    function getChildCount()
    {
        return count($this->children);
    }

    function setValue($value)
    {
        $this->value = $value;
        return $this;
    }

    function getValue()
    {
        return $this->value;
    }


}