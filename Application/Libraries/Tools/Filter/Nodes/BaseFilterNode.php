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

use Dandelion\Tools\Filter\NilFilterNode;


abstract class BaseFilterNode
{
    /**
     * BaseFilterNode constructor.
     */
    public function __construct()
    {
    }

    public function isNil(){
        return $this->isNil() && ($this instanceof NilFilterNode);
    }

    public function text(){
        return gettype($this);
    }

    public function nodeType(){
        return 0;
    }

    function __toString()
    {
        return $this->text();
    }
}