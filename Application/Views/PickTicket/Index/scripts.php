<script src="<?php echo $View->ScriptsContext('pickticket/pickticket.min.js'); ?>"></script>

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
    PickTicket.init();
    
}(window, jQuery, App));
</script>

<script>
<?php echo $JavascriptBootstrapPager; ?>
</script>

<script>
//    $('#btnTicketNo').on('click', function(){
//        $('#tickets-modal').modal('show');
//    }); 
</script>

<script>
//    function page($page, $table){
//        var params = {"page" : $page};
//        $.ajax({
//            data: params,
//            url: '<?php echo $View->Href("PickTicket", "GetTicketPage") ?>',
//            type: 'post',
//            beforeSend: function(){
//                $('.loading').show();
//            },
//            success: function (response){
//                var _response = $.parseJSON(response); 
//               
//                
//                var pager = new Pager(_response);
//                
//                // TODO: render page control
//                var pagerControl = pager.getPagerControl(); 
//                $(".pager-wrapper").html("").append(pagerControl);
//                
//                // TODO Pendient big refactoring......
//                $('.pager-btn').on("click", function(){
//                    var $table = $('#tickets');
//                    var $currentButton = $(this);
//                    page($currentButton.data('page'), $table);
//                });
//                
//                var pagerItems = pager.getCurrentPagedItems();
//                updateTicketsTable($table, pagerItems);  
//                                
//                $('.loading').hide();
//            }            
//        });
//    }
</script>

<script>
//    $('.pager-btn').on("click", function(){
//        var $table = $('#tickets');
//        var $currentButton = $(this);
//        page($currentButton.data('page'), $table);
//    });
</script>



<script>
//    function updateTicketsTable($table, $data){
//        var $tableBody = $table.children('tbody');
//        $tableBody.html('');
//        for(index in $data){  
//            $tableBody.append(buildTicketsTableRow($data[index], "", "item-field"));
//        }
//    }
//    
//    function buildTicketsTableRow($dataRow, trClass, tdClass){
//        var result = document.createElement('tr'),
//            tdShprelno = document.createElement('td'),
//            tdQtyshprel = document.createElement('td'),
//            tdQtypick = document.createElement('td'),            
//            tdCompany = document.createElement('td');
//    
//            with (tdShprelno){
//                className = tdClass;
//                appendChild(document.createTextNode($dataRow.shprelno));
//            }
//            
//            with (tdQtyshprel){
//                className = tdClass;
//                appendChild(document.createTextNode($dataRow.qtyshprel));
//            }
//            
//            with (tdQtypick){
//                className = tdClass;
//                appendChild(document.createTextNode($dataRow.qtypick));
//            }           
//            
//            
//            with (tdCompany){
//                className = tdClass;
//                appendChild(document.createTextNode($dataRow.company));
//            }
//            
//            with (result) {
//                className = trClass;
//                appendChild(tdShprelno);
//                appendChild(tdQtyshprel);
//                appendChild(tdQtypick);                
//                appendChild(tdCompany);
//            }
//            return result;
//        };
</script>

