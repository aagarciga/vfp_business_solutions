/* 
 * Copyright (C) 2015 VFP Business Solutions, LLC
 *
 */

/**
 * Vessel Form Related MVVM Logic
 * @author Alex
 * @namespace App.Dashboard.VesselForm
 * @param {window} global
 * @param {jQuery} $
 * @param {kb} KnockBack
 * @param {ko} Knockout
 * @param {Backbone} Backbone
 * @param {Object} App
 * @returns {undefined}
 * @inner JSLint Passed
 */
(function (global, $, KnockBack, Knockout, Backbone, App) {
    'use strict';

    var dandelion = global.dandelion,
        VesselForm = dandelion.namespace('App.Dashboard.VesselForm', global);

    VesselForm.htmlBindings = {};
    VesselForm.htmlBindings.kbViewElement = '#kb-view-vessel';
    VesselForm.htmlBindings.modalSaveNotes = '#vesselForm_modal_saveNotes';

    VesselForm.Model = (function (base) {

        function Model() {
            return Model.base.constructor.apply(this, arguments);
        }

        dandelion.js.augment(Model, base);

        Model.prototype.vesselid = "";
        Model.prototype.descrip = "";
        Model.prototype.shipclass = "";
        Model.prototype.pentype = "";
        Model.prototype.cementid = "";
        Model.prototype.firecaulk = "";
        Model.prototype.notes = "";

        return Model;

    }(Backbone.Model));

    VesselForm.ViewModel = function (model) {
        var self = this;
        self.vesselid   = KnockBack.observable(model, 'vesselid');
        self.descrip    = KnockBack.observable(model, 'descrip');
        self.shipclass  = KnockBack.observable(model, 'shipclass');
        self.pentype    = KnockBack.observable(model, 'pentype');
        self.cementid   = KnockBack.observable(model, 'cementid');
        self.firecaulk  = KnockBack.observable(model, 'firecaulk');
        self.notes      = KnockBack.observable(model, 'notes');

        self.onShowNotesModal = function (view_model) {
            /**
             * @param {object} view_model Knockback viewmodel
             * @param {object} event Event related object
             * @return {view_model} Knockback viewmodel
             */
            $(VesselForm.htmlBindings.modalSaveNotes).modal();
            return view_model;
        };

        self.onSaveNotesModal = function (view_model) {
            /**
             * @param {object} view_model Knockback viewmodel
             * @param {object} event Event related object
             * @return {view_model} Knockback viewmodel
             */
            $.post(App.Dashboard.urls.updateVesselFormNotes,
                {ordnum: view_model.vesselid(), notes: view_model.notes()})
                .done(function () {
                    /**
                    * @param {object} response Ajax response object
                    */
                    $(VesselForm.htmlBindings.modalSaveNotes).modal('hide');
                })
                .fail(function (response) {
                    /**
                    * @param {object} response Ajax response object
                    */
                    throw response;
                });
            return view_model;
        };
    };

    VesselForm.init = function () {
        /**
         * VesselForm MVVM logic initialization
         * @returns {undefined}
         */
        VesselForm.view = $(VesselForm.htmlBindings.kbViewElement)[0];
        VesselForm.model = new VesselForm.Model();
        VesselForm.viewModel = new VesselForm.ViewModel(VesselForm.model);
        Knockout.applyBindings(VesselForm.viewModel, VesselForm.view);
    };

}(window, jQuery, kb, ko, Backbone, App));

/**
 * SalesOrder Form Related MVVM Logic
 * @author Alex
 * @namespace App.Dashboard.SalesOrderForm
 * @param {window} global
 * @param {jQuery} $
 * @param {kb} KnockBack
 * @param {ko} Knockout
 * @param {Backbone} Backbone
 * @param {Object} App
 * @returns {undefined}
 * @inner JSLint Passed
 */
