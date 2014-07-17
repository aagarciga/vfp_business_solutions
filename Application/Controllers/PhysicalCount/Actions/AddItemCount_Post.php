<?php

/**
 * Project:  VFP Business Series
 * Copyright: 2014. VFP Business Solutions, LLC
 */

namespace Dandelion\MVC\Application\Controllers\PhysicalCount\Actions;

use Dandelion\MVC\Core\Action;
use Dandelion\MVC\Application\Models\Entities;

/**
 * Ajax Item Count Logic
 * @name AddItemCount_Post
 */
class AddItemCount_Post extends Action {
    
    /**
     * Ajax Item Count Logic
     */
    public function Execute() {

        $barcode = filter_input(INPUT_POST, 'barcode');
        $location = filter_input(INPUT_POST, 'location');
        $count = filter_input(INPUT_POST, 'count');

        $result = array();

        if ($barcode != '' && $location != '') {
            $item = $this->FindItem($barcode);
            
            if ($item !== null) {
                $entity = $this->CreateDefaultValuesEntity($barcode, $location, $count, $item);
                // Verifying before insert
                $docnoIfDuplicated = $this->IsDuplicated($entity);

                if ($this->InsertInICBARCODE($entity)) {
                    $result['error'] = false;

                    if (!$docnoIfDuplicated) {
                        $result['isDuplicated'] = false;
                    } else {
                        $result['isDuplicated'] = true;
                        
                        if ($this->InsertDupInICBARCODE($entity, $docnoIfDuplicated)) {
                            $result['error'] = false;
                        } else {
                            $result['error'] = true;
                            $result['errorMsg'] = 'Unable to insert Dup in ICBARCODE Table';
                        }
                    }
                } else {
                    $result['error'] = true;
                    $result['errorMsg'] = 'Unable to insert in ICBARCODE Table';
                }

                $result['itemno'] = trim($item->getItemno());
                $result['upccode'] = trim($item->getUpccode());
            }
        }
        return json_encode($result);
    }

    /**
     * Returns the GUID Docno if the entity already exist (same location and itemno) and itemcount value is 'OK'
     * @param \Dandelion\MVC\Application\Models\Entities\ICBARCODE $entity
     * @return Mixed GUID if duplicated, false otherwise
     */
    private function IsDuplicated(Entities\ICBARCODE $entity) {
       
        $result = $this->controller->DatUnitOfWork->ICBARCODERepository->GetByItemnoAndLocationOK($entity->getItemno(), $entity->getLocation());
        if ($result !== null) {
            return $result->getDocno();
        }
        return false;
    }
    
    /**
     * Create a entity with all values by default to work with
     * @param type $barcode
     * @param type $location
     * @param type $count
     * @param \Dandelion\MVC\Application\Models\Entities\ICPARM $item
     * @return \Dandelion\MVC\Application\Models\Entities\ICBARCODE
     */
    private function CreateDefaultValuesEntity($barcode, $location, $count, Entities\ICPARM $item){
        
        $docno = $serialno = $itmcount = $qblistid = $whsno = $pono = $prostatus = $updpono = '';
        $type = 'ME';
        
        $locno = $location;
        $qty = $count;
        
        $upccode = $item->getUpccode();
        $itemno = $item->getItemno();
        $descrip = $item->getDescrip(); 
        
        $vfpuser = $fuserid = $_SESSION['username'];
        $fstation = $this->getClientIp();
        
        // Default Warehouse 
        $whs = isset($_SESSION['userwhsdef'])?$_SESSION['userwhsdef'] : '000'; 
        
        // Date Time related fields
        // $fupdtime = date("m/d/Y h:i:s A");      // (10/23/2012 02:37:54 PM)  
        $updpodate = $fupddate = date("Y-m-d"); // (1992-05-25)  
        //      $fupdtime = $date = date("Y-m-d h:i:s");    // (1999-03-19 13:45:33)
        $fupdtime = date("Y-m-d h:i:s"); 
        
        // Initializing Logical Fields by default
        $vfpdelete = $nflg0 = $serialnf = $duprecord = $duprecdel = false;
        
        // Initializing Numeric Fields by default
        $qtyscan = $qtytopo = 0; 
        
        $result = new Entities\ICBARCODE($docno, $type, $barcode, $serialno, $whs, $itmcount, $location, $qty, $vfpuser, $vfpdelete, $nflg0, $serialnf, $fupdtime, $fupddate, $fstation, $fuserid, $itemno, $descrip, $duprecord, $duprecdel, $locno, $upccode, $qblistid, $whsno, $pono, $qtyscan, $prostatus, $qtytopo, $updpodate, $updpono);
        return $result;
    }
    
