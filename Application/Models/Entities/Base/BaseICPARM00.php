<?php
/**
 * Project:  VFP Business Series
 * Copyright: 2014. VFP Business Solutions, LLC
 */

namespace Dandelion\MVC\Application\Models\Entities\Base;

/**
 * BaseICPARM00 entity definition to map ICPARM00 Table to ICPARM00 objects
 */
class BaseICPARM00 {
    private static $_name = "ICPARM00";

    protected $_itemno;
    protected $_descrip;

    public static function toString(){
        return self::$_name;
    }

    public function getItemno(){
        return $this->_itemno;
    }

    public function getDescrip(){
        return $this->_descrip;
    }

    public function setItemno($value){
        $this->_itemno = $value;
    }

    public function setDescrip($value){
        $this->_descrip = $value;
    }

    public function __construct( $itemno, $descrip ){
        $this->_itemno = $itemno;
        $this->_descrip = $descrip;
    }

}