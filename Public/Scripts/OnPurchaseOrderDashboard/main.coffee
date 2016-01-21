global = window
$ = global.jQuery
App = global.App
dandelion = global.dandelion

OnPurchaseOrderDashboard = dandelion.namespace('App.OnPurchaseOrderDashboard', global)

DynamicFilter = App.OnPurchaseOrderDashboard.DynamicFilter

# Statuses Declaration
#-----------------------------------------------------------------------------------------------------------------------
OnPurchaseOrderDashboard.status = {}
OnPurchaseOrderDashboard.status.itemsPerPage = 50; # Default items per page value
OnPurchaseOrderDashboard.status.table_header_sortLastButton = null;
OnPurchaseOrderDashboard.status.table_header_sortField = 'pono'; # Default Order By Fields
OnPurchaseOrderDashboard.status.table_header_sortFieldOrder = 'ASC'; # Default Order
OnPurchaseOrderDashboard.status.currentPage = 1;
OnPurchaseOrderDashboard.status.currentItemNo = '';
OnPurchaseOrderDashboard.status.currentSet = 'details';
OnPurchaseOrderDashboard.status.currentBalance = "0.0";

# Dictionaries Declaration
#-----------------------------------------------------------------------------------------------------------------------
OnPurchaseOrderDashboard.dictionaries = {}

OnPurchaseOrderDashboard.htmlBindings = {}
OnPurchaseOrderDashboard.htmlBindings.container = '.container';
OnPurchaseOrderDashboard.htmlBindings.itemCounter = '#panelHeadingItemsCount';
OnPurchaseOrderDashboard.htmlBindings.drpItemPerPage = '.top-pager-itemmperpage-control a';
OnPurchaseOrderDashboard.htmlBindings.drpItemPerPageValue = '.top-pager-itemmperpage-control button span.value';
OnPurchaseOrderDashboard.htmlBindings.filterForm = '#filterForm';
OnPurchaseOrderDashboard.htmlBindings.table = '#OnPurchaseOrderDashboardTable';
OnPurchaseOrderDashboard.htmlBindings.table_header_btnSort = '.btn-table-sort';
OnPurchaseOrderDashboard.htmlBindings.table_body_btnCommitted = '.btn-committed-form-link'
OnPurchaseOrderDashboard.htmlBindings.table_body_btnOnorder = '.btn-onorder-form-link'
OnPurchaseOrderDashboard.htmlBindings.pager_container = '.pager-wrapper';
OnPurchaseOrderDashboard.htmlBindings.pager_btnPagerPages = '.pager-btn';

# Functions Declaration
#-----------------------------------------------------------------------------------------------------------------------
OnPurchaseOrderDashboard.functions = {}

OnPurchaseOrderDashboard.functions.paginate = ->
  $.ajax(
    data:
      itemno: OnPurchaseOrderDashboard.status.currentItemNo,
      itemwhs: OnPurchaseOrderDashboard.status.currentItemWhs,
      predicate: OnPurchaseOrderDashboard.DynamicFilter.functions.getPredicate(),
      page: OnPurchaseOrderDashboard.status.currentPage,
      itemsPerPage: OnPurchaseOrderDashboard.status.itemsPerPage,
      orderby: OnPurchaseOrderDashboard.status.table_header_sortField,
      order: OnPurchaseOrderDashboard.status.table_header_sortFieldOrder
    url: OnPurchaseOrderDashboard.urls.getPage
    type: 'post'
    beforeSend: ->
      $('.loading').show()
    success: (response, textStatus, jqXHR) ->
      data = $.parseJSON(response)
      pager = new BootstrapPager(data, OnPurchaseOrderDashboard.eventHandlers.pager_btnPagerPages_onClick)
      pagerItems = pager.getCurrentPagedItems()
      pagerControl = pager.getPagerControl()

      $(OnPurchaseOrderDashboard.htmlBindings.pager_container)
      .empty()
      .append(pagerControl)

      OnPurchaseOrderDashboard.functions.updateTable(pagerItems)

      $(OnPurchaseOrderDashboard.htmlBindings.itemCounter).html(pager.itemsCount)
      $('.loading').hide()
  )
  @

OnPurchaseOrderDashboard.functions.updateTable = (items) ->
  $table = $(OnPurchaseOrderDashboard.htmlBindings.table)
  $tableBody = $table.children('tbody')

  $tableBody.empty()

  for index of items #  using comprehensions for iterating over properties in objects
    if items.hasOwnProperty(index)
      $tableBody.append(OnPurchaseOrderDashboard.functions.buildTableItem(items[index], '', "item-field"));

  OnPurchaseOrderDashboard.functions.bindTableItemsEventHandlers();
  @

