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
    PickTicket.status.firstLoad = true;
    PickTicket.status.ticketVerified = false;
    PickTicket.status.locationVerified = false;
    PickTicket.status.itemVerified = false;
    PickTicket.status.showfinishedTickets = false;
    PickTicket.status.modal_TicketList_CurrentTicket = '';
    PickTicket.status.modal_TicketList_CurrentPage = 1;
    PickTicket.status.modal_TicketList_ItemsPerPage = 10; // Default items per page value
    
    PickTicket.dictionaries = {};
    
    PickTicket.messages = {};
    PickTicket.messages.pickTicket                                  = 'Pick Ticket.';
    PickTicket.messages.ticketVerified                              = 'Ticket Verified.';
    PickTicket.messages.ticketNotFound                              = 'Ticket not found.';
    PickTicket.messages.tikectReady                                 = 'Pick Ticket is Ready, All Items Picked.';
    PickTicket.messages.locationVerified                            = 'Location verified.';
    PickTicket.messages.locationNotFound                            = 'Location not found.';
    PickTicket.messages.itemVerified                                = 'Item verified.';
    PickTicket.messages.itemNotVerified                             = 'Item not verified.';
    PickTicket.messages.scanItem                                    = 'Scan Item.';
    
    PickTicket.htmlBindings = {};
    PickTicket.htmlBindings.btnNewTicket                            = '#btnNewTicket';
    PickTicket.htmlBindings.txtTicketId                             = '#txtShpRelNo'; 
    PickTicket.htmlBindings.btnTicketNo                             = '#btnTicketNo';
    PickTicket.htmlBindings.txtLocation                             = '#txtLocation';
    PickTicket.htmlBindings.txtBarcode                              = '#txtBarcode';
    PickTicket.htmlBindings.chkShowfinishedTickets                  = '#chkShowfinishedTickets';
    PickTicket.htmlBindings.table_RelatedTicketItems                = '#related-tickets-items';
    PickTicket.htmlBindings.table_RelatedTicketItems_body           = '#related-tickets-items tbody';
    PickTicket.htmlBindings.table_RelatedTicketItems_body_btnItem   = '.btnItem';
    PickTicket.htmlBindings.modal_TicketList                        = '#ticket-list-modal';
    PickTicket.htmlBindings.modal_TicketList_itemCounter            = '#itemCounter';
    PickTicket.htmlBindings.modal_TicketList_Pager_container        = '.pager-wrapper';
    PickTicket.htmlBindings.modal_TicketList_Pager_btnPagerPages    = '.pager-btn';
    PickTicket.htmlBindings.modal_TicketList_Table                  = '#tickets';
    PickTicket.htmlBindings.modal_TicketList_Table_btnTicket        = '.ticket-link';
    PickTicket.htmlBindings.modal_qtyForm_btnItemQty                = '#btnItemQty';
    
    PickTicket.functions = {};
    PickTicket.functions.bindEventHandlers = function () {
        $(PickTicket.htmlBindings.btnNewTicket).on('click', 
            PickTicket.eventHandlers.btnNewTicket_onClick);
        
        $(PickTicket.htmlBindings.btnTicketNo).on('click', 
            PickTicket.eventHandlers.btnTicketNo_onClick);
            
        $(PickTicket.htmlBindings.txtTicketId)
            .on('keypress', PickTicket.eventHandlers.txtTicketId_onKeyPress)
            .on('blur', PickTicket.eventHandlers.txtTicketId_onLeave);
            
        $(PickTicket.htmlBindings.txtLocation)
            .on('keypress', PickTicket.eventHandlers.txtLocation_onKeyPress)
            .on('blur', PickTicket.eventHandlers.txtLocation_onLeave);
          
        $(PickTicket.htmlBindings.modal_TicketList_Pager_btnPagerPages).on('click', 
            PickTicket.eventHandlers.modal_ticketList_pager_btnPagerPages_onClick);
            
        $(PickTicket.htmlBindings.chkShowfinishedTickets).on('change',
            PickTicket.eventHandlers.chkShowfinishedTickets_onChange);
            
        $(PickTicket.htmlBindings.txtBarcode)
                .on('focus', PickTicket.eventHandlers.txtBarcode_onEnter)
                .on('keypress', PickTicket.eventHandlers.txtBarcode_onKeyPress);
        
        $(PickTicket.htmlBindings.modal_qtyForm_btnItemQty).on('click',
            PickTicket.eventHandlers.modal_qtyForm_btnItemQty_onClick);
            
        PickTicket.functions.modal_ticketList_bindTableItemsEventHandlers();
    };
    PickTicket.functions.table_RelatedTicketItems_bindEventHandlers = function () {
        $(PickTicket.htmlBindings.table_RelatedTicketItems_body_btnItem).on('click',
            PickTicket.eventHandlers.table_RelatedTicketItems_body_btnItem_onClick);
    };
    PickTicket.functions.verifyTicket = function (ticket) {
        $.ajax({
            data: {ticketId: ticket},
            url: PickTicket.url.verifyTicket,
            type: 'post',
            beforeSend: function () {
                $('.loading').show();
            },
            success: function (response) {
                var data = $.parseJSON(response);
                if (data.verified === true) {
                    PickTicket.status.ticketVerified = true;
                    PickTicket.functions.getItemsByTicket(ticket);
                    App.Helpers.setSuccessTo(PickTicket.htmlBindings.txtTicketId);
                } else {
                    App.Helpers.setErrorTo(PickTicket.htmlBindings.txtTicketId);
                    ShowFeedback(PickTicket.messages.ticketNotFound, 'danger');
                }
                $('.loading').hide();
            }
        });
    };
    PickTicket.functions.verifyLocation = function (location) {
        $.ajax({
            data: {location: location},
            url: PickTicket.url.verifyLocation,
            type: 'post',
            beforeSend: function () {
                $('.loading').show();
            },
            success: function (response) {
                var data = $.parseJSON(response);
                if (data.verified === true) 
                {
                    PickTicket.status.locationVerified = true;
                    App.Helpers.setSuccessTo(PickTicket.htmlBindings.txtLocation);
                    ShowFeedback(PickTicket.messages.locationVerified, 'success');
                    $(PickTicket.htmlBindings.txtBarcode).focus();
                } else {
                    App.Helpers.setErrorTo(PickTicket.htmlBindings.txtLocation);
                    ShowFeedback(PickTicket.messages.locationNotFound, 'danger');
                }
                $('.loading').hide();
            }
        });
    };
    PickTicket.functions.verifyItem = function (barcode) {
        PickTicket.status.itemVerified = false;
        var items = $(PickTicket.htmlBindings.table_RelatedTicketItems_body_btnItem),
            index;

        for (index = 0; index < items.length; index++) {
            if ((items[index].text).toLowerCase() === barcode.toLowerCase()) {
                PickTicket.status.itemVerified = true;
                break;
            }
        }
        
        if (PickTicket.status.itemVerified) {
            App.Helpers.setSuccessTo(PickTicket.htmlBindings.txtBarcode);
            ShowFeedback(PickTicket.messages.itemVerified, 'success');
        } else {
            App.Helpers.setErrorTo(PickTicket.htmlBindings.txtBarcode);
            ShowFeedback(PickTicket.messages.itemNotFound, 'danger');
        }
    };
    PickTicket.functions.getItemsByTicket = function (ticket) {
        PickTicket.status.showfinishedTickets = $(PickTicket.htmlBindings.chkShowfinishedTickets)[0].checked;
        $.ajax({
            data: {ticket: ticket, showFinished: PickTicket.status.showfinishedTickets},
            url: PickTicket.url.getItemsByTicket,
            type: 'post',
            beforeSend: function () {
                $('.loading').show();
            },
            success: function (response) {
                var data = $.parseJSON(response);
                PickTicket.functions.showItemsByTicket(data);
                $('.loading').hide();
            }
        });
    };
    PickTicket.functions.showItemsByTicket = function (items) {
        var currentItems, index, itemClass, finishedCount = 0, itemsCount = 0,
            $tableBody = $(PickTicket.htmlBindings.table_RelatedTicketItems_body);
        $tableBody.empty();
        for (index in items){
            currentItems = items[index];
            itemsCount += 1;
            if (currentItems.qtypick === currentItems.qtyshprel) {
                itemClass = 'finished';
                finishedCount +=1;
            } else {
                itemClass = 'unfinished';
            }
            
            $tableBody.append('<tr class="' + itemClass + 
                '"><td class="itemno"><a class="btnItem" href="#">' + currentItems.itemno + 
                '</a></td><td class="qty-left">' + currentItems.qtypick + 
                '</td><td class="qty-recv">' + currentItems.qtyshprel + 
                '</td><td class="binloc">' + currentItems.locno + 
                '</td></tr>');
        }
        PickTicket.functions.table_RelatedTicketItems_bindEventHandlers();
        
        if(finishedCount === itemsCount){
            ShowFeedback(PickTicket.messages.tikectReady, 'warning');
        } else {
            ShowFeedback(PickTicket.messages.ticketVerified, 'success');
        }
        
    };
    PickTicket.functions.modal_ticketList_paginate = function () {
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
                        PickTicket.eventHandlers.modal_ticketList_pager_btnPagerPages_onClick),
                    pagerItems = pager.getCurrentPagedItems(),
                    pagerControl = pager.getPagerControl();

                $(PickTicket.htmlBindings.modal_TicketList_Pager_container).empty()
                    .append(pagerControl);
                PickTicket.functions.modal_ticketList_updateTable(pagerItems);
