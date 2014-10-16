<script src="<?php echo $View->PublicVendorContext('bootstrap-3/js/moment.min.js'); ?>"></script>
<script src="<?php echo $View->PublicVendorContext('bootstrap-3/js/daterangepicker.js'); ?>"></script>

<script type="text/javascript">
    $(document).ready(function() {
        $('.daterangepicker-single').daterangepicker({singleDatePicker: true, format: 'MM/DD/YYYY', startDate: moment(), endDate: moment()});
    });
</script>

<script>
    (function(window, document, $) {
        $('#dashboard-panel-togle-visibility-button').on('click', function() {
            var $button = $(this),
                    $icon = $button.children('span'),
                    $panelBody = $('.panel-body');
            if ($icon.hasClass('glyphicon-eye-open')) {
                $icon.removeClass('glyphicon-eye-open').addClass('glyphicon-eye-close');
                $panelBody.hide();
            }
            else {
                $icon.removeClass('glyphicon-eye-close').addClass('glyphicon-eye-open');
                $panelBody.show();
            }
        });
    })(window, document, jQuery);
</script>