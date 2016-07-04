<script src="<?php echo $View->PublicVendorContext('bootstrap-3/js/moment.min.js'); ?>"></script>
<script src="<?php echo $View->PublicVendorContext('bootstrap-3/js/daterangepicker.min.js'); ?>"></script>
<script src="<?php echo $View->SharedScriptsContext('knockback-full-stack.min.js'); ?>"></script>
<script src="<?php echo $View->PublicVendorContext('jstree/jstree.min.js'); ?>"></script>
<script src="<?php echo $View->PublicVendorContext('dropzone/dropzone.min.js'); ?>"></script>
<script src="<?php echo $View->PublicVendorContext('responsive-tables/responsive-tables.js'); ?>"></script>

<script src="<?php echo $View->ScriptsContext('EquipmentHistoryDashboard/ProjectFiles.min.js'); ?>"></script>
<script src="<?php echo $View->PublicVendorContext('lightbox2-master/dist/js/lightbox.min.js')?>"></script>

<script src="<?php echo $View->ScriptsContext('EquipmentHistoryDashboard/main.min.js'); ?>"></script>

<script>
    lightbox.option({
        'resizeDuration': 200,
        'wrapAround': true
    })
</script>

<script>
/**
 * @author Alex
 * @namespace App.EquipmentHistoryDashboard
 * @param {window} global
 * @param {jQuery} $
 * @param {Object} App
 * @returns {undefined}
 */
(function (global, $, App) {
    "use strict";

    var dandelion                       = global.dandelion,
        EquipmentHistoryDashboard       = dandelion.namespace('App.EquipmentHistoryDashboard', global);
//    EquipmentHistoryDashboard.setItemsPerPageSelector('.items-per-page-selector');
//    EquipmentHistoryDashboard.setStatusSelector('.status-selector');

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


    EquipmentHistoryDashboard.setItemsPerPage(<?php echo $ItemsPerPage?>);
    EquipmentHistoryDashboard.addDictionary('status', <?php echo json_encode($StatusDictionary)?>);

    EquipmentHistoryDashboard.addUrl('workOrderSelectorAjaxUrl', '<?php echo $View->Href('EquipmentHistoryDashboard', 'WorkOrderSearch')?>');
    EquipmentHistoryDashboard.addUrl('projectManagerSelectorAjaxUrl', '<?php echo $View->Href('EquipmentHistoryDashboard', 'ProjectManagerSearch')?>');
    EquipmentHistoryDashboard.addUrl('getEquipmentHistoryUrl', '<?php echo $View->Href('EquipmentHistoryDashboard', 'GetEquipmentHistory')?>');
    EquipmentHistoryDashboard.addUrl('addEquipmentHistoryUrl', '<?php echo $View->Href('EquipmentHistoryDashboard', 'AddEquipmentHistory')?>');
    EquipmentHistoryDashboard.addUrl('updateEquipmentHistoryUrl', '<?php echo $View->Href('EquipmentHistoryDashboard', 'UpdateEquipmentHistory')?>');
    EquipmentHistoryDashboard.addUrl('updateEquipmentHistoriesUrl', '<?php echo $View->Href('EquipmentHistoryDashboard', 'UpdateEquipmentHistories')?>');
    EquipmentHistoryDashboard.addUrl('deleteEquipmentHistoryUrl', '<?php echo $View->Href('EquipmentHistoryDashboard', 'DeleteEquipmentHistory')?>');
    EquipmentHistoryDashboard.addUrl('deleteEquipmentHistoriesUrl', '<?php echo $View->Href('EquipmentHistoryDashboard', 'DeleteEquipmentHistories')?>');
    EquipmentHistoryDashboard.addUrl('getEquipmentNotesUrl', '<?php echo $View->Href('EquipmentHistoryDashboard', 'GetEquipmentNotes')?>');
    EquipmentHistoryDashboard.addUrl('updateEquipmentNotesUrl', '<?php echo $View->Href('EquipmentHistoryDashboard', 'UpdateEquipmentNotes')?>');
    // WorkOrder equals SalesOrder
    EquipmentHistoryDashboard.addUrl('getWorkOrderUrl', '<?php echo $View->Href('EquipmentHistoryDashboard', 'GetWorkOrder')?>');
    EquipmentHistoryDashboard.addUrl('updateWorkOrderNotesUrl', '<?php echo $View->Href('EquipmentHistoryDashboard', 'UpdateWorkOrderNotes')?>');
    EquipmentHistoryDashboard.addUrl('updateStatusUrl', '<?php echo $View->Href('EquipmentHistoryDashboard', 'UpdateStatus')?>');
    EquipmentHistoryDashboard.addUrl('getEquipmentPage', '<?php echo $View->Href('EquipmentHistoryDashboard', 'GetEquipmentPage')?>');
    EquipmentHistoryDashboard.addUrl('getSavedFilter', '<?php echo $View->Href('EquipmentHistoryDashboard', 'GetSavedFilter')?>');
    EquipmentHistoryDashboard.addUrl('deleteFilter', '<?php echo $View->Href('EquipmentHistoryDashboard', 'DeleteFilter')?>');
    EquipmentHistoryDashboard.addUrl('saveFilter', '<?php echo $View->Href('EquipmentHistoryDashboard', 'SaveFilter')?>');

    EquipmentHistoryDashboard.init('<?php echo $FilterId ?>' , <?php echo json_encode($EquipmentHistoryDashboardFieldsDefinition) ?>);

}(window, jQuery, App));
</script>

<script>
<?php echo $Pager->GetJavascriptPager(); ?>
</script>
