<?php
/**
 * User: Victor
 * Date: 02/02/2016
 * Time: 22:37
 * @author    Victor Luis Aguado Leon <victorluisaguadoleon@gmail.com>
 * @copyright 2011-2014 Alex Alvarez G?rciga / Dandelion (http://www.thedandelionproject.com)
 * @license   http://www.opensource.org/licenses/mit-license.php MIT
 * @link      http://www.thedandelionproject.com
 */

namespace Dandelion\Tools\CodeGenerator;

use Dandelion\Tools\CodeGenerator\HtmlOpenTagVirtualCode;

class HtmlOpenCloseTagVirtualCode extends HtmlOpenTagVirtualCode
{
    /**
     * HtmlOpenCloseTagVirtualCode constructor.
     */
    public function __construct($tagName)
    {
        parent::__construct($tagName);
    }

    function getCode()
    {
        $parentCode = parent::getCode();
        $length = strlen($parentCode);
        $parentCode = substr($parentCode, 0, $length - 1);
        return $parentCode . "/>";
    }


}