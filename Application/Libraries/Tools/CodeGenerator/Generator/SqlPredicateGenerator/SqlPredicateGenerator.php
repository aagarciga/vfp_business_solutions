<?php
/**
 * User: Victor
 * Date: 01/02/2016
 * Time: 20:46
 * @author    Victor Luis Aguado Leon <victorluisaguadoleon@gmail.com>
 * @copyright 2011-2014 Alex Alvarez G?rciga / Dandelion (http://www.thedandelionproject.com)
 * @license   http://www.opensource.org/licenses/mit-license.php MIT
 * @link      http://www.thedandelionproject.com
 */

namespace Dandelion\Tools\CodeGenerator;

use Dandelion\Tools\CodeGenerator\BaseCodeGenerator;

class SqlPredicateGenerator extends BaseCodeGenerator
{
    /**
     * SqlPredicateGenerator constructor.
     */
    public function __construct()
    {
        parent::__construct();
    }

    function getCode()
    {
        $result = "";
        foreach ($this->virtualCodes as $virtualCode){
            $sqlCode = $virtualCode->getCode();
            $result .= "$sqlCode ";
        }
        $length = strlen($result);
        if ($length > 0){
            $result = substr($result, 0, $length - 1);
        }
        return $result;
    }
}