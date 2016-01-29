<?php
/**
 * User: Princesa
 * Date: 28/01/2016
 * Time: 19:25
 */

namespace Dandelion\MVC\Application\Tools;

use Dandelion\Diana\BootstrapPager;

require_once MVC_DIR_APP_TOOLS . DIRECTORY_SEPARATOR . 'Dictionary.php';


class BootstrapPagerTest extends BootstrapPager
{
    protected $_fieldsDefinition;

    public function __construct($fieldsDefinition, $dbDriver, $sql, $itemPerPage = 5, $middleRange = 5, $showPagerControlsIfMoreThan = 10, $itemsCount = null){
        parent::__construct($dbDriver, $sql, $itemPerPage, $middleRange, $showPagerControlsIfMoreThan, $itemsCount);
        $this->_fieldsDefinition = $fieldsDefinition;
    }

    public function getItemsCount()
    {
        return 1000;
    }

    public function getCurrentPagedItems()
    {
        $itemPerPage = (int) $this->itemsPerPage[0];
        $result = array();
        for ($i = 0; $i < $itemPerPage; $i++){
            $item = new Dictionary();
            foreach ($this->_fieldsDefinition as $field => $type){
                $item->$field = "NULL";
            }
            $result[] = $item;
        }
        return $result;
    }


}