    function getClientIp() {
        $ipaddress = '';
        if (getenv('HTTP_CLIENT_IP'))
            $ipaddress = getenv('HTTP_CLIENT_IP');
        else if (getenv('HTTP_X_FORWARDED_FOR'))
            $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
        else if (getenv('HTTP_X_FORWARDED'))
            $ipaddress = getenv('HTTP_X_FORWARDED');
        else if (getenv('HTTP_FORWARDED_FOR'))
            $ipaddress = getenv('HTTP_FORWARDED_FOR');
        else if (getenv('HTTP_FORWARDED'))
            $ipaddress = getenv('HTTP_FORWARDED');
        else if (getenv('REMOTE_ADDR'))
            $ipaddress = getenv('REMOTE_ADDR');
        else
            $ipaddress = 'UNKNOWN';

        return $ipaddress;
    }

    /**
     * Set entity itemcount to 'OK' and give an unique identifier in order to insert in ICBARCODE Table
     * @param \Dandelion\MVC\Application\Models\Entities\ICBARCODE $entity
     * @return bool
     */
    private function InsertInICBARCODE(Entities\ICBARCODE $entity){
        
        // To make GUID for unique id
        $entity->setDocno(\Dandelion\GUIDGenerator::getGUID());
        $entity->setItmcount('OK');
        return $this->controller->DatUnitOfWork->ICBARCODERepository->Add($entity);
    }
    
    /**
     * Set entity duprecord to 'true' and itemcount to 'DUP' and update the duplicated entity in ICBARCODE Table
     * @param \Dandelion\MVC\Application\Models\Entities\ICBARCODE $entity
     * @return bool
     */
    private function InsertDupInICBARCODE(Entities\ICBARCODE $entity, $duplicatedDocno){

        // If Already exist one Update the last one in db 
        
        $entity = $this->controller->DatUnitOfWork->ICBARCODERepository->GetByDocno($duplicatedDocno);
//        $entity->setDocno($duplicatedDocno);
        $entity->setDuprecord(true);
        $entity->setItmcount('DUP');
        return $this->controller->DatUnitOfWork->ICBARCODERepository->Update($entity);
    }

    /**
     * Find item by barcode first in ICPARM and return an ICPARM object if exist, 
     * if not find in ICUPCPARM and return an ICUPCPARM object if exist. 
     * Null otherwise.
     * @param string $barcode
     * @return \Dandelion\MVC\Application\Models\Entities\ICPARM or null
     */
    private function FindItem($barcode) {

        $item = $this->FindItemByICPARM($barcode);
        if ($item !== null) {
            return $item;
        } else {
            return $this->FindItemByICUPCPARM($barcode);
        }
    }

    /**
     * Find item in ICPARM by itemno, upccode and venstkno fields
     * @param string $barcode
     * @return \Dandelion\MVC\Application\Models\Entities\ICPARM ,null otherwise
     */
    private function FindItemByICPARM($barcode) {

        $lowerBarcode = strtolower($barcode);
        $queryResult = $this->controller->DatUnitOfWork->ICPARMRepository->Get("WHERE lower(ITEMNO) = '$lowerBarcode' OR lower(UPCCODE) = '$lowerBarcode' OR lower(VENSTKNO) = '$lowerBarcode'");
        if (count($queryResult)) {
            return $queryResult[0];
        }
        return null;
    }

    /**
     * Find item in ICUPCPARM by upccode field, if exist find item in ICPARM by the itemno from ICUPCPARM.
     * @param string $barcode
     * @return \Dandelion\MVC\Application\Models\Entities\ICPARM ,null otherwise
     */
    private function FindItemByICUPCPARM($barcode) {
        $lowerBarcode = strtolower($barcode);
        $queryResult = $this->controller->DatUnitOfWork->ICUPCPARMRepository->Get("WHERE lower(UPCCODE) = '$lowerBarcode'");
        if (count($queryResult)) {
            $itemno = strtolower($queryResult[0]->getItemno());
            $queryResultFromICPARM = $this->controller->DatUnitOfWork->ICPARMRepository->Get("WHERE lower(ITEMNO) = '$itemno'");
            if (count($queryResultFromICPARM)) {
                return $queryResultFromICPARM[0];
            }
            return null;
        }
    }

}

?>
