<div class="container">

    <div class="row">
        <div class="feedback alert alert-info"> Bin to Bin </div>
    </div>

    <div class="row ">
        <div class="col-xs-8">
            <div class="form-group">
                <label class="control-label" for="seWarehouse"><span class="glyphicon glyphicon-home"></span> Warehouse</label>
                <select class="form-control input" name="seWarehouse" id="seWarehouse" title="Choose a warehouse from the list">
                <?php foreach ($ActivesWarehouses as $warehouse):?>                        
                    <option value="<?php echo $warehouse->getWhsno() ?>"><?php echo $warehouse->getWhsno() . ' - ' . $warehouse->getDescrip() ?></option>
                <?php endforeach ?>
                </select>

            </div>

            <div class="form-group">
                <label class="control-label" for="txBarcode"><span class="glyphicon glyphicon-barcode"></span> Barcode</label>
                <input type="text" class="form-control input" name="txBarcode" id="txBarcode" title="Fill item code, upc code or vendor stock. Then press [Enter]">
            </div>

        </div>

        <div class="col-xs-4">
            <div class="form-group">
                <a id="close" class="btn btn-default btn-block btn-lg" href="<?php echo $View->Href("WMS") ?>" title="Close"><span class="glyphicon glyphicon-remove"></span></a>
            </div>
            <div class="form-group">
                <a id="btnOk" class="btn btn-default btn-block btn-lg" href="#" title="Ok"><span class="glyphicon glyphicon-ok"></span></a>
            </div>
        </div>
    </div>

    <div class="row ">
        <div class="col-xs-6">
            <div class="form-group">
                <label class="control-label" for="txLocation"><span class="glyphicon glyphicon-export"></span> From</label>
                <input type="text" name="txLocation" id="txLocation" class="form-control input" title="Fill from location. Then press [Enter]"/>
<!--                <select class="form-control input" name="seLocation" id="seLocation" title="Select Location">
                    
                </select>-->

            </div>
        </div>

        <div class="col-xs-6">
            <div class="form-group">
                <label class="control-label" for="txOnhand">On Hand</label>
                <input type="text" class="form-control"  name="txOnhand" id="txOnhand" placeholder="0" readonly="readonly">

            </div>
        </div>
    </div>
    
    <div class="row ">
        <div class="col-xs-6">
            <div class="form-group">
                <label class="control-label" for="txActiveLocation"><span class="glyphicon glyphicon-import"></span> To</label>
                
                <input type="text" name="txActiveLocation" id="txActiveLocation" class="form-control input" title="Fill to location. Then press [Enter]"/>
<!--                <select class="form-control input" name="seActiveLocation" id="seActiveLocation">
                <?php // foreach ($ActivesLocations as $location): ?>                        
                    <option value="<?php // echo $location->getLocno() ?>"><?php // echo $location->getLocno() ?></option>
                <?php // endforeach ?>
                </select>-->

            </div>
        </div>

        <div class="col-xs-6">
            <div class="form-group">
                
            </div>
        </div>
    </div>
    
    <div class="row ">
        <div class="col-xs-6">
            <div class="form-group">
                <a class="btn btn-default btn-block btn-lg" href="#" id="btnShowQuantityForm" title="Show Quantity Form">Quantity</a>
            </div>
        </div>

        <div class="col-xs-6">
            <div class="form-group">
                <input type="text" class="form-control"  name="txToQuantity" id="txToQuantity" readonly="readonly" placeholder="0" >

            </div>
        </div>
    </div>
    
    <?php $View->Control('QuantityForm'); ?>    

</div>

