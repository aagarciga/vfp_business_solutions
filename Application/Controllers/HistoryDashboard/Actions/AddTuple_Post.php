<?php
/**
 * User: Victor
 * Date: 31/03/2016
 * Time: 19:41
 * @author    Victor Luis Aguado Leon <victorluisaguadoleon@gmail.com>
 * @copyright 2011-2014 Alex Alvarez G�rciga / Dandelion (http://www.thedandelionproject.com)
 * @license   http://www.opensource.org/licenses/mit-license.php MIT
 * @link      http://www.thedandelionproject.com
 */

namespace Dandelion\MVC\Application\Controllers\HistoryDashboard\Actions;

use Dandelion\MVC\Application\Controllers\TupleAction;

class AddTuple_Post extends TupleAction
{
    public function Execute()
    {
        $redirect = $this->getRedirectRequestParam();
        $values = $this->getValuesRequestParam();


    }
}