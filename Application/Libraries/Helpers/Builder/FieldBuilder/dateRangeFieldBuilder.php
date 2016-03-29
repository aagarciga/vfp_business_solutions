<?php
/**
 * User: Victor
 * Date: 26/03/2016
 * Time: 20:01
 * @author    Victor Luis Aguado Leon <victorluisaguadoleon@gmail.com>
 * @copyright 2011-2014 Alex Alvarez G�rciga / Dandelion (http://www.thedandelionproject.com)
 * @license   http://www.opensource.org/licenses/mit-license.php MIT
 * @link      http://www.thedandelionproject.com
 */

use Dandelion\Tools\Helpers\FieldDefinition;

?>

<div title="<?php echo FieldDefinition::getDisplayName($FieldDefinition); ?>" class="input-prepend input-group">
    <span class="add-on input-group-addon">
        <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>
    </span>
    <input class="form-control daterangepicker" type="text" name="<?php echo $Field; ?>" placeholder="<?php echo FieldDefinition::getDisplayName($FieldDefinition); ?>"
           data-fieldname="<?php echo $Field; ?>" value="<?php echo $Value; ?>">
</div>