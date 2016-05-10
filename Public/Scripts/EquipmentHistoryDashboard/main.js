(function (global, $, knockBack, knockout, backbone) {
    "use strict";
    var dandelionjs = global.dandelion,
        App = dandelionjs.namespace('App', global);

    App.EquipmentHistoryDashboard = (function () {

        var urls, status, functions, dictionaries, htmlBindings, eventHandlers, mvvm;

        /**
         * Urls
         */
        urls = {};
        /**
         * Statuses
         */
        status = {
            itemsPerPage: 0,
            currentPage: 0,
            sortField: 'equipid',
            sortFieldOrder: 'ASC'
        };
        /**
         * Dictionaries
         */
        dictionaries = {};
        /**
         * HTML Bindings
         */
        htmlBindings = {
            dashboardContainer: '.dashboard-container',
            dropdown: '.dropdown',
            itemsPerPageSelector: '.items-per-page-selector',
            statusSelector: '.field-status',
            btnActionFilesDialog: '.btn-action-files-dialog',
            btnActionAdd: '.btn-action-add',
            btnActionEdit: '.btn-action-edit',
            btnActionView: '.btn-action-view',
            dateRangePickerSingle: '.daterangepicker-single',
            tableMain: '#equipmentHistoryDashboardTable',
            pagerContainer: '.pager-wrapper',
            pagerButton: '.pager-btn',
            tableMainFieldWorkOrder: '.field-work-order',
            tableMainFieldEquipId: '.field-id',
            tableMainFieldWorkOrderLink: '.field-work-order-link',
            tableMainFieldStatus: '.field-status'
            //modalEquipmentHistoryFormEdit: '#modal-equipment-history-form-edit'
        };

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
                        _functions.saveHistoryCallback(data.equipid, data.ordnum, data.status, data.qbtxlineid);
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
                            _functions.updateHistoryCallback(data.equipid, data.ordnum, data.status, data.qbtxlineid);
                        }
                        hide();
                    },
                    deleteHistory_OnDone: function (response) {
                        console.log('On Delete:', response);
                        var data = $.parseJSON(response);
                        if (data.success) {
                            _functions.deleteHistoryCallback(data.equipid, data.ordnum, data.status, data.qbtxlineid);
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

            }(global, $, knockBack, knockout, backbone))
        };
        /**
         * Event Handlers
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
            statusSelector_OnClick: function (event) {
                var _status, equipID;

                equipID = $(this).parents('tr').data('equipid');
                _status = $(this).html();
                functions.updateEquipStatus(equipID, _status);
                functions.updateStatus(equipID, _status);
                functions.setActionsState(equipID, _status);
            },
            btnActionFilesDialog_OnClick: function (event) {
                throw 'Exception: Not implemented yet';
            },
            btnActionAdd_OnClick: function (event) {
                mvvm.modalEquipmentHistoryFormAdd.showFor($(this).data('equipid'));
            },
            btnActionEdit_OnClick: function (event) {
                mvvm.modalEquipmentHistoryFormEdit.showFor($(this).data('qbtxlineid'));
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
                console.log(response);
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
        };
        /**
         * Functions
         */
        functions = {
            bindEventHandlers: function () {
                $(htmlBindings.dropdown).on('click', 'a', eventHandlers.dropdown_OnClick);
                $(htmlBindings.itemsPerPageSelector).on('click', 'a', eventHandlers.itemsPerPageSelector_OnClick);

                $(htmlBindings.pagerButton).on('click', eventHandlers.pagerButton_OnClick);
                functions.bindTableItemsEventHandlers();
            },
            bindTableItemsEventHandlers: function () {
                $(htmlBindings.tableMainFieldWorkOrderLink).on('click', eventHandlers.tableMainFieldWorkOrderLink_OnClick);
                $(htmlBindings.statusSelector).on('click', 'a', eventHandlers.statusSelector_OnClick);
                $(htmlBindings.btnActionFilesDialog).on('click', eventHandlers.btnActionFilesDialog_OnClick);
                $(htmlBindings.btnActionAdd).on('click', eventHandlers.btnActionAdd_OnClick);
                $(htmlBindings.btnActionEdit).on('click', eventHandlers.btnActionEdit_OnClick);
                $(htmlBindings.btnActionView).on('click', eventHandlers.btnActionView_OnClick);
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
                $.ajax({
                    data: {
                        predicate: '', // TODO: implement with filter
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
            updateEquip: function (equipID, workOrder, status, historyID) {
                var statusClass, $row;
                global.console.log("equipID", equipID);
                global.console.log("workOrder", workOrder);
                global.console.log("status", status);
                global.console.log("historyID", historyID);

                statusClass = functions.buildClassBy(status);
                $row = functions.getRowByEquipID(equipID);
                //$row.find(htmlBindings.tableMainFieldWorkOrder).text(workOrder);
                $row.find(htmlBindings.tableMainFieldWorkOrder).html('<a href="#" class="' + (htmlBindings.tableMainFieldWorkOrderLink).slice(1) + '" data-workorder="' + workOrder + '">' + workOrder + '</a>');
                $row.find(htmlBindings.tableMainFieldStatus).find('.value').text(status);
                $row.find(htmlBindings.tableMainFieldStatus).find('.value').removeClass().addClass('value ' + statusClass).text(status);
                $row.find(htmlBindings.btnActionEdit).data('qbtxlineid', historyID);
                functions.setActionsState(equipID, status);
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
                var addButtonBuilder, attachedFilesButtonBuilder, doc, editButtonBuilder, result, tdActionsTagBuilder, tdAssetTagBuilder, tdDaterecBuilder, tdDescripBuilder, tdEquipTypeBuilder, tdEquipidBuilder, tdExpdteinBuilder, tdInstalldteBuilder, tdItemnoBuilder, tdLocnoBuilder, tdMakeBuilder, tdModelBuilder, tdNotesBuilder, tdOrdnumBuilder, tdPicture_fiBuilder, tdSerialnoBuilder, tdStatusBuilder, tdVoltageBuilder, viewButtonBuilder;

                doc = global.document;
                result = doc.createElement('tr');

                tdOrdnumBuilder = function (tdClass) {
                    tdClass += ' field-work-order';
                    return App.Helpers.withLinkTdBuilder(item.ordnum, tdClass, 'field-work-order-link', '#', {workorder: item.ordnum});
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
                tdDaterecBuilder = function (tdClass) {
                    tdClass += ' field-received';
                    return App.Helpers.simpleTdBuilder(item.daterec, tdClass);
                };
                tdNotesBuilder = function (tdClass) {
                    tdClass += ' field-notes';
                    return App.Helpers.simpleTdBuilder(item.notes, tdClass);
                };
                tdAssetTagBuilder = function (tdClass) {
                    tdClass += ' field-asset-tag';
                    return App.Helpers.simpleTdBuilder(item.assettag, tdClass);
                };
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
                    dictionary = ['Available', 'Not Returned', 'Broken', 'Lost', 'Received'];
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
                    anchorClassName = htmlBindings.btnActionFilesDialog.slice(1) + ' btn-action btn btn-default btn-sm';
                    return App.Helpers.linkBuilder(spanGlyphIcon, anchorClassName, "#", {
                        equipid: item.equipid
                    });
                };
                editButtonBuilder = function () {
                    var anchorClassName, dataset, props, spanGlyphIcon;
                    spanGlyphIcon = doc.createElement('span');
                    spanGlyphIcon.className = 'glyphicon glyphicon-edit';
                    anchorClassName = htmlBindings.btnActionEdit.slice(1) + ' btn-action btn btn-default btn-sm';
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
                    anchorClassName = htmlBindings.btnActionAdd.slice(1) + ' btn-action btn btn-default btn-sm';
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
                viewButtonBuilder = function () {
                    var anchorClassName, spanGlyphIcon;
                    spanGlyphIcon = doc.createElement('span');
                    spanGlyphIcon.className = 'glyphicon glyphicon-eye-open';
                    anchorClassName = htmlBindings.btnActionView.slice(1) + ' btn-action btn btn-default btn-sm';
                    return App.Helpers.linkBuilder(spanGlyphIcon, anchorClassName, "#", {
                        equipid: item.equipid
                    });
                };
                result.className = trClass;
                result.dataset.equipid = item.equipid;

                //Id
                result.appendChild(tdEquipidBuilder(tdClass));
                //Work Order
                result.appendChild(tdOrdnumBuilder(tdClass));
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
                result.appendChild(tdDaterecBuilder(tdClass));
                //Notes
                result.appendChild(tdNotesBuilder(tdClass));
                //Asset Tag
                result.appendChild(tdAssetTagBuilder(tdClass));
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

        function setItemsPerPageSelector(selector) {
            htmlBindings.itemsPerPageSelector = selector;
        }

        function setItemsPerPage(value) {
            status.itemsPerPage = value;
        }

        function setStatusSelector(selector) {
            htmlBindings.statusSelector = selector;
        }

        function addDictionary(name, dictionary) {
            dictionaries[name] = dictionary;
        }

        function addUrl(name, url) {
            urls[name] = url;
        }

        function init(filter) {
            var index;
            global.console.log('filter: ', filter);

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
        }

        return {
            init: init,
            setItemsPerPage: setItemsPerPage,
            setItemsPerPageSelector: setItemsPerPageSelector,
            setStatusSelector: setStatusSelector,
            addDictionary: addDictionary,
            addUrl: addUrl
        };
    }());
}(window, window.jQuery, window.kb, window.ko, window.Backbone));
