<?php
/**
 * User: Victor
 * Date: 29/03/2016
 * Time: 13:21
 * @author    Victor Luis Aguado Leon <victorluisaguadoleon@gmail.com>
 * @copyright 2011-2014 Alex Alvarez G�rciga / Dandelion (http://www.thedandelionproject.com)
 * @license   http://www.opensource.org/licenses/mit-license.php MIT
 * @link      http://www.thedandelionproject.com
 */

namespace Dandelion\MVC\Application\Controllers\HistoryDashboard\Actions;

use Dandelion\MVC\Application\Controllers\TupleAction;
use Dandelion\Tools\Helpers\FieldDefinition;

class EditTuple_Post extends TupleAction
{
    public function Execute()
    {
        $requestParam = $this->getDupleValuesRequestParam();
        $id = $this->getIdRequestParam();
        $redirect = $this->getRedirectRequestParam();
        $values = $requestParam['values'];
        $oldValues = $requestParam['oldValues'];

        $this->controller->UpdateEntity($id, $values, $oldValues);

        $equipmentId = array_key_exists('equipid', $oldValues) ? $oldValues['equipid'] : null;
        $workOrder = array_key_exists('ordnum', $values) ? $values['ordnum'] : null;
        $oldWorkOrder = array_key_exists('ordnum', $oldValues) ? $oldValues['ordnum'] : null;
        if (!is_null($equipmentId) && !is_null($workOrder) && !is_null($oldWorkOrder) && ($workOrder !== $oldWorkOrder)){
            $this->controller->UpdateWorkOrder($equipmentId, $workOrder, $id);
        }

        $this->Redirect($redirect->controller, $redirect->action);
    }

}