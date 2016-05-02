(function (global, $, knockBack, knockout, backbone) {
    "use strict";
    var dandelionjs = global.dandelion,
        App = dandelionjs.namespace('App', global);

    App.EquipmentHistoryDashboard = (function () {

        var _urls, _status, _functions, _dictionaries, _htmlBindings, _eventHandlers, _mvvm;

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
            dateRangePickerSingle: '.daterangepicker-single',
            tableMain: '#equipmentHistoryDashboardTable',
            tableMainFieldWorkOrder: '.field-workorder',
            tableMainFieldStatus: '.field-status',
            modalEquipmentHistoryFormEdit: '#modal-equipment-history-form-edit'
        };

        _mvvm = {
            modalEquipmentHistoryFormAdd: (function (global, $, knockout) {
                var _htmlBindings, _functions, _eventHandlers,
                    EquipmentHistoryModel, EquipmentHistoryViewModel,
                    equipmentHistoryModel, equipmentHistoryViewModel;

                _htmlBindings = {
                    modalViewElement: '#modal-equipment-history-form-add',
                    controlWorkOrder: '.control-work-order',
                    controlProjectManager: '.control-project-manager',
                    controlDateOut: '.control-installdte',
                    controlExpactedIn: '.control-expdtein',
                    controlReceived: '.control-daterec'
                };

                _functions = {
                    usePlugins: function () {
                        // [Work Order] control
                        $(_htmlBindings.controlWorkOrder).select2({
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
                            /*placeholder: 'Select One ...',*/
                            //allowClear: true
                        });

                        // [Project Manager] control
                        $(_htmlBindings.controlProjectManager).select2({
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
                            },
                            /*placeholder: 'Select One ...',*/
                            //allowClear: true
                        });
                    },
                    reset: function () {
                        equipmentHistoryViewModel.reset();
                        // Reseting Select2 Controls
                        $(_htmlBindings.controlWorkOrder).val(null).trigger('change');
                        $(_htmlBindings.controlProjectManager).val(null).trigger('change');
                        // Reseting Date Range Picker Single Controls
                        $(_htmlBindings.controlDateOut).val('');
                        $(_htmlBindings.controlExpactedIn).val('');
                        $(_htmlBindings.controlReceived).val('');
                    },
                    saveHistoryCallback : function () {
                        throw 'Exception: Not implemented yet';
                    }
                };

                _eventHandlers = {
                    saveHistory_OnDone: function (response) {
                        global.console.log(response);
                        var data = $.parseJSON(response);
                        global.console.log(data);
                        _functions.saveHistoryCallback(data.equipid, data.ordnum, data.status);
                        hide();
                    }
                };

                EquipmentHistoryModel = function () {
                    this.equipid = '';
                    this.ordnum = '';
                    this.inspectno = '';
                    this.installdte = '';
                    this.expdtein = '';
                    this.daterec = '';
                };

                EquipmentHistoryViewModel = function (model) {
                    var self = this;
                    self.equipid = knockout.observable(model.equipid);
                    self.ordnum = knockout.observable(model.ordnum);
                    self.inspectno = knockout.observable(model.inspectno);
                    self.installdte = knockout.observable(model.installdte);
                    self.expdtein = knockout.observable(model.expdtein);
                    self.daterec = knockout.observable(model.daterec);

                    self.saveHistory = function () {
                        self.installdte($(_htmlBindings.controlDateOut).val());
                        self.expdtein($(_htmlBindings.controlExpactedIn).val());
                        self.daterec($(_htmlBindings.controlReceived).val());

                        //global.console.log('Equipid: ', self.equipid());
                        //global.console.log('Ordnum: ', self.ordnum());
                        //global.console.log('inspectno: ', self.inspectno());
                        //global.console.log('installdte: ', self.installdte());
                        //global.console.log('expdtein: ', self.expdtein());
                        //global.console.log('daterec: ', self.daterec());

                        $.post(
                            _urls.addEquipmentHistoryUrl,
                            {
                                equipid: self.equipid(),
                                ordnum: self.ordnum(),
                                inspectno: self.inspectno(),
                                installdte: self.installdte(),
                                expdtein: self.expdtein(),
                                daterec: self.daterec()
                            }
                        )
                            .done(_eventHandlers.saveHistory_OnDone)
                            .fail(function onFail(response) {
                                throw 'POST Fail with :' + response;
                            });
                    };

                    self.reset = function () {
                        global.console.dir(self);
                        self.equipid = knockout.observable('');
                        self.ordnum = knockout.observable('');
                        self.inspectno = knockout.observable('');
                        self.installdte = knockout.observable('');
                        self.expdtein = knockout.observable('');
                        self.daterec = knockout.observable('');
                    };
                };

                /**
                 * Add equipment history modal form MVVM logic initialization
                 */
                function init() {
                    var view;
                    view = global.document.getElementById(_htmlBindings.koViewElement);
                    equipmentHistoryModel = new EquipmentHistoryModel();
                    equipmentHistoryViewModel = new EquipmentHistoryViewModel(equipmentHistoryModel);
                    knockout.applyBindings(equipmentHistoryViewModel, view);
                    _functions.usePlugins();
                }

                /**
                 * Show Add Equipment History Modal Window
                 */
                function show(equipid) {
                    _functions.reset();
                    equipmentHistoryViewModel.equipid(equipid);
                    $(_htmlBindings.modalViewElement).modal('show');
                }

                /**
                 * Hide Add Equipment History Modal Window
                 */
                function hide() {
                    $(_htmlBindings.modalViewElement).modal('hide');
                }

                function setSaveHistoryCallback(callback) {
                    _functions.saveHistoryCallback = callback;
                }

                return {
                    init: init,
                    showFor: show,
                    hide: hide,
                    setSaveHistoryCallback: setSaveHistoryCallback
                };

            }(global, $, knockout))
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
                _mvvm.modalEquipmentHistoryFormAdd.showFor($(this).data('equipid'));
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
                $(_htmlBindings.dateRangePickerSingle).daterangepicker({
                    singleDatePicker: true,
                    format: 'YYYY-MM-DD',
                    startDate: global.moment(),
                    endDate: global.moment()
                });
            },
            paginate: function () {
                //TODO: Implement
                throw 'Exception: Not implemented yet';
            },
            updateEquip: function (equipID, workOrder, status) {
                global.console.log("Udating Equip with: ", equipID, status, workOrder);
                var $row = $(_htmlBindings.tableMain).find('tr[data-equipid=' + equipID + ']');
                // Updating the Work Order (ordnum) field
                $row.find(_htmlBindings.tableMainFieldWorkOrder).text(workOrder);
                // Updating the status value from current equipment row on the view
                $row.find(_htmlBindings.tableMainFieldStatus).find('.value').text(status);
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

            global.console.log('Initializing MVVM related logic:');
            for (index in _mvvm) {
                if (_mvvm.hasOwnProperty(index)) {
                    global.console.log('\t', index, ':', _mvvm[index]);
                    _mvvm[index].init();
                }
            }
            _mvvm.modalEquipmentHistoryFormAdd.setSaveHistoryCallback(_functions.updateEquip);
        }

        return {
            init: init,
            setItemsPerPageSelector: setItemsPerPageSelector,
            setStatusSelector: setStatusSelector,
            addDictionary: addDictionary,
            addUrl: addUrl
        };
    }());
}(window, window.jQuery, window.kb, window.ko, window.Backbone));
