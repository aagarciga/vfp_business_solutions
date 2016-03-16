<?php
/**
 * User: Victor
 * Date: 02/02/2016
 * Time: 10:28
 * @author    Victor Luis Aguado Leon <victorluisaguadoleon@gmail.com>
 * @copyright 2011-2014 Alex Alvarez G?rciga / Dandelion (http://www.thedandelionproject.com)
 * @license   http://www.opensource.org/licenses/mit-license.php MIT
 * @link      http://www.thedandelionproject.com
 */

namespace Dandelion\Tools\CodeGenerator;

use Dandelion\Tools\CodeGenerator\IHtmlAttribute;

abstract class HtmlAttribute implements IHtmlAttribute
{
    protected $attributeName;

    /**
     * HtmlAttribute constructor.
     * @param string $attributeName attribute
     */
    public function __construct($attributeName)
    {
        $this->attributeName = $attributeName;
    }


    function getAttributeName()
    {
        return $this->attributeName;
    }
}