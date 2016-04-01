<?php
/**
 * User: Victor
 * Date: 01/04/2016
 * Time: 16:37
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
        $isAddAbleField = null;
        if (isset($Values->$field)){
            $value = $Values->$field;
            $isAddAbleField = FieldDefinition::isAddAbleFieldIfNullValue($fieldDefinition, $value);
        }
        else{
            $isAddAbleField = FieldDefinition::isAddAbleField($fieldDefinition);
        }
        ?>
        <?php if ($isAddAbleField): ?>
            <div title="<?php echo FieldDefinition::getDisplayName($fieldDefinition) ?>" class="form-group">
                <label class="control-label">
                    <?php echo FieldDefinition::getDisplayName($fieldDefinition) ?>:
                </label>
                <?php
                $fieldType = FieldDefinition::getType($fieldDefinition);
                $value = FieldDefinition::getDefaultValueByType($fieldType);
                Builder::buildFieldInput($field, $fieldDefinition, $value);
                ?>
            </div>
        <?php endif; ?>
    <?php endforeach; ?>
    <button type="submit" >
        <?php echo $ButtonName; ?>
    </button>
</form>
