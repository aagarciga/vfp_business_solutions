<?php
/**
 * User: Victor
 * Date: 01/02/2016
 * Time: 19:37
 * @author    Victor Luis Aguado Leon <victorluisaguadoleon@gmail.com>
 * @copyright 2011-2014 Alex Alvarez G?rciga / Dandelion (http://www.thedandelionproject.com)
 * @license   http://www.opensource.org/licenses/mit-license.php MIT
 * @link      http://www.thedandelionproject.com
 */

namespace Dandelion\Tools\Filter;

use Dandelion\Tools\Filter\ConstantNode;
use Dandelion\Tools\CodeGenerator\SqlVirtualCode;

class FieldNode extends ConstantNode
{
    protected $table;

    protected $field;

    /**
     * FieldNode constructor.
     * @param $table
     * @param $field
     */
    public function __construct($field, $table=null)
    {
        $this->table = $table;
        $this->field = $field;
    }

    public function checkSemantic($report)
    {
        // TODO: Implement checkSemantic() method.
    }

    private function createField(){
        $table = $this->table;
        $field = $this->field;
        return (is_null($table)) ? "[$field]" : "[$table].[$field]";
    }

    public function generateSqlCode($codeGenerator)
    {
        $virtualCode = new SqlVirtualCode($this->createField());
        $codeGenerator->InsertCode($virtualCode);
    }

    public function generateHtmlCode($codeGenerator)
    {
        // TODO: Implement generateHtmlCode() method.
    }

}