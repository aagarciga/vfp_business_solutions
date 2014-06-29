<script>
    $('#txLocation').focus();    
</script>

<script>
    // Reset button behavior Script
    $('a#clear').on('click', function(){
        $('#txLocation').focus();
        $('input[type=text].input').val('').parent().removeClass('has-error has-success');
        
        ShowFeedback(" Physical Count Screen ");
     
    });
</script>

<script>
    function ShowFeedback(message){
        $('.feedback').fadeOut('slow', function() {
            $('.feedback').html(message);
            $('.feedback').fadeIn('slow', function() {
                //
            });
        });
    }
</script>

<script>
    // Verify Location Script
    function verifyLocation(locno){
        var params = {"locno" : locno };
        $.ajax({
            data: params,
            url: '<?php echo $View->Href("PhysicalCount", "VerifyLocation") ?>',
            type: 'post',
            beforeSend: function(){
                $('.loading').show();
            },
            success: function (response){
                if(response === 'true'){
                    $('#txLocation').parent().addClass('has-success');
                    $('#txLocation').parent().removeClass('has-error');
                    
                    if ($('#txBarcode').parent().hasClass('has-success')) {
                        ShowFeedback("Enter quantity for " + $('#txDescrip').val() +".");
                        $('#quantityForm').show();
                    }
                    else{
                        ShowFeedback("Location found."); 
                        $('#txBarcode').focus();
                    }
                    
                }else{
                    $('#txLocation').parent().removeClass('has-success');
                    $('#txLocation').parent().addClass('has-error');
                    
                    ShowFeedback("Location not found.");
                }
                $('.loading').hide();
            }            
        });
    }
    
    $('#txLocation').keypress(function(event){
        // Verify on Return key pressed
        if ( event.which === 13 ) {
            event.preventDefault();
            var locno = $(this).val();
            verifyLocation(locno);
        }
    });
</script>

<script>
    // Verify Item Script
    function verifyItem(barcode){
        var params = {"barcode" : barcode };
        $.ajax({
            data: params,
            url: '<?php echo $View->Href("PhysicalCount", "VerifyItem") ?>',
            type: 'post',
            beforeSend: function(){
                $('.loading').show();
            },
            success: function (response){
                var _response = $.parseJSON(response);
                if(_response.verified === 'true'){
                    $('#txBarcode').parent().addClass('has-success');
                    $('#txBarcode').parent().removeClass('has-error');
                    
                    if ($('#txLocation').parent().hasClass('has-success')) {
                        ShowFeedback("Enter quantity for " + _response.descrip +".");
                        $('#quantityForm').show();
                        $('#txBarcode').blur();
                        $('#quantityForm').focus();
                    }
                    else{
                        $('#txLocation').focus();
                    }
                     
                }else{
                    $('#txBarcode').parent().removeClass('has-success');
                    $('#txBarcode').parent().addClass('has-error');

                    ShowFeedback("Item not found.");
                }                
                $('#txDescrip').val(_response.descrip);
                $('.loading').hide();
            }            
        });
    }

    $('#txBarcode').keypress(function(event){
        // Verify on Return key pressed
        if ( event.which === 13 ) {
            //event.preventDefault();
            var barcode = $(this).val();
            verifyItem(barcode);
        }
    });
    
    $('#txBarcode').on('focus', function(){
        if (!$('#txLocation').parent().hasClass('has-success')) {
            verifyLocation($('#txLocation').val());
        }
    });
</script>

<script>
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
        else{
            $field.html(fieldValue + value);
        }           
    });
//    $('.numpad-key').on('keypress', function (event){
//        console.log(event.which);
//        switch(event.which){
//            case 48:
//            case 96:
//                $('#num-0-Key').click();      
//                break;
//            case 49:
//            case 97:
//                $('#num-1-Key').click();      
//                break;
//                
//        }
//    }); 
  
</script>

<script>
    $('#delete-Key').on('click',function (){
        var $field = $('#quantityField');
        
        $field.html($field.html().slice(0, -1));
        if (!($field.html() > 1)) {
            $field.html('0');
        }
    });
</script>

<script>
    $('#minus-Key').on('click',function (){
        var $field = $('#quantityField');
        var value = parseInt($field.html());
        
        if (value > 1) {
            $field.html( value - 1);
        }    
        else{
            $field.html('0');
        }
    });
    
    $('#plus-Key').on('click',function (){
        var $field = $('#quantityField');
        var value = parseInt($field.html());
        if(isNaN(value)){
            value = 0;
        }
        if (value >= 0) {
            $field.html( value + 1);
        }        
    });
    
    $('#clear-Key').on('click',function (){
        var $field = $('#quantityField');
        $field.html('0');
    });
</script>

<script>
    $('#enter-Key').on('click',function (){
        $('#quantityForm').hide();
        
        var quantity = parseInt($('#quantityField').html());        
        if (isNaN(quantity)) {
            quantity = 0;
        }
        var location = $('#txLocation').val();
        var barcode = $('#txBarcode').val();
        
        addItemCount(quantity, location, barcode);
        
        $('a#clear').click();
        $('#clear-Key').click();
    });
   
    function addItemCount(count, location, barcode){
        var params = {
            'barcode' : barcode,
            'location' : location,
            'count' : count
        };
        $.ajax({
            data: params,
            url: '<?php echo $View->Href("PhysicalCount", "AddItemCount") ?>',
            type: 'post',
            beforeSend: function(){
                $('.loading').show();
            },
            success: function (response){
                var _response = $.parseJSON(response);
                var $markerRow = $('#marker-row');
                var _rowType;
                
                if($markerRow.hasClass("even")){
                    _rowType = "odd";
                    $markerRow.removeClass("even");
                }
                else{
                    _rowType = "even";
                    $markerRow.addClass("even");
                }
                $markerRow.after('<tr class="'+_rowType+'"><td>'+
                        '<span class="badge">'+count+'</span>'+
                        "</td><td>"+
                        _response.itemno+"</td><td>"+
                        location+"</td><td>"+
                        _response.upccode+"</td></tr>");
                updateTotal();
                if (_response.isDuplicated) {
                    console.log("here: ", _response.isDuplicated);
                    updateDup();
                }
                $('.loading').hide();
            }            
        });        
    }
</script>

<script>
    // Update total count
    function updateTotal(){
        var $totalField = $('#txCount');
        $totalField.val(++$.TotalCount);
    }
</script>

<script>
    // Update DUP count
    function updateDup(){
        var $dupField = $('#txNetCount');  
        $dupField.val(++$.DUPCount);
    }
</script>

<script>
    $.TotalCount = 0;
    $.DUPCount = 0;
</script>

