<?php
/**
 * User: Victor
 * Date: 20/02/2016
 * Time: 15:48
 * @author    Victor Luis Aguado Leon <victorluisaguadoleon@gmail.com>
 * @copyright 2011-2014 Alex Alvarez G?rciga / Dandelion (http://www.thedandelionproject.com)
 * @license   http://www.opensource.org/licenses/mit-license.php MIT
 * @link      http://www.thedandelionproject.com
 */

namespace Dandelion\Tools\Filter;

use Dandelion\Tools\Filter\ExpressionNode;

/**
 * Class BlockExpresionNode
 * @package Dandelion\Tools\Filter
 */
abstract class BaseBlockExpressionNode extends ExpressionNode
{
    public function __construct(){
        parent::__construct();
    }
}