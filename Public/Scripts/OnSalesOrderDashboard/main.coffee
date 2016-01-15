global = window
$ = global.jQuery
App = global.App
dandelion = global.dandelion

OnSalesOrderDashboard = dandelion.namespace('App.OnSalesOrderDashboard', global)

DynamicFilter = App.OnSalesOrderDashboard.DynamicFilter

# Statuses Declaration
#-----------------------------------------------------------------------------------------------------------------------
OnSalesOrderDashboard.status = {}
OnSalesOrderDashboard.status.itemsPerPage = 50; # Default items per page value
OnSalesOrderDashboard.status.table_header_sortLastButton = null;
OnSalesOrderDashboard.status.table_header_sortField = 'ordnum'; # Default Order By Fields
OnSalesOrderDashboard.status.table_header_sortFieldOrder = 'ASC'; # Default Order
OnSalesOrderDashboard.status.currentPage = 1;
OnSalesOrderDashboard.status.currentItemNo = '';
OnSalesOrderDashboard.status.currentSet = 'details';
OnSalesOrderDashboard.status.currentBalance = "0.0";

# Dictionaries Declaration
#-----------------------------------------------------------------------------------------------------------------------
OnSalesOrderDashboard.dictionaries = {}

OnSalesOrderDashboard.htmlBindings = {}
OnSalesOrderDashboard.htmlBindings.container = '.container';
OnSalesOrderDashboard.htmlBindings.itemCounter = '#panelHeadingItemsCount';
OnSalesOrderDashboard.htmlBindings.drpItemPerPage = '.top-pager-itemmperpage-control a';
OnSalesOrderDashboard.htmlBindings.drpItemPerPageValue = '.top-pager-itemmperpage-control button span.value';
OnSalesOrderDashboard.htmlBindings.filterForm = '#filterForm';
OnSalesOrderDashboard.htmlBindings.table = '#OnSalesOrderDashboardTable';
OnSalesOrderDashboard.htmlBindings.table_header_btnSort = '.btn-table-sort';
OnSalesOrderDashboard.htmlBindings.table_body_btnCommitted = '.btn-committed-form-link'
OnSalesOrderDashboard.htmlBindings.table_body_btnOnorder = '.btn-onorder-form-link'
OnSalesOrderDashboard.htmlBindings.pager_container = '.pager-wrapper';
OnSalesOrderDashboard.htmlBindings.pager_btnPagerPages = '.pager-btn';

# Functions Declaration
#-----------------------------------------------------------------------------------------------------------------------
OnSalesOrderDashboard.functions = {}

OnSalesOrderDashboard.functions.paginate = ->
  $.ajax(
    data:
      itemno: OnSalesOrderDashboard.status.currentItemNo,
      predicate: OnSalesOrderDashboard.DynamicFilter.functions.getPredicate(),
      page: OnSalesOrderDashboard.status.currentPage,
      itemsPerPage: OnSalesOrderDashboard.status.itemsPerPage,
      orderby: OnSalesOrderDashboard.status.table_header_sortField,
      order: OnSalesOrderDashboard.status.table_header_sortFieldOrder
    url: OnSalesOrderDashboard.urls.getPage
    type: 'post'
    beforeSend: ->
      $('.loading').show()
    success: (response, textStatus, jqXHR) ->
      data = $.parseJSON(response)
      pager = new BootstrapPager(data, OnSalesOrderDashboard.eventHandlers.pager_btnPagerPages_onClick)
      pagerItems = pager.getCurrentPagedItems()
      pagerControl = pager.getPagerControl()

      $(OnSalesOrderDashboard.htmlBindings.pager_container)
      .empty()
      .append(pagerControl)

      OnSalesOrderDashboard.functions.updateTable(pagerItems)

      $(OnSalesOrderDashboard.htmlBindings.itemCounter).html(pager.itemsCount)
      $('.loading').hide()
  )
  @

OnSalesOrderDashboard.functions.updateTable = (items) ->
  $table = $(OnSalesOrderDashboard.htmlBindings.table)
  $tableBody = $table.children('tbody')

  $tableBody.empty()

  for index of items #  using comprehensions for iterating over properties in objects
    if items.hasOwnProperty(index)
      $tableBody.append(OnSalesOrderDashboard.functions.buildTableItem(items[index], '', "item-field"));

  OnSalesOrderDashboard.functions.bindTableItemsEventHandlers();
  @

