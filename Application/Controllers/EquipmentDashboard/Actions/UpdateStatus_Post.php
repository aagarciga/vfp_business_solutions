<?php
/**
 * User: Victor
 * Date: 10/02/2016
 * Time: 21:25
 */

namespace Dandelion\MVC\Application\Controllers\EquipmentDashboard\Actions;

use Dandelion\MVC\Core\Action;

/**
 * Ajax Update Status Items
 * @name UpdateStatus_Post
 */
class UpdateStatus_Post extends Action
{
    /**
     * Update Status Items
     * @return JSON
     */
    public function Execute() {

        $equipid = $this->Request->hasProperty('equipid') ? $this->Request->equipid : '';
        $status = $this->Request->hasProperty('status') ? $this->Request->status : '';
        if ($status === '')
            $status = null;
        if ($status === "Empty")
            $status = "";
        $result = "failure";
        if ($equipid && is_null($status)) {
            //TODO: Crear nuevo repo para swequip.
            $success = $this->controller->DatUnitOfWork->QUHSTHRepository->UpdateStatus($equipid, $status);
            if ($success) {
                $result = 'success';
            }
        } else {
            $result = "Request values are empty";
        }

        return json_encode($result);
    }
}