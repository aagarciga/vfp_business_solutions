<?php
/**
 * User: Victor
 * Date: 21/02/2016
 * Time: 14:40
 * @author    Victor Luis Aguado Leon <victorluisaguadoleon@gmail.com>
 * @copyright 2011-2014 Alex Alvarez G?rciga / Dandelion (http://www.thedandelionproject.com)
 * @license   http://www.opensource.org/licenses/mit-license.php MIT
 * @link      http://www.thedandelionproject.com
 */

namespace Dandelion\Tools\Filter;

use Dandelion\Tools\CodeGenerator\IVirtualCode;
use Dandelion\Tools\Filter\ConnectionChildBlockExpresionNode;


class BlockExpresionNode extends ConnectionChildBlockExpresionNode
{
    private $_sqlConnectionChildCode;

    private $_htmlConnectionChildCode;

    /**
     * BlockExpresionNode constructor.
     */
    public function __construct()
    {
        parent::__construct();
        $this->_sqlConnectionChildCode = array();
        $this->_htmlConnectionChildCode = array();
    }

    /**
     * @param IVirtualCode $code
     * @return $this
     */
    public function addSqlConnectionChildCode($code){
        BlockExpresionNode::addConnectionChildCode($this->_sqlConnectionChildCode, $code);
        return $this;
    }

    private static function addConnectionChildCode($connectionChildCode, $code){
        $connectionChildCode[] = $code;
    }

    /**
     * @param IVirtualCode $code
     * @return $this
     */
    public function addHtmlConnectionChildCode($code){
        BlockExpresionNode::addConnectionChildCode($this->_htmlConnectionChildCode, $code);
        return $this;
    }

    public function getSqlConnectionChildCode($leftIndex)
    {
        return BlockExpresionNode::getConnectionChildCode($this->_sqlConnectionChildCode, $leftIndex);
    }

    private static function getConnectionChildCode($connectionChildCode, $leftIndex){
        $connectionChildCodeCount = count($connectionChildCode);
        if ($leftIndex >= $connectionChildCodeCount || $leftIndex < 0){
            throw new \Exception("Index not valid.");
        }
        return $connectionChildCode[$leftIndex];
    }

    public function getHtmlConnectionChildCode($leftIndex)
    {
        return BlockExpresionNode::getConnectionChildCode($this->_htmlConnectionChildCode, $leftIndex);
    }
}