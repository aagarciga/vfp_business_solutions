<?php
/**
 * User: Victor
 * Date: 26/03/2016
 * Time: 18:24
 * @author    Victor Luis Aguado Leon <victorluisaguadoleon@gmail.com>
 * @copyright 2011-2014 Alex Alvarez G�rciga / Dandelion (http://www.thedandelionproject.com)
 * @license   http://www.opensource.org/licenses/mit-license.php MIT
 * @link      http://www.thedandelionproject.com
 */

use Dandelion\Tools\Helpers\FieldDefinition;

?>

<div class="input-group">
    <input class="form-control" type="text" placeholder="<?php echo FieldDefinition::getDisplayName($FieldDefinition); ?>"
           data-fieldname="<?php echo $Field; ?>">
</div>
