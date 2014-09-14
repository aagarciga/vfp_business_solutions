<?php

/**
 * Project:  VFP Business Series
 * Copyright: 2014. VFP Business Solutions, LLC
 */

namespace Dandelion\MVC\Application\Models\Entities;

use Dandelion\MVC\Application\Models\Entities\Base\BaseSOSHPREL;

/**
 * SOSHPREL Related Ticket Items
 */
class SOSHPREL extends BaseSOSHPREL {
    public function getQtypick() {
        return intval(parent::getQtypick());
    }
} 