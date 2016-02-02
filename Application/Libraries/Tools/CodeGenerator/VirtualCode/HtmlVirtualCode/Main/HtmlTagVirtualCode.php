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

class HtmlTagVirtualCode extends HtmlVirtualCode
{
    protected $attributes;

    protected $tagName;

    /**
     * HtmlTagVirtualCode constructor.
     * @param string $tagName html tag
     */
    public function __construct($tagName)
    {
        $this->tagName = $tagName;
        $this->attributes = array();
    }

    function getCode()
    {
        // TODO: Implement getCode() method.
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

    function getTagName()
    {
        return $this->tagName;
    }
}