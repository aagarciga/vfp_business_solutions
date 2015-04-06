<script src="<?php echo $View->PublicVendorContext('bootstrap-3/js/moment.min.js'); ?>"></script>
<script src="<?php echo $View->PublicVendorContext('bootstrap-3/js/daterangepicker.js'); ?>"></script>
<script src="<?php echo $View->PublicVendorContext('jstree/jstree.min.js'); ?>"></script>
<script src="<?php echo $View->SharedScriptsContext('knockback-full-stack.min.js'); ?>"></script>
<script src="<?php echo $View->PublicVendorContext('dropzone/dropzone.js'); ?>"></script>

<script>
/**
 * Vessel Form Related MVVM Logic
 * @author Alex
 * @namespace App.Dashboard.VesselForm
 * @param {window} global
 * @param {jQuery} $
 * @param {kb} KnockBack
 * @param {ko} Knockout
 * @param {Backbone} Backbone
 * @returns {undefined}
 * @inner JSLint Passed
 */
(function (global, $, KnockBack, Knockout, Backbone) {
    "use strict";

    var dandelion = global.dandelion,
        VesselForm = dandelion.namespace('App.Dashboard.VesselForm', global);
    
    VesselForm.htmlBindings = {};
    VesselForm.htmlBindings.kbViewElement = '#kb-view-vessel';
    VesselForm.htmlBindings.modalSaveNotes = '#vesselForm_modal_saveNotes';

    VesselForm.Model = (function (base) {

        function Model() {
            return Model.base.constructor.apply(this, arguments);
        }

        dandelion.js.extends(Model, base);

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
            $.post("<?php echo $View->Href('Dashboard', 'UpdateVesselFormNotes') ?>", 
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
                    console.log(response);
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

}(window, jQuery, kb, ko, Backbone));
</script>

<script>
/**
 * SalesOrder Form Related MVVM Logic
 * @author Alex
 * @namespace App.Dashboard.SalesOrderForm
 * @param {window} global
 * @param {jQuery} $
 * @param {kb} KnockBack
 * @param {ko} Knockout
 * @param {Backbone} Backbone
 * @returns {undefined}
 * @inner JSLint Passed
 */
(function (global, $, KnockBack, Knockout, Backbone) {
    "use strict";

    var dandelion = global.dandelion,
        SalesOrderForm = dandelion.namespace('App.Dashboard.SalesOrderForm', global);

    SalesOrderForm.htmlBindings = {};
    SalesOrderForm.htmlBindings.kbViewElement = '#kb-view-salesorder';
    SalesOrderForm.htmlBindings.modalSaveNotes = '#salesOrderForm_modal_saveNotes';

    SalesOrderForm.Model = (function (base) {

        function Model() {
            return Model.base.constructor.apply(this, arguments);
        }

        dandelion.js.extends(Model, base);

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
            $.post("<?php echo $View->Href('Dashboard', 'UpdateSalesOrderNotes') ?>",
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
                    console.log(response);
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

}(window, jQuery, kb, ko, Backbone));
</script>

<script>
/**
 * @author Alex
 * @namespace App.Dashboard
 * @param {window} global
 * @param {jQuery} $
 * @returns {undefined}
 * @inner JSLint Passed
 */
(function (global, $) {
    "use strict";

    var dandelion       = global.dandelion,
        Dashboard       = dandelion.namespace('App.Dashboard', global),
        SalesOrderForm  = global.App.Dashboard.SalesOrderForm,
        VesselForm      = global.App.Dashboard.VesselForm;

    Dashboard.status = {};
    Dashboard.status.itemsPerPage = 50; // Default items per page value
    Dashboard.status.table_header_sortLastButton = null;
    Dashboard.status.table_header_sortField = 'ordnum'; // Default Order By Fields
    Dashboard.status.table_header_sortFieldOrder = 'ASC'; // Default Order

    Dashboard.htmlBindings = {};
    Dashboard.htmlBindings.container                        = '.container';
    Dashboard.htmlBindings.filterForm                       = '#filterForm';
    Dashboard.htmlBindings.filterForm_btnToggleVisibility   = '#dashboard-panel-togle-visibility-button';
    Dashboard.htmlBindings.table                            = '#dashboardTable';
    Dashboard.htmlBindings.table_header_btnSort             = '.btn-table-sort';
    Dashboard.htmlBindings.table_body_btnSalesOrder         = '.item-field a.salesorder-form-link';
    Dashboard.htmlBindings.table_body_btnVessel             = '.item-field a.vessel-form-link';
    Dashboard.htmlBindings.control_salesOrderForm           = '#salesOrderForm';
    Dashboard.htmlBindings.control_salesOrderForm_btnClose  = '#salesOrderForm_btnClose';
    Dashboard.htmlBindings.control_vesselForm               = '#vesselForm';
    Dashboard.htmlBindings.control_vesselForm_btnClose      = '#vesselForm_btnClose';

    Dashboard.eventHandlers = {};
    Dashboard.eventHandlers.control_salesOrderForm_itemsLink_onClick = function (event) {
        /**
         * @param {event} event
         * @returns {undefined}
         */
        var salesOrderValue = $(event.target).html(),
            params = { salesOrder : salesOrderValue},
            dashboardViewHeight,
            salesOrderViewHeight;
        $.post("<?php echo $View->Href('Dashboard', 'GetSalesOrder') ?>", params)
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

        $.post("<?php echo $View->Href('Dashboard', 'GetVesselFormData') ?>", params)
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

    Dashboard.filterForm_toggleVisibility = function () {
        var $filterForm_btnToggleVisibility = $(Dashboard.htmlBindings.filterForm_btnToggleVisibility),
            $icon = $filterForm_btnToggleVisibility.children('span'),
            $filterForm = $(Dashboard.htmlBindings.filterForm);
        if ($icon.hasClass('glyphicon-eye-open')) {
            $icon.removeClass('glyphicon-eye-open').addClass('glyphicon-eye-close');
            $filterForm.hide("slow");
        } else {
            $icon.removeClass('glyphicon-eye-close').addClass('glyphicon-eye-open');
            $filterForm.show("slow");
        }
    };
    Dashboard.kbInit = function () {
        /**
         * KnockBack Related Object Initializations
         * @returns {undefined}
         */
        SalesOrderForm.init();
        VesselForm.init();
    };

    Dashboard.init = function () {
        // KnockBack Initializations
        Dashboard.kbInit();

        Dashboard.status.itemsPerPage = $('.top-pager-itemmperpage-control button span.value').text();

        // Event Handlers
        $(Dashboard.htmlBindings.table_body_btnSalesOrder).on('click',
            Dashboard.eventHandlers.control_salesOrderForm_itemsLink_onClick);

        $(Dashboard.htmlBindings.control_salesOrderForm_btnClose).on('click',
            function () {
                $(Dashboard.htmlBindings.control_salesOrderForm).hide();
            });

        $(Dashboard.htmlBindings.table_body_btnVessel).on('click',
            Dashboard.eventHandlers.control_vesselForm_itemsLink_onClick);

        $(Dashboard.htmlBindings.control_vesselForm_btnClose).on('click',
            function () {
                $(Dashboard.htmlBindings.control_vesselForm).hide();
            });

        $(Dashboard.htmlBindings.filterForm_btnToggleVisibility).on('click',
            Dashboard.filterForm_toggleVisibility);

        $(Dashboard.htmlBindings.table_header_btnSort).on('click',
            function (event) {
                var $target = $(event.target),
                    sortingField = $target.data('field'),
                    $table = $(Dashboard.htmlBindings.table);

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
                Dashboard.Page(Dashboard.DynamicFilter.FilterString,
                    1,
                    Dashboard.status.itemsPerPage,
                    $table,
                    Dashboard.status.table_header_sortField,
                    Dashboard.status.table_header_sortFieldOrder);
            });
        // End Event handlers
    };

    Dashboard.init();
}(window, jQuery));
</script>

<script>
   ;(function(App, Dandelion) {
        "use strict";

        // Dashboard Namespace
        var Dashboard = Dandelion.namespace('App.Dashboard', window);
////            SalesOrder = Dandelion.namespace('App.Dashboard.SalesOrder', window),
//            SalesOrderForm = App.Dashboard.SalesOrderForm,
//            VesselForm = App.Dashboard.VesselForm;
        
//        Dashboard.FilterForm = $('#filterForm');
        Dashboard.itemPerPage = $('.top-pager-itemmperpage-control button span.value').text();
//        Dashboard.TableSortLastButton = null;
        Dashboard.TableSortField = "ordnum"; // Default Order By Fields
        Dashboard.TableSortFieldOrder = "ASC"; // Default Order
//        Dashboard.TogleFilterVisibitilyButton = $('#dashboard-panel-togle-visibility-button');
        
//        Dashboard.TogleFilterVisibitilyCallback = function(){
//            var $button = Dashboard.TogleFilterVisibitilyButton,
//                $icon = $button.children('span'),
//                $filter = Dashboard.FilterForm;
//        
//            if ($icon.hasClass('glyphicon-eye-open')) {
//                $icon.removeClass('glyphicon-eye-open').addClass('glyphicon-eye-close');
//                $filter.hide("slow");
//            }
//            else {
//                $icon.removeClass('glyphicon-eye-close').addClass('glyphicon-eye-open');
//                $filter.show("slow");
//            }
//        };
//        Dashboard._ItemFieldSalesOrderOnClickCallback = function(event){
////            var requestType = 'GET', 
////                    params = {
////                        salesorder: $(event.target).html(),
////                        fromController: 'Dashboard',
////                        fromAction: 'index',
////                        tableSortField: Dashboard.TableSortField,
////                        tableSortFieldOrder: Dashboard.TableSortFieldOrder,
////                        itemPerPage: Dashboard.itemPerPage,
////                        currentFilterId: Dashboard.DynamicFilter.currentFilterId
////                        // TODO Load filter (Saved or not)
////                    };
////            if (Dandelion.navigator.isChrome()) {
////                requestType = 'POST';
////            }            
////            
////            
////            Dandelion.mvc.redirect('SalesOrder', 'Index', params, requestType);
//
//            var salesOrder = $(event.target).html(),
//                params = {salesOrder: salesOrder};
////            console.log(params);
////            $.post('<?php echo $View->Href('Dashboard', 'GetSalesOrder') ?>', params)
////                .done(function (response) {
//////                    console.log(response);
////                    var _response = $.parseJSON(response),
////                        modelType = _response.formType;
//////                    console.log('modelType from response: ', modelType);
////                    
////                    if (_response.success) {
////                        
////                        Dashboard.SalesOrderForm.viewModel.modelType(modelType);
////                        
////                        Dashboard.SalesOrderForm.viewModel.ordnum(_response.salesOrderObject.ordnum);
////                        Dashboard.SalesOrderForm.viewModel.date(_response.salesOrderObject.date);
////                        Dashboard.SalesOrderForm.viewModel.custno(_response.salesOrderObject.custno);
////                        Dashboard.SalesOrderForm.viewModel.projectLocation(_response.salesOrderObject.projectLocation);
////                        Dashboard.SalesOrderForm.viewModel.notes(_response.salesOrderObject.notes);                        
////                        Dashboard.SalesOrderForm.viewModel.companyName(_response.salesOrderObject.companyName);
////                        Dashboard.SalesOrderForm.viewModel.address(_response.salesOrderObject.address);
////                        Dashboard.SalesOrderForm.viewModel.city(_response.salesOrderObject.city);
////                        Dashboard.SalesOrderForm.viewModel.state(_response.salesOrderObject.state);
////                        Dashboard.SalesOrderForm.viewModel.zip(_response.salesOrderObject.zip);
////                        Dashboard.SalesOrderForm.viewModel.phone(_response.salesOrderObject.phone);
////                        Dashboard.SalesOrderForm.viewModel.subtotal(_response.salesOrderObject.subtotal);
////                        Dashboard.SalesOrderForm.viewModel.discount(_response.salesOrderObject.discount);
////                        Dashboard.SalesOrderForm.viewModel.tax(_response.salesOrderObject.tax);
////                        Dashboard.SalesOrderForm.viewModel.shipping(_response.salesOrderObject.shipping);
////                        Dashboard.SalesOrderForm.viewModel.total(_response.salesOrderObject.total);
////                        
////                        if (modelType === 'B' || modelType === 'C') {
////                            Dashboard.SalesOrderForm.viewModel.ponum(_response.salesOrderObject.ponum);
////                            Dashboard.SalesOrderForm.viewModel.company(_response.salesOrderObject.company);
////                            Dashboard.SalesOrderForm.viewModel.destino(_response.salesOrderObject.destino);
////                            Dashboard.SalesOrderForm.viewModel.prostartdt(_response.salesOrderObject.prostartdt);
////                            Dashboard.SalesOrderForm.viewModel.proenddt(_response.salesOrderObject.proenddt);
////                            Dashboard.SalesOrderForm.viewModel.sotypecode(_response.salesOrderObject.sotypecode);
////                            Dashboard.SalesOrderForm.viewModel.mtrlstatus(_response.salesOrderObject.mtrlstatus);
////                            Dashboard.SalesOrderForm.viewModel.jobstatus(_response.salesOrderObject.jobstatus);
////                            Dashboard.SalesOrderForm.viewModel.technam1(_response.salesOrderObject.technam1);
////                            Dashboard.SalesOrderForm.viewModel.technam2(_response.salesOrderObject.technam2);
////                            Dashboard.SalesOrderForm.viewModel.qutno(_response.salesOrderObject.qutno);
////                            Dashboard.SalesOrderForm.viewModel.cstctid(_response.salesOrderObject.cstctid);
////                            Dashboard.SalesOrderForm.viewModel.jobdescrip(_response.salesOrderObject.jobdescrip);
////                        }
////                        Dashboard.SalesOrderForm.viewModel.items(_response.salesOrderObject.itemsCollection);
////                    }
////                    
////                })
////                .fail(function (response) {
//////                    console.log(response);
////                });
//                
//            var containerHeight = parseInt($('.container').css('height')),
//                    salesOrderHaight = parseInt($('#salesOrder').css('height'));
//            if (containerHeight > salesOrderHaight) {
//                $('#salesOrder').css('height', containerHeight);
//            }
//            $('#salesOrder').show();
//        };
//        
//        Dashboard._ItemFieldVesselFormOnClickCallback = function(event){
//            var vesselid = $(event.target).text(),
//                //If i must to get from ordnum when vesselid are not given directly (just in case!)
////                    ordnum = $(this).parent().parent().children('td').first().children('a').html(),
//                params = {vesselid: vesselid};
//
//            $.post('<?php echo $View->Href('Dashboard', 'GetVesselFormData') ?>', params)
//            .done(function (response) {
//                var _response = $.parseJSON(response);
//                if (_response.success) {
//                    Dashboard.VesselForm.viewModel.vesselid(_response.vesselFormObject.vesselid);
//                    Dashboard.VesselForm.viewModel.descrip(_response.vesselFormObject.descrip);
//                    Dashboard.VesselForm.viewModel.shipclass(_response.vesselFormObject.shipclass);
//                    Dashboard.VesselForm.viewModel.pentype(_response.vesselFormObject.pentype);
//                    Dashboard.VesselForm.viewModel.cementid(_response.vesselFormObject.cementid);
//                    Dashboard.VesselForm.viewModel.firecaulk(_response.vesselFormObject.firecaulk);
//                    Dashboard.VesselForm.viewModel.notes(_response.vesselFormObject.notes);
//                }
//
//            })
//            .fail(function (response) {
////                    console.log(response);
//            });
//
//            var containerHeight = parseInt($('.container').css('height')),
//                salesOrderHaight = parseInt($('#vesselForm').css('height'));
//            if (containerHeight > salesOrderHaight) {
//                $('#vesselForm').css('height', containerHeight);
//            }
//            $('#vesselForm').show();
//        };
        
//        Dashboard.SalesOrder.view = $('#kb-view-salesorder')[0];
//        Dashboard.SalesOrder.ViewModel = function (model) {
//            var self = this;
//            this.modelType          = kb.observable(model, 'modelType');
//            
//            this.ordnum             = kb.observable(model, 'ordnum');
//            this.date               = kb.observable(model, 'date');
//            this.custno             = kb.observable(model, 'custno');
//            this.projectLocation    = kb.observable(model, 'projectLocation');
//            this.notes              = kb.observable(model, 'notes');
//            this.companyName        = kb.observable(model, 'companyName');
//            this.address            = kb.observable(model, 'address');
//            this.city               = kb.observable(model, 'city');
//            this.state              = kb.observable(model, 'state');
//            this.zip                = kb.observable(model, 'zip');
//            this.phone              = kb.observable(model, 'phone');
//            this.subtotal           = kb.observable(model, 'subtotal');
//            this.discount           = kb.observable(model, 'discount');
//            this.tax                = kb.observable(model, 'tax');
//            this.shipping           = kb.observable(model, 'shipping');
//            this.total              = kb.observable(model, 'total');    
//            
//            // Related to B and C
//            this.ponum              = kb.observable(model, 'ponum');
//            this.company            = kb.observable(model, 'company');            
//            this.destino            = kb.observable(model, 'destino');
//            this.prostartdt         = kb.observable(model, 'prostartdt');
//            this.proenddt           = kb.observable(model, 'proenddt');
//            this.sotypecode         = kb.observable(model, 'sotypecode');
//            this.mtrlstatus         = kb.observable(model, 'mtrlstatus');
//            this.jobstatus          = kb.observable(model, 'jobstatus');
//            this.technam1           = kb.observable(model, 'technam1');
//            this.technam2           = kb.observable(model, 'technam2');
//            this.qutno              = kb.observable(model, 'qutno');
//            this.cstctid            = kb.observable(model, 'cstctid');
//            this.jobdescrip         = kb.observable(model, 'jobdescrip');
//            
//            this.items              = kb.collectionObservable(model.items);
//            
//            this.onShowNotesModal = function (view_model, event){
//                $('#notesSaveModal').modal();
//                return view_model;
//            };            
//            this.onSaveNotesModal = function (view_model, event){
//                $.post('<?php echo $View->Href('Dashboard', 'UpdateSalesOrderNotes') ?>', {ordnum: view_model.ordnum(), notes: view_model.notes()})
//                .done(function (response){
//                    $('#notesSaveModal').modal('hide');
//                })
//                .fail(function (response){
//                    console.log(response);
//                });              
//                return view_model;
//            };
//            this.showControlIFBOrC = ko.computed(function () {
//                return self.modelType() === 'B' || self.modelType() === 'C';
//            });
//            this.showControlIfNotC = ko.computed(function () {
//                return !(self.modelType() === 'C');
//            });
//         };
        
        /// AMODEL 
//        (function() {
//            var _ref,
//              Dashboard = window.App.Dashboard,
//              __hasProp = {}.hasOwnProperty,
//              __extends = function(child, parent) { for (var key in parent) { if (__hasProp.call(parent, key)) child[key] = parent[key]; } function ctor() { this.constructor = child; } ctor.prototype = parent.prototype; child.prototype = new ctor(); child.__super__ = parent.prototype; return child; };
//            
//            Dashboard.SalesOrder.AModel = (function(_super) {
//            __extends(AModel, _super);
//
//            function AModel() {
//              _ref = AModel.__super__.constructor.apply(this, arguments);
//              return _ref;
//            }
//              
//            AModel.prototype.ordnum = "";
//            AModel.prototype.date = "";
//            AModel.prototype.custno = "";
//            AModel.prototype.projectLocation = "";
//            AModel.prototype.notes = "";
//            AModel.prototype.companyName = "";
//            AModel.prototype.address = "";
//            AModel.prototype.city = "";
//            AModel.prototype.state = "";
//            AModel.prototype.zip = "";
//            AModel.prototype.phone = "";
//            AModel.prototype.subtotal = "";
//            AModel.prototype.discount = "";
//            AModel.prototype.tax = "";
//            AModel.prototype.shipping = "";
//            AModel.prototype.total = "";
//            
//            AModel.prototype.items = new Backbone.Collection([]);
//            AModel.prototype.modelType = "";
//            
//            AModel.prototype.ponum = "";
//            AModel.prototype.company = "";
//            AModel.prototype.destino = "";
//            AModel.prototype.prostartdt = "";
//            AModel.prototype.proenddt = "";
//            AModel.prototype.sotypecode = "";
//            AModel.prototype.mtrlstatus = "";
//            AModel.prototype.jobstatus = "";
//            AModel.prototype.technam1 = "";
//            AModel.prototype.technam2 = "";
//            AModel.prototype.qutno = "";
//            AModel.prototype.cstctid = "";
//            AModel.prototype.jobdescrip = "";
//
//            return AModel;
//
//            })(Backbone.Model);
//
//        }).call(this);
        
        /// Knockback Init
//        Dashboard.kbInit = function (){
//            
////            Dashboard.SalesOrder.model = new Dashboard.SalesOrder.AModel();
////            Dashboard.SalesOrder.viewModel = new Dashboard.SalesOrder.ViewModel(Dashboard.SalesOrder.model);
////            ko.applyBindings(Dashboard.SalesOrder.viewModel, Dashboard.SalesOrder.view);
////            SalesOrderForm.init();
////            VesselForm.init();
//        };
        
//        Dashboard.Init = function(){
//            Dashboard.kbInit();

            // SalesOrder Form entry point
//            $('.item-field a.salesorder-form-link').on('click', Dashboard._ItemFieldSalesOrderOnClickCallback);            
//            $('#salesOrderClose').on('click', function () {
//                $('#salesOrder').hide();
//            }); 
            
            //Vessel Form entry point
//            $('.item-field a.vessel-form-link').on('click', Dashboard._ItemFieldVesselFormOnClickCallback);
            
//            $('#vesselForm_btnClose').on('click', function () {
//                $('#vesselForm').hide();
//            });
            
//            Dashboard.TogleFilterVisibitilyButton.on('click', Dashboard.TogleFilterVisibitilyCallback);            
//            $('.btn-table-sort').on('click', function(){
//                
//                if (Dashboard.TableSortLastButton !== null) {
//                    Dashboard.TableSortLastButton.removeClass('asc desc');
//                }
//                if (Dashboard.TableSortField !== $(this).data('field')) {
//                    Dashboard.TableSortFieldOrder = '';
//                }
//                Dashboard.TableSortField = $(this).data('field');                
//                if(Dashboard.TableSortFieldOrder === '' ){
//                    Dashboard.TableSortFieldOrder = 'ASC';
//                    $(this).addClass('desc').removeClass('asc');
//                }
//                else if (Dashboard.TableSortFieldOrder === 'ASC'){
//                    Dashboard.TableSortFieldOrder = 'DESC';
//                    $(this).addClass('asc').removeClass('desc');
//                }
//                else{
//                    Dashboard.TableSortFieldOrder = 'ASC';
//                    
//                    $(this).addClass('desc').removeClass('asc');
//                }                
//                Dashboard.TableSortLastButton = $(this);                
//                var $table = $('#dashboardTable');
////                var $itemsperpage = $('.top-pager-itemmperpage-control button span.value').text();
//                Dashboard.Page(Dashboard.DynamicFilter.FilterString, 1, Dashboard.itemPerPage, $table, Dashboard.TableSortField, Dashboard.TableSortFieldOrder);
//            });
//        };
//        
//        Dashboard.Init();
    })(window.App, window.dandelion);
</script>

<script>
    ;(function(Dashboard) {
        "use strict";
        
        // DynamicFilter Namespace
        var DynamicFilter = {};
        Dashboard.DynamicFilter = DynamicFilter;
        Dashboard.DynamicFilter.currentFilterId = '';
        Dashboard.DynamicFilter.FilterString = "";
        Dashboard.DynamicFilter.SavedFilterList = $('#savedFilterList');
        Dashboard.DynamicFilter.SavedFilterListItems = $('.saved-filter-list-item');
        Dashboard.DynamicFilter.SavedFilterListItemsDelete = $('#savedFilterList li .close');
        Dashboard.DynamicFilter.SaveModalWindow = $('#filterSaveModal');
        Dashboard.DynamicFilter.FilterFields = $('#filterFormFields');
        Dashboard.DynamicFilter.Controls = {
            resetButton: $('#filterResetButton'),
            saveButton: $('#filterSaveButton'),
            filterButton: $('#filterButton')
        };
        Dashboard.DynamicFilter.Controls.SaveModal = {
            filterNameInput: $('#filterSaveModalFilterName'),
            submit: $('#filterSaveModalSubmit')
        };
        
        Dashboard.DynamicFilter._DisableFilterControls = function(){
            
            Dashboard.DynamicFilter.Controls.resetButton.addClass('disabled');
            Dashboard.DynamicFilter.Controls.saveButton.addClass('disabled');            
            Dashboard.DynamicFilter.Controls.filterButton.addClass('disabled');
        };
        Dashboard.DynamicFilter._EnableFilterControls = function(){
            
            Dashboard.DynamicFilter.Controls.resetButton.removeClass('disabled');
            Dashboard.DynamicFilter.Controls.saveButton.removeClass('disabled');            
            Dashboard.DynamicFilter.Controls.filterButton.removeClass('disabled');
        };
        Dashboard.DynamicFilter._LoadFilterCallback = function(event){ 
            
            var _filterid = event.currentTarget.dataset['filterid'];
            
            Dashboard.DynamicFilter.Controls.resetButton.click();         
            Dashboard.DynamicFilter._LoadFilter(_filterid);
            Dashboard.DynamicFilter._EnableFilterControls();
        };
        
        Dashboard.DynamicFilter._LoadFilter = function(filterId){
            $.ajax({
                data: {
                    filterid: filterId
                },
                url: '<?php echo $View->Href('Dashboard', 'GetSavedFilter') ?>',
                type: 'post',
                beforeSend: function() {
                    $('.loading').show();
                },
                success: function(response) {                    
                    var _response = $.parseJSON(response);
                    if(_response.success){
                        var _values = _response.expfrom.split(",");
                        Dashboard.DynamicFilter.FilterFields.append(_response.expfields);
                        Dashboard.DynamicFilter.FilterFields.find('select, input').each(function(index){
                            $(this).val(_values[index]);
                        });
                        Dashboard.DynamicFilter._BindLoadedControlsHandlers();
//                        Dashboard.TogleFilterVisibitilyCallback();
                        Dashboard.filterForm_toggleVisibility();
                        Dashboard.DynamicFilter._FilterCallback();
                    }
                    
                    $('.loading').hide();
                }
            });
        };
        Dashboard.DynamicFilter._FilterCallback = function(){
            var predicate = "";
            
            Dashboard.DynamicFilter.FilterFields.children().each(function() {    
                if ($(this).hasClass('btn-group')) {
                    var value = $(this).children('button').text();
                    predicate += value + " ";
                }
                else if ($(this).hasClass('form-group')) {
                    var $control = $(this).find('input, select');                    
                    if ($control.val() === "") {
                         predicate += 'EMPTY('+$control.data('fieldname')+') ';
                    }
                    else if($control.hasClass('daterangepicker-single')){
                        var range = $control.val().split(' - ');
                        predicate += "(" + $control.data('fieldname') + " >= '" + range[0] + "' ";
                        predicate += "And " + $control.data('fieldname') + " <= '" + range[1] + "') ";
                    }
                    else{
                        predicate += "LOWER(" + $control.data('fieldname') + ") LIKE '%" + $control.val().toLowerCase() + "%' ";                       
                    }
                }                
            });
            Dashboard.DynamicFilter.FilterString = predicate;
            
            var $table = $('#dashboardTable');
            Dashboard.Page(Dashboard.DynamicFilter.FilterString, 1, Dashboard.itemPerPage, $table, Dashboard.TableSortField, Dashboard.TableSortFieldOrder);
        };
        Dashboard.DynamicFilter._ResetCallback = function(){
            Dashboard.DynamicFilter.FilterFields.children().remove();
            Dashboard.DynamicFilter._DisableFilterControls();
            Dashboard.DynamicFilter._FilterCallback();
            Dashboard.DynamicFilter.Controls.filterButton.next().focus();
        };
        Dashboard.DynamicFilter._DeleteFilterFieldCallback = function(event){
            var $firstModifier = $('.btn-filter-modifier').first().parent(),
                $formGroup = $(event.currentTarget).parents('.form-group'),
                $previousControl = $formGroup.prev(),
                $nextControl = $formGroup.next();
        
            if ($previousControl[0] === $firstModifier[0]) {
                if ($nextControl.length === 0) { 
                    // Remove Previous Control if any
                    $previousControl.remove();
                    Dashboard.DynamicFilter._DisableFilterControls();
                }   
                else{                                
                    $nextControl.remove();
                }
            }
            else{
                // Remove Previous Control if any
                $previousControl.remove();
            }
            $formGroup.remove();
            Dashboard.DynamicFilter._FilterCallback();
        };
        Dashboard.DynamicFilter._DeleteFilterCallback = function(event){
            var _filterId = $(event.currentTarget).parent().find('a').data('filterid');                
            $.ajax({
                data: {
                    filterId: _filterId
                },
                url: '<?php echo $View->Href('Dashboard', 'DeleteFilter') ?>',
                type: 'post',
                beforeSend: function() {
                    $('.loading').show();
                },
                success: function(response) {
                    var _response = $.parseJSON(response);
                    if (Dashboard.DynamicFilter.SavedFilterList.children().length > 2) {
                        $('[data-filterid="'+_response.filterid+'"]').parent().remove();
                    }else{
                        Dashboard.DynamicFilter.SavedFilterList.prev('button').remove();
                        Dashboard.DynamicFilter.SavedFilterList.remove();
                        Dashboard.DynamicFilter.SavedFilterList = null;
                    }
                    $('.loading').hide();
                }
            });
        };
        Dashboard.DynamicFilter._OnEnterKeyPressCallback = function(event){
            if(event.keyCode === 13){
                Dashboard.DynamicFilter._FilterCallback();                       
            }
        };
        Dashboard.DynamicFilter._CreateTextFilter = function(fieldName, fieldDisplayName){
            var $formGroup = $('<div class="form-group" title="'+fieldDisplayName+'"><label class="sr-only">'+fieldDisplayName+'</label><div class="input-group"><input type="text" class="form-control" data-fieldname="'+fieldName+'" placeholder="'+fieldDisplayName+'"><span class="input-group-btn"><button class="btn btn-default glyphicon-action-button glyphicon-minus btn-delete-filter-field" title="Delete Filter Field" type="button"></button></span></div></div>');
        
            $formGroup.find('input').on('keypress', Dashboard.DynamicFilter._OnEnterKeyPressCallback);            
            $formGroup.find('button').on('click', Dashboard.DynamicFilter._DeleteFilterFieldCallback);
            
            return $formGroup;        
        };
        Dashboard.DynamicFilter._CreateDropdownFilter = function(fieldName, fieldDisplayName, optionList){
            var $formGroup = $('<div class="form-group" title="'+fieldDisplayName+'"><label class="sr-only">'+fieldDisplayName+'</label><div class="input-group"><select class="form-control" data-fieldname="'+fieldName+'"></select><span class="input-group-btn"><button class="btn btn-default glyphicon-action-button glyphicon-minus btn-delete-filter-field" title="Delete Filter Field" type="button"></button></span></div></div>');
            var $select = $formGroup.find('select'); 
            
            $select.append($('<option value="">Empty</option>'));
            for (var index in optionList) {
                var _current = optionList[index];
                $select.append($('<option value="'+_current.edistatid+'">'+_current.descrip+'</option>'));
            }
            
            $select.on('keypress', Dashboard.DynamicFilter._OnEnterKeyPressCallback);  
            $formGroup.find('button').on('click', Dashboard.DynamicFilter._DeleteFilterFieldCallback);
            
            return $formGroup;
        };
        Dashboard.DynamicFilter._CreateDateFilter = function(fieldName, fieldDisplayName){
            var $formGroup = $('<div class="form-group"><label class="sr-only">Start Date</label><div class="input-prepend input-group" title="'+fieldDisplayName+'"><span class="add-on input-group-addon"><i class="glyphicon glyphicon-calendar fa fa-calendar"></i></span><input type="text" class="form-control daterangepicker-single" data-fieldname="'+fieldName+'" placeholder="'+fieldDisplayName+'"><span class="input-group-btn"><button type="button" class="btn btn-default glyphicon-action-button glyphicon-minus btn-delete-filter-field"></button></span></div></div>');
            
            $formGroup.find('input').on('keypress', Dashboard.DynamicFilter._OnEnterKeyPressCallback).daterangepicker({singleDatePicker: false, format: 'MM/DD/YYYY', startDate: moment(), endDate: moment()});
            $formGroup.find('button').on('click', Dashboard.DynamicFilter._DeleteFilterFieldCallback);
            
            return $formGroup; 
        };
        Dashboard.DynamicFilter._CreateFirstModifier = function(){
            var $buttonGroup = $('<div class="btn-group"><button type="button" class="btn btn-default btn-filter-modifier disabled" style="opacity:1"></button><button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></button><ul class="dropdown-menu"><li class="current"><a href="#" style="display: inline-block; height: 26px; width: 100%;">Clear Not</a></li><li><a href="#">Not</a></li></ul></div>');
            var $button = $buttonGroup.find('button').first();
            
            $buttonGroup.find('li').each(function(){
                var _current = $(this);
                
                _current.on('click', function(){                    
                    // Change Current Modifier Text
                    if (_current.find('a').html() === "Clear Not") {
                        $button.html("");
                    } else {
                        $button.html(_current.find('a').html());                        
                    }
                    // Update Current Modifier
                    $buttonGroup.find('li.current').removeClass('current');
                    _current.addClass('current');
                    Dashboard.DynamicFilter._FilterCallback(); 
                });
            });
            
            return $buttonGroup;
        };
        Dashboard.DynamicFilter._CreateModifier = function(){
            var $buttonGroup = $('<div class="btn-group "><button type="button" class="btn btn-default btn-filter-modifier disabled" style="opacity:1">And</button><button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></button><ul class="dropdown-menu"><li class="current"><a href="#">And</a></li><li><a href="#">And Not</a></li><li class="divider"></li><li><a href="#">Or</a></li><li><a href="#">Or Not</a></li></ul></div>');
            var $button = $buttonGroup.find('button').first();
            
            $buttonGroup.find('li').each(function(){
                var _current = $(this);
                
                _current.on('click', function(){                    
                    // Change Current Modifier Text
                    $button.html(_current.find('a').html());                        
                    // Update Current Modifier
                    $buttonGroup.find('li.current').removeClass('current');
                    _current.addClass('current');
                    Dashboard.DynamicFilter._FilterCallback(); 
                });
            });
            
            return $buttonGroup;
        };
        
        Dashboard.DynamicFilter._BindFirstModifierClick = function($modifier){
            var $button = $modifier.find('button').first();
            
            $modifier.find('li').each(function(){
                var _current = $(this);
                
                _current.on('click', function(){                    
                    // Change Current Modifier Text
                    if (_current.find('a').html() === "Clear Not") {
                        $button.html("");
                    } else {
                        $button.html(_current.find('a').html());                        
                    }                        
                    // Update Current Modifier
                    $modifier.find('li.current').removeClass('current');
                    _current.addClass('current');
                    Dashboard.DynamicFilter._FilterCallback(); 
                });
            });            
        };
        Dashboard.DynamicFilter._BindModifierClick = function($modifier){
            var $button = $modifier.find('button').first();
            
            $modifier.find('li').each(function(){
                var _current = $(this);
                
                _current.on('click', function(){                    
                    // Change Current Modifier Text
                    $button.html(_current.find('a').html());                        
                    // Update Current Modifier
                    $modifier.find('li.current').removeClass('current');
                    _current.addClass('current');
                    Dashboard.DynamicFilter._FilterCallback(); 
                });
            });            
        };        
        Dashboard.DynamicFilter._BindLoadedControlsHandlers = function(){
            
            // Bind On Enter Key Press Behavior to Inputs
            Dashboard.DynamicFilter.FilterFields.find('input').on('keypress', Dashboard.DynamicFilter._OnEnterKeyPressCallback);
            
            // Bind Daterangepicker control
            Dashboard.DynamicFilter.FilterFields.find('input.daterangepicker-single').daterangepicker({singleDatePicker: false, format: 'MM/DD/YYYY', startDate: moment(), endDate: moment()});
            
            // Bind Modifier Behavior
            Dashboard.DynamicFilter.FilterFields.find('.btn-group').each(function(index){
                var _current = $(this);
                if (index === 0) {
                    Dashboard.DynamicFilter._BindFirstModifierClick(_current);
                }
                else{
                    Dashboard.DynamicFilter._BindModifierClick(_current);
                }
            });
            
            //Bind Delete Filter Field On Click Behavior                       
            Dashboard.DynamicFilter.FilterFields.find('.input-group-btn button').each(function(){
                $(this).on('click', Dashboard.DynamicFilter._DeleteFilterFieldCallback);
            });
        };
        
        Dashboard.DynamicFilter.Init = function(filterId){
            if (filterId) {
                Dashboard.DynamicFilter.currentFilterId = filterId;
                Dashboard.DynamicFilter.Controls.resetButton.click();         

                Dashboard.DynamicFilter._LoadFilter(filterId);

                Dashboard.DynamicFilter._EnableFilterControls();
            }
            //DynamicFilter Initialization
            
            // Dashboard.DynamicFilter.Controls Filter Button OnClick event handler
            Dashboard.DynamicFilter.Controls.filterButton.on('click', Dashboard.DynamicFilter._FilterCallback);
            
            // Dashboard.DynamicFilter.Controls Reset Filter Button OnClick event handler
            Dashboard.DynamicFilter.Controls.resetButton.on('click', Dashboard.DynamicFilter._ResetCallback);
            
            
            // Dashboard.DynamicFilter.Controls Save Filter Button OnClick event handler
            Dashboard.DynamicFilter.Controls.saveButton.on('click', function(){
                Dashboard.DynamicFilter.SaveModalWindow.modal();
            });
            
            // Saved Filter Item List OnClick event handler
            Dashboard.DynamicFilter.SavedFilterListItems.on('click', Dashboard.DynamicFilter._LoadFilterCallback);
            
            // Saved Filter Delete Item List OnClick Event handler
            Dashboard.DynamicFilter.SavedFilterListItemsDelete.on('click', Dashboard.DynamicFilter._DeleteFilterCallback);
            
            // Filter Fields OnClick event handler
            $('.filter-field').on('click', function() {
                var $filterField = $(this); 
                    
                if ($('#filterFormFields').children().length > 0) {
                    $('#filterFormFields').append(Dashboard.DynamicFilter._CreateModifier());
                }
                else {
                    $('#filterFormFields').append(Dashboard.DynamicFilter._CreateFirstModifier());
                }
                if ($filterField.data('field-type') === "text") {
                    $('#filterFormFields').append(Dashboard.DynamicFilter._CreateTextFilter($filterField.data('field'), $filterField.text()));
                }
                if ($filterField.data('field-type') === "date") {
                    $('#filterFormFields').append(Dashboard.DynamicFilter._CreateDateFilter($filterField.data('field'), $filterField.text()));
                }
                if ($filterField.data('field-type') === "job-status") {
                    $('#filterFormFields').append(Dashboard.DynamicFilter._CreateDropdownFilter($filterField.data('field'), $filterField.text(), Dashboard.JobStatus));
                }
                if ($filterField.data('field-type') === "material-status") {
                    $('#filterFormFields').append(Dashboard.DynamicFilter._CreateDropdownFilter($filterField.data('field'), $filterField.text(), Dashboard.MaterialStatus));
                }
                
                Dashboard.DynamicFilter._EnableFilterControls();
            });
            
            // Dashboard.DynamicFilter.SaveModalWindow Submit Button OnClick event handler
            Dashboard.DynamicFilter.Controls.SaveModal.submit.on('click', function(){
                
                var _filterName = Dashboard.DynamicFilter.Controls.SaveModal.filterNameInput.val(),
                    _filterFieldsHtml = Dashboard.DynamicFilter.FilterFields.html(),
                    _filterFieldsValues = "";
                    
                Dashboard.DynamicFilter.FilterFields.find('select, input[type=text]').each(function(){
                    _filterFieldsValues += $(this).val()+",";
                });
                
                // Cleaning the string (last colon removed) ;)
                _filterFieldsValues = _filterFieldsValues.substring(0, _filterFieldsValues.length-1);
                
                if (_filterName !== "") {
                    if (/\w/.test(_filterName)) {
                        (function($, Dashboard) {
                            $.ajax({
                                data: {
                                    filterName: _filterName ,
                                    filterString: Dashboard.DynamicFilter.FilterString,
                                    filterHtml: _filterFieldsHtml,
                                    filterValues: _filterFieldsValues
                                },
                                url: '<?php echo $View->Href('Dashboard', 'SaveFilter') ?>',
                                type: 'post',
                                beforeSend: function() {
                                    $('.loading').show();
                                },
                                success: function(response) {
                                    var _response = $.parseJSON(response);
                                    var $newItemList = $('<li><a href="#" class="saved-filter-list-item" data-filterid="'+_response.filterid+'">'+_filterName+'</a><button type="button" class="close" aria-hidden="true">&times;</button></li>');
                                    if(Dashboard.DynamicFilter.SavedFilterList === null || Dashboard.DynamicFilter.SavedFilterList.length === 0) {
                                        // Adding Save Dropdown markup
                                        var $dropControl = $('<button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></button>');
                                        Dashboard.DynamicFilter.Controls.saveButton.after($dropControl);
                                        $dropControl.after('<ul id="savedFilterList" class="dropdown-menu" role="menu"><li role="presentation" class="dropdown-header">Load Saved Filter</li></ul>');
                                        Dashboard.DynamicFilter.SavedFilterList = $('#savedFilterList');
                                    }
                                    Dashboard.DynamicFilter.SavedFilterList.append($newItemList);                                
                                    $newItemList.find('a').on('click', Dashboard.DynamicFilter._LoadFilterCallback); 
                                    $newItemList.find('button.close').on('click', Dashboard.DynamicFilter._DeleteFilterCallback);
                                    Dashboard.DynamicFilter.SaveModalWindow.modal('hide');
                                    Dashboard.DynamicFilter.Controls.SaveModal.filterNameInput.val('').popover('hide').parent().removeClass('has-error');
                                    $('.loading').hide();
                                }
                            });

                        })(jQuery, Dashboard);
                    }
                    else{
                        Dashboard.DynamicFilter.Controls.SaveModal.filterNameInput.popover('show').focus().parent().addClass('has-error');
                    }
                }
                else{
                    Dashboard.DynamicFilter.Controls.SaveModal.filterNameInput.popover('show').focus().parent().addClass('has-error');
                }                
            });
            
        };

        Dashboard.DynamicFilter.Init('<?php echo $DefaultUserFilterId ?>');
    })(App.Dashboard);
</script>

<script type="text/javascript">
    (function(window, document, $) {
        $(document).ready(function() {
            $('.daterangepicker-single').daterangepicker({singleDatePicker: false, format: 'MM/DD/YYYY', startDate: moment(), endDate: moment()});
            $('.daterangepicker-single-fix').daterangepicker({singleDatePicker: true, format: 'MM/DD/YYYY', startDate: moment(), endDate: moment()});    
            bindUpdateDropdownClick();
            
        });
    })(window, document, jQuery);
</script>

<script>
    (function (global, dandelion) {
        var app = global.App,
        dashboard = app.Dashboard;
        dashboard.currentProject = {'salesorder' : ''};
        dashboard.filesModal = { 'id' : '#files-modal'};
        dashboard.filesModal.controls = [];
        dashboard.filesModal.controls['jstree'] = {
            'id' : '#jstree'
        };
        dashboard.filesModal.controls['tree-search']= {
            'id': '#tree-search'
        };
        
        dashboard.$filesModal = $(dashboard.filesModal.id);
        
        dashboard.projectAttachButton_OnClick = function (event) {            
            dashboard.currentProject.salesorder = $(event.currentTarget).parent().parent().find('.item-field a').html();
//            console.log('Selecting Sales Order: ', dashboard.currentProject.salesorder);
            dashboard.filesModal.loadProjectTree(dashboard.currentProject);
            dashboard.$filesModal.modal('show');
        };
        
        dashboard.filesModal.loadProjectTree = function (currentProject) {
            var $jstree = $(dashboard.filesModal.controls['jstree'].id);            
            // Reset jsTree Instance
            if (dashboard.filesModal.controls['jstree'].instance) {
                dashboard.filesModal.controls['jstree'].instance.jstree('destroy');
            }
            dashboard.filesModal.controls['jstree'].instance = $jstree.jstree({
                plugins : ['state','dnd','sort','types','contextmenu','unique', 'search'],
                core: {
                    data: {
                        url: '<?php echo $View->Href('Dashboard', 'ProjectAttachementsAPI') ?>'+'&salesorder='+currentProject.salesorder+'&operation=get_node',
                        data: function (node) {
                            return { id: node.id };
                        }
                    },
                    themes: {
                        name: 'default',
                        responsive : false,
                        variant : 'medium',
                        stripes : false
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
                    },
                    animation: true
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
            .on('delete_node.jstree', function (e, data) {
                var params = {
                    salesorder: currentProject.salesorder, 
                    operation: 'delete_node', 
                    'id' : data.node.id 
                };   
                $('.loading').show();
                $.get('<?php echo $View->Href('Dashboard', 'ProjectAttachementsAPI') ?>', params)
                .done(function (d) {
                    $('.loading').hide();
                })
                .fail(function () {
                    data.instance.refresh();
                });
            })
            .on('create_node.jstree', function (e, data) {
                var params = {
                    salesorder: currentProject.salesorder, 
                    operation: 'create_node',  
                    'type' : data.node.type, 
                    'id' : data.node.parent, 
                    'text' : data.node.text 
                };
                $('.loading').show();
                $.get('<?php echo $View->Href('Dashboard', 'ProjectAttachementsAPI') ?>', params)
                .done(function (d) {
                    data.instance.set_id(data.node, d.id);
                    $('.loading').hide();
                })
                .fail(function () {
                    data.instance.refresh();
                });
            })
            .on('rename_node.jstree', function (e, data) {
                var params = {
                    salesorder: currentProject.salesorder, 
                    operation: 'rename_node',
                    'id' : data.node.id, 
                    'text' : data.text 
                };
                $('.loading').show();
                $.get('<?php echo $View->Href('Dashboard', 'ProjectAttachementsAPI') ?>', params)
                .done(function (d) {
                    data.instance.set_id(data.node, d.id);
                    $('.loading').hide();
                })
                .fail(function () {
                    data.instance.refresh();
                });
            })
            .on('move_node.jstree', function (e, data) {
                var params = {
                    salesorder: currentProject.salesorder, 
                    operation: 'move_node',
                    'id' : data.node.id, 
                    'parent' : data.parent 
                };
                $('.loading').show();
                $.get('<?php echo $View->Href('Dashboard', 'ProjectAttachementsAPI') ?>', params)
                .done(function (d) {
                    //data.instance.load_node(data.parent);
                    data.instance.refresh();
                    $('.loading').hide();
                })
                .fail(function () {
                    data.instance.refresh();
                });
            })
            .on('copy_node.jstree', function (e, data) {
                var params = {
                    salesorder: currentProject.salesorder, 
                    operation: 'copy_node',
                    'id' : data.original.id, 
                    'parent' : data.parent 
                };
                $('.loading').show();
                $.get('<?php echo $View->Href('Dashboard', 'ProjectAttachementsAPI') ?>', params)
                    .done(function (d) {
                        data.instance.load_node(data.parent);
                        data.instance.refresh();
                        $('.loading').hide();
                    })
                    .fail(function () {
                        data.instance.refresh();
                    });
            })
//             bind customize icon change function in jsTree open_node event. 
//            .on('open_node.jstree', function (e, data) {
//                $('#' + data.node.id).find('i.jstree-icon.jstree-themeicon').first()
//                        .removeClass('glyphicon-folder-close').addClass('glyphicon-folder-open');
//
//            })
//            // bind customize icon change function in jsTree close_node event. 
//            .on('close_node.jstree', function (e, data) {
//                $('#' + data.node.id).find('i.jstree-icon.jstree-themeicon').first()
//                        .removeClass('glyphicon-folder-open').addClass('glyphicon-folder-close');
//
//            })
            .on('changed.jstree', function (e, data) {
//                console.log('event', e);
//                console.log('data', data);
                var treeInstance = dashboard.filesModal.controls['jstree'].instance.jstree(true),
                    selectedDir = treeInstance.get_selected()[0],
                    
                    dzInstance = window.Dropzone.instances[0],
                    dzFiles = dzInstance.files,
                    
                    salesOrder = currentProject.salesorder, // Equals to Current Project Folder
                    i = 0;
                    
                // TODO: Explain: this was writed for what...?
                for(i; i < dzFiles.length; i += 1){
                    dzFiles[i].ready4Remove = false;
                }              
                dzInstance.removeAllFiles();

                $('#filesModalDropzone').children('.dz-preview').remove();
                $('#filesModalDropzone').children('.dz-message.custom').css('opacity', '1');

                if (selectedDir) {
//                    console.log('Selecting dir:', selectedDir);

                    $.post('<?php echo $View->Href('Dashboard', 'GetCurrentProjectFiles') ?>', {salesorder: salesOrder, filePath: selectedDir})
                    .done(function (response){
//                        console.log('POST GetCurrentProjectFiles request response: ', response);
//                        console.log('POST GetCurrentProjectFiles request response lenght: ', response.length);
                        if (response && response.length !== 0) {
                            var currentDir = "public/uploads/"+salesOrder+'/'+(selectedDir === '/' ? '' : selectedDir + '/');

                            $.each(response, function(key,value){

                                var mockFile = { name: value.name, size: value.size , ready4Remove: true};
                                dzInstance.options.addedfile.call(dzInstance, mockFile);                                
                                var pattern = /\.(gif|jpg|jpeg|tiff|png)$/i;
                                if( pattern.test(value.name)){
                                    dzInstance.options.thumbnail.call(dzInstance, mockFile, currentDir + value.name);
                                }
                            });
//                          
                            $('.dz-preview').on('click', function(event){
                                var projectDir = salesOrder + '/' +(selectedDir === '/' ? '' : selectedDir + '/'),
                                    fileName = $(this).find('.dz-filename span').html(),
                                    filePath = projectDir + fileName;
                                    
                                    var form = $('<form action="<?php echo $View->Href('Dashboard', 'DownloadFile') ?>" method="POST"><input type="hidden" name="filepath" value="'+filePath+'" /><input type="hidden" name="filename" value="'+fileName+'" /></form>');
                                    form.appendTo('body');                              
                                    form[0].submit();
                            });
                        }                        
                    }).fail(function (response){
                        console.log(response);
                    });
                    
                    // TODO: Here Download on Click handler
                    
                }
            });
            
            // Binding Searching Behavior
            var to = false;
            (function (instance, searchControlId) {
                $(searchControlId).keyup(function () {
                    if (to) {
                        clearTimeout(to);
                    }
                    to = setTimeout(function () {
                        var value = $(searchControlId).val();
                        instance.jstree(true).search(value);
                    }, 250);
                });
            })(dashboard.filesModal.controls['jstree'].instance, dashboard.filesModal.controls['tree-search'].id);
            
            // Select by default the root dir
            dashboard.filesModal.controls['jstree'].instance.jstree(true).select_node('/');
            
        };
        dashboard.filesModal.createDir = function () {
            var ref = dashboard.filesModal.controls['jstree'].instance.jstree(true),
            sel = ref.get_selected();
            if (!sel.length) {
                return false;
            }
            sel = sel[0];
            sel = ref.create_node(sel, {type: 'default'}, 'last', function (new_node) {
                setTimeout(function () {
                    ref.edit(new_node);
                }, 0);
            });
        };
        dashboard.filesModal.renameDir = function () {
            var ref = dashboard.filesModal.controls['jstree'].instance.jstree(true),
            sel = ref.get_selected();
            if (!sel.length) {
                return false;
            }
            sel = sel[0];
            ref.edit(sel);
        };
        dashboard.filesModal.deleteDir = function () {
            var ref = dashboard.filesModal.controls['jstree'].instance.jstree(true),
            sel = ref.get_selected();
            if (!sel.length) {
                return false;
            }
            if (sel[0] === "\/") {
                alert("Project folder can't be deleted.");
                return false;
            }
            ref.delete_node(sel);
        };
                
        $('.btn-files-dialog').on('click', dashboard.projectAttachButton_OnClick);
    }(window, window.dandelion));
</script>

<script>
    (function (global, dandelion) {
        var app = global.App,
        dashboard = app.Dashboard;
        
        global.Dropzone.options.filesModalDropzone = {
            paramName: "file", // The name that will be used to transfer the file
            maxFilesize: 1024, // MB
            maxThumbnailFilesize: 1, // MB
            addRemoveLinks: true,
//            acceptedFiles: "image/*,application/pdf,.psd,.doc,.docx,.txt,.xls, .xlsx",
            accept: function(file, done) {
                if (file.name === "Alex.jpg") {
                    done("Hello Creator.");
                }
                else {
                    done();
                }
            },
            init: function(){
                
                this.on('removedfile', function (file, a) {
                    var ref = dashboard.filesModal.controls['jstree'].instance.jstree(true),
                        selectedDir = ref.get_selected();
                    if (file.ready4Remove) {
                        var params = { postSalesOrder: dashboard.currentProject.salesorder, postFilePath : selectedDir[0], postFileName : file.name };
                        $.post('<?php echo $View->Href('Dashboard', 'DeleteFile') ?>', params)
                        .done(function (response) {
//                            console.log('done:', response);
                        })
                        .fail(function (response) {
//                            console.log('fail:', response);
                        });
                    }
                    file.ready4Remove = true;
                });
                this.on('sending', function (file, xhr, formData) {
                    var ref = dashboard.filesModal.controls['jstree'].instance.jstree(true),
                    selectedDir = ref.get_selected();
                    
                    file.ready4Remove = true;
                    file.uploadPath = dashboard.currentProject.salesorder + '/' +selectedDir ;
                    if (dashboard.currentProject.salesorder) {
                        formData.append('salesorder', dashboard.currentProject.salesorder);
                        formData.append('selectedDir', selectedDir);
                    }   
                    console.log('sending.....');
                    // TODO: Refactoring in this code please.
                    var treeInstance = dashboard.filesModal.controls['jstree'].instance.jstree(true),
                    selectedDir = treeInstance.get_selected()[0],                    
                    dzInstance = window.Dropzone.instances[0],
//                    dzFiles = dzInstance.files,                    
                    salesOrder = dashboard.currentProject.salesorder, // Equals to Current Project Folder
                    i = 0;
                    $('.dz-preview').on('click', function(event){
                        var projectDir = salesOrder + '/' +(selectedDir === '/' ? '' : selectedDir + '/'),
                            fileName = $(this).find('.dz-filename span').html(),
                            filePath = projectDir + fileName;

                            var form = $('<form action="<?php echo $View->Href('Dashboard', 'DownloadFile') ?>" method="POST"><input type="hidden" name="filepath" value="'+filePath+'" /><input type="hidden" name="filename" value="'+fileName+'" /></form>');
                            form.appendTo('body');                              
                            form[0].submit();
                    });
                    // END TODO: Refactoring in this code please.
                });
        }
    };
    }(window, window.dandelion));
</script>

<script>
    (function(window, document, $, Dashboard) {
        function page($filter, $page, $itemsperpage, $table, orderby, order) {
            var params = {'filterPredicate': $filter, 'page': $page, 'itemsperpage': $itemsperpage, 'orderby': orderby, 'order': order};
            $.ajax({
                data: params,
                url: '<?php echo $View->Href('Dashboard', 'GetDashboardItemsPage') ?>',
                type: 'post',
                beforeSend: function() {
                    $('.loading').show();
                },
                success: function(response) {
                    var _response = $.parseJSON(response);
                    var pager = new BootstrapPager(_response, PagerControl_OnClick);
                    var pagerControl = pager.getPagerControl();
                    $('.pager-wrapper').html('').append(pagerControl);
                    var pagerItems = pager.getCurrentPagedItems();
                    Dashboard.updateDashboardTable($table, pagerItems);
                    // SalesOrder Link on click handler
                    $('.item-field a.salesorder-form-link').on('click', Dashboard.eventHandlers.control_salesOrderForm_itemsLink_onClick);  
                    $('#panelHeadingItemsCount').html(pager.itemsCount);
                    $('.loading').hide();
                                          
                    //Vessel Form on click handler
                    $('.item-field a.vessel-form-link').on('click', Dashboard.eventHandlers.control_vesselForm_itemsLink_onClick);
                }
            });
        }

        Dashboard.Page = page;

        $('.pager-btn').on("click", PagerControl_OnClick);

        // Pager Control Buttons On Click Handler
        function PagerControl_OnClick() {
            var $table = $('#dashboardTable');
            var $currentButton = $(this);
            Dashboard.Page(Dashboard.DynamicFilter.FilterString, 
                $currentButton.data('page'), 
                Dashboard.itemPerPage, 
                $table, 
                Dashboard.TableSortField, 
                Dashboard.TableSortFieldOrder
            );
        }

        $('.top-pager-itemmperpage-control a').on('click', function() {
            // Update Control Selected Value
            Dashboard.itemPerPage = $(this).text();
            $('.top-pager-itemmperpage-control button span.value').text(Dashboard.itemPerPage);
            
            var $table = $('#dashboardTable');
            Dashboard.Page(Dashboard.DynamicFilter.FilterString, 
                1, // Always show page one
                Dashboard.itemPerPage, 
                $table, 
                Dashboard.TableSortField, 
                Dashboard.TableSortFieldOrder
            );
        });
    })(window, document, jQuery, App.Dashboard);
</script>

<script>
    (function(window, document, jQuery, Dashboard) {
        $.ajax({
            data: {},
            url: '<?php echo $View->Href('Dashboard', 'GetMaterialStatusItems') ?>',
            type: 'post',
            beforeSend: function() {
                $('.loading').show();
            },
            success: function(response) {
                var _response = $.parseJSON(response);
                Dashboard.MaterialStatus = _response;
                $('.loading').hide();
            }
        });
    })(window, document, jQuery, App.Dashboard);
</script>

<script>
    (function(window, document, jQuery, Dashboard) {
        $.ajax({
            data: {},
            url: '<?php echo $View->Href('Dashboard', 'GetJobStatusItems') ?>',
            type: 'post',
            beforeSend: function() {
                $('.loading').show();
            },
            success: function(response) {
                var _response = $.parseJSON(response);
                Dashboard.JobStatus = _response;
                $('.loading').hide();
            }
        });
    })(window, document, jQuery, App.Dashboard);
</script>

<script>
    function bindUpdateDropdownClick() {
        $('.update-dropdown').on('change', function() {
            var $dropdown = $(this),
                    params = {'ordnum': $dropdown.data('ordnum'), 'mtrlstatus': $dropdown.val(), 'jobstatus': $dropdown.val()};
            if ($dropdown.hasClass('material-status')) {
                $.ajax({
                    data: params,
                    url: '<?php echo $View->Href('Dashboard', 'UpdateSOHEADMaterialStatus') ?>',
                    type: 'post',
                    beforeSend: function() {
                        $('.loading').show();
                    },
                    success: function(response) {
                        var _response = $.parseJSON(response);
                        if (_response === 'success') {
//                            console.log(_response);
                        } else {
//                            console.log(_response);
                        }
                        $('.loading').hide();
                    }
                });
            }
            if ($dropdown.hasClass('job-status')) {
                $.ajax({
                    data: params,
                    url: '<?php echo $View->Href('Dashboard', 'UpdateSOHEADJobStatus') ?>',
                    type: 'post',
                    beforeSend: function() {
                        $('.loading').show();
                    },
                    success: function(response) {
                        var _response = $.parseJSON(response);
                        if (_response === 'success') {
//                            console.log(_response);
                        } else {
//                            console.log(_response);
                        }
                        $('.loading').hide();
                    }
                });
            }
        });
    }
</script>

<script>
    (function(window, document, jQuery, Dashboard) {
        var dashboard = Dashboard;
        
        Dashboard.updateDashboardTable = function($table, $data) {
            console.log('updating table');
            var $tableBody = $table.children('tbody');
            $tableBody.html('');
            for (index in $data) {
                $tableBody.append(Dashboard.buildDashboardItemTableRow($data[index], '', "item-field"));
            }
            bindUpdateDropdownClick();
            
        };

        Dashboard.buildDashboardItemTableRow = function($dataRow, trClass, tdClass) {
            var _result = document.createElement('tr'),
                    _tdOrdnum = document.createElement('td'),
                    _aOrdnum = document.createElement('a'),
                    _tdPonum = document.createElement('td'),
                    _tdCompany = document.createElement('td'),
                    _tdVesselid = document.createElement('td'),
                    _aVesselid = document.createElement('a'),
                    _tdProStartDT = document.createElement('td'),
                    _tdProEndDT = document.createElement('td'),
                    _tdSotypecode = document.createElement('td'),
                    _tdDescription = document.createElement('td'),
                    _tdMaterialStatus = document.createElement('td'),
                    _tdStatus = document.createElement('td'),
                    _tdProjectManager1 = document.createElement('td'),
                    _tdProjectManager2 = document.createElement('td'),
                    _tdPodate = document.createElement('td'),
                    _tdQutno = document.createElement('td'),
                    _tdCstctid = document.createElement('td'),
                    _tdAttachedFiles = document.createElement('td'),
                    _aAttachedFiles = document.createElement('a'),
                    _spanGlyphIcon = document.createElement('span');


            with (_tdOrdnum) {
                _aOrdnum.href = "#";
                _aOrdnum.className = 'salesorder-form-link';
                _aOrdnum.appendChild(document.createTextNode($dataRow.ordnum));
                className = tdClass;
                appendChild(_aOrdnum);
            }

            with (_tdPonum) {
                className = tdClass;
                appendChild(document.createTextNode($dataRow.ponum));
            }

            with (_tdCompany) {
                className = tdClass;
                appendChild(document.createTextNode($dataRow.company));
            }

            with (_tdVesselid) {
//                className = tdClass;
//                appendChild(document.createTextNode($dataRow.vesselid));
                
                _aVesselid.href = "#";
                _aVesselid.className = 'vessel-form-link';
                _aVesselid.appendChild(document.createTextNode($dataRow.vesselid));
                className = tdClass;
                appendChild(_aVesselid);
                console.log($dataRow.vesselid);
            }

            with (_tdProStartDT) {
                className = tdClass;
                appendChild(document.createTextNode($dataRow.ProStartDT));
            }

            with (_tdProEndDT) {
                className = tdClass;
                appendChild(document.createTextNode($dataRow.ProEndDT));
            }

            with (_tdSotypecode) {
                className = tdClass;
                appendChild(document.createTextNode($dataRow.sotypecode));
            }

            with (_tdDescription) {
                className = tdClass;
                appendChild(document.createTextNode($dataRow.JobDescrip));
            }

            with (_tdMaterialStatus) {
                className = tdClass;
                //appendChild(document.createTextNode($dataRow.mtrlstatus));
                var _materialStatusControl = Dashboard.buildStatusControl($dataRow.mtrlstatus, Dashboard.MaterialStatus);
                _materialStatusControl.dataset['ordnum'] = $dataRow.ordnum;
                _materialStatusControl.className += ' material-status';
                appendChild(_materialStatusControl);
            }

            with (_tdStatus) {
                className = tdClass;
                var _jobStatusControl = Dashboard.buildStatusControl($dataRow.jobstatus, Dashboard.JobStatus);
                _jobStatusControl.dataset['ordnum'] = $dataRow.ordnum;
                _jobStatusControl.className += ' job-status';
                appendChild(_jobStatusControl);
            }

            with (_tdProjectManager1) {
                className = tdClass;
                appendChild(document.createTextNode($dataRow.projectManager1));
            }

            with (_tdProjectManager2) {
                className = tdClass;
                appendChild(document.createTextNode($dataRow.projectManager2));
            }

            with (_tdPodate) {
                className = tdClass;
                appendChild(document.createTextNode($dataRow.podate));
            }

            with (_tdQutno) {
                className = tdClass;
                appendChild(document.createTextNode($dataRow.qutno));
            }

            with (_tdCstctid) {
                className = tdClass;
                appendChild(document.createTextNode($dataRow.Cstctid));
            }

            with (_tdAttachedFiles) {
                className = "item-action item-files";
                _spanGlyphIcon.className = "glyphicon glyphicon-folder-close";
                _aAttachedFiles.href = "#";
                _aAttachedFiles.className = "btn-files-dialog";
                _aAttachedFiles.addEventListener('click', dashboard.projectAttachButton_OnClick);
                _aAttachedFiles.appendChild(_spanGlyphIcon);
                appendChild(_aAttachedFiles);
            }

            with (_result) {
                className = trClass;
                appendChild(_tdOrdnum);
                appendChild(_tdPonum);
                appendChild(_tdCompany);
                appendChild(_tdVesselid);
                appendChild(_tdProStartDT);
                appendChild(_tdProEndDT);
                appendChild(_tdSotypecode);
                appendChild(_tdDescription);
                appendChild(_tdMaterialStatus);
                appendChild(_tdStatus);
                appendChild(_tdProjectManager1);
                appendChild(_tdProjectManager2);
                appendChild(_tdPodate);
                appendChild(_tdQutno);
                appendChild(_tdCstctid);
                appendChild(_tdAttachedFiles);
            }
            return _result;
        }
        ;

        Dashboard.buildStatusControl = function(current, values) {
            var _select = document.createElement('select');
            var _optionEmpty = document.createElement('option');
                _optionEmpty.appendChild(document.createTextNode("Empty"));
                _select.appendChild(_optionEmpty);
            for (index in values) {
                var _option = document.createElement('option');
                _option.value = values[index]['edistatid'];
                _option.appendChild(document.createTextNode(values[index]['descrip']));
                if (current === values[index]['edistatid']) {
                    _option.selected = "selected";
                }
                _select.appendChild(_option);
            }
            _select.className = 'form-control update-dropdown';
            return _select;
        };
    })(window, document, jQuery, App.Dashboard);
</script>

<script>
<?php echo $Pager->GetJavascriptPager(); ?>
</script>

<script src="<?php echo $View->SharedScriptsContext('jstree.init.js'); ?>"></script>
