<div id="kb-view-quote-details">
    <div id="quoteDetails" class="container">
        <div class="row">
            <div class="feedback alert alert-info">Quote Details</div>
        </div>
        <div class="row">
            <div class="col-xs-8">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-xs-6">
                                <div class="form-group">
                                    <label class="control-label" for="qutno"><span class="glyphicon glyphicon-list"></span> Quote No</label>
                                    <input id="qutno" type="text" class="form-control input" title="Quote No" data-bind="value: qutno" disabled="disabled"/>
                                </div>
                            </div>
                            <div class="col-xs-6">
                                <div class="form-group">
                                    <label class="control-label" for="date"><span class="glyphicon glyphicon-calendar"></span> Date</label>
                                    <input id="date" type="text" class="form-control input daterangepicker-single-fix" data-bind="value: date" disabled="disabled"/>
                                </div>
                            </div>
                            <div class="col-xs-6">
                                <div class="form-group">
                                    <label class="control-label" for="ponum"><span class="glyphicon glyphicon-list"></span> Reference</label>
                                    <input id="ponum" type="text" class="form-control input" title="Reference" data-bind="value: ponum" disabled="disabled"/>
                                </div>
                            </div>
                            <div class="col-xs-6">
                                <div class="form-group">
                                    <label class="control-label" for="projno"><span class="glyphicon glyphicon-list"></span> Project No</label>
                                    <input id="projno" type="text" class="form-control input" title="Project No" data-bind="value: projno" disabled="disabled"/>
                                </div>
                            </div>



                            
                            <div class="col-xs-6">
                                <div class="form-group">
                                    <label class="control-label" for="destino"><span class="glyphicon glyphicon-list"></span> Vessel</label>
                                    <input id="destino" type="text" class="form-control input" title="Vessel" data-bind="value: destino" disabled="disabled"/>
                                </div>
                            </div>
                            <div class="col-xs-6">
                                <div class="form-group">
                                    <label class="control-label" for="sotypecode"><span class="glyphicon glyphicon-list"></span> Job Type</label>
                                    <input id="sotypecode" type="text" class="form-control input" title="Job Type" data-bind="value: sotypecode" disabled="disabled"/>
                                </div>
                            </div>

                            <div class="col-xs-6">
                                <div class="form-group">
                                    <label class="control-label" for="jobdescrip"><span class="glyphicon glyphicon-list"></span> Description</label>
                                    <input id="jobdescrip" type="text" class="form-control input" title="Description" data-bind="value: jobdescrip" disabled="disabled"/>
                                </div>
                            </div>

                            <div class="col-xs-6">
                                <div class="form-group">
                                    <label class="control-label" for="company"><span class="glyphicon glyphicon-globe"></span> Company</label>
                                    <input id="company" type="text" class="form-control input" title="Company" data-bind="value: company" disabled="disabled"/>
                                </div>
                            </div>

                            <div class="col-xs-6">
                                <div class="form-group">
                                    <label class="control-label" for="technam1"><span class="glyphicon glyphicon-user"></span> Project Manager 1</label>
                                    <input id="technam1" type="text" class="form-control input" title="Project Manager 1" data-bind="value: technam1" disabled="disabled"/>
                                </div>
                            </div>
                            <div class="col-xs-6">
                                <div class="form-group">
                                    <label class="control-label" for="technam2"><span class="glyphicon glyphicon-user"></span> Project Manager 2</label>
                                    <input id="technam2" type="text" class="form-control input" title="Project Manager 2" data-bind="value: technam2" disabled="disabled"/>
                                </div>
                            </div>

                            <div class="col-xs-6">
                                <div class="form-group">
                                    <label class="control-label"><span class="glyphicon glyphicon-log-list"></span> SO No.</label>
                                    <input type="text" class="form-control input" title="Sales Order" data-bind="value: ordnum" disabled="disabled"/>
                                </div>
                            </div>
                            <div class="col-xs-6">
                                <div class="form-group">
                                    <label class="control-label" for="cstctid"><span class="glyphicon glyphicon-list"></span> Cost Center</label>
                                    <input id="cstctid" type="text" class="form-control input" title="Cost Center" data-bind="value: cstctid" disabled="disabled"/>
                                </div>
                            </div>

                            <div class="col-xs-6">
                                <div class="form-group">
                                    <label class="control-label" for="status"><span class="glyphicon glyphicon-list"></span> Status</label>
                                    <input id="status" type="text" class="form-control input" title="Status" data-bind="value: status" disabled="disabled"/>
                                </div>
                            </div>
                            <div class="col-xs-6">
                                <div class="form-group">
                                    <label class="control-label" for="projectLocation"><span class="glyphicon glyphicon-map-marker"></span> Project Location</label>
                                    <input id="projectLocation" type="text" class="form-control input" data-bind="value: projectLocation" disabled="disabled"/>
                                </div>
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
                                <label class="control-label" for="custno"><span class="glyphicon glyphicon-list-alt"></span> Cust ID</label>
                                <input id="custno" type="text" class="form-control input" data-bind="value: custno" disabled="disabled"/>
                            </div>
                            <div class="form-group col-xs-6">
                                <label class="control-label" for="companyName"><span class="glyphicon glyphicon-user"></span> Name</label>
                                <input id="companyName" type="text" class="form-control input" data-bind="value: companyName" disabled="disabled"/>
                            </div>
                        </div>
                        
                            <div class="form-group">
                                <label class="control-label" for="address"><span class="glyphicon glyphicon-map-marker"></span> Address</label>
                                <input id="address" type="text" class="form-control input" data-bind="value: address" disabled="disabled"/>
                            </div>
                        
                        <div class="row">
                            <div class="form-group col-xs-4">
                                <label class="control-label" for="city"><span class="glyphicon glyphicon-map-marker"></span> City</label>
                                <input id="city" type="text" class="form-control input" data-bind="value: city" disabled="disabled"/>
                            </div>                        
                            <div class="form-group col-xs-4">
                                <label class="control-label" for="state"><span class="glyphicon glyphicon-map-marker"></span> State</label>
                                <input id="state" type="text" class="form-control input" data-bind="value: state" disabled="disabled"/>
                            </div>  
                            <div class="form-group col-xs-4">
                                <label class="control-label"><span class="glyphicon glyphicon-globe"></span> Country</label>
                                <input type="text" class="form-control input" disabled="disabled"/>
                            </div>
                        </div>
                        
                        <div class="row">                            
                            <div class="form-group col-xs-6">
                                <label class="control-label" for="zip"><span class="glyphicon glyphicon-map-marker"></span> Zip</label>
                                <input id="zip" type="text" class="form-control input" data-bind="value: zip" disabled="disabled"/>
                            </div>
                            <div class="form-group col-xs-6">
                                <label class="control-label"><span class="glyphicon glyphicon-globe"></span> Territory</label>
                                <input type="text" class="form-control input" disabled="disabled"/>
                            </div>
                        </div>
                        
                        <div class="form-group ">
                            <label class="control-label" for="phone"><span class="glyphicon glyphicon-phone"></span> Phones</label>
                            <div class="input-prepend input-group" title="Phones">
                                <input id="phone" type="text" class="form-control input" data-bind="value: phone" disabled="disabled"/>
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
                    <a id="quoteDetails_btnClose" class="btn btn-default btn-block btn-lg"  title="Close"><span class="glyphicon glyphicon-remove"></span></a>
                </div>
