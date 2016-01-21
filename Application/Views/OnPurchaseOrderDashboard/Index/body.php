<?php
/**
 * Created by PhpStorm.
 * User: Victor
 * Date: 12/01/2016
 * Time: 15:01
 */
?>

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
                On Purchase Order Dashboard
            </a>
        </div>

        <?php $View->Control('MainMenu'); ?>
    </nav>

    <div class="panel panel-default">
        <!-- Default panel contents -->
        <div class="panel-heading">

                Projects
                <span id="panelHeadingItemsCount" class="badge">
                    <?php echo $Pager->getItemsCount(); ?>
                </span>
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
                            <li><a href="#" class="filter-field" data-field="pono" data-field-type="text">P.O No.</a></li>
                            <li><a href="#" class="filter-field" data-field="vendno" data-field-type="text">Vendor</a></li>
                            <li><a href="#" class="filter-field" data-field="podate" data-field-type="date">Po Date</a></li>
                            <li><a href="#" class="filter-field" data-field="qtyord" data-field-type="text">Qty Order</a></li>
                            <li><a href="#" class="filter-field" data-field="qtyrec" data-field-type="text">Qty Received</a></li>
                            <li><a href="#" class="filter-field" data-field="qtyleft" data-field-type="text">Qty Left</a></li>
                            <li><a href="#" class="filter-field" data-field="shipped" data-field-type="date">Ship Date</a></li>
                            <li><a href="#" class="filter-field" data-field="potype" data-field-type="text">Type</a></li>
                        </ul>
                    </div>
                </div>
            </div>


            <div class="panel-table">
                <table class="table table-striped" id="OnPurchaseOrderDashboardTable">
                    <colgroup>
                        <col class="col-pono"/>
                        <col class="col-vendno"/>
                        <col class="col-podate"/>
                        <col class="col-qtyord"/>
                        <col class="col-qtyrec"/>
                        <col class="col-qtyleft"/>
                        <col class="col-shipped"/>
                        <col class="col-potype"/>
                    </colgroup>
                    <thead>
                    <tr>
                        <th>P.O No. <button data-field="pono" class="btn-table-sort"></button></th>
                        <th>Vendor <button data-field="vendno" class="btn-table-sort"></button></th>
                        <th>Po Date <button data-field="podate" class="btn-table-sort"></button></th>
                        <th>Qty Order <button data-field="qtyord" class="btn-table-sort"></button></th>
                        <th>Qty Received <button data-field="qtyrec" class="btn-table-sort"></button></th>
                        <th>Qty Left <button data-field="qtyleft" class="btn-table-sort"></button></th>
                        <th>Ship Date <button data-field="shipped" class="btn-table-sort"></button></th>
                        <th>Type <button data-field="potype" class="btn-table-sort"></button></th>
                    </tr>
                    </thead>
                    <body>
                    <?php foreach ($Items as $item): ?>
                        <tr>
                            <td class="item-field"><?php echo $item->getPono() ?></td>
                            <td class="item-field"><?php echo $item->getVendno() ?></td>
                            <td class="item-field"><?php echo $item->getPodate() ?></td>
                            <td class="item-field number"><?php echo $item->getQtyord() ?></td>
                            <td class="item-field number"><?php echo $item->getQtyrec() ?></td>
                            <td class="item-field number"><?php echo $item->getQtyleft() ?></td>
                            <td class="item-field"><?php echo $item->getShipped() ?></td>
                            <td class="item-field"><?php echo $item->getPotype() ?></td>
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
