<script src="<?php echo $View->PublicVendorContext('bootstrap-3/js/moment.min.js'); ?>"></script>
<script src="<?php echo $View->PublicVendorContext('bootstrap-3/js/daterangepicker.min.js'); ?>"></script>
<!--<script src="--><?php //echo $View->SharedScriptsContext('knockback-full-stack.min.js'); ?><!--"></script>-->
<script src="<?php echo $View->PublicVendorContext('jstree/jstree.min.js'); ?>"></script>
<script src="<?php echo $View->PublicVendorContext('dropzone/dropzone.min.js'); ?>"></script>
<script src="<?php echo $View->PublicVendorContext('select2/js/select2.full.min.js'); ?>"></script>
<!--<script src="--><?php //echo $View->SharedScriptsContext('fileManagerWidget.js'); ?><!--"></script>-->

<script src="<?php echo $View->PublicVendorContext('lightbox2-master/dist/js/lightbox.min.js')?>"></script>

<script>
    lightbox.option({
        'resizeDuration': 200,
        'wrapAround': true
    })
</script>

<script src="<?php echo $View->ScriptsContext('HistoryDashboard/HistoryDashboardDynamicFilter.js'); ?>"></script>
<script src="<?php echo $View->ScriptsContext('HistoryDashboard/ProjectFiles.min.js'); ?>"></script>
<script src="<?php echo $View->ScriptsContext('HistoryDashboard/main.min.js'); ?>"></script>

<script>
    /**
     * @author Alex
     * @namespace App.HistoryDashboard
     * @param {window} global
     * @param {jQuery} $
     * @param {Object} App
     * @returns {undefined}
     * @inner JSLint Passed
     */
    (function (global, $, App) {
        "use strict";

        var dandelion       = global.dandelion,
            HistoryDashboard       = dandelion.namespace('App.HistoryDashboard', global);

        HistoryDashboard.urls = {};
        HistoryDashboard.urls.getDictionaries = "<?php echo $View->Href('Dashboard', '') ?>";
        HistoryDashboard.urls.updateStatus = "<?php echo $View->Href('Dashboard', '') ?>";
        HistoryDashboard.urls.getPage = "<?php echo $View->Href('HistoryDashboard', 'GetPage') ?>";
        HistoryDashboard.urls.getSavedFilter = "<?php echo $View->Href('HistoryDashboard', 'GetSavedFilter') ?>";
        HistoryDashboard.urls.deleteFilter = "<?php echo $View->Href('HistoryDashboard', 'DeleteFilter') ?>";
        HistoryDashboard.urls.saveFilter = "<?php echo $View->Href('HistoryDashboard', 'SaveFilter') ?>";

        // TODO: Refactor this
//        HistoryDashboard.urls.projectAttachementsAPI = "<?php //echo $View->Href('Dashboard', 'ProjectAttachementsAPI') ?>//";
//        HistoryDashboard.urls.getCurrentProjectFiles = "<?php //echo $View->Href('HistoryDashboard', 'GetCurrentProjectFiles') ?>//";
//        HistoryDashboard.urls.updateStatus = "<?php //echo $View->Href('HistoryDashboard', 'UpdateStatus') ?>//";

        // TODO: Refactor this
        HistoryDashboard.urls.projectAttachementsAPI = "<?php echo $View->Href('Dashboard', 'ProjectAttachementsAPI') ?>";
        HistoryDashboard.urls.getCurrentProjectFiles = "<?php echo $View->Href('Dashboard', 'GetCurrentProjectFiles') ?>";


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

        HistoryDashboard.init('<?php echo $FilterId ?>', '<?php echo json_encode($FieldDefinitions) ?>');

    }(window, jQuery, App));
</script>

<script>
    <?php echo $Pager->GetJavascriptPager(); ?>
</script>
