<script src="<?php echo $View->PublicVendorContext('bootstrap-3/js/moment.min.js'); ?>"></script>
<script src="<?php echo $View->PublicVendorContext('bootstrap-3/js/daterangepicker.min.js'); ?>"></script>
<script src="<?php echo $View->SharedScriptsContext('knockback-full-stack.min.js'); ?>"></script>
<script src="<?php echo $View->PublicVendorContext('jstree/jstree.min.js'); ?>"></script>
<script src="<?php echo $View->PublicVendorContext('dropzone/dropzone.min.js'); ?>"></script>
<script src="<?php echo $View->PublicVendorContext('select2/js/select2.full.min.js'); ?>"></script>
<script src="<?php echo $View->ScriptsContext('dashboard/dashboard.min.js'); ?>"></script>

<script>
/**
 * @author Alex
 * @namespace App.Dashboard
 * @param {window} global
 * @param {jQuery} $
 * @param {Object} App
 * @returns {undefined}
 * @inner JSLint Passed
 */
(function (global, $, App) {
    "use strict";

    var dandelion       = global.dandelion,
        Dashboard       = dandelion.namespace('App.Dashboard', global);
    
    Dashboard.urls = {};
    Dashboard.urls.updateVesselFormNotes = "<?php echo $View->Href('Dashboard', 'UpdateVesselFormNotes') ?>";
    Dashboard.urls.updateSalesOrderNotes = "<?php echo $View->Href('Dashboard', 'UpdateSalesOrderNotes') ?>";
    Dashboard.urls.getSavedFilter = "<?php echo $View->Href('Dashboard', 'GetSavedFilter') ?>";
    Dashboard.urls.deleteFilter = "<?php echo $View->Href('Dashboard', 'DeleteFilter') ?>";
    Dashboard.urls.saveFilter = "<?php echo $View->Href('Dashboard', 'SaveFilter') ?>";
    Dashboard.urls.getSalesOrder = "<?php echo $View->Href('Dashboard', 'GetSalesOrder') ?>";
    Dashboard.urls.getVesselFormData = "<?php echo $View->Href('Dashboard', 'GetVesselFormData') ?>";
    Dashboard.urls.getDashboardDictionaries = "<?php echo $View->Href('Dashboard', 'GetDashboardDictionaries') ?>";
    Dashboard.urls.updateSOHEADMaterialStatus = "<?php echo $View->Href('Dashboard', 'UpdateSOHEADMaterialStatus') ?>";
    Dashboard.urls.updateSOHEADJobStatus = "<?php echo $View->Href('Dashboard', 'UpdateSOHEADJobStatus') ?>";
    Dashboard.urls.getDashboardItemsPage = "<?php echo $View->Href('Dashboard', 'GetDashboardItemsPage') ?>";
    Dashboard.urls.projectAttachementsAPI = "<?php echo $View->Href('Dashboard', 'ProjectAttachementsAPI') ?>";
    Dashboard.urls.getCurrentProjectFiles = "<?php echo $View->Href('Dashboard', 'GetCurrentProjectFiles') ?>";
    Dashboard.urls.downloadFile = "<?php echo $View->Href('Dashboard', 'DownloadFile') ?>";
    Dashboard.urls.deleteFile = "<?php echo $View->Href('Dashboard', 'DeleteFile') ?>";
    
//    Dashboard.TogleFilterVisibitilyCallback = function(){
//            var $button = Dashboard.TogleFilterVisibitilyButton,
//                $icon = $button.children('span'),
//                $filter = Dashboard.FilterForm;
//        
//            if ($icon.hasClass('glyphicon-eye-open')) {
//                $icon.removeClass('glyphicon-eye-open').addClass('glyphicon-eye-close');
//                $filter.hide("slow");
//            }
//            else {
//                $icon.removeClass('glyphicon-eye-close').addClass('glyphicon-eye-open');
//                $filter.show("slow");
//            }
//        };

    Dashboard.init('<?php echo $DefaultUserFilterId ?>');
}(window, jQuery, App));
</script>

<script>
<?php echo $Pager->GetJavascriptPager(); ?>
</script>
