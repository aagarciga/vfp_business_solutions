    <script>
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
                    
                    // MARK: Select location by barcode from Dropdown mechanism
                    // (Remove this comment to work with, and look at the markup)
                    //getLocations(barcode);
                    
                    // Mark: Select location by barcode from Textbox mechanism
                    $('#txLocation').focus();
                     
                }else{
                    $('#txBarcode').parent().removeClass('has-success');
                    $('#txBarcode').parent().addClass('has-error');

                    ShowFeedback("Item not found.");
                }                
                $('.loading').hide();
            }            
        });
    }
    
    $('#txBarcode').keypress(function(event){
        // Verify on Return key pressed
        if ( event.which === 13 ) {
            event.preventDefault();
            var barcode = $(this).val();
            verifyItem(barcode);
        }
    });
    
    </script>
    
    <script>
    function getLocations(barcode){
        var params = {"barcode" : barcode };
        $.ajax({
            data: params,
            url: '<?php echo $View->Href("BinToBin", "GetLocationsByBarcode") ?>',
            type: 'post',
            beforeSend: function(){
                $('.loading').show();
            },
            success: function (response){
                var _response = $.parseJSON(response); 
                if (_response.length > 0) {
                    fillFromComponents($('#seLocation'), $('#txOnhand'), _response);
                }
                                
                $('.loading').hide();
            }            
        });
    }
    </script>
    
    <script>
//        function fillFromComponents($select, $textbox, data){
//            $select.children().remove();
//            $textbox.val(0);
//            
//            $textbox.val(data[0].onhand);
//            $(data).each(function(){
//                $select.append('<option value="'+$(this)[0].onhand+'">'+$(this)[0].locno+'</option>')
//            });
//        }

        function fillFromComponents($fromLocation, $onHand, data){
            $fromLocation.val('');
            $onHand.val(0);
            
            
        }
    </script>
    
    <script>
        $('#seLocation').on('change', function(){

                var $onhand = $('#txOnhand');            
                $onhand.val($(this).val());
        });
    </script>
    
    <script>
        $('#btnShowQuantityForm').on('click', function(){
            $('#quantityForm').show();
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
            else {
                $field.html(fieldValue + value);
            }
        });
    </script>
    
    <script>
    $('#delete-Key').on('click',function (){
        var $field = $('#quantityField');
        $field.html($field.html().slice(0, -1));
        if (!($field.html() > 0)) {
            $field.html('0');
        }
    });
    </script>
    
    <script>   
    $('#unknow-Key, #zero-qty-Key, #no-change-Key').on('click',function (){
        $('#quantityForm').hide();
        
        $('#txToQuantity').val(0);        
        
        $('#clear-Key').click();
    });
    </script>

    <script>
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
    </script>
    
    <script>
    $('#enter-Key').on('click',function (){
        $('#quantityForm').hide();
        
        var quantity = parseInt($('#quantityField').html());        
        if (isNaN(quantity)) {
            quantity = 0;
        }
        $('#txToQuantity').val(quantity);
        $('#clear-Key').click();
    });
    </script>
    
    <script>
        $('#btnOk').on('click', function(){
            var $warehouse = $('#seWarehouse option:selected').val();
            var $toQuantity = $('#txToQuantity');
            var $toQuantityValue = $toQuantity.val();
            var $fromLocation = $('#txLocation');
            var $fromLocationValue = $fromLocation.val();
            var $onHandFromLocation = $('#txOnhand');            
            var $toLocation = $('#txActiveLocation');
            var $toLocationValue = $toLocation.val();
                var $barcode = $('#txBarcode');
                var $barcodeValue = $barcode.val();

                if ($barcode.val() === '') {
                    ShowFeedback('<strong>Barcode</strong> field can not be empty');
                } else
                if ($barcode.parent().hasClass('has-error')) {
                    ShowFeedback('Please enter a valid <strong>Barcode</strong> in order to show all associated locations in the <strong>From</strong> field');
                } else
                if ($toQuantity.val() <= 0) {
                    ShowFeedback('Please enter a quantity greather than Zero');
                } else
                if ($fromLocation.val() === '' || $toLocation.val() === '') {
                    ShowFeedback('Please enter a <strong>From</strong> and <strong>To</strong> Location');
                } else
                if ($fromLocationValue === $toLocation.val()) {
                    ShowFeedback('Locations can not be the same');
                } else
                if ($fromLocationValue === undefined) {
                    ShowFeedback('The <strong>Barcode</strong> entered have not associated locations');
                } else
                if (!verifyFromIsActive()) {
                    ShowFeedback('The <strong>From</strong> location does not exist.  Please select another location.');
                } else
                if (parseInt($toQuantity.val()) > parseInt($onHandFromLocation.val())) {
                    ShowFeedback('Quantity in From location is less than the quantity to move.  Please re-enter a lesser quantity.');
                } else {
                    var params = {
                        "quantity": $toQuantityValue,
                        "fromlocno": $fromLocationValue,
                        "tolocno": $toLocationValue,
                        "warehouse": $warehouse,
                        "barcode": $barcodeValue
                    };
                    $.ajax({
                        data: params,
                        url: '<?php echo $View->Href("BinToBin", "Index") ?>',
                        type: 'post',
                        beforeSend: function() {
                            $('.loading').show();
                        },
                        success: function(response) {
                            var _response = $.parseJSON(response);
                            if (_response.success === 'true') {
                                clearBinToBinForm();
                                ShowFeedback("Transaction Success");
                            } else {
                                ShowFeedback(_response.message);
                            }
                            $('.loading').hide();
                        }
                    });
                }

            });
        
        function clearBinToBinForm(){
            var $barcode = $('#txBarcode');
            $barcode.val("");
            $barcode.parent().removeClass('has-success has-error');
            
            var $fromLocation = $('#txLocation');
            $fromLocation.val("");
            $fromLocation.parent().removeClass('has-success has-error');
            
            var $onHandFromLocation = $('#txOnhand'); 
            $onHandFromLocation.val("");
            
            var $toLocation = $('#txActiveLocation');
            $toLocation.val("");
            $toLocation.parent().removeClass('has-success has-error');
            
            var $toQuantity = $('#txToQuantity');
            $toQuantity.val("");
        }
        
        /**
        * Verify if From Location is active
        * @returns {Boolean}         
        */       
        function verifyFromIsActive(){
            var _result = false;
            var $fromLocationValue = $('#txLocation').val();
            
            var _activesLocations = <?php echo $jsonActivesLocations ?>;
            
            for (i = 0; i < _activesLocations.length; i++) {
                var currentValue = _activesLocations[i];
                if( currentValue === $fromLocationValue){
                    _result = true;
                    break;
                }
            }
            
            return _result;
        };
    </script>
    
    <script>
