<script src="<?php echo $View->PublicVendorContext('bootstrap-3/js/moment.min.js'); ?>"></script>
<script src="<?php echo $View->PublicVendorContext('bootstrap-3/js/daterangepicker.min.js'); ?>"></script>
<script src="<?php echo $View->SharedScriptsContext('knockback-full-stack.min.js'); ?>"></script>

<script src="<?php echo $View->PublicVendorContext('amcharts/amcharts.js'); ?>"></script>
<script src="<?php echo $View->PublicVendorContext('amcharts/serial.js'); ?>"></script>

<script src="<?php echo $View->ScriptsContext('FinancialDashboard/financialdashboard.min.js'); ?>"></script>

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
        FinancialDashboard       = dandelion.namespace('App.FinancialDashboard', global);

    FinancialDashboard.urls = {};
//    FinancialDashboard.urls.updateVesselFormNotes = "<?php //echo $View->Href('Dashboard', 'UpdateVesselFormNotes') ?>//";


    var chartData1 = [
        {
            "key": "Account Receivable",
            "value": 300000.00
        },

        {
            "key": "Cash",
            "value": 50000.00
        },
        {
            "key": "WIP",
            "value": 125000.00
        },
        {
            "key": "Account Payable",
            "value": -120000.00
        }

    ],
        chartData = [{
            'NET': 355000.1,
            'Income': 100000,
            "Account Receivable": 300000.00,
            "Cash":  50000.00,
            "WIP": 125000.00,
            "Account Payable": -120000.00
        }];

    FinancialDashboard.init(chartData);
}(window, jQuery, App));
</script>
