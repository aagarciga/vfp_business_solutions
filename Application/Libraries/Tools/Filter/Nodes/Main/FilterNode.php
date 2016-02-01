<?php
/**
 * User: Victor
 * Date: 01/02/2016
 * Time: 9:32
 * @author    Victor Luis Aguado Leon <victorluisaguadoleon@gmail.com>
 * @copyright 2011-2014 Alex Alvarez G?rciga / Dandelion (http://www.thedandelionproject.com)
 * @license   http://www.opensource.org/licenses/mit-license.php MIT
 * @link      http://www.thedandelionproject.com
 */

namespace Dandelion\Tools\Filter;

use Dandelion\Tools\Filter\BaseFilterNode;

abstract class FilterNode extends BaseFilterNode implements IFilterNode
{
    private $_isOk;

    public abstract function checkSemantic($report);

    public abstract function generateSqlCode($codeGenerator);

    public abstract function generateHtmlCode($codeGenerator);

    protected function setIsOk($isOk){
        $this->_isOk = $isOk;
    }

    public function isOk(){
        return $this->_isOk;
    }
}