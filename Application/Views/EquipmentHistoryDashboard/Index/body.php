<!--Container begin-->
<div class="container dashboard-container equipment-history-dashboard">
    <!--    Navbar-->
    <nav class="navbar navbar-default" role="navigation">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse"
                    data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="#" class="navbar-brand">
                <img src="<?php echo $View->UploadsContext($CompanyLogo) ?>" alt="Logo">Equipment</a>
        </div>
        <?php $View->Control('MainMenu'); ?>
    </nav>
    <!--    End Navbar-->
    <!--    Main panel-->
    <div class="panel panel-default">
        <!--    Panel Heading-->
        <div class="panel-heading">
            <span class="panel-title"><?php echo $Caption; ?></span>
            <span class="items-counter badge"><?php echo $ItemCount; ?></span>

            <div class="btn-group dropdown items-per-page-selector">
                <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">
                    <span class="value"><?php echo $ItemsPerPage ?></span>
                    <span class="caret"></span>
                </button>
                <ul class="dropdown-menu">
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">5</a></li>
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">10</a></li>
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">15</a></li>
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">20</a></li>
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">50</a></li>
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">100</a></li>
                </ul>
            </div>
            <span>paged by</span>
        </div>
        <!--    End Panel heading-->
        <!--    Panel Body-->
        <div class="panel-body">
            <?php if ($ItemCount > 0): ?>
                <!--    Filter-->
                <div class="form-filter form-inline" role="form">
                    <div class="form-filter-container">

                    </div>
                    <div class="form-filter-actions btn-group">
                        <!--    Hide Button-->
                        <button class="btn btn-default form-filter-action form-filter-action-toggle-visibility disabled"
                                type="button">Hide
                        </button>
                        <!--    End Hide Button-->
                        <!--    Reset Button-->
                        <button class="btn btn-default form-filter-action form-filter-action-reset disabled"
                                type="button">Reset
                        </button>
                        <!--    End Reset Button-->
                        <!--    Save Button-->
                        <div class="btn-group">
                            <button class="btn btn-success form-filter-action form-filter-action-save disabled"
                                    type="button">Save
                            </button>
                            <?php if (count($SavedUserFilters)): ?>
                                <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown">
                                    <span class="caret"></span></button>
                                <ul class="dropdown-menu form-filter-saved-filters" role="menu">
                                    <li role="presentation" class="dropdown-header">Load Saved Filter</li>
                                    <?php foreach ($SavedUserFilters as $filter): ?>
                                        <li><a href="#" class="dropdown-item form-filter-saved-filters-item"
                                               data-filterid="<?php echo $filter->getFilterid() ?>"><?php echo $filter->getExportid() ?></a>
                                            <button type="button" class="close form-filter-saved-filters-item-delete" aria-hidden="true">&times;</button>
                                        </li>
                                    <?php endforeach ?>
                                </ul>
                            <?php endif ?>
                        </div>
                        <!--    End Save Button-->
                        <!--    Filter Button-->
                        <div class="btn-group">
                            <button type="button"
                                    class="btn btn-primary form-filter-action form-filter-action-filter disabled">Filter
                            </button>
                            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown"><span
                                    class="caret"></span></button>
                            <ul class="dropdown-menu form-filter-action-filter-by" role="menu">
                                <li role="presentation" class="dropdown-header">By</li>
                                <?php foreach ($EquipmentHistoryDashboardFieldsDefinition as $field => $fieldDefinition): ?>
                                    <?php if ($EquipmentHistoryDashboardViewModelName::isFilterAble($fieldDefinition)): ?>
                                        <li>
                                            <a href="#" class="filter-field" data-field="<?php echo $field ?>"
                                               data-field-type="<?php echo $EquipmentHistoryDashboardViewModelName::getJSTypeFor($fieldDefinition) ?>" <?php echo $EquipmentHistoryDashboardViewModelName::hasValues($fieldDefinition) ? 'data-field-collection="' . $field . '"' : '' ?> ><?php echo $EquipmentHistoryDashboardViewModelName::getDisplayNameFor($fieldDefinition) ?></a>
                                        </li>
                                    <?php endif ?>
                                <?php endforeach ?>
                            </ul>
                        </div>
                        <!--    End Filter Button-->
                    </div>
                </div>
                <!--    End Filter-->

                <!-- Item Selector Actions -->
                <div class="items-selector-actions-container btn-group">
                    <div class="dropdown btn-group items-selector-control">
                        <button class="btn btn-default btn-sm dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                            <span class="">Select</span>
                            <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                            <li><a href="#">All</a></li>
                            <li><a href="#">None</a></li>
                        </ul>
                    </div>
                    <button class="btn btn-danger btn-sm batch-action batch-action-delete disabled" title="Delete selected equipments" disabled="disabled">
                        <span class="glyphicon glyphicon-minus-sign" aria-hidden="true"></span>
                    </button>
                    <button class="btn btn-primary btn-sm batch-action batch-action-edit disabled" title="Edit selected equipments" disabled="disabled">
                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                    </button>
                </div>

                <!-- End Item Selector Actions -->

                <!--    Table-->
                <div class="panel-table">

                    <table id="equipmentHistoryDashboardTable" class="table table-striped responsive">
                        <colgroup>
                            <?php foreach ($EquipmentHistoryDashboardFieldsDefinition as $field => $fieldDefinition): ?>
                                <?php $displayName = $EquipmentHistoryDashboardViewModelName::getDisplayNameFor($fieldDefinition)?>
                                <?php if ($EquipmentHistoryDashboardViewModelName::isVisible($fieldDefinition)): ?>
                                    <col class="<?php echo ViewHelpers::BuildClassBy($displayName)?>"/>
                                <?php endif ?>
                            <?php endforeach ?>
                            <col class="col-actions"/>
                        </colgroup>
                        <thead>
                        <tr>
                            <th></th>
                            <?php foreach ($EquipmentHistoryDashboardFieldsDefinition as $field => $fieldDefinition): ?>
                                <?php $displayName = $EquipmentHistoryDashboardViewModelName::getDisplayNameFor($fieldDefinition)?>
                                <?php if ($EquipmentHistoryDashboardViewModelName::isVisible($fieldDefinition)): ?>
                                    <th class="<?php echo ViewHelpers::BuildClassBy($displayName)?>">
                                        <?php echo $displayName ?>
                                        <?php if ($EquipmentHistoryDashboardViewModelName::isSortable($fieldDefinition)): ?>
                                            <button data-field="<?php echo $field ?>" class="btn-table-sort"></button>
                                        <?php endif ?>
                                    </th>
                                <?php endif ?>
                            <?php endforeach ?>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($Items as $item): ?>
                            <?php $currentStatus = ''; ?>
                            <tr data-equipid="<?php echo $item->getEquipid() ?>">
                                <td class="item-selector"><input type="checkbox" class="item-selector-control" data-equipid="<?php echo $item->getEquipid()?>" data-qbtxlineid="<?php echo $item->getQbtxlineid()?>" ></td>
                                <?php foreach ($EquipmentHistoryDashboardFieldsDefinition as $field => $fieldDefinition): ?>
                                    <?php $displayName = $EquipmentHistoryDashboardViewModelName::getDisplayNameFor($fieldDefinition)?>
                                    <?php if ($EquipmentHistoryDashboardViewModelName::isVisible($fieldDefinition)): ?>
                                        <?php $method = 'get' . ucfirst($field) ?>
                                        <?php if ($EquipmentHistoryDashboardViewModelName::hasValues($fieldDefinition)): ?>
                                            <?php
                                                if($EquipmentHistoryDashboardViewModelName::isStatus($fieldDefinition)){
                                                    $currentStatus = $item->$method();
                                                }
                                            ?>
                                        <td class="item-field field-<?php echo ViewHelpers::BuildClassBy($displayName)?>">
                                            <div class="btn-group dropdown">
                                                <button class="btn btn-default btn-sm dropdown-toggle" type="button" data-toggle="dropdown">
                                                    <span class="value <?php echo ViewHelpers::BuildClassBy($item->$method())?>"><?php echo $item->$method() ?></span><span class="caret"></span>
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <?php foreach ($StatusDictionaryForUpdate as $key => $value): ?>
                                                        <li role="presentation"> <a role="menuitem" tabindex="-1" href="#" data-value="<?php echo $key ?>"><?php echo $value ?></a></li>
                                                    <?php endforeach ?>
                                                </ul>
                                            </div>
                                        </td>
                                        <?php elseif($EquipmentHistoryDashboardViewModelName::isVesselid($fieldDefinition)): ?>
                                            <td class="item-field field-<?php echo ViewHelpers::BuildClassBy($displayName)?>">
                                                <a href="#" class="field-vessel-link" data-vesselid="<?php echo $item->getVesselid()?>"><?php echo $item->$method() ?></a>
                                            </td>
                                        <?php elseif($EquipmentHistoryDashboardViewModelName::isWorkorder($fieldDefinition)): ?>
                                        <td class="item-field field-<?php echo ViewHelpers::BuildClassBy($displayName)?>">
                                            <a href="#" class="field-work-order-link" data-workorder="<?php echo $item->getOrdnum()?>"><?php echo $item->$method() ?></a>
                                        </td>
                                        <?php elseif($EquipmentHistoryDashboardViewModelName::isEquipid($fieldDefinition)): ?>
                                        <td class="item-field field-<?php echo ViewHelpers::BuildClassBy($displayName)?>">
                                            <a href="<?php echo $View->Href("EquipmentHistoryDashboard", "EquipmentHistories", array(
                                                'equipid' => base64_encode($item->$method()),
                                                'jsonFilterTree' => base64_encode($JsonFilterTree),
                                                'itemsPerPage' => $ItemsPerPage,
                                                'page' => $Page,
                                                'orderBy' => $OrderBy,
                                                'order' => $Order
                                            )) ?>"><?php echo $item->$method() ?></a>
                                        </td>
                                        <?php else: ?>
                                        <td class="item-field field-<?php echo ViewHelpers::BuildClassBy($displayName)?>"><?php echo $item->$method() ?></td>
                                        <?php endif ?>
                                    <?php endif ?>
                                <?php endforeach ?>
                                <td class="item-actions">
                                    <div class="btn-group">
                                        <a href="#" class="btn btn-primary btn-sm btn-action btn-action-files-dialog" data-equipid="<?php echo $item->getEquipid()?>">
                                            <span class="glyphicon glyphicon-folder-close"></span>
                                        </a>
                                        <a href="#" class="btn btn-primary btn-sm btn-action btn-action-edit" <?php echo (!$item->getQbtxlineid() && $currentStatus === 'Available')? 'disabled=disabled' : '' ?> data-qbtxlineid="<?php echo $item->getQbtxlineid()?>">
                                            <span class="glyphicon glyphicon-pencil"></span>
                                        </a>
                                        <a href="#" class="btn btn-primary btn-sm btn-action btn-action-add" <?php echo ($currentStatus !== 'Available')? 'disabled=disabled' : '' ?> data-equipid="<?php echo $item->getEquipid()?>">
                                            <span class="glyphicon glyphicon-plus-sign"></span>
                                        </a>
                                        <a href="#" class="btn btn-primary btn-sm btn-action btn-action-note" data-equipid="<?php echo $item->getEquipid()?>">
                                            <span class="glyphicon glyphicon-file"></span>
                                        </a>

                                        <?php $pictureHref = $item->getPicture_fi() ?>
                                        <a href="<?php echo $pictureHref ?>" class="btn btn-primary btn-sm btn-action btn-action-view" <?php echo ($pictureHref === "#")?'disabled="disabled"': '' ?> data-equipid="<?php echo $item->getEquipid()?>">
                                            <span class="glyphicon glyphicon-eye-open"></span>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        <?php endforeach ?>
                        </tbody>
                    </table>
                </div>
                <!--    End Table-->
            <?php else: ?>
                <div class="alert alert-info">
                    No <strong>items</strong> founds.
                </div>
            <?php endif ?>
        </div>
        <!--    End Panel Body-->
        <!--    Panel Footer-->
        <div class="panel-footer">
            <div class="text-center pager-wrapper">
                <?php echo $Pager->getPagerControl(); ?>
            </div>
        </div>
        <!--    End Panel Footer-->
    </div>
    <!--    End Main panel-->
    <?php $View->Control('SalesOrder'); ?>