OnSalesOrderDashboard.functions.buildTableItem = (dataRow, trClass, tdClass) ->
  doc = global.document
  result = doc.createElement('tr')

  simpleTdBuilder = (data, tdClass) ->
    td = doc.createElement('td')
    td.className = tdClass
    td.appendChild(doc.createTextNode(data))
    td;

  withLinkTdBuilder = (data, linkClassName, tdLinkClass, href = '#') ->
    td = doc.createElement('td')
    a = doc.createElement('a')

    a.href = href
    a.className = linkClassName
    a.dataset.custno = dataRow.custno

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



  tdOrdnumBuilder = ->
    simpleTdBuilder(dataRow.ordnum)

  tdPonumBuilder = ->
    simpleTdBuilder(dataRow.ponum)

  tdCustnoBuilder = ->
    simpleTdBuilder(dataRow.custno)

  tdCompanyBuilder = ->
    simpleTdBuilder(dataRow.company)

  tdPodateBuilder = ->
    simpleTdBuilder(dataRow.podate)

  tdQtyordBuilder = ->
    simpleTdBuilder(dataRow.qtyord, 'number')

  tdQtyshpBuilder = ->
    simpleTdBuilder(dataRow.qtyshp, 'number')

  tdBckordBuilder = ->
    simpleTdBuilder(dataRow.bckord, 'number')

  tdQtyshp0Builder = ->
    simpleTdBuilder(dataRow.qtyshp0, 'number')

  tdQtyshprelBuilder = ->
    simpleTdBuilder(dataRow.qtyshprel, 'number')

  tdShipdateBuilder = ->
    simpleTdBuilder(dataRow.shipdate)

  result.className = trClass;
  result.appendChild(tdOrdnumBuilder());
  result.appendChild(tdPonumBuilder());
  result.appendChild(tdCustnoBuilder());
  result.appendChild(tdCompanyBuilder());
  result.appendChild(tdPodateBuilder());
  result.appendChild(tdQtyordBuilder());
  result.appendChild(tdQtyshpBuilder());
  result.appendChild(tdBckordBuilder());
  result.appendChild(tdQtyshp0Builder());
  result.appendChild(tdQtyshprelBuilder());
  result.appendChild(tdShipdateBuilder());
  result

OnSalesOrderDashboard.functions.bindTableItemsEventHandlers = ->
#  $(ARDashboard.htmlBindings.table_body_btnCustNo).on('click', ARDashboard.eventHandlers.table_body_btnCustNo_onClick)
#  $('select.select2-nosearch').select2({minimumResultsForSearch: Infinity})
  @

OnSalesOrderDashboard.functions.bindEventHandlers = ->
  $(OnSalesOrderDashboard.htmlBindings.drpItemPerPage).on('click', OnSalesOrderDashboard.eventHandlers.drpItemPerPage_onClick)
  $(OnSalesOrderDashboard.htmlBindings.table_header_btnSort).on('click', OnSalesOrderDashboard.eventHandlers.table_body_btnSort_onClick);
  $(OnSalesOrderDashboard.htmlBindings.pager_btnPagerPages).on('click', OnSalesOrderDashboard.eventHandlers.pager_btnPagerPages_onClick)
  OnSalesOrderDashboard.functions.bindTableItemsEventHandlers();
  @

# Event Handlers Declaration
#-----------------------------------------------------------------------------------------------------------------------
OnSalesOrderDashboard.eventHandlers = {}

OnSalesOrderDashboard.eventHandlers.drpItemPerPage_onClick = (event) ->
  $target = $(event.target)
  value = $target.html()
  OnSalesOrderDashboard.status.itemsPerPage = value
  $(OnSalesOrderDashboard.htmlBindings.drpItemPerPageValue).text(value)

  # When change items per page, show page one
  OnSalesOrderDashboard.status.currentPage = 1
  OnSalesOrderDashboard.functions.paginate()
  @

OnSalesOrderDashboard.eventHandlers.pager_btnPagerPages_onClick = (event) ->
  $target = $(event.target)
  value = $target.data('page')
  OnSalesOrderDashboard.status.currentPage = value
  OnSalesOrderDashboard.functions.paginate()
  @

OnSalesOrderDashboard.eventHandlers.table_body_btnSort_onClick = (event) ->
  $target = $(event.target)
  sortingField = $target.data('field')

  if OnSalesOrderDashboard.status.table_header_sortLastButton isnt null
    OnSalesOrderDashboard.status.table_header_sortLastButton.removeClass('asc desc')

  if OnSalesOrderDashboard.status.table_header_sortField isnt sortingField
    OnSalesOrderDashboard.status.table_header_sortFieldOrder = ''

  OnSalesOrderDashboard.status.table_header_sortField = sortingField

  if OnSalesOrderDashboard.status.table_header_sortFieldOrder is 'ASC'
    OnSalesOrderDashboard.status.table_header_sortFieldOrder = 'DESC'
    $target.addClass('asc').removeClass('desc')
  else
    OnSalesOrderDashboard.status.table_header_sortFieldOrder = 'ASC'
    $target.addClass('desc').removeClass('asc')

  OnSalesOrderDashboard.status.table_header_sortLastButton = $target
  OnSalesOrderDashboard.functions.paginate()
  @

OnSalesOrderDashboard.init = (itemno, defaultUserFilter) ->
  OnSalesOrderDashboard.status.currentItemNo = itemno
  OnSalesOrderDashboard.status.itemsPerPage = $(OnSalesOrderDashboard.htmlBindings.drpItemPerPageValue).text()
  DynamicFilter.init(defaultUserFilter)
  OnSalesOrderDashboard.functions.bindEventHandlers()
  @