<!--                <div class="form-group">
                    <a id="btnOk" class="btn btn-default btn-block btn-lg" href="#" title="Ok"><span class="glyphicon glyphicon-ok"></span></a>
                </div>-->
                
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="form-group">
                            <label class="control-label" for="subtotal"><span class="glyphicon glyphicon-briefcase"></span> SubTotal</label>
                            <input id="subtotal" type="text" class="form-control input" data-bind="value: subtotal" disabled="disabled"/>
                        </div>
                        
                        <div class="form-group">
                            <label class="control-label" for="discount"><span class="glyphicon glyphicon-briefcase"></span> Discount</label>
                            <input id="discount" type="text" class="form-control input" data-bind="value: discount" disabled="disabled"/>
                            <!--<input type="text" class="form-control input"/>-->
                        </div>
                        
                        <div class="form-group">
                            <label class="control-label" for="tax"><span class="glyphicon glyphicon-briefcase"></span> Tax</label>
            <!--                <select class="form-control input"/>
                            <input type="text" class="form-control input"/>-->
                            <input id="tax" type="text" class="form-control input" data-bind="value: tax" disabled="disabled"/>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="shipping"><span class="glyphicon glyphicon-briefcase"></span> Freight/Ins</label>
            <!--                <input type="text" class="form-control input"/>-->
                            <input id="shipping" type="text" class="form-control input" data-bind="value: shipping" disabled="disabled"/>
                        </div>
                        
                        <div class="form-group">
                            <label class="control-label" for="total"><span class="glyphicon glyphicon-briefcase"></span> Total</label>
                            <input id="total" type="text" class="form-control input" data-bind="value: total" disabled="disabled"/>
                        </div>                     
                        
                    </div>
                </div><!-- /#Totals Panel -->
                                
                <div class="form-group col-xs-12">
                    <label class="control-label" for="notes"><span class="glyphicon glyphicon-book"></span> Notes</label>
                     <!-- <input type="text" class="form-control input" data-bind="value: notes"/>-->

                    <div class="input-prepend input-group" title="Notes">
                        <input id="notes" type="text" class="form-control input" data-bind="value: notes" disabled="disabled"/>
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
        
        <table class="table table-striped table-condensed table-hover" data-bind="visible: showTable()">
            <colgroup>
                <col>
                <col>
                <col>
                <col>
                <col>
                <col>
                <col>
                <col>
                <col>
                <col>
            </colgroup>
            <thead>
                <tr>
                    <th>Item Count</th>
<!--                    <th>Quote No</th>-->
                    <th>So No.</th>

                    <th>Item No.</th>
                    <th>Whs</th>
                    <th>Description</th>
                    <th>Qty Ordered</th>
                    <th>Qty to Ship</th>
                    <th>Unit Price</th>
                    <th>Ext Price</th>
                </tr>
            </thead>
            <tfoot>
                <?php //echo $Pager->getPagerControl(); ?>
            </tfoot>
            <tbody data-bind="foreach: items">
                <tr>
                    <td class="item-field" data-bind="text: itmcount"></td>
<!--                    <td class="item-field" data-bind="text: qutno"></td>-->
                    <td class="item-field" data-bind="text: ordnum"></td>

                    <td class="item-field" data-bind="text: itemno"></td>
                    <td class="item-field" data-bind="text: itmwhs"></td>
                    <td class="item-field" data-bind="text: descrip"></td>
                    <td class="item-field" data-bind="text: qtyord"></td>
                    <td class="item-field" data-bind="text: qtyshp"></td>
                    <td class="item-field" data-bind="text: unitprice"></td>
                    <td class="item-field" data-bind="text: extprice"></td>
                </tr>
            </tbody>
        </table>
        
    </div><!-- /#quoteDetails.container -->
    
    <div class="modal modal-input fade" id="quoteDetails_modal_saveNotes">
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
    </div><!-- /#quoteDetails_modal_saveNotes.modal -->
    
</div><!-- /#kb-view-quote-details -->