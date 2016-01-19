global = window
$ = global.jQuery
App = global.App
dandelion = global.dandelion

InventoryDashboard = dandelion.namespace('App.InventoryDashboard', global)

DynamicFilter = App.InventoryDashboard.DynamicFilter

# Statuses Declaration
#-----------------------------------------------------------------------------------------------------------------------
InventoryDashboard.status = {}
InventoryDashboard.status.itemsPerPage = 50; # Default items per page value
InventoryDashboard.status.table_header_sortLastButton = null;
InventoryDashboard.status.table_header_sortField = 'itemno'; # Default Order By Fields
InventoryDashboard.status.table_header_sortFieldOrder = 'ASC'; # Default Order
InventoryDashboard.status.currentPage = 1;
InventoryDashboard.status.currentCustno = '';
InventoryDashboard.status.currentSet = 'details';
InventoryDashboard.status.currentBalance = "0.0";

# Dictionaries Declaration
#-----------------------------------------------------------------------------------------------------------------------
InventoryDashboard.dictionaries = {}

InventoryDashboard.htmlBindings = {}
InventoryDashboard.htmlBindings.container = '.container';
InventoryDashboard.htmlBindings.itemCounter = '#panelHeadingItemsCount';
InventoryDashboard.htmlBindings.drpItemPerPage = '.top-pager-itemmperpage-control a';
InventoryDashboard.htmlBindings.drpItemPerPageValue = '.top-pager-itemmperpage-control button span.value';
InventoryDashboard.htmlBindings.filterForm = '#filterForm';
InventoryDashboard.htmlBindings.table = '#inventoryDashboardTable';
InventoryDashboard.htmlBindings.table_header_btnSort = '.btn-table-sort';
InventoryDashboard.htmlBindings.table_body_btnCommitted = '.btn-committed-form-link'
InventoryDashboard.htmlBindings.table_body_btnOnorder = '.btn-onorder-form-link'
InventoryDashboard.htmlBindings.pager_container = '.pager-wrapper';
InventoryDashboard.htmlBindings.pager_btnPagerPages = '.pager-btn';

# Functions Declaration
#-----------------------------------------------------------------------------------------------------------------------
InventoryDashboard.functions = {}

InventoryDashboard.functions.paginate = ->
  $.ajax(
    data:
      predicate: InventoryDashboard.DynamicFilter.functions.getPredicate(),
      page: InventoryDashboard.status.currentPage,
      itemsPerPage: InventoryDashboard.status.itemsPerPage,
      orderby: InventoryDashboard.status.table_header_sortField,
      order: InventoryDashboard.status.table_header_sortFieldOrder
    url: InventoryDashboard.urls.getPage
    type: 'post'
    beforeSend: ->
      $('.loading').show()
    success: (response, textStatus, jqXHR) ->
      data = $.parseJSON(response)
      pager = new BootstrapPager(data, InventoryDashboard.eventHandlers.pager_btnPagerPages_onClick)
      pagerItems = pager.getCurrentPagedItems()
      pagerControl = pager.getPagerControl()

      $(InventoryDashboard.htmlBindings.pager_container)
      .empty()
      .append(pagerControl)

      InventoryDashboard.functions.updateTable(pagerItems)

      $(InventoryDashboard.htmlBindings.itemCounter).html(pager.itemsCount)
      $('.loading').hide()
  )
  @

InventoryDashboard.functions.updateTable = (items) ->
  $table = $(InventoryDashboard.htmlBindings.table)
  $tableBody = $table.children('tbody')

  $tableBody.empty()

  for index of items #  using comprehensions for iterating over properties in objects
    if items.hasOwnProperty(index)
      $tableBody.append(InventoryDashboard.functions.buildTableItem(items[index], '', "item-field"));

  InventoryDashboard.functions.bindTableItemsEventHandlers();
  @

InventoryDashboard.functions.buildTableItem = (dataRow, trClass, tdClass) ->
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

  tdItemNoBuilder = ->
