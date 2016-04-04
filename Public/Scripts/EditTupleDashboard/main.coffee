global = window
$ = global.jQuery
App = global.App
dandelion = global.dandelion

EditTupleDashboard = dandelion.namespace('App.EditTupleDashboard', global)

# Statuses Declaration
#-----------------------------------------------------------------------------------------------------------------------
EditTupleDashboard.status = {}

# Dictionaries Declaration
#-----------------------------------------------------------------------------------------------------------------------
EditTupleDashboard.dictionaries = {}

EditTupleDashboard.htmlBindings = {}

# Functions Declaration
#-----------------------------------------------------------------------------------------------------------------------
EditTupleDashboard.functions = {}

EditTupleDashboard.functions.bindEventHandlers = ->
  @

# Event Handlers Declaration
#-----------------------------------------------------------------------------------------------------------------------
EditTupleDashboard.eventHandlers = {}


EditTupleDashboard.init = (fieldsDefinition) ->
  EditTupleDashboard.status.fieldsDefinition = $.parseJSON(fieldsDefinition)
  EditTupleDashboard.functions.bindEventHandlers()

  $('input.daterangepicker').daterangepicker(
    singleDatePicker: false
    format: 'MM/DD/YYYY'
    startDate: global.moment()
    endDate: global.moment()
  )
  $('input.daterangepicker-single').daterangepicker(
    singleDatePicker: true
    format: 'MM/DD/YYYY'
    startDate: global.moment()
    endDate: global.moment()
  )
  @