<div class="container">

    <div class="row">
        <div class="feedback alert alert-info"> Pick Ticket </div>
    </div>

    <div class="row ">
        <div class="col-xs-8">


            <div class="form-group">
                <div class="input-group">
                    <span class="input-group-btn">
                        <button class="btn btn-default" type="button">Ticket No.</button>
                    </span>
                    <input type="text" id="txShpRelNo" name="txShpRelNo"  class="form-control">
                     <span class="input-group-addon">
                         <input type="checkbox">
                     </span>
                </div><!-- /input-group -->
            </div>

            <div class="form-group">
                <label class="control-label" for="txLocation"><span class="glyphicon glyphicon-barcode"></span> Location</label>
                <input type="text" class="form-control input" name="txLocation" id="txLocation" title="Fill the location. Then press [Enter]"/>
            </div>
            
            <div class="form-group">
                <div class="input-group">
                    <span class="input-group-btn">
                        <button class="btn btn-default" type="button">Barcode</button>
                    </span>
                    <input type="text" id="txBarcode" name="txBarcode"  class="form-control">
                     <span class="input-group-addon">
                         <input type="checkbox">
                     </span>
                </div><!-- /input-group -->
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

    <table id="related-pono-items" class="table table-striped table-condensed table-hover">
        <colgroup>
            <col class="col-1">
            <col class="col-2">
            <col class="col-3">
            <col class="col-4">
        </colgroup>
        <thead>
            <tr>
                <th class="th-itemno">Item No.</th>
                <th class="th-qty-left">Req. QTY</th>
                <th class="th-qty-recv">Picked</th>
                <th class="th-binloc">Bin Loc</th>
            </tr>
        </thead>
        <tfoot>

        </tfoot>
        <tbody>

        </tbody>
    </table>

    <?php $View->Control('QuantityForm'); ?>    

</div>

<div class="modal fade" id="overwrite-modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Overwrite?</h4>
            </div>
            <div class="modal-body">
                <p>Quantity Exceeds Required Quantity, Overwrite it ?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
                <button type="button" class="btn btn-primary" id="overwrite-yes">Yes</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


