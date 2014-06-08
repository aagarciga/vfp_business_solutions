<?php

/**
 * Project:  VFP Business Series
 * Copyright: 2014. VFP Business Solutions, LLC
 */

namespace Dandelion\MVC\Application\Models\Entities;

use Dandelion\MVC\Application\Models\Entities\Base\BaseWMSCAN00;

/**
 * WMSCAN00 This is the Scanner table. Each handheld scanner should be defined in this table and given a unique identifier name and stored in the field ScanID ten alphanumeric characters in length. When a scanner performs an operation its status is saved here. At any given time you can see what that particular scanner is doing. Including the document it is scanning. 
 */
class WMSCAN00 extends BaseWMSCAN00 {
    
}
