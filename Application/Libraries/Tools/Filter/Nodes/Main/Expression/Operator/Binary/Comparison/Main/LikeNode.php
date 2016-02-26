<?php
/**
 * User: Victor
 * Date: 01/02/2016
 * Time: 19:03
 * @author    Victor Luis Aguado Leon <victorluisaguadoleon@gmail.com>
 * @copyright 2011-2014 Alex Alvarez G?rciga / Dandelion (http://www.thedandelionproject.com)
 * @license   http://www.opensource.org/licenses/mit-license.php MIT
 * @link      http://www.thedandelionproject.com
 */

namespace Dandelion\Tools\Filter;

use Dandelion\Tools\Filter\ComparisonBinaryOperatorNode;
use Dandelion\Tools\CodeGenerator\SqlLikeValueVirtualCode;

class LikeNode extends ComparisonBinaryOperatorNode
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
        return "LIKE";
    }

    public function generateSqlCode($codeGenerator)
    {
        $this->getLeftChild()->generateSqlCode($codeGenerator);

        $virtualCode = new SqlVirtualCode($this->getStringOperator());
        $codeGenerator->InsertCode($virtualCode);

        $rigthChild = $this->getRightChild();
        $stringValue = $rigthChild->getValue();
        $virtualCode = new SqlLikeValueVirtualCode($stringValue);
        $codeGenerator->InsertCode($virtualCode);
    }

    public function generateHtmlCode($codeGenerator)
    {
        
    }

}