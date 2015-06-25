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
        QuoteDashboard  = dandelion.namespace('App.QuoteDashboard', global);

    QuoteDashboard.status = {};
    QuoteDashboard.status.itemsPerPage = 50; // Default items per page value
    QuoteDashboard.status.table_header_sortLastButton = null;
    QuoteDashboard.status.table_header_sortField = 'ordnum'; // Default Order By Fields
    QuoteDashboard.status.table_header_sortFieldOrder = 'ASC'; // Default Order
    QuoteDashboard.status.currentPage = 1;

    QuoteDashboard.dictionaries = {};
    QuoteDashboard.dictionaries.status = [
        'Empty',
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
    QuoteDashboard.htmlBindings.table_body_btnQuoteNo            = '.qutno-form-link';
//    Dashboard.htmlBindings.table_body_btnVessel             = '.vessel-form-link';
////    Dashboard.htmlBindings.table_body_drpUpdatable          = '.update-dropdown';
//    Dashboard.htmlBindings.table_body_drpMaterialStatus     = '.update-dropdown.material-status';
//    Dashboard.htmlBindings.table_body_drpJobStatus          = '.update-dropdown.job-status';
    QuoteDashboard.htmlBindings.table_body_btnAttach             = '.btn-files-dialog';
    QuoteDashboard.htmlBindings.pager_container                  = '.pager-wrapper';
    QuoteDashboard.htmlBindings.pager_btnPagerPages              = '.pager-btn';
//    Dashboard.htmlBindings.control_salesOrderForm           = '#salesOrderForm';
//    Dashboard.htmlBindings.control_salesOrderForm_btnClose  = '#salesOrderForm_btnClose';
//    Dashboard.htmlBindings.control_vesselForm               = '#vesselForm';
//    Dashboard.htmlBindings.control_vesselForm_btnClose      = '#vesselForm_btnClose';

    QuoteDashboard.functions = {};
    QuoteDashboard.functions.paginate = function () {

        $.ajax({
            data: {
                predicate: '',//Dashboard.DynamicFilter.functions.getPredicate(),
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
                a.dataset.ordnum = dataRow.ordnum;
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
                return withSelectBuilder(dataRow.status, QuoteDashboard.dictionaries.status, 'status');
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
        console.log('todo: bindTableItemsEventHandlers');
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
        $(QuoteDashboard.htmlBindings.drpItemPerPage).on('click',
            QuoteDashboard.eventHandlers.drpItemPerPage_onClick);
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