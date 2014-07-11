<?php

/**
 * Project:  VFP Business Series
 * Copyright: 2014. VFP Business Solutions, LLC
 */

namespace Dandelion\MVC\Application\Controllers\PhysicalCount\Actions;

use Dandelion\MVC\Core\Action;
use Dandelion\MVC\Application\Models\Entities;

/**
 * Ajax Get Item Itemno and Upccode
 * @name AddItemCount_Post
 */
class AddItemCount_Post extends Action {
    /*
     * Voy con los Duplicados para que no tengas que volver atras despues

      1- Si se escanea un item que ya esta con ese Location+ itemno en la tabla ICBARCode entonces marcar ese item con DUPRECORD = .t.
      2- anadir entonces ese nuevo item a la tabla
      3- solo se mostrara el ultimo scaneado del mismo item en el grid
      4- Mostrar en DUP  la suma de todos los dup que encuentres ( contador)
      5- Mostrar en TOT la suma de todos los scaneados (contador)
      Duplicados

      Update IcBarCodedbf Set DUPRECORD=.T.,itmcount='DUP',DupRecDel=.t. ;
      WHERE IcBarCodedbf.LocNo+IcBarCodedbf.ItemNo=cSearch

      Este es el Insert en la tabla de Icbarcode, Docno lo generas como esta ahi( es importante llenar los campos con el userid la estacion el tiempo


      cfupdtime=Time()
      cfupddate=Date()
      cfuserid=Allt(cusername)
      cfstation=Alltrim(Sys(0))
      cType="ME"
      citmcount="OK"

      Select IcBarCodedbf

      cDocNo=STR(RECCOUNT()+1000000,7)

      Insert Into IcBarCodedbf
      (DocNo,Type,barcode,UpcCode,ItemNo,whs,LocNo,location,;
      Descrip,DUPRECORD,itmcount,Date,qty,;
      fupdtime,fupddate,fuserid,fstation) Values ;
      (cDocNo,cType,pUpcCode,pUpcCode,pItemNo,sv_DefWhs,pLocNo,pLocNo,;
      pDescrip,cDuplicate,citmcount,Datetime(),qtypcs,;
      cfupdtime,cfupddate,cfuserid,cfstation)

     */

    /**
     * Ajax Get Item Itemno and Upccode
     */
    public function Execute() {
        
        
        $barcode = filter_input(INPUT_POST, 'barcode');
        $location = filter_input(INPUT_POST, 'location');
        $count = filter_input(INPUT_POST, 'count');    
        
        $fuserid = $_SESSION['username'];  
        $whs = isset($_SESSION['userwhsdef'])?$_SESSION['userwhsdef'] : '000'; //Default Warehouse       
        
        $fupdtime = date("m/d/Y h:i:s A"); // 10/23/2012 02:37:54 PM   
        $fupddate = date("Y-m-d"); // 10/23/2012 "m/d/Y"  (1992-05-25)  
        $date = date("Y-m-d h:i:s.u"); //(1999-03-19 13:45:33.013)
        
        $result = array();

        if ($barcode != '') {
            $item = $this->FindItem($barcode);
            if ($item !== null) {                
                
                $docno = \Dandelion\GUIDGenerator::getGUID(); // To make GUID for unique id
                $type = 'ME';
                $itmcount = 'OK';
                $upccode = $item->getUpccode();
                $itemno = $item->getItemno();
                $locno = $location;
                $descrip = $item->getDescrip();
                $qty = $count;
                $duprecord = false; // by default
                $fstation = $fuserid;
                $qtyscan = $qtytopo = 0; // Initializing Numeric Fields
                $updpodate = date("Y-m-d");
                
                $entity = new Entities\ICBARCODE(
                        $docno, 
                        $type, 
                        $barcode, 
                        $serialno, 
                        $whs, 
                        $itmcount, 
                        $location, 
                        $qty, 
//                        $user, 
                        $date, 
//                        $delete, 
                        $nflg0, 
                        $serialnf, 
                        $fupdtime, 
                        $fupddate, 
                        $fstation, 
                        $fuserid, 
                        $itemno, 
                        $descrip, 
                        $duprecord, 
                        $duprecdel, 
                        $locno, 
                        $upccode, 
                        $qblistid, 
                        $whsno, 
                        $pono, 
                        $qtyscan, 
                        $prostatus, 
                        $qtytopo, 
                        $updpodate, 
                        $updpono);
                
                $docnoIfDuplicated = $this->IsDuplicated($entity);
                if (!$docnoIfDuplicated) {
                    $result['isDuplicated'] = false;
                    $queryResult = $this->controller->DatUnitOfWork->ICBARCODERepository->Add($entity); 
                }
                else{
                    $result['isDuplicated'] = true;
                    $entity->setDocno($docnoIfDuplicated);
                    $entity->setDuprecord(true);
//                    $entity->setDuprecdel(false);
                    $entity->setItmcount('DUP');
                    $queryResult = $this->controller->DatUnitOfWork->ICBARCODERepository->Update($entity);
                }
                $result['itemno'] = trim($item->getItemno());
                $result['upccode'] = trim($item->getUpccode());
            }
        }
        return json_encode($result);
    }
    
    /**
     * 
     * @param \Dandelion\MVC\Application\Models\Entities\ICBARCODE $entity
     * @return boolean
     */
    private function IsDuplicated(Entities\ICBARCODE $entity) {
//        $location = trim($entity->getLocation());
//        $itemno = trim($entity->getItemno());
//        
//        $queryResult = $this->controller->DatUnitOfWork->ICBARCODERepository->Get("WHERE ITEMNO = '$itemno' AND LOCATION = '$location'");
//        if(count($queryResult)){
//            return true;
//        }
//        return false;
        
        $result = $this->controller->DatUnitOfWork->ICBARCODERepository->GetByItemnoAndLocation($entity->getItemno(), $entity->getLocation());
        if ($result !== null) {
            return $result->getDocno();
        }
        return false;
    }
    
    

    /**
     * Find item by barcode first in ICPARM and return an ICPARM object if exist, 
     * if not find in ICUPCPARM and return an ICUPCPARM object if exist. 
     * Null otherwise.
     * @param type $barcode
     * @return ICPARM00 or null
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
     * @return ICPARM Object ,null otherwise
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
     * @return ICPARM Object ,null otherwise
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
