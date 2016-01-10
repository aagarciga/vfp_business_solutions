global = window
$ = global.jQuery
App = global.App
dandelion = global.dandelion

APDashboard = dandelion.namespace('App.APDashboard', global)

DynamicFilter = App.APDashboard.DynamicFilter

APDashboard.status = {}
APDashboard.status.itemsPerPage = 50; # Default items per page value
APDashboard.status.table_header_sortLastButton = null;
APDashboard.status.table_header_sortField = 'vendno'; # Default Order By Fields
APDashboard.status.table_header_sortFieldOrder = 'ASC'; # Default Order
APDashboard.status.currentPage = 1;
APDashboard.status.currentVendno = '';
APDashboard.status.currentSet = 'details';
APDashboard.status.currentBalance = "0.0";
APDashboard.status.modal_detail_CurrentTicket = '';
APDashboard.status.modal_detail_CurrentPage = 1;
APDashboard.status.modal_detail_ItemsPerPage = 10; # Default items per page value

APDashboard.dictionaries = {}

APDashboard.htmlBindings = {}
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

APDashboard.functions = {}

# Cloned from financial dashboard (todo: need refactor here...
#APDashboard.functions.formatToCurrency = (value, separator = ',') ->
#  isNegative = value < 0
#  console.log  "Value", value
#  if isNegative
#    value *= -1
#    console.log "is negative"
#    console.log value
#
#  strValue = value.toString()
#  if isNegative
#    console.log strValue
#  commaCount = parseInt((strValue.length / 3) - 1, 10)
#  offset = 0
#  included = !!~strValue.indexOf('.') # Using bitwise operator instead (!== -1)
#
#  if included # strValue.indexOf('.') isnt -1
#    offset = strValue.slice(strValue.indexOf('.')).length
#
#  strValue = strValue.split('').reverse().join('') # reversing string
#
#  while commaCount isnt 0
#    strValue = strValue.slice(0, (commaCount * 3) + offset) + separator + strValue.slice((commaCount * 3) + offset)
#    commaCount -= 1
#
#  strValue = strValue.split('').reverse().join('') # reversing string back
#
#  if strValue.charAt(0) == separator
#    strValue = strValue.slice(1)
#
#  if isNegative
#    strValue = '-' + strValue
#    console.log strValue
#
#  strValue

APDashboard.functions.updateDetailSumary = (data)->
  total = accounting.formatMoney(data.balance, '$ ')
  part = accounting.formatMoney(data.balancePortion, '')
  if data.setname == ""
    message = "#{data.vendno} balance: #{total}"
  else
    message = " #{data.vendno} [ #{data.setname} ] balance: #{total}"

  $(APDashboard.htmlBindings.modal_Details_balance).text(message)
  @

APDashboard.functions.paginate = ->
  $.ajax({
    data:
      predicate: APDashboard.DynamicFilter.functions.getPredicate(),
      page: APDashboard.status.currentPage,
      itemsPerPage: APDashboard.status.itemsPerPage,
      orderby: APDashboard.status.table_header_sortField,
      order: APDashboard.status.table_header_sortFieldOrder
    url: APDashboard.urls.getPage
    type: 'post'
    beforeSend: ->
      $('.loading').show()
    success: (response, textStatus, jqXHR) ->
      data = $.parseJSON(response)
      pager = new BootstrapPager(data, APDashboard.eventHandlers.pager_btnPagerPages_onClick)
      pagerItems = pager.getCurrentPagedItems()
      pagerControl = pager.getPagerControl()

      $(APDashboard.htmlBindings.pager_container)
      .empty()
      .append(pagerControl)

      APDashboard.functions.updateTable(pagerItems)

      $(APDashboard.htmlBindings.itemCounter).html(pager.itemsCount)
      $('.loading').hide()
  })
  this

APDashboard.functions.updateTable = (items) ->
  $table = $(APDashboard.htmlBindings.table)
  $tableBody = $table.children('tbody')

  $tableBody.empty()

  for index of items #  using comprehensions for iterating over properties in objects
    if items.hasOwnProperty(index)
      $tableBody.append(APDashboard.functions.buildTableItem(items[index], '', "item-field"));

  APDashboard.functions.bindTableItemsEventHandlers();
  this

