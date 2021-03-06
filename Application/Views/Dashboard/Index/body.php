<div class="container">

    <nav class="navbar navbar-default" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">
                <img src="<?php echo $View->UploadsContext($CompanyLogo) ?>"/>
                Work Order
            </a>
        </div>

        <?php $View->Control('MainMenu'); ?>
    </nav>

    <div class="panel panel-default">
        <!-- Default panel contents -->
        <div class="panel-heading">Projects <span id="panelHeadingItemsCount" class="badge"><?php echo $Pager->getItemsCount(); ?> </span> 

            <!--<a href="#" id="dashboard-panel-togle-visibility-button" class="panel-togle-visibility-button pull-right" title="Show/Hide Filter"><span class="glyphicon glyphicon-eye-open"></span></a>-->
            
            <div class="btn-group pull-right top-pager-itemmperpage-control">               
                <button id="top-pager-itemmperpage-control-btn" type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                    <span class="value"><?php echo $ItemPerPage ?></span>
                    <span class="caret"></span>
                </button>
                <ul class="dropdown-menu">
                    <li><a href="#">5</a></li>
                    <li><a href="#">10</a></li>
                    <li><a href="#">15</a></li>
                    <li><a href="#">20</a></li>
                    <li><a href="#">50</a></li>
                    <li><a href="#">100</a></li>
                </ul>
            </div>
            <span class="pull-right">paged by </span>
        </div>
        <div class="panel-body">
            <div id="filterForm" class="form-inline" role="form">   
                <div id="dynamicFilter_filterFieldsContainer">
                    
                </div>
                <div  class="btn-group filter-button left">
                    <button id="dynamicFilter_btnToggleVisibility"type="button" class="btn btn-default disabled">Hide</button>
                    <button id="dynamicFilter_btnReset"type="button" class="btn btn-default disabled">Reset</button>
                    
                    <div class="btn-group">
                        <button id="dynamicFilter_btnSave" type="button" class="btn btn-success disabled">Save</button>
                        <?php if(count($SavedUserFilters)):?>
                        <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown">
                            <span class="caret"></span>
                        </button>
                        <ul id="dynamicFilter_drpSavedFilters" class="dropdown-menu" role="menu">
                            <li role="presentation" class="dropdown-header">Load Saved Filter</li>
                            <?php foreach ($SavedUserFilters as $filter): ?>
                            <li><a href="#" class="saved-filter-list-item" data-filterid="<?php echo $filter->getFilterid() ?>"><?php echo $filter->getExportid() ?></a><button type="button" class="close" aria-hidden="true">&times;</button></li>
                            <?php endforeach ?>                                
                        </ul>
                        <?php endif ?>
                    </div> 
                    
                    <div class="btn-group">
                        <button id="dynamicFilter_btnFilter" type="button" class="btn btn-primary disabled">Filter</button>                    
                        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                            <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu" role="menu">
                            <li role="presentation" class="dropdown-header">By</li>
                            <li><a href="#" class="filter-field" data-field="ordnum" data-field-type="text">Work Order</a></li>
                            <li><a href="#" class="filter-field" data-field="ponum" data-field-type="text">Reference</a></li>
                            <li><a href="#" class="filter-field" data-field="company" data-field-type="text">Company</a></li>
                            <li><a href="#" class="filter-field" data-field="vesselid" data-field-type="dropdown" data-field-collection="vesselDictionary">Vessel</a></li>
                            <li><a href="#" class="filter-field" data-field="ProStartDT" data-field-type="date">Start Date</a></li>
                            <li><a href="#" class="filter-field" data-field="ProEndDT" data-field-type="date">End Date</a></li>
                            <li><a href="#" class="filter-field" data-field="sotypecode" data-field-type="dropdown" data-field-collection="jobTypeDictionary">Job Type</a></li>
                            <li><a href="#" class="filter-field" data-field="JobDescrip" data-field-type="text">Description</a></li>
                            <li><a href="#" class="filter-field" data-field="MTRLSTATUS" data-field-type="dropdown" data-field-collection="materialStatus">Material Status</a></li>
                            <li><a href="#" class="filter-field" data-field="JOBSTATUS" data-field-type="dropdown" data-field-collection="jobStatus">Status</a></li>
                            <li><a href="#" class="filter-field" data-field="TECHPM1" data-field-type="dropdown" data-field-collection="projectManagerDictionary">Project Manager 1</a></li>
                            <li><a href="#" class="filter-field" data-field="TECHPM2" data-field-type="dropdown" data-field-collection="projectManagerDictionary">Project Manager 2</a></li>
                            <li><a href="#" class="filter-field" data-field="podate" data-field-type="date">Create Date</a></li>
                            <li><a href="#" class="filter-field" data-field="qutno" data-field-type="text">Quote No</a></li>
                            <li><a href="#" class="filter-field" data-field="Cstctid" data-field-type="dropdown" data-field-collection="costCenterDictionary">Cost Center</a></li>
                            <!--                        <li><a href="#" class="filter-field" data-field="" >Has Attached Files</a></li>-->
                        </ul>
                    </div>
                </div>
                    
                
            </div>
            
            
            <div class="panel-table">
                <table class="table table-striped" id="dashboardTable">
                    <colgroup>
                        <col class="col-sales-order"/>
                        <col class="col-purchase-order"/>
                        <col class="col-company"/>
                        <col class="col-vessel"/>
                        <col class="col-start"/>
                        <col class="col-end"/>
                        <col class="col-job-type"/>
                        <col class="col-description"/>
                        <col class="col-material-status"/>
                        <col class="col-status"/>
                        <col class="col-project-manager-1"/>
                        <col class="col-project-manager-2"/>
                        <col class="col-create"/>
                        <col class="col-quote-no"/>
                        <col class="col-cost-center"/>
                        <col class="col-attached-files"/>
                    </colgroup>
                    <thead>
                        <tr>
                            <th>Work Order <button data-field="ordnum" class="btn-table-sort"></button></th>
                            <th>Reference <button data-field="ponum" class="btn-table-sort"></button></th>
                            <th>Company <button data-field="company" class="btn-table-sort"></button></th>
                            <th>Vessel <button data-field="vesselid" class="btn-table-sort"></button></th>
                            <th>Start<button data-field="ProStartDT" class="btn-table-sort"></button> </th>
                            <th>End <button data-field="ProEndDT" class="btn-table-sort"></button></th>
                            <th>Job Type <button data-field="sotypecode" class="btn-table-sort"></button></th>
                            <th>Description <button data-field="JobDescrip" class="btn-table-sort"></button></th>
                            <th>Material Status <button data-field="MTRLSTATUS" class="btn-table-sort"></button></th>
                            <th>Status <button data-field="JOBSTATUS" class="btn-table-sort"></button></th>
                            <th>Project Manager 1 <button data-field="TECHNAM1" class="btn-table-sort"></button></th>
                            <th>Project Manager 2 <button data-field="TECHNAM2" class="btn-table-sort"></button></th>
                            <th>Create <button data-field="podate" class="btn-table-sort"></button></th>
                            <th>Quote No <button data-field="qutno" class="btn-table-sort"></button></th>
                            <th>Cost Center <button data-field="Cstctid" class="btn-table-sort"></button></th>
                            <th>Attached Files</th>                               
                        </tr>
                    </thead>
                    <body>
                        <?php foreach ($DashboardItems as $item): ?>
                        <tr>
                            <td class="item-field"><a href="#" class="salesorder-form-link"><?php echo $item->getOrdnum() ?></a></td>
                            <td class="item-field"><?php echo $item->getPonum() ?></td>
                            <td class="item-field"><?php echo $item->getCompany() ?></td>
                            <td class="item-field"><a href="#" class="vessel-form-link"><?php echo $item->getVesselid() ?></a></td>
                            <td class="item-field"><?php echo $item->getProStartDT() ?></td>
                            <td class="item-field"><?php echo $item->getProEndDT() ?></td>
                            <td class="item-field"><?php echo $item->getSotypecode() ?></td>
                            <td class="item-field"><?php echo $item->getJobDescrip() ?></td>
                            <td class="item-field">
                                <select class="form-control update-dropdown material-status select2-nosearch" data-ordnum="<?php echo $item->getOrdnum() ?>">
                                    <option>Empty</option>
                                    <?php foreach ($MaterialStatusItems as $msItem): ?>
                                        <option <?php echo ($item->getMtrlstatus() !== $msItem->getEdistatid()) ? '' : 'selected="selected"' ?>  value="<?php echo $msItem->getEdistatid() ?>" ><?php echo $msItem->getDescrip() ?></option>
                                    <?php endforeach ?> 
                                </select>
                            </td>
                            <td class="item-field">
                                <select class="form-control update-dropdown job-status select2-nosearch" data-ordnum="<?php echo $item->getOrdnum() ?>">
                                    <option>Empty</option>
                                    <?php foreach ($JobStatusItems as $jobItem): ?>
                                        <option <?php echo ($item->getJobstatus() !== $jobItem->getEdistatid()) ? '' : 'selected="selected"' ?>  value="<?php echo $jobItem->getEdistatid() ?>" ><?php echo $jobItem->getDescrip() ?></option>
                                    <?php endforeach ?> 
                                </select>
                            </td>
                            <td class="item-field"><?php echo $item->getProjectManager1() ?></td>
                            <td class="item-field"><?php echo $item->getProjectManager2() ?></td>
                            <td class="item-field"><?php echo $item->getPodate() ?></td>
                            <td class="item-field"><?php echo $item->getQutno() ?></td>
                            <td class="item-field"><?php echo $item->getCstctid() ?></td>
                            <td class="item-action item-files"><a href="#" class="btn-files-dialog" data-ordnum="<?php echo $item->getOrdnum() ?>"><span class="glyphicon glyphicon-folder-close"></span></a></td>
                        </tr>
                    <?php endforeach ?>
                    </body>
                </table>

            </div><!-- /.panel-table -->
        </div>
        <div class="panel-footer">
            <div class="text-center pager-wrapper">
                <?php echo $Pager->getPagerControl(); ?>
             </div>
        </div>
    </div><!-- /.panel -->
    
    <?php $View->Control('SalesOrder'); ?>
    <?php $View->Control('VesselForm'); ?>
