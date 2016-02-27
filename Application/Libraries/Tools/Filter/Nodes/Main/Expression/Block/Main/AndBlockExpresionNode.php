<?php
/**
 * User: Victor
 * Date: 20/02/2016
 * Time: 16:00
 * @author    Victor Luis Aguado Leon <victorluisaguadoleon@gmail.com>
 * @copyright 2011-2014 Alex Alvarez G?rciga / Dandelion (http://www.thedandelionproject.com)
 * @license   http://www.opensource.org/licenses/mit-license.php MIT
 * @link      http://www.thedandelionproject.com
 */

namespace Dandelion\Tools\Filter;

use Dandelion\Tools\CodeGenerator\AndBlockConnectionHtmlVirtualCode;
use Dandelion\Tools\CodeGenerator\SqlAndVirtualCode;
use Dandelion\Tools\Filter\ConnectionChildBlockExpresionNode;


class AndBlockExpresionNode extends ConnectionChildBlockExpresionNode
{
    public function __construct()
    {
        parent::__construct();
    }

    public function checkSemantic($report)
    {
        // TODO: Implement checkSemantic() method.
    }

    public function getSqlConnectionChildCode($leftIndex)
    {
        return new SqlAndVirtualCode();
    }

    public function getHtmlConnectionChildCode($leftIndex)
    {
        return new AndBlockConnectionHtmlVirtualCode();
    }
}