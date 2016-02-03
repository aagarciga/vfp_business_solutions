<?php
/**
 * User: Victor
 * Date: 02/02/2016
 * Time: 22:46
 * @author    Victor Luis Aguado Leon <victorluisaguadoleon@gmail.com>
 * @copyright 2011-2014 Alex Alvarez G?rciga / Dandelion (http://www.thedandelionproject.com)
 * @license   http://www.opensource.org/licenses/mit-license.php MIT
 * @link      http://www.thedandelionproject.com
 */

namespace Dandelion\Tools\CodeGenerator;

use Dandelion\Tools\CodeGenerator\HtmlAttribute;

class HtmlStrAttribute extends HtmlAttribute
{
    protected $attributeValue;

    /**
     * HtmlStrAttribute constructor.
     * @param string $attributeName attribute
     * @param string $attributeValue value of attribute
     */
    public function __construct($attributeName, $attributeValue)
    {
        parent::__construct($attributeName);
        $this->attributeValue = $attributeValue;
    }

    function getValue()
    {
        return $this->attributeValue;
    }

}