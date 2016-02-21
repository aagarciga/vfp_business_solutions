<?php
/**
 * User: Victor
 * Date: 21/02/2016
 * Time: 19:00
 * @author    Victor Luis Aguado Leon <victorluisaguadoleon@gmail.com>
 * @copyright 2011-2014 Alex Alvarez G?rciga / Dandelion (http://www.thedandelionproject.com)
 * @license   http://www.opensource.org/licenses/mit-license.php MIT
 * @link      http://www.thedandelionproject.com
 */

namespace Dandelion\Tools\CodeGenerator;

use Dandelion\Tools\CodeGenerator\HtmlVirtualCode;
use Dandelion\Tools\CodeGenerator\ButtonHtmlOpenTagVirtualCode;

abstract class BlockConnectionHtmlVirtualCode extends HtmlVirtualCode
{
    static private $_captions = array("And", "Or");

    /**
     * BlockConnectionHtmlVirtualCode constructor.
     */
    public function __construct()
    {
    }

    abstract function getCaption();

    public function getCode(){
        $tagGenerator = new DivHtmlOpenTagVirtualCode();
        $tagGenerator->InsertAttribute(new ClassHtmlAttribute("btn-group open"));
        $codeGenerator = new HtmlBlockTagGenerator($tagGenerator);

        $tagButtonAndGenerator = new ButtonHtmlOpenTagVirtualCode();
        $tagButtonAndGenerator->InsertAttribute(new TypeHtmlAttribute("button"));
        $tagButtonAndGenerator->InsertAttribute(new ClassHtmlAttribute("btn btn-default btn-filter-modifier disabled"));
        $tagButtonAndGenerator->InsertAttribute(new StyleHtmlAttribute("opacity:1"));
        $buttonCodeGenerator = new HtmlBlockTagGenerator($tagButtonAndGenerator);

        $buttonCodeGenerator->InsertCode(new HtmlTextVirtualCode($this->getCaption()));

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

        $liCurrentGenerator = BlockConnectionHtmlVirtualCode::getLi($this->getCaption(), true);

        $ulCodeGenerator->InsertCode($liCurrentGenerator);

        foreach(BlockConnectionHtmlVirtualCode::$_captions as $caption){
            if (strtolower($caption) !== $this->getCaption()){
                $liCodeGenerator = BlockConnectionHtmlVirtualCode::getLi($caption);

                $ulCodeGenerator->InsertCode($liCodeGenerator);
            }
        }

        $codeGenerator->InsertCode($ulCodeGenerator);

        return $codeGenerator->getCode();
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