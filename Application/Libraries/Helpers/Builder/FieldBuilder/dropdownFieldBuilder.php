<?php
/**
 * User: Victor
 * Date: 26/03/2016
 * Time: 20:45
 * @author    Victor Luis Aguado Leon <victorluisaguadoleon@gmail.com>
 * @copyright 2011-2014 Alex Alvarez G�rciga / Dandelion (http://www.thedandelionproject.com)
 * @license   http://www.opensource.org/licenses/mit-license.php MIT
 * @link      http://www.thedandelionproject.com
 */

use Dandelion\Tools\Helpers\FieldDefinition;

$statusValue = FieldDefinition::getValues($FieldDefinition);

?>

<div title="<?php echo FieldDefinition::getDisplayName($FieldDefinition); ?>" class="input-group select2-bootstrap-append">
    <select class="form-control select2-container" style="display: none;" name="<?php echo $Field; ?>" data-fieldname="<?php echo $Field; ?>">
        <?php foreach ($statusValue as $idValue => $displayValue): ?>
            <option
                value="<?php echo $idValue; ?>"
                <?php if ($Value === $idValue): ?>
                    selected="selected"
                <?php endif; ?>
            >
                <?php echo $displayValue; ?>
            </option>
        <?php endforeach; ?>
    </select>
</div>