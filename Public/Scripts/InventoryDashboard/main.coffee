global = window
$ = global.jQuery
App = global.App
dandelion = global.dandelion

InventoryDashboard = dandelion.namespace('App.InventoryDashboard', global)

DynamicFilter = App.InventoryDashboard.DynamicFilter
ProjectFiles  = App.InventoryDashboard.ProjectFiles;

# Statuses Declaration
#-----------------------------------------------------------------------------------------------------------------------
InventoryDashboard.status = {}
InventoryDashboard.status.itemsPerPage = 50; # Default items per page value
InventoryDashboard.status.table_header_sortLastButton = null;
InventoryDashboard.status.table_header_sortField = 'itemno'; # Default Order By Fields
InventoryDashboard.status.table_header_sortFieldOrder = 'ASC'; # Default Order
InventoryDashboard.status.currentPage = 1;
InventoryDashboard.status.currentItemno = '';
InventoryDashboard.status.currentSet = 'details';
InventoryDashboard.status.currentBalance = "0.0";

# Dictionaries Declaration
#-----------------------------------------------------------------------------------------------------------------------
InventoryDashboard.dictionaries = {}

InventoryDashboard.htmlBindings = {}
InventoryDashboard.htmlBindings.container = '.container'
InventoryDashboard.htmlBindings.itemCounter = '#panelHeadingItemsCount'
InventoryDashboard.htmlBindings.drpItemPerPage = '.top-pager-itemmperpage-control a'
InventoryDashboard.htmlBindings.drpItemPerPageValue = '.top-pager-itemmperpage-control button span.value'
InventoryDashboard.htmlBindings.filterForm = '#filterForm'
InventoryDashboard.htmlBindings.table = '#inventoryDashboardTable'
InventoryDashboard.htmlBindings.table_header_btnSort = '.btn-table-sort'
InventoryDashboard.htmlBindings.table_body_btnCommitted = '.btn-committed-form-link'
InventoryDashboard.htmlBindings.table_body_btnOnorder = '.btn-onorder-form-link'
InventoryDashboard.htmlBindings.table_body_btnAttach = '.btn-files-dialog'
InventoryDashboard.htmlBindings.pager_container = '.pager-wrapper'
InventoryDashboard.htmlBindings.pager_btnPagerPages = '.pager-btn'

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

  tdItemNoBuilder = ->
    App.Helpers.simpleTdBuilder(dataRow.itemno, '')

  tdItmwhsBuilder = ->
    App.Helpers.simpleTdBuilder(dataRow.itmwhs, '')

  tdDescripBuilder = ->
    App.Helpers.simpleTdBuilder(dataRow.descrip, '')

  tdOnhandBuilder = ->
    App.Helpers.simpleTdBuilder(dataRow.onhand, 'number')

  tdOnorderBuilder = ->
    App.Helpers.withLinkTdBuilder(dataRow.onorder, 'number', InventoryDashboard.htmlBindings.table_body_btnOnorder.slice(1), dataRow.onorderHref, {})

  tdCommittedBuilder = ->
    App.Helpers.withLinkTdBuilder(dataRow.committed, 'number', InventoryDashboard.htmlBindings.table_body_btnCommitted.slice(1), dataRow.committedHref, {})

  tdAttachedFilesBuilder = () ->
    spanGlyphIcon = doc.createElement('span')
    spanGlyphIcon.className = 'glyphicon glyphicon-folder-close'
    App.Helpers.withLinkTdBuilder(spanGlyphIcon, 'item-action item-files', InventoryDashboard.htmlBindings.table_body_btnAttach.slice(1), "#", {itemno: dataRow.itemno})

  result.className = trClass;
  result.appendChild(tdItemNoBuilder());
  result.appendChild(tdItmwhsBuilder());
  result.appendChild(tdDescripBuilder());
  result.appendChild(tdOnhandBuilder());
  result.appendChild(tdOnorderBuilder());
  result.appendChild(tdCommittedBuilder());
  result.appendChild(tdAttachedFilesBuilder());
  result

InventoryDashboard.functions.bindTableItemsEventHandlers = ->
#  $(ARDashboard.htmlBindings.table_body_btnCustNo).on('click', ARDashboard.eventHandlers.table_body_btnCustNo_onClick)
#  $('select.select2-nosearch').select2({minimumResultsForSearch: Infinity})
  $(InventoryDashboard.htmlBindings.table_body_btnAttach).on('click', InventoryDashboard.eventHandlers.table_body_btnAttach_onClick)
  @

InventoryDashboard.functions.bindEventHandlers = ->
  $(InventoryDashboard.htmlBindings.drpItemPerPage).on('click', InventoryDashboard.eventHandlers.drpItemPerPage_onClick)
  $(InventoryDashboard.htmlBindings.table_header_btnSort).on('click', InventoryDashboard.eventHandlers.table_body_btnSort_onClick)
  $(InventoryDashboard.htmlBindings.pager_btnPagerPages).on('click', InventoryDashboard.eventHandlers.pager_btnPagerPages_onClick)
  $(InventoryDashboard.htmlBindings.table_body_btnAttach).on('click', InventoryDashboard.eventHandlers.table_body_btnAttach_onClick)
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

InventoryDashboard.eventHandlers.table_body_btnAttach_onClick = (event) ->
  currentItemno = $(@).data('itemno')
  currentProjectRoot = currentItemno + '_IN';
  InventoryDashboard.status.currentItemno = currentProjectRoot;
  console.log ProjectFiles
  ProjectFiles.functions.loadFileTree(currentProjectRoot);
  $(ProjectFiles.htmlBindings.modal_ProjectFiles).modal('show');
#  //QuoteDashboard.FileManagerWidget.loadFileTree(currentQutno);
#  //$(QuoteDashboard.FileManagerWidget.htmlBindings.modal_ProjectFiles).modal('show');
  @


InventoryDashboard.init = (defaultUserFilter) ->
  InventoryDashboard.status.itemsPerPage = $(InventoryDashboard.htmlBindings.drpItemPerPageValue).text()
  DynamicFilter.init(defaultUserFilter)
  ProjectFiles.init()
  InventoryDashboard.functions.bindEventHandlers()
  @
