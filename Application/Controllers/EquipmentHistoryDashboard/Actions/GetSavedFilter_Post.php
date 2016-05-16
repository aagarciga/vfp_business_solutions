<?php
/**
 * User: Victor
 * Date: 14/01/2016
 * Time: 12:06
 * Project:  VFP Business Series
 * Copyright: 2014. VFP Business Solutions, LLC
 */

namespace Dandelion\MVC\Application\Controllers\EquipmentHistoryDashboard\Actions;


use Dandelion\MVC\Application\Models\Entities\SYSEXPORT;
use Dandelion\MVC\Core\Action;
use Dandelion\Tools\CodeGenerator\CodeGenerator;
use Dandelion\Tools\CodeGenerator\HtmlTagsGenerator;
use Dandelion\TreeCreator;

/**
 * Returns Load and populate the DynamicFilter instance with a saved filter
 * @return JSON
 */
class GetSavedFilter_Post extends Action
{
    public function Execute()
    {
        $result = array();

        $filterid = $this->Request->hasProperty('filterid') ? $this->Request->filterid : '';

        $savedFilterTree = $savedFilterTree = $this->controller->getSessionFilterTree();;
        $savedFilter = new SYSEXPORT("", "", "", "", "", "", "", "", DEFAULT_SESSION_FILTER_ID);
        $htmlCodeGenerator = new HtmlTagsGenerator();
        if ($filterid !== DEFAULT_SESSION_FILTER_ID){
            $savedFilter = $this->controller->VfpDataUnitOfWork->SysexportRepository->GetByFilterid($filterid);
            if ($savedFilter !== ''){
                $jsonSaveFilter = $savedFilter->getExpfields();
                $savedFilterTree = TreeCreator::createTree(json_decode($jsonSaveFilter));
            }
        }

        $savedFilterTree->generateHtmlCode($htmlCodeGenerator);

        $success = !is_null($savedFilter);
        $result['success'] = false;
        if ($success) {
            $result['success'] = true;
            $result['exportid'] = trim($savedFilter->getExportid()); // Filter Name
            $result['descrip'] = trim($savedFilter->getDescrip()); // Legacy
            $result['expfields'] =  trim($htmlCodeGenerator->getCode()); // HTML Filter fields
            $result['expfrom'] = trim($savedFilter->getExpfrom()); // Legacy
            $result['expfilter'] = trim($savedFilter->getExpfilter()); // Filter String
            $result['explink'] = trim($savedFilter->getExplink()); //Legacy
            $result['exporderby'] = trim($savedFilter->getExporderby()); // Legacy
            $result['fuserid'] = trim($savedFilter->getFuserid()); // User ID
            $result['filterid'] = trim($savedFilter->getFilterid()); // Filter ID (Curly GUID) 38 char lenght
        }

        return json_encode($result);
    }

}