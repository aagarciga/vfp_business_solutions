<?php

/**
 * Project:  VFP Business Series
 * Copyright: 2014. VFP Business Solutions, LLC
 */

namespace Dandelion\MVC\Application\Controllers\QuoteDashboard\Actions;

use Dandelion\MVC\Core\Action;

/**
 * Ajax GetDictionaries
 * @name GetDictionaries_Post
 */
class GetDictionaries_Post extends Action {

    public function Execute() {
                
        $result = array();
        $result['status'] = $this->getStatusDictionary();
        $result['vessel'] = $this->getVesselDictionary();
        $result['projectManager'] = $this->getProjectManagerDictionary();
        $result['costCenter'] = $this->getCostCenterDictionary();
        return json_encode($result);
    }
    
    private function getStatusDictionary() {
        return array(
            array('id' => '0', 'descrip' => 'Empty'),
            array('id' => '1', 'descrip' => 'RFQ Received'),
            array('id' => '2', 'descrip' => 'Quote Prepared'),
            array('id' => '3', 'descrip' => 'Sent to Customer'),
            array('id' => '4', 'descrip' => 'CSR follow up'),
            array('id' => '5', 'descrip' => 'Revisions'),
            array('id' => '6', 'descrip' => 'Not  approved'),
            array('id' => '7', 'descrip' => 'Quote approved'),
            array('id' => '8', 'descrip' => 'Billed')            
        );
    }
    
    private function getVesselDictionary() {
        $result = array();
        $vesselCollection = $this->controller->DatUnitOfWork->SWVESSELRepository->GetAll();
        foreach ($vesselCollection as $row){
            $current = array();
            $current['id'] = trim($row->getVesselid());
            $current['descrip'] = '('.$current['id'].') '.trim($row->getDescrip());
            $result[] = $current;
        }
        return $result;
    }
    
    private function getProjectManagerDictionary() {
        $result = array();
        $projectManagerCollection = $this->controller->DatUnitOfWork->SWINSPRepository->GetActives();
        foreach ($projectManagerCollection as $row){
            $current = array();
            $current['id'] = trim($row->getInspectno());
            $current['descrip'] = '('.$current['id'].') '.trim($row->getInspectnm());
            $result[] = $current;
        }
        return $result;
    }
    
    private function getCostCenterDictionary() {
        $result = array();
        $costCenterCollection = $this->controller->DatUnitOfWork->GLCSTMSTRepository->GetActives();
        foreach ($costCenterCollection as $row){
            $current = array();
            $current['id'] = trim($row->getCstctid());
            $current['descrip'] = '('.$current['id'].') '.trim($row->getDescrip());
            $result[] = $current;
        }
        return $result;
    }
}