(function (global, $, KnockBack, Knockout, Backbone, App) {
    'use strict';

    var dandelion = global.dandelion,
        SalesOrderForm = dandelion.namespace('App.Dashboard.SalesOrderForm', global);

    SalesOrderForm.htmlBindings = {};
    SalesOrderForm.htmlBindings.kbViewElement = '#kb-view-salesorder';
    SalesOrderForm.htmlBindings.modalSaveNotes = '#salesOrderForm_modal_saveNotes';

    SalesOrderForm.Model = (function (base) {

        function Model() {
            return Model.base.constructor.apply(this, arguments);
        }

        dandelion.js.augment(Model, base);

        Model.prototype.ordnum = "";
        Model.prototype.date = "";
        Model.prototype.custno = "";
        Model.prototype.projectLocation = "";
        Model.prototype.notes = "";
        Model.prototype.companyName = "";
        Model.prototype.address = "";
        Model.prototype.city = "";
        Model.prototype.state = "";
        Model.prototype.zip = "";
        Model.prototype.phone = "";
        Model.prototype.subtotal = "";
        Model.prototype.discount = "";
        Model.prototype.tax = "";
        Model.prototype.shipping = "";
        Model.prototype.total = "";

        Model.prototype.items = new Backbone.Collection([]);
        Model.prototype.modelType = "";

        Model.prototype.ponum = "";
        Model.prototype.company = "";
        Model.prototype.destino = "";
        Model.prototype.prostartdt = "";
        Model.prototype.proenddt = "";
        Model.prototype.sotypecode = "";
        Model.prototype.mtrlstatus = "";
        Model.prototype.jobstatus = "";
        Model.prototype.technam1 = "";
        Model.prototype.technam2 = "";
        Model.prototype.qutno = "";
        Model.prototype.cstctid = "";
        Model.prototype.jobdescrip = "";

        return Model;

    }(Backbone.Model));

    SalesOrderForm.ViewModel = function (model) {
        var self = this;
        self.modelType          = KnockBack.observable(model, 'modelType');

        self.ordnum             = KnockBack.observable(model, 'ordnum');
        self.date               = KnockBack.observable(model, 'date');
        self.custno             = KnockBack.observable(model, 'custno');
        self.projectLocation    = KnockBack.observable(model, 'projectLocation');
        self.notes              = KnockBack.observable(model, 'notes');
        self.companyName        = KnockBack.observable(model, 'companyName');
        self.address            = KnockBack.observable(model, 'address');
        self.city               = KnockBack.observable(model, 'city');
        self.state              = KnockBack.observable(model, 'state');
        self.zip                = KnockBack.observable(model, 'zip');
        self.phone              = KnockBack.observable(model, 'phone');
        self.subtotal           = KnockBack.observable(model, 'subtotal');
        self.discount           = KnockBack.observable(model, 'discount');
        self.tax                = KnockBack.observable(model, 'tax');
        self.shipping           = KnockBack.observable(model, 'shipping');
        self.total              = KnockBack.observable(model, 'total');

        // Related to B and C
        self.ponum              = KnockBack.observable(model, 'ponum');
        self.company            = KnockBack.observable(model, 'company');
        self.destino            = KnockBack.observable(model, 'destino');
        self.prostartdt         = KnockBack.observable(model, 'prostartdt');
        self.proenddt           = KnockBack.observable(model, 'proenddt');
        self.sotypecode         = KnockBack.observable(model, 'sotypecode');
        self.mtrlstatus         = KnockBack.observable(model, 'mtrlstatus');
        self.jobstatus          = KnockBack.observable(model, 'jobstatus');
        self.technam1           = KnockBack.observable(model, 'technam1');
        self.technam2           = KnockBack.observable(model, 'technam2');
        self.qutno              = KnockBack.observable(model, 'qutno');
        self.cstctid            = KnockBack.observable(model, 'cstctid');
        self.jobdescrip         = KnockBack.observable(model, 'jobdescrip');

        self.items              = KnockBack.collectionObservable(model.items);

        self.showTable = Knockout.computed(function () {
            return self.items().length > 0;
        });

        self.showControlIFBOrC = Knockout.computed(function () {
            /**
             * 
             * @returns {Boolean}
             */
            return self.modelType() === 'B' || self.modelType() === 'C';
        });

        self.showControlIfNotC = Knockout.computed(function () {
            /**
             * 
             * @returns {Boolean}
             */
            return !(self.modelType() === 'C');
        });

        self.onShowNotesModal = function (view_model) {
            /**
             * @param {object} view_model Knockback viewmodel
             * @param {object} event Event related object
             * @return {view_model} Knockback viewmodel
             */
            $(SalesOrderForm.htmlBindings.modalSaveNotes).modal();
            return view_model;
        };

        self.onSaveNotesModal = function (view_model) {
            /**
             * @param {object} view_model Knockback viewmodel
             * @param {object} event Event related object
             * @return {view_model} Knockback viewmodel
             */
            $.post(App.Dashboard.urls.updateSalesOrderNotes,
                {ordnum: view_model.ordnum(), notes: view_model.notes()})
                .done(function () {
                    /**
                    * @param {object} response Ajax response object
                    */
                    $(SalesOrderForm.htmlBindings.modalSaveNotes).modal('hide');
                })
                .fail(function (response) {
                    /**
                    * @param {object} response Ajax response object
                    */
                    throw response;
                });
            return view_model;
        };
    };

    SalesOrderForm.init = function () {
        /**
         * SalesOrderForm MVVM logic initialization
         * @returns {undefined}
         */
        SalesOrderForm.view = $(SalesOrderForm.htmlBindings.kbViewElement)[0];
        SalesOrderForm.model = new SalesOrderForm.Model();
        SalesOrderForm.viewModel = new SalesOrderForm.ViewModel(SalesOrderForm.model);
        Knockout.applyBindings(SalesOrderForm.viewModel, SalesOrderForm.view);
    };

}(window, jQuery, kb, ko, Backbone, App));

/**
 * @author Alex
 * @namespace App.Dashboard.DynamicFilter
 * @param {window} global
 * @param {jQuery} $
 * @param {Object} App
 * @returns {undefined}
 * @inner JSLint Passed
 */
