<?php
/**
 * User: Victor
 * Date: 21/02/2016
 * Time: 20:03
 * @author    Victor Luis Aguado Leon <victorluisaguadoleon@gmail.com>
 * @copyright 2011-2014 Alex Alvarez G?rciga / Dandelion (http://www.thedandelionproject.com)
 * @license   http://www.opensource.org/licenses/mit-license.php MIT
 * @link      http://www.thedandelionproject.com
 */

namespace Dandelion\Tools\CodeGenerator;

use Dandelion\Tools\CodeGenerator\DataHtmlStrAttribute;

class ToggleDataHtmlAttribute extends DataHtmlStrAttribute
{
    /**
     * ToggleDataHtmlAttribute constructor.
     */
    public function __construct($toggle)
    {
        parent::__construct("toggle", $toggle);
    }
}