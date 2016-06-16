(function (global, $, knockBack, knockout, backbone) {
    "use strict";
    var dandelionjs = global.dandelion,
        App = dandelionjs.namespace('App', global);

    /**
     * Equipment Dashboard
     * @type {{init, setItemsPerPage, setItemsPerPageSelector, setStatusSelector, addDictionary, addUrl, getCurrentID}}
     */
    App.EquipmentHistoryDashboard = (function () {
        var urls, status, functions, dictionaries, htmlBindings, eventHandlers, mvvm, modules, ProjectFiles, colors;

        ProjectFiles = App.EquipmentHistoryDashboard.ProjectFiles;
        /**
         * Urls
         */
        urls = {};

        colors = {
            selectedItemColor: '#F5EEDE'
        };

        /**
         * Status
         * @type {{itemsPerPage: number, currentPage: number, sortField: string, sortFieldOrder: string, sortLastButton: null, currentID: null}}
         */
        status = {
            itemsPerPage: 0,
            currentPage: 0,
            sortField: 'equipid',
            sortFieldOrder: 'ASC',
            sortLastButton: null,
            currentID: null
        };

        /**
         * Dictionaries
         */
        dictionaries = {};

        /**
         * HTML Bindings
         * @type {{dashboardContainer: string, dropdown: string, itemsPerPageSelector: string, statusSelector: string, btnActionFilesDialog: string, btnActionAdd: string, btnActionEdit: string, btnActionView: string, dateRangePickerSingle: string, tableMain: string, sortButtons: string, pagerContainer: string, pagerButton: string, tableMainFieldWorkOrder: string, tableMainFieldEquipId: string, tableMainFieldWorkOrderLink: string, tableMainFieldStatus: string}}
         */
        htmlBindings = {
            dashboardContainer: '.dashboard-container',
            dropdown: '.dropdown',
            itemCounter: '.items-counter',
            itemsPerPageSelector: '.items-per-page-selector',
            statusSelector: '.field-status',
            btnActionFilesDialog: '.btn-action-files-dialog',
            btnActionAdd: '.btn-action-add',
            btnActionEdit: '.btn-action-edit',
            btnActionNote: '.btn-action-note',
            btnActionView: '.btn-action-view',
            dateRangePickerSingle: '.daterangepicker-single',
            tableMain: '#equipmentHistoryDashboardTable',
            sortButtons: '.btn-table-sort',
            itemsSelectorContainer: '.items-selector-actions-container',
            itemsSelectorControl: '.items-selector-control',
            itemSelectorControl: '.item-selector-control',
            batchActions: '.batch-action',
            batchActionDelete:  '.batch-action-delete',
            batchActionEdit:  '.batch-action-edit',
            pagerContainer: '.pager-wrapper',
            pagerButton: '.pager-btn',
            tableMainFieldWorkOrder: '.field-work-order',
            tableMainFieldVessel: '.field-vessel',
            tableMainFieldEquipId: '.field-id',
            tableMainFieldWorkOrderLink: '.field-work-order-link',
            tableMainFieldVesselLink: '.field-vessel-link',
            tableMainFieldStatus: '.field-status',
            tableMainFiledDateOut: '.field-date-out',
            tableMainFiledExpectedIn: '.field-expected-in',
            tableMainFiledReceived: '.field-received',
            formFilterSavedFilters: '.form-filter-saved-filters'
        };

        /**
         * Model View ViewModels
         * @type {{modalEquipmentHistoryFormAdd: {init, showFor, hide, setSaveHistoryCallback}, modalEquipmentHistoryFormEdit: {init, showFor, hide, setUpdateHistoryCallback, setDeleteHistoryCallback}, screenWorkOrderDetails: {init, showFor, hide}}}
         */
        mvvm = {
            modalEquipmentHistoryFormAdd: (function (global, $, knockBack, knockout, backbone) {
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
                                url: urls.workOrderSelectorAjaxUrl,
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
                            /*placeholder: 'Select One ...',*/
                            //allowClear: true
                        });

                        // [Project Manager] control
                        $(_htmlBindings.controlProjectManager).select2({
                            theme: "bootstrap",
                            ajax: {
                                url: urls.projectManagerSelectorAjaxUrl,
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
                        throw 'Exception: Not implemented yet. Must be set by SetUpdateHistoryCallback function.';
                    }
                };

                _eventHandlers = {
                    saveHistory_OnDone: function (response) {
                        console.log('On Add:', response);
                        var data = $.parseJSON(response);
                        _functions.saveHistoryCallback(data.equipid, data.ordnum, data.status, data.qbtxlineid, data.installdte, data.expdtein, data.daterec, data.vesselid);
                        hide();
                    }
                };

                EquipmentHistoryModel = backbone.Model.extend({
                    defaults: {
                        "equipid": '',
                        "ordnum": '',
                        "inspectno": '',
                        "installdte": '',
                        "expdtein": '',
                        "daterec": ''
                    }
                });

                EquipmentHistoryViewModel = function (model) {
                    var self = this;
                    self.equipid = knockBack.observable(model, 'equipid');
                    self.ordnum = knockBack.observable(model, 'ordnum');
                    self.inspectno = knockBack.observable(model, 'inspectno');
                    self.installdte = knockBack.observable(model, 'installdte');
                    self.expdtein = knockBack.observable(model, 'expdtein');
                    self.daterec = knockBack.observable(model, 'daterec');

                    self.saveHistory = function (view_model) {
                        self.installdte($(_htmlBindings.controlDateOut).val());
                        self.expdtein($(_htmlBindings.controlExpactedIn).val());
                        self.daterec($(_htmlBindings.controlReceived).val());

                        $.post(
                            urls.addEquipmentHistoryUrl,
                            {
                                equipid: view_model.equipid(),
                                ordnum: view_model.ordnum(),
                                inspectno: view_model.inspectno(),
                                installdte: view_model.installdte(),
                                expdtein: view_model.expdtein(),
                                daterec: view_model.daterec()
                            }
                        ).done(_eventHandlers.saveHistory_OnDone).fail(function onFail(response) {
                            throw 'POST Fail with :' + response;
                        });
                    };

                    self.reset = function () {
                        self.equipid('');
                        self.ordnum('');
                        self.inspectno('');
                        self.installdte('');
                        self.expdtein('');
                        self.daterec('');
                    };
                };

                /**
                 * Add equipment history modal form MVVM logic initialization
                 */
                function init() {
                    var view;
                    view = global.document.getElementById((_htmlBindings.modalViewElement).slice(1));
                    equipmentHistoryModel = new EquipmentHistoryModel({});
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

            }(global, $, knockBack, knockout, backbone)),
            modalEquipmentHistoryFormEdit: (function (global, $, knockBack, knockout, backbone) {
                var _htmlBindings, _functions, _eventHandlers,
                    EquipmentHistoryModel, EquipmentHistoryViewModel,
                    equipmentHistoryModel, equipmentHistoryViewModel;

                _htmlBindings = {
                    modalViewElement: '#modal-equipment-history-form-edit',
                    controlProjectManager: '.control-project-manager-edit',
                    controlDateOut: '.control-installdte-edit',
                    controlExpactedIn: '.control-expdtein-edit',
                    controlReceived: '.control-daterec-edit',
                    alertDelete: '.alert-delete'
                };

                _functions = {
                    usePlugins: function () {
                        // Third party component initialization here...
                    },
                    reset: function () {
                        equipmentHistoryViewModel.reset();
                        // Reseting Select2 Controls
                        $(_htmlBindings.controlProjectManager).val(null).trigger('change');
                        // Reseting Date Range Picker Single Controls
                        $(_htmlBindings.controlDateOut).val('');
                        $(_htmlBindings.controlExpactedIn).val('');
                        $(_htmlBindings.controlReceived).val('');
                    },
                    updateHistoryCallback : function () {
                        throw 'Exception: Not implemented yet. Must be set by SetUpdateHistoryCallback function.';
                    },
                    deleteHistoryCallback : function () {
                        throw 'Exception: Not implemented yet. Must be set by SetDeleteHistoryCallback function.';
                    }
                };

                _eventHandlers = {
                    updateHistory_OnDone: function (response) {
                        console.log('On Update:', response);
                        var data = $.parseJSON(response);
                        if (data.success) {
                            _functions.updateHistoryCallback(data.equipid, data.ordnum, data.status, data.qbtxlineid, data.installdte, data.expdtein, data.daterec, data.vesselid);
                        }
                        hide();
                    },
                    deleteHistory_OnDone: function (response) {
                        console.log('On Delete:', response);
                        var data = $.parseJSON(response);
                        if (data.success) {
                            _functions.deleteHistoryCallback(data.equipid, data.ordnum, data.status, data.qbtxlineid, data.installdte, data.expdtein, data.daterec, data.vesselid);
                        }
                        hide();
                    },
                    getEquipmentHistory_OnDone: function (response) {
                        var data;
                        data = $.parseJSON(response);
                        if (data.success) {
                            equipmentHistoryViewModel.equipid(data.equipmentHistoryObject.equipid);
                            equipmentHistoryViewModel.qbtxlineid(data.equipmentHistoryObject.qbtxlineid);
                            equipmentHistoryViewModel.inspectno(data.equipmentHistoryObject.inspectno);
                            equipmentHistoryViewModel.installdte(data.equipmentHistoryObject.installdte);
                            equipmentHistoryViewModel.expdtein(data.equipmentHistoryObject.expdtein);
                            equipmentHistoryViewModel.daterec(data.equipmentHistoryObject.daterec);

                            $(_htmlBindings.controlProjectManager).append('<option value="' + data.equipmentHistoryObject.inspectno + '">' + data.equipmentHistoryObject.inspectnoName + '</option>')
                            $(_htmlBindings.controlProjectManager).select2({
                                theme: "bootstrap",
                                ajax: {
                                    url: urls.projectManagerSelectorAjaxUrl,
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
                            }).val(data.equipmentHistoryObject.inspectno).trigger('change');
                        }


                    }
                };

                EquipmentHistoryModel = backbone.Model.extend({
                    defaults: {
                        "qbtxlineid": '',
                        "equipid": '',
                        "inspectno": '',
                        "installdte": '',
                        "expdtein": '',
                        "daterec": ''
                    }
                });

                EquipmentHistoryViewModel = function (model) {
                    var self = this;
                    self.qbtxlineid = knockBack.observable(model, 'qbtxlineid');
                    self.equipid = knockBack.observable(model, 'equipid');
                    self.inspectno = knockBack.observable(model, 'inspectno');
                    self.installdte = knockBack.observable(model, 'installdte');
                    self.expdtein = knockBack.observable(model, 'expdtein');
                    self.daterec = knockBack.observable(model, 'daterec');

                    self.updateHistory = function () {
                        var projectManager, installdte, expdtein, daterec;
                        projectManager = $(_htmlBindings.controlProjectManager).val();
                        installdte = $(_htmlBindings.controlDateOut).val();
                        expdtein = $(_htmlBindings.controlExpactedIn).val();
                        daterec = $(_htmlBindings.controlReceived).val();
                        $.post(
                            urls.updateEquipmentHistoryUrl,
                            {
                                qbtxlineid: self.qbtxlineid(),
                                equipid: self.equipid(),
                                inspectno: projectManager, // Because knockout can't do binding with this control
                                installdte: installdte,
                                expdtein: expdtein,
                                daterec: daterec
                            }
                        ).done(_eventHandlers.updateHistory_OnDone).fail(function onFail(response) {
                            throw 'POST Fail with :' + response;
                        });
                    };
                    self.deleteHistory = function (view_model) {
                        //$(_htmlBindings.alertDelete).show();
                        $.post(
                            urls.deleteEquipmentHistoryUrl,
                            {
                                qbtxlineid: view_model.qbtxlineid(),
                                equipid: view_model.equipid()
                            }
                        ).done(_eventHandlers.deleteHistory_OnDone).fail(function onFail(response) {
                            throw 'POST Fail with :' + response;
                        });
                    };
                    self.reset = function () {
                        self.equipid('');
                        self.inspectno('');
                        self.installdte('');
                        self.expdtein('');
                        self.daterec('');
                    };
                };

                /**
                 * Update/Delete equipment history modal form MVVM logic initialization
                 */
                function init() {
                    var view;
                    view = global.document.getElementById((_htmlBindings.modalViewElement).slice(1));
                    equipmentHistoryModel = new EquipmentHistoryModel({});
                    equipmentHistoryViewModel = new EquipmentHistoryViewModel(equipmentHistoryModel);
                    knockout.applyBindings(equipmentHistoryViewModel, view);
                    _functions.usePlugins();
                }

                /**
                 * Show Update/Delete Equipment History Modal Window
                 */
                function show(qbtxlineid) {
                    _functions.reset();
                    $(_htmlBindings.alertDelete).hide();

                    $.post(
                        urls.getEquipmentHistoryUrl,
                        {
                            qbtxlineid : qbtxlineid
                        }
                    ).done(_eventHandlers.getEquipmentHistory_OnDone).fail(function onFail(response) {
                        throw 'POST Fail with :' + response;
                    });

                    $(_htmlBindings.modalViewElement).modal('show');
                }

                /**
                 * Hide Update/Delete Equipment History Modal Window
                 */
                function hide() {
                    $(_htmlBindings.modalViewElement).modal('hide');
                }

                function setUpdateHistoryCallback(callback) {
                    _functions.updateHistoryCallback = callback;
                }

                function setDeleteHistoryCallback(callback) {
                    _functions.deleteHistoryCallback = callback;
                }

                return {
                    init: init,
                    showFor: show,
                    hide: hide,
                    setUpdateHistoryCallback: setUpdateHistoryCallback,
                    setDeleteHistoryCallback: setDeleteHistoryCallback
                };

            }(global, $, knockBack, knockout, backbone)),
            modalEquipmentHistoryFormNote: (function (global, $, knockBack, knockout, backbone) {
                var _htmlBindings, _functions, _eventHandlers,
                    EquipmentNotesModel, EquipmentNotesViewModel,
                    equipmentNotesModel, equipmentNotesViewModel;

                _htmlBindings = {
                    modalViewElement: '#modal-equipment-history-form-note',
                    // controlProjectManager: '.control-project-manager-edit',
                    // controlDateOut: '.control-installdte-edit',
                    // controlExpactedIn: '.control-expdtein-edit',
                    // controlReceived: '.control-daterec-edit',
                    // alertDelete: '.alert-delete'
                };

                _functions = {
                    usePlugins: function () {
                        // Third party component initialization here...
                    },
                    reset: function () {
                        equipmentNotesViewModel.reset();
                    }

                };

                _eventHandlers = {
                    updateEquipmentNotes_OnDone: function (response) {
                        var data = $.parseJSON(response);
                        // if (data.success) {
                        //     throw 'Hola';
                        // }
                        hide();
                    },
                    getEquipmentNotes_OnDone: function (response) {
                        var data;
                        data = $.parseJSON(response);
                        if (data.success) {
                            equipmentNotesViewModel.equipid(data.equipmentNotesObject.equipid);
                            equipmentNotesViewModel.notes(data.equipmentNotesObject.notes);
                        }
                    }
                };

                EquipmentNotesModel = backbone.Model.extend({
                    defaults: {
                        "equipid": '',
                        "notes": ''
                    }
                });

                EquipmentNotesViewModel = function (model) {
                    var self = this;
                    self.notes = knockBack.observable(model, 'notes');
                    self.equipid = knockBack.observable(model, 'equipid');

                    self.onSaveNotesModal = function () {
                        $.post(
                            urls.updateEquipmentNotesUrl,
                            {
                                equipid: self.equipid(),
                                notes: self.notes()
                            }
                        ).done(_eventHandlers.updateEquipmentNotes_OnDone).fail(function onFail(response) {
                            throw 'POST Fail with :' + response;
                        });
                    };

                    self.reset = function () {
                        self.equipid('');
                        self.notes('');
                    };
                };

                /**
                 * Update/Delete equipment history modal form MVVM logic initialization
                 */
                function init() {
                    var view;
                    view = global.document.getElementById((_htmlBindings.modalViewElement).slice(1));
                    equipmentNotesModel = new EquipmentNotesModel({});
                    equipmentNotesViewModel = new EquipmentNotesViewModel(equipmentNotesModel);
                    knockout.applyBindings(equipmentNotesViewModel, view);
                    _functions.usePlugins();
                }

                /**
                 * Show Update Note Modal Window
                 */
                function show(equipid) {
                    _functions.reset();
                    $.post(
                        urls.getEquipmentNotesUrl,
                        {
                            equipid : equipid
                        }
                    ).done(_eventHandlers.getEquipmentNotes_OnDone).fail(function onFail(response) {
                        throw 'POST Fail with :' + response;
                    });

                    $(_htmlBindings.modalViewElement).modal('show');
                }

                /**
                 * Hide Update Note Modal Window
                 */
                function hide() {
                    $(_htmlBindings.modalViewElement).modal('hide');
                }

                return {
                    init: init,
                    showFor: show,
                    hide: hide
                };

            }(global, $, knockBack, knockout, backbone)),
            screenWorkOrderDetails: (function (global, $, knockBack, knockout, backbone) {

                var _htmlBindings, _functions, _eventHandlers,
                    Model, ViewModel,
                    model, viewModel;

                _htmlBindings = {
                    screenViewElement: '#kb-view-salesorder',
                    modalSaveNotes: '#salesOrderForm_modal_saveNotes',
                    salesOrderForm_btnClose: '#salesOrderForm_btnClose'
                };

                _functions = {
                    reset: function () {
                        viewModel.reset();
                    }
                };

                _eventHandlers = {
                    salesOrderForm_btnClose_onClick: function (event) {
                        $(_htmlBindings.screenViewElement).hide();
                    },
                    getWorkOrder_OnDone: function (response) {
                        var data, modelType;
                        data = $.parseJSON(response);
                        modelType = data.formType;

                        if (data.success) {
                            viewModel.modelType(modelType);

                            viewModel.ordnum(data.salesOrderObject.ordnum);
                            viewModel.date(data.salesOrderObject.date);
                            viewModel.custno(data.salesOrderObject.custno);
                            viewModel.projectLocation(data.salesOrderObject.projectLocation);
                            viewModel.notes(data.salesOrderObject.notes);
                            viewModel.companyName(data.salesOrderObject.companyName);
                            viewModel.address(data.salesOrderObject.address);
                            viewModel.city(data.salesOrderObject.city);
                            viewModel.state(data.salesOrderObject.state);
                            viewModel.zip(data.salesOrderObject.zip);
                            viewModel.phone(data.salesOrderObject.phone);
                            viewModel.subtotal(data.salesOrderObject.subtotal);
                            viewModel.discount(data.salesOrderObject.discount);
                            viewModel.tax(data.salesOrderObject.tax);
                            viewModel.shipping(data.salesOrderObject.shipping);
                            viewModel.total(data.salesOrderObject.total);

                            if (modelType === 'B' || modelType === 'C') {
                                viewModel.ponum(data.salesOrderObject.ponum);
                                viewModel.company(data.salesOrderObject.company);
                                viewModel.destino(data.salesOrderObject.destino);
                                viewModel.prostartdt(data.salesOrderObject.prostartdt);
                                viewModel.proenddt(data.salesOrderObject.proenddt);
                                viewModel.sotypecode(data.salesOrderObject.sotypecode);
                                viewModel.mtrlstatus(data.salesOrderObject.mtrlstatus);
                                viewModel.jobstatus(data.salesOrderObject.jobstatus);
                                viewModel.technam1(data.salesOrderObject.technam1);
                                viewModel.technam2(data.salesOrderObject.technam2);
                                viewModel.qutno(data.salesOrderObject.qutno);
                                viewModel.cstctid(data.salesOrderObject.cstctid);
                                viewModel.jobdescrip(data.salesOrderObject.jobdescrip);
                            }
                            viewModel.items(data.salesOrderObject.itemsCollection);
                        }
                    }
                };

                Model = backbone.Model.extend({
                    defaults: {
                        'ordnum': '',
                        'date': '',
                        'custno': '',
                        'projectLocation': '',
                        'notes': '',
                        'companyName': '',
                        'address': '',
                        'city': '',
                        'state': '',
                        'zip': '',
                        'phone': '',
                        'subtotal': '',
                        'discount': '',
                        'tax': '',
                        'shipping': '',
                        'total': '',
                        'items': new backbone.Collection([]),
                        'modelType': '',
                        'ponum': '',
                        'company': '',
                        'destino': '',
                        'prostartdt': '',
                        'proenddt': '',
                        'sotypecode': '',
                        'mtrlstatus': '',
                        'jobstatus': '',
                        'technam1': '',
                        'technam2': '',
                        'qutno': '',
                        'cstctid': '',
                        'jobdescrip': '',
                    }
                });

                ViewModel = function (model) {
                    var self = this;

                    self.modelType          = knockBack.observable(model, 'modelType');
                    self.ordnum             = knockBack.observable(model, 'ordnum');
                    self.date               = knockBack.observable(model, 'date');
                    self.custno             = knockBack.observable(model, 'custno');
                    self.projectLocation    = knockBack.observable(model, 'projectLocation');
                    self.notes              = knockBack.observable(model, 'notes');
                    self.companyName        = knockBack.observable(model, 'companyName');
                    self.address            = knockBack.observable(model, 'address');
                    self.city               = knockBack.observable(model, 'city');
                    self.state              = knockBack.observable(model, 'state');
                    self.zip                = knockBack.observable(model, 'zip');
                    self.phone              = knockBack.observable(model, 'phone');
                    self.subtotal           = knockBack.observable(model, 'subtotal');
                    self.discount           = knockBack.observable(model, 'discount');
                    self.tax                = knockBack.observable(model, 'tax');
                    self.shipping           = knockBack.observable(model, 'shipping');
                    self.total              = knockBack.observable(model, 'total');

                    // Related to B and C
                    self.ponum              = knockBack.observable(model, 'ponum');
                    self.company            = knockBack.observable(model, 'company');
                    self.destino            = knockBack.observable(model, 'destino');
                    self.prostartdt         = knockBack.observable(model, 'prostartdt');
                    self.proenddt           = knockBack.observable(model, 'proenddt');
                    self.sotypecode         = knockBack.observable(model, 'sotypecode');
                    self.mtrlstatus         = knockBack.observable(model, 'mtrlstatus');
                    self.jobstatus          = knockBack.observable(model, 'jobstatus');
                    self.technam1           = knockBack.observable(model, 'technam1');
                    self.technam2           = knockBack.observable(model, 'technam2');
                    self.qutno              = knockBack.observable(model, 'qutno');
                    self.cstctid            = knockBack.observable(model, 'cstctid');
                    self.jobdescrip         = knockBack.observable(model, 'jobdescrip');
                    self.items              = knockBack.collectionObservable(model.items);

                    self.showTable = knockout.computed(function () {
                        return self.items().length > 0;
                    });
                    self.showControlIFBOrC = knockout.computed(function () {
                        /**
                         *
                         * @returns {Boolean}
                         */
                        return self.modelType() === 'B' || self.modelType() === 'C';
                    });
                    self.showControlIfNotC = knockout.computed(function () {
                        /**
                         *
                         * @returns {Boolean}
                         */
                        return (self.modelType() !== 'C');
                    });

                    self.onShowNotesModal = function (view_model) {
                        /**
                         * @param {object} view_model Knockback viewmodel
                         * @param {object} event Event related object
                         * @return {view_model} Knockback viewmodel
                         */
                        $(_htmlBindings.modalSaveNotes).modal('show');
                        return view_model;
                    };
                    self.onSaveNotesModal = function (view_model) {
                        /**
                         * @param {object} view_model Knockback viewmodel
                         * @param {object} event Event related object
                         * @return {view_model} Knockback viewmodel
                         */
                        $.post(urls.updateWorkOrderNotesUrl,
                            {
                                ordnum: view_model.ordnum(),
                                notes: view_model.notes()
                            }
                        ).done(function onDone() {
                                /**
                                 * @param {object} response Ajax response object
                                 */
                                $(_htmlBindings.modalSaveNotes).modal('hide');
                            })
                            .fail(function onFail(response) {
                                /**
                                 * @param {object} response Ajax response object
                                 */
                                throw response;
                            });
                        return view_model;
                    };

                    self.reset = function () {
                        self.modelType('');
                        self.ordnum('');
                        self.date('');
                        self.custno('');
                        self.projectLocation('');
                        self.notes('');
                        self.companyName('');
                        self.address('');
                        self.city('');
                        self.state('');
                        self.zip('');
                        self.phone('');
                        self.subtotal('');
                        self.discount('');
                        self.tax('');
                        self.shipping('');
                        self.total('');
                        // Related to B and C
                        self.company('');
                        self.destino('');
                        self.prostartdt('');
                        self.proenddt('');
                        self.sotypecode('');
                        self.mtrlstatus('');
                        self.jobstatus('');
                        self.technam1('');
                        self.technam2('');
                        self.qutno('');
                        self.cstctid('');
                        self.jobdescrip('');
                        self.items([]);
                    };
                };

                /**
                 * Work Order Details Screen MVVM logic initialization
                 */
                function init() {
                    var view;
                    view = global.document.getElementById((_htmlBindings.screenViewElement).slice(1));
                    model = new Model({});
                    viewModel = new ViewModel(model);
                    knockout.applyBindings(viewModel, view);

                    //TODO: Refactor this (use knockout click binding instead in all ussage places (dashboard, etc...))
                    $(_htmlBindings.salesOrderForm_btnClose).on('click', _eventHandlers.salesOrderForm_btnClose_onClick);
                }

                /**
                 * Show Add Work Order Screen
                 */
                function show(ordnum) {
                    var radix,
                        dashboardContainerHeight,
                        screenWorkOrderDetailsHeight,
                        $dashboardContainer,
                        $screenWorkOrderDetails;

                    radix = 10;
                    $dashboardContainer = $(htmlBindings.dashboardContainer);
                    $screenWorkOrderDetails = $(_htmlBindings.screenViewElement);
                    dashboardContainerHeight = parseInt($dashboardContainer.css('height'), radix);
                    screenWorkOrderDetailsHeight = parseInt($screenWorkOrderDetails.css('height'), radix);
                    if (dashboardContainerHeight > screenWorkOrderDetailsHeight) {
                        $screenWorkOrderDetails.css('height', dashboardContainerHeight);
                    }
                    _functions.reset();

                    $.post(
                        urls.getWorkOrderUrl,
                        {
                            ordnum : ordnum
                        }
                    ).done(_eventHandlers.getWorkOrder_OnDone).fail(function onFail(response) {
                        throw 'POST Fail with :' + response;
                    });

                    $screenWorkOrderDetails.show();
                }

                /**
                 * Hide Add Equipment History Modal Window
                 */
                function hide() {
                    $(htmlBindings.screenWorkOrderDetails).hide();
                }

                return {
                    init: init,
                    showFor: show,
                    hide: hide,
                };

            }(global, $, knockBack, knockout, backbone)),
            modalEquipmentHistoryFormBatchEdit: (function (global, $, knockBack, knockout, backbone) {
                var _htmlBindings, _functions, _eventHandlers,
                    EquipmentHistoryModel, EquipmentHistoryViewModel,
                    equipmentHistoryModel, equipmentHistoryViewModel, _status;

                _status = {
                    qbtxlineidCollection: undefined,
                    equipidCollection: undefined
                };

                _htmlBindings = {
                    modalViewElement: '#modal-equipment-history-form-batch-edit',
                    controlProjectManager: '.control-project-manager-batch-edit',
                    controlDateOut: '.control-installdte-batch-edit',
                    controlExpactedIn: '.control-expdtein-batch-edit',
                    controlReceived: '.control-daterec-batch-edit'
                };

                _functions = {
                    usePlugins: function () {
                        // Third party component initialization here...
                    },
                    reset: function () {
                        equipmentHistoryViewModel.reset();
                        // Reseting Select2 Controls
                        $(_htmlBindings.controlProjectManager).val(null).trigger('change');
                        // Reseting Date Range Picker Single Controls
                        $(_htmlBindings.controlDateOut).val('');
                        $(_htmlBindings.controlExpactedIn).val('');
                        $(_htmlBindings.controlReceived).val('');
                    },
                    updateHistoriesCallback : function () {
                        throw 'Exception: Not implemented yet. Must be set by SetUpdateHistoryCallback function.';
                    }
                };

                _eventHandlers = {
                    updateHistories_OnDone: function (response) {
                        console.log('On Update:', response);
                        var data = $.parseJSON(response);
                        if (data.success) {
                            _functions.updateHistoriesCallback(data.equipidCollection, data.ordnum, data.status, data.qbtxlineidCollection, data.installdte, data.expdtein, data.daterec, data.vesselid);
                        }
                        hide();
                    },
                    getEquipmentHistory_OnDone: function (response) {
                        var data;
                        data = $.parseJSON(response);
                        if (data.success) {
                            //Only for first data modal visualization
                            equipmentHistoryViewModel.equipid(data.equipmentHistoryObject.equipid);
                            equipmentHistoryViewModel.qbtxlineid(data.equipmentHistoryObject.qbtxlineid);
                            equipmentHistoryViewModel.inspectno(data.equipmentHistoryObject.inspectno);
                            equipmentHistoryViewModel.installdte(data.equipmentHistoryObject.installdte);
                            equipmentHistoryViewModel.expdtein(data.equipmentHistoryObject.expdtein);
                            equipmentHistoryViewModel.daterec(data.equipmentHistoryObject.daterec);

                            $(_htmlBindings.controlProjectManager).append('<option value="' + data.equipmentHistoryObject.inspectno + '">' + data.equipmentHistoryObject.inspectnoName + '</option>')
                            $(_htmlBindings.controlProjectManager).select2({
                                theme: "bootstrap",
                                ajax: {
                                    url: urls.projectManagerSelectorAjaxUrl,
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
                            }).val(data.equipmentHistoryObject.inspectno).trigger('change');
                        }


                    }
                };

                EquipmentHistoryModel = backbone.Model.extend({
                    defaults: {
                        "qbtxlineid": '',
                        "equipid": '',
                        "inspectno": '',
                        "installdte": '',
                        "expdtein": '',
                        "daterec": ''
                    }
                });

                EquipmentHistoryViewModel = function (model) {
                    var self = this;
                    self.qbtxlineid = knockBack.observable(model, 'qbtxlineid');
                    self.equipid = knockBack.observable(model, 'equipid');
                    self.inspectno = knockBack.observable(model, 'inspectno');
                    self.installdte = knockBack.observable(model, 'installdte');
                    self.expdtein = knockBack.observable(model, 'expdtein');
                    self.daterec = knockBack.observable(model, 'daterec');

                    self.updateHistories = function () {
                        var projectManager, installdte, expdtein, daterec;
                        projectManager = $(_htmlBindings.controlProjectManager).val();
                        installdte = $(_htmlBindings.controlDateOut).val();
                        expdtein = $(_htmlBindings.controlExpactedIn).val();
                        daterec = $(_htmlBindings.controlReceived).val();
                        $.post(
                            urls.updateEquipmentHistoriesUrl,
                            {
                                // qbtxlineid: self.qbtxlineid(),
                                // equipid: self.equipid(),
                                qbtxlineidCollection: JSON.stringify(_status.qbtxlineidCollection),
                                equipidCollection: JSON.stringify(_status.equipidCollection),
                                inspectno: projectManager, // Because knockout can't do binding with this control
                                installdte: installdte,
                                expdtein: expdtein,
                                daterec: daterec
                            }
                        ).done(_eventHandlers.updateHistories_OnDone).fail(function onFail(response) {
                            throw 'POST Fail with :' + response;
                        });
                    };
                    self.reset = function () {
                        self.equipid('');
                        self.inspectno('');
                        self.installdte('');
                        self.expdtein('');
                        self.daterec('');
                    };
                };

                /**
                 * Update/Delete equipment history modal form MVVM logic initialization
                 */
                function init() {
                    var view;
                    view = global.document.getElementById((_htmlBindings.modalViewElement).slice(1));
                    equipmentHistoryModel = new EquipmentHistoryModel({});
                    equipmentHistoryViewModel = new EquipmentHistoryViewModel(equipmentHistoryModel);
                    knockout.applyBindings(equipmentHistoryViewModel, view);
                    _functions.usePlugins();
                }

                /**
                 * Show Update/Delete Equipment History Modal Window
                 */
                function show(qbtxlineidCollection, equipidCollection) {
                    _functions.reset();

                    _status.qbtxlineidCollection = qbtxlineidCollection;
                    _status.equipidCollection = equipidCollection;

                    // $.post(
                    //     urls.getEquipmentHistoryUrl,
                    //     {
                    //         qbtxlineid : qbtxlineidCollection[0]
                    //     }
                    // ).done(_eventHandlers.getEquipmentHistory_OnDone).fail(function onFail(response) {
                    //     throw 'POST Fail with :' + response;
                    // });

                    $(_htmlBindings.controlProjectManager).select2({
                        theme: "bootstrap",
                        ajax: {
                            url: urls.projectManagerSelectorAjaxUrl,
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
                    })

                    $(_htmlBindings.modalViewElement).modal('show');
                }

                /**
                 * Hide Update/Delete Equipment History Modal Window
                 */
                function hide() {
                    $(_htmlBindings.modalViewElement).modal('hide');
                }

                function setUpdateHistoriesCallback(callback) {
                    _functions.updateHistoriesCallback = callback;
                }

                return {
                    init: init,
                    showFor: show,
                    hide: hide,
                    setUpdateHistoriesCallback: setUpdateHistoriesCallback
                };

            }(global, $, knockBack, knockout, backbone)),
            modalEquipmentHistoryFormBatchDelete: (function (global, $, knockBack, knockout, backbone) {
                var _htmlBindings, _functions, _eventHandlers,
                    DeleteEquipmentHistoryModel, DeleteEquipmentHistoryViewModel,
                    deleteEquipmentHistoryModel, deleteEquipmentHistoryViewModel, _status;

                _status = {
                    qbtxlineidCollection: undefined,
                    equipidCollection: undefined
                };

                _htmlBindings = {
                    modalViewElement: '#modal-equipment-history-form-batch-delete',
                    deleteEquipmentList: '.modal-equipment-history-form-batch-delete-list'
                };

                _functions = {
                    usePlugins: function () {
                        // Third party component initialization here...
                    },
                    reset: function () {
                        _status.qbtxlineidCollection = undefined;
                        _status.equipidCollection = undefined;
                        deleteEquipmentHistoryViewModel.reset();

                    },
                    deleteHistoriesCallback : function () {
                        throw 'Exception: Not implemented yet. Must be set by SetDeleteHistoryCallback function.';
                    }
                };

                _eventHandlers = {
                    deleteHistories_OnDone: function (response) {
                        console.log('On Delete:', response);
                        var data = $.parseJSON(response);
                        if (data.success) {
                            _functions.deleteHistoriesCallback(data.equipidCollection, data.ordnum, data.status, data.qbtxlineidCollection, data.installdte, data.expdtein, data.daterec, data.vesselid);
                        }
                        hide();
                    }
                };

                DeleteEquipmentHistoryModel = backbone.Model.extend({
                    defaults: {
                        "qbtxlineids": '',
                        "equipids": ''
                    }
                });

                DeleteEquipmentHistoryViewModel = function (model) {
                    var self = this;
                    self.qbtxlineids = knockBack.observable(model, 'qbtxlineids');
                    self.equipids = knockBack.observable(model, 'equipids');

                    self.deleteHistories = function () {
                        $.post(
                            urls.deleteEquipmentHistoriesUrl,
                            {
                                qbtxlineidCollection: JSON.stringify(_status.qbtxlineidCollection),
                                equipidCollection: JSON.stringify(_status.equipidCollection)
                            }
                        ).done(_eventHandlers.deleteHistories_OnDone).fail(function onFail(response) {
                            throw 'POST Fail with :' + response;
                        });
                    };
                    self.reset = function () {
                        self.equipids('');
                        self.qbtxlineids('');
                    };
                };

                /**
                 * Update/Delete equipment history modal form MVVM logic initialization
                 */
                function init() {
                    var view;
                    view = global.document.getElementById((_htmlBindings.modalViewElement).slice(1));
                    deleteEquipmentHistoryModel = new DeleteEquipmentHistoryModel({});
                    deleteEquipmentHistoryViewModel = new DeleteEquipmentHistoryViewModel(deleteEquipmentHistoryModel);
                    knockout.applyBindings(deleteEquipmentHistoryViewModel, view);
                    _functions.usePlugins();
                }

                /**
                 * Show Update/Delete Equipment History Modal Window
                 */
                function show(qbtxlineidCollection, equipidCollection) {
                    var index;
                    _functions.reset();

                    _status.qbtxlineidCollection = qbtxlineidCollection;
                    _status.equipidCollection = equipidCollection;
                    $(_htmlBindings.deleteEquipmentList).empty();
                    for (index in equipidCollection) {
                        if (equipidCollection.hasOwnProperty(index)) {
                            $(_htmlBindings.deleteEquipmentList).append($('<li>' + equipidCollection[index] + '</li>'));
                        }
                    }

                    $(_htmlBindings.modalViewElement).modal('show');
                }

                /**
                 * Hide Update/Delete Equipment History Modal Window
                 */
                function hide() {
                    $(_htmlBindings.modalViewElement).modal('hide');
                }

                function setDeleteHistoriesCallback(callback) {
                    _functions.deleteHistoriesCallback = callback;
                }

                return {
                    init: init,
                    showFor: show,
                    hide: hide,
                    setDeleteHistoriesCallback: setDeleteHistoriesCallback
                };

            }(global, $, knockBack, knockout, backbone))

        };

        /**
         *
         * @type {{filter: {init, setFieldsDefinition, getFilterTree}}}
         */
        modules = {
            filter: (function (global, $) {
                var _status, _htmlBindings, _functions, _eventHandlers;

                _status = {
                    id: '',
                    predicate: '',// DEPRECATED
                    areControlsEnabled: false
                };

                _htmlBindings = {

                    filterFieldsContainer           : '.form-filter-container',
                    filterFields_btnAdd             : '.filter-field',
                    filterField_btnRemove           : '.input-group-btn button',
                    filterFieldsControls: {
                        all: '.form-filter-action',
                        btnToggleVisibility    : '.form-filter-action-toggle-visibility',
                        btnReset               : '.form-filter-action-reset',
                        btnSave                : '.form-filter-action-save',
                        btnFilter              : '.form-filter-action-filter'
                    },
                    drpSavedFilters                 : '.form-filter-saved-filters',
                    drpSavedFilterItems             : '.form-filter-saved-filters-item',
                    drpSavedFilterItems_btnDelete   : '.form-filter-saved-filters-item-delete',
                    modalSaveFilter                 : '#dynamicFilter_modal_saveFilter',
                    modalSaveFilter_txtName         : '#dynamicFilter_modal_txtFilterName',
                    modalSaveFilter_btnSave         : '#dynamicFilter_modal_btnSaveFilter'
                };

                _functions = {
                    /**
                     * Disable all filter action controls
                     * @returns {undefined}
                     */
                    disableControls: function () {
                        $(_htmlBindings.filterFieldsControls.all).addClass('disabled');
                        _status.areControlsEnabled = false;
                    },
                    /**
                     * Enable all filter action controls
                     * @returns {undefined}
                     */
                    enableControls: function () {
                        $(_htmlBindings.filterFieldsControls.all).removeClass('disabled');
                        _status.areControlsEnabled = true;
                    },
                    /**
                     * Do filter
                     * @returns {undefined}
                     */
                    filter: function () {
                        functions.paginate();
                    },
                    /**
                     * Reset Filter.
                     * @param {boolean} doFilter
                     * @returns {undefined}
                     */
                    reset: function (doFilter) {
                        $(_htmlBindings.filterFieldsContainer).empty();
                        _functions.disableControls();
                        $(_htmlBindings.filterFieldsControls.btnFilter).next().focus();
                        if (doFilter !== false) {
                            _functions.filter();
                        }
                    },
                    splitDate: function (date) {
                        var dateSplit = date.split('/');
                        if (dateSplit.length === 3) {
                            return dateSplit;
                        }
                        return ["12", "30", "1899"];
                    },
                    splitDateRange: function (dateRangeValue) {
                        var dateRangeSplitValue = dateRangeValue.split('-');
                        if (dateRangeSplitValue.length === 2) {
                            var inferiorDate = dateRangeSplitValue[0], superDate = dateRangeSplitValue[1];
                            var inferiorDateSplit = _functions.splitDate(inferiorDate), superDateSplit = _functions.splitDate(superDate);
                            return {inferiorLimit: inferiorDateSplit, superLimit: superDateSplit};
                        }
                        return {inferiorLimit: _functions.splitDate(""), superLimit: _functions.splitDate("")};
                    },
                    getFilterTree: function () {
                        var $filterComponents = $(_htmlBindings.filterFieldsContainer).children();
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
                                var tableField = _status.fieldsDefinition[field]['table'];
                                var captionField = _status.fieldsDefinition[field]["displayName"];

                                var fieldNode = new Node('field', [field, tableField, captionField], []);

                                if ($currentComponentControl.hasClass('daterangepicker')){
                                    var dateRange = _functions.splitDateRange(currentComponentControlValue);
                                    var inferiorDateLimitNode = new Node('date', dateRange.inferiorLimit, []);
                                    var superDateLimitNode = new Node('date', dateRange.superLimit, []);

                                    currentNode = new Node('dateRange', '', [fieldNode, inferiorDateLimitNode, superDateLimitNode]);
                                }else{
                                    // var valueNode = new Node('string', currentComponentControlValue.toLowerCase(), []);
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
                    },
                    createOperatorGroup: function (first) {
                        var tmplFirstOperatorGroup = '<div class="btn-group unary-logical-operator"><button type="button" class="btn btn-default btn-filter-modifier disabled" style="opacity:1"></button><button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></button><ul class="dropdown-menu"><li class="current"><a href="#" style="display: inline-block; height: 26px; width: 100%;">Clear Not</a></li><li><a href="#">Not</a></li></ul></div>',
                            tmplOperatorGroup = '<div class="btn-group binary-logical-operator"><button type="button" class="btn btn-default btn-filter-modifier disabled" style="opacity:1">And</button><button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></button><ul class="dropdown-menu"><li class="current"><a href="#">And</a></li><li><a href="#">Or</a></li></ul></div>';
                        if (first === true) {
                            return $(tmplFirstOperatorGroup);
                        }
                        return $(tmplOperatorGroup);
                    },
                    createTextField: function (field, caption, valueType) {
                        return $('<div class="form-group" title="' + caption +
                            '"><label class="control-label">' + caption +
                            '</label><div class="input-group"><input type="text" class="form-control" data-value-type="' + valueType + '" data-fieldname="' + field +
                            '" placeholder="' + caption +
                            '"><span class="input-group-btn"><button class="btn btn-default glyphicon-action-button glyphicon-minus btn-delete-filter-field" title="Delete Filter Field" type="button"></button></span></div></div>');
                    },
                    createDropdownField: function (field, caption, options, valueType) {
                        var $formGroup = $('<div class="form-group" title="' + caption +
                                '"><label class="control-label">' + caption +
                                '</label><div class="input-group select2-bootstrap-append"><select class="form-control select2-container" data-value-type="' + valueType + '" data-fieldname="' + field +
                                '"></select><span class="input-group-btn"><button class="btn btn-default glyphicon-action-button glyphicon-minus btn-delete-filter-field" title="Delete Filter Field" type="button"></button></span></div></div>'),
                            $select = $formGroup.find('select'),
                            index, current;

                        // Two format supported: id, descript or key, value
                        for (index in options) {

                            if (options.hasOwnProperty(index)) {
                                current = options[index];
                                if(current.id === undefined){
                                    $select.append($('<option value="' + index + '">' + options[index] + '</option>'));
                                } else {
                                    $select.append($('<option value="' + current.id + '">' + current.descrip + '</option>'));
                                }
                            }
                        }

                        return $formGroup;
                    },
                    createDateField: function (field, caption, ranged){
                        var daterangepickerType = ranged ? 'daterangepicker' : 'daterangepicker-single';
                        return $('<div class="form-group"><label class="control-label">' + caption +
                            '</label><div class="input-prepend input-group" title="' + caption +
                            '"><span class="add-on input-group-addon"><i class="glyphicon glyphicon-calendar fa fa-calendar"></i></span><input type="text" class="form-control ' + daterangepickerType +
                            '" data-fieldname="' + field +
                            '" placeholder="' + caption +
                            '"><span class="input-group-btn"><button type="button" class="btn btn-default glyphicon-action-button glyphicon-minus btn-delete-filter-field"></button></span></div></div>');

                    },
                    createDropdownSavedFilters: function (htmlElementId, caption) {
                        var tmpl = '<button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></button>';
                        tmpl += '<ul id="' + htmlElementId.slice(1) +
                            '" class="dropdown-menu" role="menu"><li role="presentation" class="dropdown-header">' + caption +
                            '</li></ul>';
                        return $(tmpl);
                    },
                    createDropdownSavedFilterItem: function (filterId, caption) {
                        var tmpl = '<li><a href="#" class="' + _htmlBindings.drpSavedFilterItems + '" data-filterid="' + filterId +
                                '">' + caption +
                                '</a><button type="button" class="close ' + _htmlBindings.drpSavedFilterItems_btnDelete + '" aria-hidden="true">&times;</button></li>',
                            $control = $(tmpl);
                        $control.children('a')
                            .on('click',
                                _eventHandlers.drpSavedFilterItem_onClick);

                        $control.find('button.close')
                            .on('click',
                                _eventHandlers.drpSavedFilterItem_btnDelete_onClick);
                        return $control;
                    },
                    bindOperatorGroupEventHandler: function ($operatorGroup) {
                        $operatorGroup
                            .find('li')
                            .on('click', _eventHandlers.filterOperator_onClick);
                    },
                    bindOperatorGroupsEventHandlers: function () {
                        $(_htmlBindings.filterFieldsContainer)
                            .find('.btn-group')
                            .each(function () {
                                _functions.bindOperatorGroupEventHandler($(this));
                            });
                    },
                    bindFormGroupEventHandlers: function ($formGroup) {
                        $formGroup.find(_htmlBindings.filterField_btnRemove)
                            .on('click', _eventHandlers.filterField_btnRemove_onClick);
                        $formGroup.find('input')
                            .on('keypress', _eventHandlers.input_onKeyPress);
                        $formGroup.find('input.daterangepicker')
                            .daterangepicker({
                                singleDatePicker: false,
                                format: 'YYYY-MM-DD',
                                // format: 'MM/DD/YYYY',
                                startDate: global.moment(),
                                endDate: global.moment()
                            });
                        $formGroup.find('input.daterangepicker-single')
                            .daterangepicker({
                                singleDatePicker: true,
                                format: 'YYYY-MM-DD',
                                // format: 'MM/DD/YYYY',
                                startDate: global.moment(),
                                endDate: global.moment()
                            });
                        $formGroup.find('select')
                            .select2({theme: "bootstrap"});
                    },
                    bindFormGroupsEventHandlers: function () {
                        $(_htmlBindings.filterFieldsContainer)
                            .find('.form-group')
                            .each(function () {
                                _functions.bindFormGroupEventHandlers($(this));
                            });
                    },
                    bindEventHandlers: function () {
                        $(_htmlBindings.filterFieldsControls.btnFilter).on('click',
                            _eventHandlers.btnFilter_onClick);

                        $(_htmlBindings.filterFieldsControls.btnToggleVisibility).on('click',
                            _eventHandlers.btnToggleVisibility_onClick);

                        $(_htmlBindings.filterFieldsControls.btnReset).on('click',
                            _eventHandlers.btnReset_onClick);

                        $(_htmlBindings.filterFieldsControls.btnSave).on('click',
                            _eventHandlers.btnSave_onClick);

                        $(_htmlBindings.filterFields_btnAdd).on('click',
                            _eventHandlers.filterFields_btnAdd_onClick);

                        $(_htmlBindings.modalSaveFilter_btnSave).on('click',
                            _eventHandlers.modalSaveFilter_btnSave_onClick);

                        $(_htmlBindings.drpSavedFilterItems).on('click',
                            _eventHandlers.drpSavedFilterItem_onClick);

                        $(_htmlBindings.drpSavedFilterItems_btnDelete).on('click',
                            _eventHandlers.drpSavedFilterItem_btnDelete_onClick);
                    },
                    loadFilter: function (filterId, doFilter) {
                        $.ajax({
                            data: {
                                filterid: filterId
                            },
                            url: urls.getSavedFilter,
                            type: 'post',
                            beforeSend: function () {
                                $('.loading').show();
                            },
                            success: function (response) {
                                var data = $.parseJSON(response),
                                    $filterFields;
                                if (data.success) {
                                    if (data.expfields !== ''){
                                        $filterFields = $(_htmlBindings.filterFieldsContainer);
                                        $filterFields.append(data.expfields);
                                        _functions.bindOperatorGroupsEventHandlers();
                                        _functions.bindFormGroupsEventHandlers();

                                        // Client request behavior (on filter load hide dynamic filter fields)
                                        $(_htmlBindings.filterFieldsControls.btnToggleVisibility).click();

                                        _functions.enableControls();

                                        if (doFilter){
                                            _functions.filter();
                                        }
                                    }
                                } else {
                                    throw "Filter not loaded";
                                }
                                $('.loading').hide();
                            }
                        });
                    },
                    loadHtmlFilter: function (filterId) {
                        _functions.loadFilter(filterId, false);
                    },
                    loadHtmlFilterAndFilter: function (filterId) {
                        _functions.loadFilter(filterId, true);
                    }
                };

                _eventHandlers = {
                    input_onKeyPress: function (event) {
                        if (event.keyCode === 13) {
                            _functions.filter();
                        }
                    },
                    btnFilter_onClick: function (event) {
                        _functions.filter();
                    },
                    btnToggleVisibility_onClick: function (event) {
                        var $button = $(event.target),
                            caption = $button.html();

                        if (caption.trim() === "Hide") {
                            $(_htmlBindings.filterFieldsContainer).hide('slow');
                            $button.html("Show");
                        } else {
                            $(_htmlBindings.filterFieldsContainer).show('slow');
                            $button.html("Hide");
                        }
                    },
                    btnReset_onClick: function (event) {
                        _functions.reset();
                    },
                    btnSave_onClick: function (event) {
                        var $filterName = $(_htmlBindings.modalSaveFilter_txtName);
                        $filterName.val('');
                        $filterName.popover('hide')
                            .focus()
                            .parent()
                            .removeClass('has-error');
                        $(_htmlBindings.modalSaveFilter).modal('show');
                    },
                    drpSavedFilterItem_onClick: function (event) {
                        var filterId = event.currentTarget.dataset.filterid;
                        _functions.reset(true);
                        _functions.loadHtmlFilterAndFilter(filterId);
                    },
                    drpSavedFilterItem_btnDelete_onClick: function (event) {
                        var $btnDelete = $(event.currentTarget),
                            $btnSavedFilter = $btnDelete.prev(),
                            filterId = $btnSavedFilter.data('filterid');

                        $.ajax({
                            data: {
                                filterId: filterId
                            },
                            url: urls.deleteFilter,
                            type: 'post',
                            beforeSend: function () {
                                $('.loading').show();
                            },
                            success: function (response) {
                                console.log(response);
                                var data = $.parseJSON(response),
                                    $drpSavedFilters = $(_htmlBindings.drpSavedFilters);

                                if ($drpSavedFilters.children().length > 2) {
                                    $('[data-filterid="' + data.filterid + '"]').parent().remove();
                                } else {
                                    $drpSavedFilters.prev('button').remove();
                                    $drpSavedFilters.remove();
                                }
                                $('.loading').hide();
                            }
                        });
                    },
                    filterOperator_onClick: function (event) {
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
                        _functions.filter();
                    },
                    filterFields_btnAdd_onClick: function (event) {
                        var $button = $(event.target),
                            fieldType = $button.data('field-type'),
                            $filterFieldsContainer = $(_htmlBindings.filterFieldsContainer),
                            isFirstField = $filterFieldsContainer.children().length === 0,
                            isDateRanged = fieldType === 'date',
                            dropdownValues = [],
                            $operandGroup = _functions.createOperatorGroup(isFirstField),
                            $secondOperandGroup,
                            $formGroup;
                        $filterFieldsContainer.append($operandGroup);
                        _functions.bindOperatorGroupEventHandler($operandGroup);
                        if(!isFirstField){
                            $secondOperandGroup = _functions.createOperatorGroup(true);
                            $filterFieldsContainer.append($secondOperandGroup);
                            _functions.bindOperatorGroupEventHandler($secondOperandGroup);
                        }

                        if (fieldType === 'text') {
                            $formGroup = _functions.createTextField($button.data('field'), $button.text(), $button.data('field-value-type'));
                        } else if (fieldType === 'date' || fieldType === 'date-single') {
                            $formGroup = _functions.createDateField($button.data('field'), $button.text(), isDateRanged);
                        } else if (fieldType === 'dropdown') {
                            dropdownValues = dictionaries[$button.data('field-collection')];
                            console.log('>>>>',dictionaries, $button.data('field-collection'), dropdownValues);
                            // dropdownValues = dictionaries[$button.data('field')];
                            $formGroup = _functions.createDropdownField($button.data('field'), $button.text(), dropdownValues, $button.data('field-value-type'));
                        }
                        $filterFieldsContainer.append($formGroup);
                        _functions.bindFormGroupEventHandlers($formGroup);

                        if (_status.areControlsEnabled !== true) {
                            _functions.enableControls();
                        }
                    },
                    filterField_btnRemove_onClick: function (event) {
                        var $button = $(event.target),
                            $formGroup = $button.parent().parent().parent(),
                            $previousOperator = $formGroup.prev(),
                            $nextOperator = $formGroup.next();
                        if ($previousOperator.prev().length === 0) {
                            if ($nextOperator.length === 0) {
                                if (_status.areControlsEnabled) {
                                    _functions.disableControls();
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
                        _functions.filter();
                    },
                    modalSaveFilter_btnSave_onClick: function (event) {
                        var $filterName = $(_htmlBindings.modalSaveFilter_txtName),
                            filterName = $filterName.val(),
                            jsonFilterTree = JSON.stringify(_functions.getFilterTree()),
                            $drpSavedFilters = $(_htmlBindings.drpSavedFilters);

                        if (filterName !== "" && /\w/.test(filterName)) {
                            $.ajax({
                                data: {
                                    filterName      : filterName,
                                    jsonFilterTree  : jsonFilterTree,
                                },
                                url: urls.saveFilter,
                                type: 'post',
                                beforeSend: function () {
                                    $('.loading').show();
                                },
                                success: function (response) {
                                    console.log(response);
                                    var data = $.parseJSON(response),
                                        $dropdown;
                                    if ($drpSavedFilters.length === 0) {
                                        $dropdown = _functions.createDropdownSavedFilters(_htmlBindings.drpSavedFilters, "Load Saved Filter");
                                        $(_htmlBindings.filterFieldsControls.btnSave).after($dropdown);
                                        $drpSavedFilters = $(_htmlBindings.drpSavedFilters);
                                    }
                                    $drpSavedFilters.append(_functions.createDropdownSavedFilterItem(data.filterid, filterName));
                                    $(_htmlBindings.modalSaveFilter).modal('hide');

                                    $('.loading').hide();
                                }
                            });

                        } else {
                            $filterName.popover('show')
                                .focus()
                                .parent()
                                .addClass('has-error');
                        }
                        $(_htmlBindings.modalSaveFilter).modal('hide');
                    },

                };

                /**
                 * Initialization method
                 */
                function init() {
                    console.log('Not implemented yet.');
                    _functions.disableControls();
                    // if (filterId) {
                    //     _status.filterId = filterId;
                    //     _functions.reset(true);
                    //     _functions.loadHtmlFilter(filterId);
                    // }
                    _functions.bindEventHandlers();
                }

                // function setFilterId(value) {
                //     _status.filterId = value;
                // }

                function setFieldsDefinition(value) {
                    _status.fieldsDefinition = value;
                }

                function getFilterTree() {
                    return _functions.getFilterTree();
                }

                function getFilterPredicate() {
                    return _functions.getPredicate();
                }

                return {
                    init: init,
                    // setFilterId: setFilterId,
                    setFieldsDefinition: setFieldsDefinition,
                    getFilterTree: getFilterTree
                };
            }(global, $))
        };

        /**
         * Event Handlers
         * @type {{dropdown_OnClick: eventHandlers.dropdown_OnClick, itemsPerPageSelector_OnClick: eventHandlers.itemsPerPageSelector_OnClick, tableMainFieldWorkOrderLink_OnClick: eventHandlers.tableMainFieldWorkOrderLink_OnClick, sortButtons_OnClick: eventHandlers.sortButtons_OnClick, statusSelector_OnClick: eventHandlers.statusSelector_OnClick, btnActionFilesDialog_OnClick: eventHandlers.btnActionFilesDialog_OnClick, btnActionAdd_OnClick: eventHandlers.btnActionAdd_OnClick, btnActionEdit_OnClick: eventHandlers.btnActionEdit_OnClick, btnActionView_OnClick: eventHandlers.btnActionView_OnClick, pagerButton_OnClick: eventHandlers.pagerButton_OnClick, paginate_OnBeforeSend: eventHandlers.paginate_OnBeforeSend, paginate_OnSuccess: eventHandlers.paginate_OnSuccess}}
         */
        eventHandlers = {
            dropdown_OnClick: function (event) {
                var $anchor, value;
                $anchor = $(this);
                value = $anchor.html();
                $anchor.parents(htmlBindings.dropdown).find('.value').text(value);
            },
            itemsPerPageSelector_OnClick: function (event) {
                status.itemsPerPage = $(this).html();
                // Reset Current Page
                status.currentPage = 1;
                functions.paginate();
            },
            tableMainFieldWorkOrderLink_OnClick: function (event) {
                mvvm.screenWorkOrderDetails.showFor($(this).data('workorder'));
            },
            sortButtons_OnClick: function (event) {
                var $sortButton, sortingField;
                $sortButton = $(this);
                sortingField = $sortButton.data('field');
                if (status.sortLastButton !== null) {
                    status.sortLastButton.removeClass('asc desc');
                }
                if (status.sortField !== sortingField) {
                    status.sortFieldOrder = '';
                }
                status.sortField = sortingField;
                if (status.sortFieldOrder === 'ASC') {
                    status.sortFieldOrder = 'DESC';
                    $sortButton.addClass('asc').removeClass('desc');
                } else {
                    status.sortFieldOrder = 'ASC';
                    $sortButton.addClass('desc').removeClass('asc');
                }
                status.sortLastButton = $sortButton;
                functions.paginate();
            },
            statusSelector_OnClick: function (event) {
                var _status, equipID;

                equipID = $(this).parents('tr').data('equipid');
                _status = $(this).html();
                functions.updateEquipStatus(equipID, _status);
                functions.updateStatus(equipID, _status);
                functions.setActionsState(equipID, _status);
            },
            btnActionFilesDialog_OnClick: function (event) {

                // TODO: refactor here...
                var currentID, currentProjectRoot;
                currentID = $(this).data('equipid');
                currentProjectRoot = currentID + '_EQM';
                status.currentID = currentProjectRoot;

                ProjectFiles.functions.loadFileTree(currentProjectRoot);
                $(ProjectFiles.htmlBindings.modal_ProjectFiles).modal('show');
            },
            btnActionAdd_OnClick: function (event) {
                mvvm.modalEquipmentHistoryFormAdd.showFor($(this).data('equipid'));
            },
            btnActionEdit_OnClick: function (event) {
                mvvm.modalEquipmentHistoryFormEdit.showFor($(this).data('qbtxlineid'));
            },
            btnActionNote_OnClick: function (event) {
                mvvm.modalEquipmentHistoryFormNote.showFor($(this).data('equipid'));
            },
            btnActionView_OnClick: function (event) {
                throw 'Exception: Not implemented yet';
            },
            pagerButton_OnClick: function (event) {
                var page = $(this).data('page');
                status.currentPage = page;
                functions.paginate();
            },
            paginate_OnBeforeSend: function (response) {
                $('.loading').show();
            },
            paginate_OnSuccess: function (response) {
                var data, pager, items, pagerControl;
                data = $.parseJSON(response);
                pager = new BootstrapPager(data, eventHandlers.pagerButton_OnClick);

                pagerControl = pager.getPagerControl();
                $(htmlBindings.pagerContainer).empty().append(pagerControl);
                $(htmlBindings.itemCounter).html(pager.itemsCount);

                items = pager.getCurrentPagedItems();
                functions.updateTable(items);

                $('.loading').hide();
            },
            itemSelectorControl_OnClick: function (event){
                // var $checkbox;
                // $checkbox = $(this);
                // if ($checkbox.data('qbtxlineid') === '') {
                //     $checkbox.prop('checked', false).trigger('change');
                // }
            },
            itemsSelectorControl_OnClick: function (event){
                var $a;
                $a = $(this);

                if ($a.html() === 'All'){
                    $(htmlBindings.itemSelectorControl).prop('checked', true).trigger('change');
                    functions.enableBatchActions();
                } else {
                    $(htmlBindings.itemSelectorControl).prop('checked', false).trigger('change');
                }
            },
            itemSelectorControl_OnChange: function (event){
                var $checkbox, checkedArray;
                $checkbox = $(this);
                if ($checkbox.prop('checked')){
                    $(this).parents('tr').children('td').css('background-color', colors.selectedItemColor);
                    functions.enableBatchActions();
                } else {
                    $(this).parents('tr').children('td').css('background-color', 'transparent');
                    checkedArray = functions.getCheckedSelectors();
                    if (checkedArray.length === 0) {
                        functions.disableBatchActions();
                    }
                }
            },
            batchActionEdit_OnClick: function (event) {
                // var chechedSelectorControls, $firstSelectorControl;
                // chechedSelectorControls = functions.getCheckedSelectors();
                // $firstSelectorControl = $(chechedSelectorControls).first();
                // mvvm.modalEquipmentHistoryFormBatchEdit.showFor($firstSelectorControl.data('qbtxlineid'));

                var chechedSelectorControls, qbtxlineidCollection, equipidCollection;
                chechedSelectorControls = functions.getCheckedSelectors();
                qbtxlineidCollection = $(chechedSelectorControls).map(function () {
                    return $(this).data('qbtxlineid');
                });
                equipidCollection = $(chechedSelectorControls).map(function () {
                    return $(this).data('equipid');
                });

                mvvm.modalEquipmentHistoryFormBatchEdit.showFor($.makeArray(qbtxlineidCollection), $.makeArray(equipidCollection));
            },
            batchActionDelete_OnClick: function (event) {
                var chechedSelectorControls, qbtxlineidCollection, equipidCollection;
                chechedSelectorControls = functions.getCheckedSelectors();
                qbtxlineidCollection = $(chechedSelectorControls).map(function () {
                    return $(this).data('qbtxlineid');
                });
                equipidCollection = $(chechedSelectorControls).map(function () {
                    return $(this).data('equipid');
                });

                mvvm.modalEquipmentHistoryFormBatchDelete.showFor($.makeArray(qbtxlineidCollection), $.makeArray(equipidCollection));
            },
        };

        /**
         * Functions
         * @type {{bindEventHandlers: functions.bindEventHandlers, bindTableItemsEventHandlers: functions.bindTableItemsEventHandlers, buildClassBy: functions.buildClassBy, usePlugins: functions.usePlugins, paginate: functions.paginate, getRowByEquipID: functions.getRowByEquipID, updateEquip: functions.updateEquip, updateEquipStatus: functions.updateEquipStatus, setActionsState: functions.setActionsState, enableRowActionAdd: functions.enableRowActionAdd, disableRowActionAdd: functions.disableRowActionAdd, enableRowActionEdit: functions.enableRowActionEdit, disableRowActionEdit: functions.disableRowActionEdit, updateStatus: functions.updateStatus, buildTableItem: functions.buildTableItem, updateTable: functions.updateTable}}
         */
        functions = {
            getCheckedSelectors: function () {
                var selectorsArray;
                selectorsArray = $(htmlBindings.itemSelectorControl);
                return $.grep(selectorsArray, function (element, index) {
                    return $(element).prop('checked');
                });
            },
            bindEventHandlers: function () {
                $(htmlBindings.dropdown).on('click', 'a', eventHandlers.dropdown_OnClick);
                $(htmlBindings.itemsPerPageSelector).on('click', 'a', eventHandlers.itemsPerPageSelector_OnClick);
                $(htmlBindings.sortButtons).on('click', eventHandlers.sortButtons_OnClick);

                $(htmlBindings.pagerButton).on('click', eventHandlers.pagerButton_OnClick);
                $(htmlBindings.itemsSelectorControl).on('click', 'a', eventHandlers.itemsSelectorControl_OnClick);

                $(htmlBindings.batchActionEdit).on('click', eventHandlers.batchActionEdit_OnClick);
                $(htmlBindings.batchActionDelete).on('click', eventHandlers.batchActionDelete_OnClick);

                functions.bindTableItemsEventHandlers();
            },
            bindTableItemsEventHandlers: function () {
                $(htmlBindings.tableMainFieldWorkOrderLink).on('click', eventHandlers.tableMainFieldWorkOrderLink_OnClick);
                $(htmlBindings.statusSelector).on('click', 'a', eventHandlers.statusSelector_OnClick);
                $(htmlBindings.btnActionFilesDialog).on('click', eventHandlers.btnActionFilesDialog_OnClick);
                $(htmlBindings.btnActionAdd).on('click', eventHandlers.btnActionAdd_OnClick);
                $(htmlBindings.btnActionEdit).on('click', eventHandlers.btnActionEdit_OnClick);
                $(htmlBindings.btnActionNote).on('click', eventHandlers.btnActionNote_OnClick);
                $(htmlBindings.btnActionView).on('click', eventHandlers.btnActionView_OnClick);
                $(htmlBindings.itemSelectorControl).on('click', eventHandlers.itemSelectorControl_OnClick);
                $(htmlBindings.itemSelectorControl).on('change', eventHandlers.itemSelectorControl_OnChange);
            },
            enableBatchActions: function () {
                $(htmlBindings.batchActions).prop('disabled', false).removeClass('disabled');
            },
            disableBatchActions: function () {
                $(htmlBindings.batchActions).prop('disabled', true).addClass('disabled');
            },
            buildClassBy: function (value) {
                return value.toLowerCase().replace(' ', '-');
            },
            usePlugins: function () {
                $(htmlBindings.dateRangePickerSingle).daterangepicker({
                    singleDatePicker: true,
                    format: 'YYYY-MM-DD',
                    startDate: global.moment(),
                    endDate: global.moment()
                });
            },
            paginate: function () {
                var filterTree, jsonFilterTree;
                filterTree = modules.filter.getFilterTree();
                jsonFilterTree = JSON.stringify(filterTree);
                $.ajax({
                    data: {
                        filterTree: jsonFilterTree,
                        page: status.currentPage,
                        itemsPerPage: status.itemsPerPage,
                        orderBy: status.sortField,
                        order: status.sortFieldOrder
                    },
                    url: urls.getEquipmentPage,
                    type: 'post',
                    beforeSend: eventHandlers.paginate_OnBeforeSend,
                    success: eventHandlers.paginate_OnSuccess
                });
            },
            getRowByEquipID: function (equipID) {
                return $(htmlBindings.tableMainFieldEquipId).filter(function doFilter(index) {
                    return $(this).find('a').text() === equipID;
                }).parent();
            },
            updateEquip: function (equipID, workOrder, status, historyID, dateOut, expectedIn, received, vesselid) {
                var statusClass, $row;
                global.console.log("equipID", equipID);
                global.console.log("workOrder", workOrder);
                global.console.log("status", status);
                global.console.log("historyID", historyID);
                global.console.log("DateOut", dateOut);
                global.console.log("ExpectedIn", expectedIn);
                global.console.log("Received", received);
                global.console.log("Vessel", vesselid);

                statusClass = functions.buildClassBy(status);
                $row = functions.getRowByEquipID(equipID);
                //$row.find(htmlBindings.tableMainFieldWorkOrder).text(workOrder);
                $row.find(htmlBindings.tableMainFieldWorkOrder).html('<a href="#" class="' + (htmlBindings.tableMainFieldWorkOrderLink).slice(1) + '" data-workorder="' + workOrder + '">' + workOrder + '</a>');
                $row.find(htmlBindings.tableMainFieldVessel).html('<a href="#" class="' + (htmlBindings.tableMainFieldVesselLink).slice(1) + '" data-vessel="' + vesselid + '">' + vesselid + '</a>');
                $row.find(htmlBindings.tableMainFieldStatus).find('.value').text(status);
                $row.find(htmlBindings.tableMainFieldStatus).find('.value').removeClass().addClass('value ' + statusClass).text(status);
                $row.find(htmlBindings.btnActionEdit).data('qbtxlineid', historyID);

                $row.find(htmlBindings.tableMainFiledDateOut).html(dateOut);
                $row.find(htmlBindings.tableMainFiledExpectedIn).html(expectedIn);
                // Received Date Field removed by request (vivian)
                // $row.find(htmlBindings.tableMainFiledReceived).html(received);

                // taked from bindTableItemsEventHandlers
                $(htmlBindings.tableMainFieldWorkOrderLink).on('click', eventHandlers.tableMainFieldWorkOrderLink_OnClick);

                functions.setActionsState(equipID, status);
            },
            updateEquips: function (equipIDCollection, workOrder, status, historyIDCollection, dateOut, expectedIn, received, vesselid) {
                var statusClass, $row, index, length;
                global.console.log("equipIDCollection", equipIDCollection);
                global.console.log("workOrder", workOrder);
                global.console.log("status", status);
                global.console.log("historyID", historyIDCollection);
                global.console.log("DateOut", dateOut);
                global.console.log("ExpectedIn", expectedIn);
                global.console.log("Received", received);
                global.console.log("Vessel", vesselid);

                statusClass = functions.buildClassBy(status);

                index = 0;
                length = equipIDCollection.length;

                for(index; index < length; index = index + 1){
                    $row = functions.getRowByEquipID(equipIDCollection[index]);
                    if(workOrder === ''){
                        $row.find(htmlBindings.tableMainFieldWorkOrder).html('');
                    }
                    if(vesselid === ''){
                        $row.find(htmlBindings.tableMainFieldVessel).html('');
                    }
                    $row.find(htmlBindings.tableMainFieldStatus).find('.value').text(status);
                    $row.find(htmlBindings.tableMainFieldStatus).find('.value').removeClass().addClass('value ' + statusClass).text(status);
                    $row.find(htmlBindings.btnActionEdit).data('qbtxlineid', historyIDCollection[index]);

                    $row.find(htmlBindings.tableMainFiledDateOut).html(dateOut);
                    $row.find(htmlBindings.tableMainFiledExpectedIn).html(expectedIn);

                    functions.setActionsState(equipIDCollection[index], status);
                }
                $(htmlBindings.tableMainFieldWorkOrderLink).on('click', eventHandlers.tableMainFieldWorkOrderLink_OnClick);
            },
            updateEquipStatus: function (equipID, status) {
                var statusClass, $row;
                statusClass = functions.buildClassBy(status);
                $row = functions.getRowByEquipID(equipID);
                $row.find(htmlBindings.tableMainFieldStatus).find('.value').removeClass().addClass('value ' + statusClass).text(status);
                functions.setActionsState(equipID, status);
            },
            setActionsState: function (equipID, status) {
                if (status === 'Available') {
                    functions.enableRowActionAdd(equipID);
                    functions.disableRowActionEdit(equipID);
                } else {
                    functions.enableRowActionEdit(equipID);
                    functions.disableRowActionAdd(equipID);
                }
            },
            enableRowActionAdd: function (equipID) {
                var $row = functions.getRowByEquipID(equipID);
                $row.find(htmlBindings.btnActionAdd).attr({disabled: false});
            },
            disableRowActionAdd: function (equipID) {
                var $row = functions.getRowByEquipID(equipID);
                $row.find(htmlBindings.btnActionAdd).attr({disabled: true});
            },
            enableRowActionEdit: function (equipID) {
                var $row = functions.getRowByEquipID(equipID);
                $row.find(htmlBindings.btnActionEdit).attr({disabled: false});
            },
            disableRowActionEdit: function (equipID) {
                var $row = functions.getRowByEquipID(equipID);
                $row.find(htmlBindings.btnActionEdit).attr({disabled: true});
            },
            updateStatus: function (equipID, status) {
                $.post(
                    urls.updateStatusUrl,
                    {
                        equipid: equipID,
                        status: status
                    }
                ).done(function onDone(response) {
                    var data = $.parseJSON(response);
                    if (data.success) {
                        //functions.updateEquipStatus(equipID, status);
                    }
                }).fail(function onFail(response) {
                    throw 'POST Fail with :' + response;
                });
            },
            buildTableItem: function (item, trClass, tdClass) {
                var tdItemSelectorBuilder, addButtonBuilder, attachedFilesButtonBuilder, doc, editButtonBuilder, result, tdActionsTagBuilder, tdAssetTagBuilder, tdDaterecBuilder, tdDescripBuilder, tdEquipTypeBuilder, tdEquipidBuilder, tdExpdteinBuilder, tdInstalldteBuilder, tdItemnoBuilder, tdLocnoBuilder, tdMakeBuilder, tdModelBuilder, tdNotesBuilder, tdOrdnumBuilder, tdVesselidBuilder, tdPicture_fiBuilder, tdSerialnoBuilder, tdStatusBuilder, tdVoltageBuilder, viewButtonBuilder, noteButtonBuilder;

                doc = global.document;
                result = doc.createElement('tr');

                tdItemSelectorBuilder = function (tdClass) {
                    tdClass += ' item-selector';
                    return App.Helpers.withCheckboxTdBuilder(tdClass, 'item-selector-control', {equipid: item.equipid, qbtxlineid: item.qbtxlineid});
                };
                tdOrdnumBuilder = function (tdClass) {
                    tdClass += ' field-work-order';
                    return App.Helpers.withLinkTdBuilder(item.ordnum, tdClass, 'field-work-order-link', '#', {workorder: item.ordnum});
                };
                tdVesselidBuilder = function (tdClass) {
                    tdClass += ' field-vesselid';
                    return App.Helpers.withLinkTdBuilder(item.vesselid, tdClass, 'field-vesselid-link', '#', {vesselid: item.vesselid});
                };
                tdEquipidBuilder = function (tdClass) {
                    tdClass += ' field-id';
                    return App.Helpers.withLinkTdBuilder(item.equipid, tdClass, '', App.Helpers.Href('EquipmentHistoryDashboard', 'EquipmentHistories', {
                        equipid: btoa(item.equipid),
                        jsonFilterTree: '', // TODO implement
                        itemPerPage: status.itemsPerPage,
                        page: status.currentPage,
                        orderBy: status.sortField,
                        order: status.sortFieldOrder
                    }), {});
                };
                tdItemnoBuilder = function (tdClass) {
                    tdClass += ' field-part-no';
                    return App.Helpers.simpleTdBuilder(item.itemno, tdClass);
                };
                tdDescripBuilder = function (tdClass) {
                    tdClass += ' field-description';
                    return App.Helpers.simpleTdBuilder(item.descrip, tdClass);
                };
                tdMakeBuilder = function (tdClass) {
                    tdClass += ' field-brand';
                    return App.Helpers.simpleTdBuilder(item.make, '');
                };
                tdModelBuilder = function (tdClass) {
                    tdClass += ' field-model';
                    return App.Helpers.simpleTdBuilder(item.model, tdClass);
                };
                tdSerialnoBuilder = function (tdClass) {
                    tdClass += ' field-serial-no';
                    return App.Helpers.simpleTdBuilder(item.serialno, tdClass);
                };
                tdVoltageBuilder = function (tdClass) {
                    tdClass += ' field-voltage';
                    return App.Helpers.simpleTdBuilder(item.Voltage, tdClass);
                };
                tdEquipTypeBuilder = function (tdClass) {
                    tdClass += ' field-type';
                    return App.Helpers.simpleTdBuilder(item.EquipType, tdClass);
                };
                tdInstalldteBuilder = function (tdClass) {
                    tdClass += ' field-date-out';
                    return App.Helpers.simpleTdBuilder(item.installdte, tdClass);
                };
                tdExpdteinBuilder = function (tdClass) {
                    tdClass += ' field-expected-in';
                    return App.Helpers.simpleTdBuilder(item.expdtein, tdClass);
                };
                // tdDaterecBuilder = function (tdClass) {
                //     tdClass += ' field-received';
                //     return App.Helpers.simpleTdBuilder(item.daterec, tdClass);
                // };
                // tdNotesBuilder = function (tdClass) {
                //     tdClass += ' field-notes';
                //     return App.Helpers.simpleTdBuilder(item.notes, tdClass);
                // };
                // tdAssetTagBuilder = function (tdClass) {
                //     tdClass += ' field-asset-tag';
                //     return App.Helpers.simpleTdBuilder(item.assettag, tdClass);
                // };
                tdLocnoBuilder = function (tdClass) {
                    tdClass += ' field-locno';
                    return App.Helpers.simpleTdBuilder(item.locno, tdClass);
                };
                tdStatusBuilder = function () {
                    var dictionary, index, $td, $btnGroup, $button, $value, $caret, $ul;

                    $td = $('<td class="item-field field-status">');
                    $btnGroup = $('<div class="btn-group dropdown">');
                    $button = $('<button class="btn btn-default btn-sm dropdown-toggle" type="button" data-toggle="dropdown">');
                    $value = $('<span class="value ' + functions.buildClassBy(item.status) + '">' + item.status + ' </span>');
                    $caret = $('<span class="caret"></span>');
                    $button.append($value);
                    $button.append($caret);
                    $ul = $('<ul class="dropdown-menu">');
                    // dictionary = ['Available', 'Not Returned', 'Broken', 'Lost', 'Received'];
                    dictionary = ['Broken', 'Lost'];
                    for (index in dictionary) {
                        if (dictionary.hasOwnProperty(index)) {
                            $ul.append($('<li role="presentation"> <a role="menuitem" tabindex="-1" href="#" data-value="' + dictionary[index] + '">' + dictionary[index] + '</a></li>'));
                        }
                    }
                    $btnGroup.append($button);
                    $btnGroup.append($ul);
                    $td.append($btnGroup);

                    return $td[0];
                };

                tdActionsTagBuilder = function () {
                    var btnGroup, elements;
                    elements = [];
                    elements.push(viewButtonBuilder());
                    elements.push(noteButtonBuilder());
                    elements.push(addButtonBuilder());
                    elements.push(editButtonBuilder());
                    elements.push(attachedFilesButtonBuilder());
                    btnGroup = window.document.createElement('div');
                    btnGroup.className = 'btn-group';
                    return App.Helpers.complexTdBuilder(elements, 'item-actions', btnGroup);
                };
                attachedFilesButtonBuilder = function () {
                    var anchorClassName, spanGlyphIcon;
                    spanGlyphIcon = doc.createElement('span');
                    spanGlyphIcon.className = 'glyphicon glyphicon-folder-close';
                    anchorClassName = htmlBindings.btnActionFilesDialog.slice(1) + ' btn-action btn btn-primary btn-sm';
                    return App.Helpers.linkBuilder(spanGlyphIcon, anchorClassName, "#", {
                        equipid: item.equipid
                    });
                };
                editButtonBuilder = function () {
                    var anchorClassName, dataset, props, spanGlyphIcon;
                    spanGlyphIcon = doc.createElement('span');
                    spanGlyphIcon.className = 'glyphicon glyphicon-pencil';
                    anchorClassName = htmlBindings.btnActionEdit.slice(1) + ' btn-action btn btn-primary btn-sm';
                    dataset = {
                        equipid: item.equipid,
                        qbtxlineid: item.qbtxlineid,
                        ordnum: item.ordnum
                    };
                    if (!item.qbtxlineid && item.status === 'Available') {
                        props = {
                            'disabled': "disabled"
                        };
                    }
                    return App.Helpers.linkBuilder(spanGlyphIcon, anchorClassName, "#", dataset, props);
                };
                addButtonBuilder = function () {
                    var anchorClassName, dataset, spanGlyphIcon, props;
                    spanGlyphIcon = doc.createElement('span');
                    spanGlyphIcon.className = 'glyphicon glyphicon-plus-sign';
                    anchorClassName = htmlBindings.btnActionAdd.slice(1) + ' btn-action btn btn-primary btn-sm';
                    dataset = {
                        equipid: item.equipid,
                        qbtxlineid: item.qbtxlineid,
                        ordnum: item.ordnum
                    };
                    if (item.status !== 'Available') {
                        props = {
                            'disabled': "disabled"
                        };
                    }
                    return App.Helpers.linkBuilder(spanGlyphIcon, anchorClassName, "#", dataset, props);
                };
                noteButtonBuilder = function () {
                    var anchorClassName, spanGlyphIcon;
                    spanGlyphIcon = doc.createElement('span');
                    spanGlyphIcon.className = 'glyphicon glyphicon-file';
                    anchorClassName = htmlBindings.btnActionNote.slice(1) + ' btn-action btn btn-primary btn-sm';
                    return App.Helpers.linkBuilder(spanGlyphIcon, anchorClassName, "#", {
                        equipid: item.equipid
                    });
                };
                viewButtonBuilder = function () {
                    var anchorClassName, spanGlyphIcon;
                    spanGlyphIcon = doc.createElement('span');
                    spanGlyphIcon.className = 'glyphicon glyphicon-eye-open';
                    anchorClassName = htmlBindings.btnActionView.slice(1) + ' btn-action btn btn-primary btn-sm';
                    return App.Helpers.linkBuilder(spanGlyphIcon, anchorClassName, "#", {
                        equipid: item.equipid
                    });
                };
                result.className = trClass;
                result.dataset.equipid = item.equipid;

                //Item Selector
                result.appendChild(tdItemSelectorBuilder(tdClass));
                //Id
                result.appendChild(tdEquipidBuilder(tdClass));
                //Work Order
                result.appendChild(tdOrdnumBuilder(tdClass));
                //Vessel
                result.appendChild(tdVesselidBuilder(tdClass));
                //Part No
                result.appendChild(tdItemnoBuilder(tdClass));
                //Description
                result.appendChild(tdDescripBuilder(tdClass));
                //Brand
                result.appendChild(tdMakeBuilder(tdClass));
                //Model
                result.appendChild(tdModelBuilder(tdClass));
                //Serial No
                result.appendChild(tdSerialnoBuilder(tdClass));
                //Voltage
                result.appendChild(tdVoltageBuilder(tdClass));
                //Type
                result.appendChild(tdEquipTypeBuilder(tdClass));
                //Date Out
                result.appendChild(tdInstalldteBuilder(tdClass));
                //Expected In
                result.appendChild(tdExpdteinBuilder(tdClass));
                //Received
                // result.appendChild(tdDaterecBuilder(tdClass));
                //Notes
                // result.appendChild(tdNotesBuilder(tdClass));
                //Asset Tag
                // result.appendChild(tdAssetTagBuilder(tdClass));
                //Locno
                result.appendChild(tdLocnoBuilder(tdClass));
                //Status
                result.appendChild(tdStatusBuilder(tdClass));
                //Actions
                result.appendChild(tdActionsTagBuilder());

                return result;

            },
            updateTable: function (items) {
                var $table, $tableBody, index;
                $table = $(htmlBindings.tableMain);
                $tableBody = $table.children('tbody');
                $tableBody.empty();

                for (index in items) {
                    if (items.hasOwnProperty(index)) {
                        $tableBody.append(functions.buildTableItem(items[index], '', 'item-field'));
                    }
                }
                functions.bindTableItemsEventHandlers();
            }
        };

        /**
         *
         * @param {string} selector
         */
        function setItemsPerPageSelector(selector) {
            htmlBindings.itemsPerPageSelector = selector;
        }

        /**
         *
         * @param {Number} value
         */
        function setItemsPerPage(value) {
            status.itemsPerPage = value;
        }

        /**
         *
         * @param {string} selector
         */
        function setStatusSelector(selector) {
            htmlBindings.statusSelector = selector;
        }

        /**
         *
         * @param {string} name
         * @param {Object} dictionary
         */
        function addDictionary(name, dictionary) {
            dictionaries[name] = dictionary;
        }

        /**
         *
         * @param {string} name
         * @param {string} url
         */
        function addUrl(name, url) {
            urls[name] = url;
        }

        /**
         * 
         * @returns {string|null}
         */
        function getCurrentID() {
            return status.currentID;
        }

        /**
         * 
         * @param {string} filterID
         * @param fieldsDefinition
         */
        function init(filterID, fieldsDefinition) {
            var index;
            global.console.log('filterID: ', filterID);
            global.console.log('fieldsDefinition: ', fieldsDefinition);

            global.console.log('HTML Bindings');
            for (index in htmlBindings) {
                if (htmlBindings.hasOwnProperty(index)) {
                    global.console.log('\t', index, ':', htmlBindings[index]);
                }
            }

            global.console.log('Binding Event Handlers');
            functions.bindEventHandlers();

            global.console.log('Use Plugins');
            functions.usePlugins();

            global.console.log('Dictionaries:');
            global.console.log(dictionaries);



            global.console.log('Initializing MVVM related logic:');
            for (index in mvvm) {
                if (mvvm.hasOwnProperty(index)) {
                    global.console.log('\t', index, ':', mvvm[index]);
                    mvvm[index].init();
                }
            }
            mvvm.modalEquipmentHistoryFormAdd.setSaveHistoryCallback(functions.updateEquip);
            mvvm.modalEquipmentHistoryFormEdit.setUpdateHistoryCallback(functions.updateEquip);
            mvvm.modalEquipmentHistoryFormEdit.setDeleteHistoryCallback(functions.updateEquip);

            mvvm.modalEquipmentHistoryFormBatchEdit.setUpdateHistoriesCallback(functions.updateEquips);
            mvvm.modalEquipmentHistoryFormBatchDelete.setDeleteHistoriesCallback(functions.updateEquips);


            global.console.log('Initializing Modules related logic:');
            for (index in modules) {
                if (modules.hasOwnProperty(index)) {
                    global.console.log('\t', index, ':', modules[index]);
                    modules[index].init();
                }
            }

            ProjectFiles.init();
            // DynamicFilter.init(filter, fieldsDefinition); //TODO:  pasar field definition.

            modules.filter.setFieldsDefinition(fieldsDefinition);
        }

        return {
            init: init,
            setItemsPerPage: setItemsPerPage,
            setItemsPerPageSelector: setItemsPerPageSelector,
            setStatusSelector: setStatusSelector,
            addDictionary: addDictionary,
            addUrl: addUrl,
            getCurrentID: getCurrentID
        };
    }());
}(window, window.jQuery, window.kb, window.ko, window.Backbone));
