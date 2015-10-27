// Generated by CoffeeScript 1.9.3
(function () {
  var $, APDashboard, App, DynamicFilter, dandelion, global;

  global = window;

  $ = global.jQuery;

  App = global.App;

  dandelion = global.dandelion;

  APDashboard = dandelion.namespace('App.APDashboard', global);

  DynamicFilter = App.APDashboard.DynamicFilter;

  APDashboard.status = {};

  APDashboard.status.itemsPerPage = 50;

  APDashboard.status.table_header_sortLastButton = null;

  APDashboard.status.table_header_sortField = 'vendno';

  APDashboard.status.table_header_sortFieldOrder = 'ASC';

  APDashboard.status.currentPage = 1;

  APDashboard.status.currentVendno = '';

  APDashboard.status.currentSet = 'details';

  APDashboard.status.currentBalance = "0.0";

  APDashboard.status.modal_detail_CurrentTicket = '';

  APDashboard.status.modal_detail_CurrentPage = 1;

  APDashboard.status.modal_detail_ItemsPerPage = 10;

  APDashboard.dictionaries = {};

  APDashboard.htmlBindings = {};

  APDashboard.htmlBindings.container = '.container';

  APDashboard.htmlBindings.itemCounter = '#panelHeadingItemsCount';

  APDashboard.htmlBindings.drpItemPerPage = '.top-pager-itemmperpage-control a';

  APDashboard.htmlBindings.drpItemPerPageValue = '.top-pager-itemmperpage-control button span.value';

  APDashboard.htmlBindings.filterForm = '#filterForm';

  APDashboard.htmlBindings.table = '#apDashboardTable';

  APDashboard.htmlBindings.table_header_btnSort = '.btn-table-sort';

  APDashboard.htmlBindings.table_body_btnCustNo = '.btn-vendno-form-link';

  APDashboard.htmlBindings.table_body_btnCurrent = '.btn-current-form-link';

  APDashboard.htmlBindings.table_body_btn11_30 = '.btn-11-30-form-link';

  APDashboard.htmlBindings.table_body_btn31_45 = '.btn-31-45-form-link';

  APDashboard.htmlBindings.table_body_btn46_60 = '.btn-46-60-form-link';

  APDashboard.htmlBindings.table_body_btn61_90 = '.btn-61-90-form-link';

  APDashboard.htmlBindings.table_body_btnMoreThan90 = '.btn-more-than-90-form-link';

  APDashboard.htmlBindings.table_body_btnAttach = '.btn-files-dialog';

  APDashboard.htmlBindings.pager_container = '.pager-wrapper';

  APDashboard.htmlBindings.pager_btnPagerPages = '.pager-btn';

  APDashboard.htmlBindings.modal_Details = '#details_modal';

  APDashboard.htmlBindings.modal_Details_balance = '#balance';

  APDashboard.htmlBindings.modal_Details_Pager_container = '.pager-wrapper-details';

  APDashboard.htmlBindings.modal_Details_Pager_btnPagerPages = '.pager-btn';

  APDashboard.htmlBindings.modal_Details_Table = '#details';

  APDashboard.functions = {};

  APDashboard.functions.updateDetailSumary = function (data) {
    var message, part, total;
    total = accounting.formatMoney(data.balance, '$ ');
    part = accounting.formatMoney(data.balancePortion, '');
    if (data.setname === "") {
      message = data.vendno + " balance: " + total;
    } else {
      message = " " + data.vendno + " [ " + data.setname + " ] balance: " + total;
    }
    $(APDashboard.htmlBindings.modal_Details_balance).text(message);
    return this;
  };

  APDashboard.functions.paginate = function () {
    $.ajax({
      data: {
        predicate: APDashboard.DynamicFilter.functions.getPredicate(),
        page: APDashboard.status.currentPage,
        itemsPerPage: APDashboard.status.itemsPerPage,
        orderby: APDashboard.status.table_header_sortField,
        order: APDashboard.status.table_header_sortFieldOrder
      },
      url: APDashboard.urls.getPage,
      type: 'post',
      beforeSend: function () {
        return $('.loading').show();
      },
      success: function (response, textStatus, jqXHR) {
        var data, pager, pagerControl, pagerItems;
        data = $.parseJSON(response);
        pager = new BootstrapPager(data, APDashboard.eventHandlers.pager_btnPagerPages_onClick);
        pagerItems = pager.getCurrentPagedItems();
        pagerControl = pager.getPagerControl();
        $(APDashboard.htmlBindings.pager_container).empty().append(pagerControl);
        APDashboard.functions.updateTable(pagerItems);
        $(APDashboard.htmlBindings.itemCounter).html(pager.itemsCount);
        return $('.loading').hide();
      }
    });
    return this;
  };

  APDashboard.functions.updateTable = function (items) {
    var $table, $tableBody, index;
    $table = $(APDashboard.htmlBindings.table);
    $tableBody = $table.children('tbody');
    $tableBody.empty();
    for (index in items) {
      if (items.hasOwnProperty(index)) {
        $tableBody.append(APDashboard.functions.buildTableItem(items[index], '', "item-field"));
      }
    }
    APDashboard.functions.bindTableItemsEventHandlers();
    return this;
  };

  APDashboard.functions.buildTableItem = function (dataRow, trClass, tdClass) {
    var doc, result, selectBuilder, simpleTdBuilder, tdBalanceBuilder, tdCompanyBuilder, tdCurrentBuilder, tdCustNoBuilder, tdInterval1130Builder, tdInterval3145Builder, tdInterval4660Builder, tdInterval6190Builder, tdIntervalMoreThan90Builder, withLinkTdBuilder, withSelectBuilder;
    doc = global.document;
    result = doc.createElement('tr');
    simpleTdBuilder = function (data, tdClass) {
      var td;
      td = doc.createElement('td');
      td.className = tdClass;
      td.appendChild(doc.createTextNode(data));
      return td;
    };
    withLinkTdBuilder = function (data, linkClassName, tdLinkClass) {
      var a, td;
      td = doc.createElement('td');
      a = doc.createElement('a');
      a.href = "#";
      a.className = linkClassName;
      a.dataset.vendno = dataRow.vendno;
      if (typeof data === "string") {
        a.appendChild(doc.createTextNode(data));
      } else {
        a.appendChild(data);
      }
      td.className = tdLinkClass || tdClass;
      td.appendChild(a);
      return td;
    };
    selectBuilder = function (current, values) {
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
    withSelectBuilder = function (data, dictionary, dropdownClassName) {
      var select, td;
      td = doc.createElement('td');
      select = selectBuilder(data, dictionary);
      select.dataset.ordnum = dataRow.ordnum;
      select.className += ' select2-nosearch ' + dropdownClassName;
      td.appendChild(select);
      return td;
    };
    tdCustNoBuilder = function () {
      return withLinkTdBuilder(dataRow.vendno, APDashboard.htmlBindings.table_body_btnCustNo.slice(1));
    };
    tdCompanyBuilder = function () {
      return simpleTdBuilder(dataRow.company);
    };
    tdCurrentBuilder = function () {
      if (dataRow.current === '0') {
        return simpleTdBuilder(accounting.formatMoney(dataRow.current, ''), 'currency');
      } else {
        return withLinkTdBuilder(accounting.formatMoney(dataRow.current, ''), APDashboard.htmlBindings.table_body_btnCurrent.slice(1), 'currency');
      }
    };
    tdInterval1130Builder = function () {
      if (dataRow['11-30'] === '0') {
        return simpleTdBuilder(accounting.formatMoney(dataRow['11-30'], ''), 'currency');
      } else {
        return withLinkTdBuilder(accounting.formatMoneyformatMoney(dataRow['11-30'], ''), APDashboard.htmlBindings.table_body_btn11_30.slice(1), 'currency');
      }
    };
    tdInterval3145Builder = function () {
      if (dataRow['31-45'] === '0') {
        return simpleTdBuilder(accounting.formatMoney(dataRow['31-45'], ''), 'currency');
      } else {
        return withLinkTdBuilder(accounting.formatMoney(dataRow['31-45'], ''), APDashboard.htmlBindings.table_body_btn31_45.slice(1), 'currency');
      }
    };
    tdInterval4660Builder = function () {
      if (dataRow['46-60'] === '0') {
        return simpleTdBuilder(accounting.formatMoney(dataRow['46-60'], ''), 'currency');
      } else {
        return withLinkTdBuilder(accounting.formatMoney(dataRow['46-60'], ''), APDashboard.htmlBindings.table_body_btn46_60.slice(1), 'currency');
      }
    };
    tdInterval6190Builder = function () {
      if (dataRow['61-90'] === '0') {
        return simpleTdBuilder(accounting.formatMoney(dataRow['61-90'], ''), 'currency');
      } else {
        return withLinkTdBuilder(accounting.formatMoney(dataRow['61-90'], ''), APDashboard.htmlBindings.table_body_btn61_90.slice(1), 'currency');
      }
    };
    tdIntervalMoreThan90Builder = function () {
      if (dataRow['>91'] === '0') {
        return simpleTdBuilder(accounting.formatMoney(dataRow['>91'], ''), 'currency');
      } else {
        return withLinkTdBuilder(accounting.formatMoney(dataRow['>91'], ''), APDashboard.htmlBindings.table_body_btnMoreThan90.slice(1), 'currency');
      }
    };
    tdBalanceBuilder = function () {
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

  APDashboard.functions.bindTableItemsEventHandlers = function () {
    $(APDashboard.htmlBindings.table_body_btnCustNo).on('click', APDashboard.eventHandlers.table_body_btnCustNo_onClick);
    $(APDashboard.htmlBindings.table_body_btnCurrent).on('click', APDashboard.eventHandlers.table_body_btnCustNo_onClick);
    $(APDashboard.htmlBindings.table_body_btn11_30).on('click', APDashboard.eventHandlers.table_body_btnCustNo_onClick);
    $(APDashboard.htmlBindings.table_body_btn31_45).on('click', APDashboard.eventHandlers.table_body_btnCustNo_onClick);
    $(APDashboard.htmlBindings.table_body_btn46_60).on('click', APDashboard.eventHandlers.table_body_btnCustNo_onClick);
    $(APDashboard.htmlBindings.table_body_btn61_90).on('click', APDashboard.eventHandlers.table_body_btnCustNo_onClick);
    $(APDashboard.htmlBindings.table_body_btnMoreThan90).on('click', APDashboard.eventHandlers.table_body_btnCustNo_onClick);
    return this;
  };

  APDashboard.functions.bindEventHandlers = function () {
    $(APDashboard.htmlBindings.drpItemPerPage).on('click', APDashboard.eventHandlers.drpItemPerPage_onClick);
    $(APDashboard.htmlBindings.table_header_btnSort).on('click', APDashboard.eventHandlers.table_body_btnSort_onClick);
    $(APDashboard.htmlBindings.pager_btnPagerPages).on('click', APDashboard.eventHandlers.pager_btnPagerPages_onClick);
    APDashboard.functions.bindTableItemsEventHandlers();
    return this;
  };

  APDashboard.functions.modal_details_paginate = function () {
    $.ajax({
      data: {
        setname: APDashboard.status.currentSet,
        page: APDashboard.status.modal_detail_CurrentPage,
        itemsPerPage: APDashboard.status.modal_detail_ItemsPerPage,
        vendno: APDashboard.status.currentVendno,
        balance: APDashboard.status.currentBalance
      },
      url: APDashboard.urls.getVendnoDetailPage,
      type: 'post',
      beforeSend: function () {
        return $('.loading').show();
      },
      success: function (response) {
        var data, pager, pagerControl, pagerItems;
        data = $.parseJSON(response);
        pager = new BootstrapPager(data, APDashboard.eventHandlers.modal_details_pager_btnPagerPages_onClick);
        pagerItems = pager.getCurrentPagedItems();
        pagerControl = pager.getPagerControl();
        $(APDashboard.htmlBindings.modal_Details_Pager_container).empty().append(pagerControl);
        APDashboard.functions.modal_details_updateTable(pagerItems);
        APDashboard.functions.updateDetailSumary(data);
        return $('.loading').hide();
      }
    });
    return this;
  };

  APDashboard.functions.modal_details_updateTable = function (items) {
    var $table, $tableBody, index;
    $table = $(APDashboard.htmlBindings.modal_Details_Table);
    $tableBody = $table.children('tbody');
    $tableBody.empty();
    for (index in items) {
      if (items.hasOwnProperty(index)) {
        $tableBody.append(APDashboard.functions.modal_details_buildTableItem(items[index], '', "item-field"));
      }
    }
    APDashboard.functions.modal_details_bindTableItemsEventHandlers();
    return this;
  };

  APDashboard.functions.modal_details_buildTableItem = function (dataRow, trClass, tdClass) {
    var doc, result, simpleTdBuilder, tdAmtpaidBuilder, tdDatepaidBuilder, tdInvdateBuilder, tdInvnoBuilder, tdOpenbalBuilder, tdRefnoBuilder;
    doc = global.document;
    result = doc.createElement('tr');
    simpleTdBuilder = function (data, tdClass) {
      var td;
      td = doc.createElement('td');
      td.className = tdClass;
      td.appendChild(doc.createTextNode(data));
      return td;
    };
    tdAmtpaidBuilder = function () {
      return simpleTdBuilder(accounting.formatMoney(dataRow.amtpaid, ''), 'currency');
    };
    tdDatepaidBuilder = function () {
      return simpleTdBuilder(dataRow.datepaid);
    };
    tdInvdateBuilder = function () {
      return simpleTdBuilder(dataRow.invdate);
    };
    tdInvnoBuilder = function () {
      return simpleTdBuilder(dataRow.invno);
    };
    tdOpenbalBuilder = function () {
      return simpleTdBuilder(accounting.formatMoney(dataRow.openbal, ''), 'currency');
    };
    tdRefnoBuilder = function () {
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

  APDashboard.functions.modal_details_bindTableItemsEventHandlers = function () {
    return this;
  };

  APDashboard.eventHandlers = {};

  APDashboard.eventHandlers.drpItemPerPage_onClick = function (event) {
    var $target, value;
    $target = $(event.target);
    value = $target.html();
    APDashboard.status.itemsPerPage = value;
    $(APDashboard.htmlBindings.drpItemPerPageValue).text(value);
    APDashboard.status.currentPage = 1;
    APDashboard.functions.paginate();
    return this;
  };

  APDashboard.eventHandlers.pager_btnPagerPages_onClick = function (event) {
    var $target, value;
    $target = $(event.target);
    value = $target.data('page');
    APDashboard.status.currentPage = value;
    APDashboard.functions.paginate();
    return this;
  };

  APDashboard.eventHandlers.table_body_btnSort_onClick = function (event) {
    var $target, sortingField;
    $target = $(event.target);
    sortingField = $target.data('field');
    if (APDashboard.status.table_header_sortLastButton !== null) {
      APDashboard.status.table_header_sortLastButton.removeClass('asc desc');
    }
    if (APDashboard.status.table_header_sortField !== sortingField) {
      APDashboard.status.table_header_sortFieldOrder = '';
    }
    APDashboard.status.table_header_sortField = sortingField;
    if (APDashboard.status.table_header_sortFieldOrder === 'ASC') {
      APDashboard.status.table_header_sortFieldOrder = 'DESC';
      $target.addClass('asc').removeClass('desc');
    } else {
      APDashboard.status.table_header_sortFieldOrder = 'ASC';
      $target.addClass('desc').removeClass('asc');
    }
    APDashboard.status.table_header_sortLastButton = $target;
    APDashboard.functions.paginate();
    return this;
  };

  APDashboard.eventHandlers.table_body_btnCustNo_onClick = function (event) {
    var $target;
    $target = $(event.target);
    APDashboard.status.currentVendno = $target.data('vendno');
    APDashboard.status.currentBalance = $target.text().trim();
    if ($target.attr('class') === APDashboard.htmlBindings.table_body_btnCustNo.slice(1)) {
      APDashboard.status.currentBalance = $target.parent().parent().children(':last').text();
      APDashboard.status.currentSet = "details";
    }
    if ($target.attr('class') === APDashboard.htmlBindings.table_body_btnCurrent.slice(1)) {
      APDashboard.status.currentSet = 'setCurrent';
    } else if ($target.attr('class') === APDashboard.htmlBindings.table_body_btn11_30.slice(1)) {
      APDashboard.status.currentSet = 'set11_30';
    } else if ($target.attr('class') === APDashboard.htmlBindings.table_body_btn31_45.slice(1)) {
      APDashboard.status.currentSet = 'set31_45';
    } else if ($target.attr('class') === APDashboard.htmlBindings.table_body_btn46_60.slice(1)) {
      APDashboard.status.currentSet = 'set45_60';
    } else if ($target.attr('class') === APDashboard.htmlBindings.table_body_btn61_90.slice(1)) {
      APDashboard.status.currentSet = 'set61_90';
    } else if ($target.attr('class') === APDashboard.htmlBindings.table_body_btnMoreThan90.slice(1)) {
      APDashboard.status.currentSet = 'setGreatherThan90';
    }
    $.ajax({
      data: {
        setname: APDashboard.status.currentSet,
        vendno: APDashboard.status.currentVendno,
        balance: APDashboard.status.currentBalance
      },
      url: APDashboard.urls.getVendnoDetailPage,
      type: 'post',
      beforeSend: function () {
        return $('.loading').show();
      },
      success: function (response, textStatus, jqXHR) {
        var data, pager, pagerControl, pagerItems;
        data = $.parseJSON(response);
        pager = new BootstrapPager(data, APDashboard.eventHandlers.modal_details_pager_btnPagerPages_onClick);
        pagerItems = pager.getCurrentPagedItems();
        pagerControl = pager.getPagerControl();
        $(APDashboard.htmlBindings.modal_Details_Pager_container).empty().append(pagerControl);
        APDashboard.functions.modal_details_updateTable(pagerItems);
        APDashboard.functions.updateDetailSumary(data);
        $(APDashboard.htmlBindings.modal_Details).modal();
        return $('.loading').hide();
      }
    });
    return this;
  };

  APDashboard.eventHandlers.modal_details_pager_btnPagerPages_onClick = function (event) {
    var $target, value;
    $target = $(event.target);
    value = $target.data('page');
    APDashboard.status.modal_detail_CurrentPage = value;
    APDashboard.status.currentSet;
    APDashboard.functions.modal_details_paginate();
    return this;
  };

  APDashboard.init = function (defaultUserFilter) {
    APDashboard.status.itemsPerPage = $(APDashboard.htmlBindings.drpItemPerPageValue).text();
    DynamicFilter.init(defaultUserFilter);
    return APDashboard.functions.bindEventHandlers();
  };

}).call(this);
