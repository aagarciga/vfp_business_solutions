<div id="kb-view-vessel">
    <div id="vesselForm" class="container">
        <div class="row">
            <div class="feedback alert alert-info">Vessel Maintenance</div>
        </div>
        <div class="row">
            <div class="col-xs-8">
                <div class="row">
                    <div class="col-xs-12">           
                        <div class="form-group">
                            <label class="control-label"><span class="glyphicon glyphicon-list"></span> Vessel ID</label>
                            <input type="text" class="form-control input" title="Vessel ID" data-bind="value: vesselid" disabled="disabled"/>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="form-group">
                            <label class="control-label"><span class="glyphicon glyphicon-calendar"></span> Description</label>
                            <input type="text" class="form-control input" data-bind="value: descrip"/>
                        </div>
                    </div>
                </div>
                
            </div><!-- /.col-xs-8 -->
            <div class="col-xs-4">
                <div class="form-group">
                    <a id="vesselForm_btnClose" class="btn btn-default btn-block btn-lg"  title="Close"><span class="glyphicon glyphicon-remove"></span></a>
                </div>
                <div class="form-group">
                    <a id="vesselForm_btnOk" class="btn btn-default btn-block btn-lg" href="#" title="Ok"><span class="glyphicon glyphicon-ok"></span></a>
                </div>
            </div>
            
            <div class="col-xs-12">
                    <div class="form-group">
                        <label class="control-label"><span class="glyphicon glyphicon-list"></span> Ship Class</label>
                        <input type="text" class="form-control input" title="Ship Class" data-bind="value: shipclass"/>
                    </div>
                
                    <div class="form-group">
                        <label class="control-label"><span class="glyphicon glyphicon-list"></span> Penetration Type</label>
                        <input type="text" class="form-control input" title="Penetration Type" data-bind="value: pentype"/>
                    </div>
                
                    <div class="form-group">
                        <label class="control-label"><span class="glyphicon glyphicon-list"></span> Cement System</label>
                        <input type="text" class="form-control input" title="Cement System" data-bind="value: cementid"/>
                    </div>
                
                    <div class="form-group">
                        <label class="control-label"><span class="glyphicon glyphicon-list"></span> Fire Caulk</label>
                        <input type="text" class="form-control input" title="Cement System" data-bind="value: firecaulk"/>
                    </div>

                    <div class="form-group">
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
        
    </div><!-- /#salesOrder.container -->
    
    <div class="modal modal-input fade" id="vesselForm_modal_saveNotes">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Vessel Form Notes</h4>
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