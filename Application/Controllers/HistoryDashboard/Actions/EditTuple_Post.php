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

use Dandelion\MVC\Application\Controllers\EditTupleAction;
use Dandelion\Tools\Helpers\FieldDefinition;

class EditTuple_Post extends EditTupleAction
{
    public function Execute()
    {
        $requestParam = $this->processRequest();
        $id = $requestParam['id'];
        $redirect = $requestParam['redirect'];
        $values = $requestParam['values'];
        $oldValues = $requestParam['oldValues'];

        $this->controller->UpdateEntity($id, $values, $oldValues);

        $this->Redirect($redirect->controller, $redirect->action);
    }

}