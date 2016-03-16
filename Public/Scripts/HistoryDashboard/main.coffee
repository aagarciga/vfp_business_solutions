global = window
$ = global.jQuery
App = global.App
dandelion = global.dandelion

EquipmentDashboard = dandelion.namespace('App.HistoryDashboard', global)

DynamicFilter = App.HistoryDashboard.DynamicFilter
ProjectFiles  = App.HistoryDashboard.ProjectFiles

# Statuses Declaration
#-----------------------------------------------------------------------------------------------------------------------
HistoryDashboard.status = {}
HistoryDashboard.status.itemsPerPage = 50; # Default items per page value
HistoryDashboard.status.table_header_sortLastButton = null;
HistoryDashboard.status.table_header_sortField = 'ordnum'; # Default Order By Fields
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
HistoryDashboard.htmlBindings.table_body_btnAttach = '.btn-files-dialog'
HistoryDashboard.htmlBindings.table_body_drpStatus = '.status.update-dropdown '
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

  tdOrdnumBuilder = ->
    App.Helpers.simpleTdBuilder(dataRow.ordnum, '')
  tdEquipidBuilder = ->
    App.Helpers.simpleTdBuilder(dataRow.equipid, '')
  tdItemnoBuilder = ->
    App.Helpers.simpleTdBuilder(dataRow.itemno, '')
  tdDescripBuilder = ->
    App.Helpers.simpleTdBuilder(dataRow.descrip, '')
  tdMakeBuilder = ->
    App.Helpers.simpleTdBuilder(dataRow.make, '')
  tdModelBuilder = ->
    App.Helpers.simpleTdBuilder(dataRow.model, '')
  tdSerialnoBuilder = ->
    App.Helpers.simpleTdBuilder(dataRow.serialno, '')
  tdVoltageBuilder = ->
    App.Helpers.simpleTdBuilder(dataRow.Voltage, '')
  tdEquipTypeBuilder = ->
    App.Helpers.simpleTdBuilder(dataRow.EquipType, '')
  tdInstalldteBuilder = ->
    App.Helpers.simpleTdBuilder(dataRow.installdte, '')
  tdExpdteinBuilder = ->
    App.Helpers.simpleTdBuilder(dataRow.expdtein, '')
  tdDaterecBuilder = ->
    App.Helpers.simpleTdBuilder(dataRow.daterec, '')
  tdStatusBuilder = ->
    App.Helpers.withSelectBuilder(dataRow.status, '', 'form-control update-dropdown status select2-nosearch', HistoryDashboard.status.statusValue, {equipid: dataRow.equipid})
  tdNotesBuilder = ->
    App.Helpers.simpleTdBuilder(dataRow.notes, '')
  tdPicture_fiBuilder = ->
    App.Helpers.withLightboxLinkPictureBuilder(dataRow.equipid, 'item-image', '', dataRow.picture_fi, "glyphicon glyphicon-eye-open", null, {})
  tdAssetTagBuilder = ->
    App.Helpers.simpleTdBuilder(dataRow.assettag, '')
  tdLocnoBuilder = ->
    App.Helpers.simpleTdBuilder(dataRow.Locno, '')

  tdAttachedFilesBuilder = () ->
    spanGlyphIcon = doc.createElement('span')
    spanGlyphIcon.className = 'glyphicon glyphicon-folder-close'
    App.Helpers.withLinkTdBuilder(spanGlyphIcon, 'item-action item-files', HistoryDashboard.htmlBindings.table_body_btnAttach.slice(1), "#", {equipid: dataRow.equipid})

  result.className = trClass;
  result.appendChild(tdOrdnumBuilder());
  result.appendChild(tdEquipidBuilder());
  result.appendChild(tdItemnoBuilder());
  result.appendChild(tdDescripBuilder());
  result.appendChild(tdMakeBuilder());
  result.appendChild(tdModelBuilder());
  result.appendChild(tdSerialnoBuilder());
  result.appendChild(tdVoltageBuilder());
  result.appendChild(tdEquipTypeBuilder());
  result.appendChild(tdInstalldteBuilder());
  result.appendChild(tdExpdteinBuilder());
  result.appendChild(tdDaterecBuilder());
  result.appendChild(tdStatusBuilder());
  result.appendChild(tdNotesBuilder());
  result.appendChild(tdPicture_fiBuilder());
  result.appendChild(tdAssetTagBuilder());
  result.appendChild(tdLocnoBuilder());
  result.appendChild(tdAttachedFilesBuilder());
  result