APDashboard.functions.buildTableItem = (dataRow, trClass, tdClass) ->
  doc = global.document
  result = doc.createElement('tr')

  simpleTdBuilder = (data, tdClass) ->
    td = doc.createElement('td')
    td.className = tdClass
    td.appendChild(doc.createTextNode(data))
    td;

  withLinkTdBuilder = (data, linkClassName, tdLinkClass) ->
    td = doc.createElement('td')
    a = doc.createElement('a')

    a.href = "#"
    a.className = linkClassName
    a.dataset.vendno = dataRow.vendno

    if typeof data == "string"
      a.appendChild(doc.createTextNode(data))
    else
      a.appendChild(data)

    td.className = tdLinkClass || tdClass
    td.appendChild(a)
    td;

  selectBuilder = (current, values) ->
    select = doc.createElement('select')

    option = doc.createElement('option')
    option.appendChild(doc.createTextNode("Empty"))

    select.appendChild(option)

    for index of values
      if values.hasOwnProperty(index)
        currentId = values[index].id
        currentValue = values[index].descrip
        option = doc.createElement('option')
        if current == currentId
          option.selected = "selected"
        option.value = currentId
        option.appendChild(doc.createTextNode(currentValue))
        select.appendChild(option)

    select.className = 'form-control update-dropdown'
    select

  withSelectBuilder = (data, dictionary, dropdownClassName) ->
    td = doc.createElement('td')
    select = selectBuilder(data, dictionary)
    select.dataset.ordnum = dataRow.ordnum
    select.className += ' select2-nosearch ' + dropdownClassName
    td.appendChild(select)
    td

  tdCustNoBuilder = ->
    withLinkTdBuilder(dataRow.vendno, APDashboard.htmlBindings.table_body_btnCustNo.slice(1))

  tdCompanyBuilder = ->
    simpleTdBuilder(dataRow.company)

  tdCurrentBuilder = ->
    if dataRow.current == '0'
      simpleTdBuilder(accounting.formatMoney(dataRow.current, ''), 'currency')
    else
      withLinkTdBuilder(accounting.formatMoney(dataRow.current, ''),
        APDashboard.htmlBindings.table_body_btnCurrent.slice(1), 'currency')

  tdInterval1130Builder = ->
    if dataRow['11-30'] == '0'
      simpleTdBuilder(accounting.formatMoney(dataRow['11-30'], ''), 'currency')
    else
      withLinkTdBuilder(accounting.formatMoneyformatMoney(dataRow['11-30'], ''),
        APDashboard.htmlBindings.table_body_btn11_30.slice(1), 'currency')

  tdInterval3145Builder = ->
    if dataRow['31-45'] == '0'
      simpleTdBuilder(accounting.formatMoney(dataRow['31-45'], ''), 'currency')
    else
      withLinkTdBuilder(accounting.formatMoney(dataRow['31-45'], ''),
        APDashboard.htmlBindings.table_body_btn31_45.slice(1), 'currency')

  tdInterval4660Builder = ->
    if dataRow['46-60'] == '0'
      simpleTdBuilder(accounting.formatMoney(dataRow['46-60'], ''), 'currency')
    else
      withLinkTdBuilder(accounting.formatMoney(dataRow['46-60'], ''),
        APDashboard.htmlBindings.table_body_btn46_60.slice(1), 'currency')

  tdInterval6190Builder = ->
    if dataRow['61-90'] == '0'
      simpleTdBuilder(accounting.formatMoney(dataRow['61-90'], ''), 'currency')
    else
      withLinkTdBuilder(accounting.formatMoney(dataRow['61-90'], ''),
        APDashboard.htmlBindings.table_body_btn61_90.slice(1), 'currency')

  tdIntervalMoreThan90Builder = ->
    if dataRow['>91'] == '0'
      simpleTdBuilder(accounting.formatMoney(dataRow['>91'], ''), 'currency')
    else
      withLinkTdBuilder(accounting.formatMoney(dataRow['>91'], ''),
        APDashboard.htmlBindings.table_body_btnMoreThan90.slice(1), 'currency')

  tdBalanceBuilder = ->
    simpleTdBuilder(accounting.formatMoney(dataRow.balance, ''), 'currency')

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
  result

