<?php
/**
 * User: Victor
 * Date: 12/01/2016
 * Time: 15:01
 */
?>

<script src="<?php echo $View->PublicVendorContext('bootstrap-3/js/moment.min.js'); ?>"></script>
<script src="<?php echo $View->PublicVendorContext('bootstrap-3/js/daterangepicker.min.js'); ?>"></script>
<!--<script src="--><?php //echo $View->SharedScriptsContext('knockback-full-stack.min.js'); ?><!--"></script>-->
<script src="<?php echo $View->PublicVendorContext('jstree/jstree.min.js'); ?>"></script>
<script src="<?php echo $View->PublicVendorContext('dropzone/dropzone.min.js'); ?>"></script>
<script src="<?php echo $View->PublicVendorContext('select2/js/select2.full.min.js'); ?>"></script>
<!--<script src="--><?php //echo $View->SharedScriptsContext('fileManagerWidget.js'); ?><!--"></script>-->

<script src="<?php echo $View->ScriptsContext('EditTupleDashboard/main.min.js'); ?>"></script>

<script>
    /**
     * @author Victor
     * @namespace App.EditTupleDashboard
     * @param {window} global
     * @param {jQuery} $
     * @param {Object} App
     * @returns {undefined}
     * @inner JSLint Passed
     */
    (function (global, $, App) {
        "use strict";

        var dandelion       = global.dandelion,
            EditTupleDashboard       = dandelion.namespace('App.EditTupleDashboard', global);

        EditTupleDashboard.urls = {};

        // TODO: Convert FileManager in a Controll and put this on it
        App.urls = {};

        EditTupleDashboard.init('<?php echo json_encode($FieldDefinitions) ?>');

    }(window, jQuery, App));
</script>
