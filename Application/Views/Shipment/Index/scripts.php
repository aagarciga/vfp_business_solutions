<script src="<?php echo $View->ScriptsContext('Shipment/main.min.js'); ?>"></script>

<script>
    (function (global, $, App) {
        "use strict";

        var dandelion                       = global.dandelion,
            Shipment       = dandelion.namespace('App.Shipment', global);


//        Shipment.addDictionary('status', <?php //echo json_encode($StatusDictionary)?>//);

//        Shipment.addUrl('workOrderSelectorAjaxUrl', '<?php //echo $View->Href('EquipmentHistoryDashboard', 'WorkOrderSearch')?>//');

        Shipment.init();

    }(window, jQuery, App));
</script>

<script>
    /// TODO: The code below can be used like verification template. 
    /// The input control associated to the verification data is in one place.
    function verifyPono($pono, $nextControl, $table){
        var params = {"pono" : $pono.val()};
        $.ajax({
            data: params,
            url: '<?php echo $View->Href("Shipment", "VerifyPono") ?>',
            type: 'post',
            beforeSend: function(){
                $('.loading').show();
            },
            success: function (response){
                var _response = $.parseJSON(response); 
                if (_response.verified === true) {                    
                    if (_response.postatus === "A" || _response.postatus === "C" || _response.postatus === "H") {
                        $pono.parent().removeClass('has-success').addClass('has-error');                        
                        ShowFeedback("PO not available, Status for this PO is : " + _response.postatus);
                        $table.children('tbody').children().remove();
                    }
                    else{
                        $pono.parent().removeClass('has-error').addClass('has-success');
                        relatedPonoItemsDataBind($table ,$pono);
                        doFiltering($('#chFilter')[0].checked);
                        ShowFeedback("PO found. Now you can enter the Barcode.");
                        $nextControl.focus();
                    }
                }
                else{
                    $pono.parent().removeClass('has-success').addClass('has-error');
                    ShowFeedback("PO Not Found.");
                }
                                
                $('.loading').hide();
            }            
        });
    }
    
    $('#txPono').keypress(function(event){
        // Verify on Return key pressed
        if ( event.which === 13 ) {
            event.preventDefault();
            verifyPono($(this), $('#txBarcode'), $('#related-pono-items'));
        }
    });
</script>

<script>
    function showQtyFormWithSugerence(qtyleft, itemno){
        console.log("inside showQtyFormWithSugerence qtyleft:", qtyleft);
        console.log("inside showQtyFormWithSugerence itemno:", itemno);
        if (qtyleft < 0) {
            qtyleft = 0;
        }
        ShowFeedback("For " + itemno + ", quantity must be less or equal to: " + qtyleft);
        $('#quantityForm').show();                    
        $('#unknow-Key').attr('title', 'Possible greatest value').children('span').text(qtyleft).css('visibility', 'visible');
    }
</script>

<script>
    function verifyBarcode($pono, $barcode){
        var params = {
            'pono' : $pono.val(),
            'barcode' : $barcode.val()
        };
        $.ajax({
            data: params,
            url: '<?php echo $View->Href("Shipment", "VerifyBarcode") ?>',
            type: 'post',
            beforeSend: function(){
                $('.loading').show();
            },
            success: function (response){
                var _response = $.parseJSON(response); 
                if (_response.verified === true) { 
                    $barcode.parent().removeClass('has-error').addClass('has-success');                    
                    $barcode.blur();                    
//                    showQtyFormWithSugerence(_response.qtyleft);
                    getSelectedTr($barcode.val());
                    showQtyFormWithSugerence(parseInt($.$SelectedTr.children('.td-qty-left').html()), $barcode.val().toUpperCase());
                }
                else{
                    $barcode.parent().removeClass('has-success').addClass('has-error');
                    ShowFeedback("Item not found for PO : " + $pono.val());
                }
                                
                $('.loading').hide();
            }            
        });
    }
    
    $('#txBarcode').keypress(function(event){
        // Verify on Return key pressed
        if ( event.which === 13 ) {
            event.preventDefault();
            verifyBarcode($('#txPono'),$(this));
        }
    });
</script>

