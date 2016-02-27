<?php
/**
 * User: Victor
 * Date: 01/02/2016
 * Time: 20:53
 * @author    Victor Luis Aguado Leon <victorluisaguadoleon@gmail.com>
 * @copyright 2011-2014 Alex Alvarez G?rciga / Dandelion (http://www.thedandelionproject.com)
 * @license   http://www.opensource.org/licenses/mit-license.php MIT
 * @link      http://www.thedandelionproject.com
 */

namespace Dandelion\Tools\CodeGenerator;

use Dandelion\Tools\CodeGenerator\HtmlGenerator;
use Dandelion\Tools\CodeGenerator\HtmlCloseTagVirtualCode;

class HtmlBlockTagGenerator extends HtmlGenerator
{
    protected $virtualTag;

    /**
     * HtmlBlockTagGenerator constructor.
     * @param HtmlOpenTagVirtualCode $virtualTag code that represents the tag
     */
    public function __construct($virtualTag=null)
    {
        $this->virtualTag = $virtualTag;
    }

    function getCode()
    {
        $childVirtualCode = parent::getCode();
        $htmlTagCode = $this->virtualTag->getCode();
        $closeTag = $this->virtualTag->getCloseTagVirtualCode();
        $closeTagCode = $closeTag->getCode();
        return $htmlTagCode. "\n" . $childVirtualCode . "\n" . $closeTagCode. "\n";
    }


}