<?php

/**
 * Project:  VFP Business Series
 * Copyright: 2014. VFP Business Solutions, LLC
 */

namespace Dandelion\MVC\Application\Controllers\Dashboard\Actions;

use Dandelion\MVC\Core\Action;

/**
 * Ajax VesselForm current Project data
 * @name GetVesselFormData_Post
 */
class GetVesselFormData_Post extends Action {

    /**
     * Returns SalesOrderObject with Associated Items Collection from Soitem
     * @return JSON
     */
    public function Execute() {
        
        $result = array('success' => false);
        //If i must to get from ordnum when vesselid are not given directly (just in case!)
//        $ordnum = $this->Request->hasProperty('ordnum') ? $this->Request->ordnum : '';
        $vesselid = $this->Request->hasProperty('vesselid') ? $this->Request->vesselid : '';
        
        $vesselData = $this->controller->DatUnitOfWork->SWVESSELRepository->GetbyId($vesselid);
        if ($vesselData) {
            
//            $username = (!isset($_SESSION['username']))? 'Anonimous' : $_SESSION['username'];
//            $userEntity = $this->controller->VfpDataUnitOfWork->SysuserRepository->GetByUsername($username);
            $result['vesselFormObject']['vesselid'] = $vesselData->getVesselid();
            $result['vesselFormObject']['descrip'] = $vesselData->getDescrip();
            $result['vesselFormObject']['shipclass'] = $vesselData->getShipclass();
            $result['vesselFormObject']['pentype'] = $vesselData->getPentype();
            $result['vesselFormObject']['cementid'] = $vesselData->getCementid();
            $result['vesselFormObject']['firecaulk'] = $vesselData->getFirecaulk();
            $result['vesselFormObject']['notes'] = $vesselData->getNotes();
            $result['success'] = true;
        }
        return json_encode($result);
    }
    
    
}