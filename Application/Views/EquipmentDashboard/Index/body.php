<?php
/**
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
                Equipment Dashboard
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
                            <li><a href="#" class="filter-field" data-field="ordnum" data-field-type="text">Work Order</a></li>
                            <li><a href="#" class="filter-field" data-field="equipid" data-field-type="text">Id</a></li>
                            <li><a href="#" class="filter-field" data-field="itemno" data-field-type="text">Part No.</a></li>
                            <li><a href="#" class="filter-field" data-field="model" data-field-type="text">Model</a></li>
                            <li><a href="#" class="filter-field" data-field="serialno" data-field-type="text">Serial No.</a></li>
                            <li><a href="#" class="filter-field" data-field="make" data-field-type="text">Make</a></li>
                            <li><a href="#" class="filter-field" data-field="installdte" data-field-type="date">Date Out</a></li>
                            <li><a href="#" class="filter-field" data-field="expdtein" data-field-type="date">Expected date In</a></li>
                            <li><a href="#" class="filter-field" data-field="daterec" data-field-type="date">Date Actually Received</a></li>
                            <li><a href="#" class="filter-field" data-field="order" data-field-type="text">Order No</a></li>
                            <li><a href="#" class="filter-field" data-field="status" data-field-type="text">Status</a></li>
                            <li><a href="#" class="filter-field" data-field="toolboxid" data-field-type="text">Tool Box</a></li>
                            <li><a href="#" class="filter-field" data-field="notes" data-field-type="text">Notes</a></li>
                            <li><a href="#" class="filter-field" data-field="picture_fi" data-field-type="text">Images</a></li>
                        </ul>
                    </div>
                </div>
            </div>


            <div class="panel-table">
                <table class="table table-striped" id="EquipmentDashboardTable">
                    <colgroup>
                        <col class="col-ordnum"/>
                        <col class="col-equipid"/>
                        <col class="col-itemno"/>
                        <col class="col-model"/>
                        <col class="col-serialno"/>
                        <col class="col-make"/>
                        <col class="col-installdte"/>
                        <col class="col-expdtein"/>
                        <col class="col-daterec"/>
                        <col class="col-order"/>
                        <col class="col-status"/>
                        <col class="col-toolboxid"/>
                        <col class="col-notes"/>
                        <col class="col-picture_fi"/>
                    </colgroup>
                    <thead>
                    <tr>
                        <th>Work Order <button data-field="ordnum" class="btn-table-sort"></button></th>
                        <th>Id <button data-field="equipid" class="btn-table-sort"></button></th>
                        <th>Part No. <button data-field="itemno" class="btn-table-sort"></button></th>
                        <th>Model <button data-field="model" class="btn-table-sort"></button></th>
                        <th>Serial No. <button data-field="serialno" class="btn-table-sort"></button></th>
                        <th>Make <button data-field="make" class="btn-table-sort"></button></th>
                        <th>Date Out <button data-field="installdte" class="btn-table-sort"></button></th>
                        <th>Expected date In <button data-field="expdtein" class="btn-table-sort"></button></th>
                        <th>Date Actually Received <button data-field="daterec" class="btn-table-sort"></button></th>
                        <th>Order no <button data-field="order" class="btn-table-sort"></button></th>
                        <th>Status <button data-field="status" class="btn-table-sort"></button></th>
                        <th>Tool Box <button data-field="toolboxid" class="btn-table-sort"></button></th>
                        <th>Notes <button data-field="notes" class="btn-table-sort"></button></th>
                        <th>Image <button data-field="picture_fi" class="btn-table-sort"></button></th>
                    </tr>
                    </thead>
                    <body>
                    <?php foreach ($Items as $item): ?>
                        <tr>
                            <td class="item-field"><?php echo $item->getOrdnum() ?></td>
                            <td class="item-field"><?php echo $item->getEquipid() ?></td>
                            <td class="item-field"><?php echo $item->getItemno() ?></td>
                            <td class="item-field"><?php echo $item->getDescrip() ?></td>
                            <td class="item-field"><?php echo $item->getSerialno() ?></td>
                            <td class="item-field"><?php echo $item->getMake() ?></td>
                            <td class="item-field"><?php echo $item->getModel() ?></td>
                            <td class="item-field"><?php echo $item->getSerialno() ?></td>
                            <td class="item-field"><?php echo $item->getVoltage() ?></td>
                            <td class="item-field"><?php echo $item->getEquipType() ?></td>
                            <td class="item-field"><?php echo $item->getInstalldte() ?></td>
                            <td class="item-field"><?php echo $item->getExpdtein() ?></td>
                            <td class="item-field"><?php echo $item->getDaterec() ?></td>
                            <td class="item-field"><?php echo $item->getStatus() ?></td>
                            <td class="item-field"><?php echo $item->getNotes() ?></td>
                            <td class="item-field"><?php echo $item->getPictureFi() ?></td>

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
