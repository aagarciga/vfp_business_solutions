<?php
/**
 * Created by PhpStorm.
 * User: Victor
 * Date: 26/02/2016
 * Time: 10:57
 */

namespace Dandelion\Tools\CodeGenerator;

use Dandelion\Tools\CodeGenerator\HtmlStrAttribute;

class PlaceholderHtmlAttribute extends HtmlStrAttribute
{
    /**
     * PlaceholderHtmlAttribute constructor.
     */
    public function __construct($placeholder)
    {
        parent::__construct("placeholder", $placeholder);
    }
}