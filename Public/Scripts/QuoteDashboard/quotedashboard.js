/* 
 * Copyright (C) 2015 VFP Business Solutions, LLC
 *
 */

if (typeof jQuery === 'undefined') { 
    throw new Error('VFP Business Series\'s Quote Dashboard JavaScript requires jQuery');
};

if (typeof kb === 'undefined') { 
    throw new Error('VFP Business Series\'s Quote Dashboard JavaScript requires Knockback.js');
};

if (typeof ko === 'undefined') { 
    throw new Error('VFP Business Series\'s Quote Dashboard JavaScript requires Knockout.js');
};

if (typeof Backbone === 'undefined') { 
    throw new Error('VFP Business Series\'s Quote Dashboard JavaScript requires Backbone.js');
};

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
        SalesOrderForm  = App.Dashboard.SalesOrderForm,
        VesselForm      = App.Dashboard.VesselForm,
        DynamicFilter   = App.Dashboard.DynamicFilter,
        ProjectFiles    = App.Dashboard.ProjectFiles;

    QuoteDashboard.status = {};
    QuoteDashboard.status.itemsPerPage = 50; // Default items per page value
    QuoteDashboard.status.table_header_sortLastButton = null;
    QuoteDashboard.status.table_header_sortField = 'ordnum'; // Default Order By Fields
    QuoteDashboard.status.table_header_sortFieldOrder = 'ASC'; // Default Order
    QuoteDashboard.status.currentPage = 1;

    QuoteDashboard.dictionaries = {};
    QuoteDashboard.dictionaries.status = [
        'RFQ Received', 
        'Quote Prepared', 
        'Sent to Customer', 
        'CSR follow up',
        'Revisions',
        'Not  approved',
        'Quote approved',
        'Billed'
    ];

    QuoteDashboard.htmlBindings = {};
    QuoteDashboard.htmlBindings.container                        = '.container';
    QuoteDashboard.htmlBindings.itemCounter                      = '#panelHeadingItemsCount';
    QuoteDashboard.htmlBindings.drpItemPerPage                   = '.top-pager-itemmperpage-control a';
    QuoteDashboard.htmlBindings.drpItemPerPageValue              = '.top-pager-itemmperpage-control button span.value';
//    Dashboard.htmlBindings.filterForm                       = '#filterForm';
//    Dashboard.htmlBindings.filterForm_btnToggleVisibility   = '#dashboard-panel-togle-visibility-button';
    QuoteDashboard.htmlBindings.table                            = '#quoteDashboardTable';
    QuoteDashboard.htmlBindings.table_header_btnSort             = '.btn-table-sort';
