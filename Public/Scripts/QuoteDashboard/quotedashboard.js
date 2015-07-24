/* 
 * Copyright (C) 2015 VFP Business Solutions, LLC
 *
 */

if (window.jQuery === 'undefined') {
    throw new Error('VFP Business Series\'s Quote Dashboard JavaScript requires jQuery');
}

if (window.kb === 'undefined') {
    throw new Error('VFP Business Series\'s Quote Dashboard JavaScript requires Knockback.js');
}

if (window.ko === 'undefined') {
    throw new Error('VFP Business Series\'s Quote Dashboard JavaScript requires Knockout.js');
}

if (window.Backbone === 'undefined') {
    throw new Error('VFP Business Series\'s Quote Dashboard JavaScript requires Backbone.js');
}

/**
 * QuoteDetails Form Related MVVM Logic
 * @author Alex
 * @namespace App.QuoteDashboard.QuoteDetails
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
        QuoteDetails = dandelion.namespace('App.QuoteDashboard.QuoteDetails', global);

    QuoteDetails.htmlBindings = {};
    QuoteDetails.htmlBindings.kbViewElement = '#kb-view-quote-details';
    QuoteDetails.htmlBindings.modalSaveNotes = '#quoteDetails_modal_saveNotes';

    QuoteDetails.Model = (function (base) {

        function Model() {
            return Model.base.constructor.apply(this, arguments);
        }

        dandelion.js.augment(Model, base);

        //{"success":true,"quoteDetails":{"qutno":"10001","status":"RFQ Received","ordnum":"","date":"1899-12-30","custno":"MENCON","projectLocation":"","notes":"","companyName":"Menendez Consulting Group","address":"549 Falcon Drive","city":"Miami Springs","state":"FL","zip":"33166","phone":"","subtotal":"895.00","discount":"0.00","tax":"0.00","shipping":"0.00","total":"895.00","ponum":"","company":"Menendez Consulting Group","destino":"","sotypecode":"","cstctid":""},"salesOrderObject":{"itemsCollection":[{"ordnum":"","itmcount":"001-","itemno":"1000","itmwhs":"000","descrip":"VFP2000 Software","unit":"","qtyord":"1.00","qtyshp":"0.00","unitprice":"895.00000","extprice":"895.00"}]}}

        Model.prototype.qutno = "";
        Model.prototype.status = "";
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

        Model.prototype.ponum = "";
        Model.prototype.company = "";
        Model.prototype.destino = "";
        Model.prototype.sotypecode = "";
        Model.prototype.cstctid = "";
        Model.prototype.jobdescrip = "";
        Model.prototype.technam1 = "";
        Model.prototype.technam2 = "";
        Model.prototype.projno = "";

        return Model;

    }(Backbone.Model));

    QuoteDetails.ViewModel = function (model) {
        var self = this;
        self.qutno              = KnockBack.observable(model, 'qutno');
        self.status             = KnockBack.observable(model, 'status');
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
        self.ponum              = KnockBack.observable(model, 'ponum');
        self.company            = KnockBack.observable(model, 'company');
        self.destino            = KnockBack.observable(model, 'destino');
        self.sotypecode         = KnockBack.observable(model, 'sotypecode');
        self.cstctid            = KnockBack.observable(model, 'cstctid');
        self.jobdescrip         = KnockBack.observable(model, 'jobdescrip');
        self.technam1         = KnockBack.observable(model, 'technam1');
        self.technam2         = KnockBack.observable(model, 'technam2');
        self.projno         = KnockBack.observable(model, 'projno');


        self.items              = KnockBack.collectionObservable(model.items);
        self.showTable = Knockout.computed(function () {
            return self.items().length > 0;
        });

        self.onShowNotesModal = function (view_model) {
            /**
             * @param {object} view_model Knockback viewmodel
             * @param {object} event Event related object
             * @return {view_model} Knockback viewmodel
             */
            $(QuoteDetails.htmlBindings.modalSaveNotes).modal();
            return view_model;
        };

        self.onSaveNotesModal = function (view_model) {
            /**
             * @param {object} view_model Knockback viewmodel
             * @param {object} event Event related object
             * @return {view_model} Knockback viewmodel
             */
            $.post(App.QuoteDashboard.urls.updateNotes,
                {qutno: view_model.qutno(), notes: view_model.notes()})
                .done(function () {
                    /**
                     * @param {object} response Ajax response object
                     */
                    $(QuoteDetails.htmlBindings.modalSaveNotes).modal('hide');
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

    QuoteDetails.init = function () {
        /**
         * QuoteDetails MVVM logic initialization
         * @returns {undefined}
         */
        QuoteDetails.view = $(QuoteDetails.htmlBindings.kbViewElement)[0];
        QuoteDetails.model = new QuoteDetails.Model();
        QuoteDetails.viewModel = new QuoteDetails.ViewModel(QuoteDetails.model);
        Knockout.applyBindings(QuoteDetails.viewModel, QuoteDetails.view);
    };

}(window, window.jQuery, window.kb, window.ko, window.Backbone, window.App));

/**
 * @author Alex
 * @namespace App.QuoteDashboard.DynamicFilter
 * @param {window} global
 * @param {jQuery} $
 * @param {Object} App
 * @returns {undefined}
 * @inner JSLint Passed
 */
(function (global, $, App) {
    "use strict";

    var dandelion = global.dandelion,
        DynamicFilter = dandelion.namespace('App.QuoteDashboard.DynamicFilter', global);

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
                    if ($currentComponentControl.data('valueType') === 'numeric') {
                        // Logic for numbers
                        DynamicFilter.status.predicate += currentComponentControlFieldName +
                            " = " + currentComponentControlValue +
                            " ";
                    } else {
                        // Logic for strings
                        DynamicFilter.status.predicate += "LOWER(" + currentComponentControlFieldName +
                            ") LIKE '%" + currentComponentControlValue.toLowerCase() +
                            "%' ";
                    }
                }
            } else {
                throw "Unexpected filter component. Must be an 'btn-group' or 'form-group'.";
            }
        });
        return DynamicFilter.status.predicate;
    };
    DynamicFilter.functions.filter = function () {
        App.QuoteDashboard.functions.paginate();
    };
    DynamicFilter.functions.loadFilter = function (filterId) {
        $.ajax({
            data: {
                filterid: filterId
            },
            url: App.QuoteDashboard.urls.getSavedFilter,
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

    DynamicFilter.functions.createOperatorGroup = function (first) {
        var tmplFirstOperatorGroup = '<div class="btn-group"><button type="button" class="btn btn-default btn-filter-modifier disabled" style="opacity:1"></button><button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></button><ul class="dropdown-menu"><li class="current"><a href="#" style="display: inline-block; height: 26px; width: 100%;">Clear Not</a></li><li><a href="#">Not</a></li></ul></div>',
            tmplOperatorGroup = '<div class="btn-group "><button type="button" class="btn btn-default btn-filter-modifier disabled" style="opacity:1">And</button><button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></button><ul class="dropdown-menu"><li class="current"><a href="#">And</a></li><li><a href="#">And Not</a></li><li class="divider"></li><li><a href="#">Or</a></li><li><a href="#">Or Not</a></li></ul></div>';
        if (first === true) {
            return $(tmplFirstOperatorGroup);
        }
        return $(tmplOperatorGroup);
    };
    DynamicFilter.functions.createTextField = function (field, caption, valueType) {
        return $('<div class="form-group" title="' + caption +
                '"><label class="control-label">' + caption +
                '</label><div class="input-group"><input type="text" class="form-control" data-value-type="' + valueType + '" data-fieldname="' + field +
                '" placeholder="' + caption +
                '"><span class="input-group-btn"><button class="btn btn-default glyphicon-action-button glyphicon-minus btn-delete-filter-field" title="Delete Filter Field" type="button"></button></span></div></div>');
    };
    DynamicFilter.functions.createDropdownField = function (field, caption, options, valueType) {
        var $formGroup = $('<div class="form-group" title="' + caption +
            '"><label class="control-label">' + caption +
            '</label><div class="input-group select2-bootstrap-append"><select class="form-control select2-container" data-value-type="' + valueType + '" data-fieldname="' + field +
            '"></select><span class="input-group-btn"><button class="btn btn-default glyphicon-action-button glyphicon-minus btn-delete-filter-field" title="Delete Filter Field" type="button"></button></span></div></div>'),
            $select = $formGroup.find('select'),
            index, current;

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
            .on('keypress', DynamicFilter.eventHandlers.input_onKeyPress);
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
        $formGroup.find('select')
            .select2();
    };
    DynamicFilter.functions.bindFormGroupsEnventhandlers = function () {
        $(DynamicFilter.htmlBindings.filterFieldsContainer)
            .find('.form-group')
            .each(function () {
                DynamicFilter.functions.bindFormGroupEventHandlers($(this));
            });
    };

    DynamicFilter.eventHandlers = {};
    DynamicFilter.eventHandlers.input_onKeyPress = function (event) {
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
        /**
         * var filterId = event.currentTarget.dataset['filterid'];
         * @type @exp;event@pro;currentTarget@pro;dataset@pro;filterid
         */
        var filterId = event.currentTarget.dataset.filterid;
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
            url: App.QuoteDashboard.urls.deleteFilter,
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
            dropdownValues = global.App.QuoteDashboard.dictionaries[$button.data('field-collection')];
            $formGroup = DynamicFilter.functions.createDropdownField($button.data('field'), $button.text(), dropdownValues, $button.data('field-value-type'));
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
            filterHtml = "",
            filterValues = "",
            $drpSavedFilters = $(DynamicFilter.htmlBindings.drpSavedFilters);

            // Alex: In order to remove the select2 element to save the select clean
        $filterContainer.find('select.select2-container').
            each(function () {
                $(this).select2('destroy');
            });
            // Saving html filter before select2 elements are destroyed
        filterHtml = $filterContainer.html();

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
                url: App.QuoteDashboard.urls.saveFilter,
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

                    // Restauring select2 elements
                    $filterContainer.find('select.select2-container').select2();
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

}(window, window.jQuery, window.App));

/**
 * @author Alex
 * @namespace App.QuoteDashboard.ProjectFiles
 * @param {type} global
 * @param {type} $
 * @param {type} App
 * @returns {undefined}
 */
(function (global, $, App) {
    "use strict";

    var dandelion = global.dandelion,
        ProjectFiles = dandelion.namespace('App.QuoteDashboard.ProjectFiles', global);

    ProjectFiles.status = {};
    ProjectFiles.status.dropzone = null;
    ProjectFiles.status.jsTree = null;

    ProjectFiles.htmlBindings = {};
    ProjectFiles.htmlBindings.modal_ProjectFiles    = '#project-files-modal';
    ProjectFiles.htmlBindings.dropzone              = '#projectFilesDropzone';
    ProjectFiles.htmlBindings.dropzone_previews     = '.dz-preview';
    ProjectFiles.htmlBindings.jsTree                = '#project-files-jstree';
    ProjectFiles.htmlBindings.jsTree_SearchControl  = '#tree-search';

    ProjectFiles.functions = {};
    ProjectFiles.functions.dropzoneReset = function () {
        var index;
        for (index in ProjectFiles.status.dropzone.files) {
            if (ProjectFiles.status.dropzone.files.hasOwnProperty(index)) {
                ProjectFiles.status.dropzone.files[index].ready4Remove = false;
            }
        }
        ProjectFiles.status.dropzone.removeAllFiles();
        $(ProjectFiles.htmlBindings.dropzone_previews).children('.dz-preview').remove();
        $(ProjectFiles.htmlBindings.dropzone).children('.dz-message.custom').css('opacity', '1');
    };

    ProjectFiles.functions.bindJsTreeSearching = function (to) {
        $(ProjectFiles.htmlBindings.jsTree_SearchControl).on('keyup',
            function (event) {
                if (to) {
                    clearTimeout(to);
                }
                to = setTimeout(function () {
                    var value = $(ProjectFiles.htmlBindings.jsTree_SearchControl).val();
                    ProjectFiles.status.jsTree.jstree(true).search(value);
                }, 250);
            });
    };
    ProjectFiles.functions.loadFileTree = function (currentQutno) {
        if (ProjectFiles.status.jsTree !== null) {
            ProjectFiles.status.jsTree.jstree(true).destroy();
        }

        ProjectFiles.status.jsTree = $(ProjectFiles.htmlBindings.jsTree).jstree({
            id: ProjectFiles.htmlBindings.jsTree,
            plugins : ['state', 'dnd', 'sort', 'types', 'contextmenu', 'unique', 'search'],
            searchControlId: ProjectFiles.htmlBindings.jsTree_SearchControl,
            core : {
                animation: true,
                themes: {
                    name: 'default',
                    responsive : false,
                    variant : 'medium',
                    stripes : false
                },
                data : {
                    //url : App.Dashboard.urls.projectAttachementsAPI + '&salesorder=' + currentSalesOrder + '&operation=get_node',
                    url: App.urls.treeViewManager.getNode + '&rootDir=' + currentQutno,
                    data : function (node) {
                        return { 'id' : node.id };
                    }
                },
                check_callback: function (operation, node, node_parent, node_position, more) {

                    // If error, change 'i' for node_position
                    if(more && more.dnd && more.pos !== 'i') {
                        return false;
                    }
                    if(operation === "move_node" || operation === "copy_node") {
                        if(this.get_node(node).parent === this.get_node(node_parent).id) {
                            return false;
                        }
                    }
                    return true;
                },
                error: function (instance){
                    console.log('Error callback:', instance);
                }
            },
            sort: function (a, b) {
                return this.get_type(a) === this.get_type(b) ?
                    (this.get_text(a) > this.get_text(b) ? 1 : -1) :
                    (this.get_type(a) >= this.get_type(b) ? 1 : -1);
            },
            types: {
                '#': {
                    max_children: 1,
                    valid_children: ['default'],
                    icon: 'glyphicon glyphicon-folder-open'
                },
                'default': {
                    valid_children: ['default'],
                    icon: 'glyphicon glyphicon-folder-close'
                }
            },
            contextmenu: {
                items: function (node) {
                    var tmp = $.jstree.defaults.contextmenu.items();
                    // Removing Edit Options
                    delete tmp.ccp;
                    if(this.get_type(node) === "file") {
                        delete tmp.create;
                    }
                    return tmp;
                }
            },
            unique : {
                duplicate : function (name, counter) {
                    return name + ' ' + counter;
                }
            }
        })
            .on('delete_node.jstree', function (event, data) {
                var params = {
                    rootDir: currentQutno,
                    operation: event.type,
                    'id' : data.node.id
                };

                $('.loading').show();
                $.get(App.urls.treeViewManager.deleteNode, params)
                    .done(function (response) {
                        $('.loading').hide();
                    })
                    .fail(function () {
                        data.instance.refresh();
                        $('.loading').hide();
                    });
            })
            .on('create_node.jstree', function (event, data) {
                var params = {
                    rootDir: currentQutno,
                    operation: event.type,
                    'type' : data.node.type,
                    'id' : data.node.parent,
                    'text' : data.node.text
                };

                $('.loading').show();
                $.get(App.urls.treeViewManager.createNode, params)
                    .done(function (response) {
                        data.instance.set_id(data.node, response.id);
                        $('.loading').hide();
                    })
                    .fail(function () {
                        data.instance.refresh();
                        $('.loading').hide();
                    });
            })
            .on('rename_node.jstree', function (event, data) {
                var params = {
                    rootDir: currentQutno,
                    operation: event.type,
                    'id' : data.node.id,
                    'text' : data.text
                };

                $('.loading').show();
                $.get(App.urls.treeViewManager.renameNode, params)
                    .done(function (response) {
                        data.instance.set_id(data.node, response.id);
                        $('.loading').hide();
                    })
                    .fail(function () {
                        data.instance.refresh();
                        $('.loading').hide();
                    });
            })
            .on('move_node.jstree', function (event, data) {
                var params = {
                    rootDir: currentQutno,
                    operation: event.type,
                    'id' : data.node.id,
                    'parent' : data.parent
                };

                $('.loading').show();
                $.get(App.urls.treeViewManager.moveNode, params)
                    .done(function (response) {
                        data.instance.refresh();
                        $('.loading').hide();
                    })
                    .fail(function () {
                        data.instance.refresh();
                        $('.loading').hide();
                    });
            })
            .on('copy_node.jstree', function (event, data) {
                var params = {
                    rootDir: currentQutno,
                    operation: event.type,
                    'id' : data.original.id,
                    'parent' : data.parent
                };

                $('.loading').show();
                $.get(App.urls.treeViewManager.copyNode, params)
                    .done(function (response) {
                        data.instance.load_node(data.parent);
                        data.instance.refresh();
                        $('.loading').hide();
                    })
                    .fail(function () {
                        data.instance.refresh();
                        $('.loading').hide();
                    });
            })
            .on('changed.jstree', function (event, data) {
                var selectedDir = ProjectFiles.status.jsTree.jstree(true).get_selected()[0],
                    selectedDirPath = (selectedDir === '/' ? '' : selectedDir + '/'),
                    params = {
                        rootDir: currentQutno,
                        selectedDir: selectedDir
                    };

                if (selectedDir) {
                    ProjectFiles.functions.dropzoneReset();

                    $.post(App.urls.fileManager.list, params)
                        .done(function (response) {
                            if (response && response.length !== 0) {
                                selectedDirPath = "public/uploads/" + currentQutno + '/' + selectedDirPath;

                                (function (instance) {

                                }(ProjectFiles.status.dropzone));
                                $.each(response, function (key, value) {
                                    var pattern = /\.(gif|jpg|jpeg|tiff|png)$/i,
                                        mockFile = {
                                            name: value.name,
                                            size: value.size,
                                            ready4Remove: true
                                        };

                                    ProjectFiles.status.dropzone.options.addedfile.call(ProjectFiles.status.dropzone, mockFile);
                                    // Alex: This is wrong (ugly nut work)..... review.... TODO
                                    ProjectFiles.status.dropzone.files.push(mockFile);
                                    if (pattern.test(value.name)) {
                                        ProjectFiles.status.dropzone.options.thumbnail.call(ProjectFiles.status.dropzone, mockFile, selectedDirPath + value.name);
                                    }
                                });

                                $(ProjectFiles.htmlBindings.dropzone_previews).on('click',
                                    function (event) {
                                        var rootDir = currentQutno,
                                            fileName = $(this).find('.dz-filename span').html(),
                                            selected = selectedDir,
                                            form = $('<form action="' +
                                                App.urls.fileManager.downloadFile +
                                                '" method="POST"><input type="hidden" name="rootDir" value="' +
                                                rootDir + '" /><input type="hidden" name="selectedDir" value="' +
                                                selected + '" /><input type="hidden" name="fileName" value="' +
                                                fileName + '" /></form>');
                                        form.appendTo('body');
                                        form[0].submit();
                                    });
                            }
                        })
                        .fail(function (response){
                            console.log(response);
                        });
                }
            });
        ProjectFiles.functions.bindJsTreeSearching(false);
        ProjectFiles.status.jsTree.jstree(true).select_node(currentQutno);
    };
    ProjectFiles.functions.createDir = function () {
        var jsTree = ProjectFiles.status.jsTree.jstree(true),
            selectedDir = jsTree.get_selected();

        if (!selectedDir.length) {
            return false;
        }
        selectedDir = selectedDir[0];
        selectedDir = jsTree.create_node(selectedDir, {type: 'default'}, 'last', function (new_node) {
            setTimeout(function () {
                jsTree.edit(new_node);
            }, 0);
        });
    };
    ProjectFiles.functions.renameDir = function () {
        var jsTree = ProjectFiles.status.jsTree.jstree(true),
            selectedDir = jsTree.get_selected();

        if (!selectedDir.length) {
            return false;
        }
        selectedDir = selectedDir[0];
        jsTree.edit(selectedDir);
    };
    ProjectFiles.functions.deleteDir = function () {
        var jsTree = ProjectFiles.status.jsTree.jstree(true),
            selectedDir = jsTree.get_selected();

        if (!selectedDir.length) {
            return false;
        }
        if (selectedDir[0] === "\/") {
            throw "Project folder can't be deleted.";
            return false;
        }
        jsTree.delete_node(selectedDir);
        ProjectFiles.functions.dropzoneReset();
    };

    ProjectFiles.eventHandlers = {};

    ProjectFiles.init = function () {
        // Disabling autoDiscover, otherwise Dropzone will try to attach twice.
        global.Dropzone.options.projectFilesDropzone = false;

        ProjectFiles.status.dropzone = new global.Dropzone(ProjectFiles.htmlBindings.dropzone, {
            paramName: "file", // The name that will be used to transfer the file
            maxFilesize: 1024, // in MB equals to 1GB
            maxThumbnailFilesize: 1, // MB
            addRemoveLinks: true,
            accept: function (file, done) {
                if (file.name === "Alex.jpg") {
                    done("Hello Creator.");
                }
                else {
                    done();
                }
            },
            init: function () {
                this.on('removedfile', function (file) {
                    var selectedDir = ProjectFiles.status.jsTree.jstree(true).get_selected(),
                        params = {
                            rootDir: App.QuoteDashboard.status.currentQuote,
                            selectedDir: selectedDir[0],
                            fileName : file.name
                        };

                    if (file.ready4Remove) {
                        $('.loading').show();
                        $.post(App.urls.fileManager.deleteFile, params)
                            .done(function (response) {
                                $('.loading').hide();
                            })
                            .fail(function (response) {
                                $('.loading').hide();
                            });
                    }
                    file.ready4Remove = true;
                });
                this.on('sending', function (file, xhr, formData) {
                    var jsTreeInstance = ProjectFiles.status.jsTree.jstree(true),
                        selectedDir = jsTreeInstance.get_selected();

                    file.ready4Remove = true;
                    file.uploadPath = App.QuoteDashboard.status.currentQuote + '/' + selectedDir;
                    if (App.QuoteDashboard.status.currentQuote) {
                        formData.append('rootDir', App.QuoteDashboard.status.currentQuote);
                        formData.append('selectedDir', selectedDir);
                    }
                    $(ProjectFiles.htmlBindings.dropzone_previews).on('click',
                        function () {
                            var selectedDir = ProjectFiles.status.jsTree.jstree(true).get_selected()[0],
                                rootDir = App.QuoteDashboard.status.currentQuote,
                                fileName = $(this).find('.dz-filename span').html(),
                                form = $('<form action="' +
                                    App.urls.fileManager.downloadFile +
                                    '" method="POST"><input type="hidden" name="rootDir" value="' +
                                    rootDir + '" /><input type="hidden" name="selectedDir" value="' +
                                    selectedDir + '" /><input type="hidden" name="fileName" value="' +
                                    fileName + '" /></form>');

                            form.appendTo('body');
                            form[0].submit();
                        });
                });
            }
        });

    };

}(window, window.jQuery, window.App));

/**
 * @author Alex
 * @namespace App.QuoteDashboard
 * @param {window} global
 * @param {jQuery} $
 * @param {Object} App
 * @returns {undefined}
 * @inner JSLint NotPassed
 */
(function (global, $, App) {
    "use strict";

    var dandelion       = global.dandelion,
        QuoteDashboard  = dandelion.namespace('App.QuoteDashboard', global),
        DynamicFilter   = App.QuoteDashboard.DynamicFilter,
        QuoteDetails    = App.QuoteDashboard.QuoteDetails,
        //FileManagerWidget = dandelion.namespace('App.QuoteDashboard.FileManagerWidget', global);
        ProjectFiles    = App.QuoteDashboard.ProjectFiles;


    QuoteDashboard.status = {};
    QuoteDashboard.status.itemsPerPage = 50; // Default items per page value
    QuoteDashboard.status.table_header_sortLastButton = null;
    QuoteDashboard.status.table_header_sortField = 'ordnum'; // Default Order By Fields
    QuoteDashboard.status.table_header_sortFieldOrder = 'ASC'; // Default Order
    QuoteDashboard.status.currentPage = 1;
    QuoteDashboard.status.currentQuote = '';

    QuoteDashboard.dictionaries = {};
    QuoteDashboard.dictionaries.status = [];
    QuoteDashboard.dictionaries.vessel = [];
    QuoteDashboard.dictionaries.costCenter = [];
    QuoteDashboard.dictionaries.projectManager = [];

    QuoteDashboard.htmlBindings = {};
    QuoteDashboard.htmlBindings.container                        = '.container';
    QuoteDashboard.htmlBindings.itemCounter                      = '#panelHeadingItemsCount';
    QuoteDashboard.htmlBindings.drpItemPerPage                   = '.top-pager-itemmperpage-control a';
    QuoteDashboard.htmlBindings.drpItemPerPageValue              = '.top-pager-itemmperpage-control button span.value';
    QuoteDashboard.htmlBindings.filterForm                       = '#filterForm';
//    Dashboard.htmlBindings.filterForm_btnToggleVisibility   = '#dashboard-panel-togle-visibility-button';
    QuoteDashboard.htmlBindings.table                            = '#quoteDashboardTable';
    QuoteDashboard.htmlBindings.table_header_btnSort             = '.btn-table-sort';
    QuoteDashboard.htmlBindings.table_body_btnQuoteNo            = '.qutno-form-link';
////    Dashboard.htmlBindings.table_body_drpUpdatable          = '.update-dropdown';
    QuoteDashboard.htmlBindings.table_body_btnAttach             = '.btn-files-dialog';
    QuoteDashboard.htmlBindings.pager_container                  = '.pager-wrapper';
    QuoteDashboard.htmlBindings.pager_btnPagerPages              = '.pager-btn';
    QuoteDashboard.htmlBindings.control_quoteDetails           = '#quoteDetails';
    QuoteDashboard.htmlBindings.control_quoteDetails_btnClose  = '#quoteDetails_btnClose';

    QuoteDashboard.functions = {};
    QuoteDashboard.functions.paginate = function () {
        $.ajax({
            data: {
                predicate: QuoteDashboard.DynamicFilter.functions.getPredicate(),
                page: QuoteDashboard.status.currentPage,
                itemsPerPage: QuoteDashboard.status.itemsPerPage,
                orderby: QuoteDashboard.status.table_header_sortField,
                order: QuoteDashboard.status.table_header_sortFieldOrder
            },
            url: QuoteDashboard.urls.getPage,
            type: 'post',
            beforeSend: function () {
                $('.loading').show();
            },
            success: function (response) {
                var data = $.parseJSON(response),
                    pager = new BootstrapPager(data,
                        QuoteDashboard.eventHandlers.pager_btnPagerPages_onClick),
                    pagerItems = pager.getCurrentPagedItems(),
                    pagerControl = pager.getPagerControl();
                $(QuoteDashboard.htmlBindings.pager_container).empty()
                    .append(pagerControl);
                QuoteDashboard.functions.updateTable(pagerItems);

                $(QuoteDashboard.htmlBindings.itemCounter).html(pager.itemsCount);
                $('.loading').hide();
            }
        });

    };

    QuoteDashboard.functions.getDictionaries = function () {
        $.ajax({
            data: {},
            url: QuoteDashboard.urls.getDictionaries,
            type: 'post',
            beforeSend: function () {
                $('.loading').show();
            },
            success: function (response) {
                var data = $.parseJSON(response);
                QuoteDashboard.dictionaries = data;
                $('.loading').hide();
            }
        });
    };
    QuoteDashboard.functions.updateTable = function (items) {
        var $table = $(QuoteDashboard.htmlBindings.table),
            $tableBody = $table.children('tbody'),
            index;
        $tableBody.empty();
        for (index in items) {
            if (items.hasOwnProperty(index)) {
                $tableBody.append(QuoteDashboard.functions.buildTableItem(items[index], '', "item-field"));
            }
        }
        QuoteDashboard.functions.bindTableItemsEventHandlers();
    };

    QuoteDashboard.functions.buildTableItem = function (dataRow, trClass, tdClass) {
        var doc = global.document,
            result = doc.createElement('tr'),
            simpleTdBuilder = function (data) {
                var td = doc.createElement('td');

                td.className = tdClass;
                td.appendChild(doc.createTextNode(data));
                return td;
            },
            withLinkTdBuilder = function (data, linkClassName, tdLinkClass) {
                var td = doc.createElement('td'),
                    a = doc.createElement('a');

                a.href = "#";
                a.className = linkClassName;
                a.dataset.qutno = dataRow.qutno;
                if (typeof data === "string") {
                    a.appendChild(doc.createTextNode(data));
                } else {
                    a.appendChild(data);
                }
                td.className = tdLinkClass || tdClass;
                td.appendChild(a);
                return td;
            },
            selectBuilder = function (current, values) {
                var index, option, currentId, currentValue,
                    select = doc.createElement('select');

                option = doc.createElement('option');
                option.appendChild(doc.createTextNode("Empty"));
                select.appendChild(option);

                for (index in values) {
                    if (values.hasOwnProperty(index)) {
                        currentId = values[index].id;
                        currentValue = values[index].descrip;
                        option = doc.createElement('option');
                        if (current === currentId) {
                            option.selected = "selected";
                        }
                        option.value = currentId;
                        option.appendChild(doc.createTextNode(currentValue));
                        select.appendChild(option);
                    }
                }
                select.className = 'form-control update-dropdown';
                return select;
            },
            withSelectBuilder = function (data, dictionary, dropdownClassName) {
                var  td = doc.createElement('td'),
                    select = selectBuilder(data, dictionary);
                select.dataset.ordnum = dataRow.ordnum;
                select.className += ' select2-nosearch ' + dropdownClassName;
                td.appendChild(select);

                return td;
            },
            tdQuoteNoBuilder = function () {
                return withLinkTdBuilder(dataRow.qutno, QuoteDashboard.htmlBindings.table_body_btnQuoteNo.slice(1));
            },
            tdProjectNoBuilder = function () {
                return simpleTdBuilder(dataRow.projno);
            },
            tdCompanyBuilder = function () {
                return simpleTdBuilder(dataRow.company);
            },
            tdVesselBuilder = function () {
                return simpleTdBuilder(dataRow.vesselid);
            },
            tdJobTypeBuilder = function () {
                return simpleTdBuilder(dataRow.sotypecode);
            },
            tdDescriptionBuilder = function () {
                return simpleTdBuilder(dataRow.jobdescrip);
            },
            tdStatusBuilder = function () {
                return withSelectBuilder(dataRow.status,
                    QuoteDashboard.dictionaries.status, 'status');
            },
            tdCreateBuilder = function () {
                return simpleTdBuilder(dataRow.qutdate);
            },
            tdWONoBuilder = function () {
                return simpleTdBuilder(dataRow.ordnum);
            },
            tdCostCenterBuilder = function () {
                return simpleTdBuilder(dataRow.cstctid);
            },
            tdProjectManager1Builder = function () {
                return simpleTdBuilder(dataRow.projectManager1);
            },
            tdProjectManager2Builder = function () {
                return simpleTdBuilder(dataRow.projectManager2);
            },
            tdAttachedFilesBuilder = function () {
                var spanGlyphIcon = doc.createElement('span');

                spanGlyphIcon.className = 'glyphicon glyphicon-folder-close';
                return withLinkTdBuilder(spanGlyphIcon, QuoteDashboard.htmlBindings.table_body_btnAttach.slice(1), 'item-action item-files');
            };
        result.className = trClass;
        result.appendChild(tdQuoteNoBuilder());
        result.appendChild(tdProjectNoBuilder());
        result.appendChild(tdCompanyBuilder());
        result.appendChild(tdVesselBuilder());
        result.appendChild(tdJobTypeBuilder());
        result.appendChild(tdDescriptionBuilder());
        result.appendChild(tdStatusBuilder());
        result.appendChild(tdCreateBuilder());
        result.appendChild(tdWONoBuilder());
        result.appendChild(tdCostCenterBuilder());
        result.appendChild(tdProjectManager1Builder());
        result.appendChild(tdProjectManager2Builder());
        result.appendChild(tdAttachedFilesBuilder());

        return result;
    };

    QuoteDashboard.functions.bindTableItemsEventHandlers = function () {

        $(QuoteDashboard.htmlBindings.table_body_btnQuoteNo).on('click',
            QuoteDashboard.eventHandlers.control_quoteDetails_itemsLink_onClick);
//
//        $(Dashboard.htmlBindings.table_body_btnVessel).on('click',
//            Dashboard.eventHandlers.control_vesselForm_itemsLink_onClick);
//
//        $(Dashboard.htmlBindings.table_body_drpMaterialStatus).on('change',
//            Dashboard.eventHandlers.table_body_drpMaterialStatus_onChange);
//
//        $(Dashboard.htmlBindings.table_body_drpJobStatus).on('change',
//            Dashboard.eventHandlers.table_body_drpJobStatus_onChange);
//
        $('select.select2-nosearch').select2({minimumResultsForSearch: Infinity});

        $(QuoteDashboard.htmlBindings.table_body_btnAttach).on('click',
            QuoteDashboard.eventHandlers.table_body_btnAttach_onClick);

    };
    QuoteDashboard.functions.bindEventHandlers = function () {
        $(QuoteDashboard.htmlBindings.drpItemPerPage).on('click',
            QuoteDashboard.eventHandlers.drpItemPerPage_onClick);

        $(QuoteDashboard.htmlBindings.control_quoteDetails_btnClose).on('click',
            function () {
                $(QuoteDashboard.htmlBindings.control_quoteDetails).hide();
            });

        $(QuoteDashboard.htmlBindings.table_header_btnSort).on('click',
            QuoteDashboard.eventHandlers.table_body_btnSalesOrder_onClick);

        $(QuoteDashboard.htmlBindings.pager_btnPagerPages).on('click',
            QuoteDashboard.eventHandlers.pager_btnPagerPages_onClick);
//
        QuoteDashboard.functions.bindTableItemsEventHandlers();
    };

    QuoteDashboard.eventHandlers = {};
    QuoteDashboard.eventHandlers.drpItemPerPage_onClick = function (event) {
        var $target = $(event.target),
            value = $target.html();
        QuoteDashboard.status.itemsPerPage = value;
        $(QuoteDashboard.htmlBindings.drpItemPerPageValue).text(value);

        // When change items per page, show page one
        QuoteDashboard.status.currentPage = 1;

        QuoteDashboard.functions.paginate();
    };
    QuoteDashboard.eventHandlers.pager_btnPagerPages_onClick = function (event) {
        var $target = $(event.target),
            value = $target.data('page');
        QuoteDashboard.status.currentPage = value;
        QuoteDashboard.functions.paginate();
    };

    QuoteDashboard.eventHandlers.table_body_btnSalesOrder_onClick = function (event) {
        var $target = $(event.target),
            sortingField = $target.data('field');

        if (QuoteDashboard.status.table_header_sortLastButton !== null) {
            QuoteDashboard.status.table_header_sortLastButton.removeClass('asc desc');
        }
        if (QuoteDashboard.status.table_header_sortField !== sortingField) {
            QuoteDashboard.status.table_header_sortFieldOrder = '';
        }
        QuoteDashboard.status.table_header_sortField = sortingField;
        if (QuoteDashboard.status.table_header_sortFieldOrder === 'ASC') {
            QuoteDashboard.status.table_header_sortFieldOrder = 'DESC';
            $target.addClass('asc').removeClass('desc');
        } else {
            QuoteDashboard.status.table_header_sortFieldOrder = 'ASC';
            $target.addClass('desc').removeClass('asc');
        }
        QuoteDashboard.status.table_header_sortLastButton = $target;
        QuoteDashboard.functions.paginate();
    };
    QuoteDashboard.eventHandlers.table_body_drpstatus_onChange = function () {

//        var $target = $(event.target),
//            ordnum = $target.data('ordnum'),
//            value = $target.val();
//
//        $.ajax({
//            data: {
//                ordnum: ordnum,
//                jobstatus: value
//            },
//            url: Dashboard.urls.updateSOHEADJobStatus,
//            type: 'post',
//            beforeSend: function () {
//                $('.loading').show();
//            },
//            success: function (response) {
//                var data = $.parseJSON(response);
//                if (data === 'success') {
//                    $('.loading').hide();
//                } else {
//                    throw data;
//                }
//            }
//        });
    };
    QuoteDashboard.eventHandlers.control_quoteDetails_itemsLink_onClick = function (event) {
        console.log($(event.target).html());
        var quoteNoValue = $(event.target).html(),
            params = { quoteNo : quoteNoValue},
            dashboardViewHeight,
            salesOrderViewHeight;

        $.post(QuoteDashboard.urls.getQuoteDetails, params)
            .done(function (response) {
                response = $.parseJSON(response);
                console.log(response);
                var viewModel = QuoteDashboard.QuoteDetails.viewModel;

                if (response.success) {
                    viewModel.qutno(response.quoteDetails.qutno);
                    viewModel.status(response.quoteDetails.status);
                    viewModel.ordnum(response.quoteDetails.ordnum);
                    viewModel.date(response.quoteDetails.date);
                    viewModel.custno(response.quoteDetails.custno);
                    viewModel.projectLocation(response.quoteDetails.projectLocation);
                    viewModel.notes(response.quoteDetails.notes);
                    viewModel.companyName(response.quoteDetails.companyName);
                    viewModel.address(response.quoteDetails.address);
                    viewModel.city(response.quoteDetails.city);
                    viewModel.state(response.quoteDetails.state);
                    viewModel.zip(response.quoteDetails.zip);
                    viewModel.phone(response.quoteDetails.phone);
                    viewModel.subtotal(response.quoteDetails.subtotal);
                    viewModel.discount(response.quoteDetails.discount);
                    viewModel.tax(response.quoteDetails.tax);
                    viewModel.shipping(response.quoteDetails.shipping);
                    viewModel.total(response.quoteDetails.total);
                    viewModel.ponum(response.quoteDetails.ponum);
                    viewModel.company(response.quoteDetails.company);
                    viewModel.destino(response.quoteDetails.destino);
                    viewModel.sotypecode(response.quoteDetails.sotypecode);
                    viewModel.jobdescrip(response.quoteDetails.jobdescrip);
                    viewModel.technam1(response.quoteDetails.technam1);
                    viewModel.technam2(response.quoteDetails.technam2);

                    viewModel.cstctid(response.quoteDetails.cstctid);
                    viewModel.projno(response.quoteDetails.projno);

                    viewModel.items(response.quoteDetails.itemsCollection);
                }
            })
            .fail(function (response) {
                console.log(response);
            });
        dashboardViewHeight = parseInt($(QuoteDashboard.htmlBindings.container).css('height'), 10);
        salesOrderViewHeight = parseInt($(QuoteDashboard.htmlBindings.control_quoteDetails).css('height'), 10);

        if (dashboardViewHeight > salesOrderViewHeight) {
            $(QuoteDashboard.htmlBindings.control_quoteDetails).css('height', dashboardViewHeight);
        }
        $(QuoteDashboard.htmlBindings.control_quoteDetails).show();
    };
    QuoteDashboard.eventHandlers.table_body_btnAttach_onClick = function (event) {

        var $target = $(event.target),
            currentQutno = $target.parent().data('qutno') + '_qu';
        QuoteDashboard.status.currentQuote = currentQutno;
        ProjectFiles.functions.loadFileTree(currentQutno);
        $(ProjectFiles.htmlBindings.modal_ProjectFiles).modal('show');
        //QuoteDashboard.FileManagerWidget.loadFileTree(currentQutno);
        //$(QuoteDashboard.FileManagerWidget.htmlBindings.modal_ProjectFiles).modal('show');
    };
    QuoteDashboard.init = function (defaultUserFilter) {

        QuoteDashboard.status.itemsPerPage = $(QuoteDashboard.htmlBindings.drpItemPerPageValue).text();
        QuoteDashboard.functions.getDictionaries();

        DynamicFilter.init(defaultUserFilter);
        QuoteDetails.init();
        ProjectFiles.init();
        //QuoteDashboard.FileManagerWidget = new App.FileManager(
        //    App.urls.treeViewManager.getNode,
        //    App.urls.treeViewManager.getContent,
        //    App.urls.treeViewManager.createNode,
        //    App.urls.treeViewManager.deleteNode,
        //    App.urls.treeViewManager.renameNode,
        //    App.urls.treeViewManager.moveNode,
        //    App.urls.treeViewManager.copyNode,
        //    App.urls.fileManager.deleteFile
        //);
        //QuoteDashboard.FileManagerWidget.init();
        QuoteDashboard.functions.bindEventHandlers();
    };

}(window, window.jQuery, window.App));
