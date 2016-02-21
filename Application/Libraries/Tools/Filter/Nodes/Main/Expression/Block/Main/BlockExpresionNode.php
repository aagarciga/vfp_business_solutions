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
     */
    public function addSqlConnectionChildCode($code){

    }

    /**
     * @param IVirtualCode $code
     */
    public function addHtmlConnectionChildCode($code){

    }

    public function getSqlConnectionChildCode($leftIndex)
    {
        // TODO: Implement getSqlConnectionChildCode() method.
    }

    public function getHtmlConnectionChildCode($leftIndex)
    {
        // TODO: Implement getHtmlConnectionChildCode() method.
    }
}