<script>
    ///Quantity Form related logic
    
    $('.numpad-key').on('click',function (){
        var $key = $(this);
        var value = $key.html();
        
        var $field = $('#quantityField');
        var fieldValue = $field.html();
        
        if(fieldValue === '0'){
            if (value === '0') {

            }
            else {
                $field.html(value);
            }
        }
        else {
            $field.html(fieldValue + value);
        }
    });
    
    $('#unknow-Key').on('click',function (){
        var $key = $(this).children('span');
        var value = $key.html();
        
        var $field = $('#quantityField');
        var fieldValue = $field.html();
        
        if(fieldValue === '0'){
            if (value === '0') {

            }
            else {
                $field.html(value);
            }
        }
        else {
            $field.html(fieldValue + value);
        }
    });
    
    $('#delete-Key').on('click',function (){
        var $field = $('#quantityField');
        $field.html($field.html().slice(0, -1));
        if (!($field.html() > 0)) {
            $field.html('0');
        }
    });
    
    $('#zero-qty-Key').on('click',function (){
        $('#quantityForm').hide();
        
        $('#txToQuantity').val(0);        
        
        $('#clear-Key').click();
    });
    
    $('#minus-Key').on('click',function (){
        var $field = $('#quantityField');
        var value = parseInt($field.html());

        if (value > 1) {
            $field.html(value - 1);
        }
        else {
            $field.html('0');
        }
    });

    $('#plus-Key').on('click', function() {
        var $field = $('#quantityField');
        var value = parseInt($field.html());
        if (isNaN(value)) {
            value = 0;
        }
        if (value >= 0) {
            $field.html(value + 1);
        }
    });

    $('#clear-Key').on('click', function() {
        var $field = $('#quantityField');
        $field.html('0');
    });
    
    $('#enter-Key').on('click',function (){
        var quantity = parseInt($('#quantityField').html());
        var maxQty = parseInt($('#unknow-Key-value').html());
                
        if (quantity > maxQty) {
            ShowFeedback("Quantity exceeds the maximun permited");
            $('#overwrite-modal').modal('show');          
        }else{
            updateQuantity(quantity);
        }
    });
    
    $('#overwrite-yes').on('click', function(){
        updateQuantity(parseInt($('#quantityField').html()));
        $('#overwrite-modal').modal('hide');
    });
    
    function updateQuantity(quantity){
        $('#quantityForm').hide();      
            if (isNaN(quantity)) {
                quantity = 0;
            }
            if($.$SelectedTr === undefined){
                var barcode = $('#txBarcode').val();
//                $('#related-pono-items > tbody > tr > td > a').each(function(){
//                    var lowercaseBarcode, currentLinkText, lowercaseCurrentLinkText;
//                    currentLinkText = $(this).children('a').html();
//                    currentLinkText = $(this).html();
//                    console.log("currentLinkText",currentLinkText);
//                    lowercaseBarcode = barcode.toLowerCase();
//                    lowercaseCurrentLinkText = currentLinkText.toLowerCase();
//                    console.log(barcode, lowercaseBarcode, lowercaseCurrentLinkText);
//                    if(lowercaseCurrentLinkText === lowercaseBarcode){
//                        $.$SelectedTr = $(this).parents('tr');
//                    }
//                });
                getSelectedTr(barcode);
            }    
            
            var $recv = $.$SelectedTr.children('.td-qty-recv'),
                recvValue = parseInt($recv.html());             
                $recv.html(recvValue + quantity);

            var $left = $.$SelectedTr.children('.td-qty-left'),
                leftValue = parseInt($left.html());
                leftValue -= quantity;                
            if (leftValue < 0) {
                leftValue = 0;
            }    
            $left.html(leftValue);
            if (leftValue === 0) {
                $.$SelectedTr.addClass('zero-qty-left');
            }
            
            doFiltering($('#chFilter')[0].checked);
            $('#clear-Key').click();
            ShowFeedback("Shipment");
            
            $('#txBarcode').val('').removeClass('has-success').focus();
    }  
</script>

<script>
    function getSelectedTr(barcode){
        console.log("using getSelectedTr with barcode: ", barcode);
        $('#related-pono-items > tbody > tr > td > a').each(function(){
            var lowercaseBarcode, currentLinkText, lowercaseCurrentLinkText;
            currentLinkText = $(this).children('a').html();
            currentLinkText = $(this).html();
            lowercaseBarcode = barcode.toLowerCase();
            lowercaseCurrentLinkText = currentLinkText.toLowerCase();
            if(lowercaseCurrentLinkText === lowercaseBarcode){
                $.$SelectedTr = $(this).parents('tr');
            }
        });
    }
</script>

