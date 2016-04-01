<?php
/**
 * User: Victor
 * Date: 01/04/2016
 * Time: 9:29
 * @author    Victor Luis Aguado Leon <victorluisaguadoleon@gmail.com>
 * @copyright 2011-2014 Alex Alvarez G?rciga / Dandelion (http://www.thedandelionproject.com)
 * @license   http://www.opensource.org/licenses/mit-license.php MIT
 * @link      http://www.thedandelionproject.com
 */

namespace Dandelion\MVC\Application\Controllers\EquipmentDashboard\Actions;

use Dandelion\MVC\Core\Action;
use Dandelion\MVC\Core\Exceptions\PropertyNotFoundException;

class UpdateHistoryId_Post extends Action
{
    public function Execute()
    {
        if (!$this->Request->hasProperty('id')){
            throw new \HttpInvalidParamException('"Id" http param not found on the request.');
        }

        $id = base64_decode($this->Request->id);
        $values = $this->Request->hasProperty('values') ? json_decode(base64_decode($this->Request->values)) : new \stdClass();

        if (!isset($values->equipid)){
            throw new PropertyNotFoundException('"Equipment Id" not found on the request.');
        }

        $equipmentId = $values->equipid;
        $this->controller->DatUnitOfWork->SWEQUIPRepository->UpdateHistoryId($equipmentId, $id);
        $this->Redirect('EquipmentDashboard', 'Index', $this->Request);
    }
}