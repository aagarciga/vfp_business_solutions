<?php
/* 
 * Copyright (C) 2015 Alex Alvarez Gárciga
 *
 * This program is free software; you can redistribute it and/or
 * modify it under the terms of the GNU General Public License
 * as published by the Free Software Foundation; either version 2
 * of the License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA  02111-1307, USA.
 */

namespace Dandelion\MVC\Application\Controllers\Creator\Actions;

use Dandelion\MVC\Core\Action;

/**
 * 
 */
class Index extends Action {

    public function Execute() {
        $this->Title = 'Creator | Dandelion MVC Solutions';
    }

}

?>
