<?php
/**
 * User: Victor
 * Date: 03/02/2016
 * Time: 10:42
 * @author    Victor Luis Aguado Leon <victorluisaguadoleon@gmail.com>
 * @copyright 2011-2014 Alex Alvarez G?rciga / Dandelion (http://www.thedandelionproject.com)
 * @license   http://www.opensource.org/licenses/mit-license.php MIT
 * @link      http://www.thedandelionproject.com
 */

namespace Dandelion\Tools\CodeGenerator;

use Dandelion\Tools\CodeGenerator\HtmlVirtualCode;

class HtmlTextVirtualCode extends HtmlVirtualCode
{
    protected $text;

    /**
     * HtmlTextVirtualCode constructor.
     * @param $text
     */
    public function __construct($text)
    {
        $this->text = $text;
    }

    function getCode()
    {
        return $this->getText();
    }

    function getText(){
        return $this->text;
    }
}