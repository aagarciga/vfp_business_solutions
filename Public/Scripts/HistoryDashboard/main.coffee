global = window
$ = global.jQuery
App = global.App
dandelion = global.dandelion

HistoryDashboard = dandelion.namespace('App.HistoryDashboard', global)

DynamicFilter = App.HistoryDashboard.DynamicFilter

# Statuses Declaration
#-----------------------------------------------------------------------------------------------------------------------
HistoryDashboard.status = {}
HistoryDashboard.status.itemsPerPage = 50; # Default items per page value
HistoryDashboard.status.table_header_sortLastButton = null;
HistoryDashboard.status.table_header_sortField = 'equipid'; # Default Order By Fields
HistoryDashboard.status.table_header_sortFieldOrder = 'ASC'; # Default Order
HistoryDashboard.status.currentPage = 1;
HistoryDashboard.status.currentEquipid = '';
HistoryDashboard.status.currentSet = 'details';
HistoryDashboard.status.currentBalance = "0.0";

# Dictionaries Declaration
#-----------------------------------------------------------------------------------------------------------------------
HistoryDashboard.dictionaries = {}

HistoryDashboard.htmlBindings = {}
HistoryDashboard.htmlBindings.container = '.container';
HistoryDashboard.htmlBindings.itemCounter = '#panelHeadingItemsCount';
HistoryDashboard.htmlBindings.drpItemPerPage = '.top-pager-itemmperpage-control a';
HistoryDashboard.htmlBindings.drpItemPerPageValue = '.top-pager-itemmperpage-control button span.value';
HistoryDashboard.htmlBindings.filterForm = '#filterForm';
HistoryDashboard.htmlBindings.table = '#HistoryDashboardTable';
HistoryDashboard.htmlBindings.table_header_btnSort = '.btn-table-sort';
HistoryDashboard.htmlBindings.table_body_btnCommitted = '.btn-committed-form-link'
HistoryDashboard.htmlBindings.table_body_btnOnorder = '.btn-onorder-form-link'
HistoryDashboard.htmlBindings.pager_container = '.pager-wrapper';
HistoryDashboard.htmlBindings.pager_btnPagerPages = '.pager-btn';

# Functions Declaration
#-----------------------------------------------------------------------------------------------------------------------
HistoryDashboard.functions = {}

HistoryDashboard.functions.paginate = ->
  filterTree = App.HistoryDashboard.DynamicFilter.functions.getFilterTree()
  jsonFilterTree = JSON.stringify(filterTree)
  $.ajax(
    data:
      equipid : HistoryDashboard.status.currentEquipid
      filterTree: jsonFilterTree,
      page: HistoryDashboard.status.currentPage,
      itemsPerPage: HistoryDashboard.status.itemsPerPage,
      orderby: HistoryDashboard.status.table_header_sortField,
      order: HistoryDashboard.status.table_header_sortFieldOrder
    url: HistoryDashboard.urls.getPage
    type: 'post'
    beforeSend: ->
      $('.loading').show()
    success: (response, textStatus, jqXHR) ->
      data = $.parseJSON(response)
      pager = new BootstrapPager(data, HistoryDashboard.eventHandlers.pager_btnPagerPages_onClick)
      pagerItems = pager.getCurrentPagedItems()
      pagerControl = pager.getPagerControl()

      $(HistoryDashboard.htmlBindings.pager_container)
      .empty()
      .append(pagerControl)

      HistoryDashboard.functions.updateTable(pagerItems)

      $(HistoryDashboard.htmlBindings.itemCounter).html(pager.itemsCount)
      $('.loading').hide()
  )
  @

HistoryDashboard.functions.updateTable = (items) ->
  $table = $(HistoryDashboard.htmlBindings.table)
  $tableBody = $table.children('tbody')

  $tableBody.empty()

  for index of items #  using comprehensions for iterating over properties in objects
    if items.hasOwnProperty(index)
      $tableBody.append(HistoryDashboard.functions.buildTableItem(items[index], '', "item-field"));

  HistoryDashboard.functions.bindTableItemsEventHandlers();
  @