APDashboard.functions.bindTableItemsEventHandlers = ->
  $(APDashboard.htmlBindings.table_body_btnCustNo).on('click', APDashboard.eventHandlers.table_body_btnCustNo_onClick)
  $(APDashboard.htmlBindings.table_body_btnCurrent).on('click', APDashboard.eventHandlers.table_body_btnCustNo_onClick)
  $(APDashboard.htmlBindings.table_body_btn11_30).on('click', APDashboard.eventHandlers.table_body_btnCustNo_onClick)
  $(APDashboard.htmlBindings.table_body_btn31_45).on('click', APDashboard.eventHandlers.table_body_btnCustNo_onClick)
  $(APDashboard.htmlBindings.table_body_btn46_60).on('click', APDashboard.eventHandlers.table_body_btnCustNo_onClick)
  $(APDashboard.htmlBindings.table_body_btn61_90).on('click', APDashboard.eventHandlers.table_body_btnCustNo_onClick)
  $(APDashboard.htmlBindings.table_body_btnMoreThan90).on('click',
    APDashboard.eventHandlers.table_body_btnCustNo_onClick)
  #    $('select.select2-nosearch').select2({minimumResultsForSearch: Infinity})
  this

APDashboard.functions.bindEventHandlers = ->
  $(APDashboard.htmlBindings.drpItemPerPage).on('click', APDashboard.eventHandlers.drpItemPerPage_onClick)
  $(APDashboard.htmlBindings.table_header_btnSort).on('click', APDashboard.eventHandlers.table_body_btnSort_onClick);
  $(APDashboard.htmlBindings.pager_btnPagerPages).on('click', APDashboard.eventHandlers.pager_btnPagerPages_onClick)
  APDashboard.functions.bindTableItemsEventHandlers();
  this

APDashboard.functions.modal_details_paginate = ->
  $.ajax(
    data:
      setname: APDashboard.status.currentSet
      page: APDashboard.status.modal_detail_CurrentPage
      itemsPerPage: APDashboard.status.modal_detail_ItemsPerPage
      vendno: APDashboard.status.currentVendno
      balance: APDashboard.status.currentBalance
    url: APDashboard.urls.getVendnoDetailPage
    type: 'post'
    beforeSend: ->
      $('.loading').show()
    success: (response) ->
      data = $.parseJSON(response)
      pager = new BootstrapPager(data,
        APDashboard.eventHandlers.modal_details_pager_btnPagerPages_onClick)
      pagerItems = pager.getCurrentPagedItems()
      pagerControl = pager.getPagerControl()
      $(APDashboard.htmlBindings.modal_Details_Pager_container).empty().append(pagerControl)
      APDashboard.functions.modal_details_updateTable(pagerItems);
      APDashboard.functions.updateDetailSumary(data)

      $('.loading').hide();
  )
  @

APDashboard.functions.modal_details_updateTable = (items) ->
  $table = $(APDashboard.htmlBindings.modal_Details_Table)
  $tableBody = $table.children('tbody')
  $tableBody.empty()


  for index of items
    if items.hasOwnProperty(index)
      $tableBody.append(APDashboard.functions.modal_details_buildTableItem(items[index], '', "item-field"))
  APDashboard.functions.modal_details_bindTableItemsEventHandlers();
  @

APDashboard.functions.modal_details_buildTableItem = (dataRow, trClass, tdClass) ->
  doc = global.document
  result = doc.createElement('tr')

  simpleTdBuilder = (data, tdClass) ->
    td = doc.createElement('td')
    td.className = tdClass
    td.appendChild(doc.createTextNode(data))
    td

  tdInvnoBuilder = ->
    simpleTdBuilder(dataRow.invno)

  tdInvdateBuilder = ->
    simpleTdBuilder(dataRow.invdate)

  tdDuedateBuilder = ->
    simpleTdBuilder(dataRow.duedate)

  tdItotalBuilder = ->
    simpleTdBuilder(accounting.formatMoney(dataRow.itotal, ''), 'currency')

  tdDisctotalBuilder = ->
    simpleTdBuilder(accounting.formatMoney(dataRow.disctotal, ''), 'currency')

  tdAmtpaidBuilder = ->
    simpleTdBuilder(accounting.formatMoney(dataRow.amtpaid, ''), 'currency')

  tdBalanceBuilder = ->
    simpleTdBuilder(accounting.formatMoney(dataRow.balance, ''), 'currency')

  tdRefnoBuilder = ->
    simpleTdBuilder(dataRow.refno)

  result.className = trClass
  result.appendChild(tdInvnoBuilder())
  result.appendChild(tdInvdateBuilder())
  result.appendChild(tdDuedateBuilder())
  result.appendChild(tdItotalBuilder())
  result.appendChild(tdDisctotalBuilder())
  result.appendChild(tdAmtpaidBuilder())
  result.appendChild(tdBalanceBuilder())
  result.appendChild(tdRefnoBuilder())
  result

APDashboard.functions.modal_details_bindTableItemsEventHandlers = ->
  this

