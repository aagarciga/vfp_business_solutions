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
                 Quotes
            </a>
        </div>

        <?php $View->Control('MainMenu'); ?>
    </nav>

    <div class="panel panel-default">
        <!-- Default panel contents -->
        <div class="panel-heading">Projects <span id="panelHeadingItemsCount" class="badge"><?php echo $Pager->getItemsCount(); ?> </span> 
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

                            <li><a href="#" class="filter-field" data-field="qutno" data-field-type="text">Quote No.</a></li>
                            <li><a href="#" class="filter-field" data-field="projno" data-field-type="text">Purchase Order</a></li>
                            <li><a href="#" class="filter-field" data-field="company" data-field-type="text">Company</a></li>
                            <li><a href="#" class="filter-field" data-field="vesselid" data-field-type="dropdown" data-field-collection="vessel">Vessel</a></li>
                            <li><a href="#" class="filter-field" data-field="sotypecode" data-field-type="text">Job Type</a></li>
                            <li><a href="#" class="filter-field" data-field="jobdescrip" data-field-type="text">Description</a></li>
                            <li><a href="#" class="filter-field" data-field="status" data-field-value-type="numeric" data-field-type="dropdown" data-field-collection="status">Status</a></li>
                            <li><a href="#" class="filter-field" data-field="RFQReqDate" data-field-type="date">RFQ
                                    Deadline</a></li>
                            <li><a href="#" class="filter-field" data-field="qutdate" data-field-type="date">Create
                                    Date</a></li>
                            <li><a href="#" class="filter-field" data-field="ordnum" data-field-type="text">WO No.</a></li>
                            <li><a href="#" class="filter-field" data-field="cstctid" data-field-type="dropdown" data-field-collection="costCenter">Cost Center</a></li>
                            <li><a href="#" class="filter-field" data-field="techpm1" data-field-type="dropdown" data-field-collection="projectManager">Project Manager 1</a></li>
                            <li><a href="#" class="filter-field" data-field="techpm2" data-field-type="dropdown" data-field-collection="projectManager">Project Manager 2</a></li>

                        </ul>
                    </div>
                </div>
            </div>
            
            
            <div class="panel-table">
                <table class="table table-striped" id="quoteDashboardTable">
                    <colgroup>
                        <col class="col-qutno"/>
                        <col class="col-projno"/>
                        <col class="col-company"/>
                        <col class="col-vessel"/>
                        <col class="col-jobtype"/>
                        <col class="col-description"/>
                        <col class="col-status"/>
                        <col class="col-qutdate"/>
                        <col class="col-RFQReqDate"/>
                        <col class="col-ordnum"/>
                        <col class="col-cost-center"/>
                        <col class="col-project-manager-1"/>
                        <col class="col-project-manager-2"/>
                        <col class="col-attached-files"/>
                    </colgroup>
                    <thead>
                        <tr>
                            <th>Quote No. <button data-field="qutno" class="btn-table-sort"></button></th>
                            <th>Project No. <button data-field="projno" class="btn-table-sort"></button></th>
                            <th>Company <button data-field="company" class="btn-table-sort"></button></th>
                            <th>Vessel <button data-field="vesselid" class="btn-table-sort"></button></th>
                            <th>Job Type <button data-field="sotypecode" class="btn-table-sort"></button></th>
                            <th>Description <button data-field="jobdescrip" class="btn-table-sort"></button></th>
                            <th>Status <button data-field="status" class="btn-table-sort"></button></th>
                            <th>RFQ Deadline
                                <button data-field="RFQReqDate" class="btn-table-sort"></button>
                            </th>
                            <th>Create Date
                                <button data-field="qutdate" class="btn-table-sort"></button>
                            </th>
                            <th>WO No. <button data-field="ordnum" class="btn-table-sort"></button></th>
                            <th>Cost Center <button data-field="cstctid" class="btn-table-sort"></button></th>
                            <th>Project Manager 1 <button data-field="technam1" class="btn-table-sort"></button></th>
                            <th>Project Manager 2 <button data-field="technam2" class="btn-table-sort"></button></th>
                            <th>Attached Files</th>                               
                        </tr>
                    </thead>
                    <body>
                        <?php foreach ($Items as $item): ?>
                        <tr>
                            <td class="item-field"><a href="#" class="qutno-form-link"><?php echo $item->getQutno() ?></a></td>
                            <td class="item-field"><?php echo $item->getProjno() ?></td>
                            <td class="item-field"><?php echo $item->getCompany() ?></td>
                            <td class="item-field"><a href="#" class="vessel-form-link"><?php echo $item->getVesselid() ?></a></td>
                            <td class="item-field"><?php echo $item->getSotypecode() ?></td>
                            <td class="item-field"><?php echo $item->getJobdescrip() ?></td>
                            <!--<td class="item-field"><?php //echo $item->getStatus() ?></td>-->
                            <td class="item-field">
                                <select class="form-control update-dropdown status select2-nosearch" data-qutno="<?php echo $item->getQutno() ?>">
                                    <?php foreach ($Statuses as $index => $value): ?>
                                        <option <?php echo ($index != $item->getStatus()) ? '' : 'selected="selected"' ?>  value="<?php echo $index ?>" ><?php echo $value ?></option>
                                    <?php endforeach ?> 
                                </select>
                            </td>
                            <td class="item-field"><?php echo $item->getRFQReqDate() ?></td>
                            <td class="item-field"><?php echo $item->getQutdate() ?></td>
                            <td class="item-field"><?php echo $item->getOrdnum() ?></td>
                            <td class="item-field"><?php echo $item->getCstctid() ?></td>
                            
                            <td class="item-field"><?php echo $item->getProjectManager1() ?></td>
                            <td class="item-field"><?php echo $item->getProjectManager2() ?></td>
                            
                            <td class="item-action item-files"><a href="#" class="btn-files-dialog" data-qutno="<?php echo $item->getQutno() ?>"><span class="glyphicon glyphicon-folder-close"></span></a></td>
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
    
    <?php $View->Control('QuoteDetails'); ?>
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
                        <button type="button" class="btn btn-default btn-sm" onclick="App.QuoteDashboard.ProjectFiles.functions.createDir();"><i class="glyphicon glyphicon-asterisk"></i> Create</button>
                        <button type="button" class="btn btn-default btn-sm" onclick="App.QuoteDashboard.ProjectFiles.functions.renameDir();"><i class="glyphicon glyphicon-pencil"></i> Rename</button>
                        <button type="button" class="btn btn-default btn-sm" onclick="App.QuoteDashboard.ProjectFiles.functions.deleteDir();"><i class="glyphicon glyphicon-remove"></i> Delete</button>
                    </div>
                    <div id="project-files-jstree">

                    </div>
                </div>
                <form id="projectFilesDropzone" action="<?php echo $View->Href('FileManager', 'Upload') ?>" class="dropzone square  col-xs-12 col-md-7 col-lg-8">
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