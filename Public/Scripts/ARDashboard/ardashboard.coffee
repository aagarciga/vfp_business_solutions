global = window
$ = global.jQuery
App = global.App
dandelion = global.dandelion

ARDashboard = dandelion.namespace('App.ARDashboard', global)

DynamicFilter = App.ARDashboard.DynamicFilter

ARDashboard.status = {}
ARDashboard.status.itemsPerPage = 50;                   # Default items per page value
ARDashboard.status.table_header_sortLastButton = null;
ARDashboard.status.table_header_sortField = 'custno';   # Default Order By Fields
ARDashboard.status.table_header_sortFieldOrder = 'ASC'; # Default Order
ARDashboard.status.currentPage = 1;
ARDashboard.status.currentQuote = '';

ARDashboard.dictionaries = {}

ARDashboard.htmlBindings = {}
ARDashboard.htmlBindings.container                        = '.container';
ARDashboard.htmlBindings.itemCounter                      = '#panelHeadingItemsCount';
ARDashboard.htmlBindings.drpItemPerPage                   = '.top-pager-itemmperpage-control a';
ARDashboard.htmlBindings.drpItemPerPageValue              = '.top-pager-itemmperpage-control button span.value';
ARDashboard.htmlBindings.filterForm                       = '#filterForm';
ARDashboard.htmlBindings.table                            = '#arDashboardTable';
ARDashboard.htmlBindings.table_header_btnSort             = '.btn-table-sort';
ARDashboard.htmlBindings.table_body_btnCustNo            = '.custno-form-link';
ARDashboard.htmlBindings.table_body_btnAttach             = '.btn-files-dialog';
ARDashboard.htmlBindings.pager_container                  = '.pager-wrapper';
ARDashboard.htmlBindings.pager_btnPagerPages              = '.pager-btn';


ARDashboard.functions = {}

# Cloned from financial dashboard (todo: need refactor here...
ARDashboard.functions.formatToCurrency = (value, separator = ',') ->
  strValue = value.toString()
  commaCount = parseInt((strValue.length / 3) - 1, 10)
  offset = 0
  included = !!~ strValue.indexOf('.') # Using bitwise operator instead (!== -1)

  if included # strValue.indexOf('.') isnt -1
    offset = strValue.slice(strValue.indexOf('.')).length

  strValue = strValue.split('').reverse().join('') # reversing string

  while commaCount isnt 0
    strValue = strValue.slice(0, (commaCount * 3) + offset) + separator + strValue.slice((commaCount * 3) + offset)
    commaCount -= 1

  strValue = strValue.split('').reverse().join('') # reversing string back

  if strValue.charAt(0) == separator
    strValue = strValue.slice(1)
  strValue

ARDashboard.functions.paginate = ->
  $.ajax({
      data:
        predicate: ARDashboard.DynamicFilter.functions.getPredicate(),
        page: ARDashboard.status.currentPage,
        itemsPerPage: ARDashboard.status.itemsPerPage,
        orderby: ARDashboard.status.table_header_sortField,
        order: ARDashboard.status.table_header_sortFieldOrder
      url: ARDashboard.urls.getPage
      type: 'post'
      beforeSend: ->
        $('.loading').show()
      success: (response, textStatus, jqXHR) ->
        data = $.parseJSON(response)
        pager = new BootstrapPager(data, ARDashboard.eventHandlers.pager_btnPagerPages_onClick)
        pagerItems = pager.getCurrentPagedItems()
        pagerControl = pager.getPagerControl()

        $(ARDashboard.htmlBindings.pager_container)
        .empty()
        .append(pagerControl)

        ARDashboard.functions.updateTable(pagerItems)

        $(ARDashboard.htmlBindings.itemCounter).html(pager.itemsCount)
        $('.loading').hide()
  })
  this

ARDashboard.functions.updateTable = (items) ->
  $table = $(ARDashboard.htmlBindings.table)
  $tableBody = $table.children('tbody')

  $tableBody.empty()

  for index of items #  using comprehensions for iterating over properties in objects
    if items.hasOwnProperty(index)
      $tableBody.append(ARDashboard.functions.buildTableItem(items[index], '', "item-field"));

  ARDashboard.functions.bindTableItemsEventHandlers();
  this