HistoryDashboard.functions.buildTableItem = (dataRow, trClass, tdClass) ->
  doc = global.document
  result = doc.createElement('tr')

  tdEquipIdBuilder = ->
    App.Helpers.simpleTdBuilder(dataRow.equipid, '')
  tdOrdNumBuilder = ->
    App.Helpers.simpleTdBuilder(dataRow.ordnum, '')
  tdInspectNoBuilder = ->
    App.Helpers.simpleTdBuilder(dataRow.inspectno, '')
  tdInstallDteBuilder = ->
    App.Helpers.simpleTdBuilder(dataRow.installdte, '')
  tdExpDteInBuilder = ->
    App.Helpers.simpleTdBuilder(dataRow.expdtein, '')
  tdDateRecBuilder = ->
    App.Helpers.simpleTdBuilder(dataRow.daterec, '')

  result.className = trClass;
  result.appendChild(tdEquipIdBuilder());
  result.appendChild(tdOrdNumBuilder());
  result.appendChild(tdInspectNoBuilder());
  result.appendChild(tdInstallDteBuilder());
  result.appendChild(tdExpDteInBuilder());
  result.appendChild(tdDateRecBuilder());
  result

HistoryDashboard.functions.bindTableItemsEventHandlers = ->
#  $(ARDashboard.htmlBindings.table_body_btnCustNo).on('click', ARDashboard.eventHandlers.table_body_btnCustNo_onClick)
#  $('select.select2-nosearch').select2({minimumResultsForSearch: Infinity})

  @

HistoryDashboard.functions.bindEventHandlers = ->
  $(HistoryDashboard.htmlBindings.drpItemPerPage).on('click',
    HistoryDashboard.eventHandlers.drpItemPerPage_onClick)
  $(HistoryDashboard.htmlBindings.table_header_btnSort).on('click',
    HistoryDashboard.eventHandlers.table_body_btnSort_onClick);
  $(HistoryDashboard.htmlBindings.pager_btnPagerPages).on('click',
    HistoryDashboard.eventHandlers.pager_btnPagerPages_onClick)
  HistoryDashboard.functions.bindTableItemsEventHandlers();
  @

# Event Handlers Declaration
#-----------------------------------------------------------------------------------------------------------------------
HistoryDashboard.eventHandlers = {}

HistoryDashboard.eventHandlers.drpItemPerPage_onClick = (event) ->
  $target = $(event.target)
  value = $target.html()
  HistoryDashboard.status.itemsPerPage = value
  $(HistoryDashboard.htmlBindings.drpItemPerPageValue).text(value)

  # When change items per page, show page one
  HistoryDashboard.status.currentPage = 1
  HistoryDashboard.functions.paginate()
  @

HistoryDashboard.eventHandlers.pager_btnPagerPages_onClick = (event) ->
  $target = $(event.target)
  value = $target.data('page')
  HistoryDashboard.status.currentPage = value
  HistoryDashboard.functions.paginate()
  @

HistoryDashboard.eventHandlers.table_body_btnSort_onClick = (event) ->
  $target = $(event.target)
  sortingField = $target.data('field')

  if HistoryDashboard.status.table_header_sortLastButton isnt null
    HistoryDashboard.status.table_header_sortLastButton.removeClass('asc desc')

  if HistoryDashboard.status.table_header_sortField isnt sortingField
    HistoryDashboard.status.table_header_sortFieldOrder = ''

  HistoryDashboard.status.table_header_sortField = sortingField

  if HistoryDashboard.status.table_header_sortFieldOrder is 'ASC'
    HistoryDashboard.status.table_header_sortFieldOrder = 'DESC'
    $target.addClass('asc').removeClass('desc')
  else
    HistoryDashboard.status.table_header_sortFieldOrder = 'ASC'
    $target.addClass('desc').removeClass('asc')

  HistoryDashboard.status.table_header_sortLastButton = $target
  HistoryDashboard.functions.paginate()
  @

HistoryDashboard.init = (defaultUserFilter, fieldsDefinition, equipid) ->
  HistoryDashboard.status.fieldsDefinition = $.parseJSON(fieldsDefinition)

  HistoryDashboard.status.currentEquipid = equipid
  HistoryDashboard.status.itemsPerPage = $(HistoryDashboard.htmlBindings.drpItemPerPageValue).text()
  DynamicFilter.init(defaultUserFilter, HistoryDashboard.status.fieldsDefinition, equipid)
  HistoryDashboard.functions.bindEventHandlers()
  @