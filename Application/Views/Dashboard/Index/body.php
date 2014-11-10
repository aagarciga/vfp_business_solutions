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
                <img src="<?php echo $View->ImagesContext("dashboard/olimpus-imagotype-small.png") ?>"/>
                 Dashboard
            </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span> <?php echo $UserName ?> <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="<?php echo $View->Href("Main", "Index") ?>" class="main active">
                                <span class="glyphicon glyphicon-home"></span> Main</a></li>
                        <li><a href="<?php echo $View->Href("Dashboard", "Index") ?>" class="exit">
                                <span class="glyphicon glyphicon-th"></span> Dashboard</a></li>
                        <li><a href="<?php echo $View->Href("User", "Signout") ?>" class="exit">
                                <span class="glyphicon glyphicon-off"></span> Exit</a></li>

                    </ul>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </nav>

    <div class="panel panel-default">
        <!-- Default panel contents -->
        <div class="panel-heading">Projects <span class="badge"><?php echo $Pager->getItemsCount(); ?> </span> 

            <a href="#" id="dashboard-panel-togle-visibility-button" class="panel-togle-visibility-button pull-right" title="Show/Hide Filter"><span class="glyphicon glyphicon-eye-open"></span></a>
            
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
            <form id="filterForm" class="form-inline" role="form">

                <div  class="btn-group filter-button left">
                    <button id="filterButton" type="button" class="btn btn-primary">Filter</button>
                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                        <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu" role="menu">
                        <li role="presentation" class="dropdown-header">By</li>
                        <li><a href="#" class="filter-field" data-field="ordnum" data-field-type="text">Sales Order</a></li>
                        <li><a href="#" class="filter-field" data-field="ponum" data-field-type="text">Purchase Order</a></li>
                        <li><a href="#" class="filter-field" data-field="company" data-field-type="text">Company</a></li>
                        <li><a href="#" class="filter-field" data-field="destino" data-field-type="text">Vessel</a></li>
                        <li><a href="#" class="filter-field" data-field="ProStartDT" data-field-type="date">Start Date</a></li>
                        <li><a href="#" class="filter-field" data-field="ProEndDT" data-field-type="date">End Date</a></li>
                        <li><a href="#" class="filter-field" data-field="sotype" data-field-type="text">Job Type</a></li>
                        <li><a href="#" class="filter-field" data-field="MTRLSTATUS" data-field-type="text">Material Status</a></li>
                        <li><a href="#" class="filter-field" data-field="JOBSTATUS" data-field-type="text">Status</a></li>
                        <li><a href="#" class="filter-field" data-field="TECHNAM1" data-field-type="text">Project Manager 1</a></li>
                        <li><a href="#" class="filter-field" data-field="TECHNAM2" data-field-type="text">Project Manager 2</a></li>
                        <li><a href="#" class="filter-field" data-field="podate" data-field-type="date">Create Date</a></li>
                        <li><a href="#" class="filter-field" data-field="qutno" data-field-type="text">Quote No</a></li>
                        <li><a href="#" class="filter-field" data-field="Cstctid" data-field-type="text">Cost Center</a></li>
                        <li><a href="#" class="filter-field" data-field="" >Has Attached Files</a></li>
                    </ul>
                </div>
            </form>
            
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
                            <th>Sales Order</th>
                            <th>Purchase Order</th>
                            <th>Company</th>
                            <th>Vessel</th>
                            <th>Start</th>
                            <th>End</th>
                            <th>Job Type</th>
                            <th>Description</th>
                            <th>Material Status</th>
                            <th>Status</th>
                            <th>Project Manager 1</th>
                            <th>Project Manager 2</th>
                            <th>Create</th>
                            <th>Quote No</th>
                            <th>Cost Center</th>
                            <th>Attached Files</th>                               
                        </tr>
                    </thead>
                    <body>
                        <?php foreach ($DashboardItems as $item): ?>
                        <tr>
                            <td class="item-field"><a href="#"><?php echo $item->getOrdnum() ?></a></td>
                            <td class="item-field"><?php echo $item->getPonum() ?></td>
                            <td class="item-field"><?php echo $item->getCompany() ?></td>
                            <td class="item-field"><?php echo $item->getDestino() ?></td>
                            <td class="item-field"><?php echo $item->getProStartDT() ?></td>
                            <td class="item-field"><?php echo $item->getProEndDT() ?></td>
                            <td class="item-field"><?php echo $item->getSotypecode() ?></td>
                            <td class="item-field"><?php echo $item->getJobDescrip() ?></td>
                            <td class="item-field">
                                <select class="form-control update-dropdown material-status" data-ordnum="<?php echo $item->getOrdnum() ?>">
                                    <?php foreach ($MaterialStatusItems as $msItem): ?>
                                        <option <?php echo ($item->getMtrlstatus() !== $msItem->getEdistatid()) ? '' : 'selected="selected"' ?>  value="<?php echo $msItem->getEdistatid() ?>" ><?php echo $msItem->getDescrip() ?></option>
                                    <?php endforeach ?> 
                                </select>
                            </td>
                            <td class="item-field">
                                <select class="form-control  update-dropdown job-status" data-ordnum="<?php echo $item->getOrdnum() ?>">
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
                            <td class="item-action item-files"><a href="#" class="btn-files-dialog"><span class="glyphicon glyphicon-folder-close"></span></a></td>
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
</div><!-- /.container -->


<div class="modal fade" id="files-modal">
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
                        <button type="button" class="btn btn-default btn-sm" onclick="App.jsTreeInstance.Create();"><i class="glyphicon glyphicon-asterisk"></i> Create</button>
                        <button type="button" class="btn btn-default btn-sm" onclick="App.jsTreeInstance.Rename();"><i class="glyphicon glyphicon-pencil"></i> Rename</button>
                        <button type="button" class="btn btn-default btn-sm" onclick="App.jsTreeInstance.Delete();"><i class="glyphicon glyphicon-remove"></i> Delete</button>
                    </div>
                    <div id="jstree">
                    </div>
                </div>
                <form id="filesModalDropzone" action="<?php echo $View->Href('Dashboard', 'UploadFile') ?>" class="dropzone col-xs-12 col-md-7 col-lg-8">
                    <div class="fallback">
                        <input name="file" type="file" multiple />
                    </div>
                </form><!-- /.form #filesModalDropzone -->
            </div><!-- /.modal-body -->
            <div class="modal-footer">                
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>                
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

