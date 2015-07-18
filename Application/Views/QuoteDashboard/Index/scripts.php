<script src="<?php echo $View->PublicVendorContext('bootstrap-3/js/moment.min.js'); ?>"></script>
<script src="<?php echo $View->PublicVendorContext('bootstrap-3/js/daterangepicker.min.js'); ?>"></script>
<script src="<?php echo $View->SharedScriptsContext('knockback-full-stack.min.js'); ?>"></script>
<script src="<?php echo $View->PublicVendorContext('jstree/jstree.min.js'); ?>"></script>
<script src="<?php echo $View->PublicVendorContext('dropzone/dropzone.min.js'); ?>"></script>
<script src="<?php echo $View->PublicVendorContext('select2/js/select2.full.min.js'); ?>"></script>
<script src="<?php echo $View->ScriptsContext('QuoteDashboard/quotedashboard.js'); ?>"></script>

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
        QuoteDashboard       = dandelion.namespace('App.QuoteDashboard', global);
    
    QuoteDashboard.urls = {};
    QuoteDashboard.urls.getDictionaries = "<?php echo $View->Href('Dashboard', '') ?>";
    QuoteDashboard.urls.updateStatus = "<?php echo $View->Href('Dashboard', '') ?>";
    QuoteDashboard.urls.getPage = "<?php echo $View->Href('QuoteDashboard', 'GetPage') ?>";
    QuoteDashboard.urls.getDictionaries = "<?php echo $View->Href('QuoteDashboard', 'GetDictionaries') ?>";
    QuoteDashboard.urls.getSavedFilter = "<?php echo $View->Href('QuoteDashboard', 'GetSavedFilter') ?>";
    QuoteDashboard.urls.deleteFilter = "<?php echo $View->Href('QuoteDashboard', 'DeleteFilter') ?>";
    QuoteDashboard.urls.saveFilter = "<?php echo $View->Href('QuoteDashboard', 'SaveFilter') ?>";
    QuoteDashboard.urls.getQuoteDetails = "<?php echo $View->Href('QuoteDashboard', 'GetQuoteDetails') ?>";
    
    
    QuoteDashboard.init('<?php //echo $DefaultUserFilterId ?>');
}(window, jQuery, App));
</script>

<script>
<?php echo $Pager->GetJavascriptPager(); ?>
</script>
