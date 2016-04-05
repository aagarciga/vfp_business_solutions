<?php
/**
 * User: Victor
 * Date: 12/01/2016
 * Time: 15:01
 * @author    Victor Luis Aguado Leon <victorluisaguadoleon@gmail.com>
 * @copyright 2011-2014 Alex Alvarez G�rciga / Dandelion (http://www.thedandelionproject.com)
 * @license   http://www.opensource.org/licenses/mit-license.php MIT
 * @link      http://www.thedandelionproject.com
 */
?>

<script src="<?php echo $View->PublicVendorContext('bootstrap-3/js/moment.min.js'); ?>"></script>
<script src="<?php echo $View->PublicVendorContext('bootstrap-3/js/daterangepicker.min.js'); ?>"></script>
<!--<script src="--><?php //echo $View->SharedScriptsContext('knockback-full-stack.min.js'); ?><!--"></script>-->
<script src="<?php echo $View->PublicVendorContext('jstree/jstree.min.js'); ?>"></script>
<script src="<?php echo $View->PublicVendorContext('dropzone/dropzone.min.js'); ?>"></script>
<script src="<?php echo $View->PublicVendorContext('select2/js/select2.full.min.js'); ?>"></script>
<!--<script src="--><?php //echo $View->SharedScriptsContext('fileManagerWidget.js'); ?><!--"></script>-->

<script src="<?php echo $View->ScriptsContext('EditTupleDashboard/main.min.js'); ?>"></script>

<script>
    /**
     * @author Victor
     * @namespace App.EditTupleDashboard
     * @param {window} global
     * @param {jQuery} $
     * @param {Object} App
     * @returns {undefined}
     * @inner JSLint Passed
     */
    (function (global, $, App) {
        "use strict";

        var dandelion       = global.dandelion,
            EditTupleDashboard       = dandelion.namespace('App.EditTupleDashboard', global);

        EditTupleDashboard.urls = {};

        // TODO: Convert FileManager in a Controll and put this on it
        App.urls = {};

        EditTupleDashboard.init();

    }(window, jQuery, App));
</script>
<script>
    $(".select2-ajax").select2({
        ajax: {
            url: "<?php echo $View->Href('EditTupleDashboard', 'GetWorkOrders')?>",
            dataType: 'json',
            delay: 250,
            data: function (params) {
                return {
                    q: params.term, // search term
                    page: params.page
                };
            },
            processResults: function (data, page) {
                // parse the results into the format expected by Select2.
                // since we are using custom formatting functions we do not need to
                // alter the remote JSON data
                return {
                    results: data.items
                };
            },
            cache: true
        },
        escapeMarkup: function (markup) { return markup; }, // let our custom formatter work
        minimumInputLength: 1,
        templateResult: formatRepo, // omitted for brevity, see the source of this page
        templateSelection: formatRepoSelection // omitted for brevity, see the source of this page
    });
</script>
