/**
 * @author Alex
 * @namespace App.PickTicket
 * @param {window} global
 * @param {jQuery} $
 * @param {Object} App
 * @returns {undefined}
 * @inner JSLint Passed
 **/

(function (global, $, App) {
    "use strict";
    
    var dandelion       = global.dandelion,
        PickTicket      = dandelion.namespace('App.PickTicket', global);
        
    PickTicket.status = {};
    PickTicket.status.modal_TicketList_CurrentTicket = '';
    PickTicket.status.modal_TicketList_CurrentPage = 1;
    PickTicket.status.modal_TicketList_ItemsPerPage = 10; // Default items per page value
    
    PickTicket.dictionaries = {};
    
    PickTicket.htmlBindings = {};
    PickTicket.htmlBindings.txtTicketId                             = '#txShpRelNo'; 
    PickTicket.htmlBindings.btnTicketNo                             = '#btnTicketNo';
    PickTicket.htmlBindings.modal_TicketList                        = '#ticket-list-modal';
    PickTicket.htmlBindings.modal_TicketList_itemCounter            = '#itemCounter';
    PickTicket.htmlBindings.modal_TicketList_Pager_container        = '.pager-wrapper';
    PickTicket.htmlBindings.modal_TicketList_Pager_btnPagerPages    = '.pager-btn';
    PickTicket.htmlBindings.modal_TicketList_Table                  = '#tickets';
    PickTicket.htmlBindings.modal_TicketList_Table_btnTicket        = '.ticket-link';
    
    PickTicket.functions = {};
    PickTicket.functions.paginate = function () {
        $.ajax({
            data: {
                page: PickTicket.status.modal_TicketList_CurrentPage,
                itemsPerPage: PickTicket.status.modal_TicketList_ItemsPerPage
            },
            url: PickTicket.url.getTicketPage,
            type: 'post',
            beforeSend: function () {
                $('.loading').show();
            },
            success: function (response) {
                var data = $.parseJSON(response),
                    pager = new BootstrapPager(data,
                        PickTicket.eventHandlers.modal_TicketList_Pager_btnPagerPages_onClick),
                    pagerItems = pager.getCurrentPagedItems(),
                    pagerControl = pager.getPagerControl();

                $(PickTicket.htmlBindings.modal_TicketList_Pager_container).empty()
                    .append(pagerControl);
                PickTicket.functions.modal_TicketList_UpdateTable(pagerItems);

//                $(PickTicket.htmlBindings.modal_TicketList_itemCounter).html("(" + pager.itemsCount + ")");
                $('.loading').hide();
            }
        });
    };
    PickTicket.functions.bindEventHandlers = function () {
        $(PickTicket.htmlBindings.btnTicketNo).on('click', 
            PickTicket.eventHandlers.btnTicketNo_onClick);
          
        $(PickTicket.htmlBindings.modal_TicketList_Pager_btnPagerPages).on('click', 
            PickTicket.eventHandlers.modal_TicketList_Pager_btnPagerPages_onClick);
            
        PickTicket.functions.modal_TicketList_BindTableItemsEventHandlers();
    };
    PickTicket.functions.modal_TicketList_UpdateTable = function (items) {
        var $table = $(PickTicket.htmlBindings.modal_TicketList_Table),
            $tableBody = $table.children('tbody'),
            index;
        $tableBody.empty();
        for (index in items) {
            if (items.hasOwnProperty(index)) {
                $tableBody.append(PickTicket.functions.modal_TicketList_BuildTableItem(items[index], '', "item-field"));
            }
        }
        PickTicket.functions.modal_TicketList_BindTableItemsEventHandlers();
    };
    PickTicket.functions.modal_TicketList_BuildTableItem = function (dataRow, trClass, tdClass) {
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
                a.dataset.ticketid = dataRow.shprelno;
                if (typeof data === "string") {
                    a.appendChild(doc.createTextNode(data));
                } else {
                    a.appendChild(data);
                }
                td.className = tdLinkClass || tdClass;
                td.appendChild(a);
                return td;
            },
            tdPickTicketBuilder = function () {
                return withLinkTdBuilder(dataRow.shprelno, PickTicket.htmlBindings.modal_TicketList_Table_btnTicket.slice(1));
            },
            tdQtyOrderBuilder = function () {
                return simpleTdBuilder(dataRow.qtyshprel);
            },
            tdQtyPickBuilder = function () {
                return simpleTdBuilder(dataRow.qtypick);
            },
            tdCompany = function () {
                return simpleTdBuilder(dataRow.company);
            };
            
        result.className = trClass;
        result.appendChild(tdPickTicketBuilder());
        result.appendChild(tdQtyOrderBuilder());
        result.appendChild(tdQtyPickBuilder());
        result.appendChild(tdCompany());
        
        return result;
    };
    PickTicket.functions.modal_TicketList_BindTableItemsEventHandlers = function () {
        $(PickTicket.htmlBindings.modal_TicketList_Table_btnTicket).on('click',
            PickTicket.eventHandlers.modal_TicketList_Table_btnTicket_onClick);
    };
    
    PickTicket.eventHandlers = {};
    PickTicket.eventHandlers.btnTicketNo_onClick = function () {
        $(PickTicket.htmlBindings.modal_TicketList).modal('show');
    };
    PickTicket.eventHandlers.modal_TicketList_Pager_btnPagerPages_onClick = function (event) {
        var $target = $(event.target),
            value = $target.data('page');
        PickTicket.status.modal_TicketList_CurrentPage = value;
        PickTicket.functions.paginate();
    };
    PickTicket.eventHandlers.modal_TicketList_Table_btnTicket_onClick = function (event) {
        var $target = $(event.target),
            value = $target.data('ticketid');
    
        PickTicket.status.modal_TicketList_CurrentTicket = value;
        $(PickTicket.htmlBindings.txtTicketId).val(PickTicket.status.modal_TicketList_CurrentTicket);
        $(PickTicket.htmlBindings.modal_TicketList).modal('hide');
    };
    
    PickTicket.init = function () {
        console.log("PickTicket Init");
        
        PickTicket.functions.bindEventHandlers();
        
        
    };
    
}(window, jQuery, App));
