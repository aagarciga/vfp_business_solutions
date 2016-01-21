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
                 Inventory
            </a>
        </div>

        <?php $View->Control('MainMenu'); ?>
    </nav>

    <div class="panel panel-default">
        <!-- Default panel contents -->
        <div class="panel-heading">Items <span id="panelHeadingItemsCount" class="badge"><?php echo $Pager->getItemsCount(); ?> </span>
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
                            <li><a href="#" class="filter-field" data-field="itemno" data-field-type="text">Item No.</a></li>
                            <li><a href="#" class="filter-field" data-field="itmwhs" data-field-type="text">Item Warehouse</a></li>
                            <li><a href="#" class="filter-field" data-field="descrip" data-field-type="text">Description</a></li>
                            <li><a href="#" class="filter-field" data-field="onhand" data-field-type="text" data-field-value-type="numeric">On Hand</a></li>
                            <li><a href="#" class="filter-field" data-field="onorder" data-field-type="text" data-field-value-type="numeric">On Purchase Order</a></li>
                            <li><a href="#" class="filter-field" data-field="committed" data-field-type="text" data-field-value-type="numeric">On Sales Order</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            
            
            <div class="panel-table">
                <table class="table responsive table-striped" id="inventoryDashboardTable">
                    <colgroup>
                        <col class="col-itemno"/>
                        <col class="col-itmwhs"/>
                        <col class="col-descrip"/>
                        <col class="col-onhand"/>
                        <col class="col-onorder"/>
                        <col class="col-committed"/>
                    </colgroup>
                    <thead>
                        <tr>
                            <th>Item No. <button data-field="itemno" class="btn-table-sort"></button></th>
                            <th>Item Warehouse. <button data-field="itmwhs" class="btn-table-sort"></button></th>
                            <th>Description <button data-field="descrip" class="btn-table-sort"></button></th>
                            <th>On Hand <button data-field="onhand" class="btn-table-sort"></button></th>
                            <th>On Purchase Order <button data-field="onorder" class="btn-table-sort"></button></th>
                            <th>On Sales Order <button data-field="committed" class="btn-table-sort"></button></th>
                        </tr>
                    </thead>
                    <body>
                        <?php foreach ($Items as $item): ?>
                        <tr>
                            <td class="item-field"><?php echo $item->getItemno()?></a></td>
                            <td class="item-field"><?php echo $item->getItmwhs() ?></td>
                            <td class="item-field"><?php echo $item->getDescrip() ?></td>
                            <td class="item-field number"><?php echo $item->getOnhand() ?></td>
                            <td class="item-field number"><a href="<?php echo $View->Href('OnPurchaseOrderDashboard', 'Index', array(
                                    'itemno' => base64_encode($item->getItemno()),
                                    'itemwhs' => base64_encode($item->getItmwhs())))?>" class="btn-onorder-form-link"><?php echo $item->getOnorder() ?></a></td>
                            <td class="item-field number"><a href="<?php echo $View->Href('OnSalesOrderDashboard', 'Index', array('itemno' => base64_encode($item->getItemno())))?>" class="btn-committed-form-link"><?php echo $item->getCommitted() ?></a></td>
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

<!--    Controls Here ...-->

</div><!-- /.container -->

<!--Modals Here ...-->

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