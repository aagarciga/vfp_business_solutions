<?php
/**
 * User: Victor
 * Date: 01/02/2016
 * Time: 13:38
 * @author    Victor Luis Aguado Leon <victorluisaguadoleon@gmail.com>
 * @copyright 2011-2014 Alex Alvarez G?rciga / Dandelion (http://www.thedandelionproject.com)
 * @license   http://www.opensource.org/licenses/mit-license.php MIT
 * @link      http://www.thedandelionproject.com
 */

namespace Dandelion\Tools\Filter;

use Dandelion\Tools\Filter\ExpressionNode;

abstract class OperatorNode extends ExpressionNode
{
    /**
     * OperatorNode constructor.
     */
    public function __construct()
    {
        parent::__construct();
    }
}