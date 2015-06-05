<script src="<?php echo $View->ScriptsContext('pickticket/pickticket.min.js'); ?>"></script>
<script src="<?php echo $View->ScriptsContext('qtyform.min.js'); ?>"></script>
<script>
/**
 * @author Alex
 * @namespace App.PickTicket
 * @param {window} global
 * @param {jQuery} $
 * @param {Object} App
 * @returns {undefined}
 * @inner JSLint Passed
 **/
(function (global, $, App) {
    "use strict";

    var dandelion       = global.dandelion,
        PickTicket      = dandelion.namespace('App.PickTicket', global);
        
    PickTicket.url = {};
    PickTicket.url.getTicketPage = "<?php echo $View->Href("PickTicket", "GetTicketPage") ?>";
    PickTicket.url.verifyTicket = "<?php echo $View->Href("PickTicket", "VerifyTicket") ?>";
    PickTicket.url.verifyLocation = "<?php echo $View->Href("PickTicket", "VerifyLocation") ?>";
    PickTicket.url.getItemsByTicket = "<?php echo $View->Href("PickTicket", "GetItemsByTicket") ?>";
    PickTicket.init(<?php echo $ShowFinishedTickets ?>);
    
}(window, jQuery, App));
</script>

<script>
<?php echo $JavascriptBootstrapPager; ?>
</script>