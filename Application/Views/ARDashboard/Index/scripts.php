<script src="<?php echo $View->PublicVendorContext('bootstrap-3/js/moment.min.js'); ?>"></script>
<script src="<?php echo $View->PublicVendorContext('bootstrap-3/js/daterangepicker.min.js'); ?>"></script>
<script src="<?php echo $View->SharedScriptsContext('knockback-full-stack.min.js'); ?>"></script>



<script src="<?php echo $View->PublicVendorContext('amcharts/amcharts.js'); ?>"></script>
<script src="<?php echo $View->PublicVendorContext('amcharts/serial.js'); ?>"></script>

<script src="<?php echo $View->PublicVendorContext('amcharts/plugins/export/export.min.js'); ?>"></script>
<script src="<?php echo $View->PublicVendorContext('amcharts/plugins/responsive/responsive.js'); ?>"></script>


<script src="<?php echo $View->ScriptsContext('ARDashboard/ardashboard.min.js'); ?>"></script>

<script>
/**
 * @author Alex
 * @namespace App.ARDashboard
 * @param {window} global
 * @param {jQuery} $
 * @param {Object} App
 * @returns {undefined}
 * @inner JSLint Passed
 */
(function (global, $, App) {
    "use strict";

    var dandelion       = global.dandelion,
        ARDashboard = dandelion.namespace('App.ARDashboard', global);

    ARDashboard.urls = {};
    ARDashboard.urls.getARData = "<?php echo $View->Href('ARDashboard', 'GetARData') ?>";

    $.ajax({
        data: {},
        url: ARDashboard.urls.getARData,
        type: 'get',
        beforeSend: function () {
            $('.loading').show();
        },
        success: function (response) {
            var data = $.parseJSON(response);
            ARDashboard.init(data);
            $('.loading').hide();
        }
    });

}(window, jQuery, App));
</script>
