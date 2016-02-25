<?php
/**
 * User: Victor
 * Date: 25/02/2016
 * Time: 8:51
 * @author    Victor Luis Aguado Leon <victorluisaguadoleon@gmail.com>
 * @copyright 2011-2014 Alex Alvarez G?rciga / Dandelion (http://www.thedandelionproject.com)
 * @license   http://www.opensource.org/licenses/mit-license.php MIT
 * @link      http://www.thedandelionproject.com
 */

namespace Dandelion\Tools\Filter;

interface INodeCreator
{
    /**
     * @param int $index
     * @return IFilterNode
     */
    function getChild($index);

    /**
     * @param IFilterNode $child
     * @return $this
     */
    function addChild($child);

    /**
     * @return int
     */
    function getChildCount();

    /**
     * @param $value The value of node
     * @return $this
     */
    function setValue($value);

    /**
     * @return mixed the value of node
     */
    function getValue();
}