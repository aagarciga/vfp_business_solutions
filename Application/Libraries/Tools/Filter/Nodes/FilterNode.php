<?php
/**
 * User: Victor
 * Date: 30/01/2016
 * Time: 16:16
 * @author    Victor Luis Aguado Leon <victorluisaguadoleon@gmail.com>
 * @copyright 2011-2014 Alex Alvarez G?rciga / Dandelion (http://www.thedandelionproject.com)
 * @license   http://www.opensource.org/licenses/mit-license.php MIT
 * @link      http://www.thedandelionproject.com
 */

namespace Dandelion\Tools\Filter;

use Dandelion\Tools\Filter\IFilterNode;


abstract class FilterNode implements IFilterNode
{
    public abstract function checkSemantic();

    public abstract function generateSqlCode();

    public abstract function generateHtmlCode();
}