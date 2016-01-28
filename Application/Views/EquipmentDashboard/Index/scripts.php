<script src="<?php echo $View->PublicVendorContext('bootstrap-3/js/moment.min.js'); ?>"></script>
<script src="<?php echo $View->PublicVendorContext('bootstrap-3/js/daterangepicker.min.js'); ?>"></script>
<!--<script src="--><?php //echo $View->SharedScriptsContext('knockback-full-stack.min.js'); ?><!--"></script>-->
<!--<script src="--><?php //echo $View->PublicVendorContext('jstree/jstree.min.js'); ?><!--"></script>-->
<!--<script src="--><?php //echo $View->PublicVendorContext('dropzone/dropzone.min.js'); ?><!--"></script>-->
<script src="<?php echo $View->PublicVendorContext('select2/js/select2.full.min.js'); ?>"></script>
<!--<script src="--><?php //echo $View->SharedScriptsContext('fileManagerWidget.js'); ?><!--"></script>-->

<script src="<?php echo $View->ScriptsContext('EquipmentDashboard/EquipmentDashboardDynamicFilter.min.js'); ?>"></script>
<script src="<?php echo $View->ScriptsContext('EquipmentDashboard/main.min.js'); ?>"></script>

<script>
    /**
     * @author Alex
     * @namespace App.EquipmentDashboard
     * @param {window} global
     * @param {jQuery} $
     * @param {Object} App
     * @returns {undefined}
     * @inner JSLint Passed
     */
    (function (global, $, App) {
        "use strict";

        var dandelion       = global.dandelion,
            EquipmentDashboard       = dandelion.namespace('App.EquipmentDashboard', global);

        EquipmentDashboard.urls = {};
        EquipmentDashboard.urls.getDictionaries = "<?php echo $View->Href('Dashboard', '') ?>";
        EquipmentDashboard.urls.updateStatus = "<?php echo $View->Href('Dashboard', '') ?>";
        EquipmentDashboard.urls.getPage = "<?php echo $View->Href('EquipmentDashboard', 'GetPage') ?>";
        EquipmentDashboard.urls.getSavedFilter = "<?php echo $View->Href('EquipmentDashboard', 'GetSavedFilter') ?>";
        EquipmentDashboard.urls.deleteFilter = "<?php echo $View->Href('EquipmentDashboard', 'DeleteFilter') ?>";
        EquipmentDashboard.urls.saveFilter = "<?php echo $View->Href('EquipmentDashboard', 'SaveFilter') ?>";

        // TODO: Refactor this
        EquipmentDashboard.urls.projectAttachementsAPI = "<?php echo $View->Href('Dashboard', 'ProjectAttachementsAPI') ?>";
        EquipmentDashboard.urls.getCurrentProjectFiles = "<?php echo $View->Href('QuoteDashboard', 'GetCurrentProjectFiles') ?>";
        EquipmentDashboard.urls.updateStatus = "<?php echo $View->Href('QuoteDashboard', 'UpdateStatus') ?>";

//    EquipmentDashboard.init('<?php //echo $DefaultUserFilterId ?>//');

        EquipmentDashboard.init('');

    }(window, jQuery, App));
</script>

<script>
    <?php echo $Pager->GetJavascriptPager(); ?>
</script>
