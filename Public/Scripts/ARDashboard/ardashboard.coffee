global = window
$ = global.jQuery
App = global.App
dandelion = global.dandelion

ARDashboard = dandelion.namespace('App.ARDashboard', global)
ARDashboard.status = {}
ARDashboard.dictionaries = {}
ARDashboard.htmlBindings = {}
ARDashboard.functions = {}
ARDashboard.functions.formatToCurrency = (value, separator = ',')->
  strValue = value.toString()
  offset = 3
  if not (strValue.indexOf('.') == -1)
    offset += strValue.slice(strValue.indexOf('.')).length
  if strValue.length > 3
    result = strValue.slice(0, -1*offset) + separator + strValue.slice(-1*offset)
    if strValue.length > 6
      result.slice(0, -1*(offset+4)) + separator + result.slice(-1*(offset+4))
    else
      result
  else
    strValue
ARDashboard.eventHandlers = {}
ARDashboard.eventHandlers.onClickGraph = (event) ->
  console.log(event)
ARDashboard.eventHandlers.onHoverGraph = (event) ->
  console.log(event)
ARDashboard.init = () ->

