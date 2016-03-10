<?php
/**
 * User: Victor
 * Date: 21/02/2016
 * Time: 23:27
 * @author    Victor Luis Aguado Leon <victorluisaguadoleon@gmail.com>
 * @copyright 2011-2014 Alex Alvarez G?rciga / Dandelion (http://www.thedandelionproject.com)
 * @license   http://www.opensource.org/licenses/mit-license.php MIT
 * @link      http://www.thedandelionproject.com
 */

namespace Dandelion\Tools\Filter;

use Dandelion\Tools\Filter\LogicalUnaryOperatorNode;

class PositiveNode extends LogicalUnaryOperatorNode
{
    /**
     * PositiveNode constructor.
     * @param IFilterNode $child
     */
    public function __construct()
    {
        parent::__construct();
    }

    public function checkSemantic($report)
    {
        // TODO: Implement checkSemantic() method.
    }

    public function generateSqlCode($codeGenerator){
        $this->getUniqueChild()->generateSqlCode($codeGenerator);
    }

    public function getCaption()
    {
        return "";
    }
}