<?php
/**
 * User: Victor
 * Date: 25/02/2016
 * Time: 9:48
 * @author    Victor Luis Aguado Leon <victorluisaguadoleon@gmail.com>
 * @copyright 2011-2014 Alex Alvarez G?rciga / Dandelion (http://www.thedandelionproject.com)
 * @license   http://www.opensource.org/licenses/mit-license.php MIT
 * @link      http://www.thedandelionproject.com
 */

namespace Dandelion\Tools\Filter;


use Dandelion\Tools\CodeGenerator\OrBlockConnectionHtmlVirtualCode;
use Dandelion\Tools\CodeGenerator\SqlOrVirtualCode;

class OrBlockExpressionNode extends ConnectionChildBlockExpressionNode
{
    /**
     * OrBlockExpresionNode constructor.
     */
    public function __construct()
    {
        parent::__construct();
    }

    public function checkSemantic($report)
    {
        // TODO: Implement checkSemantic() method.
    }

    public function getSqlConnectionChildCode($leftIndex)
    {
        return new SqlOrVirtualCode();
    }

    public function getHtmlConnectionChildCode($leftIndex)
    {
        return new OrBlockConnectionHtmlVirtualCode();
    }
}