//    Dashboard.htmlBindings.table_body_btnSalesOrder         = '.salesorder-form-link';
//    Dashboard.htmlBindings.table_body_btnVessel             = '.vessel-form-link';
////    Dashboard.htmlBindings.table_body_drpUpdatable          = '.update-dropdown';
//    Dashboard.htmlBindings.table_body_drpMaterialStatus     = '.update-dropdown.material-status';
//    Dashboard.htmlBindings.table_body_drpJobStatus          = '.update-dropdown.job-status';
//    Dashboard.htmlBindings.table_body_btnAttach             = '.btn-files-dialog';
//    Dashboard.htmlBindings.pager_container                  = '.pager-wrapper';
//    Dashboard.htmlBindings.pager_btnPagerPages              = '.pager-btn';
//    Dashboard.htmlBindings.control_salesOrderForm           = '#salesOrderForm';
//    Dashboard.htmlBindings.control_salesOrderForm_btnClose  = '#salesOrderForm_btnClose';
//    Dashboard.htmlBindings.control_vesselForm               = '#vesselForm';
//    Dashboard.htmlBindings.control_vesselForm_btnClose      = '#vesselForm_btnClose';

    QuoteDashboard.functions = {};
    QuoteDashboard.functions.paginate = function () {

//        $.ajax({
//            data: {
//                predicate: Dashboard.DynamicFilter.functions.getPredicate(),
//                page: Dashboard.status.currentPage,
//                itemsPerPage: Dashboard.status.itemsPerPage,
//                orderby: Dashboard.status.table_header_sortField,
//                order: Dashboard.status.table_header_sortFieldOrder
//            },
//            url: Dashboard.urls.getDashboardItemsPage,
//            type: 'post',
//            beforeSend: function () {
//                $('.loading').show();
//            },
//            success: function (response) {
//                var data = $.parseJSON(response),
//                    pager = new BootstrapPager(data,
//                        Dashboard.eventHandlers.pager_btnPagerPages_onClick),
//                    pagerItems = pager.getCurrentPagedItems(),
//                    pagerControl = pager.getPagerControl();
//
//                $(Dashboard.htmlBindings.pager_container).empty()
//                    .append(pagerControl);
//                Dashboard.functions.updateTable(pagerItems);
//
//                $(Dashboard.htmlBindings.itemCounter).html(pager.itemsCount);
//                $('.loading').hide();
//            }
//        });

    };

    QuoteDashboard.functions.getDictionaries = function () {
//        $.ajax({
//            data: {},
//            url: Dashboard.urls.getDashboardDictionaries,
//            type: 'post',
//            beforeSend: function () {
//                $('.loading').show();
//            },
//            success: function (response) {
//                var data = $.parseJSON(response);
//                Dashboard.dictionaries = data;
//                $('.loading').hide();
//            }
//        });
    };
    QuoteDashboard.functions.updateTable = function (items) {
//        var $table = $(Dashboard.htmlBindings.table),
//            $tableBody = $table.children('tbody'),
//            index;
//        $tableBody.empty();
//        for (index in items) {
//            if (items.hasOwnProperty(index)) {
//                $tableBody.append(Dashboard.functions.buildTableItem(items[index], '', "item-field"));
//            }
//        }
//        Dashboard.functions.bindTableItemsEventHandlers();
    };

    QuoteDashboard.functions.buildTableItem = function (dataRow, trClass, tdClass) {
//        var doc = global.document,
//            result = doc.createElement('tr'),
//            simpleTdBuilder = function (data) {
//                var td = doc.createElement('td');
//
//                td.className = tdClass;
//                td.appendChild(doc.createTextNode(data));
//                return td;
//            },
//            withLinkTdBuilder = function (data, linkClassName, tdLinkClass) {
//                var td = doc.createElement('td'),
//                    a = doc.createElement('a');
//
//                a.href = "#";
//                a.className = linkClassName;
//                a.dataset.ordnum = dataRow.ordnum;
//                if (typeof data === "string") {
//                    a.appendChild(doc.createTextNode(data));
//                } else {
//                    a.appendChild(data);
//                }
//                td.className = tdLinkClass || tdClass;
//                td.appendChild(a);
//                return td;
//            },
//            selectBuilder = function (current, values) {
//                var index, option, currentId, currentValue,
//                    select = doc.createElement('select');
//
//                option = doc.createElement('option');
//                option.appendChild(doc.createTextNode("Empty"));
//                select.appendChild(option);
//
//                for (index in values) {
//                    if (values.hasOwnProperty(index)) {
//                        currentId = values[index].id;
//                        currentValue = values[index].descrip;
//                        option = doc.createElement('option');
//                        if (current === currentId) {
//                            option.selected = "selected";
//                        }
//                        option.value = currentId;
//                        option.appendChild(doc.createTextNode(currentValue));
//                        select.appendChild(option);
//                    }
//                }
//                select.className = 'form-control update-dropdown';
//                return select;
//            },
//            withSelectBuilder = function (data, dictionary, dropdownClassName) {
//                var  td = doc.createElement('td'),
//                    select = selectBuilder(data, dictionary);
//                select.dataset.ordnum = dataRow.ordnum;
//                select.className += ' select2-nosearch ' + dropdownClassName;
//                td.appendChild(select);
//
//                return td;
//            },
//            tdSalesOrderBuilder = function () {
//                return withLinkTdBuilder(dataRow.ordnum, Dashboard.htmlBindings.table_body_btnSalesOrder.slice(1));
//            },
//            tdPurchaseOrderBuilder = function () {
//                return simpleTdBuilder(dataRow.ponum);
//            },
//            tdCompanyBuilder = function () {
//                return simpleTdBuilder(dataRow.company);
//            },
//            tdVesselBuilder = function () {
//                return withLinkTdBuilder(dataRow.vesselid, Dashboard.htmlBindings.table_body_btnVessel.slice(1));
//            },
//            tdStartBuilder = function () {
//                return simpleTdBuilder(dataRow.ProStartDT);
//            },
//            tdEndBuilder = function () {
//                return simpleTdBuilder(dataRow.ProEndDT);
//            },
//            tdJobTypeBuilder = function () {
//                return simpleTdBuilder(dataRow.sotypecode);
//            },
//            tdDescriptionBuilder = function () {
//                return simpleTdBuilder(dataRow.JobDescrip);
//            },
//            tdMaterialStatusBuilder = function () {
//                return withSelectBuilder(dataRow.mtrlstatus, Dashboard.dictionaries.materialStatus, 'material-status');
//            },
//            tdStatusBuilder = function () {
//                return withSelectBuilder(dataRow.jobstatus, Dashboard.dictionaries.jobStatus, 'job-status');
//            },
//            tdProjectManager1Builder = function () {
//                return simpleTdBuilder(dataRow.projectManager1);
//            },
//            tdProjectManager2Builder = function () {
//                return simpleTdBuilder(dataRow.projectManager2);
//            },
//            tdCreateBuilder = function () {
//                return simpleTdBuilder(dataRow.podate);
//            },
//            tdQuoteNoBuilder = function () {
//                return simpleTdBuilder(dataRow.qutno);
//            },
//            tdCostCenterBuilder = function () {
//                return simpleTdBuilder(dataRow.Cstctid);
//            },
//            tdAttachedFilesBuilder = function () {
//                var spanGlyphIcon = doc.createElement('span');
//
//                spanGlyphIcon.className = 'glyphicon glyphicon-folder-close';
//                return withLinkTdBuilder(spanGlyphIcon, Dashboard.htmlBindings.table_body_btnAttach.slice(1), 'item-action item-files');
//            };
//
//        result.className = trClass;
//        result.appendChild(tdSalesOrderBuilder());
//        result.appendChild(tdPurchaseOrderBuilder());
//        result.appendChild(tdCompanyBuilder());
//        result.appendChild(tdVesselBuilder());
//        result.appendChild(tdStartBuilder());
//        result.appendChild(tdEndBuilder());
//        result.appendChild(tdJobTypeBuilder());
//        result.appendChild(tdDescriptionBuilder());
//        result.appendChild(tdMaterialStatusBuilder());
//        result.appendChild(tdStatusBuilder());
//        result.appendChild(tdProjectManager1Builder());
//        result.appendChild(tdProjectManager2Builder());
//        result.appendChild(tdCreateBuilder());
//        result.appendChild(tdQuoteNoBuilder());
//        result.appendChild(tdCostCenterBuilder());
//        result.appendChild(tdAttachedFilesBuilder());
//
//        return result;
    };

    QuoteDashboard.functions.bindTableItemsEventHandlers = function () {
//
//        $(Dashboard.htmlBindings.table_body_btnSalesOrder).on('click',
//            Dashboard.eventHandlers.control_salesOrderForm_itemsLink_onClick);
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
//        $('select.select2-nosearch').select2({minimumResultsForSearch: Infinity});
//
//        $(Dashboard.htmlBindings.table_body_btnAttach).on('click',
//            Dashboard.eventHandlers.table_body_btnAttach_onClick);

    };
    QuoteDashboard.functions.bindEventHandlers = function () {
//        $(Dashboard.htmlBindings.drpItemPerPage).on('click',
//            Dashboard.eventHandlers.drpItemPerPage_onClick);
//
//        $(Dashboard.htmlBindings.control_salesOrderForm_btnClose).on('click',
//            function () {
//                $(Dashboard.htmlBindings.control_salesOrderForm).hide();
//            });
//        $(Dashboard.htmlBindings.control_vesselForm_btnClose).on('click',
//            function () {
//                $(Dashboard.htmlBindings.control_vesselForm).hide();
//            });
//
//        $(Dashboard.htmlBindings.table_header_btnSort).on('click',
//            Dashboard.eventHandlers.table_body_btnSalesOrder_onClick);
//
//        $(Dashboard.htmlBindings.pager_btnPagerPages).on('click',
//            Dashboard.eventHandlers.pager_btnPagerPages_onClick);
//
//        Dashboard.functions.bindTableItemsEventHandlers();
    };

    QuoteDashboard.eventHandlers = {};
    QuoteDashboard.eventHandlers.drpItemPerPage_onClick = function (event) {
//        var $target = $(event.target),
//            value = $target.html();
//        Dashboard.status.itemsPerPage = value;
//        $(Dashboard.htmlBindings.drpItemPerPageValue).text(value);
//
//        // When change items per page, show page one
//        Dashboard.status.currentPage = 1;
//
//        Dashboard.functions.paginate();
    };
    QuoteDashboard.eventHandlers.pager_btnPagerPages_onClick = function (event) {
//        var $target = $(event.target),
//            value = $target.data('page');
//        Dashboard.status.currentPage = value;
//        Dashboard.functions.paginate();
    };

    QuoteDashboard.eventHandlers.table_body_btnSalesOrder_onClick = function (event) {
//        var $target = $(event.target),
//            sortingField = $target.data('field');
//
//        if (Dashboard.status.table_header_sortLastButton !== null) {
//            Dashboard.status.table_header_sortLastButton.removeClass('asc desc');
//        }
//        if (Dashboard.status.table_header_sortField !== sortingField) {
//            Dashboard.status.table_header_sortFieldOrder = '';
//        }
//        Dashboard.status.table_header_sortField = sortingField;
//        if (Dashboard.status.table_header_sortFieldOrder === 'ASC') {
//            Dashboard.status.table_header_sortFieldOrder = 'DESC';
//            $target.addClass('asc').removeClass('desc');
//        } else {
//            Dashboard.status.table_header_sortFieldOrder = 'ASC';
//            $target.addClass('desc').removeClass('asc');
//        }
//        Dashboard.status.table_header_sortLastButton = $target;
//        Dashboard.functions.paginate();
    };
    QuoteDashboard.eventHandlers.table_body_drpstatus_onChange = function (event) {
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
    
    QuoteDashboard.init = function (defaultUserFilter) {

        QuoteDashboard.status.itemsPerPage = $(QuoteDashboard.htmlBindings.drpItemPerPageValue).text();
        QuoteDashboard.functions.getDictionaries();

//        DynamicFilter.init(defaultUserFilter);
        
        QuoteDashboard.functions.bindEventHandlers();
        
    };

}(window, jQuery, App));