<script src="<?php echo $View->PublicVendorContext('bootstrap-3/js/moment.min.js'); ?>"></script>
<script src="<?php echo $View->PublicVendorContext('bootstrap-3/js/daterangepicker.min.js'); ?>"></script>
<script src="<?php echo $View->SharedScriptsContext('knockback-full-stack.min.js'); ?>"></script>



<script src="<?php echo $View->PublicVendorContext('amcharts/amcharts.js'); ?>"></script>
<script src="<?php echo $View->PublicVendorContext('amcharts/serial.js'); ?>"></script>

<script src="<?php echo $View->PublicVendorContext('amcharts/plugins/export/export.min.js'); ?>"></script>
<script src="<?php echo $View->PublicVendorContext('amcharts/plugins/responsive/responsive.js'); ?>"></script>


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
    FinancialDashboard.urls.getFinancialData = "<?php echo $View->Href('FinancialDashboard', 'GetFinancialData') ?>";

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

//    $.get(FinancialDashboard.urls.getFinancialData)
//        .done(function (response){
//           console.log(response);
//            $('.loading').show();
//            var data = $.parseJSON(response);
//            FinancialDashboard.init(data);
//        })
//        .fail(function () {
//            data.instance.refresh();
//            $('.loading').hide();
//        });

//    var data = [{
//        net: 1000000,
//        ar: 1000000,
//        cash: 1000000,
//        inventory: 1000000,
//        wip: 1000000,
//        ap:-1000000
//    }];
//    FinancialDashboard.init(data);

}(window, jQuery, App));
</script>
