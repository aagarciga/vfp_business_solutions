<script src="<?php echo $View->SharedScriptsContext('knockback-full-stack.min.js'); ?>"></script>

<script>
    (function (global, dandelion) {
        // Itemlookup Namespace
        var itemlookup = dandelion.namespace('App.itemlookup', global);

        itemlookup.$view = $('#kb-view-itemlookup');
        itemlookup.view = itemlookup.$view[0];

        itemlookup.controls = [];
        itemlookup.controls['txBarcode'] = $('#txBarcode');
        itemlookup.controls['txLocation'] = $('#txLocation'); 
        
        itemlookup.model = new Backbone.Model({
            barcode: '', // _response.barcode,
            upccode: '', // _response.upccode,
            description: '', // _response.description 
            onhand : '',
            onsalesorder : '',
            onpo : '',
            location : ''
        });
        
        itemlookup.viewModel = {
            barcode : kb.observable(itemlookup.model, 'barcode'),
            upccode : kb.observable(itemlookup.model, 'upccode'),
            description : kb.observable(itemlookup.model, 'description'),
            onhand : kb.observable(itemlookup.model, 'onhand'),
            onsalesorder : kb.observable(itemlookup.model, 'onsalesorder'),
            onpo : kb.observable(itemlookup.model, 'onpo'),
            location : kb.observable(itemlookup.model, 'location')

        };

        itemlookup.init = function () {
            ko.applyBindings(itemlookup.viewModel, itemlookup.view);      

            itemlookup.controls['txBarcode'].keypress(function (event) {
                // Verify on Return key pressed
                if (event.which === 13) {
                    event.preventDefault();
                    var barcode = $(this).val();
                    itemlookup.verifyItem(barcode);
                    console.dir(itemlookup.model);
                }
            });            
            itemlookup.controls['txLocation'].keypress(function (event) {
                // Verify on Return key pressed
                if (event.which === 13) {
                    event.preventDefault();
                    var location = $(this).val();
                    itemlookup.verifyLocation(location);
                }
            });
        };

        itemlookup.verifyItem = function (barcode) {
            var params = {'barcode': barcode};
            $.ajax({
                data: params,
                url: '<?php echo $View->Href("ItemLookup", "VerifyItem") ?>',
                type: 'post',
                beforeSend: function () {
                    $('.loading').show();
                },
                success: function (response) {
                    var _response = $.parseJSON(response);

                    if (_response.verified === 'true') {
                        itemlookup.controls['txBarcode'].parent().addClass('has-success');
                        itemlookup.controls['txBarcode'].parent().removeClass('has-error');

                        itemlookup.model.set('barcode', _response.barcode);
                        itemlookup.model.set('upccode', _response.upccode);
                        itemlookup.model.set('description', _response.description);
                        itemlookup.model.set('onhand', _response.onhand);
                        itemlookup.model.set('onsalesorder', _response.onsalesorder);                        
                        itemlookup.model.set('onpo', _response.onpo);
                        itemlookup.model.set('location', _response.location);

                    } else {
                        itemlookup.controls['txBarcode'].parent().removeClass('has-success');
                        itemlookup.controls['txBarcode'].parent().addClass('has-error');

                        ShowFeedback("Item not found.");
                    }
                    $('.loading').hide();
                }
            });
        };
        itemlookup.verifyLocation = function (location) {
            var params = {'location': location};
            $.ajax({
                data: params,
                url: '<?php echo $View->Href("ItemLookup", "VerifyLocation") ?>',
                type: 'post',
                beforeSend: function () {
                    $('.loading').show();
                },
                success: function (response) {
                    var _response = $.parseJSON(response);
                    if (_response.verified === 'true') {
                        itemlookup.controls['txLocation'].parent().addClass('has-success');
                        itemlookup.controls['txLocation'].parent().removeClass('has-error');
                    
                    } else {
                        itemlookup.controls['txLocation'].parent().removeClass('has-success');
                        itemlookup.controls['txLocation'].parent().addClass('has-error');
                        ShowFeedback("Location not found.");
                    }
                    $('.loading').hide();
                }
            });
        };
        
        itemlookup.init();
    }(window, window.dandelion));
</script>
