<?php
/**
 * Created by PhpStorm.
 * User: Victor
 * Date: 14/01/2016
 * Time: 12:16
 * Project:  VFP Business Series
 * Copyright: 2014. VFP Business Solutions, LLC
 */

namespace Dandelion\MVC\Application\Controllers\HistoryDashboard\Actions;


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
        $exportedBy = 'HTD';
        $filterName = filter_input(INPUT_POST, 'filterName');
        $jsonFilterTree = filter_input(INPUT_POST, 'jsonFilterTree');

        $this->UserName = (!isset($_SESSION['username']))? 'Anonimous' : $_SESSION['username'];

        if ($filterName === "" && $jsonFilterTree === "") {
            return json_encode('failure');
        }
        $result = array();

        $user = $this->controller->VfpDataUnitOfWork->SysuserRepository->GetByUsername($this->UserName);
        $filterId = GUIDGenerator::getGUID();
        $entity = new SYSEXPORT($filterName, "", $jsonFilterTree, "", "", "", $exportedBy, $user->getUsername(), $filterId);
        $success = $this->controller->VfpDataUnitOfWork->SysexportRepository->Add($entity);
        $result['status'] = $success ? 'success' : 'failure';
        $result['filterid'] = $filterId;

        return json_encode($result);
    }

}