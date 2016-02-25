<?php
/**
 * User: Victor
 * Date: 01/02/2016
 * Time: 14:00
 * @author    Victor Luis Aguado Leon <victorluisaguadoleon@gmail.com>
 * @copyright 2011-2014 Alex Alvarez G?rciga / Dandelion (http://www.thedandelionproject.com)
 * @license   http://www.opensource.org/licenses/mit-license.php MIT
 * @link      http://www.thedandelionproject.com
 */

namespace Dandelion\Tools\Filter;

use Dandelion\Tools\Filter\UnaryOperator;
use Dandelion\Tools\CodeGenerator\BtnGroupVirtualCode;

abstract class LogicalUnaryOperatorNode extends UnaryOperator
{
    static private $_captions = array("", "Not");

    /**
     * LogicalUnaryOperatorNode constructor.
     * @param $child
     */
    public function __construct()
    {
        parent::__construct();
    }

    public abstract function getCaption();

    public function generateHtmlCode($codeGenerator)
    {
        $codeGeneratorBtnGroup = BtnGroupVirtualCode::getCodeGenerator($this->getCaption(), LogicalUnaryOperatorNode::$_captions);
        $codeGenerator->InsertCode($codeGeneratorBtnGroup);

        $this->getUniqueChild()->generateHtmlCode($codeGenerator);
    }
}