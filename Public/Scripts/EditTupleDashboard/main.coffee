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


EditTupleDashboard.init = () ->
  EditTupleDashboard.functions.bindEventHandlers()
  @