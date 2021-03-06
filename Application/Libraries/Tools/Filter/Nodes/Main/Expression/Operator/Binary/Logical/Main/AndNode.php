<?php
/**
 * User: Victor
 * Date: 01/02/2016
 * Time: 14:13
 * @author    Victor Luis Aguado Leon <victorluisaguadoleon@gmail.com>
 * @copyright 2011-2014 Alex Alvarez G?rciga / Dandelion (http://www.thedandelionproject.com)
 * @license   http://www.opensource.org/licenses/mit-license.php MIT
 * @link      http://www.thedandelionproject.com
 */

namespace Dandelion\Tools\Filter;

use Dandelion\Tools\Filter\LogicalBinaryOperatorNode;

class AndNode extends LogicalBinaryOperatorNode
{
    /**
     * OrNode constructor.
     */
    public function __construct()
    {
        parent::__construct();
    }

    public function checkSemantic($report)
    {
        // TODO: Implement checkSemantic() method.
    }

    function getStringOperator()
    {
        return "AND";
    }

    public function generateHtmlCode($codeGenerator)
    {
        // TODO: Implement generateHtmlCode() method.
    }

}