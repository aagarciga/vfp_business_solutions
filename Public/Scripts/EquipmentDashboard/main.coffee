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
EquipmentDashboard.htmlBindings.table_body_btnEdit = '.btn-edit'
EquipmentDashboard.htmlBindings.table_body_btnAdd = '.btn-add'
EquipmentDashboard.htmlBindings.table_body_btnView = '.btn-view'
EquipmentDashboard.htmlBindings.table_body_drpStatus = '.status.update-dropdown '
EquipmentDashboard.htmlBindings.pager_container = '.pager-wrapper';
EquipmentDashboard.htmlBindings.pager_btnPagerPages = '.pager-btn';

# Functions Declaration
#-----------------------------------------------------------------------------------------------------------------------
EquipmentDashboard.functions = {}

EquipmentDashboard.functions.paginate = ->
  filterTree = App.EquipmentDashboard.DynamicFilter.functions.getFilterTree()
  jsonFilterTree = JSON.stringify(filterTree)
  $.ajax(
    data:
      filterTree: jsonFilterTree,
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

  tdOrdnumBuilder = ->
    App.Helpers.simpleTdBuilder(dataRow.ordnum, '')
  tdEquipidBuilder = ->
    App.Helpers.withLinkTdBuilder(dataRow.equipid, '', '', App.Helpers.Href('HistoryDashboard', 'Index', {equipid: btoa(dataRow.equipid), jsonFilterTree: btoa(JSON.stringify(EquipmentDashboard.DynamicFilter.functions.getFilterTree())), itemPerPage: EquipmentDashboard.status.itemsPerPage, page: EquipmentDashboard.status.currentPage, orderBy: EquipmentDashboard.status.table_header_sortField, order: EquipmentDashboard.status.table_header_sortFieldOrder}), {})
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
    App.Helpers.withSelectBuilder(dataRow.status, '', 'form-control update-dropdown status select2-nosearch', EquipmentDashboard.status.statusValue, {equipid: dataRow.equipid})
  tdNotesBuilder = ->
    App.Helpers.simpleTdBuilder(dataRow.notes, '')
  tdPicture_fiBuilder = ->
    App.Helpers.withLightboxLinkPictureBuilder(dataRow.equipid, 'item-image', '', dataRow.picture_fi, "glyphicon glyphicon-eye-open", null, {})
  tdAssetTagBuilder = ->
    App.Helpers.simpleTdBuilder(dataRow.assettag, '')
  tdLocnoBuilder = ->
    App.Helpers.simpleTdBuilder(dataRow.locno, '')

  tdActionsTagBuilder = ->
    elements = [];
    elements.push(viewButtonBuilder())
    elements.push(addButtonBuilder())
    elements.push(editButtonBuilder())
    elements.push(attachedFilesButtonBuilder())
    btnGroup = window.document.createElement('div')
    btnGroup.className = 'btn-group'
    App.Helpers.complexTdBuilder(elements, 'item-action item-files', btnGroup)

  attachedFilesButtonBuilder = () ->
    spanGlyphIcon = doc.createElement('span')
    spanGlyphIcon.className = 'glyphicon glyphicon-folder-close'
    anchorClassName = EquipmentDashboard.htmlBindings.table_body_btnAttach.slice(1) + ' btn-action btn btn-default btn-sm'
    App.Helpers.linkBuilder(spanGlyphIcon, anchorClassName, "#", {equipid: dataRow.equipid})

  editButtonBuilder = () ->
    spanGlyphIcon = doc.createElement('span')
    spanGlyphIcon.className = 'glyphicon glyphicon-edit'
    anchorClassName = EquipmentDashboard.htmlBindings.table_body_btnEdit.slice(1) + ' btn-action btn btn-default btn-sm'
    dataset = {
      equipid: dataRow.equipid
      qbtxlineid: dataRow.qbtxlineid
      ordnum: dataRow.ordnum
    }
    unless dataRow.qbtxlineid
      props = {
        'disabled': "disabled"
      }
    App.Helpers.linkBuilder(spanGlyphIcon, anchorClassName, "#", dataset, props)

  addButtonBuilder = () ->
    spanGlyphIcon = doc.createElement('span')
    spanGlyphIcon.className = 'glyphicon glyphicon-plus-sign'
    anchorClassName = EquipmentDashboard.htmlBindings.table_body_btnAdd.slice(1) + ' btn-action btn btn-default btn-sm'
    dataset = {
      equipid: dataRow.equipid
      qbtxlineid: dataRow.qbtxlineid
      ordnum: dataRow.ordnum
    }
    App.Helpers.linkBuilder(spanGlyphIcon, anchorClassName, "#", dataset)

  viewButtonBuilder = () ->
    spanGlyphIcon = doc.createElement('span')
    spanGlyphIcon.className = 'glyphicon glyphicon-eye-open'
    anchorClassName = EquipmentDashboard.htmlBindings.table_body_btnView.slice(1) + ' btn-action btn btn-default btn-sm'
    App.Helpers.linkBuilder(spanGlyphIcon, anchorClassName, "#", {equipid: dataRow.equipid})

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
  result.appendChild(tdAssetTagBuilder());
  result.appendChild(tdLocnoBuilder());
  result.appendChild(tdActionsTagBuilder());
  result

EquipmentDashboard.functions.bindTableItemsEventHandlers = ->
#  $(ARDashboard.htmlBindings.table_body_btnCustNo).on('click', ARDashboard.eventHandlers.table_body_btnCustNo_onClick)
#  $('select.select2-nosearch').select2({minimumResultsForSearch: Infinity})
  $(EquipmentDashboard.htmlBindings.table_body_btnAttach).on('click', EquipmentDashboard.eventHandlers.table_body_btnAttach_onClick)
  $(EquipmentDashboard.htmlBindings.table_body_drpStatus).on('change', EquipmentDashboard.eventHandlers.table_body_dprStatus_onChange)
  $(EquipmentDashboard.htmlBindings.table_body_btnEdit).on('click', EquipmentDashboard.eventHandlers.table_body_btnEdit_onClick)
  $(EquipmentDashboard.htmlBindings.table_body_btnAdd).on('click', EquipmentDashboard.eventHandlers.table_body_btnAdd_onClick)
  @

EquipmentDashboard.functions.bindEventHandlers = ->
  EquipmentDashboard.functions.bindTableItemsEventHandlers()

  $(EquipmentDashboard.htmlBindings.drpItemPerPage).on('click',
    EquipmentDashboard.eventHandlers.drpItemPerPage_onClick)
  $(EquipmentDashboard.htmlBindings.table_header_btnSort).on('click',
    EquipmentDashboard.eventHandlers.table_body_btnSort_onClick);
  $(EquipmentDashboard.htmlBindings.pager_btnPagerPages).on('click',
    EquipmentDashboard.eventHandlers.pager_btnPagerPages_onClick)

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
  console.log 'attach on click'
  currentEquipid = $(@).data('equipid')
  currentProjectRoot = currentEquipid + '_EQ';
  EquipmentDashboard.status.currentEquipid = currentProjectRoot;
  ProjectFiles.functions.loadFileTree(currentProjectRoot);
  $(ProjectFiles.htmlBindings.modal_ProjectFiles).modal('show');

    #  //QuoteDashboard.FileManagerWidget.loadFileTree(currentQutno);
    #  //$(QuoteDashboard.FileManagerWidget.htmlBindings.modal_ProjectFiles).modal('show');
  @

EquipmentDashboard.eventHandlers.table_body_dprStatus_onChange = (event) ->
  $target = $(event.target)
  currentEquipId = $target.data('equipid')
  value = $target.val()
  $.ajax(
    data:
      equipid: currentEquipId
      status: value
    url: EquipmentDashboard.urls.updateStatus
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

EquipmentDashboard.eventHandlers.table_body_btnEdit_onClick = (event) ->
  dataValue = $(@).data('qbtxlineid')
  if (dataValue != undefined && dataValue != '')
    qbtxlineid = dataValue
    href = App.Helpers.Href('EditTupleDashboard', 'Edit', {id: btoa(qbtxlineid), redirect: btoa(JSON.stringify({controller: 'EquipmentDashboard', action: 'Index'})), dashboard: btoa('HistoryDashboard')})
    global.location = href
  @

EquipmentDashboard.eventHandlers.table_body_btnAdd_onClick = (event) ->
  currentEquipid = $(@).data('equipid')
  currentOrdnum = $(@).data('ordnum')
  href = App.Helpers.Href('EditTupleDashboard', 'Add', {redirect: btoa(JSON.stringify({controller: 'EquipmentDashboard', action: 'UpdateHistoryId'})), values: btoa(JSON.stringify({equipid: currentEquipid, ordnum: currentOrdnum})), dashboard: btoa('HistoryDashboard')})
  global.location = href
  @

EquipmentDashboard.init = (defaultUserFilter, fieldsDefinition) ->
  EquipmentDashboard.status.fieldsDefinition = $.parseJSON(fieldsDefinition)
  statusValue = []
  statusArray = EquipmentDashboard.status.fieldsDefinition['status']['values']
  for key of statusArray
    if statusArray.hasOwnProperty(key)
      value = statusArray[key]
      statusValue.push({id: key, descrip: value})
  EquipmentDashboard.status.statusValue = statusValue
  EquipmentDashboard.dictionaries.status = statusValue
  EquipmentDashboard.status.itemsPerPage = $(EquipmentDashboard.htmlBindings.drpItemPerPageValue).text()
  DynamicFilter.init(defaultUserFilter, EquipmentDashboard.status.fieldsDefinition)
  ProjectFiles.init()
  EquipmentDashboard.functions.bindEventHandlers()
  @