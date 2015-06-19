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
                 Quote Dashboard
            </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span> <?php echo $UserName ?> <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <?php if ($FullFeatures === true):?>
                        <li><a href="<?php echo $View->Href("Main", "Index") ?>" class="main active">
                                <span class="glyphicon glyphicon-home"></span> Main</a></li>
                        <?php endif ?>
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
<!--            <div id="filterForm" class="form-inline" role="form">   
                <div id="dynamicFilter_filterFieldsContainer">
                    
                </div>
                <div  class="btn-group filter-button left">
                    <button id="dynamicFilter_btnToggleVisibility"type="button" class="btn btn-default disabled">Hide</button>
                    <button id="dynamicFilter_btnReset"type="button" class="btn btn-default disabled">Reset</button>
                    
                    <div class="btn-group">
                        <button id="dynamicFilter_btnSave" type="button" class="btn btn-success disabled">Save</button>
                        <?php //if(count($SavedUserFilters)):?>
                        <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown">
                            <span class="caret"></span>
                        </button>
                        <ul id="dynamicFilter_drpSavedFilters" class="dropdown-menu" role="menu">
                            <li role="presentation" class="dropdown-header">Load Saved Filter</li>
                            <?php //foreach ($SavedUserFilters as $filter): ?>
                            <li><a href="#" class="saved-filter-list-item" data-filterid="<?php //echo $filter->getFilterid() ?>"><?php //echo $filter->getExportid() ?></a><button type="button" class="close" aria-hidden="true">&times;</button></li>
                            <?php //endforeach ?>                                
                        </ul>
                        <?php //endif ?>
                    </div> 
                    
                    <div class="btn-group">
                        <button id="dynamicFilter_btnFilter" type="button" class="btn btn-primary disabled">Filter</button>                    
                        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                            <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu" role="menu">
                            <li role="presentation" class="dropdown-header">By</li>
                            <li><a href="#" class="filter-field" data-field="ordnum" data-field-type="text">Sales Order</a></li>
                            <li><a href="#" class="filter-field" data-field="ponum" data-field-type="text">Purchase Order</a></li>
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
                                                    <li><a href="#" class="filter-field" data-field="" >Has Attached Files</a></li>
                        </ul>
                    </div>
                </div>
                    
                
            </div>-->
            
            
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
                            <th>Create <button data-field="qutdate" class="btn-table-sort"></button></th>
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
                            <!--<td class="item-field"><?php echo $item->getStatus() ?></td>-->
                            <td class="item-field">
                                <select class="form-control update-dropdown status select2-nosearch" data-qutno="<?php echo $item->getQutno() ?>">
                                    <?php foreach ($Status as $index => $value): ?>
                                        <option <?php echo ($index != $item->getStatus()) ? '' : 'selected="selected"' ?>  value="<?php echo $index ?>" ><?php echo $value ?></option>
                                    <?php endforeach ?> 
                                </select>
                            </td>
                            <td class="item-field"><?php echo $item->getQutdate() ?></td>
                            <td class="item-field"><?php echo $item->getOrdnum() ?></td>
                            <td class="item-field"><?php echo $item->getCstctid() ?></td>
                            
                            <td class="item-field"><?php echo $item->getProjectManager1() ?></td>
                            <td class="item-field"><?php echo $item->getProjectManager2() ?></td>
                            
                            <td class="item-action item-files"><a href="#" class="btn-files-dialog" data-ordnum="<?php echo $item->getQutno() ?>"><span class="glyphicon glyphicon-folder-close"></span></a></td>
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
    
    <?php //$View->Control('SalesOrder'); ?>
</div><!-- /.container -->