(function (global, $, App) {
    "use strict";

    var dandelion = global.dandelion,
        DynamicFilter = dandelion.namespace('App.Dashboard.DynamicFilter', global);

    DynamicFilter.status = {};
    DynamicFilter.status.filterId = "";
    DynamicFilter.status.predicate = "";
    DynamicFilter.status.areControlsEnabled = false;

    DynamicFilter.htmlBindings = {};
    DynamicFilter.htmlBindings.filterFieldsContainer           = '#dynamicFilter_filterFieldsContainer';
    DynamicFilter.htmlBindings.filterFields_btnAdd             = '.filter-field';
    DynamicFilter.htmlBindings.filterField_btnRemove           = '.input-group-btn button';
    DynamicFilter.htmlBindings.controls = {};
    DynamicFilter.htmlBindings.controls.btnToggleVisibility    = '#dynamicFilter_btnToggleVisibility';
    DynamicFilter.htmlBindings.controls.btnReset               = '#dynamicFilter_btnReset';
    DynamicFilter.htmlBindings.controls.btnSave                = '#dynamicFilter_btnSave';
    DynamicFilter.htmlBindings.controls.btnFilter              = '#dynamicFilter_btnFilter';
    DynamicFilter.htmlBindings.drpSavedFilters                 = '#dynamicFilter_drpSavedFilters';
    DynamicFilter.htmlBindings.drpSavedFilterItems             = '.saved-filter-list-item';
    DynamicFilter.htmlBindings.drpSavedFilterItems_btnDelete   = '#dynamicFilter_drpSavedFilters li .close';
    DynamicFilter.htmlBindings.modalSaveFilter                 = '#dynamicFilter_modal_saveFilter';
    DynamicFilter.htmlBindings.modalSaveFilter_txtName         = '#dynamicFilter_modal_txtFilterName';
    DynamicFilter.htmlBindings.modalSaveFilter_btnSave         = '#dynamicFilter_modal_btnSaveFilter';

    DynamicFilter.functions = {};

    /**
     * Disable all filter action controls
     * @returns {undefined}
     */
    DynamicFilter.functions.disableControls = function () {
        dandelion.js.foreachPropertyDo(DynamicFilter.htmlBindings.controls,
            function (control) {
                $(control).addClass('disabled');
            });
        DynamicFilter.status.areControlsEnabled = false;
    };

    /**
     * Enable all filter action controls
     * @returns {undefined}
     */
    DynamicFilter.functions.enableControls = function () {
        dandelion.js.foreachPropertyDo(DynamicFilter.htmlBindings.controls,
            function (control) {
                $(control).removeClass('disabled');
            });
        DynamicFilter.status.areControlsEnabled = true;
    };

    DynamicFilter.functions.reset = function (notFilter) {
        $(DynamicFilter.htmlBindings.filterFieldsContainer).empty();
        DynamicFilter.functions.disableControls();
        $(DynamicFilter.htmlBindings.controls.btnFilter).next().focus();
        if (!notFilter) {
            DynamicFilter.functions.filter();
        }
    };

    DynamicFilter.functions.getPredicate = function () {
        var $filterComponents = $(DynamicFilter.htmlBindings.filterFieldsContainer).children(),
            $currentComponent = null,
            currentComponentValue = '',
            $currentComponentControl = null,
            currentComponentControlValue = '',
            currentComponentControlFieldName = '',
            dateRange;

        DynamicFilter.status.predicate = "";
        $filterComponents.each(function () {
            $currentComponent = $(this);
            if ($currentComponent.hasClass('btn-group')) {
                currentComponentValue = $currentComponent.children('button').text();
                DynamicFilter.status.predicate += currentComponentValue + " ";
            } else if ($currentComponent.hasClass('form-group')) {
                $currentComponentControl = $currentComponent.find('input, select');
                currentComponentControlValue = $currentComponentControl.val();
                currentComponentControlFieldName = $currentComponentControl.data('fieldname');
                if (currentComponentControlValue === '') {
                    DynamicFilter.status.predicate += "EMPTY(" + currentComponentControlFieldName + ") ";
                } else if ($currentComponentControl.hasClass('daterangepicker')) {
                    dateRange = currentComponentControlValue.split(' - ');
                    DynamicFilter.status.predicate += "(" + currentComponentControlFieldName +
                            " >= '" + dateRange[0] +
                            "' AND " + currentComponentControlFieldName +
                            " <= '" + dateRange[1] +
                            "') ";
                } else if ($currentComponentControl.hasClass('daterangepicker-single')) {
                    DynamicFilter.status.predicate += currentComponentControlFieldName + " = '" + currentComponentControlValue + "' ";
                } else {
                    DynamicFilter.status.predicate += "LOWER(" + currentComponentControlFieldName +
                            ") LIKE '%" + currentComponentControlValue.toLowerCase() +
                            "%' ";
                }
            } else {
                throw "Unexpected filter component. Must be an 'btn-group' or 'form-group'.";
            }
        });
        return DynamicFilter.status.predicate;
    };

    DynamicFilter.functions.filter = function () {
        App.Dashboard.functions.paginate(DynamicFilter.functions.getPredicate());
    };

    DynamicFilter.functions.loadFilter = function (filterId) {
        $.ajax({
            data: {
                filterid: filterId
            },
            url: App.Dashboard.urls.getSavedFilter,
            type: 'post',
            beforeSend: function () {
                $('.loading').show();
            },
            success: function (response) {
                var data = $.parseJSON(response),
                    values,
                    $filterFields;
                if (data.success) {
                    values = data.expfrom.split(", "); // Legacy data are saved with format value1, value2, ... valuenN
                    $filterFields = $(DynamicFilter.htmlBindings.filterFieldsContainer);
                    $filterFields.append(data.expfields);
                    $filterFields.find('select, input')
                        .each(function (index) {
                            $(this).val(values[index]);
                        });
                    DynamicFilter.functions.bindOperatorGroupsEventHandlers();
                    DynamicFilter.functions.bindFormGroupsEnventhandlers();

                    // Client request behavior (on filter load hide dynamic filter fields)
                    $(DynamicFilter.htmlBindings.controls.btnToggleVisibility).click();

                    DynamicFilter.functions.filter();
                } else {
                    throw "Filter not loaded";
                }
                $('.loading').hide();
            }
        });
    };

    /**
     * 
     * @param {Boolean} first
     * @returns {OperationGroupHTMLTemplate}
     */
    DynamicFilter.functions.createOperatorGroup = function (first) {
        var tmplFirstOperatorGroup = '<div class="btn-group"><button type="button" class="btn btn-default btn-filter-modifier disabled" style="opacity:1"></button><button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></button><ul class="dropdown-menu"><li class="current"><a href="#" style="display: inline-block; height: 26px; width: 100%;">Clear Not</a></li><li><a href="#">Not</a></li></ul></div>',
            tmplOperatorGroup = '<div class="btn-group "><button type="button" class="btn btn-default btn-filter-modifier disabled" style="opacity:1">And</button><button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></button><ul class="dropdown-menu"><li class="current"><a href="#">And</a></li><li><a href="#">And Not</a></li><li class="divider"></li><li><a href="#">Or</a></li><li><a href="#">Or Not</a></li></ul></div>';
        if (first === true) {
            return $(tmplFirstOperatorGroup);
        }
        return $(tmplOperatorGroup);
    };
    DynamicFilter.functions.createTextField = function (field, caption) {
        return $('<div class="form-group" title="' + caption +
                '"><label class="control-label">' + caption +
                '</label><div class="input-group"><input type="text" class="form-control" data-fieldname="' + field +
                '" placeholder="' + caption +
                '"><span class="input-group-btn"><button class="btn btn-default glyphicon-action-button glyphicon-minus btn-delete-filter-field" title="Delete Filter Field" type="button"></button></span></div></div>');
    };
    DynamicFilter.functions.createDropdownField = function (field, caption, options) {
        var $formGroup = $('<div class="form-group" title="' + caption +
            '"><label class="control-label">' + caption +
            '</label><div class="input-group"><select class="form-control" data-fieldname="' + field +
            '"></select><span class="input-group-btn"><button class="btn btn-default glyphicon-action-button glyphicon-minus btn-delete-filter-field" title="Delete Filter Field" type="button"></button></span></div></div>'),
            $select = $formGroup.find('select'),
            index, current;

        $select.append($('<option value="">Empty</option>'));
        for (index in options) {
            if (options.hasOwnProperty(index)) {
                current = options[index];
                $select.append($('<option value="' + current.id + '">' + current.descrip + '</option>'));
            }
        }
        return $formGroup;
    };
    DynamicFilter.functions.createDateField = function (field, caption, ranged) {
        var daterangepickerType = ranged ? 'daterangepicker' : 'daterangepicker-single';
        return $('<div class="form-group"><label class="control-label">' + caption +
                '</label><div class="input-prepend input-group" title="' + caption +
                '"><span class="add-on input-group-addon"><i class="glyphicon glyphicon-calendar fa fa-calendar"></i></span><input type="text" class="form-control ' + daterangepickerType +
                '" data-fieldname="' + field +
                '" placeholder="' + caption +
                '"><span class="input-group-btn"><button type="button" class="btn btn-default glyphicon-action-button glyphicon-minus btn-delete-filter-field"></button></span></div></div>');
    };
    DynamicFilter.functions.createDropdownSavedFilters = function (htmlElementId, caption) {
        var tmpl = '<button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></button>';
        tmpl += '<ul id="' + htmlElementId.slice(1) +
                '" class="dropdown-menu" role="menu"><li role="presentation" class="dropdown-header">' + caption +
                '</li></ul>';
        return $(tmpl);
    };
    DynamicFilter.functions.createDropdownSavedFilterItem = function (filterId, caption) {
        var tmpl = '<li><a href="#" class="saved-filter-list-item" data-filterid="' + filterId +
                '">' + caption +
                '</a><button type="button" class="close" aria-hidden="true">&times;</button></li>',
            $control = $(tmpl);
        $control.children('a')
                .on('click',
                    DynamicFilter.eventHandlers.drpSavedFilterItem_onClick);

        $control.find('button.close')
                .on('click',
                    DynamicFilter.eventHandlers.drpSavedFilterItem_btnDelete_onClick);
        return $control;
    };

    DynamicFilter.functions.bindOperatorGroupEventHandler = function ($operatorGroup) {
        $operatorGroup
            .find('li')
            .on('click', DynamicFilter.eventHandlers.filterOperator_onClick);
    };
    DynamicFilter.functions.bindOperatorGroupsEventHandlers = function () {
        $(DynamicFilter.htmlBindings.filterFieldsContainer)
            .find('.btn-group')
            .each(function () {
                DynamicFilter.functions.bindOperatorGroupEventHandler($(this));
            });
    };
    DynamicFilter.functions.bindFormGroupEventHandlers = function ($formGroup) {
        $formGroup.find(DynamicFilter.htmlBindings.filterField_btnRemove)
            .on('click', DynamicFilter.eventHandlers.filterField_btnRemove_onClick);
        $formGroup.find('input')
            .on('keypress', DynamicFilter.eventHandlers.input_keyPress);
        $formGroup.find('input.daterangepicker')
            .daterangepicker({
                singleDatePicker: false,
                format: 'MM/DD/YYYY',
                startDate: global.moment(),
                endDate: global.moment()
            });
        $formGroup.find('input.daterangepicker-single')
            .daterangepicker({
                singleDatePicker: true,
                format: 'MM/DD/YYYY',
                startDate: global.moment(),
                endDate: global.moment()
            });
    };
    DynamicFilter.functions.bindFormGroupsEnventhandlers = function () {
        $(DynamicFilter.htmlBindings.filterFieldsContainer)
            .find('.form-group')
            .each(function () {
                DynamicFilter.functions.bindFormGroupEventHandlers($(this));
            });
    };

    DynamicFilter.eventHandlers = {};
    DynamicFilter.eventHandlers.input_keyPress = function (event) {
        if (event.keyCode === 13) {
            DynamicFilter.functions.filter();
        }
    };
    DynamicFilter.eventHandlers.btnFilter_onClick = function () {
        /**
         * @param {object} event Event related object
         */
        DynamicFilter.functions.filter();
    };
    DynamicFilter.eventHandlers.btnToggleVisibility_onClick = function (event) {
        var $button = $(event.target),
            caption = $button.html();

        if (caption === "Hide") {
            $(DynamicFilter.htmlBindings.filterFieldsContainer).hide('slow');
            $button.html("Show");
        } else {
            $(DynamicFilter.htmlBindings.filterFieldsContainer).show('slow');
            $button.html("Hide");
        }
    };
    DynamicFilter.eventHandlers.btnReset_onClick = function () {
        /**
         * @param {object} event Event related object
         */
        DynamicFilter.functions.reset();
    };
    DynamicFilter.eventHandlers.btnSave_onClick = function () {
        /**
         * @param {object} event Event related object
         */
        var $filterName = $(DynamicFilter.htmlBindings.modalSaveFilter_txtName);
        $filterName.val('');
        $filterName.popover('hide')
                .focus()
                .parent()
                .removeClass('has-error');
        $(DynamicFilter.htmlBindings.modalSaveFilter).modal('show');
    };
    DynamicFilter.eventHandlers.drpSavedFilterItem_onClick = function (event) {
        var filterId = event.currentTarget.dataset['filterid'];
        DynamicFilter.functions.reset(true);
        DynamicFilter.functions.loadFilter(filterId);
        DynamicFilter.functions.enableControls();
    };
    DynamicFilter.eventHandlers.drpSavedFilterItem_btnDelete_onClick = function (event) {
        var $btnDelete = $(event.currentTarget),
            $btnSavedFilter = $btnDelete.prev(),
            filterId = $btnSavedFilter.data('filterid');

        $.ajax({
            data: {
                filterId: filterId
            },
            url: App.Dashboard.urls.deleteFilter,
            type: 'post',
            beforeSend: function () {
                $('.loading').show();
            },
            success: function (response) {
                var data = $.parseJSON(response),
                    $drpSavedFilters = $(DynamicFilter.htmlBindings.drpSavedFilters);

                if ($drpSavedFilters.children().length > 2) {
                    $('[data-filterid="' + data.filterid + '"]').parent().remove();
                } else {
                    $drpSavedFilters.prev('button').remove();
                    $drpSavedFilters.remove();
                }
                $('.loading').hide();
            }
        });
    };
    DynamicFilter.eventHandlers.filterOperator_onClick = function (event) {
        var $operator = $(event.target),
            value = $operator.html(),
            $operatorContainer = $operator.parent().parent(),
            $buttonGroup = $operatorContainer.parent(),
            $button = $buttonGroup.children(':first');

        if (value === "Clear Not") {
            value = "";
        }
        $button.html(value);
        $operatorContainer.find('li.current').removeClass('current');
        $operator.parent().addClass('current');
        DynamicFilter.functions.filter();
    };
    DynamicFilter.eventHandlers.filterFields_btnAdd_onClick = function (event) {
        var $button = $(event.target),
            fieldType = $button.data('field-type'),
            $filterFieldsContainer = $(DynamicFilter.htmlBindings.filterFieldsContainer),
            isFirstField = $filterFieldsContainer.children().length === 0,
            isDateRanged = fieldType === 'date',
            dropdownValues = [],
            $operandGroup = DynamicFilter.functions.createOperatorGroup(isFirstField),
            $formGroup;

        $filterFieldsContainer.append($operandGroup);
        DynamicFilter.functions.bindOperatorGroupEventHandler($operandGroup);

        if (fieldType === 'text') {
            $formGroup = DynamicFilter.functions.createTextField($button.data('field'), $button.text());
        } else if (fieldType === 'date' || fieldType === 'date-single') {
            $formGroup = DynamicFilter.functions.createDateField($button.data('field'), $button.text(), isDateRanged);
        } else if (fieldType === 'dropdown') {
            dropdownValues = global.App.Dashboard.dictionaries[$button.data('field-collection')];
            $formGroup = DynamicFilter.functions.createDropdownField($button.data('field'), $button.text(), dropdownValues);
        }
        $filterFieldsContainer.append($formGroup);
        DynamicFilter.functions.bindFormGroupEventHandlers($formGroup);

        if (DynamicFilter.status.areControlsEnabled !== true) {
            DynamicFilter.functions.enableControls();
        }
    };
    DynamicFilter.eventHandlers.filterField_btnRemove_onClick = function (event) {
        var $button = $(event.target),
            $formGroup = $button.parent().parent().parent(),
            $previousOperator = $formGroup.prev(),
            $nextOperator = $formGroup.next();
        if ($previousOperator.prev().length === 0) {
            if ($nextOperator.length === 0) {
                $previousOperator.remove();
                if (DynamicFilter.status.areControlsEnabled) {
                    DynamicFilter.functions.disableControls();
                }
            } else {
                $nextOperator.remove();
            }
        } else {
            $previousOperator.remove();
        }
        $formGroup.remove();
        DynamicFilter.functions.filter();
    };
    DynamicFilter.eventHandlers.modalSaveFilter_btnSave_onClick = function () {
        /**
         * @param {object} event Event related object
         */
        var $filterName = $(DynamicFilter.htmlBindings.modalSaveFilter_txtName),
            filterName = $filterName.val(),
            $filterContainer = $(DynamicFilter.htmlBindings.filterFieldsContainer),
            filterHtml = $filterContainer.html(),
            filterValues = "",
            $drpSavedFilters = $(DynamicFilter.htmlBindings.drpSavedFilters);

        $filterContainer.find('select, input[type=text]')
            .each(function (index) {
                if (index === 0) {
                    filterValues += $(this).val();
                } else {
                    filterValues += ", " + $(this).val();
                }
            });

        if (filterName !== "" && /\w/.test(filterName)) {
            $.ajax({
                data: {
                    filterName      : filterName,
                    filterString    : DynamicFilter.functions.getPredicate(),
                    filterHtml      : filterHtml,
                    filterValues    : filterValues
                },
                url: App.Dashboard.urls.saveFilter,
                type: 'post',
                beforeSend: function () {
                    $('.loading').show();
                },
                success: function (response) {
                    var data = $.parseJSON(response),
                        $dropdown;
                    if ($drpSavedFilters.length === 0) {
                        $dropdown = DynamicFilter.functions.createDropdownSavedFilters(DynamicFilter.htmlBindings.drpSavedFilters, "Load Saved Filter");
                        $(DynamicFilter.htmlBindings.controls.btnSave).after($dropdown);
                        $drpSavedFilters = $(DynamicFilter.htmlBindings.drpSavedFilters);
                    }
                    $drpSavedFilters.append(DynamicFilter.functions.createDropdownSavedFilterItem(data.filterid, filterName));
                    $(DynamicFilter.htmlBindings.modalSaveFilter).modal('hide');
                    $('.loading').hide();
                }
            });

        } else {
            $filterName.popover('show')
                .focus()
                .parent()
                .addClass('has-error');
        }

        $(DynamicFilter.htmlBindings.modalSaveFilter).modal('hide');
    };

    DynamicFilter.init = function (filterId) {
        if (filterId) {
            DynamicFilter.status.filterId = filterId;
            DynamicFilter.functions.reset(true);
            DynamicFilter.functions.loadFilter(filterId);
            DynamicFilter.functions.enableControls();
        } else {
            DynamicFilter.functions.disableControls();
        }

        $(DynamicFilter.htmlBindings.controls.btnFilter).on('click',
            DynamicFilter.eventHandlers.btnFilter_onClick);

        $(DynamicFilter.htmlBindings.controls.btnToggleVisibility).on('click',
            DynamicFilter.eventHandlers.btnToggleVisibility_onClick);

        $(DynamicFilter.htmlBindings.controls.btnReset).on('click',
            DynamicFilter.eventHandlers.btnReset_onClick);

        $(DynamicFilter.htmlBindings.controls.btnSave).on('click',
            DynamicFilter.eventHandlers.btnSave_onClick);

        $(DynamicFilter.htmlBindings.filterFields_btnAdd).on('click',
            DynamicFilter.eventHandlers.filterFields_btnAdd_onClick);

        $(DynamicFilter.htmlBindings.modalSaveFilter_btnSave).on('click',
            DynamicFilter.eventHandlers.modalSaveFilter_btnSave_onClick);

        $(DynamicFilter.htmlBindings.drpSavedFilterItems).on('click',
            DynamicFilter.eventHandlers.drpSavedFilterItem_onClick);

        $(DynamicFilter.htmlBindings.drpSavedFilterItems_btnDelete).on('click',
            DynamicFilter.eventHandlers.drpSavedFilterItem_btnDelete_onClick);
    };

}(window, jQuery, App));