//        $('#btnOk').on('click', function(){
//            
//            var $warehouse = $('#seWarehouse option:selected').val();
//            var $toQuantity = $('#txToQuantity');
//            var $toQuantityValue = $toQuantity.val();
//            var $fromLocation = $('#seLocation');
//            var $fromLocationValue = $('#seLocation option:selected').html();
//            var $onHandFromLocation = $('#txOnhand');            
//            var $toLocation = $('#seActiveLocation');
//            var $toLocationValue = $('#seActiveLocation option:selected').val();
//            var $barcode = $('#txBarcode');
//            var $barcodeValue = $barcode.val();
//            
//            if($barcode.val() === ''){
//                ShowFeedback('<strong>Barcode</strong> field can not be empty');
//            }else
//            if($barcode.parent().hasClass('has-error')){
//                ShowFeedback('Please enter a valid <strong>Barcode</strong> in order to show all associated locations in the <strong>From</strong> field');
//            } else
//            if($toQuantity.val() <= 0){
//                ShowFeedback('Please enter a quantity greather than Zero');
//            } else
//            if($fromLocation.val() === '' || $toLocation.val() === ''){
//                ShowFeedback('Please enter a <strong>From</strong> and <strong>To</strong> Location');
//            } else
//            if($fromLocationValue === $toLocation.val()){
//                ShowFeedback('Locations can not be the same');
//            } else
//            if($fromLocationValue === undefined){
//                ShowFeedback('The <strong>Barcode</strong> entered have not associated locations');
//            } else
//            if(!verifyFromExistInTo()){
//                ShowFeedback('The <strong>From</strong> location does not exist.  Please select another location.');
//            } else
//            if(parseInt($toQuantity.val()) > parseInt($onHandFromLocation.val()) ){                
//                ShowFeedback('Quantity in From location is less than the quantity to move.  Please re-enter a lesser quantity.');
//            } else{
//                var params = {  
//                    "quantity" : $toQuantityValue,
//                    "fromlocno" : $fromLocationValue,
//                    "tolocno" : $toLocationValue,
//                    "warehouse" : $warehouse,
//                    "barcode" : $barcodeValue
//                    };
//                    console.log("Post Params: ", params);
//                $.ajax({
//                    data: params,
//                    url: '<?php echo $View->Href("BinToBin", "Index") ?>',
//                    type: 'post',
//                    beforeSend: function(){
//                        $('.loading').show();
//                    },
//                    success: function (response){
//                        var _response = $.parseJSON(response);
//                        if(_response.success === 'true'){
//                            clearBinToBinForm();
//                            ShowFeedback("Transaction Success");
//                        }else{
//                            ShowFeedback(_response.message); 
//                        }                    
//                        $('.loading').hide();
//                    }            
//                });
//            }
//
//        });
//        
//        function clearBinToBinForm(){
//            var $barcode = $('#txBarcode');
//            $barcode.val("");
//            $barcode.parent().removeClass('has-success has-error');
//            
//            var $fromLocation = $('#seLocation');
//            $fromLocation.children().remove();
//            
//            var $onHandFromLocation = $('#txOnhand'); 
//            $onHandFromLocation.val("");
//            
//            var $toQuantity = $('#txToQuantity');
//            $toQuantity.val("");
//        }
//
//        /**
//        * Verify if From Location is not on To Location list        
//         * @returns {Boolean}         */
//        function verifyFromExistInTo(){
//            var _result = false;
//            var $fromLocationValue = $('#seLocation option:selected').html();
//            var $toLocationOptions = $('#seActiveLocation').children();           
//            
//            $toLocationOptions.each(function(){
//                if ($fromLocationValue === $(this).val() ) {                    
//                    _result = true;
//                }
//            });          
//            
//            return _result;
//        };
    </script>
    
    <script>
        /// Select location by barcode from textbox mechanism
        $('#txLocation').keypress(function(event){
            // Verify on Return key pressed
            if ( event.which === 13 ) {
                event.preventDefault();
                var barcode = $('#txBarcode').val();
                var location = $(this).val();
                verifyFromLocation(location ,barcode);
            }
        });
    
    function verifyFromLocation(location, barcode){
        var params = {
            "location" : location,
            "barcode" : barcode };
        $.ajax({
            data: params,
            url: '<?php echo $View->Href("BinToBin", "VerifyFromLocation") ?>',
            type: 'post',
            beforeSend: function(){
                $('.loading').show();
            },
            success: function (response){
                var _response = $.parseJSON(response); 
                if (_response.verified === true) {
                    
                    $('#txLocation').parent().addClass('has-success');
                    $('#txLocation').parent().removeClass('has-error');
                    $('#txOnhand').val(_response.onhand);
                    $('#txActiveLocation').focus();
                }
                else{
                    $('#txLocation').parent().addClass('has-error');
                    $('#txLocation').parent().removeClass('has-success');
                }
                                
                $('.loading').hide();
            }            
        });
    }
    
    </script>
    
    <script>
        
        /// Select location by barcode from textbox mechanism
        $('#txActiveLocation').keypress(function(event){
            // Verify on Return key pressed
            if ( event.which === 13 ) {
                event.preventDefault();
                var location = $(this).val();
                verifyToLocation(location);
            }
        });
    
    function verifyToLocation(location){
        var params = {"location" : location};
        $.ajax({
            data: params,
            url: '<?php echo $View->Href("BinToBin", "VerifyToLocation") ?>',
            type: 'post',
            beforeSend: function(){
                $('.loading').show();
            },
            success: function (response){
                var _response = $.parseJSON(response); 
                if (_response.verified === true) {
                    $('#txActiveLocation').parent().addClass('has-success');
                    $('#txActiveLocation').parent().removeClass('has-error');
                }
                else{
                    $('#txActiveLocation').parent().addClass('has-error');
                    $('#txActiveLocation').parent().removeClass('has-success');
                }
                                
                $('.loading').hide();
            }            
        });
    }
    </script>
    
    
    