<?php
/**
 * Created by PhpStorm.
 * User: Victor
 * Date: 14/01/2016
 * Time: 12:16
 * Project:  VFP Business Series
 * Copyright: 2014. VFP Business Solutions, LLC
 */

namespace Dandelion\MVC\Application\Controllers\OnSalesOrderDashboard\Actions;


use Dandelion\MVC\Core\Action;
use Dandelion\MVC\Application\Models\Entities\SYSEXPORT;
use Dandelion\GUIDGenerator;

/**
 * Create by Victor
 * Ajax Get Material Status Items
 * @name UpdateSOHEADMaterialStatus_Post
 */
class SaveFilter_Post extends Action
{
    /**
     * Returns Material Status Items
     * @return JSON
     */
    public function Execute()
    {
        $exportedBy = 'OSO';
        $filterName = filter_input(INPUT_POST, 'filterName');
        $filterString = filter_input(INPUT_POST, 'filterString');
        $filterHtml = filter_input(INPUT_POST, 'filterHtml');
        $filterValues = filter_input(INPUT_POST, 'filterValues');

        $this->UserName = (!isset($_SESSION['username']))? 'Anonimous' : $_SESSION['username'];

        if ($filterName === "" && $filterString === "" && $filterHtml === "") {
            return json_encode('failure');
        }
        $result = array();
        $filterStringSerialized = strtr($filterString, array("'" => "\"")); // Remenber deserialize replacing " by '

        //$filterStringSerialized = addslashes($filterString); // Use pairing with stripslashes() - Un-quotes a quoted string

        $user = $this->controller->VfpDataUnitOfWork->SysuserRepository->GetByUsername($this->UserName);
        $filterId = GUIDGenerator::getGUID();
        $entity = new SYSEXPORT($filterName, "", $filterHtml, $filterValues, $filterStringSerialized, "", $exportedBy, $user->getUsername(), $filterId);
        $success = $this->controller->VfpDataUnitOfWork->SysexportRepository->Add($entity);
        $result['status'] = $success ? 'success' : 'failure';
        $result['filterid'] = $filterId;

        return json_encode($result);
    }

}