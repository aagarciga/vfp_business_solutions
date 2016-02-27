<?php
/**
 * User: Victor
 * Date: 21/02/2016
 * Time: 19:44
 * @author    Victor Luis Aguado Leon <victorluisaguadoleon@gmail.com>
 * @copyright 2011-2014 Alex Alvarez G?rciga / Dandelion (http://www.thedandelionproject.com)
 * @license   http://www.opensource.org/licenses/mit-license.php MIT
 * @link      http://www.thedandelionproject.com
 */

namespace Dandelion\Tools\CodeGenerator;

use Dandelion\Tools\CodeGenerator\HtmlStrAttribute;

class StyleHtmlAttribute extends HtmlStrAttribute
{
    /**
     * StyleHtmlAttribute constructor.
     * @param string $style
     */
    public function __construct($style="")
    {
        parent::__construct("style", $style);
    }
}