</div><!-- /.container -->

 


<div class="modal fade" id="project-files-modal">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Files</h4>
            </div>
            <div class="modal-body row">                
                <div class="col-xs-12 col-md-5 col-lg-4">
                    <div class="form-group">
                        <input type="text" class="form-control" value="" id="tree-search" placeholder="Search" />
                    </div>
                    <div class="form-group">
                        <button type="button" class="btn btn-default btn-sm" onclick="App.Dashboard.ProjectFiles.functions.createDir();"><i class="glyphicon glyphicon-asterisk"></i> Create</button>
                        <button type="button" class="btn btn-default btn-sm" onclick="App.Dashboard.ProjectFiles.functions.renameDir();"><i class="glyphicon glyphicon-pencil"></i> Rename</button>
                        <button type="button" class="btn btn-default btn-sm" onclick="App.Dashboard.ProjectFiles.functions.deleteDir();"><i class="glyphicon glyphicon-remove"></i> Delete</button>
                    </div>
                    <div id="project-files-jstree">
                    </div>
                </div>
                <form id="projectFilesDropzone" action="<?php echo $View->Href('Dashboard', 'UploadFile') ?>" class="dropzone square  col-xs-12 col-md-7 col-lg-8">
                    <span class="dz-message custom">Drop files to upload (or click)</span>
                    <div class="fallback">
                        <input name="file" type="file" multiple />
                    </div>
                </form><!-- /.form #project-files-dropzone -->
            </div><!-- /.modal-body -->
            <div class="modal-footer">                
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>                
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


<div class="modal modal-input fade" id="dynamicFilter_modal_saveFilter">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Filter Name</h4>
            </div>
            <div class="modal-body row">
                <div class="form-group col-xs-12">
                    <input type="text" class="form-control" value="" id="dynamicFilter_modal_txtFilterName" maxlength="20" placeholder="Filter Name" data-content="Please enter a valid filter name. Only letters and numbers are permitted and can't be empty." data-placement="top"/>
                </div>
            </div><!-- /.modal-body -->
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" id="dynamicFilter_modal_btnSaveFilter">Save Filter</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

