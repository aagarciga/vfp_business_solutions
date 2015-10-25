<script src="<?php echo $View->PublicVendorContext('bootstrap-3/js/moment.min.js'); ?>"></script>
<script src="<?php echo $View->PublicVendorContext('bootstrap-3/js/daterangepicker.min.js'); ?>"></script>
<script src="<?php echo $View->SharedScriptsContext('knockback-full-stack.min.js'); ?>"></script>
<script src="<?php echo $View->SharedScriptsContext('accounting.min.js'); ?>"></script>
<script src="<?php echo $View->PublicVendorContext('select2/js/select2.full.min.js'); ?>"></script>


<script src="<?php echo $View->PublicVendorContext('amcharts/amcharts.js'); ?>"></script>
<script src="<?php echo $View->PublicVendorContext('amcharts/serial.js'); ?>"></script>

<script src="<?php echo $View->PublicVendorContext('amcharts/plugins/export/export.min.js'); ?>"></script>
<script src="<?php echo $View->PublicVendorContext('amcharts/plugins/responsive/responsive.js'); ?>"></script>

<script src="<?php echo $View->ScriptsContext('APDashboard/apdashboardDynamicFilter.min.js'); ?>"></script>
<script src="<?php echo $View->ScriptsContext('APDashboard/apdashboard.min.js'); ?>"></script>


<script>
    /**
     * @author Alex
     * @namespace App.APDashboard
     * @param {window} global
     * @param {jQuery} $
     * @param {Object} App
     * @returns {undefined}
     * @inner JSLint Passed
     */
    (function (global, $, App) {
        "use strict";

        var dandelion = global.dandelion,
            APDashboard = dandelion.namespace('App.APDashboard', global);

        APDashboard.urls = {};
        APDashboard.urls.getAPData = "<?php echo $View->Href('APDashboard', 'GetAPData') ?>";
        APDashboard.urls.getPage = "<?php echo $View->Href('APDashboard', 'GetPage') ?>";
        APDashboard.urls.getSavedFilter = "<?php echo $View->Href('APDashboard', 'GetSavedFilter') ?>";
        APDashboard.urls.deleteFilter = "<?php echo $View->Href('APDashboard', 'DeleteFilter') ?>";
        APDashboard.urls.saveFilter = "<?php echo $View->Href('APDashboard', 'SaveFilter') ?>";
        APDashboard.urls.getVendnoDetailPage = "<?php echo $View->Href('APDashboard', 'GetVendnoDetailPage') ?>";

        APDashboard.init();

    }(window, jQuery, App));
</script>

<script>
    <?php echo $Pager->GetJavascriptPager(); ?>
</script>
