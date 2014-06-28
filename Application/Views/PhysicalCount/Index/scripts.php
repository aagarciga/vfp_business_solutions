<script>
    $('#txLocation').focus();    
</script>

<script>
    // Reset button behavior Script
    $('a#clear').on('click', function(){
        
        $('#txLocation').focus();
        $('input[type=text]').val('').removeClass('has-error').removeClass('success');

        $('.feedback').fadeOut('slow', function() {

        });
     
    });
</script>

<script>
    function ShowFeedback(message){
        $('.feedback').fadeOut('slow', function() {
            $('.feedback').html(message);
            $('.feedback').fadeIn('slow', function() {
                
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
                    $('#txLocation').addClass('success');
                    $('#txLocation').removeClass('has-error');
                    
                    if ($('#txBarcode').hasClass('success')) {
                        ShowFeedback("Enter quantity for " + $('#txDescrip').val() +".");
                        $('#quantityForm').show();
                    }
                    else{
                        ShowFeedback("Location found."); 
                        $('#txBarcode').focus();
                    }
                    
                }else{
                    $('#txLocation').removeClass('success');
                    $('#txLocation').addClass('has-error');
                    
                    ShowFeedback("Location not found.");
                }
                $('.loading').hide();
            }            
        });
    }
    
    
    
    $('#txLocation').keypress(function(event){
        // Verify on Return key pressed
        if ( event.which === 13 ) {
            //event.preventDefault();
            var locno = $(this).val();
            verifyLocation(locno);
        }
    });
//    
//    $('#txLocation').on('focus', function(){
//        console.log($('#txBarcode').val());
//        if ($('#txBarcode').val() !== '') {
//            verifyItem($('#txBarcode').val())
//        }
//    });
//    

    
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
                    $('#txBarcode').addClass('success');
                    $('#txBarcode').removeClass('has-error');
                    
                    if ($('#txLocation').hasClass('success')) {
                        ShowFeedback("Enter quantity for " + _response.descrip +".");
                        $('#quantityForm').show();
                        $('#quantityForm').focus();
                    }
                    else{
                        $('#txLocation').focus();
                    }
                     
                }else{
                    $('#txBarcode').removeClass('success');
                    $('#txBarcode').addClass('has-error');

                    ShowFeedback("Item "+ _response.descrip +" found.");
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
        if (!$('#txLocation').hasClass('success')) {
            verifyLocation($('#txLocation').val());
        }
    });
</script>

<script>
    $('.numpad-key').on('click',function (){
        var $key = $(this);
        var value = $key.html();
        
        var $field = $('#quantityField');
        var fieldValue = $field.val();
        if(value === '0' && fieldValue === ''){
            
        }
        else{
            $field.val(fieldValue + value);
        }
        $field.focus();
            
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
        $field.val($field.val().slice(0, -1));
        $field.focus();
    });
</script>

<script>
    $('#minus-Key').on('click',function (){
        var $field = $('#quantityField');
        var value = parseInt($field.val());
        
        if (value > 1) {
            $field.val( value - 1);
        }    
        else{
            $field.val('');
        }
    });
    
    $('#plus-Key').on('click',function (){
        var $field = $('#quantityField');
        var value = parseInt($field.val());
        if(isNaN(value)){
            value = 0;
        }
        if (value >= 0) {
            $field.val( value + 1);
        }        
    });
    
    $('#clear-Key').on('click',function (){
        var $field = $('#quantityField');
        $field.val('');
    });
</script>

<script>
    $('#enter-Key').on('click',function (){
        $('#quantityForm').hide();
        
        var quantity = parseInt($('#quantityField').val());        
        if (isNaN(quantity)) {
            quantity = 0;
        }
        var location = $('#txLocation').val();
        var barcode = $('#txBarcode').val();
        
        addItemCount(quantity, location, barcode);
        
        $('a#clear').click();
        $('#clear-Key').click();
    });
        
    /// 
    function addItemCountOld(count, location, barcode){
        var params = {
            'barcode' : barcode,
            'location' : location,
            'count' : count
        };
        $.ajax({
            data: params,
            url: '<?php echo $View->Href("PhysicalCount", "GetItem") ?>',
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
                        count+"</td><td>"+
                        _response.itemno+"</td><td>"+
                        location+"</td><td>"+
                        _response.upccode+"</td></tr>");
                updateTotal(count);
                $('.loading').hide();
            }            
        });        
    }
    
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
                        count+"</td><td>"+
                        _response.itemno+"</td><td>"+
                        location+"</td><td>"+
                        _response.upccode+"</td></tr>");
                updateTotal();
                console.log(_response.isDuplicated);
                if (_response.isDuplicated) {
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
        $totalField.val(parseInt($totalField.val())+ 1);        
    }
</script>

<script>
    // Update DUP count
    function updateDup(){
        var $dupField = $('#txNetCount');
        $dupField.val(parseInt($dupField.val())+ 1);        
    }
</script>

