<?php
/**
 * User: Victor
 * Date: 21/02/2016
 * Time: 19:00
 * @author    Victor Luis Aguado Leon <victorluisaguadoleon@gmail.com>
 * @copyright 2011-2014 Alex Alvarez G?rciga / Dandelion (http://www.thedandelionproject.com)
 * @license   http://www.opensource.org/licenses/mit-license.php MIT
 * @link      http://www.thedandelionproject.com
 */

namespace Dandelion\Tools\CodeGenerator;

use Dandelion\Tools\CodeGenerator\HtmlVirtualCode;
use Dandelion\Tools\CodeGenerator\BtnGroupVirtualCode;

abstract class BlockConnectionHtmlVirtualCode extends HtmlVirtualCode
{
    static private $_captions = array("And", "Or");

    /**
     * BlockConnectionHtmlVirtualCode constructor.
     */
    public function __construct()
    {
    }

    abstract function getCaption();

    public function getCode(){
        $codeGenerator = BtnGroupVirtualCode::getCode($this->getCaption(), BlockConnectionHtmlVirtualCode::$_captions);
        return $codeGenerator->getCode();
    }
}