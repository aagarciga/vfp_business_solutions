<script src="<?php echo $View->SharedScriptsContext('knockback-full-stack.min.js'); ?>"></script>

<script>
    (function (global, dandelion) {
        var ENTER_KEY = 13;

        // Itemlookup Namespace
        var itemlookup = dandelion.namespace('App.itemlookup', global),
        ItemlookupViewModel = function (model) {
            this.barcode = kb.observable(model, 'barcode');
            this.upccode = kb.observable(model, 'upccode');
            this.description = kb.observable(model, 'description');
            this.onhand = kb.observable(model, 'onhand');
            this.onsalesorder = kb.observable(model, 'onsalesorder');
            this.onpo = kb.observable(model, 'onpo');
            this.location = kb.observable(model, 'location');
            this.locationChangedAndVerifed = ko.observable(false);
            
            this.onEnterBarcode = function (view_model, event){
                if (event.keyCode !== ENTER_KEY) {                   
                    return true;
                }        
                itemlookup.verifyItem(view_model);
                return view_model;
            };
            this.onEnterLocation = function (view_model, event) {
                if (event.keyCode !== ENTER_KEY) {                   
                    return true;
                }
                itemlookup.verifyLocation(view_model);
                return view_model;
            };
            this.onSaveLocation = function (view_model, event) {
                if (itemlookup.viewModel.locationChangedAndVerifed()) {
                    itemlookup.updateBinLocation(view_model);
                    
                }
                return view_model;
            };
        };
        
        itemlookup.$view = $('#kb-view-itemlookup');
        itemlookup.view = itemlookup.$view[0];

        itemlookup.controls = [];
        itemlookup.controls['txBarcode'] = $('#txBarcode');
        itemlookup.controls['txLocation'] = $('#txLocation');
        
        itemlookup.defaultModel = {
            barcode: '',
            upccode: '',
            description: '', 
            onhand: '',
            onsalesorder: '',
            onpo: '',
            location: ''
        };

        itemlookup.init = function () {
            itemlookup.model = new Backbone.Model(itemlookup.defaultModel);
            itemlookup.viewModel = new ItemlookupViewModel(itemlookup.model);
            ko.applyBindings(itemlookup.viewModel, itemlookup.view);
        };
        itemlookup.verifyItem = function (itemlookupViewModel) {
            var params = {'barcode': itemlookupViewModel.barcode()};
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
                        itemlookupViewModel.barcode(_response.barcode);
                        itemlookupViewModel.upccode(_response.upccode);
                        itemlookupViewModel.description(_response.description);
                        itemlookupViewModel.onhand(_response.onhand);
                        itemlookupViewModel.onsalesorder(_response.onsalesorder);
                        itemlookupViewModel.onpo(_response.onpo);
                        itemlookupViewModel.location(_response.location);
                        
//                        itemlookup.model.set('barcode', _response.barcode);
//                        itemlookup.model.set('upccode', _response.upccode);
//                        itemlookup.model.set('description', _response.description);
//                        itemlookup.model.set('onhand', _response.onhand);
//                        itemlookup.model.set('onsalesorder', _response.onsalesorder);
//                        itemlookup.model.set('onpo', _response.onpo);
//                        itemlookup.model.set('location', _response.location);
                        ShowFeedback("Item Lookup Screen");
                    } else {
                        itemlookup.controls['txBarcode'].parent().removeClass('has-success');
                        itemlookup.controls['txBarcode'].parent().addClass('has-error');

                        ShowFeedback("Item not found.");
                    }
                    $('.loading').hide();
                }
            });
        };
        
        itemlookup.updateBinLocation = function (itemlookupViewModel) {
            var params = {'barcode': itemlookupViewModel.barcode(), 'location': itemlookupViewModel.location()};
            $.ajax({
                data: params,
                url: '<?php echo $View->Href("ItemLookup", "UpdateItemBinLocation") ?>',
                type: 'post',
                beforeSend: function () {
                    $('.loading').show();
                },
                success: function (response) {
                    var _response = $.parseJSON(response);
                    if (_response.success === 'true') {
                        itemlookup.controls['txLocation'].parent().addClass('has-success');
                        itemlookup.controls['txLocation'].parent().removeClass('has-error');
                        ShowFeedback("Item Bin Location updated.");
                        itemlookup.clear();
                        itemlookup.controls['txBarcode'].parent().removeClass('has-error');
                        itemlookup.controls['txBarcode'].parent().removeClass('has-success');
                        itemlookup.controls['txLocation'].parent().removeClass('has-error');
                        itemlookup.controls['txLocation'].parent().removeClass('has-success');
                    } else {
                        itemlookupViewModel.locationChangedAndVerifed(false);
                        itemlookup.controls['txLocation'].parent().removeClass('has-success');
                        itemlookup.controls['txLocation'].parent().addClass('has-error');
                        ShowFeedback("Error trying to update Item Bin Location.");
                    }
                    $('.loading').hide();
                }
            });
        };
        
        itemlookup.verifyLocation = function (itemlookupViewModel) {
            var params = {'location': itemlookupViewModel.location()};
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
                        
                        if (itemlookupViewModel.barcode()) {     
                            itemlookupViewModel.locationChangedAndVerifed(true);
                            ShowFeedback("Item Lookup Screen");
                        }
                        else{
                            itemlookupViewModel.locationChangedAndVerifed(false);
                            ShowFeedback("Location found but missing item data.");
                        }
                    } else {
                        itemlookupViewModel.locationChangedAndVerifed(false);
                        itemlookup.controls['txLocation'].parent().removeClass('has-success');
                        itemlookup.controls['txLocation'].parent().addClass('has-error');
                        ShowFeedback("Location not found.");
                    }
                    $('.loading').hide();
                }
            });
        };
        itemlookup.clear = function () {
            itemlookup.viewModel.barcode('');
            itemlookup.viewModel.upccode('');
            itemlookup.viewModel.description('');
            itemlookup.viewModel.onhand('');
            itemlookup.viewModel.onsalesorder('');
            itemlookup.viewModel.onpo('');
            itemlookup.viewModel.location('');
            itemlookup.viewModel.locationChangedAndVerifed(false);
        };

        itemlookup.init();
    }(window, window.dandelion));
</script>