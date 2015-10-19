<script src="<?php echo $View->PublicVendorContext('bootstrap-3/js/moment.min.js'); ?>"></script>
<script src="<?php echo $View->PublicVendorContext('bootstrap-3/js/daterangepicker.min.js'); ?>"></script>
<script src="<?php echo $View->SharedScriptsContext('knockback-full-stack.min.js'); ?>"></script>
<script src="<?php echo $View->SharedScriptsContext('accounting.min.js'); ?>"></script>


<script src="<?php echo $View->PublicVendorContext('amcharts/amcharts.js'); ?>"></script>
<script src="<?php echo $View->PublicVendorContext('amcharts/serial.js'); ?>"></script>
<script src="<?php echo $View->PublicVendorContext('amcharts/pie.js'); ?>"></script>


<!--<script src="--><?php //echo $View->PublicVendorContext('amcharts/plugins/dataloader/dataloader.min.js'); ?><!--"></script>-->
<script src="<?php echo $View->PublicVendorContext('amcharts/plugins/export/export.min.js'); ?>"></script>
<script src="<?php echo $View->PublicVendorContext('amcharts/plugins/responsive/responsive.js'); ?>"></script>


<script src="<?php echo $View->ScriptsContext('FinancialDashboard/financialdashboard.min.js'); ?>"></script>

<script>
/**
 * @author Alex
 * @namespace App.FinancialDashboard
 * @param {window} global
 * @param {jQuery} $
 * @param {Object} App
 * @returns {undefined}
 * @inner JSLint Passed
 */
(function (global, $, App) {
    "use strict";

    var dandelion       = global.dandelion,
        FinancialDashboard = dandelion.namespace('App.FinancialDashboard', global);

    FinancialDashboard.urls = {};
    FinancialDashboard.urls.getFinancialData = "<?php echo $View->Href('FinancialDashboard', 'GetFinancialData') ?>";
    FinancialDashboard.urls.getARData = "<?php echo $View->Href('FinancialDashboard', 'GetARData') ?>";
    FinancialDashboard.urls.getAPData = "<?php echo $View->Href('FinancialDashboard', 'GetAPData') ?>";
    FinancialDashboard.urls.ARDashboard = "<?php echo $View->Href('ARDashboard', 'Index') ?>";
    FinancialDashboard.urls.APDashboard = "<?php echo $View->Href('APDashboard', 'Index') ?>";

    $.ajax({
        data: {},
        url: FinancialDashboard.urls.getFinancialData,
        type: 'get',
        beforeSend: function () {
            $('.loading').show();
        },
        success: function (response) {
            var data = $.parseJSON(response);
            FinancialDashboard.init(data);
            $('.loading').hide();
        }
    });

}(window, jQuery, App));
</script>
