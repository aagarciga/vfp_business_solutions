<?php
/**
 * User: Victor
 * Date: 26/02/2016
 * Time: 11:24
 * @author    Victor Luis Aguado Leon <victorluisaguadoleon@gmail.com>
 * @copyright 2011-2014 Alex Alvarez G?rciga / Dandelion (http://www.thedandelionproject.com)
 * @license   http://www.opensource.org/licenses/mit-license.php MIT
 * @link      http://www.thedandelionproject.com
 */

namespace Dandelion\Tools\CodeGenerator;

use Dandelion\Tools\CodeGenerator\HtmlOpenTagVirtualCode;

class LabelHtmlTagVirtualCode extends HtmlOpenTagVirtualCode
{
    /**
     * LabelHtmlTagVirtualCode constructor.
     */
    public function __construct()
    {
        parent::__construct("label");
    }
}