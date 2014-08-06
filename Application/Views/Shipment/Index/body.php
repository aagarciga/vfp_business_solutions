<div class="container">

    <div class="row">
        <div class="feedback alert alert-info"> Shipment </div>
    </div>

    <div class="row ">
        <div class="col-xs-8">
            <div class="form-group">
                <label class="control-label" for="txPono"><span class="glyphicon glyphicon-list"></span> Po No</label>
                <input type="checkbox" class="form-control" id="chFilter"/>
                <input type="text" class="form-control input" name="txPono" id="txPono" title=". Then press [Enter]"/>
                
            </div>

            <div class="form-group">
                <label class="control-label" for="txBarcode"><span class="glyphicon glyphicon-barcode"></span> Barcode</label>
                <input type="text" class="form-control input" name="txBarcode" id="txBarcode" title="Fill item code, upc code or vendor stock. Then press [Enter]"/>
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
        <div class="col-xs-6">
            <div class="form-group">
                <a class="btn btn-default btn-block btn-lg" href="#" id="btnShowQuantityForm" title="Show Quantity Form">Location</a>
            </div>
        </div>

        <div class="col-xs-6">
            <div class="form-group">
                <input type="text" class="form-control"  name="txToQuantity" id="txToQuantity" readonly="readonly" placeholder="0" >

            </div>
        </div>
    </div>
    
    <table class="table table-striped table-condensed">
        <colgroup>
            <col class="col-1">
            <col class="col-2">
            <col class="col-3">
            <col class="col-4">
        </colgroup>
        <thead>
            <tr>
                <th class="th-itemno">Item No.</th>
                <th class="th-qty-left">QTY Left</th>
                <th class="th-qty-recv">QTY Recv</th>
                <th class="th-binloc">Bin Loc</th>
            </tr>
        </thead>
        <tfoot>

        </tfoot>
        <tbody>
            <tr id="marker-row" style="display: none">
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
            </tr>


        </tbody>
    </table>
    
    <?php $View->Control('QuantityForm'); ?>    

</div>

