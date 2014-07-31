<?php
/**
 * Project:  VFP Business Series
 * Copyright: 2014. VFP Business Solutions, LLC
 */

namespace Dandelion\MVC\Application\Controllers\BinToBin\Actions;

use Dandelion\MVC\Core\Action;

/**
 * VFP Business Series Bin To Bin Default Controller Action
 * @name Index
 */
class Index extends Action {

    /**
     * Default system page. Show Main menu.
     */
    public function Execute() {
        $this->Title = 'Bin To Bin | VFP Business Series - Warehouse Management System';
        
        $this->UserName = (!isset($_SESSION['username']))? 'Anonimous' : $_SESSION['username'];
        
        $this->ActivesWarehouses = $this->controller->DatUnitOfWork->ICWHSRepository->GetActives();
        
        $this->ActivesLocations = $this->controller->DatUnitOfWork->ICLOCRepository->GetActives();
        
        $jsonActivesLocations = array();
        foreach ($this->ActivesLocations as $location){
            $jsonActivesLocations []= $location->getLocno();
        }
        
        $this->jsonActivesLocations = json_encode($jsonActivesLocations);
        
    }
}