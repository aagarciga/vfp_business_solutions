<div class="container">

    <div class="row">
        <div class="feedback alert alert-info"> Pick Ticket </div>
    </div>

    <div class="row ">
        <div class="col-xs-8">


            <div class="form-group">
                <div class="input-group">
                    <span class="input-group-btn">
                        <button class="btn btn-default" type="button" id="btnTicketNo">Ticket No</button>
                    </span>
                    <input type="text" id="txtShpRelNo" name="txtShpRelNo"  class="form-control">
                    <span class="input-group-addon">
                        <input type="checkbox" id="chkShowfinishedTickets" <?php echo $ShowFinishedTickets === 'true' ? 'checked="checked"': '' ?> />
                    </span>
                </div><!-- /input-group -->
            </div>
            
            <?php if ($ShowLocationField === 'true'): ?>

            <div class="form-group">
                <label class="control-label" for="txtLocation"><span class="glyphicon glyphicon-globe"></span> Location</label>
                <input type="text" class="form-control input" name="txtLocation" id="txtLocation" title="Fill the location. Then press [Enter]"/>
            </div>
            
            <?php endif ?>

            <div class="form-group">
                <div class="input-group">
                    <span class="input-group-btn">
                        <button class="btn btn-default" type="button">Barcode &nbsp;</button>
                    </span>
                    <input type="text" id="txtBarcode" name="txtBarcode"  class="form-control">
                    <span class="input-group-btn">
                        <button id="btnItemQty" class="btn btn-default" type="button">Qty &nbsp;</button>
                    </span>
<!--                    <span class="input-group-addon">
                        <input type="checkbox">
                    </span>-->
                </div><!-- /input-group -->
            </div>

        </div>

        <div class="col-xs-4">
            <div class="form-group">
                <a id="close" class="btn btn-default btn-block btn-lg" href="<?php echo $View->Href("WMS") ?>" title="Close"><span class="glyphicon glyphicon-remove"></span></a>
            </div>
            <div class="form-group">
                <a id="btnNewTicket" class="btn btn-default btn-block btn-lg" href="#" title="New Ticket"><span class="glyphicon glyphicon-plus-sign"></span></a>
            </div>
        </div>
    </div>

    
    <table id="related-tickets-items" class="table table-striped table-condensed table-hover">
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

<div class="modal fade" id="ticket-list-modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Select a Pick Ticket <span id="itemCounter">(<?php //echo $Pager->getItemsCount(); ?>)</span></h4>
            </div>
            <div class="modal-body">
                <table id="tickets" class="table table-striped table-condensed table-hover">
                    <colgroup>
                        <col class="col-1">
                        <col class="col-2">
                        <col class="col-3">
                        <!--<col class="col-4">-->
                    </colgroup>
                    <thead>
                        <tr>
                            <th class="th-itemno">Pick Ticket</th>
<!--                            <th class="th-qty-left">Qty Order</th>
                            <th class="th-qty-recv">Qty Pick</th>-->
                            <th class="th-ordnum">Order No.</th>
                            <th class="th-binloc">Company</th>
                        </tr>
                    </thead>
                    <tfoot>

                    </tfoot>
                    <tbody>
                        
                    </tbody>
                </table>
                <div class="text-center pager-wrapper">
                   <?php // echo $Pager->getPagerControl(); ?> 
                </div>
                                
                
            </div>
            <div class="modal-footer">
<!--                
                <button type="button" class="btn btn-default" data-dismiss="modal">No</button>                -->
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