APDashboard.eventHandlers = {}

APDashboard.eventHandlers.drpItemPerPage_onClick = (event) ->
  $target = $(event.target)
  value = $target.html()
  APDashboard.status.itemsPerPage = value
  $(APDashboard.htmlBindings.drpItemPerPageValue).text(value)

  # When change items per page, show page one
  APDashboard.status.currentPage = 1
  APDashboard.functions.paginate()
  @

APDashboard.eventHandlers.pager_btnPagerPages_onClick = (event) ->
  $target = $(event.target)
  value = $target.data('page')
  APDashboard.status.currentPage = value
  APDashboard.functions.paginate()
  @

APDashboard.eventHandlers.table_body_btnSort_onClick = (event) ->
  $target = $(event.target)
  sortingField = $target.data('field')

  if APDashboard.status.table_header_sortLastButton isnt null
    APDashboard.status.table_header_sortLastButton.removeClass('asc desc')

  if APDashboard.status.table_header_sortField isnt sortingField
    APDashboard.status.table_header_sortFieldOrder = ''

  APDashboard.status.table_header_sortField = sortingField

  if APDashboard.status.table_header_sortFieldOrder is 'ASC'
    APDashboard.status.table_header_sortFieldOrder = 'DESC'
    $target.addClass('asc').removeClass('desc')
  else
    APDashboard.status.table_header_sortFieldOrder = 'ASC'
    $target.addClass('desc').removeClass('asc')

  APDashboard.status.table_header_sortLastButton = $target
  APDashboard.functions.paginate()
  @

APDashboard.eventHandlers.table_body_btnCustNo_onClick = (event) ->
  $target = $(event.target)
  APDashboard.status.currentVendno = $target.data('vendno')
  APDashboard.status.currentBalance = $target.text().trim()
  if $target.attr('class') == APDashboard.htmlBindings.table_body_btnCustNo.slice(1)
    APDashboard.status.currentBalance = $target.parent().parent().children(':last').text()
    APDashboard.status.currentSet = "details";
  if $target.attr('class') == APDashboard.htmlBindings.table_body_btnCurrent.slice(1)
    APDashboard.status.currentSet = 'setCurrent'
  else if $target.attr('class') == APDashboard.htmlBindings.table_body_btn11_30.slice(1)
    APDashboard.status.currentSet = 'set11_30'
  else if $target.attr('class') == APDashboard.htmlBindings.table_body_btn31_45.slice(1)
    APDashboard.status.currentSet = 'set31_45'
  else if $target.attr('class') == APDashboard.htmlBindings.table_body_btn46_60.slice(1)
    APDashboard.status.currentSet = 'set45_60'
  else if $target.attr('class') == APDashboard.htmlBindings.table_body_btn61_90.slice(1)
    APDashboard.status.currentSet = 'set61_90'
  else if $target.attr('class') == APDashboard.htmlBindings.table_body_btnMoreThan90.slice(1)
    APDashboard.status.currentSet = 'setGreatherThan90'

  $.ajax({
    data:
      setname: APDashboard.status.currentSet
      vendno: APDashboard.status.currentVendno
      balance: APDashboard.status.currentBalance
    url: APDashboard.urls.getVendnoDetailPage
    type: 'post'
    beforeSend: ->
      $('.loading').show()
    success: (response, textStatus, jqXHR) ->
      data = $.parseJSON(response)
      pager = new BootstrapPager(data,
        APDashboard.eventHandlers.modal_details_pager_btnPagerPages_onClick)
      pagerItems = pager.getCurrentPagedItems()
      pagerControl = pager.getPagerControl()

      $(APDashboard.htmlBindings.modal_Details_Pager_container).empty().append(pagerControl)
      APDashboard.functions.modal_details_updateTable(pagerItems);

      APDashboard.functions.updateDetailSumary(data)

      $(APDashboard.htmlBindings.modal_Details).modal();

      $('.loading').hide()
  })
  @

APDashboard.eventHandlers.modal_details_pager_btnPagerPages_onClick = (event) ->
  $target = $(event.target)
  value = $target.data('page')
  APDashboard.status.modal_detail_CurrentPage = value
  APDashboard.status.currentSet
  APDashboard.functions.modal_details_paginate()
  @

APDashboard.init = (defaultUserFilter) ->
  APDashboard.status.itemsPerPage = $(APDashboard.htmlBindings.drpItemPerPageValue).text()
  DynamicFilter.init(defaultUserFilter)
  APDashboard.functions.bindEventHandlers()
