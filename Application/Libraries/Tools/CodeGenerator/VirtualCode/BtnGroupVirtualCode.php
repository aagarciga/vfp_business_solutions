<?php
/**
 * User: Victor
 * Date: 22/02/2016
 * Time: 20:20
 * @author    Victor Luis Aguado Leon <victorluisaguadoleon@gmail.com>
 * @copyright 2011-2014 Alex Alvarez G?rciga / Dandelion (http://www.thedandelionproject.com)
 * @license   http://www.opensource.org/licenses/mit-license.php MIT
 * @link      http://www.thedandelionproject.com
 */

namespace Dandelion\Tools\CodeGenerator;

use Dandelion\Tools\CodeGenerator\DivHtmlOpenTagVirtualCode;
use Dandelion\Tools\CodeGenerator\ClassHtmlAttribute;
use Dandelion\Tools\CodeGenerator\HtmlBlockTagGenerator;
use Dandelion\Tools\CodeGenerator\ButtonHtmlOpenTagVirtualCode;
use Dandelion\Tools\CodeGenerator\HtmlTextVirtualCode;
use Dandelion\Tools\CodeGenerator\TypeHtmlAttribute;
use Dandelion\Tools\CodeGenerator\StyleHtmlAttribute;
use Dandelion\Tools\CodeGenerator\SpanHtmlOpenTagVirtualCode;
use Dandelion\Tools\CodeGenerator\UlHtmlOpenTagVirtualCode;

class BtnGroupVirtualCode
{
    /**
     * @param string $currentCaption
     * @param array $captions
     * @return ICodeGenerator
     */
    public static function getCodeGenerator($currentCaption, $captions, $addDivContainerCcsClass=null){
        $tagGenerator = new DivHtmlOpenTagVirtualCode();

        $ccsClass = $addDivContainerCcsClass ? "btn-group open" . " " . $addDivContainerCcsClass : "btn-group open";

        $tagGenerator->InsertAttribute(new ClassHtmlAttribute($ccsClass));
        $codeGenerator = new HtmlBlockTagGenerator($tagGenerator);

        $tagButtonAndGenerator = new ButtonHtmlOpenTagVirtualCode();
        $tagButtonAndGenerator->InsertAttribute(new TypeHtmlAttribute("button"));
        $tagButtonAndGenerator->InsertAttribute(new ClassHtmlAttribute("btn btn-default btn-filter-modifier disabled"));
        $tagButtonAndGenerator->InsertAttribute(new StyleHtmlAttribute("opacity:1"));
        $buttonCodeGenerator = new HtmlBlockTagGenerator($tagButtonAndGenerator);

        $buttonCodeGenerator->InsertCode(new HtmlTextVirtualCode($currentCaption));

        $codeGenerator->InsertCode($buttonCodeGenerator);

        $tagButtonCaretGenerator = new ButtonHtmlOpenTagVirtualCode();
        $tagButtonCaretGenerator->InsertAttribute(new TypeHtmlAttribute("button"));
        $tagButtonCaretGenerator->InsertAttribute(new ClassHtmlAttribute("btn btn-default dropdown-toggle"));
        $tagButtonCaretGenerator->InsertAttribute(new ToggleDataHtmlAttribute("dropdown"));
        $buttonCaretCodeGenerator = new HtmlBlockTagGenerator($tagButtonCaretGenerator);

        $tagCaretGenerator = new SpanHtmlOpenTagVirtualCode();
        $tagCaretGenerator->InsertAttribute(new ClassHtmlAttribute("caret"));
        $caretCodeGenerator = new HtmlBlockTagGenerator($tagCaretGenerator);

        $buttonCaretCodeGenerator->InsertCode($caretCodeGenerator);

        $codeGenerator->InsertCode($buttonCaretCodeGenerator);

        $ulTagGenerator = new UlHtmlOpenTagVirtualCode();
        $ulTagGenerator->InsertAttribute(new ClassHtmlAttribute("dropdown-menu"));
        $ulCodeGenerator = new HtmlBlockTagGenerator($ulTagGenerator);

        $liCurrentGenerator = BtnGroupVirtualCode::getLi($currentCaption, true);

        $ulCodeGenerator->InsertCode($liCurrentGenerator);

        foreach($captions as $caption){
            if (strtolower($caption) !== $currentCaption){
                $liCodeGenerator = BtnGroupVirtualCode::getLi($caption);

                $ulCodeGenerator->InsertCode($liCodeGenerator);
            }
        }

        $codeGenerator->InsertCode($ulCodeGenerator);

        return $codeGenerator;
    }

    private static function getLi($caption, $isCurrent=false){
        $liCurrentTagGenerator = new LiHtmlOpenTagVirtualCode();
        if ($isCurrent){
            $liCurrentTagGenerator->InsertAttribute(new ClassHtmlAttribute("current"));
        }
        $liCurrentCodeGenerator = new HtmlBlockTagGenerator($liCurrentTagGenerator);

        $aCurrentTagGenerator = new AHtmlOpenTagVirtualCode();
        $aCurrentTagGenerator->InsertAttribute(new HrefHtmlAttribute());
        $aCurrentCodeGenerator = new HtmlBlockTagGenerator($aCurrentTagGenerator);

        $aCurrentCodeGenerator->InsertCode(new HtmlTextVirtualCode($caption));

        $liCurrentCodeGenerator->InsertCode($aCurrentCodeGenerator);
        return $liCurrentCodeGenerator;
    }
}