<?php
/**
 * User: Victor
 * Date: 01/02/2016
 * Time: 19:37
 * @author    Victor Luis Aguado Leon <victorluisaguadoleon@gmail.com>
 * @copyright 2011-2014 Alex Alvarez G?rciga / Dandelion (http://www.thedandelionproject.com)
 * @license   http://www.opensource.org/licenses/mit-license.php MIT
 * @link      http://www.thedandelionproject.com
 */

namespace Dandelion\Tools\Filter;

use Dandelion\Tools\CodeGenerator\ClassHtmlAttribute;
use Dandelion\Tools\CodeGenerator\HtmlBlockTagGenerator;
use Dandelion\Tools\CodeGenerator\HtmlTextVirtualCode;
use Dandelion\Tools\CodeGenerator\LabelHtmlTagVirtualCode;
use Dandelion\Tools\Filter\ConstantNode;
use Dandelion\Tools\CodeGenerator\SqlVirtualCode;

class FieldNode extends ConstantNode
{
    /**
     * FieldNode constructor.
     */
    public function __construct()
    {
        parent::__construct();
    }

    public function checkSemantic($report)
    {
        // TODO: Implement checkSemantic() method.
    }

    public function getFullField(){
        $table = $this->getTable();
        $field = $this->getField();
        return (is_null($table)) ? "[$field]" : "[$table].[$field]";
    }

    public function generateSqlCode($codeGenerator)
    {
        $virtualCode = new SqlVirtualCode($this->getFullField());
        $codeGenerator->InsertCode($virtualCode);
    }

    public function generateHtmlCode($codeGenerator)
    {
        $taglabelGenerator = new LabelHtmlTagVirtualCode();
        $taglabelGenerator->InsertAttribute(new ClassHtmlAttribute("control-label"));
        $labelCodeGenerator = new HtmlBlockTagGenerator($taglabelGenerator);

        $labelCodeGenerator->InsertCode(new HtmlTextVirtualCode($this->getCaption()));

        $codeGenerator->InsertCode($labelCodeGenerator);
    }

    public function getCaption(){
        $value = $this->getValue();
        return isset($value[2])? $value[2] : "";
    }

    public function getTable(){
        $value = $this->getValue();
        return isset($value[1])? $value[1] : null;
    }

    public function getField(){
        return $this->getValue()[0];
    }

}