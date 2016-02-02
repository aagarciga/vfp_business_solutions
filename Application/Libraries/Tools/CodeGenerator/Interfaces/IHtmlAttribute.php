<?php
/**
 * User: Victor
 * Date: 01/02/2016
 * Time: 21:41
 * @author    Victor Luis Aguado Leon <victorluisaguadoleon@gmail.com>
 * @copyright 2011-2014 Alex Alvarez G?rciga / Dandelion (http://www.thedandelionproject.com)
 * @license   http://www.opensource.org/licenses/mit-license.php MIT
 * @link      http://www.thedandelionproject.com
 */

namespace Dandelion\Tools\CodeGenerator;

interface IHtmlAttribute
{
    function getAttributeName();

    function getValue();
}