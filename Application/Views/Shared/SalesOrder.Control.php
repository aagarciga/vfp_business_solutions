<div id="kb-view-salesorder">
    <div id="salesOrder" class="container">
        <div class="row">
            <div class="feedback alert alert-info">Sales Order</div>
        </div>
        <div class="row">
            <div class="col-xs-8">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-xs-6">           
                                <div class="form-group">
                                    <label class="control-label"><span class="glyphicon glyphicon-list"></span> SO No.</label>
                                    <input type="text" class="form-control input" title="Sales Order" data-bind="value: ordnum" disabled="disabled"/>
                                </div>
                            </div>
                            <div class="col-xs-6">
                                <div class="form-group">
                                    <label class="control-label"><span class="glyphicon glyphicon-calendar"></span> Date</label>
                                    <input type="text" class="form-control input daterangepicker-single-fix" data-bind="value: date"/>
                                </div>
                            </div>
                            <div class="col-xs-6" data-bind="visible: showControlIFBOrC ">           
                                <div class="form-group">
                                    <label class="control-label"><span class="glyphicon glyphicon-list"></span> Purchase Order</label>
                                    <input type="text" class="form-control input" title="Purchase Order" data-bind="value: ponum"/>
                                </div>
                            </div>
                            <div class="col-xs-6" data-bind="visible: showControlIFBOrC ">
                                <div class="form-group">
                                    <label class="control-label"><span class="glyphicon glyphicon-calendar"></span> Company</label>
                                    <input type="text" class="form-control input" title="Company" data-bind="value: company"/>
                                </div>
                            </div>
                            
                            <div class="col-xs-6" data-bind="visible: showControlIFBOrC ">           
                                <div class="form-group">
                                    <label class="control-label"><span class="glyphicon glyphicon-list"></span> Vessel</label>
                                    <input type="text" class="form-control input" title="Vessel" data-bind="value: destino"/>
                                </div>
                            </div>
                            <div class="col-xs-6" data-bind="visible: showControlIFBOrC ">
                                <div class="form-group">
                                    <label class="control-label"><span class="glyphicon glyphicon-calendar"></span> Job Type</label>
                                    <input type="text" class="form-control input" title="Job Type" data-bind="value: sotypecode"/>
                                </div>
                            </div>
                            
                            <div class="col-xs-6" data-bind="visible: showControlIFBOrC ">           
                                <div class="form-group">
                                    <label class="control-label"><span class="glyphicon glyphicon-calendar"></span> Start Date</label>
                                    <input type="text" class="form-control input" title="Start Date" data-bind="value: prostartdt"/>
                                </div>
                            </div>
                            <div class="col-xs-6" data-bind="visible: showControlIFBOrC ">
                                <div class="form-group">
                                    <label class="control-label"><span class="glyphicon glyphicon-calendar"></span> End Date</label>
                                    <input type="text" class="form-control input" title="End Date" data-bind="value: proenddt"/>
                                </div>
                            </div>
                            
                            <div class="col-xs-12" data-bind="visible: showControlIFBOrC ">
                                <div class="form-group">
                                    <label class="control-label"><span class="glyphicon glyphicon-list"></span> Description</label>
                                    <input type="text" class="form-control input" title="Description" data-bind="value: jobdescrip"/>
                                </div>
                            </div>
                            
                            <div class="col-xs-6" data-bind="visible: showControlIFBOrC ">           
                                <div class="form-group">
                                    <label class="control-label"><span class="glyphicon glyphicon-list"></span> Material Status</label>
                                    <input type="text" class="form-control input" title="Material Status" data-bind="value: mtrlstatus"/>
                                </div>
                            </div>
                            <div class="col-xs-6" data-bind="visible: showControlIFBOrC ">
                                <div class="form-group">
                                    <label class="control-label"><span class="glyphicon glyphicon-calendar"></span> Status</label>
                                    <input type="text" class="form-control input" title="Status" data-bind="value: jobstatus"/>
                                </div>
                            </div>
                            
                            <div class="col-xs-6" data-bind="visible: showControlIFBOrC ">           
                                <div class="form-group">
                                    <label class="control-label"><span class="glyphicon glyphicon-list"></span> Project Manager 1</label>
                                    <input type="text" class="form-control input" title="Project Manager 1" data-bind="value: technam1"/>
                                </div>
                            </div>
                            <div class="col-xs-6" data-bind="visible: showControlIFBOrC ">
                                <div class="form-group">
                                    <label class="control-label"><span class="glyphicon glyphicon-list"></span> Project Manager 2</label>
                                    <input type="text" class="form-control input" title="Project Manager 2" data-bind="value: technam2"/>
                                </div>
                            </div>
                            
                            <div class="col-xs-6" data-bind="visible: showControlIFBOrC ">
                                <div class="form-group">
                                    <label class="control-label"><span class="glyphicon glyphicon-list"></span> Quote No</label>
                                    <input type="text" class="form-control input" title="Quote No" data-bind="value: qutno"/>
                                </div>
                            </div>
                            <div class="col-xs-6" data-bind="visible: showControlIFBOrC ">
                                <div class="form-group">
                                    <label class="control-label"><span class="glyphicon glyphicon-list"></span> Cost Center</label>
                                    <input type="text" class="form-control input" title="Cost Center" data-bind="value: cstctid"/>
                                </div>
                            </div>
                            
                            <div class="form-group col-xs-12">
                                <label class="control-label"><span class="glyphicon glyphicon-map-marker"></span> Project Location</label>
                                <input type="text" class="form-control input" data-bind="value: projectLocation"/>
                            </div>
                        </div>
                    </div>
                </div><!-- /.panel [SO Data] -->
                
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <span class="panel-title">Contact</span>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="form-group col-xs-6">
                                <label class="control-label"><span class="glyphicon glyphicon-list-alt"></span> Cust ID</label>
                                <input type="text" class="form-control input" data-bind="value: custno"/>
                            </div>
                            <div class="form-group col-xs-6">
                                <label class="control-label"><span class="glyphicon glyphicon-user"></span> Name</label>
                                <input type="text" class="form-control input" data-bind="value: companyName"/>
                            </div>
                        </div>
                        
                            <div class="form-group">
                                <label class="control-label"><span class="glyphicon glyphicon-map-marker"></span> Address</label>
                                <input type="text" class="form-control input" data-bind="value: address"/>
                            </div>
                        
                        <div class="row">
                            <div class="form-group col-xs-5">
                                <label class="control-label"><span class="glyphicon glyphicon-map-marker"></span> City</label>
                                <input type="text" class="form-control input" data-bind="value: city"/>
                            </div>                        
                            <div class="form-group col-xs-2">
                                <label class="control-label"><span class="glyphicon glyphicon-map-marker"></span> State</label>
                                <input type="text" class="form-control input" data-bind="value: state"/>
                            </div>  
                            <div class="form-group col-xs-5">
                                <label class="control-label"><span class="glyphicon glyphicon-globe"></span> Country</label>
                                <input type="text" class="form-control input"/>
                            </div>
                        </div>
                        
                        <div class="row">                            
                            <div class="form-group col-xs-6">
                                <label class="control-label"><span class="glyphicon glyphicon-briefcase"></span> Zip</label>
                                <input type="text" class="form-control input" data-bind="value: zip"/>
                            </div>
                            <div class="form-group col-xs-6">
                                <label class="control-label"><span class="glyphicon glyphicon-globe"></span> Territory</label>
                                <input type="text" class="form-control input"/>
                            </div>
                        </div>
                        
                        <div class="form-group ">
                            <label class="control-label"><span class="glyphicon glyphicon-phone"></span> Phones</label>
                            <div class="input-prepend input-group" title="Phones">
                                <input type="text" class="form-control input" data-bind="value: phone"/>
                                <span class="input-group-btn">
                                    <button type="button" class="btn btn-default glyphicon-action-button" title="Add another phone number"><span class="glyphicon glyphicon-plus-sign"></span></button>
                                </span>
                            </div>
                        </div>
                        
                    </div>
                </div>
                
            </div><!-- /.col-xs-8 -->
            <div class="col-xs-4">
                <div class="form-group">
                    <a id="salesOrderClose" class="btn btn-default btn-block btn-lg"  title="Close"><span class="glyphicon glyphicon-remove"></span></a>
                </div>
                <div class="form-group">
                    <a id="btnOk" class="btn btn-default btn-block btn-lg" href="#" title="Ok"><span class="glyphicon glyphicon-ok"></span></a>
                </div>
                
                <div class="panel panel-default" data-bind="visible: showControlIfNotC() ">
                    <div class="panel-body">
                        <div class="form-group" data-bind="visible: showControlIfNotC() ">
                            <label class="control-label"><span class="glyphicon glyphicon-briefcase"></span> SubTotal</label>
                            <input type="text" class="form-control input" data-bind="value: subtotal"/>
                        </div>
                        
                        <div class="form-group" data-bind="visible: showControlIfNotC() ">
                            <label class="control-label"><span class="glyphicon glyphicon-briefcase"></span> Discount</label>
                            <input type="text" class="form-control input" data-bind="value: discount"/>
                            <!--<input type="text" class="form-control input"/>-->
                        </div>
                        
                        <div class="form-group" data-bind="visible: showControlIfNotC() ">
                            <label class="control-label"><span class="glyphicon glyphicon-tasks"></span> Tax</label>
            <!--                <select class="form-control input"/>
                            <input type="text" class="form-control input"/>-->
                            <input type="text" class="form-control input" data-bind="value: tax"/>
                        </div>
                        <div class="form-group" data-bind="visible: showControlIfNotC() ">
                            <label class="control-label"><span class="glyphicon glyphicon-briefcase"></span> Fright/Ins</label>
            <!--                <input type="text" class="form-control input"/>-->
                            <input type="text" class="form-control input" data-bind="value: shipping"/>
                        </div>
                        
                        <div class="form-group" data-bind="visible: showControlIfNotC() ">
                            <label class="control-label"><span class="glyphicon glyphicon-briefcase"></span> Total</label>
                            <input type="text" class="form-control input" data-bind="value: total"/>
                        </div>                     
                        
                    </div>
                </div><!-- /#Totals Panel -->
                                
                <div class="form-group col-xs-12">
                    <label class="control-label"><span class="glyphicon glyphicon-book"></span> Notes</label>
                     <!-- <input type="text" class="form-control input" data-bind="value: notes"/>-->

                    <div class="input-prepend input-group" title="Notes">
                        <input type="text" class="form-control input" data-bind="value: notes"/>
