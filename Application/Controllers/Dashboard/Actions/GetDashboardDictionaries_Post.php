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
            $current['descrip'] = trim($row->getDescrip());
            $result[] = $current;
        }
        return $result;
    }
}