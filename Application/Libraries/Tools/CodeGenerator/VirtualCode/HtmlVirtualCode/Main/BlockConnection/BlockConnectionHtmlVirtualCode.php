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
use Dandelion\Tools\CodeGenerator\VirtualCode\HtmlVirtualCode\Main\Tag\Main\Open\Main\ButtonHtmlOpenTagVirtualCode;

abstract class BlockConnectionHtmlVirtualCode extends HtmlVirtualCode
{
    /**
     * BlockConnectionHtmlVirtualCode constructor.
     */
    public function __construct()
    {
    }

    abstract function getCaption();

    function getCode(){
        $tagGenerator = new DivHtmlOpenTagVirtualCode();
        $tagGenerator->InsertAttribute(new ClassHtmlAttribute("btn-group"));
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
        $tagButtonCaretGenerator->InsertAttribute()
    }
}