</div>
<!--Container ends-->

<!--Modal Section-->

<div id="modal-equipment-history-form-add" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Add Equipment History</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <form action="?" class="">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="control-label">Work Order</label>
                                <select class="form-control control-work-order" style="width: 100%" data-bind="value: ordnum">
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="control-label">Project Manager</label>
                                <select class="form-control control-project-manager" style="width: 100%" data-bind="value: inspectno">
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label class="control-label">Date Out</label>
                                <div class="input-prepend input-group">
                                    <span class="add-on input-group-addon">
                                        <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>
                                    </span>
                                    <input class="form-control daterangepicker-single control-installdte" type="text" placeholder="" data-bind="value: installdte"/>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label class="control-label">Expected In</label>
                                <div class="input-prepend input-group">
                                        <span class="add-on input-group-addon">
                                            <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>
                                        </span>
                                    <input class="form-control daterangepicker-single control-expdtein" type="text" placeholder="" data-bind="text: expdtein"/>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label class="control-label">Received</label>
                                <div class="input-prepend input-group">
                                        <span class="add-on input-group-addon">
                                            <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>
                                        </span>
                                    <input class="form-control daterangepicker-single control-daterec" type="text" placeholder="" data-bind="value: daterec"/>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" data-bind="click: saveHistory">Save</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div id="modal-equipment-history-form-edit" class="modal fade" role="dialog" tabindex="-1" >
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Update Last Equipment History</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <form action="?" class="">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="control-label">Project Manager</label>
                                <select class="form-control control-project-manager-edit" style="width: 100%" data-bind="value: inspectno">
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="control-label">Date Out</label>
                                <div class="input-prepend input-group">
                                    <span class="add-on input-group-addon">
                                        <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>
                                    </span>
                                    <input class="form-control daterangepicker-single control-installdte-edit" type="text" placeholder="" data-bind="value: installdte"/>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="control-label">Expected In</label>
                                <div class="input-prepend input-group">
                                        <span class="add-on input-group-addon">
                                            <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>
                                        </span>
                                    <input class="form-control daterangepicker-single control-expdtein-edit" type="text" placeholder="" data-bind="value: expdtein"/>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="control-label">Received</label>
                                <div class="input-prepend input-group">
                                        <span class="add-on input-group-addon">
                                            <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>
                                        </span>
                                    <input class="form-control daterangepicker-single control-daterec-edit" type="text" placeholder="" data-bind="value: daterec"/>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
