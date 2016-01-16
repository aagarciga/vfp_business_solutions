<script src="<?php echo $View->PublicVendorContext('bootstrap-3/js/moment.min.js'); ?>"></script>
<script src="<?php echo $View->PublicVendorContext('bootstrap-3/js/daterangepicker.min.js'); ?>"></script>
<!--<script src="--><?php //echo $View->SharedScriptsContext('knockback-full-stack.min.js'); ?><!--"></script>-->
<!--<script src="--><?php //echo $View->PublicVendorContext('jstree/jstree.min.js'); ?><!--"></script>-->
<!--<script src="--><?php //echo $View->PublicVendorContext('dropzone/dropzone.min.js'); ?><!--"></script>-->
<script src="<?php echo $View->PublicVendorContext('select2/js/select2.full.min.js'); ?>"></script>
<script src="<?php echo $View->PublicVendorContext('responsive-tables/responsive-tables.js'); ?>"></script>
<!--<script src="--><?php //echo $View->SharedScriptsContext('fileManagerWidget.js'); ?><!--"></script>-->

<script src="<?php echo $View->ScriptsContext('OnSalesOrderDashboard/OnSalesOrderDashboardDynamicFilter.js'); ?>"></script>
<script src="<?php echo $View->ScriptsContext('OnSalesOrderDashboard/main.js'); ?>"></script>

<script>
    /**
     * @author Alex
     * @namespace App.OnSalesOrderDashboard
     * @param {window} global
     * @param {jQuery} $
     * @param {Object} App
     * @returns {undefined}
     * @inner JSLint Passed
     */
    (function (global, $, App) {
        "use strict";

        var dandelion       = global.dandelion,
            OnSalesOrderDashboard       = dandelion.namespace('App.OnSalesOrderDashboard', global);

        OnSalesOrderDashboard.urls = {};
        OnSalesOrderDashboard.urls.getDictionaries = "<?php echo $View->Href('Dashboard', '') ?>";
        OnSalesOrderDashboard.urls.updateStatus = "<?php echo $View->Href('Dashboard', '') ?>";
        OnSalesOrderDashboard.urls.getPage = "<?php echo $View->Href('OnSalesOrderDashboard', 'GetPage') ?>";
        OnSalesOrderDashboard.urls.getSavedFilter = "<?php echo $View->Href('OnSalesOrderDashboard', 'GetSavedFilter') ?>";
        OnSalesOrderDashboard.urls.deleteFilter = "<?php echo $View->Href('OnSalesOrderDashboard', 'DeleteFilter') ?>";
        OnSalesOrderDashboard.urls.saveFilter = "<?php echo $View->Href('OnSalesOrderDashboard', 'SaveFilter') ?>";

        // TODO: Refactor this
        OnSalesOrderDashboard.urls.projectAttachementsAPI = "<?php echo $View->Href('Dashboard', 'ProjectAttachementsAPI') ?>";
        OnSalesOrderDashboard.urls.getCurrentProjectFiles = "<?php echo $View->Href('QuoteDashboard', 'GetCurrentProjectFiles') ?>";
        OnSalesOrderDashboard.urls.updateStatus = "<?php echo $View->Href('QuoteDashboard', 'UpdateStatus') ?>";

//    OnSalesOrderDashboard.init('<?php //echo $DefaultUserFilterId ?>//');
        OnSalesOrderDashboard.init('<?php echo  base64_encode($Itemno) ?>', '');

    }(window, jQuery, App));
</script>

<script>
    <?php echo $Pager->GetJavascriptPager(); ?>
</script>
