<?php
/**
 * User: Princesa
 * Date: 03/02/2016
 * Time: 18:11
 */

namespace Dandelion\Tools\CodeGenerator;

use Dandelion\Tools\CodeGenerator\SqlVirtualCode;

class SqlNotVirtualCode extends SqlVirtualCode
{

    /**
     * SqlNotVirtualCode constructor.
     */
    public function __construct()
    {
        parent::__construct("NOT");
    }
}