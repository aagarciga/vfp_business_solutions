<script src="<?php echo $View->PublicVendorContext('bootstrap-3/js/moment.min.js'); ?>"></script>
<script src="<?php echo $View->PublicVendorContext('bootstrap-3/js/daterangepicker.min.js'); ?>"></script>
<!--<script src="--><?php //echo $View->PublicVendorContext('knockout/knockout.min.js'); ?><!--"></script>-->
<script src="<?php echo $View->SharedScriptsContext('knockback-full-stack.min.js'); ?>"></script>
<!--<script src="--><?php //echo $View->PublicVendorContext('jstree/jstree.min.js'); ?><!--"></script>-->
<!--<script src="--><?php //echo $View->PublicVendorContext('dropzone/dropzone.min.js'); ?><!--"></script>-->
<script src="<?php echo $View->PublicVendorContext('responsive-tables/responsive-tables.js'); ?>"></script>

<!--<script src="--><?php //echo $View->ScriptsContext('InventoryDashboard/InventoryDashboardDynamicFilter.min.js'); ?><!--"></script>-->
<!--<script src="--><?php //echo $View->ScriptsContext('InventoryDashboard/ProjectFiles.min.js'); ?><!--"></script>-->
<!--<script src="--><?php //echo $View->ScriptsContext('InventoryDashboard/main.min.js'); ?><!--"></script>-->
<!--<script src="--><?php //echo $View->PublicVendorContext('lightbox2-master/dist/js/lightbox.min.js')?><!--"></script>-->

<script src="<?php echo $View->ScriptsContext('EquipmentHistoryDashboard/main.min.js'); ?>"></script>
<script>
/**
 * @author Alex
 * @namespace App.EquipmentHistoryDashboard
 * @param {window} global
 * @param {jQuery} $
 * @param {Object} App
 * @returns {undefined}
 */
//(function (global, $, App) {
//    "use strict";
//
//    var dandelion                       = global.dandelion,
//        EquipmentHistoryDashboard       = dandelion.namespace('App.EquipmentHistoryDashboard', global);
////    EquipmentHistoryDashboard.setItemsPerPageSelector('.items-per-page-selector');
////    EquipmentHistoryDashboard.setStatusSelector('.status-selector');
//    EquipmentHistoryDashboard.addDictionary('status', <?php //echo json_encode($StatusDictionary)?>//);
//
//    EquipmentHistoryDashboard.addUrl('workOrderSelectorAjaxUrl', '<?php //echo $View->Href('EquipmentHistoryDashboard', 'WorkOrderSearch')?>//');
//    EquipmentHistoryDashboard.addUrl('projectManagerSelectorAjaxUrl', '<?php //echo $View->Href('EquipmentHistoryDashboard', 'ProjectManagerSearch')?>//');
//    EquipmentHistoryDashboard.addUrl('getEquipmentHistoryUrl', '<?php //echo $View->Href('EquipmentHistoryDashboard', 'GetEquipmentHistory')?>//');
//    EquipmentHistoryDashboard.addUrl('addEquipmentHistoryUrl', '<?php //echo $View->Href('EquipmentHistoryDashboard', 'AddEquipmentHistory')?>//');
//    EquipmentHistoryDashboard.addUrl('updateEquipmentHistoryUrl', '<?php //echo $View->Href('EquipmentHistoryDashboard', 'UpdateEquipmentHistory')?>//');
//    EquipmentHistoryDashboard.addUrl('deleteEquipmentHistoryUrl', '<?php //echo $View->Href('EquipmentHistoryDashboard', 'DeleteEquipmentHistory')?>//');
//    // WorkOrder equals SalesOrder
//    EquipmentHistoryDashboard.addUrl('getWorkOrderUrl', '<?php //echo $View->Href('EquipmentHistoryDashboard', 'GetWorkOrder')?>//');
//    EquipmentHistoryDashboard.addUrl('updateWorkOrderNotesUrl', '<?php //echo $View->Href('EquipmentHistoryDashboard', 'UpdateWorkOrderNotes')?>//');
//    EquipmentHistoryDashboard.addUrl('updateStatusUrl', '<?php //echo $View->Href('EquipmentHistoryDashboard', 'UpdateStatus')?>//');
//
//    EquipmentHistoryDashboard.init();
//
//}(window, jQuery, App));
</script>

<script>
<?php echo $Pager->GetJavascriptPager(); ?>
</script>
