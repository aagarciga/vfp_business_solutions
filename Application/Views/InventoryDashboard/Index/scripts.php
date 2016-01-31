<script src="<?php echo $View->PublicVendorContext('bootstrap-3/js/moment.min.js'); ?>"></script>
<script src="<?php echo $View->PublicVendorContext('bootstrap-3/js/daterangepicker.min.js'); ?>"></script>
<!--<script src="--><?php //echo $View->SharedScriptsContext('knockback-full-stack.min.js'); ?><!--"></script>-->
<script src="<?php echo $View->PublicVendorContext('jstree/jstree.min.js'); ?>"></script>
<script src="<?php echo $View->PublicVendorContext('dropzone/dropzone.min.js'); ?>"></script>
<script src="<?php echo $View->PublicVendorContext('select2/js/select2.full.min.js'); ?>"></script>
<script src="<?php echo $View->PublicVendorContext('responsive-tables/responsive-tables.js'); ?>"></script>
<!--<script src="--><?php //echo $View->SharedScriptsContext('fileManagerWidget.js'); ?><!--"></script>-->

<script src="<?php echo $View->ScriptsContext('InventoryDashboard/InventoryDashboardDynamicFilter.min.js'); ?>"></script>
<script src="<?php echo $View->ScriptsContext('InventoryDashboard/ProjectFiles.min.js'); ?>"></script>
<script src="<?php echo $View->ScriptsContext('InventoryDashboard/main.min.js'); ?>"></script>

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
        InventoryDashboard       = dandelion.namespace('App.InventoryDashboard', global);
    
    InventoryDashboard.urls = {};
    InventoryDashboard.urls.getDictionaries = "<?php echo $View->Href('Dashboard', '') ?>";
    InventoryDashboard.urls.updateStatus = "<?php echo $View->Href('Dashboard', '') ?>";
    InventoryDashboard.urls.getPage = "<?php echo $View->Href('InventoryDashboard', 'GetPage') ?>";
    InventoryDashboard.urls.getSavedFilter = "<?php echo $View->Href('InventoryDashboard', 'GetSavedFilter') ?>";
    InventoryDashboard.urls.deleteFilter = "<?php echo $View->Href('InventoryDashboard', 'DeleteFilter') ?>";
    InventoryDashboard.urls.saveFilter = "<?php echo $View->Href('InventoryDashboard', 'SaveFilter') ?>";

    // TODO: Refactor this
    InventoryDashboard.urls.projectAttachementsAPI = "<?php echo $View->Href('Dashboard', 'ProjectAttachementsAPI') ?>";
    InventoryDashboard.urls.getCurrentProjectFiles = "<?php echo $View->Href('QuoteDashboard', 'GetCurrentProjectFiles') ?>";
    InventoryDashboard.urls.updateStatus = "<?php echo $View->Href('QuoteDashboard', 'UpdateStatus') ?>";

    // TODO: Convert FileManager in a Controll and put this on it
    App.urls = {};
    App.urls.treeViewManager = {};
    App.urls.treeViewManager.getNode = "<?php echo $View->Href('TreeViewManager', 'GetNode') ?>";
    App.urls.treeViewManager.getContent = "<?php echo $View->Href('TreeViewManager', 'GetContent') ?>";
    App.urls.treeViewManager.deleteNode = "<?php echo $View->Href('TreeViewManager', 'Delete') ?>";
    App.urls.treeViewManager.createNode = "<?php echo $View->Href('TreeViewManager', 'Create') ?>";
    App.urls.treeViewManager.renameNode = "<?php echo $View->Href('TreeViewManager', 'Rename') ?>";
    App.urls.treeViewManager.moveNode = "<?php echo $View->Href('TreeViewManager', 'Move') ?>";
    App.urls.treeViewManager.copyNode = "<?php echo $View->Href('TreeViewManager', 'Copy') ?>";
    App.urls.fileManager = {};
    App.urls.fileManager.list = "<?php echo $View->Href('FileManager', 'List') ?>";
    App.urls.fileManager.deleteFile = "<?php echo $View->Href('FileManager', 'Delete') ?>";
    App.urls.fileManager.uploadFile = "<?php echo $View->Href('FileManager', 'Upload') ?>";
    App.urls.fileManager.downloadFile = "<?php echo $View->Href('FileManager', 'Download') ?>";

//    InventoryDashboard.init('<?php //echo $DefaultUserFilterId ?>//');
    InventoryDashboard.init();

}(window, jQuery, App));
</script>

<script>
<?php echo $Pager->GetJavascriptPager(); ?>
</script>
