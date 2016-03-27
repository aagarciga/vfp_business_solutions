// Generated by CoffeeScript 1.10.0
(function() {
  var $, App, DynamicFilter, EquipmentDashboard, ProjectFiles, dandelion, global;

  global = window;

  $ = global.jQuery;

  App = global.App;

  dandelion = global.dandelion;

  EquipmentDashboard = dandelion.namespace('App.EquipmentDashboard', global);

  DynamicFilter = App.EquipmentDashboard.DynamicFilter;

  ProjectFiles = App.EquipmentDashboard.ProjectFiles;

  EquipmentDashboard.status = {};

  EquipmentDashboard.status.itemsPerPage = 50;

  EquipmentDashboard.status.table_header_sortLastButton = null;

  EquipmentDashboard.status.table_header_sortField = 'ordnum';

  EquipmentDashboard.status.table_header_sortFieldOrder = 'ASC';

  EquipmentDashboard.status.currentPage = 1;

  EquipmentDashboard.status.currentEquipid = '';

  EquipmentDashboard.status.currentSet = 'details';

  EquipmentDashboard.status.currentBalance = "0.0";

  EquipmentDashboard.dictionaries = {};

  EquipmentDashboard.htmlBindings = {};

  EquipmentDashboard.htmlBindings.container = '.container';

  EquipmentDashboard.htmlBindings.itemCounter = '#panelHeadingItemsCount';

  EquipmentDashboard.htmlBindings.drpItemPerPage = '.top-pager-itemmperpage-control a';

  EquipmentDashboard.htmlBindings.drpItemPerPageValue = '.top-pager-itemmperpage-control button span.value';

  EquipmentDashboard.htmlBindings.filterForm = '#filterForm';

  EquipmentDashboard.htmlBindings.table = '#EquipmentDashboardTable';

  EquipmentDashboard.htmlBindings.table_header_btnSort = '.btn-table-sort';

  EquipmentDashboard.htmlBindings.table_body_btnCommitted = '.btn-committed-form-link';

  EquipmentDashboard.htmlBindings.table_body_btnOnorder = '.btn-onorder-form-link';

  EquipmentDashboard.htmlBindings.table_body_btnAttach = '.btn-files-dialog';

  EquipmentDashboard.htmlBindings.table_body_drpStatus = '.status.update-dropdown ';

  EquipmentDashboard.htmlBindings.pager_container = '.pager-wrapper';

  EquipmentDashboard.htmlBindings.pager_btnPagerPages = '.pager-btn';

  EquipmentDashboard.functions = {};

  EquipmentDashboard.functions.paginate = function() {
    var filterTree, jsonFilterTree;
    filterTree = App.EquipmentDashboard.DynamicFilter.functions.getFilterTree();
    jsonFilterTree = JSON.stringify(filterTree);
    $.ajax({
      data: {
        filterTree: jsonFilterTree,
        page: EquipmentDashboard.status.currentPage,
        itemsPerPage: EquipmentDashboard.status.itemsPerPage,
        orderby: EquipmentDashboard.status.table_header_sortField,
        order: EquipmentDashboard.status.table_header_sortFieldOrder
      },
      url: EquipmentDashboard.urls.getPage,
      type: 'post',
      beforeSend: function() {
        return $('.loading').show();
      },
      success: function(response, textStatus, jqXHR) {
        var data, pager, pagerControl, pagerItems;
        data = $.parseJSON(response);
        pager = new BootstrapPager(data, EquipmentDashboard.eventHandlers.pager_btnPagerPages_onClick);
        pagerItems = pager.getCurrentPagedItems();
        pagerControl = pager.getPagerControl();
        $(EquipmentDashboard.htmlBindings.pager_container).empty().append(pagerControl);
        EquipmentDashboard.functions.updateTable(pagerItems);
        $(EquipmentDashboard.htmlBindings.itemCounter).html(pager.itemsCount);
        return $('.loading').hide();
      }
    });
    return this;
  };

  EquipmentDashboard.functions.updateTable = function(items) {
    var $table, $tableBody, index;
    $table = $(EquipmentDashboard.htmlBindings.table);
    $tableBody = $table.children('tbody');
    $tableBody.empty();
    for (index in items) {
      if (items.hasOwnProperty(index)) {
        $tableBody.append(EquipmentDashboard.functions.buildTableItem(items[index], '', "item-field"));
      }
    }
    EquipmentDashboard.functions.bindTableItemsEventHandlers();
    return this;
  };

  EquipmentDashboard.functions.buildTableItem = function(dataRow, trClass, tdClass) {
    var doc, result, tdAssetTagBuilder, tdAttachedFilesBuilder, tdDaterecBuilder, tdDescripBuilder, tdEquipTypeBuilder, tdEquipidBuilder, tdExpdteinBuilder, tdInstalldteBuilder, tdItemnoBuilder, tdLocnoBuilder, tdMakeBuilder, tdModelBuilder, tdNotesBuilder, tdOrdnumBuilder, tdPicture_fiBuilder, tdSerialnoBuilder, tdStatusBuilder, tdVoltageBuilder;
    doc = global.document;
    result = doc.createElement('tr');
    tdOrdnumBuilder = function() {
      return App.Helpers.simpleTdBuilder(dataRow.ordnum, '');
    };
    tdEquipidBuilder = function() {
      return App.Helpers.withLinkTdBuilder(dataRow.equipid, '', '', App.Helpers.Href('HistoryDashboard', 'Index', {
        equipid: btoa(dataRow.equipid),
        jsonFilterTree: btoa(JSON.stringify(EquipmentDashboard.DynamicFilter.functions.getFilterTree())),
        itemPerPage: EquipmentDashboard.status.itemsPerPage,
        page: EquipmentDashboard.status.currentPage,
        orderBy: EquipmentDashboard.status.table_header_sortField,
        order: EquipmentDashboard.status.table_header_sortFieldOrder
      }), {});
    };
    tdItemnoBuilder = function() {
      return App.Helpers.simpleTdBuilder(dataRow.itemno, '');
    };
    tdDescripBuilder = function() {
      return App.Helpers.simpleTdBuilder(dataRow.descrip, '');
    };
    tdMakeBuilder = function() {
      return App.Helpers.simpleTdBuilder(dataRow.make, '');
    };
    tdModelBuilder = function() {
      return App.Helpers.simpleTdBuilder(dataRow.model, '');
    };
    tdSerialnoBuilder = function() {
      return App.Helpers.simpleTdBuilder(dataRow.serialno, '');
    };
    tdVoltageBuilder = function() {
      return App.Helpers.simpleTdBuilder(dataRow.Voltage, '');
    };
    tdEquipTypeBuilder = function() {
      return App.Helpers.simpleTdBuilder(dataRow.EquipType, '');
    };
    tdInstalldteBuilder = function() {
      return App.Helpers.simpleTdBuilder(dataRow.installdte, '');
    };
    tdExpdteinBuilder = function() {
      return App.Helpers.simpleTdBuilder(dataRow.expdtein, '');
    };
    tdDaterecBuilder = function() {
      return App.Helpers.simpleTdBuilder(dataRow.daterec, '');
    };
    tdStatusBuilder = function() {
      return App.Helpers.withSelectBuilder(dataRow.status, '', 'form-control update-dropdown status select2-nosearch', EquipmentDashboard.status.statusValue, {
        equipid: dataRow.equipid
      });
    };
    tdNotesBuilder = function() {
      return App.Helpers.simpleTdBuilder(dataRow.notes, '');
    };
    tdPicture_fiBuilder = function() {
      return App.Helpers.withLightboxLinkPictureBuilder(dataRow.equipid, 'item-image', '', dataRow.picture_fi, "glyphicon glyphicon-eye-open", null, {});
    };
    tdAssetTagBuilder = function() {
      return App.Helpers.simpleTdBuilder(dataRow.assettag, '');
    };
    tdLocnoBuilder = function() {
      return App.Helpers.simpleTdBuilder(dataRow.Locno, '');
    };
    tdAttachedFilesBuilder = function() {
      var spanGlyphIcon;
      spanGlyphIcon = doc.createElement('span');
      spanGlyphIcon.className = 'glyphicon glyphicon-folder-close';
      return App.Helpers.withLinkTdBuilder(spanGlyphIcon, 'item-action item-files', EquipmentDashboard.htmlBindings.table_body_btnAttach.slice(1), "#", {
        equipid: dataRow.equipid
      });
    };
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
    return result;
  };

  EquipmentDashboard.functions.bindTableItemsEventHandlers = function() {
    $(EquipmentDashboard.htmlBindings.table_body_btnAttach).on('click', EquipmentDashboard.eventHandlers.table_body_btnAttach_onClick);
    $(EquipmentDashboard.htmlBindings.table_body_drpStatus).on('change', EquipmentDashboard.eventHandlers.table_body_dprStatus_onChange);
    return this;
  };

  EquipmentDashboard.functions.bindEventHandlers = function() {
    $(EquipmentDashboard.htmlBindings.drpItemPerPage).on('click', EquipmentDashboard.eventHandlers.drpItemPerPage_onClick);
    $(EquipmentDashboard.htmlBindings.table_header_btnSort).on('click', EquipmentDashboard.eventHandlers.table_body_btnSort_onClick);
    $(EquipmentDashboard.htmlBindings.pager_btnPagerPages).on('click', EquipmentDashboard.eventHandlers.pager_btnPagerPages_onClick);
    EquipmentDashboard.functions.bindTableItemsEventHandlers();
    $(EquipmentDashboard.htmlBindings.table_body_btnAttach).on('click', EquipmentDashboard.eventHandlers.table_body_btnAttach_onClick);
    return this;
  };

  EquipmentDashboard.eventHandlers = {};

  EquipmentDashboard.eventHandlers.drpItemPerPage_onClick = function(event) {
    var $target, value;
    $target = $(event.target);
    value = $target.html();
    EquipmentDashboard.status.itemsPerPage = value;
    $(EquipmentDashboard.htmlBindings.drpItemPerPageValue).text(value);
    EquipmentDashboard.status.currentPage = 1;
    EquipmentDashboard.functions.paginate();
    return this;
  };

  EquipmentDashboard.eventHandlers.pager_btnPagerPages_onClick = function(event) {
    var $target, value;
    $target = $(event.target);
    value = $target.data('page');
    EquipmentDashboard.status.currentPage = value;
    EquipmentDashboard.functions.paginate();
    return this;
  };

  EquipmentDashboard.eventHandlers.table_body_btnSort_onClick = function(event) {
    var $target, sortingField;
    $target = $(event.target);
    sortingField = $target.data('field');
    if (EquipmentDashboard.status.table_header_sortLastButton !== null) {
      EquipmentDashboard.status.table_header_sortLastButton.removeClass('asc desc');
    }
    if (EquipmentDashboard.status.table_header_sortField !== sortingField) {
      EquipmentDashboard.status.table_header_sortFieldOrder = '';
    }
    EquipmentDashboard.status.table_header_sortField = sortingField;
    if (EquipmentDashboard.status.table_header_sortFieldOrder === 'ASC') {
      EquipmentDashboard.status.table_header_sortFieldOrder = 'DESC';
      $target.addClass('asc').removeClass('desc');
    } else {
      EquipmentDashboard.status.table_header_sortFieldOrder = 'ASC';
      $target.addClass('desc').removeClass('asc');
    }
    EquipmentDashboard.status.table_header_sortLastButton = $target;
    EquipmentDashboard.functions.paginate();
    return this;
  };

  EquipmentDashboard.eventHandlers.table_body_btnAttach_onClick = function(event) {
    var currentEquipid, currentProjectRoot;
    currentEquipid = $(this).data('equipid');
    currentProjectRoot = currentEquipid + '_EQ';
    EquipmentDashboard.status.currentEquipid = currentProjectRoot;
    ProjectFiles.functions.loadFileTree(currentProjectRoot);
    $(ProjectFiles.htmlBindings.modal_ProjectFiles).modal('show');
    return this;
  };

  EquipmentDashboard.eventHandlers.table_body_dprStatus_onChange = function(event) {
    var $target, currentEquipId, value;
    $target = $(event.target);
    currentEquipId = $target.data('equipid');
    value = $target.val();
    $.ajax({
      data: {
        equipid: currentEquipId,
        status: value
      },
      url: EquipmentDashboard.urls.updateStatus,
      type: 'post',
      beforeSend: function() {
        return $('.loading').show();
      },
      success: function(response) {
        var data;
        data = $.parseJSON(response);
        if (data === 'success') {
          return $('.loading').hide();
        } else {
          throw data;
        }
      }
    });
    return this;
  };

  EquipmentDashboard.init = function(fieldsDefinition) {
    EquipmentDashboard.status.fieldsDefinition = $.parseJSON(fieldsDefinition);
    EquipmentDashboard.functions.bindEventHandlers();
    return this;
  };

}).call(this);

//# sourceMappingURL=main.js.map