OnPurchaseOrderDashboard.functions.buildTableItem = (dataRow, trClass, tdClass) ->
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


  tdPoNoBuilder = ->
    simpleTdBuilder(dataRow.pono)

  tdVendNoBuilder = ->
    simpleTdBuilder(dataRow.vendno)

  tdPoDateBuilder = ->
    simpleTdBuilder(dataRow.podate)

  tdQtyOrdBuilder = ->
    simpleTdBuilder(dataRow.qtyord, 'number')

  tdQtyRecBuilder = ->
    simpleTdBuilder(dataRow.qtyrec, 'number')

  tdQtyLeftBuilder = ->
    simpleTdBuilder(dataRow.qtyleft, 'number')

  tdShippedBuilder = ->
    simpleTdBuilder(dataRow.shipped)

  tdPoTypeBuilder = ->
    simpleTdBuilder(dataRow.potype)

  result.className = trClass;
  result.appendChild(tdPoNoBuilder());
  result.appendChild(tdVendNoBuilder());
  result.appendChild(tdPoDateBuilder());
  result.appendChild(tdQtyOrdBuilder());
  result.appendChild(tdQtyRecBuilder());
  result.appendChild(tdQtyLeftBuilder());
  result.appendChild(tdShippedBuilder());
  result.appendChild(tdPoTypeBuilder());
  result

OnPurchaseOrderDashboard.functions.bindTableItemsEventHandlers = ->
#  $(ARDashboard.htmlBindings.table_body_btnCustNo).on('click', ARDashboard.eventHandlers.table_body_btnCustNo_onClick)
#  $('select.select2-nosearch').select2({minimumResultsForSearch: Infinity})
  @

OnPurchaseOrderDashboard.functions.bindEventHandlers = ->
  $(OnPurchaseOrderDashboard.htmlBindings.drpItemPerPage).on('click',
    OnPurchaseOrderDashboard.eventHandlers.drpItemPerPage_onClick)
  $(OnPurchaseOrderDashboard.htmlBindings.table_header_btnSort).on('click',
    OnPurchaseOrderDashboard.eventHandlers.table_body_btnSort_onClick);
  $(OnPurchaseOrderDashboard.htmlBindings.pager_btnPagerPages).on('click',
    OnPurchaseOrderDashboard.eventHandlers.pager_btnPagerPages_onClick)
  OnPurchaseOrderDashboard.functions.bindTableItemsEventHandlers();
  @

# Event Handlers Declaration
#-----------------------------------------------------------------------------------------------------------------------
OnPurchaseOrderDashboard.eventHandlers = {}

OnPurchaseOrderDashboard.eventHandlers.drpItemPerPage_onClick = (event) ->
  $target = $(event.target)
  value = $target.html()
  OnPurchaseOrderDashboard.status.itemsPerPage = value
  $(OnPurchaseOrderDashboard.htmlBindings.drpItemPerPageValue).text(value)

  # When change items per page, show page one
  OnPurchaseOrderDashboard.status.currentPage = 1
  OnPurchaseOrderDashboard.functions.paginate()
  @

OnPurchaseOrderDashboard.eventHandlers.pager_btnPagerPages_onClick = (event) ->
  $target = $(event.target)
  value = $target.data('page')
  OnPurchaseOrderDashboard.status.currentPage = value
  OnPurchaseOrderDashboard.functions.paginate()
  @

OnPurchaseOrderDashboard.eventHandlers.table_body_btnSort_onClick = (event) ->
  $target = $(event.target)
  sortingField = $target.data('field')

  if OnPurchaseOrderDashboard.status.table_header_sortLastButton isnt null
    OnPurchaseOrderDashboard.status.table_header_sortLastButton.removeClass('asc desc')

  if OnPurchaseOrderDashboard.status.table_header_sortField isnt sortingField
    OnPurchaseOrderDashboard.status.table_header_sortFieldOrder = ''

  OnPurchaseOrderDashboard.status.table_header_sortField = sortingField

  if OnPurchaseOrderDashboard.status.table_header_sortFieldOrder is 'ASC'
    OnPurchaseOrderDashboard.status.table_header_sortFieldOrder = 'DESC'
    $target.addClass('asc').removeClass('desc')
  else
    OnPurchaseOrderDashboard.status.table_header_sortFieldOrder = 'ASC'
    $target.addClass('desc').removeClass('asc')

  OnPurchaseOrderDashboard.status.table_header_sortLastButton = $target
  OnPurchaseOrderDashboard.functions.paginate()
  @

OnPurchaseOrderDashboard.init = (itemno, itemwhs, defaultUserFilter) ->
  OnPurchaseOrderDashboard.status.currentItemNo = itemno
  OnPurchaseOrderDashboard.status.currentItemWhs = itemwhs
  OnPurchaseOrderDashboard.status.itemsPerPage = $(OnPurchaseOrderDashboard.htmlBindings.drpItemPerPageValue).text()
  DynamicFilter.init(defaultUserFilter)
  OnPurchaseOrderDashboard.functions.bindEventHandlers()
  @