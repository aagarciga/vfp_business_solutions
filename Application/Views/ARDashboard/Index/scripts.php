<script src="<?php echo $View->PublicVendorContext('bootstrap-3/js/moment.min.js'); ?>"></script>
<script src="<?php echo $View->PublicVendorContext('bootstrap-3/js/daterangepicker.min.js'); ?>"></script>
<script src="<?php echo $View->SharedScriptsContext('knockback-full-stack.min.js'); ?>"></script>
<script src="<?php echo $View->PublicVendorContext('select2/js/select2.full.min.js'); ?>"></script>


<script src="<?php echo $View->PublicVendorContext('amcharts/amcharts.js'); ?>"></script>
<script src="<?php echo $View->PublicVendorContext('amcharts/serial.js'); ?>"></script>

<script src="<?php echo $View->PublicVendorContext('amcharts/plugins/export/export.min.js'); ?>"></script>
<script src="<?php echo $View->PublicVendorContext('amcharts/plugins/responsive/responsive.js'); ?>"></script>

<script src="<?php echo $View->ScriptsContext('ARDashboard/ardashboardDynamicFilter.min.js'); ?>"></script>
<script src="<?php echo $View->ScriptsContext('ARDashboard/ardashboard.min.js'); ?>"></script>


<script>
/**
 * @author Alex
 * @namespace App.ARDashboard
 * @param {window} global
 * @param {jQuery} $
 * @param {Object} App
 * @returns {undefined}
 * @inner JSLint Passed
 */
(function (global, $, App) {
    "use strict";

    var dandelion       = global.dandelion,
        ARDashboard = dandelion.namespace('App.ARDashboard', global);

    ARDashboard.urls = {};
    ARDashboard.urls.getARData = "<?php echo $View->Href('ARDashboard', 'GetARData') ?>";
    ARDashboard.urls.getPage = "<?php echo $View->Href('ARDashboard', 'GetPage') ?>";
    ARDashboard.urls.getSavedFilter = "<?php echo $View->Href('ARDashboard', 'GetSavedFilter') ?>";
    ARDashboard.urls.deleteFilter = "<?php echo $View->Href('ARDashboard', 'DeleteFilter') ?>";
    ARDashboard.urls.saveFilter = "<?php echo $View->Href('ARDashboard', 'SaveFilter') ?>";
    ARDashboard.urls.getCustnoDetailPage = "<?php echo $View->Href('ARDashboard', 'GetCustnoDetailPage') ?>";

    ARDashboard.init();

}(window, jQuery, App));
</script>

<script>
    <?php echo $Pager->GetJavascriptPager(); ?>
</script>
