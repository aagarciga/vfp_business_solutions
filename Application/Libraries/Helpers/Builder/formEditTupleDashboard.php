<?php
/**
 * User: Victor
 * Date: 26/03/2016
 * Time: 12:54
 * @author    Victor Luis Aguado Leon <victorluisaguadoleon@gmail.com>
 * @copyright 2011-2014 Alex Alvarez G�rciga / Dandelion (http://www.thedandelionproject.com)
 * @license   http://www.opensource.org/licenses/mit-license.php MIT
 * @link      http://www.thedandelionproject.com
 */

use Dandelion\Tools\Helpers\Builder;
use Dandelion\Tools\Helpers\FieldDefinition;

?>

<form action="<?php echo $UrlSubmit ?>" method="<?php echo $HttpMethodType ?>" >
    <?php foreach ($FieldsDefinition as $field => $fieldDefinition): ?>
        <?php
        $value = FieldDefinition::getValueFromStdClass($Values, $field, $fieldDefinition);
        Builder::buildFieldInput($field, $fieldDefinition, $value);
        ?>
        <?php if (FieldDefinition::isEditableFieldIfNullValue($fieldDefinition, $value)): ?>
            <div title="<?php echo FieldDefinition::getDisplayName($fieldDefinition) ?>" class="form-group">
                <label class="control-label">
                    <?php echo FieldDefinition::getDisplayName($fieldDefinition) ?>:
                </label>
                <input type="hidden" value="<?php echo $value; ?>" name="old-<?php echo $field; ?>">
            </div>
        <?php endif; ?>
    <?php endforeach; ?>
    <button type="submit" class="btn btn-primary">
        <?php echo $ButtonName; ?>
    </button>
</form>
