<?php
/**
 * User: Victor
 * Date: 01/02/2016
 * Time: 13:52
 * @author    Victor Luis Aguado Leon <victorluisaguadoleon@gmail.com>
 * @copyright 2011-2014 Alex Alvarez G?rciga / Dandelion (http://www.thedandelionproject.com)
 * @license   http://www.opensource.org/licenses/mit-license.php MIT
 * @link      http://www.thedandelionproject.com
 */

namespace Dandelion\Tools\Filter;

use Dandelion\Tools\Filter\OperatorNode;

abstract class UnaryOperator extends OperatorNode
{
    protected $level;

    /**
     * UnaryOperator constructor.
     * @param $child
     */
    public function __construct()
    {
        $this->level = null;
    }

    public function getUniqueChild(){
        return $this->getChild(0);
    }

    public function getLevel()
    {
        if (is_null($this->level)){
            $this->level = $this->getUniqueChild()->getLevel() + 1;
        }
        return $this->level;
    }
}