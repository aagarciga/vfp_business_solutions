<?php
/**
 * User: Victor
 * Date: 02/02/2016
 * Time: 10:10
 * @author    Victor Luis Aguado Leon <victorluisaguadoleon@gmail.com>
 * @copyright 2011-2014 Alex Alvarez G?rciga / Dandelion (http://www.thedandelionproject.com)
 * @license   http://www.opensource.org/licenses/mit-license.php MIT
 * @link      http://www.thedandelionproject.com
 */

namespace Dandelion\Tools\Filter;

use Dandelion\Tools\CodeGenerator\ButtonHtmlOpenTagVirtualCode;
use Dandelion\Tools\CodeGenerator\ClassHtmlAttribute;
use Dandelion\Tools\CodeGenerator\DataHtmlStrAttribute;
use Dandelion\Tools\CodeGenerator\DivHtmlOpenTagVirtualCode;
use Dandelion\Tools\CodeGenerator\HtmlBlockTagGenerator;
use Dandelion\Tools\CodeGenerator\IHtmlOpenTagVirtualCode;
use Dandelion\Tools\CodeGenerator\InputHtmlOpenTagVirtualCode;
use Dandelion\Tools\CodeGenerator\PlaceholderHtmlAttribute;
use Dandelion\Tools\CodeGenerator\SpanHtmlOpenTagVirtualCode;
use Dandelion\Tools\CodeGenerator\SqlAndVirtualCode;
use Dandelion\Tools\CodeGenerator\SqlGreaterEqualThanVirtualCode;
use Dandelion\Tools\CodeGenerator\TitleHtmlAttribute;
use Dandelion\Tools\CodeGenerator\TypeHtmlAttribute;
use Dandelion\Tools\Filter\TernaryOperatorNode;
use Dandelion\Tools\CodeGenerator\SqlStringVirtualCode;
use Dandelion\Tools\CodeGenerator\SqlLeftBracketVirtualCode;
use Dandelion\Tools\CodeGenerator\SqlRigthBarcketVirtualCode;
use Dandelion\Tools\CodeGenerator\SqlLessEqualThanVirtualCode;

class DataRangeComparisonOperatorNode extends TernaryOperatorNode
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

    public function generateSqlCode($codeGenerator)
    {
        $leftBracketVirtualCode = new SqlLeftBracketVirtualCode();
        $rightBracketVirtualCode = new SqlRigthBarcketVirtualCode();
        $lessEqualThanVirtualCode = new SqlLessEqualThanVirtualCode();
        $rightEqualThanVirtualCode = new SqlGreaterEqualThanVirtualCode();
        $andVirtualCode = new SqlAndVirtualCode();

        $codeGenerator->InsertCode($leftBracketVirtualCode);

        $this->getFieldNode()->generateSqlCode($codeGenerator);
        $codeGenerator->InsertCode($rightEqualThanVirtualCode);
        $this->getLeftLimitNode()->generateSqlCode($codeGenerator);

        $codeGenerator->InsertCode($andVirtualCode);

        $this->getFieldNode()->generateSqlCode($codeGenerator);
        $codeGenerator->InsertCode($lessEqualThanVirtualCode);
        $this->getRightLimitNode()->generateSqlCode($codeGenerator);

        $codeGenerator->InsertCode($rightBracketVirtualCode);
    }

    public function generateHtmlCode($codeGenerator)
    {
        $tagBlockGenerator = new DivHtmlOpenTagVirtualCode();
        $tagBlockGenerator->InsertAttribute(new ClassHtmlAttribute("form-group"));
        $blockCodeGenerator = new HtmlBlockTagGenerator($tagBlockGenerator);

        $fieldNode = $this->getFieldNode();
        $fieldNode->generateHtmlCode($blockCodeGenerator);

        $fieldCaption = $fieldNode->getCaption();
        $fullFieldName = $fieldNode->getFullField();
        $tagDateRangeGenerator = new DivHtmlOpenTagVirtualCode();
        $tagDateRangeGenerator->InsertAttribute(new ClassHtmlAttribute("input-prepend input-group"));
        $tagDateRangeGenerator->InsertAttribute(new TitleHtmlAttribute($fieldCaption));
        $divDateRangeCodeGenerator = new HtmlBlockTagGenerator($tagDateRangeGenerator);

        $tagSpanAddOnGenerator = new SpanHtmlOpenTagVirtualCode();
        $tagSpanAddOnGenerator->InsertAttribute(new ClassHtmlAttribute("add-on input-group-addon"));
        $spanAddOnCodeGenerator = new HtmlBlockTagGenerator($tagSpanAddOnGenerator);

        $tagIGenerator = new IHtmlOpenTagVirtualCode();
        $tagIGenerator->InsertAttribute(new ClassHtmlAttribute("glyphicon glyphicon-calendar fa fa-calendar"));
        $iCodeGenerator = new HtmlBlockTagGenerator($tagIGenerator);

        $spanAddOnCodeGenerator->InsertCode($iCodeGenerator);

        $divDateRangeCodeGenerator->InsertCode($spanAddOnCodeGenerator);

        $tagInputGenerator = new InputHtmlOpenTagVirtualCode();
        $tagInputGenerator->InsertAttribute(new TypeHtmlAttribute("text"));
        $tagInputGenerator->InsertAttribute(new ClassHtmlAttribute("form-control daterangepicker"));
        $tagInputGenerator->InsertAttribute(new DataHtmlStrAttribute("fieldname", $fullFieldName));
        $tagInputGenerator->InsertAttribute(new PlaceholderHtmlAttribute($fieldCaption));
        $inputCodeGenerator = new HtmlBlockTagGenerator($tagInputGenerator);

        $divDateRangeCodeGenerator->InsertCode($inputCodeGenerator);

        $tagSpanInputGroupBtnGenerator = new SpanHtmlOpenTagVirtualCode();
        $tagSpanInputGroupBtnGenerator->InsertAttribute(new ClassHtmlAttribute("input-group-btn"));
        $inputGroupBtnCodeGenerator = new HtmlBlockTagGenerator($tagSpanInputGroupBtnGenerator);

        $tagButtonGenerator = new ButtonHtmlOpenTagVirtualCode();
        $tagButtonGenerator->InsertAttribute(new TypeHtmlAttribute("button"));
        $tagButtonGenerator->InsertAttribute(new ClassHtmlAttribute("btn btn-default glyphicon-action-button glyphicon-minus btn-delete-filter-field"));
        $buttonCodeGenerator = new HtmlBlockTagGenerator($tagButtonGenerator);

        $inputGroupBtnCodeGenerator->InsertCode($buttonCodeGenerator);

        $divDateRangeCodeGenerator->InsertCode($inputGroupBtnCodeGenerator);

        $blockCodeGenerator->InsertCode($divDateRangeCodeGenerator);

        $codeGenerator->InsertCode($blockCodeGenerator);
    }

    /**
     * @return IFilterNode
     */
    public  function getFieldNode(){
        return $this->getFirstChild();
    }

    /**
     * @return IFilterNode
     */
    public function getLeftLimitNode(){
        return $this->getSecondChild();
    }

    /**
     * @return IFilterNode
     */
    public function getRightLimitNode(){
        return $this->getThirdChild();
    }
}