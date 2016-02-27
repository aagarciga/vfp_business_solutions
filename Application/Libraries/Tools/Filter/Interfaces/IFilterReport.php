<?php
/**
 * User: Victor
 * Date: 25/01/2016
 * Time: 14:47
 * @author    Victor Luis Aguado Leon <victorluisaguadoleon@gmail.com>
 * @copyright 2011-2014 Alex Alvarez G�rciga / Dandelion (http://www.thedandelionproject.com)
 * @license   http://www.opensource.org/licenses/mit-license.php MIT
 * @link      http://www.thedandelionproject.com
 */

namespace Dandelion\Tools\Filter;


interface IFilterReport
{
    function reportWarning($nodeType, $message);

    function reportError($nodeType, $message);

    function errorCount();

    function getError($index);

    function warningCount();

    function getWarning($index);
}