<!--                        <textarea class="form-control input" data-bind="value: notes">
                            
                        </textarea>-->
                        <span class="input-group-btn">
                            <button type="button" class="btn btn-default glyphicon-action-button" title="Edit notes" data-bind="click: onShowNotesModal "><span class="glyphicon glyphicon-book"></span></button><!--
                        </span>-->
                    </div>
                    <!--<button type="button" class="btn btn-default glyphicon-action-button" title="Edit notes" data-bind="click: onShowNotesModal "><span class="glyphicon glyphicon-book"></span></button>-->
                        
                </div>
                
            </div>
        </div>
        
        <table class="table table-striped table-condensed table-hover">
            <colgroup>
                <col class="col-1">
                <col class="col-2">
                <col class="col-3">
                <col class="col-4">
                <col class="col-5">
                <col class="col-6">
                <col class="col-7">
                <col class="col-8">
                <col class="col-9" data-bind="visible: showControlIfNotC() ">
                <col class="col-10" data-bind="visible: showControlIfNotC() ">
            </colgroup>
            <thead>
                <tr>
                    <th class="th-itemno">No.</th>
                    <th class="th-qty-left">Cm</th>
                    <th class="th-qty-recv">Item No.</th>
                    <th class="th-binloc">Whs</th>
                    <th class="th-binloc">Description</th>
                    <th class="th-binloc">Unit</th>
                    <th class="th-binloc">Qty Ordered</th>
                    <th class="th-binloc">Qty to Ship</th>
                    <th class="th-binloc" data-bind="visible: showControlIfNotC() ">Unit Price</th>
                    <th class="th-binloc" data-bind="visible: showControlIfNotC() ">Ext Price</th>
                </tr>
            </thead>
            <tfoot>
                <?php //echo $Pager->getPagerControl(); ?>
            </tfoot>
            <tbody data-bind="foreach: items">
                <tr>
                    <td class="item-field"><a href="#" data-bind="text: itmcount"> <?php //echo $item->getItmcount()   ?></a></td>                    
                    <td class="item-field"></td>
                    <td class="item-field" data-bind="text: itemno"><?php //echo $item->getItemno()   ?></td>
                    <td class="item-field" data-bind="text: itmwhs"><?php //echo $item->getItmwhs()   ?></td>
                    <td class="item-field" data-bind="text: descrip"><?php //echo $item->getDescrip()   ?></td>
                    <td class="item-field" data-bind="text: unit"><?php //echo $item->getUnit()   ?></td>
                    <td class="item-field" data-bind="text: qtyord"><?php //echo $item->getQtyord()   ?></td>
                    <td class="item-field" data-bind="text: qtyshp"><?php //echo $item->getQtyshp()   ?></td>
                    <td class="item-field" data-bind="text: unitprice, visible: $root.showControlIfNotC"><?php //echo $item->getUnitprice()   ?></td>
                    <td class="item-field" data-bind="text: extprice, visible: $root.showControlIfNotC"><?php //echo $item->getExtprice()   ?></td>
                </tr>
            </tbody>
        </table>
        
    </div><!-- /#salesOrder.container -->
    
    <div class="modal modal-input fade" id="salesOrderForm_modal_saveNotes">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Notes</h4>
                </div>
                <div class="modal-body row">
                    <div class="form-group col-xs-12">
                        <textarea id="notesSaveModalnotes" class="form-control"  rows="10" style="max-width: 558px;" placeholder="Write notes here" data-bind="value: notes"></textarea>
                        <!--<input type="text" class="form-control" value="" data-bind="value: notes"  maxlength="20" placeholder="Write notes here" />-->
                    </div>
                </div><!-- /.modal-body -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" data-bind="click: onSaveNotesModal">Save Notes</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    
</div><!-- /#kb-view-salesorder -->