// Generated by CoffeeScript 1.9.3
(function() {
  var $, ARDashboard, App, DynamicFilter, dandelion, global;

  global = window;

  $ = global.jQuery;

  App = global.App;

  dandelion = global.dandelion;

  ARDashboard = dandelion.namespace('App.ARDashboard', global);

  DynamicFilter = App.ARDashboard.DynamicFilter;

  ARDashboard.status = {};

  ARDashboard.status.itemsPerPage = 50;

  ARDashboard.status.table_header_sortLastButton = null;

  ARDashboard.status.table_header_sortField = 'custno';

  ARDashboard.status.table_header_sortFieldOrder = 'ASC';

  ARDashboard.status.currentPage = 1;

  ARDashboard.status.currentCustno = '';

  ARDashboard.status.currentSet = 'details';

  ARDashboard.status.currentBalance = "0.0";

  ARDashboard.status.modal_detail_CurrentTicket = '';

  ARDashboard.status.modal_detail_CurrentPage = 1;

  ARDashboard.status.modal_detail_ItemsPerPage = 10;

  ARDashboard.dictionaries = {};

  ARDashboard.htmlBindings = {};

  ARDashboard.htmlBindings.container = '.container';

  ARDashboard.htmlBindings.itemCounter = '#panelHeadingItemsCount';

  ARDashboard.htmlBindings.drpItemPerPage = '.top-pager-itemmperpage-control a';

  ARDashboard.htmlBindings.drpItemPerPageValue = '.top-pager-itemmperpage-control button span.value';

  ARDashboard.htmlBindings.filterForm = '#filterForm';

  ARDashboard.htmlBindings.table = '#arDashboardTable';

  ARDashboard.htmlBindings.table_header_btnSort = '.btn-table-sort';

  ARDashboard.htmlBindings.table_body_btnCustNo = '.btn-custno-form-link';

  ARDashboard.htmlBindings.table_body_btnCurrent = '.btn-current-form-link';

  ARDashboard.htmlBindings.table_body_btn11_30 = '.btn-11-30-form-link';

  ARDashboard.htmlBindings.table_body_btn31_45 = '.btn-31-45-form-link';

  ARDashboard.htmlBindings.table_body_btn46_60 = '.btn-46-60-form-link';

  ARDashboard.htmlBindings.table_body_btn61_90 = '.btn-61-90-form-link';

  ARDashboard.htmlBindings.table_body_btnMoreThan90 = '.btn-more-than-90-form-link';

  ARDashboard.htmlBindings.table_body_btnAttach = '.btn-files-dialog';

  ARDashboard.htmlBindings.pager_container = '.pager-wrapper';

  ARDashboard.htmlBindings.pager_btnPagerPages = '.pager-btn';

  ARDashboard.htmlBindings.modal_Details = '#details_modal';

  ARDashboard.htmlBindings.modal_Details_balance = '#balance';

  ARDashboard.htmlBindings.modal_Details_Pager_container = '.pager-wrapper-details';

  ARDashboard.htmlBindings.modal_Details_Pager_btnPagerPages = '.pager-btn';

  ARDashboard.htmlBindings.modal_Details_Table = '#details';

  ARDashboard.functions = {};

  ARDashboard.functions.updateDetailSumary = function(data) {
    var message, part, total;
    total = accounting.formatMoney(data.balance, '$ ');
    part = accounting.formatMoney(data.balancePortion, '');
    if (data.setname === "") {
      message = data.custno + " balance: " + total;
    } else {
      message = " " + data.custno + " [ " + data.setname + " ] balance: " + total;
    }
    $(ARDashboard.htmlBindings.modal_Details_balance).text(message);
    return this;
  };

  ARDashboard.functions.paginate = function() {
    $.ajax({
      data: {
        predicate: ARDashboard.DynamicFilter.functions.getPredicate(),
        page: ARDashboard.status.currentPage,
        itemsPerPage: ARDashboard.status.itemsPerPage,
        orderby: ARDashboard.status.table_header_sortField,
        order: ARDashboard.status.table_header_sortFieldOrder
      },
      url: ARDashboard.urls.getPage,
      type: 'post',
      beforeSend: function() {
        return $('.loading').show();
      },
      success: function(response, textStatus, jqXHR) {
        var data, pager, pagerControl, pagerItems;
        data = $.parseJSON(response);
        pager = new BootstrapPager(data, ARDashboard.eventHandlers.pager_btnPagerPages_onClick);
        pagerItems = pager.getCurrentPagedItems();
        pagerControl = pager.getPagerControl();
        $(ARDashboard.htmlBindings.pager_container).empty().append(pagerControl);
        ARDashboard.functions.updateTable(pagerItems);
        $(ARDashboard.htmlBindings.itemCounter).html(pager.itemsCount);
        return $('.loading').hide();
      }
    });
    return this;
  };

  ARDashboard.functions.updateTable = function(items) {
    var $table, $tableBody, index;
    $table = $(ARDashboard.htmlBindings.table);
    $tableBody = $table.children('tbody');
    $tableBody.empty();
    for (index in items) {
      if (items.hasOwnProperty(index)) {
        $tableBody.append(ARDashboard.functions.buildTableItem(items[index], '', "item-field"));
      }
    }
    ARDashboard.functions.bindTableItemsEventHandlers();
    return this;
  };

  ARDashboard.functions.buildTableItem = function(dataRow, trClass, tdClass) {
    var doc, result, selectBuilder, simpleTdBuilder, tdBalanceBuilder, tdCompanyBuilder, tdCurrentBuilder, tdCustNoBuilder, tdInterval1130Builder, tdInterval3145Builder, tdInterval4660Builder, tdInterval6190Builder, tdIntervalMoreThan90Builder, withLinkTdBuilder, withSelectBuilder;
    doc = global.document;
    result = doc.createElement('tr');
    simpleTdBuilder = function(data, tdClass) {
      var td;
      td = doc.createElement('td');
      td.className = tdClass;
      td.appendChild(doc.createTextNode(data));
      return td;
    };
    withLinkTdBuilder = function(data, linkClassName, tdLinkClass) {
      var a, td;
      td = doc.createElement('td');
      a = doc.createElement('a');
      a.href = "#";
      a.className = linkClassName;
      a.dataset.custno = dataRow.custno;
      if (typeof data === "string") {
        a.appendChild(doc.createTextNode(data));
      } else {
        a.appendChild(data);
      }
      td.className = tdLinkClass || tdClass;
      td.appendChild(a);
      return td;
    };
    selectBuilder = function(current, values) {
      var currentId, currentValue, index, option, select;
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
    };
    withSelectBuilder = function(data, dictionary, dropdownClassName) {
      var select, td;
      td = doc.createElement('td');
      select = selectBuilder(data, dictionary);
      select.dataset.ordnum = dataRow.ordnum;
      select.className += ' select2-nosearch ' + dropdownClassName;
      td.appendChild(select);
      return td;
    };
    tdCustNoBuilder = function() {
      return withLinkTdBuilder(dataRow.custno, ARDashboard.htmlBindings.table_body_btnCustNo.slice(1));
    };
    tdCompanyBuilder = function() {
      return simpleTdBuilder(dataRow.company);
    };
    tdCurrentBuilder = function() {
      if (dataRow.current === '0') {
        return simpleTdBuilder(accounting.formatMoney(dataRow.current, ''), 'currency');
      } else {
        return withLinkTdBuilder(accounting.formatMoney(dataRow.current, ''), ARDashboard.htmlBindings.table_body_btnCurrent.slice(1), 'currency');
      }
    };
    tdInterval1130Builder = function() {
      if (dataRow['11-30'] === '0') {
        return simpleTdBuilder(accounting.formatMoney(dataRow['11-30'], ''), 'currency');
      } else {
        return withLinkTdBuilder(accounting.formatMoneyformatMoney(dataRow['11-30'], ''), ARDashboard.htmlBindings.table_body_btn11_30.slice(1), 'currency');
      }
    };
    tdInterval3145Builder = function() {
      if (dataRow['31-45'] === '0') {
        return simpleTdBuilder(accounting.formatMoney(dataRow['31-45'], ''), 'currency');
      } else {
        return withLinkTdBuilder(accounting.formatMoney(dataRow['31-45'], ''), ARDashboard.htmlBindings.table_body_btn31_45.slice(1), 'currency');
      }
    };
    tdInterval4660Builder = function() {
      if (dataRow['46-60'] === '0') {
        return simpleTdBuilder(accounting.formatMoney(dataRow['46-60'], ''), 'currency');
      } else {
        return withLinkTdBuilder(accounting.formatMoney(dataRow['46-60'], ''), ARDashboard.htmlBindings.table_body_btn46_60.slice(1), 'currency');
      }
    };
    tdInterval6190Builder = function() {
      if (dataRow['61-90'] === '0') {
        return simpleTdBuilder(accounting.formatMoney(dataRow['61-90'], ''), 'currency');
      } else {
        return withLinkTdBuilder(accounting.formatMoney(dataRow['61-90'], ''), ARDashboard.htmlBindings.table_body_btn61_90.slice(1), 'currency');
      }
    };
    tdIntervalMoreThan90Builder = function() {
      if (dataRow['>91'] === '0') {
        return simpleTdBuilder(accounting.formatMoney(dataRow['>91'], ''), 'currency');
      } else {
        return withLinkTdBuilder(accounting.formatMoney(dataRow['>91'], ''), ARDashboard.htmlBindings.table_body_btnMoreThan90.slice(1), 'currency');
      }
    };
    tdBalanceBuilder = function() {
      return simpleTdBuilder(accounting.formatMoney(dataRow.balance, ''), 'currency');
    };
    result.className = trClass;
    result.appendChild(tdCustNoBuilder());
    result.appendChild(tdCompanyBuilder());
    result.appendChild(tdCurrentBuilder());
    result.appendChild(tdInterval1130Builder());
    result.appendChild(tdInterval3145Builder());
    result.appendChild(tdInterval4660Builder());
    result.appendChild(tdInterval6190Builder());
    result.appendChild(tdIntervalMoreThan90Builder());
    result.appendChild(tdBalanceBuilder());
    return result;
  };

  ARDashboard.functions.bindTableItemsEventHandlers = function() {
    $(ARDashboard.htmlBindings.table_body_btnCustNo).on('click', ARDashboard.eventHandlers.table_body_btnCustNo_onClick);
    $(ARDashboard.htmlBindings.table_body_btnCurrent).on('click', ARDashboard.eventHandlers.table_body_btnCustNo_onClick);
    $(ARDashboard.htmlBindings.table_body_btn11_30).on('click', ARDashboard.eventHandlers.table_body_btnCustNo_onClick);
    $(ARDashboard.htmlBindings.table_body_btn31_45).on('click', ARDashboard.eventHandlers.table_body_btnCustNo_onClick);
    $(ARDashboard.htmlBindings.table_body_btn46_60).on('click', ARDashboard.eventHandlers.table_body_btnCustNo_onClick);
    $(ARDashboard.htmlBindings.table_body_btn61_90).on('click', ARDashboard.eventHandlers.table_body_btnCustNo_onClick);
    $(ARDashboard.htmlBindings.table_body_btnMoreThan90).on('click', ARDashboard.eventHandlers.table_body_btnCustNo_onClick);
    return this;
  };

  ARDashboard.functions.bindEventHandlers = function() {
    $(ARDashboard.htmlBindings.drpItemPerPage).on('click', ARDashboard.eventHandlers.drpItemPerPage_onClick);
    $(ARDashboard.htmlBindings.table_header_btnSort).on('click', ARDashboard.eventHandlers.table_body_btnSort_onClick);
    $(ARDashboard.htmlBindings.pager_btnPagerPages).on('click', ARDashboard.eventHandlers.pager_btnPagerPages_onClick);
    ARDashboard.functions.bindTableItemsEventHandlers();
    return this;
  };

  ARDashboard.functions.modal_details_paginate = function() {
    $.ajax({
      data: {
        setname: ARDashboard.status.currentSet,
        page: ARDashboard.status.modal_detail_CurrentPage,
        itemsPerPage: ARDashboard.status.modal_detail_ItemsPerPage,
        custno: ARDashboard.status.currentCustno,
        balance: ARDashboard.status.currentBalance
      },
      url: ARDashboard.urls.getCustnoDetailPage,
      type: 'post',
      beforeSend: function() {
        return $('.loading').show();
      },
      success: function(response) {
        var data, pager, pagerControl, pagerItems;
        data = $.parseJSON(response);
        pager = new BootstrapPager(data, ARDashboard.eventHandlers.modal_details_pager_btnPagerPages_onClick);
        pagerItems = pager.getCurrentPagedItems();
        pagerControl = pager.getPagerControl();
        $(ARDashboard.htmlBindings.modal_Details_Pager_container).empty().append(pagerControl);
        ARDashboard.functions.modal_details_updateTable(pagerItems);
        ARDashboard.functions.updateDetailSumary(data);
        return $('.loading').hide();
      }
    });
    return this;
  };

  ARDashboard.functions.modal_details_updateTable = function(items) {
    var $table, $tableBody, index;
    $table = $(ARDashboard.htmlBindings.modal_Details_Table);
    $tableBody = $table.children('tbody');
    $tableBody.empty();
    for (index in items) {
      if (items.hasOwnProperty(index)) {
        $tableBody.append(ARDashboard.functions.modal_details_buildTableItem(items[index], '', "item-field"));
      }
    }
    ARDashboard.functions.modal_details_bindTableItemsEventHandlers();
    return this;
  };

  ARDashboard.functions.modal_details_buildTableItem = function(dataRow, trClass, tdClass) {
    var doc, result, simpleTdBuilder, tdAmtpaidBuilder, tdDatepaidBuilder, tdInvdateBuilder, tdInvnoBuilder, tdOpenbalBuilder, tdRefnoBuilder;
    doc = global.document;
    result = doc.createElement('tr');
    simpleTdBuilder = function(data, tdClass) {
      var td;
      td = doc.createElement('td');
      td.className = tdClass;
      td.appendChild(doc.createTextNode(data));
      return td;
    };
    tdAmtpaidBuilder = function() {
      return simpleTdBuilder(accounting.formatMoney(dataRow.amtpaid, ''), 'currency');
    };
    tdDatepaidBuilder = function() {
      return simpleTdBuilder(dataRow.datepaid);
    };
    tdInvdateBuilder = function() {
      return simpleTdBuilder(dataRow.invdate);
    };
    tdInvnoBuilder = function() {
      return simpleTdBuilder(dataRow.invno);
    };
    tdOpenbalBuilder = function() {
      return simpleTdBuilder(accounting.formatMoney(dataRow.openbal, ''), 'currency');
    };
    tdRefnoBuilder = function() {
      return simpleTdBuilder(dataRow.refno);
    };
    result.className = trClass;
    result.appendChild(tdInvnoBuilder());
    result.appendChild(tdInvdateBuilder());
    result.appendChild(tdAmtpaidBuilder());
    result.appendChild(tdDatepaidBuilder());
    result.appendChild(tdRefnoBuilder());
    result.appendChild(tdOpenbalBuilder());
    return result;
  };

  ARDashboard.functions.modal_details_bindTableItemsEventHandlers = function() {
    return this;
  };

  ARDashboard.eventHandlers = {};

  ARDashboard.eventHandlers.drpItemPerPage_onClick = function(event) {
    var $target, value;
    $target = $(event.target);
    value = $target.html();
    ARDashboard.status.itemsPerPage = value;
    $(ARDashboard.htmlBindings.drpItemPerPageValue).text(value);
    ARDashboard.status.currentPage = 1;
    ARDashboard.functions.paginate();
    return this;
  };

  ARDashboard.eventHandlers.pager_btnPagerPages_onClick = function(event) {
    var $target, value;
    $target = $(event.target);
    value = $target.data('page');
    ARDashboard.status.currentPage = value;
    ARDashboard.functions.paginate();
    return this;
  };

  ARDashboard.eventHandlers.table_body_btnSort_onClick = function(event) {
    var $target, sortingField;
    $target = $(event.target);
    sortingField = $target.data('field');
    if (ARDashboard.status.table_header_sortLastButton !== null) {
      ARDashboard.status.table_header_sortLastButton.removeClass('asc desc');
    }
    if (ARDashboard.status.table_header_sortField !== sortingField) {
      ARDashboard.status.table_header_sortFieldOrder = '';
    }
    ARDashboard.status.table_header_sortField = sortingField;
    if (ARDashboard.status.table_header_sortFieldOrder === 'ASC') {
      ARDashboard.status.table_header_sortFieldOrder = 'DESC';
      $target.addClass('asc').removeClass('desc');
    } else {
      ARDashboard.status.table_header_sortFieldOrder = 'ASC';
      $target.addClass('desc').removeClass('asc');
    }
    ARDashboard.status.table_header_sortLastButton = $target;
    ARDashboard.functions.paginate();
    return this;
  };

  ARDashboard.eventHandlers.table_body_btnCustNo_onClick = function(event) {
    var $target;
    $target = $(event.target);
    ARDashboard.status.currentCustno = $target.data('custno');
    ARDashboard.status.currentBalance = $target.text().trim();
    if ($target.attr('class') === ARDashboard.htmlBindings.table_body_btnCustNo.slice(1)) {
      ARDashboard.status.currentBalance = $target.parent().parent().children(':last').text();
      ARDashboard.status.currentSet = "details";
    }
    if ($target.attr('class') === ARDashboard.htmlBindings.table_body_btnCurrent.slice(1)) {
      ARDashboard.status.currentSet = 'setCurrent';
    } else if ($target.attr('class') === ARDashboard.htmlBindings.table_body_btn11_30.slice(1)) {
      ARDashboard.status.currentSet = 'set11_30';
    } else if ($target.attr('class') === ARDashboard.htmlBindings.table_body_btn31_45.slice(1)) {
      ARDashboard.status.currentSet = 'set31_45';
    } else if ($target.attr('class') === ARDashboard.htmlBindings.table_body_btn46_60.slice(1)) {
      ARDashboard.status.currentSet = 'set45_60';
    } else if ($target.attr('class') === ARDashboard.htmlBindings.table_body_btn61_90.slice(1)) {
      ARDashboard.status.currentSet = 'set61_90';
    } else if ($target.attr('class') === ARDashboard.htmlBindings.table_body_btnMoreThan90.slice(1)) {
      ARDashboard.status.currentSet = 'setGreatherThan90';
    }
    $.ajax({
      data: {
        setname: ARDashboard.status.currentSet,
        custno: ARDashboard.status.currentCustno,
        balance: ARDashboard.status.currentBalance
      },
      url: ARDashboard.urls.getCustnoDetailPage,
      type: 'post',
      beforeSend: function() {
        return $('.loading').show();
      },
      success: function(response, textStatus, jqXHR) {
        var data, pager, pagerControl, pagerItems;
        data = $.parseJSON(response);
        pager = new BootstrapPager(data, ARDashboard.eventHandlers.modal_details_pager_btnPagerPages_onClick);
        pagerItems = pager.getCurrentPagedItems();
        pagerControl = pager.getPagerControl();
        $(ARDashboard.htmlBindings.modal_Details_Pager_container).empty().append(pagerControl);
        ARDashboard.functions.modal_details_updateTable(pagerItems);
        ARDashboard.functions.updateDetailSumary(data);
        $(ARDashboard.htmlBindings.modal_Details).modal();
        return $('.loading').hide();
      }
    });
    return this;
  };

  ARDashboard.eventHandlers.modal_details_pager_btnPagerPages_onClick = function(event) {
    var $target, value;
    $target = $(event.target);
    value = $target.data('page');
    ARDashboard.status.modal_detail_CurrentPage = value;
    ARDashboard.status.currentSet;
    ARDashboard.functions.modal_details_paginate();
    return this;
  };

  ARDashboard.init = function(defaultUserFilter) {
    ARDashboard.status.itemsPerPage = $(ARDashboard.htmlBindings.drpItemPerPageValue).text();
    DynamicFilter.init(defaultUserFilter);
    return ARDashboard.functions.bindEventHandlers();
  };

}).call(this);