HistoryDashboard.functions.bindTableItemsEventHandlers = ->
#  $(ARDashboard.htmlBindings.table_body_btnCustNo).on('click', ARDashboard.eventHandlers.table_body_btnCustNo_onClick)
#  $('select.select2-nosearch').select2({minimumResultsForSearch: Infinity})
  $(HistoryDashboard.htmlBindings.table_body_btnAttach).on('click', HistoryDashboard.eventHandlers.table_body_btnAttach_onClick)
  $(HistoryDashboard.htmlBindings.table_body_drpStatus).on('change', HistoryDashboard.eventHandlers.table_body_dprStatus_onChange)

  @

HistoryDashboard.functions.bindEventHandlers = ->
  $(HistoryDashboard.htmlBindings.drpItemPerPage).on('click',
    HistoryDashboard.eventHandlers.drpItemPerPage_onClick)
  $(HistoryDashboard.htmlBindings.table_header_btnSort).on('click',
    HistoryDashboard.eventHandlers.table_body_btnSort_onClick);
  $(HistoryDashboard.htmlBindings.pager_btnPagerPages).on('click',
    HistoryDashboard.eventHandlers.pager_btnPagerPages_onClick)
  HistoryDashboard.functions.bindTableItemsEventHandlers();
  $(HistoryDashboard.htmlBindings.table_body_btnAttach).on('click',
    HistoryDashboard.eventHandlers.table_body_btnAttach_onClick)
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

HistoryDashboard.eventHandlers.table_body_btnAttach_onClick = (event) ->
  currentEquipid = $(@).data('equipid')
  currentProjectRoot = currentEquipid + '_EQ';
  HistoryDashboard.status.currentEquipid = currentProjectRoot;
  ProjectFiles.functions.loadFileTree(currentProjectRoot);
  $(ProjectFiles.htmlBindings.modal_ProjectFiles).modal('show');

  #  //QuoteDashboard.FileManagerWidget.loadFileTree(currentQutno);
  #  //$(QuoteDashboard.FileManagerWidget.htmlBindings.modal_ProjectFiles).modal('show');
  @

HistoryDashboard.eventHandlers.table_body_dprStatus_onChange = (event) ->
  $target = $(event.target)
  currentEquipId = $target.data('equipid')
  value = $target.val()
  $.ajax(
    data:
      equipid: currentEquipId
      status: value
    url: HistoryDashboard.urls.updateStatus
    type: 'post'
    beforeSend: ->
      $('.loading').show()
    success: (response) ->
      data = $.parseJSON(response)
      if data == 'success'
        $('.loading').hide()
      else
        throw data
  )
  @

HistoryDashboard.init = (defaultUserFilter, fieldsDefinition) ->
  HistoryDashboard.status.fieldsDefinition = $.parseJSON(fieldsDefinition)
  statusValue = []
  statusArray = HistoryDashboard.status.fieldsDefinition['status']['values']
  for key of statusArray
    if statusArray.hasOwnProperty(key)
      value = statusArray[key]
      statusValue.push({id: key, descrip: value})
  HistoryDashboard.status.statusValue = statusValue
  HistoryDashboard.dictionaries.status = statusValue
  HistoryDashboard.status.itemsPerPage = $(HistoryDashboard.htmlBindings.drpItemPerPageValue).text()
  DynamicFilter.init(defaultUserFilter, HistoryDashboard.status.fieldsDefinition)
  ProjectFiles.init()
  HistoryDashboard.functions.bindEventHandlers()
  @