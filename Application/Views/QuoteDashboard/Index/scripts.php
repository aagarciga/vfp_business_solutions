<script src="<?php echo $View->PublicVendorContext('bootstrap-3/js/moment.min.js'); ?>"></script>
<script src="<?php echo $View->PublicVendorContext('bootstrap-3/js/daterangepicker.min.js'); ?>"></script>
<script src="<?php echo $View->SharedScriptsContext('knockback-full-stack.min.js'); ?>"></script>
<script src="<?php echo $View->PublicVendorContext('jstree/jstree.min.js'); ?>"></script>
<script src="<?php echo $View->PublicVendorContext('dropzone/dropzone.min.js'); ?>"></script>
<script src="<?php echo $View->PublicVendorContext('select2/js/select2.full.min.js'); ?>"></script>
<script src="<?php echo $View->ScriptsContext('QuoteDashboard/quotedashboard.min.js'); ?>"></script>

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
    
    
    QuoteDashboard.init('<?php //echo $DefaultUserFilterId ?>');
}(window, jQuery, App));
</script>

<script>
<?php echo $Pager->GetJavascriptPager(); ?>
</script>
