<?php
/**
 * User: Victor
 * Date: 01/02/2016
 * Time: 21:28
 * @author    Victor Luis Aguado Leon <victorluisaguadoleon@gmail.com>
 * @copyright 2011-2014 Alex Alvarez G?rciga / Dandelion (http://www.thedandelionproject.com)
 * @license   http://www.opensource.org/licenses/mit-license.php MIT
 * @link      http://www.thedandelionproject.com
 */

namespace Dandelion\Tools\CodeGenerator;

use Dandelion\Tools\CodeGenerator\VirtualCode;
use Dandelion\Tools\CodeGenerator\IHtmlVirtualCode;

abstract class HtmlTagVirtualCode extends HtmlVirtualCode implements IHtmlVirtualCode
{
    protected $tagName;

    /**
     * HtmlVirtualCode constructor.
     * @param string $tagName html tag
     */
    public function __construct($tagName)
    {
        parent::__construct();
        $this->tagName = $tagName;
    }

    function getTagName()
    {
        return $this->tagName;
    }
}