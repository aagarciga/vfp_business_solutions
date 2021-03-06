<?php
/**
 * User: Victor
 * Date: 30/01/2016
 * Time: 16:31
 * @author    Victor Luis Aguado Leon <victorluisaguadoleon@gmail.com>
 * @copyright 2011-2014 Alex Alvarez G?rciga / Dandelion (http://www.thedandelionproject.com)
 * @license   http://www.opensource.org/licenses/mit-license.php MIT
 * @link      http://www.thedandelionproject.com
 */

namespace Dandelion\Tools\Filter;

use Dandelion\Tools\Filter\BaseAuxiliaryFilterNode;

class ErrorFilterNode extends BaseAuxiliaryFilterNode
{
    /**
     * ErrorFilterNode constructor.
     */
    public function __construct()
    {
        parent::__construct();
    }

    public function nodeType()
    {
        return -1;
    }

}