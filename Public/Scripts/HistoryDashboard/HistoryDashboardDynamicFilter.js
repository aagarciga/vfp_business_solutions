/**
 * @author Alex
 * @namespace App.HistoryDashboard.DynamicFilter
 * @param {window} global
 * @param {jQuery} $
 * @param {Object} App
 * @returns {undefined}
 * @inner JSLint Passed
 */
(function (global, $, App) {
    "use strict";


    var dandelion = global.dandelion,
        DynamicFilter = dandelion.namespace('App.HistoryDashboard.DynamicFilter', global);

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

    DynamicFilter.functions.splitDate = function (date) {
        var dateSplit = date.split('/');
        if (dateSplit.length === 3){
            return dateSplit;
        }
        return ["12", "30", "1899"];
    };

    DynamicFilter.functions.splitDateRange = function (dateRangeValue){
        var dateRangeSplitValue = dateRangeValue.split('-');
        if (dateRangeSplitValue.length === 2)
        {
            var inferiorDate = dateRangeSplitValue[0], superDate = dateRangeSplitValue[1];
            var inferiorDateSplit = DynamicFilter.functions.splitDate(inferiorDate), superDateSplit = DynamicFilter.functions.splitDate(superDate);
            return {inferiorLimit: inferiorDateSplit, superLimit: superDateSplit};
        }
        return {inferiorLimit: DynamicFilter.functions.splitDate(""), superLimit: DynamicFilter.functions.splitDate("")};
    };

    DynamicFilter.functions.getFilterTree = function (){
        var $filterComponents = $(DynamicFilter.htmlBindings.filterFieldsContainer).children();
        var Node = (function() {
            function Node(nodeType, nodeValue, nodeChildren) {
                this.nodeType = nodeType;
                this.nodeValue = nodeValue;
                this.nodeChildren = nodeChildren;
            }
            return Node;
        })();
        var nodeChildren = [];
        var nodeValue = [];
        var logicalNode = null;


        $filterComponents.each( function () {
            var $currentComponent = $(this);
            var $currentComponentValue;
            var $currentComponentControl;
            var currentComponentControlValue;
            var currentComponentControlFieldName;
            var currentNode;
            if ($currentComponent.hasClass('btn-group unary-logical-operator')){
                $currentComponentValue = $currentComponent.children('button').text();
                if($currentComponentValue === ""){
                    currentNode = new Node('positive', '');
                } else if ($currentComponentValue === "Not"){
                    currentNode = new Node('not', '');
                }
                logicalNode = currentNode;

            } else if ($currentComponent.hasClass('form-group')){
                $currentComponentControl = $currentComponent.find('input, select');
                currentComponentControlValue = $currentComponentControl.val();
                currentComponentControlFieldName = $currentComponentControl.data('fieldname');

                var field = currentComponentControlFieldName;
                var tableField = DynamicFilter.status.fieldsDefinition[field]['table'];
                var captionField = DynamicFilter.status.fieldsDefinition[field]["displayName"];

                var fieldNode = new Node('field', [field, tableField, captionField], []);

                if ($currentComponentControl.hasClass('daterangepicker')){
                    var dateRange = DynamicFilter.functions.splitDateRange(currentComponentControlValue);
                    var inferiorDateLimitNode = new Node('date', dateRange.inferiorLimit, []);
                    var superDateLimitNode = new Node('date', dateRange.superLimit, []);

                    currentNode = new Node('dateRange', '', [fieldNode, inferiorDateLimitNode, superDateLimitNode]);
                }else{
                    var valueNode = new Node('string', currentComponentControlValue, []);

                    currentNode = new Node('like', '', [fieldNode, valueNode]);
                }
                logicalNode.nodeChildren = [currentNode];

                nodeChildren.push(logicalNode);
            }
            else if ($currentComponent.hasClass('binary-logical-operator')){
                $currentComponentValue = $currentComponent.children('button').text();

                nodeValue.push($currentComponentValue);
            }
        });

        var filterTree = new Node('blockExpression', nodeValue, nodeChildren);

        return filterTree;
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

                var field = currentComponentControlFieldName;
                var tableField = DynamicFilter.status.fieldsDefinition[field]['table'];
                var fieldDefinition = '[' + tableField + '].[' + field + ']'

                if (currentComponentControlValue === '') {
                    DynamicFilter.status.predicate += "EMPTY(" + fieldDefinition + ") ";
                } else if ($currentComponentControl.hasClass('daterangepicker')) {
                    dateRange = currentComponentControlValue.split(' - ');
                    DynamicFilter.status.predicate += "(" + fieldDefinition +
                        " >= '" + dateRange[0] +
                        "' AND " + fieldDefinition +
                        " <= '" + dateRange[1] +
                        "') ";
                } else if ($currentComponentControl.hasClass('daterangepicker-single')) {
                    DynamicFilter.status.predicate += fieldDefinition + " = '" + currentComponentControlValue + "' ";
                } else {
                    if ($currentComponentControl.data('value-type') === 'numeric') {
                        // Logic for numbers
                        DynamicFilter.status.predicate += fieldDefinition +
                            " = " + currentComponentControlValue +
                            " ";
                    } else {
                        // Logic for strings
                        DynamicFilter.status.predicate += "LOWER(" + fieldDefinition +
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
        App.HistoryDashboard.functions.paginate();
    };
    DynamicFilter.functions.loadFilter = function (filterId, filter) {
        $.ajax({
            data: {
                filterid: filterId
            },
            url: App.HistoryDashboard.urls.getSavedFilter,
            type: 'post',
            beforeSend: function () {
                $('.loading').show();
            },
            success: function (response) {
                var data = $.parseJSON(response),
                    //values,
                    $filterFields;
                if (data.success) {
                    if (data.expfields !== ''){
                        //values = data.expfrom.split(", "); // Legacy data are saved with format value1, value2, ... valuenN
                        $filterFields = $(DynamicFilter.htmlBindings.filterFieldsContainer);
                        $filterFields.append(data.expfields);
                        //$filterFields.find('select, input')
                        //    .each(function (index) {
                        //        $(this).val(values[index]);
                        //    });
                        DynamicFilter.functions.bindOperatorGroupsEventHandlers();
                        DynamicFilter.functions.bindFormGroupsEnventhandlers();

                        // Client request behavior (on filter load hide dynamic filter fields)
                        $(DynamicFilter.htmlBindings.controls.btnToggleVisibility).click();

                        DynamicFilter.functions.enableControls();

                        if (filter){
                            DynamicFilter.functions.filter();
                        }
                    }
                } else {
                    throw "Filter not loaded";
                }
                $('.loading').hide();
            }
        });
    };
    DynamicFilter.functions.loadHtmlFilter = function(filterId){
        DynamicFilter.functions.loadFilter(filterId, false);
    };
    DynamicFilter.functions.loadHtmlFilterAndFilter = function(filterId){
        DynamicFilter.functions.loadFilter(filterId, true);
    };
    DynamicFilter.functions.createOperatorGroup = function (first) {
        var tmplFirstOperatorGroup = '<div class="btn-group unary-logical-operator"><button type="button" class="btn btn-default btn-filter-modifier disabled" style="opacity:1"></button><button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></button><ul class="dropdown-menu"><li class="current"><a href="#" style="display: inline-block; height: 26px; width: 100%;">Clear Not</a></li><li><a href="#">Not</a></li></ul></div>',
            tmplOperatorGroup = '<div class="btn-group binary-logical-operator"><button type="button" class="btn btn-default btn-filter-modifier disabled" style="opacity:1">And</button><button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></button><ul class="dropdown-menu"><li class="current"><a href="#">And</a></li><li><a href="#">Or</a></li></ul></div>';
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

        //TODO: Descoment code
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
        DynamicFilter.functions.loadHtmlFilterAndFilter(filterId);
    };
    DynamicFilter.eventHandlers.drpSavedFilterItem_btnDelete_onClick = function (event) {
        var $btnDelete = $(event.currentTarget),
            $btnSavedFilter = $btnDelete.prev(),
            filterId = $btnSavedFilter.data('filterid');

        $.ajax({
            data: {
                filterId: filterId
            },
            url: App.HistoryDashboard.urls.deleteFilter,
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
            $secondOperandGroup,
            $formGroup;
        $filterFieldsContainer.append($operandGroup);
        DynamicFilter.functions.bindOperatorGroupEventHandler($operandGroup);
        if(!isFirstField){
            $secondOperandGroup = DynamicFilter.functions.createOperatorGroup(true);
            $filterFieldsContainer.append($secondOperandGroup);
            DynamicFilter.functions.bindOperatorGroupEventHandler($secondOperandGroup);
        }

        if (fieldType === 'text') {
            $formGroup = DynamicFilter.functions.createTextField($button.data('field'), $button.text(), $button.data('field-value-type'));
        } else if (fieldType === 'date' || fieldType === 'date-single') {
            $formGroup = DynamicFilter.functions.createDateField($button.data('field'), $button.text(), isDateRanged);
        } else if (fieldType === 'dropdown') {
            dropdownValues = global.App.HistoryDashboard.dictionaries[$button.data('field-collection')];
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
                if (DynamicFilter.status.areControlsEnabled) {
                    DynamicFilter.functions.disableControls();
                }
            } else {
                $nextOperator.remove();
            }
        } else {
            var $previousPreviousOperator = $previousOperator.prev();
            if ($previousPreviousOperator.prev().length > 0)
            {
                $previousPreviousOperator.remove();
            }
        }
        $previousOperator.remove();
        $formGroup.remove();
        DynamicFilter.functions.filter();
    };
    DynamicFilter.eventHandlers.modalSaveFilter_btnSave_onClick = function () {
        /**
         * @param {object} event Event related object
         */
        var $filterName = $(DynamicFilter.htmlBindings.modalSaveFilter_txtName),
            filterName = $filterName.val(),
            jsonFilterTree = JSON.stringify(DynamicFilter.functions.getFilterTree()),
            $drpSavedFilters = $(DynamicFilter.htmlBindings.drpSavedFilters);

        if (filterName !== "" && /\w/.test(filterName)) {
            $.ajax({
                data: {
                    filterName      : filterName,
                    jsonFilterTree  : jsonFilterTree,
                },
                url: App.HistoryDashboard.urls.saveFilter,
                type: 'post',
                beforeSend: function () {
                    $('.loading').show();
                },
                success: function (response) {
                    console.log(response);
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

    DynamicFilter.init = function (filterId, fieldsDefinition, equipid) {
        DynamicFilter.status.fieldsDefinition = fieldsDefinition;
        DynamicFilter.status.equipid = equipid;
        DynamicFilter.functions.disableControls();
        if (filterId) {
            DynamicFilter.status.filterId = filterId;
            DynamicFilter.functions.reset(true);
            DynamicFilter.functions.loadHtmlFilter(filterId);
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
