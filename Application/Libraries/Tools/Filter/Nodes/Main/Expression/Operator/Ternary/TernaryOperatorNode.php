<?php
/**
 * Created by PhpStorm.
 * User: Victor
 * Date: 25/02/2016
 * Time: 10:43
 * @author    Victor Luis Aguado Leon <victorluisaguadoleon@gmail.com>
 * @copyright 2011-2014 Alex Alvarez G?rciga / Dandelion (http://www.thedandelionproject.com)
 * @license   http://www.opensource.org/licenses/mit-license.php MIT
 * @link      http://www.thedandelionproject.com
 */

namespace Dandelion\Tools\Filter;

use Dandelion\Tools\Filter\OperatorNode;

abstract class TernaryOperatorNode extends OperatorNode
{
    /**
     * TernaryOperatorNode constructor.
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * @return IFilterNode
     */
    public function getFirstChild(){
        return $this->getChild(0);
    }

    /**
     * @return IFilterNode
     */
    public function getSecondChild(){
        return $this->getChild(1);
    }

    /**
     * @return IFilterNode
     */
    public function getThirdChild(){
        return $this->getChild(2);
    }
}