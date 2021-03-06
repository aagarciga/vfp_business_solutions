<?php
/**
 * User: Victor
 * Date: 01/02/2016
 * Time: 19:34
 * @author    Victor Luis Aguado Leon <victorluisaguadoleon@gmail.com>
 * @copyright 2011-2014 Alex Alvarez G?rciga / Dandelion (http://www.thedandelionproject.com)
 * @license   http://www.opensource.org/licenses/mit-license.php MIT
 * @link      http://www.thedandelionproject.com
 */

namespace Dandelion\Tools\Filter;

define('DATE_SEPARATOR', '/');

use Dandelion\Tools\Filter\ConstantNode;
use Dandelion\Tools\CodeGenerator\SqlStringVirtualCode;

class DateNode extends ConstantNode
{
    /**
     * DateNode constructor.
     */
    public function __construct()
    {
        parent::__construct();
    }

    public function checkSemantic($report)
    {
        // TODO: Implement checkSemantic() method.
    }

    public function generateSqlCode($codeGenerator)
    {
        $virtualCode = new SqlStringVirtualCode((string) $this->getStrDate());
        $codeGenerator->InsertCode($virtualCode);
    }

    public function getDay(){
        $value = $this->getValue();
        return $value[1];
    }

    public function getMonth(){
        $value = $this->getValue();
        return $value[0];
    }

    public function getYear(){
        $value = $this->getValue();
        return $value[2];
    }

    public function getStrDate(){
        return $this->getMonth() . DATE_SEPARATOR . $this->getDay() . DATE_SEPARATOR . $this->getYear();
    }
}