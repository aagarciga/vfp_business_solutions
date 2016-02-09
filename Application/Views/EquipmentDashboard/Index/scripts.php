<script src="<?php echo $View->PublicVendorContext('bootstrap-3/js/moment.min.js'); ?>"></script>
<script src="<?php echo $View->PublicVendorContext('bootstrap-3/js/daterangepicker.min.js'); ?>"></script>
<!--<script src="--><?php //echo $View->SharedScriptsContext('knockback-full-stack.min.js'); ?><!--"></script>-->
<script src="<?php echo $View->PublicVendorContext('jstree/jstree.min.js'); ?>"></script>
<script src="<?php echo $View->PublicVendorContext('dropzone/dropzone.min.js'); ?>"></script>
<script src="<?php echo $View->PublicVendorContext('select2/js/select2.full.min.js'); ?>"></script>
<!--<script src="--><?php //echo $View->SharedScriptsContext('fileManagerWidget.js'); ?><!--"></script>-->

<script src="<?php echo $View->PublicVendorContext('lightbox2-master/dist/js/lightbox.min.js')?>"></script>
<script src="<?php echo $View->PublicVendorContext('lightbox2-master/dist/js/lightbox-plus-jquery.min.js')?>"></script>

<script src="<?php echo $View->ScriptsContext('EquipmentDashboard/EquipmentDashboardDynamicFilter.min.js'); ?>"></script>
<script src="<?php echo $View->ScriptsContext('EquipmentDashboard/ProjectFiles.min.js'); ?>"></script>
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
//        EquipmentDashboard.urls.projectAttachementsAPI = "<?php //echo $View->Href('Dashboard', 'ProjectAttachementsAPI') ?>//";
//        EquipmentDashboard.urls.getCurrentProjectFiles = "<?php //echo $View->Href('EquipmentDashboard', 'GetCurrentProjectFiles') ?>//";
//        EquipmentDashboard.urls.updateStatus = "<?php //echo $View->Href('EquipmentDashboard', 'UpdateStatus') ?>//";

        // TODO: Refactor this
        EquipmentDashboard.urls.projectAttachementsAPI = "<?php echo $View->Href('Dashboard', 'ProjectAttachementsAPI') ?>";
        EquipmentDashboard.urls.getCurrentProjectFiles = "<?php echo $View->Href('Dashboard', 'GetCurrentProjectFiles') ?>";


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

        EquipmentDashboard.init();

    }(window, jQuery, App));
</script>

<script>
    <?php echo $Pager->GetJavascriptPager(); ?>
</script>
