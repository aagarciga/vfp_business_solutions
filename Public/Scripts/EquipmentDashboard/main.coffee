global = window
$ = global.jQuery
App = global.App
dandelion = global.dandelion

EquipmentDashboard = dandelion.namespace('App.EquipmentDashboard', global)

DynamicFilter = App.EquipmentDashboard.DynamicFilter
ProjectFiles  = App.EquipmentDashboard.ProjectFiles

# Statuses Declaration
#-----------------------------------------------------------------------------------------------------------------------
EquipmentDashboard.status = {}
EquipmentDashboard.status.itemsPerPage = 50; # Default items per page value
EquipmentDashboard.status.table_header_sortLastButton = null;
EquipmentDashboard.status.table_header_sortField = 'ordnum'; # Default Order By Fields
EquipmentDashboard.status.table_header_sortFieldOrder = 'ASC'; # Default Order
EquipmentDashboard.status.currentPage = 1;
EquipmentDashboard.status.currentEquipid = '';
EquipmentDashboard.status.currentSet = 'details';
EquipmentDashboard.status.currentBalance = "0.0";

# Dictionaries Declaration
#-----------------------------------------------------------------------------------------------------------------------
EquipmentDashboard.dictionaries = {}

EquipmentDashboard.htmlBindings = {}
EquipmentDashboard.htmlBindings.container = '.container';
EquipmentDashboard.htmlBindings.itemCounter = '#panelHeadingItemsCount';
EquipmentDashboard.htmlBindings.drpItemPerPage = '.top-pager-itemmperpage-control a';
EquipmentDashboard.htmlBindings.drpItemPerPageValue = '.top-pager-itemmperpage-control button span.value';
EquipmentDashboard.htmlBindings.filterForm = '#filterForm';
EquipmentDashboard.htmlBindings.table = '#EquipmentDashboardTable';
EquipmentDashboard.htmlBindings.table_header_btnSort = '.btn-table-sort';
EquipmentDashboard.htmlBindings.table_body_btnCommitted = '.btn-committed-form-link'
EquipmentDashboard.htmlBindings.table_body_btnOnorder = '.btn-onorder-form-link'
EquipmentDashboard.htmlBindings.table_body_btnAttach = '.btn-files-dialog'
EquipmentDashboard.htmlBindings.pager_container = '.pager-wrapper';
EquipmentDashboard.htmlBindings.pager_btnPagerPages = '.pager-btn';

# Functions Declaration
#-----------------------------------------------------------------------------------------------------------------------
EquipmentDashboard.functions = {}

EquipmentDashboard.functions.paginate = ->
  $.ajax(
    data:
      predicate: EquipmentDashboard.DynamicFilter.functions.getPredicate(),
      page: EquipmentDashboard.status.currentPage,
      itemsPerPage: EquipmentDashboard.status.itemsPerPage,
      orderby: EquipmentDashboard.status.table_header_sortField,
      order: EquipmentDashboard.status.table_header_sortFieldOrder
    url: EquipmentDashboard.urls.getPage
    type: 'post'
    beforeSend: ->
      $('.loading').show()
    success: (response, textStatus, jqXHR) ->
      data = $.parseJSON(response)
      pager = new BootstrapPager(data, EquipmentDashboard.eventHandlers.pager_btnPagerPages_onClick)
      pagerItems = pager.getCurrentPagedItems()
      pagerControl = pager.getPagerControl()

      $(EquipmentDashboard.htmlBindings.pager_container)
      .empty()
      .append(pagerControl)

      EquipmentDashboard.functions.updateTable(pagerItems)

      $(EquipmentDashboard.htmlBindings.itemCounter).html(pager.itemsCount)
      $('.loading').hide()
  )
  @

EquipmentDashboard.functions.updateTable = (items) ->
  $table = $(EquipmentDashboard.htmlBindings.table)
  $tableBody = $table.children('tbody')

  $tableBody.empty()

  for index of items #  using comprehensions for iterating over properties in objects
    if items.hasOwnProperty(index)
      $tableBody.append(EquipmentDashboard.functions.buildTableItem(items[index], '', "item-field"));

  EquipmentDashboard.functions.bindTableItemsEventHandlers();
  @

