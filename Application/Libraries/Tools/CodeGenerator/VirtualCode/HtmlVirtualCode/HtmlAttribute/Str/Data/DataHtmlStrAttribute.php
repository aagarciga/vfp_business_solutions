<?php
/**
 * User: Victor
 * Date: 21/02/2016
 * Time: 19:59
 * @author    Victor Luis Aguado Leon <victorluisaguadoleon@gmail.com>
 * @copyright 2011-2014 Alex Alvarez G?rciga / Dandelion (http://www.thedandelionproject.com)
 * @license   http://www.opensource.org/licenses/mit-license.php MIT
 * @link      http://www.thedandelionproject.com
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