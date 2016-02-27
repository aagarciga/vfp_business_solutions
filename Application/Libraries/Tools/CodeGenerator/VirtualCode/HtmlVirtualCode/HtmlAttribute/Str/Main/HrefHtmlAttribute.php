<?php
/**
 * User: Victor
 * Date: 21/02/2016
 * Time: 22:16
 * @author    Victor Luis Aguado Leon <victorluisaguadoleon@gmail.com>
 * @copyright 2011-2014 Alex Alvarez G?rciga / Dandelion (http://www.thedandelionproject.com)
 * @license   http://www.opensource.org/licenses/mit-license.php MIT
 * @link      http://www.thedandelionproject.com
 */

namespace Dandelion\Tools\CodeGenerator;

use Dandelion\Tools\CodeGenerator\HtmlStrAttribute;

class HrefHtmlAttribute extends HtmlStrAttribute
{
    /**
     * HrefHtmlAttribute constructor.
     * @param string $href
     */
    public function __construct($href="#")
    {
        parent::__construct("href", $href);
    }
}