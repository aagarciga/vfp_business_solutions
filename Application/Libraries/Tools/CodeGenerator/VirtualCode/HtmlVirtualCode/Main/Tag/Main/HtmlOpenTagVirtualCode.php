<?php
/**
 * User: Victor
 * Date: 01/02/2016
 * Time: 21:30
 * @author    Victor Luis Aguado Leon <victorluisaguadoleon@gmail.com>
 * @copyright 2011-2014 Alex Alvarez G?rciga / Dandelion (http://www.thedandelionproject.com)
 * @license   http://www.opensource.org/licenses/mit-license.php MIT
 * @link      http://www.thedandelionproject.com
 */

namespace Dandelion\Tools\CodeGenerator;

use Dandelion\Tools\CodeGenerator\HtmlVirtualCode;
use Dandelion\Tools\CodeGenerator\IHtmlTagVirtualCode;

class HtmlOpenTagVirtualCode extends HtmlVirtualCode implements IHtmlTagVirtualCode
{
    protected $attributes;

    /**
     * HtmlTagVirtualCode constructor.
     */
    public function __construct($tagName)
    {
        parent::__construct($tagName);
        $this->attributes = array();
    }


    function InsertAttribute($attribute)
    {
        $this->attributes[] = $attribute;
    }

    function getAttributeCount()
    {
        return count($this->attributes);
    }

    function getAttribute($index)
    {
        return $this->attributes[$index];
    }

    function getCode()
    {
        $tagName = $this->getTagName();

        $result = "<$tagName ";

        $attributesCount = $this->getAttributeCount();
        for ($index = 0; $index < $attributesCount; $index++){
            $attribute = $this->getAttribute($index);
            $attributeName = $attribute->getAttributeName();
            $attributeValue = $attribute->getValue();
            $result .= "$attributeName=\"$attributeValue\" ";
        }
        return $result . ">";
    }
}