/**
 * @author Alex
 * @namespace App.Dashboard
 * @param {window} global
 * @param {jQuery} $
 * @param {Object} App
 * @returns {undefined}
 * @inner JSLint Passed
 */
(function (global, $, App) {
    "use strict";
    var dandelion       = global.dandelion,
        Dashboard       = dandelion.namespace('App.Dashboard', global),
        SalesOrderForm  = App.Dashboard.SalesOrderForm,
        VesselForm      = App.Dashboard.VesselForm,
        DynamicFilter   = App.Dashboard.DynamicFilter;
        
    Dashboard.status = {};
    Dashboard.status.itemsPerPage = 50; // Default items per page value
    Dashboard.status.table_header_sortLastButton = null;
    Dashboard.status.table_header_sortField = 'ordnum'; // Default Order By Fields
    Dashboard.status.table_header_sortFieldOrder = 'ASC'; // Default Order
    Dashboard.status.currentPage = 1;
    
    Dashboard.dictionaries = {};
    Dashboard.dictionaries.materialStatus = [];
    Dashboard.dictionaries.jobStatus = [];
    Dashboard.dictionaries.vesselDictionary = [];
    Dashboard.dictionaries.jobTypeDictionary = [];
    Dashboard.dictionaries.projectManagerDictionary = [];
    
    Dashboard.htmlBindings = {};
    Dashboard.htmlBindings.container                        = '.container';
    Dashboard.htmlBindings.itemCounter                      = '#panelHeadingItemsCount';
    Dashboard.htmlBindings.drpItemPerPage                   = '.top-pager-itemmperpage-control a';
    Dashboard.htmlBindings.drpItemPerPageValue              = '.top-pager-itemmperpage-control button span.value';
    Dashboard.htmlBindings.filterForm                       = '#filterForm';
    Dashboard.htmlBindings.filterForm_btnToggleVisibility   = '#dashboard-panel-togle-visibility-button';
    Dashboard.htmlBindings.table                            = '#dashboardTable';
    Dashboard.htmlBindings.table_header_btnSort             = '.btn-table-sort';
    Dashboard.htmlBindings.table_body_btnSalesOrder         = '.item-field a.salesorder-form-link';
    Dashboard.htmlBindings.table_body_btnVessel             = '.item-field a.vessel-form-link';
//    Dashboard.htmlBindings.table_body_drpUpdatable          = '.update-dropdown';
    Dashboard.htmlBindings.table_body_drpMaterialStatus     = '.update-dropdown.material-status';
    Dashboard.htmlBindings.table_body_drpJobStatus          = '.update-dropdown.job-status';
    Dashboard.htmlBindings.pager_container                  = '.pager-wrapper';
    Dashboard.htmlBindings.pager_btnPagerPages              = '.pager-btn';
    Dashboard.htmlBindings.control_salesOrderForm           = '#salesOrderForm';
    Dashboard.htmlBindings.control_salesOrderForm_btnClose  = '#salesOrderForm_btnClose';
    Dashboard.htmlBindings.control_vesselForm               = '#vesselForm';
    Dashboard.htmlBindings.control_vesselForm_btnClose      = '#vesselForm_btnClose';
    
    Dashboard.functions = {};
    Dashboard.functions.paginate = function () {

        $.ajax({
            data: {
                predicate: Dashboard.DynamicFilter.functions.getPredicate(),
                page: Dashboard.status.currentPage,
                itemsPerPage: Dashboard.status.itemsPerPage,
                orderby: Dashboard.status.table_header_sortField,
                order: Dashboard.status.table_header_sortFieldOrder
            },
            url: Dashboard.urls.getDashboardItemsPage,
            type: 'post',
            beforeSend: function() {
                $('.loading').show();
            },
            success: function (response){
                var data = $.parseJSON(response),
                    pager = new BootstrapPager(data, 
                        Dashboard.eventHandlers.pager_btnPagerPages_onClick),
                    pagerItems = pager.getCurrentPagedItems(),
                    pagerControl = pager.getPagerControl();
            
                $(Dashboard.htmlBindings.pager_container).empty()
                    .append(pagerControl);
                Dashboard.functions.updateTable(pagerItems);
                
                $(Dashboard.htmlBindings.itemCounter).html(pager.itemsCount);
                $('.loading').hide();
            }
        });
            
    };
    
    Dashboard.functions.getDictionaries = function () {
        $.ajax({
            data: {},
            url: Dashboard.urls.getDashboardDictionaries,
            type: 'post',
            beforeSend: function() {
                $('.loading').show();
            },
            success: function(response) {
                var data = $.parseJSON(response);
                Dashboard.dictionaries = data;
                $('.loading').hide();
            }    
        });
    };
    Dashboard.functions.updateTable = function (items) {
        var $table = $(Dashboard.htmlBindings.table),
            $tableBody = $table.children('tbody'),
            index;
    $tableBody.empty();
        for (index in items) {
            // refactoring here
            
            $tableBody.append(Dashboard.buildDashboardItemTableRow(items[index], '', "item-field"));
        };
        Dashboard.functions.bindTableItemsEventHandlers();
    };
    Dashboard.functions.bindTableItemsEventHandlers = function () {
        $(Dashboard.htmlBindings.table_body_btnSalesOrder).on('click',
            Dashboard.eventHandlers.control_salesOrderForm_itemsLink_onClick);

        $(Dashboard.htmlBindings.table_body_btnVessel).on('click',
            Dashboard.eventHandlers.control_vesselForm_itemsLink_onClick);
        
        $(Dashboard.htmlBindings.table_body_drpMaterialStatus).on('change',
            Dashboard.eventHandlers.table_body_drpMaterialStatus_onChange);
            
        $(Dashboard.htmlBindings.table_body_drpJobStatus).on('change',
            Dashboard.eventHandlers.table_body_drpJobStatus_onChange);
    };
    Dashboard.functions.bindEventHandlers = function () {
        $(Dashboard.htmlBindings.drpItemPerPage).on('click',
            Dashboard.eventHandlers.drpItemPerPage_onClick);
        
        $(Dashboard.htmlBindings.control_salesOrderForm_btnClose).on('click',
            function () {
                $(Dashboard.htmlBindings.control_salesOrderForm).hide();
            });        
        $(Dashboard.htmlBindings.control_vesselForm_btnClose).on('click',
            function () {
                $(Dashboard.htmlBindings.control_vesselForm).hide();
            });

        $(Dashboard.htmlBindings.table_header_btnSort).on('click',
            Dashboard.eventHandlers.table_body_btnSalesOrder_onClick);
            
        $(Dashboard.htmlBindings.pager_btnPagerPages).on('click',
            Dashboard.eventHandlers.pager_btnPagerPages_onClick);
            
        Dashboard.functions.bindTableItemsEventHandlers();
    };
    
    
    
    Dashboard.eventHandlers = {};
    Dashboard.eventHandlers.drpItemPerPage_onClick = function (event) {
        var $target = $(event.target),
            value = $target.html();
        Dashboard.status.itemsPerPage = value;
        $(Dashboard.htmlBindings.drpItemPerPageValue).text(value);
        
        // When change items per page, show page one
        Dashboard.status.currentPage = 1; 
        
        Dashboard.functions.paginate();
    };
    Dashboard.eventHandlers.pager_btnPagerPages_onClick = function (event) {
        var $target = $(event.target),
            value = $target.data('page');
        Dashboard.status.currentPage = value;
        Dashboard.functions.paginate();
    };
    Dashboard.eventHandlers.control_salesOrderForm_itemsLink_onClick = function (event) {
        /**
         * @param {event} event
         * @returns {undefined}
         */
        var salesOrderValue = $(event.target).html(),
            params = { salesOrder : salesOrderValue},
            dashboardViewHeight,
            salesOrderViewHeight;
        $.post(Dashboard.urls.getSalesOrder, params)
            .done(function (response) {
                response = $.parseJSON(response);
                var modelType = response.formType,
                    viewModel = Dashboard.SalesOrderForm.viewModel;

                if (response.success) {
                    viewModel.modelType(modelType);

                    viewModel.ordnum(response.salesOrderObject.ordnum);
                    viewModel.date(response.salesOrderObject.date);
                    viewModel.custno(response.salesOrderObject.custno);
                    viewModel.projectLocation(response.salesOrderObject.projectLocation);
                    viewModel.notes(response.salesOrderObject.notes);
                    viewModel.companyName(response.salesOrderObject.companyName);
                    viewModel.address(response.salesOrderObject.address);
                    viewModel.city(response.salesOrderObject.city);
                    viewModel.state(response.salesOrderObject.state);
                    viewModel.zip(response.salesOrderObject.zip);
                    viewModel.phone(response.salesOrderObject.phone);
                    viewModel.subtotal(response.salesOrderObject.subtotal);
                    viewModel.discount(response.salesOrderObject.discount);
                    viewModel.tax(response.salesOrderObject.tax);
                    viewModel.shipping(response.salesOrderObject.shipping);
                    viewModel.total(response.salesOrderObject.total);

                    if (modelType === 'B' || modelType === 'C') {
                        viewModel.ponum(response.salesOrderObject.ponum);
                        viewModel.company(response.salesOrderObject.company);
                        viewModel.destino(response.salesOrderObject.destino);
                        viewModel.prostartdt(response.salesOrderObject.prostartdt);
                        viewModel.proenddt(response.salesOrderObject.proenddt);
                        viewModel.sotypecode(response.salesOrderObject.sotypecode);
                        viewModel.mtrlstatus(response.salesOrderObject.mtrlstatus);
                        viewModel.jobstatus(response.salesOrderObject.jobstatus);
                        viewModel.technam1(response.salesOrderObject.technam1);
                        viewModel.technam2(response.salesOrderObject.technam2);
                        viewModel.qutno(response.salesOrderObject.qutno);
                        viewModel.cstctid(response.salesOrderObject.cstctid);
                        viewModel.jobdescrip(response.salesOrderObject.jobdescrip);
                    }

                    viewModel.items(response.salesOrderObject.itemsCollection);
                }
            })
            .fail(function (response) {
                console.log(response);
            });
        dashboardViewHeight = parseInt($(Dashboard.htmlBindings.container).css('height'), 10);
        salesOrderViewHeight = parseInt($(Dashboard.htmlBindings.control_salesOrderForm).css('height'), 10);

        if (dashboardViewHeight > salesOrderViewHeight) {
            $(Dashboard.htmlBindings.control_salesOrderForm).css('height', dashboardViewHeight);
        }
        $(Dashboard.htmlBindings.control_salesOrderForm).show();
    };
    Dashboard.eventHandlers.control_vesselForm_itemsLink_onClick = function (event) {
        /**
         * @param {event} event
         * @returns {undefined}
         */
        var vesselValue = $(event.target).html(),
            params = { vesselid : vesselValue},
            dashboardViewHeight,
            vesselViewHeight;

        $.post(Dashboard.urls.getVesselFormData, params)
            .done(function (response) {
                response = $.parseJSON(response);
                var viewModel = Dashboard.VesselForm.viewModel;

                if (response.success) {
                    viewModel.vesselid(response.vesselFormObject.vesselid);
                    viewModel.descrip(response.vesselFormObject.descrip);
                    viewModel.shipclass(response.vesselFormObject.shipclass);
                    viewModel.pentype(response.vesselFormObject.pentype);
                    viewModel.cementid(response.vesselFormObject.cementid);
                    viewModel.firecaulk(response.vesselFormObject.firecaulk);
                    viewModel.notes(response.vesselFormObject.notes);
                }
            })
            .fail(function (response) {
                console.log(response);
            });

        dashboardViewHeight = parseInt($(Dashboard.htmlBindings.container).css('height'), 10);
        vesselViewHeight = parseInt($(Dashboard.htmlBindings.control_vesselForm).css('height'), 10);

        if (dashboardViewHeight > vesselViewHeight) {
            $(Dashboard.htmlBindings.control_vesselForm).css('height', dashboardViewHeight);
        }
        $(Dashboard.htmlBindings.control_vesselForm).show();
    };
    Dashboard.eventHandlers.table_body_btnSalesOrder_onClick = function (event) {
        var $target = $(event.target),
            sortingField = $target.data('field');

        if (Dashboard.status.table_header_sortLastButton !== null) {
            Dashboard.status.table_header_sortLastButton.removeClass('asc desc');
        }
        if (Dashboard.status.table_header_sortField !== sortingField) {
            Dashboard.status.table_header_sortFieldOrder = '';
        }
        Dashboard.status.table_header_sortField = sortingField;
        if (Dashboard.status.table_header_sortFieldOrder === 'ASC') {
            Dashboard.status.table_header_sortFieldOrder = 'DESC';
            $target.addClass('asc').removeClass('desc');
        } else {
            Dashboard.status.table_header_sortFieldOrder = 'ASC';
            $target.addClass('desc').removeClass('asc');
        }
        Dashboard.status.table_header_sortLastButton = $target;
        Dashboard.functions.paginate();
    };
    Dashboard.eventHandlers.table_body_drpMaterialStatus_onChange = function (event) {
        var $target = $(event.target),
            ordnum = $target.data('ordnum'),
            value = $target.val();
    
        $.ajax({
            data: {
                ordnum: ordnum,
                mtrlstatus: value
            },
            url: Dashboard.urls.updateSOHEADMaterialStatus,
            type: 'post',
            beforeSend: function() {
                $('.loading').show();
            },
            success: function(response) {
                var data = $.parseJSON(response);
                if (data === 'success') {
                    $('.loading').hide();
                } else {
                    throw data;
                }
            }
        });
    };
    Dashboard.eventHandlers.table_body_drpJobStatus_onChange = function (event) {
        var $target = $(event.target),
            ordnum = $target.data('ordnum'),
            value = $target.val();
    
        $.ajax({
            data: {
                ordnum: ordnum,
                jobstatus: value
            },
            url: Dashboard.urls.updateSOHEADJobStatus,
            type: 'post',
            beforeSend: function() {
                $('.loading').show();
            },
            success: function(response) {
                var data = $.parseJSON(response);
                if (data === 'success') {
                    $('.loading').hide();
                } else {
                    throw data;
                }
            }
        });
    };
    
    Dashboard.init = function (defaultUserFilter) {
        console.log("Refactored Dashboard Initialization.");
        
        
        Dashboard.status.itemsPerPage = $(Dashboard.htmlBindings.drpItemPerPageValue).text();
        Dashboard.functions.getDictionaries();
        
        
        DynamicFilter.init(defaultUserFilter);
        SalesOrderForm.init();
        VesselForm.init();
        
        Dashboard.functions.bindEventHandlers();
    };
    
}(window, jQuery, App));