//                $(PickTicket.htmlBindings.modal_TicketList_itemCounter).html('(' + pager.getItemsCount() + ')');

                $(PickTicket.htmlBindings.modal_TicketList_itemCounter).html("(" + pager.itemsCount + ")");
                $('.loading').hide();
            }
        });
    };
    PickTicket.functions.reset = function () {
        PickTicket.status.firstLoad = false;
        PickTicket.status.ticketVerified = false;
        PickTicket.status.locationVerified = false;
        PickTicket.status.itemVerified = false;
        $(PickTicket.htmlBindings.chkShowfinishedTickets)[0].checked = PickTicket.status.showfinishedTickets = false;
        
        $(PickTicket.htmlBindings.txtTicketId).parent().removeClass('has-success has-error');
        $(PickTicket.htmlBindings.txtLocation).parent().removeClass('has-success has-error');
        $(PickTicket.htmlBindings.txtBarcode).parent().removeClass('has-success has-error');
        
        $(PickTicket.htmlBindings.txtTicketId).val('');
        $(PickTicket.htmlBindings.txtLocation).val('');
        $(PickTicket.htmlBindings.txtBarcode).val('');
        
        $(PickTicket.htmlBindings.table_RelatedTicketItems_body).empty();
        ShowFeedback(PickTicket.messages.pickTicket, 'info');
    };
    PickTicket.functions.modal_ticketList_updateTable = function (items) {
        var $table = $(PickTicket.htmlBindings.modal_TicketList_Table),
            $tableBody = $table.children('tbody'),
            index;
        $tableBody.empty();
        for (index in items) {
            if (items.hasOwnProperty(index)) {
                $tableBody.append(PickTicket.functions.modal_ticketList_buildTableItem(items[index], '', "item-field"));
            }
        }
        PickTicket.functions.modal_ticketList_bindTableItemsEventHandlers();
    };
    PickTicket.functions.modal_ticketList_buildTableItem = function (dataRow, trClass, tdClass) {
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
            tdOrdnum = function () {
                return simpleTdBuilder(dataRow.ordnum);
            },     
//            tdQtyOrderBuilder = function () {
//                return simpleTdBuilder(dataRow.qtyshprel);
//            },
//            tdQtyPickBuilder = function () {
//                return simpleTdBuilder(dataRow.qtypick);
//            };
            tdCompany = function () {
                return simpleTdBuilder(dataRow.company);
            };
            
        result.className = trClass;
        result.appendChild(tdPickTicketBuilder());
//        result.appendChild(tdQtyOrderBuilder());
//        result.appendChild(tdQtyPickBuilder());
        result.appendChild(tdOrdnum());
        result.appendChild(tdCompany());
        
        return result;
    };
    PickTicket.functions.modal_ticketList_bindTableItemsEventHandlers = function () {
        $(PickTicket.htmlBindings.modal_TicketList_Table_btnTicket).on('click',
            PickTicket.eventHandlers.modal_ticketList_table_btnTicket_onClick);
    };
    
    PickTicket.eventHandlers = {};
    PickTicket.eventHandlers.btnNewTicket_onClick = function () {
        PickTicket.functions.reset();
    };
    PickTicket.eventHandlers.btnTicketNo_onClick = function () {
//        PickTicket.status.modal_TicketList_CurrentPage = 1;
        if (PickTicket.status.firstLoad) {
            PickTicket.functions.modal_ticketList_paginate();
        }
        $(PickTicket.htmlBindings.modal_TicketList).modal('show');
    };
    PickTicket.eventHandlers.txtTicketId_onKeyPress = function (event) {
        var ticket = event.target.value;
        PickTicket.status.ticketVerified = false;
        if (event.keyCode === 13) {
            PickTicket.functions.verifyTicket(ticket);
        }
    };
    PickTicket.eventHandlers.txtLocation_onKeyPress = function (event) {
        PickTicket.status.locationVerified = false;
        if (event.keyCode === 13) {
            PickTicket.functions.verifyLocation(event.target.value);
        }
    };
    PickTicket.eventHandlers.txtTicketId_onLeave = function (event) {
        if (!PickTicket.status.ticketVerified) {
            PickTicket.functions.verifyTicket(event.target.value);
        }
    };
    PickTicket.eventHandlers.txtLocation_onLeave = function (event) {
        if (!PickTicket.status.locationVerified) {
            PickTicket.functions.verifyLocation(event.target.value);
        }
    };
    PickTicket.eventHandlers.txtBarcode_onEnter = function () {
        var ticket, location;
        
        if (PickTicket.status.ticketVerified && PickTicket.status.locationVerified) {
            ShowFeedback(PickTicket.messages.scanItem, 'info');
        } else if (!PickTicket.status.ticketVerified) {
            ticket = $(PickTicket.htmlBindings.txtTicketId).val();
            PickTicket.functions.verifyTicket(ticket);
        } else if (!PickTicket.status.locationVerified) {
            location = $(PickTicket.htmlBindings.txtLocation).focus().val();
            PickTicket.functions.verifyLocation(location);
        }
    };
    PickTicket.eventHandlers.txtBarcode_onKeyPress = function (event) {
        PickTicket.status.itemVerified = false;
        if (event.keyCode === 13) {
            PickTicket.functions.verifyItem(event.target.value);
        }
    };
    PickTicket.eventHandlers.chkShowfinishedTickets_onChange = function () {
        var ticket = $(PickTicket.htmlBindings.txtTicketId).val();
        
        if(!PickTicket.status.ticketVerified){
            PickTicket.functions.verifyTicket(ticket);
        }
        PickTicket.functions.getItemsByTicket(ticket);
    };
    PickTicket.eventHandlers.table_RelatedTicketItems_body_btnItem_onClick = function (event) {
        var $target = $(event.target);
        $(PickTicket.htmlBindings.txtBarcode).val($target.html()).focus();
    };
    PickTicket.eventHandlers.modal_ticketList_pager_btnPagerPages_onClick = function (event) {
        var $target = $(event.target),
            value = $target.data('page');
        PickTicket.status.modal_TicketList_CurrentPage = value;
        PickTicket.functions.modal_ticketList_paginate();
    };
    PickTicket.eventHandlers.modal_ticketList_table_btnTicket_onClick = function (event) {
        var $target = $(event.target),
            value = $target.data('ticketid');
    
        PickTicket.status.modal_TicketList_CurrentTicket = value;
        $(PickTicket.htmlBindings.txtTicketId).val(PickTicket.status.modal_TicketList_CurrentTicket).focus();
        PickTicket.functions.verifyTicket(value);
        $(PickTicket.htmlBindings.modal_TicketList).modal('hide');
    };
    PickTicket.eventHandlers.modal_qtyForm_btnItemQty_onClick = function (event) {
        if (!PickTicket.status.itemVerified) {
            PickTicket.functions.verifyItem($(PickTicket.htmlBindings.txtBarcode).val());
        } 
        if (PickTicket.status.itemVerified) {
            $('#quantityForm').show();
        } else {
            ShowFeedback(PickTicket.messages.itemNotFound, 'danger');
        }
    };
    
    
    PickTicket.init = function () {
        console.log("PickTicket Init");

        if ($(PickTicket.htmlBindings.txtLocation).length === 0) {
            PickTicket.status.locationVerified = true;
            
            console.log("No location verification need");
        }
        
        PickTicket.functions.bindEventHandlers();
        
        App.QuantityForm.init();
        
    };
    
}(window, jQuery, App));