EquipmentDashboard.functions.buildTableItem = (dataRow, trClass, tdClass) ->
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


  tdOrdNumBuilder = ->
    simpleTdBuilder(dataRow.ordnum)

  tdEquipIdBuilder = ->
    simpleTdBuilder(dataRow.equipid)

  tdItemNoBuilder = ->
    simpleTdBuilder(dataRow.itemno)

  tdModelBuilder = ->
    simpleTdBuilder(dataRow.model)

  tdSerialNoBuilder = ->
    simpleTdBuilder(dataRow.serialno)

  tdMakeBuilder = ->
    simpleTdBuilder(dataRow.make)

  tdInstallDteBuilder = ->
    simpleTdBuilder(dataRow.installdte)

  tdExpdteinBuilder = ->
    simpleTdBuilder(dataRow.expdtein)

  tdDateRecBuilder = ->
    simpleTdBuilder(dataRow.daterec)

  tdOrderBuilder = ->
    simpleTdBuilder(dataRow.order)

  tdStatusBuilder = ->
    simpleTdBuilder(dataRow.status)

  tdToolboxIdBuilder = ->
    simpleTdBuilder(dataRow.toolboxid)

  tdNotesBuilder = ->
    simpleTdBuilder(dataRow.notes)

  tdPictureBuilder = ->
    simpleTdBuilder(dataRow.picture_fi)

  result.className = trClass;
  result.appendChild(tdOrdNumBuilder());
  result.appendChild(tdEquipIdBuilder());
  result.appendChild(tdItemNoBuilder());
  result.appendChild(tdModelBuilder());
  result.appendChild(tdSerialNoBuilder());
  result.appendChild(tdMakeBuilder());
  result.appendChild(tdInstallDteBuilder());
  result.appendChild(tdExpdteinBuilder());
  result.appendChild(tdDateRecBuilder());
  result.appendChild(tdOrderBuilder());
  result.appendChild(tdStatusBuilder());
  result.appendChild(tdToolboxIdBuilder());
  result.appendChild(tdNotesBuilder());
  result.appendChild(tdPictureBuilder());
  result

EquipmentDashboard.functions.bindTableItemsEventHandlers = ->
#  $(ARDashboard.htmlBindings.table_body_btnCustNo).on('click', ARDashboard.eventHandlers.table_body_btnCustNo_onClick)
#  $('select.select2-nosearch').select2({minimumResultsForSearch: Infinity})
  @

EquipmentDashboard.functions.bindEventHandlers = ->
  $(EquipmentDashboard.htmlBindings.drpItemPerPage).on('click',
    EquipmentDashboard.eventHandlers.drpItemPerPage_onClick)
  $(EquipmentDashboard.htmlBindings.table_header_btnSort).on('click',
    EquipmentDashboard.eventHandlers.table_body_btnSort_onClick);
  $(EquipmentDashboard.htmlBindings.pager_btnPagerPages).on('click',
    EquipmentDashboard.eventHandlers.pager_btnPagerPages_onClick)
  EquipmentDashboard.functions.bindTableItemsEventHandlers();
  $(EquipmentDashboard.htmlBindings.table_body_btnAttach).on('click',
    EquipmentDashboard.eventHandlers.table_body_btnAttach_onClick)
  @

# Event Handlers Declaration
#-----------------------------------------------------------------------------------------------------------------------
EquipmentDashboard.eventHandlers = {}

EquipmentDashboard.eventHandlers.drpItemPerPage_onClick = (event) ->
  $target = $(event.target)
  value = $target.html()
  EquipmentDashboard.status.itemsPerPage = value
  $(EquipmentDashboard.htmlBindings.drpItemPerPageValue).text(value)

  # When change items per page, show page one
  EquipmentDashboard.status.currentPage = 1
  EquipmentDashboard.functions.paginate()
  @

EquipmentDashboard.eventHandlers.pager_btnPagerPages_onClick = (event) ->
  $target = $(event.target)
  value = $target.data('page')
  EquipmentDashboard.status.currentPage = value
  EquipmentDashboard.functions.paginate()
  @

EquipmentDashboard.eventHandlers.table_body_btnSort_onClick = (event) ->
  $target = $(event.target)
  sortingField = $target.data('field')

  if EquipmentDashboard.status.table_header_sortLastButton isnt null
    EquipmentDashboard.status.table_header_sortLastButton.removeClass('asc desc')

  if EquipmentDashboard.status.table_header_sortField isnt sortingField
    EquipmentDashboard.status.table_header_sortFieldOrder = ''

  EquipmentDashboard.status.table_header_sortField = sortingField

  if EquipmentDashboard.status.table_header_sortFieldOrder is 'ASC'
    EquipmentDashboard.status.table_header_sortFieldOrder = 'DESC'
    $target.addClass('asc').removeClass('desc')
  else
    EquipmentDashboard.status.table_header_sortFieldOrder = 'ASC'
    $target.addClass('desc').removeClass('asc')

  EquipmentDashboard.status.table_header_sortLastButton = $target
  EquipmentDashboard.functions.paginate()
  @

EquipmentDashboard.eventHandlers.table_body_btnAttach_onClick = (event) ->
  currentEquipid = $(@).data('equipid')
  currentProjectRoot = currentEquipid + '_EQ';
  EquipmentDashboard.status.currentEquipid = currentProjectRoot;
  ProjectFiles.functions.loadFileTree(currentProjectRoot);
  $(ProjectFiles.htmlBindings.modal_ProjectFiles).modal('show');
  #  //QuoteDashboard.FileManagerWidget.loadFileTree(currentQutno);
  #  //$(QuoteDashboard.FileManagerWidget.htmlBindings.modal_ProjectFiles).modal('show');
  @

EquipmentDashboard.init = (defaultUserFilter) ->
  EquipmentDashboard.status.itemsPerPage = $(EquipmentDashboard.htmlBindings.drpItemPerPageValue).text()
  DynamicFilter.init(defaultUserFilter)
  ProjectFiles.init()
  EquipmentDashboard.functions.bindEventHandlers()
  @