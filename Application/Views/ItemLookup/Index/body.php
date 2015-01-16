<div class="container" id="kb-view-itemlookup">

    <div class="row">
        <div class="feedback alert alert-info"> Item Lookup Screen </div>
    </div>

    <div class="row ">
        <div class="col-xs-8">
            <div class="form-group">
                <label class="control-label" for="txBarcode"><span class="glyphicon glyphicon-barcode"></span> Item Number</label>
                <input type="text" class="form-control input"  name="txBarcode" id="txBarcode"  data-bind="value: barcode" title="Fill Bar Code or Item Number. Then press [Tab] or [Enter]">

            </div>

            <div class="form-group">
                <label class="control-label" for="txUpccode"><span class="glyphicon glyphicon-barcode"></span> Upc Code</label>
                <input type="text" class="form-control input" name="txUpccode" id="txUpccode" data-bind="value: upccode" title="Fill item code, upc code or vendor stock. Then press [Enter]" readonly="readonly">
            </div>
        </div>

        <div class="col-xs-4">
            <div class="form-group">
                <a id="close" class="btn btn-default btn-block btn-lg" href="<?php echo $View->Href("Main") ?>" title="Close"><span class="glyphicon glyphicon-remove"></span></a>
            </div>
            <div class="form-group">
                <a id="btnOk" class="btn btn-default btn-block btn-lg" href="#" title="Ok"><span class="glyphicon glyphicon-ok"></span></a>
            </div>
        </div>
    </div>

    <div class="row ">
        <div class="col-xs-12">
            <div class="form-group">
                <label class="control-label" for="txDescription">Description</label>
                <input type="text" class="form-control"  name="txDescription" id="txDescription" data-bind="value: description" readonly="readonly">

            </div>
        </div>        
    </div>
    
    <div class="row ">
        <div class="col-xs-12">
            <div class="form-group">
<!--                <label class="control-label" for="seWarehouse"><span class="glyphicon glyphicon-globe"></span> Bin Location</label>
                <select class="form-control input" name="seWarehouse" id="seWarehouse" title="Choose a warehouse from the list">
                
                </select>-->
<label class="control-label" for="txLocation">Bin Location</label>
                <input type="text" class="form-control"  name="txLocation" id="txLocation" data-bind="value: location">

            </div>

        </div>
    </div>
    
    <div class="row ">

        <div class="col-xs-4">
            <div class="form-group">
                <label class="control-label" for="txOnhand">On Hand</label>
                <input type="text" class="form-control"  name="txOnhand" id="txOnhand" data-bind="value: onhand" placeholder="0" readonly="readonly">

            </div>
        </div>
        
        <div class="col-xs-4">
            <div class="form-group">
                <label class="control-label" for="txOnhand">On Sales Order</label>
                <input type="text" class="form-control"  name="txOnhand" id="txOnSalesOrder" data-bind="value: onsalesorder" placeholder="0" readonly="readonly">

            </div>
        </div>
        
        <div class="col-xs-4">
            <div class="form-group">
                <label class="control-label" for="txOnhand">On PO</label>
                <input type="text" class="form-control"  name="txOnhand" id="txOnpo" data-bind="value: onpo" placeholder="0" readonly="readonly">

            </div>
        </div>
    </div>
    
    <?php $View->Control('QuantityForm'); ?>    

</div>

