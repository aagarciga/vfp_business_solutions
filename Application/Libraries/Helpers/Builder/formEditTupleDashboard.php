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
?>

<form action="<?php echo $UrlSubmit ?>" method="<?php echo $HttpMethodType ?>" >
    <?php foreach ($FieldsDefinition as $field => $fieldDefinition): ?>

    <?php endforeach; ?>
    <button type="submit" >
        Back
    </button>
</form>
