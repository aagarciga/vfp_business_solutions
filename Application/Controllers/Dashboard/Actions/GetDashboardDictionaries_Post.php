<?php

/**
 * Project:  VFP Business Series
 * Copyright: 2014. VFP Business Solutions, LLC
 */

namespace Dandelion\MVC\Application\Controllers\Dashboard\Actions;

use Dandelion\MVC\Core\Action;

/**
 * Ajax GetDashboardDictionaries
 * @nameGetDashboardDictionaries_Post
 */
class GetDashboardDictionaries_Post extends Action {

    /**
     * Returns Material Status Items
     * @return JSON
     */
    public function Execute() {
                
        $result = array();
        $result['materialStatus'] = $this->getMaterialStatusDictionary();
        $result['jobStatus'] = $this->getJobStatusDictionary();
        $result['vesselDictionary'] = $this->getVesselDictionary();
        $result['jobTypeDictionary'] = $this->getJobTypeDictionary();
        $result['projectManagerDictionary'] = $this->getProjectManagerDictionary();
        $result['costCenterDictionary'] = $this->getCostCenterDictionary();
        return json_encode($result);
    }
    
    private function getMaterialStatusDictionary() {
        $result = array();
        $materialStatusCollection = $this->controller->DatUnitOfWork->SOEDISTATUSRepository->GetMaterialStatus();
        foreach ($materialStatusCollection as $row){
            $current = array();
            $current['id'] = trim($row->getEdistatid());
            $current['descrip'] = trim($row->getDescrip());
            $result[] = $current;
        }
        error_log(print_r($result, true));
        return $result;
    }
    
    private function getJobStatusDictionary() {
        $result = array();
        $jobStatusCollection = $this->controller->DatUnitOfWork->SOEDISTATUSRepository->GetJobStatus();
        foreach ($jobStatusCollection as $row){
            $current = array();
            $current['id'] = trim($row->getEdistatid());
            $current['descrip'] = trim($row->getDescrip());
            $result[] = $current;
        }
        return $result;
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
    
    private function getJobTypeDictionary() {
        $result = array();
        $jobTypeCollection = $this->controller->DatUnitOfWork->SOTYPEORDRepository->GetActives();
        foreach ($jobTypeCollection as $row){
            $current = array();
            $current['id'] = trim($row->getSotypecode());
            $formatedDescription = strtolower(trim($row->getDescrip()));
            $current['descrip'] = '(' . $current['id'] . ') ' . ucfirst($formatedDescription);
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