#    withLinkTdBuilder(dataRow.custno, ARDashboard.htmlBindings.table_body_btnCustNo.slice(1))
    simpleTdBuilder(dataRow.itemno)

  tdItmwhsBuilder = ->
    simpleTdBuilder(dataRow.itmwhs)

  tdDescripBuilder = ->
    simpleTdBuilder(dataRow.descrip)

  tdOnhandBuilder = ->
    simpleTdBuilder(dataRow.onhand, 'number')

  tdOnorderBuilder = ->
    withLinkTdBuilder(dataRow.onorder, InventoryDashboard.htmlBindings.table_body_btnOnorder.slice(1), 'number', dataRow.onorderHref)

  tdCommittedBuilder = ->
    withLinkTdBuilder(dataRow.committed,InventoryDashboard.htmlBindings.table_body_btnCommitted.slice(1), 'number', dataRow.committedHref)

  result.className = trClass;
  result.appendChild(tdItemNoBuilder());
  result.appendChild(tdItmwhsBuilder());
  result.appendChild(tdDescripBuilder());
  result.appendChild(tdOnhandBuilder());
  result.appendChild(tdOnorderBuilder());
  result.appendChild(tdCommittedBuilder());
  result

InventoryDashboard.functions.bindTableItemsEventHandlers = ->
#  $(ARDashboard.htmlBindings.table_body_btnCustNo).on('click', ARDashboard.eventHandlers.table_body_btnCustNo_onClick)
#  $('select.select2-nosearch').select2({minimumResultsForSearch: Infinity})
  @

InventoryDashboard.functions.bindEventHandlers = ->
  $(InventoryDashboard.htmlBindings.drpItemPerPage).on('click', InventoryDashboard.eventHandlers.drpItemPerPage_onClick)
  $(InventoryDashboard.htmlBindings.table_header_btnSort).on('click', InventoryDashboard.eventHandlers.table_body_btnSort_onClick);
  $(InventoryDashboard.htmlBindings.pager_btnPagerPages).on('click', InventoryDashboard.eventHandlers.pager_btnPagerPages_onClick)
  InventoryDashboard.functions.bindTableItemsEventHandlers();
  @

# Event Handlers Declaration
#-----------------------------------------------------------------------------------------------------------------------
InventoryDashboard.eventHandlers = {}

InventoryDashboard.eventHandlers.drpItemPerPage_onClick = (event) ->
  $target = $(event.target)
  value = $target.html()
  InventoryDashboard.status.itemsPerPage = value
  $(InventoryDashboard.htmlBindings.drpItemPerPageValue).text(value)

  # When change items per page, show page one
  InventoryDashboard.status.currentPage = 1
  InventoryDashboard.functions.paginate()
  @

InventoryDashboard.eventHandlers.pager_btnPagerPages_onClick = (event) ->
  $target = $(event.target)
  value = $target.data('page')
  InventoryDashboard.status.currentPage = value
  InventoryDashboard.functions.paginate()
  @

InventoryDashboard.eventHandlers.table_body_btnSort_onClick = (event) ->
  $target = $(event.target)
  sortingField = $target.data('field')

  if InventoryDashboard.status.table_header_sortLastButton isnt null
    InventoryDashboard.status.table_header_sortLastButton.removeClass('asc desc')

  if InventoryDashboard.status.table_header_sortField isnt sortingField
    InventoryDashboard.status.table_header_sortFieldOrder = ''

  InventoryDashboard.status.table_header_sortField = sortingField

  if InventoryDashboard.status.table_header_sortFieldOrder is 'ASC'
    InventoryDashboard.status.table_header_sortFieldOrder = 'DESC'
    $target.addClass('asc').removeClass('desc')
  else
    InventoryDashboard.status.table_header_sortFieldOrder = 'ASC'
    $target.addClass('desc').removeClass('asc')

  InventoryDashboard.status.table_header_sortLastButton = $target
  InventoryDashboard.functions.paginate()
  @

InventoryDashboard.init = (defaultUserFilter) ->
  InventoryDashboard.status.itemsPerPage = $(InventoryDashboard.htmlBindings.drpItemPerPageValue).text()
  DynamicFilter.init(defaultUserFilter)
  InventoryDashboard.functions.bindEventHandlers()
  @