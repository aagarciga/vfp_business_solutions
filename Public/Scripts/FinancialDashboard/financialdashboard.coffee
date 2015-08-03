global = window
$ = global.jQuery
App = global.App
dandelion = global.dandelion

FinancialDashboard = dandelion.namespace('App.FinancialDashboard', global)
FinancialDashboard.status = {}
FinancialDashboard.dictionaries = {}
FinancialDashboard.htmlBindings = {}
FinancialDashboard.functions = {}
FinancialDashboard.functions.formatToCurrency = (value, separator = ',')->
  strValue = value.toString()
  offset = 3
  if strValue.includes('.')
    offset += strValue.slice(strValue.indexOf('.')).length
  if strValue.length > 3
    result = strValue.slice(0, -1*offset) + separator + strValue.slice(-1*offset)
    if strValue.length > 6
      result.slice(0, -1*(offset+4)) + separator + result.slice(-1*(offset+4))
    else
      result
  else
    strValue
FinancialDashboard.eventHandlers = {}
FinancialDashboard.init = (chartData) ->
  chart = AmCharts.makeChart( "financial-chart",{
    'type': "serial",
    'dataProvider': chartData,
    'creditsPosition': "bottom-right",
    'categoryField': "net",
    'plotAreaBorderAlpha': 0,
    'balloonText': "[[title]]<br><span style='font-size:14px'><b>[[value]]</b> ([[percents]]%)</span>",
    'categoryAxis':
      'gridAlpha': 0.1,
      'axisAlpha': 0,
      'axisColor': '#444',
      'gridPosition': "start",
      'titleBold': true,
      'labelsEnabled': false,
      'title': "NET: $ " + FinancialDashboard.functions.formatToCurrency(chartData[0].net)
#    'valueAxis':
#      'stackType': "regular",
#      'gridAlpha': 0.1,
#      'axisAlpha': 0,
#      'labelsEnabled': false
    'valueAxes': [ {
      'stackType': "regular",
      'gridAlpha': 0.1,
      'axisAlpha': 0,
      'labelsEnabled': false
    } ]
    'graphs':[
      {
        'title': "Account Payable",
        'color': '#FFFFFF',
        'labelText': "$ [[value]]"
        'valueField': "ap",
        'type': "column",
        'lineAlpha': 0,
        'fillAlphas': 1,
        'lineColor': "#cc3333",
        'balloonText': "<b><span style='color:#cc3333'>[[title]]</b></span><br><span style='font-size:14px'>$ [[value]]: <b> [[percents]]%</b></span>",
        'labelPosition': "middle"
      },
      {
        'title': "Work in Process",
        'color': '#FFFFFF',
        'labelText': "$ [[value]]"
        'valueField': "wip",
        'type': "column",
        'lineAlpha': 0,
        'fillAlphas': 1,
        'lineColor': "#cccc33",
        'balloonText': "<b><span style='color:#cccc33'>[[title]]</b></span><br><span style='font-size:14px'>$ [[value]]: <b> [[percents]]%</b></span>",
        'labelPosition': "middle"
      },
      {
        'title': "Inventory",
        'color': '#FFFFFF',
        'labelText': "$ [[value]]"
        'valueField': "inventory",
        'type': "column",
        'lineAlpha': 0,
        'fillAlphas': 1,
        'lineColor': "#3399cc",
        'balloonText': "<b><span style='color:#3399cc'>[[title]]</b></span><br><span style='font-size:14px'>$ [[value]]: <b> [[percents]]%</b></span>",
        'labelPosition': "middle"
      },
      {
        'title': "Cash",
        'color': '#FFFFFF',
        'labelText': "$ [[value]]"
        'valueField': "cash",
        'type': "column",
        'lineAlpha': 0,
        'fillAlphas': 1,
        'lineColor': "#006633",
        'balloonText': "<b><span style='color:#006633'>[[title]]</b></span><br><span style='font-size:14px'>$ [[value]]: <b> [[percents]]%</b></span>",
        'labelPosition': "middle"
      },
      {
        'title': "Account Receivable",
        'color': '#FFFFFF',
        'labelText': "$ [[value]]"
        'valueField': "ar",
        'type': "column",
        'lineAlpha': 0,
        'fillAlphas': 1,
        'lineColor': "#99cc66",
        'balloonText': "<b><span style='color:#99cc66'>[[title]]</b></span><br><span style='font-size:14px'>$ [[value]]: <b> [[percents]]%</b></span>",
        'labelPosition': "middle"
      }
    ]
    'legend':
      'align': "center",
      'markerType': "square",
      'horizontalGap': 10,
      'labelWidth': 150,
      'position': 'right',
      'reversedOrder': true
    'export':
      'enabled': true
  })