<!--                <div class="alert alert-danger fade in alert-delete" role="alert">-->
<!--                    Are you sure?-->
<!--                    <div class="btn-group pull-right">-->
<!--                        <a href="#" class="btn btn-success btn-sm">Yes, I am.</a>-->
<!--                        <a href="#" class="btn btn-danger btn-sm">Not, I am not.</a>-->
<!--                    </div>-->
<!--                </div>-->
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-danger" data-bind="click: deleteHistory">Delete</button>
                <button type="button" class="btn btn-primary" data-bind="click: updateHistory">Update</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

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

<div id="modal-equipment-history-form-note" class="modal modal-input fade" >
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Equipment (<span data-bind="text: equipid"></span>) Notes</h4>
            </div>
            <div class="modal-body row">
                <div class="form-group col-xs-12">
                    <textarea id="notesSaveModalnotes" class="form-control"  rows="10" style="max-width: 558px;" placeholder="Write notes here" data-bind="value: notes"></textarea>
                   
                </div>
            </div><!-- /.modal-body -->
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" data-bind="click: onSaveNotesModal">Save Notes</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div id="modal-equipment-history-form-batch-edit" class="modal fade" role="dialog" tabindex="-1" >
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Update Equipments Histories</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <form action="?" class="">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="control-label">Project Manager</label>
                                <select class="form-control control-project-manager-batch-edit" style="width: 100%" data-bind="value: inspectno">
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="control-label">Date Out</label>
                                <div class="input-prepend input-group">
                                    <span class="add-on input-group-addon">
                                        <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>
                                    </span>
                                    <input class="form-control daterangepicker-single control-installdte-batch-edit" type="text" placeholder="" data-bind="value: installdte"/>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="control-label">Expected In</label>
                                <div class="input-prepend input-group">
                                        <span class="add-on input-group-addon">
                                            <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>
                                        </span>
                                    <input class="form-control daterangepicker-single control-expdtein-batch-edit" type="text" placeholder="" data-bind="value: expdtein"/>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="control-label">Received</label>
                                <div class="input-prepend input-group">
                                        <span class="add-on input-group-addon">
                                            <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>
                                        </span>
                                    <input class="form-control daterangepicker-single control-daterec-batch-edit" type="text" placeholder="" data-bind="value: daterec"/>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" data-bind="click: updateHistories">Update</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div id="modal-equipment-history-form-batch-delete" class="modal fade" role="dialog" tabindex="-1" >
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Delete Equipments Histories</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <ul class="modal-equipment-history-form-batch-delete-list">

                    </ul>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-danger" data-bind="click: deleteHistories">Delete</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


<!--Modal Section ends-->