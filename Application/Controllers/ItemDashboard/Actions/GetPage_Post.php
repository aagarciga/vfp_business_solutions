<?php
/**
 * Created by PhpStorm.
 * User: Victor
 * Date: 12/01/2016
 * Time: 14:39
 * Project:  VFP Business Series
 * Copyright: 2014. VFP Business Solutions, LLC
 */

namespace Dandelion\MVC\Application\Controllers\ItemDashboard\Actions;

use Dandelion\MVC\Core\Action;

/**
 * VFP Business Series Account Receivable Dashboard Controller Action
 * @name GetPage_Post
 */
class GetPage_Post extends Action
{
    public function Execute()
    {
        $itemno = $this->Request->hasProperty('itemno') ? $this->Request->itemno : '';

    }
}