<script>
    function relatedPonoItemsDataBind($table, $pono){
        var params = {
            'pono' : $pono.val()
        };
        $.ajax({
            data: params,
            url: '<?php echo $View->Href("Shipment", "GetRelatedPonoItems") ?>',
            type: 'post',
            beforeSend: function(){
                $('.loading').show();
            },
            success: function (response){
                var _response = $.parseJSON(response); 
                $table.children('tbody').children().remove();
                
                for(index in  _response){
                    with (_response[index]){
                        var $tr = $('<tr><td class="td-itemno"><a href="#">'+itemno+'</a></td><td class="td-qty-left">'+qtyleft+'</td><td class="td-qty-recv">'+qtyrec0+'</td><td class="td-binloc">'+locno+"</td></tr>");
                        $table.children('tbody').append($tr);
                        $tr.children('.td-itemno').children('a').on('click', function(){
                            console.log("Giselle esta aqui");
                            $.$SelectedTr = $(this).parent().parent();
                            console.log("$.$SelectedTr", $.$SelectedTr);

                            showQtyFormWithSugerence(parseInt($.$SelectedTr.children('.td-qty-left').html()), itemno);
                        }).attr('title', 'Edit');
//                        $tr.on('click', function(){
//                            var $itemno = $(this).children('.td-itemno'),
//                                $qtyleft = $(this).children('.td-qty-left'),
//                                $qtyrec0 = $(this).children('.td-qty-recv'),
//                                $locno = $(this).children('.td-binloc');
//                                $.$SelectedTr = $(this);  
//                                showQtyFormWithSugerence(parseInt($qtyleft.html()));
//                        });
                    }
                }
                
                 
                
                $('.loading').hide();
            }            
        });
    }
</script>

<script>
    // TODO: Remember in the updating process include the qtyleft value in POITOP table.
</script>

<script>
    $('#chFilter').on('click', function(){
        doFiltering($(this)[0].checked);
    });
    
    function doFiltering(checked){
        $('#related-pono-items > tbody > tr').each(function(){
            var $currentTr = $(this),
            $qtyleft = $currentTr.children('.td-qty-left');
            
            if(!checked){
                if ($qtyleft.html() === "0") {
                    $currentTr.hide();
                }
            }        
            else{
                $currentTr.show();
            }
        });
    }
</script>

<script>
    $('#btnOk').on('click', function(){
        var updateObjects = new Array();
        
        var $trCollection = $('#related-pono-items').children('tbody').children('tr');
        $trCollection.each(function(index){
            var $current = $(this),
                $itemno = $current.children('.td-itemno').children('a'),
                $qtyleft = $current.children('.td-qty-left'),
                $qtyrec0 = $current.children('.td-qty-recv'),
                $locno = $current.children('.td-binloc');
            updateObjects[index] = $itemno.html() + ',' + $qtyleft.html() + ',' + $qtyrec0.html() + ',' + $locno.html();
                
        });
        
        var _array = JSON.stringify(updateObjects);
        
        var params = {
            'pono' : $('#txPono').val(),
            'updateObjects' : _array         
            };
            $.ajax({
                data: params,
                url: '<?php echo $View->Href("Shipment", "ShipmentUpdate") ?>',
                type: 'post',
                beforeSend: function(){
                    $('.loading').show();
                },
                success: function (response){
                    var _response = $.parseJSON(response);
                    if (_response.success) {
                        ShowFeedback("Shipment");
                        $('#txPono').val('').removeClass('has-error has-success');
                        $('#txPono').val('').removeClass('has-error has-success').focus();
                        $('#related-pono-items').children('tbody').children('tr').remove();
                    }
                    else{
                        ShowFeedback("Error Saving Shipment Changes");
                    }
                    $('.loading').hide();
                }            
            });
        });
</script>

<script>
    $('#zero-qty-Key').on('click',function (){
        $('#quantityForm').hide();

        var quantity = 0; 
        
        if($.$SelectedTr === undefined){
            var barcode = $('#txBarcode').val();
//            $('#related-pono-items > tbody > tr > td').each(function(){
//                if($(this).children('a').html() === barcode){
//                    $.$SelectedTr = $(this).parent();
//                }
//            });
            getSelectedTr(barcode);
        }

        var $recv = $.$SelectedTr.children('.td-qty-recv'),
            recvValue = parseInt($recv.html());             
            $recv.html(0);

        var params = {
            'pono' : $('#txPono').val(),
            'itemno' : $.$SelectedTr.children('.td-itemno').children('a').html()
        };
        $.ajax({
            data: params,
            url: '<?php echo $View->Href("Shipment", "GetQtyLeft") ?>',
            type: 'post',
            beforeSend: function(){
                $('.loading').show();
            },
            success: function (response){
                var _response = $.parseJSON(response); 
                if (_response.success === true) {                    
                    var $left = $.$SelectedTr.children('.td-qty-left'),
                    leftValue = _response.qtyleft;
                    $left.html(leftValue);
                    if (leftValue === 0) {
                        $.$SelectedTr.addClass('zero-qty-left');
                    }
                    else{
                        $.$SelectedTr.removeClass('zero-qty-left');
                    }
                }
                else{
                    ShowFeedback("Error retrieving quantity left.");
                }
                                
                $('.loading').hide();
            }            
        });

        doFiltering($('#chFilter')[0].checked);
        $('#clear-Key').click();
        ShowFeedback("Shipment");
        
        $('#txBarcode').val('').removeClass('has-success').focus();
    });
</script>
