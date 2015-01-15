<div class="container">

    <div class="row">
        <div class="feedback alert alert-info"> Item Lookup Screen </div>
    </div>

    <div class="row ">
        <div class="col-xs-8">
            <div class="form-group">
                <label class="control-label" for="txLocation"><span class="glyphicon glyphicon-barcode"></span> Item Number</label>
                <input type="text" class="form-control input"  name="txLocation" id="txLocation" title="Fill Location Code. Then press [Tab] or [Enter]">

            </div>

            <div class="form-group">
                <label class="control-label" for="txBarcode"><span class="glyphicon glyphicon-barcode"></span> Upc Code</label>
                <input type="text" class="form-control input" name="txBarcode" id="txBarcode" title="Fill item code, upc code or vendor stock. Then press [Enter]">
            </div>
        </div>

        <div class="col-xs-4">
            <div class="form-group">
                <a id="close" class="btn btn-default btn-block btn-lg" href="<?php echo $View->Href("Main") ?>" title="Close"><span class="glyphicon glyphicon-remove"></span></a>
            </div>
            <div class="form-group">
                <a id="clear" class="btn btn-default btn-block btn-lg" href="#" title="Clear"><span class="glyphicon glyphicon-repeat"></span></a>
            </div>
        </div>
    </div>

    <div class="row ">
        <div class="col-xs-12">
            <div class="form-group">
                <label class="control-label" for="txNetCount">Description</label>
                <input type="text" class="form-control"  name="txNetCount" id="txNetCount" placeholder="Description" value="<?php echo $Dup ?>">

            </div>
        </div>        
    </div>
    
    <div class="row ">
        <div class="col-xs-12">
            <div class="form-group">
                <label class="control-label" for="seWarehouse"><span class="glyphicon glyphicon-globe"></span> Locno</label>
                <select class="form-control input" name="seWarehouse" id="seWarehouse" title="Choose a warehouse from the list">
                <?php foreach ($ActivesWarehouses as $warehouse):?>                        
                    <option value="<?php echo $warehouse->getWhsno() ?>"><?php echo $warehouse->getWhsno() . ' - ' . $warehouse->getDescrip() ?></option>
                <?php endforeach ?>
                </select>

            </div>

        </div>
    </div>
    
    <div class="row ">

        <div class="col-xs-4">
            <div class="form-group">
                <label class="control-label" for="txOnhand">On Hand</label>
                <input type="text" class="form-control"  name="txOnhand" id="txOnhand" placeholder="0" readonly="readonly">

            </div>
        </div>
        
        <div class="col-xs-4">
            <div class="form-group">
                <label class="control-label" for="txOnhand">On Sls Order</label>
                <input type="text" class="form-control"  name="txOnhand" id="txOnhand" placeholder="0" readonly="readonly">

            </div>
        </div>
        
        <div class="col-xs-4">
            <div class="form-group">
                <label class="control-label" for="txOnhand">On PO</label>
                <input type="text" class="form-control"  name="txOnhand" id="txOnhand" placeholder="0" readonly="readonly">

            </div>
        </div>
    </div>
    
    <?php $View->Control('QuantityForm'); ?>    

</div>

