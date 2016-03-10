<?php
/**
 * User: Victor
 * Date: 01/02/2016
 * Time: 11:02
 * @author    Victor Luis Aguado Leon <victorluisaguadoleon@gmail.com>
 * @copyright 2011-2014 Alex Alvarez G?rciga / Dandelion (http://www.thedandelionproject.com)
 * @license   http://www.opensource.org/licenses/mit-license.php MIT
 * @link      http://www.thedandelionproject.com
 */

namespace Dandelion\Tools\Filter;

use Dandelion\Tools\Filter\FilterNode;

abstract class ExpressionNode extends FilterNode
{
    private $_type;

    /**
     * ExpressionNode constructor.
     */
    public function __construct()
    {
        parent::__construct();
        $this->_type = TYPE_ERROR;
    }

    protected function setIsOk($isOk)
    {
        throw new \Exception("ExpressionNode not implement setIsOK method");
    }

    public function setType($type){
        $this->_type = $type;
        return $this;
    }

    public function type(){
        return $this->_type;
    }

    public function isOk()
    {
        return $this->type() !== TYPE_ERROR;
    }

}