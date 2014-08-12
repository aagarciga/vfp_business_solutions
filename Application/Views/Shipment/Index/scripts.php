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
    function showQtyFormWithSugerence(qtyleft){
        if (qtyleft < 0) {
            qtyleft = 0;
        }
        ShowFeedback("Quantity must be less or equal to: " + qtyleft);
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
                    showQtyFormWithSugerence(_response.qtyleft);                    
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
    
    $('#zero-qty-Key, #no-change-Key').on('click',function (){
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
        var a = $('#quantityField').html();
        var b = $('#unknow-Key-value').html();
        
        if (parseInt(a) > parseInt(b)) {
            ShowFeedback("Quantity exceeds the maximun permited");
        }else{
            $('#quantityForm').hide();
        
            var quantity = parseInt($('#quantityField').html());        
            if (isNaN(quantity)) {
                quantity = 0;
            }
            
            var $recv = $.$SelectedTr.children('.td-qty-recv'),
                recvValue = parseInt($recv.html());
            $recv.html(recvValue + quantity);
            
            var $left = $.$SelectedTr.children('.td-qty-left'),
                leftValue = parseInt($left.html());
                
                $left.html(leftValue - quantity);
            
            doFiltering($('#chFilter')[0].checked);
            $('#clear-Key').click();
            ShowFeedback("Shipment");
        }
    });
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
                        var $tr = $('<tr><td class="td-itemno">'+itemno+'</td><td class="td-qty-left">'+qtyleft+'</td><td class="td-qty-recv">'+qtyrec0+'</td><td class="td-binloc">'+locno+"</td></tr>");
                        $table.children('tbody').append($tr);
                        $tr.on('click', function(){
                            var $itemno = $(this).children('.td-itemno'),
                                $qtyleft = $(this).children('.td-qty-left'),
                                $qtyrec0 = $(this).children('.td-qty-recv'),
                                $locno = $(this).children('.td-binloc');
                                $.$SelectedTr = $(this);  
                                showQtyFormWithSugerence(parseInt($qtyleft.html()));
                        });
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
            $qtyleft = $currentTr.children('.td-qty-left'),
            $qtyrec0 = $currentTr.children('.td-qty-recv');
            
            if(checked){
                if ($qtyleft.html() === $qtyrec0.html()) {
                    $currentTr.hide();
                }
            }        
            else{
                $currentTr.show();
            }
        });
    }
</script>
