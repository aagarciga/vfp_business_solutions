// Generated by CoffeeScript 1.9.3
(function() {
  var $, App, EditTupleDashboard, dandelion, global;

  global = window;

  $ = global.jQuery;

  App = global.App;

  dandelion = global.dandelion;

  EditTupleDashboard = dandelion.namespace('App.EditTupleDashboard', global);

  EditTupleDashboard.status = {};

  EditTupleDashboard.dictionaries = {};

  EditTupleDashboard.htmlBindings = {};

  EditTupleDashboard.functions = {};

  EditTupleDashboard.functions.bindEventHandlers = function() {
    return this;
  };

  EditTupleDashboard.eventHandlers = {};

  EditTupleDashboard.init = function(fieldsDefinition) {
    EditTupleDashboard.status.fieldsDefinition = $.parseJSON(fieldsDefinition);
    EditTupleDashboard.functions.bindEventHandlers();
    $('input.daterangepicker').daterangepicker({
      singleDatePicker: false,
      format: 'MM/DD/YYYY',
      startDate: global.moment(),
      endDate: global.moment()
    });
    $('input.daterangepicker-single').daterangepicker({
      singleDatePicker: true,
      format: 'MM/DD/YYYY',
      startDate: global.moment(),
      endDate: global.moment()
    });
    return this;
  };

}).call(this);