ARDashboard.functions.buildTableItem = (dataRow, trClass, tdClass) ->
  doc = global.document
  result = doc.createElement('tr')

  simpleTdBuilder = (data) ->
    td = doc.createElement('td')
    td.className = tdClass
    td.appendChild(doc.createTextNode(data))
    td;

  withLinkTdBuilder = (data, linkClassName, tdLinkClass) ->
    td = doc.createElement('td')
    a = doc.createElement('a')

    a.href = "#"
    a.className = linkClassName
    a.dataset.qutno = dataRow.qutno

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
    withLinkTdBuilder(dataRow.custno, ARDashboard.htmlBindings.table_body_btnCustNo.slice(1))

  tdCompanyBuilder = ->
    simpleTdBuilder(dataRow.company)

  tdCurrentBuilder = ->
    simpleTdBuilder(ARDashboard.functions.formatToCurrency(dataRow.current))

  tdInterval1130Builder = ->
    simpleTdBuilder(dataRow['11-30'])

  tdInterval3145Builder = ->
    simpleTdBuilder(dataRow['31-45'])

  tdInterval4660Builder = ->
    simpleTdBuilder(dataRow['46-60'])

  tdInterval6190Builder = ->
    simpleTdBuilder(dataRow['61-90'])

  tdIntervalMoreThan90Builder = ->
    simpleTdBuilder(dataRow['>91'])

  tdBalanceBuilder = ->
    simpleTdBuilder(ARDashboard.functions.formatToCurrency(dataRow.balance))

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

ARDashboard.functions.bindTableItemsEventHandlers = ->
#    $(ARDashboard.htmlBindings.table_body_btnCustNo).on('click', ARDashboard.eventHandlers.control_quoteDetails_itemsLink_onClick)
#    $('select.select2-nosearch').select2({minimumResultsForSearch: Infinity})
    this

ARDashboard.functions.bindEventHandlers = ->
  $(ARDashboard.htmlBindings.drpItemPerPage).on('click', ARDashboard.eventHandlers.drpItemPerPage_onClick)
  $(ARDashboard.htmlBindings.table_header_btnSort).on('click', ARDashboard.eventHandlers.table_body_btnSort_onClick);
  $(ARDashboard.htmlBindings.pager_btnPagerPages).on('click', ARDashboard.eventHandlers.pager_btnPagerPages_onClick)
  ARDashboard.functions.bindTableItemsEventHandlers();
  this

ARDashboard.eventHandlers = {}

ARDashboard.eventHandlers.drpItemPerPage_onClick = (event) ->
  $target = $(event.target)
  value = $target.html()
  ARDashboard.status.itemsPerPage = value
  $(ARDashboard.htmlBindings.drpItemPerPageValue).text(value)

  # When change items per page, show page one
  ARDashboard.status.currentPage = 1
  ARDashboard.functions.paginate()
  this

ARDashboard.eventHandlers.pager_btnPagerPages_onClick = (event) ->
  $target = $(event.target)
  value = $target.data('page')
  ARDashboard.status.currentPage = value
  ARDashboard.functions.paginate()
  this

ARDashboard.eventHandlers.table_body_btnSort_onClick = (event) ->
  $target = $(event.target)
  sortingField = $target.data('field')

  if ARDashboard.status.table_header_sortLastButton isnt null
    ARDashboard.status.table_header_sortLastButton.removeClass('asc desc')

  if ARDashboard.status.table_header_sortField isnt sortingField
    ARDashboard.status.table_header_sortFieldOrder = ''

  ARDashboard.status.table_header_sortField = sortingField

  if ARDashboard.status.table_header_sortFieldOrder is 'ASC'
    ARDashboard.status.table_header_sortFieldOrder = 'DESC'
    $target.addClass('asc').removeClass('desc')
  else
    ARDashboard.status.table_header_sortFieldOrder = 'ASC'
    $target.addClass('desc').removeClass('asc')

  ARDashboard.status.table_header_sortLastButton = $target
  ARDashboard.functions.paginate()
  this

ARDashboard.init = (defaultUserFilter) ->
  ARDashboard.status.itemsPerPage = $(ARDashboard.htmlBindings.drpItemPerPageValue).text()
  DynamicFilter.init(defaultUserFilter)
  ARDashboard.functions.bindEventHandlers()
