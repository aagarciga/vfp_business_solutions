<?php
/**
 * User: Victor
 * Date: 01/02/2016
 * Time: 19:06
 * @author    Victor Luis Aguado Leon <victorluisaguadoleon@gmail.com>
 * @copyright 2011-2014 Alex Alvarez G?rciga / Dandelion (http://www.thedandelionproject.com)
 * @license   http://www.opensource.org/licenses/mit-license.php MIT
 * @link      http://www.thedandelionproject.com
 */

namespace Dandelion\Tools\Filter;

use Dandelion\Tools\Filter\LogicalUnaryOperatorNode;
use Dandelion\Tools\CodeGenerator\SqlNotVirtualCode;

class NotNode extends LogicalUnaryOperatorNode
{
    /**
     * NotNode constructor.
     */
    public function __construct()
    {
        parent::__construct();
    }

    public function checkSemantic($report)
    {
        // TODO: Implement checkSemantic() method.
    }

    public function generateSqlCode($codeGenerator)
    {
        $virtualCode = new SqlNotVirtualCode();
        $codeGenerator->InsertCode($virtualCode);

        $this->getUniqueChild()->generateHtmlCode($codeGenerator);
    }

    public function getCaption()
    {
        return "Not";
    }
}