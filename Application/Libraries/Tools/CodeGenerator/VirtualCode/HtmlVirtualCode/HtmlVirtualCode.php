<?php
/**
 * User: Victor
 * Date: 01/02/2016
 * Time: 21:28
 */

namespace Dandelion\Tools\CodeGenerator;

use Dandelion\Tools\CodeGenerator\VirtualCode;

abstract class HtmlVirtualCode extends VirtualCode implements IHtmlVirtuaCode
{
    abstract function getTagName();

    abstract function InsertAttribute($attribute);

    abstract function getAttributeCount();

    abstract function getAttribute($index);
}