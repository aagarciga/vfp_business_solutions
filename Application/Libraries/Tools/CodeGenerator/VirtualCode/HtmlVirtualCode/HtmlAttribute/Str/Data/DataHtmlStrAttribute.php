<?php
/**
 * User: Victor
 * Date: 21/02/2016
 * Time: 19:59
 */

namespace Dandelion\Tools\CodeGenerator;

use Dandelion\Tools\CodeGenerator\HtmlStrAttribute;

class DataHtmlStrAttribute extends HtmlStrAttribute
{
    /**
     * DataHtmlStrAttribute constructor.
     * @param string $attributeName
     * @param string $attributeValue
     */
    public function __construct($attributeName, $attributeValue)
    {
        parent::__construct("data-" . $attributeName, $attributeValue);
    }
}