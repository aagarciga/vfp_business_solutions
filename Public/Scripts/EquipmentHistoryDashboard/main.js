(function (global, $) {
    "use strict";
    var dandelionjs = global.dandelion,
        App = dandelionjs.namespace('App', global);

    App.EquipmentHistoryDashboard = (function () {

        var _urls, _status, _functions, _dictionaries, _htmlBindings, _eventHandlers;

        /**
         * Urls
         */
        _urls = {};
        /**
         * Statuses
         */
        _status = {
            itemsPerPage: 0,
            currentPage: 0
        };
        /**
         * Dictionaries
         */
        _dictionaries = {};
        /**
         * HTML Bindings
         */
        _htmlBindings = {
            dropdown: '.dropdown',
            itemsPerPageSelector: '.items-per-page-selector',
            statusSelector: '.status-selector',
            btnActionFilesDialog: '.btn-action-files-dialog',
            btnActionAdd: '.btn-action-add',
            btnActionEdit: '.btn-action-edit',
            btnActionView: '.btn-action-view',
            modalEquipmentHistoryFormAdd: '#modal-equipment-history-form-add',
            projectManagerSelector: '.project-manager-selector',
            workOrderSelector: '.work-order-selector',
            dateRangePickerSingle: '.daterangepicker-single',
            modalEquipmentHistoryFormEdit: '#modal-equipment-history-form-edit'
        };
        /**
         * Event Handlers
         */
        _eventHandlers = {
            dropdown_OnClick: function (event) {
                var $anchor, value;
                $anchor = $(this);
                value = $anchor.html();
                $anchor.parents(_htmlBindings.dropdown).find('.value').text(value);
            },
            itemsPerPageSelector_OnClick: function (event) {
                _status.itemsPerPage = $(this).html();
                // Reset Current Page
                _status.currentPage = 1;
                _functions.paginate();
            },
            statusSelector_OnClick: function (event) {
                var status;
                status = $(this).html();
                throw 'Exception: Not implemented yet. Do something with status: ' + status;
            },
            btnActionFilesDialog_OnClick: function (event) {
                throw 'Exception: Not implemented yet';
            },
            btnActionAdd_OnClick: function (event) {
                $(_htmlBindings.modalEquipmentHistoryFormAdd).modal('show');
                //throw 'Exception: Not implemented yet';
            },
            btnActionEdit_OnClick: function (event) {
                $(_htmlBindings.modalEquipmentHistoryFormEdit).modal('show');
                throw 'Exception: Not implemented yet';
            },
            btnActionView_OnClick: function (event) {
                throw 'Exception: Not implemented yet';
            }
        };
        /**
         * Functions
         */
        _functions = {
            bindEventHandlers: function () {
                $(_htmlBindings.dropdown).on('click', 'a', _eventHandlers.dropdown_OnClick);
                $(_htmlBindings.itemsPerPageSelector).on('click', 'a', _eventHandlers.itemsPerPageSelector_OnClick);
                $(_htmlBindings.statusSelector).on('click', 'a', _eventHandlers.statusSelector_OnClick);
                $(_htmlBindings.btnActionFilesDialog).on('click', _eventHandlers.btnActionFilesDialog_OnClick);
                $(_htmlBindings.btnActionAdd).on('click', _eventHandlers.btnActionAdd_OnClick);
                $(_htmlBindings.btnActionEdit).on('click', _eventHandlers.btnActionEdit_OnClick);
                $(_htmlBindings.btnActionView).on('click', _eventHandlers.btnActionView_OnClick);
            },
            usePlugins: function () {

                // Modal: modalEquipmentHistoryFormAdd [Work Order] control
                $(_htmlBindings.workOrderSelector).select2({
                    theme: "bootstrap",
                    ajax: {
                        url: _urls.workOrderSelectorAjaxUrl,
                        dataType: 'json',
                        delay: 250,
                        processResults: function (data, params) {
                            //global.console.log('data: ', data);
                            //global.console.log('params: ', params);
                            params.page = params.page || 1;
                            return {
                                results: data.items,
                                pagination: {
                                    more: (params.page * 30) < data.totalCount
                                }
                            };
                        },
                        cache: true
                    },
                    //minimumInputLength: 1
                });

                // Modal: modalEquipmentHistoryFormAdd [Project Manager] control
                $(_htmlBindings.projectManagerSelector).select2({
                    theme: "bootstrap",
                    ajax: {
                        url: _urls.projectManagerSelectorAjaxUrl,
                        dataType: 'json',
                        delay: 250,
                        processResults: function (data, params) {
                            //global.console.log('data: ', data);
                            //global.console.log('params: ', params);
                            params.page = params.page || 1;
                            return {
                                results: data.items,
                                pagination: {
                                    more: (params.page * 30) < data.totalCount
                                }
                            };
                        },
                        cache: true
                    }
                });

                $(_htmlBindings.dateRangePickerSingle).daterangepicker({
                    singleDatePicker: true,
                    format: 'YYYY-MM-DD',
                    startDate: global.moment(),
                    endDate: global.moment()
                })
            },
            paginate: function () {
                //TODO: Implement
                throw 'Exception: Not implemented yet';
            }
        };

        function setItemsPerPageSelector(selector) {
            _htmlBindings.itemsPerPageSelector = selector;
        }
        function setStatusSelector(selector) {
            _htmlBindings.statusSelector = selector;
        }
        function addDictionary(name, dictionary) {
            _dictionaries[name] = dictionary;
        }
        function addUrl(name, url) {
            _urls[name] = url;
        }
        function init(filter) {
            var index;
            global.console.log('filter: ', filter);

            global.console.log('HTML Bindings');
            for (index in _htmlBindings) {
                if (_htmlBindings.hasOwnProperty(index)) {
                    global.console.log('\t', index, ':', _htmlBindings[index]);
                }
            }

            global.console.log('Binding Event Handlers');
            _functions.bindEventHandlers();

            global.console.log('Use Plugins');
            _functions.usePlugins();

            global.console.log('Dictionaries:');
            global.console.log(_dictionaries);
        }
        return {
            init: init,
            setItemsPerPageSelector: setItemsPerPageSelector,
            setStatusSelector: setStatusSelector,
            addDictionary: addDictionary,
            addUrl: addUrl
        };
    }());
}(window, window.jQuery));
