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
                On Sales Order Dashboard
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

            <span>
                <?php echo $Itemno ?>
            </span>

            <div class="btn-group pull-right top-pager-itemmperpage-control">
                <button id="top-pager-itemmperpage-control-btn" type="button" class="btn btn-default dropdown-toggle"
                        data-toggle="dropdown">
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
                <div class="btn-group filter-button left">
                    <button id="dynamicFilter_btnToggleVisibility" type="button" class="btn btn-default disabled">Hide
                    </button>
                    <button id="dynamicFilter_btnReset" type="button" class="btn btn-default disabled">Reset</button>

                    <div class="btn-group">
                        <button id="dynamicFilter_btnSave" type="button" class="btn btn-success disabled">Save</button>
                        <?php if (count($SavedUserFilters)): ?>
                            <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown">
                                <span class="caret"></span>
                            </button>
                            <ul id="dynamicFilter_drpSavedFilters" class="dropdown-menu" role="menu">
                                <li role="presentation" class="dropdown-header">Load Saved Filter</li>
                                <?php foreach ($SavedUserFilters as $filter): ?>
                                    <li><a href="#" class="saved-filter-list-item"
                                           data-filterid="<?php echo $filter->getFilterid() ?>"><?php echo $filter->getExportid() ?></a>
                                        <button type="button" class="close" aria-hidden="true">&times;</button>
                                    </li>
                                <?php endforeach ?>
                            </ul>
                        <?php endif ?>
                    </div>

                    <div class="btn-group">
                        <button id="dynamicFilter_btnFilter" type="button" class="btn btn-primary disabled">Filter
                        </button>
                        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                            <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu" role="menu">
                            <li role="presentation" class="dropdown-header">By</li>
                            <li>
                                <a href="#" class="filter-field" data-field="ordnum" data-field-type="text">Order No.</a>
                            </li>
                            <li>
                                <a href="#" class="filter-field" data-field="ponum" data-field-type="text">Customer Purchase No.</a>
                            </li>
                            <li>
                                <a href="#" class="filter-field" data-field="custno" data-field-type="text">Customer No.</a>
                            </li>
                            <li>
                                <a href="#" class="filter-field" data-field="company" data-field-type="text">Customer Name</a>
                            </li>
                            <li>
                                <a href="#" class="filter-field" data-field="podate" data-field-type="text">Date</a>
                            </li>
                            <li>
                                <a href="#" class="filter-field" data-field="qtyord" data-field-type="text">Quantity Order</a>
                            </li>
                            <li><a href="#" class="filter-field" data-field="qtyshp" data-field-type="text">Quantity Shipped</a>
                            </li>
                            <li><a href="#" class="filter-field" data-field="bckord" data-field-type="text">Back Order</a>
                            </li>
                            <li>
                                <a href="#" class="filter-field" data-field="qtyshp0" data-field-type="text">Allocated</a>
                            </li>
                            <li>
                                <a href="#" class="filter-field" data-field="qtyshprel" data-field-type="text">Quantity Rel</a>
                            </li>
                            <li>
                                <a href="#" class="filter-field" data-field="shipdate" data-field-type="text">Ship Date</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>


            <div class="panel-table">
                <table class="table table-striped" id="OnSalesOrderDashboardTable">
                    <colgroup>
                        <col class="col-ordenno"/>
                        <col class="col-ponum"/>
                        <col class="col-custno"/>
                        <col class="col-company"/>
                        <col class="col-qtyord"/>
                        <col class="col-qtyshp"/>
                        <col class="col-bckord"/>
                        <col class="col-qtyshp0"/>
                        <col class="col-qtyshprel"/>
                        <col class="col-shipdate"/>
                    </colgroup>
                    <thead>
                    <tr>
                        <th>Order No.
                            <button data-field="ordnum" class="btn-table-sort"></button>
                        </th>
                        <th>Customer PO No.
                            <button data-field="ponum" class="btn-table-sort"></button>
                        </th>
                        <th>Customer No.
                            <button data-field="custno" class="btn-table-sort"></button>
                        </th>
                        <th>Customer Name
                            <button data-field="company" class="btn-table-sort"></button>
                        </th>
                        <th>Date
                            <button data-field="podate" class="btn-table-sort"></button>
                        </th>
                        <th>Quantity Order
                            <button data-field="qtyord" class="btn-table-sort"></button>
                        </th>
                        <th>Quantity Shipped
                            <button data-field="qtyshp" class="btn-table-sort"></button>
                        </th>
                        <th>Back Order
                            <button data-field="bckord" class="btn-table-sort"></button>
                        </th>
                        <th>Allocated
                            <button data-field="qtyshp0" class="btn-table-sort"></button>
                        </th>
                        <th>Quantity Rel
                            <button data-field="qtyshprel" class="btn-table-sort"></button>
                        </th>
                        <th>Ship Date
                            <button data-field="shipdate" class="btn-table-sort"></button>
                        </th>
                    </tr>
                    </thead>
                    <body>
                    <?php foreach ($Items as $item): ?>
                        <tr>
                            <td class="item-field"><?php echo $item->getOrdnum() ?></td>
                            <td class="item-field"><?php echo $item->getPonum() ?></td>
                            <td class="item-field"><?php echo $item->getCustno() ?></td>
                            <td class="item-field"><?php echo $item->getCompany() ?></td>
                            <td class="item-field"><?php echo $item->getPodate() ?></td>
                            <td class="item-field number"><?php echo $item->getQtyord() ?></td>
                            <td class="item-field number"><?php echo $item->getQtyshp() ?></td>
                            <td class="item-field number"><?php echo $item->getBckord() ?></td>
                            <td class="item-field number"><?php echo $item->getQtyshp0() ?></td>
                            <td class="item-field number"><?php echo $item->getQtyshprel() ?></td>
                            <td class="item-field"><?php echo $item->getShipdate() ?></td>
                        </tr>
                    <?php endforeach ?>
                    </body>
                </table>

            </div>
            <!-- /.panel-table -->
        </div>
        <div class="panel-footer">
            <div class="text-center pager-wrapper">
                <?php echo $Pager->getPagerControl(); ?>
            </div>
        </div>
    </div>
    <!-- /.panel -->

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
                    <input type="text" class="form-control" value="" id="dynamicFilter_modal_txtFilterName"
                           maxlength="20" placeholder="Filter Name"
                           data-content="Please enter a valid filter name. Only letters and numbers are permitted and can't be empty."
                           data-placement="top"/>
                </div>
            </div>
            <!-- /.modal-body -->
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" id="dynamicFilter_modal_btnSaveFilter">Save Filter
                </button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div><!-- /.modal -->
