<?php
/**
 * User: Victor
 * Date: 13/03/2016
 * Time: 13:58
 * @author    Victor Luis Aguado Leon <victorluisaguadoleon@gmail.com>
 * @copyright 2011-2014 Alex Alvarez G?rciga / Dandelion (http://www.thedandelionproject.com)
 * @license   http://www.opensource.org/licenses/mit-license.php MIT
 * @link      http://www.thedandelionproject.com
 */

namespace Dandelion\Tools\CodeGenerator;

use Dandelion\Tools\CodeGenerator\HtmlStrAttribute;

class ValueHtmlAttribute extends HtmlStrAttribute
{
    /**
     * ValueHtmlAttribute constructor.
     * @param string $value
     */
    public function __construct($value)
    {
        parent::__construct("value", $value);
    }
}