<script src="<?php echo $View->PublicVendorContext('bootstrap-3/js/moment.min.js'); ?>"></script>
<script src="<?php echo $View->PublicVendorContext('bootstrap-3/js/daterangepicker.min.js'); ?>"></script>
<!--<script src="--><?php //echo $View->SharedScriptsContext('knockback-full-stack.min.js'); ?><!--"></script>-->
<!--<script src="--><?php //echo $View->PublicVendorContext('jstree/jstree.min.js'); ?><!--"></script>-->
<!--<script src="--><?php //echo $View->PublicVendorContext('dropzone/dropzone.min.js'); ?><!--"></script>-->
<script src="<?php echo $View->PublicVendorContext('select2/js/select2.full.min.js'); ?>"></script>
<!--<script src="--><?php //echo $View->SharedScriptsContext('fileManagerWidget.js'); ?><!--"></script>-->

<script src="<?php echo $View->ScriptsContext('OnPurchaseOrderDashboard/OnPurchaseOrderDashboardDynamicFilter.js'); ?>"></script>
<script src="<?php echo $View->ScriptsContext('OnPurchaseOrderDashboard/main.js'); ?>"></script>

<script>
    /**
     * @author Alex
     * @namespace App.OnPurchaseOrderDashboard
     * @param {window} global
     * @param {jQuery} $
     * @param {Object} App
     * @returns {undefined}
     * @inner JSLint Passed
     */
    (function (global, $, App) {
        "use strict";

        var dandelion       = global.dandelion,
            OnPurchaseOrderDashboard       = dandelion.namespace('App.OnPurchaseOrderDashboard', global);

        OnPurchaseOrderDashboard.urls = {};
        OnPurchaseOrderDashboard.urls.getDictionaries = "<?php echo $View->Href('Dashboard', '') ?>";
        OnPurchaseOrderDashboard.urls.updateStatus = "<?php echo $View->Href('Dashboard', '') ?>";
        OnPurchaseOrderDashboard.urls.getPage = "<?php echo $View->Href('OnPurchaseOrderDashboard', 'GetPage') ?>";
        OnPurchaseOrderDashboard.urls.getSavedFilter = "<?php echo $View->Href('OnPurchaseOrderDashboard', 'GetSavedFilter') ?>";
        OnPurchaseOrderDashboard.urls.deleteFilter = "<?php echo $View->Href('OnPurchaseOrderDashboard', 'DeleteFilter') ?>";
        OnPurchaseOrderDashboard.urls.saveFilter = "<?php echo $View->Href('OnPurchaseOrderDashboard', 'SaveFilter') ?>";

        // TODO: Refactor this
        OnPurchaseOrderDashboard.urls.projectAttachementsAPI = "<?php echo $View->Href('Dashboard', 'ProjectAttachementsAPI') ?>";
        OnPurchaseOrderDashboard.urls.getCurrentProjectFiles = "<?php echo $View->Href('QuoteDashboard', 'GetCurrentProjectFiles') ?>";
        OnPurchaseOrderDashboard.urls.updateStatus = "<?php echo $View->Href('QuoteDashboard', 'UpdateStatus') ?>";

//    OnPurchaseOrderDashboard.init('<?php //echo $DefaultUserFilterId ?>//');

        OnPurchaseOrderDashboard.init('<?php echo  base64_encode($Itemno) ?>', '<?php echo  base64_encode($Itemwhs) ?>', '');

    }(window, jQuery, App));
</script>

<script>
    <?php echo $Pager->GetJavascriptPager(); ?>
</script>
