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

define('SQL_CODE_SUFFIX_CREATOR', "SqlCodeCreator");
define('HTML_CODE_SUFFIX_CREATOR', "HtmlCodeCreator");
define('NAMESPACE_PREFIX', "\\" . __NAMESPACE__ . "\\");

use Dandelion\Tools\CodeGenerator\AndBlockConnectionHtmlVirtualCode;
use Dandelion\Tools\CodeGenerator\IVirtualCode;
use Dandelion\Tools\CodeGenerator\OrBlockConnectionHtmlVirtualCode;
use Dandelion\Tools\CodeGenerator\SqlAndVirtualCode;
use Dandelion\Tools\CodeGenerator\SqlOrVirtualCode;
use Dandelion\Tools\Filter\ConnectionChildBlockExpressionNode;


class BlockExpressionNode extends ConnectionChildBlockExpressionNode
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
        self::addConnectionChildCode($this->_sqlConnectionChildCode, $code);
        return $this;
    }

    private static function addConnectionChildCode(&$connectionChildCode, $code){
        $connectionChildCode[] = $code;
    }

    /**
     * @param IVirtualCode $code
     * @return $this
     */
    public function addHtmlConnectionChildCode($code){
        self::addConnectionChildCode($this->_htmlConnectionChildCode, $code);
        return $this;
    }

    public function getSqlConnectionChildCode($leftIndex)
    {
        return self::getConnectionChildCode($this->_sqlConnectionChildCode, $leftIndex);
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
        return self::getConnectionChildCode($this->_htmlConnectionChildCode, $leftIndex);
    }

    /**
     * @param array $value
     * @return $this
     */
    function setValue($value)
    {
        if (is_array($value))
        {
            foreach ($value as $simpleValue){
                $codeSqlCreator = NAMESPACE_PREFIX . strtolower($simpleValue) . SQL_CODE_SUFFIX_CREATOR;
                $codeHtmlCreator = NAMESPACE_PREFIX . strtolower($simpleValue) . HTML_CODE_SUFFIX_CREATOR;

                $this->addSqlConnectionChildCode($codeSqlCreator());
                $this->addHtmlConnectionChildCode($codeHtmlCreator());
            }
        }
        return parent::setValue($value);
    }
}

function andSqlCodeCreator(){
    return new SqlAndVirtualCode();
}

function andHtmlCodeCreator(){
    return new AndBlockConnectionHtmlVirtualCode();
}

function orSqlCodeCreator(){
    return new SqlOrVirtualCode();
}

function orHtmlCodeCreator(){
    return new OrBlockConnectionHtmlVirtualCode();
}